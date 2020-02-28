<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
class MasterController extends Controller
{
    public function index(){
        return view('layouts.master');
    }

    //halaman dashboard admin
    public function dashboard(){
        return view('admin.dashboard');
    }
    //Batas halaman dashboard admin

    //halaman berita admin
    public function berita(){
        return view('admin.berita');
    }
    //Batas halaman berita admin

    //halaman pengumuman admin
    public function info(){
        return view('admin.pengumuman');
    }
    //Batas halaman pengumuman admin
}

