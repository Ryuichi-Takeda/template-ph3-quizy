<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;


class PrefecturesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $prefecturesParam = [
            ['prefecture' => '東京'],
            ['prefecture' => '広島'],
        ];
        DB::table('prefectures')->insert($prefecturesParam);
    }
}
