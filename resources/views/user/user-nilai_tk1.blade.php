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
<strong><h6>Nilai Siswa Tingkat 1</h6></strong><br>

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
            <a class="unduh" href="" title="Download">Download</a>
            
        </td>            
    </tr>
    @endforeach
  </thead>
</table>
</div>

<br><br>
@endsection