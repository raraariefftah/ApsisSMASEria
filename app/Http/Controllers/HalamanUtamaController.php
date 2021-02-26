<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HalamanUtamaController extends Controller
{
    public function home()
    {
        return view('halaman_utama.home');
    }

    public function profil()
    {
        return view('halaman_utama.profil');
    }
    
    public function fasilitas()
    {
        return view('halaman_utama.fasilitas');
    }
    
    public function lulusan()
    {
        return view('halaman_utama.lulusan');
    }
}
