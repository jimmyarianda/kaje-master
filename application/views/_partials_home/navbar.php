<?php
defined('BASEPATH') or exit('No direct script access allowed');
?>

<!-- Top Bar Start -->
<div class="top-bar">
    <div class="container-fluid">
        <div class="row align-items-center">
            <div class="col-lg-4 col-md-12">
                <div class="logo">
                    <a href="<?= site_url() ?>">
                        <!-- <h1>PT. KAJE</h1> -->
                        <img src="<?= site_url() ?>assets/assets_home/img/logo-1.png" alt="Logo">
                    </a>
                </div>
            </div>
            <div class="col-lg-8 col-md-7 d-none d-lg-block">
                <div class="row">
                    <div class="col-4">
                        <div class="top-bar-item">
                            <div class="top-bar-icon">
                                <i class="flaticon-calendar"></i>
                            </div>
                            <div class="top-bar-text">
                                <h3>Jam Pelayanan</h3>
                                <p>Mon - Fri, 8:00 - 9:00</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-4">
                        <div class="top-bar-item">
                            <div class="top-bar-icon">
                                <i class="flaticon-call"></i>
                            </div>
                            <div class="top-bar-text">
                                <h3>Call Us</h3>
                                <p>+012 345 6789</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-4">
                        <div class="top-bar-item">
                            <div class="top-bar-icon">
                                <i class="flaticon-send-mail"></i>
                            </div>
                            <div class="top-bar-text">
                                <h3>Email Us</h3>
                                <p>info@example.com</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Top Bar End -->

<!-- Nav Bar Start -->
<div class="nav-bar">
    <div class="container-fluid">
        <nav class="navbar navbar-expand-lg bg-dark navbar-dark">
            <a href="#" class="navbar-brand">MENU</a>
            <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#navbarCollapse">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse justify-content-between" id="navbarCollapse">
                <div class="navbar-nav mr-auto">
                    <a class="nav-item nav-link <?= $this->uri->segment(1) === 'home' ? 'active' : '' ?>" href="<?= site_url(); ?>">Beranda</a>
                    <a class="nav-item nav-link <?= $this->uri->segment(1) === 'h_tentang' ? 'active' : '' ?>" href="<?= site_url('h_tentang'); ?>">Tentang</a>
                    <a class="nav-item nav-link <?= $this->uri->segment(1) === 'h_project' ? 'active' : '' ?>" href="<?= site_url('h_project'); ?>">Project</a>
                    <a class="nav-item nav-link <?= $this->uri->segment(1) === 'h_produk' ? 'active' : '' ?>" href="<?= site_url('h_produk'); ?>">Produk</a>
                    <a class="nav-item nav-link <?= $this->uri->segment(1) === 'h_berita' ? 'active' : '' ?>" href="<?= site_url('h_berita'); ?>">Berita & CSR</a>  
                    <a class="nav-item nav-link <?= $this->uri->segment(1) === 'h_kontak' ? 'active' : '' ?>" href="<?= site_url('h_kontak'); ?>">Kontak</a>
                    <!-- <a href="h_berita" class="nav-item nav-link">Berita & CSR</a> -->
                    <!-- <div class="nav-item dropdown">
                        <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown">Pages</a>
                        <div class="dropdown-menu">
                            <a href="blog.html" class="dropdown-item">Blog Page</a>
                            <a href="single.html" class="dropdown-item">Single Page</a>
                        </div>
                    </div> -->
                </div>
                <div class="ml-auto">
                    <a class="btn" href="<?= site_url('login')?>">Login</a>
                </div>
            </div>
        </nav>
    </div>
</div>
<!-- Nav Bar End -->