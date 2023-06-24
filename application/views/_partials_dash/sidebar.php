<?php
defined('BASEPATH') or exit('No direct script access allowed');
?>

<nav class="sidebar sidebar-offcanvas">
  <ul class="nav">
    <?php if ($this->session->userdata('usr_level') === 'Admin') { ?>
      <li class="nav-item <?= $this->uri->segment(1) === 'dashboard' ? 'active' : '' ?>">
        <a class="nav-link" href="<?= site_url('dashboard'); ?>">
          <i class="icon-grid menu-icon"></i>
          <span class="menu-title">Dashboard</span>
        </a>
      </li>
      <li class="nav-item <?= $this->uri->segment(1) === 'd_home' ? 'active' : '' ?>">
        <a class="nav-link" href="<?= site_url('d_home'); ?>">
          <i class="icon-monitor menu-icon"></i>
          <span class="menu-title">Home</span>
        </a>
      </li>
      <li class="nav-item <?= $this->uri->segment(1) === 'd_tentang' ? 'active' : '' ?>">
        <a class="nav-link" href="<?= site_url('d_tentang'); ?>">
          <i class="icon-paper menu-icon"></i>
          <span class="menu-title">Tentang</span>
        </a>
      </li>
      <li class="nav-item <?= $this->uri->segment(1) === 'd_kategori' ? 'active' : '' ?>">
        <a class="nav-link" href="<?= site_url('d_kategori'); ?>">
          <i class="icon-paper menu-icon"></i>
          <span class="menu-title">Kategori</span>
        </a>
      </li>
      <li class="nav-item <?= $this->uri->segment(1) === 'd_project' ? 'active' : '' ?>">
        <a class="nav-link" href="<?= site_url('d_project'); ?>">
          <i class="icon-paper menu-icon"></i>
          <span class="menu-title">Project</span>
        </a>
      </li>
      <li class="nav-item <?= $this->uri->segment(1) === 'd_struktur' ? 'active' : '' ?>">
        <a class="nav-link" href="<?= site_url('d_struktur'); ?>">
          <i class="icon-paper menu-icon"></i>
          <span class="menu-title">Struktur</span>
        </a>
      </li>
      <li class="nav-item <?= $this->uri->segment(1) === 'd_testimoni' ? 'active' : '' ?>">
        <a class="nav-link" href="<?= site_url('d_testimoni'); ?>">
          <i class="icon-paper menu-icon"></i>
          <span class="menu-title">Testimoni</span>
        </a>
      </li>
      <li class="nav-item <?= $this->uri->segment(1) === 'd_berita' ? 'active' : '' ?>">
        <a class="nav-link" href="<?= site_url('d_berita'); ?>">
          <i class="icon-paper menu-icon"></i>
          <span class="menu-title">Berita & CSR</span>
        </a>
      </li>
      <li class="nav-item <?= $this->uri->segment(1) === 'd_kontak' ? 'active' : '' ?>">
        <a class="nav-link" href="<?= site_url('d_kontak'); ?>">
          <i class="icon-paper menu-icon"></i>
          <span class="menu-title">Kontak</span>
        </a>
      </li>
      <li class="nav-item <?= $this->uri->segment(1) === 'user' ? 'active' : '' ?>">
        <a class="nav-link" href="<?= site_url('user'); ?>">
          <i class="icon-cog menu-icon"></i>
          <span class="menu-title">Manajemen User</span>
        </a>
      </li>
    <?php } if ($this->session->userdata('usr_level') === 'User') { ?>
      <li class="nav-item <?= $this->uri->segment(1) === 'dashboard' ? 'active' : '' ?>">
        <a class="nav-link" href="<?= site_url('dashboard'); ?>">
          <i class="icon-grid menu-icon"></i>
          <span class="menu-title">Dashboard</span>
        </a>
      </li>
      <li class="nav-item <?= $this->uri->segment(1) === 'laporan' ? 'active' : '' ?>">
        <a class="nav-link" href="<?= site_url('laporan'); ?>">
          <i class="icon-paper-stack menu-icon"></i>
          <span class="menu-title">Laporan</span>
        </a>
      </li>
    <?php } ?>
  </ul>
</nav>