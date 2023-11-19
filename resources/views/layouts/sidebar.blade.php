<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="../../index3.html" class="brand-link">
        <img src="{{ asset('/') }}/template/dist/img/AdminLTELogo.png" alt="AdminLTE Logo"
            class="brand-image img-circle elevation-3" style="opacity: .8">
        <span class="brand-text font-weight-light">SIHADIR</span>
    </a>
    <!-- Sidebar -->
    <div class="sidebar">
        @auth
            @role('admin')
                <!-- Sidebar user (optional) -->
                <div class="user-panel mt-3 pb-3 mb-3 d-flex">
                    <div class="image">
                        <img src="{{ asset('/') }}/template/dist/img/user2-160x160.jpg" class="img-circle elevation-2"
                            alt="User Image">
                    </div>
                    <div class="info">
                        <a href="{{ url('/home') }}" class="d-block">{{ Auth::user()->name }}</a>
                    </div>
                </div>
                <!-- Sidebar Menu -->
                <nav class="mt-2">
                    <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu"
                        data-accordion="false">
                        <!-- Add icons to the links using the .nav-icon class
                                                with font-awesome or any other icon font library -->
                        <li class="nav-item">
                            <a href="{{ route('admin.dashboard') }}" class="nav-link">
                                <i class="nav-icon fas fa-tachometer-alt"></i>
                                <p>
                                    Dashboard
                                </p>
                            </a>
                        </li>
                        <li class="nav-header">DATA DOSEN</li>
                        <li class="nav-item">
                            <a href="{{ route('admin.dosen.index') }}" class="nav-link">
                                <i class="nav-icon far fa-user"></i>
                                <p>
                                    Dosen
                                </p>
                            </a>
                        </li>
                        <li class="nav-header">DATA MAHASISWA</li>
                        <li class="nav-item">
                            <a href="{{ route('admin.mahasiswa.index') }}" class="nav-link">
                                <i class="nav-icon fas fa-file"></i>
                                <p>Mahasiswa</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ route('admin.kelas.index') }}" class="nav-link">
                                <i class="nav-icon fas fa-file"></i>
                                <p>Kelas</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ route('admin.angkatan.index') }}" class="nav-link">
                                <i class="nav-icon fas fa-file"></i>
                                <p>Angkatan</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ route('admin.semester.index') }}" class="nav-link">
                                <i class="nav-icon fas fa-file"></i>
                                <p>Semester</p>
                            </a>
                        </li>
                        <li class="nav-header">PENJADWALAN</li>
                        <li class="nav-item">
                            <a href="{{ route('admin.penjadwalan.index') }}" class="nav-link">
                                <i class="nav-icon fas fa-file"></i>
                                <p>JADWAL</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ route('admin.matkul.index') }}" class="nav-link">
                                <i class="nav-icon fas fa-file"></i>
                                <p>MATA KULIAH</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ route('admin.jam.index') }}" class="nav-link">
                                <i class="nav-icon fas fa-file"></i>
                                <p>JAM</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ route('admin.ruangan.index') }}" class="nav-link">
                                <i class="nav-icon fas fa-file"></i>
                                <p>RUANGAN</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ route('admin.day.index') }}" class="nav-link">
                                <i class="nav-icon fas fa-file"></i>
                                <p>HARI</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ route('admin.week.index') }}" class="nav-link">
                                <i class="nav-icon fas fa-file"></i>
                                <p>MINGGU</p>
                            </a>
                        </li>
                    </ul>
                </nav>
                <!-- /.sidebar-menu -->
            @endrole
            @role('dosen')
                <!-- Sidebar user (optional) -->
                <div class="user-panel mt-3 pb-3 mb-3 d-flex">
                    <div class="image">
                        <img src="{{ asset('/') }}/template/dist/img/user2-160x160.jpg" class="img-circle elevation-2"
                            alt="User Image">
                    </div>
                    <div class="info">
                        <a href="{{ url('/home') }}" class="d-block">{{ Auth::user()->name }}</a>
                    </div>
                </div>
                <nav class="mt-2">
                    <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu"
                        data-accordion="false">
                        <!-- Add icons to the links using the .nav-icon class
                                                with font-awesome or any other icon font library -->
                        <li class="nav-item">
                            <a href="{{ route('dosen.dashboard') }}" class="nav-link">
                                <i class="nav-icon fas fa-tachometer-alt"></i>
                                <p>
                                    Dashboard
                                </p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ route('dosen.dashboard') }}" class="nav-link">
                                <i class="nav-icon fas fa-tachometer-alt"></i>
                                <p>
                                    Absensi
                                </p>
                            </a>
                        </li>
                        <li class="nav-header">DATA DOSEN</li>
                        <li class="nav-item">
                            <a href="{{ route('dosen.profil') }}" class="nav-link">
                                <i class="nav-icon far fa-user"></i>
                                <p>
                                    Profil
                                </p>
                            </a>
                        </li>
                    </ul>
                </nav>
            @endrole
            @role('mahasiswa')
                <!-- Sidebar user (optional) -->
                <div class="user-panel mt-3 pb-3 mb-3 d-flex">
                    <div class="image">
                        <img src="{{ asset('/') }}/template/dist/img/user2-160x160.jpg" class="img-circle elevation-2"
                            alt="User Image">
                    </div>
                    <div class="info">
                        <a href="{{ url('/home') }}" class="d-block">{{ Auth::user()->name }}</a>
                    </div>
                </div>
                <nav class="mt-2">
                    <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu"
                        data-accordion="false">
                        <!-- Add icons to the links using the .nav-icon class
                                                with font-awesome or any other icon font library -->
                        <li class="nav-item">
                            <a href="{{ route('mahasiswa.dashboard') }}" class="nav-link">
                                <i class="nav-icon fas fa-tachometer-alt"></i>
                                <p>
                                    Dashboard
                                </p>
                            </a>
                        </li>
                        <li class="nav-header">DATA MAHASISWA</li>
                        <li class="nav-item">
                            <a href="{{ route('mahasiswa.profil') }}" class="nav-link">
                                <i class="nav-icon far fa-user"></i>
                                <p>
                                    Profil
                                </p>
                            </a>
                        </li>
                    </ul>
                </nav>
            @endrole
        @endauth
    </div>
               
</aside>
