<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Prefecture;
// use App\Question;
class AdminController extends Controller
{
    public function show()
    {
        $prefectures = Prefecture::all();
        return view('admin',['prefectures'=>$prefectures]);
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
        return redirect('./admin/add');
    }
    public function edit(Request $request)
    {
        $id=$request->id;
        // dd($id);
        $prefecture = Prefecture::find($request->id);
        dd($prefecture);
        
        return view('adminEdit',['form'=>$prefecture]);
    }
    public function update(Request $request)
    {
        $id=$request->id;
        $this->validate($request,Prefecture::$rules);
        $prefecture = Prefecture::find($request->id);
        $form = $request->all();
        unset($form['_token_']);
        $prefecture->fill($form)->save();
        return redirect('./admin');
    }
    public function delete(Request $request)
    {
        $id=$request->id;
        // dd($id);
        return view('adminDelete');
    }
    public function remove(Request $request)
    {
        $id=$request->id;
        // dd($id);
        Prefecture::find($request->id)->delete();
        return redirect('./admin');
    }


}
