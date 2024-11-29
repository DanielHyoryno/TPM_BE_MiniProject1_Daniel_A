<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use App\Models\User; 

class AuthenticationController extends Controller {

    public function getRegister() {
        return view('register');
    }

    public function register(Request $request) {
        // Validate user input
        $request->validate([
            'name' => 'required',
            'email' => ['required', 'unique:users'],
            'password' => 'required|min:6',
        ]);

        User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
        ]);

        return redirect()->route('login'); 
    }

    public function getLogin() {
        return view('login');
    }

    public function login(Request $request) {
        $request->validate([
            'email' => ['required'],
            'password' => 'required',
        ]);

        $credentials = [
            'email' => $request->email,
            'password' => $request->password
        ];

        if (Auth::attempt($credentials)) {
            $request->session()->regenerate();

            return redirect()->route('home'); // Assuming 'home' is your route name for the homepage or dashboard
        }

        return back()->withErrors([
            'email' => 'Email or password is incorrect.'
        ]);
    }
}
