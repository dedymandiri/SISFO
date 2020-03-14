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
              <li class="breadcrumb-item">Home</li>
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

  <table style="margin-top:10px;" id="dtBasicExample" class="table table-striped table-bordered" cellspacing="0" width="100%">
   <thead>
    <tr align="center">
      <th class="th-sm">No
      </th>
      <th class="th-sm">Judul
      </th>
      <th class="th-sm">Tanggal_Waktu
      </th>
      <th class="th-sm">Isi
      </th>
      <th class="th-sm">Aksi
      </th>
    </tr>
  </thead>
  <tbody>
     <!--Untuk menampilkan tabel berita dari database-->
     @foreach($liat as $li)
    <tr>
        <td>{{ $li->id_info }}</td>
        <td>{{ $li->judul }}</td>
        <td>{{ $li->tanggal_waktu }}</td>
        <td><p align="justify">{{ $li->isi }}</p></td>
       
        <td>
            <a href="/edit_pengumuman/{{ $li->id_info}}"><button style="width:65px;" title="Edit" type="button" class="btn btn-warning">Edit</button></a>
            <br><br>
            <a href="/pengumuman/hapus/{{ $li->id_info }}"><button onclick="return confirm('Apakah anda yakin hapus data?')" title="Hapus" type="button" class="btn btn-danger">Hapus</button></a>
        </td>   
    </tr>
    @endforeach
  </tbody>
  </table>
  <br>
  
</div>

@endsection