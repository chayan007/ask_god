<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Mail\SendMailer;

class PublicController extends Controller
{
    public function sendFeedback(Request $request)
    {
        $name = $request->name;
        $email = $request->email;
        $message = $request->message;

        Mail::to('sonicxxx7@gmail.com')->send(new SendMailer($name, $email, $message));
        return back();
    }
}
