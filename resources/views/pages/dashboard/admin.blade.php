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

@endsection
