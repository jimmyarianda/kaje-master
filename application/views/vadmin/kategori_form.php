<?php
defined('BASEPATH') or exit('No direct script access allowed');
?>

<div class="row">
    <div class="col-md-12 grid-margin">
        <div class="row">
            <div class="col-12 col-xl-8 mb-4 mb-xl-0">
                <h3 class="font-weight-bold">Tabel Kategori</h3>
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
            <?php echo form_open_multipart('d_kategori/add'); ?>
            <div class="form-group">
                <label>Nama Perusahaan</label>
                <input type="text" name="nama_kategori" class="form-control" placeholder="Inputkan Text" required>
            </div>
            <div class="form-group">
                <label>Jenis Perusahaan</label>
                <select class="form-control" name="jenis_kategori">
                <option value="Steel Division" disabled>Pilih Jenis Perusahan</option>
                <option value="Steel Division">Steel Division</option>
                <option value="Concrete Division">Concrete Division</option>
                <option value="Galvanize Division">Galvanize Division</option>
                </select>
            </div> 
            <div class="form-group">
                <label>Detail</label>
                <textarea name="keterangan" class="form-control" id="project_keterangan" required></textarea>
            </div>
            <div class="form-group">
                <label>Foto</label>
                <input type="file" name="foto" class="form-control" required>
            </div>
            <button type="submit" name="simpan" class="btn btn-primary mr-2">Simpan</button>
            <a class="btn btn-light" href="<?= site_url('d_kategori'); ?>">Batal</a>
            </form>
        </div>
    </div>
</div>