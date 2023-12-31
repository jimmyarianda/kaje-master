<?php
defined('BASEPATH') or exit('No direct script access allowed');
?>

<!-- Page Header Start -->
<div class="page-header">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <h2>Berita & CSR</h2>
            </div>
            <div class="col-12">
                <a href="">PT. Kunango Jantan Group</a>
            </div>
        </div>
    </div>
</div>
<!-- Page Header End -->


<!-- Blog Start -->
<div class="blog">
    <div class="container">
        <!-- <div class="section-header text-center">
            <p>Latest Blog</p>
            <h2>Latest From Our Blog</h2>
        </div> -->
        <div class="row blog-page">
        <?php foreach ($berita as $row) { ?>
            <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.2s">
                <div class="blog-item">
                    <div class="blog-img">
                        <img src="<?= site_url()?>assets/assets_home/img/<?= $row['foto']; ?>" alt="Image">
                    </div>
                    <div class="blog-title">
                        <h3><?= $row['perusahaan']; ?></h3>
                        <a class="btn" href="<?= site_url('h_berita/detail/')?><?= $row['id_berita']; ?>">+</a>
                    </div>
                    <div class="blog-meta">
                        <p>Uploded By<a><?= $row['user']; ?></a></p>
                        <p><a><?= $row['created_at']; ?></a></p>
                    </div>
                    <div class="blog-text">
                        <p>
                        <?= $row['judul_berita']; ?>
                        </p>
                    </div>
                </div>
            </div>
            <?php } ?>
        </div>
        <!-- <div class="row">
            <div class="col-12">
                <ul class="pagination justify-content-center">
                    <li class="page-item disabled"><a class="page-link" href="#">Previous</a></li>
                    <li class="page-item"><a class="page-link" href="#">1</a></li>
                    <li class="page-item active"><a class="page-link" href="#">2</a></li>
                    <li class="page-item"><a class="page-link" href="#">3</a></li>
                    <li class="page-item"><a class="page-link" href="#">Next</a></li>
                </ul>
            </div>
        </div> -->
    </div>
</div>
<!-- Blog End -->