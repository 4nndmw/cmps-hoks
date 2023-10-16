-- phpMyAdmin SQL Dump
-- version 5.2.1-1.fc38
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Oct 13, 2023 at 11:04 AM
-- Server version: 8.0.34
-- PHP Version: 8.1.24

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
-- Table structure for table `tabel_jadwal`
--

CREATE TABLE `tabel_jadwal` (
  `id_jadwal` int NOT NULL,
  `id_proposal` int NOT NULL,
  `jurusan` varchar(255) NOT NULL,
  `hari_tanggal` varchar(255) NOT NULL,
  `jam` int NOT NULL,
  `tempat_sidang` varchar(255) NOT NULL,
  `dosen_pembimbing1` varchar(255) NOT NULL,
  `dosen_pembimbing2` varchar(255) NOT NULL,
  `naskah` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- --------------------------------------------------------

--
-- Table structure for table `tabel_nilai_sempro`
--

CREATE TABLE `tabel_nilai_sempro` (
  `id_sempro` int NOT NULL,
  `id_proposal` int NOT NULL,
  `dosen_pembimbing1` varchar(255) NOT NULL,
  `dosen_pembimbing2` varchar(255) NOT NULL,
  `nilai_total` float NOT NULL,
  `nilai_mutu` varchar(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `tabel_nilai_sempro`
--

INSERT INTO `tabel_nilai_sempro` (`id_sempro`, `id_proposal`, `dosen_pembimbing1`, `dosen_pembimbing2`, `nilai_total`, `nilai_mutu`) VALUES
(1, 1, 'pak fajar', 'pak iqbal', 22.222, 'A');

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
(4, 'wahyudi', '2202310099', 'informatika', 'sumenep', 'bangkal', '081233995872', 'qweqwew', 'putus 1', 'putus 2', 'putus 3', 'judul 2', 'putus 1', 'putus 2'),
(5, 'sdfgh', '22344434', 'fgh', 'sfsdfsd', 'fsfsdfsdf', '21332435', 'asfdsdgf', 'dgegfgf', 'sfgsfg', 'segsg', 'segg', 'sefgsh', 'sghgfhfh'),
(6, 'ananda maulana wahyudi', '2202310022', 'informatika', 'sumenep 3 maret 2003', 'bangkal', '081233995872', 'judul1', 'masalah pertama1', 'masalah pertama2', 'masahala pertama3', 'judul kedua', 'masalah kedua1', 'masalah kedua2');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tabel_jadwal`
--
ALTER TABLE `tabel_jadwal`
  ADD PRIMARY KEY (`id_jadwal`),
  ADD KEY `id_proposal` (`id_proposal`);

--
-- Indexes for table `tabel_nilai_sempro`
--
ALTER TABLE `tabel_nilai_sempro`
  ADD PRIMARY KEY (`id_sempro`),
  ADD KEY `id_proposal` (`id_proposal`);

--
-- Indexes for table `tabel_proposal`
--
ALTER TABLE `tabel_proposal`
  ADD PRIMARY KEY (`id_proposal`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tabel_jadwal`
--
ALTER TABLE `tabel_jadwal`
  MODIFY `id_jadwal` int NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tabel_nilai_sempro`
--
ALTER TABLE `tabel_nilai_sempro`
  MODIFY `id_sempro` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `tabel_proposal`
--
ALTER TABLE `tabel_proposal`
  MODIFY `id_proposal` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `tabel_nilai_sempro`
--
ALTER TABLE `tabel_nilai_sempro`
  ADD CONSTRAINT `tabel_nilai_sempro_ibfk_1` FOREIGN KEY (`id_proposal`) REFERENCES `tabel_proposal` (`id_proposal`) ON DELETE RESTRICT ON UPDATE RESTRICT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
