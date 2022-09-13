<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class OnlineapplyMail extends Mailable
{
    use Queueable, SerializesModels;
    public studentbasicinfo $studentbasicinfo;
    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($studentbasicinfo)
    {
       $this->studentbasicinfo= $studentbasicinfo;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->subject('Application Confirmation')->view('mails.onlineapply-mail');
    }
}
