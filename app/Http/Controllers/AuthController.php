<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;

class AuthController extends Controller
{
    public function login(){
        if(auth()->check()){
            return redirect('posts');
        } else{
            return view('auth.login');
        } 
    }

    public function authenticate(Request $request){
        $credential = $request->only('email', 'password');

        if (Auth::attempt($credential)) {
            return redirect()->intended('posts')->with('success', 'Login berhasil.');
        }
    
        return back()->withErrors([
            'email' => 'Email atau password salah.',
        ]);
    }

    public function register_form(){
        if(auth()->check()){
            return redirect('posts');
        } return view('auth.register');
    }

    public function register(Request $request){

        // $request->validate([
        //     'name' => 'required',
        //     'email' => 'required|email|unique:users',
        //     'password' => 'required|min:6|confirmed',
        // ]);
        $request->validate([
            'name' => 'required',
            'email' =>'required|email|unique:users',
            'password' =>'required|confirmed',
        ]);



        // $request->all();
        // dd($request);

        User::create([
            'name' => $request->input('name'),
            'email' => $request->input('email'),
            'password' => Hash::make($request->input('password'))
        ]);

        return redirect('login')->with('success', 'Registrasi berhasil. Silahkan login.');
    }

    public function logout(){
        Session::flush();
        Auth::logout();

        return redirect('login')->with('success', 'Logout berhasil.');
    }
}
