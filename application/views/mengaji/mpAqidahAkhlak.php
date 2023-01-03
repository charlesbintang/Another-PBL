<?php
date_default_timezone_set("Asia/Jakarta");
?>
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
        <!-- search btn  -->
        <div class="me-auto" style="width: 300px; ">
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
                    <h3 class="green" id="text1"><b>Iman</b></h3>
                    <h4 style="font-size: 15px;" id="text2">Pengertian :</h4>
                    <p class="margin-left" style="text-align: justify;">
                    <ol class="margin-left-list" type="a">
                        <li id="text3">Secara bahasa : percaya atau yakin.</li>
                        <li id="text4">Secara istilah : mengucapkan dengan lisan membenarkan dengan hati dan melakukan dengan perbuatan.</li>
                    </ol>
                    </p>
                </div>
                <div class="col-2 mt-5" style="top: 0;right: 0; position:absolute; margin-right: 120px;">
                    <img src="<?= base_url('assets/') ?>/3D text/3DTeks(Aqidah).png" alt="Aqidah" style="width:350px">
                </div>
            </div>
            <h4 style="font-size: 15px;" id="text5">Rukun Iman :</h4>
            <p class="margin-left" style="text-align: justify;" id="text6">Rukun Iman ialah perkara-perkara yang apabila perkara-perkara ini telah dipercayai oleh seseorang maka ia dianggap telah beriman.</p>
            <p class="margin-left" style="text-align: justify;" id="text7">Rukun Iman ada 6, yaitu :</p>
            <p class="margin-left" style="text-align: justify;" id="text8">
            <ol class="margin-left-list" type="1">
                <li id="text9">Iman kepada Allah</li>
                <li id="text10">Iman Kepada Malaikat Allah</li>
                <li id="text11">Iman Kepada Kitab-Kitab Allah</li>
                <li id="text12">Iman Kepada Nabi dan Rasul Allah</li>
                <li id="text13">Iman Kepada Hari Kiamat</li>
                <li id="text14">Iman Kepada Qadha dan Qadar (Ketentuan Baik dan buruk)</li>
            </ol>
            </p>
            <p class="margin-left" style="text-align: justify;" id="text15">Ada beberapa hal yang dapat menghilangkan iman, yaitu :</p>
            <p class="margin-left" style="text-align: justify;">
            <ol class="margin-left-list" type="1">
                <li id="text16">Menyembah sesuatu selain Allah SWT.</li>
                <li id="text17">Menghina tanda-tanda keagungan agama.</li>
                <li id="text18">Merendahkan syiar-syiar agama.</li>
                <li id="text19">Menghina Al-Qur'an.</li>
                <li id="text20">Mengucap kata-kata kufur.</li>
                <li id="text21">Menghalalkan hal-hal yang diharamkan oleh syarak dengan sengaja menentang.</li>
            </ol>
            </p>
            <h3 class="green"><b id="text22">Iman Kepada Allah SWT</b></h3>
            <h4 style="font-size: 15px;" id="text23">Pengertian :</h4>
            <p class="margin-left" style="text-align: justify;" id="text24">Iman kepada Allah SWT adalah meyakini bahwa Allah SWT. itu memang benar-benar ada yang mempunyai wujud yang tidak sama dengan wujud makhluk-Nya.</p>
            <p class="margin-left" style="text-align: justify;">
            <ul style="list-style-type:none;">
                <li id="text25">Yang mempunyai kekuasaan yang tidak sama dengan kekuasaan makhluk-Nya.</li>
                <li id="text26">Yang mempunyai pengetahuan yang tidak sama dengan pengetahuan makhluk-Nya.</li>
                <li id="text27">Yang mempunyai kehendak yang tidak sama dengan kehendak makhluk-Nya.</li>
                <li id="text28">Yang mempunyai penglihatan yang tidak sama dengan penglihatan makhluk-Nya.</li>
                <li id="text29">Yang mempunyai pendengaran yang tidak sama dengan pendengaran makhluk-Nya.</li>
                <li id="text30">Yang mempunyai kasih sayang yang juga tidak sama dengan kasih sayang makhluk-Nya.</li>
                <li id="text31">Dan masih banyak lagi sifat-sifat Allah SWT yang maha Agung yang tidak sama dengan makhluk-Nya.</li>
            </ul>
            </p>
            <!-- <h4 style="font-size: 15px;">Sifat Jaiz</h4> -->
            <!-- text-indent: 30px; -->
            <!-- <p class="margin-left" style="text-align: justify;">Sifat harus atau sifat jaiz juga dimiliki oleh Allah. 
                Harus bagi Allah memperbuatkan sesuatu yang harus ada atau tiada atau meninggalkannya. 
                Contohnya, harus bagi Allah menciptakan langit, bumi, matahari dan yang lain dan harus juga bagi Allah untuk tidak menciptakannya. 
                Tidak wajib bagi Allah membuat sesuatu seperti menghidupkan atau mematikan bahkan itu harus pada hak Allah.</p>
            <br> -->
            <h4 style="font-size: 15px;" id="text32">Asmaul Husna</h4>
            <p class="margin-left" style="text-align: justify;" id="text33">Secara bahasa asma'ul husna terdiri dari dua kata, yaitu Asma yang berarti nama, dan Husna yang berarti baik atau indah. Jadi, Asmaul Husna adalah nama-nama Allah yang baik dan indah.</p>
            <p class="margin-left" style="text-align: justify;" id="text34">Asmaul Husna berjumlah 99, yaitu :</p>
            <p class="margin-left" style="text-align: justify;">
            <ol class="margin-left-list" type="1">
                <li id="text35">Ar-Rahman, artinya Yang Maha Pemurah</li>
                <li id="text36">Ar-Rahiim, artinya Yang Maha Pengasih</li>
                <li id="text37">Al-Malik, artinya Maha Raja</li>
                <li id="text38">Al-Qudduus, artinya Maha Suci</li>
                <li id="text39">As-Salaam, artinya Maha Sejahtera</li>
                <li id="text40">Al-Mu'min, artinya Yang Maha Terpercaya</li>
                <li id="text41">Al-Muhaimin, artinya Yang Maha Memelihara</li>
                <li id="text42">Al-'Aziz, artinya Yang Maha Perkasa</li>
                <li id="text43">Al-Jabbaar, artinya yang Kehendaknya Tidak Dapat Diingkari</li>
                <li id="text44">Al-Mutakabbir, artinya Yang Memiliki Kebesaran</li>
                <li id="text45">Al-Khaaliq, artinya Yang Maha Pencipta</li>
                <li id="text46">Al-Baari', artinya Yang Mengadakan dari Tiada</li>
                <li id="text47">Al-Mushawwir, artinya Yang Membuat Bentuk</li>
                <li id="text48">Al-Ghaffaar, artinya Yang Maha pengampun </li>
                <li id="text49">Al-Qahhaar, artinya Yang Maha Perkasa</li>
                <li id="text50">Al-Wahhaab, artinya Yang Maha Pemberi</li>
                <li id="text51">Ar-Razzaq, artinya Yang Maha Pemberi Rezeki</li>
                <li id="text52">Al-Fattaah, artinya Yang Maha Membuka (Hati)</li>
                <li id="text53">Al-'Alim, artinya Yang Maha Mengetahui</li>
                <li id="text54">Al-Qaabidh, artinya Yang Maha Pengendali</li>
                <li id="text55">Al-Baasith, artinya Yang Maha Melapangkan</li>
                <li id="text56">Al-Khaafidh, artinya Yang Merendahkan</li>
                <li id="text57">Ar-Raafi', artinya Yang Meninggikan</li>
                <li id="text58">Al-Mu'izz, artinya Yang Maha Terhormat</li>
                <li id="text59">Al-Mudzdzill, artinya Yang Maha Menghinakan</li>
                <li id="text60">As-Samii', artinya Yang Maha Mendengar</li>
                <li id="text61">Al-Bashiir, artinya Yang maha Melihat</li>
                <li id="text62">Al-Hakam, artinya Yang Memutuskan Hukum</li>
                <li id="text63">Al-'Adl, artinya Yang Maha Adil</li>
                <li id="text64">Al-Lathiif, artinya Yang Maha Lembut</li>
                <li id="text65">Al-Khabiir, artinya Yang Maha Mengetahui</li>
                <li id="text66">Al-Haliim, artinya Yang Maha Penyantun</li>
                <li id="text67">Al-'Azhiim, artinya Yang Maha Agung</li>
                <li id="text68">Al-Ghafuur, artinya Yang Maha Pengampun</li>
                <li id="text69">Asy-Syakuur, artinya Yang Menerima Syukur</li>
                <li id="text70">Al-'Aliyy, artinya Yang Maha Tinggi</li>
                <li id="text71">Al-Kabiir, artinya Yang Maha Besar</li>
                <li id="text72">Al-Hafiizh, artinya Yang Maha Penjaga</li>
                <li id="text73">Al-Muqiit, artinya Yang Maha Pemelihara</li>
                <li id="text74">Al-Hasiib, artinya Yang Maha Pembuat Perhitungan</li>
                <li id="text75">Al-Jaliil, artinya Yang Maha Luhur</li>
                <li id="text76">Al-Kariim, artinya Yang Maha Mulia</li>
                <li id="text77">Ar-Raqiib, artinya Yang Maha Mengawasi</li>
                <li id="text78">Al-Mujiib, artinya Yang Maha Mengabulkan</li>
                <li id="text79">Al-Waasi', artinya Yang Maha Luas</li>
                <li id="text80">Al-Hakiim, artinya Yang Maha Bijaksana</li>
                <li id="text81">Al-Waduud, artinya Yang Maha Mengasihi</li>
                <li id="text82">Al-Majiid, artinya Yang Maha Mulia</li>
                <li id="text83">Al-Baa'its, artinya Yang Membangkitkan</li>
                <li id="text84">Asy-Syahiid, artinya Yang Maha Menyaksikan</li>
                <li id="text85">Al-Haqq, artinya Yang Maha Benar</li>
                <li id="text86">Al-Wakiil, artinya Yang Maha Pemelihara</li>
                <li id="text87">Al-Qawiyy, artinya Yang Maha Kuat</li>
                <li id="text88"> Al-Matiin, artinya Yang Maha Kokoh</li>
                <li id="text89">Al-Waliyy, artinya Yang Maha Melindungi</li>
                <li id="text90">Al-Hamiid, artinya Yang Maha Terpuji</li>
                <li id="text91">Al-Muhshi, artinya Yang Maha Menghitung</li>
                <li id="text92">Al-Mubdi', artinya Yang Maha Memulai</li>
                <li id="text93">Al-Mu'id, artinya Yang Maha Mengembalikan</li>
                <li id="text94">Al-Muhyi, artinya Yang Maha Menghidupkan</li>
                <li id="text95">Al-Mumiit, artinya Yang Maha Mematikan</li>
                <li id="text96"> Al-Hayy, artinya Yang Maha Hidup</li>
                <li id="text97">Al-Qayyuum, artinya Yang Maha Mandiri</li>
                <li id="text98">Al-Waajid, artinya Yang Maha Menemukan</li>
                <li id="text99">Al-Maajid, artinya Yang Maha Mulia</li>
                <li id="text100">Al-Waahid, artinya Yang Maha Tunggal</li>
                <li id="text101">Al-Ahad, artinya Yang Maha Esa</li>
                <li id="text102">Ash-Shamad, artinya Yang Maha Dibutuhkan</li>
                <li id="text103">Al-Qaadir, artinya Yang Maha Kuat</li>
                <li id="text104">Al-Muqtadir, artinya Yang Maha Berkuasa</li>
                <li id="text105">Al-Muqqadim, artinya Yang Maha Mendahulukan</li>
                <li id="text106">Al-Mu'akhkhir, artinya Yang Maha Mengakhirkan</li>
                <li id="text107">Al-Awwal, artinya Yang Maha Permulaan</li>
                <li id="text108">Al-Aakhir, artinya Yang Maha Akhir</li>
                <li id="text109">Azh-Zhaahir, artinya Yang Maha Nyata</li>
                <li id="text110">Al-Baathin, artinya Yang Maha Ghaib</li>
                <li id="text111">Al-Waalii, artinya Yang Maha Memerintah</li>
                <li id="text112">Al-Muta'aalii, artinya Yang Maha Tinggi</li>
                <li id="text113">Al-Barr, artinya Yang Maha Dermawan</li>
                <li id="text114">At-Tawwaab, artinya Yang Maha Penerima Taubat</li>
                <li id="text115">Al-Muntaqim, artinya Yang Maha Penyiksa</li>
                <li id="text116">Al-'Afuww, artinya Yang Maha Pemaaf</li>
                <li id="text117">Ar-Ra'uuf, artinya Yang Maha Pengasih</li>
                <li id="text118">Maalikal Mulk, artinya Yang Mempunya Kerajaan</li>
                <li id="text119">Zuljalaali wal 'Ikram, artinya Yang Maha Memiliki Kebesaran serta Kemuliaan</li>
                <li id="text120">Al-Muqsith, artinya Yang Maha Adil</li>
                <li id="text121">Al-Jaami', artinya Yang Maha Pengumpul</li>
                <li id="text122">Al-Ghaniyy, artinya Yang Maha kaya</li>
                <li id="text123">Al-Mughnii, artinya Yang Maha Mencukupi</li>
                <li id="text124">Al-Maani', artinya Yang Maha Mencegah</li>
                <li id="text125">Adh-Dhaarr, artinya Yang Maha Pemberi Derita</li>
                <li id="text126">An-Naafi', artinya Yang Maha Pemberi Manfaat</li>
                <li id="text127">An-Nuur, artinya Yang Maha Bercahaya</li>
                <li id="text128">Al-Haadii, artinya Yang Maha Pemberi Petunjuk</li>
                <li id="text129">Al-Badii', artinya Yang Maha Pencipta</li>
                <li id="text130">Al-Baaqii, artinya Yang Maha Kekal</li>
                <li id="text131">Al-Waarits, artinya Yang Maha Mewarisi</li>
                <li id="text132">Ar-Rasyiid, artinya Yang Maha Pandai</li>
                <li id="text133">Ash-Shabuur, artinya Yang Maha Sabar</li>
            </ol>
            </p>
            <h3 class="green"><b id="text134">Iman Kepada Malaikat</b></h3>
            <h4 style="font-size: 15px;" id="text135">Pengertian :</h4>
            <p class="margin-left" style="text-align: justify;" id="text136">Yaitu meyakini bahwa malaikat adalah makhluk yang diciptakan oleh Allah SWT dari Nur (cahaya), yang selalu patuh, tunduk dan taat pada perintah serta ketentuan Allah SWT.
                Malaikat merupakan makhluk Allah yang tidak mempunyai nafsu, melainkan hanya memiliki akal, sehingga mereka terpelihara dari kesalahan dan dosa. Malaikat tidak sama dengan manusia.
                Sebab, malaikat tidak berjenis kelamin laki-laki atau perempuan. Hanya Allah SWT lah yang lebih mengetahui.
                Dalam ajaran agama islam terdapat 10 malaikat yang wajib kita ketahui dari banyak malaikat yang ada di dunia dan akhirat yang tidak kita ketahui.</p>
            <br>
            <h4 style="font-size: 15px;" id="text137">10 Malaikat yang wajib di ketahui, yaitu :</h4>
            <p class="margin-left" style="text-align: justify;">
            <ol class="margin-left-list" type="1">
                <li id="text138">Malaikat Jibril tugasnya menyampaikan wahyu Allah kepada nabi dan rasul.</li>
                <li id="text139">Malaikat Mikail tugasnya memberi rezeki pada manusia.</li>
                <li id="text140">Malaikat Israfil tugasnya meniup terompet sangkakala di waktu hari kiamat.</li>
                <li id="text141">Malaikat Izrail tugasnya mencabut nyawa.</li>
                <li id="text142">Malaikat Munkar tugasnya menanyai mayat di alam kubur.</li>
                <li id="text143">Malaikat Nakir tugasnya menanyai mayat di alam kubur.</li>
                <li id="text144">Malaikat Raqib tugasnya mencatat segala amal baik manusia ketika hidup.</li>
                <li id="text145">Malaikat Atid tugasnya mencatat segala perbuatan buruk manusia ketika hidup.</li>
                <li id="text146">Malaikat Malik tugasnya menjaga pintu neraka.</li>
                <li id="text147">Malaikat Ridwan tugasnya menjaga pintu surga.</li>
            </ol>
            </p>
            <h4 style="font-size: 15px;" id="text148">Sifat-Sifat Dasar Malaikat, yaitu :</h4>
            <p class="margin-left" style="text-align: justify;">
            <ol class="margin-left-list" type="1">
                <li id="text149">Selalu patuh pada segala perintah Allah dan selalu tidak melaksanakan apa yang dilarang Allah SWT.</li>
                <li id="text150">Tidak sombong, tidak memiliki nafsu dan selalu bertasbih.</li>
                <li id="text151">Dapat berubah wujud dan menjelma menjadi yang dia kehendaki.</li>
                <li id="text152">Memohon ampunan bagi orang-orang yang beriman.</li>
                <li id="text153">Ikut bahagia ketika seseorang mendapatkan Lailatul Qadar.</li>
            </ol>
            </p>
            <h3 class="green"><b id="text154">Iman Kepada Kitab</b></h3>
            <h4 style="font-size: 15px;" id="text155">Pengertian :</h4>
            <p class="tentang" style="text-align: justify;" id="text156">Iman kepada kitab-kitab Allah yaitu meyakini bahwa Allah SWT telah menurunkan kitab-kitab-Nya kepada Nabi dan rasul-Nya sebagai petunjuk untuk mencapai kebahagian dunia dan diakhirat nantinya.</p>
            <br>
            <h4 style="font-size: 15px;" id="text157">Kitab-Kitab Allah SWT yang diturunkan kepada Nabi dan Rasul, yaitu :</h4>
            <p class="tentang" style="text-align: justify;">
            <ol class="margin-left-list" type="1">
                <li id="text158">Kitab Taurat diturunkan kepada Nabi Musa AS berbahasa Ibrani.</li>
                <li id="text159">Kitab Zabur diturunkan kepada Nabi Daud AS berbahasa Qibti.</li>
                <li id="text160">Kitab Injil diturunkan kepada Nabi Isa AS berbahasa Suryani.</li>
                <li id="text161">Kitab Al-Quran diturunkan kepada Nabi Muhammad SAW berbahasa Arab.</li>
            </ol>
            </p>
            <h3 class="green"><b id="text162">Iman Kepada Nabi dan Rasul</b></h3>
            <h4 style="font-size: 15px;" id="text163">Pengertian :</h4>
            <p class="tentang" style="text-align: justify;" id="text164">Iman kepada nabi dan rasul yaitu meyakini bahwa Allah SWT telah mengutus nabi dan rasul-Nya untuk membawa syiar agama dan membimbing umat pada jalan lurus dan diridhai Allah SWT,
                dan juga sebagai pembawa berita gembira dan pemberi peringatan untuk kaumnya.</p>
            <br>
            <h4 style="font-size: 15px;" id="text165">Nama Nabi :</h4>
            <p class="tentang" style="text-align: justify;" id="text166">Dalam agama islam terdapat 25 nabi dan rasul yang wajib diketahui dan Nabi Muhammad SAW sebagai nabi yang terakhir untuk seluruh umat sepanjang masa.</p>
            <p class="tentang" style="text-align: justify;">
            <ol class="margin-left-list" type="1">
                <li id="text167">Adam AS.</li>
                <li id="text168">Idris AS.</li>
                <li id="text169">Nuh AS.</li>
                <li id="text170">Hud AS.</li>
                <li id="text171">Shaleh AS.</li>
                <li id="text172">Ibrahim AS.</li>
                <li id="text173">Luth AS.</li>
                <li id="text174">Ismail AS.</li>
                <li id="text175">Ishak AS.</li>
                <li id="text176">Yakub AS.</li>
                <li id="text177">Yusuf AS.</li>
                <li id="text178">Ayub AS.</li>
                <li id="text179">Syu'aib AS.</li>
                <li id="text180">Musa AS.</li>
                <li id="text181">Harun AS.</li>
                <li id="text182">Zulkifli AS.</li>
                <li id="text183">Daud AS.</li>
                <li id="text184">Sulaiman AS.</li>
                <li id="text185">Ilyas AS.</li>
                <li id="text186">Ilyasa AS.</li>
                <li id="text187">Yunus AS.</li>
                <li id="text188">Zakaria AS.</li>
                <li id="text189">Yahya AS.</li>
                <li id="text190">Isa AS.</li>
                <li id="text191">Muhammad SAW.</li>
            </ol>
            </p>
            <h4 style="font-size: 15px;" id="text192">Ulul Azmi :</h4>
            <p class="tentang" style="text-align: justify;" id="text193">Diantara nabi dan rasul yang 25 itu ada 5 orang nabi dan rasul yang memiliki julukan Ulul Azmi.
                Ulul Azmi itu adalah gelar yang diberikan kepada para rasul yang memiliki kedudukan tinggi (istimewa) karena ketabahan dan kesabaran yang luar biasa dalam menyebarkan agama.</p>
            <p class="tentang" style="text-align: justify;" id="text194">Para Rasul yang memiliki gelar Ulul Azmi, yaitu :
            <ol class="margin-left-list" type="1">
                <li id="text195">Nuh AS.</li>
                <li id="text196">Ibrahim AS.</li>
                <li id="text197">Musa AS.</li>
                <li id="text198">Isa AS.</li>
                <li id="text199">Muhammad SAW.</li>
            </ol>
            </p>
        </div>
        <div class="col" style="text-align: right;">
            <!-- Button trigger modal -->
            <button class="btn btn-success me-2" data-bs-toggle="modal" data-bs-target="#staticBackdrop" title="beri komentar"><i class="fa-regular fa-comment"></i> Komentar</button>
            <a class="btn btn-success me-2" role="button" href="<?= base_url('mulai') ?>"><i class="fa-solid fa-arrow-left"></i> Kembali</a>
            <button class="btn btn-success me-2" onclick="topFunction()" id="myBtn" title="Go to top"><i class="fas fa-arrow-up"></i> Ke Atas</button>
        </div>

        <!-- Modal -->
        <div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered">
                <div class="modal-content" style="margin-right: 0px;">
                    <div class="modal-header" style="margin-right: 0px;">
                        <h1 class="modal-title fs-5" id="staticBackdropLabel">Komentar</h1>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body" style="margin-right: 0px;">
                        <form id="komen" action="<?= base_url('mulai/tambahKomentarAqidah') ?>" method="POST">
                            <div class="mb-3" style="margin-right: 0px;">
                                <label for="Nama" class="col-form-label">Nama:</label>
                                <input type="text" class="form-control" id="Nama" name="nama" placeholder="Isi nama kamu ya!" required>
                            </div>
                            <div class="mb-3" style="margin-right: 0px;">
                                <label for="Komentar" class="col-form-label">Komentar:</label>
                                <textarea class="form-control" id="Komentar" name="komentar" required></textarea>
                            </div>
                            <input type="hidden" name="tanggalWaktu" value="<?= date('d-m-Y') . ' ' . date('H:i:s') ?>">
                            <input type="hidden" name="halaman" value="AqidahAkhlak">
                    </div>
                    <div class="modal-footer" style="margin-right: 0px;">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                        <button type="submit" name="submit" class="btn btn-primary">Kirim</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </main>

    <!-- Kolom Komentar -->
    <section id="KomentarSection">
        <h3>Komentar:</h3>
        <div class="bagianKomen">
            <?php
            $query = $this->db->get_where('komentar', ['halaman_mapel' => 'AqidahAkhlak']);
            if ($query->num_rows() > 0) {
                foreach ($qryKomen as $row) { ?>
                    <div class="kolomKomen">
                        <div class="identitas">
                            <h5><i class="fa-solid fa-user" style="padding-right: 10px;"></i> <?= $row->nama ?></h5>
                            <div class="tanggal"><?= $row->tanggal_waktu ?></div>
                        </div>
                        <div class="isiKomen">
                            <?= $row->isi_komentar ?>
                        </div>
                        <div class="btnLikeUnLike">
                            <button class="btn btn-secondary" id="btnLike<?= $row->id_komentar ?>" onclick="btnLike<?= $row->id_komentar ?>()">
                                <i class="fa-regular fa-thumbs-up"></i>
                                <span id="counter">0</span>
                            </button>
                            <button class="btn btn-secondary" id="btnUnLike<?= $row->id_komentar ?>" onclick="btnUnLike<?= $row->id_komentar ?>()">
                                <i class="fa-regular fa-thumbs-down"></i>
                            </button>
                        </div>
                    </div>
                    <script>
                        function btnLike<?= $row->id_komentar ?>() {
                            element = document.getElementById("btnLike<?= $row->id_komentar ?>");
                            if (element.className == "btn btn-secondary") {
                                element.className = element.className.replace("btn btn-secondary", "btn btn-outline-primary");
                                element.innerHTML = '<i class="fa-solid fa-thumbs-up"></i> 1';
                                document.getElementById("btnUnLike<?= $row->id_komentar ?>").setAttribute("disabled", "");
                            } else if (element.className == "btn btn-outline-primary") {
                                element.className = element.className.replace("btn btn-outline-primary", "btn btn-secondary");
                                element.innerHTML = '<i class="fa-regular fa-thumbs-up"></i> 0';
                                document.getElementById("btnUnLike<?= $row->id_komentar ?>").removeAttribute("disabled");
                            }
                        }

                        function btnUnLike<?= $row->id_komentar ?>() {
                            element = document.getElementById("btnUnLike<?= $row->id_komentar ?>");
                            if (element.className == "btn btn-secondary") {
                                element.className = element.className.replace("btn btn-secondary", "btn btn-outline-primary");
                                element.innerHTML = '<i class="fa-solid fa-thumbs-down"></i>';
                                document.getElementById("btnLike<?= $row->id_komentar ?>").setAttribute("disabled", "");
                            } else if (element.className == "btn btn-outline-primary") {
                                element.className = element.className.replace("btn btn-outline-primary", "btn btn-secondary");
                                element.innerHTML = '<i class="fa-regular fa-thumbs-down"></i>';
                                document.getElementById("btnLike<?= $row->id_komentar ?>").removeAttribute("disabled");
                            }
                        }
                    </script>
                <?php }
            } else { ?>
                <h6 align="center">Belum ada yang memberikan komentar untuk mata pelajaran ini</h6>
            <?php } ?>
        </div>
    </section>






    <!-- <div class="bagian mt-50">
            <h3><b>Klien</b></h3>
            <div class="name">
                <img src="assets/profile/Foto Team Ustad Yana Mulyana.png" alt="Avatar" class="profile" style="width:200px">
                <p><b>Ust. Yana Mulyana</b></p>
                <p>Imam Masjid At-Taqwa</p>
                <p>Perumahan Odessa </p>
            </div>
        </div>
        <div class="bagian mt-50">
        <h3><b>Tim</b></h3>
            <div class="row">
                <div class="col text-center">
                    <img src="assets/profile/Foto Team Farid.png" alt="Avatar1" class="profile" style="width:200px">
                    <p><b>Farid Jafar</b></p>
                    <p>Pembuat Website </p>
                </div>
                <div class="col text-center">
                    <img src="assets/profile/Foto Team Ikhsan.png" alt="Avatar2" class="profile" style="width:200px">
                    <p><b>Moh. Ikhsan Yondra</b></p>
                    <p>Konseptor </p>
                </div>
                <div class="col text-center">
                    <img src="assets/profile/Foto Team Frans.png" alt="Avatar3" class="profile" style="width:200px">
                    <p><b>Frans Yehezkiel Siregar</b></p>
                    <p>Observer </p>
                </div>
                <div class="col text-center">
                    <img src="assets/profile/Foto Team Angger.png" alt="Avatar4" class="profile" style="width:200px">
                    <p><b>Angger Asathin S. Moyo</b></p>
                    <p>Graphic Designer </p>
                </div>
            </div>
        </div> -->


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

        function kirKomen() {
            document.getElementById("komen").submit();
        }

        function cari() {
            const input = document.getElementById('dicari').value.toLowerCase();
            if (input != "") {
                const regExp = new RegExp(input, "gi");
                for (let i = '1'; i < 200; i++) {
                    document.getElementById('text' + i).innerHTML = document.getElementById('text' + i).textContent.replace(regExp, "<mark id=mark>$&</mark>")
                }
                if (document.getElementById("mark")) {
                    document.location.href = "<?= base_url('mulai/aqidah_akhlak') ?>#mark";
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