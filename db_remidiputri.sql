-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 09 Mar 2023 pada 09.08
-- Versi server: 10.4.24-MariaDB
-- Versi PHP: 7.4.29

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_remidiputri`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_master`
--

CREATE TABLE `tb_master` (
  `id_barang` int(10) NOT NULL,
  `nama_barang` varchar(100) NOT NULL,
  `harga_jual` varchar(100) NOT NULL,
  `harga_beli` varchar(100) NOT NULL,
  `satuan` varchar(100) NOT NULL,
  `kategori` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tb_master`
--

INSERT INTO `tb_master` (`id_barang`, `nama_barang`, `harga_jual`, `harga_beli`, `satuan`, `kategori`) VALUES
(9, 'vh', 'vh', 'vh', 'vh', 'vh'),
(11, 'ds', 'ds', 'ds', 'ds', 'ds');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_penjualan`
--

CREATE TABLE `tb_penjualan` (
  `id_penjualan` int(10) NOT NULL,
  `no_faktur` varchar(100) NOT NULL,
  `nama_konsumen` varchar(100) NOT NULL,
  `jumlah` varchar(100) NOT NULL,
  `harga_satuan` varchar(100) NOT NULL,
  `harga_total` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tb_penjualan`
--

INSERT INTO `tb_penjualan` (`id_penjualan`, `no_faktur`, `nama_konsumen`, `jumlah`, `harga_satuan`, `harga_total`) VALUES
(10, 'yuyrt', 'uyuyrr', 'uyuyrr', 'uyuyrr', 'uyuyrr'),
(11, 'bd', 'bd', 'bd', 'bd', 'bd');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `tb_master`
--
ALTER TABLE `tb_master`
  ADD PRIMARY KEY (`id_barang`);

--
-- Indeks untuk tabel `tb_penjualan`
--
ALTER TABLE `tb_penjualan`
  ADD PRIMARY KEY (`id_penjualan`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `tb_master`
--
ALTER TABLE `tb_master`
  MODIFY `id_barang` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT untuk tabel `tb_penjualan`
--
ALTER TABLE `tb_penjualan`
  MODIFY `id_penjualan` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
