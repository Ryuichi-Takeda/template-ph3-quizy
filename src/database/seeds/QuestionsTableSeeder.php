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
            ['order_id'=>1,'prefecture_id' => 1,'img'=>'takanawa.png'],
            ['order_id'=>2,'prefecture_id' => 1,'img'=>'kameido.png'],
            ['order_id'=>3,'prefecture_id' => 1,'img'=>'kouzimati.png'],
            ['order_id'=>1,'prefecture_id' => 2,'img'=>'mukainada.png'],
            ['order_id'=>2,'prefecture_id' => 2,'img'=>'mitugi.png'],
            ['order_id'=>3,'prefecture_id' => 2,'img'=>'kanayama.png'],
        ];
        DB::table('questions')->insert($questionsParam);
    }
}
