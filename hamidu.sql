-- phpMyAdmin SQL Dump
-- version 4.9.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 04, 2020 at 06:50 AM
-- Server version: 10.4.8-MariaDB
-- PHP Version: 7.2.23

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `hamidu`
--

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `kategoris`
--

CREATE TABLE `kategoris` (
  `id` char(36) COLLATE utf8mb4_unicode_ci NOT NULL,
  `kategori` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `kategoris`
--

INSERT INTO `kategoris` (`id`, `kategori`, `created_at`, `updated_at`) VALUES
('156177ce-4142-4ad5-830e-6fa6c5d7a092', 'Fashion', '2020-07-03 05:07:41', '2020-07-03 05:07:41'),
('3d79b187-464c-492c-8b50-a503ae7caee0', 'Minuman', '2020-07-03 05:07:23', '2020-07-03 05:07:23'),
('4f8f23a3-ee8e-4e2d-9782-d33aa374994b', 'Makanan', '2020-07-03 05:06:59', '2020-07-03 05:06:59'),
('c28c24d4-9382-44e3-93ec-0bda5d465302', 'Otomotif', '2020-07-03 05:07:47', '2020-07-03 05:07:47'),
('e343530b-86bf-4994-b623-bdf918f8c526', 'Barang & Jasa', '2020-07-03 00:52:48', '2020-07-03 05:06:51');

-- --------------------------------------------------------

--
-- Table structure for table `lapaks`
--

CREATE TABLE `lapaks` (
  `id` char(36) NOT NULL,
  `user_id` char(36) NOT NULL,
  `namaLapak` varchar(255) DEFAULT NULL,
  `pemilik` varchar(255) NOT NULL,
  `url` varchar(255) DEFAULT NULL,
  `kab` varchar(255) DEFAULT NULL,
  `kec` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `lapaks`
--

INSERT INTO `lapaks` (`id`, `user_id`, `namaLapak`, `pemilik`, `url`, `kab`, `kec`, `created_at`, `updated_at`) VALUES
('e483afac-264f-46e6-bd21-75edadaef3f5', '2ab8c090-cb8f-4335-a916-ed51a23f281b', NULL, 'user', NULL, NULL, NULL, '2020-07-03 21:37:34', '2020-07-03 21:37:34'),
('f5363af9-a9f4-4ed3-808b-d4f4ef2cd8ae', 'f1904c4b-e385-4f86-83a4-4491f69ee3b3', 'adminMart', 'admin', 'adminmart', 'Ciamis', 'Jatinagara', '2020-07-03 21:37:17', '2020-07-03 21:38:49');

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
(2, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2020_07_02_130535_kategori', 2),
(5, '2020_07_03_121302_store', 3);

-- --------------------------------------------------------

--
-- Table structure for table `stores`
--

CREATE TABLE `stores` (
  `id` char(36) COLLATE utf8mb4_unicode_ci NOT NULL,
  `lapak_id` char(36) COLLATE utf8mb4_unicode_ci NOT NULL,
  `namaBarang` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `kategori` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `harga` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `bobot` int(11) NOT NULL,
  `volume` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `kondisi` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `deskripsi` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `photo` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `url` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `stores`
--

INSERT INTO `stores` (`id`, `lapak_id`, `namaBarang`, `kategori`, `harga`, `bobot`, `volume`, `kondisi`, `deskripsi`, `photo`, `url`, `created_at`, `updated_at`) VALUES
('c91327d2-024c-4eb5-85ce-a667c1bff58c', 'f5363af9-a9f4-4ed3-808b-d4f4ef2cd8ae', 'sampeu', 'Makanan', '20000', 2, 'Gram', 'Baru', 'sampeu atah', NULL, '', '2020-07-03 21:39:42', '2020-07-03 21:39:42');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` varchar(36) COLLATE utf8mb4_unicode_ci NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `role` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` int(11) DEFAULT NULL,
  `photo` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `role`, `status`, `photo`, `remember_token`, `created_at`, `updated_at`) VALUES
('2ab8c090-cb8f-4335-a916-ed51a23f281b', 'user', 'user@gmail.com', NULL, '$2y$10$.Klb/wy.qBc9h.Iba.holOEH0H2CeOl0HEgClabYhjiQVNALWEMt2', 'Reguler', 1, NULL, NULL, '2020-07-03 21:37:34', '2020-07-03 21:37:34'),
('f1904c4b-e385-4f86-83a4-4491f69ee3b3', 'admin', 'admin@gmail.com', NULL, '$2y$10$H014KX5gvTx16tLpwutnFuCLaXS2FASOcaNzLtX4EZXlcV2E3Sg/G', 'Admin', 1, NULL, NULL, '2020-07-03 21:37:17', '2020-07-03 21:37:17');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `kategoris`
--
ALTER TABLE `kategoris`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `id` (`id`);

--
-- Indexes for table `lapaks`
--
ALTER TABLE `lapaks`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `stores`
--
ALTER TABLE `stores`
  ADD PRIMARY KEY (`id`);

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
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
