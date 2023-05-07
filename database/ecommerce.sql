-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: May 07, 2023 at 01:42 PM
-- Server version: 5.7.39
-- PHP Version: 8.1.15

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ecommerce`
--

-- --------------------------------------------------------

--
-- Table structure for table `jenis_produk`
--

CREATE TABLE `jenis_produk` (
  `id` int(11) NOT NULL,
  `nama` varchar(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `jenis_produk`
--

INSERT INTO `jenis_produk` (`id`, `nama`) VALUES
(1, 'Make Up'),
(2, 'Baju'),
(3, 'Alas Kaki'),
(4, 'Aksesoris');

-- --------------------------------------------------------

--
-- Table structure for table `pesanan`
--

CREATE TABLE `pesanan` (
  `id` int(11) NOT NULL,
  `nama_produk` varchar(45) NOT NULL,
  `qty` int(11) NOT NULL DEFAULT '1',
  `tanggal` date NOT NULL,
  `total_harga` double NOT NULL,
  `nama_pemesan` varchar(45) NOT NULL,
  `alamat_pemesan` varchar(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `produk`
--

CREATE TABLE `produk` (
  `id` int(11) NOT NULL,
  `kode` varchar(45) DEFAULT NULL,
  `nama` varchar(45) NOT NULL,
  `harga` double NOT NULL,
  `stok` int(11) NOT NULL,
  `jenis_produk` varchar(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `produk`
--

INSERT INTO `produk` (`id`, `kode`, `nama`, `harga`, `stok`, `jenis_produk`) VALUES
(1, 'PROD-1', 'Foundation', 150000, 48, 'Make Up'),
(2, 'PROD-2', 'Bedak Tabur', 80000, 9, 'Make Up'),
(3, 'PROD-3', 'Bedak Two Way Cake', 120000, 2, 'Make Up'),
(4, 'PROD-4', 'Lip Cream', 50000, 84, 'Make Up'),
(5, 'PROD-5', 'Lip Gloss', 60000, 14, 'Make Up'),
(6, 'PROD-6', 'Lip Tint', 70000, 20, 'Make Up'),
(7, 'PROD-7', 'Kemeja', 250000, 59, 'Baju'),
(8, 'PROD-8', 'Long Dress', 500000, 36, 'Baju'),
(9, 'PROD-9', 'Celana Jeans', 200000, 4, 'Baju'),
(10, 'PROD-10', 'Celana Kulot', 180000, 12, 'Baju'),
(11, 'PROD-11', 'Rok Plisket', 150000, 50, 'Baju'),
(12, 'PROD-12', 'Rok Span', 160000, 12, 'Baju'),
(13, 'PROD-13', 'Sepatu', 350000, 12, 'Alas Kaki'),
(14, 'PROD-14', 'Sendal', 80000, 25, 'Alas Kaki'),
(15, 'PROD-15', 'Sepatu Sendal', 250000, 88, 'Alas Kaki'),
(16, 'PROD-16', 'Anting', 50000, 67, 'Aksesoris'),
(17, 'PROD-17', 'Gelang', 60000, 72, 'Aksesoris'),
(18, 'PROD-18', 'Jam tangan', 300000, 61, 'Aksesoris'),
(19, 'PROD-19', 'Tas Sling Bag', 200000, 87, 'Aksesoris'),
(20, 'PROD-20', 'Tas Ransel', 250000, 52, 'Aksesoris'),
(21, 'PROD-21', 'Hand Bag', 150000, 2, 'Aksesoris');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `jenis_produk`
--
ALTER TABLE `jenis_produk`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `id_UNIQUE` (`id`);

--
-- Indexes for table `pesanan`
--
ALTER TABLE `pesanan`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `produk`
--
ALTER TABLE `produk`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `id_UNIQUE` (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `jenis_produk`
--
ALTER TABLE `jenis_produk`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `pesanan`
--
ALTER TABLE `pesanan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `produk`
--
ALTER TABLE `produk`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
