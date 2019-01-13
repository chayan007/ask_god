<?php

namespace App\Http\Controllers;

use App\Lord;
use Illuminate\Http\Request;

class GodController extends Controller
{
    public function dashboard()
    {
        return view('god.dashboard');
    }

    public function showGods()
    {
        $gods = Lord::paginate(15);
        return view('user.gods', ['gods' => $gods]);
    }
}
