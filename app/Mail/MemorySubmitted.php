<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Mail\Mailables\Attachment;
use Illuminate\Queue\SerializesModels;
use Illuminate\Support\Facades\Storage;

class MemorySubmitted extends Mailable
{
    use Queueable, SerializesModels;

    public array $data;

    public function __construct(array $data)
    {
        $this->data = $data;
    }

    public function envelope(): Envelope
    {
        return new Envelope(
            subject: "💌 New Memory Shared — {$this->data['name']} ({$this->data['year']})",
        );
    }

    public function content(): Content
    {
        return new Content(
            view: 'emails.memory-submitted',
            with: ['data' => $this->data],
        );
    }

    public function attachments(): array
    {
        $attachments = [];

        if ($this->data['photoPath'] && Storage::disk('local')->exists($this->data['photoPath'])) {
            $attachments[] = Attachment::fromStorage($this->data['photoPath'])
                ->as('photo-from-' . str()->slug($this->data['name']) . '.jpg')
                ->withMime('image/jpeg');
        }

        return $attachments;
    }
}
