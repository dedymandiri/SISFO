@extends('layouts.master')

@section('content') 

<br>
<div style="margin-left:20px;width:930px;" class="card">
<div style="background:#3498db;height:800px;height:10px;" class="card"></div>

<h4 class="card-header info-color white-text text-center py-4">
  <strong>TAMBAH STRUKTUR SEKOLAH</strong>
</h4>
<br>
<form style="width:730px;margin-left:35px;" action="/struktur_sekolah/storestruktur_guru" method="post">
{{ csrf_field() }}
<br>
  <div class="form-group">
    <label for="nip_nik">NIP/NIK :</label>
    <input type="text" class="form-control" placeholder="Nip/nik" required="required" name="nip_nik">
  </div>
  <div class="form-group">
    <label for="nama_guru">Nama Guru :</label>
    <input type="text" class="form-control" placeholder="Nama guru" required="required" name="nama_guru">
  </div>
  <div class="form-group">
    <label for="jabatan">Jabatan :</label>
    <input type="text" class="form-control" placeholder="Jabatan " required="required" name="jabatan">
  </div>

   <!--bagian button-->
   <div style="margin-top:105px;width:930px;margin-left:-35px;" class="card-header info-color white-text text-center py-4">
    <button style="margin-left:-700px;" type="submit" class="btn btn-primary" value="Simpan">Simpan</button>
    <a href="/struktur_sekolah"><button  title="Edit" type="button"  class="btn btn-primary">Kembali</button></a>
  </div>

</form>
</div>
<br>

@endsection