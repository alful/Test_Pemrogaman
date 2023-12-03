@extends('layouts.main')


@section('headers')
    <h1>Halaman Home</h1>
    <h3></h3>
    <p>sadsa</p>


    {{-- @include('slider') --}}


    {{-- <div class="container">
        <div id="carouselExample" class="carousel slide">

            <div class="carousel-inner" style=" width:100%; height: 500px !important;">>
                @foreach ($posts as $post)
                    @if ($loop->first)
                        <div class="carousel-item active">
                            <img src="{{ asset('storage/' . $post->image) }}" class="d-block w-100"
                                alt="{{ $post->slug }} slide">
                        </div>
                    @else
                        <div class="carousel-item">
                            <img src="{{ asset('storage/' . $post->image) }}" class="d-block w-100"
                                alt="{{ $post->slug }} slide">
                        </div>
                    @endif
                @endforeach
            </div>
        </div>
        <button class="carousel-control-prev bg bg-dark" type="button" data-bs-target="#carouselExample"
            data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next bg bg-dark" type="button" data-bs-target="#carouselExample"
            data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>
    </div> --}}
    {{-- </div> --}}

    <p class="d-inline-flex gap-1">
        <a class="btn btn-primary" data-toggle="collapse" href="#multiCollapseExample1" role="button" aria-expanded="false"
            aria-controls="multiCollapseExample1">Toggle first element</a>
        <button class="btn btn-primary" type="button" data-toggle="collapse" data-target="#multiCollapseExample2"
            aria-expanded="false" aria-controls="multiCollapseExample1 multiCollapseExample2">Toggle second element</button>
        <button class="btn btn-primary" type="button" data-toggle="collapse" data-target=".multi-collapse"
            aria-expanded="false" aria-controls="multiCollapseExample1 multiCollapseExample2">Toggle both elements</button>
    </p>
    <div class="container-fluid">
        <div class="col">
            <div class="collapse multi-collapse" id="multiCollapseExample1">
                <div class="card card-body">
                    <div class="table-responsive">

                        <table class="table table-hover">
                            <thead class="table-dark">
                                <th scope="col">No</th>
                                <th scope="col">Nama Produk</th>
                                <th scope="col">Kategori Produk</th>
                                <th scope="col">Status Produk</th>
                                <th scope="col">Harga Produk</th>
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

                                    </tr>
                                @endforeach

                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
        <div class="col">
            <div class="collapse multi-collapse" id="multiCollapseExample2">
                <div class="card card-body">
                    <div class="table-responsive">

                        <table class="table table-hover">
                            <thead class="table-dark">
                                <tr>
                                    <th scope="col">#</th>
                                    <th scope="col">First</th>
                                    <th scope="col">Last</th>
                                    <th scope="col">Handle</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <th scope="row">1</th>
                                    <td>Mark</td>
                                    <td>Otto</td>
                                    <td>@mdo</td>
                                </tr>
                                <tr>
                                    <th scope="row">2</th>
                                    <td>Jacob</td>
                                    <td>Thornton</td>
                                    <td>@fat</td>
                                </tr>

                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
    {{-- <div class="table-responsive">

        <table class="table table-hover">
            <thead class="table-dark">
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">First</th>
                    <th scope="col">Last</th>
                    <th scope="col">Handle</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <th scope="row">1</th>
                    <td>Mark</td>
                    <td>Otto</td>
                    <td>@mdo</td>
                </tr>
                <tr>
                    <th scope="row">2</th>
                    <td>Jacob</td>
                    <td>Thornton</td>
                    <td>@fat</td>
                </tr>

            </tbody>
        </table>
    </div> --}}
@endsection
