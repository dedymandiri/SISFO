@extends('layouts.master')

@section('content') 

<br>
<div style="margin-left:20px;width:930px;" class="card">
<div style="background:#3498db;height:800px;height:10px;" class="card"></div>

<h4 class="card-header info-color white-text text-center py-4">
  <strong>EDIT GALERY FOTO</strong>
</h4>
<br><br>
@foreach($liat as $li)
<form style="width:730px;margin-left:35px;" action="/galeryfoto/update/{{ $li->id_galery }}" method="post" enctype="multipart/form-data">
{{ csrf_field() }}
<br>
<div class="form-group">
    <label for="exampleFormControlFile1">Gambar/Foto :</label>
    <input type="file" name="file" class="form-control-file" id="exampleFormControlFile1">
    <br><label>File saat ini : {{ $li->file}}</label>
  </div><br>
  <div class="form-group">
    <label for="keterangan">Keterangan :</label>
    <input type="text" class="form-control" placeholder="Keterangan " required="required" name="keterangan" value="{{ $li->keterangan }}">
  </div>
  
  <!--bagian button-->
  <div style="margin-top:105px;width:930px;margin-left:-35px;" class="card-header info-color white-text text-center py-4">
    <button style="margin-left:-700px;" type="submit" class="btn btn-primary" value="Simpan">Simpan</button>
    <a href="/galeryfoto"><button  title="Edit" type="button"  class="btn btn-primary">Kembali</button></a>
  </div>
</form>

</form>
@endforeach
</div>
<br>

@endsection