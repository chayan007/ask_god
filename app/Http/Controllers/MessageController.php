<?php

namespace App\Http\Controllers;

use App\Reply;
use Illuminate\Http\Request;
use App\User;
use App\Message;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class MessageController extends Controller
{
    public function getShareLink()
    {
        $user = Auth::user()->username;
        $link = 'http://www.theaskgod.com/people/'.$user;
        return view('user.share', ['link' => $link]);
    }

    public function sendMessage(Request $request, $username)
    {
        $message = new Message();
        $message->to = DB::table('users')->where('username', $username)->first()->id;
        $message->from = Auth::user()->id;
        $message->message = $request->message;
        $message->is_anonymous = $request->is_anonymous;
        $message->save();
        return redirect()->action('MessageController@getProfile', ['username' => $username]);
    }

    public function getInboxMessages()
    {
        $user = Auth::user()->id;
        $messages = Message::where('to', $user)->orderBy('created_at', 'desc')->get();
        $replies = Reply::where('from', $user)->get();
        return view('user.inbox', ['messages' => $messages, 'replies' => $replies]);
    }

    public function getOutboxMessages()
    {
        $messages = Message::where('from', Auth::user()->id)->get();
        $replies = Reply::where('to', Auth::user()->id)->get();
        return view('user.outbox', ['messages' => $messages, 'replies' => $replies]);
    }

    public function addReply(Request $request, $messageId)
    {
        $message = Message::where('id', $messageId)->firstOrFail();
        $reply = new Reply();
        $reply->message = $message->id;
        $reply->to = $message->from;
        $reply->reply = $request->reply;
        $reply->from = Auth::user()->id;
        $reply->save();
        return redirect()->action('MessageController@getInboxMessages');
    }

    public function getProfile($username)
    {
        $user = User::where('username', $username)->firstOrFail();
        return view('user.messageProfile', ['user' => $user]);
    }

    public function getAllMessages()
    {
        $messages = Message::paginate(20);
        $replies = Reply::all();
        return view('god.messages', [
            'messages' => $messages,
            'replies' => $replies,
        ]);
    }
}
