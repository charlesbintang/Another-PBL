<!doctype html>
<html lang="en">
<!-- class="h-100" -->

<head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://getbootstrap.com/docs/5.2/assets/css/docs.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>

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

    /* Style the tab */
    .tab {
        overflow: hidden;
        border: 1.5px solid #478a63;
        border-radius: 10px;
        /* border: 1px solid #ccc;
        background-color: #f1f1f1; */
    }

    /* Style the buttons inside the tab */
    .tab button {
        background-color: inherit;
        float: left;
        border: none;
        outline: none;
        cursor: pointer;
        padding: 14px 16px;
        transition: 0.3s;
        font-size: 17px;
    }

    /* Change background color of buttons on hover */
    .tab button:hover {
        background-color: #d3c457;
    }

    /* Create an active/current tablink class */
    .tab button.active {
        background-color: #478a63;
    }

    /* Style the tab content */
    .tabcontent {
        /* border: 1px solid #ccc;
        border-top: none; */
        display: none;
        padding: 6px 12px;
        -webkit-animation: fadeEffect 1s;
        animation: fadeEffect 1s;
    }

    /* Fade in tabs */
    @-webkit-keyframes fadeEffect {
        from {
            opacity: 0;
        }

        to {
            opacity: 1;
        }
    }

    @keyframes fadeEffect {
        from {
            opacity: 0;
        }

        to {
            opacity: 1;
        }
    }

    table,
    tr,
    td {
        cursor: pointer;
        text-align: center;
        border: 2px solid #208454;
        border-color: #208454;
        /* border-collapse: collapse; */
        /* width: 50%; */
    }

    td:hover {
        background-color: #208454;
    }

    /* .tablinks {
        border-right: 1.5px solid red;
    } */

    /* Style the close button */
    .closeButton {
        float: right;
        cursor: pointer;
        font-size: 28px;
    }

    .closeButton:hover {
        color: red;
    }
</style>

<body>
    <nav class="navbar fixed-top px-4">
        <h4 class="float-md-start mb-0"><b>Belajar Mengaji</b></h4>
        <ul class="nav nav-masthead justify-content-center float-md-end">
            <li class="nav-item">
                <a class="nav-link" href="<?= base_url() ?>">Beranda</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="<?= base_url('Pembelian') ?>">Pembelian Al-Qur'an</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="<?= base_url('tentang') ?>">Tentang</a>
            </li>
        </ul>
    </nav>
    <main class="container-fluid px-4 p-3 mt-5">
        <div class="row g-0">
            <div class="col" id="kiri">
                <h3><b>Mata Pelajaran</b></h3>
                <p class="lead mt-3">Pilih Mata Pelajaran yang ingin kamu pelajari hari ini</p>
                <div class="mt-3">
                    <table class="table" style="width:100%">
                        <thead>
                            <tr>
                                <td scope="col" class="tablinks" onclick="openCity(event, 'AqidahAkhlak')">Aqidah Akhlak</td> <!-- id="defaultOpen" -->
                                <td scope="col" class="tablinks" onclick="openCity(event, 'Fiqih')">Fiqih</td>
                                <td scope="col" class="tablinks" onclick="openCity(event, 'Tajwid')">Tajwid</td>
                                <!-- <td scope="col" class="tablinks" onclick="openCity(event, 'Tauhid')">Tauhid</td> -->
                                <td scope="col" class="tablinks" onclick="openCity(event, 'KisahNabi')">Kisah Nabi</td>
                            </tr>
                        </thead>
                    </table>
                </div>
                <!-- <div class="tab mt-3">
                    <button class="tablinks" onclick="openCity(event, 'AqidahAkhlak')">Aqidah Akhlak</button> id="defaultOpen"
                    <button class="tablinks" onclick="openCity(event, 'Fiqih')">Fiqih</button>
                    <button class="tablinks" onclick="openCity(event, 'Tajwid')">Tajwid</button>
                    <button class="tablinks" onclick="openCity(event, 'Tauhid')">Tauhid</button>
                    <button class="tablinks" onclick="openCity(event, 'KisahNabi')">Kisah Nabi</button>
                </div> -->

                <div id="AqidahAkhlak" class="tabcontent mt-3">
                    <span onclick="this.parentElement.style.display='none'" class="closeButton">&times</span>
                    <h3>Aqidah Akhlak</h3>
                    <p class="mapel" style="text-align: justify;">Aqidah merupakan akar atau pokok Agama, sedangkan
                        Akhlak merupakan sikap hidup atau kepribadian manusia dalam menjalankan sistem kehidupannya yang
                        dilandasi oleh Aqidah yang kokoh. Dengan kata lain, Akhlak merupakan manifestasi dari keimanan
                        (Aqidah).</p>
                    <a href="<?= base_url('mulai/aqidah_akhlak') ?>" class="btn btn-lg btn-success mt-3">Selengkapnya</a>
                </div>

                <div id="Fiqih" class="tabcontent mt-3">
                    <span onclick="this.parentElement.style.display='none'" class="closeButton">&times</span>
                    <h3>Fiqih</h3>
                    <p class="mapel" style="text-align: justify;">Fiqih adalah salah satu bidang ilmu dalam syariat
                        Islam yang secara khusus membahas persoalan hukum yang mengatur berbagai aspek kehidupan
                        manusia, baik kehidupan pribadi, bermasyarakat maupun kehidupan manusia dengan Allah </p>
                    <a href="<?= base_url('mulai/fiqih') ?>" class="btn btn-lg btn-success mt-3">Selengkapnya</a>
                </div>

                <div id="Tajwid" class="tabcontent mt-3">
                    <span onclick="this.parentElement.style.display='none'" class="closeButton">&times</span>
                    <h3>Tajwid</h3>
                    <p class="mapel" style="text-align: justify;">Tajwid merupakan turunan dari ilmu qiraat, atau ilmu
                        membaca Alquran. Dalam pengertian sederhana, tajwid berguna agar kita tidak salah dalam mengucap
                        huruf dalam Alquran.</p>
                    <a href="<?= base_url('mulai/tajwid') ?>" class="btn btn-lg btn-success mt-3">Selengkapnya</a>
                </div>

                <!-- <div id="Tauhid" class="tabcontent mt-3">
                    <span onclick="this.parentElement.style.display='none'" class="closeButton">&times</span>
                    <h3>Tauhid</h3>
                    <p class="mapel" style="text-align: justify;">Tauhid merupakan </p>
                    <a href="mpTauhid.html" class="btn btn-lg btn-success mt-3">Selengkapnya</a>
                </div> -->

                <div id="KisahNabi" class="tabcontent mt-3">
                    <span onclick="this.parentElement.style.display='none'" class="closeButton">&times</span>
                    <h3>Kisah Nabi</h3>
                    <p class="mapel" style="text-align: justify;">Kisah nabi adalah salah satu bidang ilmu yang secara
                        khusus membahas sejarah sejarah nabi dan rasul.</p>
                    <a href="<?= base_url('mulai/kisah_nabi') ?>" class="btn btn-lg btn-success mt-3">Selengkapnya</a>
                </div>
                <!-- <select class="form-select form-select-lg mb-3" aria-label=".form-select-lg example">
                    <option selected>Mata Pelajaran</option>
                    <option value="Aqidah Akhlak">Aqidah Akhlak</option>
                    <option value="Fiqih">Fiqih</option>
                    <option value="Tajwid">Tajwid</option>
                    <option value="Kisah Nabi">Kisah Nabi</option>
                </select> -->
                <!-- <p class="lead">
                    <a href="<?= base_url('mulai') ?>" class="btn btn-lg btn-success fw-bold border-white bg-white">Learn more</a>
                </p> -->
            </div>
            <div class="col" id="kanan">
                <img src="<?= base_url('assets/') ?>Icon.png" alt="Al-Quran" style="width:500px" id="AlQuran">
            </div>
        </div>
    </main>
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

    <script>
        function openCity(evt, cityName) {
            var i, tabcontent, tablinks;
            tabcontent = document.getElementsByClassName("tabcontent");
            for (i = 0; i < tabcontent.length; i++) {
                tabcontent[i].style.display = "none";
            }
            tablinks = document.getElementsByClassName("tablinks");
            for (i = 0; i < tablinks.length; i++) {
                tablinks[i].className = tablinks[i].className.replace(" active", "");
            }
            document.getElementById(cityName).style.display = "block";
            evt.currentTarget.className += " active";
        }
        // Get the element with id="defaultOpen" and click on it
        document.getElementById("defaultOpen").click();
    </script>
</body>

</html>