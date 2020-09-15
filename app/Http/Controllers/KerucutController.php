<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class KerucutController extends Controller
{
    public function index() {
        return view('kerucut');
    }

    public function operasiKerucut(Request $request) {
        $jari = $request->input('jariKerucut');
        $tinggi = $request->input('tinggiKerucut');
        $luas_alas_kerucut = 22/7 * $jari * $jari;
        $volumeKerucut = 1/3 * $luas_alas_kerucut * $tinggi;

        return redirect('/kerucut')->with('info','hasilnya adalah: ' . $volumeKerucut . ' Cm3');
    }
}
