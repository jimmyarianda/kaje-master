<?php
defined('BASEPATH') or exit('No direct script access allowed');
?>

<!-- Page Header Start -->
<div class="page-header">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <h2>Hubungi Kami</h2>
            </div>
            <div class="col-12">
                <a href="">PT. Kunango Jantan Group</a>
            </div>
        </div>
    </div>
</div>
<!-- Page Header End -->

<!-- Contact Start -->
<div class="contact wow fadeInUp">
    <div class="container">
        <!-- <div class="section-header text-center">
            <p>Get In Touch</p>
            <h2>For Any Query</h2>
        </div> -->
        <div class="row">
            <div class="col-md-6">
                <div class="contact-info">
                    <div class="contact-item">
                        <?php foreach ($kontak as $row) { ?>
                        <i class="flaticon-address"></i>
                        <div class="contact-text">
                            <h2><?= $row['perusahaan']; ?></h2>

                            <p><?= $row['lokasi']; ?></p>
                        </div>
                        <?php } ?>
                    </div>
                    <!-- <div class="contact-item">
                    <?php foreach ($kontak as $row) { ?>
                        <i class="flaticon-call"></i>
                        <div class="contact-text">
                        <h2><?= $row['perusahaan']; ?></h2>
                            
                            <p>HP :<?= $row['hp']; ?></p>
                        </div>
                        <?php } ?>
                    </div> -->
                    <div class="contact-item">
                        <?php foreach ($kontak as $row) { ?>
                        <i class="flaticon-send-mail"></i>
                        <div class="contact-text">
                            <h2><?= $row['perusahaan']; ?></h2>
                            <p><?= $row['email']; ?></p>
                        </div>
                        <?php } ?>
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="contact-form">
                    <div id="success"></div>
                    <div class="contact-item">
                        <?php foreach ($kontak as $row) { ?>
                        <div class="contact-text">
                            <p><?= $row['perusahaan']; ?></p>
                            <i class="fab fa-whatsapp" style="color: #fcfcfc;"></i> <a
                                href="https://wa.me/<?= $row['hp']; ?>" rel="noopener" target="_blank"
                                style="color: #fcfcfc;">Hubungi Via WhatsApp</a>
                        </div>
                        <?php } ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Contact End -->