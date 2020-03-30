@extends('layouts.master')

@section('content') 

<br>
<div style="width:800px;height:700px;margin-left:20px;" class="card">
<div style="background:#3498db;height:800px;height:10px;" class="card"></div>

<h4 class="card-header info-color white-text text-center py-4">
  <strong>Form Edit Struktur Sekolah</strong>
</h4>
<br>
@foreach($liat as $li)
<form style="width:730px;margin-left:35px;" action="/struktur_sekolah/update/{{ $li->id_struktur_guru }}" method="post">
{{ csrf_field() }}
  <div class="form-group">
    <label for="judul">Nama Guru</label>
    <input type="text" id="nama_guru" class="form-control" placeholder="Nama guru" required="required" name="nama_guru" value="{{ $li->nama_guru }}">
  </div>
  <div class="form-group">
    <label for="tanggal_waktu">Jabatan</label>
    <input type="text" id="jabatan" class="form-control" placeholder="Jabatan" required="required" name="jabatan" value="{{ $li->jabatan }}">
  </div>

  <br><br>
  <button type="submit" class="btn btn-primary" value="Simpan">Simpan</button>
  <a href="/struktur_sekolah"><button  title="Edit" type="button"  class="btn btn-primary">Kembali</button></a>
  
</form>
@endforeach
</div>
<br>

@endsection