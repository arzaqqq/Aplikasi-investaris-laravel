@extends('layouts.main')



@section('header')
<div class="row mb-2">
    <div class="col-sm-6">
      <h1>Category</h1>
    </div>
    <div class="col-sm-6">
      <ol class="breadcrumb float-sm-right">
        <li class="breadcrumb-item"><a href="#">Home</a></li>
        <li class="breadcrumb-item active">Category </li>
      </ol>
    </div>
  </div>

  @if (session('success'))
<div class="alert alert-success">
    {{ session('success') }}
     </div>
 @endif
  <div class="row">
    <div class="col">
        <div class="card">
            <div class="card-body">
                <div class="card-header d-flex justify-content-end">
                    <a href="categories/create" class="btn btn-sm btn-primary">Tambah data Kategori</a>
                </div>
                <table class="table table-bordered">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Nama</th>
                            <th>Slug</th>

                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($categories as $category)
                        <tr>
                            <td>{{ ($categories->currentPage() - 1)* $categories->perpage() + $loop->index +1 }}</td>
                            <td>{{ $category->name }}</td>
                            <td>{{ $category->slug }}</td>

                            <td>
                                <div class="d-flex ">
                                    <a href="/categories/edit/{{ $category->id }}" class="btn btn-primary btn-sm mr-2">Edit</a>
                                <form action="/categories/{{ $category->id }}" method="POST">
                                @csrf
                                @method('DELETE')
                                    <button type="submit" class="btn btn-sm btn-danger">Hapus</button>


                                </form>
                                </div>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>

            </div>
            <div class="card-footer">
                {{ $categories->links('pagination::bootstrap-5') }}
            </div>
        </div>
    </div>
  </div>

@endsection

@section('content')

@endsection
