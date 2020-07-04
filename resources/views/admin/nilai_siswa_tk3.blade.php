@extends('layouts.master')

@section('content') 


  <!-- Content Header (Page header) -->
  <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-dark">Data Nilai Siswa Tingkat 3</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <a href="dashboard"><li class="breadcrumb-item">Dashboard</li></a>  /
              <li class="breadcrumb-item active">Nilai_siswa_tk3</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->


<body>
<div>
   <div style="margin-left:7px;" class="col-sm-4">
       <a href="/input_nilai_siswa_tk3"><button type="button" class="btn btn-success">Tambah Data</button></a>
       <!-- Search form -->
       <!--<input style="margin-top:-40px;margin-left:830px;width:250px" class="form-control" type="text" placeholder="Search" aria-label="Search"> -->  
   </div>

<br><br>
  <table style="margin-top:10px;margin-left:5px;width:1320px;" id="dtBasicExample" class="table table-striped table-bordered" cellspacing="0" width="100%">
   <thead>
   
    <tr>
      <th class="th-sm" width="25px">No</th>
      <th class="th-sm">Nama</th>
      <th class="th-sm">Kelas</th>
      <th class="th-sm">Keahlian</th>
      <th class="th-sm">{{ $mapel[2]->pel_1 }}</th>
      <th class="th-sm">{{ $mapel[2]->pel_2 }}</th>
      <th class="th-sm">{{ $mapel[2]->pel_3 }}</th>
      <th class="th-sm">{{ $mapel[2]->pel_4 }}</th>
      <th class="th-sm">{{ $mapel[2]->pel_5 }}</th>
      <th class="th-sm">{{ $mapel[2]->pel_6 }}</th>
      <th class="th-sm">{{ $mapel[2]->pel_7 }}</th>
      <th style="width:115px;" class="th-sm">Aksi</th>
    </tr>
    
  </thead>
  <thead>
  <?php $no = 0;?>
  @foreach($tampil as $rekap)
  <?php $no++ ;?>
    <tr>
        <td>{{ $no }}</td>
        <td>{{ $rekap->nama }}</td>
        <td>{{ $rekap->kelas }}</td>
        <td>{{ $rekap->jurusan }}</td>
        <td>{{ $rekap->mapel_1 }}</td>
        <td>{{ $rekap->mapel_2 }}</td>
        <td>{{ $rekap->mapel_3 }}</td>
        <td>{{ $rekap->mapel_4 }}</td>
        <td>{{ $rekap->mapel_5 }}</td>
        <td>{{ $rekap->mapel_6 }}</td>
        <td>{{ $rekap->mapel_7 }}</td>
        <td>
            <a href="/edit_nilai_siswa_tk3/{{ $rekap->id_rekap }}"><button style="width:30px;height:30px;" title="Edit" type="button"  class="btn btn-warning"><img style="margin-left:-11px;margin-top:-9px;"  src="{{ asset('admin/docs/assets/img/edit.png') }}" height="30px" width="25px;"></button></a>
            
            <a href="/nilai_siswa_tk3/hapus/{{ $rekap->id_rekap }}"><button style="width:30px;height:30px;" onclick="return confirm('Apakah anda yakin hapus data?')" title="Hapus" type="button" class="btn btn-danger"><img style="margin-left:-15px;margin-top:-9px;" src="{{ asset('admin/docs/assets/img/hapus.png') }}" height="30px" width="30px"></button></a>
            
            <a href="/cetak_nilai_siswa-3/{{ $rekap->id_rekap }}"><button style="width:30px;height:30px;" target="_BLANK" title="Unduh" type="button" class="btn btn-info"><img style="margin-left:-8px;margin-top:-7px;"  src="{{ asset('admin/docs/assets/img/unduh.png') }}" height="23px" width="20px;"></button></a>
   
        </td>   
    </tr>
    @endforeach
</thead>
  </table>
  <br>

</div>
</body>
<br>

@endsection