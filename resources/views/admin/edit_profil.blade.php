@extends('admin.dashboard_admin')

@section('content')

<!-- Content Header (Page header) -->
<section class="content-header">
    <div class="container-fluid">
        <div class="row mb-2 justify-content-md-center">
            <div class="col-md-12">
                <h1>Edit Profil</h1>
            </div>
        </div>
    </div>
    <!-- /.container-fluid -->
</section>

{{-- Profil --}}
<section class="content">
    <div class="container-fluid">
        <div class="row justify-content-md-center">
            <!-- left column -->
            <div class="col-md-12">
                <!-- general form elements -->
                <div class="card ">
                    <!-- form start -->
                    <form role="form">
                        <div class="card-body">
                            <div class="row">
                                {{-- column1 --}}
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="=inputNamaSekolah">Nama Sekolah</label>
                                        <input type="text" class="form-control" id="inputNamaSekolah"
                                            placeholder="Nama">
                                    </div>
                                    <!-- /.form-group -->
                                    <div class="form-group">
                                        <label for="=inputStatusSekolah">Status Sekolah</label>
                                        <input type="text" class="form-control" id="inputStatusSekolah"
                                            placeholder="Status Sekolah">
                                    </div>
                                    <!-- /.form-group -->
                                    <div class="form-group">
                                        <label for="=inputStatusKepemilikan">Status Kepemilikan</label>
                                        <input type="text" class="form-control" id="inputStatusKepemilikan"
                                            placeholder="Status Kepemilikan">
                                    </div>
                                    <!-- /.form-group -->
                                    <div class="form-group">
                                        <label for="=inputAkreditasi">Akreditasi</label>
                                        <input type="text" class="form-control" id="inputAkreditasi"
                                            placeholder="Akreditasi">
                                    </div>
                                    <!-- /.form-group -->
                                    <div class="form-group">
                                        <label for="=inputNPSN">NPSN</label>
                                        <input type="text" class="form-control" id="inputNPSN" placeholder="NPSN">
                                    </div>
                                    <!-- /.form-group -->
                                    <div class="form-group">
                                        <label for="=inputAlamatSekolah">Alamat Sekolah</label>
                                        <input type="text" class="form-control" id="inputAlamatSekolah"
                                            placeholder="Alamat Sekolah">
                                    </div>
                                    <!-- /.form-group -->
                                    <div class="form-group">
                                        <label for="=inputDK">Desa/Kelurahan</label>
                                        <input type="text" class="form-control" id="inputDK"
                                            placeholder="Desa/Kelurahan">
                                    </div>
                                    <!-- /.form-group -->
                                    <div class="form-group">
                                        <label for="exampleInputFile">Gambar</label>
                                        <div class="input-group">
                                            <div class="custom-file">
                                                <input type="file" class="custom-file-input" id="exampleInputFile">
                                                <label class="custom-file-label" for="exampleInputFile">Choose
                                                    file</label>
                                            </div>
                                            <div class="input-group-append">
                                                <span class="input-group-text" id="">Upload</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                {{-- column2 --}}
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="=inputKecamatan">Kecamatan</label>
                                        <input type="text" class="form-control" id="inputKecamatan"
                                            placeholder="Kecamatan">
                                    </div>
                                    <!-- /.form-group -->
                                    <div class="form-group">
                                        <label for="=inputKota">Kota</label>
                                        <input type="text" class="form-control" id="inputKota" placeholder="Kota">
                                    </div>
                                    <!-- /.form-group -->
                                    <div class="form-group">
                                        <label for="=inputProvinsi">Provinsi</label>
                                        <input type="text" class="form-control" id="inputProvinsi"
                                            placeholder="Provinsi">
                                    </div>
                                    <!-- /.form-group -->
                                    <div class="form-group">
                                        <label for="=inputKP">Kode Pos</label>
                                        <input type="text" class="form-control" id="inputKP" placeholder="Kode Pos">
                                    </div>
                                    <!-- /.form-group -->
                                    <div class="form-group">
                                        <label for="=inputTel">No. Telepon</label>
                                        <input type="text" class="form-control" id="inputTel" placeholder="No. Telepon">
                                    </div>
                                    <!-- /.form-group -->
                                    <div class="form-group">
                                        <label for="=inputEmail">Email</label>
                                        <input type="email" class="form-control" id="inputEmail" placeholder="Email">
                                    </div>
                                    <!-- /.form-group -->
                                    <div class="form-group">
                                        <label for="=inputKepsek">Kepala Sekolah</label>
                                        <input type="text" class="form-control" id="inputKepsek"
                                            placeholder="Kepala Sekolah">
                                    </div>
                                </div>
                            </div>
                            <!-- /.row -->

                        </div>
                        <div class="card-footer">
                            <a href="/admin/dashboard" class="btn btn-danger mr-2">Kembali</a>
                            <button type="submit" class="btn btn-success mr-2">Selesai</button>
                        </div>
                        <!-- /.card -->
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>

@endsection
