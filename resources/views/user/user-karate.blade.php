@extends('layouts.user_master')

@section('content') 

<div class="judul_halaman" style="margin-left:20px;margin-top:-1030px;">
<strong><h6>Karate</h6></strong><br></div>

<!--Untuk menampilkan tabel berita dari database-->
@foreach($liat as $li)
    <div  class="isi">		
		<div style="margin-left:20px;width:750px;color:black;" class="hr" align="justify">
            <?php echo $li['deskripsi_karate'] ?>
        </div>
	</div>
@endforeach

<br><br>

@endsection