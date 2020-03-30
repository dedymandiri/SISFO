@extends('layouts.master')

@section('content') 

  <!-- Content Header (Page header) -->
  <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-dark">Berita</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
            <a href="dashboard"><li class="breadcrumb-item">Dashboard</li></a> /
              <li class="breadcrumb-item active">Berita</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->


<body>
<div>
   <div style="margin-left:7px;" class="col-sm-4">
       <a href="/inputberita"><button type="button" class="btn btn-success">Tambah Data</button></a>
       <!-- Search form 
       <input style="margin-left:830px;width:250px" class="form-control" type="text" placeholder="Search" aria-label="Search">   
       -->
   </div>

   <br><br>
   
<div style="margin-top:10px;" class="berita">
  <table id="dtBasicExample" class="table table-striped table-bordered" cellspacing="0" width="100%">
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
        <td>{{ $li->id_berita }}</td>
        <td>{{ $li->judul }}</td>
        <td>{{ $li->tanggal_waktu }}</td>
        <td><p align="justify">{{ $li->isi }}</p></td>
      
        <td>
            <a href="/edit_berita/{{ $li->id_berita }}"><button style="width:65px;" title="Edit" type="button" class="btn btn-warning">Edit</button></a>
            <br><br>
            <a href="/berita/hapus/{{ $li->id_berita }}"><button onclick="return confirm('Apakah anda yakin hapus data?')" title="Hapus" type="button" class="btn btn-danger">Hapus</button></a>
        </td>   
    </tr>
    @endforeach
  </tbody>
  </table>
</div>
  <br>

 </div>
</body>

@endsection