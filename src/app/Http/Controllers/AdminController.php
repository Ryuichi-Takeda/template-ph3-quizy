<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
// use App\Prefecture;
use App\Question;
class AdminController extends Controller
{
    public function show(){

        $questions = Question::with('choices')->get();

        return view ('admin',['questions'=>$questions]);
    }
}
