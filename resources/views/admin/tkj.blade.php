@extends('layouts.master')

@section('content') 

  <!-- Content Header (Page header) -->
  <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-dark">Teknik Komputer dan Jaringan</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item">Home</li>
              <li class="breadcrumb-item active">Tkj</li>
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

  <table id="dtBasicExample" class="table table-striped table-bordered" cellspacing="0" width="100%">
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
        <td>{{ $li->id_tkj }}</td>
        <td>{{ $li->deskripsi }}</td>
       
        <td>
            <a href="/edit_tkj/{{ $li->id_tkj }}"><button style="width:65px;" title="Edit" type="button"  class="btn btn-warning">Edit</button></a><br>
        <br>
             </td>   
    </tr>
    @endforeach
  </tbody>
  </table>
  <br>

 </div>
</body>

@endsection