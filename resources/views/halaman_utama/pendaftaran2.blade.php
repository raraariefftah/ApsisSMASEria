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
                                <h3 class="card-title">B. KETERANGAN SISWA</h3>
                            </div>
                            <!-- /.card-header -->
                            <!-- form start -->
                            <form class="form-horizontal">
                                <div class="card-body">
                                    <div class="form-group row">
                                        <label for="inputNoinduk" class="col-sm-2 col-form-label">Nomor induk Siswa</label>
                                        <div class=" col-sm-4">
                                            <input type="text" class="form-control" id="inputNoinduk"
                                                placeholder="Nomor induk Siswa">
                                        </div>   
                                        <label for="inputNopendaftaran" class="col-sm-2 col-form-label pl-3">Nomor Pendaftaran</label>
                                        <div class=" col-sm-4">
                                            <input type="text" class="form-control" id="inputNopendaftaran"
                                                placeholder="Nomor Pendaftaran">
                                        </div>                                                                           
                                    </div>
                                    <hr>        
                                    {{-- 1 --}}
                                    <div class="form-group row">
                                        <label for="inputNamaLengkap" class="col-sm-2 col-form-label" >1. Nama Lengkap</label>
                                        <div class=" col-sm-4">
                                            <input type="text" class="form-control" id="inputNamaLengkap"
                                                placeholder="Nama Lengkap">
                                        </div>
                                        <label for="inputNamaLengkap" class="col-xs col-form-label ml-3" style="text-indent: 3px;">Jenis Kelamin</label>
                                        <div class="col-sm-2 pt-2 ml-4" style="right: 8px;">
                                            <div class="form-check ml-5">
                                                <input type="checkbox" class=" form-check-input" id="exampleCheck2">
                                                <label class="form-check-label" for="exampleCheck2">Laki-laki</label>     
                                            </div>
                                        </div>    
                                        <div class="col-sm-2 pt-2 ">
                                            <div class="form-check ">
                                                <input type="checkbox" class="form-check-input " id="exampleCheck2">
                                                <label class="form-check-label" for="exampleCheck2">Perempuan</label>     
                                            </div>
                                        </div>  
                                    </div>

                                    {{-- 2 --}}
                                    <div class="form-group row">
                                        <label for="inputNISN" class="col-sm-2 col-form-label">2. NISN</label>
                                        <div class="col-sm-4">
                                            <input type="text" class="form-control" id="inputNISN" placeholder="NISN">
                                        </div>
                                        <label for="inputNIK" class="col-sm-1 col-form-label ml-2 mr-5"  style="text-indent: 3px;" >NIK</label>
                                        <div class="col-sm-4 ml-4" style="left: 10px;">
                                            <input type="text" class="form-control" id="inputNIK" placeholder="NIK">
                                        </div>
                                    </div>                                

                                    {{-- 3 --}}
                                    <div class="form-group row">
                                        <label for="inputTTL" class="col-sm-2 col-form-label ">3. Tempat Lahir</label>
                                        <div class="col-sm-4">
                                            <input type="text" class="form-control" id="inputTTL" placeholder="Tempat Lahir">
                                        </div>
                                        <label for="inputTTL" class="col-xs col-form-label mr-5 ml-3" style="text-indent: 4px;">Tanggal Lahir</label>
                                        <div class="col-sm-4 " style="left: 20px;">                                            
                                            <div class="input-group">                                           
                                                <input type="text" class="form-control" data-inputmask-alias="datetime"
                                                    data-inputmask-inputformat="dd/mm/yyyy" data-mask
                                                    placeholder="dd/mm/yyyy">
                                            </div>
                                        </div>

                                    </div>

                                    {{-- 4 --}}
                                    <div class="form-group row">
                                        <label for="inputNS" class="col-sm-2 col-form-label">4. Agama</label>
                                        <div class="col-sm-4">
                                            <select class="form-control select2" data-placeholder="Pilih">
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
                                        <label for="inputKwn" class="col-sm-2 col-form-label">5. Kewarganegaraan</label>
                                        <div class="col-sm-4">
                                            <input type="text" class="form-control" id="inputKwn"
                                                placeholder="Kewarganegaraan">
                                        </div>
                                        <label for="inputSuku" class="col-sm-1 col-form-label ml-2 mr-4" style="text-indent: 5px;">Suku</label>
                                        <div class="col-sm-4 ml-5" style="left: 11px;">
                                            <input type="text" class="form-control" id="inputSuku" placeholder="Suku">
                                        </div>
                                    </div>

                                    {{-- 6 --}}
                                    <div class="form-group row">
                                        <label for="inputPassword3" class="col-sm-2 col-form-label">6. Anak ke</label>
                                        <div class="col-sm-1" >
                                            <select class="form-control select2" data-placeholder="Pilih" style="width: 107px;">
                                                <option selected>Pilih</option>
                                                <option>1</option>
                                                <option>2</option>
                                                <option>3</option>
                                                <option>4</option>
                                                <option>5</option>
                                                <option>6</option>
                                            </select>
                                        </div>
                                        <label for="inputPassword3" class="col-sm-1 col-form-label pl-5 ">dari</label>
                                        <div class="col-sm-1">
                                            <select class="form-control select2" data-placeholder="Pilih">
                                                <option selected>Pilih</option>
                                                <option>1</option>
                                                <option>2</option>
                                                <option>3</option>
                                                <option>4</option>
                                                <option>5</option>
                                                <option>6</option>
                                            </select>
                                        </div>
                                        <label for="inputPassword3" class="col-xs col-form-label ml-2">bersaudara</label>

                                        <label for="inputPassword3" class="col-xs col-form-label ml-3 mr-4" style="text-indent: 7px;">Status Siswa</label>
                                        <div class="col-sm-4 ml-5" style="left: 2px;">
                                            <select class="form-control select2" data-placeholder="Pilih">
                                                <option selected>Pilih</option>
                                                <option>Kandung</option>
                                                <option>Yatim</option>
                                                <option>Piatu</option>
                                                <option>Yatim Piatu</option>
                                            </select>
                                        </div>
                                    </div>

                                    {{-- 7 --}}
                                    <div class="form-group row">
                                        <label for="inputPassword3" class="col-sm-2 col-form-label">7. Riwayat
                                            Beasiswa</label>
                                        <div class="col-sm-2">
                                            <label for="inputPassword3" class="col-xs col-form-label pr-2">Jenis Beasiswa</label>
                                            <select class="form-control select2" data-placeholder="Pilih">
                                                <option selected>Pilih</option>
                                                <option>Siswa Berprestasi</option>
                                                <option>Anak Miskin</option>
                                                <option>Pendidikan</option>
                                                <option>Unggulan</option>
                                                <option>Lainnya</option>
                                            </select>
                                        </div>
                                        <div class="col-sm-4">
                                            <label for="inputPassword3" class="col-xs col-form-label pr-2">Penyelenggara/Sumber/Pemberi Beasiswa</label>
                                            <input type="text" class="form-control" id="inputKwn" placeholder="Penyelenggara/Sumber/Pemberi Beasiswa">
                                        </div>
                                        <div class=" col-sm-2">                                             
                                            <label for="inputPassword3" class="col-xs col-form-label pr-2">Tanggal Masuk</label>                                        
                                            <input type="text" class="form-control" data-inputmask-alias="datetime"
                                                    data-inputmask-inputformat="dd/mm/yyyy" data-mask
                                                    placeholder="dd/mm/yyyy">                                            
                                        </div>
                                        <div class=" col-sm-2">                                             
                                            <label for="inputPassword3" class="col-xs col-form-label pr-2">Tanggal Selesai</label>                                       
                                            <input type="text" class="form-control" data-inputmask-alias="datetime"
                                                    data-inputmask-inputformat="dd/mm/yyyy" data-mask
                                                    placeholder="dd/mm/yyyy">                                            
                                        </div>             
                                    </div>  

                                    {{-- 8 --}}
                                    <div class="form-group row">
                                        <label for="inputPassword3" class="col-sm-2 col-form-label ">8. Catatan
                                            Prestasi</label>
                                        
                                        <div class="col-sm-2">
                                            <label for="inputPassword3" class="col-xs col-form-label pr-2">Tahun</label>
                                            <select class="form-control select2" data-placeholder="Pilih">
                                                <option selected>Pilih</option>
                                                <option>2015</option>
                                                <option>2015</option>
                                                <option>2015</option>
                                                <option>2015</option>
                                                <option>2015</option>
                                            </select>
                                        </div>                                        
                                        <div class="col-sm-3">
                                            <label for="inputPassword3" class="col-xs col-form-label pr-2">Lomba</label>
                                            <input type="text" class="form-control" id="inputTTL" placeholder="Lomba">
                                        </div>
                                        
                                        <div class="col-sm-1">
                                            <label for="inputPassword3" class="col-xs col-form-label pr-2">Juara</label>
                                            <select class="form-control select2" data-placeholder="Pilih">
                                                <option selected>Pilih</option>
                                                <option>1</option>
                                                <option>1</option>
                                                <option>1</option>
                                                <option>1</option>
                                                <option>1</option>
                                            </select>
                                        </div>
                                        
                                        <div class="col-sm-2">
                                            <label for="inputPassword3" class="col-xs col-form-label  pr-2">Jenis</label>
                                            <select class="form-control select2" data-placeholder="Pilih">
                                                <option selected>Pilih</option>
                                                <option>Sains</option>
                                                <option>Seni</option>
                                                <option>Olah raga</option>
                                                <option>Lainnya</option>
                                            </select>
                                        </div>

                                        <div class="col-sm-2">
                                            <label for="inputPassword3" class="col-xs col-form-label  pr-2">Tingkat</label>
                                            <select class="form-control select2" data-placeholder="Pilih">
                                                <option selected>Pilih</option>
                                                <option>Sekolah</option>
                                                <option>Kecamatan</option>
                                                <option>Provinsi</option>
                                                <option>Nasional</option>
                                                <option>Internasional</option>
                                            </select>
                                        </div>                                   
                                    </div>

                                    {{-- 9 --}}
                                    <div class="form-group row">
                                        <label for="inputPassword3" class="col-sm-2 col-form-label">9. Jenis Tinggal</label>
                                        <div class="col-sm-2">
                                            <select class="form-control select2 " data-placeholder="Pilih">
                                                <option selected>Pilih</option>
                                                <option>Bersama Orang Tua</option>
                                                <option>Saudara/Wali</option>
                                                <option>Asrama</option>
                                                <option>Kost</option>
                                                <option>Panti Asuhan</option>
                                                <option>Lainnya</option>
                                            </select>
                                        </div>
                                    </div>

                                    {{-- 10 --}}
                                    <div class="form-group row">
                                        <label for="inputKwn" class="col-sm-2 col-form-label">10. Jarak ke Sekolah</label>
                                        <div class="col-sm-2">
                                            <input type="text" class="form-control" id="inputKwn" placeholder="jarak">
                                        </div>
                                        <label for="inputKwn" class="col-sm-2 col-form-label" style="text-indent: 5px;">km</label>

                                        <label for="inputKwn" class="col-sm-3 col-form-label" style="text-indent: -122px;">Alat Transportasi ke
                                            Sekolah</label>
                                        <div class="col-sm-2" style="right : 180px;">
                                            <select class="form-control select2 " data-placeholder="Pilih">
                                                <option selected>Pilih</option>
                                                <option>Jalan Kaki</option>
                                                <option>Kendaraan Pribadi</option>
                                                <option>Kendaraan Umum</option>
                                                <option>Jemputan</option>
                                                <option>Becak</option>
                                            </select>
                                        </div>
                                    </div>

                                    {{-- 11 --}}
                                    <div class="form-group row">
                                        <label for="inputKwn" class="col-sm-2 col-form-label">11. Golongan Darah</label>
                                        <div class="col-sm-2">
                                            <select class="form-control select2 " data-placeholder="Pilih">
                                                <option selected>Pilih</option>
                                                <option>A</option>
                                                <option>B</option>
                                                <option>AB</option>
                                                <option>O</option>
                                                <option>-</option>
                                            </select>
                                        </div>
                                        <label for="inputKwn" class="col-xs col-form-label pl-3 ml-5 pr-2" style="text-indent: 4px;">Tinggi</label>
                                        <div class="col-sm-2" >
                                            <input type="text" class="form-control" id="inputKwn" placeholder="Tinggi" style="width: 100px;">
                                        </div>
                                        <label for="inputKwn" class="col-xs col-form-label pr-2" style="text-indent: -60px;">cm</label>

                                        <label for="inputKwn" class="col-xs col-form-label pr-2" style="text-indent: -25px;">Berat</label>
                                        <div class="col-sm-1">
                                            <input type="text" class="form-control" id="inputKwn" placeholder="Berat">
                                        </div>
                                        <label for="inputKwn" class="col-sm-2 col-form-label">kg</label>
                                    </div>

                                    {{-- 13 --}}
                                    <div class="form-group row">
                                        <label for="inputKwn" class="col-sm-2 col-form-label">12. Kelainan Jasmani</label>
                                        <div class="col-sm-4">
                                            <input type="text" class="form-control" id="inputKwn"
                                                placeholder="Kelainan Jasmani">
                                        </div>
                                    </div>

                                    {{-- 14 --}}
                                    <label for="inputKwn" class="col-sm-3 col-form-label" style="text-indent: -7px">13. Pendidikan sebelumnya</label>
                                    <div class="form-group row">
                                        <label for="inputKwn" class="col-sm-2 col-form-label" style="left: 25px">a. Lulusan
                                            dari</label>
                                        <div class="col-sm-4">
                                            <input type="text" class="form-control" id="inputKwn" placeholder="Lulusan dari">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="inputKwn" class="col-sm-2 col-form-label" style="left: 25px">b. Tanggal</label>
                                        <div class="col-sm-4">
                                            <div class="input-group" style="width: 117px">                                                
                                                <input type="text" class="form-control" data-inputmask-alias="datetime"
                                                    data-inputmask-inputformat="dd/mm/yyyy" data-mask
                                                    placeholder="dd/mm/yyyy" >
                                            </div>
                                        </div>
                                        <label for="inputKwn" class="col-sm-1 col-form-label"  style="text-indent: -230px">No.STTB</label>
                                        <div class="col-sm-4" style="right: 240px">
                                            <input type="text" class="form-control" id="inputKwn" placeholder="No.STTB" style="width: 133px">
                                        </div>
                                    </div>

                                    {{-- 15 --}}
                                    <label for="inputKwn" class="col-sm-2 col-form-label" style="text-indent: -7px">14.
                                        Kegemaran</label>
                                    <div class="form-group row">
                                        <label for="inputKwn" class="col-sm-2 col-form-label" style="left: 25px">a.
                                            Kesenian</label>
                                        <div class="col-sm-4">
                                            <input type="text" class="form-control" id="inputKwn" placeholder="Kesenian">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="inputKwn" class="col-sm-2 col-form-label" style="left: 25px">b.
                                            Olahraga</label>
                                        <div class="col-sm-4">
                                            <input type="text" class="form-control" id="inputKwn" placeholder="Olahraga">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="inputKwn" class="col-sm-2 col-form-label" style="left: 25px">c.
                                            Organisasi/Lainnya</label>
                                        <div class="col-sm-4">
                                            <input type="text" class="form-control" id="inputKwn"
                                                placeholder="Organisasi/Lainnya">
                                        </div>
                                    </div>

                                    <label for="inputKwn" class="col-sm-2 col-form-label" style="text-indent: -7px">15.
                                        Pindahan</label>
                                    <div class="form-group row">
                                        <label for="inputKwn" class="col-sm-2 col-form-label" style="left: 25px">a. Dari
                                            Sekolah</label>
                                        <div class="col-sm-4">
                                            <input type="text" class="form-control" id="inputKwn" placeholder="Sekolah">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="inputKwn" class="col-sm-2 col-form-label" style="left: 25px">b. Alasan
                                            Pindah</label>
                                        <div class="col-sm-4">
                                            <input type="text" class="form-control" id="inputKwn"
                                                placeholder="Alasan Pindah">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="inputKwn" class="col-sm-2 col-form-label" style="left: 25px">c. Diterima
                                            di sekolah</label>
                                        <label for="inputKwn" class="col-xs col-form-label pl-3">Di Kelas</label>
                                        <div class="col-sm-1 ml-1">
                                            <select class="form-control select2 " data-placeholder="Pilih">
                                                <option selected>Pilih</option>
                                                <option>X-1</option>
                                                <option>X-2</option>
                                                <option>X-3</option>
                                                <option>X-4</option>
                                                <option>XII IPA 1</option>
                                            </select>
                                        </div>
                                        <label for="inputKwn" class="col-xs col-form-label pl-2 pr-1">Tanggal</label>
                                        <div class="col-sm-2">
                                            <div class="input-group" style="width: 117px">                                                
                                                <input type="text" class="form-control" data-inputmask-alias="datetime"
                                                    data-inputmask-inputformat="dd/mm/yyyy" data-mask
                                                    placeholder="dd/mm/yyyy" >
                                            </div>
                                        </div>
                                    </div>
                                    {{-- 17 --}}
                                    <div class="form-group row">
                                        <label for="inputKwn" class="col-sm-2 col-form-label">16. Alamat</label>
                                        <div class="col-sm-4">
                                            <input type="text" class="form-control" id="inputKwn" placeholder="Alamat">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="inputKwn" class="col-sm-2 col-form-label"
                                            style="left: 25px">Kelurahan/Desa</label>
                                        <div class="col-sm-4">
                                            <input type="text" class="form-control" id="inputKwn"
                                                placeholder="Kelurahan/Desa">
                                        </div>
                                        <label for="inputKwn" class="col-sm-2 col-form-label pl-3 pr-2">Kode Pos</label>
                                        <div class="col-sm-2">
                                            <input type="text" class="form-control" id="inputKwn" placeholder="Kode Pos">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="inputKwn" class="col-sm-2 col-form-label"
                                            style="left: 25px">Kecamatan</label>
                                        <div class="col-sm-4">
                                            <input type="text" class="form-control" id="inputKwn" placeholder="Kecamatan">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="inputKwn" class="col-sm-2 col-form-label"
                                            style="left: 25px">Kab/Kota</label>
                                        <div class="col-sm-4">
                                            <input type="text" class="form-control" id="inputKwn"
                                                placeholder="Kabupaten/Kota">
                                        </div>
                                        <label for="inputProvinsi" class="col-sm-2 col-form-label pl-3">Provinsi</label>
                                        <div class="col-sm-4">
                                            <input type="text" class="form-control" id="inputProvinsi"
                                                placeholder="SUMATERA UTARA" disabled="disabled">
                                        </div>
                                    </div>
                                    {{-- 18 --}}
                                    <div class="form-group row">
                                        <label for="inputTelepon" class="col-sm-2 col-form-label">17. Telepon</label>
                                        <div class="col-sm-4">
                                            <input type="text" class="form-control" id="inputTelepon" placeholder="Telepon">
                                        </div>
                                        <label for="inputHP" class="col-sm-2 col-form-label pl-3">HP</label>
                                        <div class="col-sm-4">
                                            <input type="text" class="form-control" id="inputHP" placeholder="HP">
                                        </div>
                                    </div>
                            </div>

                            <!-- /.card-body -->
                            <div class="card-footer">
                                <a href="/pendaftaran1" class="btn btn-danger mr-2">Kembali</a>
                                <a href="/pendaftaran3" class="btn btn-success">Selanjutnya</a>
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
