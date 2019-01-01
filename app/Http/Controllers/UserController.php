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

    public function edit(Request $request)
    {
        $user = User::where('id', Auth::user()->id)->firstOrFail();
        $user->name = $request->name;
        $user->bio = $request->bio;
        if ($request->password1 != NULL & $request->password2 != NULL)
        {
            if ($request->password1 == $request->password2)
            {
                $user->password = bcrypt($request->password1);
            }
            else
            {
                $error = "Passwords do not match ! Please try again";
                return view('user.profile')->with('error', $error);
            }
        }
        $user->gender = $request->gender;
        $user->religion = $request->religion;
        if ($request->hasFile('face'))
        {
            $file = $request->face;
            $path = $file->store('/public/face');
            $user->face = $path;

        }
        if ($request->hasFile('palm'))
        {
            $file = $request->palm;
            $path = $file->store('/public/palm');
            $user->face = $path;
        }
        if ($request->hasFile('verification'))
        {
            $file = $request->verification;
            $path = $file->store('/public/verification');
            $user->face = $path;
        }
        return view('user.profile')->with('success', 'Details has been updated.');
    }
}
