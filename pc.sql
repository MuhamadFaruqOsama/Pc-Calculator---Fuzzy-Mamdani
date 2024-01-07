-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 04 Jan 2024 pada 14.15
-- Versi server: 10.4.32-MariaDB
-- Versi PHP: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `carthesis`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `car_adminlogin`
--

CREATE TABLE `car_adminlogin` (
  `id` int(11) NOT NULL,
  `username` varchar(30) NOT NULL,
  `password` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data untuk tabel `car_adminlogin`
--

INSERT INTO `car_adminlogin` (`id`, `username`, `password`) VALUES
(1, 'admin', 'admincar'),
(7, 'ziddan', '$2y$10$GH8PA4udOh8/.z7G8SNVu.gUJbmkKWPbodlzi2G5HndweHM55WqHm');

-- --------------------------------------------------------

--
-- Struktur dari tabel `history`
--

CREATE TABLE `history` (
  `id` int(11) NOT NULL,
  `id_admin` int(11) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `deskripsi` varchar(255) NOT NULL,
  `tanggal` varchar(50) NOT NULL,
  `kondisiAkhir` int(11) NOT NULL,
  `detail_kondisi` varchar(200) NOT NULL,
  `hppAkhir` int(11) NOT NULL,
  `usia` int(11) NOT NULL,
  `harga` int(11) NOT NULL,
  `foto` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `history`
--

INSERT INTO `history` (`id`, `id_admin`, `nama`, `deskripsi`, `tanggal`, `kondisiAkhir`, `detail_kondisi`, `hppAkhir`, `usia`, `harga`, `foto`) VALUES
(9, 4, 'cek', 'cek juga om, masyaallah', 'Monday, 01 Jan 2024 - 08:06:26 PM', 22, '0', 1050000, 4, 3000000, ''),
(17, 7, 'PC Gaming dengan VGA 3GB dan SSD128GB', 'PCR001', 'Tuesday, 02 Jan 2024 - 09:34:27 AM', 87, '0', 3500000, 34, 5416667, ''),
(18, 7, 'cek', 'cek', 'Thursday, 04 Jan 2024 - 07:30:42 PM', 70, 'Array', 0, 5, 2666667, ''),
(19, 7, 'rwe', 'hjk', 'Thursday, 04 Jan 2024 - 07:35:39 PM', 70, '{\"mobo\":\"70\",\"pcr\":\"70\",\"psu\":\"70\",\"ram\":\"70\",\"ssd\":\"70\",\"fan\":\"70\",\"hdd\":\"70\",\"vga\":\"70\",\"kabelP\":\"70\",\"case\":\"70\",\"kabelS\":\"70\",\"fanC\":\"70\",\"keyMo\":\"70\",\"moni\":\"70\"}', 0, 55, 2666667, '');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `car_adminlogin`
--
ALTER TABLE `car_adminlogin`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `history`
--
ALTER TABLE `history`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `car_adminlogin`
--
ALTER TABLE `car_adminlogin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT untuk tabel `history`
--
ALTER TABLE `history`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
