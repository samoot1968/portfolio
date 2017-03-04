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
    public function sendMail(Form $request){

      $email = $request->input('email');

      Mail::to('toomas.unt1968@gmail.com')->send(new AdminMail);
      Mail::to($email)->send(new ContactMe);

      return redirect()->to('/')->with('message', 'Email Sent');;
    }
}
