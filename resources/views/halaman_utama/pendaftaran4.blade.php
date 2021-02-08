<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>SMA Swasta Eria | Pendaftaran</title>
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

<body style="background-color: rgb(158, 206, 165);">
    <!-- Site wrapper -->
    <div class="wrapper">
        <!-- Navbar -->
        @include('partials.navbar_hu')

        <section class="content mt-4 mb-3">
            <div class="container text-center">
                <h3 style="font-weight: bold;">PENDAFTARAN PESERTA DIDIK BARU</h3>
                <h3 style="font-weight: bold;">SMA SWASTA ERIA</h3>
                <hr>
            </div>
        </section>
        {{-- Keterangan Siswa --}}
        <!-- Main content -->
        <section class="content mt-4 mb-3">
            <div class="container">
                <div class="row">
                    <!-- left column -->
                    <div class="col-md">
                        <!-- general form elements -->
                        <div class="card card-light">
                            <div class="card-header">
                                <h3 class="card-title">D. KETERANGAN WALI</h3>
                            </div>
                            <!-- /.card-header -->
                            <!-- form start -->
                            <form class="form-horizontal">
                                <div class="card-body">
                                    {{-- 1 --}}
                                    <div class="form-group row">
                                        <label for="inputNama" class="col-sm-3 col-form-label">1. Nama</label>
                                        <div class=" col-sm-9">
                                            <input type="text" class="form-control" id="inputNama"
                                                placeholder="Nama">
                                        </div>                                   
                                    </div>                                    
                                    
                                    {{-- 2 --}}
                                    <div class="form-group row">
                                        <label for="inputHub" class="col-sm-3 col-form-label">2. Hubungan dengan Siswa</label>
                                        <div class="col-sm-9 ">
                                            <input type="text" class="form-control" id="inputHub"
                                                placeholder="Hubungan dengan Siswa">
                                        </div>                                   
                                    </div>

                                    {{-- 3 --}}
                                    <div class="form-group row">
                                        <label for="inputAlamat" class="col-sm-3 col-form-label">3. Alamat</label>
                                        <div class=" col-sm-9">
                                            <input type="text" class="form-control" id="inputAlamat"
                                                placeholder="Alamat">
                                        </div>                                   
                                    </div>

                                    {{-- 4 --}}
                                    <div class="form-group row">
                                        <label for="inputTelpRumah" class="col-sm-3 col-form-label" >4 No. Telepon Rumah</label>
                                        <div class=" col-sm-3">
                                            <input type="text" class="form-control" id="inputTelpRumah"
                                                placeholder="No. Telepon Rumah">
                                        </div>
                                        <label for="inputHP" class="col-sm-1 col-form-label pl-3">HP</label>
                                        <div class="col-sm-3">
                                            <input type="text" class="form-control" id="inputHP" placeholder="HP">
                                        </div>                                   
                                    </div>                                  
                                </div>

                        <!-- /.card-body -->
                        <div class="card-footer">
                            <a href="/pendaftaran3" class="btn btn-danger mr-2">Kembali</a>
                            <a href="/home" class="btn btn-success">Selesai</a>
                        </div>
                        <!-- /.card-footer -->
                        </form>
                    </div>
                    <!-- /.card -->

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
