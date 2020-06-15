@extends('layouts.master')

@section('content') 

<br>
<div style="margin-left:20px;width:930px;" class="card">
<div style="background:#3498db;height:800px;height:10px;" class="card"></div>

<h4 class="card-header info-color white-text text-center py-4">
  <strong>TAMBAH DATA SAMBUTAN</strong>
</h4>
<br>
<form style="width:730px;margin-left:35px;" action="/sambutan/proses" method="post" enctype="multipart/form-data">
{{ csrf_field() }}
<br>
<div class="form-group">
    <label for="exampleFormControlFile2">Gambar/Foto :</label>
    <input type="file" name="file" class="form-control-file" id="exampleFormControlFile2">
    <div style="color:red;">*Note : pilih gambar dengan bentuk landscape</div>
  </div>
  <div class="form-group">
    <label for="nama">Nama Kepsek :</label>
    <input type="text" class="form-control" placeholder="Nama kepala sekolah " required="required" name="nama">
  </div>
  <div class="form-group">
    <label for="isi">Sambutan :</label>
    <textarea id="isi" type="text" class="form-control" placeholder="Sambutan" required="required" name="isi"></textarea>
  </div>

  
<!--bagian button-->
<div style="margin-top:105px;width:930px;margin-left:-35px;" class="card-header info-color white-text text-center py-4">
    <button style="margin-left:-700px;" type="submit" class="btn btn-primary" value="Simpan">Simpan</button>
    <a href="/sambutan"><button  title="Edit" type="button"  class="btn btn-primary">Kembali</button></a>
  </div>

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
<br>


@endsection