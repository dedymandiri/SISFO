@extends('layouts.user_master')

@section('content') 

<div class="judul_halaman" style="margin-left:25px;margin-top:-1030px;">

	<!--Bagian Pengumuman-->
	<strong><h6>Pengumuman</h6></strong><br>			
	<div class="col-sm-12" style="margin-left:-12px;font-size:15px;">
		@foreach($liat as $li)
			<blockquote class="blockquote-about">
				<div class="block" style="width:720px;margin-left:-110px;">
				<strong class="title"><a href="user-detail_pengumuman"><b>{{ $li->judul }}</b></a>
					<small>{{ $li->tanggal_waktu }}</small></strong>											
						<q align="justify"><?php echo substr ($li['isi'], 0,215) ?></q> <a style="color:blue;" href="/user-detail_pengumuman/{{ $li->id_info }}">. Baca selengkapnya . . .</a>
				</div>
			</blockquote>
		@endforeach
    </div><br>
	<!--Batas akhir bagian Pengumuman-->
	
</div><br>

@endsection      
