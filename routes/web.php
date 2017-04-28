<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::group(['prefix' => 'api'], function () {
    Route::resource('users', 'UserController');
    //avialable games and running games
    Route::get('available-games','PlayerGameController@availableGames');
    Route::get('running-game','PlayerGameController@runningGame');

    //next level
    Route::get('change-level','PlayerGameController@nextLevel');
    //get history
    Route::get('player-game-history','PlayerGameController@gameHistory');

    Route::resource('games', 'GamesController');
    Route::resource('player-game', 'PlayerGameController');
    Route::resource('score','ScoreController');
    Route::get('login', 'PlayerLoginController@dologin');

    //for decision game
    Route::post('submit-decision','DecisionGameController@storeScore');
    Route::get('decision-game', 'DecisionGameController@index');

});

Route::get('/admin','AdminPanel\LoginController@getLogin');
Route::get('/stat', 'DashController@index');
