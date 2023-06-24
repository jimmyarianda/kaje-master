<?php
defined('BASEPATH') or exit('No direct script access allowed');
?>

<div class="row">
    <div class="col-md-12 grid-margin">
        <div class="row">
            <div class="col-12 col-xl-8 mb-4 mb-xl-0">
                <h3 class="font-weight-bold">Tabel Home</h3>
                <h6 class="font-weight-normal mb-0">Sistem Web Profil <span class="text-primary">- PT. Kunango Jantan
                        Group</span></h6>
            </div>
        </div>
    </div>
</div>
<div class="col-6 grid-margin stretch-card">
    <div class="card">
        <div class="card-body">
            <h4 class="card-title">Edit Data</h4>
            <?php echo form_open_multipart($action); ?>
            <div class="form-group">
                <label>Text Satu</label>
                <input type="text" name="text1" class="form-control" placeholder="Inputkan Text" value="<?= isset($home['h_text1']) ? $home['h_text1'] : NULL ?>" required>
            </div>
            <div class="form-group">
                <label>Text Dua</label>
                <input type="text" name="text2" class="form-control" placeholder="Inputkan Text" value="<?= isset($home['h_text2']) ? $home['h_text2'] : NULL ?>" required>
            </div>
            <div class="form-group">
                <label>Text Tiga</label>
                <input type="text" name="text3" class="form-control" placeholder="Inputkan Text" value="<?= isset($home['h_text3']) ? $home['h_text3'] : NULL ?>" required>
            </div>
            <!-- <div class="form-group">
                <label>Banner</label>
                <input type="file" name="picbanner" class="form-control" value="<?= isset($home['h_picbanner']) ? $home['h_picbanner'] : NULL ?>" required>
            </div> -->
            <button type="submit" name="simpan" class="btn btn-primary mr-2">Simpan</button>
            <a class="btn btn-light" href="<?= site_url('d_home'); ?>">Batal</a>
            </form>
        </div>
    </div>
</div>