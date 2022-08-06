<?php

namespace App\Http\Controllers;
// use Illuminate\Support\Facades\DB;
use App\Question;
// use App\Choice;
use Illuminate\Http\Request;

class QuestionController extends Controller
{
    public function index($prefecture_id)
    {
        $questions = Question::all();
        return view('quizy',[
        'questions'=>$questions
    ]);
    }
}
