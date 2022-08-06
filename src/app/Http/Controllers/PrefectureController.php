<?php

namespace App\Http\Controllers;
// use Illuminate\Support\Facades\DB;
use App\Prefecture;
// use App\Choice;
use Illuminate\Http\Request;

class PrefectureController extends Controller
{
    public function index($prefecture_id)
    {
        // $choices = DB::table('choices')->get;
        $prefectures = Prefecture::all();
        return view('quizy',[
            // 'choices'=>$choices
        'prefectures'=>$prefectures
    ]);
    }

    // public function prefecture(Request $request)
    // {
    //     $prefectures = Prefecture::all();
    //     return view('quizy',['prefectures'=>$prefectures]);
    // }
}
