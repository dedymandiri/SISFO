@extends('layouts.user_master')

@section('content') 

<div class="judul_halaman" style="margin-left:25px;margin-top:-1030px;">

	<!--Bagian Pengumuman-->
	<strong><h6>Pengumuman</h6></strong><br>			
	<div class="col-sm-12" style="margin-left:-12px;font-size:15px;">
		@foreach($liat as $li)
			<blockquote class="blockquote-about">
				<div class="block" style="width:720px;margin-left:-110px;">
				<strong class="title"><a href="user-pengumuman"><b>{{ $li->judul }}</b></a>
					<small>{{ $li->tanggal_waktu }}</small></strong>											
						<q align="justify"><?php echo substr ($li['isi'], 0,215) ?></q> <a style="color:blue;" href="/user-pengumuman/{{ $li->id_info }}">. Baca selengkapnya . . .</a>
				</div>
			</blockquote>
		@endforeach
    </div><br>
	<!--Batas akhir bagian Pengumuman-->

	<!-- <hr style="margin-left:25px;width:720px;"/><br> --><!--Bagian garis pemisah-->

	<!--Bagian Berita-->
	<!-- <strong><h6 style="margin-left:25px;">Berita</h6></strong>
	<div class="col-sm-12" style="margin-left:25px;font-size:15px;margin-top:-450px;">		
		<blockquote class="blockquote-about">
			<cite class="author pull-left" style="margin-top:-450px;">
				<span class="hold-img"><a href="user-pengumuman"><img src="{{ asset('user-web/aset/img/banjir.jpg') }}" alt="image" width="95" height="110"></a></span>
				<br><br>
				<small>Oleh <a href="404.html">Administrator</a></small>
			</cite>
			<div class="block" style="width:600px;height:200px;margin-left:10px;margin-top:-300px;">
			<strong class="title"><a href="user-pengumuman"><b></b></a>
				<small></small></strong>											
			</div>
		</blockquote>
											
    </div><br>
	 -->
	<!--Batas akhir bagian Berita-->		
	
</div><br><br>

@endsection      
