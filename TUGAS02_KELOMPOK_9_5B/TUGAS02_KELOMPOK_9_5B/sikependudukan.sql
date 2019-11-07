-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 14 Okt 2019 pada 18.19
-- Versi server: 10.1.36-MariaDB
-- Versi PHP: 7.2.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `sikependudukan`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `admin`
--

CREATE TABLE `admin` (
  `id_admin` int(11) NOT NULL,
  `username` varchar(10) NOT NULL,
  `password` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `data_kelahiran`
--

CREATE TABLE `data_kelahiran` (
  `nama` varchar(30) NOT NULL,
  `tempat kelahiran` varchar(10) NOT NULL,
  `hari lahir` varchar(5) NOT NULL,
  `tempat lahir` varchar(12) NOT NULL,
  `tanggal lahir` date NOT NULL,
  `jenis kelamin` varchar(9) NOT NULL,
  `nama ayah` varchar(25) NOT NULL,
  `nama ibu` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `data_kematian`
--

CREATE TABLE `data_kematian` (
  `NIK` int(16) NOT NULL,
  `nama` varchar(30) NOT NULL,
  `umur` varchar(3) NOT NULL,
  `dusun/kelurahan` varchar(12) NOT NULL,
  `alamat` varchar(100) NOT NULL,
  `jenis kelamin` varchar(9) NOT NULL,
  `hari meninggal` varchar(5) NOT NULL,
  `tanggal meninggal` date NOT NULL,
  `tempat meninggal` varchar(10) NOT NULL,
  `sebab meninggal` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `data_pendatang`
--

CREATE TABLE `data_pendatang` (
  `NIK` int(16) NOT NULL,
  `nama` varchar(25) NOT NULL,
  `tanggal datang` date NOT NULL,
  `alamat asal` varchar(100) NOT NULL,
  `alamat tujuan` varchar(100) NOT NULL,
  `keterangan` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `data_penduduk`
--

CREATE TABLE `data_penduduk` (
  `NIK` int(16) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `alamat` varchar(100) NOT NULL,
  `dusun/kelurahan` varchar(15) NOT NULL,
  `tempat lahir` varchar(15) NOT NULL,
  `tanggal lahir` date NOT NULL,
  `jenis kelamin` varchar(9) NOT NULL,
  `status perkawinan` varchar(10) NOT NULL,
  `pekerjaan` varchar(12) NOT NULL,
  `gol. darah` varchar(2) NOT NULL,
  `agama` varchar(8) NOT NULL,
  `pendidikan` varchar(12) NOT NULL,
  `nama ibu` varchar(25) NOT NULL,
  `nama ayah` varchar(25) NOT NULL,
  `no. kk` int(16) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `user`
--

CREATE TABLE `user` (
  `id_user` int(11) NOT NULL,
  `nama` varchar(30) NOT NULL,
  `username` varchar(10) NOT NULL,
  `alamat` varchar(100) NOT NULL,
  `Tempat Lahir` varchar(15) NOT NULL,
  `tanggal lahir` date NOT NULL,
  `email` varchar(25) NOT NULL,
  `password` varchar(20) NOT NULL,
  `ulang password` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id_admin`);

--
-- Indeks untuk tabel `data_kelahiran`
--
ALTER TABLE `data_kelahiran`
  ADD PRIMARY KEY (`nama`);

--
-- Indeks untuk tabel `data_kematian`
--
ALTER TABLE `data_kematian`
  ADD PRIMARY KEY (`NIK`);

--
-- Indeks untuk tabel `data_pendatang`
--
ALTER TABLE `data_pendatang`
  ADD PRIMARY KEY (`NIK`);

--
-- Indeks untuk tabel `data_penduduk`
--
ALTER TABLE `data_penduduk`
  ADD PRIMARY KEY (`NIK`);

--
-- Indeks untuk tabel `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id_user`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `admin`
--
ALTER TABLE `admin`
  MODIFY `id_admin` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `data_kematian`
--
ALTER TABLE `data_kematian`
  MODIFY `NIK` int(16) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `data_pendatang`
--
ALTER TABLE `data_pendatang`
  MODIFY `NIK` int(16) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `data_penduduk`
--
ALTER TABLE `data_penduduk`
  MODIFY `NIK` int(16) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `user`
--
ALTER TABLE `user`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
