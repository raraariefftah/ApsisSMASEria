        {{-- Navbar Halaman Utama --}}
        <nav class="navbar navbar-expand-lg navbar-white navbar-light topbar static-top shadow">
            <h5 id="navbar" href="#" class="mt-2" style="font-family: Arial; font-weight:bold"><img
                    src="/img/logoeria.png" alt="" width="40" height="42" class=" ml-3 mr-2">SMA SWASTA ERIA</h5>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
                aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav ml-auto">

                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                        <ul class="navbar-nav ml-auto">
                            <li class="nav-item">
                                <a class="nav-link" href="/admin/dashboard">Dashboard</a>
                            </li>
                            <li class="nav-item active">
                                <a class="nav-link" href="/halaman_utama/home">Home</a>
                            </li>
                            {{-- <li class="nav-item">
                                <a class="nav-link" href="/pendaftaran1">Pendaftaran</a>
                            </li> --}}
                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
                                    data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    Tentang
                                </a>
                                <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="/halaman_utama/profil">Profil</a>
                                </div>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="/halaman_utama/fasilitas">Fasilitas</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link mr-3" href="/login">Login</a>
                            </li>
                        </ul>
                    </div>
                </ul>
            </div>
        </nav>
