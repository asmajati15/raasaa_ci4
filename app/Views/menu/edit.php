<?= $this->extend('layouts/template'); ?>

<?= $this->section('content'); ?>
<div class="container">
  <div class="row">
    <div class="col-8">
      <h2 class="my-4">Form Edit Data Menu</h2>

      <form action="/menu/update/<?= $menu['id']; ?>" method="POST" enctype="multipart/form-data">
        <?= csrf_field(); ?>
        <input type="hidden" name="slug" value="<?= $menu['slug']; ?>">
        <input type="hidden" name="gambarLama" value="<?= $menu['gambar']; ?>">
        <div class="row mb-3">
          <label for="nama" class="col-sm-2 col-form-label">Nama Menu</label>
          <div class="col-sm-10">
            <input type="text" class="form-control <?= ($validation->hasError('nama')) ? 'is-invalid' : ''; ?>" id="nama" name="nama" autofocus value="<?= (old('nama')) ? old('nama') : $menu['nama'] ?>">
            <div class="invalid-feedback">
              <?= $validation->getError('nama'); ?>
            </div>
          </div>
        </div>
        <div class="row mb-3">
          <label for="deskripsi" class="col-sm-2 col-form-label">Deskripsi</label>
          <div class="col-sm-10">
            <input type="text" class="form-control <?= ($validation->hasError('deskripsi')) ? 'is-invalid' : ''; ?>" id="deskripsi" name="deskripsi" value="<?= (old('deskripsi')) ? old('deskripsi') : $menu['deskripsi'] ?>">
            <div class="invalid-feedback">
              <?= $validation->getError('deskripsi'); ?>
            </div>
          </div>
        </div>
        <div class="row mb-3">
          <label for="harga" class="col-sm-2 col-form-label">Harga Menu</label>
          <div class="col-sm-10">
            <input type="text" class="form-control <?= ($validation->hasError('harga')) ? 'is-invalid' : ''; ?>" id="harga" name="harga" value="<?= (old('harga')) ? old('harga') : $menu['harga'] ?>">
            <div class="invalid-feedback">
              <?= $validation->getError('harga'); ?>
            </div>
          </div>
        </div>
        <div class="row mb-3">
          <label for="tersedia" class="col-sm-2 col-form-label">Ketersediaan</label>
          <div class="col-sm-10">
            <select id="Select" class="form-select" id="tersedia" name="tersedia" value="<?= (old('tersedia')) ? old('tersedia') : $menu['tersedia'] ?>">
              <option>Tersedia</option>
              <option>Tidak Tersedia</option>
            </select>
          </div>
        </div>
        <div class="row mb-3">
          <label for="jenis" class="col-sm-2 col-form-label">Jenis Menu</label>
          <div class="col-sm-10">
            <input type="text" class="form-control <?= ($validation->hasError('jenis')) ? 'is-invalid' : ''; ?>" id="jenis" name="jenis" value="<?= (old('jenis')) ? old('jenis') : $menu['jenis'] ?>">
            <div class="invalid-feedback">
              <?= $validation->getError('jenis'); ?>
            </div>
          </div>
        </div>
        <div class="row mb-3">
          <label for="gambar" class="col-sm-2 col-form-label">Gambar Menu</label>
          <div class="col-sm-2">
            <img src="/img/<?= $menu['gambar']; ?>" class="img-thumbnail img-preview" alt="">
          </div>
          <div class="col-sm-8">
            <div class="input-group img-upload mb-3">
              <input type="file" class="form-control <?= ($validation->hasError('gambar')) ? 'is-invalid' : ''; ?>" id="gambar" name="gambar" onchange="previewImg()">
              <!-- <label class="input-group-text" for="Gambar"></label> -->
              <div class="invalid-feedback">
                <?= $validation->getError('gambar'); ?>
              </div>
            </div>
          </div>
        </div>
        <button type="submit" class="btn btn-primary">Edit Menu</button>
        <a href="/">
          <p class="d-inline mx-2">Kembali ke beranda</p>
        </a>
      </form>
    </div>
  </div>
</div>
<?= $this->endSection(); ?>