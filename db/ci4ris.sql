-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 19 Bulan Mei 2024 pada 11.14
-- Versi server: 10.4.32-MariaDB
-- Versi PHP: 8.0.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ci4ris`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `bendahara`
--

CREATE TABLE `bendahara` (
  `kode_user` int(11) UNSIGNED NOT NULL,
  `username` varchar(255) NOT NULL,
  `pass` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `bendahara`
--

INSERT INTO `bendahara` (`kode_user`, `username`, `pass`) VALUES
(23, 'ariandika', '22');

-- --------------------------------------------------------

--
-- Struktur dari tabel `employees`
--

CREATE TABLE `employees` (
  `id` int(5) UNSIGNED NOT NULL,
  `nama_karyawan` varchar(255) NOT NULL,
  `usia` int(2) NOT NULL,
  `status_vaksin_1` enum('sudah','belum') NOT NULL DEFAULT 'belum',
  `status_vaksin_2` enum('sudah','belum') NOT NULL DEFAULT 'belum'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `employees`
--

INSERT INTO `employees` (`id`, `nama_karyawan`, `usia`, `status_vaksin_1`, `status_vaksin_2`) VALUES
(3, 'Ari', 20, 'sudah', 'sudah');

-- --------------------------------------------------------

--
-- Struktur dari tabel `migrations`
--

CREATE TABLE `migrations` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `version` varchar(255) NOT NULL,
  `class` varchar(255) NOT NULL,
  `group` varchar(255) NOT NULL,
  `namespace` varchar(255) NOT NULL,
  `time` int(11) NOT NULL,
  `batch` int(11) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `migrations`
--

INSERT INTO `migrations` (`id`, `version`, `class`, `group`, `namespace`, `time`, `batch`) VALUES
(1, '2024-05-07-025740', 'App\\Database\\Migrations\\Create', 'default', 'App', 1715050703, 1),
(2, '2024-05-07-025740', 'App\\Database\\Migrations\\Employees', 'default', 'App', 1715050811, 2),
(3, '2024-05-07-025740', 'App\\Database\\Migrations\\Pegawai', 'default', 'App', 1715653828, 3),
(4, '2024-05-07-025740', 'App\\Database\\Migrations\\Potongan', 'default', 'App', 1715654286, 4),
(5, '2024-05-07-025740', 'App\\Database\\Migrations\\Tunjangan', 'default', 'App', 1715654375, 5),
(6, '2024-05-07-025740', 'App\\Database\\Migrations\\Bendahara', 'default', 'App', 1715654943, 6);

-- --------------------------------------------------------

--
-- Struktur dari tabel `pegawai`
--

CREATE TABLE `pegawai` (
  `kode_pegawai` int(11) UNSIGNED NOT NULL,
  `nama_pegawai` varchar(255) NOT NULL,
  `tmpt_lahir` varchar(50) NOT NULL,
  `tgl_lahir` varchar(50) NOT NULL,
  `agama` varchar(50) NOT NULL,
  `pedetar` varchar(50) NOT NULL,
  `jenis_kelamin` varchar(50) NOT NULL,
  `tmt` varchar(50) NOT NULL,
  `golongan` varchar(50) NOT NULL,
  `jabatan` varchar(50) NOT NULL,
  `status_pegawai` varchar(50) NOT NULL,
  `status_pernikahan` enum('sudah','belum') NOT NULL DEFAULT 'belum',
  `jumlah_anak` varchar(2) NOT NULL,
  `alamat` varchar(50) NOT NULL,
  `gaji_pokok` varchar(50) NOT NULL,
  `no_tlp` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `pegawai`
--

INSERT INTO `pegawai` (`kode_pegawai`, `nama_pegawai`, `tmpt_lahir`, `tgl_lahir`, `agama`, `pedetar`, `jenis_kelamin`, `tmt`, `golongan`, `jabatan`, `status_pegawai`, `status_pernikahan`, `jumlah_anak`, `alamat`, `gaji_pokok`, `no_tlp`) VALUES
(2, 'Ari', 'Jakarta', '2024-05-15', 'Islam', 'Sma', 'Laki-laki', '2024-05-15', '1', 'Admin', 'iya', 'sudah', '0', 'Lampung', '10000', '1010282');

-- --------------------------------------------------------

--
-- Struktur dari tabel `penggajian`
--

CREATE TABLE `penggajian` (
  `kode_penggajian` int(11) NOT NULL,
  `tunj_istri_suami` varchar(20) NOT NULL,
  `tunj_anak` varchar(20) NOT NULL,
  `tunj_jabatan` varchar(20) NOT NULL,
  `tunj_beras` varchar(20) NOT NULL,
  `tukin` varchar(20) NOT NULL,
  `uang_makan` varchar(20) NOT NULL,
  `pot_rwp` varchar(20) NOT NULL,
  `pot_pph` varchar(20) NOT NULL,
  `biapetarum` varchar(20) NOT NULL,
  `sewa_rmh_dinas` varchar(20) NOT NULL,
  `gaji_bersih` varchar(20) NOT NULL,
  `kode_pegawai` int(11) NOT NULL,
  `kode_tunjangan` int(11) NOT NULL,
  `kode_potongan` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `penggajian`
--

INSERT INTO `penggajian` (`kode_penggajian`, `tunj_istri_suami`, `tunj_anak`, `tunj_jabatan`, `tunj_beras`, `tukin`, `uang_makan`, `pot_rwp`, `pot_pph`, `biapetarum`, `sewa_rmh_dinas`, `gaji_bersih`, `kode_pegawai`, `kode_tunjangan`, `kode_potongan`) VALUES
(1, '', '', '', '', '', '', '', '', '', '', '', 0, 0, 0),
(2, '20', '2', '4', '4', '4', '4', '4', '4', '4', '4', '4', 4, 4, 4);

-- --------------------------------------------------------

--
-- Struktur dari tabel `potongan`
--

CREATE TABLE `potongan` (
  `kode_potongan` int(11) UNSIGNED NOT NULL,
  `nama_potongan` varchar(255) NOT NULL,
  `jumlah_potongan` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `potongan`
--

INSERT INTO `potongan` (`kode_potongan`, `nama_potongan`, `jumlah_potongan`) VALUES
(293, 'Potongan anak', '2000'),
(2939, 'Potongan PPh', '2000');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tunjangan`
--

CREATE TABLE `tunjangan` (
  `kode_tunjangan` int(11) UNSIGNED NOT NULL,
  `nama_tunjangan` varchar(255) NOT NULL,
  `jumlah_tunjangan` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `tunjangan`
--

INSERT INTO `tunjangan` (`kode_tunjangan`, `nama_tunjangan`, `jumlah_tunjangan`) VALUES
(50, 'Tunjangan Anak', '1000');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `bendahara`
--
ALTER TABLE `bendahara`
  ADD PRIMARY KEY (`kode_user`);

--
-- Indeks untuk tabel `employees`
--
ALTER TABLE `employees`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `pegawai`
--
ALTER TABLE `pegawai`
  ADD PRIMARY KEY (`kode_pegawai`);

--
-- Indeks untuk tabel `penggajian`
--
ALTER TABLE `penggajian`
  ADD PRIMARY KEY (`kode_penggajian`),
  ADD UNIQUE KEY `kode_pegawai` (`kode_pegawai`,`kode_tunjangan`,`kode_potongan`);

--
-- Indeks untuk tabel `potongan`
--
ALTER TABLE `potongan`
  ADD PRIMARY KEY (`kode_potongan`);

--
-- Indeks untuk tabel `tunjangan`
--
ALTER TABLE `tunjangan`
  ADD PRIMARY KEY (`kode_tunjangan`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `bendahara`
--
ALTER TABLE `bendahara`
  MODIFY `kode_user` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT untuk tabel `employees`
--
ALTER TABLE `employees`
  MODIFY `id` int(5) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT untuk tabel `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT untuk tabel `pegawai`
--
ALTER TABLE `pegawai`
  MODIFY `kode_pegawai` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT untuk tabel `potongan`
--
ALTER TABLE `potongan`
  MODIFY `kode_potongan` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2940;

--
-- AUTO_INCREMENT untuk tabel `tunjangan`
--
ALTER TABLE `tunjangan`
  MODIFY `kode_tunjangan` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=51;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
