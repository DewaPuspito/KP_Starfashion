<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function login(){
        return view ('loginregister.login');
    }

    public function register(){
        return view ('loginregister.register');
    }

    public function postregister(Request $request){
        User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => bcrypt($request->password),
            'remember_token' => Str::random(60),
        ]);
        return redirect ('/login');
    }

    public function postlogin(Request $request){
       if(Auth::attempt($request->only('email', 'password'))){
        return redirect ('/main-menu');  
       } else {
        return \redirect('login');
       }
    }

    public function logout(){
       Auth::logout();
       return \redirect('login');
    }
}
