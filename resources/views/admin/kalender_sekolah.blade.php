@extends('layouts.master')

@section('content') 

  <!-- Content Header (Page header) -->
  <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-dark">kalender Sekolah</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <a href="dashboard"><li class="breadcrumb-item">Dashboard</li></a>  /
              <li class="breadcrumb-item active">kalender_sekolah</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->


<body>
<div>
   <div style="margin-left:7px;" class="col-sm-4">
       <!--<a href="/input_kalender_sekolah"><button type="button" class="btn btn-success">Tambah Data</button></a>
        Search form -->
       <!--<input style="margin-top:-40px;margin-left:830px;width:250px" class="form-control" type="text" placeholder="Search" aria-label="Search"> -->  
   </div>

  <br>
  <table style="margin-top:10px;" id="dtBasicExample" class="table table-striped table-bordered" cellspacing="0" width="100%">
   <thead>
    <tr>
      <th class="th-sm">No</th>
      <th class="th-sm">Keterangan</th>
      <th class="th-sm">File</th>
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
        <td>{{ $li->keterangan }}</td>
        <td><embed src="{{ url('/data_kalender/'.$li->file) }}" type="application/pdf" width="100%" height="600px"></td>
               
        <td>
            <a href="/edit_kalender_sekolah/{{ $li->id_kalender }}"><button style="width:100px;" title="Edit" type="button"  class="btn btn-warning">Edit</button></a>
        </td>  

    </tr>
    @endforeach
  </tbody>
  </table>

  <br>
    <!-- /.main-section -->
    <br>

</div>

</body>

@endsection