-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3308
-- Generation Time: May 10, 2024 at 06:47 AM
-- Server version: 10.4.25-MariaDB
-- PHP Version: 8.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_tokobuku`
--

-- --------------------------------------------------------

--
-- Table structure for table `tb_buku`
--

CREATE TABLE `tb_buku` (
  `id_buku` int(11) NOT NULL,
  `judul_buku` varchar(100) NOT NULL,
  `penulis` varchar(40) NOT NULL,
  `harga_buku` int(11) NOT NULL,
  `gambar_buku` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_buku`
--

INSERT INTO `tb_buku` (`id_buku`, `judul_buku`, `penulis`, `harga_buku`, `gambar_buku`) VALUES
(13042023, 'Kata', 'Rintik Sedu', 99000, '9789797809324_kata.jpg'),
(13042024, 'Buku Pintar Manajemen dan Kerjasama Tim', 'Indriyana Rachmawati', 85000, 'WhatsApp_Image_2024-05-08_at_23_06_53.jpeg'),
(13042025, 'Bedah Soal dan Materi TPS UTBK SBMPTN', 'The King', 135000, 'img358_5uvQQD2.jpg'),
(13042026, 'Si Anak Pintar', 'Tere Liye', 84000, '9786025734502_si-anak-pinta.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `tb_pegawai`
--

CREATE TABLE `tb_pegawai` (
  `id_pegawai` int(11) NOT NULL,
  `nama_pegawai` varchar(40) NOT NULL,
  `gambar_pegawai` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_pegawai`
--

INSERT INTO `tb_pegawai` (`id_pegawai`, `nama_pegawai`, `gambar_pegawai`) VALUES
(50422733, 'Jansen Mauren Benedict', 'DSC_0002_copy-removebg-preview.jpg'),
(51422033, 'Muhammad Farahat', 'IMG_2023-05-10-10-16-44-450.jpg'),
(51422191, 'Nabila Alawiyah', 'Foto_51422187_Nabila_Alawiyah.jpg'),
(51422323, 'Rafi Ananda Subekti', 'WhatsApp_Image_2024-05-08_at_21_01_47.jpeg'),
(51422653, 'Yosephine Cahaya Permatahari', 'WhatsApp_Image_2024-05-08_at_21_02_21.jpeg');

-- --------------------------------------------------------

--
-- Table structure for table `tb_pembeli`
--

CREATE TABLE `tb_pembeli` (
  `id_pembeli` int(11) NOT NULL,
  `nama_pembeli` varchar(50) NOT NULL,
  `no_telp` varchar(13) NOT NULL,
  `alamat` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_pembeli`
--

INSERT INTO `tb_pembeli` (`id_pembeli`, `nama_pembeli`, `no_telp`, `alamat`) VALUES
(8, 'Talita Sakira', '085123456789', 'Bekasi'),
(13, 'Popoy', '0812345678910', 'Kabupaten Bekasi'),
(14, 'Lala', '088098765432', 'Jakarta');

-- --------------------------------------------------------

--
-- Table structure for table `tb_penjualan`
--

CREATE TABLE `tb_penjualan` (
  `id_penjualan` int(11) NOT NULL,
  `pembeli` varchar(50) NOT NULL,
  `pegawai` varchar(50) NOT NULL,
  `judul` varchar(100) NOT NULL,
  `harga_satuan` int(25) NOT NULL,
  `jumlah` int(3) NOT NULL,
  `harga` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_penjualan`
--

INSERT INTO `tb_penjualan` (`id_penjualan`, `pembeli`, `pegawai`, `judul`, `harga_satuan`, `jumlah`, `harga`) VALUES
(71, 'Talita Sakira', 'Jansen Mauren Benedict', 'Buku Pintar Manajemen dan Kerjasama Tim', 85000, 3, 255000),
(72, 'Popoy', 'Nabila Alawiyah', 'Bedah Soal dan Materi TPS UTBK SBMPTN', 135000, 4, 540000);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tb_buku`
--
ALTER TABLE `tb_buku`
  ADD PRIMARY KEY (`id_buku`);

--
-- Indexes for table `tb_pegawai`
--
ALTER TABLE `tb_pegawai`
  ADD PRIMARY KEY (`id_pegawai`);

--
-- Indexes for table `tb_pembeli`
--
ALTER TABLE `tb_pembeli`
  ADD PRIMARY KEY (`id_pembeli`);

--
-- Indexes for table `tb_penjualan`
--
ALTER TABLE `tb_penjualan`
  ADD PRIMARY KEY (`id_penjualan`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tb_buku`
--
ALTER TABLE `tb_buku`
  MODIFY `id_buku` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13042027;

--
-- AUTO_INCREMENT for table `tb_pegawai`
--
ALTER TABLE `tb_pegawai`
  MODIFY `id_pegawai` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=51422655;

--
-- AUTO_INCREMENT for table `tb_pembeli`
--
ALTER TABLE `tb_pembeli`
  MODIFY `id_pembeli` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `tb_penjualan`
--
ALTER TABLE `tb_penjualan`
  MODIFY `id_penjualan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=73;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
