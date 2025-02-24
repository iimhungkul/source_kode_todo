-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 24 Feb 2025 pada 09.15
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
-- Database: `db_aplikasi_todolist`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbtodo`
--

CREATE TABLE `tbtodo` (
  `id` int(11) NOT NULL,
  `tugas` varchar(200) NOT NULL,
  `jangkawaktu` date NOT NULL,
  `keterangan` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `tbtodo`
--

INSERT INTO `tbtodo` (`id`, `tugas`, `jangkawaktu`, `keterangan`) VALUES
(1, 'Membuat aplikasi todolist', '2025-02-25', 'Belum Selesai'),
(2, 'contoh aku hungkul', '2025-02-24', 'Belum Selesai'),
(3, 'contoh hapus', '2025-02-24', 'Belum Selesai'),
(4, 'kerja', '2025-02-22', 'Belum Selesai'),
(5, 'Belajar Javascript', '2025-02-25', 'Belum Selesai'),
(6, 'belajar ', '2025-02-27', 'Belum Selesai'),
(7, 'belajar ', '2025-02-26', 'Belum Selesai'),
(8, 'Tugas17', '2025-02-28', 'Belum Selesai'),
(9, 'bxj kwq', '2025-02-20', 'Belum Selesai'),
(10, 'aduhaay', '2025-02-01', 'Belum Selesai');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `tbtodo`
--
ALTER TABLE `tbtodo`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `tbtodo`
--
ALTER TABLE `tbtodo`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
