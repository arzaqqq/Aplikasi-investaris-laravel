@extends('layouts.main')



@section('header')
<div class="row mb-2">
    <div class="col-sm-6">
      <h1>Tambah data</h1>
    </div>
    <div class="col-sm-6">
      <ol class="breadcrumb float-sm-right">
        <li class="breadcrumb-item"><a href="#">Home</a></li>
        <li class="breadcrumb-item active">tambah data</li>
      </ol>
    </div>
  </div>


  <div class="row">
    <div class="col">
       <form action="/product/store" method="POST">
        @csrf
        @method('POST')
        <div class="card">
            <div class="card-body">
                <div class="form-group">
                    <label for="name" class="form-label">Nama produk</label>
                    <input type="text" name="name" id="" class="form-control">
                </div>
                <div class="form-group">
                    <label for="description" class="form-label">Deskripsi</label>
                    <textarea type="description" name="description" id="description" cols="30" rows="10" class="form-control"></textarea>
                </div>
                <div class="form-group">
                    <label for="sku" class="form-label">Kode produk</label>
                    <input type="text" name="sku" id="sku" class="form-control">
                </div>
                <div class="form-group">
                    <label for="price" class="form-label">Harga</label>
                    <input type="text" inputmode="numeric" name="price" id="price" class="form-control">
                </div>
                <div class="form-group">
                    <label for="stock" class="form-label">Stok</label>
                    <input type="text" inputmode="numeric" name="stock" id="stock" class="form-control">
                </div>
                <div class="form-group">
                    <label for="kategori" class="form-label">Kategori</label>
                    <select name="category_id" id="category_id" class="form-control">
                       @foreach ($categories as $category )
                       <option value="{{ $category->id }}">{{ $category->name }}</option>
                       @endforeach
                    </select>
                </div>
            </div>
            <div class="card-footer">
                <div class="d-flex justify-content-end p-2">
                    <a href="/products" class="btn btn-sm btn-outline secondary mr-2 ">Batal</a>
                    <button class="btn btn-sm btn-primary">Simpan</button>
                </div>
            </div>
        </div>
       </form>
    </div>
  </div>

@endsection

@section('content')

@endsection
