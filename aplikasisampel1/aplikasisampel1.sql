
-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 03, 2023 at 06:16 AM
-- Server version: 10.4.17-MariaDB
-- PHP Version: 7.4.14

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `aplikasisampel1`
--

-- --------------------------------------------------------

--
-- Table structure for table `Obat`
CREATE TABLE `Obat` (
  `ObatSakit` char(10) NOT NULL,
  `namaobat` varchar(35) NOT NULL,
  `tanggalkadaluwarsa` date NOT NULL,
  `dosis` text NOT NULL,
  `jumlah` char(10) NOT NULL,
  `harga` char(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- Table structure for table `akun`
CREATE TABLE `akun` (
  `kodeakun` char(5) NOT NULL,
  `username` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Dumping data for table `akun`
INSERT INTO `akun` (`kodeakun`, `username`) VALUES
('12345', 'gejala'),
('55201', 'obat');

-- Indexes for table `Obat`
ALTER TABLE `Obat`
  ADD PRIMARY KEY (`ObatSakit`),
  ADD KEY `akun` (`akun`);

-- Indexes for table `akun`
ALTER TABLE `akun`
  ADD PRIMARY KEY (`kodeakun`);

--
-- Indexes for table `prodi`
--
ALTER TABLE `akun`
  ADD PRIMARY KEY (`akun`);
COMMIT;

CREATE TABLE hasil (
  id INT PRIMARY KEY AUTO_INCREMENT,
  nama VARCHAR(50) NOT NULL,
  deskripsi TEXT
);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
