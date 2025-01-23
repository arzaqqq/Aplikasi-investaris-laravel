@extends('layouts.main')



@section('header')
<div class="row mb-2">
    <div class="col-sm-6">
      <h1>Dashboard</h1>
    </div>
    <div class="col-sm-6">
      <ol class="breadcrumb float-sm-right">
        <li class="breadcrumb-item active"><a href="#">Beranda</a></li>
      </ol>
    </div>
  </div>
  @endsection


@section('content')

@if (session('success'))
<div class="alert alert-success">
    {{ session('success') }}
     </div>
 @endif


  <!-- Small Box (Stat card) -->
  <h5 class="mb-2 mt-4">Small Box</h5>
  <div class="row">
    <div class="col-lg-3 col-6">
      <!-- small card -->
      <div class="small-box bg-info">
        <div class="inner">
    <h3>{{ $productcount }}</h3>

          <p>Product</p>
        </div>
        <div class="icon">
          <i class="fas fa-shopping-cart"></i>
        </div>
        <a href="#" class="small-box-footer">
          More info <i class="fas fa-arrow-circle-right"></i>
        </a>
      </div>
    </div>
    <!-- ./col -->
    <div class="col-lg-3 col-6">
      <!-- small card -->
      <div class="small-box bg-success">
        <div class="inner">
          <h3> {{ $categorycount }}<sup style="font-size: 20px"></sup></h3>

          <p>Kategori</p>
        </div>
        <div class="icon">
          <i class="ion ion-stats-bars"></i>
        </div>
        <a href="#" class="small-box-footer">
          More info <i class="fas fa-arrow-circle-right"></i>
        </a>
      </div>
    </div>
    <!-- ./col -->

    <!-- ./col -->
  </div>
  <!-- /.row -->
@endsection
