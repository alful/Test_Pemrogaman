@extends('layouts.main')

@section('container')
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">Create Kategori</h1>
    </div>

    <div class="col-lg-8">

        <form method="post" action="/kategori" class="mb-5">
            @csrf
            <div class="mb-3">
                <label for="nama_kategori" class="form-label">Name</label>
                <input type="text"
                    class="form-control @error('nama_kategori')
                    is-invalid
                @enderror"
                    id="nama_kategori" name="nama_kategori" required autofocus value="{{ old('nama_kategori') }}">
                @error('nama_kategori')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                @enderror
            </div>

            <button type="submit" class="btn btn-primary">Create Category</button>
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
