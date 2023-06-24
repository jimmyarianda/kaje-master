<?php
defined('BASEPATH') or exit('No direct script access allowed');
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>PT. Kunango Jantan Group</title>
    <link rel="stylesheet" href="<?= site_url() ?>assets/assets_dash/vendors/feather/feather.css">
    <link rel="stylesheet" href="<?= site_url() ?>assets/assets_dash/vendors/ti-icons/css/themify-icons.css">
    <link rel="stylesheet" href="<?= site_url() ?>assets/assets_dash/vendors/css/vendor.bundle.base.css">

    <link rel="stylesheet" href="<?= site_url() ?>assets/assets_dash/css/vertical-layout-light/style.css">

    <link rel="shortcut icon" href="<?= site_url() ?>assets/assets_home/img/logo.png" />
</head>

<body>
    <main>
        <?php $this->load->view($content); ?>
    </main>
    <script src="<?= site_url() ?>assets/assets_dash/vendors/js/vendor.bundle.base.js"></script>
    <script src="<?= site_url() ?>assets/assets_dash/js/off-canvas.js"></script>
    <script src="<?= site_url() ?>assets/assets_dash/js/hoverable-collapse.js"></script>
    <script src="<?= site_url() ?>assets/assets_dash/js/template.js"></script>
    <script src="<?= site_url() ?>assets/assets_dash/js/settings.js"></script>
    <script src="<?= site_url() ?>assets/assets_dash/js/todolist.js"></script>
</body>
</html>
