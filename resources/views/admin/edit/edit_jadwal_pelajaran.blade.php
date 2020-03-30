@extends('layouts.master')

@section('content') 

<br>
<div style="width:800px;height:700px;margin-left:20px;" class="card">
<div style="background:#3498db;height:800px;height:10px;" class="card"></div>

<h4 class="card-header info-color white-text text-center py-4">
  <strong>Form Edit Jadwal Pelajaran</strong>
</h4>
<br><br>
@foreach($liat as $li)
<form style="width:730px;margin-left:35px;" action="/jadwal_pelajaran/update/{{ $li->id_jadwal }}" method="post" enctype="multipart/form-data">
{{ csrf_field() }}
<div class="form-group">
    <label for="exampleFormControlFile1">Gambar/Foto :</label>
    <input type="file" name="file" class="form-control-file" id="exampleFormControlFile1">    
    <div style="color:red;">*Pilih gambar/foto dengan ekstensi/format .png/jpg/jpeg</div>
    <label>File saat ini : {{ $li->file}}</label>
  </div>
  <div class="form-group">
    <label for="keterangan">Keterangan :</label>
    <input type="text" class="form-control" placeholder="Keterangan " required="required" name="keterangan" value="{{ $li->keterangan }}">
  </div>
  
  <br><br>
  <button type="submit" class="btn btn-primary" value="Simpan">Simpan</button>
  <a href="/jadwal_pelajaran"><button  title="Edit" type="button"  class="btn btn-primary">Kembali</button></a>
        
</form>
@endforeach
</div>
<br>

@endsection