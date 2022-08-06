<?php 
namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;


use Illuminate\Http\Request;

class QuizyController extends Controller
{
    public function quiz_list($prefecture_id)
    {
        $choices_array=
            DB::table('choices')->where('prefecture_id',$prefecture_id)->where('question_id',1)->get();

        $prefecture_name=
            DB::table('prefectures')->where('id',$prefecture_id)->get();

        // $questions = Prefecture::all();

        return view ('quizy',['prefecture_id'=>$prefecture_id,'choices_array'=>$choices_array,'prefecture_name'=>$prefecture_name]);
    }
}
?>