-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3307
-- Waktu pembuatan: 04 Jan 2024 pada 05.01
-- Versi server: 10.4.25-MariaDB
-- Versi PHP: 8.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `egov`
--

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
-- Struktur dari tabel `form_pelaporans`
--

CREATE TABLE `form_pelaporans` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `form_kec` enum('Batam Kota','Batu aji','Batu ampar','Belakang padang','Bengkong','Bulang','Galang','Lubuk Baja','Nongsa','Sagulung','Sei Beduk','Sekupang') COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `nik_kk` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `nama_kk` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `jenazah_id` bigint(20) UNSIGNED NOT NULL,
  `pelapor_id` bigint(20) UNSIGNED NOT NULL,
  `saksi_id` bigint(20) UNSIGNED NOT NULL,
  `status_pelaporan` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `jenazahs`
--

CREATE TABLE `jenazahs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nik_jz` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `nama_jz` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `jeniskelamin_jz` enum('Laki laki','Perempuan') COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `tmptlahir_jz` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `tglahir_jz` date DEFAULT NULL,
  `umur_jz` int(11) DEFAULT NULL,
  `agama_jz` enum('Islam','Kristen','Katolik','Hindu','Budha','Khonghucu') COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `pkerjaan_jz` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `alamat_jz` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `tmptkematian_jz` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `tglkematian_jz` date DEFAULT NULL,
  `jamkematian_jz` time DEFAULT NULL,
  `sebabkematian_jz` enum('Sakit biasa / Tua','Wabah Penyakit','Kecelakaan','Kriminalitas','Bunuh Diri') COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `yang_menerangkan` enum('Dokter','Tenaga Kesehatan','Kepolisian') COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `nik_ayah` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `nama_ayah` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `tglahir_ayah` date DEFAULT NULL,
  `umur_ayah` int(11) DEFAULT NULL,
  `pkerjaan_ayah` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `nik_ibu` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `nama_ibu` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `tglahir_ibu` date DEFAULT NULL,
  `umur_ibu` int(11) DEFAULT NULL,
  `pkerjaan_ibu` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `alamat_orgtua` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `jenazahs`
--

INSERT INTO `jenazahs` (`id`, `nik_jz`, `nama_jz`, `jeniskelamin_jz`, `tmptlahir_jz`, `tglahir_jz`, `umur_jz`, `agama_jz`, `pkerjaan_jz`, `alamat_jz`, `tmptkematian_jz`, `tglkematian_jz`, `jamkematian_jz`, `sebabkematian_jz`, `yang_menerangkan`, `nik_ayah`, `nama_ayah`, `tglahir_ayah`, `umur_ayah`, `pkerjaan_ayah`, `nik_ibu`, `nama_ibu`, `tglahir_ibu`, `umur_ibu`, `pkerjaan_ibu`, `alamat_orgtua`, `created_at`, `updated_at`) VALUES
(1, '123', 'asdas', 'Perempuan', NULL, NULL, NULL, 'Kristen', NULL, NULL, NULL, NULL, NULL, 'Wabah Penyakit', 'Dokter', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2023-12-22 01:31:16', '2023-12-22 01:31:16');

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
(30, '2014_10_12_000000_create_users_table', 1),
(34, '2014_10_12_100000_create_password_resets_table', 2),
(35, '2019_08_19_000000_create_failed_jobs_table', 2),
(36, '2019_12_14_000001_create_personal_access_tokens_table', 2),
(38, '2023_12_18_065623_create_jenazahs_table', 3),
(39, '2023_12_18_083346_create_pelapors_table', 3),
(40, '2023_12_18_083748_create_saksis_table', 3),
(41, '2023_12_17_192903_create_form_pelaporans_table', 4);

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
-- Struktur dari tabel `pelapors`
--

CREATE TABLE `pelapors` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nik_plapor` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `nama_plapor` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `tglahir_plapor` date DEFAULT NULL,
  `umur_plapor` int(11) DEFAULT NULL,
  `pkerjaan_plapor` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `alamat_plapor` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `pelapors`
--

INSERT INTO `pelapors` (`id`, `nik_plapor`, `nama_plapor`, `tglahir_plapor`, `umur_plapor`, `pkerjaan_plapor`, `alamat_plapor`, `created_at`, `updated_at`) VALUES
(1, NULL, NULL, NULL, NULL, NULL, NULL, '2023-12-22 01:31:16', '2023-12-22 01:31:16');

-- --------------------------------------------------------

--
-- Struktur dari tabel `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tokenable_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tokenable_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL,
  `abilities` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `expires_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `saksis`
--

CREATE TABLE `saksis` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nik_saksi` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `nama_saksi` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `tglahir_saksi` date DEFAULT NULL,
  `umur_saksi` int(11) DEFAULT NULL,
  `pkerjaan_saksi` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `alamat_saksi` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `saksis`
--

INSERT INTO `saksis` (`id`, `nik_saksi`, `nama_saksi`, `tglahir_saksi`, `umur_saksi`, `pkerjaan_saksi`, `alamat_saksi`, `created_at`, `updated_at`) VALUES
(1, NULL, NULL, NULL, NULL, NULL, NULL, '2023-12-22 01:31:16', '2023-12-22 01:31:16');

-- --------------------------------------------------------

--
-- Struktur dari tabel `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `usertype` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'user',
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `usertype`, `remember_token`, `created_at`, `updated_at`) VALUES
(3, 'Admin', 'admin@makam.co.id', NULL, '$2y$10$hteJtK04JIURlzscvqeBZu7HgriDmboz1Ovuoo3Ld2SSwg3a3pBUm', 'admin', NULL, '2023-12-22 01:32:11', '2023-12-22 01:32:11'),
(4, 'User 001', 'user001@makam.co.id', NULL, '$2y$10$jCy6KtF2IxXhEpIA/mVWJeJO1i2jf8/pMPvh1.lMKXfiroyq.4xAm', 'user', NULL, '2023-12-22 01:33:48', '2023-12-22 01:33:48');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indeks untuk tabel `form_pelaporans`
--
ALTER TABLE `form_pelaporans`
  ADD PRIMARY KEY (`id`),
  ADD KEY `form_pelaporans_user_id_foreign` (`user_id`),
  ADD KEY `form_pelaporans_jenazah_id_foreign` (`jenazah_id`),
  ADD KEY `form_pelaporans_pelapor_id_foreign` (`pelapor_id`),
  ADD KEY `form_pelaporans_saksi_id_foreign` (`saksi_id`);

--
-- Indeks untuk tabel `jenazahs`
--
ALTER TABLE `jenazahs`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `password_resets`
--
ALTER TABLE `password_resets`
  ADD PRIMARY KEY (`email`);

--
-- Indeks untuk tabel `pelapors`
--
ALTER TABLE `pelapors`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indeks untuk tabel `saksis`
--
ALTER TABLE `saksis`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `form_pelaporans`
--
ALTER TABLE `form_pelaporans`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `jenazahs`
--
ALTER TABLE `jenazahs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=42;

--
-- AUTO_INCREMENT untuk tabel `pelapors`
--
ALTER TABLE `pelapors`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `saksis`
--
ALTER TABLE `saksis`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `form_pelaporans`
--
ALTER TABLE `form_pelaporans`
  ADD CONSTRAINT `form_pelaporans_jenazah_id_foreign` FOREIGN KEY (`jenazah_id`) REFERENCES `jenazahs` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `form_pelaporans_pelapor_id_foreign` FOREIGN KEY (`pelapor_id`) REFERENCES `pelapors` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `form_pelaporans_saksi_id_foreign` FOREIGN KEY (`saksi_id`) REFERENCES `saksis` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `form_pelaporans_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
