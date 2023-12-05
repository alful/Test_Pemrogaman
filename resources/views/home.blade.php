@extends('layouts.main')


@section('headers')
    <div class="container-fluid">
        <h1>Halaman Home</h1>
        <h3></h3>
        <p></p>


        <p class="d-inline-flex gap-1">
            <a class="btn btn-primary" data-bs-toggle="collapse" href="#multiCollapseExample1" role="button"
                aria-expanded="false" aria-controls="multiCollapseExample1">Tabel Status Bisa Dijual</a>
            <button class="btn btn-primary" type="button" data-bs-toggle="collapse" data-bs-target="#multiCollapseExample2"
                aria-expanded="false" aria-controls="multiCollapseExample2">Tabel Semua Data</button>
            <button class="btn btn-primary" type="button" data-bs-toggle="collapse" data-bs-target=".multi-collapse"
                aria-expanded="false" aria-controls="multiCollapseExample1 multiCollapseExample2">Semua Tabel</button>
        </p>
        <div class="container-fluid">
            <div class="col">
                <div class="collapse multi-collapse" id="multiCollapseExample1">
                    <div class="card card-body">
                        <p>Tabel Status Bisa Dijual</p>
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
                                    @foreach ($produk_id as $produks)
                                        <tr>
                                            <td>{{ $loop->iteration }} </td>
                                            {{-- <td>{{ $post->title }}</td> --}}
                                            <td>{{ $produks->nama_produk }}</td>
                                            <td>{{ $produks->kategori->nama_kategori }}</td>
                                            <td>{{ $produks->status->nama_status }}</td>
                                            <td>@currency($produks->harga)</td>

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
                        <p>Semua Tabel</p>
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
    </div>
@endsection
