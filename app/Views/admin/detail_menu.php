<?= $this->extend('layouts/template'); ?>

<?= $this->section('content'); ?>
<div class="container pt-5" id="detail">
    <a href="/tempat_ngedit/menu" class="back_menu"><i class="arrow left"></i> MENU</a>
    <div class="row align-items-center">
        <div class="col">
            <div class="gambar_menu">
                <img src="/img/<?= $menu['gambar']; ?>" class="mx-auto d-block" alt="<?= $menu['nama']; ?>">
            </div>
        </div>
        <div class="col">
            <div class="deskripsi_menu">
                <div class="heading">
                    <h3 class="card-title"><?= $menu['nama']; ?></h3>
                    <p class="card-text"><i><?= $menu['id_makanan']; ?></i></p>
                    <h4 class="card-text border-bottom">Detail</h4>
                    <p class="card-text"><?= $menu['deskripsi']; ?></p>
                    <h4 class="card-text pb-3"><span><?= $menu['harga']; ?></span></h4>
                </div>

                <a href="/admin/editMenu/<?= $menu['slug']; ?>" class="btn btn-success">Edit Data Menu</a>
                <form action="/admin/deleteMenu/<?= $menu['id']; ?>" method="POST">
                    <?= csrf_field(); ?>
                    <input type="hidden" name="_method" value="DELETE" class="d-inline">
                    <button type="submit" class="btn btn-danger" onclick="return confirm('Apakah anda yakin?');">Hapus Data Menu</button>
                </form>
                <br><br>
            </div>
        </div>
    </div>
</div>
<?= $this->endSection(); ?>