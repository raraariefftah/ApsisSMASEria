<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PendaftaranController extends Controller
{
    public function ket_siswa()
    {
        return view('pendaftaran.keterangan_siswa');
    }

    public function ket_ortu()
    {
        return view('pendaftaran.keterangan_ortu');
    }
    
    public function ket_wali()
    {
        return view('pendaftaran.keterangan_wali');
    }



}
