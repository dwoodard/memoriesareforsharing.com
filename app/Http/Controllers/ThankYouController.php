<?php

namespace App\Http\Controllers;

use App\Mail\StripeCustomerConfirmation;
use App\Mail\StripeOrderNotification;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Cache;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Mail;
use Stripe\StripeClient;
use Throwable;

class ThankYouController extends Controller
{
    public function show(Request $request)
    {
        $sessionId = $request->query('session_id');
        $order = null;

        if (! $sessionId) {
            return view('thank-you', [
                'order' => null,
                'emailStatus' => 'missing_session',
            ]);
        }

        try {
            $stripe = new StripeClient(config('services.stripe.secret'));

            $session = $stripe->checkout->sessions->retrieve($sessionId, [
                'expand' => ['customer', 'payment_intent'],
            ]);

            $lineItems = $stripe->checkout->sessions->allLineItems($sessionId, [
                'limit' => 100,
            ]);

            $order = $this->buildOrderData($session, $lineItems);

            if ($order['payment_status'] === 'paid') {
                $this->sendOwnerNotificationOnce($sessionId, $order);
                $this->sendCustomerConfirmationOnce($sessionId, $order);
            }
        } catch (Throwable $e) {
            Log::error('Unable to process Stripe thank-you page email', [
                'session_id' => $sessionId,
                'message' => $e->getMessage(),
            ]);
        }

        return view('thank-you', [
            'order' => $order,
            'emailStatus' => 'processed',
        ]);
    }

    private function buildOrderData($session, $lineItems): array
    {
        $customer = $session->customer ?? null;
        $customerDetails = $session->customer_details ?? null;

        return [
            'session_id' => $session->id,
            'payment_intent' => is_object($session->payment_intent)
                ? $session->payment_intent->id
                : $session->payment_intent,

            'status' => $session->status,
            'payment_status' => $session->payment_status,

            'amount_total' => $session->amount_total,
            'amount_total_formatted' => $this->formatMoney($session->amount_total, $session->currency),
            'currency' => strtoupper($session->currency ?? 'usd'),

            'customer_name' => $customerDetails->name
                ?? $customer?->name
                ?? 'Customer',

            'customer_email' => $customerDetails->email
                ?? $session->customer_email
                ?? $customer?->email
                ?? null,

            'customer_phone' => $customerDetails->phone
                ?? $customer?->phone
                ?? null,

            'created_at' => Carbon::createFromTimestamp($session->created)
                ->timezone(config('app.timezone'))
                ->format('M j, Y g:i A'),

            'line_items' => collect($lineItems->data ?? [])->map(function ($item) {
                return [
                    'description' => $item->description,
                    'quantity' => $item->quantity,
                    'amount_total' => $item->amount_total,
                    'amount_total_formatted' => $this->formatMoney($item->amount_total, $item->currency),
                    'currency' => strtoupper($item->currency ?? 'usd'),
                ];
            })->values()->all(),

            'metadata' => json_decode(json_encode($session->metadata ?? []), true),
        ];
    }

    private function sendOwnerNotificationOnce(string $sessionId, array $order): void
    {
        $cacheKey = "stripe-owner-order-email-sent:{$sessionId}";

        if (Cache::has($cacheKey)) {
            return;
        }

        Mail::to('shalyce@memoriesareforsharing.com')
            ->send(new StripeOrderNotification($order));

        Cache::put($cacheKey, true, now()->addDays(30));
    }

    private function sendCustomerConfirmationOnce(string $sessionId, array $order): void
    {
        if (empty($order['customer_email'])) {
            return;
        }

        $cacheKey = "stripe-customer-order-email-sent:{$sessionId}";

        if (Cache::has($cacheKey)) {
            return;
        }

        Mail::to($order['customer_email'])
            ->send(new StripeCustomerConfirmation($order));

        Cache::put($cacheKey, true, now()->addDays(30));
    }

    private function formatMoney(?int $amount, ?string $currency): string
    {
        if ($amount === null) {
            return 'Not available';
        }

        return '$' . number_format($amount / 100, 2) . ' ' . strtoupper($currency ?? 'usd');
    }
}