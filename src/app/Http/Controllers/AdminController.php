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
    public function showQUestion(Request $request)
    {
        $id = $request->id;
        // $prefecture = Prefecture::find($request->id);
        $prefecture = Prefecture::with('questions')->where('id',$id)->get();

        return view('adminQuestion',['prefecture'=>$prefecture,'id'=>$id]);
    }

    public function questionAdd(Request $request)
    {
        return view('adminQuestionAdd');
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
}
