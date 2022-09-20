<?= $this->extend('layouts/template'); ?>

<?= $this->section('content'); ?>
<div class="container mt-3">
    <div class="row">
        <div class="col">
            <div class="card mb-3" style="max-width: 540px;">
                <div class="row g-0">
                    <div class="col-md-4">
                        <img src="/img/<?= $menu['gambar']; ?>" class="img-fluid rounded-start" alt="...">
                    </div>
                    <div class="col-md-8">
                        <div class="card-body">
                            <h5 class="card-title"><?= $menu['nama']; ?></h5>
                            <p class="card-text"><?= $menu['deskripsi']; ?></p>
                            <h5 class="card-text"><span><?= $menu['harga']; ?></span></h5>
                            <p class="ready"><i><?= $menu['tersedia']; ?></i></p>
                            <a href="/menu/edit/<?= $menu['slug']; ?>" class="btn btn-success">Edit Data Menu</a>
                            <form action="/menu/<?= $menu['id']; ?>" method="POST">
                                <?= csrf_field(); ?>
                                <input type="hidden" name="_method" value="DELETE" class="d-inline">
                                <button type="submit" class="btn btn-danger" onclick="return confirm('Apakah anda yakin?');">Hapus Data Menu</button>
                            </form>
                            <br><br>
                            <a href="/menu">Kembali ke daftar menu</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<?= $this->endSection(); ?>