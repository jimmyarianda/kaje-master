<?php
defined('BASEPATH') or exit('No direct script access allowed');
?>

<div class="row">
    <div class="col-md-12 grid-margin">
        <div class="row">
            <div class="col-12 col-xl-8 mb-4 mb-xl-0">
                <h3 class="font-weight-bold">Tabel Kategori</h3>
                <h6 class="font-weight-normal mb-0">Sistem Web Profil <span class="text-primary">- PT. Kunango Jantan Group</span></h6>
            </div>
        </div>
    </div>
</div>

<?php if ($this->session->flashdata('success')) : ?>
    <div id="successMessage" class="alert alert-success" role="alert">
        <i class="fa fa-check"></i>&nbsp;<?= $this->session->flashdata('success'); ?>
    </div>
<?php endif; ?>

<!-- DataTables -->
<section class="content">
    <div class="row">
        <div class="col-md-12 grid-margin stretch-card">
            <div class="card">
                <div class="card-body">
                     <div class="card-header">Tambah Data
                        &nbsp;&nbsp;&nbsp;<a class="btn btn-primary btn-sm" href="<?= site_url('d_kategori/add'); ?>"><i class="fa fa-plus">&nbsp;&nbsp;</i>Tambah Data</a>
                    </div> 
                    <div class="card-body">
                        <!-- <div class="col-12"> -->
                            <div class="table-responsive">
                                <table id="tkategori" class="table table-bordered table-hover" width="100%" cellspacing="0">
                                    <thead>
                                        <tr>
                                            <th>No</th>
                                            <th>id_kategori</th>
                                            <th>Nama Perusahaan</th>
                                            <th>Jenis Perusahaan</th>
                                            <!-- <th>Keterangan</th> -->
                                            <th>Foto</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                    </tbody>
                                </table>
                                <script>
                                    function deleteConfirm(url) {
                                        $('#btn-delete').attr('href', url);
                                        $('#deleteModal').modal();
                                    }
                                </script>
                            </div>
                        <!-- </div> -->
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>