@extends('layouts.main')

@section('container')
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">Status</h1>
    </div>
    @if (session()->has('success'))
        <div class="alert alert-success col-lg-8" role="alert">
            {{ session('success') }}
        </div>
    @endif

    <div class="table-responsive col-lg-6">
        <a href="status/create" class="btn btn-primary mb-3">Create new Status</a>
        <table class="table table-striped table-sm">
            <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Nama Status</th>
                    {{-- <th scope="col">Category</th> --}}
                    <th scope="col">Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($status as $status)
                    <tr>
                        <td>{{ $loop->iteration }} </td>
                        {{-- <td>{{ $post->title }}</td> --}}
                        <td>{{ $status->nama_status }}</td>

                        <td>
                            <a href="/status/{{ $status->id_status }}" class="badge bg-info">
                                <span data-feather="eye"></span>
                            </a>
                            <a href="/status/{{ $status->id_status }}/edit" class="badge bg-warning">
                                <span data-feather="edit"></span>
                            </a>
                            <form action="/status/{{ $status->id_status }}" method="POST" class="d-inline">
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
