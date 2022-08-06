<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ChoicesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $choicesParam = [
            ['prefecture_id' => 1,'question_id'=> 1,'region' => 'たかなわ','valid' => 1],
            ['prefecture_id' => 1,'question_id'=> 1,'region' => 'こうわ','valid' => 0],
            ['prefecture_id' => 1,'question_id'=> 1,'region' => 'たかわ','valid' => 0],
            ['prefecture_id' => 1,'question_id'=> 2,'region' => 'かめいど','valid' => 1],
            ['prefecture_id' => 1,'question_id'=> 2,'region' => 'かめと','valid' => 0],
            ['prefecture_id' => 1,'question_id'=> 2,'region' => 'かめど','valid' => 0],
            ['prefecture_id' => 1,'question_id'=> 3,'region' => 'こうじまち','valid' => 1],
            ['prefecture_id' => 1,'question_id'=> 3,'region' => 'かゆまち','valid' => 0],
            ['prefecture_id' => 1,'question_id'=> 3,'region' => 'おかとまち','valid' => 0],
            ['prefecture_id' => 2,'question_id'=> 4,'region' => 'むかいなだ','valid' => 1],
            ['prefecture_id' => 2,'question_id'=> 4,'region' => 'むこうひら','valid' => 0],
            ['prefecture_id' => 2,'question_id'=> 4,'region' => 'むきひら','valid' => 0],
            ['prefecture_id' => 2,'question_id'=> 5,'region' => 'みつぎ','valid' => 1],
            ['prefecture_id' => 2,'question_id'=> 5,'region' => 'おしらべ','valid' => 0],
            ['prefecture_id' => 2,'question_id'=> 5,'region' => 'みよし','valid' => 0],
            ['prefecture_id' => 2,'question_id'=> 6,'region' => 'かなやま','valid' => 1],
            ['prefecture_id' => 2,'question_id'=> 6,'region' => 'ぎんざん','valid' => 0],
            ['prefecture_id' => 2,'question_id'=> 6,'region' => 'きやま','valid' => 0],
        ];
        DB::table('choices')->insert($choicesParam);    
    }
}
