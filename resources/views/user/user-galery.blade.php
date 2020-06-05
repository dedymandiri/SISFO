@extends('layouts.user_master')

@section('content') 

<div class="judul_halaman"style="margin-top:-1030px;margin-left:20px;">
<strong><h6 style="margin-left:10px;">Foto</h6></strong><br>

  @foreach($liat as $li)
    <img src="{{ url('/data_file/'.$li->file) }}" style="width:220px;height:120px;margin-left:13px;margin-top:12px;">
   
  @endforeach
  </div>
<br><br>

@endsection
