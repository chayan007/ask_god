<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
    public function profile()
    {
        $user = User::where('id', Auth::user()->id)->firstOrFail();
        return view('user.profile', ['user' => $user]);
    }
}
