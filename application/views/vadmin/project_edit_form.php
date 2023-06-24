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
            <h4 class="card-title">Edit Data</h4>
            <?php echo form_open_multipart($action); ?>
            <div class="form-group">
                <label>Nama Project</label>
                <input type="text" name="nama_project" class="form-control" placeholder="Inputkan Text" value="<?= isset($project['nama_project']) ? $project['nama_project'] : NULL ?>" required>
            </div>
            <div class="form-group">
                <label>Nama Perusahaan</label>
                <select class="form-control" name="nama_perusahaan">
                <option value="<?= isset($project['nama_perusahaan']) ? $project['nama_perusahaan'] : NULL ?>" selected="selected"><?= isset($project['nama_perusahaan']) ? $project['nama_perusahaan'] : NULL ?></option>
                
                            <?php foreach ($kategori as $row) { ?>
                                <option value="<?= $row['nama_kategori']; ?>"><?= $row['nama_kategori'] ?></option>
                            <?php } ?>
                </select>
            </div>
            <div class="form-group">
                <label>Status Project</label>
                <select class="form-control" name="status">
                <option value="<?= isset($project['status']) ? $project['status'] : NULL ?>" selected="selected"><?= isset($project['status']) ? $project['status'] : NULL ?></option>
                <option value="Selesai">Selesai</option>
                <option value="Berjalan">Berjalan</option>
                </select>
            </div>
            <div class="form-group">
                <label>Keterangan Project</label>
                <textarea name="keterangan" class="form-control" id="kategori_keterangan" required><?= isset($project['keterangan']) ? $project['keterangan'] : NULL ?></textarea>
            </div>
            <div class="form-group">
                <label>Foto Project</label>
                <input type="file" name="foto" class="form-control" value="<?= isset($project['foto']) ? $project['foto'] : NULL ?>" >
            </div>
            <button type="submit" name="simpan" class="btn btn-primary mr-2">Simpan</button>
            <a class="btn btn-light" href="<?= site_url('d_project'); ?>">Batal</a>
            </form>
        </div>
    </div>
</div>