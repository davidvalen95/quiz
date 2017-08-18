<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Game extends Model
{
    /*

        - id
        - timestamps
        - dateline (batas game)
        - tipe (game yg dimainin)
            .1 = quiz




    */

    protected $table = 'game'
    protected $fillable = [
        'dateline','tipe'
    ];
    public function getAnswers(){
        return $this->hasMany('App\Model\Answer','answer_game','game_id','answer_id');
    }
    public function getRooms(){

        //belongsToMany(‘modelSatunya’, ‘tableBridge’, ‘localIdtableYgdiBridge’, ‘foreignIdLawanYgDiBridge’
        return $this->belongsToMany('App\Model\Room','game_room','game_id','room_id');
    }

    public function getQuiz(){
        return $this->belongsTo('App\Model\Quiz','quiz_id');
    }

}
