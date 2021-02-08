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
                                <h3 class="card-title">C. KETERANGAN ORANG TUA</h3>
                            </div>
                            <!-- /.card-header -->
                            <!-- form start -->
                            <form class="form-horizontal">
                                <div class="card-body">
                                    {{-- 1 --}}
                                    <div class="form-group row">
                                        <label for="inputNamaAyah" class="col-sm-2 col-form-label" >1. Nama Ayah</label>
                                        <div class=" col-sm-10">
                                            <input type="text" class="form-control" id="inputNamaAyah"
                                                placeholder="Nama Ayah">
                                        </div>                                   
                                    </div>                                                            

                                    {{-- 2 --}}
                                    <div class="form-group row">
                                        <label for="inputTempat" class="col-sm-2 col-form-label ">2. Tempat Lahir</label>
                                        <div class="col-sm-4">
                                            <input type="text" class="form-control" id="inputTempat" placeholder="Tempat Lahir">
                                        </div>
                                        <label for="inputTL" class="col-xs col-form-label mr-5 ml-3" style="text-indent: 4px;">Tanggal Lahir</label>
                                        <div class="col-sm-4 " style="left: 20px;">                                            
                                            <div class="input-group">                                           
                                                <input type="text" class="form-control" data-inputmask-alias="datetime"
                                                    data-inputmask-inputformat="dd/mm/yyyy" data-mask
                                                    placeholder="dd/mm/yyyy" id="inputTL">
                                            </div>
                                        </div>

                                    </div>

                                    {{-- 3 --}}
                                    <div class="form-group row">
                                        <label for="inputAgama" class="col-sm-2 col-form-label">3. Agama</label>
                                        <div class="col-sm-4">
                                            <select class="form-control select2" data-placeholder="Silahkan Pilih.." id="inputAgama">
                                                <option selected>Pilih</option>
                                                <option>Islam</option>
                                                <option>Kristen Protestan</option>
                                                <option>Khatolik</option>
                                                <option>Hindu</option>
                                                <option>Budha</option>
                                                <option>Khong Hu Chu</option>
                                            </select>
                                        </div>
                                    </div>

                                    {{-- 5 --}}
                                    <div class="form-group row">
                                        <label for="inputKwn" class="col-sm-2 col-form-label">4. Kewarganegaraan</label>
                                        <div class="col-sm-4">
                                            <input type="text" class="form-control" id="inputKwn"
                                                placeholder="Kewarganegaraan">
                                        </div>
                                        <label for="inputSuku" class="col-sm-1 col-form-label ml-2 mr-4" style="text-indent: 5px;">Suku</label>
                                        <div class="col-sm-4 ml-5" style="left: 11px;">
                                            <input type="text" class="form-control" id="inputSuku" placeholder="Suku">
                                        </div>
                                    </div>
                                    
                                    {{-- 5 --}}
                                    <div class="form-group row">
                                        <label for="inputPendidikan" class="col-sm-2 col-form-label">5. Pendidikan</label>
                                        <div class="col-sm-4">
                                            <select class="form-control select2" data-placeholder="Pilih" id="inputPendidikan">
                                                <option selected>Pilih</option>
                                                <option>SMP Sederajat</option>
                                                <option>SMA Sederajat</option>
                                                <option>D1</option>
                                                <option>D2</option>
                                                <option>D3</option>
                                                <option>D4</option>
                                                <option>S1</option>
                                                <option>S2</option>
                                                <option>S3</option>
                                            </select>
                                        </div>
                                    </div>

                                    {{-- 6 --}}
                                    <div class="form-group row">
                                        <label for="inputPekerjaan" class="col-sm-2 col-form-label" >6. Pekerjaan</label>
                                        <div class=" col-sm-10">
                                            <input type="text" class="form-control" id="inpuPekerjaan"
                                                placeholder="Pekerjaan">
                                        </div>                                   
                                    </div>                                                
                                    
                                    {{-- 7 --}}
                                    <div class="form-group row">
                                        <label for="inputPenghasilan" class="col-sm-2 col-form-label" >7. Penghasilan/bulan</label>
                                        <div class=" col-sm-10">
                                            <input type="text" class="form-control" id="inpuPenghasilan"
                                                placeholder="Penghasilan/bulan">
                                        </div>                                   
                                    </div>

                                    {{-- 8 --}}
                                    <div class="form-group row">
                                        <label for="inputAlamat" class="col-sm-2 col-form-label" >8. Alamat</label>
                                        <div class=" col-sm-10">
                                            <input type="text" class="form-control" id="inputAlamat"
                                                placeholder="Alamat">
                                        </div>                                   
                                    </div>

                                    {{-- 9 --}}
                                    <div class="form-group row">
                                        <label for="inputTelpRumah" class="col-sm-2 col-form-label" >9. No. Telepon Rumah</label>
                                        <div class=" col-sm-4">
                                            <input type="text" class="form-control" id="inputTelpRumah"
                                                placeholder="No. Telepon Rumah">
                                        </div>
                                        <label for="inputHP" class="col-sm-2 col-form-label pl-3">HP</label>
                                        <div class="col-sm-4">
                                            <input type="text" class="form-control" id="inputHP" placeholder="HP">
                                        </div>                                   
                                    </div>

                                    {{-- 10 --}}
                                    <div class="form-group row">
                                        <label for="inputNamaIbu" class="col-sm-2 col-form-label" >10. Nama Ibu</label>
                                        <div class=" col-sm-10">
                                            <input type="text" class="form-control" id="inputNamaIbu"
                                                placeholder="Nama Ibu">
                                        </div>                                   
                                    </div>                                                            

                                    {{-- 2 --}}
                                    <div class="form-group row">
                                        <label for="inputTempat" class="col-sm-2 col-form-label ">11. Tempat Lahir</label>
                                        <div class="col-sm-4">
                                            <input type="text" class="form-control" id="inputTempat" placeholder="Tempat Lahir">
                                        </div>
                                        <label for="inputTL" class="col-xs col-form-label mr-5 ml-3" style="text-indent: 4px;">Tanggal Lahir</label>
                                        <div class="col-sm-4 " style="left: 20px;">                                            
                                            <div class="input-group">                                           
                                                <input type="text" class="form-control" data-inputmask-alias="datetime"
                                                    data-inputmask-inputformat="dd/mm/yyyy" data-mask
                                                    placeholder="dd/mm/yyyy" id="inputTL">
                                            </div>
                                        </div>

                                    </div>

                                    {{-- 3 --}}
                                    <div class="form-group row">
                                        <label for="inputAgama" class="col-sm-2 col-form-label">12. Agama</label>
                                        <div class="col-sm-4">
                                            <select class="form-control select2" data-placeholder="Silahkan Pilih.." id="inputAgama">
                                                <option selected>Pilih</option>
                                                <option>Islam</option>
                                                <option>Kristen Protestan</option>
                                                <option>Khatolik</option>
                                                <option>Hindu</option>
                                                <option>Budha</option>
                                                <option>Khong Hu Chu</option>
                                            </select>
                                        </div>
                                    </div>

                                    {{-- 5 --}}
                                    <div class="form-group row">
                                        <label for="inputKwn" class="col-sm-2 col-form-label">13. Kewarganegaraan</label>
                                        <div class="col-sm-4">
                                            <input type="text" class="form-control" id="inputKwn"
                                                placeholder="Kewarganegaraan">
                                        </div>
                                        <label for="inputSuku" class="col-sm-1 col-form-label ml-2 mr-4" style="text-indent: 5px;">Suku</label>
                                        <div class="col-sm-4 ml-5" style="left: 11px;">
                                            <input type="text" class="form-control" id="inputSuku" placeholder="Suku">
                                        </div>
                                    </div>
                                    
                                    {{-- 5 --}}
                                    <div class="form-group row">
                                        <label for="inputPendidikan" class="col-sm-2 col-form-label">14. Pendidikan</label>
                                        <div class="col-sm-4">
                                            <select class="form-control select2" data-placeholder="Pilih" id="inputPendidikan">
                                                <option selected>Pilih</option>
                                                <option>SMP Sederajat</option>
                                                <option>SMA Sederajat</option>
                                                <option>D1</option>
                                                <option>D2</option>
                                                <option>D3</option>
                                                <option>D4</option>
                                                <option>S1</option>
                                                <option>S2</option>
                                                <option>S3</option>
                                            </select>
                                        </div>
                                    </div>

                                    {{-- 6 --}}
                                    <div class="form-group row">
                                        <label for="inputPekerjaan" class="col-sm-2 col-form-label">15. Pekerjaan</label>
                                        <div class=" col-sm-10">
                                            <input type="text" class="form-control" id="inpuPekerjaan"
                                                placeholder="Pekerjaan">
                                        </div>                                   
                                    </div>                                                
                                    
                                    {{-- 7 --}}
                                    <div class="form-group row">
                                        <label for="inputPenghasilan" class="col-sm-2 col-form-label" >16. Penghasilan/bulan</label>
                                        <div class=" col-sm-10">
                                            <input type="text" class="form-control" id="inpuPenghasilan"
                                                placeholder="Penghasilan/bulan">
                                        </div>                                   
                                    </div>

                                    {{-- 8 --}}
                                    <div class="form-group row">
                                        <label for="inputAlamat" class="col-sm-2 col-form-label">17. Alamat</label>
                                        <div class=" col-sm-10">
                                            <input type="text" class="form-control" id="inputAlamat"
                                                placeholder="Alamat">
                                        </div>                                   
                                    </div>

                                    {{-- 9 --}}
                                    <div class="form-group row">
                                        <label for="inputTelpRumah" class="col-sm-2 col-form-label" >18. No. Telepon Rumah</label>
                                        <div class=" col-sm-4">
                                            <input type="text" class="form-control" id="inputTelpRumah"
                                                placeholder="No. Telepon Rumah">
                                        </div>
                                        <label for="inputHP" class="col-sm-2 col-form-label pl-3">HP</label>
                                        <div class="col-sm-4">
                                            <input type="text" class="form-control" id="inputHP" placeholder="HP">
                                        </div>                                   
                                    </div>                                  
                                </div>

                        <!-- /.card-body -->
                        <div class="card-footer">
                            <a href="/pendaftaran2" class="btn btn-danger mr-2">Kembali</a>
                            <a href="/pendaftaran4" class="btn btn-success">Selanjutnya</a>
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
