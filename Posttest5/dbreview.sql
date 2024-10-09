-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 09, 2024 at 11:40 AM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `dbreview`
--
CREATE DATABASE IF NOT EXISTS `dbreview` DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci;
USE `dbreview`;

-- --------------------------------------------------------

--
-- Table structure for table `start_review`
--

CREATE TABLE `start_review` (
  `id` int(255) NOT NULL,
  `user` varchar(50) NOT NULL,
  `nama_tempat` varchar(50) NOT NULL,
  `ulasan` varchar(255) NOT NULL,
  `rating` decimal(10,0) NOT NULL,
  `tanggal` date NOT NULL,
  `foto_path` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `start_review`
--

INSERT INTO `start_review` (`id`, `user`, `nama_tempat`, `ulasan`, `rating`, `tanggal`, `foto_path`) VALUES
(9, 'Mulyono', 'Ayam Geprek Pak Wahyu', 'Sangat enak sekali ayam nya, dan juga murah', 5, '2024-10-09', ''),
(10, 'Hartono', 'Toko Kayu Serbaguna Makmur Jaya', 'Kayu berkualitas,harga juga bersaing dengan yang lain. cocok untuk yang mau cari mebel disinilah tempatnya!', 4, '2024-10-11', ''),
(11, 'Wowo', 'Gudeg Yu Narni', 'Gudegnya enak,rasanya pas cuma agak sayang saja harganya terlalu mahal bagi saya, apalagi tempat parkiranya kecil dan tidak cocok untuk pengguna mobil', 3, '2024-10-14', ''),
(12, 'Rafif', 'Ayam Bebek Cinta', 'Ini sih bumbu masakannya enak apalagi sambelnya beh,saya langganan disini, kalau pulang dari kampus pas jam makan siang pasti kesini,walau tempatnya cukup lebar tapi saat jam sibuk pasti selalu penuh,tapi mantap lah makanannya.', 5, '2024-10-19', '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `start_review`
--
ALTER TABLE `start_review`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `start_review`
--
ALTER TABLE `start_review`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
