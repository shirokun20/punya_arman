-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 25, 2019 at 04:29 AM
-- Server version: 10.1.35-MariaDB
-- PHP Version: 7.2.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `apk_ci`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `nama_admin` varchar(255) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `nama_admin`, `username`, `password`) VALUES
(1, 'Arman Maulana Saputra', 'arman', '29ade523552d2a28f07beef050f57f97'),
(2, 'Achmad Riki Nur Yasin', 'riki', '960c57cb1cf02b6001748f147db77cf9'),
(4, 'Son\'an Lauhul Mahfudz', 'son\'an', '7a8e89615b7920a0ffc3ad17a0c7c7ce'),
(5, 'Abdur Rohim', 'rohim', '0c6f4f9e9f31fb0c0b6225b7c3d021a5'),
(6, 'Maria Eva', 'eva', 'c22cbce29ad4475eb7dc401ac4680333'),
(7, 'abdur rohim', 'rohim', '0c6f4f9e9f31fb0c0b6225b7c3d021a5');

-- --------------------------------------------------------

--
-- Table structure for table `byriuran`
--

CREATE TABLE `byriuran` (
  `id_siswa` int(11) NOT NULL,
  `tgl_bayar` varchar(255) NOT NULL,
  `absen` int(11) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `kelas` enum('X','XI','XII') NOT NULL,
  `jurusan` enum('RPL','TKJ','MM','AK','OTKP','PBK','PMS','ALFA','KIN','PDG','PSG','GEO') NOT NULL,
  `jml_bayar` int(11) NOT NULL,
  `jenis_iuran` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `byriuran`
--

INSERT INTO `byriuran` (`id_siswa`, `tgl_bayar`, `absen`, `nama`, `kelas`, `jurusan`, `jml_bayar`, `jenis_iuran`) VALUES
(2, '14-03-2019', 7, 'Arman Maulana Saputra', 'XI', 'RPL', 12000, 'Renang');

-- --------------------------------------------------------

--
-- Table structure for table `byrkas`
--

CREATE TABLE `byrkas` (
  `id_siswa` int(11) NOT NULL,
  `tgl_bayar` varchar(255) NOT NULL,
  `absen` int(11) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `kelas` enum('X','XI','XII') NOT NULL,
  `jurusan` enum('RPL','TKJ','MM','AK','OTKP','PBK','PMS','ALFA','KIN','PDG','PSG','GEO') NOT NULL,
  `jml_bayar` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `byrkas`
--

INSERT INTO `byrkas` (`id_siswa`, `tgl_bayar`, `absen`, `nama`, `kelas`, `jurusan`, `jml_bayar`) VALUES
(35, '19-03-2019', 1, 'Abdur Rohim', 'XI', 'RPL', 12000);

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `nama` varchar(200) NOT NULL,
  `email` varchar(200) NOT NULL,
  `image` varchar(200) NOT NULL,
  `password` varchar(256) NOT NULL,
  `role_id` int(11) NOT NULL,
  `is_active` int(1) NOT NULL,
  `date_created` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `nama`, `email`, `image`, `password`, `role_id`, `is_active`, `date_created`) VALUES
(1, 'Arman Maulana Saputra', 'endin5546@gmail.com', 'default.jpg', '$2y$10$dTsrHE3Jq46kiwcAZ3FDEOk06beEWo5ZLI6Is2QRLhpSbOSyE4LwW', 1, 1, 1553063257),
(2, 'Muhammad Hidayat Ferdiyanto', 'sumberwijayaagung@gmail.com', 'default.jpg', '$2y$10$Lj9XNvz3yjZDPq17Duef2.MT57Y8vrmkESJBRHBQSz4zJ0Mt4T9cq', 2, 1, 1553063967),
(3, 'Arman Maulana Saputra', 'armanmaulanasaputra15@gmail.com', 'default.jpg', '$2y$10$hUN/w0SdKjDRbMK35AKUEeMU70sF1a4EhUv0CLWQezq6x1IKIbUrq', 2, 1, 1553225889),
(4, 'Abdur Rohim', 'rosilexy14@gmail.com', 'default.jpg', '$2y$10$nSAJ26N2tEqvpH.OB73ntu1c10yx.13qfAU6EIZGgw.oUcJXiLGym', 2, 1, 1553228546),
(8, 'Arman Maulana Saputra', 'diskj30@gmail.com', '', '$2y$10$oETB0M2dmCAsSxYKgasUi.tBuwfkMphiizPr1CNho4rV4WEwgITGm', 2, 1, 1553483842);

-- --------------------------------------------------------

--
-- Table structure for table `user_role`
--

CREATE TABLE `user_role` (
  `id` int(11) NOT NULL,
  `role` varchar(128) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user_role`
--

INSERT INTO `user_role` (`id`, `role`) VALUES
(1, 'Administrator'),
(2, 'Member');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `byriuran`
--
ALTER TABLE `byriuran`
  ADD PRIMARY KEY (`id_siswa`);

--
-- Indexes for table `byrkas`
--
ALTER TABLE `byrkas`
  ADD PRIMARY KEY (`id_siswa`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user_role`
--
ALTER TABLE `user_role`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `byriuran`
--
ALTER TABLE `byriuran`
  MODIFY `id_siswa` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `byrkas`
--
ALTER TABLE `byrkas`
  MODIFY `id_siswa` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=36;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `user_role`
--
ALTER TABLE `user_role`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
