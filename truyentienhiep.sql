-- phpMyAdmin SQL Dump
-- version 4.8.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 12, 2018 at 12:08 PM
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
  `story_type` text COLLATE utf8mb4_unicode_ci NOT NULL,
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

--
-- Dumping data for table `list_stories`
--

INSERT INTO `list_stories` (`story_id`, `story_name`, `author_id`, `story_image`, `story_type`, `story_intro`, `story_rating`, `story_view`, `story_sum_chapter`, `story_source`, `story_status`, `story_price`, `update_id`, `flag`, `created_at`, `updated_at`) VALUES
(1, 'Đấu La Đai Lục', 1, 'cPhv_dau-la-dai-luc.jpg', 'Tiên Hiệp,Viễn Tưởng,Trinh Thám,Huyền Huyễn', '<p><strong>Giới Thiệu Truyện</strong><br />\n<br />\n<strong>Một&nbsp;<em>đại lục</em>&nbsp;kh&ocirc;ng hề y&ecirc;n b&igrave;nh, một cuộc sống đầy hiểm nguy, phi&ecirc;u lưu nhưng cũng kh&ocirc;ng k&eacute;m phần l&atilde;ng mạn. t&igrave;nh y&ecirc;u, th&ugrave; hận, tr&aacute;ch nhiệm&hellip; Tiếp bước những tiền bối đi trước, Hoắc Vũ Hạo v&agrave; đời sau sử lai khắc thất qu&aacute;i, bằng niềm tin nhiệt huyết tuổi trẻ đ&atilde; g&acirc;y dựng lại&nbsp;<strong>đường m&ocirc;n</strong>&nbsp;t&aacute;i lập những huy ho&agrave;ng xưa kia của c&aacute;c tiền bối đi trước&hellip;</strong><br />\n<br />\n- Kiếp trước l&agrave; thi&ecirc;n t&agrave;i sau khi chế tạo &aacute;m kh&iacute; cao nhất của đường m&ocirc;n: Phật Nộ Li&ecirc;n Hoa. Xuy&ecirc;n việt mang theo v&otilde; c&ocirc;ng c&ugrave;ng với &aacute;m kh&iacute; Đường M&ocirc;n đến thế giới kh&ocirc;ng c&oacute; v&otilde; c&ocirc;ng c&ugrave;ng &aacute;m kh&iacute; si&ecirc;u đẳng như thế, chuyện g&igrave; sẽ xảy ra tiếp theo? H&atilde;y c&ugrave;ng nhau theo d&otilde;i Đấu La Đại Lục để biết r&otilde; bạn nh&eacute;.<br />\n<br />\n- Tags:&nbsp;<a href=\"http://truyenfull.vn/dau-la-dai-luc/\" target=\"_blank\"><strong>dau la dai luc</strong></a>,&nbsp;<strong>truyen huyen ao</strong>,&nbsp;<em>dau la dai luc prc full</em></p>', 6, 0, 0, 'Truyện Full', '1', 1, 1, 1, '2018-07-11 18:31:25', '2018-07-12 01:59:32'),
(2, 'Đấu Phá Thương Khung', 3, 'boAL_dau-pha-thuong-khung.jpg', 'Tiên Hiệp,Viễn Tưởng,Trinh Thám,Huyền Huyễn', '<p>Giới Thiệu Truyện<br />\n<br />\n-&nbsp;<strong>Đấu Ph&aacute; Thương Khung</strong>&nbsp;l&agrave; một c&acirc;u chuyện huyền huyễn đặc sắc kể về Ti&ecirc;u Vi&ecirc;m, một thi&ecirc;n chi ki&ecirc;u tử với thi&ecirc;n ph&uacute; tu luyện m&agrave; ai ai cũng h&acirc;m mộ, bỗng một ng&agrave;y người mẹ mất đi đễ lại di vật l&agrave; một chiếc giới chỉ m&agrave;u đen nhưng từ khi đ&oacute; Ti&ecirc;u Vi&ecirc;m đ&atilde; mất đi thi&ecirc;n ph&uacute; tu luyện của m&igrave;nh.<br />\n<br />\n- Từ thi&ecirc;n t&agrave;i rớt xuống l&agrave;m phế vật trong 3 năm, rồi bị vị h&ocirc;n th&ecirc; thẳng thừng từ h&ocirc;n, l&agrave;m dấy l&ecirc;n &yacute; ch&iacute; nam nhi của m&igrave;nh, Ti&ecirc;u Vi&ecirc;m nhờ di vật của mẫu th&acirc;n để lại l&agrave; 1 chiếc hắc giới chỉ (nhẫn m&agrave;u đen)Ti&ecirc;u Vi&ecirc;m gặp được hồn của Dược L&atilde;o (Dược Trần &ndash; Dược t&ocirc;n giả) 1 đại luyện dược t&ocirc;ng sư của đấu kh&iacute; đại lục&hellip;<br />\n<br />\n- Từ đ&oacute; cuộc đời của Ti&ecirc;u Vi&ecirc;m c&oacute; những biến h&oacute;a g&igrave;? Gặp được c&aacute;c đại ngộ g&igrave;? Th&acirc;n phận thật sự của Hu&acirc;n Nhi (thanh mai tr&uacute;c m&atilde; l&uacute;c nhỏ của Ti&ecirc;u Vi&ecirc;m) ra sao? B&iacute; mật của gia tộc hắn l&agrave; g&igrave;? C&ugrave;ng theo d&otilde;i bộ truyện Đấu Ph&aacute; Thương Khung để c&oacute; thể giải đ&aacute;p c&aacute;c thắc mắc n&agrave;y c&aacute;c bạn nh&eacute;!<br />\n<br />\n- Tags:&nbsp;<strong>dau pha thuong khung full prc</strong>, truyen huyen huyen<br />\n&nbsp;</p>', 10, 0, 0, 'Truyện Full', '1', 2, 1, 1, '2018-07-11 18:59:36', '2018-07-12 01:59:37');

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
(3, '2018_07_07_075208_create_story_type_table', 1),
(4, '2018_07_09_123245_story_author_migrate', 1),
(5, '2018_07_10_014807_create_list_stories_table', 1),
(6, '2018_07_10_023651_list_story', 1),
(7, '2018_07_11_022127_create_type_story_details_table', 1);

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

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
(1, 'Đường Gia Tam Thiếu', 1, '2018-07-11 18:30:19', '2018-07-11 18:30:19'),
(2, 'Vip Văn Đàn', 1, '2018-07-11 18:30:21', '2018-07-11 18:30:21'),
(3, 'Thiên Tằm Tổ Đậu', 1, '2018-07-11 18:30:23', '2018-07-11 18:30:23');

-- --------------------------------------------------------

--
-- Table structure for table `story_type`
--

CREATE TABLE `story_type` (
  `type_id` int(10) UNSIGNED NOT NULL,
  `type_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `type_name_link` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `flag` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `story_type`
--

INSERT INTO `story_type` (`type_id`, `type_name`, `type_name_link`, `flag`, `created_at`, `updated_at`) VALUES
(1, 'Tiên Hiệp', 'tien-hiep', 1, '2018-07-11 18:30:09', '2018-07-11 19:52:03'),
(2, 'Viễn Tưởng', 'vien-tuong', 1, '2018-07-11 18:30:11', '2018-07-11 19:52:06'),
(3, 'Trinh Thám', 'trinh-tham', 1, '2018-07-11 18:30:13', '2018-07-11 19:52:10'),
(4, 'Huyền Huyễn', 'huyen-huyen', 1, '2018-07-11 18:30:15', '2018-07-11 18:30:15');

-- --------------------------------------------------------

--
-- Table structure for table `type_story_details`
--

CREATE TABLE `type_story_details` (
  `id` int(10) UNSIGNED NOT NULL,
  `story_id` int(11) NOT NULL,
  `type_name_link` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `type_story_details`
--

INSERT INTO `type_story_details` (`id`, `story_id`, `type_name_link`, `created_at`, `updated_at`) VALUES
(153, 1, 'huyen-huyen', '2018-07-12 01:59:32', '2018-07-12 01:59:32'),
(157, 2, 'huyen-huyen', '2018-07-12 01:59:37', '2018-07-12 01:59:37');

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
(1, 'lui01212', 'bvl0165@gmail.com', '$2y$10$0V5zjc4gIs2blPzt6Sq3..NQ6B55n4v8ap/WeYaPOrtLjyas4.89a', 'MfAGTBRih7CCAv4yqvyiJtJtVYs7CxRjHeHrg3LUo9vaXOfAcHxbVm5UovYK', '2018-07-11 02:17:48', '2018-07-11 02:17:48');

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
-- Indexes for table `type_story_details`
--
ALTER TABLE `type_story_details`
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
-- AUTO_INCREMENT for table `list_stories`
--
ALTER TABLE `list_stories`
  MODIFY `story_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `story_author`
--
ALTER TABLE `story_author`
  MODIFY `author_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `story_type`
--
ALTER TABLE `story_type`
  MODIFY `type_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `type_story_details`
--
ALTER TABLE `type_story_details`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=158;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
