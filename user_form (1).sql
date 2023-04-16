-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 16 Apr 2023 pada 06.24
-- Versi server: 10.4.27-MariaDB
-- Versi PHP: 8.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `user_db`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `user_form`
--

CREATE TABLE `user_form` (
  `id` int(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `eMail` varchar(255) NOT NULL,
  `no_Telpon` int(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `cpassword` varchar(255) NOT NULL,
  `user_type` varchar(255) NOT NULL DEFAULT 'user'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `user_form`
--

INSERT INTO `user_form` (`id`, `name`, `eMail`, `no_Telpon`, `password`, `cpassword`, `user_type`) VALUES
(15, 'Andrian', 'anrianwibowo06@gmail.com', 75, '8623f14eccf251ef1df1ded29de2dd6f', '8623f14eccf251ef1df1ded29de2dd6f', 'user'),
(16, 'Khairul', 'khairuazzaml@gmail.com', 17053, '1cdac5ad084879e80e5b67c51baa9095', '1cdac5ad084879e80e5b67c51baa9095', 'user'),
(17, 'alvin', 'alvin@gmail.com', 142496, '8b6bc5d8046c8466359d3ac43ce362ab', '8b6bc5d8046c8466359d3ac43ce362ab', 'user'),
(18, 'sandi', 'sandhi@gmail.com', 75, '5d7eb10bb6ad23967c1aef0829b418eb', '5d7eb10bb6ad23967c1aef0829b418eb', 'user');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `user_form`
--
ALTER TABLE `user_form`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `user_form`
--
ALTER TABLE `user_form`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
