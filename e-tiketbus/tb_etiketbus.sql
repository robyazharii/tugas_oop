-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 14 Jan 2022 pada 14.10
-- Versi server: 10.4.21-MariaDB
-- Versi PHP: 8.0.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_etiketbus`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_etiketbus`
--

CREATE TABLE `tb_etiketbus` (
  `id_tiket` int(5) NOT NULL,
  `nama` varchar(30) NOT NULL,
  `jenis_kelamin` text NOT NULL,
  `email` text NOT NULL,
  `notelepon` text NOT NULL,
  `kelasbus` text NOT NULL,
  `kotaasal` text NOT NULL,
  `kotatujuan` text NOT NULL,
  `tglberangkat` date NOT NULL,
  `jamberangkat` time NOT NULL,
  `ongkos` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `tb_etiketbus`
--
ALTER TABLE `tb_etiketbus`
  ADD PRIMARY KEY (`id_tiket`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
