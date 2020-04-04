@extends('layouts.master')

@section('content') 

<br>
<div style="margin-left:20px;width:930px;" class="card">
<div style="background:#3498db;height:800px;height:10px;" class="card"></div>

<h4 class="card-header info-color white-text text-center py-4">
  <strong>Form Input Data Pengguna</strong>
</h4>
<br>
<form style="width:730px;margin-left:35px;" action="/datauser/storeuser" method="post">
{{ csrf_field() }}
<br>
  <div class="form-group">
    <label for="judul">Nama :</label>
    <input type="text" class="form-control" placeholder="Nama Lengkap" required="required" name="nama">
  </div>
  <div class="form-group">
    <label for="tgl_waktu">Email :</label>
    <input type="email" class="form-control" placeholder="Email " required="required" name="email">
  </div>
  <div class="form-group">
    <label for="tgl_waktu">Password :</label>
    <input type="password" class="form-control" placeholder="Password " required="required" name="password">
  </div>
  
<!--bagian button-->
<div style="margin-top:105px;width:930px;margin-left:-35px;" class="card-header info-color white-text text-center py-4">
    <button style="margin-left:-700px;" type="submit" class="btn btn-primary" value="Simpan">Simpan</button>
    <a href="/datauser"><button  title="Edit" type="button"  class="btn btn-primary">Kembali</button></a>
  </div>

</form>
</div>
<br>

@endsection