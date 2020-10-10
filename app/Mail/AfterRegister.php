<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class AfterRegister extends Mailable
{
    use Queueable, SerializesModels;

    public $password;
    public $email;
    /**
     * Create a new message instance.
     *
     * @param string $pass
     */
    public function __construct(string $pass, string $email)
    {
        $this->password = $pass;
        $this->email = $email;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {

        return $this->view('mail')->to($this->email)->subject('Регистрация');
    }
}
