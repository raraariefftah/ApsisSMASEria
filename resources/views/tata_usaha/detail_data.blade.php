@extends('tata_usaha.dashboard_tu')

@section('content')
<!-- Content Header (Page header) -->
<section class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1>Detail Data Pendaftar</h1>
            </div>
        </div>
    </div>
    <!-- /.container-fluid -->
</section>

{{-- Profil --}}
<section class="content">
    <div class="container-fluid">
        <div class="row">
            <!-- left column -->
            <div class="col-md-12">
                <!-- general form elements -->
                <div class="card">
                    <!-- form start -->
                    <form class="form-horizontal">
                        <div class="card-header">
                            <a href="/tata_usaha/data_pendaftar">
                                <i class="nav-icon fas fa-arrow-left pr-1" style="color: black"></i></a>
                            <!-- /.card-tools -->
                        </div>
                        {{-- <div class="card-body"> --}}
                        <!-- form start -->
                        {{-- <form class="form-horizontal"> --}}
                        <div class="card-body">
                            {{-- button --}}
                            <div class="row pb-2">
                                <div class="col-auto ml-auto">
                                    <a type="button" class="btn btn-warning" href="/manager/tambah_tugas"><i
                                            class="nav-icon fas fa-edit pr-1">
                                        </i>Edit</a>
                                </div>
                                <div class="col-auto">
                                    <a type="button" class="btn btn-danger" style="background-color: rgb(136, 23, 19)"
                                        href="{{ url('tata_usaha/cetak') }}"><i class="nav-icon fas fa-print pr-1">
                                        </i>Cetak</a>
                                </div>
                            </div>
                            {{-- picture --}}
                            <div class="row mt-2 mb-4 justify-content-center">
                                <div class="col-lg-2">
                                    <img src="/img/user3.png" class="" style="width: 150px;" alt="foto">
                                    <h5 class="ml-4 pl-1 mt-3">2021/2022</h5>
                                    <span class="badge badge-success ml-4 mt-1 pl-2 pr-2 pt-2 pb-2">TERVERIFIKASI
                                    </span>
                                </div>
                            </div>
                            {{-- collapse --}}
                            <div class="accordion" id="accordionExample">
                                <div class="card">
                                    <div class="card-header" id="headingOne">
                                        <h4 class="mb-0">
                                            <button class="btn btn-link" type="button" data-toggle="collapse"
                                                data-target="#collapseOne" aria-expanded="true"
                                                aria-controls="collapseOne">
                                                Keterangan Siswa
                                            </button>
                                        </h4>
                                    </div>

                                    <div id="collapseOne" class="collapse show" aria-labelledby="headingOne"
                                        data-parent="#accordionExample">
                                        <div class="container">
                                            <div class="card-body">
                                                <table class="table table-sm table-hover text-gray-400">
                                                    <tbody>
                                                        <tr>
                                                            <td width="500px" style="font-weight: bold; ">
                                                                Nomor Pendaftaran:
                                                            </td>
                                                            <td> 12345678 </td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                            </div>
                                        </div>
                                    </div>
                                </div>


                                {{-- <div class="card">
                                    <div class="card-header" id="headingTwo">
                                        <h5 class="mb-0">
                                            <button class="btn btn-link collapsed" type="button" data-toggle="collapse"
                                                data-target="#collapseTwo" aria-expanded="false"
                                                aria-controls="collapseTwo">
                                                Collapsible Group Item #2
                                            </button>
                                        </h5>
                                    </div>
                                    <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo"
                                        data-parent="#accordionExample">
                                        <div class="card-body">
                                            Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry
                                            richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard
                                            dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon
                                            tempor, sunt aliqua put a bird on it squid single-origin coffee nulla
                                            assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore
                                            wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher
                                            vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic
                                            synth nesciunt you probably haven't heard of them accusamus labore
                                            sustainable VHS.
                                        </div>
                                    </div>
                                </div>
                                <div class="card">
                                    <div class="card-header" id="headingThree">
                                        <h5 class="mb-0">
                                            <button class="btn btn-link collapsed" type="button" data-toggle="collapse"
                                                data-target="#collapseThree" aria-expanded="false"
                                                aria-controls="collapseThree">
                                                Collapsible Group Item #3
                                            </button>
                                        </h5>
                                    </div>
                                    <div id="collapseThree" class="collapse" aria-labelledby="headingThree"
                                        data-parent="#accordionExample">
                                        <div class="card-body">
                                            Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry
                                            richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard
                                            dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon
                                            tempor, sunt aliqua put a bird on it squid single-origin coffee nulla
                                            assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore
                                            wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher
                                            vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic
                                            synth nesciunt you probably haven't heard of them accusamus labore
                                            sustainable VHS.
                                        </div>
                                    </div>
                                </div> --}}
                            </div>






                        </div>
                        {{-- </form> --}}
                        {{-- </div> --}}
                        <!-- /.card-body -->
                        {{-- <div class="card-footer">
                            <button type="submit" class="btn btn-success mr-2">Ubah Profil</button>
                            <a href="/tata_usaha/data_pendaftar" class="btn btn-danger mr-2">Kembali</a>
                            <button type="submit" class="btn btn-success mr-2" onclick="return confirm('Apakah kamu yakin?')">Ubah</button>
                            <a href="/home" class="btn btn-success">Selesai</a>
                        </div> --}}
                        <!-- /.card-footer -->
                    </form>
                </div>
                <!-- /.card -->
            </div>
        </div>
    </div>
</section>

@endsection
