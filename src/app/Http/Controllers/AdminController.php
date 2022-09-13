<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Prefecture;
use App\Question;
// use App\Choice;

class AdminController extends Controller
{
    public function show_prefecture()
    {
        $prefectures = Prefecture::orderBy('order_id', 'asc')->get();
        return view('admin', ['prefectures' => $prefectures]);
    }
    public function add_prefecture(Request $request)
    {
        $prefectures = Prefecture::orderBy('order_id', 'asc')->get();
        return view('adminAdd', ['prefectures' => $prefectures]);
    }
    public function create_prefecture(Request $request)
    {
        $prefecture = $_POST['prefecture'];

        $max_order_id = Prefecture::max('order_id');
        Prefecture::insert([
            'order_id' => $max_order_id + 1,
            'prefecture' => $prefecture,
        ]);
        $prefectures = Prefecture::orderBy('order_id', 'asc')->get();
        return view('admin', ['prefectures' => $prefectures]);
    }
    public function edit_prefecture(Request $request, $prefecture_id)
    {
        $prefecture = Prefecture::where('id', $prefecture_id)->get();
        return view('adminEdit', ['prefecture' => $prefecture]);
    }
    public function update_prefecture(Request $request, $prefecture_id)
    {
        $title = $_POST['title'];
        Prefecture::where('id', $prefecture_id)->update([
            'prefecture' => $title,
        ]);
        return redirect('admin');
    }
    public function delete_prefecture(Request $request)
    {
        $id = $request->id;
        return view('adminDelete');
    }
    public function remove_prefecture(Request $request,$prefecture_id)
    {
        Prefecture::find($prefecture_id)->delete();
        return redirect('admin');
    }

    public function sort_prefecture(Request $request)
    {
        $orderIds = explode(',', $request->listIds);
        foreach ($orderIds as $key => $orderId) {
            $prefecture = Prefecture::find($orderId);
            $prefecture->order_id = $key + 1;
            $prefecture->save();
        }
        return redirect('admin');
    }

    public function show_question($prefecture_id)
    {
        $prefecture = Prefecture::with('questions')
            ->where('id', $prefecture_id)
            ->orderBy('order_id', 'asc')
            ->get();
        return view('adminQuestion', ['prefecture' => $prefecture, 'prefecture_id' => $prefecture_id]);
    }

    public function sdd_question($prefecture_id)
    {
        return view('adminQuestionAdd', ['prefecture_id' => $prefecture_id]);
    }

    public function upload_question(Request $request, $prefecture_id)
    {
        $file = $_FILES['img'];
        $filename = basename($file['name']);
        $tmp_path = $file['tmp_name'];
        $file_err = $file['error'];
        $filesize = $file['size'];
        $path = public_path('img');
        $upload_dir = $path . '/';
        $save_filename = date('YmdHis') . $filename;
        move_uploaded_file($tmp_path, $upload_dir . $save_filename);

        $max_order_id = Question::max('order_id');
        Question::insert([
            'order_id' => $max_order_id + 1,
            'img' => $save_filename,
            'prefecture_id' => $prefecture_id,
        ]);
        return redirect('./admin/question/' . $prefecture_id);
    }
    public function edit_question($prefecture_id, $question_id)
    {
        return view('adminQuestionEdit', ['prefecture_id' => $prefecture_id, 'question_id' => $question_id]);
    }

    public function delete_question($prefecture_id, $question_id)
    {
        return view('adminQuestionDelete', ['prefecture_id' => $prefecture_id, 'question_id' => $question_id]);
    }

    public function remove_question($prefecture_id, $question_id)
    {
        Question::where('id', $question_id)->delete();
        return redirect('./admin/question/' . $prefecture_id);
    }

    public function sort_question(Request $request)
    {
        $orderIds = explode(',', $request->listIds);
        foreach ($orderIds as $key => $orderId) {
            $question = Question::find($orderId);
            $question->order_id = $key + 1;
            $question->save();
        }
        return redirect('admin');
    }

    public function show_choice($prefecture_id, $question_id)
    {
        return view('adminChoice', ['prefecture_id' => $prefecture_id, 'question_id' => $question_id]);
    }
}
