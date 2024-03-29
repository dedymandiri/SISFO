@extends('layouts.master')

@section('content') 

<br>
<div style="margin-left:20px;width:930px;" class="card">
<div style="background:#3498db;height:800px;height:10px;" class="card"></div>

<h4 class="card-header info-color white-text text-center py-4">
  <strong>TAMBAH PENGUMUMAN</strong>
</h4>
<br>
<form style="width:825px;margin-left:35px;" action="/pengumuman/proses_pengumuman" method="post" enctype="multipart/form-data">
{{ csrf_field() }}
<br>
  <div class="form-group">
    <label for="judul">Judul :</label>
    <input type="text" class="form-control" placeholder="Judul" required="required" name="judul">
  </div>
  <!-- DATETIMEPICKER -->  
  <div class="form-group">
      <label>Tanggal waktu :</label>
       <div class='input-group date' id='datetimepicker'>
        <input type='text' name="tanggal_waktu" placeholder="Tanggal waktu" class="form-control" />
        <span class="input-group-addon">
         <span class="glyphicon glyphicon-calendar"></span>
        </span>
       </div>
    </div>

    <div class="form-group">
    <label for="exampleFormControlFile1">Gambar/Foto :</label>
    <input type="file" name="file" class="form-control-file" id="exampleFormControlFile1"><!-- 
    <div style="color:red;">*Note : pilih gambar dengan bentuk landscape!</div> -->
  </div>

  <div class="form-group">
    <label for="judul">Deskripsi :</label>
    <textarea id="isi" class="form-control" name="isi" placeholder="Deskripsi"></textarea>
  </div>

 <!--bagian button-->
 <div style="margin-top:105px;width:930px;margin-left:-35px;" class="card-header info-color white-text text-center py-4">
    <button style="margin-left:-700px;" type="submit" class="btn btn-primary" value="Simpan">Simpan</button>
    <a href="/pengumuman"><button  title="Edit" type="button"  class="btn btn-primary">Kembali</button></a>
  </div>

</form>
</div>
<br>

<!-- CKEDITOR -->
<script>
  var isi = document.getElementById("isi");
    CKEDITOR.replace(isi,{
    language:'en-gb',
    width: '100%',
    height: 350
  });
  CKEDITOR.config.allowedContent = true;
</script>

<!-- DATETIMEPICKER -->
<script type="text/javascript">
   $(function () {
    $('#datetimepicker').datetimepicker({
     format: 'DD MMMM YYYY HH:mm',
      });
   });
</script>
<br>

@endsection