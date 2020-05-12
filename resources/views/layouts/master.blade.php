<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>SISFO ADMIN</title>
  <link rel="icon" type="image/png" href="{{ asset('admin/docs/assets/img/logo sekolah.png') }}">
  <!-- Tell the browser to be responsive to screen width -->
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="{{ asset('admin/plugins/fontawesome-free/css/all.min.css') }}">

  <link rel="stylesheet" href="{{ asset('admin/docs/assest/img') }}">
  <!-- Ionicons -->
  <link rel="stylesheet" href="{{ asset('https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css') }}">
  <!-- Theme style -->
  <link rel="stylesheet" href="{{ asset('admin/dist/css/adminlte.min.css') }}">
  <!-- overlayScrollbars -->
  <link rel="stylesheet" href="{{ asset('admin/plugins/overlayScrollbars/css/OverlayScrollbars.min.css') }}">
  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="{{ asset('admin/fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700') }}">
</head>

<body class="hold-transition sidebar-mini layout-fixed">
<div class="wrapper">
  <!-- Navbar -->
  <nav style="background:#3498db;border-radius:0px;width:1340px;" class="main-header navbar navbar-expand navbar-white navbar-light">
    <!-- Left navbar links -->
    <ul class="navbar-nav">
      <li style="margin-top:-20px;margin-left:10px;" class="nav-item">
        <a class="nav-link" data-widget="pushmenu" role="button"><i class="fas fa-bars"></i></a>
      </li>
    </ul>
  </nav>
  <!-- /.navbar -->

  <!-- Main Sidebar Container -->
  <aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo --><br>
    <a href="" class="brand-link">
      <img style="margin-top:-18px;" src="{{ asset('admin/dist/img/avatar5.png') }}" alt="AdminLTE Logo" class="brand-image img-circle elevation-3"
           style="opacity: .8">
      <h4 style="margin-top:-10px;margin-left:40px;" class="brand-text font-weight-light">SISFO ADMIN</h4>
    </a>
<br>
    <!--  Halaman Sidebar -->
    <div class="sidebar">
     
      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">         
         <li class="nav-item has-treeview menu-open">
            <a href="dashboard" class="nav-link active">
              <i class="nav-icon fas fa-tachometer-alt"></i>
              <p>
                Dashboard
              </p>
            </a>
          </li>   
                  
          <li class="nav-item has-treeview">
            <a href="" class="nav-link" >
              <i class="nav-icon fas fa-edit"></i>
              <p>
                Beranda
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="sambutan" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Sambutan</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="berita" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Berita</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="pengumuman" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Pengumuman</p>
                </a>
              </li>          
        </ul>
      </li>
          <li class="nav-item has-treeview">
            <a href="" class="nav-link">
              <i class="nav-icon fas fa-chart-pie"></i>
              <p>
                Profil Sekolah
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="sejarah" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Sejarah</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="visi_misi_tujuan" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Visi Misi Tujuan</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="struktur_sekolah" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Struktur Sekolah</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="fasilitas" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Fasilitas</p>
                </a>
              </li>
            </ul>
          </li>
          <li class="nav-item has-treeview">
            <a href="" class="nav-link">
              <i  class="nav-icon fas fa-tree"></i>
              <p>
                Keahlian
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="multimedia" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Multimedia</p>
                </a>
              </li>
              <!--<li class="nav-item">
                <a href="tkr" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>TKR</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="perawat" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Perawat</p>
                </a>
              </li>-->
            </ul>
          </li>
         
          <li class="nav-item has-treeview">
            <a href="" class="nav-link">
              <i class="nav-icon far fa-envelope"></i>
              <p>
                Kesiswaan
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="osis" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Osis</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="pramuka" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Pramuka</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="paskibra" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Paskibra</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="karate" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Karate</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="hadroh" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Hadroh</p>
                </a>
              </li>
            </ul>
          </li>
          <li class="nav-item has-treeview">
            <a href="" class="nav-link">
              <i class="nav-icon far fa-image"></i>
              <p>
                Galery
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="galeryfoto" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Foto</p>
                </a>
              </li>
             
            </ul>
          </li>
          <li class="nav-item has-treeview">
            <a href="" class="nav-link">
              <i class="nav-icon fas fa-copy"></i>
              <p>
                Kurikulum
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="jadwal_pelajaran" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Jadwal Pelajaran</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="kalender_sekolah" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Kalender Sekolah</p>
                </a>
              </li>
            </ul>
          </li>

          <li class="nav-item has-treeview">
            <a href="" class="nav-link">
              <i class="nav-icon far fa-calendar-alt"></i>
              <p>
                PPDB 
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="pendaftaran" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Data Pendaftar</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="hasil_seleksi" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Hasil Seleksi</p>
                </a>
              </li>
            </ul>
          </li>

          <li class="nav-item has-treeview">
            <a href="" class="nav-link">
              <i  class="nav-icon fas fa-table"></i>
              <p>
                Rekap Nilai 
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="mapel_siswa" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Pelajaran</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="nilai_siswa_tk1" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Nilai Tingkat 1</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="nilai_siswa_tk2" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Nilai Tingkat 2</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="nilai_siswa_tk3" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Nilai Tingkat 3</p>
                </a>
              </li>
            </ul>
          </li>

          <li class="nav-item has-treeview">
            <a href="pengguna" class="nav-link">
              <i class="nav-icon far fa-plus-square"></i>
              <p>
                Data Pengguna
              </p>
            </a>
          </li>

      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>

  <!-- Content Wrapper. Contains page content -->
  <div style="margin-top:-20px;width:1340px;" class="content-wrapper">
    <!-- Main content -->
    <section class="content">

     <!-- CKEDITOR -->
    <script type="text/javascript" src="{{ asset ('ckeditor/ckeditor.js') }}"></script>
     <!-- DATETIMEPICKER -->
    <link href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datetimepicker/4.15.35/css/bootstrap-datetimepicker.min.css" rel="stylesheet">
    <!-- DATETIMEPICKER -->
    <script src="http://code.jquery.com/jquery-2.1.4.min.js"></script>
    <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.10.6/moment.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datetimepicker/4.15.35/js/bootstrap-datetimepicker.min.js"></script>


    @yield('content')
        
    </section>
         
  </div>
  <!-- ./wrapper -->

<!-- jQuery -->
<script src="{{ asset('admin/plugins/jquery-ui/jquery-ui.min.js') }}"></script>
<!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->

<!-- Bootstrap 4 -->
<script src="{{ asset('admin/plugins/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
<!-- Sparkline -->
<script src="{{ asset('admin/plugins/sparklines/sparkline.js') }}"></script>
<!-- overlayScrollbars -->
<script src="{{ asset('admin/plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js') }}"></script>
<!-- AdminLTE App -->
<script src="{{ asset('admin/dist/js/adminlte.js') }}"></script>
<!-- AdminLTE dashboard demo (This is only for demo purposes) -->
<script src="{{ asset('admin/dist/js/pages/dashboard.js') }}"></script>
<!-- AdminLTE for demo purposes -->
<script src="{{ asset('admin/dist/js/demo.js') }}"></script>

</body>
</html>
