<?php
defined('BASEPATH') or exit('No direct script access allowed');
?>

<!-- Page Header Start -->
<div class="page-header">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <h2>Produk Perusahaan</h2>
            </div>
            <div class="col-12">
                <a href="">PT. Kunango Jantan Group</a>
            </div>
        </div>
    </div>
</div>
<!-- Page Header End -->
<!-- 

<div class="blog">
    <div class="container">
        <div class="section-header text-center"> -->
            <!-- <p>PRODUK</p> -->
            <!-- <h2>Steel Division</h2>
        </div>
    </div>
</div> -->
<?php foreach ($kategori as $row) { ?>
<div class="about wow fadeInUp" data-wow-delay="0.1s">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-2 col-md-2">
                <div class="about-img">
                    <img src="<?= site_url()?>assets/assets_home/img/<?= $row['foto']; ?>" alt="Image">
                </div>
            </div>
            <div class="col-lg-10 col-md-6">
                <div class="section-header text-left">
                    <p><?= $row['nama_kategori']; ?></p>
                    <button type="button" class="btn btn-sm" style="background-color: rgb(228,66,1); color: white"><?= $row['jenis_kategori']; ?></button>
                    <button type="button" class="btn btn-sm" style="background-color: rgb(228,66,1); color: white"><?= $row['created_at']; ?></button>
                </div>
                <div class="about-text">
                    <p>
                    <?= $row['keterangan']; ?>
                    </p>
                    <a class="btn" style="background-color: rgb(228,66,1); color: white" href="<?= site_url('h_produk/detail/')?><?= $row['id_kategori']; ?>">Lihat Detail</a>
                </div>
            </div>
        </div>
    </div>
</div>
<?php } ?>



