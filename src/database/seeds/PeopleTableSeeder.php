<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PeopleTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $peopleParam = [
            ['name' => '武田龍一','email'=>'ryuichitakeda@posse.com'],
            ['name' => '石川朝香','email'=>'asakaishikawa@posse.com'],
        ];
        DB::table('people')->insert($peopleParam);
    }
}
