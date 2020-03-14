@extends('layouts.master')

@section('content') 

  <!-- Content Header (Page header) -->
  <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-dark">Sejarah</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item">Home</li>
              <li class="breadcrumb-item active">Sejarah</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->


<body>
<div>
   <div class="col-sm-4">
      <!--<button type="button" class="btn btn-success"> Tambah Data</button>--><br>
       <!-- Search form -->
       <!-- <input style="margin-top:-40px;margin-left:815px;width:250px" class="form-control" type="text" placeholder="Search" aria-label="Search">-->   
   </div>

  <table id="dtBasicExample" class="table table-striped table-bordered" cellspacing="0" width="100%">
   <thead>
    <tr align="center">
      <th class="th-sm">No
      </th>
      <th class="th-sm">Sejarah
      </th>
      <th class="th-sm">Aksi
      </th>
    </tr>
  </thead>
  <tbody>

    <!--Untuk menampilkan tabel berita dari database-->
    @foreach($liat as $li)
    <tr>
        <td>{{ $li->id_profil }}</td>
        <td><p align="justify">{{ $li->sejarah }}</p></td>
        <td>
            <a href="/edit_sejarah/{{ $li->id_profil}}"><button style="width:65px;" title="Edit" type="button" class="btn btn-warning">Edit</button></a>
            <br><br>
            
        </td>   
    </tr>
    @endforeach
  </tbody>
  </table>
</div>
</body>

@endsection