@extends('layouts.master')

@section('content') 

<br>
<div style="width:900px;height:820px;margin-left:20px;" class="card">

<h5 class="card-header info-color white-text text-center py-4">
  <strong>Form Edit Berita</strong>
</h5>
<br>
@foreach($liat as $li)
<form style="width:500px;margin-left:20px;" action="/berita/update/{{ $li->id_berita }}" method="post">
{{ csrf_field() }}
  <div class="form-group">
    <label for="judul">Judul</label>
    <input type="text" id="judul" class="form-control" placeholder="Judul" required="required" name="judul" value="{{ $li->judul }}">
  </div>
  <div class="form-group">
    <label for="tanggal_waktu">Tanggal_Waktu</label>
    <input type="text" id="tanggal_waktu" class="form-control" placeholder="Jumat, 06 Mar 2020 10:09 WIB" required="required" name="tanggal_waktu" value="{{ $li->tanggal_waktu }}">
  </div>
  <div class="form-group">
    <label for="isi">Isi_Berita</label>
    <textarea style="height:300px;width:850px;margin-top:10px" id="isi" class="form-control" placeholder="Masukan isi berita . . ." required="required" name="isi">{{ $li->isi }}</textarea>
  </div>   
  <div class="form-group">
    <label for="file">File Saat Ini : {{ $li->file }}</label>
    <input type="file" id="file" class="form-control-file" required="required" name="file" value="c:/passwords.txt">
 </div><br>
  
  <button type="submit" class="btn btn-primary" value="Simpan">Simpan</button>
</form>
@endforeach
</div>
<br>

@endsection