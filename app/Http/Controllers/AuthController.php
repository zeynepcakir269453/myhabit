<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;


class AuthController extends Controller
{
    public function register(){
        return view('auth/register');
    }

    public function registerSave(Request $request){
       
        User::create([
            'name' => $request->name,
            'email'=> $request->email,
            'password'=>$request->password,
            'level'=>'Admin'
        ]);
        return redirect()->route('login');
    }

    public function login(){
        return view('auth/login');
    }
}
