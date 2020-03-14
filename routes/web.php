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
Route::get('/master','MasterController@index');
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

Route::get('/edit_sejarah/{id}', 'MasterController@editsejarah');
Route::post('/sejarah/update/{id}', 'MasterController@updatesejarah');
//--------------------------------------------------------------------batas halaman sejarah dari admin lte


//--------------------------------------------------------------------halaman visimisi dari admin lte
Route::get('/visi_misi_tujuan','MasterController@visi');

Route::get('/visi_misi_tujuan', 'MasterController@lihatvisi');

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
Route::get('/tkj','MasterController@tkj');
//menampilkan data berita dari database
Route::get('/tkj', 'MasterController@lihattkj');
//edit(update) data berita ke database
Route::get('/edit_tkj/{id}', 'MasterController@edittkj');
Route::post('/tkj/update/{id}', 'MasterController@updatetkj');
//---------------------------------------------------------------------batas halaman TKJ dari admin lte



//---------------------------------------------------------------------halaman TKJ dari admin lte
Route::get('/tkr','MasterController@tkr');
//menampilkan data berita dari database
Route::get('/tkr', 'MasterController@lihattkr');
//edit(update) data berita ke database
Route::get('/edit_tkr/{id}', 'MasterController@edittkr');
Route::post('/tkr/update/{id}', 'MasterController@updatetkr');
//---------------------------------------------------------------------batas halaman TKJ dari admin lte



//---------------------------------------------------------------------halaman OSIS dari admin lte
Route::get('/osis','MasterController@osis');
//menampilkan data berita dari database
Route::get('/osis', 'MasterController@lihatosis');
//edit(update) data berita ke database
Route::get('/edit_osis/{id}', 'MasterController@editosis');
Route::post('/osis/update/{id}', 'MasterController@updateosis');
//---------------------------------------------------------------------batas halaman OSIS dari admin lte



//---------------------------------------------------------------------halaman OSIS dari admin lte
Route::get('/pramuka','MasterController@pramuka');
//menampilkan data berita dari database
Route::get('/pramuka', 'MasterController@lihatpramuka');
//edit(update) data berita ke database
Route::get('/edit_pramuka/{id}', 'MasterController@editpramuka');
Route::post('/pramuka/update/{id}', 'MasterController@updatepramuka');
//---------------------------------------------------------------------batas halaman OSIS dari admin lte



//---------------------------------------------------------------------halaman PMR dari admin lte
Route::get('/pmr','MasterController@pmr');
//menampilkan data berita dari database
Route::get('/pmr', 'MasterController@lihatpmr');
//edit(update) data berita ke database
Route::get('/edit_pmr/{id}', 'MasterController@editpmr');
Route::post('/pmr/update/{id}', 'MasterController@updatepmr');
//---------------------------------------------------------------------batas halaman PMR dari admin lte



//---------------------------------------------------------------------halaman PASKIBRA dari admin lte
Route::get('/paskibra','MasterController@paskibra');
//menampilkan data berita dari database
Route::get('/paskibra', 'MasterController@lihatpaskibra');
//edit(update) data berita ke database
Route::get('/edit_paskibra/{id}', 'MasterController@editpaskibra');
Route::post('/paskibra/update/{id}', 'MasterController@updatepaskibra');
//---------------------------------------------------------------------batas halaman PASKIBRA dari admin lte

//---------------------------------------------------------------------halaman TKJ dari admin lte
Route::get('/jadwal_pelajaran','MasterController@jadwal');
//menampilkan data berita dari database
Route::get('/jadwal_pelajaran', 'MasterController@lihatjadwal');

//---------------------------------------------------------------------batas halaman TKJ dari admin lte


Route::get('/coba','MasterController@coba');