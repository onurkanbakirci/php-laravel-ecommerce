<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;

class AuthController extends Controller
{
    public function register(Request $request){
        $validateInputs = $request->validate([
            "name"=>"required|min:3|max:30",
            "email"=>"required|unique:users",
            "password"=>"required|min:5|confirmed",
        ]);

        $validateInputs["password"] = bcrypt($request->password);

        $user = User::create($validateInputs);

        $accessToken = $user->createToken("authToken")->accessToken;

        return response(["user"=>$user,"access_token"=>$accessToken]);

    }
    public function login(Request $request){
        $loginInputs = $request->validate([
            "email"=>"email|required",
            "password"=>"required"
        ]);

        if(!auth()->attempt($loginInputs)){
            respose(["message"=>"Invalid credentials"]);
        }

        $accessToken = auth()->user()->createToken("authToken")->accessToken;

        return response(["user"=>auth()->user(),"access_token"=>$accessToken]);
    
    }
}
