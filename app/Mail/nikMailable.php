<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Queue\SerializesModels;

class nikMailable extends Mailable
{
    use Queueable, SerializesModels;

    public $data; 


    public function __construct($data)
    {
        $this->data = $data;
    }

    public function build()
    {
        return $this->view('emails.plantilla') // Asegúrate de que este sea el nombre correcto de tu vista
                    ->with(['data' => $this->data]); // Pasamos la variable a la vista
    }

    
    public function envelope(): Envelope
    {
        return new Envelope(
            subject: 'Propuestas de Capacitación',
        );
    }

   
    public function content(): Content
    {
        return new Content(
            view: 'emails.plantilla',
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
