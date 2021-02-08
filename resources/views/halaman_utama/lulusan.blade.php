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
    <!-- Google Font: Source Sans Pro -->
    <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
</head>

<body style="background-color:  rgb(158, 206, 165);">
    <!-- Site wrapper -->
    <div class="wrapper">
        <!-- Navbar -->
        @include('partials.navbar_hu')

        <!-- Lulusan -->
        <section id="lulusan" class="lulusan pb-4 pt-4">
            <div class="container">
                <div class="row ">
                    <div class="col text-center">
                        <h3><strong>Siswa-Siswi SMA ERIA Lulus PTN Jalur SNMPTN</strong></h2>
                        <h3><strong>Tahun Akademik 2020/2021</strong></h2>
                        <hr>
                    </div>
                </div>

                <div class="card mt-2">
                    <div class="card-body">
                        <h4 class="text-center" style="font-family:  poppins">UNIVERSITAS SUMATERA UTARA</h4>
                    </div>
                </div>

                <div class="row text-center">
                    <div class="col-md">
                        <div class="card" ">
                            <img src=" img/raraa.jpg" class="card-img-top pt-4" alt="gambar"
                            style="width: 50%; display: block; margin-left: auto; margin-right: auto; ">
                            <div class="card-body">
                                <h5 style="font-weight: bold">Rara Ariefftah</h5>
                                <p>JURUSAN</p>
                            </div>
                        </div>
                    </div>

                    <div class="col-md">
                        <div class="card" ">
                            <img src=" img/raraa.jpg" class="card-img-top pt-4" alt="gambar"
                            style="width: 50%; display: block; margin-left: auto; margin-right: auto;">
                            <div class="card-body">
                                <h5 style="font-weight: bold">Rara Ariefftah</h5>
                                <p>JURUSAN</p>
                            </div>
                        </div>
                    </div>

                    <div class="col-md">
                        <div class="card" ">
                            <img src=" img/raraa.jpg" class="card-img-top pt-4" alt="gambar"
                            style="width: 50%; display: block; margin-left: auto; margin-right: auto; ">
                            <div class="card-body">
                                <h5 style="font-weight: bold">Rara Ariefftah</h5>
                                <p>JURUSAN</p>
                            </div>
                        </div>
                    </div>

                    <div class="col-md">
                        <div class="card" ">
                            <img src=" img/raraa.jpg" class="card-img-top pt-4" alt="gambar"
                            style="width: 50%; display: block; margin-left: auto; margin-right: auto;">
                            <div class="card-body">
                                <h5 style="font-weight: bold">Rara Ariefftah</h5>
                                <p>JURUSAN</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

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
