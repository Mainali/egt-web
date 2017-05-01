<?php
namespace App\Http\Controllers\AdminPanel;


use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
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

    public function doLogin(Request $request){
        $usrname = $request->get("username");
        $password = $request->get("password");

        if (Auth::attempt(['username' => $usrname, 'password' => $password, 'role' => 'admin'])) {
            // Authentication passed...
            return redirect()->intended('stat');
        }
        else{
            //dd("sdf");

            return redirect()->to("/admin")->with("errors",["username or password incorrect"]);
        }

        dd($request);
    }

}