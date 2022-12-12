-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 12, 2022 at 01:25 PM
-- Server version: 10.4.20-MariaDB
-- PHP Version: 8.0.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `dewia`
--

-- --------------------------------------------------------

--
-- Table structure for table `mahasiswa`
--

CREATE TABLE `mahasiswa` (
  `nim` int(10) NOT NULL,
  `nama` char(25) NOT NULL,
  `prodi` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `mahasiswa`
--

INSERT INTO `mahasiswa` (`nim`, `nama`, `prodi`) VALUES
(120140149, 'Dewi Anggraini', 'Teknik Informatika'),
(120140143, 'Alya Dian Risda', 'Teknik Informatika'),
(120240124, 'Himawan', 'Arsitektur'),
(12038047, 'Putri Nuzullina', 'Desain Komunikasi Visual'),
(120110024, 'Riana', 'Fisika'),
(120430006, 'Safa Airlicia', 'Teknik Biomedis'),
(120120077, 'Melita', 'Teknik Geofisika'),
(120120094, 'Fery Alfauzi', 'Teknik Geofisika'),
(120120095, 'Rizka Elmi', 'Teknik Geofisika'),
(120210041, 'Dina Fadila Okatviani', 'Teknik Sipil'),
(120210040, 'Nicky Nirmalaisa Widodo', 'Teknik Sipil'),
(120280087, 'Zola Wahyuni', 'Teknik Kimia');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
