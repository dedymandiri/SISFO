@extends('layouts.user_master')

@section('content') 

<div class="judul_halaman" style="margin-left:20px;">
<strong><h6>Sejarah</h6></strong><br></div>

<!--Untuk menampilkan tabel berita dari database-->
@foreach($liat as $li)
    <div  class="isi">		
	    <div style="margin-left:20px;width:700px;color:black;" class="hr" align="justify">
            <?php echo $li['sejarah'] ?>
        </div>
	</div>
@endforeach

@endsection