<?= $this->extend('layouts/template'); ?>

<?= $this->section('content'); ?>
<div class="container pt-5" id="detail">
    <a href="/menu" class="back_menu"><i class="arrow left"></i> MENU</a>
    <div class="row align-items-center">
        <div class="col">
            <div class="animated animatedFadeInUp fadeInUp">
                <div class="gambar_menu">
                    <img src="/img/<?= $menu['gambar']; ?>" class="mx-auto d-block" alt="<?= $menu['nama']; ?>">
                </div>
            </div>
        </div>
        <div class="col">
            <div class="animated animatedFadeInUp fadeInUp">
                <div class="deskripsi_menu">
                    <div class="heading">
                        <h3 class="card-title"><?= $menu['nama']; ?></h3>
                        <p class="card-text"><i><?= $menu['tersedia']; ?></i></p>
                        <h4 class="card-text border-bottom">Detail</h4>
                        <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc sed leo ultricies, facilisis mi sit amet, molestie risus. Suspendisse et odio nibh. Mauris sollicitudin vestibulum turpis, quis hendrerit quam ultrices id.</p>
                        <h4 class="card-text pb-3"><span><?= $menu['harga']; ?></span></h4>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<?= $this->endSection(); ?>