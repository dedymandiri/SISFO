@extends('layouts.user_master')

@section('content') 

<div class="judul_halaman" style="margin-left:25px;margin-top:-1030px;">
<strong><h6>Struktur Sekolah</h6></strong><br></div>

<table border="solid 1px black" style="margin-left:25px;width:700px;text-align:center;">
  <thead style="color:black;">
    <tr>
      <th width="30px" height="40px" style="text-align:center;">No</th>
      <th style="text-align:center;">Nama Guru/Staff</th>
      <th style="text-align:center;">Jabatan</th>
    </tr> 
  </thead>
  <tbody>

<!--Untuk menampilkan tabel berita dari database-->
<?php $no = 0;?>
@foreach($liat as $li)
<?php $no++ ;?>
<tr>
    <td>{{ $no }}</td>
    <td>{{ $li->nama_guru }}</td>
    <td>{{ $li->jabatan }}</td>
</tr>
@endforeach
</tbody>
</table>

<br><br>


<!--Bagian sambutan kepala sekolah-->
<div class="col-md-4 col-sm-6 col-xs-12" style="height:100px;width:300px;margin-top:-110px;margin-left:775px;">
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