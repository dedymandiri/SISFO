@extends('layouts.master')

@section('content') 

<br>
<div style="margin-left:20px;width:930px;" class="card">
<div style="background:#3498db;height:800px;height:10px;" class="card"></div>

<h4 class="card-header info-color white-text text-center py-4">
  <strong>EDIT MULTIMEDIA</strong>
</h4>
<br>
@foreach($liat as $li)
<form style="width:825px;margin-left:35px;" action="/multimedia/update/{{ $li->id_multimedia }}" method="post">
{{ csrf_field() }}
  <div class="form-group">
    <label for="judul">Deskripsi :</label>
    <textarea id="isi" class="form-control" name="deskripsi" placeholder="Deskripsi">{{ $li->deskripsi }}</textarea>
  </div>

  <!--bagian button-->
  <div style="margin-top:105px;width:930px;margin-left:-35px;" class="card-header info-color white-text text-center py-4">
    <button style="margin-left:-700px;" type="submit" class="btn btn-primary" value="Simpan">Simpan</button>
    <a href="/multimedia"><button  title="Edit" type="button"  class="btn btn-primary">Kembali</button></a>
  </div>

</form>
@endforeach
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