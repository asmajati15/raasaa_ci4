<?= $this->extend('layouts/template'); ?>

<?= $this->section('content'); ?>
<div class="container">
  <div class="row">
    <div class="col-8">
      <h2 class="my-4">Form Tambah Jenis Minuman</h2>

      <form action="/admin/saveMinuman" method="POST" enctype="multipart/form-data">
        <?= csrf_field(); ?>
        <div class="row mb-3">
          <label for="jenis" class="col-sm-2 col-form-label">Jenis Menu</label>
          <div class="col-sm-10">
            <input type="text" class="form-control <?= ($validation->hasError('jenis')) ? 'is-invalid' : ''; ?>" id="jenis" name="jenis" autofocus value="<?= old('jenis'); ?>">
            <div class="invalid-feedback">
              <?= $validation->getError('jenis'); ?>
            </div>
          </div>
        </div>
        <button type="submit" class="btn btn-primary">Tambah Jenis Menu</button>
        <a href="/tempat_ngedit/jenis">
          <p class="d-inline mx-2">Kembali ke beranda</p>
        </a>
      </form>
    </div>
  </div>
</div>
<?= $this->endSection(); ?>