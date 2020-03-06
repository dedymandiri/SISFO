<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB; //Import database

// Model buat manggil tabel di database
use App\Berita;
use App\Pengumuman;
use App\Profil;
// Batas Model buat manggil tabel di database

class MasterController extends Controller
{
    public function index(){
        return view('layouts.master');
    }

    //---------------------------------------------------------------------halaman dashboard admin
    public function dashboard(){
        return view('admin.dashboard');
    }
    //---------------------------------------------------------------------Batas halaman dashboard admin

    //---------------------------------------------------------------------halaman berita admin
    public function berita(){
        return view('admin.berita');
    }

    public function lihatberita(){
        $hasil = Berita::all();
        return view('admin.berita',['liat'=>$hasil]);
    }

    public function tambahberita()
    { 
	    // memanggil view tambah
	    return view('admin.input.inputberita');
 
    }

    //input data ke database
    public function store(Request $request)
    {
	    // insert data ke table berita
	    DB::table('berita')->insert([
		'judul' => $request->judul,
		'tanggal_waktu' => $request->tanggal_waktu,
		'isi' => $request->isi,
		'file' => $request->file
	]);
	    // alihkan halaman ke halaman berita
	    return redirect('berita');
 
    }

    //hapus data berita berdasarkan id_berita
    public function hapusberita($id)
    {
	    // menghapus data pegawai berdasarkan id yang dipilih
	    DB::table('berita')->where('id_berita',$id)->delete();
		
	    // alihkan halaman ke halaman pegawai
	    return redirect('/berita');
    }

    //edit data berita
    public function editberita($id){
        $hasil = Berita::where('id_berita',$id)->get();
        return view('admin.form.formberita',['liat'=>$hasil]);
    }

    // update data berita
    public function updateberita($id, Request $request)
    {
        $berita = [
            'judul' => $request->judul,
            'tanggal_waktu' => $request->tanggal_waktu,
            'isi' => $request->isi 
        ];
        if($request->file != null) $berita['file'] = $request->file;
	    // update data berita
        DB::table('berita')->where('id_berita',$request->id)->update($berita);
        return redirect('berita');
    }
    //---------------------------------------------------------------------Batas halaman berita admin

    //---------------------------------------------------------------------halaman pengumuman admin
    public function info(){
        return view('admin.pengumuman');
    }

    public function lihatinfo(){
        $hasil = Pengumuman::all();
        return view('admin.pengumuman',['liat'=>$hasil]);
    }

    public function tambahinfo()
    { 
	    // memanggil view tambah
	    return view('admin.input.inputpengumuman');
    }

    //input data ke database
    public function storeinfo(Request $request)
    {
	    // insert data ke table pegawai
	    DB::table('pengumuman')->insert([
		'judul' => $request->judul,
		'tanggal_waktu' => $request->tanggal_waktu,
		'isi' => $request->isi,
		'file' => $request->file
	]);
	    // alihkan halaman ke halaman pegawai
	    return redirect('pengumuman');
    }

    public function editinfo($id){
        $hasil = Pengumuman::where('id_info',$id)->get();
        return view('admin.form.forminfo',['liat'=>$hasil]);
    }

    // update data berita
    public function updateinfo($id, Request $request)
    {
        $info = [
            'judul' => $request->judul,
            'tanggal_waktu' => $request->tanggal_waktu,
            'isi' => $request->isi 
        ];
        if($request->file != null) $info['file'] = $request->file;
	    // update data berita
        DB::table('pengumuman')->where('id_info',$request->id)->update($info);
        return redirect('pengumuman');
    }

    //hapus data berita berdasarkan id_berita
    public function hapusinfo($id)
    {
	    // menghapus data pegawai berdasarkan id yang dipilih
	    DB::table('pengumuman')->where('id_info',$id)->delete();
		
	    // alihkan halaman ke halaman pegawai
	    return redirect('pengumuman');
    }
    //---------------------------------------------------------------------Batas halaman pengumuman admin

    //---------------------------------------------------------------------halaman sejarah admin
    public function sejarah(){
        return view('admin.sejarah');
    }

    public function lihatsejarah(){
        $hasil = Profil::all();
        return view('admin.sejarah',['liat'=>$hasil]);
    }

    public function formsjrh($id){
        $hasil = Profil::where('id_profil',$id)->get();
        return view('admin.form.formsejarah',['liat'=>$hasil]);
    }
    //-----------------------------------------------------------------------Batas halaman sejarah admin

    //-----------------------------------------------------------------------halaman visimisitujuan admin
     public function vimitu(){
        return view('admin.visi_misi_tujuan');
    }

    public function lihatvimitu(){
        $hasil = Profil::all();
        return view('admin.visi_misi_tujuan',['liat'=>$hasil]);
    }

    
    public function editvmt($id){
        $hasil = Profil::where('id_profil',$id)->get();
        return view('admin.form.formvisimisi',['liat'=>$hasil]);
    }
    //----------------------------------------------------------------------Batas halaman visimisitujuan admin

    }


