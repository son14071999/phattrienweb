-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 17, 2020 at 05:43 AM
-- Server version: 10.4.13-MariaDB
-- PHP Version: 7.4.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `quanlytieuchi`
--

-- --------------------------------------------------------

--
-- Table structure for table `account`
--

CREATE TABLE `account` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `rule` int(11) NOT NULL DEFAULT 0,
  `name` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `ma_truong` varchar(10) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `account`
--

INSERT INTO `account` (`id`, `password`, `email`, `rule`, `name`, `ma_truong`) VALUES
(1, '$2y$10$.5g5Wxsj3xN0GoylmfjLaehKEm7Ynk.H8M42CDyoLnSqGsIEKCDC2', 'son1999@gmail.com', 0, 'son', 'ueb'),
(2, '$2y$10$RYWbyRnPz/qRGvHQJHVJTeqomUl/eMp6thCUrDTv29CrR1NMCARjy', 'hanh1999@gmail.com', 0, 'hanh', 'ued'),
(3, '$2y$10$i2f4F9Dv2aNmwBJgCh4Lje69jG6ufzOZayHk1mWGtUj8P.yLwcC7W', 'xuanAnh1999@gmail.com', 0, 'xuanAnh', 'uet'),
(4, '$2y$10$DmBpHcivCxwNNsxDPqs3jeHNmAT5F1ALjHLGIaKG1m6LjB91v22Ti', 'long1999@gmail.com', 0, 'long', 'ulis'),
(5, '$2y$10$o8LB4roqtepAV1xTueG2yu2cNDzHZZvytqbbmN2YBDkMtjDyRmwyC', 'dung1999@gmail.com', 0, 'dung', 'ussh'),
(6, '$2y$10$1NBcreNHNLYGJXCd/aJodOybGBHrpT57hhqmVIXJekCzvyWcVFDFq', 'admin@gmail.com', 1, 'admin', 'hus'),
(7, '$2y$10$RZnOUlD/bpYqe9uwC8j/ouvgkm9x2EpaUYXUyiYedsxmHIu1/6eU6', 'sontr1999@gmail.com', 0, 'sontr', 'vju'),
(8, '$2y$10$TA3pb4bjUHvPVIGx6mEP..GXMg1MWFrYmvekmMxFcTzd4sYJjy/Q6', 'user1999@gmail.com', 0, 'guest1', 'hus');

-- --------------------------------------------------------

--
-- Table structure for table `daihan`
--

CREATE TABLE `daihan` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `ma_tc` int(10) UNSIGNED NOT NULL,
  `nam` int(11) NOT NULL,
  `xong` bigint(20) NOT NULL,
  `tong` bigint(20) NOT NULL,
  `ma_truong` varchar(10) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `daihan`
--

INSERT INTO `daihan` (`id`, `ma_tc`, `nam`, `xong`, `tong`, `ma_truong`) VALUES
(5, 1, 2025, 35600, 50000, 'hus'),
(6, 1, 2025, 44000, 45000, 'ueb'),
(7, 1, 2025, 71231, 70000, 'ued'),
(8, 1, 2025, 49000, 53000, 'uet'),
(9, 1, 2025, 50000, 65000, 'ulis'),
(10, 1, 2025, 71231, 70000, 'ussh'),
(11, 1, 2025, 18000, 20000, 'vju'),
(12, 2, 2025, 424, 500, 'hus'),
(13, 2, 2025, 600, 650, 'ueb'),
(14, 2, 2025, 980, 1000, 'ued'),
(15, 2, 2025, 721, 700, 'uet'),
(16, 2, 2025, 672, 700, 'ulis'),
(17, 2, 2025, 987, 1000, 'ussh'),
(18, 2, 2025, 203, 200, 'vju'),
(19, 3, 2025, 57, 70, 'hus'),
(20, 3, 2025, 63, 70, 'ueb'),
(21, 3, 2025, 70, 80, 'ued'),
(22, 3, 2025, 50, 70, 'uet'),
(23, 3, 2025, 88, 90, 'ulis'),
(24, 3, 2025, 59, 70, 'ussh'),
(25, 3, 2025, 65, 70, 'vju'),
(26, 4, 2025, 19, 25, 'hus'),
(27, 4, 2025, 15, 25, 'ueb'),
(28, 4, 2025, 15, 25, 'ued'),
(29, 4, 2025, 10, 25, 'uet'),
(30, 4, 2025, 20, 25, 'ulis'),
(31, 4, 2025, 15, 25, 'ussh'),
(32, 4, 2025, 10, 15, 'vju'),
(33, 5, 2025, 18, 30, 'hus'),
(34, 5, 2025, 20, 30, 'ueb'),
(35, 5, 2025, 23, 30, 'ued'),
(36, 5, 2025, 25, 30, 'uet'),
(37, 5, 2025, 15, 30, 'ulis'),
(38, 5, 2025, 21, 30, 'ussh'),
(39, 5, 2025, 12, 20, 'vju'),
(40, 6, 2025, 5, 10, 'hus'),
(41, 6, 2025, 10, 15, 'ueb'),
(42, 6, 2025, 5, 15, 'ued'),
(43, 6, 2025, 5, 10, 'uet'),
(44, 6, 2025, 13, 15, 'ulis'),
(45, 6, 2025, 12, 15, 'ussh'),
(46, 6, 2025, 5, 10, 'vju'),
(47, 7, 2025, 82, 95, 'hus'),
(48, 7, 2025, 80, 95, 'ueb'),
(49, 7, 2025, 90, 95, 'ued'),
(50, 7, 2025, 90, 98, 'uet'),
(51, 7, 2025, 92, 95, 'ulis'),
(52, 7, 2025, 90, 97, 'ussh'),
(53, 7, 2025, 97, 99, 'vju'),
(54, 8, 2025, 91, 100, 'hus'),
(55, 8, 2025, 91, 100, 'ueb'),
(56, 8, 2025, 95, 100, 'ued'),
(57, 8, 2025, 110, 100, 'uet'),
(58, 8, 2025, 105, 100, 'ulis'),
(59, 8, 2025, 98, 100, 'ussh'),
(60, 8, 2025, 90, 100, 'vju'),
(61, 9, 2025, 192, 200, 'hus'),
(62, 9, 2025, 100, 150, 'ueb'),
(63, 9, 2025, 141, 200, 'ued'),
(64, 9, 2025, 283, 300, 'uet'),
(65, 9, 2025, 70, 100, 'ulis'),
(66, 9, 2025, 143, 200, 'ussh'),
(67, 9, 2025, 143, 150, 'vju'),
(68, 10, 2025, 30, 50, 'hus'),
(69, 10, 2025, 20, 40, 'ueb'),
(70, 10, 2025, 15, 20, 'ued'),
(71, 10, 2025, 73, 100, 'uet'),
(72, 10, 2025, 5, 10, 'ulis'),
(73, 10, 2025, 30, 50, 'ussh'),
(74, 10, 2025, 25, 30, 'vju'),
(75, 11, 2025, 37, 50, 'hus'),
(76, 11, 2025, 32, 60, 'ueb'),
(77, 11, 2025, 42, 50, 'ued'),
(78, 11, 2025, 42, 70, 'uet'),
(79, 11, 2025, 39, 50, 'ulis'),
(80, 11, 2025, 43, 55, 'ussh'),
(81, 11, 2025, 39, 58, 'vju'),
(82, 12, 2025, 21000, 20000, 'hus'),
(83, 12, 2025, 74200, 75000, 'ueb'),
(84, 12, 2025, 52300, 53200, 'ued'),
(85, 12, 2025, 73982, 73819, 'uet'),
(86, 12, 2025, 49500, 50000, 'ulis'),
(87, 12, 2025, 52131, 50000, 'ussh'),
(88, 12, 2025, 75000, 70000, 'vju'),
(89, 13, 2025, 9100, 10000, 'hus'),
(90, 13, 2025, 8100, 10000, 'ueb'),
(91, 13, 2025, 9200, 10000, 'ued'),
(92, 13, 2025, 9218, 10000, 'uet'),
(93, 13, 2025, 8720, 9000, 'ulis'),
(94, 13, 2025, 8520, 10000, 'ussh'),
(95, 13, 2025, 9832, 10000, 'vju'),
(96, 14, 2025, 210, 200, 'hus'),
(97, 14, 2025, 170, 200, 'ueb'),
(98, 14, 2025, 190, 230, 'ued'),
(99, 14, 2025, 150, 180, 'uet'),
(100, 14, 2025, 130, 170, 'ulis'),
(101, 14, 2025, 203, 230, 'ussh'),
(102, 14, 2025, 50, 100, 'vju'),
(103, 15, 2025, 14, 25, 'hus'),
(104, 15, 2025, 16, 25, 'ueb'),
(105, 15, 2025, 12, 20, 'ued'),
(106, 15, 2025, 32, 40, 'uet'),
(107, 15, 2025, 19, 28, 'ulis'),
(108, 15, 2025, 10, 25, 'ussh'),
(109, 15, 2025, 43, 50, 'vju'),
(110, 16, 2025, 1342, 2000, 'hus'),
(111, 16, 2025, 1458, 2350, 'ueb'),
(112, 16, 2025, 2403, 3520, 'ued'),
(113, 16, 2025, 2000, 2900, 'uet'),
(114, 16, 2025, 1900, 2400, 'ulis'),
(115, 16, 2025, 2500, 3000, 'ussh'),
(116, 16, 2025, 2800, 3000, 'vju'),
(117, 17, 2025, 50, 75, 'hus'),
(118, 17, 2025, 50, 80, 'ueb'),
(119, 17, 2025, 70, 85, 'ued'),
(120, 17, 2025, 50, 70, 'uet'),
(121, 17, 2025, 70, 85, 'ulis'),
(122, 17, 2025, 60, 80, 'ussh'),
(123, 17, 2025, 55, 75, 'vju'),
(124, 18, 2025, 25, 20, 'hus'),
(125, 18, 2025, 25, 25, 'ueb'),
(126, 18, 2025, 20, 25, 'ued'),
(127, 18, 2025, 35, 30, 'uet'),
(128, 18, 2025, 20, 20, 'ulis'),
(129, 18, 2025, 18, 20, 'ussh'),
(130, 18, 2025, 25, 30, 'vju'),
(131, 19, 2025, 80, 100, 'hus'),
(132, 19, 2025, 92, 100, 'ueb'),
(133, 19, 2025, 88, 100, 'ued'),
(134, 19, 2025, 78, 100, 'uet'),
(135, 19, 2025, 89, 100, 'ulis'),
(136, 19, 2025, 91, 100, 'ussh'),
(137, 19, 2025, 70, 100, 'vju'),
(138, 20, 2025, 1700, 1500, 'hus'),
(139, 20, 2025, 1500, 2000, 'ueb'),
(140, 20, 2025, 1890, 2500, 'ued'),
(141, 20, 2025, 1800, 2300, 'uet'),
(142, 20, 2025, 2000, 2500, 'ulis'),
(143, 20, 2025, 1500, 2500, 'ussh'),
(144, 20, 2025, 4200, 4000, 'vju'),
(145, 21, 2025, 250, 500, 'hus'),
(146, 21, 2025, 400, 1000, 'ueb'),
(147, 21, 2025, 600, 1000, 'ued'),
(148, 21, 2025, 300, 800, 'uet'),
(149, 21, 2025, 800, 1000, 'ulis'),
(150, 21, 2025, 400, 900, 'ussh'),
(151, 21, 2025, 850, 1000, 'vju'),
(152, 22, 2025, 67, 70, 'hus'),
(153, 22, 2025, 70, 75, 'ueb'),
(154, 22, 2025, 70, 75, 'ued'),
(155, 22, 2025, 70, 80, 'uet'),
(156, 22, 2025, 72, 80, 'ulis'),
(157, 22, 2025, 70, 80, 'ussh'),
(158, 22, 2025, 55, 75, 'vju'),
(159, 23, 2025, 1200, 2000, 'hus'),
(160, 23, 2025, 1200, 2000, 'ueb'),
(161, 23, 2025, 1000, 1500, 'ued'),
(162, 23, 2025, 600, 1000, 'uet'),
(163, 23, 2025, 1000, 1500, 'ulis'),
(164, 23, 2025, 1002, 1550, 'ussh'),
(165, 23, 2025, 300, 1000, 'vju'),
(167, 25, 2035, 20, 100, 'ussh');

-- --------------------------------------------------------

--
-- Table structure for table `donvi`
--

CREATE TABLE `donvi` (
  `id` int(10) UNSIGNED NOT NULL,
  `ten` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `donvi`
--

INSERT INTO `donvi` (`id`, `ten`) VALUES
(1, 'đào tạo'),
(2, 'công tác sinh viên'),
(3, 'tccb'),
(4, 'cttthssv'),
(5, 'dbcl'),
(6, 'khcn'),
(8, 'văn phòng'),
(9, 'htpt'),
(10, 'khtc');

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
(4, '2020_11_03_140938_create_truong_table', 1),
(5, '2020_11_03_140959_create_donvi_table', 1),
(6, '2020_11_03_141012_create_tieuchi_table', 1),
(7, '2020_11_03_141029_create_daihan_table', 1),
(8, '2020_11_03_141042_create_nganhan_table', 1),
(9, '2020_11_03_141107_create_account_table', 1);

-- --------------------------------------------------------

--
-- Table structure for table `nganhan`
--

CREATE TABLE `nganhan` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `ma_tc` bigint(20) UNSIGNED NOT NULL,
  `xong` bigint(20) NOT NULL,
  `tong` bigint(20) NOT NULL,
  `nam` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `nganhan`
--

INSERT INTO `nganhan` (`id`, `ma_tc`, `xong`, `tong`, `nam`) VALUES
(21, 5, 9000, 10000, 2020),
(22, 5, 10500, 10000, 2021),
(23, 5, 10100, 10000, 2022),
(24, 5, 6000, 10000, 2023),
(25, 5, 0, 10000, 2024),
(26, 6, 9377, 9000, 2020),
(27, 6, 8000, 9000, 2021),
(28, 6, 9123, 9000, 2022),
(29, 6, 8300, 9000, 2023),
(30, 6, 9200, 9000, 2024),
(31, 7, 13920, 13000, 2020),
(32, 7, 14111, 14211, 2021),
(33, 7, 15214, 15121, 2022),
(34, 7, 16212, 15000, 2023),
(35, 7, 11774, 12668, 2024),
(36, 8, 8000, 9000, 2020),
(37, 8, 10000, 10144, 2021),
(38, 8, 11231, 10000, 2022),
(39, 8, 11231, 12000, 2023),
(40, 8, 8538, 11856, 2024),
(41, 9, 10000, 11000, 2020),
(42, 9, 11000, 13000, 2021),
(43, 9, 12000, 13500, 2022),
(44, 9, 10000, 13500, 2023),
(45, 9, 7000, 14000, 2024),
(46, 10, 12313, 12000, 2020),
(47, 10, 13788, 14000, 2021),
(48, 10, 14872, 14000, 2022),
(49, 10, 15231, 15000, 2023),
(50, 10, 15027, 15000, 2024),
(51, 11, 3921, 4000, 2020),
(52, 11, 3523, 4000, 2021),
(53, 11, 3899, 4000, 2022),
(54, 11, 3928, 4000, 2023),
(55, 11, 2729, 4000, 2024),
(56, 12, 80, 80, 2020),
(57, 12, 92, 90, 2021),
(58, 12, 89, 92, 2022),
(59, 12, 99, 100, 2023),
(60, 12, 64, 138, 2024),
(61, 13, 123, 120, 2020),
(62, 13, 129, 130, 2021),
(63, 13, 138, 140, 2022),
(64, 13, 112, 120, 2023),
(65, 13, 98, 140, 2024),
(66, 14, 210, 200, 1995),
(67, 14, 199, 200, 1996),
(68, 14, 180, 200, 1997),
(69, 14, 213, 200, 1998),
(70, 14, 178, 200, 1999),
(71, 15, 138, 140, 2020),
(72, 15, 142, 140, 2021),
(73, 15, 150, 140, 2022),
(74, 15, 137, 140, 2023),
(75, 15, 154, 140, 2024),
(76, 16, 132, 140, 2020),
(77, 16, 134, 140, 2021),
(78, 16, 137, 140, 2022),
(79, 16, 129, 140, 2023),
(80, 16, 140, 140, 2024),
(81, 17, 198, 200, 2020),
(82, 17, 202, 200, 2021),
(83, 17, 204, 200, 2022),
(84, 17, 195, 200, 2023),
(85, 17, 188, 200, 2024),
(86, 18, 31, 40, 2020),
(87, 18, 39, 40, 2021),
(88, 18, 42, 40, 2022),
(89, 18, 43, 40, 2023),
(90, 18, 48, 40, 2024),
(91, 19, 10, 14, 2020),
(92, 19, 12, 14, 2021),
(93, 19, 13, 14, 2022),
(94, 19, 12, 14, 2023),
(95, 19, 10, 14, 2024),
(96, 20, 13, 14, 2020),
(97, 20, 14, 14, 2021),
(98, 20, 12, 14, 2022),
(99, 20, 12, 14, 2023),
(100, 20, 12, 14, 2024),
(101, 21, 15, 16, 2020),
(102, 21, 14, 16, 2021),
(103, 21, 14, 16, 2022),
(104, 21, 15, 16, 2023),
(105, 21, 12, 16, 2024),
(106, 22, 10, 14, 2020),
(107, 22, 10, 14, 2021),
(108, 22, 8, 14, 2022),
(109, 22, 12, 14, 2023),
(110, 22, 10, 14, 2024),
(111, 23, 17, 15, 2020),
(112, 23, 18, 18, 2021),
(113, 23, 18, 20, 2022),
(114, 23, 18, 20, 2023),
(115, 23, 17, 17, 2024),
(116, 24, 10, 14, 2020),
(117, 24, 11, 14, 2021),
(118, 24, 12, 14, 2022),
(119, 24, 13, 14, 2023),
(120, 24, 13, 14, 2024),
(121, 25, 13, 14, 2020),
(122, 25, 12, 14, 2021),
(123, 25, 13, 14, 2022),
(124, 25, 15, 14, 2023),
(125, 25, 12, 14, 2024),
(126, 26, 4, 5, 2020),
(127, 26, 3, 5, 2021),
(128, 26, 4, 5, 2022),
(129, 26, 5, 5, 2023),
(130, 26, 3, 5, 2024),
(131, 27, 3, 5, 2020),
(132, 27, 2, 5, 2021),
(133, 27, 3, 5, 2022),
(134, 27, 4, 5, 2023),
(135, 27, 3, 5, 2024),
(136, 28, 3, 5, 2020),
(137, 28, 3, 5, 2021),
(138, 28, 2, 5, 2022),
(139, 28, 4, 5, 2023),
(140, 28, 3, 5, 2024),
(141, 29, 2, 5, 2020),
(142, 29, 1, 5, 2021),
(143, 29, 0, 5, 2022),
(144, 29, 3, 5, 2023),
(145, 29, 4, 5, 2024),
(146, 30, 3, 5, 2020),
(147, 30, 4, 5, 2021),
(148, 30, 4, 5, 2022),
(149, 30, 5, 5, 2023),
(150, 30, 4, 5, 2024),
(151, 31, 3, 5, 2020),
(152, 31, 2, 5, 2021),
(153, 31, 4, 5, 2022),
(154, 31, 3, 5, 2023),
(155, 31, 3, 5, 2024),
(156, 32, 2, 3, 2020),
(157, 32, 2, 3, 2021),
(158, 32, 2, 3, 2022),
(159, 32, 2, 3, 2023),
(160, 32, 2, 3, 2024),
(161, 33, 2, 6, 2020),
(162, 33, 3, 6, 2021),
(163, 33, 3, 6, 2022),
(164, 33, 5, 6, 2023),
(165, 33, 5, 6, 2024),
(166, 34, 3, 6, 2020),
(167, 34, 3, 6, 2021),
(168, 34, 5, 6, 2022),
(169, 34, 4, 6, 2023),
(170, 34, 5, 6, 2024),
(171, 35, 5, 6, 2020),
(172, 35, 3, 6, 2021),
(173, 35, 5, 6, 2022),
(174, 35, 5, 6, 2023),
(175, 35, 5, 6, 2024),
(176, 36, 5, 6, 2020),
(177, 36, 5, 6, 2021),
(178, 36, 5, 6, 2022),
(179, 36, 5, 6, 2023),
(180, 36, 5, 6, 2024),
(181, 37, 2, 6, 2020),
(182, 37, 1, 6, 2021),
(183, 37, 5, 6, 2022),
(184, 37, 5, 6, 2023),
(185, 37, 2, 6, 2024),
(186, 38, 3, 6, 2020),
(187, 38, 3, 6, 2021),
(188, 38, 5, 6, 2022),
(189, 38, 4, 6, 2023),
(190, 38, 6, 6, 2024),
(191, 39, 2, 4, 2020),
(192, 39, 3, 4, 2021),
(193, 39, 1, 4, 2022),
(194, 39, 1, 4, 2023),
(195, 39, 4, 4, 2024),
(196, 40, 1, 2, 2020),
(197, 40, 2, 2, 2021),
(198, 40, 0, 2, 2022),
(199, 40, 1, 2, 2023),
(200, 40, 1, 2, 2024),
(201, 41, 2, 3, 2020),
(202, 41, 1, 3, 2021),
(203, 41, 2, 3, 2022),
(204, 41, 3, 3, 2023),
(205, 41, 2, 3, 2024),
(206, 42, 1, 3, 2020),
(207, 42, 1, 3, 2021),
(208, 42, 1, 3, 2022),
(209, 42, 0, 4, 2023),
(210, 42, 2, 2, 2024),
(211, 43, 1, 2, 2020),
(212, 43, 1, 2, 2021),
(213, 43, 0, 2, 2022),
(214, 43, 2, 2, 2023),
(215, 43, 1, 2, 2024),
(216, 44, 2, 2, 2020),
(217, 44, 2, 3, 2021),
(218, 44, 3, 3, 2022),
(219, 44, 3, 4, 2023),
(220, 44, 3, 3, 2024),
(221, 45, 1, 4, 2020),
(222, 45, 2, 2, 2021),
(223, 45, 2, 3, 2022),
(224, 45, 3, 4, 2023),
(225, 45, 4, 2, 2024),
(226, 46, 1, 2, 2020),
(227, 46, 2, 2, 2021),
(228, 46, 2, 2, 2022),
(229, 46, 0, 2, 2023),
(230, 46, 0, 2, 2024),
(231, 47, 20, 19, 2020),
(232, 47, 18, 19, 2021),
(233, 47, 17, 19, 2022),
(234, 47, 15, 19, 2023),
(235, 47, 12, 19, 2024),
(236, 48, 16, 19, 2020),
(237, 48, 15, 19, 2021),
(238, 48, 14, 19, 2022),
(239, 48, 19, 19, 2023),
(240, 48, 16, 19, 2024),
(241, 49, 15, 19, 2020),
(242, 49, 18, 19, 2021),
(243, 49, 19, 19, 2022),
(244, 49, 20, 19, 2023),
(245, 49, 18, 19, 2024),
(246, 50, 20, 19, 2020),
(247, 50, 18, 19, 2021),
(248, 50, 15, 19, 2022),
(249, 50, 15, 20, 2023),
(250, 50, 21, 21, 2024),
(251, 51, 19, 19, 2020),
(252, 51, 15, 19, 2021),
(253, 51, 18, 19, 2022),
(254, 51, 19, 19, 2023),
(255, 51, 21, 19, 2024),
(256, 52, 18, 19, 2020),
(257, 52, 16, 19, 2021),
(258, 52, 20, 22, 2022),
(259, 52, 19, 23, 2023),
(260, 52, 17, 14, 2024),
(261, 53, 20, 19, 2020),
(262, 53, 20, 18, 2021),
(263, 53, 18, 19, 2022),
(264, 53, 19, 22, 2023),
(265, 53, 20, 21, 2024),
(266, 54, 20, 18, 2020),
(267, 54, 20, 22, 2021),
(268, 54, 20, 24, 2022),
(269, 54, 25, 26, 2023),
(270, 54, 6, 10, 2024),
(271, 55, 19, 20, 2020),
(272, 55, 19, 20, 2021),
(273, 55, 20, 20, 2022),
(274, 55, 19, 20, 2023),
(275, 55, 14, 20, 2024),
(276, 56, 19, 20, 2020),
(277, 56, 20, 20, 2021),
(278, 56, 19, 19, 2022),
(279, 56, 20, 20, 2023),
(280, 56, 17, 21, 2024),
(281, 57, 21, 20, 2020),
(282, 57, 20, 20, 2021),
(283, 57, 22, 20, 2022),
(284, 57, 21, 20, 2023),
(285, 57, 26, 20, 2024),
(286, 58, 21, 20, 2020),
(287, 58, 21, 20, 2021),
(288, 58, 21, 20, 2022),
(289, 58, 21, 20, 2023),
(290, 58, 21, 20, 2024),
(291, 59, 19, 20, 2020),
(292, 59, 19, 20, 2021),
(293, 59, 18, 20, 2022),
(294, 59, 20, 20, 2023),
(295, 59, 22, 20, 2024),
(296, 60, 19, 20, 2020),
(297, 60, 18, 20, 2021),
(298, 60, 19, 20, 2022),
(299, 60, 17, 20, 2023),
(300, 60, 17, 20, 2024),
(301, 61, 31, 40, 2020),
(302, 61, 39, 40, 2021),
(303, 61, 35, 40, 2022),
(304, 61, 38, 40, 2023),
(305, 61, 49, 40, 2024),
(306, 62, 20, 30, 2020),
(307, 62, 29, 30, 2021),
(308, 62, 15, 30, 2022),
(309, 62, 23, 30, 2023),
(310, 62, 13, 30, 2024),
(311, 63, 30, 40, 2020),
(312, 63, 40, 40, 2021),
(313, 63, 22, 30, 2022),
(314, 63, 31, 37, 2023),
(315, 63, 18, 53, 2024),
(316, 64, 39, 60, 2020),
(317, 64, 59, 60, 2021),
(318, 64, 65, 60, 2022),
(319, 64, 46, 60, 2023),
(320, 64, 74, 60, 2024),
(321, 65, 10, 20, 2020),
(322, 65, 12, 20, 2021),
(323, 65, 14, 20, 2022),
(324, 65, 19, 20, 2023),
(325, 65, 15, 20, 2024),
(326, 66, 32, 40, 2020),
(327, 66, 31, 40, 2021),
(328, 66, 23, 40, 2022),
(329, 66, 32, 40, 2023),
(330, 66, 25, 40, 2024),
(331, 67, 32, 30, 2020),
(332, 67, 23, 30, 2021),
(333, 67, 32, 30, 2022),
(334, 67, 24, 30, 2023),
(335, 67, 32, 30, 2024),
(336, 68, 4, 10, 2020),
(337, 68, 5, 10, 2021),
(338, 68, 6, 10, 2022),
(339, 68, 7, 10, 2023),
(340, 68, 8, 10, 2024),
(341, 69, 3, 8, 2020),
(342, 69, 4, 9, 2021),
(343, 69, 6, 9, 2022),
(344, 69, 3, 9, 2023),
(345, 69, 4, 5, 2024),
(346, 70, 3, 4, 2020),
(347, 70, 2, 4, 2021),
(348, 70, 3, 4, 2022),
(349, 70, 1, 4, 2023),
(350, 70, 6, 4, 2024),
(351, 71, 13, 20, 2020),
(352, 71, 19, 20, 2021),
(353, 71, 21, 20, 2022),
(354, 71, 15, 20, 2023),
(355, 71, 5, 20, 2024),
(356, 72, 1, 2, 2020),
(357, 72, 0, 2, 2021),
(358, 72, 2, 2, 2022),
(359, 72, 1, 2, 2023),
(360, 72, 1, 2, 2024),
(361, 73, 3, 10, 2020),
(362, 73, 5, 10, 2021),
(363, 73, 7, 10, 2022),
(364, 73, 9, 10, 2023),
(365, 73, 6, 10, 2024),
(366, 74, 3, 5, 2020),
(367, 74, 6, 5, 2021),
(368, 74, 3, 5, 2022),
(369, 74, 7, 9, 2023),
(370, 74, 6, 6, 2024),
(371, 75, 4, 10, 2020),
(372, 75, 5, 10, 2021),
(373, 75, 10, 10, 2022),
(374, 75, 8, 10, 2023),
(375, 75, 10, 10, 2024),
(376, 76, 3, 10, 2020),
(377, 76, 5, 13, 2021),
(378, 76, 12, 16, 2022),
(379, 76, 7, 15, 2023),
(380, 76, 5, 6, 2024),
(381, 77, 4, 10, 2020),
(382, 77, 7, 10, 2021),
(383, 77, 9, 10, 2022),
(384, 77, 10, 10, 2023),
(385, 77, 12, 10, 2024),
(386, 78, 9, 10, 2020),
(387, 78, 8, 20, 2021),
(388, 78, 10, 20, 2022),
(389, 78, 7, 10, 2023),
(390, 78, 8, 10, 2024),
(391, 79, 13, 10, 2020),
(392, 79, 9, 13, 2021),
(393, 79, 8, 11, 2022),
(394, 79, 5, 10, 2023),
(395, 79, 4, 6, 2024),
(396, 80, 5, 10, 2020),
(397, 80, 9, 10, 2021),
(398, 80, 7, 10, 2022),
(399, 80, 8, 10, 2023),
(400, 80, 14, 15, 2024),
(401, 81, 5, 10, 2020),
(402, 81, 8, 10, 2021),
(403, 81, 7, 10, 2022),
(404, 81, 8, 10, 2023),
(405, 81, 11, 18, 2024),
(406, 82, 4123, 4000, 2020),
(407, 82, 3879, 4000, 2021),
(408, 82, 4213, 4000, 2022),
(409, 82, 3944, 4000, 2023),
(410, 82, 4841, 4000, 2024),
(411, 83, 14821, 15000, 2020),
(412, 83, 14199, 16666, 2021),
(413, 83, 14829, 15413, 2022),
(414, 83, 18923, 15555, 2023),
(415, 83, 11428, 12366, 2024),
(416, 84, 11270, 10000, 2020),
(417, 84, 10031, 11231, 2021),
(418, 84, 12912, 12128, 2022),
(419, 84, 10000, 11111, 2023),
(420, 84, 8087, 8730, 2024),
(421, 85, 14002, 12329, 2020),
(422, 85, 14212, 16002, 2021),
(423, 85, 15251, 15281, 2022),
(424, 85, 17213, 17291, 2023),
(425, 85, 13304, 12916, 2024),
(426, 86, 10311, 10000, 2020),
(427, 86, 9280, 10000, 2021),
(428, 86, 9980, 10000, 2022),
(429, 86, 10311, 10000, 2023),
(430, 86, 9618, 10000, 2024),
(431, 87, 10002, 10020, 2020),
(432, 87, 11000, 10000, 2021),
(433, 87, 9979, 10000, 2022),
(434, 87, 10001, 10000, 2023),
(435, 87, 11149, 9980, 2024),
(436, 88, 15003, 14000, 2020),
(437, 88, 13928, 14000, 2021),
(438, 88, 15992, 14000, 2022),
(439, 88, 13982, 14000, 2023),
(440, 88, 16095, 14000, 2024),
(441, 89, 1512, 2000, 2020),
(442, 89, 1509, 2000, 2021),
(443, 89, 1923, 2000, 2022),
(444, 89, 1998, 2000, 2023),
(445, 89, 2158, 2000, 2024),
(446, 90, 1589, 2000, 2020),
(447, 90, 1639, 2000, 2021),
(448, 90, 1759, 2000, 2022),
(449, 90, 1792, 2000, 2023),
(450, 90, 1321, 2000, 2024),
(451, 91, 1510, 2000, 2020),
(452, 91, 1792, 2000, 2021),
(453, 91, 1928, 2000, 2022),
(454, 91, 1958, 2000, 2023),
(455, 91, 2012, 2000, 2024),
(456, 92, 900, 1000, 2020),
(457, 92, 2000, 2313, 2021),
(458, 92, 2123, 2492, 2022),
(459, 92, 2100, 2200, 2023),
(460, 92, 2095, 1995, 2024),
(461, 93, 1523, 1900, 2020),
(462, 93, 1792, 1900, 2021),
(463, 93, 1500, 1800, 2022),
(464, 93, 1500, 1600, 2023),
(465, 93, 2222, 1800, 2024),
(466, 94, 1523, 2000, 2020),
(467, 94, 1590, 2000, 2021),
(468, 94, 1980, 2000, 2022),
(469, 94, 1589, 2000, 2023),
(470, 94, 1838, 2000, 2024),
(471, 95, 1998, 2000, 2020),
(472, 95, 1980, 2000, 2021),
(473, 95, 1897, 2000, 2022),
(474, 95, 1890, 2000, 2023),
(475, 95, 2067, 2000, 2024),
(476, 96, 38, 40, 2020),
(477, 96, 32, 40, 2021),
(478, 96, 45, 40, 2022),
(479, 96, 44, 40, 2023),
(480, 96, 51, 40, 2024),
(481, 97, 32, 40, 2020),
(482, 97, 29, 40, 2021),
(483, 97, 30, 40, 2022),
(484, 97, 38, 40, 2023),
(485, 97, 41, 40, 2024),
(486, 98, 42, 40, 2020),
(487, 98, 43, 50, 2021),
(488, 98, 45, 50, 2022),
(489, 98, 28, 30, 2023),
(490, 98, 32, 60, 2024),
(491, 99, 25, 30, 2020),
(492, 99, 27, 34, 2021),
(493, 99, 29, 36, 2022),
(494, 99, 38, 40, 2023),
(495, 99, 31, 40, 2024),
(496, 100, 19, 20, 2020),
(497, 100, 23, 30, 2021),
(498, 100, 27, 30, 2022),
(499, 100, 33, 30, 2023),
(500, 100, 28, 60, 2024),
(501, 101, 39, 40, 2020),
(502, 101, 40, 39, 2021),
(503, 101, 43, 46, 2022),
(504, 101, 32, 45, 2023),
(505, 101, 49, 60, 2024),
(506, 102, 5, 20, 2020),
(507, 102, 10, 20, 2021),
(508, 102, 10, 20, 2022),
(509, 102, 15, 20, 2023),
(510, 102, 10, 20, 2024),
(511, 103, 2, 5, 2020),
(512, 103, 3, 5, 2021),
(513, 103, 4, 5, 2022),
(514, 103, 2, 5, 2023),
(515, 103, 3, 5, 2024),
(516, 104, 3, 5, 2020),
(517, 104, 4, 5, 2021),
(518, 104, 2, 5, 2022),
(519, 104, 3, 5, 2023),
(520, 104, 4, 5, 2024),
(521, 105, 2, 4, 2020),
(522, 105, 2, 3, 2021),
(523, 105, 3, 4, 2022),
(524, 105, 3, 5, 2023),
(525, 105, 2, 4, 2024),
(526, 106, 5, 8, 2020),
(527, 106, 9, 8, 2021),
(528, 106, 7, 8, 2022),
(529, 106, 6, 8, 2023),
(530, 106, 5, 8, 2024),
(531, 107, 3, 6, 2020),
(532, 107, 3, 5, 2021),
(533, 107, 3, 5, 2022),
(534, 107, 4, 6, 2023),
(535, 107, 6, 6, 2024),
(536, 108, 1, 5, 2020),
(537, 108, 2, 5, 2021),
(538, 108, 2, 5, 2022),
(539, 108, 4, 5, 2023),
(540, 108, 1, 5, 2024),
(541, 109, 8, 10, 2020),
(542, 109, 7, 10, 2021),
(543, 109, 9, 10, 2022),
(544, 109, 11, 10, 2023),
(545, 109, 8, 10, 2024),
(546, 110, 134, 400, 2020),
(547, 110, 231, 400, 2021),
(548, 110, 314, 400, 2022),
(549, 110, 323, 400, 2023),
(550, 110, 340, 400, 2024),
(551, 111, 238, 400, 2020),
(552, 111, 294, 450, 2021),
(553, 111, 299, 450, 2022),
(554, 111, 231, 400, 2023),
(555, 111, 396, 650, 2024),
(556, 112, 513, 700, 2020),
(557, 112, 431, 700, 2021),
(558, 112, 513, 800, 2022),
(559, 112, 516, 700, 2023),
(560, 112, 430, 620, 2024),
(561, 113, 300, 600, 2020),
(562, 113, 500, 600, 2021),
(563, 113, 431, 600, 2022),
(564, 113, 431, 690, 2023),
(565, 113, 338, 410, 2024),
(566, 114, 321, 400, 2020),
(567, 114, 389, 500, 2021),
(568, 114, 370, 400, 2022),
(569, 114, 334, 400, 2023),
(570, 114, 486, 700, 2024),
(571, 115, 500, 600, 2020),
(572, 115, 343, 600, 2021),
(573, 115, 580, 600, 2022),
(574, 115, 555, 600, 2023),
(575, 115, 522, 600, 2024),
(576, 116, 579, 600, 2020),
(577, 116, 590, 600, 2021),
(578, 116, 532, 600, 2022),
(579, 116, 555, 600, 2023),
(580, 116, 544, 600, 2024),
(581, 117, 9, 15, 2020),
(582, 117, 10, 15, 2021),
(583, 117, 11, 15, 2022),
(584, 117, 10, 15, 2023),
(585, 117, 10, 15, 2024),
(586, 118, 10, 16, 2020),
(587, 118, 12, 16, 2021),
(588, 118, 8, 16, 2022),
(589, 118, 13, 16, 2023),
(590, 118, 7, 16, 2024),
(591, 119, 13, 17, 2020),
(592, 119, 16, 17, 2021),
(593, 119, 15, 17, 2022),
(594, 119, 15, 17, 2023),
(595, 119, 11, 17, 2024),
(596, 120, 10, 14, 2020),
(597, 120, 7, 14, 2021),
(598, 120, 12, 14, 2022),
(599, 120, 13, 14, 2023),
(600, 120, 8, 14, 2024),
(601, 121, 13, 17, 2020),
(602, 121, 15, 17, 2021),
(603, 121, 16, 17, 2022),
(604, 121, 17, 17, 2023),
(605, 121, 9, 17, 2024),
(606, 122, 10, 15, 2020),
(607, 122, 13, 15, 2021),
(608, 122, 14, 15, 2022),
(609, 122, 13, 15, 2023),
(610, 122, 10, 20, 2024),
(611, 123, 10, 15, 2020),
(612, 123, 11, 15, 2021),
(613, 123, 12, 15, 2022),
(614, 123, 13, 15, 2023),
(615, 123, 9, 15, 2024),
(616, 124, 4, 4, 2020),
(617, 124, 4, 4, 2021),
(618, 124, 5, 4, 2022),
(619, 124, 6, 4, 2023),
(620, 124, 6, 4, 2024),
(621, 125, 5, 5, 2020),
(622, 125, 5, 5, 2021),
(623, 125, 4, 5, 2022),
(624, 125, 6, 5, 2023),
(625, 125, 5, 5, 2024),
(626, 126, 4, 5, 2020),
(627, 126, 3, 5, 2021),
(628, 126, 5, 5, 2022),
(629, 126, 3, 5, 2023),
(630, 126, 5, 5, 2024),
(631, 127, 5, 6, 2020),
(632, 127, 7, 6, 2021),
(633, 127, 8, 6, 2022),
(634, 127, 6, 6, 2023),
(635, 127, 9, 6, 2024),
(636, 128, 4, 4, 2020),
(637, 128, 4, 4, 2021),
(638, 128, 4, 4, 2022),
(639, 128, 4, 4, 2023),
(640, 128, 4, 4, 2024),
(641, 129, 3, 4, 2020),
(642, 129, 4, 4, 2021),
(643, 129, 4, 4, 2022),
(644, 129, 4, 4, 2023),
(645, 129, 3, 4, 2024),
(646, 130, 5, 6, 2020),
(647, 130, 3, 6, 2021),
(648, 130, 4, 6, 2022),
(649, 130, 5, 5, 2023),
(650, 130, 8, 7, 2024),
(651, 131, 14, 20, 2020),
(652, 131, 15, 20, 2021),
(653, 131, 19, 20, 2022),
(654, 131, 16, 20, 2023),
(655, 131, 16, 20, 2024),
(656, 132, 18, 20, 2020),
(657, 132, 15, 20, 2021),
(658, 132, 19, 20, 2022),
(659, 132, 19, 20, 2023),
(660, 132, 21, 20, 2024),
(661, 133, 18, 20, 2020),
(662, 133, 17, 20, 2021),
(663, 133, 19, 20, 2022),
(664, 133, 15, 20, 2023),
(665, 133, 19, 20, 2024),
(666, 134, 14, 20, 2020),
(667, 134, 18, 20, 2021),
(668, 134, 17, 20, 2022),
(669, 134, 17, 20, 2023),
(670, 134, 12, 20, 2024),
(671, 135, 19, 20, 2020),
(672, 135, 19, 20, 2021),
(673, 135, 18, 20, 2022),
(674, 135, 17, 20, 2023),
(675, 135, 16, 20, 2024),
(676, 136, 18, 20, 2020),
(677, 136, 17, 20, 2021),
(678, 136, 19, 20, 2022),
(679, 136, 20, 20, 2023),
(680, 136, 17, 20, 2024),
(681, 137, 13, 20, 2020),
(682, 137, 12, 20, 2021),
(683, 137, 14, 20, 2022),
(684, 137, 14, 20, 2023),
(685, 137, 17, 20, 2024),
(686, 138, 312, 300, 2020),
(687, 138, 321, 300, 2021),
(688, 138, 290, 300, 2022),
(689, 138, 344, 300, 2023),
(690, 138, 433, 300, 2024),
(691, 139, 300, 400, 2020),
(692, 139, 321, 400, 2021),
(693, 139, 239, 400, 2022),
(694, 139, 341, 400, 2023),
(695, 139, 299, 400, 2024),
(696, 140, 341, 500, 2020),
(697, 140, 413, 500, 2021),
(698, 140, 411, 500, 2022),
(699, 140, 341, 500, 2023),
(700, 140, 384, 500, 2024),
(701, 141, 314, 400, 2020),
(702, 141, 234, 321, 2021),
(703, 141, 400, 411, 2022),
(704, 141, 400, 500, 2023),
(705, 141, 452, 668, 2024),
(706, 142, 400, 500, 2020),
(707, 142, 341, 500, 2021),
(708, 142, 431, 500, 2022),
(709, 142, 412, 500, 2023),
(710, 142, 416, 500, 2024),
(711, 143, 231, 500, 2020),
(712, 143, 431, 500, 2021),
(713, 143, 300, 500, 2022),
(714, 143, 314, 500, 2023),
(715, 143, 224, 500, 2024),
(716, 144, 810, 800, 2020),
(717, 144, 892, 800, 2021),
(718, 144, 899, 800, 2022),
(719, 144, 798, 800, 2023),
(720, 144, 801, 800, 2024),
(721, 145, 50, 100, 2020),
(722, 145, 30, 100, 2021),
(723, 145, 60, 100, 2022),
(724, 145, 50, 100, 2023),
(725, 145, 60, 100, 2024),
(726, 146, 88, 200, 2020),
(727, 146, 70, 200, 2021),
(728, 146, 99, 200, 2022),
(729, 146, 79, 200, 2023),
(730, 146, 64, 200, 2024),
(731, 147, 121, 200, 2020),
(732, 147, 131, 200, 2021),
(733, 147, 99, 200, 2022),
(734, 147, 141, 200, 2023),
(735, 147, 108, 200, 2024),
(736, 148, 70, 160, 2020),
(737, 148, 40, 200, 2021),
(738, 148, 70, 190, 2022),
(739, 148, 70, 100, 2023),
(740, 148, 50, 150, 2024),
(741, 149, 180, 200, 2020),
(742, 149, 190, 200, 2021),
(743, 149, 172, 200, 2022),
(744, 149, 159, 200, 2023),
(745, 149, 99, 200, 2024),
(746, 150, 80, 200, 2020),
(747, 150, 98, 190, 2021),
(748, 150, 77, 200, 2022),
(749, 150, 60, 200, 2023),
(750, 150, 85, 110, 2024),
(751, 151, 182, 200, 2020),
(752, 151, 192, 200, 2021),
(753, 151, 188, 200, 2022),
(754, 151, 192, 200, 2023),
(755, 151, 96, 200, 2024),
(756, 152, 13, 14, 2020),
(757, 152, 14, 14, 2021),
(758, 152, 15, 14, 2022),
(759, 152, 15, 14, 2023),
(760, 152, 10, 14, 2024),
(761, 153, 13, 15, 2020),
(762, 153, 14, 17, 2021),
(763, 153, 17, 15, 2022),
(764, 153, 16, 15, 2023),
(765, 153, 10, 13, 2024),
(766, 154, 14, 15, 2020),
(767, 154, 14, 15, 2021),
(768, 154, 16, 15, 2022),
(769, 154, 14, 15, 2023),
(770, 154, 12, 15, 2024),
(771, 155, 14, 15, 2020),
(772, 155, 12, 15, 2021),
(773, 155, 17, 19, 2022),
(774, 155, 16, 19, 2023),
(775, 155, 11, 12, 2024),
(776, 156, 15, 15, 2020),
(777, 156, 15, 16, 2021),
(778, 156, 18, 17, 2022),
(779, 156, 18, 15, 2023),
(780, 156, 6, 17, 2024),
(781, 157, 14, 15, 2020),
(782, 157, 14, 15, 2021),
(783, 157, 16, 15, 2022),
(784, 157, 19, 15, 2023),
(785, 157, 7, 20, 2024),
(786, 158, 12, 10, 2020),
(787, 158, 13, 15, 2021),
(788, 158, 12, 19, 2022),
(789, 158, 13, 20, 2023),
(790, 158, 5, 11, 2024),
(791, 159, 320, 400, 2020),
(792, 159, 200, 400, 2021),
(793, 159, 333, 400, 2022),
(794, 159, 230, 300, 2023),
(795, 159, 117, 500, 2024),
(796, 160, 321, 400, 2020),
(797, 160, 231, 400, 2021),
(798, 160, 311, 421, 2022),
(799, 160, 223, 300, 2023),
(800, 160, 114, 479, 2024),
(801, 161, 132, 300, 2020),
(802, 161, 287, 300, 2021),
(803, 161, 272, 300, 2022),
(804, 161, 211, 300, 2023),
(805, 161, 98, 300, 2024),
(806, 162, 131, 200, 2020),
(807, 162, 122, 200, 2021),
(808, 162, 111, 200, 2022),
(809, 162, 121, 200, 2023),
(810, 162, 115, 200, 2024),
(811, 163, 200, 300, 2020),
(812, 163, 213, 300, 2021),
(813, 163, 223, 300, 2022),
(814, 163, 199, 300, 2023),
(815, 163, 165, 300, 2024),
(816, 164, 132, 300, 2020),
(817, 164, 232, 300, 2021),
(818, 164, 291, 300, 2022),
(819, 164, 251, 300, 2023),
(820, 164, 96, 350, 2024),
(821, 165, 50, 200, 2020),
(822, 165, 72, 200, 2021),
(823, 165, 60, 200, 2022),
(824, 165, 77, 200, 2023),
(825, 165, 41, 200, 2024),
(831, 167, 5, 20, 2030),
(832, 167, 5, 20, 2031),
(833, 167, 5, 20, 2032),
(834, 167, 5, 20, 2033),
(835, 167, 0, 20, 2034);

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
-- Table structure for table `tieuchi`
--

CREATE TABLE `tieuchi` (
  `id` int(10) UNSIGNED NOT NULL,
  `ten` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `moTa` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `ma_dv` int(10) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `tieuchi`
--

INSERT INTO `tieuchi` (`id`, `ten`, `moTa`, `ma_dv`) VALUES
(1, 'quy mô đào tạo đại học', 'số lượng sinh viên đào tạo đại học', 1),
(2, 'quy mô giảng viên', 'số giảng viên trên tổng qy mô đào tạo', 1),
(3, 'trình độ giảng viên', 'tỉ lệ giảng viên ts trên tổng số giảng viên hữu cơ', 3),
(4, 'uy tín giảng viên', 'Tỷ lệ giảng viên đạt psg, ts, gs', 3),
(5, 'quy mô đào tạo sau đại học', 'tỷ lệ đào tạo sau đại học(ts, ths) trên tổng đào tạo', 1),
(6, 'quy mô đào tạo tiến sĩ', 'tỷ lệ đào tạo tiến sĩ trên tổng đào tạo', 1),
(7, 'việc làm của người học', 'tỉ lệ sau khi tốt nghiệp trong 12th', 4),
(8, 'kiểm định chất lượng', 'chất lượng ts, ths và psg', 5),
(9, 'công bố trong nước', 'số công trình khoa học được xuất bản trong nước', 6),
(10, 'công bố quốc tế', 'công trình khoa học công bố trên CSDL ISI và Seopus', 6),
(11, 'chất lượng công bố quốc tế', 'chất lượng khoa học thuộc loại Q1, Q2', 6),
(12, 'Kinh phí hoạt động nghiên cứu', 'thu ngoài ngân sách/nguồn thu công nghệ', 10),
(13, 'kinh phí từ dịch vụ chuyển giao KH&CN', 'kinh phí thu từ hoạt động tư vấn, thương mại...', 10),
(14, 'sở hữu trí tuệ', 'số đơn đăng ký giải pháp hữu ích chấp nhận/năm', 6),
(15, 'số doanh nghiệp khởi nghiệp', 'số doanh nghiệp mở mới /năm của đơn vị', 6),
(16, 'tài nguyên số', 'số đầu học liệu được số hóa và cung cấp trực tuyến', 1),
(17, 'môi trường đào tạo gắn vơi nghiên cứu ứng dụng', 'tỷ lệ ngành đào tạo đại học có đủ PTN', 1),
(18, 'Môi trường đào tạo trực tuyến', 'đào tạo kết hợp blened learning của mỗi CTĐT', 1),
(19, 'thủ tục hành chính trực tuyến', 'các thủ tục được hoàn toàn thông qua trực tuyến', 8),
(20, 'sinh viên quốc tế', 'sinh viên nước ngoài học tập', 9),
(21, 'giảng viên quốc tế', 'giảng viên nước ngoài dạy', 3),
(22, 'hợp tác quốc tế về nghiên cứu', 'công bố ISI/scopus có hợp tác quốc tế', 6),
(23, 'xây dựng đảng', 'số sinh viên , giáo viên vào đảng', 2),
(25, 'gai nganh', 'test', 1);

-- --------------------------------------------------------

--
-- Table structure for table `truong`
--

CREATE TABLE `truong` (
  `id` varchar(10) COLLATE utf8mb4_unicode_ci NOT NULL,
  `ten` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `logo` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `truong`
--

INSERT INTO `truong` (`id`, `ten`, `logo`) VALUES
('hus', 'khoa học tự nhiên', ''),
('ueb', 'kinh tế', ''),
('ued', 'giáo dục', ''),
('uet', 'công nghệ', ''),
('ulis', 'ngoại ngữ', ''),
('ussh', 'khoa học xã hội và nhân văn', 'ussh.png'),
('vju', 'việt-nhật', '');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `account`
--
ALTER TABLE `account`
  ADD PRIMARY KEY (`id`),
  ADD KEY `ma_truong` (`ma_truong`);

--
-- Indexes for table `daihan`
--
ALTER TABLE `daihan`
  ADD PRIMARY KEY (`id`),
  ADD KEY `daihan_ma_tc_foreign` (`ma_tc`),
  ADD KEY `ma_truong` (`ma_truong`);

--
-- Indexes for table `donvi`
--
ALTER TABLE `donvi`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `nganhan`
--
ALTER TABLE `nganhan`
  ADD PRIMARY KEY (`id`),
  ADD KEY `nganhan_ma_tc_foreign` (`ma_tc`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `tieuchi`
--
ALTER TABLE `tieuchi`
  ADD PRIMARY KEY (`id`),
  ADD KEY `tieuchi_ma_dv_foreign` (`ma_dv`);

--
-- Indexes for table `truong`
--
ALTER TABLE `truong`
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
-- AUTO_INCREMENT for table `account`
--
ALTER TABLE `account`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `daihan`
--
ALTER TABLE `daihan`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=168;

--
-- AUTO_INCREMENT for table `donvi`
--
ALTER TABLE `donvi`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `nganhan`
--
ALTER TABLE `nganhan`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=836;

--
-- AUTO_INCREMENT for table `tieuchi`
--
ALTER TABLE `tieuchi`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `account`
--
ALTER TABLE `account`
  ADD CONSTRAINT `account_ibfk_1` FOREIGN KEY (`ma_truong`) REFERENCES `truong` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `daihan`
--
ALTER TABLE `daihan`
  ADD CONSTRAINT `daihan_ibfk_1` FOREIGN KEY (`ma_truong`) REFERENCES `truong` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `daihan_ma_tc_foreign` FOREIGN KEY (`ma_tc`) REFERENCES `tieuchi` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `nganhan`
--
ALTER TABLE `nganhan`
  ADD CONSTRAINT `nganhan_ma_tc_foreign` FOREIGN KEY (`ma_tc`) REFERENCES `daihan` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `tieuchi`
--
ALTER TABLE `tieuchi`
  ADD CONSTRAINT `tieuchi_ma_dv_foreign` FOREIGN KEY (`ma_dv`) REFERENCES `donvi` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
