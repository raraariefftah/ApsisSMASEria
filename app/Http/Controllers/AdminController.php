<?php

namespace App\Http\Controllers;

use App\User;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

class AdminController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    // public function login(Request $request){
    //     if(Auth::attempt(['email' => $request->email, 'password' => $request->password])){
    //         return redirect('')
    //     }
    // 

    public function index()
    {
        if(Auth::user()->role=='admin'){
            return view('admin.dashboard');
        }
        else{
            return abort(404);
        }
    }

    // public function dashboard_admin()
    // {
    //     return view('admin.dashboard');
    // }

    public function profil()
    {
        return view('admin.profil_admin');
    }

    public function dataUser()
    {
        return view('admin.data_user');
    }

    public function editUser()
    {
        return view('admin.edit_data_user');
    }

    public function tambahUser()
    {
        return view('admin.tambah_user');
    }

    public function editHome()
    {
        return view('admin.edit_home');
    }

    public function editFasilitas()
    {
        return view('admin.edit_fasilitas');
    }

    public function editProfil()
    {
        return view('admin.edit_profil');
    }

    public function editLulusPTN()
    {
        return view('admin.edit_lulusPTN');
    }

    
    public function ubahpwadmn()
    {
        return view('admin.ubah_password_adm');
    }
}
