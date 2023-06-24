<?php
defined('BASEPATH') or exit('No direct script access allowed');
?>

<div class="row">
    <div class="col-md-12 grid-margin">
        <div class="row">
            <div class="col-12 col-xl-8 mb-4 mb-xl-0">
                <h3 class="font-weight-bold">Tabel Berita</h3>
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
            <?php echo form_open_multipart('d_berita/add'); ?>
            <div class="form-group">
                <label>Judul Berita</label>
                <input type="text" name="judul_berita" class="form-control" placeholder="Inputkan Text" required>
            </div>
            <div class="form-group">
                <label>Isi Berita</label>
                <textarea name="isi_berita" class="form-control" id="berita_isi" required></textarea>
            </div>
           
            <div class="form-group">
            <label>Nama Perusahaan</label>
            <select class="form-control select2" style="width: 100%;" name="perusahaan" required>
                            <option value="" selected="selected" disabled>Nama Perusahaan</option>
                            <?php foreach ($kategori as $row) { ?>
                                <option value="<?= $row['nama_kategori']; ?>"><?= $row['nama_kategori'] ?></option>
                            <?php } ?>
            </select>
            </div>
            <div class="form-group">
                <label>Jenis</label>
                <select class="form-control" name="jenis">
                <option value="Steel Division" selected="selected" disabled>Pilih Jenis Berita</option>
                <option value="Berita">Berita</option>
                <option value="CSR">Corporate Social Responsibility (CSR)</option>
                </select>
            </div>
           
            <div class="form-group">
                <label>Foto Berita</label>
                <input type="file" name="foto" class="form-control" required>
            </div>
            <button type="submit" name="simpan" class="btn btn-primary mr-2">Simpan</button>
            <a class="btn btn-light" href="<?= site_url('d_project'); ?>">Batal</a>
            </form>
        </div>
    </div>
</div>