@extends('layouts.main')

@section('container')
    <div class="container">
        <div class="row my-3">
            <div class="col-lg-8">
                <h1 class=" mb-3">{{ $kategori->nama_kategori }}</h1>

                <a href="/kategori" class="btn btn-success"><span data-feather="arrow-left"></span> Back to
                    Kategori</a>
                <a href="/Kategori/{{ $kategori->id_kategori }}/edit" class="btn btn-warning"><span data-feather="edit"></span>
                    Edit</a>

                <form action="/kategori/{{ $kategori->id_kategori }}" method="POST" class="d-inline">
                    @method('delete')
                    @csrf
                    <button class="btn btn-danger" onclick="return confirm('Are you sure?')">
                        <span data-feather="x-circle"></span> Delete
                    </button>
                </form>

            </div>
        </div>
    </div>
@endsection
