<?php

namespace App\Http\Controllers;

use App\Question;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class QuestionController extends Controller
{
    public function addQuestion(Request $request)
    {
        $question = new Question();
        $question->question = $request->question;
        $question->user = Auth::user()->id;
        $question->slug = str_slug(substr($question->question, 0, 10),'_');
        $question->save();
        return back()->with('status', 'Question will be answered by God soon');
    }
}
