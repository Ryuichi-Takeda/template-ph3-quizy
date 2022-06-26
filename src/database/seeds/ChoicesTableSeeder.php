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
            ['prefectureId' => 1,'questionId'=> 1,'region' => 'たかなわ','valid' => 1],
            ['prefectureId' => 1,'questionId'=> 1,'region' => 'こうわ','valid' => 0],
            ['prefectureId' => 1,'questionId'=> 1,'region' => 'たかわ','valid' => 0],
            ['prefectureId' => 1,'questionId'=> 2,'region' => 'かめいど','valid' => 1],
            ['prefectureId' => 1,'questionId'=> 2,'region' => 'かめと','valid' => 0],
            ['prefectureId' => 1,'questionId'=> 2,'region' => 'かめど','valid' => 0],
            ['prefectureId' => 1,'questionId'=> 3,'region' => 'こうじまち','valid' => 1],
            ['prefectureId' => 1,'questionId'=> 3,'region' => 'かゆまち','valid' => 0],
            ['prefectureId' => 1,'questionId'=> 3,'region' => 'おかとまち','valid' => 0],
            ['prefectureId' => 2,'questionId'=> 1,'region' => 'むかいなだ','valid' => 1],
            ['prefectureId' => 2,'questionId'=> 1,'region' => 'むこうひら','valid' => 0],
            ['prefectureId' => 2,'questionId'=> 1,'region' => 'むきひら','valid' => 0],
            ['prefectureId' => 2,'questionId'=> 2,'region' => 'みつぎ','valid' => 1],
            ['prefectureId' => 2,'questionId'=> 2,'region' => 'おしらべ','valid' => 0],
            ['prefectureId' => 2,'questionId'=> 2,'region' => 'みよし','valid' => 0],
            ['prefectureId' => 2,'questionId'=> 3,'region' => 'かなやま','valid' => 1],
            ['prefectureId' => 2,'questionId'=> 3,'region' => 'ぎんざん','valid' => 0],
            ['prefectureId' => 2,'questionId'=> 3,'region' => 'きやま','valid' => 0],
        ];
        $prefecturesParam = [
            ['prefecture' => '東京'],
            ['prefecture' => '広島'],
        ];
        DB::table('choices')->insert($choicesParam);
        DB::table('prefectures')->insert($prefecturesParam);
    }
}
