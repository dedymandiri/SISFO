@extends('layouts.master')

@section('content')  

  <!-- Content Header (Page header) -->
  <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-dark">Pengumuman</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <a href="dashboard"><li class="breadcrumb-item">Dashboard</li></a> /
              <li class="breadcrumb-item active">Pengumuman</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->


<div>
   <div style="margin-left:7px;" class="col-sm-4">
      <a href="/input_pengumuman"><button type="button" class="btn btn-success">Tambah Data</button></a>
      <!-- Search form -->
       <!-- <input style="margin-top:-40px;margin-left:830px;width:250px" class="form-control" type="text" placeholder="Search" aria-label="Search">  --> 
   </div>

   <br><br>

  <table style="margin-left:20px;margin-top:10px;width:1055px;" id="dtBasicExample" class="table table-striped table-bordered" cellspacing="0" width="100%">
   <thead>
    <tr align="center">
      <th class="th-sm">No</th>
      <th class="th-sm">Judul</th>
      <th class="th-sm">Tanggal_Waktu</th>
      <th class="th-sm">Gambar/Foto</th>
      <th class="th-sm">Isi</th>
      <th class="th-sm">Aksi</th>
    </tr>
  </thead>
  <tbody>
     <!--Untuk menampilkan tabel berita dari database-->
  <?php $no = 0;?>
  @foreach($liat as $li)
  <?php $no++ ;?>
    <tr>
        <td>{{ $no }}</td>
        <td>{{ $li->judul }}</td>
        <td>{{ $li->tanggal_waktu }}</td>
        <td><img src="{{ url('/data_pengumuman/'.$li->file) }}" style="width:140px; height:140px;"></td>
        <td><p align="justify">{{ $li->isi }}</p></td>
       
        <td>
            <a href="/edit_pengumuman/{{ $li->id_info}}"><button style="width:65px;" title="Edit" type="button" class="btn btn-warning">Edit</button></a>
            
            <a href="/pengumuman/hapus/{{ $li->id_info }}"><button style="margin-top:8px;" onclick="return confirm('Apakah anda yakin hapus data?')" title="Hapus" type="button" class="btn btn-danger">Hapus</button></a>
          
            <a href="/detail_pengumuman/{{ $li->id_info }}"><button  style="margin-top:8px;width:65px;" type="button" class="btn btn-primary" >Detail</button></a>        
        </td>   
    </tr>
    @endforeach
  </tbody>
  </table>
  <br>
  
</div>

@endsection