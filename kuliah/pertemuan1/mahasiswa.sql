-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 05 Feb 2022 pada 08.05
-- Versi server: 10.4.22-MariaDB
-- Versi PHP: 8.1.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `phpdasar`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `siswa`
--

CREATE TABLE `siswa` (
  `id` int(11) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `nim` varchar(100) NOT NULL,
  `jurusan` varchar(50) NOT NULL,
  `email` varchar(100) NOT NULL,
  `gambar` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `siswa`
--

INSERT INTO `siswa` (`id`, `nama`, `nim`, `jurusan`, `email`, `gambar`) VALUES
(2, 'Muhammad Julda', '09147714', 'Sistem Keuangan', 'madjulda8@gmail.com', '61f77ecb29c61.png  '),
(3, 'Julda Maulidah', '14141', 'sistem informasi', 'kfkh@gmail.com', '61f77ef3e69d0.jpg'),
(4, 'Kamu Ayu', '141416789', 'Bismillah  Bisa', 'julda8@gmail.com', '61f9b197d0c32.jpg'),
(6, 'Dia', '29834789157', 'Cuek', 'diacuek@gmail.com', '61fa8f844d7aa.jpg '),
(7, 'Sri Ayu Maulidah', '875258', 'Bisnis', 'ayumaulidah@gmail.com', '61fb53a287143.jpg');

-- --------------------------------------------------------

--
-- Struktur dari tabel `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `username` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `users`
--

INSERT INTO `users` (`id`, `username`, `password`) VALUES
(2, 'as', '$2y$10$9agKls/k.qvY87vRG2ptxu.sXicZWylRzzP4rZjmD6xdNljUPno6y'),
(3, 'julda', '$2y$10$alm0/yvdN69/a11Nz6FSXO8yHuyLePUfjgYuT9.0muoaj2CzFAYD.'),
(4, 'sri', '$2y$10$d4V8CXccbbFZE0WlVZtFT.vhpt0N9EZ/Bv06aG0uakFuKhWv0p4Q.'),
(6, 'ayu', '$2y$10$5UfQw9Lg4nLoaRBYa1jhsuvHly3D5T232SdpMLjtORhcWdRvhUq9.');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `siswa`
--
ALTER TABLE `siswa`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `siswa`
--
ALTER TABLE `siswa`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT untuk tabel `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
