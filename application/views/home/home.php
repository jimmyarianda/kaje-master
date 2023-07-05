<?php
defined('BASEPATH') or exit('No direct script access allowed');
?>

<!-- Carousel Start -->
<div id="carousel" class="carousel slide" data-ride="carousel">
    <ol class="carousel-indicators">
        <li data-target="#carousel" data-slide-to="0" class="active"></li>
        <li data-target="#carousel" data-slide-to="1"></li>
        <li data-target="#carousel" data-slide-to="2"></li>
    </ol>
    <div class="carousel-inner">
        <div class="carousel-item active">
            <img src="<?= site_url() ?>assets/assets_home/img/<?= $home['h_pic1']?>" alt="Carousel Image">
            <div class="carousel-caption">
                <p class="animated fadeInRight"><?= $home['h_text1']; ?></p>
                <h1 class="animated fadeInLeft"><?= $home['h_text2']; ?></h1>
                <a class="btn animated fadeInUp" href="<?= site_url()?>"><?= $home['h_text3']; ?></a>
            </div>
        </div>
        <div class="carousel-item">
            <img src="<?= site_url() ?>assets/assets_home/img/<?= $home['h_pic2']?>" alt="Carousel Image">
            <div class="carousel-caption">
                <p class="animated fadeInRight"><?= $home['h_text1']; ?></p>
                <h1 class="animated fadeInLeft"><?= $home['h_text2']; ?></h1>
                <a class="btn animated fadeInUp" href="<?= site_url()?>"><?= $home['h_text3']; ?></a>
            </div>
        </div>
        <div class="carousel-item">
            <img src="<?= site_url() ?>assets/assets_home/img/<?= $home['h_pic2']?>" alt="Carousel Image">
            <div class="carousel-caption">
                <p class="animated fadeInRight"><?= $home['h_text1']; ?></p>
                <h1 class="animated fadeInLeft"><?= $home['h_text2']; ?></h1>
                <a class="btn animated fadeInUp" href="<?= site_url()?>"><?= $home['h_text3']; ?></a>
            </div>
        </div>
    </div>

    <!-- <div class="carousel-inner">
        <div class="carousel-item active">
            <?php foreach ($home as $hm) { ?>
            <img src="<?= site_url() ?>assets/assets_home/img/<?= $home['h_picbanner']; ?>" alt="Carousel Image">
            <div class="carousel-caption">
                <p class="animated fadeInRight"><?= $home['h_text1']; ?></p>
                <h1 class="animated fadeInLeft"><?= $home['h_text2']; ?></h1>
                <a class="btn animated fadeInUp" href="<?= site_url()?>"><?= $home['h_text3']; ?></a>
            </div>
            <?php } ?>
        </div>
    </div> -->

    <a class="carousel-control-prev" href="#carousel" role="button" data-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
    </a>
    <a class="carousel-control-next" href="#carousel" role="button" data-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
    </a>
</div>
<!-- Carousel End -->

<!-- Feature Start-->
<div class="feature wow fadeInUp" data-wow-delay="0.1s">
    <div class="container-fluid">
        <div class="row align-items-center">
            <div class="col-lg-4 col-md-12">
                <div class="feature-item">
                    <!-- <div class="feature-icon"> -->
                    <img src="assets/assets_home/img/icon3.png" alt="Image"><br>
                    <!-- </div> -->
                    <div class="feature-text">
                        <h3>Steel Division</h3>
                        <?php foreach ($steel as $row) { ?>
                        <li><a
                                href="<?= site_url('h_produk/detail/')?><?= $row['id_kategori']; ?>"><?= $row['nama_kategori']; ?></a>
                        </li>
                        <?php } ?>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-12">
                <div class="feature-item">
                    <!-- <div class="feature-icon"> -->
                    <img src="assets/assets_home/img/icon1.png" alt="Image">
                    <!-- </div> -->
                    <div class="feature-text">
                        <h3>Concrete Division</h3>
                        <?php foreach ($conce as $row) { ?>
                        <li><a
                                href="<?= site_url('h_produk/detail/')?><?= $row['id_kategori']; ?>"><?= $row['nama_kategori']; ?></a>
                        </li>
                        <?php } ?>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-12">
                <div class="feature-item">
                    <!-- <div class="feature-icon"> -->
                    <img src="assets/assets_home/img/icon2.png" alt="Image">
                    <!-- </div> -->
                    <div class="feature-text">
                        <h3>Galvanize Division</h3>
                        <?php foreach ($galvanize as $row) { ?>
                        <li><a
                                href="<?= site_url('h_produk/detail/')?><?= $row['id_kategori']; ?>"><?= $row['nama_kategori']; ?></a>
                        </li>
                        <?php } ?><br>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Feature End-->


<!-- About Start -->
<div class="about wow fadeInUp" data-wow-delay="0.1s">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-5 col-md-6">
                <div class="about-img">
                    <img src="<?= site_url() ?>assets/assets_home/img/<?= $tentang['t_pic']; ?>" alt="Image">
                </div>
            </div>
            <div class="col-lg-7 col-md-6">
                <div class="section-header text-left">
                    <p><?= $tentang['t_text1']; ?></p>
                    <h2><?= $tentang['t_text2']; ?></h2>
                </div>
                <div class="about-text">
                    <p><?= $tentang['t_text3']; ?></p>
                    <a class="btn" href="<?= site_url('h_tentang') ?>">Lihat Detail</a>
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

<!-- Service Start -->
<div class="service">
    <div class="container">
        <div class="section-header text-center">
            <p>PT. KUNANGO JANTAN GROUP</p>
            <h2>Project</h2>
        </div>
        <div class="row">
            <?php foreach ($project as $row) { ?>
            <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                <div class="service-item">
                    <div class="service-img">
                        <img src="<?= site_url() ?>assets/assets_home/img/<?= $row['foto']; ?>" alt="Image">
                        <div class="service-overlay">
                            <p>
                                <?= $row['keterangan']; ?>
                            </p>
                        </div>
                    </div>
                    <div class="service-text">
                        <h3><?= $row['nama_project']; ?></h3>
                        <a class="btn" href="<?= site_url() ?>assets/assets_home/img/<?= $row['foto']; ?>"
                            data-lightbox="service">+</a>
                    </div>
                </div>
            </div>
            <?php } ?>
        </div>
    </div>
</div>
<!-- Service End -->

<!-- Video Start -->
<div class="video wow fadeIn" data-wow-delay="0.1s">
    <div class="container">
        <button type="button" class="btn-play" data-toggle="modal" data-src="https://www.youtube.com/embed/qsbn2ocQrTc"
            data-target="#videoModal">
            <span></span>
        </button>
    </div>
</div>

<div class="modal fade" id="videoModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
    aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-body">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
                <!-- 16:9 aspect ratio -->
                <div class="embed-responsive embed-responsive-16by9">
                    <iframe class="embed-responsive-item" src="" id="video" allowscriptaccess="always"
                        allow="autoplay"></iframe>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Video End -->

<!-- Team Start -->
<div class="team">
    <div class="container">
        <div class="section-header text-center">
            <p>PT. KUNANGO JANTAN GROUP</p>
            <h2>Struktur Perusahaan</h2>
        </div>
        <div class="row">
            <?php foreach ($struktur as $row) { ?>
            <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                <div class="team-item">
                    <div class="team-img">
                        <img src="<?= site_url() ?>assets/assets_home/img/<?= $row['foto']; ?>" alt="Team Image">
                    </div>
                    <div class="team-text">
                        <h2><?= $row['nama']; ?></h2>
                        <p><?= $row['jabatan']; ?></p>
                    </div>
                    <!-- <div class="team-social">
                        <a class="social-tw" href=""><i class="fab fa-twitter"></i></a>
                        <a class="social-fb" href=""><i class="fab fa-facebook-f"></i></a>
                        <a class="social-li" href=""><i class="fab fa-linkedin-in"></i></a>
                        <a class="social-in" href=""><i class="fab fa-instagram"></i></a>
                    </div> -->
                </div>
            </div>
            <?php } ?>
        </div>
    </div>
</div>
<!-- Team End -->

<!-- FAQs Start -->
<!-- <div class="faqs">
    <div class="container">
        <div class="section-header text-center">
            <p>Frequently Asked Question</p>
            <h2>You May Ask</h2>
        </div>
        <div class="row">
            <div class="col-md-6">
                <div id="accordion-1">
                    <div class="card wow fadeInLeft" data-wow-delay="0.1s">
                        <div class="card-header">
                            <a class="card-link collapsed" data-toggle="collapse" href="#collapseOne">
                                Lorem ipsum dolor sit amet?
                            </a>
                        </div>
                        <div id="collapseOne" class="collapse" data-parent="#accordion-1">
                            <div class="card-body">
                                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus nec pretium
                                mi. Curabitur facilisis ornare velit non.
                            </div>
                        </div>
                    </div>
                    <div class="card wow fadeInLeft" data-wow-delay="0.2s">
                        <div class="card-header">
                            <a class="card-link collapsed" data-toggle="collapse" href="#collapseTwo">
                                Lorem ipsum dolor sit amet?
                            </a>
                        </div>
                        <div id="collapseTwo" class="collapse" data-parent="#accordion-1">
                            <div class="card-body">
                                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus nec pretium
                                mi. Curabitur facilisis ornare velit non.
                            </div>
                        </div>
                    </div>
                    <div class="card wow fadeInLeft" data-wow-delay="0.3s">
                        <div class="card-header">
                            <a class="card-link collapsed" data-toggle="collapse" href="#collapseThree">
                                Lorem ipsum dolor sit amet?
                            </a>
                        </div>
                        <div id="collapseThree" class="collapse" data-parent="#accordion-1">
                            <div class="card-body">
                                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus nec pretium
                                mi. Curabitur facilisis ornare velit non.
                            </div>
                        </div>
                    </div>
                    <div class="card wow fadeInLeft" data-wow-delay="0.4s">
                        <div class="card-header">
                            <a class="card-link collapsed" data-toggle="collapse" href="#collapseFour">
                                Lorem ipsum dolor sit amet?
                            </a>
                        </div>
                        <div id="collapseFour" class="collapse" data-parent="#accordion-1">
                            <div class="card-body">
                                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus nec pretium
                                mi. Curabitur facilisis ornare velit non.
                            </div>
                        </div>
                    </div>
                    <div class="card wow fadeInLeft" data-wow-delay="0.5s">
                        <div class="card-header">
                            <a class="card-link collapsed" data-toggle="collapse" href="#collapseFive">
                                Lorem ipsum dolor sit amet?
                            </a>
                        </div>
                        <div id="collapseFive" class="collapse" data-parent="#accordion-1">
                            <div class="card-body">
                                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus nec pretium
                                mi. Curabitur facilisis ornare velit non.
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div id="accordion-2">
                    <div class="card wow fadeInRight" data-wow-delay="0.1s">
                        <div class="card-header">
                            <a class="card-link collapsed" data-toggle="collapse" href="#collapseSix">
                                Lorem ipsum dolor sit amet?
                            </a>
                        </div>
                        <div id="collapseSix" class="collapse" data-parent="#accordion-2">
                            <div class="card-body">
                                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus nec pretium
                                mi. Curabitur facilisis ornare velit non.
                            </div>
                        </div>
                    </div>
                    <div class="card wow fadeInRight" data-wow-delay="0.2s">
                        <div class="card-header">
                            <a class="card-link collapsed" data-toggle="collapse" href="#collapseSeven">
                                Lorem ipsum dolor sit amet?
                            </a>
                        </div>
                        <div id="collapseSeven" class="collapse" data-parent="#accordion-2">
                            <div class="card-body">
                                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus nec pretium
                                mi. Curabitur facilisis ornare velit non.
                            </div>
                        </div>
                    </div>
                    <div class="card wow fadeInRight" data-wow-delay="0.3s">
                        <div class="card-header">
                            <a class="card-link collapsed" data-toggle="collapse" href="#collapseEight">
                                Lorem ipsum dolor sit amet?
                            </a>
                        </div>
                        <div id="collapseEight" class="collapse" data-parent="#accordion-2">
                            <div class="card-body">
                                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus nec pretium
                                mi. Curabitur facilisis ornare velit non.
                            </div>
                        </div>
                    </div>
                    <div class="card wow fadeInRight" data-wow-delay="0.4s">
                        <div class="card-header">
                            <a class="card-link collapsed" data-toggle="collapse" href="#collapseNine">
                                Lorem ipsum dolor sit amet?
                            </a>
                        </div>
                        <div id="collapseNine" class="collapse" data-parent="#accordion-2">
                            <div class="card-body">
                                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus nec pretium
                                mi. Curabitur facilisis ornare velit non.
                            </div>
                        </div>
                    </div>
                    <div class="card wow fadeInRight" data-wow-delay="0.5s">
                        <div class="card-header">
                            <a class="card-link collapsed" data-toggle="collapse" href="#collapseTen">
                                Lorem ipsum dolor sit amet?
                            </a>
                        </div>
                        <div id="collapseTen" class="collapse" data-parent="#accordion-2">
                            <div class="card-body">
                                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus nec pretium
                                mi. Curabitur facilisis ornare velit non.
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div> -->
<!-- FAQs End -->

<!-- Testimonial Start -->
<div class="testimonial wow fadeIn" data-wow-delay="0.2s">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <!-- <div class="testimonial-slider-nav"> -->
                    <!-- <?php foreach ($testimoni as $row1) { ?>
                    <div class="slider-nav"><img src="<?= site_url() ?>assets/assets_home/img/<?= $row1['foto']; ?>"
                            alt="Testimonial"></div>
                    <?php } ?>
                </div> -->
                <div class="testimonial-slider">
                    <?php foreach ($testimoni as $row2) { ?>
                    <div class="slider-item">
                        <h3><?= $row2['nama']; ?></h3>
                        <h4><?= $row2['perusahaan']; ?></h4>
                        <p><?= $row2['testi']; ?></p>
                    </div>
                    <?php } ?>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-12">
                
            </div>
        </div>
    </div>
</div>
<!-- Testimonial End -->

<!-- Blog Start -->
<div class="blog">
    <div class="container">
        <div class="section-header text-center">
            <p>PT. KUNANGO JANTAN GROUP</p>
            <h2>Berita Terbaru</h2>
        </div>
        <div class="row">
            <?php foreach ($berita as $row) { ?>
            <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.2s">
                <div class="blog-item">
                    <div class="blog-img">
                        <img src="<?= site_url() ?>assets/assets_home/img/<?= $row['foto']; ?>" alt="Image">
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
    </div>
</div>
<!-- Blog End -->

<a href="#" class="back-to-top"><i class="fa fa-chevron-up"></i></a>