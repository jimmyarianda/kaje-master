<?php
defined('BASEPATH') or exit('No direct script access allowed');
?>

<!-- plugins:js -->
<script src="<?= site_url() ?>assets/assets_dash/vendors/js/vendor.bundle.base.js"></script>
<!-- endinject -->
<!-- Plugin js for this page -->
<script src="<?= site_url() ?>assets/assets_dash/vendors/chart.js/Chart.min.js"></script>
<script src="<?= site_url() ?>assets/assets_dash/vendors/datatables.net/jquery.dataTables.js"></script>
<script src="<?= site_url() ?>assets/assets_dash/vendors/datatables.net-bs4/dataTables.bootstrap4.js"></script>
<script src="<?= site_url() ?>assets/assets_dash/js/dataTables.select.min.js"></script>

<!-- End plugin js for this page -->
<!-- inject:js -->
<script src="<?= site_url() ?>assets/assets_dash/js/off-canvas.js"></script>
<script src="<?= site_url() ?>assets/assets_dash/js/hoverable-collapse.js"></script>
<script src="<?= site_url() ?>assets/assets_dash/js/template.js"></script>
<script src="<?= site_url() ?>assets/assets_dash/js/settings.js"></script>
<script src="<?= site_url() ?>assets/assets_dash/js/todolist.js"></script>
<!-- endinject -->
<!-- Custom js for this page-->
<script src="<?= site_url() ?>assets/assets_dash/js/dashboard.js"></script>
<script src="<?= site_url() ?>assets/assets_dash/js/Chart.roundedBarCharts.js"></script>
<!-- End custom js for this page-->

<!-- DataTables -->
<script src="https://cdn.datatables.net/1.10.20/js/jquery.dataTables.min.js" crossorigin="anonymous"></script>
<script src="https://cdn.datatables.net/1.10.20/js/dataTables.bootstrap4.min.js" crossorigin="anonymous"></script>

<!-- Plugin CKEditor -->
<script src="<?= site_url() ?>assets/assets_dash/plugins/ckeditor/ckeditor.js"></script>
<script>
    CKEDITOR.replace('tentang_text3');
    CKEDITOR.replace('kategori_keterangan');
    CKEDITOR.replace('project_keterangan');
    CKEDITOR.replace('berita_isi');
</script>
<!-- <script>
    CKEDITOR.replace('saran_thl');
</script>
<script>
    CKEDITOR.replace('saran_kasum');
</script>
<script>
    CKEDITOR.replace('saran_pimpinan');
</script> -->
<!-- <script>
    $(function() {
        $('.select2').select2()
    })
</script> -->