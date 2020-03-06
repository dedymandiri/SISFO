@extends('layouts.master')

@section('content') 

<br>
<div style="width:900px;height:800px;margin-left:20px;" class="card">

<h5 class="card-header info-color white-text text-center py-4">
  <strong>Form Input Fasilitas</strong>
</h5>
<br>
<form style="width:500px;margin-left:20px;" action="/fasilitas/storefas" method="post">
{{ csrf_field() }}
  <div class="form-group">
    <label for="judul">Nama Ruang</label>
    <input type="text" class="form-control" placeholder="Nama ruangan" required="required" name="nama_ruang">
  </div>
  <div class="form-group">
    <label for="tgl_waktu">Kuantitas</label>
    <input type="text" class="form-control" placeholder="Kuantitas " required="required" name="kuantitas">
  </div>
   
  <button type="submit" class="btn btn-primary" value="Simpan">Simpan</button>
</form>
</div>
<br>

@endsection