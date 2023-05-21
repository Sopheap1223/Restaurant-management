<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;

class AuthManager extends Controller
{
    function login(){
        return view('login');
    }
    function register(){
        return view('register');
    }
    function loginPost(Request $request){
        $request -> validate([
           'email'=>'required',
            'password'=> 'required'
        ]);
        $Credential = $request -> only('email','password');
        if (Auth::attempt($Credential)){
            return redirect() ->intended(route('welcome'));
        }
        return redirect(route('login'))->with("error" , "Your Email is invalid");
    }
    function registerPost(Request $request){
        $request -> validate(
            [
                'name'=>'required',
                'email'=>'required|email|unique:users',
                'password'=>'required'
            ]
        );
        $data ['name'] = $request->name;
        $data ['email'] = $request -> email;
        $data ['password'] = Hash::make($request->password);
        $Users = User:: create($data);
        if (!$Users){
            return redirect(route('register'))->with("error" , "Register Unsuccessfully.Try again!");
        }
        return redirect(route('login'))->with("success" , "Register Successfully. Please login.");
    }
    function logout(){
        Session:: flush();
        Auth::logout();
        return redirect(route('login'));
    }
}
