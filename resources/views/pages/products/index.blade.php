@extends('layouts.main')



@section('header')
<div class="row mb-2">
    <div class="col-sm-6">
      <h1>Widgets</h1>
    </div>
    <div class="col-sm-6">
      <ol class="breadcrumb float-sm-right">
        <li class="breadcrumb-item"><a href="#">Home</a></li>
        <li class="breadcrumb-item active">Widgets</li>
      </ol>
    </div>
  </div>


  <div class="row">
    <div class="col">
        <div class="card">
            <div class="card-bpdy">
                <div class="card-header d-flex justify-content-end">
                    <a href="product/create" class="btn btn-sm btn-primary">Tambah data</a>
                </div>
                <table class="table table-bordered">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Produk</th>
                            <th>Deskripsi</th>
                            <th>Kode</th>
                            <th>Harga</th>
                            <th>Stok</th>
                            <th>Kategori</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($products as $product)
                        <tr>
                            <td>{{ $loop->iteration }}</td>
                            <td>{{ $product->name }}</td>
                            <td>{{ $product->description }}</td>
                            <td>{{ $product->sku }}</td>
                            <td>{{ $product->price }}</td>
                            <td>{{ $product->stock }}</td>
                            <td>{{ $product->category->name }}</td>
                            <td>
                                <form action="/products/{{ $product->id }}">
                                @csrf
                                @method('DELETE')
                                    <button type="submit" class="btn btn-sm btn-danger">Hapus</button>
                                </form>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>

            </div>
        </div>
    </div>
  </div>

@endsection

@section('content')

@endsection
