@extends('layouts.master')

@section('content') 

  <!-- Content Header (Page header) -->
  <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-dark">Hadroh</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <a href="dashboard"><li class="breadcrumb-item">Dashboard</li></a> /
              <li class="breadcrumb-item active">Hadroh</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

<br>
<body>
<div>
   <div class="col-sm-4">
       <!-- <a href="/input_tkj"><button type="button" class="btn btn-success">Tambah Data</button></a>-->
       <!-- Search form -->
       <!--<input style="margin-top:-40px;margin-left:815px;width:250px" class="form-control" type="text" placeholder="Search" aria-label="Search"> --> 
   </div>

  <table style="margin-left:20px;margin-top:10px;width:1065px;" id="dtBasicExample" class="table table-striped table-bordered" cellspacing="0" width="100%">
   <thead>
    <tr >
      <th class="th-sm">No</th>
      <th class="th-sm">Deskripsi</th>
      <th class="th-sm">Aksi</th>
    </tr>
  </thead>
  <tbody>

    <!--Untuk menampilkan tabel berita dari database-->
    @foreach($liat as $li)
    <tr align="justify">
        <td>{{ $li->id_ekskul }}</td>
        <td>{{ $li->deskripsi_hadroh }}</td>
       
        <td>
            <a href="/edit_hadroh/{{ $li->id_ekskul }}"><button style="width:60px;" title="Edit" type="button"  class="btn btn-warning">Edit</button></a><br>
            
            <a href="/detail_hadroh"><button  style="margin-top:8px;" type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModalLong">Detail</button></a>
           
        </td>   
    </tr>
    @endforeach
  </tbody>
  </table>
  <br>

 </div>
</body>

@endsection