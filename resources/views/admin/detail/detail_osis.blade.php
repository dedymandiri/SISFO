
@extends('layouts.master')

@section('content') 

 
<br>
<div style="margin-left:20px;width:930px;" class="card">
<div style="background:#3498db;height:800px;height:10px;" class="card"></div>

<h4 class="card-header info-color white-text text-center py-4">
  <strong>DETAIL OSIS</strong>
</h4>
<br>
<table id="dtBasicExample" class="table table-striped table-bordered" cellspacing="0" width="100%">
    <!--Untuk menampilkan tabel berita dari database-->
    @foreach($liat as $li)
   <!-- <tr style="margin-left:10px;" >
        No      : {{ $li->id_profil }} <br>
        Sejarah : <br>
        <p>{{ $li->sejarah }}</p>
       
    </tr>-->

       <div  class="isi">		
			<div style="margin-left:20px;width:880px;" class="hr" align="justify">
			<?php echo $li['deskripsi_osis'] ?></div>
		</div>
    @endforeach

  </table>

  <div style="margin-top:105px" class="card-header info-color white-text text-center py-4">
      <a href="/osis"><button style="margin-left:-750px;" type="submit" class="btn btn-primary" value="Simpan">Kembali</button></a>
  </div>

</div>
<br>

@endsection