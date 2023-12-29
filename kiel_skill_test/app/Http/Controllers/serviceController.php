<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class serviceController extends Controller
{
    public function service(){

        return view('service.service');
    }

    public function addservice(){

        return view('service.addservice');
    }
}
