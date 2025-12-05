<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Queue\SerializesModels;

class Newslettersclass extends Mailable
{
    use Queueable, SerializesModels;
    public $utilisateur;
    /**
     * Create a new message instance.
     */
    public function __construct(Array $utilisateur)
    {
        $this->utilisateur = $utilisateur;
    }

    /**
     * Get the message envelope.
     */
    public function envelope(): Envelope
    {
        return new Envelope(
            // from: new Address('yannkone0@gmail.com', 'Yann Kone'),
            subject: 'Newsletters',
        );
    }

    /**
     * Get the message content definition.
     */
    public function content(): Content
    {
        return new Content(
            view: 'emails.newslettermail',
            with: [
                'utilisateur' => $this->utilisateur,
            ],
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
