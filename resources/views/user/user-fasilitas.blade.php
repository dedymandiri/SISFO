@extends('layouts.user_master')

@section('content') 

<div class="judul_halaman" style="margin-left:25px;margin-top:-1030px;">
<strong><h6>Fasilitas Sekolah</h6></strong><br></div>

<table border="solid 1px black" style="margin-left:25px;width:700px;text-align:center;">
  <thead style="color:black;">
    <tr>
      <th width="30px" height="40px" style="text-align:center;">No</th>
      <th style="text-align:center;">Nama Ruangan</th>
      <th style="text-align:center;">kuantitas</th>
      <th style="text-align:center;">Kondisi</th>
    </tr> 
  </thead>
  <tbody>

<!--Untuk menampilkan tabel berita dari database-->
<?php $no = 0;?>
@foreach($liat as $li)
<?php $no++ ;?>
<tr>
    <td>{{ $no }}</td>
    <td>{{ $li->nama_ruang }}</td>
    <td>{{ $li->kuantitas }}</td>
    <td>{{ $li->kondisi }}</td>
</tr>
@endforeach
</tbody>
</table>

<br><br>


@endsection