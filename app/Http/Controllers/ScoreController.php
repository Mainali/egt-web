<?php

namespace App\Http\Controllers;

use App\ApiRes;
use App\PlayerGame;
use App\Score;
use Illuminate\Http\Request;

class ScoreController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $input["player_game_id"] = request()->get("player_game_id");
        $input["user_id"] = request()->get("user_id");

        if($his = Score::where("player_game_id",$input["player_game_id"])->where("user_id",$input["user_id"])->get()){
            $data = ApiRes::$success;
            $data["data"] = $his;
        }
        else{
            $data = ApiRes::$error;
            $data["message"] = "not found";
        }

        return response()->json($data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $input["player_game_id"] = $request->get("player_game_id");
        $input["user_id"] = $request->get("user_id");
        $input["level"] = $request->get("level");
        $input["user_input"] = $request->get("user_input");

        if((int)$input["user_id"]%2==0)
            $user_pair_id = (int)$input["user_id"] - 1;
        else
            $user_pair_id = (int) $input["user_id"]+1;

        $initialCheck = Score::where('level',$input['level'])->where('user_id',$input['user_id'])->where('player_game_id',$input['player_game_id'])->first();

        if(count($initialCheck)>0){
//            Score::where('level',$input['level'])->where('user_id',$input['user_id'])
//                ->where('player_game_id',$input['player_game_id'])
//                ->update(['user_input'=>$input['user_input']]);

            //update all players score in each new players submit

//            $count = Score::where("player_game_id",$input["player_game_id"])->where("level",$input["level"])->count();
//            $sum = Score::where("player_game_id",$input["player_game_id"])->where("level",$input["level"])->sum("user_input");
//
//            $user_score = Score::where('player_game_id',$input['player_game_id'])->where('level',$input['level'])->whereIn("user_id",[])->get();
//            foreach($user_score as $uscore){
//                $user_input = $uscore->user_input;
//                $uscore->user_score = $user_input +abs($sum/$count -$user_input);
//                $uscore->save();
//            }

            $data = ApiRes::$error;
            $data['message'] = "Already submitted";
            return response()->json($data);
        }
        if($score = Score::create($input)){
            //update all players score in each new players submit

            //$count = Score::where("player_game_id",$input["player_game_id"])->where("level",$input["level"])->count(); //comment if just 2 players
            $sum = Score::where("player_game_id",$input["player_game_id"])
                ->where("level",$input["level"])
                ->whereIn("user_id",[$input['user_id'],$user_pair_id])
                ->sum("user_input");

            $user_score = Score::where('player_game_id',$input['player_game_id'])
                ->where('level',$input['level'])
                ->whereIn("user_id",[$input['user_id'],$user_pair_id])
                ->get();
            foreach($user_score as $uscore){
                $user_input = $uscore->user_input;
                $uscore->user_score = $user_input +abs($sum/2 -$user_input);
                $uscore->save();
            }

            $data = ApiRes::$success;
            $data["message"] = "submitted input ";
            return response()->json($data);
        }
        else{
            $data = ApiRes::$error;
            $data["message"] = "error submitting data";
        }


    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Score  $score
     * @return \Illuminate\Http\Response
     */
    public function show(Score $score)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Score  $score
     * @return \Illuminate\Http\Response
     */
    public function edit(Score $score)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Score  $score
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Score $score)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Score  $score
     * @return \Illuminate\Http\Response
     */
    public function destroy(Score $score)
    {
        //
    }
}
