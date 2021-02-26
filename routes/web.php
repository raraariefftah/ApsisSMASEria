<?php

use Illuminate\Support\Facades\Auth;
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



// Route::get('/login', function () {
//     return view('auth.login');
// });
// Route::get('/login', 'HalamanUtamaController@home');
Route::get('/halaman_utama/home', 'HalamanUtamaController@home');
Route::get('/halaman_utama/profil', 'HalamanUtamaController@profil');
Route::get('/halaman_utama/fasilitas', 'HalamanUtamaController@fasilitas');
Route::get('/halaman_utama/lulusan', 'HalamanUtamaController@lulusan');

Route::get('/tata_usaha/dashboard', 'TataUsahaController@dashboard_tu');
Route::get('/tata_usaha/profil', 'TataUsahaController@profil');
Route::get('/tata_usaha/data_pendaftar', 'TataUsahaController@pendaftar');
Route::get('/tata_usaha/detail_data', 'TataUsahaController@detail');
Route::get('/tata_usaha/ubah_password', 'TataUsahaController@ubahpw');
Route::get('/detail_data/edit_keterangan_siswa', 'TataUsahaController@edit_ket_siswa');
Route::get('/detail_data/edit_keterangan_ortu', 'TataUsahaController@edit_ket_ortu');
Route::get('/detail_data/edit_keterangan_wali', 'TataUsahaController@edit_ket_wali');

Route::get('/hal_pendaftaran/keterangan_siswa', 'PendaftaranController@ket_siswa');
Route::get('/hal_pendaftaran/keterangan_ortu', 'PendaftaranController@ket_ortu');
Route::get('/hal_pendaftaran/keterangan_wali', 'PendaftaranController@ket_wali');

Route::get('/admin/dashboard', 'AdminController@index');
Route::get('/admin/profil', 'AdminController@profil');
Route::get('/admin/data_user', 'AdminController@dataUser');
Route::get('/admin/edit_data_user', 'AdminController@editUser');
Route::get('/admin/tambah_user', 'AdminController@tambahUser');
Route::get('/admin/edit_home', 'AdminController@editHome');
Route::get('/admin/edit_fasilitas', 'AdminController@editFasilitas');
Route::get('/admin/edit_profil', 'AdminController@editProfil');
Route::get('/admin/edit_lulusPTN', 'AdminController@editLulusPTN');
Route::get('/admin/ubah_password', 'AdminController@ubahpwadmn');
Auth::routes();



