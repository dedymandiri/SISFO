@extends('layouts.master')

@section('content') 

<br>
<div style="margin-left:20px;width:930px;" class="card">
  <div style="background:#3498db;height:800px;height:10px;" class="card"></div>

<h4 class="card-header info-color white-text text-center py-4">
  <strong>Form Input Foto</strong>
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
<form style="width:730px;margin-left:35px;" action="/galeryfoto/proses" method="POST" enctype="multipart/form-data">
{{ csrf_field() }}
<br>
<form>
  <div class="form-group">
    <label for="exampleFormControlFile1">Gambar/Foto :</label>
    <input type="file" name="file" class="form-control-file" id="exampleFormControlFile1">
    <div style="color:red;">*Pilih gambar dengan ekstensi/format .png/jpg/jpeg</div>
  </div>
  <br>
  <div class="form-group">
    <label for="ket_foto">Keterangan :</label>
    <input type="text" class="form-control" placeholder="Keterangan" required="required" name="keterangan">
  </div>

   <!--bagian button-->
  <div style="margin-top:105px;width:930px;margin-left:-35px;" class="card-header info-color white-text text-center py-4">
    <button style="margin-left:-700px;" type="submit" class="btn btn-primary" value="Simpan">Simpan</button>
    <a href="/galeryfoto"><button  title="Edit" type="button"  class="btn btn-primary">Kembali</button></a>
  </div>

</form>
<!-- /.main-section -->

</div>
<br>

@endsection