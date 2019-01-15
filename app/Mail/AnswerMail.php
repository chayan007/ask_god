<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use App\Mail;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;

class AnswerMail extends Mailable
{
    use Queueable, SerializesModels;
    public $user, $lord;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($user, $lord)
    {
        $this->user = $user;
        $this->lord = $lord;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->view('emails.answer', ['user' => $this->user, 'lord' => $this->lord]);
    }
}
