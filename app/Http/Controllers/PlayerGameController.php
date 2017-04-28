<?php

namespace App\Http\Controllers;

use App\ApiRes;
use App\PlayerGame;
use App\Score;
use Illuminate\Http\Request;

class PlayerGameController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $user = \request()->get('user_id');
        $game = \request()->get('game_id');
        //$created_at = \request()->get('created_at');
        if($user ==null || $game== null){
            $data = ApiRes::$error;
            $data["message"] = "game_id and user_id required";
            return response()->json($data);
        }
        //$user_game = PlayerGame::where('game_id',$game)->where('status','active')->first();

//        if(count($user_game)>0){
//            $data = ApiRes::$success;
//            $data["message"] = "joining existing game";
//            $data["data"] = $user_game->toArray();
//            return response()->json($data);
//        }
//        else{
            $input["user_id"] = $user;
            $input["game_id"] = $game;
            $input["current_level"] = 1;
            $input["status"] = "active";
            //$input["created_at"] = $created_at;
            if($newgame = PlayerGame::create($input)){
                $data = ApiRes::$success;
                $data["message"] = "creating new game";
                $data["data"] = $newgame;
                return response()->json($data);
            }

       // }
    }


    public function availableGames()
    {
        $game_id = \request()->get('game_id');
        $available_games = PlayerGame::with('player')->where('game_id',$game_id)->has('scores','<',4)
            ->orderBy('created_at','desc')
            ->take(15)->get();
        //$game =  Games::find($game_id);
        //$available_games =$game->playerGames;
        if(count($available_games)>0){
            $data = ApiRes::$success;
            $data["data"] = $available_games->toArray();

        }
        else{
            $data = ApiRes::$error;
            $data["message"] = "no games available";
        }
        return response()->json($data);

    }

    public function runningGame()
    {
        $game_id = \request()->get('game_id');
        $user_id = \request()->get('user_id');

        $recent_game = PlayerGame::with('player')->where('current_level','<',5)->whereHas('scores',function ($query){
            $query->where('user_id',\request()->get('user_id'));
        })->orderBy('created_at','desc')->take(5)->get();
        if(count($recent_game)>0){
            $data = ApiRes::$success;
            $data["data"] = $recent_game->toArray();

        }
        else{
            $data = ApiRes::$error;
            $data["message"] = "no running game";
        }
        return response()->json($data);
    }


    public function gameHistory(){
        $game_id = \request()->get('game_id');
        $user_id = \request()->get('user_id');

        $recent_game = PlayerGame::with('player')->where('current_level','=',5)->whereHas('scores',function ($query){
            $query->where('user_id',\request()->get('user_id'));
        })->orderBy('created_at','desc')->get();
        if(count($recent_game)>0){
            $data = ApiRes::$success;
            $data["data"] = $recent_game->toArray();

        }
        else{
            $data = ApiRes::$error;
            $data["message"] = "no running game";
        }
        return response()->json($data);
    }




    public function nextLevel(){
        $player_level = \request()->get('player_level');
        $player_game_id = \request()->get('player_game_id');
        $player_id = \request()->get('user_id');

        if((int)$player_id%2==0){
            $player_pair_id = (int)$player_id -1;
        }
        else{
            $player_pair_id = (int)$player_id +1;
        }

        $pair_score = Score::where('level',$player_level)->where('player_game_id',$player_game_id)->where('user_id',$player_pair_id)->count();

        if($pair_score > 0){
            $player_game = PlayerGame::find($player_game_id);
            $player_game->current_level = (int)$player_level + 1;
            $player_game->save();

            $data = ApiRes::$success;
            $data["data"] = array("level"=>(int)$player_level + 1);

        }
        else{
            $data = ApiRes::$error;
            $data["message"] = "wait for other players";
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
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\PlayerGame  $playerGame
     * @return \Illuminate\Http\Response
     */
    public function show(PlayerGame $playerGame)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\PlayerGame  $playerGame
     * @return \Illuminate\Http\Response
     */
    public function edit(PlayerGame $playerGame)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\PlayerGame  $playerGame
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, PlayerGame $playerGame)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\PlayerGame  $playerGame
     * @return \Illuminate\Http\Response
     */
    public function destroy(PlayerGame $playerGame)
    {
        //
    }
}
