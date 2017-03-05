<?php

namespace App\Http\Controllers;
use App\Mail\ContactMe;
use App\Mail\AdminMail;
use Illuminate\Http\Response;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Storage;
use App\Http\Requests\Form;

class EmailController extends Controller
{
    //
    public function sendMail(){


      Mail::to('toomas.unt1968@gmail.com')->send(new AdminMail);

      //return redirect()->to('/')->with('message', 'Email Sent');;
    }
}
