 <!--bagian button-->
 <!--
  <div style="width:1335px;" class="card-header info-color white-text text-center py-4">
    <a onClick="print_d()" target="_BLANK"><button style="margin-left:-300px;width:100px;" type="submit" value="Simpan" class="btn btn-secondary">Unduh</button></a>
    <a href="/nilai_siswa_tk1"><button style="margin-left:700px;width:100px;" type="button" class="btn btn-primary">Kembali</button></a>
  </div>
 -->
  <script>
		window.print();
	</script>

   <br><div style="margin-left:18px;width:1000px;height:1500px;" class="card"><br>
  
  <!--Bagian logo sekolah-->
  <div class="logo_sekolah">
      <img style="margin-left:100px;margin-top:35px;" src="{{ asset('admin/docs/assets/img/smk-terisi.jpeg') }}" height="110px" width="110px;">
  </div>
  <!--Bagian nama sekolah terkait-->
  <div class="text-judul" >
    <p style="margin-top:-95px;" align="center">
    <font size="5"><strong>KARTU HASIL UJIAN SISWA TINGKAT 1 <br>
    SMK ISLAM TERISI INDRAMAYU</strong></font><br>
    JL. Jangga Cikamurang, Terisi, Rajasinga, Rajasinga, Indramayu, Jawa Barat 45262</p>
  </div>
  <!--Bagian logo pendidikan-->
  <div class="logo_pendidikan">
      <img style="margin-left:800px;margin-top:-140px;" src="{{ asset('admin/docs/assets/img/indramayu.png') }}" height="115px" width="120px;">
  </div>
  <!--Bagian garis inline judul-->
  <div class="garis-inlane" style="margin-top:-10px;">
    <HR style="margin-left:50px;border: 1px solid black;" WIDTH=90% >
    <HR style="margin-left:50px;margin-top:-19px;border: 2px solid black;" WIDTH=90% >
  </div><br>
 
  @foreach($liat as $li)

  <table style="margin-left:50px;" class="identitas-siswa">
    <tbody>
        <tr><td width="105px">Nama</td><td width="30px">:</td><td>{{ $li->nama }}</td></tr>
        <tr><td>Kelas</td><td>:</td><td>{{ $li->kelas }}</td></tr>        
        <tr><td>Jurusan</td><td>:</td><td>Multimedia</td></tr>
    </tbody>
  </table>

  <table style="margin-left:50px;width:900px;" id="dtBasicExample" class="table table-striped table-bordered" cellspacing="0" width="100%">
    <!--Untuk menampilkan tabel berita dari database-->

    <div class="isi">		
      <br><br>   
      
      <p style="margin-left:50px;">Tabel capaian nilai siswa hasil dari ujian semester ini : </p>
      <div style="margin-top:10px;" class="tabel-nilai">
      <thead>
        <tr>
          <th class="th-sm">No</th>
          <th class="th-sm">Mata Pelajaran</th>
          <th class="th-sm">Nilai Ujian</th>
        </tr>
      </thead>
      <tbody>
        <tr>
            <td>{{ 1 }}</td> 
            <td>{{ $mapel[0]->pel_1 }}</td>
            <td>{{ $li->mapel_1 }}</td>
        </tr>
        <tr>
            <td>{{ 2 }}</td> 
            <td>{{ $mapel[0]->pel_2 }}</td>
            <td>{{ $li->mapel_2 }}</td>
        </tr>
        <tr>
            <td>{{ 3 }}</td> 
            <td>{{ $mapel[0]->pel_3 }}</td>
            <td>{{ $li->mapel_3 }}</td>
        </tr>
        <tr>
            <td>{{ 4 }}</td>
            <td>{{ $mapel[0]->pel_4 }}</td>
            <td>{{ $li->mapel_4 }}</td>
        </tr>
        <tr>
            <td>{{ 5 }}</td>
            <td>{{ $mapel[0]->pel_5 }}</td>
            <td>{{ $li->mapel_5 }}</td>
        </tr>
        <tr>
            <td>{{ 6 }}</td>
            <td>{{ $mapel[0]->pel_6 }}</td>
            <td>{{ $li->mapel_6 }}</td>
        </tr>
        <tr>
            <td>{{ 7 }}</td>
            <td>{{ $mapel[0]->pel_7 }}</td>
            <td>{{ $li->mapel_7 }}</td>
        </tr>
        <tr>
            <td>{{ 8 }}</td>
            <td>{{ $mapel[0]->pel_8 }}</td>
            <td>{{ $li->mapel_8 }}</td>
        </tr>
        <tr>
            <td>{{ 9 }}</td>
            <td>{{ $mapel[0]->pel_9 }}</td>
            <td>{{ $li->mapel_9 }}</td>
        </tr>
        <tr>
            <td>{{ 10 }}</td>
            <td>{{ $mapel[0]->pel_10 }}</td>
            <td>{{ $li->mapel_10 }}</td>
        </tr>
        <tr>
            <td>{{ 11 }}</td>
            <td>{{ $mapel[0]->pel_11 }}</td>
            <td>{{ $li->mapel_11 }}</td>
        </tr>
        <tr>
            <td>{{ 12 }}</td>
            <td>{{ $mapel[0]->pel_12 }}</td>
            <td>{{ $li->mapel_12 }}</td>
        </tr>
        <tr>
            <td>{{ 13 }}</td>
            <td>{{ $mapel[0]->pel_13 }}</td>
            <td>{{ $li->mapel_13 }}</td>
        </tr>
      </tbody>
    </table>

</div>
@endforeach

<div style="width:1335px;" class="card-header info-color white-text text-center py-4"></div>

</div>

