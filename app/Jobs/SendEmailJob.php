<?php

namespace App\Jobs;

use App\Mail\QuoteMail;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldBeUnique;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Queue\SerializesModels;

class SendEmailJob implements ShouldQueue
{
    use Dispatchable, InteractsWithQueue, Queueable, SerializesModels;

    /**
     * Create a new job instance.
     *
     * @return void
     */
    public function __construct($send_mail)
    {
        //
        $this->send_mail = $send_mail;
    }

    /**
     * Execute the job.
     *
     * @return void
     */
    public function handle()
    {
        //
//        Mail::to('nomanimtiaz2019@icloud.com')->send(new \App\Mail\QuoteMail($details));
        $email = new QuoteMail($this->send_mail);
        Mail::to('arsalkamoka786@gmail.com')->send($email);
    }
}
