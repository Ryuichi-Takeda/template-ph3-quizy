<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Prefecture;
use App\Question;
// use App\Choice;

class AdminController extends Controller
{
    public function show()
    {
        $prefectures = Prefecture::all();
        return view('admin', ['prefectures' => $prefectures]);
    }
    public function add(Request $request)
    {
        return view('adminAdd');
    }
    public function create(Request $request)
    {
        $this->validate($request, Prefecture::$rules);
        $prefecture = new Prefecture();
        $form = $request->all();
        unset($form['_token_']);
        $prefecture->fill($form)->save();
        return redirect('./admin');
    }
    public function edit(Request $request)
    {
        $id = $request->id;
        $form = Prefecture::find($request->id);
        $prefecture = Prefecture::where('id',$request->id)->get();
        return view('adminEdit', ['form'=>$form,'prefecture' => $prefecture]);
    }
    public function update(Request $request)
    {
        $id = $request->id;
        $this->validate($request, Prefecture::$rules);
        $prefecture = Prefecture::find($request->id);
        $form = $request->all();
        unset($form['_token_']);
        $prefecture->fill($form)->save();
        return redirect('./admin');
    }
    public function delete(Request $request)
    {
        $id = $request->id;
        return view('adminDelete');
    }
    public function remove(Request $request)
    {
        $id = $request->id;
        Prefecture::find($request->id)->delete();
        return redirect('./admin');
    }
    public function showQuestion($prefecture_id)
    {
        $prefecture = Prefecture::with('questions')->where('id',$prefecture_id)->get();
        return view('adminQuestion',['prefecture'=>$prefecture,'prefecture_id'=>$prefecture_id]);
    }

    public function questionAdd($prefecture_id)
    {
        return view('adminQuestionAdd',['prefecture_id'=>$prefecture_id]);
    }
    // public function questionCreate(Request $request)
    // {
    //     $this->validate($request, Prefecture::$rules);
    //     $prefecture = new Prefecture();
    //     $form = $request->all();
    //     unset($form['_token_']);
    //     $prefecture->fill($form)->save();
    //     return redirect('./admin');
    // }
    public function questionEdit($prefecture_id,$question_id)
    {
        return view('adminQuestionEdit',['prefecture_id'=>$prefecture_id,'question_id'=>$question_id]);
    }

    public function questionDelete($prefecture_id,$question_id)
    {
        return view('adminQuestionDelete',['prefecture_id'=>$prefecture_id,'question_id'=>$question_id]);
    }

    public function questionRemove($prefecture_id,$question_id)
    {
        Question::where('id',$question_id)->delete();
        return redirect('./admin/question/' . $prefecture_id);
    }

    public function showChoice($prefecture_id,$question_id)
    {
        $prefecture = Prefecture::where('id',$prefecture_id)->get();
        return view('adminChoice',['prefecture_id'=>$prefecture_id,'question_id'=>$question_id,'prefecture'=>$prefecture]);
    }
}
