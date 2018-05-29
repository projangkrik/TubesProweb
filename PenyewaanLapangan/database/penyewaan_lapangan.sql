-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: May 29, 2018 at 08:56 AM
-- Server version: 10.1.13-MariaDB
-- PHP Version: 5.6.20

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `penyewaan_lapangan`
--

-- --------------------------------------------------------

--
-- Table structure for table `akun`
--

CREATE TABLE `akun` (
  `id` int(120) NOT NULL,
  `nama` varchar(120) NOT NULL,
  `email` varchar(120) NOT NULL,
  `username` varchar(120) NOT NULL,
  `password` varchar(120) NOT NULL,
  `level` enum('Admin','Member') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `akun`
--

INSERT INTO `akun` (`id`, `nama`, `email`, `username`, `password`, `level`) VALUES
(19, 'Fuad Wiyono Putra', 'fuadwiyono@admin.com', 'fuad', '0029b59ae51fd5c032e0dd788907bfa7', 'Admin'),
(20, 'Administrator', 'admin@admin.adm', 'admin', '21232f297a57a5a743894a0e4a801fc3', 'Admin'),
(21, 'Member', 'member@member.mbr', 'member', 'aa08769cdcb26674c6706093503ff0a3', 'Member'),
(26, 'Adelia Firsty', '10161005@itk.ac.id', '10161005', 'b69c9b973064b1145f98695b4431889f', 'Admin'),
(28, 'Shofa Ferlina', '10161088@itk.ac.id', '10161088', '6e4e483035086e04cf3ac00f1264681f', 'Admin'),
(29, 'Fuad Wiyono Putra', '10161052@itk.ac.id', '10161052', 'fbed624fdb952517d6ab4fff5649f7be', 'Admin'),
(30, 'Muhammad Fadillah', '10161060@itk.ac.id', '10161060', '7d08c8bf16abc11e5149d14b79d1c897', 'Admin'),
(31, 'Dika Maraga Maulid', '10151014@itk.ac.id', '10151014', '210ce17e6b0fdbae685a30762240d251', 'Admin'),
(33, 'OSAS', 'asdd@sad.cm', 'proelasdm', '42fae1955be23ad78e8115018ffe8d89', 'Member');

-- --------------------------------------------------------

--
-- Table structure for table `keluhan`
--

CREATE TABLE `keluhan` (
  `id_keluhan` int(120) NOT NULL,
  `nama` varchar(250) NOT NULL,
  `email` varchar(250) NOT NULL,
  `nomor_telepon` int(100) NOT NULL,
  `pesan` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `keluhan`
--

INSERT INTO `keluhan` (`id_keluhan`, `nama`, `email`, `nomor_telepon`, `pesan`) VALUES
(1, 'Jonney Kenedy', 'Jonney@email.com', 2147483647, 'Saya ingin menjadi sponsor anda untuk acara turnamen');

--
-- Triggers `keluhan`
--
DELIMITER $$
CREATE TRIGGER `Ketika Menerima Kritik dan Saran` AFTER INSERT ON `keluhan` FOR EACH ROW insert into notifikasi (isi_notifikasi) VALUES ("Kritik dan Saran Telah di terima")
$$
DELIMITER ;

-- --------------------------------------------------------

--
-- Table structure for table `lapangan`
--

CREATE TABLE `lapangan` (
  `id_lapangan` int(12) NOT NULL,
  `Gambar` varchar(1000) NOT NULL,
  `nama_lapangan` varchar(255) NOT NULL,
  `biaya_sewa` varchar(1000) NOT NULL,
  `Status` enum('TERSEDIA','TIDAK ADA','DALAM PERBAIKAN') NOT NULL,
  `Info` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `lapangan`
--

INSERT INTO `lapangan` (`id_lapangan`, `Gambar`, `nama_lapangan`, `biaya_sewa`, `Status`, `Info`) VALUES
(35, '../../images/lapangan/Kolam_Renang.jpeg', 'Olympic Swimming Pool', 'Rp. 120.000 Perjam', 'TERSEDIA', 'Tersedia 2 kolam renang untuk di sewa'),
(36, '../../images/lapangan/Lapangan_Futsal.jpeg', 'Futsal Arena', 'Rp.70.000 Perjam', 'TERSEDIA', 'Tersedia 5 lapangan futsal untuk disewa'),
(37, '../../images/lapangan/Lapangan_Tenis.jpeg', 'Tennis Indoor', 'Rp.65.000 Perjam', 'DALAM PERBAIKAN', 'Saat ini Lapangan Tennis Indoor masih dalam perbaikan lapangan');

--
-- Triggers `lapangan`
--
DELIMITER $$
CREATE TRIGGER `Ketika Menambahkan Lapangan` AFTER INSERT ON `lapangan` FOR EACH ROW insert into notifikasi (isi_notifikasi) VALUES ("Telah Menambahkan Lapangan")
$$
DELIMITER ;
DELIMITER $$
CREATE TRIGGER `Ketika Menghapus Lapangan` AFTER DELETE ON `lapangan` FOR EACH ROW insert INTO notifikasi (isi_notifikasi) VALUES ("Telah Menghapus Lapangan")
$$
DELIMITER ;
DELIMITER $$
CREATE TRIGGER `Ketika Mengupdate Lapangan` AFTER UPDATE ON `lapangan` FOR EACH ROW insert into notifikasi (isi_notifikasi) VALUES ("Telah Mengupdate Lapangan")
$$
DELIMITER ;

-- --------------------------------------------------------

--
-- Table structure for table `notifikasi`
--

CREATE TABLE `notifikasi` (
  `id_notifikasi` int(120) NOT NULL,
  `Waktu` datetime NOT NULL,
  `isi_notifikasi` varchar(2000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `notifikasi`
--

INSERT INTO `notifikasi` (`id_notifikasi`, `Waktu`, `isi_notifikasi`) VALUES
(32, '0000-00-00 00:00:00', 'Telah Menghapus Lapangan'),
(33, '0000-00-00 00:00:00', 'Telah Menghapus Lapangan'),
(35, '0000-00-00 00:00:00', 'Telah menerima pesan'),
(38, '0000-00-00 00:00:00', 'Telah Mengupdate Lapangan'),
(39, '0000-00-00 00:00:00', 'Telah Mengupdate Lapangan');

-- --------------------------------------------------------

--
-- Table structure for table `pesan`
--

CREATE TABLE `pesan` (
  `id_pesan` int(120) NOT NULL,
  `email` varchar(250) NOT NULL,
  `Isi_Pesan` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pesan`
--

INSERT INTO `pesan` (`id_pesan`, `email`, `Isi_Pesan`) VALUES
(14, 'member@member.mbr', 'Permintaan Reset Password username(member)'),
(15, 'fuadwiyono@admin.com', 'Permintaan Reset Password username(fuad)');

--
-- Triggers `pesan`
--
DELIMITER $$
CREATE TRIGGER `Ketika Menghapus Pesan` AFTER DELETE ON `pesan` FOR EACH ROW INSERT INTO notifikasi (isi_notifikasi) VALUES ("Pesan Telah di hapus")
$$
DELIMITER ;
DELIMITER $$
CREATE TRIGGER `Ketika Pesan Masuk` AFTER INSERT ON `pesan` FOR EACH ROW insert INTO notifikasi (isi_notifikasi) VALUES ("Telah menerima pesan")
$$
DELIMITER ;

-- --------------------------------------------------------

--
-- Table structure for table `sewa`
--

CREATE TABLE `sewa` (
  `id_sewa` int(120) NOT NULL,
  `Nama_Penyewa` varchar(50) NOT NULL,
  `nama_lapangan` varchar(120) NOT NULL,
  `Email` varchar(50) NOT NULL,
  `No_Telpon` int(20) NOT NULL,
  `Jam_Mulai` enum('08:00:00','09:00:00','10:00:00','11:00:00','12:00:00','13:00:00','14:00:00','15:00:00','16:00:00','17:00:00','18:00:00','19:00:00','20:00:00','21:00:00') NOT NULL,
  `Jam_Akhir` enum('08:00:00','09:00:00','10:00:00','11:00:00','12:00:00','13:00:00','14:00:00','15:00:00','16:00:00','17:00:00','18:00:00','19:00:00','20:00:00','21:00:00') NOT NULL,
  `Status` enum('Belum Dikonfirmasi','Terkonfirmasi') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `sewa`
--

INSERT INTO `sewa` (`id_sewa`, `Nama_Penyewa`, `nama_lapangan`, `Email`, `No_Telpon`, `Jam_Mulai`, `Jam_Akhir`, `Status`) VALUES
(3, 'Member', 'Futsal Arena', 'member@member.com', 2147483647, '08:00:00', '12:00:00', 'Belum Dikonfirmasi'),
(4, 'Member', 'Futsal Arena', 'fuad_wiyono@ymail.com', 2147483647, '08:00:00', '08:00:00', 'Belum Dikonfirmasi');

--
-- Triggers `sewa`
--
DELIMITER $$
CREATE TRIGGER `Ketika Menghapus` AFTER DELETE ON `sewa` FOR EACH ROW insert into notifikasi (isi_notifikasi) VALUES ("Telah Menghapus Data  pada di info sewa")
$$
DELIMITER ;
DELIMITER $$
CREATE TRIGGER `Ketika Mengupdate` AFTER UPDATE ON `sewa` FOR EACH ROW INSERT INTO notifikasi (isi_notifikasi) VALUES ("Permintaan Sewa Lapangan Dikonfirmasi")
$$
DELIMITER ;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `akun`
--
ALTER TABLE `akun`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email` (`email`),
  ADD UNIQUE KEY `username` (`username`);

--
-- Indexes for table `keluhan`
--
ALTER TABLE `keluhan`
  ADD PRIMARY KEY (`id_keluhan`);

--
-- Indexes for table `lapangan`
--
ALTER TABLE `lapangan`
  ADD PRIMARY KEY (`id_lapangan`);

--
-- Indexes for table `notifikasi`
--
ALTER TABLE `notifikasi`
  ADD PRIMARY KEY (`id_notifikasi`);

--
-- Indexes for table `pesan`
--
ALTER TABLE `pesan`
  ADD PRIMARY KEY (`id_pesan`);

--
-- Indexes for table `sewa`
--
ALTER TABLE `sewa`
  ADD PRIMARY KEY (`id_sewa`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `akun`
--
ALTER TABLE `akun`
  MODIFY `id` int(120) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=34;
--
-- AUTO_INCREMENT for table `keluhan`
--
ALTER TABLE `keluhan`
  MODIFY `id_keluhan` int(120) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `lapangan`
--
ALTER TABLE `lapangan`
  MODIFY `id_lapangan` int(12) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=38;
--
-- AUTO_INCREMENT for table `notifikasi`
--
ALTER TABLE `notifikasi`
  MODIFY `id_notifikasi` int(120) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=42;
--
-- AUTO_INCREMENT for table `pesan`
--
ALTER TABLE `pesan`
  MODIFY `id_pesan` int(120) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;
--
-- AUTO_INCREMENT for table `sewa`
--
ALTER TABLE `sewa`
  MODIFY `id_sewa` int(120) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
