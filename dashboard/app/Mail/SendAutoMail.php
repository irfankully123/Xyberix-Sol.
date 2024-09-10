<?php

namespace App\Mail;

use App\Models\MailTemplate;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Queue\SerializesModels;

class SendAutoMail extends Mailable
{
    use Queueable, SerializesModels;

    public string $user_name;

    public function __construct(string $user_name) {
        $this->user_name = $user_name;
    }

    public function build(): SendAutoMail
    {
        $template=MailTemplate::latest()->firstOrFail();

        return $this->view('emails.send-notification', [
            'user_name' => $this->user_name
        ])->subject($template->subject);
    }

}
