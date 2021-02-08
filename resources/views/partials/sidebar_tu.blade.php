<aside class="main-sidebar sidebar-light-primary elevation-5" style="background-color: rgb(255, 255, 255)">
    <!-- Brand Logo -->
    <a href="#" class="brand-link">
        <img src="{{ asset('/img/logoeria.png')}}" alt="AdminLTE Logo" class="brand-image">
        <span class="brand-text font-weight-dark"><strong>SMA Swasta Eria</strong></span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
        <!-- Sidebar user panel (optional) -->
        {{-- <div class="user-panel mt-3 pb-3 mb-3 d-flex ">
            <div class="image">
                <img src="/img/logoeria.png" class="img-3 " alt="User Image">

            </div>
            <div class="info">
                <a href="#" class="d-block">Tata Usaha</a>

            </div>
        </div> --}}
        <div class="user-panel mt-3 pb-3 mb-3 d-flex">
            <div class="image">
                <img src="/img/user3.png" class="img-circle elevation-2 mt-1" alt="User Image" style="width: 60px;">
            </div>
            <div class="info">
                <p class="font-weight-bold">Tata Usaha</p>
                <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
            </div>
        </div>
        <!-- Sidebar Menu -->
        <nav class="mt-2">
            <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">

                <!-- 1 -->
                <li class="nav-header">DAFTAR MENU</li>
                <li class="nav-item">
                    <a href="/tata_usaha/profil" class="nav-link" action="">
                        <i class="nav-icon fas fa-user"></i>
                        <p> Profil </p>
                    </a>
                </li>

                {{-- 2 --}}
                <li class="nav-item">
                    <a href="/tata_usaha" class="nav-link" action="">
                        <i class="nav-icon fas fa-tachometer-alt"></i>
                        <p> Dashboard </p>
                    </a>
                </li>

                <!-- 3  -->
                <li class="nav-item">
                    <a href="/tata_usaha/data_pendaftar" class="nav-link">
                        <i class="nav-icon fas fa-clipboard-list"></i>
                        <p> Data Pendaftar </p>
                    </a>
                </li>
            </ul>
        </nav>
        <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
</aside>
