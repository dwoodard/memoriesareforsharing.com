<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Queue\SerializesModels;

class ContactFormSubmission extends Mailable
{
    use Queueable, SerializesModels;

    public array $formData;

    public function __construct(array $formData)
    {
        $this->formData = $formData;
    }

    public function envelope(): Envelope
    {
        $name = trim(($this->formData['first_name'] ?? '') . ' ' . ($this->formData['last_name'] ?? ''));

        return new Envelope(
            subject: 'Memories Website Submission : New Inquiry from ' . $name . ' — Memories Are For Sharing',
            replyTo: [
                new \Illuminate\Mail\Mailables\Address(
                    $this->formData['email'],
                    $name
                ),
            ],
        );
    }

    public function content(): Content
    {
        return new Content(
            view: 'emails.contact',
            with: ['data' => $this->formData],
        );
    }
}
