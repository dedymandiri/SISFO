<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

//---------------------------------------------------------------------halaman master dari admin lte
Route::get('/master','MasterController@master');
//---------------------------------------------------------------------batas halaman master dari admin lte


//---------------------------------------------------------------------halaman dashboard dari admin lte
Route::get('/dashboard','MasterController@dashboard');
//---------------------------------------------------------------------batas halaman dashboard dari admin lte


//---------------------------------------------------------------------halaman berita dari admin lte
Route::get('/berita','MasterController@berita');
//menampilkan data berita dari database
Route::get('/berita', 'MasterController@lihatberita');
//tambah data berita ke database
Route::get('/inputberita', 'MasterController@tambahberita');
Route::post('/berita/store','MasterController@store');
//edit(update) data berita ke database
Route::get('/edit_berita/{id}', 'MasterController@editberita');
Route::post('/berita/update/{id}', 'MasterController@updateberita');
//hapus data berita
Route::get('/berita/hapus/{id}','MasterController@hapusberita');
//---------------------------------------------------------------------batas halaman berita dari admin lte


//---------------------------------------------------------------------halaman pengumuman dari admin lte
Route::get('/pengumuman','MasterController@info');
//menampilkan data berita dari database
Route::get('/pengumuman', 'MasterController@lihatinfo');
//tambah data berita ke database
Route::get('/input_pengumuman', 'MasterController@tambahinfo');
Route::post('/pengumuman/storeinfo','MasterController@storeinfo');
//edit(update) data berita ke database
Route::get('/edit_pengumuman/{id}', 'MasterController@editinfo');
Route::post('/pengumuman/update/{id}', 'MasterController@updateinfo');
//hapus data berita
Route::get('/pengumuman/hapus/{id}','MasterController@hapusinfo');
//---------------------------------------------------------------------batas halaman pengumuman dari admin lte


//---------------------------------------------------------------------halaman sejarah dari admin lte
Route::get('/sejarah','MasterController@sejarah');
Route::get('/sejarah', 'MasterController@lihatsejarah');

Route::get('/detail_sejarah','MasterController@detailsejarah');
Route::get('/detail_sejarah', 'MasterController@lihatdetailsejarah');

Route::get('/edit_sejarah/{id}', 'MasterController@editsejarah');
Route::post('/sejarah/update/{id}', 'MasterController@updatesejarah');
//--------------------------------------------------------------------batas halaman sejarah dari admin lte


//--------------------------------------------------------------------halaman visimisi dari admin lte
Route::get('/visi_misi_tujuan','MasterController@visi');
Route::get('/visi_misi_tujuan', 'MasterController@lihatvisi');

Route::get('/detail_visimisi','MasterController@detailvisimisi');
Route::get('/detail_visimisi', 'MasterController@lihatdetailvisimisi');

Route::get('/edit_visi_misi_tujuan/{id}', 'MasterController@editvisi');
Route::post('/visi_misi_tujuan/update/{id}', 'MasterController@updatevisi');
//--------------------------------------------------------------------batas halaman visimiss dari admin lte


//---------------------------------------------------------------------halaman fasilitas dari admin lte
Route::get('/fasilitas','MasterController@fasilitas');
//menampilkan data berita dari database
Route::get('/fasilitas', 'MasterController@lihatfas');
//tambah data berita ke database
Route::get('/input_fasilitas', 'MasterController@tambahfas');
Route::post('/fasilitas/storefas','MasterController@storefas');
//edit(update) data berita ke database
Route::get('/edit_fasilitas/{id}', 'MasterController@editfas');
Route::post('/fasilitas/update/{id}', 'MasterController@updatefas');
//hapus data berita
Route::get('/fasilitas/hapus/{id}','MasterController@hapusfas');
//---------------------------------------------------------------------batas halaman fasililtas dari admin lte



//---------------------------------------------------------------------halaman struktur guru dari admin lte
Route::get('/struktur_sekolah','MasterController@struktur_guru');
//menampilkan data berita dari database
Route::get('/struktur_sekolah', 'MasterController@lihatstruktur_guru');
//tambah data berita ke database
Route::get('/input_struktur_sekolah', 'MasterController@tambahstruktur_guru');
Route::post('/struktur_sekolah/storestruktur_guru','MasterController@storestruktur_guru');
//edit(update) data berita ke database
Route::get('/edit_struktur_sekolah/{id}', 'MasterController@editstruktur_guru');
Route::post('/struktur_sekolah/update/{id}', 'MasterController@updatestruktur_guru');
//hapus data berita
Route::get('/struktur_sekolah/hapus/{id}','MasterController@hapusstruktur_guru');
//---------------------------------------------------------------------batas halaman struktur guru dari admin lte



//---------------------------------------------------------------------halaman TKJ dari admin lte
Route::get('/multimedia','MasterController@multimedia');
//menampilkan data berita dari database
Route::get('/multimedia', 'MasterController@lihatmultimedia');

Route::get('/detail_multimedia','MasterController@detailmultimedia');
Route::get('/detail_multimedia', 'MasterController@lihatdetailmultimedia');

//edit(update) data berita ke database
Route::get('/edit_multimedia/{id}', 'MasterController@editmultimedia');
Route::post('/multimedia/update/{id}', 'MasterController@updatemultimedia');
//---------------------------------------------------------------------batas halaman TKJ dari admin lte



//---------------------------------------------------------------------halaman OSIS dari admin lte
Route::get('/osis','MasterController@osis');
//menampilkan data berita dari database
Route::get('/osis', 'MasterController@lihatosis');
//menampilkan data detail
Route::get('/detail_osis','MasterController@detailosis');
Route::get('/detail_osis', 'MasterController@lihatdetailosis');
//edit(update) data berita ke database
Route::get('/edit_osis/{id}', 'MasterController@editosis');
Route::post('/osis/update/{id}', 'MasterController@updateosis');
//---------------------------------------------------------------------batas halaman OSIS dari admin lte



//---------------------------------------------------------------------halaman OSIS dari admin lte
Route::get('/pramuka','MasterController@pramuka');
//menampilkan data berita dari database
Route::get('/pramuka', 'MasterController@lihatpramuka');
//menampilkan data detail
Route::get('/detail_pramuka','MasterController@detailpramuka');
Route::get('/detail_pramuka', 'MasterController@lihatdetailpramuka');
//edit(update) data berita ke database
Route::get('/edit_pramuka/{id}', 'MasterController@editpramuka');
Route::post('/pramuka/update/{id}', 'MasterController@updatepramuka');
//---------------------------------------------------------------------batas halaman OSIS dari admin lte



//---------------------------------------------------------------------halaman KARATE dari admin lte
Route::get('/karate','MasterController@karate');
//menampilkan data berita dari database
Route::get('/karate', 'MasterController@lihatkarate');
//menampilkan data detail
Route::get('/detail_karate','MasterController@detailkarate');
Route::get('/detail_karate', 'MasterController@lihatdetailkarate');
//edit(update) data berita ke database
Route::get('/edit_karate/{id}', 'MasterController@editkarate');
Route::post('/karate/update/{id}', 'MasterController@updatekarate');
//---------------------------------------------------------------------batas halaman KARATE dari admin lte



//---------------------------------------------------------------------halaman HADROH dari admin lte
Route::get('/hadroh','MasterController@hadroh');
//menampilkan data berita dari database
Route::get('/hadroh', 'MasterController@lihathadroh');
//menampilkan data detail
Route::get('/detail_hadroh','MasterController@detailhadroh');
Route::get('/detail_hadroh', 'MasterController@lihatdetailhadroh');
//edit(update) data berita ke database
Route::get('/edit_hadroh/{id}', 'MasterController@edithadroh');
Route::post('/hadroh/update/{id}', 'MasterController@updatehadroh');
//---------------------------------------------------------------------batas halaman HADROH dari admin lte



//---------------------------------------------------------------------halaman PASKIBRA dari admin lte
Route::get('/paskibra','MasterController@paskibra');
//menampilkan data berita dari database
Route::get('/paskibra', 'MasterController@lihatpaskibra');
//menampilkan data detail
Route::get('/detail_paskibra','MasterController@detailpaskibra');
Route::get('/detail_paskibra', 'MasterController@lihatdetailpaskibra');
//edit(update) data berita ke database
Route::get('/edit_paskibra/{id}', 'MasterController@editpaskibra');
Route::post('/paskibra/update/{id}', 'MasterController@updatepaskibra');
//---------------------------------------------------------------------batas halaman PASKIBRA dari admin lte




//---------------------------------------------------------------------halaman GALERI FOTO dari admin lte
Route::get('/galeryfoto','MasterController@gambar');

//menampilkan data berita dari database
Route::get('/galeryfoto', 'MasterController@lihatfoto');
//tambah data berita ke database
Route::get('/input_galeryfoto', 'MasterController@tambahfoto');
Route::post('/galeryfoto/proses', 'MasterController@proses_upload');
//edit(update) data berita ke database
Route::get('/edit_galeryfoto/{id}', 'MasterController@editfoto');
Route::post('/galeryfoto/update/{id}', 'MasterController@updatefoto');
//hapus data berita
Route::get('/galeryfoto/hapus/{id}','MasterController@hapusfoto');

// Route untuk menampilkan form upload
Route::get('form-upload','MasterController@form');

//---------------------------------------------------------------------batas halaman  GALERI FOTO dari admin lte



//---------------------------------------------------------------------halaman jadwal pelajaran dari admin lte
Route::get('/jadwal_pelajaran','MasterController@jadwal');
//menampilkan data berita dari database
Route::get('/jadwal_pelajaran', 'MasterController@lihatjadwal');
//tambah data berita ke database
Route::get('/input_jadwal_pelajaran', 'MasterController@tambahjadwal');
Route::post('/jadwal_pelajaran/proses', 'MasterController@proses_upload_jadwal');
//edit(update) data berita ke database
Route::get('/edit_jadwal_pelajaran/{id}', 'MasterController@editjadwal');
Route::post('/jadwal_pelajaran/update/{id}', 'MasterController@updatejadwal');
//hapus data berita
Route::get('/jadwal_pelajaran/hapus/{id}','MasterController@hapusjadwal');
//---------------------------------------------------------------------batas halaman jadwal pelajaran dari admin lte



//---------------------------------------------------------------------halaman kalender sekolah dari admin lte
Route::get('/kalender_sekolah','MasterController@kalender');
//menampilkan data berita dari database
Route::get('/kalender_sekolah', 'MasterController@lihatkalender');
//tambah data berita ke database
Route::get('/input_kalender_sekolah', 'MasterController@tambahkalender');
Route::post('/kalender_sekolah/proses', 'MasterController@proses_upload_kalender');
//edit(update) data berita ke database
Route::get('/edit_kalender_sekolah/{id}', 'MasterController@editkalender');
Route::post('/kalender_sekolah/update/{id}', 'MasterController@updatekalender');
//hapus data berita
Route::get('/kalender_sekolah/hapus/{id}','MasterController@hapuskalender');
//---------------------------------------------------------------------batas halaman kalender sekolah dari admin lte


//---------------------------------------------------------------------halaman DATA USER dari admin lte
Route::get('/pengguna','MasterController@pengguna');
//menampilkan data berita dari database
Route::get('/pengguna', 'MasterController@lihatpengguna');
//tambah data berita ke database
Route::get('/input_pengguna', 'MasterController@tambahpengguna');
Route::post('/pengguna/storepengguna','MasterController@storepengguna');
//edit(update) data berita ke database
Route::get('/edit_pengguna/{id}', 'MasterController@editpengguna');
Route::post('/pengguna/update/{id}', 'MasterController@updatepengguna');
//hapus data berita
Route::get('/pengguna/hapus/{id}','MasterController@hapuspengguna');
//---------------------------------------------------------------------batas halaman DATA USER dari admin lte


//---------------------------------------------------------------------halaman MAPEL SISWA TK 1dari admin lte
Route::get('/mapel_siswa','MasterController@mapel');
//menampilkan data berita dari database
Route::get('/mapel_siswa', 'MasterController@lihatmapel');
//edit(update) data berita ke database
Route::get('/edit_mapel_siswa/{id}', 'MasterController@editmapel');
Route::post('/mapel_siswa/update/{id}', 'MasterController@updatemapel');

//---------------------------------------------------------------------batas halamanMAPEL SISWA TK 1dari admin lte



//---------------------------------------------------------------------halaman NILAI SISWA dari admin lte
Route::get('/nilai_siswa','MasterController@nilai');
//menampilkan data berita dari database
Route::get('/nilai_siswa', 'MasterController@lihatnilai');
//tambah data berita ke database
Route::get('/input_nilai_siswa', 'MasterController@tambahnilai');
Route::post('/nilai_siswa/storenilai','MasterController@storenilai');
//edit(update) data berita ke database
Route::get('/edit_nilai_siswa/{id}', 'MasterController@editnilai');
Route::post('/nilai_siswa/update/{id}', 'MasterController@updatenilai');
//hapus data berita
Route::get('/nilai_siswa/hapus/{id}','MasterController@hapusnilai');

Route::get('/cetak_nilai_siswa/{id}','MasterController@cetaknilai');
Route::get('/cetak_nilai_siswa/{id}', 'MasterController@lihatcetaknilai');

//---------------------------------------------------------------------batas halaman NILAI TINGKAT 1 dari admin lte


//---------------------------------------------------------------------halaman NILAI TINGKAT 2 admin lte
Route::get('/nilai_siswa_tk2','MasterController@nilai_tk2');
//menampilkan data berita dari database
Route::get('/nilai_siswa_tk2', 'MasterController@lihatnilai_tk2');
//tambah data berita ke database
Route::get('/input_nilai_siswa_tk2', 'MasterController@tambahnilai_tk2');
Route::post('/nilai_siswa_tk2/storenilai_tk2','MasterController@storenilai_tk2');
//edit(update) data berita ke database
Route::get('/edit_nilai_siswa_tk2/{id}', 'MasterController@editnilai_tk2');
Route::post('/nilai_siswa_tk2/update/{id}', 'MasterController@updatenilai_tk2');
//hapus data berita
Route::get('/nilai_siswa_tk2/hapus/{id}','MasterController@hapusnilai_tk2');

Route::get('/cetak_nilai_siswa_tk2/{id}','MasterController@cetaknilai_tk2');
Route::get('/cetak_nilai_siswa_tk2/{id}', 'MasterController@lihatcetaknilai_tk2');

//---------------------------------------------------------------------batas halaman NILAI TINGKAT 2 dari admin lte



//---------------------------------------------------------------------halaman NILAI TINGKAT 3 admin lte
Route::get('/nilai_siswa_tk3','MasterController@nilai_tk3');
//menampilkan data berita dari database
Route::get('/nilai_siswa_tk3', 'MasterController@lihatnilai_tk3');
//tambah data berita ke database
Route::get('/input_nilai_siswa_tk3', 'MasterController@tambahnilai_tk3');
Route::post('/nilai_siswa_tk3/storenilai_tk3','MasterController@storenilai_tk3');
//edit(update) data berita ke database
Route::get('/edit_nilai_siswa_tk3/{id}', 'MasterController@editnilai_tk3');
Route::post('/nilai_siswa_tk3/update/{id}', 'MasterController@updatenilai_tk3');
//hapus data berita
Route::get('/nilai_siswa_tk3/hapus/{id}','MasterController@hapusnilai_tk3');

Route::get('/cetak_nilai_siswa_tk3/{id}','MasterController@cetaknilai_tk3');
Route::get('/cetak_nilai_siswa_tk3/{id}', 'MasterController@lihatcetaknilai_tk3');

//---------------------------------------------------------------------batas halaman NILAI TINGKAT 3 dari admin lte



//---------------------------------------------------------------------halaman HASIL SELEKSI dari admin lte
Route::get('/hasil_seleksi','MasterController@seleksi');
//menampilkan data berita dari database
Route::get('/hasil_seleksi', 'MasterController@lihatseleksi');
//tambah data berita ke database
Route::get('/input_hasil_seleksi', 'MasterController@tambahseleksi');
Route::post('/hasil_seleksi/proses', 'MasterController@proses_upload_seleksi');
//edit(update) data berita ke database
Route::get('/edit_hasil_seleksi/{id}', 'MasterController@editseleksi');
Route::post('/hasil_seleksi/update/{id}', 'MasterController@updateseleksi');
//hapus data berita
Route::get('/hasil_seleksi/hapus/{id}','MasterController@hapusseleksi');
//---------------------------------------------------------------------batas halaman HASIL SELEKSI dari admin lte



//---------------------------------------------------------------------halaman DATA PENDAFTAR dari admin lte
Route::get('/pendaftaran','MasterController@daftar');
//menampilkan data berita dari database
Route::get('/pendaftaran', 'MasterController@lihatdaftar');
//tambah data berita ke database
Route::get('/input_pendaftaran', 'MasterController@tambahdaftar');
Route::post('/pendaftaran/storedaftar','MasterController@storedaftar');
//edit(update) data berita ke database
Route::get('/edit_pendaftaran/{id}', 'MasterController@editdaftar');
Route::post('/pendaftaran/update/{id}', 'MasterController@updatedaftar');
//hapus data berita
Route::get('/pendaftaran/hapus/{id}','MasterController@hapusdaftar');
//---------------------------------------------------------------------batas halaman DATA PENDAFTAR dari admin lte
