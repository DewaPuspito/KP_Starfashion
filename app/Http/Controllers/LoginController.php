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

    function generateOTP($length = 6)
    {
        $otp = "";
        $characters = "0123456789ABCDEFGHIJKLMNOPQRSTUVWXYZ";

        $charLength = strlen($characters);
        for ($i = 0; $i < $length; $i++) {
            $otp .= $characters[rand(0, $charLength - 1)];
        }

        return $otp;
    }

    public function showOtpVerification()
    {
        return view('loginregister.otp');
    }

    public function verifyOTP(Request $request)
    {
        $request->validate([
            'otp' => 'required|string',
        ]);

        $user = Auth::user();
        if ($user->otp == $request->otp) {
            return redirect('/main-menu');
        } else {
            return redirect()->route('otp-verification')->with('error', 'Invalid OTP');
        }
    }

    public function postlogin(Request $request) {
        $remember = $request->has('remember');
        if (Auth::attempt($request->only('email', 'password'), $remember)) {
            $users = User::where('email', $request->input('email'))->get();
            foreach ($users as $user) {
                $otp = $this->generateOTP();
                $user->otp = $otp;
                $user->save();
            }
        return redirect()->route('otp-verification')->with('info', 'Please enter the OTP sent to your email.');  
       } else {
        return redirect('login')->with('error', 'Invalid credentials');    
       }
    }

    public function logout() {
       Auth::logout();
       return \redirect('login');
    }
}
