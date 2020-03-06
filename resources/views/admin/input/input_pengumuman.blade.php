@extends('layouts.master')

@section('content') 

<br>
<div style="width:900px;height:800px;margin-left:20px;" class="card">

<h5 class="card-header info-color white-text text-center py-4">
  <strong>Form Input Pengumuman</strong>
</h5>
<br>
<form style="width:500px;margin-left:20px;" action="/pengumuman/storeinfo" method="post">
{{ csrf_field() }}
  <div class="form-group">
    <label for="judul">Judul</label>
    <input type="text" class="form-control" placeholder="Judul" required="required" name="judul">
  </div>
  <div class="form-group">
    <label for="tgl_waktu">Tanggal_Waktu</label>
    <input type="text" class="form-control" placeholder="Jumat, 06 Mar 2020 10:09 WIB" required="required" name="tanggal_waktu">
  </div>
  <div class="form-group">
    <label for="isi">Isi_Pengumuman</label>
    <textarea style="height:300px;width:850px;margin-top:10px" class="form-control" placeholder="Masukan isi berita . . ." required="required" name="isi"></textarea>
  </div>   
  <div class="form-group">
    <label for="file">Pilih File :</label>
    <input type="file" class="form-control-file" name="file" id="exampleFormControlFile1">
  </div><br>
   
  <button type="submit" class="btn btn-primary" value="Simpan">Simpan</button>
</form>
</div>
<br>

@endsection