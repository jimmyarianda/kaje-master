<?php
defined('BASEPATH') or exit('No direct script access allowed');
?>

<!-- Single Post Start-->
<div class="single">
    <div class="container">
        <div class="row">
            <div class="col-lg-8">
                <div class="single-content wow fadeInUp">
                    <img src="<?= site_url() ?>assets/assets_home/img/carousel-1.jpg" />
                    <h2><?= $kategori['nama_kategori']?></h2>

                    <p>
                        <?= $kategori['keterangan']?>
                    </p>

                </div>

                <div class="single-tags wow fadeInUp">
                    <?php foreach ($kategori1 as $row) { ?>
                    <a
                        href="<?= site_url('h_produk/detail/')?><?= $row['id_kategori']; ?>"><?= $row['nama_kategori']; ?></a>
                    <?php } ?>
                </div>


                <div class="post-item">
                    <div class="post-img">
                        <img src="<?= site_url() ?>assets/assets_home/img/<?= $kategori['foto']; ?>" />
                    </div>
                    <div class="post-text">
                        <a><?= $kategori['jenis_kategori']; ?></a>
                        <div class="post-meta">
                            <p>Tanggal Publish<a><?= $kategori['created_at']; ?></a></p>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-lg-4">
                <div class="sidebar">
                    <div class="sidebar-widget wow fadeInUp">
                        <div class="search-widget">
                            <!-- <form>
                                <input class="form-control" type="text" placeholder="Search Keyword">
                                <button class="btn"><i class="fa fa-search"></i></button>
                            </form> -->
                        </div>
                    </div>

                    <div class="sidebar-widget wow fadeInUp">
                        <h2 class="widget-title">Berita Terbaru</h2>
                        <div class="recent-post">
                            <?php foreach ($terbaru as $row) { ?>
                            <div class="post-item">
                                <div class="post-img">
                                    <img src="<?= site_url() ?>assets/assets_home/img/<?= $row['foto']?>" />
                                </div>
                                <div class="post-text">
                                    <a
                                        href="<?= site_url('h_berita/detail/')?><?= $row['id_berita']; ?>"><?= $row['judul_berita']?></a>
                                    <div class="post-meta">
                                        <p>Publisher<a><?= $row['user']; ?></a></p>
                                        <p><a><?= $row['created_at']; ?></a></p>
                                    </div>
                                </div>
                            </div>
                            <?php } ?>
                        </div>
                    </div>
                    <div class="sidebar-widget wow fadeInUp">
                        <div class="image-widget">
                            <a href="#"><img src="<?= site_url() ?>assets/assets_home/img/blog-1.jpg" alt="Image"></a>
                        </div>
                    </div>

                    <!-- <div class="sidebar-widget wow fadeInUp">
                        <div class="tab-post">
                            <ul class="nav nav-pills nav-justified">
                                <li class="nav-item">
                                    <a class="nav-link active" data-toggle="pill" href="#featured">Featured</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" data-toggle="pill" href="#popular">Popular</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" data-toggle="pill" href="#latest">Latest</a>
                                </li>
                            </ul>

                            <div class="tab-content">
                                <div id="featured" class="container tab-pane active">
                                    <div class="post-item">
                                        <div class="post-img">
                                            <img src="<?= site_url() ?>assets/assets_home/img/post-1.jpg" />
                                        </div>
                                        <div class="post-text">
                                            <a href="">Lorem ipsum dolor sit amet consec adipis elit</a>
                                            <div class="post-meta">
                                                <p>By<a href="">Admin</a></p>
                                                <p>In<a href="">Design</a></p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="post-item">
                                        <div class="post-img">
                                            <img src="<?= site_url() ?>assets/assets_home/img/post-2.jpg" />
                                        </div>
                                        <div class="post-text">
                                            <a href="">Lorem ipsum dolor sit amet consec adipis elit</a>
                                            <div class="post-meta">
                                                <p>By<a href="">Admin</a></p>
                                                <p>In<a href="">Design</a></p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="post-item">
                                        <div class="post-img">
                                            <img src="<?= site_url() ?>assets/assets_home/img/post-3.jpg" />
                                        </div>
                                        <div class="post-text">
                                            <a href="">Lorem ipsum dolor sit amet consec adipis elit</a>
                                            <div class="post-meta">
                                                <p>By<a href="">Admin</a></p>
                                                <p>In<a href="">Design</a></p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="post-item">
                                        <div class="post-img">
                                            <img src="<?= site_url() ?>assets/assets_home/img/post-4.jpg" />
                                        </div>
                                        <div class="post-text">
                                            <a href="">Lorem ipsum dolor sit amet consec adipis elit</a>
                                            <div class="post-meta">
                                                <p>By<a href="">Admin</a></p>
                                                <p>In<a href="">Design</a></p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="post-item">
                                        <div class="post-img">
                                            <img src="<?= site_url() ?>assets/assets_home/img/post-5.jpg" />
                                        </div>
                                        <div class="post-text">
                                            <a href="">Lorem ipsum dolor sit amet consec adipis elit</a>
                                            <div class="post-meta">
                                                <p>By<a href="">Admin</a></p>
                                                <p>In<a href="">Design</a></p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div id="popular" class="container tab-pane fade">
                                    <div class="post-item">
                                        <div class="post-img">
                                            <img src="<?= site_url() ?>assets/assets_home/img/post-1.jpg" />
                                        </div>
                                        <div class="post-text">
                                            <a href="">Lorem ipsum dolor sit amet consec adipis elit</a>
                                            <div class="post-meta">
                                                <p>By<a href="">Admin</a></p>
                                                <p>In<a href="">Design</a></p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="post-item">
                                        <div class="post-img">
                                            <img src="<?= site_url() ?>assets/assets_home/img/post-2.jpg" />
                                        </div>
                                        <div class="post-text">
                                            <a href="">Lorem ipsum dolor sit amet consec adipis elit</a>
                                            <div class="post-meta">
                                                <p>By<a href="">Admin</a></p>
                                                <p>In<a href="">Design</a></p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="post-item">
                                        <div class="post-img">
                                            <img src="<?= site_url() ?>assets/assets_home/img/post-3.jpg" />
                                        </div>
                                        <div class="post-text">
                                            <a href="">Lorem ipsum dolor sit amet consec adipis elit</a>
                                            <div class="post-meta">
                                                <p>By<a href="">Admin</a></p>
                                                <p>In<a href="">Design</a></p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="post-item">
                                        <div class="post-img">
                                            <img src="<?= site_url() ?>assets/assets_home/img/post-4.jpg" />
                                        </div>
                                        <div class="post-text">
                                            <a href="">Lorem ipsum dolor sit amet consec adipis elit</a>
                                            <div class="post-meta">
                                                <p>By<a href="">Admin</a></p>
                                                <p>In<a href="">Design</a></p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="post-item">
                                        <div class="post-img">
                                            <img src="<?= site_url() ?>assets/assets_home/img/post-5.jpg" />
                                        </div>
                                        <div class="post-text">
                                            <a href="">Lorem ipsum dolor sit amet consec adipis elit</a>
                                            <div class="post-meta">
                                                <p>By<a href="">Admin</a></p>
                                                <p>In<a href="">Design</a></p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div id="latest" class="container tab-pane fade">
                                    <div class="post-item">
                                        <div class="post-img">
                                            <img src="<?= site_url() ?>assets/assets_home/img/post-1.jpg" />
                                        </div>
                                        <div class="post-text">
                                            <a href="">Lorem ipsum dolor sit amet consec adipis elit</a>
                                            <div class="post-meta">
                                                <p>By<a href="">Admin</a></p>
                                                <p>In<a href="">Design</a></p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="post-item">
                                        <div class="post-img">
                                            <img src="<?= site_url() ?>assets/assets_home/img/post-2.jpg" />
                                        </div>
                                        <div class="post-text">
                                            <a href="">Lorem ipsum dolor sit amet consec adipis elit</a>
                                            <div class="post-meta">
                                                <p>By<a href="">Admin</a></p>
                                                <p>In<a href="">Design</a></p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="post-item">
                                        <div class="post-img">
                                            <img src="<?= site_url() ?>assets/assets_home/img/post-3.jpg" />
                                        </div>
                                        <div class="post-text">
                                            <a href="">Lorem ipsum dolor sit amet consec adipis elit</a>
                                            <div class="post-meta">
                                                <p>By<a href="">Admin</a></p>
                                                <p>In<a href="">Design</a></p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="post-item">
                                        <div class="post-img">
                                            <img src="<?= site_url() ?>assets/assets_home/img/post-4.jpg" />
                                        </div>
                                        <div class="post-text">
                                            <a href="">Lorem ipsum dolor sit amet consec adipis elit</a>
                                            <div class="post-meta">
                                                <p>By<a href="">Admin</a></p>
                                                <p>In<a href="">Design</a></p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="post-item">
                                        <div class="post-img">
                                            <img src="<?= site_url() ?>assets/assets_home/img/post-5.jpg" />
                                        </div>
                                        <div class="post-text">
                                            <a href="">Lorem ipsum dolor sit amet consec adipis elit</a>
                                            <div class="post-meta">
                                                <p>By<a href="">Admin</a></p>
                                                <p>In<a href="">Design</a></p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div> -->

                    <div class="sidebar-widget wow fadeInUp">
                        <h2 class="widget-title">Anak Perusahaan</h2>
                        <div class="category-widget">
                            <ul>
                                <?php foreach ($kategori1 as $row) { ?>
                                <li><a
                                        href="<?= site_url('h_produk/detail/')?><?= $row['id_kategori']; ?>"><?= $row['nama_kategori']; ?></a><span></span>
                                </li>

                                <?php } ?>
                            </ul>
                        </div>
                    </div>

                    <div class="sidebar-widget wow fadeInUp">
                        <div class="image-widget">
                            <a href="#"><img src="<?= site_url() ?>assets/assets_home/img/blog-3.jpg" alt="Image"></a>
                        </div>
                    </div>

                    <!-- <div class="sidebar-widget wow fadeInUp">
                        <h2 class="widget-title">Visi & Misi Perusahaan</h2>
                        <div class="text-widget">
                            <p>
                                Lorem ipsum dolor sit amet elit. Integer lorem augue purus mollis sapien, non eros leo
                                in nunc. Donec a nulla vel turpis tempor ac vel justo. In hac platea nec eros. Nunc eu
                                enim non turpis id augue.
                            </p>
                        </div>
                    </div> -->
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Single Post End-->