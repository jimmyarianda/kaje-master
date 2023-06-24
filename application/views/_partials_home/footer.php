<?php
defined('BASEPATH') or exit('No direct script access allowed');
?>

<!-- Footer Start -->
<div class="footer wow fadeIn" data-wow-delay="0.3s">
    <div class="container footer-menu">
        <div class="f-menu">
            <a href="<?= site_url()?>">Beranda</a>
            <a href="<?= site_url('h_tentang')?>">Tentang</a>
            <a href="<?= site_url('h_project')?>">Project</a>
            <a href="<?= site_url('h_produk')?>">Produk</a>
            <a href="<?= site_url('h_berita')?>">Berita & CSR</a>
            <a href="<?= site_url('h_kontak')?>">Kontak</a>
        </div>
    </div>
    <div class="container copyright">
        <div class="row">
            <div class="col-md-12">
                <p><a href="<?= site_url()?>">&copy;Copyright <?= date('Y'); ?> | PT Kunango Jantan Group.</a> All Right
                    Reserved.</p>
            </div>
            <!-- <div class="col-md-6">
                <p>Designed By <a href="https://htmlcodex.com">IT KAJE</a></p>
            </div> -->
        </div>
    </div>
</div>
<!-- Footer End -->

