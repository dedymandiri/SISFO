@extends('layouts.master')

@section('content') 

<br>
<div style="width:900px;height:800px;margin-left:20px;" class="card">

<h5 class="card-header info-color white-text text-center py-4">
  <strong>Form Input Struktur Sekolah</strong>
</h5>
<br>
<form style="width:500px;margin-left:20px;" action="/struktur_sekolah/storestruktur_guru" method="post">
{{ csrf_field() }}
  <div class="form-group">
    <label for="judul">Nama Guru</label>
    <input type="text" class="form-control" placeholder="Nama guru" required="required" name="nama_guru">
  </div>
  <div class="form-group">
    <label for="tgl_waktu">Jabatan</label>
    <input type="text" class="form-control" placeholder="Jabatan " required="required" name="jabatan">
  </div>
   
  <button type="submit" class="btn btn-primary" value="Simpan">Simpan</button>
</form>
</div>
<br>

@endsection