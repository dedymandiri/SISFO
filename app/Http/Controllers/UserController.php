<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB; //Import database

// Model buat manggil tabel di database
use App\Berita_Model;
use App\Pengumuman_Model;
use App\Profil_Model;
use App\Fasilitas_Model;
use App\Struktursklh_Model;
use App\Multimedia_model;
use App\Tkr_model;
use App\Jadwal_Model;
use App\Ekskul_model;
use App\Pengguna_Model;
use App\Galery_Model;
use App\Kalender_Model;
use App\Mapel_Model;
use App\Nilai_tk1_Model;
use App\Nilai_tk2_Model;
use App\Nilai_tk3_Model;
use App\Seleksi_Model;
use App\Daftar_Model;
// Batas Model buat manggil tabel di database

use Storage;
use PDF;

class UserController extends Controller
{
    public function user(){
        return view('layouts.user_master');
    }

    public function profilsejarah(){
        return view('user.user-sejarah');
    }

    public function profildetailsejarah(){
        $hasil = Profil_Model::all();
        return view('user.user-sejarah',['liat'=>$hasil]);
    }

    public function profildetailvisimisi(){
        $hasil = Profil_Model::all();
        return view('user.user-visimisi',['liat'=>$hasil]);
    }

    public function profildetailstruktursek(){
        $hasil = Struktursklh_Model::all();
        return view('user.user-struktursek',['liat'=>$hasil]);
    }

    public function profildetailfasilitas(){
        $hasil = Fasilitas_Model::all();
        return view('user.user-fasilitas',['liat'=>$hasil]);
    }
}