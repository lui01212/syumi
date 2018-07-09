-- phpMyAdmin SQL Dump
-- version 4.8.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 09, 2018 at 12:07 PM
-- Server version: 10.1.33-MariaDB
-- PHP Version: 7.2.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `truyentienhiep`
--

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
(3, '2018_07_07_075208_create_story_type_table', 2);

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `password_resets`
--

INSERT INTO `password_resets` (`email`, `token`, `created_at`) VALUES
('bvl0165@gmail.com', '$2y$10$3TyO923pTse7cFv5sTdgiuHM//To1FPbH.B3OyzJU4MLGs0uVx14i', '2018-07-06 05:02:37');

-- --------------------------------------------------------

--
-- Table structure for table `story_type`
--

CREATE TABLE `story_type` (
  `type_id` int(10) UNSIGNED NOT NULL,
  `type_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `flag` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `story_type`
--

INSERT INTO `story_type` (`type_id`, `type_name`, `flag`, `created_at`, `updated_at`) VALUES
(2, 'Tiên Hiệp', 1, '2018-07-07 16:34:13', '2018-07-09 00:38:48'),
(3, 'Khoa Huyễn', 1, '2018-07-07 16:34:25', '2018-07-08 21:09:34'),
(4, 'Ngôn Tình', 1, '2018-07-07 17:39:50', '2018-07-08 20:58:59'),
(5, 'Xuyên Không', 1, '2018-07-07 17:40:21', '2018-07-07 21:04:36'),
(6, 'Đô Thị', 1, '2018-07-07 17:42:14', '2018-07-08 21:41:39'),
(7, 'Kiếm HIệp', 1, '2018-07-07 17:43:51', '2018-07-08 05:44:40'),
(8, 'Võng Du', 1, '2018-07-07 19:28:55', '2018-07-08 23:23:26'),
(9, 'Huyền huyễn', 1, '2018-07-07 21:49:31', '2018-07-08 21:09:54'),
(10, 'Truyện Teen', 1, '2018-07-07 21:50:04', '2018-07-08 21:40:27'),
(11, 'Trọng Sinh', 1, '2018-07-07 23:31:19', '2018-07-07 23:31:19'),
(12, 'Đam Mỹ', 1, '2018-07-08 00:29:57', '2018-07-08 00:29:57'),
(13, 'Viễn Tưởng', 1, '2018-07-08 23:54:25', '2018-07-08 23:54:25'),
(14, 'Tiên Hiệp', 2, '2018-07-09 00:05:50', '2018-07-09 00:16:56'),
(15, 'Trinh Thám', 1, '2018-07-09 00:06:34', '2018-07-09 00:06:34');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'uHsvmW0pK3', 'YuGjXwaODQ@gmail.com', '$2y$10$TcgnAa/cQwYa..iSZupH/.2IQNxJKvEy2MV9DP13TBFz88q6fQqxe', NULL, NULL, NULL),
(2, 'lui01212', 'bvl0165@gmail.com', '$2y$10$RB2HP94ChLjYdWCdaes9JO74WAdapaSwTOJkM/FUnPlN40sD4hQsG', 'UiiRPHtfSN9Wy1mIgWhVsyGT2nleT9xH1Fm70io59NX2Fpe9Dzczys74dNjB', '2018-07-05 19:36:26', '2018-07-05 19:36:26');

--
-- Indexes for dumped tables
--

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
-- Indexes for table `story_type`
--
ALTER TABLE `story_type`
  ADD PRIMARY KEY (`type_id`);

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
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `story_type`
--
ALTER TABLE `story_type`
  MODIFY `type_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
