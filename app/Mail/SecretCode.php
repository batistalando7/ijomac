<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class SecretCode extends Mailable
{
    use Queueable, SerializesModels;

    public $secretCode;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($secretCode)
    {
        $this->secretCode = $secretCode;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->view('emails.secretCode')
                    ->subject('Código Secreto - IJOMAC');
    }
}
