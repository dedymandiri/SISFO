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
use App\Admin_Model;
// Batas Model buat manggil tabel di database

use Storage;
use PDF;

class MasterController extends Controller
{
    public function master(){
        return view('layouts.master');
    }

    //---------------------------------------------------------------------halaman dashboard admin
    public function dashboard(){
        return view('admin.dashboard');
    }

    public function tampiljumlah(){
        $programming_count = Pengguna_Model::where('id_pengguna','1')->get()->count();
        return view('admin.dashboard',['programming_count'=>$programming_count]);
    }
    //---------------------------------------------------------------------Batas halaman dashboard admin


    
    //---------------------------------------------------------------------halaman SAMBUTAN admin
    public function sambutan(){
        return view('admin.sambutan');
    }

    public function lihatsambutan(){
        $hasil = Sambutan_Model::all();
        return view('admin.sambutan',['liat'=>$hasil]);
    }

    public function tambahsambutan()
    { 
	    // memanggil view tambah
	    return view('admin.input.input_sambutan');
 
    }

    public function proses_upload_sambutan(Request $request){
        $this->validate($request, [
			'file' => 'required|image|mimes:jpeg,png,jpg',
            'nama' => 'required',
            'isi' => 'required'
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
		$tujuan_upload = 'data_sambutan';
 
                // upload file
        $file->move($tujuan_upload,$file->getClientOriginalName());
            
        DB::table('sambutan')->insert([
            'file'=> $file->getClientOriginalName(),
            'nama' => $request->nama,
            'isi' => $request->isi
        ]);

        // alihkan halaman ke halaman pegawai
        return redirect('sambutan');
    }
    

    //edit data sambutan
    public function editsambutan($id){
        $hasil = Sambutan_Model::where('id_sam',$id)->get();
        return view('admin.edit.edit_sambutan',['liat'=>$hasil]);
    }
 
    // update data 
 public function updatesambutan($id, Request $request)
 {
     $this->validate($request, [
         'file' => 'required|image|mimes:jpeg,png,jpg',
         'nama' => 'required',
         'isi' => 'required'
     ]);

     // menyimpan data file yang diupload ke variabel $file
     $file = $request->file('file');

     $sambutan = [
         'file'=> $file->getClientOriginalName(),
         'nama' => $request->nama,
         'isi' => $request->isi
     ];

       // tujuan file disimpan di folder apa?
     $tujuan_upload = 'data_sambutan';

     // upload file
     $file->move($tujuan_upload,$file->getClientOriginalName());
            
     // update data 
     DB::table('sambutan')->where('id_sam',$request->id)->update($sambutan);
     return redirect('sambutan');
    }    

    public function detailsambutan(){
        return view('admin.detail.detail_sambutan');
    }

    public function lihatdetailsambutan(){
        $hasil = Sambutan_Model::all();
        return view('admin.detail.detail_sambutan',['liat'=>$hasil]);
    }
   
    //---------------------------------------------------------------------Batas halaman SAMBUTAN admin



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

    
    public function detailberita(){
        return view('admin.detail.detail_berita');
    }

    public function lihatdetailberita(){
        $hasil = Berita_Model::all();
        return view('admin.detail.detail_berita',['liat'=>$hasil]);
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

    
    public function detailinfo(){
        return view('admin.detail.detail_pengumuman');
    }

    public function lihatdetailinfo(){
        $hasil = Pengumuman_Model::all();
        return view('admin.detail.detail_pengumuman',['liat'=>$hasil]);
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
        'kuantitas' => $request->kuantitas,
        'kondisi' => $request->kondisi
		
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
            'kuantitas' => $request->kuantitas,
            'kondisi' => $request->kondisi
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
        'nip_nik' => $request->nip_nik,
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
            'nip_nik' => $request->nip_nik,
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
            'keterangan' => 'required',            
			'file' => 'required|file|mimes:pdf',
		]);
 
		// menyimpan data file yang diupload ke variabel $file
		$file = $request->file('file');
 
        $jadwal = [
            'keterangan' => $request->keterangan,            
            'file'=> $file->getClientOriginalName(),
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
            'keterangan' => 'required',            
			'file' => 'required|file|mimes:pdf',
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

   

     //--------------------------------------------------------------------- halaman kalender sekolah admin
     public function kalender(){
        return view('admin.kalender_sekolah');
    }

    public function lihatkalender(){
        $hasil = Kalender_Model::all();
        return view('admin.kalender_sekolah',['liat'=>$hasil]);
    }

    public function tambahkalender()
    { 
	    // memanggil view tambah
	    return view('admin.input.input_kalender_sekolah');
 
    }
       
    //edit data 
    public function editkalender($id){
        $hasil = Kalender_Model::where('id_kalender',$id)->get();
        return view('admin.edit.edit_kalender_sekolah',['liat'=>$hasil]);
    }

    // update data 
    public function updatekalender($id, Request $request)
    {
        $this->validate($request, [
            'keterangan' => 'required',            
			'file' => 'required|file|mimes:pdf',
		]);
 
		// menyimpan data file yang diupload ke variabel $file
		$file = $request->file('file');
 
        $kalender = [
            'keterangan' => $request->keterangan,
            'file'=> $file->getClientOriginalName(),
        ];

          // tujuan file disimpan di folder apa?
        $tujuan_upload = 'data_kalender';
 
        // upload file
        $file->move($tujuan_upload,$file->getClientOriginalName());
               
	    // update data 
        DB::table('kalender_sekolah')->where('id_kalender',$request->id)->update($kalender);
        return redirect('kalender_sekolah');
    }


    //input data ke database
    public function proses_upload_kalender(Request $request){
		$this->validate($request, [
            'keterangan' => 'required',            
			'file' => 'required|file|mimes:pdf',
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
		$tujuan_upload = 'data_kalender';
 
                // upload file
        $file->move($tujuan_upload,$file->getClientOriginalName());
            
        DB::table('kalender_sekolah')->insert([
            'keterangan' => $request->keterangan,
            'file'=> $file->getClientOriginalName(),

        ]);

        // alihkan halaman ke halaman pegawai
        return redirect('kalender_sekolah');
    }
    
    //hapus data berita berdasarkan id_berita
    public function hapuskalender($id)
    {
	    // menghapus data pegawai berdasarkan id yang dipilih
	    DB::table('kalender_sekolah')->where('id_kalender',$id)->delete();
		
	    // alihkan halaman ke halaman pegawai
	    return redirect('kalender_sekolah');
    }     
    
   
    //--------------------------------------------------------------------- Batas halaman kalender sekolah admin

   


    //---------------------------------------------------------------------halaman USER admin
    public function pengguna(){
        return view('admin.pengguna');
    }

    public function lihatpengguna(){
        $hasil = Pengguna_Model::all();
        return view('admin.pengguna',['liat'=>$hasil]);
    }

    public function tambahpengguna()
    { 
	    // memanggil view tambah
	    return view('admin.input.input_pengguna');
 
    }

    //input data ke database
    public function storepengguna(Request $request)
    {
	    // insert data ke table berita
	    DB::table('pengguna')->insert([
		'nama' => $request->nama,
		'email' => $request->email,
		'password' => $request->password
	]);
	    // alihkan halaman ke halaman berita
	    return redirect('pengguna');
 
    }

    //edit data berita
    public function editpengguna($id){
        $hasil = Pengguna_Model::where('id_pengguna',$id)->get();
        return view('admin.edit.edit_pengguna',['liat'=>$hasil]);
    }

    // update data berita
    public function updatepengguna($id, Request $request)
    {
        $user = [
            'nama' => $request->nama,
		    'email' => $request->email,
		    'password' => $request->password
        ];
	    // update data berita
        DB::table('pengguna')->where('id_pengguna',$request->id)->update($user);
        return redirect('pengguna');
    }

    
    //hapus data berita berdasarkan id_berita
    public function hapuspengguna($id)
    {
	    // menghapus data pegawai berdasarkan id yang dipilih
	    DB::table('pengguna')->where('id_pengguna',$id)->delete();
		
	    // alihkan halaman ke halaman pegawai
	    return redirect('pengguna');
    }
    //---------------------------------------------------------------------Batas halaman data user admin



     //---------------------------------------------------------------------halaman BUKU TAMU  admin
     public function bukutamu(){
        return view('admin.bukutamu');
    }

    public function lihatbukutamu(){
        $hasil = Bukutamu_Model::all();
        return view('admin.bukutamu',['liat'=>$hasil]);
    }

    public function tambahbukutamu()
    { 
	    // memanggil view tambah
	    return view('admin.input.input_bukutamu');
 
    }

    //input data ke database
    public function storebukutamu(Request $request)
    {
	    // insert data ke table 
	    DB::table('buku_tamu')->insert([
		'nama' => $request->nama,
		'email' => $request->email,
		'komentar' => $request->komentar
	]);
	    // alihkan halaman ke halaman 
	    return redirect('bukutamu');
 
    }

    //edit data 
    public function editbukutamu($id){
        $hasil = Bukutamu_Model::where('id_bukutamu',$id)->get();
        return view('admin.edit.edit_bukutamu',['liat'=>$hasil]);
    }

    // update data 
    public function updatebukutamu($id, Request $request)
    {
        $user = [
            'nama' => $request->nama,
		    'email' => $request->email,
		    'komentar' => $request->komentar
        ];
	    // update data berita
        DB::table('buku_tamu')->where('id_bukutamu',$request->id)->update($user);
        return redirect('bukutamu');
    }

    
    //hapus data berita berdasarkan id_berita
    public function hapusbukutamu($id)
    {
	    // menghapus data pegawai berdasarkan id yang dipilih
	    DB::table('buku_tamu')->where('id_bukutamu',$id)->delete();
		
	    // alihkan halaman ke halaman pegawai
	    return redirect('bukutamu');
    }
    //---------------------------------------------------------------------Batas halaman data user admin



    
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
			'file' => 'required|image|mimes:jpeg,png,jpg',
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
			'file' => 'required|image|mimes:jpeg,png,jpg',
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
  

    
    //---------------------------------------------------------------------halaman MAPEL SISWA TINGKAT 1 admin
    public function mapel(){
        return view('admin.mapel_siswa');
    }

    public function lihatmapel(){
        //untuk menampilkan data dari database berdasarkan id 
        //menggunakan limit(2) = tampil data baris dengan id 1
        $hasil = DB::table('mapel')->Orderby('id_mapel')->limit(3)->get();
        return view('admin.mapel_siswa',['liat'=>$hasil]);
    }

    //edit data berita
    public function editmapel($id){
        $hasil = Mapel_Model::where('id_mapel',$id)->get();
        return view('admin.edit.edit_mapel_siswa',['liat'=>$hasil]);
    }

    // update data berita
    public function updatemapel($id, Request $request)
    {
        $mapel = [
            'pel_1' => $request->pel_1,
            'pel_2' => $request->pel_2,
            'pel_3' => $request->pel_3,
            'pel_4' => $request->pel_4,
            'pel_5' => $request->pel_5,
            'pel_6' => $request->pel_6,
            'pel_7' => $request->pel_7,
            'pel_8' => $request->pel_8,
            'pel_9' => $request->pel_9,
            'pel_10' => $request->pel_10,
            'pel_11' => $request->pel_11,
            'pel_12' => $request->pel_12,
            'pel_13' => $request->pel_13

        ];
	    // update data berita
        DB::table('mapel')->where('id_mapel',$request->id)->update($mapel);
        return redirect('mapel_siswa');
    }

   

    //---------------------------------------------------------------------Batas halaman MAPEL SISWA TINGKAT 1 admin



    
    //---------------------------------------------------------------------halaman MAPEL SISWA TINGKAT 2 admin

    //---------------------------------------------------------------------Batas halaman MAPEL SISWA TINGKAT 2 admin


    
     //--------------------------------------------------------------------- halaman HASIL SELEKSI admin
     public function seleksi(){
        return view('admin.hasil_seleksi');
    }

    public function lihatseleksi(){
        $hasil = Seleksi_Model::all();
        return view('admin.hasil_seleksi',['liat'=>$hasil]);
    }

    public function tambahseleksi()
    { 
	    // memanggil view tambah
	    return view('admin.input.input_hasil_seleksi');
 
    }
       
    //edit data 
    public function editseleksi($id){
        $hasil = Seleksi_Model::where('id_seleksi',$id)->get();
        return view('admin.edit.edit_hasil_seleksi',['liat'=>$hasil]);
    }

    // update data 
    public function updateseleksi($id, Request $request)
    {
        $this->validate($request, [
            'keterangan' => 'required',            
			'file' => 'required|file|mimes:pdf',
		]);
 
		// menyimpan data file yang diupload ke variabel $file
		$file = $request->file('file');
 
        $seleksi = [
            'keterangan' => $request->keterangan,
            'file'=> $file->getClientOriginalName(),
        ];

          // tujuan file disimpan di folder apa?
        $tujuan_upload = 'data_seleksi';
 
        // upload file
        $file->move($tujuan_upload,$file->getClientOriginalName());
               
	    // update data 
        DB::table('hasil_seleksi')->where('id_seleksi',$request->id)->update($seleksi);
        return redirect('hasil_seleksi');
    }


    //input data ke database
    public function proses_upload_seleksi(Request $request){
		$this->validate($request, [
            'keterangan' => 'required',
            'file' => 'required|file|mimes:pdf',
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
		$tujuan_upload = 'data_seleksi';
 
                // upload file
        $file->move($tujuan_upload,$file->getClientOriginalName());
            
        DB::table('hasil_seleksi')->insert([
            'keterangan' => $request->keterangan,
            'file'=> $file->getClientOriginalName(),

        ]);

        // alihkan halaman ke halaman pegawai
        return redirect('hasil_seleksi');
    }
    
    //hapus data berita berdasarkan id_berita
    public function hapusseleksi($id)
    {
	    // menghapus data pegawai berdasarkan id yang dipilih
	    DB::table('hasil_seleksi')->where('id_seleksi',$id)->delete();
		
	    // alihkan halaman ke halaman pegawai
	    return redirect('hasil_seleksi');
    }     
    
   
    //--------------------------------------------------------------------- Batas halaman kalender sekolah admin

   

    

    //---------------------------------------------------------------------halaman DATA PENDAFTARAN admin
    public function daftar(){
        return view('admin.pendaftaran');
    }

    public function lihatdaftar(){
        $hasil = Daftar_Model::all();
        return view('admin.pendaftaran',['liat'=>$hasil]);
    }

    public function tambahdaftar()
    { 
	    // memanggil view tambah
	    return view('admin.input.input_pendaftaran');
 
    }

    //input data ke database
    public function storedaftar(Request $request)
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
		    'alasan' => $request->alasan,
	]);
	    // alihkan halaman ke halaman berita
	    return redirect('pendaftaran');
 
    }

    //edit data berita
    public function editdaftar($id){
        $hasil = Daftar_Model::where('id_daftar',$id)->get();
        return view('admin.edit.edit_pendaftaran',['liat'=>$hasil]);
    }

    // update data berita
    public function updatedaftar($id, Request $request)
    {
        $daftar = [
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
		    'alasan' => $request->alasan,
        ];
	    // update data berita
        DB::table('pendaftaran')->where('id_daftar',$request->id)->update($daftar);
        return redirect('pendaftaran');
    }

    
    //hapus data berita berdasarkan id_berita
    public function hapusdaftar($id)
    {
	    // menghapus data pegawai berdasarkan id yang dipilih
	    DB::table('pendaftaran')->where('id_daftar',$id)->delete();
		
	    // alihkan halaman ke halaman pegawai
	    return redirect('pendaftaran');
    }
    //---------------------------------------------------------------------Batas halaman data user admin




    //--------------------------------------------------------------------- halaman Nilai TK 1 admin
    public function nilai(){
        return view('admin.nilai_siswa_tk1');
    }

    public function lihatnilai(){
        $siswa = Nilai_tk1_Model::all();
        $mapel = Mapel_Model::all();
        return view('admin.nilai_siswa_tk1',['tampil'=>$siswa, "mapel"=>$mapel]);
    }

    public function tambahnilai()
    { 
        // memanggil view tambah
        $mapel = Mapel_Model::all();
	    return view('admin.input.input_nilai_siswa_tk1',["mapel"=>$mapel]);
    }

    //input data ke database
    public function storenilai_tk1(Request $request)
    {
	    // insert data ke table berita
	    DB::table('nilai_tk1')->insert([
            'nama' => $request->nama,
            'kelas' => $request->kelas,
            'jurusan' => $request->jurusan,
            'mapel_1' => $request->mapel_1,
		    'mapel_2' => $request->mapel_2,
            'mapel_3' => $request->mapel_3,
            'mapel_4' => $request->mapel_4,
		    'mapel_5' => $request->mapel_5,
            'mapel_6' => $request->mapel_6,
            'mapel_7' => $request->mapel_7,
            'mapel_8' => $request->mapel_8,
            'mapel_9' => $request->mapel_9,
		    'mapel_10' => $request->mapel_10,
            'mapel_11' => $request->mapel_11,
            'mapel_12' => $request->mapel_12,
		    'mapel_13' => $request->mapel_13
	]);
	    // alihkan halaman ke halaman berita
	    return redirect('nilai_siswa_tk1');
 
    }

    //edit data berita
    public function editnilai($id){
        $hasil = Nilai_tk1_Model::where('id_rekap',$id)->get();
        $mapel = Mapel_Model::all();
        return view('admin.edit.edit_nilai_siswa_tk1',['tampil'=>$hasil, "mapel"=>$mapel]);
       
    }

    // update data berita
    public function updatenilai($id, Request $request)
    {
        $tk1 = [
            
            'nama' => $request->nama,
            'kelas' => $request->kelas,
            'jurusan' => $request->jurusan,
            'mapel_1' => $request->mapel_1,
		    'mapel_2' => $request->mapel_2,
            'mapel_3' => $request->mapel_3,
            'mapel_4' => $request->mapel_4,
		    'mapel_5' => $request->mapel_5,
            'mapel_6' => $request->mapel_6,
            'mapel_7' => $request->mapel_7,
            'mapel_8' => $request->mapel_8,
            'mapel_9' => $request->mapel_9,
		    'mapel_10' => $request->mapel_10,
            'mapel_11' => $request->mapel_11,
            'mapel_12' => $request->mapel_12,
		    'mapel_13' => $request->mapel_13
        ];
	    // update data berita
        DB::table('nilai_tk1')->where('id_rekap',$request->id)->update($tk1);
        return redirect('nilai_siswa_tk1');
    }

    
    //hapus data berita berdasarkan id_berita
    public function hapusnilai($id)
    {
	    // menghapus data pegawai berdasarkan id yang dipilih
	    DB::table('nilai_tk1')->where('id_rekap',$id)->delete();
		
	    // alihkan halaman ke halaman pegawai
	    return redirect('nilai_siswa_tk1');
    }

    public function cetaknilai(){
        return view('admin.cetak.cetak_nilai_siswa');
    }

    public function lihatcetaknilai($id){
        $hasil = Nilai_tk1_Model::where('id_rekap',$id)->get();
        $mapel = Mapel_Model::all();
        return view('admin.cetak.cetak_nilai_siswa',['liat'=>$hasil, 'mapel'=>$mapel]);
    }

    //---------------------------------------------------------------------Batas halaman Nilai TK 1 admin
  

    
    //--------------------------------------------------------------------- halaman Nilai TK 2 admin
    public function nilai_tk2(){
        return view('admin.nilai_siswa_tk2');
    }

    public function lihatnilai_tk2(){
        $siswa = Nilai_tk2_Model::all();
        $mapel = Mapel_Model::all();
        return view('admin.nilai_siswa_tk2',['tampil'=>$siswa, "mapel"=>$mapel]);
    }

    public function tambahnilai_tk2()
    { 
        // memanggil view tambah
        $mapel = Mapel_Model::all();
	    return view('admin.input.input_nilai_siswa_tk2',["mapel"=>$mapel]);
    }

    //input data ke database
    public function storenilai_tk2(Request $request)
    {
	    // insert data ke table berita
	    DB::table('nilai_tk2')->insert([
            'nama' => $request->nama,
            'kelas' => $request->kelas,
            'jurusan' => $request->jurusan,
            'mapel_1' => $request->mapel_1,
		    'mapel_2' => $request->mapel_2,
            'mapel_3' => $request->mapel_3,
            'mapel_4' => $request->mapel_4,
		    'mapel_5' => $request->mapel_5,
            'mapel_6' => $request->mapel_6,
            'mapel_7' => $request->mapel_7,
            'mapel_8' => $request->mapel_8,
            'mapel_9' => $request->mapel_9,
		    'mapel_10' => $request->mapel_10
	]);
	    // alihkan halaman ke halaman berita
	    return redirect('nilai_siswa_tk2');
 
    }

    //edit data berita
    public function editnilai_tk2($id){
        $hasil = Nilai_tk2_Model::where('id_rekap',$id)->get();
        $mapel = Mapel_Model::all();
        return view('admin.edit.edit_nilai_siswa_tk2',['tampil'=>$hasil, "mapel"=>$mapel]);
       
    }

    // update data berita
    public function updatenilai_tk2($id, Request $request)
    {
        $tk2 = [
            
            'nama' => $request->nama,
            'kelas' => $request->kelas,            
            'jurusan' => $request->jurusan,
            'mapel_1' => $request->mapel_1,
		    'mapel_2' => $request->mapel_2,
            'mapel_3' => $request->mapel_3,
            'mapel_4' => $request->mapel_4,
		    'mapel_5' => $request->mapel_5,
            'mapel_6' => $request->mapel_6,
            'mapel_7' => $request->mapel_7,
            'mapel_8' => $request->mapel_8,
            'mapel_9' => $request->mapel_9,
		    'mapel_10' => $request->mapel_10
        ];
	    // update data berita
        DB::table('nilai_tk2')->where('id_rekap',$request->id)->update($tk2);
        return redirect('nilai_siswa_tk2');
    }

    
    //hapus data berita berdasarkan id_berita
    public function hapusnilai_tk2($id)
    {
	    // menghapus data pegawai berdasarkan id yang dipilih
	    DB::table('nilai_tk2')->where('id_rekap',$id)->delete();
		
	    // alihkan halaman ke halaman pegawai
	    return redirect('nilai_siswa_tk2');
    }

    public function cetaknilai2(){
        return view('admin.cetak.cetak_nilai_siswa-2');
    }

    public function lihatcetaknilai2($id){
        $hasil = Nilai_tk2_Model::where('id_rekap',$id)->get();
        $mapel = Mapel_Model::all();
        return view('admin.cetak.cetak_nilai_siswa-2',['liat'=>$hasil, 'mapel'=>$mapel]);
    }


    //---------------------------------------------------------------------Batas halaman Nilai TK 2 admin
  


    
    //--------------------------------------------------------------------- halaman Nilai TK 3 admin
    public function nilai_tk3(){
        return view('admin.nilai_siswa_tk3');
    }

    public function lihatnilai_tk3(){
        $siswa = Nilai_tk3_Model::all();
        $mapel = Mapel_Model::all();
        return view('admin.nilai_siswa_tk3',['tampil'=>$siswa, "mapel"=>$mapel]);
    }

    public function tambahnilai_tk3()
    { 
        // memanggil view tambah
        $mapel = Mapel_Model::all();
	    return view('admin.input.input_nilai_siswa_tk3',["mapel"=>$mapel]);
    }

    //input data ke database
    public function storenilai_tk3(Request $request)
    {
	    // insert data ke table berita
	    DB::table('nilai_tk3')->insert([
            'nama' => $request->nama,
            'kelas' => $request->kelas,            
            'jurusan' => $request->jurusan,
            'mapel_1' => $request->mapel_1,
		    'mapel_2' => $request->mapel_2,
            'mapel_3' => $request->mapel_3,
            'mapel_4' => $request->mapel_4,
		    'mapel_5' => $request->mapel_5,
            'mapel_6' => $request->mapel_6,
            'mapel_7' => $request->mapel_7
	]);
	    // alihkan halaman ke halaman berita
	    return redirect('nilai_siswa_tk3');
 
    }

    //edit data berita
    public function editnilai_tk3($id){
        $hasil = Nilai_tk3_Model::where('id_rekap',$id)->get();
        $mapel = Mapel_Model::all();
        return view('admin.edit.edit_nilai_siswa_tk3',['tampil'=>$hasil, "mapel"=>$mapel]);
       
    }

    // update data berita
    public function updatenilai_tk3($id, Request $request)
    {
        $tk3 = [
            
            'nama' => $request->nama,
            'kelas' => $request->kelas,            
            'jurusan' => $request->jurusan,
            'mapel_1' => $request->mapel_1,
		    'mapel_2' => $request->mapel_2,
            'mapel_3' => $request->mapel_3,
            'mapel_4' => $request->mapel_4,
		    'mapel_5' => $request->mapel_5,
            'mapel_6' => $request->mapel_6,
            'mapel_7' => $request->mapel_7
        ];
	    // update data berita
        DB::table('nilai_tk3')->where('id_rekap',$request->id)->update($tk3);
        return redirect('nilai_siswa_tk3');
    }

    
    //hapus data berita berdasarkan id_berita
    public function hapusnilai_tk3($id)
    {
	    // menghapus data pegawai berdasarkan id yang dipilih
	    DB::table('nilai_tk3')->where('id_rekap',$id)->delete();
		
	    // alihkan halaman ke halaman pegawai
	    return redirect('nilai_siswa_tk3');
    }

    public function cetaknilai3(){
        return view('admin.cetak.cetak_nilai_siswa-3');
    }

    public function lihatcetaknilai3($id){
        $hasil = Nilai_tk3_Model::where('id_rekap',$id)->get();
        $mapel = Mapel_Model::all();
        return view('admin.cetak.cetak_nilai_siswa-3',['liat'=>$hasil, 'mapel'=>$mapel]);
    }

    //---------------------------------------------------------------------Batas halaman Nilai TK 3 admin
  

    //---------------------------------------------------------------------halaman LOGIN admin
    public function login(){
        return view('admin.login.login');
    }

    public function AuthCheck(Request $request) 
    {
        $this->validate($request,
 
            ['username'=>'required'],
 
            ['password'=>'required']
            
        );
 
        $user = $request->input('username');
        $pass = $request->input('password');        
 
        $users = DB::table('admin')->where(['username'=> $user])->first();
        
                if(count($users)==0){
        
                   return redirect('/herxpanel')->with('failed','Login gagal');
        
                } else
               
                if($users->username == $user AND Hash::check($pass, $users->password) ){
                    
                   Session::put('login', 'Selamat anda berhasil login');
                   return redirect('/herxpanel');
        
                } else {
                     
                   return redirect('/herxpanel')->with('failed','Login gagal');
          
                }
    }
    //---------------------------------------------------------------------Batas halaman LOGIN admin


}