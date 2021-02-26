@extends('admin.dashboard_admin')

@section('content')

<!-- Content Header (Page header) -->
<section class="content-header">
    <div class="container-fluid">
        <div class="row mb-2 ">
            <div class="col-md-7">
                <h1>Edit Home</h1>
            </div>
        </div>
    </div>
    <!-- /.container-fluid -->
</section>

{{-- Profil --}}
<section class="content">
    <div class="container-fluid">
        <div class="row">
            <!-- Visi Misi column -->
            <div class="col-md-6">
                <!-- general form elements -->
                <div class="card ">
                    <div class="card-header">
                        <h3 class="card-title">Visi dan Misi Sekolah</h3>
                    </div>
                    <!-- /.card-header -->
                    <!-- form start -->
                    <form role="form">
                        <div class="card-body">
                            <div class="form-group">
                                <label for="=inputVisi">Visi</label>
                                <textarea class="form-control" rows="5" placeholder="Visi ..."></textarea>
                            </div>
                            <div class="form-group">
                                <label for="=inputMisi">Misi</label>
                                <textarea class="form-control" rows="5" placeholder="Misi ..."></textarea>
                            </div>
                            <div class="form-group">
                                <label for="=inputTujuan">Tujuan</label>
                                <textarea class="form-control" rows="5" placeholder="Tujuan ..."></textarea>
                            </div>

                        </div>
                        <!-- /.card-body -->
                    </form>
                </div>
                <!-- /.card -->
            </div>

            <!-- left column -->
            <div class="col-md-6">
                <!-- general form elements -->
                <div class="card ">
                    <div class="card-header">
                        <h3 class="card-title">Kata Sambutan Kepala Sekolah</h3>
                    </div>
                    <!-- /.card-header -->
                    <!-- form start -->
                    <form role="form">
                        <div class="card-body">
                            <div class="form-group">
                                <label for="=inputNama">Nama</label>
                                <input type="email" class="form-control" id="inputNama" placeholder="Nama">
                            </div>
                            <div class="form-group">
                                <label for="=inputNama">Kata Sambutan</label>
                                <textarea class="form-control" rows="5" placeholder="Enter ..."></textarea>
                            </div>
                            <div class="form-group">
                                <label for="exampleInputFile">File Gambar</label>
                                <div class="input-group">
                                    <div class="custom-file">
                                        <input type="file" class="custom-file-input" id="exampleInputFile">
                                        <label class="custom-file-label" for="exampleInputFile">Choose file</label>
                                    </div>
                                    <div class="input-group-append">
                                        <span class="input-group-text" id="">Upload</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- /.card-body -->
                    </form>
                    {{-- <a href="/admin/dashboard" class="btn btn-danger mr-2">Kembali</a> --}}
                    {{-- <button type="submit" class="btn btn-success mr-2">Selesai</button> --}}                           
                </div>
                <a href="/admin/dashboard" class="btn btn-danger btn-block mr-2">Kembali</a>
                <button type="submit" class="btn btn-success btn-block mr-2 mb-4">Selesai</button>
                <!-- /.card -->
            </div>
        </div>
</section>

@endsection
