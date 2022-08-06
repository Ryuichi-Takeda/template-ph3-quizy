<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class QuestionsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $questionsParam = [
            ['prefecture_id' => 1,'question_id'=>1,'img'=>'takanawa.png'],
            ['prefecture_id' => 1,'question_id'=>2,'img'=>'kameido.png'],
            ['prefecture_id' => 1,'question_id'=>3,'img'=>'kouzimati.png'],
            ['prefecture_id' => 2,'question_id'=>1,'img'=>'mukainada.png'],
            ['prefecture_id' => 2,'question_id'=>2,'img'=>'mitugi.png'],
            ['prefecture_id' => 2,'question_id'=>3,'img'=>'kanayama.png'],
        ];
        DB::table('questions')->insert($questionsParam);
    }
}
