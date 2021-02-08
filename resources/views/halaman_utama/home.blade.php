<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>SMA Swasta Eria | Home</title>
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

<body style="background-color:  rgb(255, 255, 255);">
    <!-- Site wrapper -->
    <div class="wrapper">
        <!-- Navbar -->
        @include('partials.navbar_hu')
        {{-- <nav class="navbar navbar-expand-lg navbar-white navbar-light topbar static-top shadow">
            <h4 href="#" class="mt-2" style="font-family: Arial; font-weight:bold"><img src="/img/logoeria.png" alt=""
                    width="40" height="42" class=" ml-3 mr-2">SMA Swasta Eria Medan</h4>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
                aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav ml-auto">                

                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                        <ul class="navbar-nav ml-auto">
                            <li class="nav-item active">
                                <a class="nav-link" href="/">Home <span class="sr-only">(current)</span></a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="/pendaftaran1">pendaftaran</a>
                            </li>
                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
                                    data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    Tentang
                                </a>
                                <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="#">Profil</a>
                                    <a class="dropdown-item" href="#">Visi & Misi</a>
                                    <a class="dropdown-item" href="#">Fasilitas</a>
                                </div>
                            </li>                        
                        </ul>
                    </div>

                    <li class="nav-item">
                        <a class="nav-link mr-3" href="#">Login</a>
                    </li>
                </ul>
            </div>
        </nav> --}}

        {{-- carousel atas --}}
        <div class="carousel slide" data-ride="carousel" id="carouselExampleIndicators">
            <ol class="carousel-indicators">
                <li class="active" data-slide-to="0" data-target="#carouselExampleIndicators"></li>
                <li data-slide-to="1" data-target="#carouselExampleIndicators"></li>
                <li data-slide-to="2" data-target="#carouselExampleIndicators"></li>
            </ol>
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img alt="First slide" class="d-block w-100" src="/img/eria.jpg">
                </div>
                <div class="carousel-item">
                    <img alt="Second slide" class="d-block w-100" src="/img/eria.jpg">
                    {{-- <div class="carousel-caption d-none d-md-block">
                        <h5>Slider One Item</h5>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Maxime, nulla, tempore. Deserunt
                            excepturi quas vero.</p>
                    </div> --}}
                </div>
                <div class="carousel-item">
                    <img alt="Third slide" class="d-block w-100" src="/img/eria.jpg">
                    {{-- <div class="carousel-caption d-none d-md-block">
                        <h5>Slider One Item</h5>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Maxime, nulla, tempore. Deserunt
                            excepturi quas vero.</p>
                    </div> --}}
                </div>
            </div><a class="carousel-control-prev" data-slide="prev" href="#carouselExampleIndicators"
                role="button"><span aria-hidden="true" class="carousel-control-prev-icon"></span> <span
                    class="sr-only">Previous</span></a> <a class="carousel-control-next" data-slide="next"
                href="#carouselExampleIndicators" role="button"><span aria-hidden="true"
                    class="carousel-control-next-icon"></span> <span class="sr-only">Next</span></a>
        </div>
        {{-- end carousel atas --}}

        <!-- sambutan -->
        <section id="sambutan" class="sambutan pt-5 pb-5 bg-light">
            <div class="container">
                <div class="row mb-3">
                    <div class="col text-center">
                        <h3><strong>Sambutan Kepala Sekolah</strong></h3>
                    </div>
                </div>

                <div class="container">
                    <div class="media">
                        <img src="/img/rara.jpg" class="mr-3" alt="..."
                            style="width: 150px; display: block; margin-left: auto; margin-right: auto; ">
                        <div class="media-body">
                            <h5 class="mt-0">Drs. Khoiruddin Hasibuan M.Pd</h5>
                            <p class="text-justify">Sambutan dari kepala SMA Swasta Eria Medan sebagai lembaga
                                pendidikan,
                                SMA Swasta Eria Medan tanggap dengan perkembangan teknologi. Dengan dukungan
                                SDM yang dimiliki sekolah ini siap untuk berkompetisi dengan sekolah lain dalam
                                pelayanan
                                informasi publik. Teknologi Informasi Web khususnya, menjadi sarana bagi SMA Swasta Eria
                                Medan untuk
                                memberi pelayanan informasi secara cepat, jelas, dan akuntable. Dari layanan ini pula,
                                sekolah siap menerima saran dari semua pihak yang akhirnya dapat menjawab kebutuhan
                                masyarakat.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Visi -->
        <section id="sambutan" class="sambutan pt-5 pb-4">
            {{-- VISI --}}
            <div class="container">
                <div class="row mb-3">
                    <div class="col text-center ">
                        <h2>Visi SMA Swasta Eria</h2>
                    </div>
                </div>
                <div class="row justify-content-md-center ">
                    <div class="col-lg-6">
                        <div class="card">
                            <div class="card-body">
                                <p class="card-text text-center">
                                    Terwujudnya generasi yang cerdas, berprestasi, unggul, disiplin dan
                                    berwawasan global didasari IMTAQ
                                </p>
                            </div>
                        </div>
                    </div>
                </div>

                {{-- MISI --}}
                <div class="row pb-3 pt-3">
                    <div class="col text-center">
                        <h2>Misi SMA Swasta Eria</h2>
                    </div>
                </div>
                <div class="row justify-content-md-center ">
                    <div class="col-lg-6">
                        <div class="card">
                            <div class="card-body">
                                <ol class="text-left pl-4">
                                    <li>Melaksanakan dan mengembangkan proses pembelajaran bermutu, efektid dan dinamis;
                                    </li>
                                    <li>Meningkatkan kedisiplinan dan kepribadian dalam kerangka ketaqwaan terhadap
                                        Tuhan Yang Maha Esa; </li>
                                    <li>Mengembangkan sikap kompetitif dalam bidang Iptek, Seni dan Olahraga;</li>
                                    <li>Mengambangkan kultur sekolah yang sesuai dengan norma keagamaan dan sosial
                                        kemasyarakatan;</li>
                                    <li>Mengembangkan kerja sama peningkatan mutu dengan berbagai pihak;</li>
                                    <li>Melaksanakan kegiatan pengembangan diri secara optimal</li>
                                </ol>
                            </div>
                        </div>
                    </div>
                </div>

                {{-- Tujuan --}}
                <div class="row pb-3 pt-3">
                    <div class="col text-center">
                        <h2>Tujuan SMA Swasta Eria</h2>
                    </div>
                </div>
                <div class="row justify-content-md-center ">
                    <div class="col-lg-6">
                        <div class="card">
                            <div class="card-body">
                                <ol class="text-left pl-4">
                                    <li>Mempersiapkan siswa menjadi manusia berkualitas berIMTAQ dan memiliki integritas
                                        kebangsaan yang tinggi;</li>
                                    <li>Berfikir kritis, menguasai Iptek, Berwawasan global, Kreatif dan Mampu
                                        mengembangkan potensi diri; </li>
                                    <li>Meningkatkan jumlah lulusan yang dapat diterima pada perguruan tinggi negeri
                                        favorit;</li>
                                    <li>Unggul dalam bidang seni dan olahraga serta memiliki kompetisi dalam berbahasa
                                        inggris;</li>
                                </ol>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Lulusan -->
        <section id="lulusan" class="lulusan pb-4 bg-light">
            <div class="container ">
                <div class="row mb-4 pt-4">
                    <div class="col text-center">
                        <h3>Siswa-Siswi SMA ERIA Lulus PTN Jalur SNMPTN</h3>
                        <h3>Tahun Akademik 2020/2021</h3>
                    </div>
                </div>

                <div class="row mb-3">                    
                    <a href="/lulusan" class="btn btn-secondary ml-auto">Lihat Selengkapnya</a>
                </div>

                <div class="row text-center">
                    <div class="col-md">
                        <div class="card" ">
                            <img src=" img/raraa.jpg" class="card-img-top pt-4" alt="gambar"
                            style="width: 50%; display: block; margin-left: auto; margin-right: auto; ">
                            <div class="card-body">
                                <h5 style="font-weight: bold">Rara Ariefftah</h5>
                                <p>JURUSAN</p>
                            </div>
                        </div>
                    </div>

                    <div class="col-md">
                        <div class="card" ">
                            <img src=" img/raraa.jpg" class="card-img-top pt-4" alt="gambar"
                            style="width: 50%; display: block; margin-left: auto; margin-right: auto;">
                            <div class="card-body">
                                <h5 style="font-weight: bold">Rara Ariefftah</h5>
                                <p>JURUSAN</p>
                            </div>
                        </div>
                    </div>

                    <div class="col-md">
                        <div class="card" ">
                            <img src=" img/raraa.jpg" class="card-img-top pt-4" alt="gambar"
                            style="width: 50%; display: block; margin-left: auto; margin-right: auto; ">
                            <div class="card-body">
                                <h5 style="font-weight: bold">Rara Ariefftah</h5>
                                <p>JURUSAN</p>
                            </div>
                        </div>
                    </div>

                    <div class="col-md">
                        <div class="card" ">
                            <img src=" img/raraa.jpg" class="card-img-top pt-4" alt="gambar"
                            style="width: 50%; display: block; margin-left: auto; margin-right: auto;">
                            <div class="card-body">
                                <h5 style="font-weight: bold">Rara Ariefftah</h5>
                                <p>JURUSAN</p>
                            </div>
                        </div>
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
