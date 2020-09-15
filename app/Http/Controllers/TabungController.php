<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TabungController extends Controller
{
    public function index() {
        return view('tabung');
    }

    public function operasiTabung(Request $request) {
        $jari = $request->input('jariTabung');
        $tinggi = $request->input('tinggiTabung');
        $luas_alas_tabung = 22/7 * $jari * $jari;
        $volumeTabung = $luas_alas_tabung * $tinggi;

        return redirect('/tabung')->with('info','hasilnya adalah: ' . $volumeTabung . ' Cm');
    }
}
