-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: May 28, 2019 at 06:12 PM
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
-- Table structure for table `tbl_article`
--

CREATE TABLE `tbl_article` (
  `id` int(11) NOT NULL,
  `article_category_id` int(11) NOT NULL,
  `article_scholar_id` int(11) NOT NULL,
  `article_title_name` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `article_title_name_arabic` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `article_title_name_french` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `article_description_name` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `article_description_name_arabic` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `article_description_name_french` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `article_image` text CHARACTER SET utf8mb4 COLLATE utf8mb4_vietnamese_ci,
  `article_likes` int(11) DEFAULT NULL,
  `article_views` int(11) DEFAULT NULL,
  `date_time` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `last_updated` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `status` int(11) NOT NULL DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_vietnamese_ci;

--
-- Dumping data for table `tbl_article`
--

INSERT INTO `tbl_article` (`id`, `article_category_id`, `article_scholar_id`, `article_title_name`, `article_title_name_arabic`, `article_title_name_french`, `article_description_name`, `article_description_name_arabic`, `article_description_name_french`, `article_image`, `article_likes`, `article_views`, `date_time`, `last_updated`, `status`) VALUES
(24, 23, 15, 'Title- En', 'Title- Ar', 'Title- Fr', 'Description En', 'Description Ar', 'Description Fr', NULL, NULL, NULL, '2019-05-27 14:03:46', '2019-05-27 14:03:46', 1);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_article_categories`
--

CREATE TABLE `tbl_article_categories` (
  `id` int(11) NOT NULL,
  `article_category_name` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `article_category_name_arabic` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `article_category_name_french` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `date_time` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `last_updated` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `status` int(11) NOT NULL DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_vietnamese_ci;

--
-- Dumping data for table `tbl_article_categories`
--

INSERT INTO `tbl_article_categories` (`id`, `article_category_name`, `article_category_name_arabic`, `article_category_name_french`, `date_time`, `last_updated`, `status`) VALUES
(23, 'Article Category-en', 'Article Category-Ar', 'Article Category-Fr', '2019-05-27 14:02:55', '2019-05-27 14:02:55', 1);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_article_scholar`
--

CREATE TABLE `tbl_article_scholar` (
  `id` int(11) NOT NULL,
  `scholar_name` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `scholar_name_arabic` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `scholar_name_french` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `date_time` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `last_updated` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `status` int(11) NOT NULL DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `tbl_article_scholar`
--

INSERT INTO `tbl_article_scholar` (`id`, `scholar_name`, `scholar_name_arabic`, `scholar_name_french`, `date_time`, `last_updated`, `status`) VALUES
(15, 'Shaik-En', 'Shaik-Ar', 'Shaik-Fr', '2019-05-27 14:02:11', '2019-05-27 14:02:11', 1);

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
(1, 'Its fine now', '2019-05-15 01:44:28', '2019-05-15 11:02:28', 0),
(2, 'Working', '2019-05-15 01:44:28', '2019-05-15 11:10:05', 0),
(12, 'Test', '2019-05-15 16:02:19', '2019-05-15 16:02:19', 1),
(13, 'Mohammed Abdul Suboor', '2019-05-21 12:06:08', '2019-05-21 06:36:34', 1),
(14, 'erer', '2019-05-25 06:44:22', '2019-05-25 06:44:22', 1);

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
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_vietnamese_ci;

--
-- Dumping data for table `tbl_fatawa_categories`
--

INSERT INTO `tbl_fatawa_categories` (`id`, `category_name`, `category_name_arabic`, `category_name_french`, `date_time`, `last_updated`, `status`) VALUES
(15, 'Salah', 'صلاح', 'Salah - Fr', '2019-05-21 06:48:25', '2019-05-21 06:48:25', 1),
(16, 'Ramadan', 'رمضان', 'Ramadan - Fr', '2019-05-21 08:26:28', '2019-05-21 02:57:37', 1),
(17, 'Zakat', 'زكاة', 'Zakat - Fr', '2019-05-21 08:27:28', '2019-05-21 02:57:46', 1),
(18, 'Muslim Questions', 'أسئلة المسلمين', 'Questions musulmanes', '2019-05-21 11:31:31', '2019-05-21 11:31:31', 1),
(19, 'new cat-en', 'new Category-ar', 'new cat-fr', '2019-05-25 06:04:32', '2019-05-26 03:39:06', 0),
(20, 'hajj-Eng', 'hajj-Ara', 'hajj-Frn', '2019-05-25 06:50:03', '2019-05-26 03:39:11', 0);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_fatwa`
--

CREATE TABLE `tbl_fatwa` (
  `id` int(11) NOT NULL,
  `question_arabic` varchar(100) NOT NULL,
  `question_english` varchar(100) NOT NULL,
  `question_french` varchar(100) NOT NULL,
  `reply_arabic` varchar(100) DEFAULT NULL,
  `reply_english` varchar(100) DEFAULT NULL,
  `reply_french` varchar(100) DEFAULT NULL,
  `fatwa_category_id` int(50) NOT NULL,
  `question_id` int(50) DEFAULT NULL,
  `mufti_name` varchar(100) DEFAULT NULL,
  `mufti_id` int(50) DEFAULT NULL,
  `status` int(11) NOT NULL DEFAULT '1',
  `date_time` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `last_updated` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_fatwa_question`
--

CREATE TABLE `tbl_fatwa_question` (
  `id` int(11) NOT NULL,
  `question` text CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `answer` text CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci,
  `fatwa_category_id` int(11) NOT NULL,
  `questioner_name` varchar(100) DEFAULT NULL,
  `questioner_contactno` varchar(100) DEFAULT NULL,
  `questioner_emailid` varchar(100) DEFAULT NULL,
  `mufti_name` varchar(100) DEFAULT NULL,
  `mufti_id` varchar(100) DEFAULT NULL,
  `status` int(11) NOT NULL DEFAULT '1',
  `date_time` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `last_updated` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `tbl_fatwa_question`
--

INSERT INTO `tbl_fatwa_question` (`id`, `question`, `answer`, `fatwa_category_id`, `questioner_name`, `questioner_contactno`, `questioner_emailid`, `mufti_name`, `mufti_id`, `status`, `date_time`, `last_updated`) VALUES
(15, 'Pillar of Muslim', 'There are Five(5)', 15, 'Souro', '901234567', 'Souro@gmail.com', NULL, NULL, 0, '2019-05-21 11:32:26', '2019-05-25 00:46:31'),
(16, 'How many fasting days', '29 or 30 Days Fasting', 16, 'php developer', '8822113344', 'php@gmail.com', NULL, '12', 2, '2019-05-21 11:39:01', '2019-05-25 19:23:44'),
(17, 'How much amount should be paid to the poor?', '', 17, 'php-Dev', '4499238902', 'pd@gmail.com', NULL, NULL, 1, '2019-05-21 11:40:32', '2019-05-21 06:11:44'),
(20, 'What should I teach my children first, Quran, Iman, or Prayer?', 'Since Iman in Allah and His Messenger is the foundation upon which all actions of worship depend on, the methodology of the Prophet (Peace be upon him) is to fortify the knowledge pertaining to knowing Allah and His Messenger.\r\n\r\nYou will notice that your children will ask you many questions about Allah because they see you mentioning His Name alot and praying to Him. Providing them with the basics that all Muslims should know about Allah is the priority. Quran and prayer are actions of worship that involve memorization and practice, and could be taught hand in hand with the essentials of Belief. Unfortunately, these days we notice many parents stress on Quran recitation more than anything else. We advise you to teach your children a golden rule pertaining to the Belief in Allah which is : Whatever you imagine in your mind is a creation and Allah is not like that.\r\n', 18, NULL, NULL, NULL, NULL, NULL, 2, '2019-05-26 08:53:48', '2019-05-26 08:53:48'),
(21, 'Ash-hadu is an Arabic word that has three meanings. What are they?', 'To know, to believe, and to declare.', 18, NULL, NULL, NULL, NULL, NULL, 2, '2019-05-26 08:58:17', '2019-05-26 08:58:17'),
(22, 'What is the best day of the week, and the best month of the year?', 'Friday and Ramadan', 16, NULL, NULL, NULL, NULL, NULL, 2, '2019-05-26 09:06:34', '2019-05-26 09:06:34'),
(23, 'How do you say Allah’s Attribute of Existence in Arabic and what does it mean?', 'Al-wujud: It means that Allah exists. This is an eternal and everlasting attribute of Allah. Allah exists without a body or place.', 18, NULL, NULL, NULL, NULL, NULL, 2, '2019-05-26 09:08:52', '2019-05-26 09:08:52'),
(24, 'Where was the Prophet Muhammad born?', 'Mecca, Arabia', 18, NULL, NULL, NULL, NULL, NULL, 2, '2019-05-26 09:11:04', '2019-05-26 09:11:04'),
(25, 'Where did the Prophet Muhammad die?', 'Medina, Arabia', 18, NULL, NULL, NULL, NULL, NULL, 2, '2019-05-26 09:11:25', '2019-05-26 09:11:25'),
(26, 'What are the names of the Prophet’s parents?', 'Aminah is his mother’s name, and Abdullah is his father’s name.', 18, NULL, NULL, NULL, NULL, NULL, 2, '2019-05-26 09:11:49', '2019-05-26 09:11:49'),
(27, 'What is the Arabic word for “book”?', 'Kitab is the Arabic word for \"book\"', 18, NULL, NULL, NULL, NULL, NULL, 2, '2019-05-26 09:12:23', '2019-05-26 09:12:23'),
(28, 'What are the angels made from?', 'Angels are made from light; they are not male or female. They have a will and always choose to obey Allah.', 18, NULL, NULL, NULL, NULL, NULL, 2, '2019-05-26 09:13:07', '2019-05-26 09:13:07'),
(29, 'What are the meanings of the word \"nur\" and what does the name of Allah \"An-Nur\" mean?', '\nNur, also spelled ‘noor’ could mean light, or it could have a meaning related to guidance. The meaning of the name of Allah An-Nur is: The One who guides the believers to believe; the One who creates guidance in the hearts of the believers. It is impossible to mean ‘light’ when referred to Allah, because Allah is not like His creations.', 18, NULL, NULL, NULL, NULL, NULL, 2, '2019-05-26 09:13:55', '2019-05-26 09:13:55'),
(30, 'How many surahs are there in the Qur’an?', '114 surahs.', 18, NULL, NULL, NULL, NULL, NULL, 2, '2019-05-26 09:14:28', '2019-05-26 09:14:28'),
(31, 'What did the famous Hanafi imam At-Tahawiyy say about Allah in his book called \"Al-Aqeedah\" (Belief)?', 'Imam At-Tahawiyy, a famous Muslim scholar summarized the Muslim belief in a book called ‘Al-Aqeedah’ over 1,000 years ago. This book is taught in Muslim universities and mosques worldwide. In it he said that Allah is not contained by the six directions: up, down, right, left, front, and back.', 18, NULL, NULL, NULL, NULL, NULL, 2, '2019-05-26 09:37:47', '2019-05-26 09:37:47'),
(32, 'How old was Prophet Muhammad when he received Prophethood, and where was He?', NULL, 18, 'aleem.pasha@jdplc.com', '9491205667', 'Abdul Aleem', NULL, NULL, 1, '2019-05-26 12:28:07', '2019-05-26 12:28:07');

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
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `tbl_mufti_names`
--

INSERT INTO `tbl_mufti_names` (`id`, `mufti_name`, `mufti_name_arabic`, `mufti_name_french`, `date_time`, `last_updated`, `status`) VALUES
(12, 'Mufti Muhammad Akhtar Raza Khan Qaadiri Al Azhari', 'مفتي محمد اختر رضا خان قدري الازهرى', 'Mufti Muhammad Akhtar Raza Khan Qaadiri Al Azhari', '2019-05-19 01:46:34', '2019-05-25 19:16:05', 1),
(13, 'Maulana Mahmood Madani', 'مولانا محمود مدني', 'Maulana Mahmood Madani', '2019-05-19 01:46:44', '2019-05-25 19:16:54', 1),
(14, 'Shaik Saleh al fouzan', 'الشيخ صالح الفوزان', 'Shaik Saleh al fouzan', '2019-05-19 02:09:27', '2019-05-19 02:09:27', 1),
(15, 'Zakir Naik', 'ذاكر نايك', 'Zakir Naik', '2019-05-25 06:03:59', '2019-05-25 19:18:29', 1),
(16, 'Sheikh Ahmad Muhammad al Tayeb', 'الشيخ احمد محمد الطيب', 'Sheikh Ahmad Muhammad al Tayeb', '2019-05-25 06:49:33', '2019-05-25 19:21:23', 1);

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
(5, 10, 7, 5, 'Surah Al-Fatiha', 'سورة الفاتحة', 'Sourate Al-Fatiha', 'This is Surah Al-Fatiha', '612574989%3Fsecret_token%3Ds-QzwIV', '2019-05-17 13:01:02', '2019-05-17 07:35:28', 1),
(6, 9, 6, 6, ' Surah Al-Baqarah', 'سورة البقرة', 'Sourate Al-Baqarah', 'This is Surah Al-Baqarah', '612574983%3Fsecret_token%3Ds-yheYl', '2019-05-17 13:07:16', '2019-05-17 13:07:16', 1),
(7, 8, 8, 5, 'Surah Namal-EN', 'Surah Namal-AR', 'Surah Namal-FR', 'This is the one of the Surah', '612574974%3Fsecret_token%3Ds-i4PlT', '2019-05-21 12:09:30', '2019-05-21 12:09:30', 1),
(8, 12, 9, 7, 'surah namal -en', 'surah namal-ar', 'surah namal-fr', 'test', '612574989?secret_token=s-QzwIV', '2019-05-25 06:49:05', '2019-05-25 06:49:05', 1);

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
(5, 'Tajweed Recitations Updated', 'مصحف التجويد محدث', 'Récitations de Tajweed mis à jour', '2019-05-17 10:59:14', '2019-05-17 05:29:51', 1),
(6, 'Tarawih Recitations', 'قراءة التراويح', 'Tarawih Récitations', '2019-05-17 12:53:35', '2019-05-17 12:53:35', 1),
(7, 'Tarteel Recitations', 'ترتيل تلاوات', 'Tarteel Récitations', '2019-05-17 12:54:19', '2019-05-17 12:54:19', 1),
(8, 'Tajweed Recitations -En', 'Tajweed Recitations-AR', 'Tajweed Recitations-FR', '2019-05-21 12:07:54', '2019-05-21 12:07:54', 1),
(9, 'English Type', 'Arabic Type', 'French Type', '2019-05-25 06:45:35', '2019-05-25 06:45:35', 1);

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
(8, 'Ahmed ibn Ali al-Ajmy Updated', 'احمد بن علي العجمي محدث', 'Ahmed ibn Ali al-Ajmy Mis à jour', '2019-05-17 10:04:25', '2019-05-17 05:04:49', 1),
(9, 'Abd-Latif-abu-alkhair -Shaik', 'عبد اللطيف أبو الخير', 'abd-latif-abou-alkhayr FR', '2019-05-17 12:48:25', '2019-05-21 06:37:05', 1),
(10, 'Nabil-moatasim', 'نبيل-المعتصم', 'Nabil-moatasim FR', '2019-05-17 12:50:17', '2019-05-17 07:27:57', 1),
(11, 'Houssayn kosson', 'حسين كوسون', 'houssayn kosson FR', '2019-05-17 12:51:32', '2019-05-17 07:28:04', 1),
(12, 'my-en', 'my-arabic', 'my-fr', '2019-05-25 06:44:35', '2019-05-25 01:14:44', 1);

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
(4, 'Hafs Updated ', 'حفص تحديث', 'Hafs FR mis à jour', '2019-05-17 11:19:11', '2019-05-17 05:51:55', 1),
(5, 'Warsh', 'وارش', 'Warsh  FR', '2019-05-17 12:55:22', '2019-05-17 07:26:41', 1),
(6, 'Shoba', 'شوبا', 'Shoba FR', '2019-05-17 12:56:16', '2019-05-17 07:26:49', 1),
(7, 'Riwaya-En', 'Riwaya-Ar', 'Riwaya-Fr', '2019-05-25 06:46:00', '2019-05-25 06:46:00', 1);

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
(1, 'admin', 'admin@admin', 'e10adc3949ba59abbe56e057f20f883e', '1');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbl_article`
--
ALTER TABLE `tbl_article`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_article_categories`
--
ALTER TABLE `tbl_article_categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_article_scholar`
--
ALTER TABLE `tbl_article_scholar`
  ADD PRIMARY KEY (`id`);

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
-- Indexes for table `tbl_fatwa`
--
ALTER TABLE `tbl_fatwa`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_fatwa_question`
--
ALTER TABLE `tbl_fatwa_question`
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
-- AUTO_INCREMENT for table `tbl_article`
--
ALTER TABLE `tbl_article`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT for table `tbl_article_categories`
--
ALTER TABLE `tbl_article_categories`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT for table `tbl_article_scholar`
--
ALTER TABLE `tbl_article_scholar`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `tbl_book_authors`
--
ALTER TABLE `tbl_book_authors`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `tbl_fatawa_categories`
--
ALTER TABLE `tbl_fatawa_categories`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `tbl_fatwa`
--
ALTER TABLE `tbl_fatwa`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tbl_fatwa_question`
--
ALTER TABLE `tbl_fatwa_question`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=34;

--
-- AUTO_INCREMENT for table `tbl_mufti_names`
--
ALTER TABLE `tbl_mufti_names`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `tbl_quran`
--
ALTER TABLE `tbl_quran`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `tbl_quran_recitation_type`
--
ALTER TABLE `tbl_quran_recitation_type`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `tbl_quran_reciters`
--
ALTER TABLE `tbl_quran_reciters`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `tbl_quran_riways`
--
ALTER TABLE `tbl_quran_riways`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `tbl_users`
--
ALTER TABLE `tbl_users`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
