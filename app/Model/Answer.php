<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Answer extends Model
{
    //

    /*

        - id
        - timestamps
        - answer:varchar(128)
        - poin:int(11)




    */


    protected $table = 'game';
    protected $fillable = [
        'answer', 'poin',
    ];


    public function getGames(){
        return $this->hasMany('App\Model\Game','answer_game','answer_id','game_id');
    }
    public function getQuiz(){
        return $this->belongsTo('App\Model\Quiz','quiz_id');
    }
}
