<?php

namespace App\Jobs;

use Illuminate\Bus\Queueable;
use App\Mail;
use Illuminate\Queue\SerializesModels;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;

class AnswerPodcast implements ShouldQueue
{
    use Dispatchable, InteractsWithQueue, Queueable, SerializesModels;
    protected $user, $lord, $email;

    /**
     * Create a new job instance.
     *
     * @return void
     */
    public function __construct($user, $lord, $email)
    {
        $this->user = $user;
        $this->lord = $lord;
        $this->email = $email;
    }

    /**
     * Execute the job.
     *
     * @return void
     */
    public function handle()
    {
        Mail::to($this->email)->send(new WelcomeMailer($this->user, $this->lord));
    }
}
