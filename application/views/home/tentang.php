<?php
defined('BASEPATH') or exit('No direct script access allowed');
?>

<!-- Page Header Start -->
<div class="page-header">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <h2>Tentang Perusahaan</h2>
            </div>
            <div class="col-12">
                <a href="">PT. Kunango Jantan Group</a>
            </div>
        </div>
    </div>
</div>
<!-- Page Header End -->

<!-- About Start -->
<div class="about wow fadeInUp" data-wow-delay="0.1s">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-5 col-md-6">
                <div class="about-img">
                    <img src="<?= site_url()?>assets/assets_home/img/<?= $tentang['t_pic']; ?>" alt="Image">
                </div>
            </div>
            <div class="col-lg-7 col-md-6">
                <div class="section-header text-left">
                    <p><?= $tentang['t_text1']; ?></p>
                    <h2><?= $tentang['t_text2']; ?></h2>
                </div>
                <div class="about-text">
                    <p><?= $tentang['t_text3']; ?></p>
                    <a class="btn" href="">Learn More</a>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- About End -->

<!-- Fact Start -->
<div class="fact">
    <div class="container-fluid">
        <div class="row counters">
            <div class="col-md-6 fact-left wow slideInLeft">
                <div class="row">
                    <div class="col-6">
                        <div class="fact-icon">
                            <i class="flaticon-worker"></i>
                        </div>
                        <div class="fact-text">
                            <h2 data-toggle="counter-up"><?= $tentang['t_pekerja']; ?></h2>
                            <p>Pekerja</p>
                        </div>
                    </div>
                    <div class="col-6">
                        <div class="fact-icon">
                            <i class="flaticon-building"></i>
                        </div>
                        <div class="fact-text">
                            <h2 data-toggle="counter-up"><?= $tentang['t_clients']; ?></h2>
                            <p>Clients</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-6 fact-right wow slideInRight">
                <div class="row">
                    <div class="col-6">
                        <div class="fact-icon">
                            <i class="flaticon-address"></i>
                        </div>
                        <div class="fact-text">
                            <h2 data-toggle="counter-up"><?= $tentang['t_projectsel']; ?></h2>
                            <p>Project Selesai</p>
                        </div>
                    </div>
                    <div class="col-6">
                        <div class="fact-icon">
                            <i class="flaticon-crane"></i>
                        </div>
                        <div class="fact-text">
                            <h2 data-toggle="counter-up"><?= $tentang['t_projectber']; ?></h2>
                            <p>Project Berjalan</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Fact End -->

<div class="map" id="map"></div>