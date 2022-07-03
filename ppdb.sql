-- phpMyAdmin SQL Dump
-- version 5.1.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 03 Jul 2022 pada 10.11
-- Versi server: 10.4.24-MariaDB
-- Versi PHP: 7.4.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ppdb`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `jadwal`
--

CREATE TABLE `jadwal` (
  `id` int(11) NOT NULL,
  `verifikasi` varchar(100) NOT NULL,
  `hasil_seleksi` varchar(100) NOT NULL,
  `mulai_pendaftaran` date NOT NULL,
  `akhir_pendaftaran` date NOT NULL,
  `mulai_verifikasi` date NOT NULL,
  `pengumuman_hasil_seleksi` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `jadwal`
--

INSERT INTO `jadwal` (`id`, `verifikasi`, `hasil_seleksi`, `mulai_pendaftaran`, `akhir_pendaftaran`, `mulai_verifikasi`, `pengumuman_hasil_seleksi`) VALUES
(1, '12 - 14 Juli 2022 , 08-00 - 12.00 WIB', '18 Juli 2022 , 08-00 - 12.00 WIB', '2022-07-03', '2022-07-03', '2022-07-03', '2022-07-14');

-- --------------------------------------------------------

--
-- Struktur dari tabel `siswa`
--

CREATE TABLE `siswa` (
  `nisn` int(11) NOT NULL,
  `fullname` varchar(50) NOT NULL,
  `username` varchar(100) NOT NULL,
  `password` varchar(50) NOT NULL,
  `asal_sekolah` varchar(100) NOT NULL,
  `tempat_lahir` varchar(100) NOT NULL,
  `tgl_lahir` date NOT NULL,
  `alamat` varchar(155) NOT NULL,
  `gender` varchar(30) NOT NULL,
  `telepon` varchar(13) NOT NULL,
  `jurusan` varchar(155) NOT NULL,
  `nama_ayah` varchar(100) NOT NULL,
  `nama_ibu` varchar(100) NOT NULL,
  `pdk_ayah` varchar(100) NOT NULL,
  `pdk_ibu` varchar(100) NOT NULL,
  `pkr_ayah` varchar(100) NOT NULL,
  `pkr_ibu` varchar(100) NOT NULL,
  `pasfoto` varchar(255) NOT NULL,
  `kakel` varchar(255) NOT NULL,
  `akte` varchar(255) NOT NULL,
  `nilai1` varchar(100) NOT NULL,
  `nilai2` varchar(100) NOT NULL,
  `nilai3` varchar(100) NOT NULL,
  `nilai4` varchar(100) NOT NULL,
  `nilai5` varchar(100) NOT NULL,
  `rata_rata` varchar(100) NOT NULL,
  `status_seleksi` int(1) NOT NULL,
  `status_formulir` int(1) NOT NULL,
  `status_nilai` int(1) NOT NULL,
  `status_verifikasi` int(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `siswa`
--

INSERT INTO `siswa` (`nisn`, `fullname`, `username`, `password`, `asal_sekolah`, `tempat_lahir`, `tgl_lahir`, `alamat`, `gender`, `telepon`, `jurusan`, `nama_ayah`, `nama_ibu`, `pdk_ayah`, `pdk_ibu`, `pkr_ayah`, `pkr_ibu`, `pasfoto`, `kakel`, `akte`, `nilai1`, `nilai2`, `nilai3`, `nilai4`, `nilai5`, `rata_rata`, `status_seleksi`, `status_formulir`, `status_nilai`, `status_verifikasi`) VALUES
(12121, 'BILAL ABDILAH', 'BILAL', '123', 'SMP NERGI 11 BOGOR', 'BOGOR', '1997-09-15', 'BOGOR TIMUR', 'Laki-laki', '123456', 'Teknik Audio-Video', 'HALIDAYA', 'YULI', 'SMK', 'SMK', 'BURUH', 'IRT', '', '', '', '89', '88', '92', '94', '80', '88.6', 0, 1, 1, 0),
(12122, 'YUSUF GALIH', 'YUSUF', '123', 'SMP NEGRI 1 BOGOR', 'BOGOR', '1995-02-17', 'BOGOR UTARA', 'Laki-laki', '123456789', 'Teknik Komputer dan Jaringan', 'JAMAL HIDAYAT', 'HANI GALIMA', 'SMK', 'SMK', 'BURUH', 'WIRASWASTA', '', '', '', '78', '89', '80', '81', '79', '81.4', 0, 1, 1, 0),
(12123, 'HANIFAH', 'HANI', '123', 'MTS HIDAYATLLOH', 'BOGOR', '1994-08-16', 'BOGOR SELATAN', 'Perempuan', '123456789', 'Teknik Pemesinan', 'ALI REJA', 'YULI TAMASA', 'SMK', 'SMK', 'WIRASWASTA', 'WIRASWASTA', '', '', '', '72', '77', '74', '78', '80', '76.2', 0, 1, 1, 0),
(12124, 'ANISSA', 'NISA', '123', 'SMP BINAINSANI', 'BOGOR', '1997-04-04', 'BOGOR TENGAH', 'Perempuan', '123456789', 'Teknik Komputer dan Jaringan', 'AHMAD', 'JAMILAH', 'SMK', 'SMK', 'TNI', 'POLRI', '', '', '', '89`', '80', '77', '72', '92', '82', 0, 1, 1, 0),
(12125, 'JAMAL HAMID', 'JAMAL', '123', 'SMP PANDU RAYA 2', 'BOGOR', '1996-09-15', 'BOGOR BARAT', 'Laki-laki', '123456789', 'Teknik Instalasi Tenaga Listrik', 'MALIK', 'ULI ELIMAH', 'SMK', 'SMK', 'BURUH', 'WIRASWASTA', '', '', '', '77', '78', '75', '81', '80', '77.2', 0, 1, 1, 0),
(12126, 'RIRI KAMILA', 'RIRI', '123', 'SMP 12 BOGOR', 'JAKARTA', '1997-02-12', 'BOGOR TANAH SAREAL', 'Perempuan', '123456789', 'Teknik Komputer dan Jaringan', 'ERWIN SADI', 'FITRI', 'SMK', 'SMK', 'POLRI', 'IRT', '', '', '', '77', '78', '75', '89', '78', '79.4', 0, 1, 1, 0),
(12127, 'FADLI', 'FADLI', '123', 'SMP NEGRI 1 BOGOR', 'BOGOR', '1998-05-16', 'BOGOR UTARA', 'Laki-laki', '123456789', 'Teknik Komputer dan Jaringan', 'YUDI', 'HANI', 'SMK', 'SMK', 'BURUH', 'WIRASWASTA', '', '', '', '89', '88', '92', '78', '80', '85.4', 0, 1, 1, 0);

-- --------------------------------------------------------

--
-- Struktur dari tabel `status`
--

CREATE TABLE `status` (
  `status_seleksi` int(1) NOT NULL,
  `status_hasil` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `status`
--

INSERT INTO `status` (`status_seleksi`, `status_hasil`) VALUES
(0, 'TAHAP PENGECEKAN'),
(1, 'TIDAK LULUS'),
(2, 'LULUS');

-- --------------------------------------------------------

--
-- Struktur dari tabel `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `status` int(1) NOT NULL,
  `id_group` int(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `user`
--

INSERT INTO `user` (`id`, `username`, `password`, `status`, `id_group`) VALUES
(1, 'admin', 'admin', 1, 1),
(9, 'kepsek', 'kepsek', 1, 3),
(14, 'SEKOLAH', 'SEKOLAH', 1, 2);

-- --------------------------------------------------------

--
-- Struktur dari tabel `user_group`
--

CREATE TABLE `user_group` (
  `id_group` int(30) NOT NULL,
  `nama` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `user_group`
--

INSERT INTO `user_group` (`id_group`, `nama`) VALUES
(1, 'ADMIN IT'),
(2, 'ADMIN SEKOLAH'),
(3, 'KEPALA SEKOLAH'),
(4, 'TATA KEUANGAN');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `jadwal`
--
ALTER TABLE `jadwal`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `siswa`
--
ALTER TABLE `siswa`
  ADD PRIMARY KEY (`nisn`);

--
-- Indeks untuk tabel `status`
--
ALTER TABLE `status`
  ADD PRIMARY KEY (`status_seleksi`);

--
-- Indeks untuk tabel `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `id_group` (`id_group`);

--
-- Indeks untuk tabel `user_group`
--
ALTER TABLE `user_group`
  ADD PRIMARY KEY (`id_group`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `jadwal`
--
ALTER TABLE `jadwal`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT untuk tabel `user_group`
--
ALTER TABLE `user_group`
  MODIFY `id_group` int(30) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
