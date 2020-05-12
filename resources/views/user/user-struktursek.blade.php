@extends('layouts.user_master')

@section('content') 

<div class="judul_halaman" style="margin-left:20px;margin-top:-1030px;">
<strong><h6>Struktur Sekolah</h6></strong><br></div>

<table border="solid 1px black" style="margin-left:20px;width:650px;">
  <thead>
    <tr>
      <th width="30px" align="center">No</th>
      <th >Nama Guru/Staff</th>
      <th >Jabatan</th>
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

<br><br>

@endsection