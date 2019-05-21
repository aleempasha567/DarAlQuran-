-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: May 21, 2019 at 04:43 AM
-- Server version: 8.0.12
-- PHP Version: 7.1.23

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `project`
--

-- --------------------------------------------------------

--
-- Table structure for table `keys`
--

CREATE TABLE `keys` (
  `id` int(11) NOT NULL,
  `key` varchar(40) NOT NULL,
  `level` int(2) NOT NULL,
  `ignore_limits` tinyint(1) NOT NULL DEFAULT '0',
  `is_private_key` tinyint(1) NOT NULL DEFAULT '0',
  `ip_addresses` text,
  `date_created` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `logs`
--

CREATE TABLE `logs` (
  `id` int(11) NOT NULL,
  `uri` varchar(255) NOT NULL,
  `method` varchar(6) NOT NULL,
  `params` text,
  `api_key` varchar(40) NOT NULL,
  `ip_address` varchar(45) NOT NULL,
  `time` int(11) NOT NULL,
  `rtime` float DEFAULT NULL,
  `authorized` varchar(1) NOT NULL,
  `response_code` smallint(3) DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_book_authors`
--

CREATE TABLE `tbl_book_authors` (
  `id` int(11) NOT NULL,
  `author_name` varchar(100) NOT NULL,
  `date_time` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `last_updated` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `status` int(11) NOT NULL DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `tbl_book_authors`
--

INSERT INTO `tbl_book_authors` (`id`, `author_name`, `date_time`, `last_updated`, `status`) VALUES
(1, 'Its fine now', '2019-05-15 12:44:28', '2019-05-15 22:02:28', 0),
(2, 'Working', '2019-05-15 12:44:28', '2019-05-15 22:10:05', 0),
(12, 'Test', '2019-05-16 03:02:19', '2019-05-16 03:02:19', 1);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_fatawa_categories`
--

CREATE TABLE `tbl_fatawa_categories` (
  `id` int(11) NOT NULL,
  `category_name` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `category_name_arabic` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `category_name_french` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `date_time` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `last_updated` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `status` int(11) NOT NULL DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `tbl_fatawa_categories`
--

INSERT INTO `tbl_fatawa_categories` (`id`, `category_name`, `category_name_arabic`, `category_name_french`, `date_time`, `last_updated`, `status`) VALUES
(12, 'Ram', 'ram Arab', 'Ram Fr', '2019-05-19 14:41:56', '2019-05-19 09:34:51', 1),
(13, 'Ram', 'ram Ar', 'Ram Fr', '2019-05-19 14:41:59', '2019-05-19 14:41:59', 1),
(14, 'ff', 'ff', 'ff', '2019-05-19 14:57:43', '2019-05-19 14:57:43', 1);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_mufti_names`
--

CREATE TABLE `tbl_mufti_names` (
  `id` int(11) NOT NULL,
  `mufti_name` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `mufti_name_arabic` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `mufti_name_french` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `date_time` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `last_updated` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `status` int(11) NOT NULL DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `tbl_mufti_names`
--

INSERT INTO `tbl_mufti_names` (`id`, `mufti_name`, `mufti_name_arabic`, `mufti_name_french`, `date_time`, `last_updated`, `status`) VALUES
(12, 'shaik', 's', 'sk fr', '2019-05-19 12:46:34', '2019-05-19 07:33:30', 1),
(13, 'shaik', 's', 'sk', '2019-05-19 12:46:44', '2019-05-19 12:46:44', 1),
(14, 'Shaik Saleh al fouzan', 'الشيخ صالح الفوزان', 'Shaik Saleh al fouzan', '2019-05-19 13:09:27', '2019-05-19 13:09:27', 1);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_quran`
--

CREATE TABLE `tbl_quran` (
  `id` int(11) NOT NULL,
  `reciter_id` int(11) NOT NULL,
  `recitation_type_id` int(11) NOT NULL,
  `riwaya_id` int(11) NOT NULL,
  `surah_name` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `surah_name_arabic` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `surah_name_french` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` varchar(200) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `url` varchar(200) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `date_time` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `last_updated` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `status` int(11) NOT NULL DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `tbl_quran`
--

INSERT INTO `tbl_quran` (`id`, `reciter_id`, `recitation_type_id`, `riwaya_id`, `surah_name`, `surah_name_arabic`, `surah_name_french`, `description`, `url`, `date_time`, `last_updated`, `status`) VALUES
(5, 10, 7, 5, 'Surah Al-Fatiha', 'سورة الفاتحة', 'Sourate Al-Fatiha', 'This is Surah Al-Fatiha', '612574989', '2019-05-18 00:01:02', '2019-05-17 18:35:28', 1),
(6, 9, 6, 6, ' Surah Al-Baqarah', 'سورة البقرة', 'Sourate Al-Baqarah', 'This is Surah Al-Baqarah', '654321', '2019-05-18 00:07:16', '2019-05-18 00:07:16', 1);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_quran_recitation_type`
--

CREATE TABLE `tbl_quran_recitation_type` (
  `id` int(11) NOT NULL,
  `recitation_type_name` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `recitation_type_name_arabic` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `recitation_type_name_french` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `date_time` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `last_updated` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `status` int(11) NOT NULL DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `tbl_quran_recitation_type`
--

INSERT INTO `tbl_quran_recitation_type` (`id`, `recitation_type_name`, `recitation_type_name_arabic`, `recitation_type_name_french`, `date_time`, `last_updated`, `status`) VALUES
(5, 'Tajweed Recitations Updated', 'مصحف التجويد محدث', 'Récitations de Tajweed mis à jour', '2019-05-17 21:59:14', '2019-05-17 16:29:51', 1),
(6, 'Tarawih Recitations', 'قراءة التراويح', 'Tarawih Récitations', '2019-05-17 23:53:35', '2019-05-17 23:53:35', 1),
(7, 'Tarteel Recitations', 'ترتيل تلاوات', 'Tarteel Récitations', '2019-05-17 23:54:19', '2019-05-17 23:54:19', 1);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_quran_reciters`
--

CREATE TABLE `tbl_quran_reciters` (
  `id` int(11) NOT NULL,
  `reciter_name` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `reciter_name_arabic` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `reciter_name_french` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `date_time` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `last_updated` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `status` int(11) NOT NULL DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `tbl_quran_reciters`
--

INSERT INTO `tbl_quran_reciters` (`id`, `reciter_name`, `reciter_name_arabic`, `reciter_name_french`, `date_time`, `last_updated`, `status`) VALUES
(8, 'Ahmed ibn Ali al-Ajmy Updated', 'احمد بن علي العجمي محدث', 'Ahmed ibn Ali al-Ajmy Mis à jour', '2019-05-17 21:04:25', '2019-05-17 16:04:49', 1),
(9, 'Abd-Latif-abu-alkhair', 'عبد اللطيف أبو الخير', 'abd-latif-abou-alkhayr FR', '2019-05-17 23:48:25', '2019-05-17 18:27:50', 1),
(10, 'Nabil-moatasim', 'نبيل-المعتصم', 'Nabil-moatasim FR', '2019-05-17 23:50:17', '2019-05-17 18:27:57', 1),
(11, 'Houssayn kosson', 'حسين كوسون', 'houssayn kosson FR', '2019-05-17 23:51:32', '2019-05-17 18:28:04', 1);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_quran_riways`
--

CREATE TABLE `tbl_quran_riways` (
  `id` int(11) NOT NULL,
  `riwaya_name` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `riwaya_name_arabic` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `riwaya_name_french` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `date_time` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `last_updated` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `status` int(11) NOT NULL DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `tbl_quran_riways`
--

INSERT INTO `tbl_quran_riways` (`id`, `riwaya_name`, `riwaya_name_arabic`, `riwaya_name_french`, `date_time`, `last_updated`, `status`) VALUES
(4, 'Hafs Updated ', 'حفص تحديث', 'Hafs FR mis à jour', '2019-05-17 22:19:11', '2019-05-17 16:51:55', 1),
(5, 'Warsh', 'وارش', 'Warsh  FR', '2019-05-17 23:55:22', '2019-05-17 18:26:41', 1),
(6, 'Shoba', 'شوبا', 'Shoba FR', '2019-05-17 23:56:16', '2019-05-17 18:26:49', 1);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_users`
--

CREATE TABLE `tbl_users` (
  `user_id` int(11) NOT NULL,
  `user_name` varchar(20) DEFAULT NULL,
  `user_email` varchar(60) DEFAULT NULL,
  `user_password` varchar(40) DEFAULT NULL,
  `user_level` varchar(3) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `tbl_users`
--

INSERT INTO `tbl_users` (`user_id`, `user_name`, `user_email`, `user_password`, `user_level`) VALUES
(1, 'عبد العليم', 'العليم @ جوجل', 'e10adc3949ba59abbe56e057f20f883e', '1');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbl_book_authors`
--
ALTER TABLE `tbl_book_authors`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_fatawa_categories`
--
ALTER TABLE `tbl_fatawa_categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_mufti_names`
--
ALTER TABLE `tbl_mufti_names`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_quran`
--
ALTER TABLE `tbl_quran`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_quran_recitation_type`
--
ALTER TABLE `tbl_quran_recitation_type`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_quran_reciters`
--
ALTER TABLE `tbl_quran_reciters`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_quran_riways`
--
ALTER TABLE `tbl_quran_riways`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_users`
--
ALTER TABLE `tbl_users`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbl_book_authors`
--
ALTER TABLE `tbl_book_authors`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `tbl_fatawa_categories`
--
ALTER TABLE `tbl_fatawa_categories`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `tbl_mufti_names`
--
ALTER TABLE `tbl_mufti_names`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `tbl_quran`
--
ALTER TABLE `tbl_quran`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `tbl_quran_recitation_type`
--
ALTER TABLE `tbl_quran_recitation_type`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `tbl_quran_reciters`
--
ALTER TABLE `tbl_quran_reciters`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `tbl_quran_riways`
--
ALTER TABLE `tbl_quran_riways`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `tbl_users`
--
ALTER TABLE `tbl_users`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
