@extends('layouts.user_master')

@section('content') 

<div class="judul_halaman" style="margin-top:-1030px;margin-left:25px;">
<strong><h6>Hasil Seleksi Siswa Baru</h6></strong><br>

@foreach($liat as $li)
Keterangan : {{ $li->keterangan }}<br><br>
<embed src="{{ url('/data_jadwal/'.$li->file) }}" type="application/pdf" width="93%" height="900px">
@endforeach    

</div>


@endsection