
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
    <div  class="judul" style="margin-left:20px;width:880px;" class="hr" align="justify">		
			Judul : <?php echo $li['judul'] ?>
		<br>		
			Tanggal : <?php echo $li['tanggal_waktu'] ?>
		<br>
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