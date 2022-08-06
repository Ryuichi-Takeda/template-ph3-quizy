<?php

namespace App\Http\Controllers;

use App\Question;
use Illuminate\Http\Request;

class QuestionController extends Controller
{
    public function index($prefecture_id)
    {
        $questions = Question::with('choices')->where('prefecture_id',$prefecture_id)->get();
        // dd($questions);
        return view('quizy',[
        'questions'=>$questions
    ]);
    }
}
