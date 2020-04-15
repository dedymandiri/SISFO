@extends('layouts.master')

@section('content') 

<br>
<div style="margin-left:20px;width:930px;" class="card">
<div style="background:#3498db;height:800px;height:10px;" class="card"></div>

<h4 class="card-header info-color white-text text-center py-4">
  <strong>Form Tambah Nilai Tingkat 1</strong>
</h4>
<br>

<form style="width:730px;margin-left:35px;" action="/nilai_siswa/storenilai" method="post">
{{ csrf_field() }}
<br>
<div class="form-group">
    <label for="mapel_1">Nama :</label>
    <input type="text" class="form-control" placeholder="Masukan Nama" required="required" name="nama">
  </div>
  <div class="form-group">
    <label for="mapel_2">Kelas :</label>
    <input type="text" class="form-control" placeholder="Masukan Kelas" required="required" name="kelas">
  </div>
  <div class="form-group">
    <label for="mapel_1">Mapel 1</label>
    <input type="number" class="form-control" placeholder="Masukan Nilai Ujian" required="required" name="mapel_1">
  </div>
  <div class="form-group">
    <label for="mapel_2">Mapel 2</label>
    <input type="number" class="form-control" placeholder="Masukan Nilai Ujian" required="required" name="mapel_2">
  </div>
  <div class="form-group">
    <label for="mapel_3">Mapel 3</label>
    <input type="number" class="form-control" placeholder="Masukan Nilai Ujian" required="required" name="mapel_3">
  </div>
   <div class="form-group">
    <label for="mapel_4">Mapel 4</label>
    <input type="number" class="form-control" placeholder="Masukan Nilai Ujian" required="required" name="mapel_4">
  </div>
  <div class="form-group">
    <label for="mapel_5">Mapel 5</label>
    <input type="number" class="form-control" placeholder="Masukan Nilai Ujian" required="required" name="mapel_5">
</div>
  <div class="form-group">
    <label for="mapel_6">Mapel 6</label>
    <input type="number" class="form-control" placeholder="Masukan Nilai Ujian" required="required" name="mapel_6">
 </div>
  <div class="form-group">
    <label for="mapel_7">Mapel 7</label>
    <input type="number" class="form-control" placeholder="Masukan Nilai Ujian" required="required" name="mapel_7">
</div>
  <div class="form-group">
    <label for="mapel_8">Mapel 8</label>
    <input type="number" class="form-control" placeholder="Masukan Nilai Ujian" required="required" name="mapel_8">
 </div>

   <!--bagian button-->
   <div style="margin-top:105px;width:930px;margin-left:-35px;" class="card-header info-color white-text text-center py-4">
    <button style="margin-left:-700px;" type="submit" class="btn btn-primary" value="Simpan">Simpan</button>
    <a href="/nilai_siswa"><button  title="Edit" type="button"  class="btn btn-primary">Kembali</button></a>
  </div>

</form>
</div>
<br>

@endsection