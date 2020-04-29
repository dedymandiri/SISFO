@extends('layouts.user_master')

@section('content') 

<div class="judul_halaman" style="margin-left:20px;">
<strong><h6>Struktur Sekolah</h6></strong><br></div>

<table class="table table-bordered" style="margin-left:20px;width:700px;">
  <thead>
    <tr>
      <th scope="col">No</th>
      <th scope="col">Nama Guru</th>
      <th scope="col">Jabatan</th>
    </tr>
  </thead>
  <tbody>

<!--Untuk menampilkan tabel berita dari database-->
<?php $no = 0;?>
@foreach($liat as $li)
<?php $no++ ;?>
<tr>
    <td>{{ $no }}</td>
    <td>{{ $li->nama_guru }}</td>
    <td>{{ $li->jabatan }}</td>
</tr>
@endforeach
</tbody>
  
</table>

@endsection