<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Mail\Mailables\Envelope;
class UserMessage extends Mailable
{
    use Queueable, SerializesModels;

  

     public $adminMessage;
    public $subject;

    /**
     * Create a new message instance.
     *
     * @param string $adminMessage The message content from the admin
     * @param string $subject The subject of the email
     */
    public function __construct($adminMessage, $subject)
    {
       
        $this->adminMessage = $adminMessage;
        $this->subject = $subject;
    }

    /**
     * Get the message envelope.
     */
    public function envelope()
    {
        return new Envelope(
            subject: $this->subject,
        );
    }

    /**
     * Get the message content definition.
     */
    

    /**
     * Get the attachments for the message.
     *
     * @return array<int, \Illuminate\Mail\Mailables\Attachment>
     */
    public function attachments()
    {
        return [];
    }

    public function build()
    {
        // Specify the view and pass the data to it
        return $this->view('admin.user_message')
                    ->with([
                        'adminMessage' => $this->adminMessage,
                    ])
                    ->subject($this->subject);
    }
}
