<?php 
namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;


use Illuminate\Http\Request;

class QuizyController extends Controller
{
    public function quiz_list($prefecture_id)
    {
        $choices_array=[];
        for($i=1;$i<4;$i++){
        $choices=
            DB::select('select region from choices where prefectureId=? and questionId=?',[$prefecture_id,$i]);
            array_push($choices_array,$choices);
        }

        $prefecture_name=
            DB::select('select * from prefectures where id = ?',[$prefecture_id]);

        return view ('quizy',['prefecture_id'=>$prefecture_id,'choices_array'=>$choices_array,'prefecture_name'=>$prefecture_name]);
    }
}
?>