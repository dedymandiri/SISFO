@extends('layouts.master')

@section('content') 

   <!-- Content Header (Page header) -->
  <div class="content-header" style="width:1320px;">
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
  <table style="margin-top:10px;margin-left:5px;width:1320px;" id="dtBasicExample" class="table table-striped table-bordered" cellspacing="0" width="100%">
   <thead>
    <tr>
      <th class="th-sm">Tingkat</th>
      <th class="th-sm">Pel_1</th>
      <th class="th-sm">Pel_2</th>
      <th class="th-sm">Pel_3</th>
      <th class="th-sm">Pel_4</th>
      <th class="th-sm">Pel_5</th>
      <th class="th-sm">Pel_6</th>
      <th class="th-sm">Pel_7</th>
      <th class="th-sm">Pel_8</th>      
      <th class="th-sm">Pel_9</th>
      <th class="th-sm">Pel_10</th>
      <th class="th-sm">Pel_11</th>
      <th class="th-sm">Pel_12</th>
      <th class="th-sm">Pel_13</th>
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
        <td>{{ $li->pel_9 }}</td>
        <td>{{ $li->pel_10 }}</td>
        <td>{{ $li->pel_11 }}</td>
        <td>{{ $li->pel_12 }}</td>
        <td>{{ $li->pel_13 }}</td>

        <td>
             <a href="/edit_mapel_siswa/{{ $li->id_mapel }}"><button style="width:45px;" title="Edit" type="button"  class="btn btn-warning"><div style="margin-left:-4px;">Edit</div></button></a>
            
        </td>   
    </tr>
    @endforeach
  </tbody>
</table>
<br>

</div>
</body>

@endsection