-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Oct 24, 2023 at 09:13 AM
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
-- Table structure for table `tabel_jadwal`
--

CREATE TABLE `tabel_jadwal` (
  `id_jadwal` int NOT NULL,
  `id_proposal` int NOT NULL,
  `hari_tanggal` varchar(255) NOT NULL,
  `jam` varchar(50) NOT NULL,
  `tempat_sidang` varchar(255) NOT NULL,
  `dosen_pembimbing1` varchar(255) NOT NULL,
  `dosen_pembimbing2` varchar(255) NOT NULL,
  `naskah` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `tabel_jadwal`
--

INSERT INTO `tabel_jadwal` (`id_jadwal`, `id_proposal`, `hari_tanggal`, `jam`, `tempat_sidang`, `dosen_pembimbing1`, `dosen_pembimbing2`, `naskah`) VALUES
(10, 13, 'senin, 31-februari 2003', '20:00', 'cempaka', 'dosen java ', 'dosen sember', 'teknologi modern '),
(11, 14, 'senin, 20-23-2023', '12:00', 'sumenep', 'makruf', 'aerrar', 'afaff');

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
(2, 13, '4.00', '4.00', 4, 'A++');

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
(13, 'ananda maulana wahyudi', '2202310054', 'informatika', 'sumenep, 31 maret 2003', 'bangkal', '081233995872', 'apasaja ', 'wrw', 'ddfd', 'fgggfg', 'fgfgg', 'fgggfgg', 'gfggfggf'),
(14, 'bariq', '03908777', 'managemen', 'sumenep, 20-februari- 2003 ', 'bangkal', '081233995872', 'nfanifhafhh', 'ahdfdhsf', 'sfgsggh', 'snnnfgnnn', 'sfhdfhdfhd', 'sdfdhhhffhf', 'nanvnvnnv');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `role` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `username`, `password`, `role`) VALUES
(1, 'mahasiswa', 'mahasiswa', 'mahasiswa'),
(2, 'kaprodi', 'kaprodi', 'kaprodi'),
(3, 'penguji', 'penguji', 'penguji'),
(4, 'pembingbing', 'pembingbing', 'pembingbing');

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
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tabel_jadwal`
--
ALTER TABLE `tabel_jadwal`
  MODIFY `id_jadwal` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `tabel_nilai_sempro`
--
ALTER TABLE `tabel_nilai_sempro`
  MODIFY `id_sempro` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `tabel_proposal`
--
ALTER TABLE `tabel_proposal`
  MODIFY `id_proposal` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `tabel_jadwal`
--
ALTER TABLE `tabel_jadwal`
  ADD CONSTRAINT `tabel_jadwal_ibfk_1` FOREIGN KEY (`id_proposal`) REFERENCES `tabel_proposal` (`id_proposal`) ON DELETE RESTRICT ON UPDATE RESTRICT;

--
-- Constraints for table `tabel_nilai_sempro`
--
ALTER TABLE `tabel_nilai_sempro`
  ADD CONSTRAINT `tabel_nilai_sempro_ibfk_1` FOREIGN KEY (`id_proposal`) REFERENCES `tabel_proposal` (`id_proposal`) ON DELETE RESTRICT ON UPDATE RESTRICT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
