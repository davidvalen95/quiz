<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Room extends Model
{
    /*

        - id
        - timestamps
        - room_id (punya line)
        - name nama room line


    */

    protected $table = 'room';
    protected $fillable = [
        'room_id','name'
    ];
    public function getGames(){

        //belongsToMany(‘modelSatunya’, ‘tableBridge’, ‘localIdtableYgdiBridge’, ‘foreignIdLawanYgDiBridge’
        return $this->belongsToMany('App\Model\Game','game_room' ,'room_id','game_id');
    }

    public function getUsers(){
        return $this->belongsToMany('App\User','room_user','room_id','user_id');
    }

}
