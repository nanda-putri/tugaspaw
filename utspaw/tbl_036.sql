-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 23 Apr 2022 pada 09.22
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
-- Database: `db_nanda`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_036`
--

CREATE TABLE `tbl_036` (
  `id_036` varchar(5) NOT NULL,
  `nama_036` varchar(100) NOT NULL,
  `email_036` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tbl_036`
--

INSERT INTO `tbl_036` (`id_036`, `nama_036`, `email_036`) VALUES
('001', 'Adinda ', 'adinda@gmail.com'),
('002', 'Rosita Lutfiyah', 'rosita@gmail.com');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `tbl_036`
--
ALTER TABLE `tbl_036`
  ADD PRIMARY KEY (`id_036`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
