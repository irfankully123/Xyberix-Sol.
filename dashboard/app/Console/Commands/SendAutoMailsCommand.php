<?php

namespace App\Console\Commands;

use App\Mail\SendAutoMail;
use App\Models\AutoMail;
use Illuminate\Console\Command;
use Illuminate\Support\Facades\Mail;

class SendAutoMailsCommand extends Command
{
    protected $signature = 'send:auto-mails';
    protected $description = 'Send auto emails to all clients';

    public function handle()
    {
        $chunkSize = 100;

        AutoMail::select('id','email', 'name')->chunk($chunkSize, function ($autoMails) {
            foreach ($autoMails as $autoMail) {
                Mail::to($autoMail->email)->send(new SendAutoMail($autoMail->name));
            }
            AutoMail::whereIn('id', $autoMails->pluck('id'))->delete();
        });


        $this->info('Auto-mail sent successfully!');
    }
}
