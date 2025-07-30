<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class AuthController extends Controller
{
    public function login(Request $request){
        $userData = $request->validate([
            "email"=> "required|email",
            "password"=> "required"
        ]);

        $user = User::where("email", $userData["email"])->first();
        if(!$user){
            return response(['response'=>"User not Found"], 404);
        }

        if(!Hash::check($userData["password"], $user['password'])){
            return response(['response'=> 'Password not match'],400);
        }

        $token = $user->createToken('user_pass');

        return response(['token'=> $token->plainTextToken, 'id' => $user['id']],200);
    }

    public function logout(Request $request){
        $request->user()->currentAccessToken()->delete();
        return response(['message' => ''], 204);
    }

    public function me(Request $request){
        $user = $request->user();

        return response(['data' => $user], 200);
    }
}
