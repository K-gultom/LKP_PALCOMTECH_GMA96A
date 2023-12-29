<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class customerController extends Controller
{
    public function customer(){
        
        return view('customer.customer');
    }

    public function addcustomer(){
        
        return view('customer.addcustomer');
    }

    
}
