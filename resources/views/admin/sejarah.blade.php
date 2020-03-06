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
       <input style="margin-top:-40px;margin-left:805px;width:250px" class="form-control" type="text" placeholder="Search" aria-label="Search">   
   </div>

<br>

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
            <a href="/formsejarah/{{ $li->id_profil}}"><button style="width:70px;" title="Edit" type="button" class="btn btn-info">Edit</button></a>
            <br><br>
            <button style="width:70px;" title="Detail" data-toggle="modal" data-target="#modalLoginForm" type="button" class="btn btn-secondary">Detail</button>
            
            
        </td>   
    </tr>
    @endforeach
  </tbody>
  </table>
  <br>
  
<!--Modal Form-->
<div class="modal fade" id="modalLoginForm" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div style="width:840px;height:650px;margin-left:-170px" class="modal-content">
      <div class="modal-header text-center">
        <h4 class="modal-title w-100 font-weight-bold">Edit Sejarah</h4>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
  <br>
  <div class="container">
    <div class="col-md-8 col-md-offset-2">
        <form action="" method="POST">
                <textarea style="height:430px;width:800px;margin-top:10px" id="ckeditor" name="berita" class="form-control" required></textarea><br/>
        </form>
      <div class="modal-footer d-flex justify-content-center">
      <button type="button" class="btn btn-success">Simpan</button>
      </div>
    </div>
  </div>
</div>
<!--Batas akhir Modal-->

</div>
</body>

@endsection