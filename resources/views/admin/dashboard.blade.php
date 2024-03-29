@extends('layouts.master')

@section('content')   
    
<?php
session_start();
?>

  <!-- Content Header (Page header) -->
  <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-dark">Dashboard</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <a href="dashboard"><li class="breadcrumb-item">Dashboard</li></a> /
              <li class="breadcrumb-item active">Dashboard</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->
    <br><br>
   
    <div class="container-fluid">
        
        <!-- Small boxes (Stat box) -->
        <div class="row" style="widht:200px">
       
          <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-info">
           
              <div class="inner">
              
                <h3>8<sup style="font-size: 20px"></sup></h3>
                
                <label>PPDB</label>
              </div>
            
              <div style="height:40px;" class="icon">
                <i class="ion ion-bag"></i>
              </div>
            </div>
          </div>
          
          <!-- ./col -->
          <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-success">
              <div class="inner">
                <h3>10<sup style="font-size: 20px"></sup></h3>

                <label>Berita</label>
              </div>
              <div style="height:40px;" class="icon">
                <i class="ion ion-stats-bars"></i>
              </div>
            </div>
          </div>
          <!-- ./col -->
          <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-warning">
              <div style="color:white;" class="inner">
                <h3>3<sup style="font-size: 20px"></sup></h3>

                <label>Pengumuman</label>
              </div>
              <div style="height:40px;" class="icon">
                <i class="ion ion-person-add"></i>
              </div>
            </div>
          </div>
          <!-- ./col -->
          <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-danger">
              <div class="inner">
                <h3>13<sup style="font-size: 20px"></sup></h3>

                <label>Buku Tamu</label>
              </div>
              <div style="height:40px;" class="icon">
                <i class="ion ion-pie-graph"></i>
              </div>
            </div>
          </div>
          <!-- ./col -->
        </div>
        <!-- /.row -->
      </div>
        <!-- Main row -->

@endsection