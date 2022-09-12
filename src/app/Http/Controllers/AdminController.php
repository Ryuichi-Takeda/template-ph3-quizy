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
        $prefectures = Prefecture::orderBy('order_id', 'asc')->get();
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
        $prefecture = Prefecture::where('id', $request->id)->get();
        return view('adminEdit', ['form' => $form, 'prefecture' => $prefecture]);
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
        $prefecture = Prefecture::with('questions')
            ->where('id', $prefecture_id)
            ->orderBy('order_id', 'asc')
            ->get();
        return view('adminQuestion', ['prefecture' => $prefecture, 'prefecture_id' => $prefecture_id]);
    }

    public function questionAdd($prefecture_id)
    {
        return view('adminQuestionAdd', ['prefecture_id' => $prefecture_id]);
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
    public function questionEdit($prefecture_id, $question_id)
    {
        return view('adminQuestionEdit', ['prefecture_id' => $prefecture_id, 'question_id' => $question_id]);
    }

    public function questionDelete($prefecture_id, $question_id)
    {
        return view('adminQuestionDelete', ['prefecture_id' => $prefecture_id, 'question_id' => $question_id]);
    }

    public function questionRemove($prefecture_id, $question_id)
    {
        Question::where('id', $question_id)->delete();
        return redirect('./admin/question/' . $prefecture_id);
    }

    public function showChoice($prefecture_id, $question_id)
    {
        return view('adminChoice', ['prefecture_id' => $prefecture_id, 'question_id' => $question_id]);
    }
    public function sortPrefecture(Request $request)
    {
        $orderIds = explode(',', $request->listIds);
        foreach ($orderIds as $key => $orderId) {
            $prefecture = Prefecture::find($orderId);
            $prefecture->order_id = $key + 1;
            $prefecture->save();
        }
        return redirect('admin');
    }
    public function sortQuestion(Request $request)
    {
        $orderIds = explode(',', $request->listIds);
        foreach ($orderIds as $key => $orderId) {
            $question = Question::find($orderId);
            $question->order_id = $key + 1;
            $question->save();
        }
        return redirect('admin');
    }

    public function imageUpload(Request $request,$prefecture_id)
    {
        $file = $_FILES['img'];
        $filename = basename($file['name']);
        $tmp_path = $file['tmp_name'];
        $file_err = $file['error'];
        $filesize = $file['size'];
        $path= public_path('img');
        $upload_dir = $path . '/';
        $save_filename = date('YmdHis') . $filename;
        move_uploaded_file($tmp_path,$upload_dir.$save_filename);

        $item = new Question;
        $item->order_id=5;
        $item->img='a';
        $item->prefecture_id=1;
        $item->save();
        Question::insert([
            'order_id'=>5,
            'img'=>$save_filename,
            'prefecture_id'=>$prefecture_id
        ]);
    }
}
