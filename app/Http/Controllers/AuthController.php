<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;

class AuthController extends Controller
{
    function index() { 
        return view('pages.login');
    }

    function login(Request $request){
        $request->validate(['email'=>'required','password'=>'required']);
        $email = $request->email;
        $password = $request->password;
        $filled=filled($request->rememberme);
        if(Auth::attempt(['email' => $email, 'password' => $password], $filled)){
            $request->session()->regenerate();
            if(Auth::user()->role ==='admin'){
                return redirect()->route('dashboard');
            } elseif (Auth::user()->role==='user'){
                return redirect()->route('home');
            }
        }
        else{
            return back()->withErrors(['error' => "Invalid email or password "]);
        }
    }
    function logout(){
        Session::flush(); Auth::logout();
        return redirect()->route('login.index');
    }
}
