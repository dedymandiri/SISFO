@extends('layouts.master')

@section('content') 

<br>
<div style="width:900px;height:1010px;margin-left:20px;" class="card">

<h5 class="card-header info-color white-text text-center py-4">
  <strong>Edit Visi Misi Tujuan</strong>
</h5>
<br>
@foreach($liat as $li)
<form style="width:500px;margin-left:20px;" action="" method="post">
{{ csrf_field() }}
  <div class="form-group">
    <label for="visi">Visi</label>
    <textarea style="height:200px;width:850px;margin-top:10px" class="form-control" placeholder="Masukan isi berita . . ." required="required" name="visi">{{ $li->visi }}</textarea><br/>
  </div> 
  <div class="form-group">
    <label for="misi">Misi</label>
    <textarea style="height:200px;width:850px;margin-top:10px" class="form-control" placeholder="Masukan isi berita . . ." required="required" name="misi">{{ $li->misi }}</textarea><br/>
  </div> 
  <div class="form-group">
    <label for="tujuan">Tujuan</label>
    <textarea style="height:200px;width:850px;margin-top:10px" class="form-control" placeholder="Masukan isi berita . . ." required="required" name="tujuan">{{ $li->tujuan }}</textarea><br/>
  </div>   
   
  <button type="submit" class="btn btn-primary" value="Simpan">Simpan</button>
</form>
@endforeach
</div>
<br>

@endsection