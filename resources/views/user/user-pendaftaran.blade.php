@extends('layouts.user_master')

@section('content') 

<div class="judul_halaman" style="margin-left:20px;margin-top:-1030px;">
<strong><h6>Form Pendaftaran</h6></strong><br></div>

<form style="width:750px;margin-left:20px;color:black;" action="/user-pendaftaran/daftar" method="post">
{{ csrf_field() }}
<br> 
  <div class="form-group">
    <label>Tanggal Daftar :</label>
      <div class='input-group date' id='datetimepicker1'>
       <input type="text" class="form-control" placeholder="Tanggal Daftar" required="required" name="tgl_masuk">
         <span class="input-group-addon">
           <span class="glyphicon glyphicon-calendar"></span>
        </span>
      </div>
  </div>
  <div class="form-group">
    <label for="tgl_waktu">Nama Calon Siswa :</label>
    <input type="text" class="form-control" placeholder="Nama Calon Siswa " required="required" name="nama_calon_siswa">
  </div>
  <div class="form-group">
    <label for="tgl_waktu">Tempat Lahir :</label>
    <input type="text" class="form-control" placeholder="Tempat Lahir " required="required" name="tmpt_lahir">
  </div>
  <div class="form-group">
    <label>Tanggal Lahir :</label>
      <div class='input-group date' id='datetimepicker2'>
       <input type="text" class="form-control" placeholder="Tanggal Lahir" required="required" name="tgl_lahir">
         <span class="input-group-addon">
           <span class="glyphicon glyphicon-calendar"></span>
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
    <input type="telp" class="form-control" pattern="^\d{3}-\d{3}-\d{4}$" placeholder="No Handphone" required="required" name="no_hp">
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
    <textarea type="text" class="form-control" placeholder="Alasan " required="required" name="alasan"></textarea>
  </div>
  
  
<!--bagian button-->
<div style="margin-top:50px;margin-left:-35px;" class="card-header info-color white-text text-center py-4">
    <button style="margin-left:-600px;width:100px;" type="submit" class="btn btn-primary" value="Simpan">Simpan</button>
</div>

</form>

<br><br>

<!-- DATETIMEPICKER -->
<script type="text/javascript">
   $(function () {
    $('#datetimepicker').datetimepicker({
     format: 'DD MMMM YYYY',
      });
   });

   $(function () {
    $('#datetimepicker2').datetimepicker({
     format: 'DD MMMM YYYY',
      });
   });
</script>

@endsection