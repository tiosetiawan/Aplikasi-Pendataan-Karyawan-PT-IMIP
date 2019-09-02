-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 02 Sep 2019 pada 16.21
-- Versi server: 10.1.38-MariaDB
-- Versi PHP: 5.6.40

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `imip`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `karyawan`
--

CREATE TABLE `karyawan` (
  `id_karyawan` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `email` varchar(30) NOT NULL,
  `notelpon` varchar(100) NOT NULL,
  `alamat` text NOT NULL,
  `gender` varchar(20) NOT NULL,
  `agama` varchar(20) NOT NULL,
  `birthday` date NOT NULL,
  `created_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `karyawan`
--

INSERT INTO `karyawan` (`id_karyawan`, `name`, `email`, `notelpon`, `alamat`, `gender`, `agama`, `birthday`, `created_at`) VALUES
(8, 'Satrio Setiawan I Lintang', 'tiosetiawan11@gmail.com', '082187424269', 'Luwuk', 'Pria', 'ISLAM', '1997-04-28', '2019-09-02 20:48:56'),
(9, 'Suci Muliani', 'sucihs@gmail.com', '08218742242', 'Luwuk', 'Wanita', 'ISLAM', '0000-00-00', '2019-09-02 20:51:20'),
(11, 'IRFAN', 'irfan@gmail.com', '08218887899', 'Gorontalo', 'Pria', 'ISLAM', '1997-04-01', '2019-09-02 22:19:33');

-- --------------------------------------------------------

--
-- Struktur dari tabel `user_akses`
--

CREATE TABLE `user_akses` (
  `id` int(11) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `created_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `user_akses`
--

INSERT INTO `user_akses` (`id`, `email`, `password`, `created_at`) VALUES
(2, 'admin@gmail.com', 'admin123', '2019-03-09 09:00:00');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `karyawan`
--
ALTER TABLE `karyawan`
  ADD PRIMARY KEY (`id_karyawan`);

--
-- Indeks untuk tabel `user_akses`
--
ALTER TABLE `user_akses`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `karyawan`
--
ALTER TABLE `karyawan`
  MODIFY `id_karyawan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT untuk tabel `user_akses`
--
ALTER TABLE `user_akses`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
