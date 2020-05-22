<!DOCTYPE html>
<html lang="id">
	<head>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1.0" />
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

		<!-- Informasi Umum -->
		<title>SMK ISLAM TERISI</title>
		<link rel="icon" type="image/png" href="{{ asset('admin/docs/assets/img/logo sekolah.png') }}">
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
		<div style="background: linear-gradient(#7bed9f, #ffffff);width:1100px;margin-left:125px;border: 1px solid black;margin-top:-4px;" class="kerangka-website">
			<header id="header">
				<div class="container">
					<div class="row">
						<div class="col-sm-4 kiri">
						<br>
						<div class="col-sm-8 kanan">
							<section class="user-navigation"style="background:#ff7f50;color:white;width:1098px;margin-left:-30px;margin-top:-30px;">
								<div align="center" style="margin-top:-10px;" class="container">
								
								<!--Tanggal dan waktu sekarang-->
								<?php 
    								$tanggal = mktime(date('m'), date("d"), date('Y'));
   									echo "Tanggal : <b> " . date("d-m-Y", $tanggal ) . "</b>";
    								date_default_timezone_set("Asia/Jakarta");
    								$jam = date ("H:i:s");
    								echo " | Pukul : <b> " . $jam . " " ." </b> ";
    								
 								?>
								<!--Batas akhir tanggal dan waktu sekarang-->

									<!--<div class="frame pull-right" style="margin-top:-10px;">
										<div class="form-search pull-right">
											<form>
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
									</div>-->
								</div>
							</section>

							<br><br>

							<section class="header-section" style="background:#7bed9f;width:1098px;margin-left:-30px;margin-top:-15px;">
								<div class="container">
									<div class="row">
										<div class="col-sm-12">
											
											<!--  navbar start -->
											<nav class="navbar navbar-default navbar-business" role="navigation" style="width:1098px;height:95px;margin-left:-15px;">
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
												<div class="collapse navbar-collapse" style="background:#7bed9f;margin-top:-50px;">
												<!--  logo sekolah header -->
												<img style="width:320px;height:100px;margin-top:15px;" src="{{ asset('admin/docs/assets/img/smk islam terisi.png') }}" alt="Logo">

												<span class="nook">&nbsp;</span>
													<ul style="margin-left:350px;margin-top:-30px;" class="nav navbar-nav">
														<li><a href="beranda">Beranda</a>
															
														</li>
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
                                                              <li><a href="user-multimedia">Multimedia</a></li>
                                                            </ul>
                                                        </li>
														<li style="margin-left:18px;" class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown">Kesiswaan</a>
														    <ul class="dropdown-menu">
														      <li><a href="user-osis">Osis</a></li>
                                                              <li><a href="user-pramuka">Pramuka</a></li>
                                                              <li><a href="user-paskibra">Paskibra</a></li>
                                                              <li><a href="user-karate">Karate</a></li>
                                                              <li><a href="user-hadroh">Hadroh</a></li>
														    </ul>
													    </li>
                                                        <li style="margin-left:18px;" class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown">Galery</a>
                                                            <ul class="dropdown-menu">
                                                              <li><a href="user-galery">Foto</a></li>
                                                            </ul>
                                                        </li>
                                                        <li style="margin-left:18px;" class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown">Kurikulum</a>
                                                            <ul class="dropdown-menu">
                                                              <li><a href="user-jadwal_pelajaran">Jadwal Pelajaran</a></li>
                                                              <li><a href="user-kalender_sekolah">Kalender Sekolah</a></li>
                                                            </ul>
                                                        </li>														
                                                        <li style="margin-left:18px;" class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown">PPDB</a>
                                                            <ul class="dropdown-menu">
                                                              <li><a href="user-pendaftaran">Pendaftaran</a></li>
                                                              <li><a href="user-hasil_seleksi">Hasil Seleksi</a></li>
                                                            </ul>
                                                        </li>
                                                        <li style="margin-left:18px;" class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown">Rekap Nilai</a>
                                                            <ul class="dropdown-menu">
                                                              <li><a href="user-nilai_tk1">Nilai Tingkat 1</a></li>
                                                              <li><a href="user-nilai_tk2">Nilai Tingkat 2</a></li>
                                                              <li><a href="user-nilai_tk3">Nilai Tingkat 3</a></li>
                                                            </ul>
                                                        </li>
                                                        <li style="margin-left:18px;" class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown">Hubungi Kami</a>
                                                            <ul class="dropdown-menu">
                                                              <li><a href="konseling">Konsultasi</a></li>
                                                              <li><a href="hubungi_kami">Hubungi Kami</a></li>
                                                            </ul>
                                                        </li>
                                                        
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
																<li><a href=""><span class="fa-icon-facebook-sign"></span></a></li>
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
								<img style="height:300px;" src="{{ asset('user-web/aset/img/slide01.jpeg') }}" alt="">
								<div class="slide_content">
									<div class="container gambar-gerak">
                                    <div class="hold-text pull-right">
											<div class="hold animate1 rotateIn" style="opacity: 0;">
												<p>Dengan sangat bangga kami dedikasikan keindahan serta kecantikan sekolah kami dari dunia oleh dunia dan untuk dunia.</p>
											</div>
											<a href="user-sambutan" class="btn btn-default btn-lg btn-white animate2 rotateIn" style="opacity: 0;background:white;color:black;">Sambutan</a>
										</div>
									</div>
								</div>
							</div><!-- /.item -->
							<div class="item">
								<img style="height:300px;"  src="{{ asset('user-web/aset/img/slide02.jpeg') }}" alt="">
								<div class="slide_content">
									<div class="container gambar-gerak">
										<div class="hold-text pull-right">
											<div class="hold animate1 rotateIn" style="opacity: 0;">
												<p>Dengan sangat bangga kami dedikasikan keindahan serta kecantikan sekolah kami dari dunia oleh dunia dan untuk dunia.</p>
											</div>
											<a href="user-sambutan" class="btn btn-default btn-lg btn-white animate2 rotateIn" style="opacity: 0;background:white;color:black;">Sambutan</a>
										</div>
									</div>
								</div>
							</div><!-- /.item -->
							
						</div>
						<a class="link-prev carousel-control" href="#onebyone_carousel" data-slide="prev"><i class="im-icon-arrow-left-4"></i></a>
						<a class="link-next carousel-control" href="#onebyone_carousel" data-slide="next"><i class="im-icon-arrow-right-5"></i></a>
					</div><!-- /.carousel -->
					
				</section>

				<section>
				<div class="container">
					<div class="row">
					<!-- Bagian sidebar web -->		
					<div class="sidebar" style="margin-top:-40px;margin-left:790px;width:30%;height:1100px;"> <br>
								
   					<div class="col-sm-3 col-md-3" >
      				  <form class="navbar-form" role="search">
      					  <div class="input-group">
        				    <input style="width:233px;margin-left:-17px;" type="text" class="form-control" placeholder="Cari" name="q">
        					    <div class="input-group-btn">
           						    <button class="btn btn-default" type="submit"><img src="https://img.icons8.com/android/24/000000/search.png"  height="17"/></button>
          						 </div>
       					   </div>
      				  </form>
    				</div>

				<!--Bagian sambutan kepala sekolah-->
				<div class="col-md-4 col-sm-6 col-xs-12" style="height:100px;width:300px;margin-top:10px;">
					<div class="crewman crewman-center">
						<div class="frame sambutan" id="kepala-sekolah">
							
							<div class="hold-line">
								<span class="hold-img">
									<img style="height:150px;width:150px;margin-left:30px;margin-top:20px;" class="img-circle" src="{{ asset('user-web/aset/img/dedim.png') }}" alt="image" width="210" height="210">
								</span>
								<label class="title">Dedi Maulana S.ST</label>
								<strong class="office">Kepala Sekolah</strong>
							</div>

						</div>
					</div>
				</div> 
				<!--Batas Bagian sambutan kepala sekolah-->
			
				<!-- link kampus-->
				<div class="col-md-4 col-sm-6 col-xs-12" style="margin-top:190px;height:100px;width:300px;">
					<div class="crewman crewman-center">
						<div class="frame sambutan">
							<div style="margin-top:-120px;">                                
								<strong class="office">Keahlian</strong><br>
								<a href="user-multimedia" class="link-jurusan">Multimedia</a>
							</div>							
						</div>
					</div>
				</div> 
				<!--Batas link kampus-->
	
				<!-- link jurusan-->
				<div class="col-md-4 col-sm-6 col-xs-12" style="margin-top:80px;height:200px;width:300px;">
					<div class="crewman crewman-center">
						<div class="frame sambutan">
                            <div class="hold-line" style="margin-top:-120px;">                                
								<strong class="office">Kampus Indramayu </strong>
								<div align="left">
								1. <a href="https://unwir.ac.id/" class="link-jurusan">Universitas Wiralodra</a><br>
								2. <a href="https://polindra.ac.id" class="link-jurusan">Politeknik Negeri Indramayu</a><br>
								3. <a href="https://ayokuliah.id/universitas/stai-pangeran-dharma-kusuma-segaran-indramayu/" class="link-jurusan">Universitas Islam Dharma Kusuma</a><br>
								4. <a href="http://stitalaminindramayu.ac.id/" class="link-jurusan">STIT Al Amin Kandanghaur</a><br>
								5. <a href="https://pmb.akamigasbalongan.ac.id/" class="link-jurusan">Akamigas Balongan</a><br>
								6. <a href="https://indas.id/kampus-774akademi-kebidanan-sayid-sabiq-indramayu" class="link-jurusan">STAI dan Akbid Sayid Sabiq</a><br>
								7. <a href="http://www.stikesindramayu.ac.id/" class="link-jurusan">STIKes Indramayu</a><br>
								8. <a href="https://ayokuliah.id/universitas/amik-purnama-niaga/" class="link-jurusan">AMIK Purnama Niaga Indramayu</a><br>
								9. <a href="http://iai-alzaytun.ac.id/" class="link-jurusan">IAI Al Zaytun Indonesia</a><br>
								10.<a href="https://stkipnu.ac.id/" class="link-jurusan">STKIP NU Kaplongan</a><br>
								</div>
							</div>							
						</div>
					</div>
				</div> 
				<!--Batas link jurusan-->

				
				</div>
                            <!-- Bagian contents web -->
							<div class="container" style="margin-top:-60px;float:left;width:73%;">> 
					   
								@yield('content')
								
							</div>
							<!-- Bagian contents web -->
				</div>
							
				</section>
				
				<div class="" style="background:#ff7f50;width:1100px;height:8px;"></div>

				<section class="link-penting" style="background:#747d8c;height:135px;color:white;width:1100px;">
						<div class="container">
							<div class="row">
								<div class="gallery-partners">
									<div class="gallery-holder">
										<!--footer kontak-kami-->
										<div class="alamat">
											<br><strong style="margin-left:-835px;"><font size="3">Contact Person  :</font></strong>									
											<p align="left" style="margin-left:75px;font-size: 12px;"><br>Ponpes Arribathul Mustofa Terisi
											<br>JL. Jangga Cikamurang, Terisi, Rajasinga, Kabupaten Indramayu, Jawa Barat 45262
											<br>NPSN : 20215995
											<br>No.Telepon : (0234) 9141819</p>
										</div>			
										<!--footer Follow-us-->
										
										<div class="follow-us" style="margin-left:250px;margin-top:-130px;">
											<strong><font size="3">Follow Us  :</font></strong><br>
											<div style="margin-left:388px;margin-top:15px;" class="tools tools-middle pull-left">
												<a href="" target="_blank"><img style="width:20px;height:20px;" src="{{ asset('user-web/aset/img/facebook.png') }}" alt="Logo"></a>
												<a href="" target="_blank"><img style="width:25px;height:24px;margin-left:5px;" src="{{ asset('user-web/aset/img/instagram.png') }}" alt="Logo"></a>
												<a href="" target="_blank"><img style="width:24px;height:20px;margin-left:3px;" src="{{ asset('user-web/aset/img/youtube.png') }}" alt="Logo"></a>
											</div>						
										</div>
										<!--footer Link-terkait-->
										<div class="follow-us" style="margin-top:-20px;">
											<strong style="margin-left:700px;"><font size="3">About us  :</font></strong><br>
																						
										</div>
									</div>									
								</div>
							</div>
						</div>
				
					</section>

					<section>				
						<!-- Bagian Bawah -->
						<div class="bawah" style="background:#747d8c;width:1100px;">
							<footer id="footer">
								<div class="container">
									<div class="row">
										<div class="col-md-5 col-sm-6">
											<p align="center" style="width:1000px;">&copy; 2020 Hak Cipta Dilindungi. Develop oleh Kelompok 5 Proyek 3 D4 Rekayasa Perangkay Lunak, Teknik Informatika, Politeknik Negeri Indramayu (POLINDRA) </p>
										</div>
							
									</div>
								</div>
							</footer>
						</div>
						<!-- Penutup Bagian Bawah -->
		
					</section>

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