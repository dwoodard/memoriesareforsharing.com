<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class StripeCustomerConfirmation extends Mailable
{
    use Queueable;
    use SerializesModels;

    public function __construct(public array $order)
    {
    }

    public function envelope(): Envelope
    {
        return new Envelope(
            subject: 'Your Memories Are For Sharing order is confirmed',
        );
    }

    public function content(): Content
    {
        return new Content(
            markdown: 'emails.stripe-customer-confirmation',
            with: [
                'order' => $this->order,
            ],
        );
    }
}