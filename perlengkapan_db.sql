-- phpMyAdmin SQL Dump
-- version 4.7.7
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Mar 25, 2018 at 05:00 AM
-- Server version: 5.7.21-log
-- PHP Version: 7.0.21

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `perlengkapan_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin_unit`
--

CREATE TABLE `admin_unit` (
  `username` varchar(36) NOT NULL,
  `nama_adm_unit` varchar(255) DEFAULT NULL,
  `nama_unit` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `admin_unit`
--

INSERT INTO `admin_unit` (`username`, `nama_adm_unit`, `nama_unit`) VALUES
('adm_unit', 'Admin Unit 1', 'Perpustakaan');

-- --------------------------------------------------------

--
-- Table structure for table `barang`
--

CREATE TABLE `barang` (
  `id_barang` bigint(20) NOT NULL,
  `jumlah_barang` int(10) DEFAULT NULL,
  `keterangan` text,
  `nama_barang` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `barang`
--

INSERT INTO `barang` (`id_barang`, `jumlah_barang`, `keterangan`, `nama_barang`) VALUES
(1, 2, 'Diterima', 'Komputer'),
(2, 4, 'ok', 'Komputer i5'),
(3, 4, 'ok', 'Komputer i5'),
(4, 21, 'bagus', 'Printer');

-- --------------------------------------------------------

--
-- Table structure for table `penempatan`
--

CREATE TABLE `penempatan` (
  `id_penempatan` bigint(20) NOT NULL,
  `id_barang` bigint(20) DEFAULT NULL,
  `alokasi` int(10) DEFAULT NULL,
  `disetujui` tinyint(1) NOT NULL DEFAULT '0',
  `barang_sampai` tinyint(1) NOT NULL DEFAULT '0',
  `id_ruangan` smallint(4) DEFAULT NULL,
  `keterangan_status` varchar(255) DEFAULT 'Menunggu konfirmasi',
  `adm_unit` varchar(36) DEFAULT NULL,
  `waktu_permintaan` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `penempatan`
--

INSERT INTO `penempatan` (`id_penempatan`, `id_barang`, `alokasi`, `disetujui`, `barang_sampai`, `id_ruangan`, `keterangan_status`, `adm_unit`, `waktu_permintaan`) VALUES
(5, 1, 2, 1, 0, 1, 'Proses pengiriman', 'adm_unit', '2018-03-24 21:43:11'),
(6, 2, 3, 1, 0, 1, 'Proses pengiriman', 'adm_unit', '2018-03-24 21:43:11'),
(7, 3, 2, 2, 0, 2, 'Dibatalkan', 'adm_unit', '2018-03-24 21:43:11'),
(8, 2, 1, 2, 0, 1, 'dibatalkan', 'adm_unit', '2018-03-24 21:43:11'),
(9, 3, 1, 0, 0, NULL, 'Menunggu konfirmasi', 'adm_unit', '2018-03-24 21:47:19'),
(10, 3, 4, 1, 1, 1, 'Barang diterima', 'adm_unit', '2018-03-24 21:47:39'),
(11, 3, 2, 0, 0, 2, 'Menunggu konfirmasi', 'adm_unit', '2018-03-24 21:48:29'),
(12, 3, 1, 0, 0, 1, 'Menunggu konfirmasi', 'adm_unit', '2018-03-24 21:52:00'),
(13, 4, 2, 0, 0, 1, 'Menunggu konfirmasi', 'adm_unit', '2018-03-24 21:53:00');

-- --------------------------------------------------------

--
-- Table structure for table `role`
--

CREATE TABLE `role` (
  `id_role` tinyint(4) NOT NULL,
  `role` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `role`
--

INSERT INTO `role` (`id_role`, `role`) VALUES
(1, 'Admin Perlengkapan'),
(2, 'Admin Unit');

-- --------------------------------------------------------

--
-- Table structure for table `ruangan`
--

CREATE TABLE `ruangan` (
  `id_ruangan` smallint(4) NOT NULL,
  `nama_ruangan` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `ruangan`
--

INSERT INTO `ruangan` (`id_ruangan`, `nama_ruangan`) VALUES
(1, 'Lab Bahasa'),
(2, 'Ruang admin perpustakaan');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `username` varchar(36) NOT NULL,
  `password` varchar(32) NOT NULL,
  `id_role` tinyint(4) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`username`, `password`, `id_role`) VALUES
('adm_unit', '7316d5ecc64a4966771d201822448bf5', 2),
('ari', '7f207a77ce16ce0b2cf9476cdfd9a451', 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin_unit`
--
ALTER TABLE `admin_unit`
  ADD PRIMARY KEY (`username`);

--
-- Indexes for table `barang`
--
ALTER TABLE `barang`
  ADD PRIMARY KEY (`id_barang`);

--
-- Indexes for table `penempatan`
--
ALTER TABLE `penempatan`
  ADD PRIMARY KEY (`id_penempatan`),
  ADD KEY `fk_id_barang` (`id_barang`),
  ADD KEY `fk_id_ruangan` (`id_ruangan`),
  ADD KEY `fk_adm_unit` (`adm_unit`);

--
-- Indexes for table `role`
--
ALTER TABLE `role`
  ADD PRIMARY KEY (`id_role`);

--
-- Indexes for table `ruangan`
--
ALTER TABLE `ruangan`
  ADD PRIMARY KEY (`id_ruangan`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`username`),
  ADD KEY `fk_role_id` (`id_role`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `barang`
--
ALTER TABLE `barang`
  MODIFY `id_barang` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `penempatan`
--
ALTER TABLE `penempatan`
  MODIFY `id_penempatan` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `role`
--
ALTER TABLE `role`
  MODIFY `id_role` tinyint(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `ruangan`
--
ALTER TABLE `ruangan`
  MODIFY `id_ruangan` smallint(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `admin_unit`
--
ALTER TABLE `admin_unit`
  ADD CONSTRAINT `fk_username` FOREIGN KEY (`username`) REFERENCES `user` (`username`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `penempatan`
--
ALTER TABLE `penempatan`
  ADD CONSTRAINT `fk_adm_unit` FOREIGN KEY (`adm_unit`) REFERENCES `admin_unit` (`username`),
  ADD CONSTRAINT `fk_id_barang` FOREIGN KEY (`id_barang`) REFERENCES `barang` (`id_barang`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `fk_id_ruangan` FOREIGN KEY (`id_ruangan`) REFERENCES `ruangan` (`id_ruangan`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `user`
--
ALTER TABLE `user`
  ADD CONSTRAINT `fk_role_id` FOREIGN KEY (`id_role`) REFERENCES `role` (`id_role`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
