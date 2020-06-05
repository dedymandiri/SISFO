@extends('layouts.master')

@section('content') 

<br>
<div style="margin-left:20px;width:930px;" class="card">
<div style="background:#3498db;height:800px;height:10px;" class="card"></div>

<h4 class="card-header info-color white-text text-center py-4">
  <strong>EDIT BUKU TAMU</strong>
</h4>
<br>
@foreach($liat as $li)
<form style="width:730px;margin-left:35px;" action="/bukutamu/update/{{ $li->id_bukutamu }}" method="post">
{{ csrf_field() }}
<br>
  <div class="form-group">
    <label for="judul">Nama :</label>
    <input type="text" class="form-control" placeholder="Nama Lengkap" required="required" name="nama" value="{{ $li->nama }}">
  </div>
  <div class="form-group">
    <label for="tgl_waktu">Email :</label>
    <input type="email" class="form-control" placeholder="Email " required="required" name="email" value="{{ $li->email }}">
  </div>
  <div class="form-group">
    <label for="tgl_waktu">Komentar :</label>
    <textarea type="komentar" class="form-control" placeholder="kometar " required="required" name="komentar" value="" style="height:200px;">{{ $li->komentar }}</textarea>
  </div>

  <div style="margin-top:105px;width:930px;margin-left:-35px;" class="card-header info-color white-text text-center py-4">
    <button style="margin-left:-700px;" type="submit" class="btn btn-primary" value="Simpan">Simpan</button>
    <a href="/bukutamu"><button  title="Edit" type="button"  class="btn btn-primary">Kembali</button></a>
  </div>

</form>

@endforeach
</div>
<br>

@endsection