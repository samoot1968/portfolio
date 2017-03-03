<?php

namespace App\Http\Controllers;
use App\Mail\ContactMe;
use App\Mail\AdminMail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Storage;

class EmailController extends Controller
{
    //
    public function sendMail(Request $request){


      $email = $request->input('email');
      $emailArray = [$email ,'toomas.unt1968@gmail.com'];


      Mail::to('toomas.unt1968@gmail.com')->send(new AdminMail);

      

      Mail::to($email)->send(new ContactMe);
      return redirect()->to('/');
    }
}
