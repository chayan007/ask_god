<?php

namespace App\Http\Controllers;

use App\Lord;
use Illuminate\Http\Request;

class LordController extends Controller
{
    public function addLord(Request $request)
    {
        $lord = new Lord();
        $lord->name = $request->name;
        $lord->description = $request->description;
        $lord->category = $request->category;
        $lord->slug =str_slug(substr($lord->name, 0, 10),'_');
        if ($request->hasFile('image'))
        {
            $file = $request->image;
            $path = $file->store('/public/lords');
            $lord->image = $path;
        }
        $lord->save();
        return back();
    }

    public function showForm()
    {
        return view('god.addLord');
    }

    public function showLords()
    {
        $lords = Lord::orderBy('created_at', 'desc')->paginate(20);
        return view('god.lords', ['lords' => $lords]);
    }

    public function deleteLord($id)
    {
        $lord = Lord::where('id', $id)->first();
        $lord->delete();
        return back();
    }
}
