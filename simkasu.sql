-- phpMyAdmin SQL Dump
-- version 4.8.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 08, 2021 at 09:38 AM
-- Server version: 10.4.19-MariaDB
-- PHP Version: 5.6.40

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `simkasu`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id_admin` int(11) NOT NULL,
  `username` varchar(150) NOT NULL,
  `password` varchar(150) NOT NULL,
  `gambar` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id_admin`, `username`, `password`, `gambar`) VALUES
(1, 'admin', 'admin', 'admin.png');

-- --------------------------------------------------------

--
-- Table structure for table `ph_air`
--

CREATE TABLE `ph_air` (
  `id_ph_air` int(11) NOT NULL,
  `ph_before` varchar(255) NOT NULL,
  `ph_after` varchar(255) NOT NULL,
  `waktu_perbaikan` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `ph_air`
--

INSERT INTO `ph_air` (`id_ph_air`, `ph_before`, `ph_after`, `waktu_perbaikan`) VALUES
(5, '17.0', '38.0', '2021-11-03');

-- --------------------------------------------------------

--
-- Table structure for table `temperature_kandang`
--

CREATE TABLE `temperature_kandang` (
  `id_temp_kandang` int(11) NOT NULL,
  `temp_before` varchar(255) NOT NULL,
  `temp_after` varchar(255) NOT NULL,
  `waktu_perbaikan` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `temperature_kandang`
--

INSERT INTO `temperature_kandang` (`id_temp_kandang`, `temp_before`, `temp_after`, `waktu_perbaikan`) VALUES
(2, '16.0', '37.0', '2021-11-04');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id_admin`);

--
-- Indexes for table `ph_air`
--
ALTER TABLE `ph_air`
  ADD PRIMARY KEY (`id_ph_air`);

--
-- Indexes for table `temperature_kandang`
--
ALTER TABLE `temperature_kandang`
  ADD PRIMARY KEY (`id_temp_kandang`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id_admin` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `ph_air`
--
ALTER TABLE `ph_air`
  MODIFY `id_ph_air` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `temperature_kandang`
--
ALTER TABLE `temperature_kandang`
  MODIFY `id_temp_kandang` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
