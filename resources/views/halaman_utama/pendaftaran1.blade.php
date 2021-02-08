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

<body style="background-color:  rgb(158, 206, 165);">
    <!-- Site wrapper -->
    <div class="wrapper">
        <!-- Navbar -->
        @include('partials.navbar_hu')

        <section class="content mt-4 mb-3">
            <div class="container text-center" >
                <h3 style="font-weight: bold;">PENDAFTARAN PESERTA DIDIK BARU</h3>
                <h3 style="font-weight: bold;">SMA SWASTA ERIA</h3>
                <hr>
            </div>
        </section>
        {{-- Identitas Sekolah --}}
        <!-- Main content -->
        <section class="content mt-4 mb-3">
            <div class="container">
                <div class="row">
                    <!-- left column -->
                    <div class="col-md">
                        <!-- general form elements -->
                        <div class="card card-light">
                            <div class="card-header">
                                <h3 class="card-title">A. IDENTITAS SEKOLAH</h3>
                            </div>
                            <!-- /.card-header -->
                            <!-- form start -->
                            <form class="form-horizontal">
                                <div class="card-body">
                                    <div class="form-group row">
                                        <label for="inputNamaYayasan" class="col-sm-2 col-form-label" ">1. Nama Yayasan</label>
                                        <div class=" col-sm-10">
                                            <input type="text" class="form-control" id="inputNamaYayasan"
                                                placeholder="Nama Yayasan" disabled="disabled">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="inputAkteYayasan" class="col-sm-2 col-form-label">2. Akte Yayasan</label>
                                    <div class="col-sm-4">
                                        <input type="text" class="form-control" id="inputAkteYayasan"
                                            placeholder="Akte Yayasan" disabled="disabled">
                                    </div>
                                    <label for="inputTL" class="col-sm-2 col-form-label pl-3">Tanggal</label>
                                    <div class="col-sm-4">
                                        <input type="text" class="form-control" data-inputmask-alias="datetime"
                                                    data-inputmask-inputformat="dd/mm/yyyy" data-mask
                                                    placeholder="dd/mm/yyyy" id="inputTL">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="inputPengesahan" class="col-sm-2 col-form-label">3. Pengesahan
                                        Yayasan</label>
                                    <div class="col-sm-10">
                                        <input type="text" class="form-control" id="inputPengesahan"
                                            placeholder="Pengesahan Yayasan" disabled="disabled">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="inputNamaSekolah" class="col-sm-2 col-form-label">4. Nama Sekolah</label>
                                    <div class="col-sm-10">
                                        <input type="text" class="form-control" id="inputNamaSekolah"
                                            placeholder="Nama Sekolah" disabled="disabled">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="inputNSS" class="col-sm-2 col-form-label">5. NSS</label>
                                    <div class="col-sm-4">
                                        <input type="text" class="form-control" id="inputNSS"
                                            placeholder="NSS" disabled="disabled">
                                    </div>
                                    <label for="inputNPSN" class="col-sm-2 col-form-label pl-3">NPSN</label>
                                    <div class="col-sm-4">
                                        <input type="text" class="form-control" id="inputNPSN"
                                            placeholder="NPSN" disabled="disabled">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="inputAkreditasi" class="col-sm-2 col-form-label">6. Akreditasi</label>
                                    <div class="col-sm-10">
                                        <input type="text" class="form-control" id="inputAkreditasi"
                                            placeholder="Akreditasi" disabled="disabled">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="inputAlamat" class="col-sm-2 col-form-label">7. Alamat
                                        Sekolah</label>
                                    <div class="col-sm-10">
                                        <input type="text" class="form-control" id="inputAlamat"
                                            placeholder="Alamat Sekolah" disabled="disabled">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="inputKelurahan" class="col-sm-2 col-form-label"
                                        style="text-indent: 15px">Kelurahan</label>
                                    <div class="col-sm-4">
                                        <input type="text" class="form-control" id="inputKelurahan"
                                            placeholder="Kelurahan" disabled="disabled">
                                    </div>
                                    <label for="inputKecamatan" class="col-sm-2 col-form-label pl-3">Kecamatan</label>
                                    <div class="col-sm-4">
                                        <input type="text" class="form-control" id="inputKecamatan"
                                            placeholder="Kecamatan" disabled="disabled">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="inputKota" class="col-sm-2 col-form-label"
                                        style="text-indent: 15px">Kota</label>
                                    <div class="col-sm-4">
                                        <input type="text" class="form-control" id="inputPassword3"
                                            placeholder="Kota" disabled="disabled">
                                    </div>
                                    <label for="inputProvinsi" class="col-sm-2 col-form-label pl-3">Provinsi</label>
                                    <div class="col-sm-4">
                                        <input type="text" class="form-control" id="inputProvinsi"
                                            placeholder="Provinsi" disabled="disabled">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="inputTelepon" class="col-sm-2 col-form-label">8. Telepon</label>
                                    <div class="col-sm-4">
                                        <input type="password" class="form-control" id="inputTelepon"
                                            placeholder="Telepon/Fax" disabled="disabled">
                                    </div>
                                    <label for="inputFax" class="col-sm-2 col-form-label pl-3">Fax</label>
                                    <div class="col-sm-4">
                                        <input type="text" class="form-control" id="inputFax"
                                            placeholder="Fax" disabled="disabled">
                                    </div>
                                </div>
                        </div>
                        <!-- /.card-body -->
                        <div class="card-footer">
                            <a href="/pendaftaran2" class="btn btn-success">Selanjutnya</a>
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
