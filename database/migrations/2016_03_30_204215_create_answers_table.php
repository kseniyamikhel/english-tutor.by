<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAnswersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('answers', function (Blueprint $table) {
            $table->increments('id');
            $table->string('id_question');
            $table->string('answer');
            $table->string('session_id');
            $table->boolean('right_answer')->default(false);
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::drop('answers');
    }
}
