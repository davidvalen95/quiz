<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePivotGameRoom extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('game_room', function (Blueprint $table) {
            $table->increments('id');
            $table->timestamps();

            $table->integer('room_id')->unsigned()->nullable();

            $table->foreign('room_id')
                    ->references('id')
                    ->on('room')
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
        Schema::dropIfExists('game_room');
    }
}
