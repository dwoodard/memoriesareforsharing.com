<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class StripeOrderNotification extends Mailable
{
    use Queueable;
    use SerializesModels;

    public function __construct(public array $order)
    {
    }

    public function envelope(): Envelope
    {
        return new Envelope(
            subject: 'New Memories Are For Sharing order — ' . ($this->order['amount_total_formatted'] ?? 'Order received'),
        );
    }

    public function content(): Content
    {
        return new Content(
            markdown: 'emails.stripe-order-notification',
            with: [
                'order' => $this->order,
            ],
        );
    }
}