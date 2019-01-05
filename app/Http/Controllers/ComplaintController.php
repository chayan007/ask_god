<?php

namespace App\Http\Controllers;

use App\Comment;
use App\Complaint;
use App\Reply;
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
        $complaint->slug = str_slug(substr($complaint->complaint, 0, 20),'_');
        $complaint->save();
        return back()->with('status', 'Complaint has been lodged for justice !');
    }

    public function myComplaints()
    {
        $complaints = Complaint::where('user', Auth::user()->id)->get();
        $comments = Comment::all();
        return view('user.myComplaints', [
            'complaints' => $complaints,
            'comments' => $comments,
        ]);
    }

    public function complaints()
    {
        $complaints = Complaint::all()->orderBy('created_at')->simplePaginate(10);
        $comments = Comment::all();
        return view('user.myComplaints', [
            'complaints' => $complaints,
            'comments' => $comments,
        ]);
    }

    public function seeComplaints()
    {
        $complaints = Complaint::latest()->paginate(10);
        return view('user.complaints',['complaints' => $complaints]);
    }

    public function getComplaint($slug)
    {
        $complaint = Complaint::where('slug', $slug)->firstOrFail();
        $comments = Comment::where('complaint', $complaint->id)->get();
        return view ('user.complaint', [
            'complaint' => $complaint,
            'comments' => $comments,
            ]);
    }
}
