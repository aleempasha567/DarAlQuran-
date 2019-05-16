-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: May 16, 2019 at 07:52 AM
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
(1, 'It\'s fine now', '2019-05-15 12:44:28', '2019-05-15 22:02:28', 0),
(2, 'Working', '2019-05-15 12:44:28', '2019-05-15 22:10:05', 0),
(12, 'Test', '2019-05-16 03:02:19', '2019-05-16 03:02:19', 1);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_quran_recitation_type`
--

CREATE TABLE `tbl_quran_recitation_type` (
  `id` int(11) NOT NULL,
  `recitation_type_name` varchar(100) NOT NULL,
  `date_time` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `last_updated` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `status` int(11) NOT NULL DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `tbl_quran_recitation_type`
--

INSERT INTO `tbl_quran_recitation_type` (`id`, `recitation_type_name`, `date_time`, `last_updated`, `status`) VALUES
(1, 'One1', '2019-05-16 06:54:10', '2019-05-16 01:24:40', 1),
(2, '2', '2019-05-16 07:07:11', '2019-05-16 07:07:11', 1);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_quran_reciters`
--

CREATE TABLE `tbl_quran_reciters` (
  `id` int(11) NOT NULL,
  `reciter_name` varchar(100) NOT NULL,
  `date_time` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `last_updated` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `status` int(11) NOT NULL DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `tbl_quran_reciters`
--

INSERT INTO `tbl_quran_reciters` (`id`, `reciter_name`, `date_time`, `last_updated`, `status`) VALUES
(1, 'Test1', '2019-05-16 06:01:10', '2019-05-16 00:39:12', 0),
(2, 'One', '2019-05-16 06:52:40', '2019-05-16 06:52:40', 1);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_quran_riways`
--

CREATE TABLE `tbl_quran_riways` (
  `id` int(11) NOT NULL,
  `riwaya_name` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `date_time` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `last_updated` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `status` int(11) NOT NULL DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `tbl_quran_riways`
--

INSERT INTO `tbl_quran_riways` (`id`, `riwaya_name`, `date_time`, `last_updated`, `status`) VALUES
(1, '2', '2019-05-16 07:34:33', '2019-05-16 02:05:47', 0);

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
-- AUTO_INCREMENT for table `tbl_quran_recitation_type`
--
ALTER TABLE `tbl_quran_recitation_type`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `tbl_quran_reciters`
--
ALTER TABLE `tbl_quran_reciters`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `tbl_quran_riways`
--
ALTER TABLE `tbl_quran_riways`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `tbl_users`
--
ALTER TABLE `tbl_users`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
