<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use Illuminate\Support\Facades\Auth;

class MessageController extends Controller
{
    public function getShareLink()
    {
        $user = Auth::user()->username;
        $link = 'ask_god.test/people/'.$user;
        return view('user.share', ['link' => $link]);
    }

    public function sendMessage(Request $request)
    {

    }

    public function getMessages()
    {

    }

    public function sendReply(Req $request)
    {

    }
}
