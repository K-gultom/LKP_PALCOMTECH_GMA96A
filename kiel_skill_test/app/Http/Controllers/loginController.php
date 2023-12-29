<?php

// namespace App\Http\Controllers;

// use App\Models\User;
// use Illuminate\Http\Request;
// use Illuminate\Support\Facades\Auth;
// use Illuminate\Support\Facades\Hash;

// class loginController extends Controller
// {
//     public function login_proses(Request $req){

//         $req -> validate([
//             "email" => 'required|min:5|max:50|email|exists:users,email',
//             "password" => 'required|min:6',
//         ]);

//         $user = User::where('email', $req->email)->first();

//         if (Hash::check($req->password, $user->password)) {
//             Auth::attempt(['email' => $req->email, 'password' => $req->password]);
            
//             return view('home.beranda');
            
//         }else {
//             return redirect()->back()->withErrors(['password' => 'Password is Invalid...']);
//         }

//     }

//     public function register(){
        
//         return view('user.register');
//     }

//     public function register_proses(Request $req){

//         $req -> validate([
//             "name" => 'required|min:3',
//             "email" => 'required|min:5|max:50|unique:users,email',
//             "password" => 'required|min:6',
//         ]);

//         $new = new User();
//         $new -> name = $req -> name;
//         $new -> email = $req -> email;
//         $new -> password = Hash::make($req -> password);
//         $new -> save();

//         return redirect('/register')->with('message', 'Register Sukses...');
        
//     }

//     public function profile(){

//         return view('user.profile');
//     }

//     public function profile_ubah(Request $r){

//         $iduser = Auth::user()->id;
//         $r -> validate([
//             "nama" => "required|min:3",
//             "email" => "required|min:5|max:50|unique:users,email, $iduser",
//             "password" => "nullable|min:6",
//             "old_password" => "nullable|min:6",
//         ]);
//         $new = User::findorFail($iduser);
//         $new -> nama = $r -> nama;
//         $new -> email = $r -> email;
//         if ($r -> password) {
//             if (Hash::check($r->old_password, $new->password)) {
//                 $new -> password = Hash::make($r -> password);
//             }else{
//                 return redirect('/profile')->withErrors(['password' => 'Old Password Is Wrong!!!']);
//             };
//         };
//         $new -> save();
//         return redirect('/profile')->with('message', 'Update Data Sukses...');
//     }


    
//     public function logout(){
//         Auth::logout();
//         return redirect('/');
//     }
// }
