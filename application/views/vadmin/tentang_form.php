<?php
defined('BASEPATH') or exit('No direct script access allowed');
?>

<div class="row">
    <div class="col-md-12 grid-margin">
        <div class="row">
            <div class="col-12 col-xl-8 mb-4 mb-xl-0">
                <h3 class="font-weight-bold">Tabel Tentang</h3>
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
            <?php echo form_open_multipart('d_tentang/add'); ?>
            <div class="form-group">
                <label>Text Satu</label>
                <input type="text" name="text1" class="form-control" placeholder="Inputkan Text" required>
            </div>
            <div class="form-group">
                <label>Text Dua</label>
                <input type="text" name="text2" class="form-control" placeholder="Inputkan Text" required>
            </div>
            <div class="form-group">
                <label>Text Tiga</label>
                <textarea name="text3" class="form-control" id="tentang_text3" required></textarea>
            </div>
            <div class="form-group">
                <label>Banner</label>
                <input type="file" name="pic" class="form-control" required>
            </div>
            <button type="submit" name="simpan" class="btn btn-primary mr-2">Simpan</button>
            <a class="btn btn-light" href="<?= site_url('d_tentang'); ?>">Batal</a>
            </form>
        </div>
    </div>
</div>