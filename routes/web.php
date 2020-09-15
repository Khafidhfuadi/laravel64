<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('index');
});


Route::get('/kerucut', function () {
    return view('kerucut');
});

//Tabung
Route::get('/tabung', 'TabungController@index');
Route::post('/operasiTabung', 'TabungController@operasiTabung');

//Bola
Route::get('/bola', 'BolaController@index');
Route::post('/operasiBola', 'BolaController@operasiBola');

//Kerucut
Route::get('/kerucut', 'KerucutController@index');
Route::post('/operasiKerucut', 'KerucutController@operasiKerucut');
