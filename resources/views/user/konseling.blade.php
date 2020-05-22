@extends('layouts.user_master')

@section('content') 

<div class="judul_halaman" style="margin-left:20px;margin-top:-1030px;">
<strong><h6>Bimbingan Konseling</h6></strong><br></div>

<p align="justify" style="width:740px;margin-left:20px;">
Bagi siswa/siswi smk islam terisi indramayu terkait masalah bimbingan ke guru BK bisa langsung klik tombol dibawah ini.
Secara otomatis kalian akan langsung diarahkan ke halaman whatsapp dengan dilengkapi format chat tertentu, kami harap agar para siswa/
siswi dapat melakukan bimbingan ataupun konsultasi dengan baik dan sopan.

<br><br><br>

Klik dibawah ini :</p>
<div class="button-kons" style="margin-top:-15px;">
    <img style="height:50px;width:90px;" src="{{ asset('user-web/aset/img/wa.png') }}" alt="image" width="210" height="210">			
    <a href="https://api.whatsapp.com/send?phone=+6287879455154&text=*Assalamu'alaikum%20wr%20wb*%0AMohon%20maaf%20sebelumnya,%20Perkenalkan%20saya%20%3A%0ANama%20%3A
    %0Akelas%20%3A%0AJurusan%20%3A%0AIngin%20bertanya%20mengenai%20%3A%0ASekian%20terima%20kasih%0A*Wassalamu'alikum%20wr%20wb*">
    <button style="margin-left:-20px;width:150px;" type="button" class="btn btn-success">Whatsapp</button></a>
</div>
@endsection 