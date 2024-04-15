<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class UploadStatusNotification extends Mailable
{
    use Queueable, SerializesModels;

    public $upload;
    public $message;

    /**
     * Create a new message instance.
     *
     * @param  array  $upload
     * @param  string $message
     * @return void
     */
    public function __construct($upload, $message)
    {
        $this->upload = $upload;
        $this->message = $message;
    }


    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->from('potkira316@gmail.com')
                    ->markdown('emails.upload_status_notification')
                    ->subject('Property Inquiries')
                    ->with([
                        'message' => $this->message,
                    ]);
    }

}
