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

//halaman master dari admin lte
Route::get('/master','MasterController@index');
// batas halaman master dari admin lte

//halaman dashboard dari admin lte
Route::get('/dashboard','MasterController@dashboard');
// batas halaman dashboard dari admin lte

//halaman berita dari admin lte
Route::get('/berita','MasterController@berita');
//menampilkan data berita dari database
Route::get('/berita', 'MasterController@lihatberita');
//tambah data berita ke database
Route::get('/inputberita', 'MasterController@tambahberita');
Route::post('/berita/store','MasterController@store');
//edit(update) data berita ke database
Route::get('/formberita/{id}', 'MasterController@editberita');
Route::post('/berita/update/{id}', 'MasterController@updateberita');
//hapus data berita
Route::get('/berita/hapus/{id}','MasterController@hapusberita');
// batas halaman berita dari admin lte

//halaman pengumuman dari admin lte
Route::get('/pengumuman','MasterController@info');
//menampilkan data berita dari database
Route::get('/pengumuman', 'MasterController@lihatinfo');
//tambah data berita ke database
Route::get('/inputpengumuman', 'MasterController@tambahinfo');
Route::post('/pengumuman/storeinfo','MasterController@storeinfo');
//edit(update) data berita ke database
Route::get('/forminfo/{id}', 'MasterController@editinfo');
Route::post('/pengumuman/update/{id}', 'MasterController@updateinfo');
//hapus data berita
Route::get('/pengumuman/hapus/{id}','MasterController@hapusinfo');
// batas halaman pengumuman dari admin lte

//halaman sejarah dari admin lte
Route::get('/sejarah','MasterController@sejarah');

Route::get('/sejarah', 'MasterController@lihatsejarah');

Route::get('/formsejarah/{id}', 'MasterController@formsjrh');

Route::post('/sejarah/update','MasterControllerr@update');
// batas halaman sejarah dari admin lte

//halaman visimisi dari admin lte
Route::get('/visi_misi_tujuan','MasterController@vimitu');

Route::get('/visi_misi_tujuan', 'MasterController@lihatvimitu');

Route::get('/formvisimisi/{id}', 'MasterController@editvmt');
// batas halaman visimiss dari admin lte

Route::get('/datetimepacker','MasterController@datetime');
