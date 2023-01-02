<!doctype html>
<html lang="en">

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
    /* width */
    ::-webkit-scrollbar {
        width: 10px;
    }

    /* Track */
    ::-webkit-scrollbar-track {
        background: #f1f1f1;
    }

    /* Handle */
    ::-webkit-scrollbar-thumb {
        background: #478a63;
    }

    /* Handle on hover */
    ::-webkit-scrollbar-thumb:hover {
        background: #555;

    }

    body {
        background-image: url("<?= base_url('assets/') ?>Background.png");
        background-size: cover;
        background-attachment: fixed;
        background-repeat: no-repeat;
        font-family: 'Poppins', sans-serif;
    }

    #myBtn {
        width: 120px;
        text-align: center;
    }

    .green {
        color: #478a63;
    }

    /* .navbar-inverse {
        background-color: #B6CEC1;
    } */
</style>

<body>
    <nav class="navbar navbar-default navbar navbar-fixed-top px-4">
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
    <main class="container-fluid px-4 p-3 mt-5 tentang1" id="konten">
        <div class="me-auto disabled" style="width: 300px;">
            <div class="input-group mb-3">
                <input type="text" class="form-control" id="dicari" placeholder="Cari" width="100px" disabled>
                <button class="btn btn-outline-success" type="button" id="btn-cari" onclick="cari()" disabled>
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-search" viewBox="0 0 16 16">
                        <path d="M11.742 10.344a6.5 6.5 0 1 0-1.397 1.398h-.001c.03.04.062.078.098.115l3.85 3.85a1 1 0 0 0 1.415-1.414l-3.85-3.85a1.007 1.007 0 0 0-.115-.1zM12 6.5a5.5 5.5 0 1 1-11 0 5.5 5.5 0 0 1 11 0z" />
                    </svg>
                </button>
            </div>
        </div>
        <div>
            <div class="row">
                <div class="col-10">
                    <h3 class="green"><b id="text1">Idzhar</b></h3>
                    <p id="text2" class="margin-left" style="text-align: justify;">Apabila nun mati atau tanwin bertemu dengan huruf-huruf idzhar, maka cara membacanya yaitu jelas.
                        Huruf-huruf idzhar ini dibaca jelas karena tempat keluarnya huruf-huruf tersebut adalah mulut, ada pada kerongkongan atau tenggorokan.</p>
                    <p id="text3" class="margin-left" style="text-align: justify;">Huruf-huruf idzhar : ا ع غ ح خ ها</p>
                    <p id="text4" class="margin-left" style="text-align: justify;">Contoh : </p>
                    <p id="text5" class="margin-left" style="text-align: justify;">
                    <ol class="margin-left-list" type="a">
                        <li id="text6">مِنْ آَلِ فِرْعَوْنَ Nun mati bertemu dengan أ</li>
                        <li id="text7">فَكُلُوا مِنْهَا حَيْثُ Nun mati bertemu dengan هـ</li>
                        <li id="text8">بِغَافِلٍ عَمَّا تَعْمَلُونَ Nun mati bertemu dengan ع</li>
                        <li id="text9">مِنْ غَفُورٍ رَحِيم Nun mati bertemu dengan غ</li>
                        <li id="text10">أَنَّ اللَّهَ عَزِيزٌ حَكِيمٌ Tanwin bertemu dengan ح</li>
                        <li id="text11">كُونُوا قِرَدَةً خَاسِئِينَ Tanwin bertemu dengan خ</li>
                    </ol>
                    </p>
                </div>
                <div class="col-2 mt-5" style="top: 0;right: 0; position:absolute; margin-right: 120px;">
                    <img src="<?= base_url('assets/') ?>/3D text/3DTeks(Tajwid).png" alt="Tajwid" style="width:350px">
                </div>
            </div>
            <h3 class="green"><b id="text12">Idgham Bigunnah</b></h3>
            <p id="text13" class="margin-left" style="text-align: justify;">Apabila nun mati atau tanwin bertemu dengan huruf-huruf idgham bigunnah, maka dibacanya dengan mendengung.
                Idgham artinya memasukkan, dan bigunnah artinya mendengung. Jadi cara membacanya dengan ditasydidkan ke dalam salah satu huruf idgham dengan suara yang mendengung.</p>
            <p id="text14" class="margin-left" style="text-align: justify;">Huruf-huruf idgham bigunnah : ي ن م و</p>
            <p id="text15" class="margin-left" style="text-align: justify;">Contoh : </p>
            <p class="margin-left" style="text-align: justify;">
            <ol class="margin-left-list" type="a">
                <li id="text16">مِنْ قَبْلِ أَنْ يَتَمَاسَّا Nun mati bertemu dengan ي</li>
                <li id="text17">إِلَّا سَاعَةً مِنْ نَهَارٍ Nun mati bertemu dengan ن</li>
                <li id="text18">وَأَنْفِقُوا مِنْ مَا رَزَقْنَاكُمْ Nun mati bertemu dengan م</li>
                <li id="text19">مِنْ دُونِهِ مِنْ وَالٍ Nun mati bertemu dengan و</li>
            </ol>
            </p>
            <h3 class="green"><b id="text20">Idgham Bilagunnah</b></h3>
            <p id="text21" class="margin-left" style="text-align: justify;">Apabila nun mati atau tanwin bertemu dengan huruf-huruf idgham bilagunnah, maka dibacanya dengan dimasukkan namun tidak berdengung.
                Idgham artinya memasukkan, dan bilagunnah artinya tidak mendengung. Jadi cara membacanya dengan ditasydidkan ke dalam salah satu huruf idham dengan suara yang tidak mendengung.</p>
            <p id="text22" class="margin-left" style="text-align: justify;">Huruf-huruf idgham bigunnah : ل ر</p>
            <p id="text23" class="margin-left" style="text-align: justify;">Contoh : </p>
            <p class="margin-left" style="text-align: justify;">
            <ol class="margin-left-list" type="a">
                <li id="text24">فَضْلًا مِنْ رَبِّكَ Nun Mati bertemu dengan ر</li>
                <li id="text25">قَالَ لَمْ أَكُنْ لِأَسْجُدَ Nun Mati bertemu dengan ل</li>
            </ol>
            </p>
            <h3 class="green"><b id="text26">Iqlab</b></h3>
            <p id="text27" class="margin-left" style="text-align: justify;">Apabila nun mati atau tanwin bertemu dengan huruf iqlab maka dibacanya dengan ditukar.
                Iqlab artinya meleburkan atau lebih mudahnya cara membacanya dengan menukar huruf menjadi huruf mim.</p>
            <p id="text28" class="margin-left" style="text-align: justify;">Huruf iqlab : ب</p>
            <p id="text29" class="margin-left" style="text-align: justify;">Contoh : </p>
            <p class="margin-left" style="text-align: justify;">
            <ol class="margin-left-list" type="a">
                <li id="text30">أَنْ تُنْبِتُوا Nun mati bertemu dengan ب</li>
                <li id="text31">كُلُّ حِزْبٍ بِمَا Tanwin bertemu dengan ب</li>
            </ol>
            </p>
            <h3 class="green"><b id="text32">Ikhfa</b></h3>
            <p id="text33" class="margin-left" style="text-align: justify;">Apabila nun mati atau tanwin bertemu dengan huruf-huruf ikhfa haqiqi, maka dibacanya dengan samar-samar.
                Ikhfa artinya menyamar atau menyembunyikan sedangkan haqiqi artinya sungguh-sungguh. Jadi cara membacanya harus terang dengan adanya dengung.</p>
            <p id="text34" class="margin-left" style="text-align: justify;">Huruf-huruf Ikhfa Haqiqi : ت ث ج د ذ ز س ش ص ض ط ظ ف ق ك</p>
            <p id="text35" class="margin-left" style="text-align: justify;">Contoh :</p>
            <p class="margin-left" style="text-align: justify;">
            <ol class="margin-left-list" type="a">
                <li id="text36">أَنْتُمْ Nun mati bertemu dengan ت</li>
                <li id="text37">مَنْثُورًا Nun mati bertemu dengan ث</li>
                <li id="text38">فَأَنْجَيْنَاه Nun mati bertemu dengan ج</li>
                <li id="text39">عِنْدَهُ Nun mati bertemu dengan د</li>
                <li id="text40">لِيُنْذِرَكُمْ Nun mati bertemu dengan ذ</li>
            </ol>
            </p>
        </div>
        <div class="col" style="text-align: right;">
            <a class="btn btn-success me-2" role="button" href="<?= base_url('mulai') ?>"><i class="fa-solid fa-arrow-left"></i> Kembali</a>
            <button class="btn btn-success me-2" onclick="topFunction()" id="myBtn" title="Go to top"><i class="fas fa-arrow-up"></i> Ke Atas</button>
        </div>
    </main>

    <div class="row mt-5 no-gutters">
        <div class="row mb-3 text-center">
            <!-- <div class="col-6 text-midle"> -->
            <!-- </div> -->
        </div>
    </div>
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
        // Get the button
        // let mybutton = document.getElementById("myBtn");
        // When the user scrolls down 20px from the top of the document, show the button
        // window.onscroll = function() {scrollFunction()};
        // function scrollFunction() {
        //     if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
        //         mybutton.style.display = "block";
        //     } else {
        //         mybutton.style.display = "none";
        //     }
        // }
        // When the user clicks on the button, scroll to the top of the document
        document.addEventListener("DOMContentLoaded", () => {
            document.getElementById("dicari").removeAttribute("disabled");
            document.getElementById("btn-cari").removeAttribute("disabled");
        });

        document.getElementById('dicari').addEventListener('keyup', event => {
            if (event.keyCode == 13) {
                cari();
            }
        });

        function cari() {
            const input = document.getElementById('dicari').value.toLowerCase();
            if (input != "") {
                const regExp = new RegExp(input, "gi");
                for (let i = '1'; i < 41; i++) {
                    document.getElementById('text' + i).innerHTML = document.getElementById('text' + i).textContent.replace(regExp, "<mark id=mark>$&</mark>")
                }
                if (document.getElementById("mark")) {
                    document.location.href = "<?= base_url('mulai/tajwid') ?>#mark";
                }
            }
        }

        function topFunction() {
            document.body.scrollTop = 0;
            document.documentElement.scrollTop = 0;
        }
    </script>
</body>

</html>