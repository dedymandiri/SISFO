@extends('layouts.master')

@section('content') 

<br>
<div style="width:800px;height:700px;margin-left:20px;" class="card">
<div style="background:#3498db;height:800px;height:10px;" class="card"></div>

<h4 class="card-header info-color white-text text-center py-4">
  <strong>Form Edit Data User</strong>
</h4>
<br>
@foreach($liat as $li)
<form style="width:730px;margin-left:35px;" action="/datauser/update/{{ $li->id_user }}" method="post">
{{ csrf_field() }}
  <div class="form-group">
    <label for="judul">Nama</label>
    <input type="text" class="form-control" placeholder="Nama Lengkap" required="required" name="nama" value="{{ $li->nama }}">
  </div>
  <div class="form-group">
    <label for="tgl_waktu">Email</label>
    <input type="email" class="form-control" placeholder="Email " required="required" name="email" value="{{ $li->email }}">
  </div>
  <div class="form-group">
    <label for="tgl_waktu">Password</label>
    <input type="password" class="form-control" placeholder="Password " required="required" name="password" value="{{ $li->password }}">
  </div>

  <br><br>
  <button type="submit" class="btn btn-primary" value="Simpan">Simpan</button>
  <a href="/datauser"><button  title="Edit" type="button"  class="btn btn-primary">Kembali</button></a>
  
</form>
@endforeach
</div>
<br>

@endsection