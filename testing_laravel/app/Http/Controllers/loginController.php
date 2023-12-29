<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
//plugin untuk membuat enkripsi laravel
use Illuminate\Support\Facades\Hash;
//untuk membuat Authentication 
use Illuminate\Support\Facades\Auth;

class loginController extends Controller
{
    //
    public function login(){

        return view('login.login');
    }

    public function register(){

        return view('login.register');
    }

    public function register_proses(Request $r){
        $r->validate([

            "name" => 'required|min:3|max:30',
            "email" => 'required|min:5|max:50|email|unique:users,email',
            "password" => 'required|confirmed|min:6', 
        ]);

        $new = new User();
        $new -> name = $r -> name;
        $new -> email = $r -> email;
        $new -> password = Hash::make($r -> password);
        $new -> save();
        
        //echo "Berhasil Disimpan!!!";

        //untuk membuat session
        $r -> session()->flash('message', 'Registration Successful.');

        return redirect('/login');


    }

    public function login_proses(Request $req){
        $req -> validate([
            "email" => 'required|min:6|max:50|email|exists:users,email',
            "password" => 'required|min:5|max:20',
        ]);

        $user = User::where('email',$req->email)->first();
        
        if(Hash::check($req -> password, $user -> password)){

            Auth::attempt(['email' => $req -> email, 'password' => $req -> password]);
            return redirect('/');

        }else{
            return redirect()->back()->withErrors(['password' => 'Password is Invalid']);
        }
    }

    public function logout(){
        
        Auth::logout();

        return redirect('/');
    }

    
}
