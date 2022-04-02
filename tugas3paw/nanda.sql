-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 02 Apr 2022 pada 09.19
-- Versi server: 10.4.21-MariaDB
-- Versi PHP: 8.0.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `nanda`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_036`
--

CREATE TABLE `tbl_036` (
  `NIM` varchar(12) NOT NULL,
  `Nama` varchar(100) NOT NULL,
  `Asal` varchar(100) NOT NULL,
  `Telepon` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tbl_036`
--

INSERT INTO `tbl_036` (`NIM`, `Nama`, `Asal`, `Telepon`) VALUES
('200411100002', 'Rosita Dewi Lutfiyah', 'Jombang', '089876567899'),
('200411100036', 'Nanda Putri Febri Antono', 'Malang', '085335234364'),
('200411100100', 'Uswatun Chasanah', 'Bojonegoro', '083244018720'),
('200411100107', 'Nella Adrisia Hartono', 'Jombang', '085317449024');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `tbl_036`
--
ALTER TABLE `tbl_036`
  ADD PRIMARY KEY (`NIM`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
