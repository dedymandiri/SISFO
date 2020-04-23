@extends('layouts.master')

@section('content') 

<br>
<div style="margin-left:20px;width:930px;" class="card">
<div style="background:#3498db;height:800px;height:10px;" class="card"></div>

<h4 class="card-header info-color white-text text-center py-4">
  <strong>EDIT PELAJARAN TINGKAT 1</strong>
</h4>
<br>
@foreach($liat as $li)
<form style="width:730px;margin-left:35px;" action="/mapel_siswa/update/{{ $li->id_mapel }}" method="post">
{{ csrf_field() }}
<br>
  <div class="form-group">
    <label for="judul">Pelajaran 1 :</label>
    <input type="text" class="form-control" placeholder="Mata Pelajaran" name="pel_1" value="{{ $li->pel_1 }}">
  </div>
  <div class="form-group">
    <label for="judul">Pelajaran 2 :</label>
    <input type="text" class="form-control" placeholder="Mata Pelajaran" name="pel_2" value="{{ $li->pel_2 }}">
  </div>
  <div class="form-group">
    <label for="judul">Pelajaran 3 :</label>
    <input type="text" class="form-control" placeholder="Mata Pelajaran" name="pel_3" value="{{ $li->pel_3 }}">
  </div>
  <div class="form-group">
    <label for="judul">Pelajaran 4 :</label>
    <input type="text" class="form-control" placeholder="Mata Pelajaran" name="pel_4" value="{{ $li->pel_4 }}">
  </div>
  <div class="form-group">
    <label for="judul">Pelajaran 5 :</label>
    <input type="text" class="form-control" placeholder="Mata Pelajaran" name="pel_5" value="{{ $li->pel_5 }}">
  </div>
  <div class="form-group">
    <label for="judul">Pelajaran 6 :</label>
    <input type="text" class="form-control" placeholder="Mata Pelajaran" name="pel_6" value="{{ $li->pel_6 }}">
  </div>
  <div class="form-group">
    <label for="judul">Pelajaran 7 :</label>
    <input type="text" class="form-control" placeholder="Mata Pelajaran" name="pel_7" value="{{ $li->pel_7 }}">
  </div>
  <div class="form-group">
    <label for="judul">Pelajaran 8 :</label>
    <input type="text" class="form-control" placeholder="Mata Pelajaran" name="pel_8" value="{{ $li->pel_8 }}">
  </div>
  <div class="form-group">
    <label for="judul">Pelajaran 9 :</label>
    <input type="text" class="form-control" placeholder="Mata Pelajaran" name="pel_9" value="{{ $li->pel_9 }}">
  </div>
  <div class="form-group">
    <label for="judul">Pelajaran 10 :</label>
    <input type="text" class="form-control" placeholder="Mata Pelajaran" name="pel_10" value="{{ $li->pel_10 }}">
  </div>
  <div class="form-group">
    <label for="judul">Pelajaran 11 :</label>
    <input type="text" class="form-control" placeholder="Mata Pelajaran" name="pel_11" value="{{ $li->pel_11 }}">
  </div>
  <div class="form-group">
    <label for="judul">Pelajaran 12 :</label>
    <input type="text" class="form-control" placeholder="Mata Pelajaran" name="pel_12" value="{{ $li->pel_12 }}">
  </div>
  <div class="form-group">
    <label for="judul">Pelajaran 13 :</label>
    <input type="text" class="form-control" placeholder="Mata Pelajaran" name="pel_13" value="{{ $li->pel_13 }}">
  </div>

  <div class="ket" style="color:red;">* Beri tanda strip (-) bila ingin kosongkan mata pelajaran.</div>
  <div style="margin-top:105px;width:930px;margin-left:-35px;" class="card-header info-color white-text text-center py-4">
    <button style="margin-left:-700px;" type="submit" class="btn btn-primary" value="Simpan">Simpan</button>
    <a href="/mapel_siswa"><button  title="Edit" type="button"  class="btn btn-primary">Kembali</button></a>
  </div>

</form>

@endforeach
</div>
<br>

@endsection