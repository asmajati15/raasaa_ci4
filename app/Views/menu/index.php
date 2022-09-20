<?= $this->extend('layouts/template'); ?>

<?= $this->section('content'); ?>
<div class="show">
    <div id="carouselExampleInterval" class="carousel slide carousel-fade" data-bs-ride="carousel">
        <div class="carousel-inner">
            <div class="carousel-item active" data-bs-interval="10000">
                <img src="/img/carousel0.jpg" class="d-block w-100" alt="...">
            </div>
            <div class="carousel-item" data-bs-interval="2000">
                <img src="/img/carousel1.jpg" class="d-block w-100" alt="...">
            </div>
            <div class="carousel-item">
                <img src="/img/carousel2.jpg" class="d-block w-100" alt="...">
            </div>
            <div class="carousel-item">
                <img src="/img/carousel3.jpg" class="d-block w-100" alt="...">
            </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleInterval" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleInterval" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>
    </div>
</div>

<div class="main">
    <div id="demos" class="padding-90 text-center bg-off-white fix mt-5">
        <div class="container">
            <div class="row">
                <div class="section-title text-center col-xs-12 mb-2">
                    <h1>Choose Your Menu</h1>
                </div>
                <div id="foodFilter" class="col-x-12 m-2 mb-5">
                    <button class="button active" onclick="filterData('all')">All Menu</button>
                    <button class="button" onclick="filterData('snack')">Snack & Vegetables</button>
                    <button class="button" onclick="filterData('indonesian')">Indonesian Taste</button>
                    <button class="button" onclick="filterData('western')">Western Taste</button>
                    <button class="button" onclick="filterData('dessert')">Dessert</button>
                    <button class="button" onclick="filterData('breakfast')">Breakfast Menu</button>
                    <button class="button" onclick="filterData('beverages')">Beverages</button>
                </div>
            </div>
            <div class="food-menu">
                <div class="row row-cols-1 row-cols-md-4 g-4">
                    <?php foreach ($menu as $m) : ?>
                        <div class="column snack">
                            <div class="col">
                                <div class="card h-100" style="width: 15rem;">
                                    <img src="/img/<?= $m['gambar']; ?>" class="card-img-top" alt="...">
                                    <div class="card-body">
                                        <h5 class="card-title"><?= $m['nama']; ?></h5>
                                        <p class="card-text"><?= $m['deskripsi']; ?></p>
                                        <h5 class="card-text"><span><?= $m['harga']; ?></span></h5>
                                        <p class="ready"><i><?= $m['tersedia']; ?></i></p>

                                        <a href="/menu/<?= $m['slug']; ?>">
                                            <h5>Detail Menu</h5>
                                        </a>

                                    </div>
                                </div>
                            </div>
                        </div>
                    <?php endforeach; ?>
                </div>
            </div>
        </div>
    </div>
</div>

<script>
    // Filter Sort Menu
    filterData("all")

    function filterData(c) {
        var x, i;
        x = document.getElementsByClassName("column");
        if (c == "all") c = "";
        for (i = 0; i < x.length; i++) {
            w3RemoveClass(x[i], "show");
            if (x[i].className.indexOf(c) > -1) w3AddClass(x[i], "show");
        }
    }

    function w3AddClass(element, name) {
        var i, arr1, arr2;
        arr1 = element.className.split(" ");
        arr2 = name.split(" ");
        for (i = 0; i < arr2.length; i++) {
            if (arr1.indexOf(arr2[i]) == -1) {
                element.className += " " + arr2[i];
            }
        }
    }

    function w3RemoveClass(element, name) {
        var i, arr1, arr2;
        arr1 = element.className.split(" ");
        arr2 = name.split(" ");
        for (i = 0; i < arr2.length; i++) {
            while (arr1.indexOf(arr2[i]) > -1) {
                arr1.splice(arr1.indexOf(arr2[i]), 1);
            }
        }
        element.className = arr1.join(" ");
    }


    //Add active class to the current button (highlight it)
    var btnContainer = document.getElementById("foodFilter");
    var btns = btnContainer.getElementsByClassName("button");
    for (var i = 0; i < btns.length; i++) {
        btns[i].addEventListener("click", function() {
            var current = document.getElementsByClassName("active");
            current[0].className = current[0].className.replace(" active", "");
            this.className += " active";
        });
    }
</script>

<?= $this->endSection(); ?>