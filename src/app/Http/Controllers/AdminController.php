<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Prefecture;

class AdminController extends Controller
{
    public function show()
    {
        $prefectures = Prefecture::orderBy('order_id','asc')->get();
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
        return view('adminQuestion');
    }
    public function sort(Request $request)
    {
        $orderIds = explode(',', $request->listIds);
        foreach($orderIds as $key=>$orderId){
            $prefecture=Prefecture::find($orderId);
            $prefecture->order_id=$key+1;
            $prefecture->save();
        }
        return redirect('admin');
    }
}
