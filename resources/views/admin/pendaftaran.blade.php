@extends('layouts.master')

@section('content') 

  <!-- Content Header (Page header) -->
  <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-dark">Data Pendaftar</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <a href="dashboard"><li class="breadcrumb-item">Dashboard</li></a>  /
              <li class="breadcrumb-item active">Pendaftaran</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->


<body>
<div>
   <div style="margin-left:7px;" class="col-sm-4">
       <a href="/input_pendaftaran"><button type="button" class="btn btn-success">Tambah Data</button></a>
       <!-- Search form -->
       <!--<input style="margin-top:-40px;margin-left:830px;width:250px" class="form-control" type="text" placeholder="Search" aria-label="Search"> -->  
   </div>

<br><br>
  <table style="margin-top:10px;" id="dtBasicExample" class="table table-striped table-bordered" cellspacing="0" width="100%">
   <thead>
   
    <tr>
      <th class="th-sm">No</th>
      <th class="th-sm">Tanggal Daftar</th>
      <th class="th-sm">Nama Siswa</th>
      <th class="th-sm">Tempat Lahir</th>
      <th class="th-sm">Tanggal Lahir</th>
      <th class="th-sm">Nama Ibu</th>
      <th class="th-sm">Nama Ayah</th>
      <th class="th-sm">Alamat</th>
      <th class="th-sm">NISN</th>
      <th class="th-sm">Asal Sekolah</th>
      <th class="th-sm">No. HP</th>      
      <th class="th-sm">Agama</th>
      <th class="th-sm">Anak Ke</th>
      <th class="th-sm">Keahlian</th>
      <th class="th-sm">Alasan</th>  
      <th class="th-sm">Aksi</th>
    </tr>
    
  </thead>
  <thead>
  @foreach($liat as $li)
    <tr>
        <td>{{ $li->id_daftar }}</td>
        <td>{{ $li->tgl_masuk }}</td>
        <td>{{ $li->nama_calon_siswa }}</td>
        <td>{{ $li->tmpt_lahir }}</td>
        <td>{{ $li->tgl_lahir }}</td>
        <td>{{ $li->nama_ibu }}</td>
        <td>{{ $li->nama_ayah }}</td>
        <td>{{ $li->alamat }}</td>
        <td>{{ $li->nisn }}</td>
        <td>{{ $li->asal_sklh }}</td>
        <td>{{ $li->no_hp }}</td>        
        <td>{{ $li->agama }}</td>
        <td>{{ $li->anak_ke }}</td>
        <td>{{ $li->keahlian }}</td>
        <td>{{ $li->alasan }}</td>
        <td>
            <a href="/edit_pendaftaran/{{ $li->id_daftar }}"><button style="width:40px;" title="Edit" type="button"  class="btn btn-warning"><div style="margin-left:-6px;">Edit</div></button></a>
            <br><br>
            <a href="/pendaftaran/hapus/{{ $li->id_daftar }}"><button style="width:40px;" onclick="return confirm('Apakah anda yakin hapus data?')" title="Hapus" type="button" class="btn btn-danger"><div style="margin-left:-13px;">Hapus</div></button></a>
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