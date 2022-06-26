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
        $param = [
            ['prefectureId' => 1,
            'questionId'=> 1,
            'region' => 'たかなわ',
            'valid' => 1]
        ];
        DB::table('choices')->insert($param);
    }
}
