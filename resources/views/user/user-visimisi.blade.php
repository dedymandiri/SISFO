@extends('layouts.user_master')

@section('content') 

<div class="judul_halaman" style="margin-left:20px;">
<strong><h6>Visi Misi Tujuan</h6></strong><br></div>

<!--Untuk menampilkan tabel berita dari database-->
@foreach($liat as $li)
    <div  class="isi">		
		<div style="margin-left:20px;width:700px;color:black;" class="hr" align="justify">
            <?php echo $li['visi_misi_tujuan'] ?>
        </div>
	</div>
@endforeach

@endsection