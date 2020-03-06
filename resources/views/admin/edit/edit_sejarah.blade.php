
@extends('layouts.master')

@section('content') 

 
<br>
<div style="width:900px;height:680px;margin-left:20px;" class="card">

<h5 class="card-header info-color white-text text-center py-4">
  <strong>Form Edit Sejarah</strong>
</h5>
<br>
@foreach($liat as $li)
<form style="width:500px;margin-left:20px;" action="/sejarah/update/{{ $li->id_profil }}" method="post">
{{ csrf_field() }}
  <div class="form-group">
    <label for="isi">Isi_sejarah</label>
    <textarea style="height:420px;width:860px;margin-top:10px" id="ckeditor" class="form-control" placeholder="Masukan isi sejarah . . ." name="sejarah">{{ $li->sejarah }}</textarea><br/>
  </div>   
   
  <button type="submit" class="btn btn-primary" value="simpapn">Simpan</button>
</form>
@endforeach
</div>
<br>

@endsection