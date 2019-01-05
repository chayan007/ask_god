<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class GodController extends Controller
{
    public function dashboard()
    {
        return view('god.dashboard');
    }
}
