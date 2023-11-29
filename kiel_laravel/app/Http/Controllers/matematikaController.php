<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class matematikaController extends Controller
{

    public function persegipanjang(){

        $hitung = null;
        return view('persegiPanjang', compact('hitung'));
    }

    public function persegipanjang_hitung(Request $req){

        $panjang = $req -> panjang;
        $lebar = $req -> lebar;
        // p = 10, l = 5

        // lp = p x l
        $hitung = $panjang * $lebar;

        return view('persegiPanjang', compact('hitung'));
        
    }

    public function kalkulator(){

        $hasil = null;
        return view('kalkulator', compact('hasil'));
    }

    public function kalkulator_hitung(Request $r){
        $n1 = $r -> input1;
        $n2 = $r -> input2;
        $operator = $r -> operator;

        if ($operator === '+') {
            $hasil = $n1 + $n2;
        }elseif ($operator === '-') {
            $hasil = $n1 - $n2;
        }elseif ($operator === '*') {
            $hasil = $n1 * $n2;
        }elseif ($operator === '/') {
            if ($n2 != 0) {
                $hasil = $n1 / $n2;
            } else {
                $hasil = "Tidak dapat melakukan pembagian nol...";
            }
        }else {
            $hasil = "Maaf Operator Anda Salah...";
        }

        return view('kalkulator', compact('hasil'));

    }

}
