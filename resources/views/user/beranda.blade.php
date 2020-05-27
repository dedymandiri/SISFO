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
                                </div><br>
							  
								<hr style="margin-left:25px;width:720px;border:1px solid black;"/><br>

								<strong><h6 style="margin-left:25px;">Berita</h6></strong><br></div>
								
								<div class="col-sm-12" style="margin-left:15px;">
														
                                </div>
</div><br><br>

@endsection      
