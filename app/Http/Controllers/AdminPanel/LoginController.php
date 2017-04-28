<?php
namespace App\Http\Controllers\AdminPanel;


use App\Http\Controllers\Controller;

/**
 * Created by PhpStorm.
 * User: acer-usrpu
 * Date: 4/6/2017
 * Time: 2:04 PM
 */
class LoginController extends Controller
{
    public function getLogin(){
        return view("auth.login");
    }

}