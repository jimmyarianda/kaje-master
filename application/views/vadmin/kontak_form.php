<?php
defined('BASEPATH') or exit('No direct script access allowed');
?>

<div class="row">
    <div class="col-md-12 grid-margin">
        <div class="row">
            <div class="col-12 col-xl-8 mb-4 mb-xl-0">
                <h3 class="font-weight-bold">Tambah Data</h3>
                <h6 class="font-weight-normal mb-0">Sistem Web Profil <span class="text-primary">- PT. Kunango Jantan Group</span></h6>
            </div>
        </div>
    </div>
</div>
<div class="col-6 grid-margin stretch-card">
    <div class="card">
        <div class="card-body">
            <h4 class="card-title">Tambah Data</h4>
            <?php echo form_open_multipart('d_kontak/add'); ?>
            <div class="form-group">
                <label>Lokasi</label>
                <input type="text" name="lokasi" class="form-control" placeholder="Inputkan Text" required>
            </div>
            <div class="form-group">
                <label>email</label>
                <input type="email" name="email" class="form-control" placeholder="Inputkan Email" required>
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
                <label>HP</label>
                <input type="number" name="hp" class="form-control" placeholder="Inputkan HP" required>
            </div>
            
            <!-- <div class="form-group">
                    <label>TTD</label>
                    <input type="file" name="usr_foto" class="form-control" required>
                </div> -->
            <button type="submit" name="simpan" class="btn btn-primary mr-2">Simpan</button>
            <a class="btn btn-light" href="<?= site_url('user'); ?>">Batal</a>
            </form>
        </div>
    </div>
</div>