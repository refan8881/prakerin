-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 23, 2021 at 03:24 PM
-- Server version: 10.4.17-MariaDB
-- PHP Version: 7.3.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `prakerin`
--

-- --------------------------------------------------------

--
-- Table structure for table `desas`
--

CREATE TABLE `desas` (
  `id` int(10) UNSIGNED NOT NULL,
  `id_kecamatan` int(10) UNSIGNED NOT NULL,
  `nama_desa` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `desas`
--

INSERT INTO `desas` (`id`, `id_kecamatan`, `nama_desa`, `created_at`, `updated_at`) VALUES
(6, 6, 'ciroyom pasar', '2021-01-29 13:08:20', '2021-01-29 13:08:20'),
(7, 8, 'kota baru', '2021-01-29 13:08:44', '2021-01-29 13:08:44'),
(8, 9, 'tci', '2021-01-29 16:42:12', '2021-01-29 16:42:12'),
(9, 7, 'desa pleburan', '2021-01-31 19:33:29', '2021-01-31 19:33:29'),
(10, 11, 'desa cimahi', '2021-02-04 19:11:04', '2021-02-04 19:11:04');

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
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
-- Table structure for table `kasuses`
--

CREATE TABLE `kasuses` (
  `id` int(10) UNSIGNED NOT NULL,
  `id_rw` int(10) UNSIGNED NOT NULL,
  `positif` int(11) NOT NULL,
  `sembuh` int(11) NOT NULL,
  `meninggal` int(11) NOT NULL,
  `tanggal` date NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `kasuses`
--

INSERT INTO `kasuses` (`id`, `id_rw`, `positif`, `sembuh`, `meninggal`, `tanggal`, `created_at`, `updated_at`) VALUES
(3, 13, 46456, 111, 456456, '2021-02-14', '2021-02-02 21:27:31', '2021-02-02 21:27:31'),
(4, 13, 11, 111, 11, '2021-02-01', '2021-02-02 21:30:26', '2021-02-02 21:30:26'),
(5, 14, 76, 355, 12, '2021-02-05', '2021-02-04 19:09:25', '2021-02-04 19:09:25'),
(6, 15, 89, 79, 68, '2021-02-05', '2021-02-04 19:12:01', '2021-02-04 19:12:01'),
(7, 14, 54, 999, 454, '2021-02-24', '2021-02-23 01:37:28', '2021-02-23 01:37:28'),
(9, 11, 332, 332, 332, '2021-02-24', '2021-02-23 02:09:40', '2021-02-23 02:09:57');

-- --------------------------------------------------------

--
-- Table structure for table `kecamatans`
--

CREATE TABLE `kecamatans` (
  `id` int(10) UNSIGNED NOT NULL,
  `id_kota` int(10) UNSIGNED NOT NULL,
  `nama_kecamatan` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `kecamatans`
--

INSERT INTO `kecamatans` (`id`, `id_kota`, `nama_kecamatan`, `created_at`, `updated_at`) VALUES
(6, 8, 'ciroyom', '2021-01-29 13:07:43', '2021-01-29 13:07:43'),
(7, 9, 'pleburan', '2021-01-29 13:07:50', '2021-01-29 13:07:50'),
(8, 8, 'cibaduyut', '2021-01-29 13:08:03', '2021-01-29 13:08:03'),
(9, 8, 'cibaduyutrer', '2021-01-29 16:41:40', '2021-01-29 16:41:40'),
(10, 8, 'dunguscariang', '2021-01-29 16:41:58', '2021-01-29 16:41:58'),
(11, 10, 'kecamatan cimahi', '2021-02-04 19:10:45', '2021-02-04 19:10:45');

-- --------------------------------------------------------

--
-- Table structure for table `kotas`
--

CREATE TABLE `kotas` (
  `id` int(10) UNSIGNED NOT NULL,
  `id_provinsi` int(10) UNSIGNED NOT NULL,
  `kode_kota` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nama_kota` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `kotas`
--

INSERT INTO `kotas` (`id`, `id_provinsi`, `kode_kota`, `nama_kota`, `created_at`, `updated_at`) VALUES
(8, 5, '434366', 'bandung', '2021-01-28 15:31:58', '2021-01-28 15:31:58'),
(9, 8, '24324', 'lamongan', '2021-01-28 15:32:09', '2021-01-28 15:32:09'),
(10, 5, '459786', 'cimahi', '2021-01-29 16:41:24', '2021-01-29 16:41:24');

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2021_01_14_033654_create_provinsis_table', 1),
(5, '2021_01_14_033741_create_kotas_table', 1),
(6, '2021_01_14_033811_create_kecamatans_table', 1),
(7, '2021_01_14_033834_create_desas_table', 1),
(8, '2021_01_14_033913_create_rws_table', 1),
(9, '2021_01_14_033949_create_kasuses_table', 1),
(10, '2021_02_01_092418_create_posts_table', 2);

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `posts`
--

CREATE TABLE `posts` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `content` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `provinsis`
--

CREATE TABLE `provinsis` (
  `id` int(10) UNSIGNED NOT NULL,
  `kode_provinsi` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nama_provinsi` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `provinsis`
--

INSERT INTO `provinsis` (`id`, `kode_provinsi`, `nama_provinsi`, `created_at`, `updated_at`) VALUES
(5, '34334', 'jawa barat', '2021-01-27 14:19:42', '2021-01-27 14:19:42'),
(8, '23545454', 'jawa timur', '2021-01-28 15:29:30', '2021-01-28 15:29:30'),
(9, '5656', 'jawa tengah', '2021-02-01 20:21:21', '2021-02-01 20:21:21'),
(11, '3578', 'kalimantan utara', '2021-02-04 18:58:01', '2021-02-04 18:58:01'),
(12, '8768', 'kalimantan', '2021-02-23 01:31:24', '2021-02-23 01:31:24');

-- --------------------------------------------------------

--
-- Table structure for table `rws`
--

CREATE TABLE `rws` (
  `id` int(10) UNSIGNED NOT NULL,
  `id_desa` int(10) UNSIGNED NOT NULL,
  `nama_rw` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `rws`
--

INSERT INTO `rws` (`id`, `id_desa`, `nama_rw`, `created_at`, `updated_at`) VALUES
(11, 6, '343', '2021-01-29 13:27:37', '2021-01-29 13:27:37'),
(12, 8, '343111', '2021-01-29 16:42:27', '2021-01-29 16:42:27'),
(13, 7, '46656', '2021-01-29 16:42:37', '2021-01-29 16:42:37'),
(14, 9, '78878', '2021-02-04 19:08:58', '2021-02-04 19:08:58'),
(15, 10, '6787878', '2021-02-04 19:11:14', '2021-02-04 19:11:14');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'refan', 'refan7151@gmail.com', NULL, '$2y$10$xMD3iSiOpj0cuNRlJF7kRebRO6T2RGCTZa.Q1zWkvBZKbDP/SwyTK', NULL, '2021-01-26 14:25:31', '2021-01-26 14:25:31');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `desas`
--
ALTER TABLE `desas`
  ADD PRIMARY KEY (`id`),
  ADD KEY `desas_id_kecamatan_foreign` (`id_kecamatan`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `kasuses`
--
ALTER TABLE `kasuses`
  ADD PRIMARY KEY (`id`),
  ADD KEY `kasuses_id_rw_foreign` (`id_rw`);

--
-- Indexes for table `kecamatans`
--
ALTER TABLE `kecamatans`
  ADD PRIMARY KEY (`id`),
  ADD KEY `kecamatans_id_kota_foreign` (`id_kota`);

--
-- Indexes for table `kotas`
--
ALTER TABLE `kotas`
  ADD PRIMARY KEY (`id`),
  ADD KEY `kotas_id_provinsi_foreign` (`id_provinsi`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `posts`
--
ALTER TABLE `posts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `provinsis`
--
ALTER TABLE `provinsis`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `rws`
--
ALTER TABLE `rws`
  ADD PRIMARY KEY (`id`),
  ADD KEY `rws_id_desa_foreign` (`id_desa`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `desas`
--
ALTER TABLE `desas`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `kasuses`
--
ALTER TABLE `kasuses`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `kecamatans`
--
ALTER TABLE `kecamatans`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `kotas`
--
ALTER TABLE `kotas`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `posts`
--
ALTER TABLE `posts`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `provinsis`
--
ALTER TABLE `provinsis`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `rws`
--
ALTER TABLE `rws`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `desas`
--
ALTER TABLE `desas`
  ADD CONSTRAINT `desas_id_kecamatan_foreign` FOREIGN KEY (`id_kecamatan`) REFERENCES `kecamatans` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `kasuses`
--
ALTER TABLE `kasuses`
  ADD CONSTRAINT `kasuses_id_rw_foreign` FOREIGN KEY (`id_rw`) REFERENCES `rws` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `kecamatans`
--
ALTER TABLE `kecamatans`
  ADD CONSTRAINT `kecamatans_id_kota_foreign` FOREIGN KEY (`id_kota`) REFERENCES `kotas` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `kotas`
--
ALTER TABLE `kotas`
  ADD CONSTRAINT `kotas_id_provinsi_foreign` FOREIGN KEY (`id_provinsi`) REFERENCES `provinsis` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `rws`
--
ALTER TABLE `rws`
  ADD CONSTRAINT `rws_id_desa_foreign` FOREIGN KEY (`id_desa`) REFERENCES `desas` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
