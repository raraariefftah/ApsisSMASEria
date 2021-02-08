<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TataUsahaController extends Controller
{
    //profil
    public function dashboard_tu()
    {
        return view('tata_usaha.dashboard');
    }

    public function profil()
    {
        return view('tata_usaha.profil_tu');
    }

    public function pendaftar()
    {
        return view('tata_usaha.data_pendaftar');
    }

    public function detail()
    {
        return view('tata_usaha.detail_data');
    }
}
