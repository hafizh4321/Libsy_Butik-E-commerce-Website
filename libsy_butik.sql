-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 06, 2021 at 06:49 AM
-- Server version: 10.4.14-MariaDB
-- PHP Version: 7.4.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `libsy_butik`
--

-- --------------------------------------------------------

--
-- Table structure for table `auth_activation_attempts`
--

CREATE TABLE `auth_activation_attempts` (
  `id` int(11) UNSIGNED NOT NULL,
  `ip_address` varchar(255) NOT NULL,
  `user_agent` varchar(255) NOT NULL,
  `token` varchar(255) DEFAULT NULL,
  `created_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `auth_groups`
--

CREATE TABLE `auth_groups` (
  `id` int(11) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `description` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `auth_groups`
--

INSERT INTO `auth_groups` (`id`, `name`, `description`) VALUES
(1, 'admin', 'Administrator'),
(2, 'user', 'Regular user');

-- --------------------------------------------------------

--
-- Table structure for table `auth_groups_permissions`
--

CREATE TABLE `auth_groups_permissions` (
  `group_id` int(11) UNSIGNED NOT NULL DEFAULT 0,
  `permission_id` int(11) UNSIGNED NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `auth_groups_users`
--

CREATE TABLE `auth_groups_users` (
  `group_id` int(11) UNSIGNED NOT NULL DEFAULT 0,
  `user_id` int(11) UNSIGNED NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `auth_groups_users`
--

INSERT INTO `auth_groups_users` (`group_id`, `user_id`) VALUES
(1, 7),
(2, 8),
(2, 10),
(2, 15);

-- --------------------------------------------------------

--
-- Table structure for table `auth_logins`
--

CREATE TABLE `auth_logins` (
  `id` int(11) UNSIGNED NOT NULL,
  `ip_address` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `user_id` int(11) UNSIGNED DEFAULT NULL,
  `date` datetime NOT NULL,
  `success` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `auth_logins`
--

INSERT INTO `auth_logins` (`id`, `ip_address`, `email`, `user_id`, `date`, `success`) VALUES
(1, '::1', 'muhammadhafizh4321@gmail.com', NULL, '2020-12-31 21:25:44', 0),
(2, '::1', 'okikurniawan', 4, '2020-12-31 21:45:22', 0),
(3, '::1', 'muhammadhafizh4321@gmail.com', 5, '2020-12-31 22:24:41', 1),
(4, '::1', 'muhammadhafizh4321@gmail.com', 6, '2020-12-31 23:33:20', 1),
(5, '::1', 'a@gmail.com', 7, '2020-12-31 23:58:17', 1),
(6, '::1', 'hafizh4321', NULL, '2021-01-01 00:04:01', 0),
(7, '::1', 'a@gmail.com', 7, '2021-01-01 00:04:17', 1),
(8, '::1', 'b@gmail.com', 8, '2021-01-01 05:10:18', 1),
(9, '::1', 'b@gmail.com', 8, '2021-01-01 05:14:03', 1),
(10, '::1', 'a@gmail.com', 7, '2021-01-01 05:14:18', 1),
(11, '::1', 'b@gmail.com', 8, '2021-01-01 05:17:36', 1),
(12, '::1', 'okik', NULL, '2021-01-01 05:17:56', 0),
(13, '::1', 'a@gmail.com', 7, '2021-01-01 05:18:09', 1),
(14, '::1', 'b@gmail.com', 8, '2021-01-01 05:19:25', 1),
(15, '::1', 'b@gmail.com', 8, '2021-01-01 05:23:52', 1),
(16, '::1', 'b@gmail.com', 8, '2021-01-01 06:22:45', 1),
(17, '::1', 'b@gmail.com', 8, '2021-01-01 07:06:26', 1),
(18, '::1', 'a@gmail.com', 7, '2021-01-01 07:08:07', 1),
(19, '::1', 'b@gmail.com', 8, '2021-01-01 07:37:34', 1),
(20, '::1', 'a@gmail.com', 7, '2021-01-01 07:37:53', 1),
(21, '::1', 'b@gmail.com', 8, '2021-01-01 07:44:11', 1),
(22, '::1', 'a@gmail.com', 7, '2021-01-01 07:46:22', 1),
(23, '::1', 'andiasdaniswara', NULL, '2021-01-01 08:53:55', 0),
(24, '::1', 'c@gmail.com', 9, '2021-01-01 08:54:13', 1),
(25, '::1', 'a@gmail.com', 7, '2021-01-01 18:45:33', 1),
(26, '::1', 'a@gmail.com', 7, '2021-01-01 22:40:31', 1),
(27, '::1', 'b@gmail.com', 8, '2021-01-01 23:23:35', 1),
(28, '::1', 'a@gmail.com', 7, '2021-01-01 23:31:00', 1),
(29, '::1', 'b@gmail.com', 8, '2021-01-01 23:31:58', 1),
(30, '::1', 'a@gmail.com', 7, '2021-01-01 23:33:26', 1),
(31, '::1', 'b@gmail.com', 8, '2021-01-01 23:36:53', 1),
(32, '::1', 'b@gmail.com', 8, '2021-01-01 23:43:45', 1),
(33, '::1', 'a@gmail.com', 7, '2021-01-02 05:55:54', 1),
(34, '::1', 'b@gmail.com', 8, '2021-01-02 10:16:01', 1),
(35, '::1', 'a@gmail.com', 7, '2021-01-02 10:23:00', 1),
(36, '::1', 'a@gmail.com', 7, '2021-01-02 21:27:32', 1),
(37, '::1', 'a@gmail.com', 7, '2021-01-03 05:26:39', 1),
(38, '::1', 'a@gmail.com', 7, '2021-01-03 06:26:15', 1),
(39, '::1', 'a@gmail.com', 7, '2021-01-03 07:38:03', 1),
(40, '::1', 'b@gmail.com', 8, '2021-01-03 08:10:07', 1),
(41, '::1', 'a@gmail.com', 7, '2021-01-03 08:15:09', 1),
(42, '::1', 'a@gmail.com', 7, '2021-01-03 08:15:35', 1),
(43, '::1', 'b@gmail.com', 8, '2021-01-03 08:16:16', 1),
(44, '::1', 'a@gmail.com', 7, '2021-01-03 08:16:35', 1),
(45, '::1', 'b@gmail.com', 8, '2021-01-03 08:24:32', 1),
(46, '::1', 'a@gmail.com', 7, '2021-01-03 11:37:47', 1),
(47, '::1', 'a@gmail.com', 7, '2021-01-03 20:07:15', 1),
(48, '::1', 'b@gmail.com', 8, '2021-01-03 20:09:15', 1),
(49, '::1', 'a@gmail.com', 7, '2021-01-04 00:40:01', 1),
(50, '::1', 'z@gmail.com', 10, '2021-01-04 01:01:58', 1),
(51, '::1', 'a@gmail.com', 7, '2021-01-04 01:13:50', 1),
(52, '::1', 'a@gmail.com', 7, '2021-01-04 01:20:53', 1),
(53, '::1', 'a@gmail.com', 7, '2021-01-04 01:23:53', 1),
(54, '::1', 'z@gmail.com', 10, '2021-01-04 01:25:00', 1),
(55, '::1', 'a@gmail.com', 7, '2021-01-04 01:25:35', 1),
(56, '::1', 'z@gmail.com', 10, '2021-01-04 01:37:55', 1),
(57, '::1', 'a@gmail.com', 7, '2021-01-04 01:47:20', 1),
(58, '::1', 'a@gmail.com', 7, '2021-01-04 04:58:05', 1),
(59, '::1', 'e@gmail.com', 11, '2021-01-04 06:13:35', 1),
(60, '::1', 'f@gmail.com', 12, '2021-01-04 06:14:31', 1),
(61, '::1', 'a@gmail.com', 7, '2021-01-04 06:14:56', 1),
(62, '::1', 'a@gmail.com', 7, '2021-01-04 07:24:09', 1),
(63, '::1', 'z@gmail.com', 10, '2021-01-04 07:27:27', 1),
(64, '::1', 'z@gmail.com', 10, '2021-01-04 07:28:05', 1),
(65, '::1', 'a@gmail.com', 7, '2021-01-04 07:32:16', 1),
(66, '::1', 'a@gmail.com', 7, '2021-01-04 19:56:03', 1),
(67, '::1', 'b@gmail.com', 8, '2021-01-04 19:56:27', 1),
(68, '::1', 'a@gmail.com', 7, '2021-01-04 19:57:58', 1),
(69, '::1', 'b@gmail.com', 8, '2021-01-04 19:58:08', 1),
(70, '::1', 'a@gmail.com', 7, '2021-01-04 20:03:45', 1),
(71, '::1', 'a@gmail.com', 7, '2021-01-04 20:04:43', 1),
(72, '::1', 'b@gmail.com', 8, '2021-01-04 20:05:02', 1),
(73, '::1', 'a@gmail.com', 7, '2021-01-04 20:06:36', 1),
(74, '::1', 'b@gmail.com', 8, '2021-01-04 20:07:15', 1),
(75, '::1', 'b@gmail.com', 8, '2021-01-04 20:15:43', 1),
(76, '::1', 'a@gmail.com', 7, '2021-01-04 20:16:02', 1),
(77, '::1', 'a@gmail.com', 7, '2021-01-04 20:35:07', 1),
(78, '::1', 'b@gmail.com', 8, '2021-01-04 20:36:20', 1),
(79, '::1', 'c@gmail.com', 9, '2021-01-04 20:36:36', 1),
(80, '::1', 'a@gmail.com', 7, '2021-01-04 20:37:31', 1),
(81, '::1', 'b@gmail.com', 8, '2021-01-04 20:59:52', 1),
(82, '::1', 'a@gmail.com', 7, '2021-01-04 21:07:54', 1),
(83, '::1', 'b@gmail.com', 8, '2021-01-04 21:24:18', 1),
(84, '::1', 'oki@gmail.com', 7, '2021-01-04 21:34:05', 1),
(85, '::1', 'b@gmail.com', 8, '2021-01-04 21:44:14', 1),
(86, '::1', 'oki@gmail.com', 7, '2021-01-04 23:11:16', 1),
(87, '::1', 'oki@gmail.com', 7, '2021-01-04 23:12:15', 1),
(88, '::1', 'oki@gmail.com', 7, '2021-01-04 23:19:59', 1),
(89, '::1', 'hafizh@gmail.com', 8, '2021-01-04 23:20:19', 1),
(90, '::1', 'oki@gmail.com', 7, '2021-01-04 23:23:34', 1),
(91, '::1', 'oki@gmail.com', 7, '2021-01-04 23:32:14', 1),
(92, '::1', 'hafizh@gmail.com', 8, '2021-01-04 23:55:35', 1),
(93, '::1', 'oki@gmail.com', 7, '2021-01-04 23:57:48', 1),
(94, '::1', 'hafizh@gmail.com', 8, '2021-01-05 00:15:30', 1),
(95, '::1', 'oki@gmail.com', 7, '2021-01-05 00:17:08', 1),
(96, '::1', 'hafizh@gmail.com', 8, '2021-01-05 00:17:41', 1),
(97, '::1', 'oki@gmail.com', 7, '2021-01-05 00:18:05', 1),
(98, '::1', 'oki@gmail.com', 7, '2021-01-05 00:20:45', 1),
(99, '::1', 'hafizh@gmail.com', 8, '2021-01-05 00:47:41', 1),
(100, '::1', 'oki@gmail.com', 7, '2021-01-05 00:53:39', 1),
(101, '::1', 'hafizh@gmail.com', 8, '2021-01-05 00:54:05', 1),
(102, '::1', 'hafizh@gmail.com', 8, '2021-01-05 03:44:04', 1),
(103, '::1', 'z@gmail.com', 10, '2021-01-05 07:23:42', 1),
(104, '::1', 'hafizh@gmail.com', 8, '2021-01-05 07:24:57', 1),
(105, '::1', 'z@gmail.com', 10, '2021-01-05 07:25:28', 1),
(106, '::1', 'hafizh@gmail.com', 8, '2021-01-05 07:25:55', 1),
(107, '::1', 'oki@gmail.com', 7, '2021-01-05 07:26:54', 1),
(108, '::1', 'oki@gmail.com', 7, '2021-01-05 07:28:06', 1),
(109, '::1', 'hafizh@gmail.com', 8, '2021-01-05 07:50:40', 1),
(110, '::1', 'hafizh@gmail.com', 8, '2021-01-05 08:00:09', 1),
(111, '::1', 'x@gmail.com', 13, '2021-01-05 09:08:22', 1),
(112, '::1', 'x@gmail.com', 13, '2021-01-05 09:12:29', 1),
(113, '::1', 'hafizh@gmail.com', 8, '2021-01-05 20:06:57', 1),
(114, '::1', 'oki@gmail.com', 7, '2021-01-05 20:11:47', 1),
(115, '::1', 'oki@gmail.com', 7, '2021-01-05 20:14:43', 1),
(116, '::1', 'hafizh@gmail.com', 8, '2021-01-05 20:21:24', 1),
(117, '::1', 'oki@gmail.com', 7, '2021-01-05 20:24:04', 1),
(118, '::1', 'x@gmail.com', 14, '2021-01-05 20:25:21', 1),
(119, '::1', 'oki@gmail.com', 7, '2021-01-05 20:25:40', 1),
(120, '::1', 'hafizh@gmail.com', 8, '2021-01-05 20:27:55', 1),
(121, '::1', 'oki@gmail.com', 7, '2021-01-05 20:43:27', 1),
(122, '::1', 'yasirkhalid', NULL, '2021-01-05 20:43:47', 0),
(123, '::1', 'x@gmail.com', 14, '2021-01-05 20:43:56', 1),
(124, '::1', 'andriasdaniswara', NULL, '2021-01-05 20:45:32', 0),
(125, '::1', 'andriasdaniswara', NULL, '2021-01-05 20:45:42', 0),
(126, '::1', 'andrias@gmail.com', 15, '2021-01-05 20:46:25', 1),
(127, '::1', 'hafizh@gmail.com', 8, '2021-01-05 20:48:30', 1),
(128, '::1', 'oki@gmail.com', 7, '2021-01-05 22:41:00', 1),
(129, '::1', 'hafizh@gmail.com', 8, '2021-01-05 22:41:49', 1),
(130, '::1', 'oki@gmail.com', 7, '2021-01-05 22:50:55', 1);

-- --------------------------------------------------------

--
-- Table structure for table `auth_permissions`
--

CREATE TABLE `auth_permissions` (
  `id` int(11) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `description` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `auth_reset_attempts`
--

CREATE TABLE `auth_reset_attempts` (
  `id` int(11) UNSIGNED NOT NULL,
  `email` varchar(255) NOT NULL,
  `ip_address` varchar(255) NOT NULL,
  `user_agent` varchar(255) NOT NULL,
  `token` varchar(255) DEFAULT NULL,
  `created_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `auth_tokens`
--

CREATE TABLE `auth_tokens` (
  `id` int(11) UNSIGNED NOT NULL,
  `selector` varchar(255) NOT NULL,
  `hashedValidator` varchar(255) NOT NULL,
  `user_id` int(11) UNSIGNED NOT NULL,
  `expires` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `auth_users_permissions`
--

CREATE TABLE `auth_users_permissions` (
  `user_id` int(11) UNSIGNED NOT NULL DEFAULT 0,
  `permission_id` int(11) UNSIGNED NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `carts`
--

CREATE TABLE `carts` (
  `id_carts` int(11) NOT NULL,
  `id_barang` int(11) NOT NULL,
  `username` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `comments`
--

CREATE TABLE `comments` (
  `comment_id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `comment` text NOT NULL,
  `status` enum('active','block') NOT NULL DEFAULT 'active',
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `comments`
--

INSERT INTO `comments` (`comment_id`, `name`, `comment`, `status`, `created_at`, `updated_at`) VALUES
(8, 'okikurniawan', 'wow, bajunya sangat nyaman sekali', 'active', '2021-01-02 10:15:28', '2021-01-02 10:15:28'),
(9, 'okikurniawan', 'penjualnya baik baik', 'active', '2021-01-02 10:15:41', '2021-01-02 10:15:41'),
(10, 'muhammadhafizh', 'warnanya bagus bagus', 'active', '2021-01-02 10:16:21', '2021-01-02 10:16:21'),
(11, 'muhammadhafizh', 'keren banget boss, MANTAP', 'active', '2021-01-02 10:17:47', '2021-01-02 10:17:47'),
(12, 'okikurniawan', 'mantapp', 'active', '2021-01-03 21:14:18', '2021-01-03 21:14:18');

-- --------------------------------------------------------

--
-- Table structure for table `items`
--

CREATE TABLE `items` (
  `id_barang` int(11) NOT NULL,
  `nama_barang` varchar(30) NOT NULL,
  `size_barang` enum('S','M','L','XL') NOT NULL,
  `warna_barang` varchar(100) DEFAULT NULL,
  `harga_barang` int(11) NOT NULL,
  `stok_barang` int(3) NOT NULL,
  `gambar_barang` varchar(30) NOT NULL,
  `deskripsi_barang` varchar(300) NOT NULL,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `items`
--

INSERT INTO `items` (`id_barang`, `nama_barang`, `size_barang`, `warna_barang`, `harga_barang`, `stok_barang`, `gambar_barang`, `deskripsi_barang`, `created_at`, `updated_at`) VALUES
(31, 'Red Biyu Top', 'M', 'merah', 175000, 5, 'BIYU top.png', 'baju lembut dengan warna yang elegan', NULL, '2021-01-04 07:32:40'),
(33, 'Orange Dress Avilla', 'L', 'Orange', 325000, 15, 'Dress Avilla1.png', 'Gaun panjang yang cocok dipakai semua wanita', NULL, '2021-01-03 20:54:51'),
(34, 'Grey Dress Bebandem', 'L', 'Abu', 350000, 0, 'Dress Bebandem1.png', 'Gaun princess cinderella', '2020-12-28 22:37:06', '2021-01-03 20:55:16'),
(45, 'Army Dress Kiara', 'M', 'Coklat', 425000, 30, 'Dress kiara .png', 'gaun dengan 2 warna yang berbeda', NULL, '2021-01-03 20:56:02'),
(47, 'Black Esemel Tunik', 'L', 'hitam', 220000, 34, 'esemel tunik.png', 'baju tipis dan berbahan lembut', NULL, '2021-01-03 20:56:54'),
(48, 'Grey Jane Knit', 'S', 'Abu', 155000, 21, 'Jane knit1.png', 'baju tipis dan nyaman', NULL, '2021-01-03 20:57:20'),
(50, 'Red Jane Knit', 'M', 'Merah', 155000, 18, 'Jane knit3.png', 'baju tipis dan nyaman', NULL, '2021-01-03 20:57:34'),
(51, 'Pink Kaila Set', 'S', 'Pink', 410000, 40, 'kaila Set.png', 'gaun panjang yang anggun', '2020-12-31 11:13:54', '2021-01-03 20:58:16'),
(52, 'Yellow Lemonia Blouse', 'L', 'Kuning', 165000, 5, 'lemonia blouse.png', 'baju nyaman yang diidamkan para wanita', '2021-01-02 10:24:51', '2021-01-04 07:32:35'),
(53, 'Black Lobi Top', 'L', 'Hitam', 261000, 23, 'Lobi Top1.png', 'baju dengan perpaduan warna hitam dan putih yang sangat elegan', '2021-01-02 21:45:46', '2021-01-03 21:00:57'),
(54, 'Motif Lolo Top', 'L', 'Merah', 275000, 16, 'Lolo Top1.png', 'atasaan wanita untuk tidur', '2021-01-02 22:11:50', '2021-01-03 21:02:02'),
(55, 'Blue Pala Set', 'XL', 'Biru', 375000, 10, 'Pala Set.png', 'atasan dengan perpaduan warna biru dan putih', '2021-01-02 22:14:44', '2021-01-03 21:03:37'),
(57, 'Zara Top Terracota', 'L', 'Cokelat', 175000, 12, 'Zara top1.png', 'atasan cokelat tipis untuk tidur', '2021-01-02 23:08:59', '2021-01-04 07:33:10'),
(58, 'Black Abaya', 'S', 'Hitam', 900000, 0, 'abaya.jpg', 'Abaya dengan warna hitam yang sangat nyaman', '2021-01-03 21:07:33', '2021-01-03 21:07:45'),
(59, 'Black Bianca Tops', 'S', 'Hitam', 175000, 17, 'product-1.jpg', 'atasan dengan warna hitma yang nyaman', '2021-01-03 21:11:01', '2021-01-03 21:11:01'),
(60, 'Black Syakira Dress', 'S', 'hitam', 445000, 15, 'Dress syakira black1.png', 'gaun yang cocok untuk para wanita untuk bepergian', '2021-01-03 21:12:29', '2021-01-03 21:12:29'),
(61, 'Pink Denim Dress', 'S', 'Pink', 400000, 10, 'product-8.jpg', 'gaun pink yang sangat bagus', '2021-01-03 21:13:15', '2021-01-03 21:13:15');

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `version` varchar(255) NOT NULL,
  `class` text NOT NULL,
  `group` varchar(255) NOT NULL,
  `namespace` varchar(255) NOT NULL,
  `time` int(11) NOT NULL,
  `batch` int(11) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `version`, `class`, `group`, `namespace`, `time`, `batch`) VALUES
(1, '2017-11-20-223112', 'Myth\\Auth\\Database\\Migrations\\CreateAuthTables', 'default', 'Myth\\Auth', 1609470979, 1);

-- --------------------------------------------------------

--
-- Table structure for table `orang`
--

CREATE TABLE `orang` (
  `id_user` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `orang`
--

INSERT INTO `orang` (`id_user`, `username`, `password`) VALUES
(1, 'hafizh', '123'),
(3, 'hafizh', '123'),
(4, 'yasser', 'yasir'),
(5, 'andrias', '152018040'),
(6, 'maulana', 'wowowow'),
(7, 'boyas', 'asdasdf');

-- --------------------------------------------------------

--
-- Table structure for table `transaksis`
--

CREATE TABLE `transaksis` (
  `id_transaksi` int(11) NOT NULL,
  `username` varchar(60) NOT NULL,
  `id_barang` int(11) DEFAULT NULL,
  `nama_barang` varchar(100) DEFAULT NULL,
  `qty` int(11) DEFAULT NULL,
  `total_harga` int(11) NOT NULL,
  `status` enum('lunas','belum lunas') NOT NULL DEFAULT 'belum lunas',
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `transaksis`
--

INSERT INTO `transaksis` (`id_transaksi`, `username`, `id_barang`, `nama_barang`, `qty`, `total_harga`, `status`, `created_at`, `updated_at`) VALUES
(57, 'muhammadhafizh', 33, 'Orange Dress Avilla', 3, 1082250, 'lunas', '2021-01-05 06:41:18', '2021-01-05 06:41:18');

--
-- Triggers `transaksis`
--
DELIMITER $$
CREATE TRIGGER `sotk_berkurang` AFTER INSERT ON `transaksis` FOR EACH ROW BEGIN
	UPDATE items SET stok_barang = stok_barang - NEW.qty WHERE id_barang = NEW.id_barang;
END
$$
DELIMITER ;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) UNSIGNED NOT NULL,
  `email` varchar(255) NOT NULL,
  `username` varchar(30) DEFAULT NULL,
  `user_image` varchar(255) NOT NULL DEFAULT 'default.svg',
  `password_hash` varchar(255) NOT NULL,
  `reset_hash` varchar(255) DEFAULT NULL,
  `reset_at` datetime DEFAULT NULL,
  `reset_expires` datetime DEFAULT NULL,
  `activate_hash` varchar(255) DEFAULT NULL,
  `status` varchar(255) DEFAULT NULL,
  `status_message` varchar(255) DEFAULT NULL,
  `active` tinyint(1) NOT NULL DEFAULT 0,
  `force_pass_reset` tinyint(1) NOT NULL DEFAULT 0,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL,
  `deleted_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `email`, `username`, `user_image`, `password_hash`, `reset_hash`, `reset_at`, `reset_expires`, `activate_hash`, `status`, `status_message`, `active`, `force_pass_reset`, `created_at`, `updated_at`, `deleted_at`) VALUES
(7, 'oki@gmail.com', 'okikurniawan', 'oki.jpg', '$2y$10$eTF6/AKzdn7iHw9atUwsOOEiewalJa6ykxi0yLkpuIHD4VBJi8elO', NULL, NULL, NULL, NULL, NULL, NULL, 1, 0, '2020-12-31 23:57:57', '2021-01-04 21:21:52', NULL),
(8, 'hafizh@gmail.com', 'muhammadhafizh', 'hafizh.jpg', '$2y$10$DO7LOKuKHdZSla5mHLkvVO4uER.De1jKkVJFOwCY9x2N9BUivUfVO', NULL, NULL, NULL, NULL, NULL, NULL, 1, 0, '2021-01-01 05:08:48', '2021-01-05 07:26:42', NULL),
(10, 'z@gmail.com', 'icaldaulay', 'ical.jpg', '$2y$10$PVBzz5xem03wlYgP/f6/AupLgYFvChv5J7yx.BR7obdSUbDL7yPrS', NULL, NULL, NULL, NULL, NULL, NULL, 1, 0, '2021-01-04 01:01:50', '2021-01-04 01:01:50', NULL),
(15, 'andrias@gmail.com', 'andriasdaniswara', 'andrias.jpg', '$2y$10$DQZoHyJQImls9e0Vc.pwSOzNf0aIIuANNIGsfhAYbx2ftFKK.HB4.', NULL, NULL, NULL, NULL, NULL, NULL, 1, 0, '2021-01-05 20:45:26', '2021-01-05 20:48:07', NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `auth_activation_attempts`
--
ALTER TABLE `auth_activation_attempts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `auth_groups`
--
ALTER TABLE `auth_groups`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `auth_groups_permissions`
--
ALTER TABLE `auth_groups_permissions`
  ADD KEY `auth_groups_permissions_permission_id_foreign` (`permission_id`),
  ADD KEY `group_id_permission_id` (`group_id`,`permission_id`);

--
-- Indexes for table `auth_groups_users`
--
ALTER TABLE `auth_groups_users`
  ADD KEY `auth_groups_users_user_id_foreign` (`user_id`),
  ADD KEY `group_id_user_id` (`group_id`,`user_id`);

--
-- Indexes for table `auth_logins`
--
ALTER TABLE `auth_logins`
  ADD PRIMARY KEY (`id`),
  ADD KEY `email` (`email`),
  ADD KEY `user_id` (`user_id`);

--
-- Indexes for table `auth_permissions`
--
ALTER TABLE `auth_permissions`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `auth_reset_attempts`
--
ALTER TABLE `auth_reset_attempts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `auth_tokens`
--
ALTER TABLE `auth_tokens`
  ADD PRIMARY KEY (`id`),
  ADD KEY `auth_tokens_user_id_foreign` (`user_id`),
  ADD KEY `selector` (`selector`);

--
-- Indexes for table `auth_users_permissions`
--
ALTER TABLE `auth_users_permissions`
  ADD KEY `auth_users_permissions_permission_id_foreign` (`permission_id`),
  ADD KEY `user_id_permission_id` (`user_id`,`permission_id`);

--
-- Indexes for table `carts`
--
ALTER TABLE `carts`
  ADD PRIMARY KEY (`id_carts`);

--
-- Indexes for table `comments`
--
ALTER TABLE `comments`
  ADD PRIMARY KEY (`comment_id`);

--
-- Indexes for table `items`
--
ALTER TABLE `items`
  ADD PRIMARY KEY (`id_barang`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `orang`
--
ALTER TABLE `orang`
  ADD PRIMARY KEY (`id_user`);

--
-- Indexes for table `transaksis`
--
ALTER TABLE `transaksis`
  ADD PRIMARY KEY (`id_transaksi`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email` (`email`),
  ADD UNIQUE KEY `username` (`username`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `auth_activation_attempts`
--
ALTER TABLE `auth_activation_attempts`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `auth_groups`
--
ALTER TABLE `auth_groups`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `auth_logins`
--
ALTER TABLE `auth_logins`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=131;

--
-- AUTO_INCREMENT for table `auth_permissions`
--
ALTER TABLE `auth_permissions`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `auth_reset_attempts`
--
ALTER TABLE `auth_reset_attempts`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `auth_tokens`
--
ALTER TABLE `auth_tokens`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `carts`
--
ALTER TABLE `carts`
  MODIFY `id_carts` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `comments`
--
ALTER TABLE `comments`
  MODIFY `comment_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `items`
--
ALTER TABLE `items`
  MODIFY `id_barang` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=65;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `orang`
--
ALTER TABLE `orang`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `transaksis`
--
ALTER TABLE `transaksis`
  MODIFY `id_transaksi` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=69;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `auth_groups_permissions`
--
ALTER TABLE `auth_groups_permissions`
  ADD CONSTRAINT `auth_groups_permissions_group_id_foreign` FOREIGN KEY (`group_id`) REFERENCES `auth_groups` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `auth_groups_permissions_permission_id_foreign` FOREIGN KEY (`permission_id`) REFERENCES `auth_permissions` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `auth_groups_users`
--
ALTER TABLE `auth_groups_users`
  ADD CONSTRAINT `auth_groups_users_group_id_foreign` FOREIGN KEY (`group_id`) REFERENCES `auth_groups` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `auth_groups_users_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `auth_tokens`
--
ALTER TABLE `auth_tokens`
  ADD CONSTRAINT `auth_tokens_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `auth_users_permissions`
--
ALTER TABLE `auth_users_permissions`
  ADD CONSTRAINT `auth_users_permissions_permission_id_foreign` FOREIGN KEY (`permission_id`) REFERENCES `auth_permissions` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `auth_users_permissions_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
