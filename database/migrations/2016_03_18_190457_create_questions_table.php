<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateQuestionsTable extends Migration
{
    public function up()
    {
        Schema::create('questions', function (Blueprint $table) {
            $table->increments('id');
            $table->string('email');
            $table->text('question');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::drop('questions');
    }
}
