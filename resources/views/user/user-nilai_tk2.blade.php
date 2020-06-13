@extends('layouts.user_master')

@section('content')   

<style>	
	.unduh{
		color:red;
	}
	.unduh:hover{
		color:blue;
		background:white;
	}
</style>
                                
<div class="judul_halaman" style="margin-left:25px;margin-top:-1030px;">
<strong><h6>Nilai Siswa Tingkat 2</h6></strong><br>

<p align="justify" style="width:715px;">Dibawah ini merupakan rekapitulasi nilai hasil ujian untuk tingkat 3 atau kelas 12 di semester ini, 
silahkan download nilai untuk mencetak hasil ujiannya.</p>

<table border="solid 1px black" style="width:715px;height:30px;text-align:center;">
  <thead style="color:black;">
    <tr>
      <th width="30px" height="40px" style="text-align:center;">No</th>
      <th style="text-align:center;">Nama</th>
      <th style="text-align:center;">Keahlian</th>
      <th style="text-align:center;">Kelas</th>      
	    <th style="text-align:center;">Cetak Nilai</th>
    </tr> 
  </thead>

  <thead>
  <?php $no = 0;?>
  @foreach($tampil as $nilai)
  <?php $no++;?>
    <tr>        
        <td>{{ $no }}</td>
        <td>{{ $nilai->nama }}</td>
        <td>{{ $nilai->jurusan }}</td>
        <td>{{ $nilai->kelas }}</td>
          
		<td>           
            <a class="unduh" href=""  title="Download">Download</a>
            
        </td>            
    </tr>
    @endforeach
  </thead>
</table>
</div>
<br><br>

<!--Bagian sambutan kepala sekolah-->
<div class="col-md-4 col-sm-6 col-xs-12" style="height:100px;width:300px;margin-top:-190px;margin-left:775px;">
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