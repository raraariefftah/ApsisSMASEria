@extends('halaman_utama.awal')

@section('content')

<!-- Jumbotron -->
<div class="jumbotron jumbotron-fluid" style="background-image: url(/img/eria.jpg)">
    <div class="container text-center">
        {{-- <img src="/img/logoeria.png" width="20%" height="25%"> --}}
    </div>
</div>

<!-- sambutan -->
<section id="sambutan" class="sambutan pt-5 pb-5 bg-light">
    <div class="container">
        <div class="row mb-3">
            <div class="col text-center">
                <h4><strong>Sambutan Kepala Sekolah</strong></h4>
            </div>
        </div>
        <div class="row  justify-content-center">
            <img src="/img/logoeria.png" class="mb-4" alt="image" style="width: 150px; display: block; ">
        </div>
        <div class="row text-center">
            <div class="col-md-8 offset-md-2 text-justify ">
                <h5 class="text-center font-weight-bold">Drs. Khoiruddin Hasibuan M.Pd</h5>
                <p id="kata">Sambutan dari kepala SMA Swasta Eria Medan sebagai lembaga
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
</section>

{{-- carousel atas --}}
<section id="vmt" class="vmt ">
    <div class="container">
        <div class="carousel slide" data-ride="carousel" id="carouselExampleIndicators">
            <ol class="carousel-indicators">
                <li data-slide-to="0" data-target="#carouselExampleIndicators"></li>
                <li data-slide-to="1" data-target="#carouselExampleIndicators"></li>
                <li data-slide-to="2" data-target="#carouselExampleIndicators"></li>
            </ol>
            <div class="carousel-inner">
                <div class="carousel-item active bg-white" id="satu">
                    <div class="carousel-caption d-none d-md-block">
                        <h4><strong>Visi SMA Swasta Eria</strong></h4>
                        <p>Terwujudnya generasi yang cerdas, berprestasi, unggul, disiplin dan
                            berwawasan global didasari IMTAQ</p>
                    </div>
                </div>
                <div class="carousel-item bg-white" id="dua">
                    <div class="carousel-caption d-none d-md-block">
                        <h4><strong>Misi SMA Swasta Eria</strong></h4>
                        <ol class="text-left">
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
                <div class="carousel-item bg-white" id="tiga">
                    <div class="carousel-caption d-none d-md-block">
                        <h4><strong>Tujuan SMA Swasta Eria</strong></h4>
                        <ol class="text-left">
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
            <a class="carousel-control-prev" data-slide="prev" href="#carouselExampleIndicators" role="button">
                <span aria-hidden="true" class="carousel-control-prev-icon"></span>
                <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" data-slide="next" href="#carouselExampleIndicators" role="button"><span
                    aria-hidden="true" class="carousel-control-next-icon"></span> <span class="sr-only">Next</span></a>
        </div>
    </div>
</section>
{{-- end carousel atas --}}

<!-- Lulusan -->
<section id="lulusan" class="lulusan pt-5 pb-5 bg-light">
    <div class="container ">
        <div class="row mb-3">
            <div class="col text-center ">
                <h4><strong>Siswa-Siswi SMA SWASTA ERIA Lulus PTN Jalur SNMPTN</strong></h4>
                <h4><strong>Tahun Akademik 2020/2021</strong></h4>
            </div>
        </div>

        <div class="row pb-4 pt-3">
            <a href="/halaman_utama/lulusan" class="btn btn-secondary ml-auto"
                style="background-color: rgb(28, 47, 97);">
                Lihat Selengkapnya
            </a>
        </div>

        <div class="row text-center">
            <div class="col-md">
                <div class="card">
                    <img src="/img/raraa.jpg" class="card-img-top pt-4" alt="gambar"
                        style="width: 50%; display: block; margin-left: auto; margin-right: auto; ">
                    <div class="card-body">
                        <h5 style="font-weight: bold">Rara Ariefftah</h5>
                        <h5 style="font-weight: bold">Universitas Diponegoro</h5>
                        <p>Informatika</p>
                    </div>
                </div>
            </div>

            <div class="col-md">
                <div class="card">
                    <img src="/img/raraa.jpg" class="card-img-top pt-4" alt="gambar"
                        style="width: 50%; display: block; margin-left: auto; margin-right: auto;">
                    <div class="card-body">
                        <h5 style="font-weight: bold">Rara Ariefftah</h5>
                        <h5 style="font-weight: bold">Universitas Diponegoro</h5>
                        <p>Informatika</p>
                    </div>
                </div>
            </div>

            <div class="col-md">
                <div class="card">
                    <img src="/img/raraa.jpg" class="card-img-top pt-4" alt="gambar"
                        style="width: 50%; display: block; margin-left: auto; margin-right: auto; ">
                    <div class="card-body">
                        <h5 style="font-weight: bold">Rara Ariefftah</h5>
                        <h5 style="font-weight: bold">Universitas Diponegoro</h5>
                        <p>Informatika</p>
                    </div>
                </div>
            </div>

            <div class="col-md">
                <div class="card">
                    <img src="/img/raraa.jpg" class="card-img-top pt-4" alt="gambar"
                        style="width: 50%; display: block; margin-left: auto; margin-right: auto;">
                    <div class="card-body">
                        <h5 style="font-weight: bold">Rara Ariefftah</h5>
                        <h5 style="font-weight: bold">Universitas Diponegoro</h5>
                        <p>Informatika</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

@endsection
