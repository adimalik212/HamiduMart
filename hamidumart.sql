-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 11, 2020 at 07:46 AM
-- Server version: 10.4.13-MariaDB
-- PHP Version: 7.4.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `hamidumart`
--

-- --------------------------------------------------------

--
-- Table structure for table `bayars`
--

CREATE TABLE `bayars` (
  `id` char(36) COLLATE utf8mb4_unicode_ci NOT NULL,
  `pembeli` char(36) COLLATE utf8mb4_unicode_ci NOT NULL,
  `penjual` char(36) COLLATE utf8mb4_unicode_ci NOT NULL,
  `kode` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `total` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `alamat` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `bayars`
--

INSERT INTO `bayars` (`id`, `pembeli`, `penjual`, `kode`, `total`, `alamat`, `status`, `created_at`, `updated_at`) VALUES
('e797d5d1-1339-4407-9121-d7436f859eaa', 'be8dab14-31b7-47a3-8bc4-63fa5c89330b', 'be8dab14-31b7-47a3-8bc4-63fa5c89330b', 'HM-1594351997', 'Rp. 752.000', 'Asdfaasdf, Jatinagara, Ciamis, Jawa Barat', 'diPesan', '2020-07-09 20:33:17', '2020-07-09 20:33:17');

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
  `img` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `kategoris`
--

INSERT INTO `kategoris` (`id`, `kategori`, `img`, `created_at`, `updated_at`) VALUES
('158d3923-4a2d-47b7-b19a-e058dcdcdd1c', 'Fashion', 'fasion.png', '2020-07-10 18:23:29', '2020-07-10 18:23:29'),
('1cff88b8-b6b8-4824-83fe-a1ae9b6c9b0d', 'Elektronik', 'elektronik.png', '2020-07-08 19:23:45', '2020-07-08 19:23:45'),
('348cebed-733e-4bfa-8a29-521551bf2778', 'Furnitur', 'furnitur.png', '2020-07-08 19:23:10', '2020-07-08 19:23:10'),
('54d526c5-a5c3-4d47-9e08-17c131646690', 'Kesehatan', 'kesehatan.png', '2020-07-10 18:24:18', '2020-07-10 18:24:18'),
('5aed4013-cfd0-4d90-8fbd-cf1e124915ae', 'Industri', 'industri.png', '2020-07-08 19:25:02', '2020-07-10 18:20:00'),
('600aeecb-405b-4054-a1be-aeac850b878a', 'Mobil/Motor', 'mobil.png', '2020-07-08 19:23:20', '2020-07-10 18:20:37'),
('7f1a0316-cc87-4652-8f5a-0b841855cf1a', 'Aksesoris', 'aksesoris.png', '2020-07-10 18:22:02', '2020-07-10 18:22:02'),
('91162bd6-22a4-4e25-87ca-cecd1fa8d7ea', 'Voucher', 'voucer.png', '2020-07-10 18:25:23', '2020-07-10 18:25:23'),
('bb7dccd8-edfe-4fcb-93d0-084ce3c90cff', 'Barang & Jasa', 'barjas.png', '2020-07-08 19:24:52', '2020-07-10 18:20:56'),
('bc06df4c-98a3-4d27-a398-97f2c2390b6c', 'Pertanian', 'petani.png', '2020-07-08 19:25:10', '2020-07-08 19:25:10'),
('bc93c930-454b-40ab-a142-0542dbbd2e73', 'Peternakan', 'peternak.png', '2020-07-10 18:21:29', '2020-07-10 18:21:29'),
('e45f4671-9dc3-4a4a-a893-9fc3f6c5711a', 'Makanan', 'food.png', '2020-07-08 19:23:15', '2020-07-08 19:23:15');

-- --------------------------------------------------------

--
-- Table structure for table `komentars`
--

CREATE TABLE `komentars` (
  `id` char(36) COLLATE utf8mb4_unicode_ci NOT NULL,
  `barang_id` char(36) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nama` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `komentar` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `balas` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `pemilikBarang` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `komentars`
--

INSERT INTO `komentars` (`id`, `barang_id`, `nama`, `email`, `komentar`, `balas`, `pemilikBarang`, `created_at`, `updated_at`) VALUES
('7da7cfa3-f13c-446d-96c3-a24a92ddffda', 'ebdafb52-f10c-43e9-8533-38cd4771a974', 'admin', 'admin@gmail.com', 'ini rasanya manis?', 'ya iyalah namanya juga gulali', 'admin', '2020-07-09 06:54:58', '2020-07-09 06:55:23');

-- --------------------------------------------------------

--
-- Table structure for table `lapaks`
--

CREATE TABLE `lapaks` (
  `id` char(36) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_id` char(36) COLLATE utf8mb4_unicode_ci NOT NULL,
  `namaLapak` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `pemilik` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `url` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `hp` bigint(13) DEFAULT NULL,
  `kab` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `kec` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `prov` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `alamat` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `photo` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `lapaks`
--

INSERT INTO `lapaks` (`id`, `user_id`, `namaLapak`, `pemilik`, `url`, `hp`, `kab`, `kec`, `prov`, `alamat`, `photo`, `created_at`, `updated_at`) VALUES
('1b3f9fbb-3db1-4c0e-8551-4fca601e72fa', '309127ce-8564-4c3d-a62a-a83ef43e9d0e', 'User Lapak', 'User', 'user-lapak', 5651651651651, 'Ciamis', 'Ciamis', 'Jawa Barat', 'Pawindan Bunirasa 0909', '556472438.jpg', '2020-07-08 08:10:54', '2020-07-10 22:01:13'),
('707c43df-ce00-4103-b33b-7426426ec4d8', 'be8dab14-31b7-47a3-8bc4-63fa5c89330b', 'Lapak Admin', 'Super Admin', 'lapak-admin', 6054649846546, 'Ciamis', 'Jatinagara', 'Jawa Barat', 'Asdfaasdf', '309438274.jpg', '2020-07-08 08:25:56', '2020-07-10 21:51:21');

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
(3, '2020_07_02_130535_kategori', 1),
(4, '2020_07_03_121302_store', 1),
(5, '2020_07_03_130729_lapak', 1),
(6, '2020_07_05_121545_komentar', 1),
(7, '2020_07_08_150053_pilih', 2),
(8, '2020_07_09_135856_bayar', 3);

-- --------------------------------------------------------

--
-- Table structure for table `pilihs`
--

CREATE TABLE `pilihs` (
  `id` char(36) COLLATE utf8mb4_unicode_ci NOT NULL,
  `barang_id` char(36) COLLATE utf8mb4_unicode_ci NOT NULL,
  `harga` double NOT NULL,
  `jumlah` int(11) NOT NULL,
  `total` double NOT NULL,
  `pembeli` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `kode` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `pilihs`
--

INSERT INTO `pilihs` (`id`, `barang_id`, `harga`, `jumlah`, `total`, `pembeli`, `kode`, `status`, `created_at`, `updated_at`) VALUES
('747d7403-d08f-47da-8751-5a074d4ad6c5', 'ebdafb52-f10c-43e9-8533-38cd4771a974', 750000, 1, 750000, '309127ce-8564-4c3d-a62a-a83ef43e9d0e', NULL, NULL, '2020-07-10 22:42:16', '2020-07-10 22:42:16'),
('9d2e626d-9752-4791-838b-f57d8ee80ea9', 'ebdafb52-f10c-43e9-8533-38cd4771a974', 750000, 1, 750000, 'be8dab14-31b7-47a3-8bc4-63fa5c89330b', 'HM-1594351997', 'diPesan', '2020-07-09 20:30:29', '2020-07-09 20:33:17'),
('dc49e02c-065b-4308-b7c2-194a3c745823', '163a1e9c-c43b-4f52-bca6-d347108f75d7', 2000, 1, 2000, 'be8dab14-31b7-47a3-8bc4-63fa5c89330b', 'HM-1594351997', 'diPesan', '2020-07-09 20:30:36', '2020-07-09 20:33:17');

-- --------------------------------------------------------

--
-- Table structure for table `stores`
--

CREATE TABLE `stores` (
  `id` char(36) COLLATE utf8mb4_unicode_ci NOT NULL,
  `lapak_id` char(36) COLLATE utf8mb4_unicode_ci NOT NULL,
  `namaBarang` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `kategori` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `harga` double NOT NULL,
  `bobot` int(11) NOT NULL,
  `volume` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
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
('163a1e9c-c43b-4f52-bca6-d347108f75d7', '707c43df-ce00-4103-b33b-7426426ec4d8', 'Barang Ke 2', 'Bahan Mentah', 2000, 3, 'Gram', 'Baru', 'asdf asdf asdf asdf asdf', NULL, '', '2020-07-09 09:55:04', '2020-07-09 09:55:04'),
('cf69a893-1ee4-4f53-8367-b29e6d1a9101', '1b3f9fbb-3db1-4c0e-8551-4fca601e72fa', 'Sambal Terasi', 'Makanan', 3500, 12, 'Gram', 'Baru', 'sambal terasi mantaf tanpa bahan pengawet', NULL, '', '2020-07-10 06:58:43', '2020-07-10 06:58:43'),
('ebdafb52-f10c-43e9-8533-38cd4771a974', '707c43df-ce00-4103-b33b-7426426ec4d8', 'Permen Gulali', 'Makanan', 750000, 25, 'Gram', 'Baru', 'makanan manis yang dibuat dari gula di puter-puter make gagang nyere.', NULL, '', '2020-07-09 06:51:40', '2020-07-09 06:51:40');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` char(36) COLLATE utf8mb4_unicode_ci NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `role` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `role`, `status`, `remember_token`, `created_at`, `updated_at`) VALUES
('309127ce-8564-4c3d-a62a-a83ef43e9d0e', 'User', 'user@gmail.com', NULL, '$2y$10$AMC3HxTWPkB6.j10bYGPquH8z4KfXQiCdoZj5RpcLgy57pc4hQhXW', 'Reguler', '1', NULL, '2020-07-08 08:10:54', '2020-07-10 22:01:13'),
('be8dab14-31b7-47a3-8bc4-63fa5c89330b', 'Super Admin', 'admin@gmail.com', NULL, '$2y$10$7B0amP0E9JcJQPJd5H3yAOBJ5t5jyYP3i7oZPh0clJ9vS5Iby1D7G', 'Admin', '1', NULL, '2020-07-08 08:25:56', '2020-07-10 21:51:22');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `bayars`
--
ALTER TABLE `bayars`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `kategoris`
--
ALTER TABLE `kategoris`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `komentars`
--
ALTER TABLE `komentars`
  ADD PRIMARY KEY (`id`);

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
-- Indexes for table `pilihs`
--
ALTER TABLE `pilihs`
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
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
