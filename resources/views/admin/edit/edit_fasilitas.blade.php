@extends('layouts.master')

@section('content') 

<br>
<div style="width:900px;height:820px;margin-left:20px;" class="card">

<h5 class="card-header info-color white-text text-center py-4">
  <strong>Form Edit Fasilitas</strong>
</h5>
<br>
@foreach($liat as $li)
<form style="width:500px;margin-left:20px;" action="/fasilitas/update/{{ $li->id_fas }}" method="post">
{{ csrf_field() }}
  <div class="form-group">
    <label for="judul">Nama Ruang</label>
    <input type="text" id="nama_ruang" class="form-control" placeholder="Nama ruangan" required="required" name="nama_ruang" value="{{ $li->nama_ruang }}">
  </div>
  <div class="form-group">
    <label for="tanggal_waktu">Kuantitas</label>
    <input type="text" id="kuantitas" class="form-control" placeholder="Kuantitas" required="required" name="kuantitas" value="{{ $li->kuantitas }}">
  </div>
  
  <button type="submit" class="btn btn-primary" value="Simpan">Simpan</button>
</form>
@endforeach
</div>
<br>

@endsection