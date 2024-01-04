-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 14, 2023 at 11:58 PM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `pasar`
--

-- --------------------------------------------------------

--
-- Table structure for table `tp_harga`
--

CREATE TABLE `tp_harga` (
  `id_har` int(11) NOT NULL,
  `nama_barang` varchar(255) NOT NULL,
  `satuan` varchar(255) NOT NULL,
  `harga_kemarin` int(255) NOT NULL,
  `harga_sekarang` int(255) NOT NULL,
  `perubahan` int(255) NOT NULL,
  `keterangan` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tp_harga`
--

INSERT INTO `tp_harga` (`id_har`, `nama_barang`, `satuan`, `harga_kemarin`, `harga_sekarang`, `perubahan`, `keterangan`) VALUES
(3, 'baju anak kecil', '1', 20000, 22000, 10, 'naik'),
(4, 'baju dewasa', '1', 50000, 65000, 30, 'naik'),
(5, 'celana jiz', '1', 50000, 45000, -10, 'turun'),
(6, 'tomat', '1', 25000, 25600, 2, 'naik'),
(9, 'Sepatu Vans', '1', 100000, 80000, -20, 'Turun'),
(10, 'Jaket Kulit Asli Garut', '1', 50000, 55000, 10, 'Naik');

-- --------------------------------------------------------

--
-- Table structure for table `tp_login`
--

CREATE TABLE `tp_login` (
  `id_admin` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tp_login`
--

INSERT INTO `tp_login` (`id_admin`, `username`, `password`) VALUES
(1, 'admin', '21232f297a57a5a743894a0e4a801fc3');

-- --------------------------------------------------------

--
-- Table structure for table `tp_pedagang`
--

CREATE TABLE `tp_pedagang` (
  `id_P` int(11) NOT NULL,
  `nama_pedagang` varchar(255) NOT NULL,
  `barang` varchar(255) NOT NULL,
  `Tempat` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tp_pedagang`
--

INSERT INTO `tp_pedagang` (`id_P`, `nama_pedagang`, `barang`, `Tempat`) VALUES
(9, 'rehan alif', 'sayuran dan buah', 'lantai 7'),
(11, 'Hamka', 'Celana', 'Lantai 11'),
(12, 'Isan', 'Baju Koko', 'Lantai 10'),
(13, 'Agus', 'Sepatu', 'Lantai 21');

-- --------------------------------------------------------

--
-- Table structure for table `tp_toko`
--

CREATE TABLE `tp_toko` (
  `id_toko` int(11) NOT NULL,
  `lantai` varchar(255) NOT NULL,
  `baju` int(255) NOT NULL,
  `makanan` int(255) NOT NULL,
  `perabotan` int(255) NOT NULL,
  `keterangan` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tp_toko`
--

INSERT INTO `tp_toko` (`id_toko`, `lantai`, `baju`, `makanan`, `perabotan`, `keterangan`) VALUES
(5, 'lantai 2', 20, 30, 10, 'Beragam');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tp_harga`
--
ALTER TABLE `tp_harga`
  ADD PRIMARY KEY (`id_har`);

--
-- Indexes for table `tp_login`
--
ALTER TABLE `tp_login`
  ADD PRIMARY KEY (`id_admin`);

--
-- Indexes for table `tp_pedagang`
--
ALTER TABLE `tp_pedagang`
  ADD PRIMARY KEY (`id_P`);

--
-- Indexes for table `tp_toko`
--
ALTER TABLE `tp_toko`
  ADD PRIMARY KEY (`id_toko`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tp_harga`
--
ALTER TABLE `tp_harga`
  MODIFY `id_har` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `tp_login`
--
ALTER TABLE `tp_login`
  MODIFY `id_admin` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `tp_pedagang`
--
ALTER TABLE `tp_pedagang`
  MODIFY `id_P` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `tp_toko`
--
ALTER TABLE `tp_toko`
  MODIFY `id_toko` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
