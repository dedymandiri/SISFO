@extends('layouts.master')

@section('content') 

  <!-- Content Header (Page header) -->
  <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-dark">Hasil Seleksi</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <a href="dashboard"><li class="breadcrumb-item">Dashboard</li></a>  /
              <li class="breadcrumb-item active">Hasil_Seleksi</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->


<body>
<div>
   <div style="margin-left:7px;" class="col-sm-4">
       <a href="/input_hasil_seleksi"><button type="button" class="btn btn-success">Tambah Data</button></a>
       <!-- Search form -->
       <!--<input style="margin-top:-40px;margin-left:830px;width:250px" class="form-control" type="text" placeholder="Search" aria-label="Search"> -->  
   </div>

  <br><br>
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
        <td><embed src="{{ url('/data_seleksi/'.$li->file) }}" type="application/pdf" width="100%" height="600px"></td>
               
        <td>
            <a href="/edit_hasil_seleksi/{{ $li->id_seleksi }}"><button style="width:65px;" title="Edit" type="button"  class="btn btn-warning">Edit</button></a>
        
            <a href="/hasil_seleksi/hapus/{{ $li->id_seleksi }}"><button onclick="return confirm('Apakah anda yakin hapus data?')" title="Hapus" type="button" class="btn btn-danger">Hapus</button></a>
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