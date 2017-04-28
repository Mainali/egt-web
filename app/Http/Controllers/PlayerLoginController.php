<?php

namespace App\Http\Controllers;

use App\ApiRes;
use App\User;
use Illuminate\Http\Request;

class PlayerLoginController extends Controller
{
    public function dologin(Request $request)
    {
        $email = $request->get("email");
        $pass = $request->get("pass");

        $user = User::where(["email"=>$email,"password"=>$pass])->first();

        if(count($user)>0){
            $data = ApiRes::$success;
            $data["data"] = $user->toArray();
            return response()->json($data);
        }
        else{
            $data = ApiRes::$error;
            $data["message"]="user doesn't exists";
            return response()->json($data);
        }


    }
}
