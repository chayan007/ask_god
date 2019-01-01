<?php

namespace App\Http\Controllers;

use App\Complaint;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ComplaintController extends Controller
{
    public function showComplaintForm()
    {
        return view('user.addComplaint');
    }

    public function addComplaint(Request $request)
    {
        $complaint = new Complaint();
        $complaint->complaint = $request->complaint;
        $complaint->user = Auth::user()->id;
        $complaint->save();
        return back()->with('status', 'Complaint has been lodged for justice !');
    }
}
