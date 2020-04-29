<!DOCTYPE html>
<html lang="id">
	<head>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1.0" />
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

		<!-- Informasi Umum -->
		<title>SMK Islam Terisi Indramayu</title>
		<meta name="description" content="Sistem Informasi Sekolah SMKN 1 Berau" />
		<meta name="author" content="Noviyanto Rachmady ['me@novay.web.id']" />
		
		<!-- Koleksi CSS -->
		<link rel="stylesheet" href="{{ asset('user-web/aset/paket/css/bootstrap.min.css') }}" media="screen">
		<link rel="stylesheet" type="text/css" href="{{ asset('user-web/aset/paket/css/sticky-footer.css') }}" media="all" />
		<link rel="stylesheet" type="text/css" href="{{ asset('user-web/aset/paket/css/icons.css') }}" media="all" />
		<link rel="stylesheet" type="text/css" href="{{ asset('user-web/aset/paket/css/style.css') }}" media="all" />
		<link rel="stylesheet" type="text/css" href="{{ asset('user-web/aset/paket/css/animate.css') }}" media="all" />
		<link rel="stylesheet" type="text/css" href="{{ asset('user-web/aset/paket/css/onebyone.css') }}" media="all" />
		<link rel="stylesheet" href="{{ asset('user-web/aset/css/utama.css') }}"/>

		<!-- Favicon -->
		<link rel="shortcut icon" href="{{ asset('user-web/aset/img/favicon.ico') }}" />
	</head>
	<body>
		<div style="margin-top:-10px;" class="kerangka-website">
			<header id="header">
				<div class="container">
					<div class="row">
						<div class="col-sm-4 kiri">
							<strong class="logo_sekolah"><img style="margin-top:15px;width:110px;height:110px;" src="{{ asset('admin/docs/assets/img/smk-terisi.jpeg') }}" alt="Logo"></strong>
                            <strong class="logo_indraayu"><img style="margin-top:20px;width:170px;height:120px;" src="{{ asset('user-web/aset/img/Logo-Kabupaten-Indramayu.png') }}" alt="Logo"></strong>
						
                        </div>
						<div class="col-sm-8 kanan">

							<section class="user-navigation">
								<div class="container">
									<div class="frame pull-right">
										<div class="form-search pull-right">
											<form action="404.html">
												<fieldset>
													<div class="field-search">
														<input type="text" class="form-control input-sm" placeholder="Cari" />
														<button class="btn-search" type="submit"><span class="fa-icon-search"></span></button>
													</div>
												</fieldset>
											</form>
										</div>
										<div class="profiles-box pull-right active">
											<a href="" class="link-profiles pull-left">Akun Resmi</a>
											<ul style="width:100px;" class="tools tools-middle pull-left">
												<li><a href="" target="_blank"><img style="width:22px;height:21px;margin-top:2px;" src="{{ asset('user-web/aset/img/facebook.png') }}" alt="Logo"></li>
												<li><a href="" target="_blank"><img style="width:25px;height:25px;" src="{{ asset('user-web/aset/img/instagram.png') }}" alt="Logo"></a></li>
												<li><a href="" target="_blank"><img style="width:28px;height:22px;margin-top:1px;" src="{{ asset('user-web/aset/img/youtube.png') }}" alt="Logo"></a></li>
											</ul>
										</div>
									</div>
								</div>
							</section>

							<section class="header-section">
								<div class="container">
									<div class="row">
										<div class="col-sm-12">
											<!--  navbar start -->
											<nav class="navbar navbar-default navbar-business" role="navigation">
												<div class="navbar-header">
													<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
														<span class="sr-only">Toggle Navigasi</span>
														Menu Navigasi
														<span class="wrap-icon pull-left">
															<span class="icon-bar"></span>
															<span class="icon-bar"></span>
															<span class="icon-bar"></span>
														</span>
													</button>
												</div>
												<div class="collapse navbar-collapse">
													<span class="nook">&nbsp;</span>
													<ul style="margin-left:-100px;width:820px;" class="nav navbar-nav">
														<li class="active"><a href="user_master">Beranda</a></li>
														<li style="margin-left:20px;" class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown">Profil</a>
														    <ul class="dropdown-menu">
														      <li><a href="user-sejarah">Sejarah</a></li>
														      <li><a href="user-visimisi">Visi &amp; Misi</a></li>
														      <li><a href="user-struktursek">Struktur Sekolah</a></li>
														      <li><a href="user-fasilitas">Fasilitas</a></li>
														    </ul>
													    </li>
                                                        <li style="margin-left:18px;" class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown">Keahlian</a>
                                                            <ul class="dropdown-menu">
                                                              <li><a href="">Multimedia</a></li>
                                                            </ul>
                                                        </li>
														<li style="margin-left:18px;" class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown">Kesiswaan</a>
														    <ul class="dropdown-menu">
														      <li><a href="">Osis</a></li>
                                                              <li><a href="">Pramuka</a></li>
                                                              <li><a href="">Paskibra</a></li>
                                                              <li><a href="">Karate</a></li>
                                                              <li><a href="">Hadroh</a></li>
														    </ul>
													    </li>
                                                        <li style="margin-left:18px;" class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown">Galery</a>
                                                            <ul class="dropdown-menu">
                                                              <li><a href="">Foto</a></li>
                                                            </ul>
                                                        </li>
                                                        <li style="margin-left:18px;" class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown">Kurikulum</a>
                                                            <ul class="dropdown-menu">
                                                              <li><a href="">Jadwal Pelajaran</a></li>
                                                              <li><a href="">Kalender Sekolah</a></li>
                                                            </ul>
                                                        </li>														
                                                        <li style="margin-left:18px;" class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown">PPDB</a>
                                                            <ul class="dropdown-menu">
                                                              <li><a href="">Pendaftaran</a></li>
                                                              <li><a href="">Hasil Seleksi</a></li>
                                                            </ul>
                                                        </li>
                                                        <li style="margin-left:18px;" class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown">Rekap Nilai</a>
                                                            <ul class="dropdown-menu">
                                                              <li><a href="">Nilai Tingkat 1</a></li>
                                                              <li><a href="">Nilai Tingkat 2</a></li>
                                                              <li><a href="">Nilai Tingkat 3</a></li>
                                                            </ul>
                                                        </li>
                                                        <li style="margin-left:18px;" class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown">Hubungi Kami</a>
                                                            <ul class="dropdown-menu">
                                                              <li><a href="">Konsultasi</a></li>
                                                              <li><a href="">Hubungi Kami</a></li>
                                                            </ul>
                                                        </li>
                                                        
														<li class="last">&nbsp;</li>
													</ul>
													<!--  frame pull-right start -->
													<div class="frame">
														<div class="form-search pull-right">
															<form action="404.html">
																<fieldset>
																	<div class="field-search">
																		<input type="text" class="form-control input-sm" placeholder="Cari" />
																		<button class="btn-search" type="submit"><span class="fa-icon-search"></span></button>
																	</div>
																</fieldset>
															</form>
														</div>
														<div class="profiles-box pull-left active">
															<ul class="tools tools-middle pull-right">
																<li><a href="#"><span class="fa-icon-facebook-sign"></span></a></li>
															</ul>
														</div>
													</div>
												</div>
											</nav>
										</div>
									</div>
								</div>
							</section>
						</div>
					</div>
				</div>
			</header>

			<!-- Bagian Tengah -->
			<div class="tengah" id="main">
                <!-- Bagian Tampilan Slide Web -->
				<section style="margin-top:-80px;" class="gallery">
					<div id="onebyone_carousel" class="carousel slide gallery-holder">
						<div class="carousel-inner">
							<div class="item active">
								<img style="height:400px;" src="{{ asset('user-web/aset/img/slide01.jpeg') }}" alt="">
								<div class="slide_content">
									<div class="container gambar-gerak">
                                    <div class="hold-text pull-right">
											<strong class="title animate0 rotateIn" style="opacity: 0;">Biru, Hijau, Asri</strong>
											<div class="hold animate1 rotateIn" style="opacity: 0;">
												<p>Dengan sangat bangga kami dedikasikan keindahan serta kecantikan sekolah kami dari dunia oleh dunia dan untuk dunia.</p>
											</div>
											<a href="" class="btn btn-default btn-lg btn-white animate2 rotateIn" style="opacity: 0;">Sambutan</a>
										</div>
									</div>
								</div>
							</div><!-- /.item -->
							<div class="item">
								<img style="height:400px;"  src="{{ asset('user-web/aset/img/slide02.jpeg') }}" alt="">
								<div class="slide_content">
									<div class="container gambar-gerak">
										<div class="hold-text pull-right">
											<strong class="title animate0 rotateIn" style="opacity: 0;">Biru, Hijau, Asri</strong>
											<div class="hold animate1 rotateIn" style="opacity: 0;">
												<p>Dengan sangat bangga kami dedikasikan keindahan serta kecantikan sekolah kami dari dunia oleh dunia dan untuk dunia.</p>
											</div>
											<a href="" class="btn btn-default btn-lg btn-white animate2 rotateIn" style="opacity: 0;">Sambutan</a>
										</div>
									</div>
								</div>
							</div><!-- /.item -->
							
						</div>
						<a class="link-prev carousel-control" href="#onebyone_carousel" data-slide="prev"><i class="im-icon-arrow-left-4"></i></a>
						<a class="link-next carousel-control" href="#onebyone_carousel" data-slide="next"><i class="im-icon-arrow-right-5"></i></a>
					</div><!-- /.carousel -->
				</section>

				<div class="container">
					<div class="row">
						<div class="col-md-8 col-sm-6">
                            
                        <!-- Bagian isi beranda web -->
							<div class="container">
								                               
                                @yield('content')
                                
                                <!--
								<div class="col-sm-12">
									<blockquote class="blockquote-about">
										<cite class="author pull-left">
											<span class="hold-img"><a href="kabar-sekolah-detail.html"><img src="{{ asset('user-web/aset/paket/images/img165.jpg') }}" alt="image" width="85" height="87"></a></span>
											<small>Oleh <a href="404.html">Administrator</a></small>
										</cite>
										<div class="block">
											<span class="nook">&nbsp;</span>
											<strong class="title"><a href="kabar-sekolah-detail.html"><b>SEMANGAT BELAJAR MENGHADAPI UJIAN SEKOLAH</b></a>
											<small>Terbit pada tanggal 29 Desember 2013 | <a href="kabar-sekolah-detail.html#komentar">5 Komentar</a></small>
											</strong>
											<q>Haloo... para siswa siswi SMKN 1 Berau terutama kelas XII siap-siap ya tanggal xx - xx xxx 2014 kalian akan menghadapi Ujian Sekolah Tahun 2014 dimana jadwal ujiannya sudah ada di web SMKN 1 Berau. Jangan lupa selalu belajar biar kalian semua siap menghadapinya. Matikan TV, HP, Kom... </q> <a href="kabar-sekolah-detail.html">Baca selengkapnya...</a>
										</div>
									</blockquote>
                                </div>-->                      							
							</div>
						</div>

						<div class="col-md-4 col-sm-6 col-xs-12">
							<div class="crewman crewman-center">
								<div class="frame sambutan" id="kepala-sekolah">
									<div class="hold-line">
										<span class="hold-img">
											<img class="img-circle" src="{{ asset('user-web/aset/img/img103.jpg') }}" alt="image" width="210" height="210">
										</span>
										<strong class="title">Drs. H. Suhari</strong>
										<strong class="office">Kepala Sekolah</strong>
									</div>
									<div class="hold-line">
										<p>Assalamu'alaikum wr.wb.</p>
										<p>Dalam era globalisasi ini layanan informasi yang cepat dan akurat menjadi kebutuhan masyarakat modern. Informasi yang terdistribusi secara efektif diyakini menjadi penggerak partisipasi seluruh warga terutama pemangku kepentingan (stakeholders) untuk mendukung program, mewujudkan harmoni antarsesama warga sekolah, membuka kran komunikasi dan tentu saja merupakan media publikasi keunggulan sekolah kepada masyarakat.</p>
										<p>Web SMK Negeri 1 Berau hadir sebagai media komunikasi dan informasi untuk seluruh stakeholders dan masyarakat luas. Pengelolaan web ini berada di bawah kendali Mahakam Tim Samarinda. Meski demikian, untuk up-date data dan informasi diperlukan kerja sama sinergis dengan seluruh bidang dan unit di lingkungan SMK Negeri 1 Berau.</p>
										<p>Untuk sementara, menu yang tersedia masih terbatas. Akan tetapi ke depan akan senantiasa dikembangkan sesuai dengan dinamisasi dan kebutuhan yang relevan. Selamat datang dan selamat berkunjung di web SMKN 1 Berau. Silakan kontak kami untuk memberikan masukan dalam rangka mewujudkan SMKN 1 sebagai sekolah yang Insya Allah penuh berkah-rahmat-hidayah, nyaman dan  menyejukkan, religius, serta unggul dalam IPTEK.</p>
										<p>Wassalamuala'ikum wr.wb.</p>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>

				<section class="link-penting">
						<div class="container">
							<div class="row">
								<div class="gallery-partners">
									<div class="gallery-holder">
										<ul>
											<li>
												<ul class="list-partners">
													<li>
								
													</li>
			
												</ul>
											</li>
										</ul>
									</div>									
								</div>
							</div>
						</div>
					</section>
			</div>



			<!-- Bagian Bawah -->
			<div class="bawah">
				<footer id="footer">
					<div class="container">
						<div class="row">
							<div class="col-md-5 col-sm-6">
								<p style="width:1000px;">&copy; 2020 Hak Cipta Dilindungi. Develop oleh Kelompok 5 Proyek 3 D4 Rekayasa Perangkay Lunak, Politeknik Negeri Indramayu (POLINDRA) </p>
							</div>
							
						</div>
					</div>
				</footer>
			</div>
			<!-- Penutup Bagian Bawah -->
		</div>

		<!-- Koleksi Javascript -->
		<script type="text/javascript" src="{{ asset('user-web/aset/paket/js/jquery-2.0.3.min.js') }}"></script>
		<script type="text/javascript" src="{{ asset('user-web/aset/paket/js/bootstrap.min.js') }}"></script>
		<script type="text/javascript" src="{{ asset('user-web/aset/paket/js/less.js') }}"></script>
		<script type="text/javascript" src="{{ asset('user-web/aset/paket/js/jquery.main.js') }}"></script>
		<!--[if lte IE 9 ]>
			<script type="text/javascript" src="aset/paket/js/modernizr-1.7.min.js"></script>
			<script type="text/javascript" src="aset/paket/js/placeholder.js"></script>
		<![endif]-->
		<script src="{{ asset('user-web/aset/paket/js/jquery.onecarousel.min.js') }}"></script>
		<script type="text/javascript">
			$(document).ready(function() { 
				"use strict";
				$('#onebyone_carousel').oneCarousel({
					easeIn: 'rotateIn',
					interval: 5000,
					responsive: true,
					height: 410,
					minHeight: 410,
					pause: 'hover'
				});
			});
		</script>
	</body>
</html>