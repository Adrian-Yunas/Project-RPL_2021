<nav class="navbar navbar-vertical fixed-left navbar-expand-md navbar-light" id="sidenav-main">
  <div class="container-fluid">
    <!-- Toggler -->
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#sidenav-collapse-main" aria-controls="sidenav-main" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <!-- Brand -->
    <a class="navbar-brand" style="text-transform: uppercase;">
      Surat FTI
    </a>

    <!-- Collapse -->
    <div class="collapse navbar-collapse" id="sidenav-collapse-main">
      <!-- Collapse header -->
      <div class="navbar-collapse-header d-md-none">
        <div class="row">
          <div class="col-6 collapse-brand">
            <a href="">
              Menu Surat FTI
            </a>
          </div>
          <div class="col-6 collapse-close">
            <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#sidenav-collapse-main" aria-controls="sidenav-main" aria-expanded="false" aria-label="Toggle sidenav">
              <span></span>
              <span></span>
            </button>
          </div>
        </div>
      </div>
      <!-- Form -->
      <!-- Navigation -->
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link" href="<?php echo base_url('admin') ?>"> <i class="ni ni-tv-2"></i> Dashboard
          </a>
        </li>
        <li class="nav-item">
          <?php
          $ambil = $this->db->query('SELECT * FROM tb_sementara');
          $baris = $ambil->num_rows();
          if ($baris > 0) {
          ?>
            <a class="nav-link" href="<?php echo base_url('admin/notif') ?>"> <i class="ni ni-bell-55"></i> Notifikasi (<?php echo $baris ?>)
            </a>
          <?php } else { ?>
            <a class="nav-link" href="<?php echo base_url('admin/notif') ?>"> <i class="ni ni-bell-55"></i> Notifikasi </a>
          <?php } ?>
        </li>
        <li class="nav-item">
          <a class="nav-link" id="navv" href="<?php echo base_url('admin/daftarSiswa') ?>">
            <i class="ni ni-paper-diploma"></i> Daftar Surat Mahasiswa
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link" id="navv" href="<?php echo base_url('admin/daftarGuru') ?>">
            <i class="ni ni-paper-diploma"></i> Daftar Surat Dosen
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link" id="navv" href="<?php echo base_url('admin/') ?>">
            <i class="ni ni-paper-diploma"></i> Membuat sk Dekan
          </a>
        </li>
        <a class="nav-link " href="<?php echo base_url('admin/daftarBerkas') ?>">
          <i class="ni ni-folder-17"></i> Rekap Surat
        </a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="<?php echo base_url('login/logout') ?>">
            <i class="ni ni-user-run"></i> Logout
          </a>
        </li>
      </ul>
      <!-- Divider -->
      <!-- <hr class="my-3"> -->
      <!-- Heading -->
      <!-- <h6 class="navbar-heading text-muted">Documentation</h6> -->
      <!-- Navigation -->
      <!-- <ul class="navbar-nav mb-md-3">
          <li class="nav-item">
            <a class="nav-link" href="https://demos.creative-tim.com/argon-dashboard/docs/getting-started/overview.html">
              <i class="ni ni-spaceship"></i> Getting started
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="https://demos.creative-tim.com/argon-dashboard/docs/foundation/colors.html">
              <i class="ni ni-palette"></i> Foundation
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="https://demos.creative-tim.com/argon-dashboard/docs/components/alerts.html">
              <i class="ni ni-ui-04"></i> Components
            </a>
          </li>
        </ul> -->
    </div>
  </div>
</nav>