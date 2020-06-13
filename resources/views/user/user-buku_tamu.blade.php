@extends('layouts.user_master')

@section('content') 

<div class="judul_halaman" style="margin-left:20px;margin-top:-1030px;">
<strong><h6>Buku Tamu</h6></strong><br></div>

<div class="form-input" style="margin-left:23px;border : 1px solid white;width:725px;"><br><br>
<form style="margin-left:25px;width:670px;color:black;" action="/user-buku_tamu/storetamu" method="post"> 
{{ csrf_field() }}
<div class="form-group">
    <label for="nama">Nama :</label>
    <input type="text" class="form-control" id="nama" placeholder="Nama lengkap" name="nama" required="required">
  </div>
  <div class="form-group">
    <label for="email">Email address :</label>
    <input type="email" class="form-control" id="email" placeholder="Enter email" name="email" required="required">
  </div>
  <div class="form-group">      
    <label for="komentar">Komentar :</label>
    <textarea style="height:200px;" type="text" class="form-control" id="komen" placeholder="Komentar" name="komentar" required="required"></textarea>
  </div>
  <br>
  <button type="submit" value="simpan" class="btn btn-primary">Submit</button>
</form><br>
</div>


          <!-- Bagian tampil komentar --><br><br><br>
            <div class="col-sm-12" style="margin-left:13px;">
								@foreach($liat as $li)
									<blockquote class="blockquote-about">
										<cite class="author pull-left">
											<span><img src="{{ asset('user-web/aset/img/user-tamu.png') }}"  width="100" height="110"></a></span>
										</cite>
										<div class="block" style="width:600px;margin-left:10px;">
											<span class="nook">&nbsp;</span>
											<strong class="title"><b>{{ $li->nama }}</b></a>
											<small>{{ $li->email }}</small>
											</strong>											
											<q align="justify"><?php echo $li['komentar'] ?></q> 
										</div>
									</blockquote>
									@endforeach
              </div><br>
            <!-- Batas akhir bagian tampil komentar -->

            
<!--Bagian sambutan kepala sekolah-->
<div class="col-md-4 col-sm-6 col-xs-12" style="height:100px;width:300px;margin-top:-1015px;margin-left:775px;">
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