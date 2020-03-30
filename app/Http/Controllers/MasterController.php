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
use App\User_Model;
use App\Galery_Model;
// Batas Model buat manggil tabel di database

use Storage;

class MasterController extends Controller
{
    public function master(){
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
        $hasil = Berita_Model::all();
        return view('admin.berita',['liat'=>$hasil]);
    }

    public function tambahberita()
    { 
	    // memanggil view tambah
	    return view('admin.input.input_berita');
 
    }

    //input data ke database
    public function store(Request $request)
    {
	    // insert data ke table berita
	    DB::table('berita')->insert([
		'judul' => $request->judul,
		'tanggal_waktu' => $request->tanggal_waktu,
		'isi' => $request->isi
	]);
	    // alihkan halaman ke halaman berita
	    return redirect('berita');
 
    }

    //edit data berita
    public function editberita($id){
        $hasil = Berita_Model::where('id_berita',$id)->get();
        return view('admin.edit.edit_berita',['liat'=>$hasil]);
    }

    // update data berita
    public function updateberita($id, Request $request)
    {
        $berita = [
            'judul' => $request->judul,
            'tanggal_waktu' => $request->tanggal_waktu,
            'isi' => $request->isi 
        ];
	    // update data berita
        DB::table('berita')->where('id_berita',$request->id)->update($berita);
        return redirect('berita');
    }

    
    //hapus data berita berdasarkan id_berita
    public function hapusberita($id)
    {
	    // menghapus data pegawai berdasarkan id yang dipilih
	    DB::table('berita')->where('id_berita',$id)->delete();
		
	    // alihkan halaman ke halaman pegawai
	    return redirect('berita');
    }
    //---------------------------------------------------------------------Batas halaman berita admin


    //---------------------------------------------------------------------halaman pengumuman admin
    public function info(){
        return view('admin.pengumuman');
    }

    public function lihatinfo(){
        $hasil = Pengumuman_Model::all();
        return view('admin.pengumuman',['liat'=>$hasil]);
    }

    public function tambahinfo()
    { 
	    // memanggil view tambah
	    return view('admin.input.input_pengumuman');
    }

    //input data ke database
    public function storeinfo(Request $request)
    {
	    // insert data ke table pegawai
	    DB::table('pengumuman')->insert([
		'judul' => $request->judul,
		'tanggal_waktu' => $request->tanggal_waktu,
		'isi' => $request->isi
	]);
	    // alihkan halaman ke halaman pegawai
	    return redirect('pengumuman');
    }

    public function editinfo($id){
        $hasil = Pengumuman_Model::where('id_info',$id)->get();
        return view('admin.edit.edit_pengumuman',['liat'=>$hasil]);
    }

    // update data berita
    public function updateinfo($id, Request $request)
    {
        $info = [
            'judul' => $request->judul,
            'tanggal_waktu' => $request->tanggal_waktu,
            'isi' => $request->isi 
        ];
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
        $hasil = Profil_Model::all();
        return view('admin.sejarah',['liat'=>$hasil]);
    }

    public function detailsejarah(){
        return view('admin.detail.detail_sejarah');
    }

    public function lihatdetailsejarah(){
        $hasil = Profil_Model::all();
        return view('admin.detail.detail_sejarah',['liat'=>$hasil]);
    }

    public function editsejarah($id){
        $hasil = Profil_Model::where('id_profil',$id)->get();
        return view('admin.edit.edit_sejarah',['liat'=>$hasil]);
    }

    public function updatesejarah($id, Request $request)
    {
        DB::table('profil')->where('id_profil',$request->id)->update([
            'sejarah' => $request->sejarah
        ]);
        //diarahkan ke halaman sejarah
        return redirect('sejarah');
    }

    //-----------------------------------------------------------------------Batas halaman sejarah admin

    //-----------------------------------------------------------------------halaman visimisitujuan admin
     public function visi(){
        return view('admin.visi_misi_tujuan');
    }

    public function lihatvisi(){
        $hasil = Profil_Model::all();
        return view('admin.visi_misi_tujuan',['liat'=>$hasil]);
    }

    public function detailvisimisi(){
        return view('admin.detail.detail_visimisi');
    }

    public function lihatdetailvisimisi(){
        $hasil = Profil_Model::all();
        return view('admin.detail.detail_visimisi',['liat'=>$hasil]);
    }

    public function editvisi($id){
        $hasil = Profil_Model::where('id_profil',$id)->get();
        return view('admin.edit.edit_visi_misi_tujuan',['liat'=>$hasil]);
    }

    public function updatevisi($id, Request $request)
    {
        DB::table('profil')->where('id_profil',$request->id)->update([
            'visi_misi_tujuan' => $request->visi_misi_tujuan,
        ]);
        //diarahkan ke halaman sejarah
        return redirect('visi_misi_tujuan');
    }
    //----------------------------------------------------------------------Batas halaman visimisitujuan admin


    
    //---------------------------------------------------------------------halaman fasilitas admin
    public function fasilitas(){
        return view('admin.fasilitas');
    }

    public function lihatfas(){
        $hasil = Fasilitas_Model::all();
        return view('admin.fasilitas',['liat'=>$hasil]);
    }

    public function tambahfas()
    { 
	    // memanggil view tambah
	    return view('admin.input.input_fasilitas');
    }

    //input data ke database
    public function storefas(Request $request)
    {
	    // insert data ke table berita
	    DB::table('fasilitas')->insert([
		'nama_ruang' => $request->nama_ruang,
		'kuantitas' => $request->kuantitas
		
	]);
	    // alihkan halaman ke halaman berita
	    return redirect('fasilitas');
 
    }

    //edit data berita
    public function editfas($id){
        $hasil = Fasilitas_Model::where('id_fas',$id)->get();
        return view('admin.edit.edit_fasilitas',['liat'=>$hasil]);
    }

    // update data berita
    public function updatefas($id, Request $request)
    {
        $fas = [
            'nama_ruang' => $request->nama_ruang,
            'kuantitas' => $request->kuantitas
        ];
        DB::table('fasilitas')->where('id_fas',$request->id)->update($fas);
        return redirect('fasilitas');
    }

    //hapus data berita berdasarkan id_berita
    public function hapusfas($id)
    {
	    // menghapus data pegawai berdasarkan id yang dipilih
	    DB::table('fasilitas')->where('id_fas',$id)->delete();
		
	    // alihkan halaman ke halaman pegawai
	    return redirect('fasilitas');
    }
    //---------------------------------------------------------------------Batas halaman berita admin


    
    //---------------------------------------------------------------------halaman struktur guru admin
    public function struktur_guru(){
        return view('admin.struktur_sekolah');
    }

    public function lihatstruktur_guru(){
        $hasil = Struktursklh_Model::all();
        return view('admin.struktur_sekolah',['liat'=>$hasil]);
    }

    public function tambahstruktur_guru()
    { 
	    // memanggil view tambah
	    return view('admin.input.input_struktur_sekolah');
    }

    //input data ke database
    public function storestruktur_guru(Request $request)
    {
	    // insert data ke table berita
	    DB::table('struktur_guru')->insert([
		'nama_guru' => $request->nama_guru,
		'jabatan' => $request->jabatan
		
	]);
	    // alihkan halaman ke halaman berita
	    return redirect('struktur_sekolah');
 
    }

    //edit data berita
    public function editstruktur_guru($id){
        $hasil = Struktursklh_Model::where('id_struktur_guru',$id)->get();
        return view('admin.edit.edit_struktur_sekolah',['liat'=>$hasil]);
    }

    // update data berita
    public function updatestruktur_guru($id, Request $request)
    {
        $sg = [
            'nama_guru' => $request->nama_guru,
            'jabatan' => $request->jabatan
        ];
        DB::table('struktur_guru')->where('id_struktur_guru',$request->id)->update($sg);

        return redirect('struktur_sekolah');
    }

    //hapus data berita berdasarkan id_berita
    public function hapusstruktur_guru($id)
    {
	    // menghapus data pegawai berdasarkan id yang dipilih
	    DB::table('struktur_guru')->where('id_struktur_guru',$id)->delete();
		
	    // alihkan halaman ke halaman pegawai
	    return redirect('struktur_sekolah');
    }
    //---------------------------------------------------------------------Batas struktur guru berita admin



      
    //---------------------------------------------------------------------halaman TKJ admin
    public function multimedia(){
        return view('admin.multimedia');
    }

    public function lihatmultimedia(){
        $hasil = Multimedia_model::all();
        return view('admin.multimedia',['liat'=>$hasil]);
    }

    public function detailmultimedia(){
        return view('admin.detail.detail_multimedia');
    }

    public function lihatdetailmultimedia(){
        $hasil = Multimedia_model::all();
        return view('admin.detail.detail_multimedia',['liat'=>$hasil]);
    }


    //edit data berita
    public function editmultimedia($id){
        $hasil = Multimedia_model::where('id_multimedia',$id)->get();
        return view('admin.edit.edit_multimedia',['liat'=>$hasil]);
    }

    // update data berita
    public function updatemultimedia($id, Request $request)
    {
        $multimedia = [
        'deskripsi' => $request->deskripsi
        ];
        DB::table('multimedia')->where('id_multimedia',$request->id)->update($multimedia);

        return redirect('multimedia');
    }
    //---------------------------------------------------------------------Batas TKJ berita admin



    //---------------------------------------------------------------------halaman OSIS admin
    public function osis(){
        return view('admin.osis');
    }

    public function lihatosis(){
        $hasil = Ekskul_model::all();
        return view('admin.osis',['liat'=>$hasil]);
    }

    public function detailosis(){
        return view('admin.detail.detail_osis');
    }

    public function lihatdetailosis(){
        $hasil = Ekskul_model::all();
        return view('admin.detail.detail_osis',['liat'=>$hasil]);
    }

    //edit data berita
    public function editosis($id){
        $hasil = Ekskul_model::where('id_ekskul',$id)->get();
        return view('admin.edit.edit_osis',['liat'=>$hasil]);
    }

    // update data berita
    public function updateosis($id, Request $request)
    {
        $tkr = [
        'deskripsi_osis' => $request->deskripsi_osis
        ];
        DB::table('ekskul')->where('id_ekskul',$request->id)->update($tkr);

        return redirect('osis');
    }
    //---------------------------------------------------------------------halaman OSIS admin



    
    //---------------------------------------------------------------------halaman pramuka admin
    public function pramuka(){
        return view('admin.pramuka');
    }

    public function lihatpramuka(){
        $hasil = Ekskul_model::all();
        return view('admin.pramuka',['liat'=>$hasil]);
    }

    //menampilkan detail data 
    public function detailpramuka(){
        return view('admin.detail.detail_pramuka');
    }

    public function lihatdetailpramuka(){
        $hasil = Ekskul_model::all();
        return view('admin.detail.detail_pramuka',['liat'=>$hasil]);
    }

    //edit data berita
    public function editpramuka($id){
        $hasil = Ekskul_model::where('id_ekskul',$id)->get();
        return view('admin.edit.edit_pramuka',['liat'=>$hasil]);
    }

    // update data berita
    public function updatepramuka($id, Request $request)
    {
        $tkr = [
        'deskripsi_pramuka' => $request->deskripsi_pramuka
        ];
        DB::table('ekskul')->where('id_ekskul',$request->id)->update($tkr);

        return redirect('pramuka');
    }
    //---------------------------------------------------------------------halaman pramuka admin



    //---------------------------------------------------------------------halaman KARATE admin
    public function karate(){
        return view('admin.karate');
    }

    public function lihatkarate(){
        $hasil = Ekskul_model::all();
        return view('admin.karate',['liat'=>$hasil]);
    }

    //menampilkan detail data
    public function detailkarate(){
        return view('admin.detail.detail_karate');
    }

    public function lihatdetailkarate(){
        $hasil = Ekskul_model::all();
        return view('admin.detail.detail_karate',['liat'=>$hasil]);
    }

    //edit data berita
    public function editkarate($id){
        $hasil = Ekskul_model::where('id_ekskul',$id)->get();
        return view('admin.edit.edit_karate',['liat'=>$hasil]);
    }

    // update data berita
    public function updatekarate($id, Request $request)
    {
        $karate = [
        'deskripsi_karate' => $request->deskripsi_karate
        ];
        DB::table('ekskul')->where('id_ekskul',$request->id)->update($karate);

        return redirect('karate');
    }
    //---------------------------------------------------------------------Batas halaman KARATE admin



    
          
    //---------------------------------------------------------------------halaman HADROH admin
    public function hadroh(){
        return view('admin.hadroh');
    }

    public function lihathadroh(){
        $hasil = Ekskul_model::all();
        return view('admin.hadroh',['liat'=>$hasil]);
    }

    //menampilkan detail data
    public function detailhadroh(){
        return view('admin.detail.detail_hadroh');
    }

    public function lihatdetailhadroh(){
        $hasil = Ekskul_model::all();
        return view('admin.detail.detail_hadroh',['liat'=>$hasil]);
    }

    //edit data berita
    public function edithadroh($id){
        $hasil = Ekskul_model::where('id_ekskul',$id)->get();
        return view('admin.edit.edit_hadroh',['liat'=>$hasil]);
    }

    // update data berita
    public function updatehadroh($id, Request $request)
    {
        $hadroh = [
        'deskripsi_hadroh' => $request->deskripsi_hadroh
        ];
        DB::table('ekskul')->where('id_ekskul',$request->id)->update($hadroh);

        return redirect('hadroh');
    }
    //---------------------------------------------------------------------Batas HADROH berita admin


    
    //---------------------------------------------------------------------halaman Paskibra admin
    public function paskibra(){
        return view('admin.paskibra');
    }

    public function lihatpaskibra(){
        $hasil = Ekskul_model::all();
        return view('admin.paskibra',['liat'=>$hasil]);
    }

    //menampilkan detail data
    public function detailpaskibra(){
        return view('admin.detail.detail_paskibra');
    }

    public function lihatdetailpaskibra(){
        $hasil = Ekskul_model::all();
        return view('admin.detail.detail_paskibra',['liat'=>$hasil]);
    }

    //edit data berita
    public function editpaskibra($id){
        $hasil = Ekskul_model::where('id_ekskul',$id)->get();
        return view('admin.edit.edit_paskibra',['liat'=>$hasil]);
    }

    // update data berita
    public function updatepaskibra($id, Request $request)
    {
        $tkr = [
        'deskripsi_paskibra' => $request->deskripsi_paskibra
        ];
        DB::table('ekskul')->where('id_ekskul',$request->id)->update($tkr);

        return redirect('paskibra');
    }
    //--------------------------------------------------------------------- Batas halaman paskibra admin



    //--------------------------------------------------------------------- halaman jadwal pelajaran admin
     public function jadwal(){
        return view('admin.jadwal_pelajaran');
    }

    public function lihatjadwal(){
        $hasil = Jadwal_Model::all();
        return view('admin.jadwal_pelajaran',['liat'=>$hasil]);
    }

    public function tambahjadwal()
    { 
	    // memanggil view tambah
	    return view('admin.input.input_jadwal_pelajaran');
 
    }
       
    //edit data 
    public function editjadwal($id){
        $hasil = Jadwal_Model::where('id_jadwal',$id)->get();
        return view('admin.edit.edit_jadwal_pelajaran',['liat'=>$hasil]);
    }

    // update data 
    public function updatejadwal($id, Request $request)
    {
        $this->validate($request, [
			'file' => 'required|file|image|mimes:pdf',
			'keterangan' => 'required',
		]);
 
		// menyimpan data file yang diupload ke variabel $file
		$file = $request->file('file');
 
        $jadwal = [
            'file'=> $file->getClientOriginalName(),
            'keterangan' => $request->keterangan
        ];

          // tujuan file disimpan di folder apa?
        $tujuan_upload = 'data_jadwal';
 
        // upload file
        $file->move($tujuan_upload,$file->getClientOriginalName());
               
	    // update data 
        DB::table('jadwal_pelajaran')->where('id_jadwal',$request->id)->update($jadwal);
        return redirect('jadwal_pelajaran');
    }


    //input data ke database
    public function proses_upload_jadwal(Request $request){
		$this->validate($request, [
			'file' => 'required|file|mimes:pdf|max:2048',
			'keterangan' => 'required',
		]);
 
		// menyimpan data file yang diupload ke variabel $file
		$file = $request->file('file');
 
      	        // nama file
		echo 'File Name: '.$file->getClientOriginalName();
		echo '<br>';
 
      	        // ekstensi file
		echo 'File Extension: '.$file->getClientOriginalExtension();
		echo '<br>';
 
      	        // real path
		echo 'File Real Path: '.$file->getRealPath();
		echo '<br>';
 
      	        // ukuran file
		echo 'File Size: '.$file->getSize();
		echo '<br>';
 
      	        // tipe mime
		echo 'File Mime Type: '.$file->getMimeType();
 
      	        // isi dengan nama folder tempat kemana file diupload
		$tujuan_upload = 'data_jadwal';
 
                // upload file
        $file->move($tujuan_upload,$file->getClientOriginalName());
            
        DB::table('jadwal_pelajaran')->insert([
            'keterangan' => $request->keterangan,
            'file'=> $file->getClientOriginalName(),

        ]);

        // alihkan halaman ke halaman pegawai
        return redirect('jadwal_pelajaran');
    }
    
    //hapus data berita berdasarkan id_berita
    public function hapusjadwal($id)
    {
	    // menghapus data pegawai berdasarkan id yang dipilih
	    DB::table('jadwal_pelajaran')->where('id_jadwal',$id)->delete();
		
	    // alihkan halaman ke halaman pegawai
	    return redirect('jadwal_pelajaran');
    }     
    
   
    //--------------------------------------------------------------------- Batas halaman jadwal pelajaran admin

   

    //---------------------------------------------------------------------halaman USER admin
    public function user(){
        return view('admin.datauser');
    }

    public function lihatuser(){
        $hasil = User_Model::all();
        return view('admin.datauser',['liat'=>$hasil]);
    }

    public function tambahuser()
    { 
	    // memanggil view tambah
	    return view('admin.input.input_datauser');
 
    }

    //input data ke database
    public function storeuser(Request $request)
    {
	    // insert data ke table berita
	    DB::table('user')->insert([
		'nama' => $request->nama,
		'email' => $request->email,
		'password' => $request->password
	]);
	    // alihkan halaman ke halaman berita
	    return redirect('datauser');
 
    }

    //edit data berita
    public function edituser($id){
        $hasil = User_Model::where('id_user',$id)->get();
        return view('admin.edit.edit_datauser',['liat'=>$hasil]);
    }

    // update data berita
    public function updateuser($id, Request $request)
    {
        $user = [
            'nama' => $request->nama,
		    'email' => $request->email,
		    'password' => $request->password
        ];
	    // update data berita
        DB::table('user')->where('id_user',$request->id)->update($user);
        return redirect('datauser');
    }

    
    //hapus data berita berdasarkan id_berita
    public function hapususer($id)
    {
	    // menghapus data pegawai berdasarkan id yang dipilih
	    DB::table('user')->where('id_user',$id)->delete();
		
	    // alihkan halaman ke halaman pegawai
	    return redirect('datauser');
    }
    //---------------------------------------------------------------------Batas halaman berita admin


    
    //---------------------------------------------------------------------halaman GALERY FOTO admin
    public function gambar(){
        return view('admin.galeryfoto');
    }

    public function lihatfoto(){
        $hasil = Galery_Model::all();
        return view('admin.galeryfoto',['liat'=>$hasil]);
    }

    public function tambahfoto()
    { 
	    // memanggil view tambah
	    return view('admin.input.input_galeryfoto');
 
    }
    
    //edit data 
    public function editfoto($id){
        $hasil = Galery_Model::where('id_galery',$id)->get();
        return view('admin.edit.edit_galeryfoto',['liat'=>$hasil]);
    }

    // update data 
    public function updatefoto($id, Request $request)
    {
        $this->validate($request, [
			'file' => 'required|file|image|mimes:jpeg,png,jpg',
			'keterangan' => 'required',
		]);
 
		// menyimpan data file yang diupload ke variabel $file
		$file = $request->file('file');
 
        $galery = [
            'file'=> $file->getClientOriginalName(),
            'keterangan' => $request->keterangan
        ];

          // tujuan file disimpan di folder apa?
        $tujuan_upload = 'data_file';
 
        // upload file
        $file->move($tujuan_upload,$file->getClientOriginalName());
               
	    // update data 
        DB::table('galery')->where('id_galery',$request->id)->update($galery);
        return redirect('galeryfoto');
    }

    
    //hapus data berita berdasarkan id_berita
    public function hapusfoto($id)
    {
	    // menghapus data pegawai berdasarkan id yang dipilih
	    DB::table('galery')->where('id_galery',$id)->delete();
		
	    // alihkan halaman ke halaman pegawai
	    return redirect('galeryfoto');
    }

    public function proses_upload(Request $request){
		$this->validate($request, [
			'file' => 'required|file|image|mimes:jpeg,png,jpg',
			'keterangan' => 'required',
		]);
 
		// menyimpan data file yang diupload ke variabel $file
		$file = $request->file('file');
 
      	        // nama file
		echo 'File Name: '.$file->getClientOriginalName();
		echo '<br>';
 
      	        // ekstensi file
		echo 'File Extension: '.$file->getClientOriginalExtension();
		echo '<br>';
 
      	        // real path
		echo 'File Real Path: '.$file->getRealPath();
		echo '<br>';
 
      	        // ukuran file
		echo 'File Size: '.$file->getSize();
		echo '<br>';
 
      	        // tipe mime
		echo 'File Mime Type: '.$file->getMimeType();
 
      	        // isi dengan nama folder tempat kemana file diupload
		$tujuan_upload = 'data_file';
 
                // upload file
        $file->move($tujuan_upload,$file->getClientOriginalName());
            
        DB::table('galery')->insert([
            'file'=> $file->getClientOriginalName(),
            'keterangan' => $request->keterangan
        ]);

        // alihkan halaman ke halaman pegawai
        return redirect('galeryfoto');
    }
    //---------------------------------------------------------------------Batas halaman GALERY FOTO admin
  

}