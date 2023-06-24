<?php
defined('BASEPATH') or exit('No direct script access allowed');
?>

<!DOCTYPE html>
<html lang="en">

<?php $this->load->view('_partials_home/header') ?>

<body>
    <div class="wrapper">

        <?php $this->load->view('_partials_home/navbar') ?>

        <?php $this->load->view($content) ?>

        <?php $this->load->view('_partials_home/footer') ?>

        <?php $this->load->view('_partials_home/js') ?>
        
    </div>
</body>

</html>