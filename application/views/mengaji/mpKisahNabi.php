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

    div,
    h3,
    p,
    ol,
    li {
        line-height: 1.4;
        /* line-height: 80%; */
    }

    /* .navbar-inverse {
        background-color: #B6CEC1;
    } */

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
                <input type="text" class="form-control" id="dicari" placeholder="kata kunci" width="100px" disabled>
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
                    <h3 class="green"><b id="text1">Nabi Adam</b></h3>
                    <p id="text2" class="margin-left" style="text-align: justify;">Nabi Adam merupakan nabi pertama sekaligus manusia pertama yang Allah ciptakan.
                        Sebelumnya, Nabi Adam tinggal di surga dengan pasangannya, Hawa. Namun, atas bujukan iblis, Adam dan Hawa memakan buah khuldi yang telah dilarang oleh Allah.
                        Meski telah bertobat, Allah tetap memerintahkan mereka turun ke bumi.</p>
                    <p id="text3" class="margin-left" style="text-align: justify;">Beberapa mukjizat Nabi Adam adalah :
                    <ol class="margin-left-list" type="a">
                        <li id="text4">Menjadi khalifah pertama di bumi.</li>
                        <li id="text5">Diajarkan oleh Allah segala hal tentang nama benda dan makhluk di bumi.</li>
                        <li id="text6">Memiliki umur yang panjang dan bisa memberikan 40 tahun untuk Nabi Daud.</li>
                        <li id="text7">Memiliki tinggi 60 hasta.</li>
                        <li id="text8">Dikaruniai keturunan kembar berpasang-pasangan.</li>
                    </ol>
                    </p>
                </div>
                <div class="col-2 mt-5" style="top: 0;right: 0; position:absolute; margin-right: 90px;">
                    <img src="<?= base_url('assets/') ?>/3D text/3DTeks(KNabi).png" alt="Kisah Nabi" style="width:300px">
                </div>
            </div>
            <h3 class="green"><b id="text9">Nabi Idris</b></h3>
            <p id="text10" class="margin-left" style="text-align: justify;">Nabi Idris adalah keturunan keenam Nabi Adam yang terkenal dengan kecerdasannya.</p>
            <p id="text11" class="margin-left" style="text-align: justify;">Banyak pesan kebaikan yang disampaikan Nabi Idris, seperti nasihat untuk menjadikan salat jenazah sebagai penghormatan,
                untuk selalu bersyukur, menghindari hasad dan dengki, melarang menumpuk harta yang tak bermanfaat,
                dan mematuhi perintah Allah dengan ikhlas, baik dalam salat, berpuasa, dan amalan lainnya.</p>
            <p id="text12" class="margin-left" style="text-align: justify;">Nabi Idris memiliki mukjizat sebagai berikut:
            <ol class="margin-left-list" type="a">
                <li id="text13">Memiliki kecerdasan mengamati fenomena alam dan mengartikan wahyu Allah.</li>
                <li id="text14">Manusia pertama yang bisa membaca dan menulis.</li>
                <li id="text15">Manusia pertama yang bisa menjahit pakaian, Nabi Idris bisa menggunakan pakaian yang terindah sementara saat itu orang-orang masih menggunakan kulit binatang.</li>
                <li id="text16">Nabi Idris pernah merasakan sakaratul maut dan dihidupkan kembali atas izin Allah.</li>
                <li id="text17">Pernah melihat surga dan neraka.</li>
            </ol>
            </p>
            <h3 class="green"><b id="text18">Nabi Nuh</b></h3>
            <p id="text19" class="margin-left" style="text-align: justify;">Nabi Nuh adalah satu di antara nabi yang masuk golongan Ulul Azmi.</p>
            <p id="text20" class="margin-left" style="text-align: justify;">Semasa dakwahnya, Nabi Nuh menerima banyak tantangan dan penolakan, termasuk dari anak dan istrinya</p>
            <p id="text21" class="margin-left" style="text-align: justify;">Ketika kaumnya tetap bertindak zalim, Allah pun membinasakan mereka dalam banjir besar.</p>
            <p id="text22" class="margin-left" style="text-align: justify;">Namun, Nabi Nuh juga mendapatkan mukjizat, yakni mampu membuat perahu dengan ukuran panjang 300 hasta dan 50 hasta.</p>
            <p id="text23" class="margin-left" style="text-align: justify;">Setiap makhluk baik manusia maupun binatang yang ada di perahu tersebut selamat dari banjir.</p>
            <br>
            <h3 class="green"><b id="text24">Nabi Hud</b></h3>
            <p id="text25" class="margin-left" style="text-align: justify;">Nabi Hud diutus Allah bagi kaum 'Ad, kaum yang ahli membuat menara namun senang melakukan kemaksiatan dan menghamburkan harta.</p>
            <p id="text26" class="margin-left" style="text-align: justify;">Kaum 'Ad terus mengingkari dakwahnya hingga akhirnya Nabi Hud berdoa pada Allah.</p>
            <p id="text27" class="margin-left" style="text-align: justify;">Allah kemudian menurunkan badai dengan awan yang penuh petir yang membinasakan kaum 'Ad.</p>
            <p id="text28" class="margin-left" style="text-align: justify;">Mukjizat Nabi Hud antara lain:
            <ol class="margin-left-list" type="a">
                <li id="text29">Mampu menurunkan hujan atas izin Allah, kala itu kaum 'Ad dilanda kekeringan hingga tanaman mati dan tak ada sumber air.</li>
                <li id="text30">Selamat dari badai petir yang dahsyat.</li>
            </ol>
            </p>
            <h3 class="green"><b id="text31">Nabi Shaleh</b></h3>
            <p id="text32" class="margin-left" style="text-align: justify;">Sekitar kurun waktu 200 tahun, Allah mengutus Nabi Sholeh untuk kaum Tsamud yang masih merupakan keturunan dari kaum 'Ad.</p>
            <p id="text33" class="margin-left" style="text-align: justify;">Satu di antara mukjizat Nabi Shaleh adalah memunculkan unta betina yang hamil 10 bulan dari batu besar yang terbelah.</p>
            <p id="text34" class="margin-left" style="text-align: justify;">Kejadian itu membuat sebagian kaum Tsamud menerima dakwah Nabi Shaleh dan menjadi pengikutnya.</p>
            <p id="text35" class="margin-left" style="text-align: justify;">Namun, sebagian lagi masih ingkar, bahkan membunuh unta yang menjadi mukjizat tersebut.</p>
            <p id="text36" class="margin-left" style="text-align: justify;">Setelah berhasil membunuh unta, Allah pun membinasakan mereka dengan hantaman petir di malam hari.</p>
            <br>
            <h3 class="green"><b id="text37">Nabi Ibrahim</b></h3>
            <p id="text38" class="margin-left" style="text-align: justify;">Nabi Ibrahim merupakan satu di antara nabi yang kisahnya banyak diceritakan dalam Al-Qur'an.</p>
            <p id="text39" class="margin-left" style="text-align: justify;">Mulai bagaimana Nabi Ibrahim menemukan Tuhan, melawan kedzaliman Raja Namrud, hingga kisahnya dengan kedua anaknya yakni Ismail dan Ishaq.</p>
            <p id="text40" class="margin-left" style="text-align: justify;">Nabi Ibrahim juga memiliki mukjizat antara lain:
            <ol class="margin-left-list" type="a">
                <li id="text41">Tetap hidup meski dibakar dengan api.</li>
                <li id="text42">Menyaksikan burung dihidupkan kembali.</li>
                <li id="text43">Mengubah pasir menjadi makanan.</li>
                <li id="text44">Memiliki anak saat usia 99 tahun.</li>
            </ol>
            </p>
            <h3 class="green"><b id="text45">Nabi Luth</b></h3>
            <p id="text46" class="margin-left" style="text-align: justify;">Nabi Luth merupakan keponakan dari Nabi Ibrahim.</p>
            <p id="text47" class="margin-left" style="text-align: justify;">Dia diutus Allah untuk berdakwah kepada kaum Sodom, kaum yang rusak dan terkenal dengan perilaku seks sesama jenis.</p>
            <p id="text48" class="margin-left" style="text-align: justify;">Dakwah Nabi Luth pun ditentang oleh mereka. Sesaat setelah mereka mengusir Nabi Luth, Allah membinasakan mereka dengan bencana gempa bumi dan angin kencang.</p>
            <br>
            <h3 class="green"><b id="text49">Nabi Ismail</b></h3>
            <p id="text50" class="margin-left" style="text-align: justify;">Nabi Ismail merupakan anak Nabi Ibrahim dan istrinya, Hajar.</p>
            <p id="text51" class="margin-left" style="text-align: justify;">Satu di antara mukjizat Nabi Ismail masih bisa kita lihat hingga sekarang, yakni air zamzam.</p>
            <p id="text52" class="margin-left" style="text-align: justify;">Nabi Ismail juga sempat menerima perintah Allah untuk disembelih oleh ayahnya sendiri.</p>
            <p id="text53" class="margin-left" style="text-align: justify;">Namun, ketika Nabi Ibrahim mengeluarkan benda tajam untuk menyembelihnya, Allah menggantikan Nabi Ismail dengan kambing.</p>
            <p id="text54" class="margin-left" style="text-align: justify;">Peristiwa itulah yang pada akhirnya menjadi awal mula kurban pada Hari Raya Idul Adha.</p>
            <br>
            <h3 class="green"><b id="text55">Nabi Ishaq</b></h3>
            <p id="text56" class="margin-left" style="text-align: justify;">Nabi Ishaq merupakan anak dari Nabi Ibrahim dengan Sarah.</p>
            <p id="text57" class="margin-left" style="text-align: justify;">Dia lahir 14 tahun setelah Nabi Ismail. Dia juga selalu mengikuti ayahnya dalam berdakwah.</p>
            <p id="text58" class="margin-left" style="text-align: justify;">Dalam Al-Qur'an disebutkan Nabi Ishaq adalah hamba yang memiliki ilmu, akhlak, dan perbuatan yang baik.</p>
            <p id="text59" class="margin-left" style="text-align: justify;">Dari keturunannya lahir nabi-nabi yang berasal dari Bani Israil.</p>
            <br>
            <h3 class="green"><b id="text60">Nabi Yaqub</b></h3>
            <p id="text61" class="margin-left" style="text-align: justify;">Nabi Yakub merupakan anak Nabi Ishaq.</p>
            <p id="text62" class="margin-left" style="text-align: justify;">Dalam beberapa riwayat, Nabi Yaqub digambarkan sebagai sosok yang memiliki karakter kuat dan keimanan luar biasa.
                Bahkan sebelum Nabi Yaqub wafat dan terbaring lemah pun, dia berwasiat kepada para putra untuk tetap menjalankan perintah Allah.</p>
            <br>
            <h3 class="green"><b id="text63">Nabi Yusuf</b></h3>
            <p id="text64" class="margin-left" style="text-align: justify;">Nabi Yusuf merupakan anak Nabi Yaqub.</p>
            <p id="text65" class="margin-left" style="text-align: justify;">Dia pernah mendapat mimpi di mana bulan, matahari, dan bintang bersujud padanya.</p>
            <p id="text66" class="margin-left" style="text-align: justify;">Sejak itulah, Nabi Yaqub mengetahui bahwa putranya akan menjadi orang besar.</p>
            <p id="text67" class="margin-left" style="text-align: justify;">Nabi Yusuf juga memiliki mukjizat antara lain:
            <ol class="margin-left-list" type="a">
                <li id="text68">Memiliki paras yang tampan. Bahkan dalam kisahnya, para wanita pernah mengiris jarinya sendiri saat terpesona dengan ketampanan Nabi Yusuf.</li>
                <li id="text69">Mampu menafsirkan mimpi. Nabi Yusuf perah menafsirkan mimpi Raja dan akhirnya diangkat sebagai pejabat di Mesir.</li>
            </ol>
            </p>
            <h3 class="green"><b id="text70">Nabi Ayub</b></h3>
            <p id="text71" class="margin-left" style="text-align: justify;">Nabi Ayub adalah seorang nabi yang memiliki banyak harta, keturunan, dan berakhlak mulia.</p>
            <p id="text72" class="margin-left" style="text-align: justify;">Meski begitu, Nabi Ayub tak pernah sombong dan terus berbuat baik.</p>
            <p id="text73" class="margin-left" style="text-align: justify;">Allah pun menguji Nabi Ayub dengan cobaan yang berat.</p>
            <p id="text74" class="margin-left" style="text-align: justify;">Dia kehilangan harta, anak-anaknya, dan menderita penyakit kulit.</p>
            <p id="text75" class="margin-left" style="text-align: justify;">Namun, dalam kondisi tersebut Nabi Ayub tetap bersabar dan berserah diri pada Allah.</p>
            <p id="text76" class="margin-left" style="text-align: justify;">Beberapa mukjizat Nabi Ayub antara lain:
            <ol class="margin-left-list" type="a">
                <li id="text77">Memiliki kesabaran yang luar biasa.</li>
                <li id="text78">Mampu mengeluarkan air dari tanah yang bisa menyembuhkan penyakitnya.</li>
            </ol>
            </p>
            <h3 class="green"><b id="text79">Nabi Syu'aib</b></h3>
            <p id="text80" class="margin-left" style="text-align: justify;">Nabi Syuaib diutus Allah pada kaum Madyan, kaum yang suka menipu dan membangkang.
                Lantaran tetap ingkar dan tak mengikuti Nabi Syuaib, maka Allah memberikan ujian berupa badai panas, mendatangkan awan hitam, hingga gempa bumi yang membinasakan.</p>
            <br>
            <h3 class="green"><b id="text81">Nabi Musa</b></h3>
            <p id="text82" class="margin-left" style="text-align: justify;">Nabi Musa merupakan Nabi yang memerangi Raja Firaun yang tamak.</p>
            <p id="text83" class="margin-left" style="text-align: justify;">Dia mempimpin Bani Israil agar menyembah Allah.</p>
            <p id="text84" class="margin-left" style="text-align: justify;">Atas izin Allah, Nabi Musa juga memiliki mukjizat antara lain:
            <ol class="margin-left-list" type="a">
                <li id="text85">Mampu menghidupkan orang mati.</li>
                <li id="text86">Memiliki tongkat yang bisa berubah menjadi ular.</li>
                <li id="text87">Mampu membelah laut Merah.</li>
                <li id="text88">Dianugerahi Kitab Taurat yang berisi tentang 10 firman Allah bagi Bani Israil.</li>
            </ol>
            </p>
            <h3 class="green"><b id="text89">Nabi Harun</b></h3>
            <p id="text90" class="margin-left" style="text-align: justify;">Kisah Nabi Harun sering dikaitkan dengan kisah Nabi Musa.
                Nabi Harun merupakan seorang nabi yang dikaruniai kemampuan bahasa yang sangat baik.</p>
            <p id="text91" class="margin-left" style="text-align: justify;">Nabi Harun juga berjuang untuk memberantas berhala yang dipimpin oleh Samiri, tukang sihir dari kerajaan milik Firaun.</p>
            <br>
            <h3 class="green"><b id="text92">Nabi Dzulkifli</b></h3>
            <p id="text93" class="margin-left" style="text-align: justify;">Nabi Dzulkifli merupakan nabi yang tinggal Irak.</p>
            <p id="text94" class="margin-left" style="text-align: justify;">Tak banyak kisah yang menceritakan Nabi Dzulkifli,
                namun dia dikenal tetap tegar mengajarkan untuk menyembah Allah meski sempat mendapat siksaan, dirantai, hingga dipenjara.</p>
            <br>
            <h3 class="green"><b id="text95">Nabi Daud</b></h3>
            <p id="text96" class="margin-left" style="text-align: justify;">Nabi Daud merupakan keuturunan Nabi Ibrahim ke-12. Nabi Daud menjadi raja setelah terbunuhnya raja Thalut.</p>
            <p id="text97" class="margin-left" style="text-align: justify;">Beberapa di antara mukjizat Nabi Daud adalah:
            <ol class="margin-left-list" type="a">
                <li id="text98">Dianugerahi kitab Zabur.</li>
                <li id="text99">Memiliki suara yang merdu.</li>
            </ol>
            </p>
            <p id="text100" class="margin-left" style="text-align: justify;">Saat Nabi Daud membaca kitab Zabur, suaranya mampu membuat orang sakit menjadi sembuh,
                membuat air dan angin menjadi tenang, hingga bukit-bukit turut memuji Allah.</p>
            <h3 class="green"><b id="text101">Nabi Sulaiman</b></h3>
            <p id="text102" class="margin-left" style="text-align: justify;">Nabi Sulaiman adalah satu di antara nabi yang terkenal sebagai raja yang kaya dan memiliki kekuasaan yang besar.</p>
            <p id="text103" class="margin-left" style="text-align: justify;">Atas izin Allah, Nabi Sulaiman juga memiliki mukjizat antara lain:
            <ol class="margin-left-list" type="a">
                <li id="text104">Memiliki kekayaan yang berlimpah. Bahkan dalam suatu riwayat dikisahkan
                    bahwa istana Nabi Sulaiman sangat luas dan bertabur batu mulia.</li>
                <li id="text105">Dapat berbicara dengan binatang.</li>
                <li id="text106">Mampu menundukkan angin.</li>
                <li id="text107">Memiliki bala tentara dari kalangan manusia, jin, dan hewan.</li>
                <li id="text108">Mengalirkan tembaga dari perut bumi.</li>
            </ol>
            </p>
            <h3 class="green"><b id="text109">Nabi Ilyas</b></h3>
            <p id="text110" class="margin-left" style="text-align: justify;">Masih di kalangan bani Israel, Nabi Ilyas menghadapi kaum yang gemar menyembah berhala bernama Ba'al.</p>
            <p id="text111" class="margin-left" style="text-align: justify;">Meski telah menerima dakwah dari Nabi Ilyas,
                mereka tetap ingkar hingga Allah pun menurunkan azab berupa kekeringan yang panjang.</p>
            <br>
            <h3 class="green"><b id="text112">Nabi Ilyasa</b></h3>
            <p id="text113" class="margin-left" style="text-align: justify;">Nabi Ilyasa adalah anak angkat dari Nabi Ilyas.</p>
            <p id="text114" class="margin-left" style="text-align: justify;">Nabi Ilyasa diberikan tugas untuk melanjutkan dakwah dari sang ayah untuk Bani Israil.</p>
            <p id="text115" class="margin-left" style="text-align: justify;">Satu di antara mukjizat Nabi Ilyasa adalah menghidupkan orang mati atas izin Allah.</p>
            <br>
            <h3 class="green"><b id="text116">Nabi Yunus</b></h3>
            <p id="text117" class="margin-left" style="text-align: justify;">Nabi Yunus adalah nabi yang diutus untuk menyadarkan kaum Assyira penyembah berhala di kota Niniwe.
                Ketika menaiki kapal bersama pengikutnya, awan hitam dan badai besar terjadi. Para penumpang kapal pun mengorbankan Nabi Yunus dan menenggelamkannya ke laut.
                Meski sempat ditelan paus, Allah tetap menyelamatkan Nabi Yunus. Hal inilah yang menjadi satu di antara mukjizat Nabi Yunus.</p>
            <br>
            <h3 class="green"><b id="text118">Nabi Dzakaria</b></h3>
            <p id="text119" class="margin-left" style="text-align: justify;">Nabi Dzakaria merupakan keturunan Nabi Daud dan Nabi Sulaiman.
                Tak banyak kisah mengenai Nabi Dzakaria, namun menurut beberapa riwayat, Nabi Dzakaria juga memiliki sikap yang rendah hati dan selalu bersyukur kepada Allah.
                Seperti Nabi Ibrahim, Nabi Dzakaria mendapat keturunan saat usianya tak lagi muda.</p>
            </p>
            <br>
            <h3 class="green"><b id="text120">Nabi Yunus</b></h3>
            <p id="text121" class="margin-left" style="text-align: justify;">Nabi Yahya adalah putra dari Nabi Dzakaria. ia disebut sebagai salah seorang yang benar terhormat dan suci.
                Allah menganugerahi Nabi Yahya dengan kemampuan untuk mengetahui syariat.</p>
            <p id="text122" class="margin-left" style="text-align: justify;">Nabi Yahya merupakan seorang yang sangat rajin dan gemar membaca.</p>
            <p id="text123" class="margin-left" style="text-align: justify;">Sejak kecil, Nabi Yahya sudah bisa memutuskan perkara dan mencari jalan keluar untuk segala persoalan.</p>
            <br>
            <h3 class="green"><b id="text124">Nabi Isa</b></h3>
            <p id="text125" class="margin-left" style="text-align: justify;">Nabi Isa adalah nabi yang tak memiliki ayah dan lahir dari seorang wanita suci bernama Maryam.</p>
            <p id="text126" class="margin-left" style="text-align: justify;">Beberapa mukjizat Nabi Isa antara lain:
            <ol class="margin-left-list" type="a">
                <li id="text127">Bisa berbicara saat bayi.</li>
                <li id="text128">Menghidupkan burung dari tanah liat.</li>
                <li id="text129">Menghidupkan orang yang sudah mati.</li>
                <li id="text130">Menyembuhkan orang buta dan penyakit sopak.</li>
                <li id="text131">Menurunkan hidangan dari langit.</li>
                <li id="text132">Dianugerahi kitab Injil.</li>
            </ol>
            </p>
            <h3 class="green"><b id="text133">Nabi Muhammad</b></h3>
            <p id="text134" class="margin-left" style="text-align: justify;">Nabi Muhammad merupakan nabi terakhir sekaligus penutup.</p>
            <p id="text135" class="margin-left" style="text-align: justify;">Tak ada lagi nabi lain setelah Nabi Muhammad wafat. Ketika kelahiran Nabi Muhammad,
                banyak peristiwa besar terjadi, seperti runtuhnya berhala dekat Ka'bah dan padamnya api yang disembah oleh kaum Majusi.</p>
            <p id="text136" class="margin-left" style="text-align: justify;">Nabi Muhammad SAW memiliki mukzijat, antara lain :
            <ol class="margin-left-list" type="a">
                <li id="text137">Mukjizat terbesar adalah Al-Qur'an sebagai kitab suci umat Islam.</li>
                <li id="text138">Mampu membelah bulan.</li>
                <li id="text139">Mengalirkan air dari jemari tangannya.</li>
                <li id="text140">Mampu menurunkan hujan.</li>
                <li id="text141">Di atasnya selalu dinaungi awan.</li>
                <li id="text142">Melakukan perjalanan ke Sidratul Muntaha saat Isra Miraj, dan masih banyak lagi.</li>
            </ol>
            </p>
            <!-- <h3><b></b></h3>
            <h3></h3>
            <h4>Pengertian :</h4>
            <p class="margin-left" style="text-align: justify;"></p>
            <p class="margin-left" style="text-align: justify; text-indent: 30px;"></p>
            <p class="margin-left" style="text-align: justify;">
                <ol class="margin-left-list" type="a">
                    <li></li>
                    <li></li>
                    <li></li>
                    <li></li>
                    <li></li>
                </ol> 
            </p> -->
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
                for (let i = '1'; i < 143; i++) {
                    document.getElementById('text' + i).innerHTML = document.getElementById('text' + i).textContent.replace(regExp, "<mark id=mark>$&</mark>")
                }
                if (document.getElementById("mark")) {
                    document.location.href = "<?= base_url('mulai/kisah_nabi') ?>#mark";
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