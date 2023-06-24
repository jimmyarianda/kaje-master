<!DOCTYPE html>
<html lang="en">

<?php $this->load->view('_partials_dash/header') ?>

<body>
    <div class="container-scroller">
        <!-- partial:partials/_navbar.html -->
        <?php $this->load->view('_partials_dash/navbar') ?>
        <!-- partial -->
        <div class="container-fluid page-body-wrapper">

            <?php $this->load->view('_partials_dash/sidebar') ?>

            <div class="main-panel">
                <div class="content-wrapper">
                    <?php $this->load->view($content); ?>
                </div>

                <?php $this->load->view('_partials_dash/footer') ?>
            </div>
        </div>
    </div>

    <?php $this->load->view('_partials_dash/modal') ?>

    <?php $this->load->view('_partials_dash/js') ?>

    <?php $this->load->view('_partials_dash/ajax') ?>

</body>

</html>