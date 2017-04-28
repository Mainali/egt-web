<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class PlayerGame extends Model
{
    protected $table = "player_games";

    public $timestamps = false;

    protected $fillable = [
        'game_id', 'user_id', 'current_level', 'status', 'created_at'
    ];

    public function scores(){
        return $this->hasMany('App\Score','player_game_id');
    }

    public function player(){
        return $this->belongsTo('App\User','user_id');
    }
}
