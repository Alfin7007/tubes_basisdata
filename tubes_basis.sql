-- phpMyAdmin SQL Dump
-- version 5.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 01 Jul 2021 pada 11.27
-- Versi server: 10.4.11-MariaDB
-- Versi PHP: 7.4.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `tubes_basis`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_admin`
--

CREATE TABLE `tbl_admin` (
  `id_admin` int(11) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `pass` int(32) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tbl_admin`
--

INSERT INTO `tbl_admin` (`id_admin`, `nama`, `pass`) VALUES
(5, 'panitia', 69),
(6, 'Alfin', 123),
(7, 'AlfinFer', 1234);

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_calon`
--

CREATE TABLE `tbl_calon` (
  `id_calon` int(11) NOT NULL,
  `no` int(10) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `jurusan` varchar(255) NOT NULL,
  `prodi` varchar(100) NOT NULL,
  `foto` varchar(255) NOT NULL,
  `jumlah` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tbl_calon`
--

INSERT INTO `tbl_calon` (`id_calon`, `no`, `nama`, `jurusan`, `prodi`, `foto`, `jumlah`) VALUES
(17, 1, 'UZUMAKI NARUTO', 'TEKNIK ELEKTRO', 'D4 JARINGAN TELEKOMUNIKASI DIGITAL', '../img/calon/17.png', 1),
(21, 2, 'Uciha Sasuke', 'TEKNIK KIMIA', 'D-IV TEKNOLOGI KIMIA INDUSTRI', '../img/calon/21.png', 1),
(22, 3, 'Jokowi - Maruf', 'TEKNIK KIMIA', 'D4 Pembangunan Tol', '../img/calon/22.png', 0);

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_harapan`
--

CREATE TABLE `tbl_harapan` (
  `id_harapan` int(11) NOT NULL,
  `id_user` int(11) NOT NULL,
  `id_calon` int(11) NOT NULL,
  `harapan` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tbl_harapan`
--

INSERT INTO `tbl_harapan` (`id_harapan`, `id_user`, `id_calon`, `harapan`) VALUES
(11, 123456, 21, 'abcde\r\n'),
(12, 123, 17, 'kkkk');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_penampung`
--

CREATE TABLE `tbl_penampung` (
  `id_penampung` int(11) NOT NULL,
  `id_user` int(11) NOT NULL,
  `id_calon` int(10) NOT NULL,
  `nampung` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tbl_penampung`
--

INSERT INTO `tbl_penampung` (`id_penampung`, `id_user`, `id_calon`, `nampung`) VALUES
(11, 123456, 21, 1),
(12, 123, 17, 1);

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_user`
--

CREATE TABLE `tbl_user` (
  `id_user` int(11) NOT NULL,
  `pin` int(255) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `prodi` varchar(255) NOT NULL,
  `jurusan` varchar(255) NOT NULL,
  `nim` int(255) NOT NULL,
  `status` enum('belum','sudah') DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tbl_user`
--

INSERT INTO `tbl_user` (`id_user`, `pin`, `nama`, `prodi`, `jurusan`, `nim`, `status`) VALUES
(7, 123, 'alfin fernandha', 'd3 telkom', 'elektro', 2041167011, 'sudah'),
(10, 12332, 'abc', 'd4jtd', 'elektro', 12345, 'belum'),
(11, 123456, 'aku', 'd5', 'kmia', 13423, 'sudah');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `tbl_admin`
--
ALTER TABLE `tbl_admin`
  ADD PRIMARY KEY (`id_admin`);

--
-- Indeks untuk tabel `tbl_calon`
--
ALTER TABLE `tbl_calon`
  ADD PRIMARY KEY (`id_calon`);

--
-- Indeks untuk tabel `tbl_harapan`
--
ALTER TABLE `tbl_harapan`
  ADD PRIMARY KEY (`id_harapan`),
  ADD KEY `id_calon` (`id_calon`),
  ADD KEY `id_user` (`id_user`);

--
-- Indeks untuk tabel `tbl_penampung`
--
ALTER TABLE `tbl_penampung`
  ADD PRIMARY KEY (`id_penampung`),
  ADD KEY `id_user` (`id_user`),
  ADD KEY `id_calon` (`id_calon`);

--
-- Indeks untuk tabel `tbl_user`
--
ALTER TABLE `tbl_user`
  ADD PRIMARY KEY (`id_user`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `tbl_admin`
--
ALTER TABLE `tbl_admin`
  MODIFY `id_admin` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT untuk tabel `tbl_calon`
--
ALTER TABLE `tbl_calon`
  MODIFY `id_calon` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT untuk tabel `tbl_harapan`
--
ALTER TABLE `tbl_harapan`
  MODIFY `id_harapan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT untuk tabel `tbl_penampung`
--
ALTER TABLE `tbl_penampung`
  MODIFY `id_penampung` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT untuk tabel `tbl_user`
--
ALTER TABLE `tbl_user`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `tbl_harapan`
--
ALTER TABLE `tbl_harapan`
  ADD CONSTRAINT `tbl_harapan_ibfk_1` FOREIGN KEY (`id_calon`) REFERENCES `tbl_calon` (`id_calon`);

--
-- Ketidakleluasaan untuk tabel `tbl_penampung`
--
ALTER TABLE `tbl_penampung`
  ADD CONSTRAINT `tbl_penampung_ibfk_2` FOREIGN KEY (`id_calon`) REFERENCES `tbl_calon` (`id_calon`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
