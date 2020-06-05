<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class ManetTemplate extends Mailable
{
    use Queueable, SerializesModels;

    public $msg;
    public $subject;

    public function __construct($message, $subject)
    {
        $this->msg = $message;
        $this->sub = $subject;


    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {   
        return $this->subject($this->sub)->view('templates.manet');
    }
}
