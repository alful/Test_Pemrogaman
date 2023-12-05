@extends('layouts.main')

@section('container')
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">Produk</h1>
    </div>
    @if (session()->has('success'))
        <div class="alert alert-success col-lg-8" role="alert">
            {{ session('success') }}
        </div>
    @endif

    <div class="table-responsive col-lg-9">
        <a href="produk/create" class="btn btn-primary mb-3">Create new Produk</a>
        <table class="table table-striped table-sm">
            <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Nama Produk</th>
                    <th scope="col">Kategori Produk</th>
                    <th scope="col">Status Produk</th>
                    <th scope="col">Harga Produk</th>

                    {{-- <th scope="col">Category</th> --}}
                    <th scope="col">Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($produk as $produk)
                    <tr>
                        <td>{{ $loop->iteration }} </td>
                        {{-- <td>{{ $post->title }}</td> --}}
                        <td>{{ $produk->nama_produk }}</td>
                        <td>{{ $produk->kategori->nama_kategori }}</td>
                        <td>{{ $produk->status->nama_status }}</td>
                        <td>@currency($produk->harga)</td>

                        <td>
                            <a href="/produk/{{ $produk->id_produk }}" class="badge bg-info">
                                <span data-feather="eye"></span>
                            </a>
                            <a href="/produk/{{ $produk->id_produk }}/edit" class="badge bg-warning">
                                <span data-feather="edit"></span>
                            </a>
                            <form action="/produk/{{ $produk->id_produk }}" method="POST" class="d-inline">
                                @method('delete')
                                @csrf
                                <button class="badge bg-danger border-0" onclick="return confirm('Are you sure?')">
                                    <span data-feather="x-circle"></span>
                                </button>
                            </form>
                        </td>
                    </tr>
                @endforeach

            </tbody>
        </table>
    </div>
@endsection
