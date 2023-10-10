-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Oct 10, 2023 at 06:28 AM
-- Server version: 8.0.30
-- PHP Version: 8.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `uniba1_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `tabel_proposal`
--

CREATE TABLE `tabel_proposal` (
  `id_proposal` int NOT NULL,
  `nama_mahasiswa` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `npm` char(12) NOT NULL,
  `jurusan` varchar(50) NOT NULL,
  `tempat_tanggal_lahir` varchar(50) NOT NULL,
  `alamat` varchar(50) NOT NULL,
  `no_telepon` char(15) NOT NULL,
  `judul_pertama` varchar(255) NOT NULL,
  `masalah_pertama1` varchar(255) NOT NULL,
  `masalah_pertama2` varchar(255) NOT NULL,
  `masalah_pertama3` varchar(255) NOT NULL,
  `judul_kedua` varchar(255) NOT NULL,
  `masalah_kedua1` varchar(255) NOT NULL,
  `masalah_kedua2` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `tabel_proposal`
--

INSERT INTO `tabel_proposal` (`id_proposal`, `nama_mahasiswa`, `npm`, `jurusan`, `tempat_tanggal_lahir`, `alamat`, `no_telepon`, `judul_pertama`, `masalah_pertama1`, `masalah_pertama2`, `masalah_pertama3`, `judul_kedua`, `masalah_kedua1`, `masalah_kedua2`) VALUES
(1, 'ananda', '2202310022', 'informatika', 'sumenep 3 maret 2003', 'bangkal', '081233995872', 'judul pertama', 'masalah pertama', 'masalah pertama2', 'masalah pertama3', 'judul kedua', 'masalah kedua1\r\n', 'masalah kedua2'),
(2, 'maulana', '2202310055', 'sistem informasi', 'sumenep 3 maret 2004', 'pamolokan, 31 februari 2004', '081233998734', 'hello word', 'hello1', 'hello2', 'hello3', 'hello word2', 'word1', 'word2'),
(3, 'wahyudi', '2202310099', 'manage', 'sumenep', 'pangarangan', '082445454665', 'qweqwew', 'eiiosdn', 'sndldsv', 'sodnnsn', 'sdvdvnsn', 'anov', 'adoapp'),
(4, 'wahyudi', '2202310099', 'informatika', 'sumenep', 'bangkal', '081233995872', 'qweqwew', 'putus 1', 'putus 2', 'putus 3', 'judul 2', 'putus 1', 'putus 2');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tabel_proposal`
--
ALTER TABLE `tabel_proposal`
  ADD PRIMARY KEY (`id_proposal`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tabel_proposal`
--
ALTER TABLE `tabel_proposal`
  MODIFY `id_proposal` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
