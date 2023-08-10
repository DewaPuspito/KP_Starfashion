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

        $user = User::where('otp', $request->otp)->first();

        if ($user) {
        $user->otp_verified = true;
        $user->otp = null; // Clear OTP after successful verification
        $user->save();
        return redirect('/login')->with('info', 'OTP verified. You can now log in.');
        } else {
            return redirect()->route('otp-verification')->with('error', 'Invalid OTP');
        }
    }

    public function postregister(Request $request){
        $user = User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => bcrypt($request->password),
            'remember_token' => Str::random(60),
            'otp_verified' => false,
        ]);

        if ($user) {
            $otp = $this->generateOTP();
            $user->otp = $otp;
            $user->save();

            return redirect()->route('otp-verification')->with('info', 'Account registered successfully. Please enter the OTP sent to your email.');
        } else {
            return redirect('register')->with('error', 'Error creating user');
        }
    }


    public function postlogin(Request $request) {
        $remember = $request->has('remember');
        if (Auth::attempt($request->only('email', 'password'), $remember)) {
            return redirect()->route('main-menu');  
       } else {
        return redirect('login')->with('error', 'Invalid credentials');    
       }
    }

    public function logout() {
       Auth::logout();
       return \redirect('login');
    }
}
