@extends('layouts.master')

@section('content') 

  <!-- Content Header (Page header) -->
  <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-dark">Sambutan</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
            <a href="dashboard"><li class="breadcrumb-item">Dashboard</li></a> /
              <li class="breadcrumb-item active">Sambutan</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->


<body>
   
<div style="margin-left:20px;margin-top:10px;width:1065px;" class="berita">
  <table id="dtBasicExample" class="table table-striped table-bordered" cellspacing="0" width="100%">
   <thead>
    <tr align="center">
      <th class="th-sm">No</th>
      <th class="th-sm">Nama Lengkap</th>
      <th class="th-sm">Isi Sambutan</th>
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
        <td>{{ $li->nama }}</td>
        <td><p align="justify">{{ $li->isi }}</p></td>
      
        <td>
            <a href="/edit_sambutan/{{ $li->id_sam }}"><button style="width:62px;" title="Edit" type="button" class="btn btn-warning">Edit</button></a>
            
            <a href="/detail_sambutan"><button style="margin-top:8px;" type="button" class="btn btn-primary">Detail</button></a>

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