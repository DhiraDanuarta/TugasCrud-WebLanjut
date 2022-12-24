-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 24, 2022 at 05:14 PM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `crud_data_004`
--

-- --------------------------------------------------------

--
-- Table structure for table `komponen_004`
--

CREATE TABLE `komponen_004` (
  `id_komponen` int(11) NOT NULL,
  `merek_004` varchar(50) NOT NULL,
  `kapasitas_004` varchar(20) NOT NULL,
  `harga_004` varchar(20) NOT NULL,
  `jenis_004` enum('HDD','RAM') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `komponen_004`
--

INSERT INTO `komponen_004` (`id_komponen`, `merek_004`, `kapasitas_004`, `harga_004`, `jenis_004`) VALUES
(1, 'Kingston', '4 GB', '200000', 'RAM'),
(2, 'Kingston', '8 GB', '300000', 'RAM'),
(7, 'Samsung', '1 Tera', '200000', 'HDD'),
(10, 'Samsung', '4 GB', '200000', 'RAM'),
(12, 'V-Gen', '500 GB', '350000', 'HDD');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `komponen_004`
--
ALTER TABLE `komponen_004`
  ADD PRIMARY KEY (`id_komponen`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `komponen_004`
--
ALTER TABLE `komponen_004`
  MODIFY `id_komponen` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
