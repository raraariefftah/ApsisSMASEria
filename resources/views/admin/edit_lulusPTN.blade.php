@extends('admin.dashboard_admin')

@section('content')

<!-- Content Header (Page header) -->
<section class="content-header">
    <div class="container-fluid">
        <div class="row mb-2 justify-content-center">
            <div class="col-md-7">
                <h1>Edit Lulus PTN</h1>
            </div>
        </div>
    </div>
    <!-- /.container-fluid -->
</section>

{{-- Fasilitas --}}
<section class="content">
    <div class="container-fluid">
        <div class="row justify-content-center">
            <!-- left column -->
            <div class="col-md-7">
                <!-- general form elements -->
                <div class="card ">
                    <!-- /.card-header -->
                    <!-- form start -->
                    <form role="form">
                        <div class="card-body">
                            <div class="form-group">
                                <label for="=inputNama">Nama</label>
                                <input type="text" class="form-control" id="inputNama" placeholder="Nama">
                            </div>
                            <div class="form-group">
                                <label for="=inputPTN">Perguruan Tinggi</label>
                                <input type="text" class="form-control" id="inputPTN" placeholder="Perguruan Tinggi">
                            </div>
                            <div class="form-group">
                                <label for="=inputJurusan">Jurusan</label>
                                <input type="text" class="form-control" id="inputJurusan" placeholder="Jurusan">
                            </div>
                            <div class="form-group">
                                <label for="exampleInputFile">Gambar</label>
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
                        <div class="card-footer">
                            <a href="/admin/dashboard" class="btn btn-danger mr-2">Kembali</a>
                            <button type="submit" class="btn btn-success mr-2">Selesai</button>
                            {{-- <button type="submit" class="btn btn-success mr-2" onclick="return confirm('Apakah kamu yakin?')">Ubah</button> --}}
                            {{-- <a href="/home" class="btn btn-success">Selesai</a> --}}
                        </div>
                        <!-- /.card-footer -->
                    </form>
                </div>
                <!-- /.card -->
            </div>
        </div>
</section>

@endsection
