-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 11 Sep 2024 pada 07.37
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
-- Database: `veren`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `produk`
--

CREATE TABLE `produk` (
  `id` int(11) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `harga` int(11) NOT NULL,
  `stok` int(11) NOT NULL,
  `kategori` varchar(255) NOT NULL,
  `deskripsi` text NOT NULL,
  `foto` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `produk`
--

INSERT INTO `produk` (`id`, `nama`, `harga`, `stok`, `kategori`, `deskripsi`, `foto`) VALUES
(7, 'puma', 1599000, 50, 'sepatu', 'Sepatu Kets Uniseks Palermo Vintage', 'snackers pink.jpg'),
(11, 'puma', 1599000, 8, 'sepatu', 'Sepatu Kets Uniseks Palermo Vintage', 'snackers tosca.jpeg'),
(12, 'puma', 1599000, 8, 'sepatu', 'Sepatu Kets Uniseks Palermo Vintage', 'snackers blue.jpeg'),
(13, 'puma', 1599000, 8, 'sepatu', 'Sepatu Kets Uniseks Palermo Vintage', 'snackers black.jpeg'),
(15, 'puma', 1599000, 3, 'sepatu', 'Sepatu Sneaker Palermo Special', 'snackers pink soft.jpg'),
(16, 'puma', 1599000, 30, 'sepatu', 'Sepatu Sneaker Palermo Clobber', 'sneckers kream.jpeg'),
(17, 'puma', 1799000, 8, 'sepatu', 'Sepatu Sneaker Indoor R-Suede', 'snackers ijo.jpg'),
(19, 'puma', 1799000, 8, 'sepatu', 'Sepatu Sneaker Indoor R-Suede', 'sneckers putih.jpeg'),
(20, 'puma', 3299000, 8, 'Sepatu', 'Sepatu Lari Pria Peviate NITRO Elite 3', 'sptrun.jpeg'),
(21, 'puma', 909300, 8, 'sepatu', 'Sepatu Lari Wanita Enzo 2 Metal', 'sport puma black wanita.jpeg'),
(22, 'puma', 2499000, 8, 'sepatu', 'Sepatu Sneaker Unisex Velophasis Vacuum', 'sepatu olahraga pink.jpg'),
(23, 'puma', 3235000, 8, 'sepatu', 'Puma LAMELO BALL MB.03 ', 'bb.jpeg'),
(24, 'puma', 999000, 10, 'crop top', 'Crop Top Lari Wanita RUN ULTRASPUN', 'crop top puma.jpeg'),
(25, 'puma', 973000, 10, 'tas', 'Phase Gym Bag No.2', 'bag black puma.jpeg'),
(26, 'puma', 549500, 10, 'legging gym', 'Legging Training Wanita PUMA Stron', 'leging puma black.jpeg'),
(27, '', 359000, 10, 'botol minum', 'botol minum puma abu', 'botol minum puma.jpeg'),
(28, 'puma', 559300, 8, 'tas latian & Gym', 'Tas Duffel PUMA Fit', 'bag.jpeg'),
(29, 'puma', 531300, 8, 'Matras', 'Matras Latian Yoga', 'mtrs.jpeg');

-- --------------------------------------------------------

--
-- Struktur dari tabel `sekolah`
--

CREATE TABLE `sekolah` (
  `id` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `sekolah`
--

INSERT INTO `sekolah` (`id`, `username`, `password`) VALUES
(0, 'admin', 'admid');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_detail`
--

CREATE TABLE `tb_detail` (
  `id_detail` int(11) NOT NULL,
  `id_transaksi` int(11) NOT NULL,
  `id_produk` int(11) NOT NULL,
  `jumlah` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `transaksi`
--

CREATE TABLE `transaksi` (
  `id_transaksi` int(11) NOT NULL,
  `id_pelanggan` int(11) NOT NULL,
  `tanggal` date NOT NULL,
  `total_harga` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `no_hp` varchar(225) NOT NULL,
  `alamat` varchar(255) NOT NULL,
  `role` enum('admin','pelanggan') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `user`
--

INSERT INTO `user` (`id`, `nama`, `email`, `username`, `password`, `no_hp`, `alamat`, `role`) VALUES
(8, 'navisa', 'verennavisa2008@gmail.com', 'visa', '234', '089745826354', 'jl.sekar kemuning', 'pelanggan'),
(10, 'admin', 'visaiww23@gmail.com', 'verennavisa', '789', '854682947284', 'jl.mangga', 'admin');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `produk`
--
ALTER TABLE `produk`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `sekolah`
--
ALTER TABLE `sekolah`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `tb_detail`
--
ALTER TABLE `tb_detail`
  ADD PRIMARY KEY (`id_detail`),
  ADD KEY `id_transaksi` (`id_transaksi`),
  ADD KEY `id_produk` (`id_produk`);

--
-- Indeks untuk tabel `transaksi`
--
ALTER TABLE `transaksi`
  ADD PRIMARY KEY (`id_transaksi`),
  ADD KEY `id_pelanggan` (`id_pelanggan`);

--
-- Indeks untuk tabel `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `produk`
--
ALTER TABLE `produk`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;

--
-- AUTO_INCREMENT untuk tabel `tb_detail`
--
ALTER TABLE `tb_detail`
  MODIFY `id_detail` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `transaksi`
--
ALTER TABLE `transaksi`
  MODIFY `id_transaksi` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
