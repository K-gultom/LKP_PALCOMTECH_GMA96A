<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Controller_satu extends Controller
{

    public function beranda(){


        return view('beranda');
    }

    public function tentangKami(){


        return view('tentangKami');
    }

    public function program(){


        return view('program');
    }




    public function index(){

        return view('test');

    }

    public function kiel(){

        return view('kiel');

    }

}
