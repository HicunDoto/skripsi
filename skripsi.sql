-- phpMyAdmin SQL Dump
-- version 5.0.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 25, 2021 at 08:52 AM
-- Server version: 10.4.14-MariaDB
-- PHP Version: 7.4.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `skripsi`
--

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
-- Table structure for table `flag`
--

CREATE TABLE `flag` (
  `id_flag` bigint(20) UNSIGNED NOT NULL,
  `flag` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `edukasi` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `id_soal` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `flag`
--

INSERT INTO `flag` (`id_flag`, `flag`, `edukasi`, `id_soal`, `created_at`, `updated_at`) VALUES
(8, 'EDUKASI{RCE_IS_DANGEROUS_VULN_ON_WEB}', '/edukasi/rce', 8, '2020-11-30 21:41:05', '2021-01-17 00:27:37'),
(9, 'EDUKASI{USER_FLAG_FOR_YOU!!}', '/edukasi/ssh', 9, '2020-11-30 21:43:04', '2021-01-25 01:39:05'),
(10, 'EDUKASI{YOU_LOGIN_AS_A_ROOT}', '/edukasi/ssh', 10, '2020-11-30 21:44:03', '2021-01-17 08:47:32'),
(11, 'EDUKASI{DONT_FORGET_TO_CONFIG_YOUR_MYSQL}', '/edukasi/mysql', 11, '2020-11-30 21:49:20', '2021-01-17 08:47:52'),
(12, 'EDUKASI{ANONYMOUS_IS_DANGEROUS}', '/edukasi/ftp', 12, '2020-11-30 21:55:29', '2021-01-19 19:55:55');

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
(58, '2020_11_08_062421_create_edukasi_table', 1),
(154, '2014_10_12_000000_create_users_table', 2),
(155, '2014_10_12_100000_create_password_resets_table', 2),
(156, '2019_08_19_000000_create_failed_jobs_table', 2),
(157, '2020_10_01_050507_create_soals_table', 2),
(158, '2020_11_07_033433_create_flag_table', 2),
(159, '2020_11_08_062421_create_status_table', 2);

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
-- Table structure for table `soals`
--

CREATE TABLE `soals` (
  `id_soal` bigint(20) UNSIGNED NOT NULL,
  `nama_soal` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `kategori` enum('web','server') COLLATE utf8mb4_unicode_ci NOT NULL,
  `nilai` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `keterangan` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `clue` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `aktif_soal` enum('aktif','tidak') COLLATE utf8mb4_unicode_ci NOT NULL,
  `waktu` varchar(10) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `soals`
--

INSERT INTO `soals` (`id_soal`, `nama_soal`, `kategori`, `nilai`, `keterangan`, `clue`, `aktif_soal`, `waktu`, `created_at`, `updated_at`) VALUES
(8, 'RCE', 'web', '50', 'Masukkan kata kata indahmu', '/clue/rce', 'aktif', '21600', '2020-11-30 21:40:56', '2021-01-17 00:27:37'),
(9, 'SSH1', 'server', '25', 'Temukan flag pada user', '/clue/ssh1', 'aktif', '21600', '2020-11-30 21:42:00', '2021-01-25 01:39:05'),
(10, 'SSH2', 'server', '100', 'Temukan flag pada super user', '/clue/ssh2', 'aktif', '21600', '2020-11-30 21:43:40', '2021-01-17 08:47:32'),
(11, 'MYSQL', 'server', '50', 'Cari flag di database', '/clue/mysql', 'aktif', '21600', '2020-11-30 21:49:03', '2021-01-17 08:47:52'),
(12, 'FTP', 'server', '25', 'Flag nya di FTP', '/clue/ftp', 'aktif', '21600', '2020-11-30 21:55:18', '2021-01-19 19:55:55');

-- --------------------------------------------------------

--
-- Table structure for table `status`
--

CREATE TABLE `status` (
  `id_status` bigint(20) UNSIGNED NOT NULL,
  `status` enum('benar','salah') COLLATE utf8mb4_unicode_ci NOT NULL,
  `timer` varchar(10) COLLATE utf8mb4_unicode_ci NOT NULL,
  `id_soal` bigint(20) UNSIGNED NOT NULL,
  `id_user` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `status`
--

INSERT INTO `status` (`id_status`, `status`, `timer`, `id_soal`, `id_user`, `created_at`, `updated_at`) VALUES
(26, 'benar', '05:50:19', 8, 5, '2021-01-07 00:57:14', '2021-01-07 00:57:14'),
(27, 'benar', '05:42:35', 9, 5, '2021-01-07 01:05:43', '2021-01-07 01:05:43'),
(28, 'benar', '05:26:22', 11, 5, '2021-01-07 01:37:24', '2021-01-07 01:37:24'),
(29, 'benar', '05:53:56', 8, 6, '2021-01-19 05:43:45', '2021-01-19 05:43:45'),
(30, 'benar', '05:42:10', 9, 6, '2021-01-19 05:58:24', '2021-01-19 05:58:24'),
(31, 'benar', '05:32:02', 10, 6, '2021-01-19 06:12:20', '2021-01-19 06:12:20'),
(32, 'benar', '05:25:58', 11, 6, '2021-01-19 06:26:38', '2021-01-19 06:26:38'),
(33, 'benar', '05:17:36', 12, 6, '2021-01-19 06:36:32', '2021-01-19 06:36:32'),
(34, 'benar', '05:46:17', 8, 7, '2021-01-19 07:24:41', '2021-01-19 07:24:41'),
(35, 'benar', '05:37:01', 9, 7, '2021-01-19 07:37:04', '2021-01-19 07:37:04'),
(36, 'benar', '05:24:42', 10, 7, '2021-01-19 08:01:28', '2021-01-19 08:01:28'),
(37, 'benar', '05:18:04', 11, 7, '2021-01-19 08:16:28', '2021-01-19 08:16:28'),
(38, 'benar', '05:07:40', 12, 7, '2021-01-19 08:32:23', '2021-01-19 08:32:23'),
(39, 'benar', '05:33:07', 8, 8, '2021-01-20 07:05:17', '2021-01-20 07:05:17'),
(40, 'benar', '05:26:50', 9, 8, '2021-01-20 07:18:52', '2021-01-20 07:18:52'),
(41, 'benar', '05:21:13', 10, 8, '2021-01-20 07:36:01', '2021-01-20 07:36:01'),
(42, 'benar', '05:14:12', 11, 8, '2021-01-20 07:46:14', '2021-01-20 07:46:14'),
(43, 'benar', '05:08:44', 12, 8, '2021-01-20 07:55:25', '2021-01-20 07:55:25'),
(44, 'benar', '05:59:30', 9, 9, '2021-01-20 23:35:42', '2021-01-20 23:35:42'),
(45, 'benar', '05:58:59', 12, 9, '2021-01-20 23:41:42', '2021-01-20 23:41:42'),
(46, 'benar', '05:48:27', 8, 9, '2021-01-20 23:52:38', '2021-01-20 23:52:38'),
(47, 'benar', '05:48:02', 11, 9, '2021-01-21 00:17:09', '2021-01-21 00:17:09'),
(48, 'benar', '05:47:44', 10, 9, '2021-01-21 00:43:17', '2021-01-21 00:43:17'),
(49, 'benar', '05:37:05', 8, 10, '2021-01-21 02:36:21', '2021-01-21 02:36:21'),
(50, 'benar', '05:31:42', 9, 10, '2021-01-21 02:47:29', '2021-01-21 02:47:29'),
(51, 'benar', '05:31:29', 10, 10, '2021-01-21 03:04:13', '2021-01-21 03:04:13'),
(52, 'benar', '05:31:09', 11, 10, '2021-01-21 03:15:40', '2021-01-21 03:15:40'),
(53, 'benar', '05:30:42', 12, 10, '2021-01-21 03:24:47', '2021-01-21 03:24:47'),
(54, 'benar', '05:51:45', 8, 11, '2021-01-21 23:30:12', '2021-01-21 23:30:12'),
(55, 'benar', '05:45:14', 9, 11, '2021-01-21 23:41:55', '2021-01-21 23:41:55'),
(56, 'benar', '05:32:49', 10, 11, '2021-01-21 23:56:24', '2021-01-21 23:56:24'),
(57, 'benar', '05:21:46', 11, 11, '2021-01-22 00:11:42', '2021-01-22 00:11:42'),
(58, 'benar', '05:16:21', 12, 11, '2021-01-22 00:22:34', '2021-01-22 00:22:34'),
(59, 'benar', '05:49:58', 8, 12, '2021-01-22 04:52:37', '2021-01-22 04:52:37'),
(60, 'benar', '05:43:57', 9, 12, '2021-01-22 05:16:16', '2021-01-22 05:16:16'),
(61, 'benar', '05:38:07', 10, 12, '2021-01-22 05:55:18', '2021-01-22 05:55:18'),
(62, 'benar', '05:32:46', 11, 12, '2021-01-22 06:07:57', '2021-01-22 06:07:57'),
(63, 'benar', '05:28:31', 12, 12, '2021-01-22 06:12:25', '2021-01-22 06:12:25'),
(64, 'benar', '05:53:57', 12, 13, '2021-01-24 04:41:12', '2021-01-24 04:41:12'),
(65, 'benar', '05:50:05', 8, 13, '2021-01-24 04:45:38', '2021-01-24 04:45:38'),
(66, 'benar', '05:44:28', 11, 13, '2021-01-24 05:02:53', '2021-01-24 05:02:53'),
(67, 'benar', '05:39:02', 9, 13, '2021-01-24 05:09:03', '2021-01-24 05:09:03'),
(68, 'benar', '05:33:44', 10, 13, '2021-01-24 05:14:53', '2021-01-24 05:14:53'),
(69, 'benar', '05:27:53', 8, 14, '2021-01-24 06:59:13', '2021-01-24 06:59:13'),
(70, 'benar', '05:21:34', 9, 14, '2021-01-24 07:08:13', '2021-01-24 07:08:13'),
(71, 'benar', '05:51:41', 10, 14, '2021-01-24 07:20:36', '2021-01-24 07:20:36'),
(72, 'benar', '05:46:22', 11, 14, '2021-01-24 07:27:43', '2021-01-24 07:27:43'),
(73, 'benar', '05:59:57', 12, 14, '2021-01-24 07:31:41', '2021-01-24 07:31:41'),
(74, 'benar', '05:59:51', 8, 2, '2021-01-29 18:07:18', '2021-01-29 18:07:18');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id_user` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `level` enum('admin','user') COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id_user`, `name`, `email`, `email_verified_at`, `password`, `level`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'hicun', 'hicun123@gmail.com', NULL, '$2y$10$bM0K4v6j6tqwkMOYugRvieEg6m7y7ZrmqK8Ot4GQFiY3Q/aJUx5ka', 'admin', 'TLdK5qhO4lRFa2faQj8Z4WjcCNA9Y5xhr3eBcCE5WwUcBQ2JfWMjmDGOJozs', '2020-11-12 20:28:35', '2020-11-12 20:28:35'),
(2, 'hicundoto', 'hicun@gmail.com', NULL, '$2y$10$VMT4uzaSQNpwTPAPcBCMy.Wd9mB.3OQbqbWmn2vx1OmMgTyoN3jgu', 'user', 'opuBhrsyMBgLpZtlJ092l2epnILMgLyHV2RCz6Z5M3SVJ23JZNMUp8YozNS3', '2020-11-12 20:30:11', '2020-11-12 20:30:11'),
(3, 'Achmad Syaichul Hadi', 'aaa@gmail.com', NULL, '$2y$10$YlCVJ1DHIbMSt9gZAEX03.zHpruLfTfRzHkU23MrIHJFx4GBXwHKW', 'user', 'ZCM66hj8dSCpZu4ZqZBX6Zi72gi6PGFkoprKivBX61E3aHyXRXBc70x9Eqwp', '2020-11-25 21:44:12', '2020-11-25 21:44:12'),
(4, 'Achmad', 'hicun12@gmail.com', NULL, '$2y$10$MUWluBsN7z.XJk/O/umDA./ro9ciBW7N7rt0pasedXVv1Jok2NKmC', 'user', 'CI8ysmXd5jsFgYQms8xxwceOfExu19mc41NWnQIMRjgtH0vbLdyEJZykDwCo', '2020-11-28 01:10:57', '2020-11-28 01:10:57'),
(5, 'Dwiki Aulia Akbar', 'dwikiputra2389@gmail.com', NULL, '$2y$10$f224EZY9f6DDOmEjzPBlvu6s3UGQFDyG8wq2.C78Nblzye2hvsB9.', 'user', 'cuZVTzPoWw3R57b3jz3vZvLyp1fojqp0RIXsZwafTAZwmiVxwjX7TqpDxFyq', '2021-01-06 23:49:13', '2021-01-06 23:49:13'),
(6, 'SILVANDO RENGGA ARNANTA', 'keluhkesah@gmail.com', NULL, '$2y$10$NMFeIxfXJyMV9dNwZy8sEOnV.x7zM/h.fpZ.TEnQdXQ31ioJ9fTHe', 'user', 'ZhxMJpwdjNzRRRywgzBCLfArOoh4WGRhfY0QPHTzKwCCcDn2WuKKPLvd27hU', '2021-01-19 05:27:56', '2021-01-19 05:27:56'),
(7, 'FARRELL EGA SANTOSA', 'farrellsantosa98@gmail.com', NULL, '$2y$10$7IflI85/mrcEUTu1IdeZGuYWYbya/cJPxBmg2f/H58aXh8WHtMcVC', 'user', 'pvw9pKBAK7MJgzz1ZeJB6gX9U6PuoT3ixJpZOTPw14yTBHEosivIc3oHU7iQ', '2021-01-19 07:03:31', '2021-01-19 07:03:31'),
(8, 'Faiqotul Himma Ramadhanti', 'himmaramadhanti2@gmail.com', NULL, '$2y$10$.6gWTNcLqAMHiRL5hWdL1uTRJ6Lhs9Rz9luBqPpbJCSSpaKeEp68y', 'user', '3NZhER15Dv83pcYeLlD9iP4nMnu1QsWL9julFHQDpVyrOqa8jtY9dsRWOBMj', '2021-01-20 06:25:48', '2021-01-20 06:25:48'),
(9, 'Ahmad Rizqi Efendi', 'kiki.ojan27@gmail.com', NULL, '$2y$10$kiclIo.wTnZ46ny.GeeWBuapyPqlM9FUPC.ntxBTpON.VOi7/j9Y2', 'user', 'zr6MGNhpDQSuGe98FrcfssSahYjXvH2tdMpgUc1zIPpH5vugNyoP2RjMlteU', '2021-01-20 22:54:05', '2021-01-20 22:54:05'),
(10, 'Lola Herawati', 'lolaherawati99@gmail.com', NULL, '$2y$10$vq7gHOf6DXn7Vcxm6mftsu0hJwjlNiWsoPYAedFGmLC/CEReoDxNq', 'user', 'dupGolUcbcyyoCaFZ483xhvOLEPoZ9vCmKBM6o6kYsLweYCMXSngixScgDns', '2021-01-21 02:15:11', '2021-01-21 02:15:11'),
(11, 'septiawan rian', 'septiawanrian@gmail.com', NULL, '$2y$10$RjIq9eJ3VeFF6TBh1wW4CeVhdvV6uT/e8EEK1nFf/cLzZNmU4XmVi', 'user', 'UVzPEIZ8rYqKaDX6l6gsPLL1Ov2u7MWBwW55jisuBV8MrcYE2YpwGL6oyRYd', '2021-01-21 23:10:03', '2021-01-21 23:10:03'),
(12, 'Muhammad Reza Pahlevi', 'akundownload230199@gmail.com', NULL, '$2y$10$C6Xky8tgCUajXbj/qsqhr.Q0REr84zHZw9ax21xwxgZsZlh36E3d2', 'user', '1ZmBdruK3FfYLPNJ5eOOWKzmQYuL8AH4LSB7EsDUROMYek6lXeqME5cqin4u', '2021-01-22 02:07:46', '2021-01-22 02:07:46'),
(13, 'Kevin', 'ngepet123@ab.cd', NULL, '$2y$10$khOSyIu04eJ.42bAaYYKI.iroV9OIiplFwiSgHm2PcNt2JrKObOj6', 'user', '3elqCiA93Zrw6m0fZr2Sj6hD4mAvWl4l0rxcrRlZhXaJ0EBhtYmLNpdXfNPw', '2021-01-24 04:28:15', '2021-01-24 04:28:15'),
(14, 'Ahmad Syarif', 'syarifrh99@gmail.com', NULL, '$2y$10$ehNjzYvwsnmMQAobgSQ8CecZ8la8PcVnUpTpxUZje.be1nwGKe1la', 'user', 'crFhEncicQgnUqgfuFBer6Zwj0juLPKNW38MUqt0uHXvoJNphcVprN9ArnVL', '2021-01-24 06:38:16', '2021-01-24 06:38:16');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `flag`
--
ALTER TABLE `flag`
  ADD PRIMARY KEY (`id_flag`),
  ADD KEY `flag_id_soal_foreign` (`id_soal`);

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
-- Indexes for table `soals`
--
ALTER TABLE `soals`
  ADD PRIMARY KEY (`id_soal`);

--
-- Indexes for table `status`
--
ALTER TABLE `status`
  ADD PRIMARY KEY (`id_status`),
  ADD KEY `status_id_soal_foreign` (`id_soal`),
  ADD KEY `status_id_user_index` (`id_user`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id_user`),
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
-- AUTO_INCREMENT for table `flag`
--
ALTER TABLE `flag`
  MODIFY `id_flag` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=160;

--
-- AUTO_INCREMENT for table `soals`
--
ALTER TABLE `soals`
  MODIFY `id_soal` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT for table `status`
--
ALTER TABLE `status`
  MODIFY `id_status` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=75;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id_user` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `flag`
--
ALTER TABLE `flag`
  ADD CONSTRAINT `flag_id_soal_foreign` FOREIGN KEY (`id_soal`) REFERENCES `flag` (`id_flag`) ON DELETE CASCADE;

--
-- Constraints for table `status`
--
ALTER TABLE `status`
  ADD CONSTRAINT `status_id_soal_foreign` FOREIGN KEY (`id_soal`) REFERENCES `soals` (`id_soal`) ON DELETE CASCADE,
  ADD CONSTRAINT `status_id_user_foreign` FOREIGN KEY (`id_user`) REFERENCES `users` (`id_user`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
