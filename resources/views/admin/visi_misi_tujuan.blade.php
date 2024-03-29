@extends('layouts.master')

@section('content') 

  <!-- Content Header (Page header) -->
  <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-dark">Visi Misi Tujuan</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <a href="dashboard"><li class="breadcrumb-item">Dashboard</li></a> /
              <li class="breadcrumb-item active">visi_misi_tujuan</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

<body>
<div>
   <div class="col-sm-4">
      <!--<button type="button" class="btn btn-success"> Tambah Data</button>-->
       <!-- Search form -->
       <!--<input style="margin-top:-40px;margin-left:830px;width:250px" class="form-control" type="text" placeholder="Search" aria-label="Search"> -->  
   </div>

<br>

  <table style="margin-left:20px;margin-top:10px;width:1065px;" id="dtBasicExample" class="table table-striped table-bordered" cellspacing="0" width="100%">
   <thead>
    <tr align="center">
      <th class="th-sm">No
      </th>
      <th class="th-sm">Visi_misi_tujuan
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
        <td><p align="justify">{{ $li->visi_misi_tujuan }}</p></td>
        <td>
            <a href="/edit_visi_misi_tujuan/{{ $li->id_profil}}"><button style="width:60px;" title="Edit"  type="button"  class="btn btn-warning">Edit</button></a>
           
            <a href="/detail_visimisi"><button  style="margin-top:8px;" type="button" class="btn btn-primary" >Detail</button></a>
           
        </td>   
    </tr>
    @endforeach
  </tbody>
  </table>
  <br>

</div>
</body>

@endsection