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
            <h4 class="card-title">Edit Data</h4>
            <?php echo form_open_multipart($action); ?>
            <div class="form-group">
                <label>Text Satu</label>
                <input type="text" name="text1" class="form-control" placeholder="Inputkan Text" value="<?= isset($tentang['t_text1']) ? $tentang['t_text1'] : NULL ?>" required>
            </div>
            <div class="form-group">
                <label>Text Dua</label>
                <input type="text" name="text2" class="form-control" placeholder="Inputkan Text" value="<?= isset($tentang['t_text2']) ? $tentang['t_text2'] : NULL ?>" required>
            </div>
            <div class="form-group">
                <label>Text Tiga</label>
                <textarea name="text3" class="form-control" id="tentang_text3" required><?= isset($tentang['t_text3']) ? $tentang['t_text3'] : NULL ?></textarea>
            </div>
            <div class="form-group">
                <label>Foto</label>
                <input type="file" name="pic" class="form-control" value="<?= isset($tentang['t_pic']) ? $tentang['t_pic'] : NULL ?>" required>
            </div>
            <div class="form-group">
                <label>Text Jumlah Pekerja</label>
                <input type="number" name="pekerja" class="form-control" placeholder="Inputkan Jumlah" value="<?= isset($tentang['t_pekerja']) ? $tentang['t_pekerja'] : NULL ?>" required>
            </div>
            <div class="form-group">
                <label>Text Jumlah Clients</label>
                <input type="number" name="clients" class="form-control" placeholder="Inputkan Jumlah" value="<?= isset($tentang['t_clients']) ? $tentang['t_clients'] : NULL ?>" required>
            </div>
            <div class="form-group">
                <label>Text Project Selesai</label>
                <input type="number" name="ps" class="form-control" placeholder="Inputkan Jumlah" value="<?= isset($tentang['t_projectsel']) ? $tentang['t_projectsel'] : NULL ?>" required>
            </div>
            <div class="form-group">
                <label>Text Project Berjalan</label>
                <input type="number" name="pb" class="form-control" placeholder="Inputkan Jumlah" value="<?= isset($tentang['t_projectber']) ? $tentang['t_projectber'] : NULL ?>" required>
            </div>
            <button type="submit" name="simpan" class="btn btn-primary mr-2">Simpan</button>
            <a class="btn btn-light" href="<?= site_url('d_tentang'); ?>">Batal</a>
            </form>
        </div>
    </div>
</div>