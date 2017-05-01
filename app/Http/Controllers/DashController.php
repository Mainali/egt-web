<?php
/**
 * Created by PhpStorm.
 * User: acer-usrpu
 * Date: 3/30/2017
 * Time: 3:05 PM
 */

namespace App\Http\Controllers;


use App\DecisionScore;
use App\Games;
use App\Score;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class DashController
{
    public function index(Request $request){
        $data['games'] = Games::all()->count();
        $data['players'] = User::where('role','!=','admin')->count();

        return view('web-admin.dashboard',$data);
    }

    public function gamesDash(){
        $data =  Array();
        $j =0;

        //$max = DecisionScore::where('session',1)->max('final_value');

        $max = DecisionScore::max('final_value');
        $min = DecisionScore::min('final_value');

        $ra = ceil(($max+$min)/10);
        for( $i =$min;$i<$max;$i=$i+$ra){
            $data[$j]["range"] = $i."-".($i+$ra-1);
            $data[$j]["val"] = DecisionScore::where("final_value",">=",$i)->where("final_value","<",$i+$ra)->count();
        $j++;
        }

        //$listdata['scores'] = DecisionScore::all();

        $graphdata['graphdata'] =$data;

        $allData["scores"] = DecisionScore::all();
        $allData["graphdata"] = $data;
        if(\request()->get('game-id')==2)
             return view('web-admin.pricing-game.decide-list',$allData);
        return view('web-admin.pricing-game.pricing-list');
    }

    public function decisionGraph(){

    }
}