-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 04 Okt 2023 pada 23.59
-- Versi server: 10.4.24-MariaDB
-- Versi PHP: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `peminjaman`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_kendaraan`
--

CREATE TABLE `tb_kendaraan` (
  `id` int(11) NOT NULL,
  `nama_kendaraan` varchar(30) NOT NULL,
  `merk_kendaraan` varchar(30) NOT NULL,
  `jenis_kendaraan` varchar(30) NOT NULL,
  `servis` varchar(50) NOT NULL,
  `status` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tb_kendaraan`
--

INSERT INTO `tb_kendaraan` (`id`, `nama_kendaraan`, `merk_kendaraan`, `jenis_kendaraan`, `servis`, `status`) VALUES
(1, 'R18 Roller', 'Sany', 'Roller', '2023-10-02', 'Ready'),
(3, 'CB206', 'Komatsu', 'Crawler Bulldozer', '2023-10-03', 'Ready');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_pemakaian`
--

CREATE TABLE `tb_pemakaian` (
  `id` int(11) NOT NULL,
  `bulan` varchar(50) NOT NULL,
  `bbm` int(11) NOT NULL,
  `berapa` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tb_pemakaian`
--

INSERT INTO `tb_pemakaian` (`id`, `bulan`, `bbm`, `berapa`) VALUES
(1, 'Januari', 14235, '24'),
(2, 'Februari', 12383, '12'),
(3, 'Maret', 18272, '16'),
(4, 'April', 12972, '22'),
(5, 'Mei', 18261, '23'),
(6, 'Juni', 15271, '18'),
(7, 'Juli', 16826, '11'),
(8, 'Agustus', 17526, '13'),
(9, 'September', 15289, '18'),
(10, 'Oktober', 17527, '21'),
(11, 'November', 19762, '8'),
(12, 'Desember', 19276, '16');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_penyewa`
--

CREATE TABLE `tb_penyewa` (
  `id_sewa` int(11) NOT NULL,
  `nama_kendaraan` varchar(50) NOT NULL,
  `merk_kendaraan` varchar(50) NOT NULL,
  `jenis_kendaraan` varchar(50) NOT NULL,
  `driver` varchar(50) NOT NULL,
  `penyetuju` varchar(50) NOT NULL,
  `jabatan` varchar(50) NOT NULL,
  `persetujuan` varchar(50) NOT NULL,
  `tanggal_sewa` date NOT NULL,
  `tanggal_kembali` date NOT NULL,
  `keterangan` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tb_penyewa`
--

INSERT INTO `tb_penyewa` (`id_sewa`, `nama_kendaraan`, `merk_kendaraan`, `jenis_kendaraan`, `driver`, `penyetuju`, `jabatan`, `persetujuan`, `tanggal_sewa`, `tanggal_kembali`, `keterangan`) VALUES
(1, 'CB206', 'Komatsu', 'Crawler Bulldozer', 'Lukman', 'Hendrik Susanto', 'Human Resource', 'Belum Disetujui', '2023-10-13', '2023-10-28', 'Mohon Segera Di Putuskan !'),
(2, 'R18 Roller', 'Sany', 'Roller', 'Budi', 'Dendi Hartono', 'Supervisor', 'Disetujui', '2023-10-13', '2023-11-03', 'sasdas'),
(3, 'CB206', 'Komatsu', 'Crawler Bulldozer', 'Diki', 'Dendi Hartono', 'Supervisor', 'Disetujui', '2023-10-13', '2023-11-03', 'sasdas');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_user`
--

CREATE TABLE `tb_user` (
  `id_user` int(50) NOT NULL,
  `nama_user` varchar(40) NOT NULL,
  `username` varchar(10) NOT NULL,
  `password` varchar(80) NOT NULL,
  `level` varchar(50) NOT NULL,
  `jabatan` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tb_user`
--

INSERT INTO `tb_user` (`id_user`, `nama_user`, `username`, `password`, `level`, `jabatan`) VALUES
(8, 'Stevent', 'admin', 'admin', 'Admin', 'Staff IT'),
(10, 'Ahmad Stevent Andreuw', 'andro', 'andro', 'Level', 'Direktur'),
(11, 'Hendrik Susanto', 'susan', 'susan', 'pengguna', 'Human Resource'),
(12, 'Yuni ', 'yuni', 'yuni', 'pengguna', 'HR'),
(13, 'Acong', 'acong', 'acong', 'pengguna', 'Admin Accounting'),
(14, 'Dendi Hartono', 'dendi', 'dendi', 'pengguna', 'Supervisor'),
(15, 'Tamu', 'tamu', 'tamu', 'pengguna', 'Supervisor');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `tb_kendaraan`
--
ALTER TABLE `tb_kendaraan`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `tb_pemakaian`
--
ALTER TABLE `tb_pemakaian`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `tb_penyewa`
--
ALTER TABLE `tb_penyewa`
  ADD PRIMARY KEY (`id_sewa`);

--
-- Indeks untuk tabel `tb_user`
--
ALTER TABLE `tb_user`
  ADD PRIMARY KEY (`id_user`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `tb_kendaraan`
--
ALTER TABLE `tb_kendaraan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT untuk tabel `tb_pemakaian`
--
ALTER TABLE `tb_pemakaian`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT untuk tabel `tb_penyewa`
--
ALTER TABLE `tb_penyewa`
  MODIFY `id_sewa` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT untuk tabel `tb_user`
--
ALTER TABLE `tb_user`
  MODIFY `id_user` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
