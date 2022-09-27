<?php 

namespace App\Http\Controllers;

// use Illuminate\Support\Facades\DB;
use App\Prefecture;
use App\Question;
use Illuminate\Http\Request;

class QuizyController extends Controller
{
    public function quiz_list($prefecture_id)
    {
        $prefecture = Prefecture::where('id',$prefecture_id)->first();

        $questions = Question::with('choices')->where('prefecture_id',$prefecture_id)->get();

        return view ('quizy',['prefecture_id'=>$prefecture_id,'prefecture'=>$prefecture,'questions'=>$questions]);
    }
}
?>