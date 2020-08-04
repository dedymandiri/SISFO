@extends('layouts.user_master')

@section('content') 

<div style="margin-top:-1027px;width:750px;" class="col-sm-12">
    @foreach($liat as $li)
	<span class="hold-img"><img src="{{ url('/data_berita/'.$li->file) }}"  alt="image" width="720" height="350"></a></span><br><br>
		<small>Oleh Administrator</small><br><br><br>
			<div class="block">
				<h5 class="title">{{ $li->judul }}</h5>
					<small>{{ $li->tanggal_waktu }}</small><br><br><br>
						<div align="justify" width="500"><?php echo $li['isi']?></div>
			</div>
	@endforeach
</div><br>

@endsection      
