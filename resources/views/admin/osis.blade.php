@extends('layouts.master')

@section('content') 


<br>
<div style="width:900px;height:800px;margin-left:20px;" class="card">

<h5 class="card-header info-color white-text text-center py-4">
  <strong>Form Input Osis</strong>
</h5>
<br>
<form style="width:500px;margin-left:20px;" action="" method="post">
  <div class="form-group">
    <label for="judul">Judul</label>
    <input type="text" class="form-control" placeholder="Judul" required="required" name="judul">
  </div>
  <!-- DATETIMEPICKER -->  
    <div class="form-group">
      <label>Tanggal_waktu</label>
       <div class='input-group date' id='datetimepicker'>
        <input type='text' class="form-control" />
        <span class="input-group-addon">
         <span class="glyphicon glyphicon-calendar"></span>
        </span>
       </div>
    </div>
  <div class="form-group">
    <label for="judul">Deskripsi</label>
    <textarea id="konten" class="form-control" name="konten" rows="50" cols="80"></textarea>
  </div>
  <button type="submit" class="btn btn-primary" value="Simpan">Simpan</button>
</form>
</div>
<br>

<!-- CKEDITOR -->
<script>
  var konten = document.getElementById("konten");
    CKEDITOR.replace(konten,{
    language:'en-gb'
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

@endsection
