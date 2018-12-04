-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: 29 Nov 2018 pada 22.17
-- Versi Server: 5.6.34-log
-- PHP Version: 7.2.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `filemanager`
--
CREATE DATABASE IF NOT EXISTS `filemanager` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `filemanager`;

-- --------------------------------------------------------

--
-- Struktur dari tabel `file`
--

DROP TABLE IF EXISTS `file`;
CREATE TABLE `file` (
  `filename` varchar(100) NOT NULL,
  `name` varchar(50) NOT NULL,
  `description` varchar(50) NOT NULL,
  `type` varchar(50) NOT NULL,
  `size` varchar(50) NOT NULL,
  `total_download` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `upload_date` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `file`
--

INSERT INTO `file` (`filename`, `name`, `description`, `type`, `size`, `total_download`, `username`, `upload_date`) VALUES
('chrome.exe', 'Google Chrome', 'Google Chrome Browser - The fastest browser', 'exe', '1.52 MB', 2, 'Agus Saputra', 'Thu Nov 29, 2018 20:40'),
('jabatsof_bell.sql', 'Database Bell', 'Backup Database', 'sql', '1.36 MB', 6, 'Agus Saputra', 'Thu Nov 29, 2018 20:41'),
('rumus npv (1).xls', 'File Excel', 'Rumus NPV SPK', 'xls', '0.03 MB', 4, 'Agus Saputra', 'Thu Nov 29, 2018 20:41'),
('ScreenToGif.2.14.1.Portable.zip', 'Screen To Gif', 'Portable File Application', 'zip', '0.86 MB', 3, 'Agus Saputra', 'Thu Nov 29, 2018 20:41');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `file`
--
ALTER TABLE `file`
  ADD PRIMARY KEY (`filename`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
