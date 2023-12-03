@extends('layouts.main')

@section('container')
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">Create Produk</h1>
    </div>

    <div class="col-lg-8">

        <form method="post" action="/produk" class="mb-5">
            @csrf
            <div class="mb-3">
                <label for="nama_produk" class="form-label">Name</label>
                <input type="text"
                    class="form-control @error('nama_produk')
                    is-invalid
                @enderror"
                    id="nama_produk" name="nama_produk" required autofocus value="{{ old('nama_produk') }}">
                @error('nama_produk')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                @enderror
            </div>

            <div class="mb-3">
                <label for="kategori" class="form-label">Kategori</label>
                <select class="form-select" name="kategori_id">
                    @foreach ($kategori as $kategori)
                        @if (old('kategori_id') == $kategori->id_kategori)
                            <option value="{{ $kategori->id_kategori }}" selected>{{ $kategori->nama_kategori }}</option>
                        @else
                            <option value="{{ $kategori->id_kategori }}">{{ $kategori->nama_kategori }}</option>
                        @endif
                    @endforeach

                </select>
            </div>

            <div class="mb-3">
                <label for="status" class="form-label">Status</label>
                <select class="form-select" name="status_id">
                    @foreach ($status as $status)
                        @if (old('status_id') == $status->id_status)
                            <option value="{{ $status->id_status }}" selected>{{ $status->nama_status }}</option>
                        @else
                            <option value="{{ $status->id_status }}">{{ $status->nama_status }}</option>
                        @endif
                    @endforeach

                </select>
            </div>

            <div class="mb-3">
                <label for="harga" class="form-label">Harga</label>
                <input type="number"
                    class="form-control @error('harga')
                    is-invalid
                @enderror"
                    id="harga" name="harga" required autofocus value="{{ old('harga') }}">
                @error('harga')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                @enderror
            </div>

            <button type="submit" class="btn btn-primary">Create Produk</button>
        </form>

    </div>
    {{-- 
    <script>
        const title = document.querySelector(#title);
        const slug = document.querySelector(#slug);

        // title.addEventListener('change', Slugs);

        // async function Slug() {
        //     const response= await fetch("/dashboard/posts/checkSlug?title="+title.value);
        //     const dats= await response.json();
        //     const ends=await dats

        // }

        // title.addEventListener('change', nSlug);

        // function nSlug() {
        //     fetch('/dashboard/posts/checkSlug?title=' + title.value).then(response => response: json()).then(
        //         data => slug.value = data
        //         .slug)
        // }
        title.addEventListener('change', function() {
            fetch('/dashboard/posts/checkSlug?title=' + title.value).then(response => response: json()).then(
                data => slug.value = data
                .slug)

        });
    </script> --}}
    {{-- //harus pake script ajax di header/main --}}
    {{-- <script>
        // $('#title').change(function(e) {
        //     $.get('{{ route('posts.checkSlug') }}', {
        //             'title': $(this).val()
        //         },
        //         function(data) {
        //             $('#slug').val(data.slug);
        //         }
        //     );
        // });


        const title = document.querySelector("#nama");
        const slug = document.querySelector("#slug");

        title.addEventListener("keyup", function() {
            let preslug = title.value;
            preslug = preslug.replace(/ /g, "-");
            slug.value = preslug.toLowerCase();
        });



        // const title = document.querySelector(['#name']);
        // const slug = document.querySelector(['#slug']);


        // title.addEventListener('change', async () => {

        //     try {
        //         const response = await fetch('/dashboard/categories/checkSlug?name=' + title.value);
        //         const datas = await response.json();
        //         slug.value = datas.slug;

        //         return slug;

        //     } catch (error) {
        //         console.error(`Download error: ${error.message}`);
        //     }
        // })


        // $('#title').change(function(e) {
        //     $.get('/dashboard/posts/checkSlug?title=' + title.value, {
        //             'title': $(this).val()
        //         },
        //         function(data) {
        //             $('#slug').val(data.slug);
        //         }
        //     );
        // });

        document.addEventListener('trix-file-accept', function(e) {
            e.preventDefault();
        });
    </script> --}}
@endsection
