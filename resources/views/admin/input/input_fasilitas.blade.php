@extends('layouts.master')

@section('content') 

<br>
<div style="width:900px;height:700px;margin-left:20px;" class="card">
<div style="background:#3498db;height:800px;height:10px;" class="card"></div>

<h4 class="card-header info-color white-text text-center py-4">
  <strong>Form Input Fasilitas</strong>
</h4>
<br>
<form style="width:825px;margin-left:35px;" action="/fasilitas/storefas" method="post">
{{ csrf_field() }}
  <div class="form-group">
    <label for="judul">Nama Ruang</label>
    <input type="text" class="form-control" placeholder="Nama ruangan" required="required" name="nama_ruang">
  </div>
  <div class="form-group">
    <label for="tgl_waktu">Kuantitas</label>
    <input type="text" class="form-control" placeholder="Kuantitas " required="required" name="kuantitas">
  </div>

  <br><br>
  <button type="submit" class="btn btn-primary" value="Simpan">Simpan</button>
  <a href="/fasilitas"><button  title="Edit" type="button"  class="btn btn-primary">Kembali</button></a>
  
</form>
</div>
<br>

@endsection