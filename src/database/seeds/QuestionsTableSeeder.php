<?php

use Illuminate\Database\Seeder;

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
            ['prefectureId' => 1,'questionId'=>1,'img'=>'takanawa.png'],
            ['prefectureId' => 1,'questionId'=>2,'img'=>'kameido.png'],
            ['prefectureId' => 1,'questionId'=>3,'img'=>'kouzimati.png'],
            ['prefectureId' => 2,'questionId'=>1,'img'=>'mukainada.png'],
            ['prefectureId' => 2,'questionId'=>2,'img'=>'mitugi.png'],
            ['prefectureId' => 2,'questionId'=>3,'img'=>'kanayama.png'],
        ];
        DB::table('questions')->insert($questionsParam);
    }
}
