@extends('layouts.user_master')

@section('content') 



<div class="judul_halaman" style="margin-left:25px;margin-top:-1030px;">
								<strong><h6>Pengumuman</h6></strong><br></div>
								
								<div class="col-sm-12" style="margin-left:13px;">
								@foreach($liat as $li)
									<blockquote class="blockquote-about">
										<cite class="author pull-left">
											<span class="hold-img"><a href="user-pengumuman"><img src="{{ asset('user-web/aset/img/banjir.jpg') }}" alt="image" width="95" height="110"></a></span>
											<br><br>
											<small>Oleh <a href="404.html">Administrator</a></small>
										</cite>
										<div class="block" style="width:600px;margin-left:10px;">
											<span class="nook">&nbsp;</span>
											<strong class="title"><a href="user-pengumuman"><b>{{ $li->judul }}</b></a>
											<small>{{ $li->tanggal_waktu }}</small>
											</strong>
											
											<q align="justify"><?php echo substr ($li['isi'], 0,263) ?></q> <a style="color:blue;" href="user-pengumuman">Baca selengkapnya...</a>
										</div>
									</blockquote>
									@endforeach
                                </div> 
							
								<br>      
								 <hr />
								<div class="judul_halaman" style="margin-left:20px;">
								<strong><h6>Berita</h6></strong><br></div>
								<div class="col-sm-12">
									<blockquote class="blockquote-about">
										<cite class="author pull-left">
											<span class="hold-img"><a href="kabar-sekolah-detail.html"><img src="{{ asset('user-web/aset/paket/images/img165.jpg') }}" alt="image" width="85" height="87"></a></span>
											<small>Oleh <a href="404.html">Administrator</a></small>
										</cite>
										<div class="block" style="width:640px;">
											<span class="nook">&nbsp;</span>
											<strong class="title"><a href="kabar-sekolah-detail.html"><b>SEMANGAT BELAJAR MENGHADAPI UJIAN SEKOLAH</b></a>
											<small>Terbit pada tanggal 29 Desember 2013 | <a href="kabar-sekolah-detail.html#komentar">5 Komentar</a></small>
											</strong>
											<q>Haloo... para siswa siswi SMKN 1 Berau terutama kelas XII siap-siap ya tanggal xx - xx xxx 2014 kalian akan menghadapi Ujian Sekolah Tahun 2014 dimana jadwal ujiannya sudah ada di web SMKN 1 Berau. Jangan lupa selalu belajar biar kalian semua siap menghadapinya. Matikan TV, HP, Kom... </q> <a href="kabar-sekolah-detail.html">Baca selengkapnya...</a>
										</div>
									</blockquote>
                                </div>     
								<div class="col-sm-12">
									<blockquote class="blockquote-about">
										<cite class="author pull-left">
											<span class="hold-img"><a href="kabar-sekolah-detail.html"><img src="{{ asset('user-web/aset/paket/images/img165.jpg') }}" alt="image" width="85" height="87"></a></span>
											<small>Oleh <a href="404.html">Administrator</a></small>
										</cite>
										<div class="block" style="width:640px;">
											<span class="nook">&nbsp;</span>
											<strong class="title"><a href="kabar-sekolah-detail.html"><b>SEMANGAT BELAJAR MENGHADAPI UJIAN SEKOLAH</b></a>
											<small>Terbit pada tanggal 29 Desember 2013 | <a href="kabar-sekolah-detail.html#komentar">5 Komentar</a></small>
											</strong>
											<q>Haloo... para siswa siswi SMKN 1 Berau terutama kelas XII siap-siap ya tanggal xx - xx xxx 2014 kalian akan menghadapi Ujian Sekolah Tahun 2014 dimana jadwal ujiannya sudah ada di web SMKN 1 Berau. Jangan lupa selalu belajar biar kalian semua siap menghadapinya. Matikan TV, HP, Kom... </q> <a href="kabar-sekolah-detail.html">Baca selengkapnya...</a>
										</div>
									</blockquote>
</div>

<br><br>

@endsection      
