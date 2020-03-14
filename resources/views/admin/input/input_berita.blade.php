@extends('layouts.master')

@section('content') 

<br>
<div style="width:900px;height:840px;margin-left:20px;" class="card">
<div style="background:#3498db;height:800px;height:10px;" class="card"></div>

<h5 class="card-header info-color white-text text-center py-4">
  <strong>Form Input Berita</strong>
</h5>
<br>
<form style="width:825px;margin-left:35px;" action="/berita/store" method="post">
{{ csrf_field() }}
  <div class="form-group">
    <label for="judul">Judul</label>
    <input type="text" class="form-control" placeholder="Judul" required="required" name="judul">
  </div>
  
  <!-- DATETIMEPICKER -->  
    <div class="form-group">
      <label>Tanggal_waktu</label>
       <div class='input-group date' id='datetimepicker'>
        <input type='text' name="tanggal_waktu" placeholder="Tanggal waktu" class="form-control" />
        <span class="input-group-addon">
         <span class="glyphicon glyphicon-calendar"></span>
        </span>
       </div>
    </div>

  <div class="form-group">
    <label for="judul">Deskripsi</label>
    <textarea id="isi" class="form-control" name="isi" placeholder="Deskripsi"></textarea>
  </div>
 <br>
   
  <button type="submit" class="btn btn-primary" value="Simpan">Simpan</button>
</form>
</div>

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