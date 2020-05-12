@extends('layouts.user_master')

@section('content') 

<div class="judul_halaman" style="margin-left:20px;margin-top:-1030px;">
<strong><h6>Fasilitas Sekolah</h6></strong><br></div>

<table border="solid 1px black" style="margin-left:20px;width:650px;">
  <thead>
    <tr>
      <th width="30px" align="center">No</th>
      <th >Nama Ruangan</th>
      <th >kuantitas</th>
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
</tr>
@endforeach
</tbody>
  
</table>

<br><br>

@endsection