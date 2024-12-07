<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Queue\SerializesModels;

class WelcomeEmail extends Mailable
{
    use Queueable, SerializesModels;
    // public $msg;
    // public $sub;
    public $payment;


    /**
     * Create a new message instance.
     */
    public function __construct(
        $payment, 
        // $msg, $subject
        )
    {
        // $this->msg = $msg;
        // $this->sub = $subject;
        $this->payment = $payment;

    }

    /**
     * Get the message envelope.
     */
    public function envelope(): Envelope
    {
        return new Envelope(
            subject: $this->subject,
        );
    }

    /**
     * Get the message content definition.
     */
    public function content(): Content
    {
        return new Content(
            view: 'user.mail.mail',
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

    public function build()
    {
        return $this->view('emails.payment_success')
                    ->subject('Payment Successful')
                    ->with([
                        'productName' => $this->payment->product_name,
                        'amount' => (float) $this->payment->amount / 100, // Convert cents to dollars
                        'currency' => strtoupper($this->payment->currency),
                    ]);
    }
}
