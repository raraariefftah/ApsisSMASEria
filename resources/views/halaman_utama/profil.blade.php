<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>SMA Swasta Eria | Profil</title>
    <!-- Tell the browser to be responsive to screen width -->
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Font Awesome -->
    <link rel="stylesheet" href="{{ asset('/style/plugins/fontawesome-free/css/all.min.css') }}">
    <!-- Ionicons -->
    <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
    <!-- overlayScrollbars -->
    <link rel="stylesheet" href="{{ asset('/style/dist/css/adminlte.min.css') }}">
    {{-- <link rel="stylesheet" href="{{ asset('/style/dist/css/new.css') }}"> --}}
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
                <h3 style="font-weight: bold;">PROFIL SEKOLAH</h3>
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
                            {{-- <div class="card-header">
                                <h3 class="card-title">D. KETERANGAN WALI</h3>
                            </div> --}}
                            <!-- /.card-header -->
                            <!-- form start -->
                            <form class="form-horizontal">
                                <div class="card-body">
                                    <div class="form-group row pt-3 pl-3">
                                        <div class="col-md-5 pt-2 mr-5 ">
                                            <img src="/img/eria.jpg" class="rounded" style="max-width: 450px;"
                                                alt="Sekolaheria">
                                        </div>
                                        <div class="col-md-5">
                                            <table>
                                                <tr>
                                                    <td> Nama Sekolah </td>
                                                    <td class="pl-1"> : </td>
                                                    <td class="pl-1"> SMA Swasta Eria </td>
                                                </tr>
                                                <tr>
                                                    <td> Status Sekolah </td>
                                                    <td class="pl-1"> : </td>
                                                    <td class="pl-1"> Swasta </td>
                                                </tr>
                                                <tr>
                                                    <td> Status Kepemilikan </td>
                                                    <td class="pl-1"> : </td>
                                                    <td class="pl-1"> Yayasan </td>
                                                </tr>
                                                <tr>
                                                    <td> Akreditasi </td>
                                                    <td class="pl-1"> : </td>
                                                    <td class="pl-1"> A </td>
                                                </tr>
                                                <tr>
                                                    <td> NPSN </td>
                                                    <td class="pl-1"> : </td>
                                                    <td class="pl-1"> 10210705 </td>
                                                </tr>
                                                <tr>
                                                    <td> Alamat Sekolah </td>
                                                    <td class="pl-1"> : </td>
                                                    <td class="pl-1"> Jl. Sisingamangaraja No. 195 </td>
                                                </tr>
                                                <tr>
                                                    <td> Desa / Kelurahan </td>
                                                    <td class="pl-1"> : </td>
                                                    <td class="pl-1"> Teladan Barat </td>
                                                </tr>
                                                <tr>
                                                    <td> Kecamatan </td>
                                                    <td class="pl-1"> : </td>
                                                    <td class="pl-1"> Medan Kota </td>
                                                </tr>
                                                <tr>
                                                    <td> Kota </td>
                                                    <td class="pl-1"> : </td>
                                                    <td class="pl-1"> Medan </td>
                                                </tr>
                                                <tr>
                                                    <td> Provinsi </td>
                                                    <td class="pl-1"> : </td>
                                                    <td class="pl-1"> Sumatera Utara </td>
                                                </tr>
                                                <tr>
                                                    <td> Kode Pos </td>
                                                    <td class="pl-1"> : </td>
                                                    <td class="pl-1"> 20217 </td>
                                                </tr>
                                                <tr>
                                                    <td> No. Telepon </td>
                                                    <td class="pl-1"> : </td>
                                                    <td class="pl-1"> (061) 7866341 </td>
                                                </tr>
                                                <tr>
                                                    <td> Email </td>
                                                    <td class="pl-1"> : </td>
                                                    <td class="pl-1"> smaswastaeria@gmail.com </td>
                                                </tr>
                                                <tr>
                                                    <td> Kepala Sekolah </td>
                                                    <td class="pl-1"> : </td>
                                                    <td class="pl-1"> Drs. Khoiruddin Hasibuan M.Pd</td>
                                                </tr>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                        <!-- /.card -->
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
