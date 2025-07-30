<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class UserController extends Controller
{
    public function index(){
        $users = User::all();
        return response(['data'=>$users], 200);
    }

    public function store(Request $request){
        $user = User::create($request->all());
        return response(['data'=>$user],201);
    }
}
