-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Waktu pembuatan: 13 Des 2024 pada 07.55
-- Versi server: 8.0.30
-- Versi PHP: 8.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `mbkm`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `kode_otp`
--

CREATE TABLE `kode_otp` (
  `id` int NOT NULL,
  `email` varchar(50) COLLATE utf8mb4_general_ci NOT NULL,
  `kode_otp` varchar(4) COLLATE utf8mb4_general_ci NOT NULL,
  `timecreate` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `komentar`
--

CREATE TABLE `komentar` (
  `Id_komentar` int NOT NULL,
  `komentar` varchar(255) COLLATE utf8mb4_general_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `pengajuan_usulan`
--

CREATE TABLE `pengajuan_usulan` (
  `id_pengajuan` int NOT NULL,
  `nim_nik` bigint NOT NULL,
  `dosen_pembimbing` varchar(50) COLLATE utf8mb4_general_ci NOT NULL,
  `jenis_program` enum('Penelitian/Riset','Proyek Kemanusiaan','Kegiatan Wirausaha','Studi/Proyek Independen','Membangun desa/Kuliah Kerja Nyata Tematik','Magang Praktik Kerja','Asisten Mengajar Di Satuan Pendidikan','Pertukaran Pelajar') COLLATE utf8mb4_general_ci NOT NULL,
  `alasan_memilih_program` varchar(100) COLLATE utf8mb4_general_ci NOT NULL,
  `judul_program` varchar(100) COLLATE utf8mb4_general_ci NOT NULL,
  `nama_mitra` varchar(100) COLLATE utf8mb4_general_ci NOT NULL,
  `durasi_kegiatan` int NOT NULL,
  `posisi_diperusahaan` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `rincian_kegiatan` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `sumber_pendanaan` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT NULL,
  `jumlah_anggota` varchar(10) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT NULL,
  `nama_anggota` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT NULL,
  `jenis_pertukaran_pelajar` enum('Antar Prodi Di Politeknik Negeri Batam','Antar Prodi Pada Perguruan Tinggi Yang Berbeda','Prodi Sama Pada Perguruan Tinggi Yang Berbeda') CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT NULL,
  `nama_program_studi` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT NULL,
  `nama_mata_kuliah/jumlah_sks` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `prodi`
--

CREATE TABLE `prodi` (
  `id_prodi` int NOT NULL,
  `nama_prodi` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `prodi`
--

INSERT INTO `prodi` (`id_prodi`, `nama_prodi`) VALUES
(1, 'Teknik Informatika'),
(2, 'Sistem Informasi'),
(3, 'Teknik Elektro'),
(4, 'TRPL'),
(6, 'TRM'),
(7, 'MANAJEMEN');

-- --------------------------------------------------------

--
-- Struktur dari tabel `upload_berkas`
--

CREATE TABLE `upload_berkas` (
  `id_berkas` int NOT NULL,
  `id_pengajuan` int NOT NULL,
  `file_path` varchar(255) COLLATE utf8mb4_general_ci NOT NULL,
  `dokumen_mbkm` enum('Transcript','Laporan') COLLATE utf8mb4_general_ci NOT NULL,
  `komentar` int NOT NULL,
  `status` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `users`
--

CREATE TABLE `users` (
  `nim_nik` bigint NOT NULL,
  `username` varchar(10) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `nama_lengkap` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `email` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `no_handphone` varchar(15) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `alamat` text CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `id_prodi` int NOT NULL,
  `password` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `role` enum('dosen','mahasiswa','admin','') CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `users`
--

INSERT INTO `users` (`nim_nik`, `username`, `nama_lengkap`, `email`, `no_handphone`, `alamat`, `id_prodi`, `password`, `role`) VALUES
(1212121212, 'dosen', 'dosen1', '12@hksh.com', '089887766554', 'laut', 4, '$2y$10$OpqeNcBtCmeUpvsVGu/Kw.3eN6OlYcYBS.8KmDCB4REGv0uhCN8zG', 'dosen'),
(1313131313, 'admin', 'admin1', 'milala366m14@gmail.com', '089776655443', 'darat', 4, '$2y$10$Q47sBxswFtpYstgmDidqo.Cspq13j9DT/UD/EsIXP6jUI2ZSlb.Vi', 'admin'),
(2020202020, 'dosen2', 'Dosen2', 'chrismilala366@gmail.com', '0908070605', 'jauhh sana', 7, '$2y$10$/yM5jKS78MGFpqV6D8djCeLcw8a8GQzKGgo6IFlinl6cuVP1lZKFm', 'dosen'),
(4342411084, 'chris12', 'Chris Jericho Sembiring', 'meliala366m12@gmail.com', '089623348644', 'piayu', 4, '$2y$10$L31WRUqVh7hHjlzxVejmUux7IpflW/U//deIUJIvn5npQQ6KQW2oG', 'mahasiswa');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `kode_otp`
--
ALTER TABLE `kode_otp`
  ADD PRIMARY KEY (`id`),
  ADD KEY `email` (`email`);

--
-- Indeks untuk tabel `komentar`
--
ALTER TABLE `komentar`
  ADD PRIMARY KEY (`Id_komentar`);

--
-- Indeks untuk tabel `pengajuan_usulan`
--
ALTER TABLE `pengajuan_usulan`
  ADD PRIMARY KEY (`id_pengajuan`),
  ADD KEY `nim_nik` (`nim_nik`);

--
-- Indeks untuk tabel `prodi`
--
ALTER TABLE `prodi`
  ADD PRIMARY KEY (`id_prodi`);

--
-- Indeks untuk tabel `upload_berkas`
--
ALTER TABLE `upload_berkas`
  ADD PRIMARY KEY (`id_berkas`),
  ADD KEY `komentar` (`komentar`),
  ADD KEY `id_pengajuan` (`id_pengajuan`);

--
-- Indeks untuk tabel `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`nim_nik`),
  ADD UNIQUE KEY `email` (`email`),
  ADD UNIQUE KEY `username` (`username`),
  ADD KEY `id_prodi` (`id_prodi`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `kode_otp`
--
ALTER TABLE `kode_otp`
  MODIFY `id` int NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `komentar`
--
ALTER TABLE `komentar`
  MODIFY `Id_komentar` int NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `pengajuan_usulan`
--
ALTER TABLE `pengajuan_usulan`
  MODIFY `id_pengajuan` int NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `prodi`
--
ALTER TABLE `prodi`
  MODIFY `id_prodi` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT untuk tabel `upload_berkas`
--
ALTER TABLE `upload_berkas`
  MODIFY `id_berkas` int NOT NULL AUTO_INCREMENT;

--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `kode_otp`
--
ALTER TABLE `kode_otp`
  ADD CONSTRAINT `kode_otp_ibfk_1` FOREIGN KEY (`email`) REFERENCES `users` (`email`) ON DELETE RESTRICT ON UPDATE RESTRICT;

--
-- Ketidakleluasaan untuk tabel `pengajuan_usulan`
--
ALTER TABLE `pengajuan_usulan`
  ADD CONSTRAINT `pengajuan_usulan_ibfk_1` FOREIGN KEY (`nim_nik`) REFERENCES `users` (`nim_nik`) ON DELETE RESTRICT ON UPDATE RESTRICT;

--
-- Ketidakleluasaan untuk tabel `upload_berkas`
--
ALTER TABLE `upload_berkas`
  ADD CONSTRAINT `upload_berkas_ibfk_1` FOREIGN KEY (`komentar`) REFERENCES `komentar` (`Id_komentar`) ON DELETE RESTRICT ON UPDATE RESTRICT,
  ADD CONSTRAINT `upload_berkas_ibfk_2` FOREIGN KEY (`id_pengajuan`) REFERENCES `pengajuan_usulan` (`id_pengajuan`) ON DELETE RESTRICT ON UPDATE RESTRICT;

--
-- Ketidakleluasaan untuk tabel `users`
--
ALTER TABLE `users`
  ADD CONSTRAINT `users_ibfk_1` FOREIGN KEY (`id_prodi`) REFERENCES `prodi` (`id_prodi`) ON DELETE RESTRICT ON UPDATE RESTRICT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
