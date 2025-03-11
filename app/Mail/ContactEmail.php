<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Queue\SerializesModels;

class ContactEmail extends Mailable
{
    use Queueable, SerializesModels;

    public string $name;
    public string $email;
    public string $phone_number;
    public string $contactMassage;
    /**
     * Create a new message instance.
     */
    public function __construct(string $name, string $email, string $phone_number, string $message)
    {
        $this->name = $name;
        $this->email = $email;
        $this->phone_number = $phone_number;
        $this->contactMassage = $message;
    }

    /**
     * Get the message envelope. 
     */
    public function envelope(): Envelope
    {
        return new Envelope(
            subject: 'New Message From' . $this->name,
        );
    }

    /**
     * Get the message content definition.
     */
    public function content(): Content
    {
        return new Content(
            view: 'emails.contact',
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
