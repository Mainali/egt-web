<?php
/**
 * Created by PhpStorm.
 * User: acer-usrpu
 * Date: 3/30/2017
 * Time: 3:05 PM
 */

namespace App\Http\Controllers;


use App\Games;

class DashController
{
    public function index(){
        $data['games'] = Games::all();
        return view('web-admin.dashboard',$data);
    }
}