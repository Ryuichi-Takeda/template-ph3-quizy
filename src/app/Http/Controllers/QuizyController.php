<?php 
namespace App\Http\Controllers;

use Illuminate\Http\Request;

class QuizyController extends Controller
{
    public function quiz_list($prefecture_id)
    {
        $choices=[
            [['たかなわ','たかわ','こうわ'],
            ['かめいど','かめと','かめど']],
            [['みよし','みかた','みつぎ']]
        ];

        $prefecture_name=[
            '東京',
            '広島'
        ];
        return view ('quizy',['prefecture_id'=>$prefecture_id,'choices'=>$choices,'prefecture_name'=>$prefecture_name]);
    }
}
?>