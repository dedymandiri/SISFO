@extends('layouts.master')

@section('content') 

<br>
<div style="width:900px;height:700px;margin-left:20px;" class="card">
<div style="background:#3498db;height:800px;height:10px;" class="card"></div>

<h4 class="card-header info-color white-text text-center py-4">
  <strong>Edit Visi Misi Tujuan</strong>
</h4>
<br>
@foreach($liat as $li)
<form style="width:825px;margin-left:35px;" action="/visi_misi_tujuan/update/{{ $li->id_profil }}" method="post">
{{ csrf_field() }}
<div class="form-group">
    <label for="judul">Deskripsi</label>
    <textarea id="isi" class="form-control" name="visi_misi_tujuan" placeholder="Deskripsi">{{ $li->visi_misi_tujuan }}</textarea>
  </div>
   <br>
  <button type="submit" class="btn btn-primary" value="Simpan">Simpan</button>
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