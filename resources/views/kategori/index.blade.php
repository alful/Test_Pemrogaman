@extends('layouts.main')

@section('container')
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">Kategori</h1>
    </div>
    @if (session()->has('success'))
        <div class="alert alert-success col-lg-8" role="alert">
            {{ session('success') }}
        </div>
    @endif

    <div class="table-responsive col-lg-6">
        <a href="kategori/create" class="btn btn-primary mb-3">Create new Kategori</a>
        <table class="table table-striped table-sm">
            <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Nama Kategori</th>
                    {{-- <th scope="col">Category</th> --}}
                    <th scope="col">Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($kategori as $kategori)
                    <tr>
                        <td>{{ $loop->iteration }} </td>
                        {{-- <td>{{ $post->title }}</td> --}}
                        <td>{{ $kategori->nama_kategori }}</td>

                        <td>
                            <a href="/kategori/{{ $kategori->id_kategori }}" class="badge bg-info">
                                <span data-feather="eye"></span>
                            </a>
                            <a href="/kategori/{{ $kategori->id_kategori }}/edit" class="badge bg-warning">
                                <span data-feather="edit"></span>
                            </a>
                            <form action="/kategori/{{ $kategori->id_kategori }}" method="POST" class="d-inline">
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
