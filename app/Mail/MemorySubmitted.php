<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Mail\Mailables\Attachment;
use Illuminate\Queue\SerializesModels;

class MemorySubmitted extends Mailable
{
    use Queueable, SerializesModels;

    public function __construct(
        public array $data,
        public $photo = null
    ) {}

    public function envelope(): Envelope
    {
        return new Envelope(
            subject: 'New Memory from ' . $this->data['name'],
        );
    }

    public function content(): Content
    {
        return new Content(
            view: 'emails.memory-submitted',
        );
    }

    public function attachments(): array
    {
        if ($this->photo) {
            return [
                Attachment::fromPath($this->photo->getRealPath())
                    ->as($this->photo->getClientOriginalName())
                    ->withMime($this->photo->getMimeType()),
            ];
        }
        return [];
    }
}