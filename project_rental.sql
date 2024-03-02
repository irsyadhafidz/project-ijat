-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Mar 02, 2024 at 06:00 AM
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
-- Database: `project_rental`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id_admin` int NOT NULL,
  `nama_admin` varchar(120) NOT NULL,
  `username` varchar(120) NOT NULL,
  `password` varchar(120) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id_admin`, `nama_admin`, `username`, `password`) VALUES
(5, 'Admin', 'admin', '21232f297a57a5a743894a0e4a801fc3');

-- --------------------------------------------------------

--
-- Table structure for table `customer`
--

CREATE TABLE `customer` (
  `id_customer` int NOT NULL,
  `nama` varchar(120) NOT NULL,
  `username` varchar(120) NOT NULL,
  `alamat` varchar(120) NOT NULL,
  `gender` varchar(20) NOT NULL,
  `no_telp` varchar(20) NOT NULL,
  `no_ktp` varchar(50) NOT NULL,
  `password` varchar(120) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `customer`
--

INSERT INTO `customer` (`id_customer`, `nama`, `username`, `alamat`, `gender`, `no_telp`, `no_ktp`, `password`) VALUES
(26, 'Ijat', 'ijat', 'klirong', 'Laki-laki', '010212012012', '12121212', '8bd901218767cb93734036c695d1a225'),
(27, 'Sandi', 'sandi', 'klirong', 'Laki-laki', '010212012012', '12121212', 'ac9b4e0b6a21758534db2a6324d34a54');

-- --------------------------------------------------------

--
-- Table structure for table `mobil`
--

CREATE TABLE `mobil` (
  `id_mobil` int NOT NULL,
  `kode_type` varchar(120) NOT NULL,
  `merk` varchar(120) NOT NULL,
  `no_plat` varchar(20) NOT NULL,
  `warna` varchar(20) NOT NULL,
  `tahun` varchar(4) NOT NULL,
  `status` varchar(50) NOT NULL,
  `harga` int NOT NULL,
  `denda` int NOT NULL,
  `ac` int NOT NULL,
  `supir` int NOT NULL,
  `mp3_player` int NOT NULL,
  `central_lock` int NOT NULL,
  `gambar` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `mobil`
--

INSERT INTO `mobil` (`id_mobil`, `kode_type`, `merk`, `no_plat`, `warna`, `tahun`, `status`, `harga`, `denda`, `ac`, `supir`, `mp3_player`, `central_lock`, `gambar`) VALUES
(9, 'SDN', 'Honda City New 2022', 'AB 4553 KJ', 'Putih', '2012', '0', 300000, 45000, 1, 1, 1, 1, 'honda-city-generasi-kelima-bermesin-turbo-mengaspal-di-thailand-nKxUNH0qVW.jpg'),
(10, 'MPV', 'Daihatsu Xenia', 'AB 7655 HG', 'Biru', '2019', '1', 250000, 30000, 1, 1, 1, 1, 'mpv-daihatsu-xenia-biru.jpg'),
(11, 'MPV', 'Toyota Avanza', 'AB 3222 YH', 'Champagne Metallic', '2011', '1', 250000, 30000, 1, 1, 1, 1, 'mpv-toyota-avanza.png'),
(12, 'MPV', 'Daihatsu Xenia', 'AA 3455 GF', 'Merah', '2005', '1', 250000, 30000, 1, 1, 1, 1, 'MPV_Daihatsu_Xenia_2015_-_Red.png'),
(13, 'MPV', 'Toyota Avanza', 'AB 2896 TG', 'Putih', '2004', '1', 250000, 30000, 1, 1, 1, 1, 'MPV_Toyota_Avanza_2014_-_White.png'),
(14, 'SUV', 'Daihatsu Terios', 'AB 5637 PL', 'Putih', '2007', '0', 350000, 50000, 1, 1, 1, 1, 'SUV_Daihatsu_Terios_2007_-_Black.jpg'),
(15, 'SUV', 'Toyota Rush', 'AB 3424 UH', 'Hitam', '2012', '0', 500000, 80000, 1, 1, 1, 1, 'SUV_Toyota_Rush_2012_-_Black.jpg'),
(16, 'MPV', 'Toyota Avanza', 'AB 8655 DF', 'Putih', '2014', '1', 300000, 45000, 1, 1, 1, 1, 'MPV_Toyota_Avanza_2014_-_White1.png'),
(17, 'PUD', 'Mitsubishi Strada', 'AB 7655 HI', 'Hitam', '2006', '1', 800000, 100000, 1, 1, 1, 1, 'PUD_Mitsubishi_Strada_2015_-_Black.jpg'),
(18, 'PUD', 'Mitsubishi Strada', 'AB 6755 MK', 'Putih', '2011', '1', 900000, 110000, 1, 1, 1, 1, 'PUD_Mitsubishi_Strada_2017_-_White.png'),
(19, 'MPV', 'Daihatsu Xenia', 'AB 4366 PL', 'Putih', '2003', '1', 300000, 40000, 1, 1, 1, 1, 'MPV_Daihatsu_Xenia_2015_-_White.png');

-- --------------------------------------------------------

--
-- Table structure for table `transaksi`
--

CREATE TABLE `transaksi` (
  `id_rental` int NOT NULL,
  `id_customer` int NOT NULL,
  `id_mobil` int NOT NULL,
  `tanggal_rental` date NOT NULL,
  `tanggal_kembali` date NOT NULL,
  `harga` int NOT NULL,
  `denda` int NOT NULL,
  `total_denda` varchar(120) NOT NULL DEFAULT '0',
  `tanggal_pengembalian` date NOT NULL,
  `status_pengembalian` varchar(50) NOT NULL,
  `status_rental` varchar(50) NOT NULL,
  `bukti_pembayaran` varchar(130) NOT NULL,
  `status_pembayaran` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `transaksi`
--

INSERT INTO `transaksi` (`id_rental`, `id_customer`, `id_mobil`, `tanggal_rental`, `tanggal_kembali`, `harga`, `denda`, `total_denda`, `tanggal_pengembalian`, `status_pengembalian`, `status_rental`, `bukti_pembayaran`, `status_pembayaran`) VALUES
(28, 26, 10, '2023-08-30', '2023-09-02', 250000, 30000, '6150000', '2023-02-09', 'Kembali', 'Selesai', 'Untitled-1.png', 1),
(29, 26, 12, '2023-08-30', '2023-09-01', 250000, 30000, '7050000', '2023-01-09', 'Kembali', 'Selesai', '', 0),
(31, 26, 15, '2024-03-01', '2024-03-03', 500000, 80000, '0', '0000-00-00', 'Belum Kembali', 'Belum Selesai', '', 0);

-- --------------------------------------------------------

--
-- Table structure for table `type`
--

CREATE TABLE `type` (
  `id_type` int NOT NULL,
  `kode_type` varchar(10) NOT NULL,
  `nama_type` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `type`
--

INSERT INTO `type` (`id_type`, `kode_type`, `nama_type`) VALUES
(1, 'SDN', 'Sedan'),
(2, 'HB', 'Hatchback'),
(3, 'MPV', 'Multi Purpose Vehicle'),
(4, 'SUV', 'Sport Utility Vehicle'),
(5, 'PUS', 'Pick-Up Single Cabin'),
(6, 'PUD', 'Pick-Up Double Cabin');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id_admin`);

--
-- Indexes for table `customer`
--
ALTER TABLE `customer`
  ADD PRIMARY KEY (`id_customer`);

--
-- Indexes for table `mobil`
--
ALTER TABLE `mobil`
  ADD PRIMARY KEY (`id_mobil`);

--
-- Indexes for table `transaksi`
--
ALTER TABLE `transaksi`
  ADD PRIMARY KEY (`id_rental`),
  ADD KEY `FK_transaksi_mobil` (`id_mobil`),
  ADD KEY `FK_transaksi_customer` (`id_customer`);

--
-- Indexes for table `type`
--
ALTER TABLE `type`
  ADD PRIMARY KEY (`id_type`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id_admin` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `customer`
--
ALTER TABLE `customer`
  MODIFY `id_customer` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;

--
-- AUTO_INCREMENT for table `mobil`
--
ALTER TABLE `mobil`
  MODIFY `id_mobil` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT for table `transaksi`
--
ALTER TABLE `transaksi`
  MODIFY `id_rental` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=32;

--
-- AUTO_INCREMENT for table `type`
--
ALTER TABLE `type`
  MODIFY `id_type` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `transaksi`
--
ALTER TABLE `transaksi`
  ADD CONSTRAINT `FK_transaksi_customer` FOREIGN KEY (`id_customer`) REFERENCES `customer` (`id_customer`) ON UPDATE CASCADE,
  ADD CONSTRAINT `FK_transaksi_mobil` FOREIGN KEY (`id_mobil`) REFERENCES `mobil` (`id_mobil`) ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
