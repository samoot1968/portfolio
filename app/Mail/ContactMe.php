<?php

namespace App\Mail;

use App\Http\Controllers\EmailController;
use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Support\Facades\Storage;



class ContactMe extends Mailable
{
    use Queueable, SerializesModels;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
          $file = Storage::get("CV.pdf");
          return $this->view('layouts.mail.mail')
          ->attach($file, [
            'as' => 'cv.pdf',
            'mime' => 'application/pdf',
        ]);

    }
}
