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
            ['order_id'=>1,'prefecture' => '東京の難読地名クイズ'],
            ['order_id'=>2,'prefecture' => '広島の難読地名クイズ'],
            ['order_id'=>3,'prefecture' => '大阪の難読地名クイズ'],
            ['order_id'=>4,'prefecture' => '京都の難読地名クイズ'],
            ['order_id'=>5,'prefecture' => '奈良の難読地名クイズ'],
        ];
        DB::table('prefectures')->insert($prefecturesParam);
    }
}
