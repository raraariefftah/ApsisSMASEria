@extends('tata_usaha.dashboard_tu')

@section('content')
<!-- Content Header (Page header) -->
<section class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1>Data Pendaftar</h1>
            </div>
            {{-- <div class="col-sm-6">
                            <ol class="breadcrumb float-sm-right">
                                <li class="breadcrumb-item"><a href="#">Profil</a></li>
                                <li class="breadcrumb-item active">General Form</li>
                            </ol>
                        </div> --}}
        </div>
    </div><!-- /.container-fluid -->
</section>

{{-- Profil --}}
<section class="content mb-3">
    <div class="container-fluid">
        <div class="row">
            <!-- left column -->
            <div class="col-md-12">
                <!-- general form elements -->
                <div class="card">
                    <div class="card-header">
                        <div class="row justify-content-end">
                            <label for="inputTA" class="col-xs col-form-label">Tahun Ajaran</label>
                            <div class="col-sm-2">
                                <select class="form-control select2" data-placeholder="Pilih">
                                    <option selected>2018/2019</option>
                                    <option>2019/2020</option>
                                    <option>2020/2021</option>
                                </select>
                            </div>
                        </div>
                    </div>
                    <!-- body card -->
                    <div class="card-body">
                        <table id="example1" class="table table-bordered table-striped">
                            <thead>
                                <tr>
                                    <th>No</th>
                                    <th>Nomor Pendaftaran</th>
                                    <th>Nama</th>
                                    <th>Tanggal Pendaftaran</th>
                                    <th>Tahun Ajaran</th>
                                    <th>Status Verifikasi</th>
                                    <th style="text-align: center"><i class="nav-icon fas fa-cog"></i></th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>1.</td>
                                    <td>00001</td>
                                    <td>Rara Ariefftahhhhhhhh</td>
                                    <td>13 Februari 2021</td>
                                    <td>2020/2021</td>
                                    <td style="text-align: center">
                                        <span class="badge badge-success pl-2 pr-2 pt-2 pb-2">TERVERIFIKASI</span>
                                    </td>
                                    <td style="text-align: center">
                                        {{-- <a href="#" class="btn btn-warning mr-1" ><i class="nav-icon fas fa-edit " >Edit</i></a> --}}
                                        <a href="/tata_usaha/detail_data" class="btn btn-primary"><i
                                                class="nav-icon fas fa-eye pr-1"></i>Tampilkan Data</a>
                                        {{-- <a href="#" class="btn btn-primary"><i class="nav-icon fas fa-check"></i></a> --}}
                                        <a href="#" class="btn btn-danger"><i class="nav-icon fas fa-times"></i></a>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                    <!-- /.card-body -->
                </div>
                <!-- /.card -->
            </div>
</section>
@endsection
