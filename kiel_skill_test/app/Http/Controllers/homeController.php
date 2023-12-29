<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class homeController extends Controller
{
    public function login(){
        
        return view('user.login');
    }
    public function beranda(){
        
        return view('home.beranda');
    }
}
