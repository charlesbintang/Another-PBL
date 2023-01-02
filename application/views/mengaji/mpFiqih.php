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
                    <h3 class="green"><b id="text1">Islam, Iman, Ikhlas</b></h3>
                    <h3 id="text2">Islam</h3>
                    <h4 style="font-size: 15px;" id="text3">Pengertian :</h4>
                    <p class="margin-left" style="text-align: justify;" id="text4">Islam yaitu kamu mengakui bahwa tiada Tuhan selain Allah.
                        Dan Muhammad adalah utusan Allah, mendirikan shalat, memberikan zakat, berpuasa dibulan Ramadhan dan beribadah haji ke Ka'bah
                        jika kamu sanggup melakukan perjalanan kesana.(H.R Muslim).</p>
                    <br>
                    <p id="text5" class="margin-left" style="text-align: justify;">Apa yang Rasulullah SAW sabdakan tersebut kita kenal dengan rukun Islam.
                        Kita baru bisa disebut muslim yang sempurna jika bisa mengerjakan kelima rukun Islam tersebut, yaitu:</p>
                    <p class="margin-left" style="text-align: justify;">
                    <ol class="margin-left-list" type="a">
                        <li id="text6">Mengucapkan dua kalimat syahadat</li>
                        <li id="text7">Mendirikan shalat lima waktu</li>
                        <li id="text8">Membayar zakat</li>
                        <li id="text9">Berpuasa dibulan Ramadhan</li>
                        <li id="text10">Beribadah haji ke Baitullah bagi orang yang mampu</li>
                    </ol>
                    </p>
                </div>
                <div class="col-2 mt-5" style="top: 0;right: 0; position:absolute; margin-right: 120px;">
                    <img src="<?= base_url('assets/') ?>/3D text/3DTeks(Fiqih).png" alt="Fiqih" style="width:350px">
                </div>
            </div>
            <h3 id="text11">Iman</h3>
            <h4 id="text12" style="font-size: 15px;">Pengertian :</h4>
            <p id="text13" class="margin-left" style="text-align: justify;">Iman yaitu kamu beriman kepada Allah, para Malaikatnya,
                Kitab-kitabnya, para Rosulnya, hari akhir, serta kamu beriman kepada takdir yang baik maupun yang buruk. (H.R Muslim).</p>
            <br>
            <p id="text14" class="margin-left" style="text-align: justify;">Apa yang Rasulullah sabdakan tersebut kita kenal dengan rukun Iman,
                kita baru bisa disebut seorang mukmin yang sempurna jika mengimani ke enam rukun iman tersebut, yaitu:</p>
            <p class="margin-left" style="text-align: justify;">
            <ol class="margin-left-list" type="a">
                <li id="text15">Beriman kepada Allah</li>
                <li id="text16">Beriman kepada malaikat Allah</li>
                <li id="text17">Beriman kepada kitab-kitab Allah</li>
                <li id="text18">Beriman kepada Rasulullah</li>
                <li id="text19">Beriman kepada hari akhir (hari kiamat)</li>
                <li id="text20">Beriman kepada takdir Allah yang baik maupun yang buruk</li>
            </ol>
            </p>
            <h3 id="text21">Ikhsan</h3>
            <h4 id="text22" style="font-size: 15px;">Pengertian :</h4>
            <p id="text23" class="margin-left" style="text-align: justify;">Ikhsan yaitu engkau beribadah kepada Allah seakan-akan engkau melihatNya,
                sekiranya engkau tidak melihatNya, ketahuilah bahwa Dia (Allah) senantiasa memperhatikanmu (HR.Muslim).</p>
            <br>
            <p id="text24" class="margin-left" style="text-align: justify;">Jika suatu saat gurumu menyuruhmu mengerjakan sesuatu,
                lalu kamu pun mengerjakannya dengan disaksikan olehnya, sudah dipastikan kamu akan mengerjakannya dengan sungguh-sungguh.</p>
            <br>
            <p id="text25" class="margin-left" style="text-align: justify;">Demikianlah, kesadaran bahwa kita sedang diawasi dan diperhatikan oleh orang yang menyuruh kita,
                akan berdampak pada kualitas pekerjaan kita, kesadaran seperti itulah tujuan dari Ikhsan. Yaitu, kesadaran bahwa Allah sedang mengawasi dan memperhatikan kita,
                pasti kita shalat dengan sungguh-sungguh,</p>
            <br>
            <p id="text26" class="margin-left" style="text-align: justify;">Dengan kesadaran seperti itulah yang harus kita terapkan dalam kehidupan sehari-hari yaitu,
                kesadaran bahwa Allah selalu mem,perhatikan dan mengawasi kita, kesadaran seperti ini akan membuat kita terjaga dari buatan dosa.</p>
            <br>
            <p id="text27" class="margin-left" style="text-align: justify;">Kata para ulama: “untuk membangkitkan pereasaan Ikhsan dalam hati kita,
                sering-seringlah ucapkan tiga kalimat berikut:</p>
            <p class="margin-left" style="text-align: justify;">
            <ol class="margin-left-list" type="a">
                <li id="text28">Allahu Ma'i (Allah bersertaku)</li>
                <li id="text29">Allahu Nazhirun Ilayya (Allah selalu melihatku)</li>
                <li id="text30">Allah Syahidun 'alayya (Allah selalu mengawasiku)</li>
            </ol>
            </p>
            <h3 id="text31" class="green"><b>Taharah</b></h3>
            <!-- <h3>Islam</h3> -->
            <h4 id="text32" style="font-size: 15px;">Pengertian :</h4>
            <p class="margin-left" style="text-align: justify;">
            <ol class="margin-left-list" type="a">
                <li id="text33">Secara bahasa : Taharah artinya suci atau bersih.</li>
                <li id="text34">Secara Istilah : Taharah adalah suci dari hadas dan najis.</li>
            </ol>
            </p>
            <h4 id="text35" style="font-size: 15px;">Macam-Macam Air</h4>
            <p id="text36" class="margin-left" style="text-align: justify;">Air yang suci dan dapat digunakan untuk bersuci: </p>
            <p class="margin-left" style="text-align: justify;">
            <ol class="margin-left-list" type="a">
                <li id="text37">Air sumur</li>
                <li id="text38">Air hujan</li>
                <li id="text39">Air sungai</li>
                <li id="text40">Air laut</li>
                <li id="text41">Air salju atau air es bila telah mencair</li>
                <li id="text42">Air embun</li>
                <li id="text43">Air mata air</li>
            </ol>
            </p>
            <h4 id="text44" style="font-size: 15px;">Najis</h4>
            <p id="text45" class="margin-left" style="text-align: justify;">Setiap benda yang dianggap kotor oleh syari'at Islam,
                dan wajib dibersihkan, karena menjadi penghalang seseorang dalam beribadah pada Allah Swt.</p>
            <br>
            <p id="text46" class="margin-left" style="text-align: justify;">Benda-benda yang termasuk najis, yaitu :</p>
            <p class="margin-left" style="text-align: justify;">
            <ol class="margin-left-list" type="a">
                <li id="text47">Bangkai</li>
                <li id="text48">Darah</li>
                <li id="text49">Nanah</li>
                <li id="text50">Segala sesuatu yang keluar dari dubur, kecuali air mani</li>
                <li id="text51">Anjing dan Babi</li>
            </ol>
            </p>
            <h4 id="text52" style="font-size: 15px;">Istinja</h4>
            <p id="text53" class="margin-left" style="text-align: justify;">Bembersihkan kubul dan dubur setelah buang air kecil atau buang air besar.
                Istinja ini hukumnya adalah wajib. </p>
            <br>
            <p id="text54" class="margin-left" style="text-align: justify;">Alat yang di pergunakan untuk istinja, yaitu :</p>
            <p class="margin-left" style="text-align: justify;">
            <ol class="margin-left-list" type="a">
                <li id="text55">Air</li>
                <li id="text56">Batu</li>
                <li id="text57">Benda-benda yang kasar, kesat dan suci</li>
            </ol>
            </p>
            <h4 id="text58" style="font-size: 15px;">Mandi</h4>
            <p id="text59" class="margin-left" style="text-align: justify;">Bagi orang yang akan shalat, tidak sah shalatnya jika masih mempunyai hadas besar.</p>
            <br>
            <p id="text60" class="margin-left" style="text-align: justify;">Hadats besar adalah hadats yang disebabkan oleh persetubuhan, keluar mani, haid, nifas, dan melahirkan.
                Hadats besar dapat dihilangkan dengan mandi junub atau janabat (mandi wajib) hokum mandi ini adalah wajib.</p>
            <br>
            <p id="text61" class="margin-left" style="text-align: justify;">Hal-hal yang menyebabkan seseorang wajib mandi :</p>
            <p class="margin-left" style="text-align: justify;">
            <ol class="margin-left-list" type="a">
                <li id="text62">Bersetubuh</li>
                <li id="text63">Keluar air mani</li>
                <li id="text64">Meninggal (bukan mati syahid)</li>
                <li id="text65">Selesai Haid (menstruasi)</li>
                <li id="text66">Selesai Nifas</li>
                <li id="text67">Wiladah</li>
            </ol>
            </p>
            <h4 id="text68" style="font-size: 15px;">Wudhu</h4>
            <!-- <h4 style="font-size: 15px;">Pengertian :</h4> -->
            <p id="text69" class="margin-left" style="text-align: justify;">Pengertian :
            <ol class="margin-left-list" type="a">
                <li id="text70">Secara bahasa : bersih dan indah.</li>
                <li id="text71">Secara istilah : menggunakan air pada anggota badan tertentu dengan cara tertentu,
                    yang dimulai dengan niat guna menghilangkan hadats kecil.</li>
            </ol>
            </p>
            <p id="text72" class="margin-left" style="text-align: justify;">Niat berwudhu :</p>
            <p id="text73" class="margin-left" style="text-align: justify;">"Aku niat berwudhu untuk menghilangkan hadats kecil, fardhu karena Allah ta'ala".</p>
            <br>
            <p id="text74" class="margin-left" style="text-align: justify;">Syarat-syarat wudhu :</p>
            <p class="margin-left" style="text-align: justify;">
            <ol class="margin-left-list" type="a">
                <li id="text75">Islam</li>
                <li id="text76">Tamyiz (mampu untuk menentukan pilihan dan membedakan mana yang baik)</li>
                <li id="text77">Bersih dari hadas besar</li>
                <li id="text78">Menggunakan air suci dan mensucikan</li>
                <li id="text79">Tidak ada benda yang menghalangi kulit</li>
            </ol>
            </p>
            <h4 id="text80" style="font-size: 15px;">Rukun Wudhu</h4>
            <p class="margin-left" style="text-align: justify;">
            <ol class="margin-left-list" type="a">
                <li id="text81">Niat</li>
                <li id="text82">Membasuh muka membasuh kedua tangan sampai siku</li>
                <li id="text83">Mengusap sebagian kepala</li>
                <li id="text84">Membasuh kedua telapak kaki sampai mata kaki</li>
                <li id="text85">Tertib (berurutan)</li>
            </ol>
            </p>
            <h4 id="text86" style="font-size: 15px;">Tayamum</h4>
            <!-- <h4>Pengertian :</h4> -->
            <p id="text87" class="margin-left" style="text-align: justify;">Tayamum adalah menyapu debu yang suci ke muka dan dua tangan hingga siku dengan beberapa syarat tertentu.</p>
            <br>
            <p id="text88" class="margin-left" style="text-align: justify;">Fungsinya adalah sebagai pengganti wudhu dalam keadaan tertentu sebagai rukhsah (keringanan) dari Allah SWT.</p>
            <br>
            <p id="text89" class="margin-left" style="text-align: justify;">Syarat tayamum :</p>
            <p class="margin-left" style="text-align: justify;">
            <ol class="margin-left-list" type="a">
                <li id="text90">Ada uzur (alasan)</li>
                <li id="text91">Sulit menemukan air</li>
                <li id="text92">Menggunakan tanah/debu yang suci</li>
            </ol>
            </p>
            <h3 id="text93" class="green"><b>Shalat</b></h3>
            <h4 id="text94" style="font-size: 15px;">Pengertian :</h4>
            <p class="margin-left" style="text-align: justify;">
            <ol class="margin-left-list" type="a">
                <li id="text95">Secara bahasa : Do'a</li>
                <li id="text96">Secara istilah : Suatu ibadah yang terdiri atas beberapa ucapan dan perbuatan tertentu,
                    diawali dengan takbirotul ikhrom dan diakhiri dengan salam dan beberapa syarat tertentu.</li>
            </ol>
            </p>
            <p id="text97" class="margin-left" style="text-align: justify;">Macam-Macam Shalat Fardhu (Wajib)</p>
            <p class="margin-left" style="text-align: justify;">
            <ol class="margin-left-list" type="a">
                <li id="text98">Shalat subuh</li>
                <li id="text99">Shalat zuhur</li>
                <li id="text100">Shalat ashar</li>
                <li id="text101">Shalat maghrib</li>
                <li id="text102">Shalat isya</li>
            </ol>
            </p>
            <p id="text103" class="margin-left" style="text-align: justify;">Syarat wajib shalat</p>
            <p class="margin-left" style="text-align: justify;">
            <ol class="margin-left-list" type="a">
                <li id="text104">Islam</li>
                <li id="text105">Berakal</li>
                <li id="text106">Baligh</li>
                <li id="text107">Suci dari hadas dan najis</li>
            </ol>
            </p>
            <p id="text108" class="margin-left" style="text-align: justify;">Syarat sah shalat</p>
            <p class="margin-left" style="text-align: justify;">
            <ol class="margin-left-list" type="a">
                <li id="text109">Suci dari hadas besar dan kecil</li>
                <li id="text110">Menutup aurat</li>
                <li id="text111">Menghadap kiblat</li>
                <li id="text112">Telah memasuki waktu shalat</li>
                <li id="text113">Sudah mengetahui tata cara pelaksanaan</li>
            </ol>
            </p>
            <p id="text114" class="margin-left" style="text-align: justify;">Rukun Shalat</p>
            <p class="margin-left" style="text-align: justify;">
            <ol class="margin-left-list" type="a">
                <li id="text115">Niat</li>
                <li id="text116">Berdiri bagi yang mampu</li>
                <li id="text117">Takbiratul ikhram</li>
                <li id="text118">Membaca surat Al-Fatihah pada setiap rakaat</li>
                <li id="text119">Ruku' disertai tuma'ninah</li>
                <li id="text120">I'tidal disertai tuma'ninah</li>
                <li id="text121">Sujud dua kali dalam setiap rakaat disertai tuma'ninah</li>
                <li id="text122">Duduk diantara dua sujud disertai tuma'ninah</li>
                <li id="text123">Duduk pada tasahud akhir</li>
                <li id="text124">Membaca tasahud akhir</li>
                <li id="text125">Membaca shalawat kepada Nabi setelah membaca tasahud akhir</li>
                <li id="text126">Memberi salam yang pertama (ke kanan)</li>
                <li id="text127">Tertib</li>
            </ol>
            </p>
            <p id="text128" class="margin-left" style="text-align: justify;">Adzan dan Iqamah</p>
            <p id="text129" class="margin-left" style="text-align: justify;">Pengertian :</p>
            <p class="margin-left" style="text-align: justify;">
            <ol class="margin-left-list" type="a">
                <li id="text130">Secara bahasa : Al-I'lan (pemberitahuan).</li>
                <li id="text131">Secara istilah : pemberitahuan bahwa waktu untuk mengerjakan shalat fardhu telah tiba dengan menggunakan lafadz-lafadz yang telah ditentukan oleh syari'at islam.</li>
            </ol>
            </p>
            <p id="text132" class="margin-left" style="text-align: justify;">Orang yang melakukan Adzan ialah Muadzin/Bilal</p>
            <p id="text133" class="margin-left" style="text-align: justify;">Pengertian :</p>
            <p class="margin-left" style="text-align: justify;">
            <ol class="margin-left-list" type="a">
                <li id="text134">Secara bahasa : Mendirikan.</li>
                <li id="text135">Secara istilah : Seruan bahwa shalat segera didirikan dikerjakan dengan menggunakan lafaldz-lafaldz tertentu.</li>
            </ol>
            </p>
            <p id="text136" class="margin-left" style="text-align: justify;">Iqamah dilakukan setelah Adzan.</p>
            <p id="text137" class="margin-left" style="text-align: justify;">Hukum adzan dan Iqamah adalah sunnah muakkad.
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
                for (let i = '1'; i < 138; i++) {
                    document.getElementById('text' + i).innerHTML = document.getElementById('text' + i).textContent.replace(regExp, "<mark id=mark>$&</mark>")
                }
                if (document.getElementById("mark")) {
                    document.location.href = "<?= base_url('mulai/fiqih') ?>#mark";
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