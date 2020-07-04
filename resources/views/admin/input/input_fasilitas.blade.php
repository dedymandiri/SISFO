@extends('layouts.master')

@section('content') 

<br>
<div style="margin-left:20px;width:930px;" class="card">
<div style="background:#3498db;height:800px;height:10px;" class="card"></div>

<h4 class="card-header info-color white-text text-center py-4">
  <strong>TAMBAH FASILITAS</strong>
</h4>
<br>
<form style="width:825px;margin-left:35px;" action="/fasilitas/storefas" method="post">
{{ csrf_field() }}
<br>
  <div class="form-group">
    <label for="judul">Nama Ruang :</label>
    <input type="text" class="form-control" placeholder="Nama ruangan" required="required" name="nama_ruang">
  </div>
  <div class="form-group">
    <label for="tgl_waktu">Kuantitas :</label>
    <input type="text" class="form-control" placeholder="Kuantitas" required="required" name="kuantitas">
  </div>
  <div class="form-group">
    <label for="exampleFormControlSelect1">Kondisi :</label>
    <select class="form-control" id="exampleFormControlSelect1" class="form-control" placeholder="Kondisi" required="required" name="kondisi">
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
</div>
<br>

@endsection