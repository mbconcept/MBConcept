<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Queue\SerializesModels;

class UserConfirmationMail extends Mailable
{
    use Queueable, SerializesModels;

    /**
     * Crée une nouvelle instance de message.
     */
    public function __construct(
        public array $data
    ) {}

    /**
     * Crée l'enveloppe du message.
     */
    public function envelope(): Envelope
    {
        return new Envelope(
            subject: 'Confirmation de votre demande de devis',
            from: new \Illuminate\Mail\Mailables\Address('contact@mbconcept-pro.fr', 'MB CONCEPT'),
        );
    }

    /**
     * Crée le contenu du message.
     */
    public function content(): Content
    {
        return new Content(
            htmlString: '
                <h1>Confirmation de votre demande</h1>
                <p>Bonjour ' . $this->data['name'] . ',</p>
                <p>Nous avons bien reçu votre demande de devis et vous remercions de votre intérêt pour nos services.</p>
                <p>Nous allons examiner votre projet et vous recontacterons dans les plus brefs délais pour en discuter plus en détail.</p>
                <br>
                <p>Cordialement,</p>
                <p>L\'équipe MB CONCEPT</p>
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
