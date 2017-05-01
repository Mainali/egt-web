<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class DecisionScore extends Model
{
    protected $table = "decision_score";

    public $timestamps = false;

    protected $fillable = ['user_id','final_value'];

    public function player(){
        return $this->belongsTo('App\User','user_id');
    }
}
