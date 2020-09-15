<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BolaController extends Controller
{
    public function index(){
        return view('bola');
    }

    public function operasiBola(Request $request){
        $jari_jari = $request->input('jariBola');
        $volumeBola = 4/3 * 22/7 * $jari_jari * $jari_jari * $jari_jari;

        return redirect('/bola')->with('info','hasilnya adalah: ' . $volumeBola . ' Cm');
    }
}
