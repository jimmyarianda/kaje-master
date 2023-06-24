<?php
defined('BASEPATH') or exit('No direct script access allowed');
?>

<div class="row">
    <div class="col-md-12 grid-margin">
        <div class="row">
            <div class="col-12 col-xl-8 mb-4 mb-xl-0">
                <h3 class="font-weight-bold">Tabel Berita & CSR</h3>
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
                <label>Judul Berita</label>
                <input type="text" name="judul_berita" class="form-control" placeholder="Inputkan Text" value="<?= isset($berita['judul_berita']) ? $berita['judul_berita'] : NULL ?>" required>
            </div>
            <div class="form-group">
                <label>Isi Berita</label>
                <textarea name="isi_berita" class="form-control" id="berita_isi" required><?= isset($berita['isi_berita']) ? $berita['isi_berita'] : NULL ?></textarea>
            </div>
            <div class="form-group">
                <label>Nama Perusahaan</label>
                <select class="form-control" name="perusahaan">
                <option value="<?= isset($berita['perusahaan']) ? $berita['perusahaan'] : NULL ?>" selected="selected"><?= isset($berita['perusahaan']) ? $berita['perusahaan'] : NULL ?></option>
                
                            <?php foreach ($kategori as $row) { ?>
                                <option value="<?= $row['nama_kategori']; ?>"><?= $row['nama_kategori'] ?></option>
                            <?php } ?>
                </select>
            </div>
            <div class="form-group">
                <label>Jenis</label>
                <select class="form-control" name="jenis">
                <option value="<?= isset($berita['jenis']) ? $berita['jenis'] : NULL ?>" selected="selected"><?= isset($berita['jenis']) ? $berita['jenis'] : NULL ?></option>
                <option value="Berita">Berita</option>
                <option value="CSR">Corporate Social Responsibility (CSR)</option>
                </select>
            </div>
           
            <div class="form-group">
                <label>Foto Berita</label>
                <input type="file" name="foto" class="form-control" value="<?= isset($berita['foto']) ? $berita['foto'] : NULL ?>" >
            </div>
            <button type="submit" name="simpan" class="btn btn-primary mr-2">Simpan</button>
            <a class="btn btn-light" href="<?= site_url('d_berita'); ?>">Batal</a>
            </form>
        </div>
    </div>
</div>