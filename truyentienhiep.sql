-- phpMyAdmin SQL Dump
-- version 4.8.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 11, 2018 at 02:30 AM
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
-- Table structure for table `list_stories`
--

CREATE TABLE `list_stories` (
  `story_id` int(10) UNSIGNED NOT NULL,
  `story_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `author_id` int(10) UNSIGNED NOT NULL,
  `story_image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `story_intro` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `story_rating` int(10) UNSIGNED NOT NULL,
  `story_view` int(10) UNSIGNED NOT NULL,
  `story_sum_chapter` int(10) UNSIGNED NOT NULL,
  `story_source` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `story_status` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `story_price` int(11) NOT NULL,
  `update_id` int(11) NOT NULL,
  `flag` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
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
(3, '2018_07_07_075208_create_story_type_table', 2),
(12, '2018_07_09_123245_story_author_migrate', 3),
(13, '2018_07_10_014807_create_list_stories_table', 3),
(14, '2018_07_10_023651_list_story', 3);

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
-- Table structure for table `story_author`
--

CREATE TABLE `story_author` (
  `author_id` int(10) UNSIGNED NOT NULL,
  `author_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `flag` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `story_author`
--

INSERT INTO `story_author` (`author_id`, `author_name`, `flag`, `created_at`, `updated_at`) VALUES
(1, 'Ngã Cật Tây Hồng Thị', 1, '2018-07-10 05:39:01', '2018-07-10 05:39:01'),
(2, 'Mị Dạ Thủy Thảo', 1, '2018-07-10 05:39:38', '2018-07-10 05:39:38'),
(3, 'Thiên Tằm Thổ Đậu', 1, '2018-07-10 05:39:50', '2018-07-10 05:39:50'),
(4, 'Tiêu Thất Gia', 1, '2018-07-10 05:39:54', '2018-07-10 05:39:54'),
(5, 'Chọn Tác Giả...', 1, '2018-07-10 06:50:03', '2018-07-10 06:50:03'),
(6, 'Chọn Tác Giả...', 1, '2018-07-10 06:50:10', '2018-07-10 06:50:10');

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
(2, 'Tiên Hiệp', 1, '2018-07-07 16:34:13', '2018-07-09 07:09:49'),
(3, 'Khoa Huyễn', 1, '2018-07-07 16:34:25', '2018-07-08 01:00:54'),
(4, 'Ngôn Tình', 1, '2018-07-07 17:39:50', '2018-07-08 07:19:19'),
(5, 'Xuyên Không', 1, '2018-07-07 17:40:21', '2018-07-07 21:04:36'),
(6, 'Đô Thị', 1, '2018-07-07 17:42:14', '2018-07-09 05:14:29'),
(7, 'Kiếm HIệp', 1, '2018-07-07 17:43:51', '2018-07-08 05:44:40'),
(8, 'Võng Du', 1, '2018-07-07 19:28:55', '2018-07-07 19:28:55'),
(9, 'Huyền huyễn', 1, '2018-07-07 21:49:31', '2018-07-08 00:27:18'),
(10, 'Truyện Teen', 1, '2018-07-07 21:50:04', '2018-07-07 21:50:04'),
(11, 'Trọng Sinh', 1, '2018-07-07 23:31:19', '2018-07-07 23:31:19'),
(12, 'Đam Mỹ', 1, '2018-07-08 00:29:57', '2018-07-08 00:29:57'),
(13, 'Tiên Hiệp', 1, '2018-07-09 07:08:08', '2018-07-09 07:08:08');

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
(2, 'lui01212', 'bvl0165@gmail.com', '$2y$10$RB2HP94ChLjYdWCdaes9JO74WAdapaSwTOJkM/FUnPlN40sD4hQsG', '03C3QPwHShGjlyvB5enwvFuIg7PK1WrBzWmQKGAw2MXbdH0oPRjQzqEgeklX', '2018-07-05 19:36:26', '2018-07-05 19:36:26');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `list_stories`
--
ALTER TABLE `list_stories`
  ADD PRIMARY KEY (`story_id`);

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
-- Indexes for table `story_author`
--
ALTER TABLE `story_author`
  ADD PRIMARY KEY (`author_id`);

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
-- AUTO_INCREMENT for table `list_stories`
--
ALTER TABLE `list_stories`
  MODIFY `story_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `story_author`
--
ALTER TABLE `story_author`
  MODIFY `author_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `story_type`
--
ALTER TABLE `story_type`
  MODIFY `type_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
