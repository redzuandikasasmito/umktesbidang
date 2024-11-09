-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 09, 2024 at 06:43 AM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 8.0.19

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_redzuandika`
--

-- --------------------------------------------------------

--
-- Table structure for table `data_mahasiswa`
--

CREATE TABLE `data_mahasiswa` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nama` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nim` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `id_progdi` bigint(20) UNSIGNED NOT NULL,
  `alamat` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `data_mahasiswa`
--

INSERT INTO `data_mahasiswa` (`id`, `nama`, `nim`, `id_progdi`, `alamat`, `created_at`, `updated_at`) VALUES
(1, 'Ram', '1234567890', 1, 'Jalan Merdeka No. 1, Jakarta', NULL, NULL),
(2, 'Jhon', '0987654321', 2, 'Jalan Pahlawan No. 2, Surabaya', NULL, NULL),
(3, 'Neena', '1122334455', 1, 'Jalan Merdeka No. 3, Bandung', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `data_siswa`
--

CREATE TABLE `data_siswa` (
  `id` int(100) NOT NULL,
  `nama` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `data_siswa`
--

INSERT INTO `data_siswa` (`id`, `nama`) VALUES
(1, 'Ram'),
(2, 'Jhon'),
(3, 'Neena');

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
(4, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(5, '2024_11_09_043802_create_users_table', 2);

-- --------------------------------------------------------

--
-- Table structure for table `nilai_siswa`
--

CREATE TABLE `nilai_siswa` (
  `id` int(11) NOT NULL,
  `id_siswa` int(20) DEFAULT NULL,
  `nilai_siswa` int(11) DEFAULT NULL,
  `tahun_nilai` int(4) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `nilai_siswa`
--

INSERT INTO `nilai_siswa` (`id`, `id_siswa`, `nilai_siswa`, `tahun_nilai`) VALUES
(1, 1, 90, 2010),
(2, 3, 80, 2010),
(3, 2, 70, 2010),
(4, 1, 90, 2011),
(5, 3, 85, 2011),
(6, 2, 65, 2011),
(7, 1, 80, 2012),
(8, 3, 80, 2012),
(9, 2, 90, 2012);

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
-- Table structure for table `personal_access_tokens`
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
-- Table structure for table `program_studi`
--

CREATE TABLE `program_studi` (
  `id` int(12) NOT NULL,
  `nama_progdi` varchar(200) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL ON UPDATE current_timestamp(),
  `update_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `program_studi`
--

INSERT INTO `program_studi` (`id`, `nama_progdi`, `created_at`, `update_at`) VALUES
(1, 'Informatika', NULL, NULL),
(2, 'Sistem Informasi', NULL, NULL),
(3, 'Teknik Komputer', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `first_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `last_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `avatar` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `first_name`, `last_name`, `email`, `avatar`, `created_at`, `updated_at`) VALUES
(1, 'George', 'Bluth', 'george.bluth@reqres.in', 'https://reqres.in/img/faces/1-image.jpg', '2024-11-08 21:46:47', '2024-11-08 21:46:47'),
(2, 'Janet', 'Weaver', 'janet.weaver@reqres.in', 'https://reqres.in/img/faces/2-image.jpg', '2024-11-08 21:46:47', '2024-11-08 21:46:47'),
(3, 'Emma', 'Wong', 'emma.wong@reqres.in', 'https://reqres.in/img/faces/3-image.jpg', '2024-11-08 21:46:47', '2024-11-08 21:46:47'),
(4, 'Eve', 'Holt', 'eve.holt@reqres.in', 'https://reqres.in/img/faces/4-image.jpg', '2024-11-08 21:46:47', '2024-11-08 21:46:47'),
(5, 'Charles', 'Morris', 'charles.morris@reqres.in', 'https://reqres.in/img/faces/5-image.jpg', '2024-11-08 21:46:47', '2024-11-08 21:46:47'),
(6, 'Tracey', 'Ramos', 'tracey.ramos@reqres.in', 'https://reqres.in/img/faces/6-image.jpg', '2024-11-08 21:46:47', '2024-11-08 21:46:47');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `data_mahasiswa`
--
ALTER TABLE `data_mahasiswa`
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
-- Indexes for table `nilai_siswa`
--
ALTER TABLE `nilai_siswa`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD PRIMARY KEY (`email`);

--
-- Indexes for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indexes for table `program_studi`
--
ALTER TABLE `program_studi`
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
-- AUTO_INCREMENT for table `data_mahasiswa`
--
ALTER TABLE `data_mahasiswa`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `nilai_siswa`
--
ALTER TABLE `nilai_siswa`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `program_studi`
--
ALTER TABLE `program_studi`
  MODIFY `id` int(12) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
