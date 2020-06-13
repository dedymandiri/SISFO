@extends('layouts.user_master')

@section('content') 

<div class="judul_halaman" style="margin-top:-1030px;margin-left:25px;">
<strong><h6>Hasil Seleksi Siswa Baru</h6></strong><br>

@foreach($liat as $li)
Keterangan : {{ $li->keterangan }}<br><br>
<embed src="{{ url('/data_jadwal/'.$li->file) }}" type="application/pdf" width="93%" height="900px">
@endforeach    
</div>

<!--Bagian sambutan kepala sekolah-->
<div class="col-md-4 col-sm-6 col-xs-12" style="height:100px;width:300px;margin-top:-930px;margin-left:775px;">
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