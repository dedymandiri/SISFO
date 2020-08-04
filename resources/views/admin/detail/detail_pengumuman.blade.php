
@extends('layouts.master')

@section('content') 

 
<br>
<div style="margin-left:20px;width:930px;" class="card">
<div style="background:#3498db;height:800px;height:10px;" class="card"></div>

<h4 class="card-header info-color white-text text-center py-4">
  <strong>DETAIL PENGUMUMAN</strong>
</h4>
<br>

<table id="dtBasicExample" class="table table-striped table-bordered" cellspacing="0" width="100%">
    <!--Untuk menampilkan tabel berita dari database-->
    @foreach($liat as $li)
  <table style="margin-left:40px;" class="identitas-siswa">
    <tbody>
        <tr><td width="105px">Judul</td><td width="30px">:</td><td>{{ $li->judul }}</td></tr>
        <tr><td>Tanggal/Waktu</td><td>:</td><td>{{ $li->tanggal_waktu }}</td></tr>      
    </tbody>
  </table>
  <br> 
  <td><img src="{{ url('/data_Pengumuman/'.$li->file) }}" style="width:300px; height:150px;margin-left:40px"></td>
  <br>
  <div align="justify" style="width:850px;margin-left:40px;">
			<?php echo $li['isi'] ?>
	</div>
    @endforeach
</table>

  <div style="margin-top:105px" class="card-header info-color white-text text-center py-4">
      <a href="/pengumuman"><button style="margin-left:-750px;" type="submit" class="btn btn-primary" value="Simpan">Kembali</button></a>
  </div>

</div>
<br>

@endsection