<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"
        integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous">
    </script>

    <link rel="stylesheet" href="common-css\bootstrap.css">
    <!-- <link href="{{ url('assets/common-css/bootstrap.css') }}" rel="stylesheet"> -->
    <link href="{{ url('assets/common-css/ionicons.css') }}" rel="stylesheet">
    <link href="{{ url('assets/common-css/layerslider.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="/common-css/sty.css">
    <link rel="stylesheet" href="/css/bootstrap.css">
    {{-- <script src="js/jQuery.js"></script> --}}
    <script src="/js/bootstrap.bundle.js"></script>
    <script src="/js/login_regis.js"></script>

    {{-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous"> --}}
    {{-- icon bootstap --}}
    {{-- <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">


    {{-- //js --}}
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js"
        integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.min.js"
        integrity="sha384-Rx+T1VzGupg4BHQYs2gCW9It+akI2MM/mndMCy36UVfodzcJcF0GGLxZIzObiEfa" crossorigin="anonymous">
    </script>


    <link rel="stylesheet" href="/css/sign-in.css">
    {{-- <title>Test Pemrograman | {{ $title }}</title> --}}


    <link rel="stylesheet" type="text/css" href="https://unpkg.com/trix@2.0.0/dist/trix.css">
    <script type="text/javascript" src="https://unpkg.com/trix@2.0.0/dist/trix.umd.min.js"></script>

    <!-- Bootstrap core CSS -->
    <link rel="stylesheet" href="/css/bootstrap.css">
    {{-- <script src="js/jQuery.js"></script> --}}
    <script src="/js/bootstrap.bundle.js"></script>
    <script src="/js/login_regis.js"></script>
    <script src="https://unpkg.com/feather-icons"></script>



    <!-- Custom styles for this template -->
    <link href="/css/dashboard.css" rel="stylesheet">
    {{-- <script src="/dashboard.js"></script> --}}
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>

    <style>
        trix-toolbar [data-trix-button-group="file-tools"] {
            display: none;
        }
    </style>

    <title>Test Pemrograman</title>
</head>

<body>



    @include('partials.navbar')

    <div class="container mt-5">
        @yield('headers')
    </div>

    <div class="container-fluid">
        <div class="row">
            <main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
                @yield('container')

            </main>
        </div>
    </div>



    <script>
        feather.replace()
    </script>

</body>

</html>
