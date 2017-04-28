<?php

namespace App\Http\Controllers;

use App\ApiRes;
use App\DecisionScore;
use App\GameValues;
use Illuminate\Http\Request;

class DecisionGameController extends Controller
{
    //

    public function index(){
        $game_id = (int) \request()->get('game_id');
        $gamevalue = GameValues::where("game_id",$game_id)->value('value');
        $data = ApiRes::$success;
        $data["data"] = json_decode($gamevalue,true);
        return response()->json($data);

    }

    public function nagAndDecide(){

        $last_paid = (int) \request()->get('last_paid');
        $current_value = (int) \request()->get('current_value');
        $last_not_paid = (int) \request()->get('last_not_paid');
        $agreed = (int) \request()->get('agreed');

        if(abs($last_not_paid-$last_paid)<=1){
            //save the value;
            return $last_paid;
        }

        if($agreed){
            $data['current_value'] = ($current_value+$last_not_paid)/2;
            $data['last_paid'] = $current_value;
            $data['last_not_paid'] = $last_not_paid;
            return response()->json($data);
        }
        else{
            $data['current_value'] = ($current_value+$last_paid)/2;
            $data['last_paid'] = $last_paid;
            $data['last_not_paid'] = $current_value;

            return response()->json($data);
        }


    }


    public function storeScore(){
        $user_id =(int) \request()->get('user_id');
        $user_input =(int) \request()->get('user_input');

        $gameValues = new DecisionScore();
        $gameValues->user_id = $user_id;
        $gameValues->final_value = $user_input;

        $gameValues->save();

        $data = ApiRes::$success;
        return response()->json($data);
    }
}
