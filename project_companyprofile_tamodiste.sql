-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Nov 20, 2023 at 06:56 AM
-- Server version: 8.0.30
-- PHP Version: 7.3.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `project_companyprofile_tamodiste`
--

-- --------------------------------------------------------

--
-- Table structure for table `tb_about`
--

CREATE TABLE `tb_about` (
  `id` int NOT NULL,
  `tagline` text NOT NULL,
  `desc` text NOT NULL,
  `gambar` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf32;

--
-- Dumping data for table `tb_about`
--

INSERT INTO `tb_about` (`id`, `tagline`, `desc`, `gambar`) VALUES
(1, '<p>Berdiri sendiri tentulah tidak mudah, proses kreatif dalam menciptakan ide, solusi, hingga quality control dilakukan secara mandiri</p>', '<p>Brand TA Modiste tercipta dengan seiring berjalannya waktu, dari mulai belajar hingga tumbuh sampai saat ini dengan harapan agar selalu dikenal banyak customer melalui karya dan rancangan kami.</p>', 'IMG-20230503-WA0003.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `tb_admin`
--

CREATE TABLE `tb_admin` (
  `id` int NOT NULL,
  `nama_admin` varchar(255) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf32;

--
-- Dumping data for table `tb_admin`
--

INSERT INTO `tb_admin` (`id`, `nama_admin`, `username`, `password`) VALUES
(1, 'TA Modiste ', 'admin', '21232f297a57a5a743894a0e4a801fc3');

-- --------------------------------------------------------

--
-- Table structure for table `tb_clients`
--

CREATE TABLE `tb_clients` (
  `id` int NOT NULL,
  `gambar` varchar(255) NOT NULL,
  `nama_client` varchar(50) NOT NULL,
  `date_created` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf32;

--
-- Dumping data for table `tb_clients`
--

INSERT INTO `tb_clients` (`id`, `gambar`, `nama_client`, `date_created`) VALUES
(6, 'Alowish_Rose_Water-removebg-preview.png', 'Alowish Rose Water', '2023-11-08'),
(7, 'el_qibthy-removebg-preview.png', 'El-qibthy', '2023-11-08'),
(8, 'Naura_kutek-removebg-preview.png', 'Naura Kutek Halal Muslimah', '2023-11-08'),
(9, 'sweet_diny-removebg-preview.png', 'Sweet Diny', '2023-11-08');

-- --------------------------------------------------------

--
-- Table structure for table `tb_gallery`
--

CREATE TABLE `tb_gallery` (
  `id` int NOT NULL,
  `gambar` varchar(255) NOT NULL,
  `kategori` varchar(50) NOT NULL,
  `date_created` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf32;

--
-- Dumping data for table `tb_gallery`
--

INSERT INTO `tb_gallery` (`id`, `gambar`, `kategori`, `date_created`) VALUES
(38, 'IMG-20230427-WA00483.jpg', 'Produk', '2023-11-08'),
(39, 'IMG-20230427-WA0046_-_Copy3.jpg', 'Produk', '2023-11-08'),
(41, 'IMG-20230427-WA0012_-_Copy20.jpg', 'Produk', '2023-11-08'),
(42, 'IMG-20230427-WA00114.jpg', 'Testimonial', '2023-11-08'),
(43, '16830480344531.jpg', 'Testimonial', '2023-11-17');

-- --------------------------------------------------------

--
-- Table structure for table `tb_layanan`
--

CREATE TABLE `tb_layanan` (
  `id` int NOT NULL,
  `clipart` varchar(255) NOT NULL,
  `nama_layanan` varchar(255) NOT NULL,
  `desc` text CHARACTER SET utf32 COLLATE utf32_general_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf32;

--
-- Dumping data for table `tb_layanan`
--

INSERT INTO `tb_layanan` (`id`, `clipart`, `nama_layanan`, `desc`) VALUES
(1, 'life-ring', 'Jasa Jahit', 'Jasa jahit kami memberikan solusi pakaian kustom dengan desain eksklusif. Kualitas tinggi, tepat waktu, dan harga terjangkau. '),
(4, 'window-maximize', 'Cutting Kain', 'Pemotongan kain akurat, presisi, dan profesional untuk hasil jahitan terbaik. Percayakan proyek Anda kepada kami untuk kualitas yang tak tertandingi.'),
(5, 'lightbulb', 'Fashion Designer', 'Jelajahi bakat perancangan mode Anda dengan bimbingan ahli kami. Ciptakan gaya Anda yang unik dalam industri fashion bersama kami.');

-- --------------------------------------------------------

--
-- Table structure for table `tb_owner`
--

CREATE TABLE `tb_owner` (
  `id` int NOT NULL,
  `avatar` varchar(255) CHARACTER SET utf32 COLLATE utf32_general_ci NOT NULL,
  `judul_artikel` varchar(255) NOT NULL,
  `artikel` text NOT NULL,
  `quotes` text CHARACTER SET utf32 COLLATE utf32_general_ci NOT NULL,
  `date_created` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf32;

--
-- Dumping data for table `tb_owner`
--

INSERT INTO `tb_owner` (`id`, `avatar`, `judul_artikel`, `artikel`, `quotes`, `date_created`) VALUES
(1, 'fotoowner.jpg', 'Halo saya Ista Viana, pemilik Rumah Jahit TA Modiste', '<p><span style=\"font-size: 14pt;\"><strong>Ista Viana</strong></span>, saya wanita yang hidup dengan penuh mimpi dan imajinasi. Bertumbuh dan berkembang secara perlahan prinsip saya tidak ada mimpi yang terlalu tinggi yang ada hanya niat yang terlalu rendah, saya yang dulu hanya sekedar membantu ibu menjahit dirumah, karena pada saat itu saya bekerja sebagai pengajar di salah satu PAUD, harus bisa menerima dan tetap tegar saat ibu tercinta harus berpulang kepada pangkuan sang maha kuasa di tahun 2016 mulai saat itu saya memutuskan fokus pada rumah jahit.</p>\r\n<p>Dengan bismillah, saya menamakan bisnis yang sudah diwariskan dari ibu saya dengan nama <strong>TA MODISTE</strong> dan saya masih perlu banyak belajar, berkembang untuk bersaing secara sehat dalam dunia bisnis. harapan saya <strong>TA MODISTE</strong> bisa menjadi rumah jahit masa kini yang dapat menghasilkan dan menciptakan desain-desain yang disukai para costumer. titik tinggi dalam hidup saya adalah ketika saya bisa menerima diri sendiri dan saya memberikan energi positif untuk orang lain. perjalanan demi perjalanan dirasa melewati banyak hal yang naik dan turun dan mulai rencana tapi akhitnya banyak yang tidak terduga juga mimpi yang awalnya hanya tertulis dibuku catatan berubah menjadi rencana, rencana yang dikerjakan berubah menjadi komitmen. ketika komitmen bertemu dengan konsisten, menjalankan dengan penuh kesungguhan maka akan berubah menjadi kenyataan meski kenyataan dan berserah diri itu kuasa Allah SWT nikmati saja proses maka akan muncul ketenangan.</p>\r\n<p>Tidak terasa tahun demi tahun berlalu, saya sudah berhasil melangkah sejauh ini dan atas izin Allah SWT ternyata ujian inilah yang memotivasi, bertumbuh dan membuatku berlatih keras. Dan atas izin Allah SWT, <strong>TA MODISTE</strong> terus bertumbuh dan berkembang sampai pada saat ini.</p>', 'Develop the winning edge. Small differences in your performance can lead to large differences in your results.', '2023-11-19');

-- --------------------------------------------------------

--
-- Table structure for table `tb_testimonial`
--

CREATE TABLE `tb_testimonial` (
  `id` int NOT NULL,
  `nama` varchar(255) CHARACTER SET utf32 COLLATE utf32_general_ci NOT NULL,
  `company` varchar(100) NOT NULL,
  `rating` int NOT NULL,
  `deskripsi` text CHARACTER SET utf32 COLLATE utf32_general_ci NOT NULL,
  `avatar` varchar(255) NOT NULL,
  `date_created` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf32;

--
-- Dumping data for table `tb_testimonial`
--

INSERT INTO `tb_testimonial` (`id`, `nama`, `company`, `rating`, `deskripsi`, `avatar`, `date_created`) VALUES
(1, 'Sulthon Nasir Irianto', 'Freelancer', 4, 'TA Modiste sangat bagus dan memuaskan, produknya menarik dan harga terjangkau.', 'tby504n8_400x400.jpg', '2023-11-08'),
(6, 'Irsyad Hafidz', 'More Details', 5, 'Bagus sekali produknya, pengerjaan cepat dan memuaskan.', 'IMG-20230427-WA00484.jpg', '2023-11-08');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tb_about`
--
ALTER TABLE `tb_about`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tb_admin`
--
ALTER TABLE `tb_admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tb_clients`
--
ALTER TABLE `tb_clients`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tb_gallery`
--
ALTER TABLE `tb_gallery`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tb_layanan`
--
ALTER TABLE `tb_layanan`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tb_owner`
--
ALTER TABLE `tb_owner`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tb_testimonial`
--
ALTER TABLE `tb_testimonial`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tb_about`
--
ALTER TABLE `tb_about`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `tb_admin`
--
ALTER TABLE `tb_admin`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `tb_clients`
--
ALTER TABLE `tb_clients`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `tb_gallery`
--
ALTER TABLE `tb_gallery`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=44;

--
-- AUTO_INCREMENT for table `tb_layanan`
--
ALTER TABLE `tb_layanan`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `tb_owner`
--
ALTER TABLE `tb_owner`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `tb_testimonial`
--
ALTER TABLE `tb_testimonial`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
