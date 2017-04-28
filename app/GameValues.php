<?php
/**
 * Created by PhpStorm.
 * User: acer-usrpu
 * Date: 4/2/2017
 * Time: 11:52 PM
 */

namespace App;


use Illuminate\Database\Eloquent\Model;

class GameValues extends Model
{
    protected $table = "game_values";

    public $timestamps = false;

    protected $fillable = ['game_id','level','value'];


}