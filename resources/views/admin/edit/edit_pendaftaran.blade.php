@extends('layouts.master')

@section('content') 

<br>
<div style="margin-left:20px;width:930px;" class="card">
<div style="background:#3498db;height:800px;height:10px;" class="card"></div>

<h4 class="card-header info-color white-text text-center py-4">
  <strong>EDIT PENDAFTAR</strong>
</h4>
<br>
@foreach($liat as $li)
<form style="width:730px;margin-left:35px;" action="/pendaftaran/update/{{ $li->id_daftar }}" method="post">
{{ csrf_field() }}
<br>
<div class="form-group">
    <label>Tanggal Daftar :</label>
      <div class='input-group date' id='datetimepicker3'>
       <input type="text" class="form-control" placeholder="Tanggal Daftar" required="required" name="tgl_masuk" value="{{ $li->tgl_masuk }}">
         <span class="input-group-addon">
           <span class="glyphicon glyphicon-calendar"></span>
        </span>
      </div>
  </div>
  <div class="form-group">
    <label for="tgl_waktu">Nama Siswa :</label>
    <input type="text" class="form-control" placeholder="Nama Calon Siswa " required="required" name="nama_calon_siswa" value="{{ $li->nama_calon_siswa }}">
  </div>
  <div class="form-group">
    <label for="tgl_waktu">Tempat Lahir :</label>
    <input type="text" class="form-control" placeholder="Tempat Lahir " required="required" name="tmpt_lahir" value="{{ $li->tmpt_lahir }}">
  </div>
  <div class="form-group">
    <label>Tanggal Lahir :</label>
      <div class='input-group date' id='datetimepicker4'>
       <input type="text" class="form-control" placeholder="Tanggal Lahir" required="required" name="tgl_lahir" value="{{ $li->tgl_lahir }}">
         <span class="input-group-addon">
           <span class="glyphicon glyphicon-calendar"></span>
        </span>
      </div>
  </div>
  <div class="form-group">
    <label for="tgl_waktu">Nama Ibu :</label>
    <input type="text" class="form-control" placeholder="Nama Ibu " required="required" name="nama_ibu" value="{{ $li->nama_ibu }}">
  </div>
  <div class="form-group">
    <label for="tgl_waktu">Nama Ayah :</label>
    <input type="text" class="form-control" placeholder="Nama Ayah " required="required" name="nama_ayah" value="{{ $li->nama_ayah }}">
  </div>
  <div class="form-group">
    <label for="judul">Alamat :</label>
    <input type="text" class="form-control" placeholder="Alamat" required="required" name="alamat" value="{{ $li->alamat }}">
  </div>
  <div class="form-group">
    <label for="tgl_waktu">NISN :</label>
    <input type="number" class="form-control" placeholder="Nisn " required="required" name="nisn" value="{{ $li->nisn }}">
  </div>
  <div class="form-group">
    <label for="tgl_waktu">Asal Sekolah :</label>
    <input type="text" class="form-control" placeholder="Asal Sekolah " required="required" name="asal_sklh" value="{{ $li->asal_sklh }}">
  </div>
  <div class="form-group">
    <label for="judul">No Handphone :</label>
    <input type="text" class="form-control" placeholder="No Handphone" required="required" name="no_hp" value="{{ $li->no_hp }}">
  </div>
  <div class="form-group">
    <label for="exampleFormControlSelect1">Agama :</label>
    <select class="form-control" id="exampleFormControlSelect1" class="form-control" required="required" name="agama" value="{{ $li->agama }}">
      <option>Islam</option>
      <option>Kristen</option>
      <option>Katolik</option>
      <option>Hindu</option>
      <option>Budha</option>
    </select>
</div> 
  <div class="form-group">
    <label for="tgl_waktu">Anak Ke :</label>
    <select class="form-control" id="exampleFormControlSelect1" class="form-control" required="required" name="anak_ke" value="{{ $li->anak_ke }}">
      <option>1</option>
      <option>2</option>
      <option>3</option>
      <option>4</option>
      <option>5</option>
      <option>6</option>
      <option>7</option>
      <option>8</option>
      <option>9</option>
      <option>10</option>
    </select>
  </div>
  <div class="form-group">
    <label for="tgl_waktu">Keahlian :</label>
    <select class="form-control" id="exampleFormControlSelect1" class="form-control" required="required" name="keahlian" value="{{ $li->keahlian }}">
      <option>Mulitmedia</option>
    </select>
  </div>
  <div class="form-group">
    <label for="judul">Alasan :</label>
    <input type="text" class="form-control" placeholder="Alasan " required="required" name="alasan" value="{{ $li->alasan }}">
  </div>
  
  
  
  <div style="margin-top:105px;width:930px;margin-left:-35px;" class="card-header info-color white-text text-center py-4">
    <button style="margin-left:-700px;" type="submit" class="btn btn-primary" value="Simpan">Simpan</button>
    <a href="/pendaftaran"><button  title="Edit" type="button"  class="btn btn-primary">Kembali</button></a>
  </div>

</form>

@endforeach
</div>
<br>


<!-- DATETIMEPICKER -->
<script type="text/javascript">
   $(function () {
    $('#datetimepicker3').datetimepicker({
     format: 'DD MMMM YYYY',
      });
   });

   $(function () {
    $('#datetimepicker4').datetimepicker({
     format: 'DD MMMM YYYY',
      });
   });
</script>

@endsection