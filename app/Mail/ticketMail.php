<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Queue\SerializesModels;
use Illuminate\Support\Facades\Auth;

class ticketMail extends Mailable
{
    use Queueable, SerializesModels;

    public $userName;
    public $ticketId;
    public $eventPrice;
    /**
     * Create a new message instance.
     */
    public function __construct($name, $ticket, $price)
    {
        $this->userName = $name;
        $this->ticketId = $ticket;
        $this->eventPrice = $price;
    }

    /**
     * Get the message envelope.
     */
    public function envelope(): Envelope
    {
        return new Envelope(
            subject: 'Ticket Mail',
        );
    }

    /**
     * Get the message content definition.
     */
    public function content(): Content
    {

        return new Content(
            view: 'tickets',
            with: [
                'userName' => $this->userName,
                'ticketId' => $this->ticketId,
                'eventPrice' => $this->eventPrice,
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
