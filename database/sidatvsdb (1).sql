-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 31, 2021 at 02:53 PM
-- Server version: 10.4.18-MariaDB
-- PHP Version: 8.0.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `sidatvsdb`
--

-- --------------------------------------------------------

--
-- Table structure for table `admins`
--

CREATE TABLE `admins` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `username` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `admins`
--

INSERT INTO `admins` (`id`, `name`, `username`, `password`, `created_at`, `updated_at`) VALUES
(1, 'Admin', 'admin', '$2y$10$MxjzkAmeSa5j/CA66HU2iO3J.sRUQwMZHzCGXgdlqBWYXZUaqjP6i', NULL, NULL);

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
(4, '2021_07_26_132620_create_admins_table', 1),
(5, '2021_07_26_134021_create_petugas_kpp_table', 1),
(6, '2021_07_26_134131_create_petugas_bpn_table', 1),
(7, '2021_07_27_013826_create_table_sket', 2),
(8, '2021_07_27_013826_create_sket', 3);

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
-- Table structure for table `petugas_bpn`
--

CREATE TABLE `petugas_bpn` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `username` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `petugas_bpn`
--

INSERT INTO `petugas_bpn` (`id`, `name`, `username`, `password`, `created_at`, `updated_at`) VALUES
(3, 'Mohammad Alfan', 'becakmalek', '$2y$10$WrCwUdA/3jdlka84R6ORF.wPGfuyBVt5CtiEU4FlI9lUD5t1gQSPS', '2021-07-26 17:49:33', '2021-07-26 17:49:33'),
(4, 'Moh Alfan', 'mohalfan10', '$2y$10$fJ2fonlNoN5HMMTlwi5sJuRh.bZ2ehbsUBQprA3gb0F3OyxryTgsS', '2021-07-26 17:49:50', '2021-07-26 17:49:50'),
(5, 'Dummy 1', 'dummy1', '$2y$10$HWqL8tDveZYTeBaua0PFn.UIY.woG71YOqseKT.7RxEMzFYKHM0xe', '2021-07-26 17:51:37', '2021-07-26 17:51:37'),
(6, 'Dummy 2', 'dummy2', '$2y$10$A03XU5KNgtgy4NTRXYdIbefi4RODo8j1ZLuJr18N3VAUOi.Znvos2', '2021-07-26 17:51:46', '2021-07-26 17:52:04'),
(7, 'Dummy 3', 'dummy3', '$2y$10$zTglzaulaSyvBl3k70zok.H9MNJ2owOUiCL47JRXWVCthaYb5YNjC', '2021-07-26 17:51:59', '2021-07-26 17:51:59'),
(8, 'Dummy 4', 'dummy4', '$2y$10$z4/F7s31WIYPhip7Vu4SL.s6ta2waxwzcgSOKYKvGAUTEmiI.l/EG', '2021-07-26 17:52:12', '2021-07-26 17:52:12'),
(9, 'Dummy 5', 'dummy5', '$2y$10$EVcHrFI1MW4qVfwtxIl7KOdFQYhr3eB2hU6ts3kKUQzNsl4TEBNAq', '2021-07-26 17:52:21', '2021-07-26 17:52:21'),
(10, 'Dummy 6', 'dummy6', '$2y$10$mruR9Jde8wfnvDFa4MwTkepI86ZlZRFgK8jabohQuI0BMZVRz4tEu', '2021-07-26 17:52:30', '2021-07-26 17:52:30'),
(11, 'Dummy 7', 'dummy7', '$2y$10$tM0zANBNHoskbem.5uDlDeoI4XInCOIjqh5rlh0BvK5cvmQz5dMZq', '2021-07-26 17:52:37', '2021-07-26 17:52:37'),
(12, 'Dummy 8', 'dummy8', '$2y$10$EJjXDTHSJFPUxOa5sYjr7OWeRgFVI84y2LOPjRIiewu/1wF9GkigK', '2021-07-26 17:52:47', '2021-07-26 17:52:47'),
(13, 'Petugas Bpn', 'usernamedummy', '$2y$10$bYMQVnXvuZvigmdUh/DSK.qixv9afJ0XQXEwDsR4JRpGyjY90qsIC', '2021-07-26 18:16:27', '2021-07-26 18:18:40');

-- --------------------------------------------------------

--
-- Table structure for table `petugas_kpp`
--

CREATE TABLE `petugas_kpp` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `username` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `petugas_kpp`
--

INSERT INTO `petugas_kpp` (`id`, `name`, `username`, `password`, `created_at`, `updated_at`) VALUES
(1, 'Mohammad Alfan Iqbal Aknaf', 'mohammadalfan', '$2y$10$xR8aSRAnrKg5eO5ujqrUJ.4XZBoUFZzNZDhFZWm5UnrT51XgaIFCO', '2021-07-26 18:08:27', '2021-07-26 18:12:55');

-- --------------------------------------------------------

--
-- Table structure for table `sket`
--

CREATE TABLE `sket` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nama` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `npwp` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `no_sket` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `penerima_hak` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tanggal` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nominal` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `no_sertifikat` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `sket`
--

INSERT INTO `sket` (`id`, `nama`, `npwp`, `no_sket`, `penerima_hak`, `tanggal`, `nominal`, `status`, `no_sertifikat`, `created_at`, `updated_at`) VALUES
(1, 'NURUL HASANAH', '00.000.000.0-627.000', 'SKET-1435/PHTB/WPJ.12/KP.0803/2021', 'NURUL HASANAH', '2021-03-21', '2250000', 'belum digunakan', NULL, '2021-07-26 21:59:38', '2021-07-27 03:41:45'),
(15, 'MOHAMMAD ALFAN', '00.000.000.0-628.000', 'SKET-1436/PHTB/WPJ.12/KP.0807/2021', 'MOHAMMAD ALFAN', '44385', '3000000', 'belum digunakan', NULL, '2021-07-31 00:25:30', '2021-07-31 00:25:30'),
(16, 'BECAKMALEK', '00.000.000.0-629.000', 'SKET-1437/PHTB/WPJ.12/KP.0807/2021', 'BECAKMALEK', '44385', '2000000', 'belum digunakan', NULL, '2021-07-31 00:25:30', '2021-07-31 00:25:30');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `username` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admins`
--
ALTER TABLE `admins`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

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
-- Indexes for table `petugas_bpn`
--
ALTER TABLE `petugas_bpn`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `petugas_kpp`
--
ALTER TABLE `petugas_kpp`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sket`
--
ALTER TABLE `sket`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admins`
--
ALTER TABLE `admins`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

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

--
-- AUTO_INCREMENT for table `petugas_bpn`
--
ALTER TABLE `petugas_bpn`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `petugas_kpp`
--
ALTER TABLE `petugas_kpp`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `sket`
--
ALTER TABLE `sket`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
