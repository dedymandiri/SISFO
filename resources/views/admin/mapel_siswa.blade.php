@extends('layouts.master')

@section('content') 

  <!-- Content Header (Page header) -->
  <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-dark">Mata Pelajaran</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <a href="dashboard"><li class="breadcrumb-item">Dashboard</li></a>  /
              <li class="breadcrumb-item active">Mapel_siswa</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->


<body>
<div>
   <div style="margin-left:7px;" class="col-sm-4">
       <!-- <a href="/input_mapel_siswa"><button type="button" class="btn btn-success">Tambah Data</button></a>-->
       <!-- Search form -->
       <!--<input style="margin-top:-40px;margin-left:830px;width:250px" class="form-control" type="text" placeholder="Search" aria-label="Search"> -->  
   </div>

<!-- Mapel untuk siswa tingkat 1 -->
<br> 
  <table style="margin-top:10px;" id="dtBasicExample" class="table table-striped table-bordered" cellspacing="0" width="100%">
   <thead>
    <tr>
      <th class="th-sm">Tingkat</th>
      <th class="th-sm">Mapel 1</th>
      <th class="th-sm">Mapel 2</th>
      <th class="th-sm">Mapel 3</th>
      <th class="th-sm">Mapel 4</th>
      <th class="th-sm">Mapel 5</th>
      <th class="th-sm">Mapel 6</th>
      <th class="th-sm">Mapel 7</th>
      <th class="th-sm">Mapel 8</th>
      <th class="th-sm">Aksi</th>
    </tr>
  </thead>
  <tbody>

    <!--Untuk menampilkan tabel mapel dari database-->
  <?php $no = 0;?>
  @foreach($liat as $li)
  <?php $no++ ;?>
    <tr>
        <td align="center">{{ $no }}</td>
        <td>{{ $li->pel_1 }}</td>
        <td>{{ $li->pel_2 }}</td>
        <td>{{ $li->pel_3 }}</td>
        <td>{{ $li->pel_4 }}</td>
        <td>{{ $li->pel_5 }}</td>
        <td>{{ $li->pel_6 }}</td>
        <td>{{ $li->pel_7 }}</td>
        <td>{{ $li->pel_8 }}</td>

        <td>
            <a href="/edit_mapel_siswa/{{ $li->id_mapel }}"><button style="width:65px;" title="Edit" type="button"  class="btn btn-warning">Edit</button></a>
             
        </td>   
    </tr>
    @endforeach
  </tbody>
</table>
<br>

</div>
</body>

@endsection