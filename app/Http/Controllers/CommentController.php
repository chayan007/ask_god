<?php

namespace App\Http\Controllers;

use App\Comment;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CommentController extends Controller
{
    public function addComment(Request $request)
    {
        $comment = new Comment();
        $comment->comment = $request->comment;
        $comment->user = Auth::user()->id;
        $comment->save();
        return back()->with('status','You have commented successfully');
    }

    public function addReply(Request $request, $commentId)
    {
        $comment = new Comment();
        $comment->comment = $request->comment;
        $comment->user = Auth::user()->id;
        $comment->hook = $commentId;
        $comment->save();
        return back()->with('status','You have replied successfully');
    }
    public function deleteComment($id)
    {
        $comment = Comment::where('id', $id)->firstOrFail();
        $comment->delete();
        return back()->with('status','Comment has been deleted successfully !');
    }
}
