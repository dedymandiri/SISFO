@extends('layouts.master')

@section('content') 

<br>
<div style="margin-left:20px;width:930px;" class="card">
<div style="background:#3498db;height:800px;height:10px;" class="card"></div>

<h4 class="card-header info-color white-text text-center py-4">
  <strong>TAMBAH NILAI TINGKAT 2</strong>
</h4>
<br>

<form style="width:730px;margin-left:35px;" action="/nilai_siswa_tk2/storenilai_tk2" method="post">
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
    <label for="mapel_1">{{ $mapel[0]->pel_1 }} :</label>
    <input type="number" class="form-control" placeholder="Masukan Nilai Ujian" required="required" name="mapel_1">
  </div>
  <div class="form-group">
    <label for="mapel_2">{{ $mapel[0]->pel_2 }} :</label>
    <input type="number" class="form-control" placeholder="Masukan Nilai Ujian" required="required" name="mapel_2">
  </div>
  <div class="form-group">
    <label for="mapel_3">{{ $mapel[0]->pel_3 }} :</label>
    <input type="number" class="form-control" placeholder="Masukan Nilai Ujian" required="required" name="mapel_3">
  </div>
   <div class="form-group">
    <label for="mapel_4">{{ $mapel[0]->pel_4 }} :</label>
    <input type="number" class="form-control" placeholder="Masukan Nilai Ujian" required="required" name="mapel_4">
  </div>
  <div class="form-group">
    <label for="mapel_5">{{ $mapel[0]->pel_5 }} :</label>
    <input type="number" class="form-control" placeholder="Masukan Nilai Ujian" required="required" name="mapel_5">
</div>
  <div class="form-group">
    <label for="mapel_6">{{ $mapel[0]->pel_6 }} :</label>
    <input type="number" class="form-control" placeholder="Masukan Nilai Ujian" required="required" name="mapel_6">
 </div>
  <div class="form-group">
    <label for="mapel_7">{{ $mapel[0]->pel_7 }} :</label>
    <input type="number" class="form-control" placeholder="Masukan Nilai Ujian" required="required" name="mapel_7">
</div>
  <div class="form-group">
    <label for="mapel_8">{{ $mapel[0]->pel_8 }} :</label>
    <input type="number" class="form-control" placeholder="Masukan Nilai Ujian" required="required" name="mapel_8">
 </div>
 <div class="form-group">
    <label for="mapel_4">{{ $mapel[0]->pel_9 }} :</label>
    <input type="number" class="form-control" placeholder="Masukan Nilai Ujian" required="required" name="mapel_9">
  </div>
  <div class="form-group">
    <label for="mapel_5">{{ $mapel[0]->pel_10 }} :</label>
    <input type="number" class="form-control" placeholder="Masukan Nilai Ujian" required="required" name="mapel_10">
</div>
  

   <!--bagian button-->
   <div style="margin-top:105px;width:930px;margin-left:-35px;" class="card-header info-color white-text text-center py-4">
    <button style="margin-left:-700px;" type="submit" class="btn btn-primary" value="Simpan">Simpan</button>
    <a href="/nilai_siswa_tk2"><button  title="Edit" type="button"  class="btn btn-primary">Kembali</button></a>
  </div>

</form>
</div>
<br>

@endsection