-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 03, 2023 at 06:43 PM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 7.4.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `mengaji`
--

-- --------------------------------------------------------

--
-- Table structure for table `komentar`
--

CREATE TABLE `komentar` (
  `id_komentar` int(11) NOT NULL,
  `halaman_mapel` varchar(100) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `isi_komentar` varchar(255) NOT NULL,
  `tanggal_waktu` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `komentar`
--

INSERT INTO `komentar` (`id_komentar`, `halaman_mapel`, `nama`, `isi_komentar`, `tanggal_waktu`) VALUES
(23, 'AqidahAkhlak', 'Charles Bintang', 'Halo!', '03-01-2023 19:26:26'),
(24, 'AqidahAkhlak', 'John Carlos Sitorus', 'Halo Charles', '03-01-2023 19:26:49');

-- --------------------------------------------------------

--
-- Table structure for table `rating`
--

CREATE TABLE `rating` (
  `id_rating` int(11) NOT NULL,
  `rate` int(11) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `alasan` varchar(255) NOT NULL,
  `tanggal_waktu` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `rating`
--

INSERT INTO `rating` (`id_rating`, `rate`, `nama`, `alasan`, `tanggal_waktu`) VALUES
(1, 5, 'Charles Bintang', 'Lengkap!', ''),
(2, 3, 'John', 'ada yang kurang', '23:32'),
(3, 5, 'Angel', 'Lengkap dan keren!', '23:33'),
(4, 5, 'Diva', 'bagus', '00:20'),
(6, 4, 'Frans Yehezkiel S.', 'Udh cukup keren!', '04-01-2023 00:28:20'),
(7, 2, 'Frans Yehezkiel S.', 'contoh ges', '04-01-2023 00:37:10'),
(8, 5, 'Frans Yehezkiel S.', 'ini bagus banget (contoh)', '04-01-2023 00:37:58'),
(9, 5, 'Frans Yehezkiel S.', 'wah ini sih gg parah (contoh, setelah ini juga) asdfajksdnfj avsbap9unjiasvbauphi pausdnvaiowbuv9a -8wrhnar a9sdnvaobgrb ava paunbfasdlvads vni asud oiasnvaisd a ougbaov da odfhwarh var bv a rvasud ivas vubaruvb aouvb a ', '04-01-2023 00:38:36');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `komentar`
--
ALTER TABLE `komentar`
  ADD PRIMARY KEY (`id_komentar`),
  ADD KEY `nama` (`nama`),
  ADD KEY `komentar_user` (`isi_komentar`),
  ADD KEY `tanggal_waktu` (`tanggal_waktu`(768)),
  ADD KEY `isi_komentar` (`isi_komentar`),
  ADD KEY `halaman_mapel` (`halaman_mapel`);

--
-- Indexes for table `rating`
--
ALTER TABLE `rating`
  ADD PRIMARY KEY (`id_rating`),
  ADD KEY `nama` (`nama`),
  ADD KEY `alasan` (`alasan`),
  ADD KEY `rate` (`rate`),
  ADD KEY `tanggal_waktu` (`tanggal_waktu`(768));

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `komentar`
--
ALTER TABLE `komentar`
  MODIFY `id_komentar` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT for table `rating`
--
ALTER TABLE `rating`
  MODIFY `id_rating` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
