@extends('layouts.user_master')

@section('content') 

<div class="judul_halaman" style="margin-left:25px;margin-top:-1030px;">

	<!--Bagian Pengumuman-->
	<strong><h6>Pengumuman</h6></strong><br></div>				
	<div class="col-sm-12" style="margin-left:13px;font-size:15px;">
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

	<hr style="margin-left:25px;width:720px;"/><br><!--Bagian garis pemisah-->

	<!--Bagian Berita-->
	<strong><h6 style="margin-left:25px;">Berita</h6></strong></div>
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
					<q align="justify"></q> <a style="color:blue;" href="user-pengumuman">. Baca selengkapnya . . .</a>
			</div>
		</blockquote>	
									
    </div><br>
	<!--Batas akhir bagian Berita-->		
	
</div><br><br>

<!--Bagian sambutan kepala sekolah-->
<div class="col-md-4 col-sm-6 col-xs-12" style="height:100px;width:300px;margin-top:-1060px;margin-left:775px;">
					<div class="crewman crewman-center">
						<div class="frame sambutan" id="kepala-sekolah">
							
							<div class="hold-line">
								<span class="hold-img">
									<img style="height:150px;width:150px;margin-left:30px;margin-top:20px;" class="img-circle" src="{{ asset('user-web/aset/img/img103.jpg') }}" alt="image" width="210" height="210">
								</span>
								<label class="title">{{ $kepsek[0] ->nama}}</label>
								<strong class="office">Kepala Sekolah</strong>
								<?php echo substr ($kepsek[0]['isi'], 0,215) ?></q><a style="color:blue;" href="/user-sambutan">. Baca selengkapnya . . .</a>
				
							</div>

						</div>
					</div>
				</div> 
				<!--Batas Bagian sambutan kepala sekolah-->

@endsection      
