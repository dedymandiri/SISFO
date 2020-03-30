@extends('layouts.master')

@section('content') 

<br>
<div style="width:900px;height:700px;margin-left:20px;" class="card">
  <div style="background:#3498db;height:800px;height:10px;" class="card"></div>

<h4 class="card-header info-color white-text text-center py-4">
  <strong>Form Input Jadwal Pelajaran</strong>
</h4>
<br><br>
        
      @if(count($errors) > 0)
				<div class="alert alert-danger">
					@foreach ($errors->all() as $error)
					{{ $error }} <br/>
					@endforeach
				</div>
			@endif

<!-- Main Section -->
<form style="width:730px;margin-left:35px;" action="/jadwal_pelajaran/proses" method="POST" enctype="multipart/form-data">
{{ csrf_field() }}
<form>
  <div class="form-group">
    <label for="exampleFormControlFile1">File :</label>
    <input type="file" name="file" class="form-control-file" id="exampleFormControlFile1">
    <div style="color:red;">*Pilih file dengan ekstensi/format .pdf</div>
  </div>

  <div class="form-group">
    <label for="ket_foto">Keterangan :</label>
    <input type="text" class="form-control" placeholder="Keterangan" required="required" name="keterangan">
  </div>

   <br><br>
  <button type="submit" class="btn btn-primary" value="Simpan">Simpan</button>
  <a href="/jadwal_pelajaran"><button  title="Edit" type="button"  class="btn btn-primary">Kembali</button></a>
  
</form>
<!-- /.main-section -->

</div>
<br>

@endsection