<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class catatanController extends Controller
{
    //
    public function index(){
       
        
        return view('catatan.catatan');
    }

    public function add(){
       
        
        return view('catatan.addCat');
    }

    public function edit(){
       
        
        return view('catatan.editCat');
    }

    public function view(){
       
        
        return view('catatan.viewCat');
    }
}
