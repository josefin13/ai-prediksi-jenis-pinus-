-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 16 Jul 2025 pada 12.53
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
-- Database: `ai_pinus`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `basis_pengetahuan`
--

CREATE TABLE `basis_pengetahuan` (
  `id` int(11) NOT NULL,
  `kondisi` varchar(255) DEFAULT NULL,
  `jenis_pinus` varchar(100) DEFAULT NULL,
  `cf` float DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `basis_pengetahuan`
--

INSERT INTO `basis_pengetahuan` (`id`, `kondisi`, `jenis_pinus`, `cf`) VALUES
(5, '$t >= 15 && $d >= 13', 'White Pine', 0.9),
(6, '$t >= 15 && $d < 13', 'White Pine', 0.7),
(7, '$t < 15 && $d < 13', 'Douglas Fir', 0.9),
(8, '$t < 15 && $d >= 13', 'Douglas Fir', 0.8);

-- --------------------------------------------------------

--
-- Struktur dari tabel `data_training`
--

CREATE TABLE `data_training` (
  `id` int(11) NOT NULL,
  `diameter` float DEFAULT NULL,
  `tinggi` float DEFAULT NULL,
  `jenis_pinus` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `data_training`
--

INSERT INTO `data_training` (`id`, `diameter`, `tinggi`, `jenis_pinus`) VALUES
(1, 9.55, 7.21, 'Douglas Fir'),
(2, 5.73, 5.12, 'Douglas Fir'),
(3, 14.65, 8.83, 'Douglas Fir'),
(4, 20.05, 12.08, 'Douglas Fir'),
(5, 7.32, 5.81, 'Douglas Fir'),
(6, 17.82, 13.5, 'Douglas Fir'),
(7, 12.42, 10.9, 'Douglas Fir'),
(8, 13.06, 6.79, 'Douglas Fir'),
(9, 19.74, 10.66, 'Douglas Fir'),
(10, 13.69, 10.5, 'Douglas Fir'),
(11, 4.77, 2.67, 'Douglas Fir'),
(12, 6.04, 20.34, 'White Pine'),
(13, 5.41, 19.72, 'White Pine'),
(14, 5.41, 19.8, 'White Pine'),
(15, 7, 23.7, 'White Pine'),
(16, 14.33, 32.51, 'White Pine'),
(17, 12.42, 26.23, 'White Pine'),
(18, 13.36, 32.51, 'White Pine'),
(19, 12.09, 29.18, 'White Pine'),
(20, 9.55, 26.1, 'White Pine'),
(21, 5.73, 21.51, 'White Pine');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `basis_pengetahuan`
--
ALTER TABLE `basis_pengetahuan`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `data_training`
--
ALTER TABLE `data_training`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `basis_pengetahuan`
--
ALTER TABLE `basis_pengetahuan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT untuk tabel `data_training`
--
ALTER TABLE `data_training`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
