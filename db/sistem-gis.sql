-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 22, 2021 at 08:46 AM
-- Server version: 10.1.38-MariaDB
-- PHP Version: 7.3.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `sistem_gis`
--

-- --------------------------------------------------------

--
-- Table structure for table `staff`
--

CREATE TABLE `staff` (
  `id` int(11) NOT NULL,
  `nama` varchar(255) DEFAULT NULL,
  `alamat` text,
  `jenis_kelamin` varchar(255) DEFAULT NULL,
  `tgl_lahir` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `staff`
--

INSERT INTO `staff` (`id`, `nama`, `alamat`, `jenis_kelamin`, `tgl_lahir`) VALUES
(1, 'ali', 'jamban', 'cwok', '2019-11-13'),
(2, 'bella', 'jambi', 'perempuan', '2020-10-27'),
(3, 'aseng', 'bengkulu', 'cwok', '2021-01-21');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_sekolah`
--

CREATE TABLE `tbl_sekolah` (
  `id_sekolah` int(11) NOT NULL,
  `nama_sekolah` varchar(255) DEFAULT NULL,
  `alamat` varchar(255) DEFAULT NULL,
  `status_sekolah` varchar(255) DEFAULT NULL,
  `kepala_sekolah` varchar(255) DEFAULT NULL,
  `latitude` varchar(255) DEFAULT NULL,
  `longitude` varchar(255) DEFAULT NULL,
  `tgl_berdiri` date DEFAULT NULL,
  `gambar` text
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_sekolah`
--

INSERT INTO `tbl_sekolah` (`id_sekolah`, `nama_sekolah`, `alamat`, `status_sekolah`, `kepala_sekolah`, `latitude`, `longitude`, `tgl_berdiri`, `gambar`) VALUES
(24, 'SMK 10 Muhamadiyah', 'JL. MADONG LUBIS NO. 08 MUTIARA SELAWAN KISARAN TIMUR', 'Swasta', 'Asnur Disyahputra', '2.97844166634357', '99.65410708826091', '2018-06-22', 'SMK.jpg'),
(25, ' SMK 2 YAPIM', 'JL. BESAR SIMPANG KAWAT ', 'Swasta', 'Siti Khairani Nasution', '2.9217827718212424', '99.71740713776069', '2018-11-22', '1.jpg'),
(26, 'SMKS AL MASHUM', 'JL BATU ASAH NO.2 SIDODADI, Sidodadi', 'Swasta', ' Siti Rahmayati', '2.981441678317486', '99.58900371738493', '2019-01-22', 'al.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `username` varchar(25) NOT NULL,
  `paswd` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `level` int(1) NOT NULL,
  `ket` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`username`, `paswd`, `email`, `nama`, `level`, `ket`) VALUES
('admin', '21232f297a57a5a743894a0e4a801fc3', 'irwan@gmail.com', 'Developer Pemula', 1, 'Staff Magang');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `staff`
--
ALTER TABLE `staff`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_sekolah`
--
ALTER TABLE `tbl_sekolah`
  ADD PRIMARY KEY (`id_sekolah`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`username`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `staff`
--
ALTER TABLE `staff`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `tbl_sekolah`
--
ALTER TABLE `tbl_sekolah`
  MODIFY `id_sekolah` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
