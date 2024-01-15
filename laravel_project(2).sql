-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 15, 2024 at 09:46 AM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `laravel_project`
--

-- --------------------------------------------------------

--
-- Table structure for table `agenda`
--

CREATE TABLE `agenda` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `judul` varchar(255) DEFAULT NULL,
  `slug` varchar(255) DEFAULT NULL,
  `deskripsi` text DEFAULT NULL,
  `tgl` varchar(255) DEFAULT NULL,
  `jam_mulai` varchar(255) DEFAULT NULL,
  `jam_selesai` varchar(255) DEFAULT NULL,
  `tgl_mulai` varchar(255) DEFAULT NULL,
  `tgl_selesai` varchar(255) DEFAULT NULL,
  `user_id` bigint(20) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `agenda`
--

INSERT INTO `agenda` (`id`, `judul`, `slug`, `deskripsi`, `tgl`, `jam_mulai`, `jam_selesai`, `tgl_mulai`, `tgl_selesai`, `user_id`, `created_at`, `updated_at`) VALUES
(1, 'Koran', 'koran', NULL, '2023-12-31', NULL, NULL, NULL, NULL, 2, '2023-12-31 02:46:36', '2023-12-31 02:46:36'),
(2, 'Koran', 'koran', NULL, '2023-12-31', NULL, NULL, NULL, NULL, 2, '2023-12-31 02:47:33', '2023-12-31 02:47:33');

-- --------------------------------------------------------

--
-- Table structure for table `artikel`
--

CREATE TABLE `artikel` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `judul` varchar(255) DEFAULT NULL,
  `slug` varchar(255) DEFAULT NULL,
  `deskripsi` text DEFAULT NULL,
  `thumbnail` varchar(255) DEFAULT NULL,
  `user_id` bigint(20) DEFAULT NULL,
  `kategori_artikel_id` bigint(20) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `artikel`
--

INSERT INTO `artikel` (`id`, `judul`, `slug`, `deskripsi`, `thumbnail`, `user_id`, `kategori_artikel_id`, `created_at`, `updated_at`) VALUES
(1, 'Pengujian Kecepatan Jaringan Internet', 'pengujian-kecepatan-jaringan-internet', '<p>Hasil Pengujian Kecepatan Internet<br></p>\n', 'uZNz7aEvAScreenshot (3).png', 2, NULL, '2023-12-31 01:17:07', '2023-12-31 01:17:07'),
(2, 'Tutorial Setting Wi-Fi', 'tutorial-setting-wi-fi', '<p>Cara mengatur jaringan pada wi-fi<br></p>\n', 'YF9p4Q5AQScreenshot (1).png', 2, NULL, '2024-01-06 20:09:19', '2024-01-06 20:09:19'),
(3, 'Selamat Datang', 'selamat-datang', '<p>Terimakasih sudah berkunjung<br></p>\n', 'gcCOBoDCDWhatsApp Image 2024-01-07 at 10.12.37.jpeg', 1, NULL, '2024-01-08 17:40:08', '2024-01-12 05:11:55'),
(4, 'Welcome', 'welcome', '<p>Welcome To SDN 9 Bantan<br></p>\n', '0hNA1B41PWhatsApp Image 2024-01-07 at 10.12.39.jpeg', 2, NULL, '2024-01-09 07:17:30', '2024-01-09 07:17:30');

-- --------------------------------------------------------

--
-- Table structure for table `banners`
--

CREATE TABLE `banners` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `judul` varchar(255) DEFAULT NULL,
  `btn_txt` varchar(255) DEFAULT NULL,
  `img` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` varchar(255) NOT NULL,
  `connection` text NOT NULL,
  `queue` text NOT NULL,
  `payload` longtext NOT NULL,
  `exception` longtext NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `jadwal_pelajaran`
--

CREATE TABLE `jadwal_pelajaran` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `jam_ke` int(11) NOT NULL,
  `waktu` varchar(255) DEFAULT NULL,
  `senin` varchar(50) DEFAULT NULL,
  `selasa` varchar(50) DEFAULT NULL,
  `rabu` varchar(50) DEFAULT NULL,
  `kamis` varchar(50) DEFAULT NULL,
  `jumat` varchar(50) DEFAULT NULL,
  `sabtu` varchar(50) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `kelas` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `jadwal_pelajaran`
--

INSERT INTO `jadwal_pelajaran` (`id`, `jam_ke`, `waktu`, `senin`, `selasa`, `rabu`, `kamis`, `jumat`, `sabtu`, `created_at`, `updated_at`, `kelas`) VALUES
(10, 1, '07.00 - 07.30', 'UPACARA BENDERA', 'LITERASI', 'LITERASI', 'LITERASI', 'WIRID', 'SENAM', '2024-01-06 05:38:13', '2024-01-06 06:44:54', 'I'),
(11, 2, '07.30 - 08.05', 'KEGIATAN SEBELUM BELAJAR', 'B.INDONESIA', 'B.INDONESIA', 'PENDIDIKAN JASMANI OLAHRAGA DAN KESEHATAN', 'KEGIATAN SEBELUM BELAJAR', 'P5', '2024-01-06 05:41:04', '2024-01-09 06:55:52', 'I'),
(12, 3, '08.05 - 08.40', 'MATEMATIKA', 'B.INDONESIA', 'B.INDONESIA', 'PENDIDIKAN JASMANI OLAHRAGA DAN KESEHATAN', 'SENI BUDAYA', 'P5', '2024-01-06 05:50:44', '2024-01-09 06:56:34', 'I'),
(13, 4, '08.40 - 09.15', 'MATEMATIKA', 'B.INDONESIA', 'B.INDONESIA', 'PENDIDIKAN JASMANI OLAHRAGA DAN KESEHATAN', 'SENI BUDAYA', 'P5', '2024-01-06 05:53:11', '2024-01-09 06:56:47', 'I'),
(14, 5, '09.15 - 09.30', 'ISTIRAHAT', 'ISTIRAHAT', 'ISTIRAHAT', 'ISTIRAHAT', 'ISTIRAHAT', 'ISTIRAHAT', '2024-01-06 05:56:35', '2024-01-06 05:56:35', 'I'),
(15, 6, '09.30 - 10.05', 'PKN', 'PAI', 'MATEMATIKA', 'PAI', 'BUDAYA MELAYU RIAU', 'P5', '2024-01-06 05:57:38', '2024-01-09 07:06:43', 'I'),
(16, 7, '10.05 - 10.40', 'PKN', 'PAI', 'MATEMATIKA', 'P5', 'BUDAYA MELAYU RIAU', 'P5', '2024-01-06 05:58:55', '2024-01-09 07:06:55', 'I'),
(17, 8, '10.40 - 11.15', 'PKN', 'PAI', 'MATEMATIKA', 'P5', NULL, NULL, '2024-01-06 06:06:20', '2024-01-06 06:06:20', 'I'),
(19, 9, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2024-01-06 06:10:36', '2024-01-06 06:10:36', NULL),
(20, 10, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2024-01-06 06:11:18', '2024-01-06 06:11:18', NULL),
(22, 1, '07.00 - 07.30', 'UPACARA BENDERA', 'LITERASI', 'LITERASI', 'LITERASI', 'WIRID', 'SENAM', '2024-01-06 06:27:36', '2024-01-06 06:45:16', 'II.A'),
(23, 2, '07.30 - 08.05', 'UPACARA BENDERA', 'TEMATIK', 'TEMATIK', 'TEMATIK', 'WIRID YASIN', 'SENAM', '2024-01-06 06:43:05', '2024-01-06 06:43:05', 'II.A'),
(24, 3, '08.05 - 08.40', 'PAI', 'TEMATIK', 'TEMATIK', 'TEMATIK', 'TEMATIK', 'PENDIDIKAN JASMANI OLAHRAGA DAN KESEHATAN', '2024-01-06 06:47:03', '2024-01-09 06:57:30', 'II.A'),
(25, 4, '08.40 - 09.15', 'PAI', 'TEMATIK', 'TEMATIK', 'TEMATIK', 'TEMATIK', 'PENDIDIKAN JASMANI OLAHRAGA DAN KESEHATAN', '2024-01-06 06:48:29', '2024-01-09 06:58:34', 'II.A'),
(26, 5, '09.15 - 09.30', 'ISTIRAHAT', 'ISTIRAHAT', 'ISTIRAHAT', 'ISTIRAHAT', 'ISTIRAHAT', 'ISTIRAHAT', '2024-01-06 06:49:34', '2024-01-06 06:49:34', 'II.A'),
(27, 6, '09.30 - 10.05', 'TEMATIK', 'PAI', 'TEMATIK', 'TEMATIK', 'TEMATIK', 'TEMATIK', '2024-01-06 06:51:06', '2024-01-06 06:51:06', 'II.A'),
(28, 7, '10.05 - 10.40', 'TEMATIK', 'PAI', 'BMR', 'PENDIDIKAN JASMANI OLAHRAGA DAN KESEHATAN', 'TEMATIK', NULL, '2024-01-06 06:53:06', '2024-01-09 06:58:05', 'II.A'),
(29, 8, '10.40 - 11.15', 'TEMATIK', 'TEMATIK', 'BMR', 'PJOK', NULL, NULL, '2024-01-06 06:53:49', '2024-01-06 06:53:49', 'II.A'),
(30, 9, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2024-01-06 06:54:12', '2024-01-06 06:54:12', NULL),
(31, 10, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2024-01-06 06:54:25', '2024-01-06 06:54:25', NULL),
(32, 1, '07.00 - 07.30', 'UPACARA BENDERA', 'LITERASI', 'LITERASI', 'LITERASI', 'WIRID', 'SENAM', '2024-01-06 06:57:55', '2024-01-06 06:57:55', 'II.B'),
(33, 2, '07.30 - 08.05', 'UPACARA BENDERA', 'TEMATIK', 'TEMATIK', 'PAI', 'WIRID', 'SENAM', '2024-01-06 07:04:31', '2024-01-06 07:04:31', 'II.B'),
(34, 3, '08.05 - 08.40', 'TEMATIK', 'TEMATIK', 'TEMATIK', 'PAI', 'TEMATIK', 'PENDIDIKAN JASMANI OLAHRAGA DAN KESEHATAN', '2024-01-06 07:05:24', '2024-01-09 06:59:23', 'II.B'),
(35, 4, '08.40 - 09.15', 'TEMATIK', 'TEMATIK', 'TEMATIK', 'TEMATIK', 'TEMATIK', 'PENDIDIKAN JASMANI OLAHRAGA DAN KESEHATAN', '2024-01-06 07:06:35', '2024-01-09 06:59:38', 'II.B'),
(36, 5, '09.15 - 09.30', 'ISTIRAHAT', 'ISTIRAHAT', 'ISTIRAHAT', 'ISTIRAHAT', 'ISTIRAHAT', 'ISTIRAHAT', '2024-01-06 07:07:33', '2024-01-06 07:07:33', 'II.B'),
(37, 6, '09.30 - 10.05', 'TEMATIK', 'TEMATIK', 'TEMATIK', 'TEMATIK', 'TEMATIK', 'TEMATIK', '2024-01-06 07:09:08', '2024-01-06 07:09:08', 'II.B'),
(38, 7, '10.05 - 10.40', 'BMR', 'PAI', 'TEMATIK', 'PENDIDIKAN JASMANI OLAHRAGA DAN KESEHATAN', 'TEMATIK', 'TEMATIK', '2024-01-06 07:11:04', '2024-01-09 07:00:34', 'II.B'),
(39, 8, '10.40 - 11.15', 'BMR', 'PAI', 'TEMATIK', 'PENDIDIKAN JASMANI OLAHRAGA DAN KESEHATAN', NULL, 'TEMATIK', '2024-01-06 07:11:52', '2024-01-09 07:01:05', 'II.B'),
(40, 9, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2024-01-06 07:13:23', '2024-01-06 07:13:23', NULL),
(41, 10, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2024-01-06 07:13:35', '2024-01-06 07:13:35', NULL),
(42, 1, '07.00 - 07.30', 'UPACARA BENDERA', 'LITERASI', 'LITERASI', 'LITERASI', 'WIRID', 'SENAM', '2024-01-06 07:16:44', '2024-01-06 07:17:21', 'III'),
(43, 2, '07.30 - 08.05', 'KEGIATAN SEBELUM BELAJAR', 'PAI', 'TEMATIK', 'PENDIDIKAN JASMANI OLAHRAGA DAN KESEHATAN', 'WIRID', 'SENAM', '2024-01-06 07:21:03', '2024-01-09 07:01:33', 'III'),
(44, 3, '08.05 - 08.40', 'TEMATIK', 'PAI', 'TEMATIK', 'PENDIDIKAN JASMANI OLAHRAGA DAN KESEHATAN', 'PAI', 'TEMATIK', '2024-01-06 07:22:40', '2024-01-09 07:01:51', 'III'),
(45, 4, '08.40 - 09.15', 'TEMATIK', 'TEMATIK', 'TEMATIK', 'TEMATIK', 'PAI', 'TEMATIK', '2024-01-06 07:23:32', '2024-01-06 07:23:32', 'III'),
(46, 5, '09.15 - 09.30', 'ISTIRAHAT', 'ISTIRAHAT', 'ISTIRAHAT', 'ISTIRAHAT', 'ISTIRAHAT', 'ISTIRAHAT', '2024-01-06 07:24:09', '2024-01-06 07:24:09', 'III'),
(47, 6, '09.30 - 10.05', 'TEMATIK', 'TEMATIK', 'TEMATIK', 'TEMATIK', 'PENDIDIKAN JASMANI OLAHRAGA DAN KESEHATAN', 'TEMATIK', '2024-01-06 07:25:24', '2024-01-09 07:02:09', 'III'),
(48, 7, '10.05 - 10.40', 'BMR', 'TEMATIK', 'TEMATIK', 'TEMATIK', 'PENDIDIKAN JASMANI OLAHRAGA DAN KESEHATAN', 'TEMATIK', '2024-01-06 07:26:56', '2024-01-09 07:02:22', 'III'),
(49, 8, '10.40 - 11.15', 'BMR', 'TEMATIK', 'TEMATIK', 'TEMATIK', NULL, NULL, '2024-01-06 07:27:55', '2024-01-06 07:27:55', 'III'),
(50, 9, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2024-01-06 07:28:08', '2024-01-06 07:28:08', NULL),
(51, 10, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2024-01-06 07:28:14', '2024-01-06 07:29:36', NULL),
(52, 1, '07.00 - 07.30', 'UPACARA BENDERA', 'LITERASI', 'LITERASI', 'LITERASI', 'WIRID', 'SENAM', '2024-01-06 19:19:09', '2024-01-06 19:19:09', 'IV.A'),
(53, 2, '07.30 - 08.05', 'UPACARA BENDERA', 'PENDIDIKAN JASMANI OLAHRAGA DAN KESEHATAN', 'PAI', 'MATEMATIKA', 'WIRID', 'SENAM', '2024-01-06 19:26:00', '2024-01-09 07:02:50', 'IV.A'),
(54, 3, '08.05 - 08.40', 'MATEMATIKA', 'PENDIDIKAN JASMANI OLAHRAGA DAN KESEHATAN', 'PAI', 'MATEMATIKA', 'PANCASILA', 'PAI', '2024-01-06 19:29:09', '2024-01-09 07:04:49', 'IV.A'),
(55, 4, '08.40 - 09.15', 'MATEMATIKA', 'PENDIDIKAN JASMANI OLAHRAGA DAN KESEHATAN', 'PAI', 'MATEMATIKA', 'PANCASILA', 'P5', '2024-01-06 19:30:37', '2024-01-09 07:05:05', 'IV.A'),
(56, 5, '09.15 - 09.30', 'ISTIRAHAT', 'ISTIRAHAT', 'ISTIRAHAT', 'ISTIRAHAT', 'ISTIRAHAT', 'ISTIRAHAT', '2024-01-06 19:31:40', '2024-01-06 19:31:40', 'IV.A'),
(57, 6, '09.30 - 10.05', 'IPAS', 'SENI BUDAYA', 'IPAS', 'PANCASILA', 'B.INDONESIA', 'P5', '2024-01-06 19:33:02', '2024-01-06 19:33:02', 'IV.A'),
(58, 7, '10.05 - 10.40', 'IPAS', 'SENI BUDAYA', 'IPAS', 'PANCASILA', 'B.INDONESIA', 'P5', '2024-01-06 19:34:42', '2024-01-06 19:34:42', 'IV.A'),
(59, 8, '10.40 - 10.55', 'ISTIRAHAT', 'ISTIRAHAT', 'ISTIRAHAT', 'ISTIRAHAT', 'ISTIRAHAT', 'ISTIRAHAT', '2024-01-06 19:36:30', '2024-01-06 19:36:30', 'IV.A'),
(60, 9, '10.55 - 11.30', 'IPAS', 'B.INDONESIA', 'BUDAYA MELAYU RIAU', 'B.INDONESIA', NULL, 'P5', '2024-01-06 19:38:23', '2024-01-09 07:06:25', 'IV.A'),
(61, 10, '11.30 - 12.05', 'IPAS', 'B.INDONESIA', 'BUDAYA MELAYU RIAU', 'B.INDONESIA', NULL, 'P5', '2024-01-06 19:39:47', '2024-01-09 07:07:19', 'IV.A'),
(62, 1, '07.00 - 07.30', 'UPACARA BENDERA', 'LITERASI', 'LITERASI', 'LITERASI', 'WIRID', 'SENAM', '2024-01-06 19:45:02', '2024-01-06 19:45:02', 'IV.B'),
(63, 2, '07.30 - 08.05', 'KEGIATAN SEBELUM BELAJAR', 'PAI', 'PENDIDIKAN JASMANI OLAHRAGA DAN KESEHATAN', 'MATEMATIKA', 'LITERASI', 'LITERASI', '2024-01-06 19:46:09', '2024-01-09 07:07:46', 'IV.B'),
(64, 3, '08.05 - 08.40', 'MATEMATIKA', 'PAI', 'PENDIDIKAN JASMANI OLAHRAGA DAN KESEHATAN', 'MATEMATIKA', 'PKN', 'PAI', '2024-01-06 19:50:39', '2024-01-09 07:08:18', 'IV.B'),
(65, 4, '08.40 - 09.15', 'MATEMATIKA', 'PAI', 'PENDIDIKAN JASMANI OLAHRAGA DAN KESEHATAN', 'MATEMATIKA', 'PKN', 'P5', '2024-01-06 19:51:24', '2024-01-09 07:08:44', 'IV.B'),
(66, 5, '09.15 - 09.30', 'ISTIRAHAT', 'ISTIRAHAT', 'ISTIRAHAT', 'ISTIRAHAT', 'ISTIRAHAT', 'ISTIRAHAT', '2024-01-06 19:51:58', '2024-01-06 19:51:58', 'IV.B'),
(67, 6, '09.30 - 10.05', 'B.INDONESIA', 'PKN', 'SBDP', 'IPAS', 'B.INDONESIA', 'P5', '2024-01-06 19:54:08', '2024-01-06 19:54:08', 'IV.B'),
(68, 7, '10.05 - 10.40', 'B.INDONESIA', 'PKN', 'SBDP', 'IPAS', 'B.INDONESIA', 'P5', '2024-01-06 19:59:38', '2024-01-06 19:59:38', 'IV.B'),
(69, 8, '10.40 - 10.55', 'ISTIRAHAT', 'ISTIRAHAT', 'ISTIRAHAT', 'ISTIRAHAT', 'ISTIRAHAT', 'ISTIRAHAT', '2024-01-06 20:00:36', '2024-01-06 20:00:36', 'IV.B'),
(70, 9, '10.55 - 11.30', 'BMR', 'IPAS', 'SBDP', 'B.INDONESIA', NULL, 'P5', '2024-01-06 20:03:02', '2024-01-06 20:03:02', 'IV.B'),
(71, 10, '11.30 - 12.05', 'BMR', 'IPAS', 'IPAS', 'B.INDONESIA', NULL, 'P5', '2024-01-06 20:19:21', '2024-01-06 20:19:21', 'IV.B'),
(72, 1, '07.00 - 07.30', 'UPACARA BENDERA', 'LITERASI', 'LITERASI', 'LITERASI', 'WIRID', 'SENAM', '2024-01-06 20:20:19', '2024-01-06 20:20:19', 'V'),
(73, 2, '07.30 - 08.05', 'UPACARA BENDERA', 'MATEMATIKA', 'MATEMATIKA', 'TEMATIK', 'WIRID', 'SENAM', '2024-01-06 20:27:11', '2024-01-06 20:27:11', 'V'),
(74, 3, '08.05 - 08.40', 'SBDP', 'MATEMATIKA', 'MATEMATIKA', 'TEMATIK', 'PENDIDIKAN JASMANI OLAHRAGA DAN KESEHATAN', 'TEMATIK', '2024-01-06 20:28:46', '2024-01-09 07:09:20', 'V'),
(75, 4, '08.40 - 09.15', 'SBDP', 'TEMATIK', 'TEMATIK', 'TEMATIK', 'PENDIDIKAN JASMANI OLAHRAGA DAN KESEHATAN', 'TEMATIK', '2024-01-06 20:29:42', '2024-01-09 07:09:46', 'V'),
(76, 5, '09.15 - 09.30', 'ISTIRAHAT', 'ISTIRAHAT', 'ISTIRAHAT', 'ISTIRAHAT', 'ISTIRAHAT', 'ISTIRAHAT', '2024-01-06 20:30:31', '2024-01-06 20:30:31', 'V'),
(77, 6, '09.30 - 10.05', 'MATEMATIKA', 'TEMATIK', 'TEMATIK', 'PENDIDIKAN JASMANI OLAHRAGA DAN KESEHATAN', 'PAI', 'TEMATIK', '2024-01-06 20:31:40', '2024-01-09 07:10:11', 'V'),
(78, 7, '10.05 - 10.40', 'MATEMATIKA', 'TEMATIK', 'TEMATIK', 'PENDIDIKAN JASMANI OLAHRAGA DAN KESEHATAN', 'PAI', 'BMR', '2024-01-06 20:33:00', '2024-01-09 07:10:29', 'V'),
(79, 8, '10.40 - 10.55', 'ISTIRAHAT', 'ISTIRAHAT', 'ISTIRAHAT', 'ISTIRAHAT', 'ISTIRAHAT', 'ISTIRAHAT', '2024-01-06 20:33:41', '2024-01-06 20:33:41', 'V'),
(80, 9, '10.55 - 11.30', 'TEMATIK', 'TEMATIK', 'SBDP', 'PAI', NULL, 'BMR', '2024-01-06 20:34:29', '2024-01-06 20:34:29', 'V'),
(81, 10, '11.30 - 12.05', 'TEMATIK', 'TEMATIK', 'SBDP', 'PAI', NULL, NULL, '2024-01-06 20:35:00', '2024-01-06 20:35:00', 'V'),
(82, 1, '07.00 - 07.30', 'UPACARA BENDERA', 'LITERASI', 'LITERASI', 'LITERASI', 'WIRID', 'SENAM', '2024-01-06 20:36:29', '2024-01-06 20:36:29', 'VI.A'),
(83, 2, '07.30 - 08.05', 'UPACARA BENDERA', 'MATEMATIKA', 'TEMATIK', 'MATEMATIKA', 'WIRID', 'SENAM', '2024-01-07 00:40:28', '2024-01-07 00:40:28', 'VI.A'),
(84, 3, '08.05 - 08.40', 'PENDIDIKAN JASMANI OLAHRAGA DAN KESEHATAN', 'MATEMATIKA', 'TEMATIK', 'MATEMATIKA', 'TEMATIK', 'TEMATIK', '2024-01-07 00:41:32', '2024-01-09 07:11:25', 'VI.A'),
(85, 4, '08.40 - 09.15', 'PENDIDIKAN JASMANI OLAHRAGA DAN KESEHATAN', 'MATEMATIKA', 'TEMATIK', 'MATEMATIKA', 'TEMATIK', 'TEMATIK', '2024-01-07 00:42:32', '2024-01-09 07:11:41', 'VI.A'),
(86, 5, '09.15 - 09.30', 'ISTIRAHAT', 'ISTIRAHAT', 'ISTIRAHAT', 'ISTIRAHAT', 'ISTIRAHAT', 'ISTIRAHAT', '2024-01-07 00:43:05', '2024-01-07 00:43:05', 'VI.A'),
(87, 6, '09.30 - 10.05', 'PAI', 'TEMATIK', 'SBDP', 'TEMATIK', 'BMR', 'PENDIDIKAN JASMANI OLAHRAGA DAN KESEHATAN', '2024-01-07 00:56:18', '2024-01-09 07:12:01', 'VI.A'),
(88, 7, '10.05 - 10.40', 'PAI', 'TEMATIK', 'SBDP', 'TEMATIK', 'BMR', 'PENDIDIKAN JASMANI OLAHRAGA DAN KESEHATAN', '2024-01-07 00:57:00', '2024-01-09 07:12:31', 'VI.A'),
(89, 8, '10.40 - 10.55', 'ISTIRAHAT', 'ISTIRAHAT', 'ISTIRAHAT', 'ISTIRAHAT', 'ISTIRAHAT', 'ISTIRAHAT', '2024-01-07 00:57:29', '2024-01-07 00:57:29', 'VI.A'),
(90, 9, '10.55 - 11.30', 'SBDP', 'PAI', 'TEMATIK', 'TEMATIK', NULL, 'TEMATIK', '2024-01-07 00:58:30', '2024-01-07 00:58:30', 'VI.A'),
(91, 10, '11.30 - 12.05', 'SBDP', 'PAI', 'TEMATIK', 'TEMATIK', NULL, NULL, '2024-01-07 00:59:30', '2024-01-07 00:59:30', 'VI.A'),
(92, 1, '07.00 - 07.30', 'UPACARA BENDERA', 'LITERASI', 'LITERASI', 'LITERASI', 'WIRID', 'SENAM', '2024-01-07 01:01:23', '2024-01-07 01:01:23', 'VI.B'),
(93, 2, '07.30 - 08.05', 'KEGIATAN SEBELUM BELAJAR', 'MATEMATIKA', 'MATEMATIKA', 'PAI', 'WIRID', 'SENAM', '2024-01-07 01:05:38', '2024-01-07 01:05:38', 'VI.B'),
(94, 3, '08.05 - 08.40', 'TEMATIK', 'MATEMATIKA', 'MATEMATIKA', 'PAI', 'TEMATIK', 'PENDIDIKAN JASMANI OLAHRAGA DAN KESEHATAN', '2024-01-07 01:06:53', '2024-01-09 07:12:42', 'VI.B'),
(95, 4, '08.40 - 09.15', 'TEMATIK', 'MATEMATIKA', 'MATEMATIKA', 'TEMATIK', 'TEMATIK', 'PENDIDIKAN JASMANI OLAHRAGA DAN KESEHATAN', '2024-01-07 01:09:23', '2024-01-09 07:12:54', 'VI.B'),
(96, 5, '09.15 - 09.30', 'ISTIRAHAT', 'ISTIRAHAT', 'ISTIRAHAT', 'ISTIRAHAT', 'ISTIRAHAT', 'ISTIRAHAT', '2024-01-07 01:10:07', '2024-01-07 01:10:07', 'VI.B'),
(97, 6, '09.30 - 10.05', 'PENDIDIKAN JASMANI OLAHRAGA DAN KESEHATAN', 'TEMATIK', 'PAI', 'TEMATIK', 'SBDP', 'TEMATIK', '2024-01-07 01:11:56', '2024-01-09 07:13:45', 'VI.B'),
(98, 7, '10.05 - 10.40', 'PENDIDIKAN JASMANI OLAHRAGA DAN KESEHATAN', 'TEMATIK', 'PAI', 'TEMATIK', 'SBDP', 'TEMATIK', '2024-01-07 01:13:45', '2024-01-09 07:13:58', 'VI.B'),
(99, 8, '10.40 - 10.55', 'ISTIRAHAT', 'ISTIRAHAT', 'ISTIRAHAT', 'ISTIRAHAT', 'ISTIRAHAT', 'ISTIRAHAT', '2024-01-07 01:14:31', '2024-01-07 01:14:31', 'VI.B'),
(100, 9, '10.55 - 11.30', 'TEMATIK', 'SBDP', 'TEMATIK', 'BMR', NULL, 'TEMATIK', '2024-01-07 01:15:53', '2024-01-07 01:15:53', 'VI.B'),
(101, 10, '11.30 - 12.05', 'TEMATIK', 'SBDP', 'TEMATIK', 'BMR', NULL, NULL, '2024-01-07 01:16:31', '2024-01-07 01:16:31', 'VI.B');

-- --------------------------------------------------------

--
-- Table structure for table `kategori_artikel`
--

CREATE TABLE `kategori_artikel` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nama_kategori` varchar(255) DEFAULT NULL,
  `slug` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `kriteria`
--

CREATE TABLE `kriteria` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `kode_kriteria` varchar(255) NOT NULL,
  `nama_kriteria` varchar(255) NOT NULL,
  `bobot` double NOT NULL,
  `jenis` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `kriteria`
--

INSERT INTO `kriteria` (`id`, `kode_kriteria`, `nama_kriteria`, `bobot`, `jenis`, `created_at`, `updated_at`) VALUES
(1, 'C01', 'Total Nilai Ujian Ganjil', 0.61, 'Benefit', NULL, NULL),
(2, 'C02', 'Kelas', 0.28, 'Cost', NULL, NULL),
(3, 'C03', 'Kehadiran', 0.11, 'Benefit', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2014_10_12_200000_add_two_factor_columns_to_users_table', 1),
(4, '2019_08_19_000000_create_failed_jobs_table', 1),
(5, '2021_03_11_230713_create_pengumuman_table', 1),
(6, '2021_03_11_230723_create_agenda_table', 1),
(7, '2021_03_12_170942_create_artikel_table', 1),
(8, '2021_03_12_170959_create_kategori_artikel_table', 1),
(9, '2021_03_12_171751_create_banners_table', 1),
(10, '2021_03_12_172043_create_navbars_table', 1),
(11, '2023_12_28_171354_siswa', 1),
(12, '2023_12_28_175058_kriteria', 1),
(13, '2024_01_01_112619_create_jadwal_pelajaran_table', 2),
(14, '2024_01_05_131022_add_kelas_to_jadwal_pelajaran_table', 3);

-- --------------------------------------------------------

--
-- Table structure for table `navbars`
--

CREATE TABLE `navbars` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `judul` varchar(255) DEFAULT NULL,
  `icon` varchar(255) DEFAULT NULL,
  `is_active` tinyint(4) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) NOT NULL,
  `token` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `pengumuman`
--

CREATE TABLE `pengumuman` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `judul` varchar(255) DEFAULT NULL,
  `deskripsi` text DEFAULT NULL,
  `tgl` varchar(255) DEFAULT NULL,
  `slug` varchar(255) DEFAULT NULL,
  `user_id` bigint(20) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `pengumuman`
--

INSERT INTO `pengumuman` (`id`, `judul`, `deskripsi`, `tgl`, `slug`, `user_id`, `created_at`, `updated_at`) VALUES
(1, 'Lomba Melukis Tingkat SD Se-Kecamatan Bantan', '<p>Diumumkan kepada seluruh siswa SDN 9 Bantan Air, bagi yang ingin mendaftar lomba melukis, harap mendaftar ke panitia<br></p>', '2023-12-31', 'lomba-melukis-tingkat-sd-se-kecamatan-bantan', 2, '2023-12-31 01:16:38', '2023-12-31 01:16:38'),
(3, 'Informasi 1', '<p>Selamat Siang<br></p>', '2024-01-09', 'informasi-1', 1, '2024-01-08 17:37:57', '2024-01-08 17:37:57'),
(4, 'Informasi 2', '<p>Selamat Pagi<br></p>', '2024-01-09', 'informasi-2', 1, '2024-01-08 17:38:14', '2024-01-08 17:38:14'),
(5, 'Halo', '<p>Hai<br></p>', '2024-01-09', 'halo', 2, '2024-01-09 07:18:53', '2024-01-09 07:18:53');

-- --------------------------------------------------------

--
-- Table structure for table `siswa`
--

CREATE TABLE `siswa` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nama_siswa` varchar(255) NOT NULL,
  `kriteria_1` int(11) NOT NULL,
  `kriteria_2` int(11) NOT NULL,
  `kriteria_3` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `siswa`
--

INSERT INTO `siswa` (`id`, `nama_siswa`, `kriteria_1`, `kriteria_2`, `kriteria_3`, `created_at`, `updated_at`) VALUES
(16, 'Alex', 580, 2, 19, '2024-01-11 21:00:31', '2024-01-11 21:00:31'),
(17, 'Alfian', 570, 2, 20, '2024-01-11 21:01:02', '2024-01-11 21:01:02'),
(18, 'Bayu', 585, 2, 19, '2024-01-11 21:01:21', '2024-01-11 21:01:21'),
(19, 'Feni', 576, 2, 18, '2024-01-11 21:02:05', '2024-01-11 21:02:20'),
(20, 'Via', 585, 2, 20, '2024-01-15 01:26:25', '2024-01-15 01:26:25');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) DEFAULT NULL,
  `email` varchar(255) NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) NOT NULL,
  `two_factor_secret` text DEFAULT NULL,
  `two_factor_recovery_codes` text DEFAULT NULL,
  `level` varchar(255) NOT NULL,
  `nip` varchar(255) DEFAULT NULL,
  `kelahiran` varchar(255) DEFAULT NULL,
  `pangkat` varchar(255) DEFAULT NULL,
  `pendidikan` varchar(255) DEFAULT NULL,
  `jabatan` varchar(255) DEFAULT NULL,
  `remember_token` varchar(100) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `two_factor_secret`, `two_factor_recovery_codes`, `level`, `nip`, `kelahiran`, `pangkat`, `pendidikan`, `jabatan`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Administrator', 'admin01@gmail.com', NULL, '$2y$10$vk3yP4XTGx2O1fpI5Ls0N.vapARDqP0oJKWEBOKWHn.3QBgYT89IO', NULL, NULL, 'admin', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(2, 'Alfian Syahli', 'alfian123@gmail.com', NULL, '$2y$10$T88PeTon8PZmSQqMpgUdhObVTDXZ/aOcMud3M54ePuaKjjma6foma', NULL, NULL, 'admin', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(15, 'Siti Maryamah, S.Pd', 'wildanzerina@gmail.com', NULL, '$2y$10$557C5R6frha0fj/AL4jTtel600oba2Mp4O3wL2r69WPRvt5ibwmEq', NULL, NULL, 'user', '19821208200801 2 006', '1982-12-08', 'Penata Muda/III.A', 'S1', 'Guru Kelas V', NULL, '2024-01-01 00:31:27', '2024-01-07 02:36:44'),
(16, 'Khairani, S.Pd.I', 'sdnrani9@gmail.com', NULL, '$2y$10$jmo1tPbduosaIrlSaQ90ree7HoLEEW/1kmUBJdO4wQUi86LRVBkGi', NULL, NULL, 'user', '19801218200801 2 018', '1980-12-18', 'Penata Muda Tk.I.III/B', 'S1', 'Guru Kelas II B', NULL, '2024-01-01 00:37:34', '2024-01-07 02:36:55'),
(17, 'Sarengat, S.Pd.SD', 'sarengatsdn123@gmail.com', NULL, '$2y$10$k7ynlJNMGN/0yBheAQrqduapnd4vEwj0r8eMYTd2A36A4ziy5UJ4a', NULL, NULL, 'user', '19640215200801 1 004', '1964-02-15', 'Penata III/C', 'S1', 'Guru Kelas III', NULL, '2024-01-01 00:38:25', '2024-01-07 02:37:13'),
(18, 'Ratna Wilis, S.Pd.I', 'ratna19wilis@gmail.com', NULL, '$2y$10$ZgyOKZwdctvtiW6BzHqMIulTi4lz5gyO5I7pWzf.5InV.YjzCXweS', NULL, NULL, 'user', '197202192023212004', '1972-02-19', NULL, 'S1', 'Guru PAI', NULL, '2024-01-01 00:39:20', '2024-01-07 02:37:33'),
(19, 'Tria Salmah, S.Pd', 'salmatria6@gmail.com', NULL, '$2y$10$QrYi1m/uKj3kmTArpLcFOekCSJXkBruRNkeAhJr73sfRSp3BVjwxS', NULL, NULL, 'user', '199009182023212026', '1990-09-18', NULL, 'S1', 'Guru Kelas', NULL, '2024-01-01 00:41:10', '2024-01-07 02:38:31'),
(20, 'Nyimas Siti Halijah, S.Ag', 'nyimas1303@gmail.com', NULL, '$2y$10$s7pwTgRX9J6s7weirwyOleSi9uB1GpaM3ZTWcOFa3uvHUGnE.eZGS', NULL, NULL, 'user', '19780313200801 2 019', '1978-03-13', 'Penata TK.I.III/D', 'S1', 'Guru Kelas IV.B', NULL, '2024-01-01 00:44:57', '2024-01-15 01:25:24'),
(21, 'Muntamah, S.Pd', 'mun119312@gmail.com', NULL, '$2y$10$hRl5pgMF4OVHAGTMo419D.iWpb3v7SkmvSGLQhjz17NmaveCQr./u', NULL, NULL, 'user', '198306202023212023', '1983-06-20', NULL, 'S1', 'Guru Kelas VI.A', NULL, '2024-01-01 00:45:47', '2024-01-07 02:39:23'),
(22, 'Harun, S.Pd.SD', 'harun61165@gmail.com', NULL, '$2y$10$i5MapQ.v.rwf7Ei54.oWuuqzyRM7k9y5sd65.3EDGG6kBmMHsbBci', NULL, NULL, 'user', '19651106198609 1 001', '1965-11-06', 'Pembina IV/A', 'S1', 'Guru Kelas VI.B', NULL, '2024-01-01 00:47:20', '2024-01-07 02:40:15'),
(23, 'Masyhadi, S.Pd.I', 'masyhadibantan@gmail.com', NULL, '$2y$10$A.ttlWtz3MPqH.Wt7WcmmeHAUEAyvAT06NYbVbUiI6CWghojbCY0q', NULL, NULL, 'user', NULL, '1986-04-17', NULL, 'S1', 'Guru PAI', NULL, '2024-01-01 00:49:32', '2024-01-07 02:40:28'),
(24, 'Yuliana, S.Pd.I', 'yuliana.sdn17penyagun@gmail.com', NULL, '$2y$10$0xKQjMrcDbL.L0dGSYmw4.o2BXmSWbhmu7Zt8BqI3f/Wrf5lwbUrO', NULL, NULL, 'user', '19801222200801 2 012', '1980-12-22', 'Penata Muda III/A', 'S1', 'Guru Kelas II A', NULL, '2024-01-01 00:50:51', '2024-01-07 02:40:43'),
(25, 'Sri Rahayu, S.Pd', 'srirahayubks95@gmail.com', NULL, '$2y$10$CXGl37RC0w.ThwaEkiQF3u4czG22yUzTcxhydpkhWPH69n1sAe9Ia', NULL, NULL, 'user', '199505252023212031', '1995-05-25', NULL, 'S1', 'Guru PJOK', NULL, '2024-01-01 00:52:17', '2024-01-07 02:41:20'),
(26, 'Zamhuriah, S.Pd.I', 'zamhuriah0303@gmail.com', NULL, '$2y$10$inxIfjc5z1gtB.U670a4QeX07lnznOcrJvnLgZEyScK2AR4d0a9Cy', NULL, NULL, 'user', '197303031999032002', '1973-03-03', 'Penata TK.I.III/D', 'S1', 'Guru PAI', NULL, '2024-01-01 00:53:57', '2024-01-07 02:41:32'),
(27, 'Nurbaiti, S.Ag', 'nurbaitibantan@gmail.com', NULL, '$2y$10$PxKYx15EZY2v2LfRl5V2WOCgHX.39O/uh5ZF1l87/P1gDigdgYad2', NULL, NULL, 'user', '19751221200801 2 015', '1975-12-21', 'Penata TK.I.III/D', 'S1', 'Guru Kelas IV.A', NULL, '2024-01-01 00:55:15', '2024-01-07 02:41:44'),
(28, 'Siti Nuryana, S.Pd.SD', 'nuryanasiti280@gmail.com', NULL, '$2y$10$IO5UPRptFSiOk.5NBcVhC.iq1TCNAsBtl5gvn7fExQTxi.GWQclPC', NULL, NULL, 'user', '19760912200801 2 020', '1976-09-12', 'Penata III/C', 'S1', 'Guru Kelas I', NULL, '2024-01-01 00:57:46', '2024-01-07 02:41:56'),
(29, 'Dewi Arini', 'dewiarini@gmail.com', NULL, '$2y$10$D5Ktg9Wwnxp8D.h0DxXK8e.9mPONLeIeptJzd9IJi2eDnFOreEyX2', NULL, NULL, 'user', NULL, '2000-06-13', NULL, 'S1', 'Tenaga Administrasi Sekolah', NULL, '2024-01-08 04:59:46', '2024-01-08 04:59:46'),
(30, 'Slamet', 'slametsdn9bantan@gmail.com', NULL, '$2y$10$c65aL33xqW.wpUhMaHNnmuyoKmBEKK1h7/dGQyNwjBSTk95qXq6bO', NULL, NULL, 'user', NULL, '1970-12-12', NULL, NULL, 'Tukang  Kebun', NULL, '2024-01-08 05:01:46', '2024-01-08 05:01:46'),
(31, 'Siti Rahayu', 'sitirahayusd9@gmail.com', NULL, '$2y$10$MpHyIHhnt3wmnA7i9XyHYuZiGJVa2XvPzyG41Yvdv.dBcfShk4s9O', NULL, NULL, 'user', NULL, '1987-03-01', NULL, 'S1', 'Tenaga Perpustakaan', NULL, '2024-01-08 05:03:58', '2024-01-08 05:03:58'),
(32, 'Luthfi Ramadhan', 'luthfi123@gmail.com', NULL, '$2y$10$YMQBE0JjGwtvxj3kk3xsBu2GML9sRDRoWqWTEZpQlPS43iYxN6faq', NULL, NULL, 'user', NULL, '2001-11-26', NULL, 'SLTA', 'Tenaga Administrasi/Tenaga Kependidikan', NULL, '2024-01-09 05:17:30', '2024-01-09 05:17:30'),
(34, 'Testing', 'testing123@gmail.com', NULL, '$2y$10$Tdpc1oqboJR8HIsGHypK3.aMY3vezN2AcjTJzc96aUoZTd/k2d97C', NULL, NULL, 'user', NULL, NULL, NULL, NULL, 'Staff', NULL, '2024-01-15 01:18:34', '2024-01-15 01:18:34');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `agenda`
--
ALTER TABLE `agenda`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `artikel`
--
ALTER TABLE `artikel`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `banners`
--
ALTER TABLE `banners`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `jadwal_pelajaran`
--
ALTER TABLE `jadwal_pelajaran`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `kategori_artikel`
--
ALTER TABLE `kategori_artikel`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `kriteria`
--
ALTER TABLE `kriteria`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `navbars`
--
ALTER TABLE `navbars`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `pengumuman`
--
ALTER TABLE `pengumuman`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `siswa`
--
ALTER TABLE `siswa`
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
-- AUTO_INCREMENT for table `agenda`
--
ALTER TABLE `agenda`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `artikel`
--
ALTER TABLE `artikel`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `banners`
--
ALTER TABLE `banners`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `jadwal_pelajaran`
--
ALTER TABLE `jadwal_pelajaran`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=102;

--
-- AUTO_INCREMENT for table `kategori_artikel`
--
ALTER TABLE `kategori_artikel`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `kriteria`
--
ALTER TABLE `kriteria`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `navbars`
--
ALTER TABLE `navbars`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `pengumuman`
--
ALTER TABLE `pengumuman`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `siswa`
--
ALTER TABLE `siswa`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=35;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
