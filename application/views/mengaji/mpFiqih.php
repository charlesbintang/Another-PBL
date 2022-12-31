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
        <div>
            <div class="row">
                <div class="col-10">
                    <h3 class="green"><b>Islam, Iman, Ikhlas</b></h3>
                    <h3>Islam</h3>
                    <h4 style="font-size: 15px;">Pengertian :</h4>
                    <p class="margin-left" style="text-align: justify;">Islam yaitu kamu mengakui bahwa tiada Tuhan selain Allah.
                        Dan Muhammad adalah utusan Allah, mendirikan shalat, memberikan zakat, berpuasa dibulan Ramadhan dan beribadah haji ke Ka'bah
                        jika kamu sanggup melakukan perjalanan kesana.(H.R Muslim).</p>
                    <br>
                    <p class="margin-left" style="text-align: justify;">Apa yang Rasulullah SAW sabdakan tersebut kita kenal dengan rukun Islam.
                        Kita baru bisa disebut muslim yang sempurna jika bisa mengerjakan kelima rukun Islam tersebut, yaitu:</p>
                    <p class="margin-left" style="text-align: justify;">
                    <ol class="margin-left-list" type="a">
                        <li>Mengucapkan dua kalimat syahadat</li>
                        <li>Mendirikan shalat lima waktu</li>
                        <li>Membayar zakat</li>
                        <li>Berpuasa dibulan Ramadhan</li>
                        <li>Beribadah haji ke Baitullah bagi orang yang mampu</li>
                    </ol>
                    </p>
                </div>
                <div class="col-2 mt-5" style="top: 0;right: 0; position:absolute; margin-right: 120px;">
                    <img src="<?= base_url('assets/') ?>/3D text/3DTeks(Fiqih).png" alt="Fiqih" style="width:350px">
                </div>
            </div>
            <h3>Iman</h3>
            <h4 style="font-size: 15px;">Pengertian :</h4>
            <p class="margin-left" style="text-align: justify;">Iman yaitu kamu beriman kepada Allah, para Malaikatnya,
                Kitab-kitabnya, para Rosulnya, hari akhir, serta kamu beriman kepada takdir yang baik maupun yang buruk. (H.R Muslim).</p>
            <br>
            <p class="margin-left" style="text-align: justify;">Apa yang Rasulullah sabdakan tersebut kita kenal dengan rukun Iman,
                kita baru bisa disebut seorang mukmin yang sempurna jika mengimani ke enam rukun iman tersebut, yaitu:</p>
            <p class="margin-left" style="text-align: justify;">
            <ol class="margin-left-list" type="a">
                <li>Beriman kepada Allah</li>
                <li>Beriman kepada malaikat Allah</li>
                <li>Beriman kepada kitab-kitab Allah</li>
                <li>Beriman kepada Rasulullah</li>
                <li>Beriman kepada hari akhir (hari kiamat)</li>
                <li>Beriman kepada takdir Allah yang baik maupun yang buruk</li>
            </ol>
            </p>
            <h3>Ikhsan</h3>
            <h4 style="font-size: 15px;">Pengertian :</h4>
            <p class="margin-left" style="text-align: justify;">Ikhsan yaitu engkau beribadah kepada Allah seakan-akan engkau melihatNya,
                sekiranya engkau tidak melihatNya, ketahuilah bahwa Dia (Allah) senantiasa memperhatikanmu (HR.Muslim).</p>
            <br>
            <p class="margin-left" style="text-align: justify;">Jika suatu saat gurumu menyuruhmu mengerjakan sesuatu,
                lalu kamu pun mengerjakannya dengan disaksikan olehnya, sudah dipastikan kamu akan mengerjakannya dengan sungguh-sungguh.</p>
            <br>
            <p class="margin-left" style="text-align: justify;">Demikianlah, kesadaran bahwa kita sedang diawasi dan diperhatikan oleh orang yang menyuruh kita,
                akan berdampak pada kualitas pekerjaan kita, kesadaran seperti itulah tujuan dari Ikhsan. Yaitu, kesadaran bahwa Allah sedang mengawasi dan memperhatikan kita,
                pasti kita shalat dengan sungguh-sungguh,</p>
            <br>
            <p class="margin-left" style="text-align: justify;">Dengan kesadaran seperti itulah yang harus kita terapkan dalam kehidupan sehari-hari yaitu,
                kesadaran bahwa Allah selalu mem,perhatikan dan mengawasi kita, kesadaran seperti ini akan membuat kita terjaga dari buatan dosa.</p>
            <br>
            <p class="margin-left" style="text-align: justify;">Kata para ulama: “untuk membangkitkan pereasaan Ikhsan dalam hati kita,
                sering-seringlah ucapkan tiga kalimat berikut:</p>
            <p class="margin-left" style="text-align: justify;">
            <ol class="margin-left-list" type="a">
                <li>Allahu Ma'i (Allah bersertaku)</li>
                <li>Allahu Nazhirun Ilayya (Allah selalu melihatku)</li>
                <li>Allah Syahidun 'alayya (Allah selalu mengawasiku)</li>
            </ol>
            </p>
            <h3 class="green"><b>Taharah</b></h3>
            <!-- <h3>Islam</h3> -->
            <h4 style="font-size: 15px;">Pengertian :</h4>
            <p class="margin-left" style="text-align: justify;">
            <ol class="margin-left-list" type="a">
                <li>Secara bahasa : Taharah artinya suci atau bersih.</li>
                <li>Secara Istilah : Taharah adalah suci dari hadas dan najis.</li>
            </ol>
            </p>
            <h4 style="font-size: 15px;">Macam-Macam Air</h4>
            <p class="margin-left" style="text-align: justify;">Air yang suci dan dapat digunakan untuk bersuci: </p>
            <p class="margin-left" style="text-align: justify;">
            <ol class="margin-left-list" type="a">
                <li>Air sumur</li>
                <li>Air hujan</li>
                <li>Air sungai</li>
                <li>Air laut</li>
                <li>Air salju atau air es bila telah mencair</li>
                <li>Air embun</li>
                <li>Air mata air</li>
            </ol>
            </p>
            <h4 style="font-size: 15px;">Najis</h4>
            <p class="margin-left" style="text-align: justify;">Setiap benda yang dianggap kotor oleh syari'at Islam,
                dan wajib dibersihkan, karena menjadi penghalang seseorang dalam beribadah pada Allah Swt.</p>
            <br>
            <p class="margin-left" style="text-align: justify;">Benda-benda yang termasuk najis, yaitu :</p>
            <p class="margin-left" style="text-align: justify;">
            <ol class="margin-left-list" type="a">
                <li>Bangkai</li>
                <li>Darah</li>
                <li>Nanah</li>
                <li>Segala sesuatu yang keluar dari dubur, kecuali air mani</li>
                <li>Anjing dan Babi</li>
            </ol>
            </p>
            <h4 style="font-size: 15px;">Istinja</h4>
            <p class="margin-left" style="text-align: justify;">Bembersihkan kubul dan dubur setelah buang air kecil atau buang air besar.
                Istinja ini hukumnya adalah wajib. </p>
            <br>
            <p class="margin-left" style="text-align: justify;">Alat yang di pergunakan untuk istinja, yaitu :</p>
            <p class="margin-left" style="text-align: justify;">
            <ol class="margin-left-list" type="a">
                <li>Air</li>
                <li>Batu</li>
                <li>Benda-benda yang kasar, kesat dan suci</li>
            </ol>
            </p>
            <h4 style="font-size: 15px;">Mandi</h4>
            <p class="margin-left" style="text-align: justify;">Bagi orang yang akan shalat, tidak sah shalatnya jika masih mempunyai hadas besar.</p>
            <br>
            <p class="margin-left" style="text-align: justify;">Hadats besar adalah hadats yang disebabkan oleh persetubuhan, keluar mani, haid, nifas, dan melahirkan.
                Hadats besar dapat dihilangkan dengan mandi junub atau janabat (mandi wajib) hokum mandi ini adalah wajib.</p>
            <br>
            <p class="margin-left" style="text-align: justify;">Hal-hal yang menyebabkan seseorang wajib mandi :</p>
            <p class="margin-left" style="text-align: justify;">
            <ol class="margin-left-list" type="a">
                <li>Bersetubuh</li>
                <li>Keluar air mani</li>
                <li>Meninggal (bukan mati syahid)</li>
                <li>Selesai Haid (menstruasi)</li>
                <li>Selesai Nifas</li>
                <li>Wiladah</li>
            </ol>
            </p>
            <h4 style="font-size: 15px;">Wudhu</h4>
            <!-- <h4 style="font-size: 15px;">Pengertian :</h4> -->
            <p class="margin-left" style="text-align: justify;">Pengertian :
            <ol class="margin-left-list" type="a">
                <li>Secara bahasa : bersih dan indah.</li>
                <li>Secara istilah : menggunakan air pada anggota badan tertentu dengan cara tertentu,
                    yang dimulai dengan niat guna menghilangkan hadats kecil.</li>
            </ol>
            </p>
            <p class="margin-left" style="text-align: justify;">Niat berwudhu :</p>
            <p class="margin-left" style="text-align: justify;">"Aku niat berwudhu untuk menghilangkan hadats kecil, fardhu karena Allah ta'ala".</p>
            <br>
            <p class="margin-left" style="text-align: justify;">Syarat-syarat wudhu :</p>
            <p class="margin-left" style="text-align: justify;">
            <ol class="margin-left-list" type="a">
                <li>Islam</li>
                <li>Tamyiz (mampu untuk menentukan pilihan dan membedakan mana yang baik)</li>
                <li>Bersih dari hadas besar</li>
                <li>Menggunakan air suci dan mensucikan</li>
                <li>Tidak ada benda yang menghalangi kulit</li>
            </ol>
            </p>
            <h4 style="font-size: 15px;">Rukun Wudhu</h4>
            <p class="margin-left" style="text-align: justify;">
            <ol class="margin-left-list" type="a">
                <li>Niat</li>
                <li>Membasuh muka membasuh kedua tangan sampai siku</li>
                <li>Mengusap sebagian kepala</li>
                <li>Membasuh kedua telapak kaki sampai mata kaki</li>
                <li>Tertib (berurutan)</li>
            </ol>
            </p>
            <h4 style="font-size: 15px;">Tayamum</h4>
            <!-- <h4>Pengertian :</h4> -->
            <p class="margin-left" style="text-align: justify;">Tayamum adalah menyapu debu yang suci ke muka dan dua tangan hingga siku dengan beberapa syarat tertentu.</p>
            <br>
            <p class="margin-left" style="text-align: justify;">Fungsinya adalah sebagai pengganti wudhu dalam keadaan tertentu sebagai rukhsah (keringanan) dari Allah SWT.</p>
            <br>
            <p class="margin-left" style="text-align: justify;">Syarat tayamum :</p>
            <p class="margin-left" style="text-align: justify;">
            <ol class="margin-left-list" type="a">
                <li>Ada uzur (alasan)</li>
                <li>Sulit menemukan air</li>
                <li>Menggunakan tanah/debu yang suci</li>
            </ol>
            </p>
            <h3 class="green"><b>Shalat</b></h3>
            <h4 style="font-size: 15px;">Pengertian :</h4>
            <p class="margin-left" style="text-align: justify;">
            <ol class="margin-left-list" type="a">
                <li>Secara bahasa : Do'a</li>
                <li>Secara istilah : Suatu ibadah yang terdiri atas beberapa ucapan dan perbuatan tertentu,
                    diawali dengan takbirotul ikhrom dan diakhiri dengan salam dan beberapa syarat tertentu.</li>
            </ol>
            </p>
            <p class="margin-left" style="text-align: justify;">Macam-Macam Shalat Fardhu (Wajib)</p>
            <p class="margin-left" style="text-align: justify;">
            <ol class="margin-left-list" type="a">
                <li>Shalat subuh</li>
                <li>Shalat zuhur</li>
                <li>Shalat ashar</li>
                <li>Shalat maghrib</li>
                <li>Shalat isya</li>
            </ol>
            </p>
            <p class="margin-left" style="text-align: justify;">Syarat wajib shalat</p>
            <p class="margin-left" style="text-align: justify;">
            <ol class="margin-left-list" type="a">
                <li>Islam</li>
                <li>Berakal</li>
                <li>Baligh</li>
                <li>Suci dari hadas dan najis</li>
            </ol>
            </p>
            <p class="margin-left" style="text-align: justify;">Syarat sah shalat</p>
            <p class="margin-left" style="text-align: justify;">
            <ol class="margin-left-list" type="a">
                <li>Suci dari hadas besar dan kecil</li>
                <li>Menutup aurat</li>
                <li>Menghadap kiblat</li>
                <li>Telah memasuki waktu shalat</li>
                <li>Sudah mengetahui tata cara pelaksanaan</li>
            </ol>
            </p>
            <p class="margin-left" style="text-align: justify;">Rukun Shalat</p>
            <p class="margin-left" style="text-align: justify;">
            <ol class="margin-left-list" type="a">
                <li>Niat</li>
                <li>Berdiri bagi yang mampu</li>
                <li>Takbiratul ikhram</li>
                <li>Membaca surat Al-Fatihah pada setiap rakaat</li>
                <li>Ruku' disertai tuma'ninah</li>
                <li>I'tidal disertai tuma'ninah</li>
                <li>Sujud dua kali dalam setiap rakaat disertai tuma'ninah</li>
                <li>Duduk diantara dua sujud disertai tuma'ninah</li>
                <li>Duduk pada tasahud akhir</li>
                <li>Membaca tasahud akhir</li>
                <li>Membaca shalawat kepada Nabi setelah membaca tasahud akhir</li>
                <li>Memberi salam yang pertama (ke kanan)</li>
                <li>Tertib</li>
            </ol>
            </p>
            <p class="margin-left" style="text-align: justify;">Adzan dan Iqamah</p>
            <p class="margin-left" style="text-align: justify;">Pengertian :</p>
            <p class="margin-left" style="text-align: justify;">
            <ol class="margin-left-list" type="a">
                <li>Secara bahasa : Al-I'lan (pemberitahuan).</li>
                <li>Secara istilah : pemberitahuan bahwa waktu untuk mengerjakan shalat fardhu telah tiba dengan menggunakan lafadz-lafadz yang telah ditentukan oleh syari'at islam.</li>
            </ol>
            </p>
            <p class="margin-left" style="text-align: justify;">Orang yang melakukan Adzan ialah Muadzin/Bilal</p>
            <p class="margin-left" style="text-align: justify;">Pengertian :</p>
            <p class="margin-left" style="text-align: justify;">
            <ol class="margin-left-list" type="a">
                <li>Secara bahasa : Mendirikan.</li>
                <li>Secara istilah : Seruan bahwa shalat segera didirikan dikerjakan dengan menggunakan lafaldz-lafaldz tertentu.</li>
            </ol>
            </p>
            <p class="margin-left" style="text-align: justify;">Iqamah dilakukan setelah Adzan.</p>
            <p class="margin-left" style="text-align: justify;">Hukum adzan dan Iqamah adalah sunnah muakkad.
                Baik shalat dengan berjamaan maupun shalat sendirian (munfarid) sedangkan untuk shalat sunnah tidak disunnahkan Adzan dan Iqamah.</p>
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
        function topFunction() {
            document.body.scrollTop = 0;
            document.documentElement.scrollTop = 0;
        }
    </script>
</body>

</html>