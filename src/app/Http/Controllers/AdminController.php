<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Prefecture;
// use App\Question;
class AdminController extends Controller
{
    public function show(){
        // $questions = Question::with('choices')->get();
        return view ('admin');
    }
    public function add(Request $request){
        // $questions = Question::with('choices')->get();
        return view ('adminAdd');
    }
    public function create(Request $request){
        $this->validate($request,Prefecture::$rules);
        $prefecture = new Prefecture();
        $form = $request->all();
        unset($form['_token_']);
        $prefecture->fill($form)->save();

        return redirect('./admin/add');

        // return['admin','prefecture'=>$prefecture];
        // $msg = $request->msg;
        // return view ('adminAdd',['msg'=>$msg]);
    }
}
