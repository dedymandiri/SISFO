@extends('layouts.master')

@section('content') 

<br>
<div style="margin-left:20px;width:930px;" class="card">
<div style="background:#3498db;height:800px;height:10px;" class="card"></div>

<h4 class="card-header info-color white-text text-center py-4">
  <strong>Form Edit Mata Pelajaran</strong>
</h4>
<br>
@foreach($liat as $li)
<form style="width:730px;margin-left:35px;" action="/mapel_siswa/update/{{ $li->id_mapel }}" method="post">
{{ csrf_field() }}
<br>
  <div class="form-group">
    <label for="judul">Mata Pelajaran :</label>
    <input type="text" class="form-control" placeholder="Mata Pelajaran" name="mapel_1" value="{{ $li->mapel_1 }}">
  </div>
  <div class="form-group">
    <label for="judul">Mata Pelajaran :</label>
    <input type="text" class="form-control" placeholder="Mata Pelajaran" name="mapel_2" value="{{ $li->mapel_2 }}">
  </div>
  <div class="form-group">
    <label for="judul">Mata Pelajaran :</label>
    <input type="text" class="form-control" placeholder="Mata Pelajaran" name="mapel_3" value="{{ $li->mapel_3 }}">
  </div>
  <div class="form-group">
    <label for="judul">Mata Pelajaran :</label>
    <input type="text" class="form-control" placeholder="Mata Pelajaran" name="mapel_4" value="{{ $li->mapel_4 }}">
  </div>
  <div class="form-group">
    <label for="judul">Mata Pelajaran :</label>
    <input type="text" class="form-control" placeholder="Mata Pelajaran" name="mapel_5" value="{{ $li->mapel_5 }}">
  </div>
  
  <div class="form-group">
    <label for="judul">Mata Pelajaran :</label>
    <input type="text" class="form-control" placeholder="Mata Pelajaran" name="mapel_6" value="{{ $li->mapel_6 }}">
  </div>
  <div class="form-group">
    <label for="judul">Mata Pelajaran :</label>
    <input type="text" class="form-control" placeholder="Mata Pelajaran" name="mapel_7" value="{{ $li->mapel_7 }}">
  </div>
  <div class="form-group">
    <label for="judul">Mata Pelajaran :</label>
    <input type="text" class="form-control" placeholder="Mata Pelajaran" name="mapel_8" value="{{ $li->mapel_8 }}">
    *Tulis " - " (strip) jika mau mengkosongkan mata pelajaran siswa.
  </div>

  <div style="margin-top:105px;width:930px;margin-left:-35px;" class="card-header info-color white-text text-center py-4">
    <button style="margin-left:-700px;" type="submit" class="btn btn-primary" value="Simpan">Simpan</button>
    <a href="/mapel_siswa"><button  title="Edit" type="button"  class="btn btn-primary">Kembali</button></a>
  </div>

</form>

@endforeach
</div>
<br>

@endsection