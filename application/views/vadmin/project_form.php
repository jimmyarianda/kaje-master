<?php
defined('BASEPATH') or exit('No direct script access allowed');
?>

<div class="row">
    <div class="col-md-12 grid-margin">
        <div class="row">
            <div class="col-12 col-xl-8 mb-4 mb-xl-0">
                <h3 class="font-weight-bold">Tabel Project</h3>
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
            <?php echo form_open_multipart('d_project/add'); ?>
            <div class="form-group">
                <label>Nama Project</label>
                <input type="text" name="nama_project" class="form-control" placeholder="Inputkan Text" required>
            </div>
            <div class="form-group">
            <label>Nama Perusahaan</label>
            <select class="form-control select2" style="width: 100%;" name="nama_perusahaan" required>
                            <option value="" selected="selected" disabled>Nama Perusahaan</option>
                            <?php foreach ($kategori as $row) { ?>
                                <option value="<?= $row['nama_kategori']; ?>"><?= $row['nama_kategori'] ?></option>
                            <?php } ?>
            </select>
            </div>
            <div class="form-group">
                <label>Status Project</label>
                <select class="form-control" name="status">
                <option value="Steel Division" selected="selected" disabled>Pilih Status Project</option>
                <option value="Selesai">Selesai</option>
                <option value="Berjalan">Berjalan</option>
                </select>
            </div>
            <div class="form-group">
                <label>Keterangan Project</label>
                <textarea name="keterangan" class="form-control" id="kategori_keterangan" required></textarea>
            </div>
            <div class="form-group">
                <label>Foto Project</label>
                <input type="file" name="foto" class="form-control" required>
            </div>
            <button type="submit" name="simpan" class="btn btn-primary mr-2">Simpan</button>
            <a class="btn btn-light" href="<?= site_url('d_project'); ?>">Batal</a>
            </form>
        </div>
    </div>
</div>