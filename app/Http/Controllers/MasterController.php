<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB; //Import database

// Model buat manggil tabel di database
use App\Berita;
use App\Pengumuman;
use App\Profil;
use App\Fasilitas;
use App\Struktur_guru;
use App\Tkj_model;
use App\Tkr_model;
use App\jadwalModel;
use App\Osis_Model;
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
        $hasil = Berita::where('id_berita',$id)->get();
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
        $hasil = Pengumuman::all();
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
        $hasil = Pengumuman::where('id_info',$id)->get();
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
        $hasil = Profil::all();
        return view('admin.sejarah',['liat'=>$hasil]);
    }

    public function editsejarah($id){
        $hasil = Profil::where('id_profil',$id)->get();
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
        $hasil = Profil::all();
        return view('admin.visi_misi_tujuan',['liat'=>$hasil]);
    }

    
    public function editvisi($id){
        $hasil = Profil::where('id_profil',$id)->get();
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
        $hasil = Fasilitas::all();
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
        $hasil = Fasilitas::where('id_fas',$id)->get();
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
        $hasil = Struktur_guru::all();
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
        $hasil = Struktur_guru::where('id_struktur_guru',$id)->get();
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
    public function tkj(){
        return view('admin.tkj');
    }

    public function lihattkj(){
        $hasil = Tkj_model::all();
        return view('admin.tkj',['liat'=>$hasil]);
    }

    //edit data berita
    public function edittkj($id){
        $hasil = Tkj_model::where('id_tkj',$id)->get();
        return view('admin.edit.edit_tkj',['liat'=>$hasil]);
    }

    // update data berita
    public function updatetkj($id, Request $request)
    {
        $tkj = [
        'deskripsi' => $request->deskripsi
        ];
        DB::table('jurusan_tkj')->where('id_tkj',$request->id)->update($tkj);

        return redirect('tkj');
    }
    //---------------------------------------------------------------------Batas TKJ berita admin


          
    //---------------------------------------------------------------------halaman TKR admin
    public function tkr(){
        return view('admin.tkr');
    }

    public function lihattkr(){
        $hasil = Tkr_model::all();
        return view('admin.tkr',['liat'=>$hasil]);
    }

    //edit data berita
    public function edittkr($id){
        $hasil = Tkr_model::where('id_tkr',$id)->get();
        return view('admin.edit.edit_tkr',['liat'=>$hasil]);
    }

    // update data berita
    public function updatetkr($id, Request $request)
    {
        $tkr = [
        'deskripsi' => $request->deskripsi
        ];
        DB::table('jurusan_tkr')->where('id_tkr',$request->id)->update($tkr);

        return redirect('tkr');
    }
    //---------------------------------------------------------------------Batas TKR berita admin



    //---------------------------------------------------------------------halaman OSIS admin
    public function osis(){
        return view('admin.osis');
    }

    public function lihatosis(){
        $hasil = Osis_model::all();
        return view('admin.osis',['liat'=>$hasil]);
    }

    //edit data berita
    public function editosis($id){
        $hasil = Osis_model::where('id_ekskul',$id)->get();
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
        $hasil = Osis_model::all();
        return view('admin.pramuka',['liat'=>$hasil]);
    }

    //edit data berita
    public function editpramuka($id){
        $hasil = Osis_model::where('id_ekskul',$id)->get();
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



    //---------------------------------------------------------------------halaman PMR admin
    public function pmr(){
        return view('admin.pmr');
    }

    public function lihatpmr(){
        $hasil = Osis_model::all();
        return view('admin.pmr',['liat'=>$hasil]);
    }

    //edit data berita
    public function editpmr($id){
        $hasil = Osis_model::where('id_ekskul',$id)->get();
        return view('admin.edit.edit_pmr',['liat'=>$hasil]);
    }

    // update data berita
    public function updatepmr($id, Request $request)
    {
        $tkr = [
        'deskripsi_pmr' => $request->deskripsi_pmr
        ];
        DB::table('ekskul')->where('id_ekskul',$request->id)->update($tkr);

        return redirect('pmr');
    }
    //---------------------------------------------------------------------Batas halaman PMR admin


    
    //---------------------------------------------------------------------halaman Paskibra admin
    public function paskibra(){
        return view('admin.paskibra');
    }

    public function lihatpaskibra(){
        $hasil = Osis_model::all();
        return view('admin.paskibra',['liat'=>$hasil]);
    }

    //edit data berita
    public function editpaskibra($id){
        $hasil = Osis_model::where('id_ekskul',$id)->get();
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

    public function coba(){
        return view('admin.coba');
    }
}


