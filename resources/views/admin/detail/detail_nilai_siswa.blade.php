@extends('layouts.master')

@section('content') 

 
<br><div style="margin-left:18px;width:900px;" class="card"><br>
  
  <!--Bagian logo sekolah-->
  <div class="logo_sekolah">
      <img style="margin-left:70px;margin-top:20px;" src="{{ asset('admin/docs/assets/img/polindra.jpg') }}" height="100px" width="100px;">
  </div>
  <!--Bagian nama sekolah terkait-->
  <div class="text-judul" >
    <p style="margin-top:-80px;" align="center">
    <label>KARTU HASIL UJIAN SISWA TINGKAT 1 <br>
    SMK ISLAM TERISI INDRAMAYU</label><br>
    JL. Jangga Cikamurang, Terisi, Rajasinga, Rajasinga, Indramayu, Jawa Barat 45262</p>
  </div>
  <!--Bagian logo pendidikan-->
  <div class="logo_pendidikan">
      <img style="margin-left:730px;margin-top:-115px;" src="{{ asset('admin/docs/assets/img/pendidikan.png') }}" height="100px" width="100px;">
  </div>
  <!--Bagian garis inline judul-->
  <div class="garis-inlane" style="margin-top:-10px;">
    <HR style="margin-left:40px;border: 1px solid black;" WIDTH=90% >
    <HR style="margin-left:40px;margin-top:-19px;border: 2px solid black;" WIDTH=90% >
  </div><br>
 
  <table style="margin-left:40px;width:815px;" id="dtBasicExample" class="table table-striped table-bordered" cellspacing="0" width="100%">
    <!--Untuk menampilkan tabel berita dari database-->
 
  @foreach($liat as $li)

    <div class="isi">		
			<div style="margin-left:40px;width:880px;">
      <label>
      Nama  : {{ $li->nama }} <br>
      Kelas : {{ $li->kelas }}
      </label><br><br>   
      
      Tabel capaian nilai siswa hasil dari ujian semester ini :<br>
      <div style="margin-top:10px;" class="tabel-nilai">
        <tr>
          <th class="th-sm">Mapel 1</th>
          <th class="th-sm">Mapel 2</th>
          <th class="th-sm">Mapel 3</th>
          <th class="th-sm">Mapel 4</th>
          
        </tr>
     
        <tr>
          <td>{{ $li->mapel_1 }}</td>
          <td>{{ $li->mapel_2 }}</td>
          <td>{{ $li->mapel_3 }}</td>
          <td>{{ $li->mapel_4 }}</td>
        </tr>
      
    <!-- tabel nilai bagian bawah --> 
        <tr>
          <th class="th-sm">Mapel 5</th>
          <th class="th-sm">Mapel 6</th>
          <th class="th-sm">Mapel 7</th>
          <th class="th-sm">Mapel 8</th>
          
        </tr>
    
        <tr>
          <td>{{ $li->mapel_5 }}</td>
          <td>{{ $li->mapel_6 }}</td>
          <td>{{ $li->mapel_7 }}</td>
          <td>{{ $li->mapel_8 }}</td>
        </tr>
      </div>

      </div>
    </div>
  </div>
            
    @endforeach

  </table>

  <div style="margin-top:105px;width:930px;margin-left:-30px;" class="card-header info-color white-text text-center py-4">
    <button style="margin-left:-650px;" type="submit" class="btn btn-primary" value="Simpan">Cetak</button>
    <a href="/nilai_siswa"><button  title="Edit" type="button"  class="btn btn-primary">Kembali</button></a>
  </div>
  
</div>
<br>

@endsection