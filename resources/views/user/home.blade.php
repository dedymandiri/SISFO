@extends('layouts.user_master')

@section('content') 

<style>
.img {
  background-color:#fafafa;
  border:1px solid #dcdcdc;
}

.img:hover {

/* Secara teoritis untuk IE 8 & 9 (lebih valid) */
-ms-filter:"progid:DXImageTransform.Microsoft.Alpha(Opacity=50)";

/* Ini juga bekerja di IE 8 & 9
  ... juga 5, 6, 7 */
filter:alpha(opacity=50);

/* browser Firefox lama di bawah Firefox 0.9 */
-moz-opacity:0.5;

/* Safari 1.x (pra WebKit!) */
-khtml-opacity:0.5;

/* Moderen!
 * Firefox 0.9 +, Safari 2?, Chrome yang lain?
 * Opera 9 +, IE 9 + */
opacity:0.5;

}

table{
	border:1px dashed grey;
	width:335px;
	height:250px;
	margin-top:15px;
	float:left;
	margin-left:25px;
}

h6{
	margin-left:23px;
}

tr td{
	padding:10px;
}
</style>

<div style="margin-top:-1030px;margin:right;">
	<!--Bagian berita-->
	<strong><h6>Berita</h6></strong><br>
	@foreach($liat as $li)
	<table>	
		<tbody>
			<tr>
				<td><a href="/user-detail_berita/{{ $li->id_berita }}"><img src="{{ url('/data_berita/'.$li->file) }}" style="width:300px; height:150px;margin-left:5px"></a><br><br>
					<strong class="title"><a href="user-detail_berita"><b>{{ $li->judul }}</b></a><br>
					<small>{{ $li->tanggal_waktu }}</small></strong>										
					<p><?php echo substr ($li['isi'], 0,180) ?><a style="color:blue;" href="/user-detail_berita/{{ $li->id_berita }}">. Baca selengkapnya . . .</a></p>
			    </td>
			</tr>
		</tbody>
	</table>
	@endforeach
	<!--Akhir batas bagian berita-->
</div>
@endsection      
