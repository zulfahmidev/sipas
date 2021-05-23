<!-- Sidebar -->
<ul class="navbar-nav bg-primary sidebar sidebar-dark accordion" id="accordionSidebar">

  <!-- Sidebar - Brand -->
  <a class="sidebar-brand d-flex align-items-center justify-content-center" href="">
    <div class="sidebar-brand-icon">
      <i class="fas fa-mail-bulk"></i>
    </div>
    <div class="sidebar-brand-text mx-3">PERSURATAN PNBP<sup>MA-RI</sup></div>
  </a>


  <!-- Divider -->
  <hr class="sidebar-divider">

  <!-- Nav Item - Pages Collapse Menu Blog -->
  <li class="nav-item">
    <a class="nav-link pb-2 collapsed" href="#" data-toggle="collapse" data-target="#collapsePengaturan" aria-expanded="true" aria-controls="collapsePengaturan">
      <i class="fas fa-fw fa-cogs"></i>
      <span>Pengaturan</span>
    </a>
    <div id="collapsePengaturan" class="collapse" aria-labelledby="headingPengaturan" data-parent="#accordionSidebar">
      <div class="bg-white py-2 collapse-inner rounded">
        <?php if ($user['role_id'] == 1) : ?>
          <a class="collapse-item" href="<?= base_url('pengaturan/role') ?>">Role</a>
          <a class="collapse-item" href="<?= base_url('pengaturan/pengguna') ?>">Pengguna</a>
        <?php endif; ?>
        <a class="collapse-item" href="<?= base_url('pengaturan/klasifikasi') ?>">Klasifikasi</a>
        <a class="collapse-item" href="<?= base_url('pengaturan/sifat') ?>">Sifat Surat</a>
        <a class="collapse-item" href="<?= base_url('pengaturan/tampilan') ?>">Tampilan</a>
      </div>
    </div>
  </li>

  <?php if ($user['role_id'] == 1) : ?>
    <!-- Nav Item - Pages Collapse Menu Blog -->
    <li class="nav-item">
      <a class="nav-link" href="<?= base_url('database') ?>">
        <i class="fas fa-fw fa-database"></i>
        <span>Database</span></a>
      </>
    <?php endif; ?>

    <!-- Divider -->
    <hr class="sidebar-divider">

    <!-- Heading -->
    <div class="sidebar-heading">
      Staff
    </div>

    <!-- Nav Item - Dashboard -->
    <li class="nav-item">
      <a class="nav-link pb-0" href="<?= base_url('home/index') ?>">
        <i class="fas fa-fw fa-chart-bar"></i>
        <span>Dashboard</span></a>
    </li>

    <!-- Nav Item - Pages Collapse Menu Blog -->
    <li class="nav-item">
      <a class="nav-link pb-0 collapsed" href="#" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
        <i class="fas fa-fw fa-mail-bulk"></i>
        <span>Transaksi Surat</span>
      </a>
      <div id="collapseOne" class="collapse" aria-labelledby="headingOne" data-parent="#accordionSidebar">
        <div class="bg-white py-2 collapse-inner rounded">
          <a class="collapse-item" href="<?= base_url('buat-surat') ?>">Buat Surat</a>
          <a class="collapse-item" href="<?= base_url('surat-masuk') ?>">Surat Masuk</a>
          <a class="collapse-item" href="<?= base_url('surat-keluar') ?>">Surat Keluar</a>
        </div>
      </div>
    </li>

    <!-- Nav Item - Pages Collapse Menu Blog -->
    <li class="nav-item">
      <a class="nav-link pb-0 collapsed" href="#" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="true" aria-controls="collapseTwo">
        <i class="fas fa-fw fa-book"></i>
        <span>Galeri File</span>
      </a>
      <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
        <div class="bg-white py-2 collapse-inner rounded">
          <a class="collapse-item" href="<?= base_url('galeri/sm') ?>">Surat Masuk</a>
          <a class="collapse-item" href="<?= base_url('galeri/sk') ?>">Surat Keluar</a>
        </div>
      </div>
    </li>

    <!-- Nav Item - Pages Collapse Menu Blog -->
    <li class="nav-item">
      <a class="nav-link pb-0 collapsed" href="#" data-toggle="collapse" data-target="#collapseThree" aria-expanded="true" aria-controls="collapseThree">
        <i class="fas fa-fw fa-book "></i>
        <span>Laporan</span>
      </a>
      <div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#accordionSidebar">
        <div class="bg-white py-2 collapse-inner rounded">
          <a class="collapse-item" href="<?= base_url('laporan/surat-masuk') ?>">Surat Masuk</a>
          <a class="collapse-item" href="<?= base_url('laporan/surat-keluar') ?>">Surat Keluar</a>
        </div>
      </div>
    </li>

    <li class="nav-item">
      <a class="nav-link collapsed pb-0" href="<?= base_url('user'); ?>">
        <i class="fas fa-fw fa-user"></i>
        <span>User Profile</span>
      </a>
    </li>

    <li class="nav-item">
      <a class="nav-link collapsed pb-0" href="<?= base_url('user/ubah-password'); ?>">
        <i class="fas fa-fw fa-key"></i>
        <span>Ubah Password</span>
      </a>
    </li>

    <li class="nav-item">
      <a class="nav-link collapsed" data-toggle="modal" data-target="#logoutModal">
        <i class="fas fa-fw fa-sign-out-alt"></i>
        <span>Logout</span>
      </a>
    </li>

    <!-- Divider -->
    <hr class="sidebar-divider d-none d-md-block">

    <!-- Sidebar Toggler (Sidebar) -->
    <div class="text-center d-none d-md-inline">
      <button aria-label="toggler" class="rounded-circle border-0" id="sidebarToggle"></button>
    </div>

</ul>
<!-- End of Sidebar -->