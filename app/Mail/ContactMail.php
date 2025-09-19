<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Queue\SerializesModels;

class ContactMail extends Mailable
{
    use Queueable, SerializesModels;

    /**
     * Create a new message instance.
     */
    public function __construct(
        public array $data
    ) {}

    /**
     * Get the message envelope.
     */
    public function envelope(): Envelope
    {
        return new Envelope(
            subject: 'Nouvelle demande de devis sur le site',
            from: new \Illuminate\Mail\Mailables\Address($this->data['email'], $this->data['name']),
            replyTo: [$this->data['email']]
        );
    }

    /**
     * Get the message content definition.
     */
    public function content(): Content
    {
        return new Content(
            htmlString: '
                <h1>Nouvelle demande de devis</h1>
                <p><strong>Nom et prénom:</strong> ' . $this->data['name'] . '</p>
                <p><strong>Téléphone:</strong> ' . $this->data['phone'] . '</p>
                <p><strong>E-mail:</strong> ' . $this->data['email'] . '</p>
                <p><strong>Message:</strong> ' . $this->data['message'] . '</p>
            ',
        );
    }

    /**
     * Get the attachments for the message.
     *
     * @return array<int, \Illuminate\Mail\Mailables\Attachment>
     */
    public function attachments(): array
    {
        return [];
    }
}
