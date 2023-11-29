<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class loopingController extends Controller
{
    
    public function looping1(){
        //  untuk mencari nilai genap/ganjil
        $hasil= [];

        $a = 10;
        for ($i=0; $i <= $a; $i++) { 
            // $hasil[] = $i;
            if ($i % 2 == 0) {
                $hasil[] = $i." Bilangan Genap";
            }else {
                $hasil[] = $i." Bilangan ganjil";
            }
        }

        return view('looping1', compact('hasil'));
    }

    public function looping2(){
        $a=null;
        $b= null;

        return view('looping2', compact('a', 'b'));
    }

    public function looping2_hitung(Request $r){
        $a=0;
        $b= $r -> input1;

        return view('looping2', compact('a', 'b'));
    }



}
