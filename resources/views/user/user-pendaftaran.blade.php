@extends('layouts.user_master')

@section('content') 

<div class="judul_halaman" style="margin-left:25px;margin-top:-1030px;">
<strong><h6>Form Pendaftaran</h6></strong><br></div>

<div class="form-input" style="margin-left:25px;border : 1px solid white;width:725px;"><br>
<form style="margin-left:25px;width:673px;color:black;" action="/user-pendaftaran/daftar" method="post">
{{ csrf_field() }}
<br> 
<div class="form-group">
    <label>Tanggal Daftar :</label>
      <div class='input-group date' id='datepicker'>
       <input type="date" class="form-control" placeholder="Tanggal Daftar" required="required" name="tgl_masuk">
         <span class="input-group-addon">
        </span>
      </div>
  </div>
  <div class="form-group">
    <label for="tgl_waktu">Nama Siswa :</label>
    <input type="text" class="form-control" placeholder="Nama Calon Siswa " required="required" name="nama_calon_siswa">
  </div>
  <div class="form-group">
    <label for="tgl_waktu">Tempat Lahir :</label>
    <input type="text" class="form-control" placeholder="Tempat Lahir " required="required" name="tmpt_lahir">
  </div>
  <div class="form-group">
    <label>Tanggal Lahir :</label>
      <div class='input-group date' id='datepicker2'>
       <input type="date" class="form-control" placeholder="Tanggal Lahir" required="required" name="tgl_lahir">
         <span class="input-group-addon">
        </span>
      </div>
  </div>
  <div class="form-group">
    <label for="tgl_waktu">Nama Ibu :</label>
    <input type="text" class="form-control" placeholder="Nama Ibu " required="required" name="nama_ibu">
  </div>
  <div class="form-group">
    <label for="tgl_waktu">Nama Ayah :</label>
    <input type="text" class="form-control" placeholder="Nama Ayah " required="required" name="nama_ayah">
  </div>
  <div class="form-group">
    <label for="judul">Alamat :</label>
    <input type="text" class="form-control" placeholder="Alamat" required="required" name="alamat">
  </div>
  <div class="form-group">
    <label for="tgl_waktu">NISN :</label>
    <input type="number" class="form-control" placeholder="Nisn " required="required" name="nisn">
  </div>
  <div class="form-group">
    <label for="tgl_waktu">Asal Sekolah :</label>
    <input type="text" class="form-control" placeholder="Asal Sekolah " required="required" name="asal_sklh">
  </div>
  <div class="form-group">
    <label for="judul">No Handphone :</label>
    <input type="number" class="form-control" placeholder="No Handphone" required="required" name="no_hp">
  </div>
  <div class="form-group">
    <label for="exampleFormControlSelect1">Agama :</label>
    <select class="form-control" id="exampleFormControlSelect1" class="form-control" required="required" name="agama">
      <option>Islam</option>
      <option>Kristen</option>
      <option>Katolik</option>
      <option>Hindu</option>
      <option>Budha</option>
    </select>
</div> 
  <div class="form-group">
    <label for="tgl_waktu">Anak Ke :</label>
    <select class="form-control" id="exampleFormControlSelect1" class="form-control" required="required" name="anak_ke">
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
    <select class="form-control" id="exampleFormControlSelect1" class="form-control" required="required" name="keahlian">
      <option>Mulitmedia</option>
    </select>
  </div>
  <div class="form-group">
    <label for="judul">Alasan :</label>
    <input type="text" class="form-control" placeholder="Alasan " required="required" name="alasan">
  </div>
  
  
<!--bagian button-->
<div style="margin-top:35px;margin-left:25px;" class="card-header info-color white-text text-center py-4">
    <button style="margin-left:-600px;width:100px;" alert="berhasil di input" type="submit" class="btn btn-primary" value="Simpan">Daftar</button>
</div><br>

</form></div>
<br><br>


<!-- DATETIMEPICKER -->
<script type="text/javascript">
   $(function () {
    $('#datepicker').datetimepicker({
     format: 'DD MMMM YYYY',
      });
   });

   $(function () {
    $('#datepicker2').datetimepicker({
     format: 'DD MMMM YYYY',
      });
   });
</script>

@endsection