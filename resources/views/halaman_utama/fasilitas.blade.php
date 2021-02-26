<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>SMA Swasta Eria | Home</title>
    <!-- Tell the browser to be responsive to screen width -->
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Font Awesome -->
    <link rel="stylesheet" href="{{ asset('/style/plugins/fontawesome-free/css/all.min.css') }}">
    <!-- Ionicons -->
    <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
    <!-- overlayScrollbars -->
    <link rel="stylesheet" href="{{ asset('/style/dist/css/adminlte.min.css') }}">
    <link rel="stylesheet" href="{{ asset('/style/dist/css/new.css') }}">
    <link rel="stylesheet" href="{{ asset('/style/dist/css/hu.css') }}">
    <!-- Google Font: Source Sans Pro -->
    <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
</head>

<body style="background-color:  rgb(179, 215, 247);">
    <!-- Site wrapper -->
    <div class="wrapper">
        <!-- Navbar -->
        @include('partials.navbar_hu')

        <!-- fasilitas -->
        <section id="fasilitas" class="fasilitas  mb-3 mt-5 pb-5 ">
            <div class="container pb-5">
                <div class="row mb-2">
                    <div class="col text-center">
                        <h4 style="font-weight: bold;">FASILITAS</h4>
                        <hr class="ml-3">
                    </div>
                </div>

                <div class="row text-center">
                    <div class="col-md ml-3">
                        <div class="card">
                            <div class="card-header">
                                LABORATORIUM 
                            </div>
                            <img src="/img/labsains.jpg" class="card-img-top" alt="gambar">
                        </div>
                    </div>

                    <div class="col-md ml-3">
                        <div class="card">
                            <div class="card-header">
                                LAB KOMPUTER
                            </div>
                            <img src="/img/labsains.jpg" class="card-img-top" alt="gambar">
                        </div>
                    </div>

                    <div class="col-md ml-3">
                        <div class="card">
                            <div class="card-header">
                                PERPUSTAKAAN
                            </div>
                            <img src="/img/labsains.jpg" class="card-img-top" alt="gambar">
                        </div>
                    </div>
                </div>
            </div>
        </section>
        {{-- <br><br><br> --}}
        @include('partials.footer_hu')

        <!-- ./wrapper -->
        <!-- jQuery -->
        <script src="{{ asset('/style/plugins/jquery/jquery.min.js') }}"></script>
        <!-- Bootstrap 4 -->
        <script src="{{ asset('/style/plugins/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
        <!-- AdminLTE App -->
        <script src="{{ asset('/style/dist/js/adminlte.min.js') }}"></script>
        <!-- AdminLTE for demo purposes -->
        <script src="{{ asset('/style/dist/js/demo.js') }}"></script>
</body>

</html>
