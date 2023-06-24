<?php
defined('BASEPATH') or exit('No direct script access allowed');
?>

<div class="row">
    <div class="col-md-12 grid-margin">
        <div class="row">
            <div class="col-12 col-xl-8 mb-4 mb-xl-0">
                <h3 class="font-weight-bold">Tabel Testimoni</h3>
                <h6 class="font-weight-normal mb-0">Sistem Web Profil <span class="text-primary">- PT. Kunango Jantan
                        Group</span></h6>
            </div>
        </div>
    </div>
</div>
<div class="col-6 grid-margin stretch-card">
    <div class="card">
        <div class="card-body">
            <h4 class="card-title">Tambah Data</h4>
            <?php echo form_open_multipart('d_testimoni/add'); ?>
            <div class="form-group">
                <label>Nama</label>
                <input type="text" name="nama" class="form-control" placeholder="Inputkan Text" required>
            </div>
            <div class="form-group">
                <label>Perusahaan</label>
                <input type="text" name="perusahaan" class="form-control" placeholder="Inputkan Text" required>
            </div>
            <div class="form-group">
                <label>Testimoni</label>
                <textarea name="testi" class="form-control" required></textarea>
            </div>
           
           
            <div class="form-group">
                <label>Foto</label>
                <input type="file" name="foto" class="form-control" required>
            </div>
            <button type="submit" name="simpan" class="btn btn-primary mr-2">Simpan</button>
            <a class="btn btn-light" href="<?= site_url('d_testimoni'); ?>">Batal</a>
            </form>
        </div>
    </div>
</div>