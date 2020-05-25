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
use App\Sambutan_Model;

// Batas Model buat manggil tabel di database

use Storage;
use PDF;

class UserController extends Controller
{
    
    public function user(){
        return view('layouts.user_master');
    }

    public function beranda(){
        return view('user.beranda');
    }

    public function tampilsambutan(){
        $hasil = Sambutan_Model::all();
        return view('layouts.user_master',['liat'=>$hasil]);
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

    
    public function detailjurusanmultimedia(){
        $hasil = Multimedia_model::all();
        return view('user.user-multimedia',['liat'=>$hasil]);
    }
    
    public function kesiswaandetailosis(){
        $hasil = Ekskul_model::all();
        return view('user.user-osis',['liat'=>$hasil]);
    }
    
    public function kesiswaandetailpramuka(){
        $hasil = Ekskul_model::all();
        return view('user.user-pramuka',['liat'=>$hasil]);
    }
    
    public function kesiswaandetailpaskibra(){
        $hasil = Ekskul_model::all();
        return view('user.user-paskibra',['liat'=>$hasil]);
    }
    
    public function kesiswaandetailkarate(){
        $hasil = Ekskul_model::all();
        return view('user.user-karate',['liat'=>$hasil]);
    }
    
    public function kesiswaandetailhadroh(){
        $hasil = Ekskul_model::all();
        return view('user.user-hadroh',['liat'=>$hasil]);
    }

    public function kesiswaandetailgalery(){
        $hasil = Galery_Model::all();
        return view('user.user-galery',['liat'=>$hasil]);
    }

    public function ppdbdaftar()
    { 
	    // memanggil view tambah
	    return view('user.user-pendaftaran');
 
    }

    //input data ke database
    public function adddaftar(Request $request)
    {
	    // insert data ke table berita
	    DB::table('pendaftaran')->insert([
            'tgl_masuk' => $request->tgl_masuk,
		    'nama_calon_siswa' => $request->nama_calon_siswa,
            'tmpt_lahir' => $request->tmpt_lahir,
            'tgl_lahir' => $request->tgl_lahir,
		    'nama_ibu' => $request->nama_ibu,
            'nama_ayah' => $request->nama_ayah,
            'alamat' => $request->alamat,
		    'nisn' => $request->nisn,
            'asal_sklh' => $request->asal_sklh,            
            'no_hp' => $request->no_hp,
		    'agama' => $request->agama,
            'anak_ke' => $request->anak_ke,            
		    'keahlian' => $request->keahlian,
		    'alasan' => $request->alasan
	]);
	    // alihkan halaman ke halaman berita
	    return redirect('user-pendaftaran'); 
    }

    public function lihat_rekap_nilai_tk1(){
        $siswa = Nilai_tk1_Model::all();
        $pel = Mapel_Model::all();
        return view('user.user-nilai_tk1',['tampil'=>$siswa, "pel"=>$pel]);
    }

    public function lihat_rekap_nilai_tk2(){
        $siswa = Nilai_tk2_Model::all();
        $pel = Mapel_Model::all();
        return view('user.user-nilai_tk2',['tampil'=>$siswa, "pel"=>$pel]);
    }

    public function lihat_rekap_nilai_tk3(){
        $siswa = Nilai_tk3_Model::all();
        $pel = Mapel_Model::all();
        return view('user.user-nilai_tk3',['tampil'=>$siswa, "pel"=>$pel]);
    }

    public function tampiljadwal(){
        $hasil = Jadwal_Model::all();
        return view('user.user-jadwal_pelajaran',['liat'=>$hasil]);
    }

    public function tampilkalender(){
        $hasil = Kalender_Model::all();
        return view('user.user-kalender_sekolah',['liat'=>$hasil]);
    }

    public function tampilhasilseleksi(){
        $hasil = Seleksi_Model::all();
        return view('user.user-hasil_seleksi',['liat'=>$hasil]);
    }

    public function konseling(){
        return view('user.konseling');
    }

    public function hubungi_kami(){
        return view('user.hubungi_kami');
    }

    
    public function tampildetailsambutan(){
        $hasil = Sambutan_Model::all();
        return view('user.user-sambutan',['liat'=>$hasil]);
    }


    public function tampildetailinfo(){
        $hasil = Pengumuman_Model::all();
        return view('user.beranda',['liat'=>$hasil]);
    }

    public function selengkapnyainfo(){
        $hasil = Pengumuman_Model::all();
        return view('user.user-pengumuman',['liat'=>$hasil]);
    }
}