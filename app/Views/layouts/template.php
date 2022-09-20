<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap Online CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <!-- Bootstrap Offline CSS -->
    <!-- <link rel="stylesheet" href="/vendor/twbs/bootstrap/dist/css/bootstrap.min.css"> -->
    <link rel="stylesheet" href="/css/style.css">

    <title><?= $title; ?></title>

</head>

<body>

    <nav class="navbar navbar-expand-lg navbar-dark sticky-top">
        <div class="container">
            <a class="navbar-brand" href="/">
                <img src="/img/raasaa_logo1.png" alt="" width="150" height="90">
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item" id="navbar-link">
                        <a class="nav-link" aria-current="page" href="/">
                            <img src="/img/nav-logo0.png" alt="" width="20" height="20">
                            Beranda
                        </a>
                    </li>
                    <li class="nav-item" id="navbar-link">
                        <a class="nav-link" aria-current="page" href="/about">
                            <img src="/img/nav-logo1.png" alt="" width="20" height="20">
                            Tentang Kami
                        </a>
                    </li>
                    <li class="nav-item" id="navbar-link">
                        <a class="nav-link" aria-current="page" href="https://www.google.com/maps/place/Grand+Garden+Resto+%26+Cafe/@-6.5983597,106.801601,17z/data=!3m1!4b1!4m5!3m4!1s0x2e69c5c61cb3f6f7:0xa2dec90d60f85454!8m2!3d-6.5987602!4d106.8038251">
                            <img src="/img/nav-logo2.png" alt="" width="20" height="20">
                            Lokasi
                        </a>
                    </li>
                    <li class="nav-item" id="navbar-link">
                        <a class="nav-link" aria-current="page" href="https://www.kebunraya.id">
                            <img src="/img/nav-logo3.png" alt="" width="20" height="20">
                            Kebun Raya
                        </a>
                    </li>
                </ul>
                <!-- <ul class="navbar-nav ms-auto">
                    <li class="nav-item">
                        <a class="navbar-brand" href="https://www.instagram.com">
                            <img src="/img/ig-logo1.png" alt="" width="35" height="35">
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="navbar-brand" href="https://www.facebook.com">
                            <img src="/img/fb-logo1.png" alt="" width="35" height="35">
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="navbar-brand" href="https://www.twitter.com">
                            <img src="/img/twit-logo1.png" alt="" width="35" height="35">
                        </a>
                    </li>
                </ul> -->
            </div>
        </div>
    </nav>

    <?= $this->renderSection('content'); ?>

    <footer class="d-flex flex-wrap justify-content-beetween align-item-center py-4 my-5 border-top border-bottom">
        <div class="container">
            <div class="row pt-2">
                <div class="col">
                    <h2>Raasaa</h2>
                </div>
                <div class="col">
                </div>
                <div class="col">
                    <h2>Hubungi Kami</h2>
                </div>
            </div>
            <div class="row mt-2">
                <div class="col">
                    <p>Lorem ipsum</p>
                    <p>Lorem ipsum</p>
                    <p>Lorem ipsum</p>
                </div>
                <div class="col">
                    <p>Lorem ipsum</p>
                    <p>Lorem ipsum</p>
                    <p>Lorem ipsum</p>
                </div>
                <div class="col-md-4">
                    <ul class="nav list-unstyled d-flex">
                        <li class="ml-3">
                            <a href="https://www.instagram.com">
                                <img src="/img/ig-logo1.png" alt="" width="35" height="35">
                            </a>
                        </li>
                        <li class="ms-3">
                            <a href="https://www.facebook.com">
                                <img src="/img/fb-logo1.png" alt="" width="35" height="35">
                            </a>
                        </li>
                        <li class="ms-3">
                            <a href="https://www.twitter.com">
                                <img src="/img/twit-logo1.png" alt="" width="35" height="35">
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        <p class="text-center"></p>
    </footer>

    <!-- <footer class="bg-dark text-white">
        <div class="container">
            <div class="row pt-2">
                <div class="col text-center">
                    <p>Asmajati Ananto | 2021</p>
                </div>
            </div>
        </div>
    </footer> -->

    <!-- Optional JavaScript; choose one of the two! -->
    <!-- <script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" crossorigin="anonymous"></script> -->

    <!-- My JavaScript -->
    <!-- <script src="js/scriptres.js"></script> -->
    <script>
        // Preview saat create & edit menu
        function previewImg() {
            const gambar = document.querySelector('#gambar');
            const imgPreview = document.querySelector('.img-preview');

            const fileGambar = new FileReader();
            fileGambar.readAsDataURL(gambar.files[0]);

            fileGambar.onload = function(e) {
                imgPreview.src = e.target.result;
            }
        }
    </script>

    <!-- Bootstrap Bundle Offline -->
    <!-- <script src="/vendor/twbs/bootstrap/dist/js/bootstrap.min.js"></script> -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
    -->
</body>

</html>