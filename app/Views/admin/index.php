<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap Online CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <!-- Bootstrap Offline CSS -->
    <!-- <link rel="stylesheet" href="/css/bootstrap.css"> -->
    <link rel="stylesheet" href="/css/style_admin.css">

    <title><?= $title; ?></title>

</head>

<body>

    <nav class="navbar navbar-expand-lg navbar-light sticky-top">
        <div class="container">
            <a class="navbar-brand" href="/tempat_ngedit">
                <img src="/img/admin_raasaa.png" alt="" width="170" height="90">
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
        </div>
    </nav>

    <div class="container text-center bg-off-white my-5">
        <div class="row">
            <div class="col">
                <div class="card h-100 mx-auto" style="width: 20rem;">
                    <img src="/img/admin_ico0.png" class="card-img-top" alt="...">
                    <div class="card-body">
                        <a href="/admin/menu">
                            <h5>Edit Menu</h5>
                        </a>
                        <p class="card-text">Bagian untuk mengedit daftar menu.</p>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card h-100 mx-auto" style="width: 20rem;">
                    <img src="/img/admin_ico1.png" class="card-img-top" alt="...">
                    <div class="card-body">
                        <a href="/admin/jenis">
                            <h5>Edit Daftar Jenis</h5>
                        </a>
                        <p class="card-text">Bagian untuk mengedit daftar jenis menu.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <footer class="bg-dark text-white mt-5">
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

    <!-- My JavaScript -->
    <!-- <script src="js/scriptres.js"></script> -->

    <!-- Bootstrap Bundle Offline -->
    <!-- <script src="js/bootsrap.min.js"></script> -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
    -->
</body>

</html>