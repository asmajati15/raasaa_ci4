<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <link rel="stylesheet" href="/css/style.css">

    <title><?= $title; ?></title>

</head>

<body>

    <nav class="navbar navbar-expand-lg navbar-light bg-light sticky-top">
        <div class="container">
            <a class="navbar-brand" href="#">
                <img src="https://kebunraya.id/images/logo/color/bogor-color.png" alt="" width="150" height="90">
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNavDropdown">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link" aria-current="page" href="#">Beranda</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            Konservasi
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                            <li><a class="dropdown-item" href="#">Program Konservasi - Taman Meksiko</a></li>
                            <li><a class="dropdown-item" href="#">Program Konservasi - Taman Akuatik</a></li>
                            <li><a class="dropdown-item" href="#">Untuk Indonesia</a></li>
                            <li><a class="dropdown-item" href="#">Konservasi</a></li>
                        </ul>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            Penelitian
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                            <li><a class="dropdown-item" href="#">Penelitian</a></li>
                        </ul>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            Pendidikan
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                            <li><a class="dropdown-item" href="#">Tour De Kebun Raya</a></li>
                            <li><a class="dropdown-item" href="#">Study Tour</a></li>
                            <li><a class="dropdown-item" href="#">Botarium</a></li>
                            <li><a class="dropdown-item" href="#">Virtual Tour</a></li>
                        </ul>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            Wisata
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                            <li><a class="dropdown-item" href="#">Spot Menarik</a></li>
                            <li><a class="dropdown-item" href="#">Acara</a></li>
                            <li><a class="dropdown-item" href="#">Penyewaan</a></li>
                            <li><a class="dropdown-item" href="#">Merchandise</a></li>
                            <li><a class="dropdown-item" href="#">Member</a></li>
                        </ul>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Tentang Kami</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Karir</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <div id="carouselExampleInterval" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-inner">
            <div class="carousel-item active" data-bs-interval="10000">
                <img src="/img/carousel1b.jpg" class="d-block w-100" alt="...">
                <div class="carousel-caption d-none d-md-block">
                    <img src="/img/raasaa_logo.png" class="reslogo" width="60%" height="60%" alt="">
                    <h5>Rasakan pengalaman menikmati hidangan di Keasrian Kebun Raya</h5>
                </div>
            </div>
            <div class="carousel-item" data-bs-interval="2000">
                <img src="/img/carousel2b.jpg" class="d-block w-100" alt="...">
                <div class="carousel-caption d-none d-md-block">
                    <img src="/img/raasaa_logo.png" class="reslogo" width="60%" height="60%" alt="">
                    <h5>Rasakan pengalaman menikmati hidangan di Keasrian Kebun Raya</h5>
                </div>
            </div>
            <div class="carousel-item">
                <img src="/img/carousel3b.jpg" class="d-block w-100" alt="...">
                <div class="carousel-caption d-none d-md-block">
                    <img src="/img/raasaa_logo.png" class="reslogo" width="60%" height="60%" alt="">
                    <h5>Rasakan pengalaman menikmati hidangan di Keasrian Kebun Raya</h5>
                </div>
            </div>
            <div class="carousel-item">
                <img src="/img/carousel4b.jpg" class="d-block w-100" alt="...">
                <div class="carousel-caption d-none d-md-block">
                    <img src="/img/raasaa_logo.png" class="reslogo" width="60%" height="60%" alt="">
                    <h5>Rasakan pengalaman menikmati hidangan di Keasrian Kebun Raya</h5>
                </div>
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

    <div id="demos" class="padding-90 text-center bg-off-white fix mt-5">
        <div class="container">
            <div class="row">
                <div class="section-title text-center col-xs-12 mb-2">
                    <h1>Choose Your Menu</h1>
                </div>
                <div class="food-filter col-x-12 m-2 mb-5">
                    <button class="button active" data-filter="all">All Menu</button>
                    <button class="button" data-filter=".snacknveg">Snack & Vegetables</button>
                    <button class="button" data-filter=".indonesian">Indonesian Taste</button>
                    <button class="button" data-filter=".western">Western Taste</button>
                    <button class="button" data-filter=".dessert">Dessert</button>
                    <button class="button" data-filter=".breakfast">Breakfast Menu</button>
                    <button class="button" data-filter=".beverages">Beverages</button>
                </div>
            </div>
            <div class="food-menu">
                <div class="row row-cols-1 row-cols-md-4 g-4">
                    <div class="col">
                        <div class="card h-100" style="width: 15rem;">
                            <img src="/img/SignatureFriedRice.png" class="card-img-top" alt="...">
                            <div class="card-body">
                                <h5 class="card-title">Signature Fried Rice</h5>
                                <p class="card-text">Nasi goreng kluwek disajikan dengan cumi goreng pedas</p>
                                <h5 class="card-text"><span>IDR 65.000</span></h5>
                                <p class="ready"><i>Tersedia</i></p>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="card h-100" style="width: 15rem;">
                            <img src="/img/OxtailSoup.png" class="card-img-top" alt="...">
                            <div class="card-body">
                                <h5 class="card-title">Oxtail Soup (Original/ Fried/ Grill)</h5>
                                <p class="card-text">Potongan daging buntut Sapi yang disajikan bersama dengan nasi putih</p>
                                <h5 class="card-text"><span>IDR 160.000</span></h5>
                                <p class="ready"><i>Tidak Tersedia</i></p>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="card h-100" style="width: 15rem;">
                            <img src="/img/BeefTeriyakiwithRice.jpg" class="card-img-top" alt="...">
                            <div class="card-body">
                                <h5 class="card-title">Beef Teriyaki with Rice</h5>
                                <p class="card-text">Daging Teriyaki dengan Nasi</p>
                                <h5 class="card-text"><span>IDR 65.000</span></h5>
                                <p class="ready"><i>Tersedia</i></p>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="card h-100" style="width: 15rem;">
                            <img src="/img/SeafoodTomYam.jpg" class="card-img-top" alt="...">
                            <div class="card-body">
                                <h5 class="card-title">Seafood Tom Yam</h5>
                                <p class="card-text">Makanan Laut dengan bumbu Tom Yam</p>
                                <h5 class="card-text"><span>IDR 70.000</span></h5>
                                <p class="ready"><i>Tersedia</i></p>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="card h-100" style="width: 15rem;">
                            <img src="/img/OxtailFriedRice.jpg" class="card-img-top" alt="...">
                            <div class="card-body">
                                <h5 class="card-title">Oxtail Fried Rice</h5>
                                <p class="card-text">Nasi Goreng Buntut</p>
                                <h5 class="card-text"><span>IDR 67.000</span></h5>
                                <p class="ready"><i>Tidak Tersedia</i></p>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="card h-100" style="width: 15rem;">
                            <img src="https://www.kitchensanctuary.com/wp-content/uploads/2020/07/Nasi-Goreng-square-FS-57-500x500.jpg" class="card-img-top" alt="...">
                            <div class="card-body">
                                <h5 class="card-title">Javanese Fried Rice</h5>
                                <p class="card-text">Nasi Goreng Jawa yang disajikan dengan Ayam Goreng</p>
                                <h5 class="card-text"><span>IDR 60.000</span></h5>
                                <p class="ready"><i>Tersedia</i></p>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="card h-100" style="width: 15rem;">
                            <img src="https://www.datawisata.com/wp-content/uploads/2019/01/grandgardencafe-nasi-goreng-grand-garden.jpg" class="card-img-top" alt="...">
                            <div class="card-body">
                                <h5 class="card-title">KRB Fried Rice</h5>
                                <p class="card-text">Nasi goreng yang dimasak dengan bumbu khas Kebun Raya Bogor dan disajikan dengan Sate Seafood</p>
                                <h5 class="card-text"><span>IDR 70.000</span></h5>
                                <p class="ready"><i>Tidak Tersedia</i></p>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="card h-100" style="width: 15rem;">
                            <img src="https://i1.wp.com/resepkoki.id/wp-content/uploads/2016/04/Resep-Mie-Goreng-Seafood.jpg?fit=1280%2C1776&ssl=1" class="card-img-top" alt="...">
                            <div class="card-body">
                                <h5 class="card-title">Seafood Fried Noodle</h5>
                                <p class="card-text">Mie Goreng disajikan dengan udang, cumi dan ikan dori</p>
                                <h5 class="card-text"><span>IDR 65.000</span></h5>
                                <p class="ready"><i>Tersedia</i></p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <section id="address" class="address mb-5">
        <div class="container">
            <div class="row pt-5">
                <div class="col">
                    <h2>Contact us</h2>
                </div>
            </div>
            <div class="row mt-5">
                <div class="col">
                    <h4>Telfon</h4>
                    <p>0857-1946-9999<br>0812-8033-599</p>
                    <h4>Instagram</h4>
                    <p>@raasaa.resto</p>
                </div>
                <div class="col">
                    <h4>Kantor Pusat</h4>
                    <p>Astrid Avenue, Kebun Raya Bogor</p>
                </div>
            </div>
        </div>
    </section>

    <footer class="bg-dark text-white">
        <div class="container">
            <div class="row pt-2">
                <div class="col text-center">
                    <p>Asmajati Ananto | 2021</p>
                </div>
            </div>
        </div>
    </footer>

    <!-- Optional JavaScript; choose one of the two! -->
    <script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" crossorigin="anonymous"></script>
    <script src="/js/scriptres.js"></script>
    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
    -->
</body>

</html>