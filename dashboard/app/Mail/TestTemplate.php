<?php

namespace App\Mail;

use App\Models\MailTemplate;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Queue\SerializesModels;

class TestTemplate extends Mailable
{
    use Queueable, SerializesModels;

    public function build(): TestTemplate
    {
        $template = MailTemplate::latest()->firstOrFail();
        return $this->view('emails.auto-mail')
            ->subject($template->subject);
    }
}
