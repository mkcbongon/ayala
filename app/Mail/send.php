<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class Send extends Mailable
{
    use Queueable, SerializesModels;

    public $data;
    public $message; // Add this property

    /**
     * Create a new message instance.
     *
     * @param  array  $data
     * @param  string $message
     * @return void
     */
    public function __construct($data, $message) // Modify the constructor to accept $message
    {
        $this->data = $data;
        $this->message = $message; // Assign $message to the property
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->from('potkira316@gmail.com')
                    ->markdown('emails.approved')
                    ->subject('Property Inquiries')
                    ->with([
                        'message' => $this->message, // Use $message here
                    ]);
    }
}
