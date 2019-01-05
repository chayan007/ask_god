<?php

namespace App\Http\Controllers;

use App\Question;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class QuestionController extends Controller
{

    public function showForm()
    {
        return view('user.addQuestion');
    }

    public function myQuestions()
    {
        $questions = Question::where('user', Auth::user()->id)->get();
        return view('user.myQuestions', ['questions' => $questions]);
    }
    public function addQuestion(Request $request)
    {
        $question = new Question();
        $question->question = $request->question;
        $question->user = Auth::user()->id;
        $question->slug = str_slug(substr($question->question, 0, 10),'_');
        $question->save();
        return back()->with('status', 'Question will be answered by God soon');
    }

    public function deleteQuestion($id)
    {
        $question = Question::where('id', $id)->firstOrFail();
        $question->delete();
        return back()->with('status', 'Question was deleted Successfully');
    }

    public function addAnswer(Request $request, $id)
    {
        $question = Question::where('id', $id);
        $question->answer = $request->answer;
        $question->lord = $request->lord_id;
        $question->save();
        return back();
    }
}
