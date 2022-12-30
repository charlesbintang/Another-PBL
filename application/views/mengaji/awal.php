<!doctype html>
<html lang="en">
<!-- class="h-100" -->

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="PBL_MJ009">
    <meta name="author" content="Farid Jafar">
    <meta name="generator" content="Arfandi">
    <title>Belajar Mengaji</title>
    <link rel="icon" type="image/x-icon" href="assets/favicon.ico" />

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <link rel="stylesheet" href="<?= base_url('assets/') ?>fontawesome/css/all.min.css">
    <link rel="stylesheet" href="<?= base_url('assets/') ?>css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css" integrity="sha512-MV7K8+y+gLIBoVD59lQIYicR65iaqukzvf/nwasF0nqhPay5w/9lJmVM2hMDcnK1OnMGCdVK+iQrJ7lzPJQd1w==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,400;0,500;0,700;0,800;0,900;1,400;1,500;1,600&display=swap">

    <!--CSS Custom-->
    <!-- <link rel="stylesheet" href="admin.css" type="text/css"> -->
    <!--CSS Custom-->
    <script src="<?= base_url('assets/') ?>js/jquery.min.js"></script>
    <script src="<?= base_url('assets/') ?>js/bootstrap.min.js"></script>
    <script src="<?= base_url('assets/') ?>js/bootstrap.js"></script>
</head>
<link rel="stylesheet" href="<?= base_url('assets/') ?>css/style.css" type="text/css">
<style>
    body {
        background-image: url("<?= base_url('assets/') ?>Background.png");
        background-size: cover;
        background-attachment: fixed;
        background-repeat: no-repeat;
        font-family: 'Poppins', sans-serif;
    }

    @font-face {
        font-family: Poppins;
        src: url(<?= base_url() ?>assets/font/Poppins-Regular.ttf);
    }

    /* .bd-placeholder-img {
        font-size: 1.125rem;
        text-anchor: middle;
        -webkit-user-select: none;
        -moz-user-select: none;
        user-select: none;
    }*/

    /*@media (min-width: 768px) {
        .bd-placeholder-img-lg {
            font-size: 3.5rem;
        }
    }*/

    /*.b-example-divider {
        height: 3rem;
        background-color: rgba(0, 0, 0, .1);
        border: solid rgba(0, 0, 0, .15);
        border-width: 1px 0;
        box-shadow: inset 0 .5em 1.5em rgba(0, 0, 0, .1), inset 0 .125em .5em rgba(0, 0, 0, .15);
    }*/

    /*.b-example-vr {
        flex-shrink: 0;
        width: 1.5rem;
        height: 100vh;
    }*/

    /*.bi {
        vertical-align: -.125em;
        fill: currentColor;
    }*/

    /*.nav-scroller {
        position: relative;
        z-index: 2;
        height: 2.75rem;
        overflow-y: hidden;
    }*/

    /*.nav-scroller .nav {
        display: flex;
        flex-wrap: nowrap;
        padding-bottom: 1rem;
        margin-top: -1px;
        overflow-x: auto;
        text-align: center;
        white-space: nowrap;
        -webkit-overflow-scrolling: touch;
    } */
</style>

<body>
    <!-- class="d-flex h-100" -->
    <nav class="navbar px-4">
        <h4 class="float-md-start mb-0"><b>Belajar Mengaji</b></h4>
        <ul class="nav nav-masthead justify-content-center float-md-end">
            <li class="nav-item">
                <a class="nav-link" href="index.html">Beranda</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="pembelian.html">Pembelian Al-Qur'an</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="tentang.html">Tentang</a>
            </li>
        </ul>
    </nav>
    <main class="container-fluid px-4 p-3 mt-5">
        <div class="row g-0">
            <div class="col" id="kiri">
                <h4 class="mt-3">Assalamu'alaikum, Selamat Datang</h4>
                <h2 class="mt-3" style="color: #478a63; font-weight: bold;">Belajar Mengaji menjadi lebih mudah dan
                    praktis</h2>
                <p class="lead mt-3">Belajar ngaji sekarang dengan gratis tanpa perlu login</p>
                <a class="btn btn-success mt-3" href="matapelajaran.html" role="button">Mulai</a>
                <!-- <p class="lead">
                    <a href="matapelajaran.html" class="btn btn-lg btn-success fw-bold border-white bg-white">Learn more</a>
                </p> -->
            </div>
            <div class="col" id="kanan">
                <img src="assets/Alquran.png" alt="Al-Quran" style="width:450px" id="AlQuran">
            </div>
        </div>
    </main>
    <!-- <div class="cover-container d-flex w-100 h-100 p-3 mx-auto flex-column">
        <header class="mb-auto">
            <div>
                <h3 class="float-md-start mb-0">Belajar Mengaji</h3>
                <nav class="nav nav-masthead justify-content-center float-md-end">
                    <a class="nav-link fw-bold py-1 px-0 active" aria-current="page" href="index.html">Beranda</a>
                    <a class="nav-link fw-bold py-1 px-0" href="pembelian.html">Pembelian Al-Qur'an</a>
                    <a class="nav-link fw-bold py-1 px-0" href="tentang.html">Tentang</a>
                </nav>
            </div>
        </header>
    </div> -->

    <!-- <div class="mt-5" id="tampilan"> -->
    <!-- <div class="overflow-hidden">
            <div class="row g-0">
                <div class="col" id="kiri">
                    <h3>Assalamu'alaikum, Selamat Datang</h3>
                    <h2>Belajar Mengaji menjadi lebih mudah dan praktis</h2>
                    <p>Belajar ngaji sekarang dengan gratis tanpa perlu login</p>
                    <a class="btn btn-success" href="matapelajaran.html" role="button">Mulai</a>
                </div>
                <div class="col" id="kanan">
                    <img src="assets/Alquran.png" alt="Alquran" style="width:350px">
                </div>
            </div>
        </div> -->
    <!-- <div class="row g-0">
            <div class="col-md-6" id="kiri">
                <h3>Assalamu'alaikum, Selamat Datang</h3>
                <h2>Belajar Mengaji menjadi lebih mudah dan praktis</h2>
                <p>Belajar ngaji sekarang dengan gratis tanpa perlu login</p>
                <a class="btn btn-success" href="matapelajaran.html" role="button">Mulai</a>
            </div>
            <div class="col-md-6" id="kanan">
                <img src="assets/Alquran.png" alt="Alquran" style="width:350px">
            </div>
        </div> -->
    <!-- </div> -->
    <!-- <footer class="text-white"> -->
    <!-- <p>Cover template for <a href="https://getbootstrap.com/" class="text-white">Bootstrap</a>, by <a href="https://twitter.com/mdo" class="text-white">@mdo</a>.</p> -->
    <!-- <div class="copyright bg-dark text-center text-white font-weight-bold p-2">
            <marquee>
                <label>
                    <h5>DEVELOP BY: PBL MJ 009 Team</h5>
                    <p align="center"><i class="far fa-copyright"></i> 2022 All Right Reserved.</p>
                </label>
            </marquee>
        </div>
    </footer> -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
    <!-- Option 1: Bootstrap Bundle with Popper -->
    <!-- <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script> -->
    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!-- <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script> -->

    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
</body>

</html>