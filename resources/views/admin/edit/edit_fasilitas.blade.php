@extends('layouts.master')

@section('content') 

<br>
<div style="margin-left:20px;width:930px;" class="card">
<div style="background:#3498db;height:800px;height:10px;" class="card"></div>

<h4 class="card-header info-color white-text text-center py-4">
  <strong>EDIT FASILITAS</strong>
</h4>
<br>
@foreach($liat as $li)
<form style="width:825px;margin-left:35px;" action="/fasilitas/update/{{ $li->id_fas }}" method="post">
{{ csrf_field() }}
  <div class="form-group">
    <label for="nama_ruang">Nama Ruang :</label>
    <input type="text" id="nama_ruang" class="form-control" placeholder="Nama ruangan" required="required" name="nama_ruang" value="{{ $li->nama_ruang }}">
  </div>
  <div class="form-group">
    <label for="kuantitas">Kuantitas :</label>
    <input type="text" id="kuantitas" class="form-control" placeholder="Kuantitas" required="required" name="kuantitas" value="{{ $li->kuantitas }}">
  </div>
  <div class="form-group">
    <label for="exampleFormControlSelect1">Kondisi :</label>
    <select class="form-control" id="exampleFormControlSelect1" class="form-control" required="required" name="kondisi" value="{{ $li->kondisi }}">
      <option>Kurang Baik</option>
      <option>Lumayan Baik</option>
      <option>Baik</option>
      <option>Sangat Baik</option>
    </select>
  </div> 
  

  <!--bagian button-->
  <div style="margin-top:105px;width:930px;margin-left:-35px;" class="card-header info-color white-text text-center py-4">
    <button style="margin-left:-700px;" type="submit" class="btn btn-primary" value="Simpan">Simpan</button>
    <a href="/fasilitas"><button  title="Edit" type="button"  class="btn btn-primary">Kembali</button></a>
  </div>

</form>
@endforeach
</div>
<br>

@endsection