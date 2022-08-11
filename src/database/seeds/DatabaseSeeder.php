<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call(ChoicesTableSeeder::class);
        $this->call(PrefecturesTableSeeder::class);
        $this->call(QuestionsTableSeeder::class);
    }
}
