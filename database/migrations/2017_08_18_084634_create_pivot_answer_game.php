<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePivotAnswerGame extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('answer_game', function (Blueprint $table) {
            $table->increments('id');
            $table->timestamps();
            $table->integer('answer_id')->unsigned()->nullable();

            $table->foreign('answer_id')
                    ->references('id')
                    ->on('answer')
                    ->onDelete('cascade')
                    ->onUpdate('cascade');

            $table->integer('game_id')->unsigned()->nullable();

            $table->foreign('game_id')
                    ->references('id')
                    ->on('game')
                    ->onDelete('cascade')
                    ->onUpdate('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('answer_game');
    }
}
