<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Games extends Model
{
    public $timestamps = false;
    protected $table = "games";



    public function playerGames(){
        return $this->hasMany('App\PlayerGame','game_id');
    }

    public function gameValues(){
        return $this->hasMany('App\GameValues','game_id');
    }


}
