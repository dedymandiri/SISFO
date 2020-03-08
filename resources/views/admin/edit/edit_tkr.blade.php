@extends('layouts.master')

@section('content') 

<br>
<div style="width:900px;height:1230px;margin-left:20px;" class="card">

<h5 class="card-header info-color white-text text-center py-4">
  <strong>Form Edit TKR</strong>
</h5>
<br>
@foreach($liat as $li)
<form style="width:500px;margin-left:20px;" action="/tkr/update/{{ $li->id_tkj }}" method="post">
{{ csrf_field() }}
  <div class="form-group">
    <label for="judul">Pengenalan Umum</label>
    <textarea style="height:200px;width:850px;margin-top:10px"  type="text" id="pengenalan_umum" class="form-control" placeholder="pengenalan_umum" required="required" name="pengenalan_umum" value="">{{ $li->pengenalan_umum }}</textarea>
  </div>
  <div class="form-group">
    <label for="tanggal_waktu">Tujuan Kompetensi</label>
    <textarea style="height:200px;width:850px;margin-top:10px"  type="text" id="tujuan_kompetensi" class="form-control" placeholder="tujuan_kompetensi" required="required" name="tujuan_kompetensi" value="">{{ $li->tujuan_kompetensi }}</textarea>
  </div>
  <div class="form-group">
    <label for="tanggal_waktu">Prospek Lulusan</label>
    <textarea style="height:200px;width:850px;margin-top:10px"  type="text" id="prospek_lulusan" class="form-control" placeholder="prospek_lulusan" required="required" name="prospek_lulusan" value="">{{ $li->prospek_lulusan }}</textarea>
  </div>
  <div class="form-group">
    <label for="tanggal_waktu">Alumni</label>
    <textarea style="height:200px;width:850px;margin-top:10px"  type="text" id="alumni" class="form-control" placeholder="alumni" required="required" name="alumni" value="">{{ $li->alumni }}</textarea>
  </div>
  <br>
  <button type="submit" class="btn btn-primary" value="Simpan">Simpan</button>
</form>
@endforeach
</div>
<br>

@endsection