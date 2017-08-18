<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Quiz extends Model
{
    /*

        - id
        - timestamps
        - genre:int
            .1 = binatang dll nanti aja di update
        - question:varchar(128)




    */

    protected $table = 'game';
    protected $fillable = [
        'genre','question'
    ];
    public function getAnswers(){
        return $this->hasMany('App\Model\Answer','quiz_id');
    }
    public function getGames(){
        return $this->hasMany('App\Model\Game','quiz_id');
    }

}
