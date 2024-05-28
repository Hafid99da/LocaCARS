<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class RegisterController extends Controller
{
    public function index(){
        return view('pages.register');
    }
    public function store(Request $request){
        $request->validate([
            'name' => 'required|string|max:55',
            'telephone' => 'required|string|max:14',
            'adresse' => 'required|string|max:255',
            'email' => 'required|email|unique:users,email',
            'password' => 'required|min:4|confirmed'
        ]);
        User::Create([
            'name' => $request->name,
            'telephone' => $request->telephone,
            'adresse' => $request->adresse,
            'email' => $request->email,
            'password' => Hash::make($request->password),
            'role' => 'user'
        ]);
        return redirect()->route('home')->with(['success' => 'You are registed successfully']);
    }
}
