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
use App\Bukutamu_Model;

// Batas Model buat manggil tabel di database

use Storage;
use PDF;

class UserController extends Controller
{
    
    public function user(){
        return view('layouts.user_master');
    }

    public function home(){
        return view('user.home');
    }

    public function tampilsambutan(){
        $hasil = Sambutan_Model::all();
        return view('layouts.user_master',['liat'=>$hasil]);
    }

    public function profildetailsejarah(){
        $hasil = Profil_Model::all();
        $kepsek = Sambutan_Model::all();
        return view('user.user-sejarah',['liat'=>$hasil,'kepsek'=>$kepsek]);
    }

    public function profildetailvisimisi(){
        $hasil = Profil_Model::all();        
        $kepsek = Sambutan_Model::all();
        return view('user.user-visimisi',['liat'=>$hasil,'kepsek'=>$kepsek]);
    }

    public function profildetailstruktursek(){
        $hasil = Struktursklh_Model::all();            
        $kepsek = Sambutan_Model::all();
        return view('user.user-struktursek',['liat'=>$hasil,'kepsek'=>$kepsek]);
    }

    public function profildetailfasilitas(){
        $hasil = Fasilitas_Model::all();
        $kepsek = Sambutan_Model::all();
        return view('user.user-fasilitas',['liat'=>$hasil,'kepsek'=>$kepsek]);
    }
    
    public function detailjurusanmultimedia(){
        $hasil = Multimedia_model::all();
        $kepsek = Sambutan_Model::all();
        return view('user.user-multimedia',['liat'=>$hasil,'kepsek'=>$kepsek]);
    }
    
    public function kesiswaandetailosis(){
        $hasil = Ekskul_model::all();
        $kepsek = Sambutan_Model::all();
        return view('user.user-osis',['liat'=>$hasil,'kepsek'=>$kepsek]);
    }
    
    public function kesiswaandetailpramuka(){
        $hasil = Ekskul_model::all();
        $kepsek = Sambutan_Model::all();
        return view('user.user-pramuka',['liat'=>$hasil,'kepsek'=>$kepsek]);
    }
    
    public function kesiswaandetailpaskibra(){
        $hasil = Ekskul_model::all();
        $kepsek = Sambutan_Model::all();
        return view('user.user-paskibra',['liat'=>$hasil,'kepsek'=>$kepsek]);
    }
    
    public function kesiswaandetailkarate(){
        $hasil = Ekskul_model::all();
        $kepsek = Sambutan_Model::all();
        return view('user.user-karate',['liat'=>$hasil,'kepsek'=>$kepsek]);
    }
    
    public function kesiswaandetailhadroh(){
        $hasil = Ekskul_model::all();
        $kepsek = Sambutan_Model::all();
        return view('user.user-hadroh',['liat'=>$hasil,'kepsek'=>$kepsek]);
    }

    public function kesiswaandetailgalery(){
        $hasil = Galery_Model::all();
        $kepsek = Sambutan_Model::all();
        return view('user.user-galery',['liat'=>$hasil,'kepsek'=>$kepsek]);
    }

    public function ppdbdaftar()
    { 
        $kepsek = Sambutan_Model::all();
	    return view('user.user-pendaftaran',['kepsek'=>$kepsek]);
 
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
        $hasil = Nilai_tk1_Model::all();
        $mapel = Mapel_Model::all();
        $kepsek = Sambutan_Model::all();
        return view('user.user-nilai_tk1',['liat'=>$hasil, 'mapel'=>$mapel,'kepsek'=>$kepsek]);
    }


    public function lihat_rekap_nilai_tk2(){
        $siswa = Nilai_tk2_Model::all();
        $pel = Mapel_Model::all();
        $kepsek = Sambutan_Model::all();
        return view('user.user-nilai_tk2',['tampil'=>$siswa, "pel"=>$pel,'kepsek'=>$kepsek]);
    }

    public function lihat_rekap_nilai_tk3(){
        $siswa = Nilai_tk3_Model::all();
        $pel = Mapel_Model::all();
        $kepsek = Sambutan_Model::all();
        return view('user.user-nilai_tk3',['tampil'=>$siswa, "pel"=>$pel,'kepsek'=>$kepsek]);
    }

    public function tampiljadwal(){
        $hasil = Jadwal_Model::all();
        $kepsek = Sambutan_Model::all();
        return view('user.user-jadwal_pelajaran',['liat'=>$hasil,'kepsek'=>$kepsek]);
    }

    public function tampilkalender(){
        $hasil = Kalender_Model::all();
        $kepsek = Sambutan_Model::all();
        return view('user.user-kalender_sekolah',['liat'=>$hasil,'kepsek'=>$kepsek]);
    }

    public function tampilhasilseleksi(){
        $hasil = Seleksi_Model::all();
        $kepsek = Sambutan_Model::all();
        return view('user.user-hasil_seleksi',['liat'=>$hasil,'kepsek'=>$kepsek]);
    }

    public function konseling(){
        $kepsek = Sambutan_Model::all();
        return view('user.konseling',['kepsek'=>$kepsek]);
    }

    public function tamu(){        
        return view('user.user-buku_tamu');
    }

    //input data ke database
    public function storetamu(Request $request)
    {
	    // insert data ke table berita
	    DB::table('buku_tamu')->insert([
		'nama' => $request->nama,
		'email' => $request->email,
		'komentar' => $request->komentar
	    ]);
	    // alihkan halaman ke halaman berita
	    return redirect('user-buku_tamu');
 
    }

    public function tampildetailtamu(){
        $hasil = Bukutamu_Model::all();
        $kepsek = Sambutan_Model::all();
        return view('user.user-buku_tamu',['liat'=>$hasil,'kepsek'=>$kepsek]);
    }

    
    public function tampildetailsambutan(){
        $hasil = Sambutan_Model::all();
        $kepsek = Sambutan_Model::all();
        return view('user.user-sambutan',['liat'=>$hasil,'kepsek'=>$kepsek]);
    }

    public function tampilberita(){
        $berita = Berita_Model::all();
        $kepsek = Sambutan_Model::all();
        return view('user.home',['liat'=>$berita,'kepsek'=>$kepsek]);
    }

    public function detail_berita($id){
        $hasil = Berita_Model::where('id_berita',$id)->get();
        $kepsek = Sambutan_Model::all();
        return view('user.user-detail_berita',['liat'=>$hasil,'kepsek'=>$kepsek]);
    }
    
    public function tampilpengumuman(){
        $berita = Pengumuman_Model::all();
        $kepsek = Sambutan_Model::all();
        return view('user.user-pengumuman',['liat'=>$berita,'kepsek'=>$kepsek]);
    }

    public function detail_pengumuman($id){
        $hasil = Pengumuman_Model::where('id_info',$id)->get();
        $kepsek = Sambutan_Model::all();
        return view('user.user-detail_pengumuman',['liat'=>$hasil,'kepsek'=>$kepsek]);
    }



    

}