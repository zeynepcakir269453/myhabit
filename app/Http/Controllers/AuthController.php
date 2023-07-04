<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Validation\ValidationException;



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

    public function loginAction(Request $request){
       
       /* Validator::make($request->all(), [
           'email' => 'required|email',
           'password' => 'required' 
        ])->validate();*/
        //return redirect()->route('login');

        if(!Auth::attempt($request->only('email','password'), $request->boolean('remember'))){
            throw ValidationException::withMessages([
                'email' => trans('auth.failed')
            ]);
        }

        $request->session()->regenerate();
        return redirect()->route('dashboard');
    }
}
