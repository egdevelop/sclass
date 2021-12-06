-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 06 Okt 2021 pada 11.35
-- Versi server: 10.4.21-MariaDB
-- Versi PHP: 7.3.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `sclass`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `akun`
--

CREATE TABLE `akun` (
  `id` int(11) NOT NULL,
  `fullname` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `level` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `akun`
--

INSERT INTO `akun` (`id`, `fullname`, `email`, `username`, `password`, `level`) VALUES
(1, 'admin', 'admin@gmail.com', 'admin', '123', '1'),
(2, 'ridho', 'hilmaanrssin@gmail.com', 'ridhoo', '123', ''),
(3, 'ridho', 'hilmaanrssin@gmail.com', 'yogany115', '123', ''),
(4, 'ridho', 'hilmaanrssin@gmail.com', 'admin', '202cb962ac59075b964b07152d234b70', ''),
(5, 'ridho', 'hilmaanrssin@gmail.com', 'addsads', '202cb962ac59075b964b07152d234b70', ''),
(6, '', 'hilmaanrssin@gmail.com', 'tasik', '202cb962ac59075b964b07152d234b70', ''),
(7, 'ridho', 'hilmaanrssin@gmail.com', 'adsdsd', '202cb962ac59075b964b07152d234b70', '2');

-- --------------------------------------------------------

--
-- Struktur dari tabel `data_guru`
--

CREATE TABLE `data_guru` (
  `id` int(11) NOT NULL,
  `id_guru` varchar(255) NOT NULL,
  `nama_guru` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Struktur dari tabel `data_kelas`
--

CREATE TABLE `data_kelas` (
  `id` int(11) NOT NULL,
  `nama_kelas` varchar(255) NOT NULL,
  `id_guru` varchar(255) NOT NULL,
  `lampu_1` varchar(255) NOT NULL DEFAULT '0',
  `lampu_2` varchar(255) NOT NULL DEFAULT '0',
  `lampu_3` varchar(255) NOT NULL DEFAULT '0',
  `lampu_4` varchar(255) NOT NULL DEFAULT '0',
  `suhu` float NOT NULL DEFAULT 0,
  `kelembapan` varchar(255) NOT NULL DEFAULT '0',
  `tgl` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `data_kelas`
--

INSERT INTO `data_kelas` (`id`, `nama_kelas`, `id_guru`, `lampu_1`, `lampu_2`, `lampu_3`, `lampu_4`, `suhu`, `kelembapan`, `tgl`) VALUES
(1, 'sija', '24430842', '1', '0', '0', '0', 0, '0', '2021-09-28 17:00:00'),
(2, 'tkj', '', '0', '0', '0', '0', 0, '0', '2021-09-28 17:00:00'),
(3, 'pm', '', '0', '0', '0', '0', 0, '0', '2021-09-29 08:39:34');

-- --------------------------------------------------------

--
-- Struktur dari tabel `unregister`
--

CREATE TABLE `unregister` (
  `id` int(11) NOT NULL,
  `id_kartu` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Struktur dari tabel `user_lv`
--

CREATE TABLE `user_lv` (
  `level` int(11) NOT NULL,
  `nm_level` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `user_lv`
--

INSERT INTO `user_lv` (`level`, `nm_level`) VALUES
(1, 'admin'),
(2, 'siswa');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `akun`
--
ALTER TABLE `akun`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `data_guru`
--
ALTER TABLE `data_guru`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `data_kelas`
--
ALTER TABLE `data_kelas`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `unregister`
--
ALTER TABLE `unregister`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `akun`
--
ALTER TABLE `akun`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT untuk tabel `data_guru`
--
ALTER TABLE `data_guru`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `data_kelas`
--
ALTER TABLE `data_kelas`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT untuk tabel `unregister`
--
ALTER TABLE `unregister`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
