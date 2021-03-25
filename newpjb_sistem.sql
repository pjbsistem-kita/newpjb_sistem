-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 25 Mar 2021 pada 17.29
-- Versi server: 10.4.18-MariaDB
-- Versi PHP: 7.3.27

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `newpjb_sistem`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `cmt`
--

CREATE TABLE `cmt` (
  `id` int(10) UNSIGNED NOT NULL,
  `ecpnmr` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `catatan_cmt` varchar(10000) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nama_cmt` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `ecp`
--

CREATE TABLE `ecp` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `ecpno` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `nama` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `deskripsi` varchar(500) COLLATE utf8mb4_unicode_ci NOT NULL,
  `desktambahan` varchar(5000) COLLATE utf8mb4_unicode_ci NOT NULL,
  `alasan` varchar(5000) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `ecp`
--

INSERT INTO `ecp` (`id`, `ecpno`, `nama`, `deskripsi`, `desktambahan`, `alasan`, `created_at`, `updated_at`) VALUES
(3, '12345', 'Jordiansyah SS', 'tes123', 'tes12345', 'tes123456', '2021-03-23 13:38:44', '2021-03-23 13:38:44'),
(4, '98765', 'Dewa Kipas', 'tes987', 'tes654', 'tes321', '2021-03-23 13:39:55', '2021-03-23 13:39:55'),
(5, '77799', 'Zilong', 'tesajrf', 'cgvhkbj', 'yugvhbij', '2021-03-24 02:29:20', '2021-03-24 02:29:20');

-- --------------------------------------------------------

--
-- Struktur dari tabel `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2021_03_17_142326_create_pegawais_table', 1),
(5, '2021_03_23_161724_create_ecps_table', 2),
(6, '2021_03_23_182329_create_uploads_table', 3),
(7, '2021_03_23_213611_create_spvs_table', 4),
(8, '2021_03_23_233800_create_spv_table', 5),
(9, '2021_03_24_074133_create_cmts_table', 6),
(10, '2021_03_24_084251_create_cmts_table', 7);

-- --------------------------------------------------------

--
-- Struktur dari tabel `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `pegawai`
--

CREATE TABLE `pegawai` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nama` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `NIP` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Unit` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Email` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `spv`
--

CREATE TABLE `spv` (
  `id` int(10) UNSIGNED NOT NULL,
  `ecpnomor` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `keputusan_spv` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `alasan_spv` varchar(5000) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nama_spv` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `uploads`
--

CREATE TABLE `uploads` (
  `id` int(10) UNSIGNED NOT NULL,
  `file` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `keterangan` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `uploads`
--

INSERT INTO `uploads` (`id`, `file`, `keterangan`, `created_at`, `updated_at`) VALUES
(1, '378.Undangan Pembekalan Mentor dan Co Mentor (1).pdf', 'tes-upload', '2021-03-23 13:05:31', '2021-03-23 13:05:31');

-- --------------------------------------------------------

--
-- Struktur dari tabel `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `level` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `NID` varchar(10) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `users`
--

INSERT INTO `users` (`id`, `name`, `level`, `email`, `NID`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(3, 'Andrian', 'super user', 'andrian7@gmail.com', '16031105AA', NULL, '$2y$10$F5JLh.hh8X4SH19iLVvNj.RESgrf.V0AQY.oXcZARQZXKbZ6.jBhy', NULL, '2021-03-22 00:55:37', '2021-03-22 00:55:37'),
(9, 'Tri Yudho Hariyo P', 'user manager', 'triyudho@gmail.com', '8914113ZJY', NULL, '$2y$10$juG43X6q17.f4.YQlNrxeeWllT/ApP1BWTpVfpee9t85trnPSvREi', NULL, '2021-03-22 20:46:56', '2021-03-22 20:46:56'),
(25, 'Domenico Irvan', 'admin engineer', 'domenico@gmail.com', '1603DJ0548', NULL, '$2y$10$L5KbuoP4ZtJ2Yym6b5Kyp.IsXr/ayyJMSw.hkHeZKdeeKifbATbGS', NULL, '2021-03-23 04:53:25', '2021-03-23 04:53:25'),
(26, 'Jordiansyah SS', 'user staff', 'jordiansyah@gmail.com', '987654321P', NULL, '$2y$10$zOiwZ.RnESn5xRZ2L4sU9.RdA/UwXwlds4PSd0ohCEf9zzUVvnEji', NULL, '2021-03-23 04:57:01', '2021-03-23 04:57:01'),
(27, 'Simon F S', 'user spv', 'simonfs@gmail.com', '12345678AA', NULL, '$2y$10$4MfwXEVF12gDy56SRZB1BOP6E5mF8vbirW5TPHOdAkloucAsvOMVa', NULL, '2021-03-23 09:06:11', '2021-03-23 09:06:11'),
(29, 'Dewa Kipas', 'user staff', 'dewakipas@gmail.com', '1234567898', NULL, '$2y$10$9150AUubscYX8r5n.5HXW.l1oYTonP/ZcyBzj3vE7UPNI2DMO/pPi', NULL, '2021-03-23 13:37:34', '2021-03-23 13:37:34'),
(30, 'Zilong', 'user staff', 'zilong@gmail.com', '99999aaaaa', NULL, '$2y$10$nXxOho9nBSDLuTD7zTyYm.cN5n4kK.dL6CKOCir.wXz41RbNHMTZK', NULL, '2021-03-24 02:27:00', '2021-03-24 02:27:00');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `cmt`
--
ALTER TABLE `cmt`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `ecp`
--
ALTER TABLE `ecp`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indeks untuk tabel `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indeks untuk tabel `pegawai`
--
ALTER TABLE `pegawai`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `spv`
--
ALTER TABLE `spv`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `uploads`
--
ALTER TABLE `uploads`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_nid_unique` (`NID`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `cmt`
--
ALTER TABLE `cmt`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `ecp`
--
ALTER TABLE `ecp`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT untuk tabel `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT untuk tabel `pegawai`
--
ALTER TABLE `pegawai`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `spv`
--
ALTER TABLE `spv`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT untuk tabel `uploads`
--
ALTER TABLE `uploads`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
