<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateChoicesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('choices', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('prefectureId');
            $table->integer('questionId');
            $table->string('region');
            $table->boolean('valid');
        });
        Schema::create('prefectures', function (Blueprint $table) {
            $table->increments('id');
            $table->string('prefecture');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('choices');
        Schema::dropIfExists('prefectures');
    }
}
