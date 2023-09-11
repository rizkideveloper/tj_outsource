<!-- Sidebar -->
<ul class="navbar-nav sidebar sidebar-light accordion" id="accordionSidebar">
    <a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.html">
        <div class="sidebar-brand-icon">
            <img src="<?= base_url('assets/'); ?>img/logo/tj2.png">
        </div>
        <div class="sidebar-brand-text mx-3">Outsourcing</div>
    </a>
    <hr class="sidebar-divider my-0">
    <li class="nav-item">
        <a class="nav-link" href="<?= base_url('Halaman_utama'); ?>">
            <i class="fas fa-fw fa-home"></i>
            <span>Halaman Utama</span></a>
    </li>
    <hr class="sidebar-divider">
    <div class="sidebar-heading">
        Manajemen Data
    </div>
    <li class="nav-item">
        <a class="nav-link" href="<?= base_url('Pengguna'); ?>">
            <i class="fas fa-fw fa-user"></i>
            <span>Data Pengguna</span>
        </a>
    </li>
    <li class="nav-item">
        <a class="nav-link" href="<?= base_url('Perusahaan'); ?>">
            <i class="fas fa-fw fa-handshake"></i>
            <span>Data Perusahaan</span>
        </a>
    </li>
    <!-- <li class="nav-item">
        <a class="nav-link">
            <i class="fas fa-fw fa-users"></i>
            <span>Data Pegawai</span>
        </a>
    </li> -->
    <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseBootstrap" aria-expanded="true" aria-controls="collapseBootstrap">
            <i class="fas fa-fw fa-users"></i>
            <span>Data Sequrity</span>
        </a>
        <div id="collapseBootstrap" class="collapse" aria-labelledby="headingBootstrap" data-parent="#accordionSidebar">
            <div class="bg-white py-2 collapse-inner rounded">
                <h6 class="collapse-header">Jabatan</h6>
                <a class="collapse-item" href="<?= base_url('Korlap') ?>">Koordinator Lapangan</a>
                <a class="collapse-item" href="<?= base_url('Danru') ?>">Komandan Regu</a>
                <a class="collapse-item" href="<?= base_url('Anggota') ?>">Anggota</a>
            </div>
        </div>
    </li>

    <li class="nav-item">
        <a class="nav-link" href="<?= base_url('Kriteria'); ?>">
            <i class="fas fa-fw fa-list"></i>
            <span>Data Kriteria</span>
        </a>
    </li>
    <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseBootstrap1" aria-expanded="true" aria-controls="collapseBootstrap">
            <i class="fas fa-fw fa-list"></i>
            <span>Data Subkriteria</span>
        </a>
        <div id="collapseBootstrap1" class="collapse" aria-labelledby="headingBootstrap" data-parent="#accordionSidebar">
            <div class="bg-white py-2 collapse-inner rounded">
                <h6 class="collapse-header">Jabatan</h6>
                <a class="collapse-item" href="<?= base_url('Subkriteria_korlap') ?>">Koordinator Lapangan</a>
                <a class="collapse-item" href="<?= base_url('Subkriteria_danru_anggota') ?>">Danru & Anggota</a>
            </div>
        </div>
    </li>

    <hr class="sidebar-divider">
    <div class="sidebar-heading">
        Manajemen Penilaian
    </div>
    <li class="nav-item">
        <a class="nav-link" href="<?= base_url('Periode_penilaian'); ?>">
            <i class="fas fa-fw fa-star"></i>
            <span>Periode Penilaian</span>
        </a>
    </li>
    <li class="nav-item">
        <a class="nav-link" href="charts.html">
            <i class="fas fa-fw fa-star"></i>
            <span>Penilaian</span>
        </a>
    </li>
    <hr class="sidebar-divider">
</ul>
<!-- Sidebar -->