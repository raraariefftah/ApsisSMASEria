<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/home', function () {
    return view('halaman_utama.home');
});

Route::get('/pendaftaran1', function () {
    return view('halaman_utama.pendaftaran1');
});

Route::get('/pendaftaran2', function () {
    return view('halaman_utama.pendaftaran2');
});

Route::get('/pendaftaran3', function () {
    return view('halaman_utama.pendaftaran3');
});

Route::get('/pendaftaran4', function () {
    return view('halaman_utama.pendaftaran4');
});

Route::get('/profil', function () {
    return view('halaman_utama.profil');
});

Route::get('/lulusan', function () {
    return view('halaman_utama.lulusan');
});

Route::get('/fasilitas', function () {
    return view('halaman_utama.fasilitas');
});

Route::get('/login', function () {
    return view('auth.login');
});

Route::get('/tata_usaha', 'TataUsahaController@dashboard_tu');
Route::get('/tata_usaha/profil', 'TataUsahaController@profil');
Route::get('/tata_usaha/data_pendaftar', 'TataUsahaController@pendaftar');
Route::get('/tata_usaha/detail_data', 'TataUsahaController@detail');


