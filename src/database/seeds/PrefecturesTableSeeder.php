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
            ['order_id'=>1,'prefecture' => '東京'],
            ['order_id'=>2,'prefecture' => '広島'],
        ];
        DB::table('prefectures')->insert($prefecturesParam);
    }
}
