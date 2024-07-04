<!-- Sidebar -->
<ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar" >

<!-- Sidebar - Brand -->
<a class="sidebar-brand d-flex align-items-center justify-content-center">
    <div class="sidebar-brand-icon rotate-n-15" >
        <i class="fas fa-laugh-wink" ></i>
    </div>
    <div class="sidebar-brand-text mx-3" > Informasi Kehamilan<sup></sup></div>
</a>

<!-- Divider -->
<hr class="sidebar-divider my-0">

<!-- Nav Item - Dashboard -->
<li class="nav-item active">
    <a class="nav-link" href="<?= base_url('Beranda')?>">
        <i class="fas fa-fw fa-tachometer-alt"></i>
        <span>Dashboard</span></a>
</li>

<!-- Divider -->
<hr class="sidebar-divider">

<!-- Heading -->


<!-- Nav Item - Pages Collapse Menu -->
<li class="nav-item">
    <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseTwo"
        aria-expanded="true" aria-controls="collapseTwo">
        <i class="fas fa-exclamation-triangle"></i>
        <span>Tanda Bahaya Kehamilan</span>
    </a>
    <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
        <div class="bg-white py-2 collapse-inner rounded">            
            <a class="collapse-item" href="<?= base_url('BahayaRingan')?>">Ringan</a>
            <a class="collapse-item" href="<?= base_url('BahayaBerat')?>">Berat</a>
            <a class="collapse-item" href="<?= base_url('BahayaLainnya')?>">Lainnya</a>
        </div>
    </div>
</li>

<!-- Nav Item - Utilities Collapse Menu -->

<li class="nav-item">
    <a class="nav-link" href="<?= base_url('Konsultasi')?>">
        <i class="	far fa-comment-alt"></i>
        <span> Chat Konsultasi</span></a>
</li>


<!-- Divider -->
<hr class="sidebar-divider">


<!-- Nav Item - Pages Collapse Menu -->


<!-- Nav Item - Charts -->

<li class="nav-item">
    <a class="nav-link" href="<?= base_url('TambahAkun/pasien')?>">
        <i class="far fa-calendar-alt"></i>
        <span>Riwayat Periksa</span></a>
</li>

<li class="nav-item">
    <a class="nav-link" href="<?= base_url('JadwalPeriksa')?>">
        <i class="far fa-calendar-alt"></i>
        <span>Tentang</span></a>
</li>

<!-- Nav Item - Tables -->

<hr class="sidebar-divider">

<!-- Nav Item - Charts -->
<li class="nav-item">
    <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseTwo"
        aria-expanded="true" aria-controls="collapseTwo">
        <i class="fas fa-user-plus"></i>
        <span>User</span>
    </a>
    <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
        <div class="bg-white py-2 collapse-inner rounded">            
            <a class="collapse-item" href="<?= base_url('TambahAkun')?>">Tambah Akun</a>
            <a class="collapse-item" href="<?= base_url('Profil')?>">Profil</a>
            <a class="collapse-item" href="<?= base_url('Login/logout')?>">Logout</a>
        </div>
    </div>
</li>



<!-- Divider --> 
<hr class="sidebar-divider d-none d-md-block">

<!-- Sidebar Toggler (Sidebar) -->
<div class="text-center d-none d-md-inline">
    <button class="rounded-circle border-0" id="sidebarToggle"></button>
</div>



</ul>
<!-- End of Sidebar -->
