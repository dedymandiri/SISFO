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
// batas halaman berita dari admin lte

//halaman pengumuman dari admin lte
Route::get('/pengumuman','MasterController@info');
// batas halaman pengumuman dari admin lte
