-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: 08 Okt 2017 pada 12.14
-- Versi Server: 10.1.16-MariaDB
-- PHP Version: 5.6.24

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `koperasi`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `anggota`
--

CREATE TABLE `anggota` (
  `id_anggota` int(11) NOT NULL,
  `nama` varchar(30) NOT NULL,
  `alamat` text NOT NULL,
  `tgl_lahir` varchar(30) NOT NULL,
  `tmp_lhr` varchar(30) NOT NULL,
  `j_kel` varchar(5) NOT NULL,
  `status` varchar(30) NOT NULL,
  `no_tlp` int(20) NOT NULL,
  `ket` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `angsuran`
--

CREATE TABLE `angsuran` (
  `id_angsuran` int(11) NOT NULL,
  `katagori_id` int(11) NOT NULL,
  `anggota_id` int(11) NOT NULL,
  `tgl_pembayaran` varchar(20) NOT NULL,
  `angsuran_ke` varchar(20) NOT NULL,
  `besar_angsuran` varchar(20) NOT NULL,
  `ket` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `detail_angsuran`
--

CREATE TABLE `detail_angsuran` (
  `id_angsuran` int(11) NOT NULL,
  `tgl_jatuh_tempo` varchar(30) NOT NULL,
  `besar_angsuran` varchar(30) NOT NULL,
  `ket` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `katagori_pinjaman`
--

CREATE TABLE `katagori_pinjaman` (
  `id_katagori_pinjaman` int(11) NOT NULL,
  `nama_pinjaman` varchar(50) NOT NULL,
  `created_at` varchar(225) NOT NULL,
  `updated_at` varchar(225) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `katagori_pinjaman`
--

INSERT INTO `katagori_pinjaman` (`id_katagori_pinjaman`, `nama_pinjaman`, `created_at`, `updated_at`) VALUES
(2, 'aassss', '2017-10-08 10:13:38', '2017-10-08 10:13:42');

-- --------------------------------------------------------

--
-- Struktur dari tabel `petugas_koperasi`
--

CREATE TABLE `petugas_koperasi` (
  `id_petugas` int(11) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `alamat` text NOT NULL,
  `no_tlp` int(20) NOT NULL,
  `tmp_lhr` varchar(30) NOT NULL,
  `tgl_lhr` varchar(30) NOT NULL,
  `ket` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `pinjaman`
--

CREATE TABLE `pinjaman` (
  `id_pinjaman` int(11) NOT NULL,
  `nama_pinjaman` varchar(50) NOT NULL,
  `anggota_id` int(11) NOT NULL,
  `besar_pinjaman` int(11) NOT NULL,
  `tgl_pengajuan_pinjaman` varchar(20) NOT NULL,
  `tgl_acc_pinjaman` varchar(20) NOT NULL,
  `tgl_pinjaman` varchar(20) NOT NULL,
  `tgl_pelunasan` varchar(20) NOT NULL,
  `angsuran_id` int(11) NOT NULL,
  `ket` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `simpanan`
--

CREATE TABLE `simpanan` (
  `id_simpanan` int(11) NOT NULL,
  `nm_simpanan` varchar(50) NOT NULL,
  `anggota_id` int(11) NOT NULL,
  `tgl_simpanan` varchar(30) NOT NULL,
  `besar_simpanan` varchar(30) NOT NULL,
  `ket` text NOT NULL,
  `updated_at` varchar(225) NOT NULL,
  `created_at` varchar(225) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `simpanan`
--

INSERT INTO `simpanan` (`id_simpanan`, `nm_simpanan`, `anggota_id`, `tgl_simpanan`, `besar_simpanan`, `ket`, `updated_at`, `created_at`) VALUES
(1, 'awawaw', 1, 'aw', 'aw', 'awfawfawf', '2017-10-08 09:58:20', '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `anggota`
--
ALTER TABLE `anggota`
  ADD PRIMARY KEY (`id_anggota`);

--
-- Indexes for table `angsuran`
--
ALTER TABLE `angsuran`
  ADD PRIMARY KEY (`id_angsuran`);

--
-- Indexes for table `detail_angsuran`
--
ALTER TABLE `detail_angsuran`
  ADD PRIMARY KEY (`id_angsuran`);

--
-- Indexes for table `katagori_pinjaman`
--
ALTER TABLE `katagori_pinjaman`
  ADD PRIMARY KEY (`id_katagori_pinjaman`);

--
-- Indexes for table `petugas_koperasi`
--
ALTER TABLE `petugas_koperasi`
  ADD PRIMARY KEY (`id_petugas`);

--
-- Indexes for table `pinjaman`
--
ALTER TABLE `pinjaman`
  ADD PRIMARY KEY (`id_pinjaman`);

--
-- Indexes for table `simpanan`
--
ALTER TABLE `simpanan`
  ADD PRIMARY KEY (`id_simpanan`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `anggota`
--
ALTER TABLE `anggota`
  MODIFY `id_anggota` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `angsuran`
--
ALTER TABLE `angsuran`
  MODIFY `id_angsuran` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `detail_angsuran`
--
ALTER TABLE `detail_angsuran`
  MODIFY `id_angsuran` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `katagori_pinjaman`
--
ALTER TABLE `katagori_pinjaman`
  MODIFY `id_katagori_pinjaman` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `petugas_koperasi`
--
ALTER TABLE `petugas_koperasi`
  MODIFY `id_petugas` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `pinjaman`
--
ALTER TABLE `pinjaman`
  MODIFY `id_pinjaman` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `simpanan`
--
ALTER TABLE `simpanan`
  MODIFY `id_simpanan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
