@extends('layouts.master')

@section('content') 

<br>
<div style="width:800px;height:700px;margin-left:20px;" class="card">
<div style="background:#3498db;height:800px;height:10px;" class="card"></div>

<h4 class="card-header info-color white-text text-center py-4">
  <strong>Form Input Struktur Sekolah</strong>
</h4>
<br>
<form style="width:730px;margin-left:35px;" action="/struktur_sekolah/storestruktur_guru" method="post">
{{ csrf_field() }}
  <div class="form-group">
    <label for="judul">Nama Guru</label>
    <input type="text" class="form-control" placeholder="Nama guru" required="required" name="nama_guru">
  </div>
  <div class="form-group">
    <label for="tgl_waktu">Jabatan</label>
    <input type="text" class="form-control" placeholder="Jabatan " required="required" name="jabatan">
  </div>
   <br>
  <button type="submit" class="btn btn-primary" value="Simpan">Simpan</button>
</form>
</div>
<br>

@endsection