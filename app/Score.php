<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Score extends Model
{
    protected $table = "score";

    public $timestamps = false;

    protected $fillable = [
        'player_game_id', 'user_id', 'user_input', 'level', 'user_score'
    ];
}
