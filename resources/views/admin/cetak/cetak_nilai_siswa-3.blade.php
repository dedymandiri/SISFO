<!-- CETAK NILAI SISWA UNTUK TINGKAT 3 MULTIMEDIA -->

<!-- Buat print halaman -->
<script>
		window.print();
</script> 
<!-- Akhir batas buat print halaman --> 

<br><br>
<div style="margin-left:100px;width:900px;height:1500px;" class="card"><br>
  
  <!--Bagian logo sekolah-->
  <div class="logo_sekolah">
      <img style="margin-left:70px;margin-top:35px;" src="{{ asset('admin/docs/assets/img/smk-terisi.jpeg') }}" height="110px" width="110px;">
  </div>
  <!--Bagian nama sekolah terkait-->
  <div class="text-judul" >
    <p style="margin-top:-90px;margin-left:18px;" align="center">
    <font size="5"><strong>KARTU HASIL UJIAN SISWA TINGKAT 3 <br>
    SMK ISLAM TERISI INDRAMAYU</strong></font><br>
    JL. Jangga Cikamurang, Terisi, Rajasinga, Rajasinga, Indramayu, Jawa Barat 45262</p>
  </div>
  <!--Bagian logo pendidikan-->
  <div class="logo_pendidikan">
      <img style="margin-left:735px;margin-top:-105px;" src="{{ asset('admin/docs/assets/img/indramayu.png') }}" height="115px" width="120px;">
  </div>
  <!--Bagian garis inline judul-->
  <div class="garis-inlane" style="margin-top:30px;">
    <HR style="margin-left:51px;border: 1px solid black;" WIDTH=90% >
    <HR style="margin-left:50px;margin-top:-16px;border: 2px solid black;" WIDTH=90% >
  </div><br><br>
 
  @foreach($liat as $li)

 <table style="margin-left:50px;" class="identitas-siswa">
    <tbody>
        <tr><td width="105px">Nama</td><td width="30px">:</td><td>{{ $li->nama }}</td></tr>
        <tr><td>Kelas</td><td>:</td><td>{{ $li->kelas }}</td></tr>        
        <tr><td>Jurusan</td><td>:</td><td>{{ $li->jurusan }}</td></tr>
    </tbody>
  </table><br>   

  <p style="margin-left:53px;">Tabel dibawah ini merupakan hasil capaian nilai siswa dari ujian semester ini : </p><br><br>
  
  <div style="margin-left:55px;margin-top:-40px;">
    <table class="table table-bordered" border="1" cellpadding="7">
      <thead>
        <tr>
          <th class="th-sm">No</th>
          <th width="510px" class="th-sm">Mata Pelajaran</th>
          <th width="210px" class="th-sm">Nilai Ujian</th>
        </tr>
      </thead>
      <tbody align="center">
        <tr>
            <td>{{ 1 }}</td> 
            <td align="left">{{ $mapel[2]->pel_1 }}</td>
            <td>{{ $li->mapel_1 }}</td>
        </tr>
        <tr>
            <td>{{ 2 }}</td> 
            <td align="left">{{ $mapel[2]->pel_2 }}</td>
            <td>{{ $li->mapel_2 }}</td>
        </tr>
        <tr>
            <td>{{ 3 }}</td> 
            <td align="left">{{ $mapel[2]->pel_3 }}</td>
            <td>{{ $li->mapel_3 }}</td>
        </tr>
        <tr>
            <td>{{ 4 }}</td>
            <td align="left">{{ $mapel[2]->pel_4 }}</td>
            <td>{{ $li->mapel_4 }}</td>
        </tr>
        <tr>
            <td>{{ 5 }}</td>
            <td align="left">{{ $mapel[2]->pel_5 }}</td>
            <td>{{ $li->mapel_5 }}</td>
        </tr>
        <tr>
            <td>{{ 6 }}</td>
            <td align="left">{{ $mapel[2]->pel_6 }}</td>
            <td>{{ $li->mapel_6 }}</td>
        </tr>
        <tr>
            <td>{{ 7 }}</td>
            <td align="left">{{ $mapel[2]->pel_7 }}</td>
            <td>{{ $li->mapel_7 }}</td>
        </tr>
        
      </tbody>
    </table>
  </div>
</div>
@endforeach

<!-- Bagian buat paraf kepsek -->
<div class="paraf-kepsek" style="margin-left:710px;margin-top:-450px;">
  <strong>Indramayu, .....................................</strong><br>
  <p>Mengetahui</p>
  <p>Ketua Jurusan Multimedia</p><br><br>
  <p>..........................................</p>
  <p>NIP/NIK :</p>
</div>
<!-- Batas akhir bagian buat paraf kepsek -->

