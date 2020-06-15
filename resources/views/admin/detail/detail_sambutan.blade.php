
@extends('layouts.master')

@section('content') 

 
<br>
<div style="margin-left:20px;width:930px;" class="card">
<div style="background:#3498db;height:800px;height:10px;" class="card"></div>

<h4 class="card-header info-color white-text text-center py-4">
  <strong>DETAIL SAMBUTAN</strong>
</h4>
<br>
<table id="dtBasicExample" class="table table-striped table-bordered" cellspacing="0" width="100%">
    <!--Untuk menampilkan tabel berita dari database-->
    @foreach($liat as $li)
    <img src="{{ url('/data_sambutan/'.$li->file) }}" style="margin-left:25px;width:200px;border:1px solid black;height:200px;">
    <strong><p style="margin-left:25px;margin-top:10px;">{{ $li->nama }}</p></strong><br>
    <div  class="isi">		
			<div style="margin-left:25px;width:880px;" class="hr" align="justify">
			<?php echo $li['isi'] ?></div>
		</div>
    @endforeach

  </table>

  <div style="margin-top:105px" class="card-header info-color white-text text-center py-4">
      <a href="/sambutan"><button style="margin-left:-790px;" type="submit" class="btn btn-primary" value="Simpan">Kembali</button></a>
  </div>

</div>
<br>

@endsection