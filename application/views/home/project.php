<?php
defined('BASEPATH') or exit('No direct script access allowed');
?>

<!-- Page Header Start -->
<div class="page-header">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <h2>Project Perusahaan</h2>
            </div>
            <div class="col-12">
                <a href="">PT. Kunango Jantan Group</a>
            </div>
        </div>
    </div>
</div>
<!-- Page Header End -->


<!-- Portfolio Start -->
<div class="portfolio">
    <div class="container">
        <!-- <div class="section-header text-center">
            <p>Our Projects</p>
            <h2>Visit Our Projects</h2>
        </div> --> 
        <div class="row">
            <div class="col-12">
                <ul id="portfolio-flters">
                    <li data-filter="*" class="filter-active">All</li>
                    <?php foreach ($project as $row) { ?>
                        <li data-filter=".<?= $row['status']; ?>" class="filter-active"><?= $row['status']; ?></li>
                            <?php } ?>
                </ul>
            </div>
        </div>
        <div class="row portfolio-container">
            
        <?php foreach ($berjalan as $row) { ?>
            <div class="col-lg-4 col-md-6 col-sm-12 portfolio-item Berjalan wow fadeInUp" data-wow-delay="0.1s">
                <div class="portfolio-warp">
                    <div class="portfolio-img">
                        <img src="<?= site_url() ?>assets/assets_home/img/<?= $row['foto']; ?>" alt="Image">
                        <div class="portfolio-overlay">
                            <p>
                            <?= $row['keterangan']; ?>
                            </p>
                        </div>
                    </div>
                    <div class="portfolio-text">
                        <h3><?= $row['nama_project']; ?></h3>
                        <a class="btn" href="<?= site_url() ?>assets/assets_home/img/<?= $row['foto']; ?>" data-lightbox="portfolio">+</a>
                    </div>
                </div>
            </div>
            <?php } ?>

            <?php foreach ($selesai as $row) { ?>
            <div class="col-lg-4 col-md-6 col-sm-12 portfolio-item Selesai wow fadeInUp" data-wow-delay="0.1s">
                <div class="portfolio-warp">
                    <div class="portfolio-img">
                        <img src="<?= site_url() ?>assets/assets_home/img/<?= $row['foto']; ?>" alt="Image">
                        <div class="portfolio-overlay">
                            <p>
                            <?= $row['keterangan']; ?>
                            </p>
                        </div>
                    </div>
                    <div class="portfolio-text">
                        <h3><?= $row['nama_project']; ?></h3>
                        <a class="btn" href="<?= site_url() ?>assets/assets_home/img/<?= $row['foto']; ?>" data-lightbox="portfolio">+</a>
                    </div>
                </div>
            </div>
            <?php } ?>
            
            
        </div>
        <!-- <div class="row">
            <div class="col-12 load-more">
                <a class="btn" href="#">Load More</a>
            </div>
        </div> -->
    </div>
</div>
<!-- Portfolio End -->