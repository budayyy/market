-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 19, 2022 at 04:58 AM
-- Server version: 10.1.38-MariaDB
-- PHP Version: 7.3.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `market`
--

-- --------------------------------------------------------

--
-- Table structure for table `address`
--

CREATE TABLE `address` (
  `adr_id` varchar(12) NOT NULL,
  `adr_mb_id` varchar(12) NOT NULL,
  `adr_address` text NOT NULL,
  `adr_cty_id` varchar(30) NOT NULL,
  `adr_create` datetime NOT NULL,
  `adr_update` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `address`
--

INSERT INTO `address` (`adr_id`, `adr_mb_id`, `adr_address`, `adr_cty_id`, `adr_create`, `adr_update`) VALUES
('AD00001', 'MB000000001', 'Jl.Kartini No.27 ', 'CT00025', '2022-01-13 14:04:18', '2022-01-13 14:04:18'),
('AD00002', 'MB000000002', 'jl. Pahlawan No.35', 'CT00021', '2022-01-13 14:04:54', '2022-01-13 14:04:54'),
('AD00003', 'MB000000003', 'jl.Cikutra Barat No.51', 'CT00147', '2022-02-22 10:29:48', '2022-02-22 10:29:48'),
('AD00004', 'MB000000004', 'jl.Gajah Mada', 'CT00148', '2022-02-22 10:30:16', '2022-02-22 10:30:16'),
('AD00005', 'MB000000005', 'jl.Gajah Mada', 'CT00130', '2022-02-22 10:30:55', '2022-02-22 10:30:55'),
('AD00006', 'MB000000006', 'jl.pekiringan no.7', 'CT00149', '2022-02-22 10:31:26', '2022-02-22 10:31:26'),
('AD00007', 'MB000000007', 'jl.belokan indah No.10', 'CT00152', '2022-02-22 10:31:50', '2022-02-22 10:31:50'),
('AD00008', 'MB000000008', 'jl.Cikutra Barat No.95', 'CT00160', '2022-02-22 10:32:22', '2022-02-22 10:32:22'),
('AD00009', 'MB000000009', 'jl.Terusan Pasir Koja No.71', 'CT00163', '2022-02-22 10:40:14', '2022-02-22 10:40:14'),
('AD00010', 'MB000000010', 'jl.Raya Kopo No.2', 'CT00162', '2022-02-22 10:41:21', '2022-02-22 10:41:21'),
('AD00011', 'MB000000011', 'Jl. Pasir Kaliki No.138, Pasir Kaliki, Kec. Cicendo, Kota Bandung, ', 'CT00148', '2022-03-03 14:20:00', '2022-03-03 14:20:00'),
('AD00012', 'MB000000012', 'jl.tengah ujung', 'CT00109', '2022-03-03 14:20:00', '2022-03-03 14:20:00'),
('AD00013', 'MB000000013', 'jl.merdeka', 'CT00021', '2022-03-03 14:20:00', '2022-03-03 14:20:00'),
('AD00014', 'MB000000014', 'jl.pekiringan', 'CT00130', '2022-03-03 14:20:00', '2022-03-03 14:20:00'),
('AD00015', 'MB000000015', 'jl.pemuda', 'CT00149', '2022-03-03 14:25:20', '2022-03-03 14:25:20'),
('AD00016', 'MB000000016', 'jl.gunung laya', 'CT00160', '2022-03-03 14:25:20', '2022-03-03 14:25:20'),
('AD00017', 'MB000000017', 'jl.suka senang', 'CT00025', '2022-03-03 14:25:20', '2022-03-03 14:25:20'),
('AD00018', 'MB000000018', 'jl.lima delima', 'CT00162', '2022-03-03 14:25:20', '2022-03-03 14:25:20'),
('AD00019', 'MB000000019', 'jl.perminda', 'CT00130', '2022-03-03 14:25:20', '2022-03-03 14:25:20'),
('AD00020', 'MB000000020', 'jl.tikungan', 'CT00148', '2022-03-03 14:25:20', '2022-03-03 14:25:20'),
('AD00021', 'MB000000021', 'jl.derinda ', 'CT00025', '2022-03-03 14:25:20', '2022-03-03 14:25:20'),
('AD00022', 'MB000000022', 'jl.villa', 'CT00157', '2022-03-03 14:25:20', '2022-03-03 14:25:20'),
('AD00023', 'MB000000023', 'jl.kebon baru', 'CT00130', '2022-03-03 14:25:20', '2022-03-03 14:25:20'),
('AD00024', 'MB000000024', 'jl.indah permata', 'CT00021', '2022-03-03 14:25:20', '2022-03-03 14:25:20'),
('AD00025', 'MB000000025', 'jl.tengah tani', 'CT00130', '2022-03-03 14:25:20', '2022-03-03 14:25:20');

-- --------------------------------------------------------

--
-- Table structure for table `administrator`
--

CREATE TABLE `administrator` (
  `adm_id` varchar(11) NOT NULL,
  `adm_name` varchar(60) NOT NULL,
  `adm_email` varchar(45) NOT NULL,
  `adm_phone` varchar(13) NOT NULL,
  `adm_username` varchar(25) NOT NULL,
  `adm_password` text NOT NULL,
  `role_id` int(2) NOT NULL,
  `picture` varchar(50) NOT NULL,
  `adm_create` datetime NOT NULL,
  `adm_update` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `administrator`
--

INSERT INTO `administrator` (`adm_id`, `adm_name`, `adm_email`, `adm_phone`, `adm_username`, `adm_password`, `role_id`, `picture`, `adm_create`, `adm_update`) VALUES
('AD000000001', 'Budi setiawan', 'bsetiawan260@gmail.com', '087829890388', 'buday', '$2y$10$0GEtgvJRxD3Es2E.7FO7yOuo0Oidmf8W6Cia0AUvJYHe0fG1rz.4a', 1, 'sibudi.jpg', '2022-01-24 13:51:11', '2022-04-05 13:41:40'),
('AD000000002', 'Deni', 'deni02@gmail.com', '08934566882', 'Deni2', '8cb2237d0679ca88db6464eac60da96345513964', 0, '', '2022-01-24 13:51:54', '2022-01-24 13:51:54'),
('AD000000003', 'Dede Muchidin', 'dede@gmail.com', '08977702445', 'deded', '$2y$10$yRjq6bAhDRGzJguhU8ljpe8xAQOeWwpXUJe4AcwWZBZo2qupZkf0.', 2, '', '2022-03-05 22:20:06', '2022-03-05 22:20:06'),
('AD000000004', 'Reza Rizky F', 'reza@gmail.com', '08977702445', 'rezarizkyf', '$2y$10$wjXtODgK9YxWj54AcebynOUpaKNjsHlt2krhbCkBGE9yatIhftEUq', 3, '', '2022-03-05 22:20:34', '2022-03-05 22:20:34');

-- --------------------------------------------------------

--
-- Table structure for table `architect_consultant`
--

CREATE TABLE `architect_consultant` (
  `ac_id` varchar(30) NOT NULL,
  `ac_name` varchar(50) NOT NULL,
  `ac_email` varchar(30) NOT NULL,
  `ac_phone` varchar(20) NOT NULL,
  `name_pt` varchar(25) NOT NULL,
  `ac_payment` double NOT NULL,
  `ac_create` datetime NOT NULL,
  `ac_update` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `architect_consultant`
--

INSERT INTO `architect_consultant` (`ac_id`, `ac_name`, `ac_email`, `ac_phone`, `name_pt`, `ac_payment`, `ac_create`, `ac_update`) VALUES
('ARC000000001', 'Abi Rafda, S.T', 'AbiR@gmail.com', '089842102650', 'PT.JAYA CITRA', 1000000, '2022-01-21 09:52:14', '2022-01-21 09:52:14'),
('ARC000000002', 'Budi Setiawan, S.T', 'budi@gmail.com', '087829890388', 'PT IPTEK Technology', 1500000, '2022-03-08 09:39:40', '2022-03-08 09:39:40'),
('ARC000000003', 'Dede Muchidin, S.T', 'dede@gmail.com', '08765432690', 'PT Wismilak Prakarsa', 500000, '2022-03-08 09:46:02', '2022-03-08 09:46:02');

-- --------------------------------------------------------

--
-- Table structure for table `cart`
--

CREATE TABLE `cart` (
  `crt_id` varchar(14) NOT NULL,
  `crt_date` datetime NOT NULL,
  `crt_mb_id` varchar(12) NOT NULL,
  `crt_rtl_id` varchar(12) NOT NULL,
  `crt_ongkir` double NOT NULL,
  `crt_berattotal` varchar(14) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `cart`
--

INSERT INTO `cart` (`crt_id`, `crt_date`, `crt_mb_id`, `crt_rtl_id`, `crt_ongkir`, `crt_berattotal`) VALUES
('CRT000000002', '2022-02-09 10:15:08', 'MB000000002', 'RTL00000002', 45000, '4KG'),
('CRT000000003', '2022-02-16 10:15:08', 'MB000000002', 'RTL00000002', 35000, '3000gram');

-- --------------------------------------------------------

--
-- Table structure for table `cart_detail`
--

CREATE TABLE `cart_detail` (
  `crd_id` varchar(14) NOT NULL,
  `crt_id` varchar(14) NOT NULL,
  `crd_prd_id` varchar(12) NOT NULL,
  `crd_prd_name` varchar(50) NOT NULL,
  `crd_price` double NOT NULL,
  `crd_qty` int(4) NOT NULL,
  `crd_totalprice` double NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `cart_detail`
--

INSERT INTO `cart_detail` (`crd_id`, `crt_id`, `crd_prd_id`, `crd_prd_name`, `crd_price`, `crd_qty`, `crd_totalprice`) VALUES
('CRD000000001', 'CRT000000002', 'PRD0084', 'Paku seng asbes payung roofing 2inch 900 gram ', 85000, 2, 170000),
('CRD000000002', 'CRT000000002', 'PRD0083', 'Paku kayu 2 inch – paku kayu 5cm per 250 gram', 85000, 3, 255000);

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE `category` (
  `ctg_id` varchar(7) NOT NULL,
  `ctg_name` varchar(65) NOT NULL,
  `ctg_create` datetime NOT NULL,
  `ctg_update` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`ctg_id`, `ctg_name`, `ctg_create`, `ctg_update`) VALUES
('CTG0001', 'dapur', '2021-12-27 10:17:48', '2021-12-30 10:17:48'),
('CTG0002', 'kamar mandi', '2021-12-22 14:04:31', '2021-12-22 08:04:34'),
('CTG0003', 'ruang tamu', '2021-12-22 14:05:10', '2021-12-22 08:05:10'),
('CTG0004', 'atap rumah', '2021-12-22 08:05:35', '2021-12-22 08:05:35'),
('CTG0005', 'jendela', '2021-12-22 14:06:01', '2021-12-22 08:06:01'),
('CTG0006', 'peralatan bangunan', '2021-12-22 14:06:21', '2021-12-22 08:06:21'),
('CTG0007', 'cat tembok', '2021-12-22 14:06:50', '2021-12-22 08:06:50'),
('CTG0008', 'bahan bangunan', '2022-01-04 14:55:16', '2022-01-28 14:55:16');

-- --------------------------------------------------------

--
-- Table structure for table `chat`
--

CREATE TABLE `chat` (
  `chat_id` varchar(14) NOT NULL,
  `mb_id` varchar(14) NOT NULL,
  `chat_text` text NOT NULL,
  `prd_id` varchar(14) NOT NULL,
  `chat_create` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `chat_admin`
--

CREATE TABLE `chat_admin` (
  `chat_id` varchar(12) NOT NULL,
  `pengirim` varchar(30) NOT NULL,
  `penerima` varchar(30) NOT NULL,
  `chat` text NOT NULL,
  `datetime` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `chat_admin`
--

INSERT INTO `chat_admin` (`chat_id`, `pengirim`, `penerima`, `chat`, `datetime`) VALUES
('CHT00000001', 'aay03', 'buday', 'halo kak', '2022-03-24 09:28:00'),
('CHT00000002', 'buday', 'aay03', 'halo juga kak', '2022-04-04 08:44:09'),
('CHT00000003', 'vatma02', 'buday', 'halo min', '2022-03-18 04:09:10'),
('CHT00000004', 'buday', 'vatma02', 'halo ada yg bisa saya bantu', '2022-04-07 08:40:20');

-- --------------------------------------------------------

--
-- Table structure for table `city`
--

CREATE TABLE `city` (
  `cty_id` varchar(7) NOT NULL,
  `cty_prv_id` varchar(7) NOT NULL,
  `cty_name` text NOT NULL,
  `cty_create` datetime NOT NULL,
  `cty_update` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `city`
--

INSERT INTO `city` (`cty_id`, `cty_prv_id`, `cty_name`, `cty_create`, `cty_update`) VALUES
('CT00001', 'PR08', 'Langsa', '2021-12-28 09:07:34', '2021-12-31 09:07:34'),
('CT00002', 'PR08', 'Lhokseumawe', '2021-12-28 09:08:16', '2021-12-31 09:08:16'),
('CT00003', 'PR08', 'Sabang', '2021-12-28 09:08:49', '2021-12-31 09:08:49'),
('CT00004', 'PR08', 'Subulussalam', '2021-12-28 09:09:16', '2021-12-31 09:09:16'),
('CT00005', 'PR09', 'Denpasar', '2021-12-28 09:10:04', '2021-12-31 09:10:04'),
('CT00006', 'PR10', 'Pangkal Pinang', '2021-12-28 09:10:34', '2021-12-31 09:10:34'),
('CT00007', 'PR11', 'Cilegon', '2021-12-28 09:11:08', '2021-12-31 09:11:08'),
('CT00008', 'PR11', 'Serang', '2021-12-28 09:11:42', '2021-12-31 09:11:42'),
('CT00009', 'PR11', 'Tanggerang Selatan', '2021-12-28 09:13:15', '2021-12-31 09:13:15'),
('CT00010', 'PR11', 'Tanggerang', '2021-12-28 09:13:45', '2021-12-31 09:13:45'),
('CT00011', 'PR12', 'Bengkulu', '2021-12-28 09:14:40', '2021-12-31 09:14:40'),
('CT00012', 'PR03', 'Yogyakarta', '2021-12-28 09:15:49', '2021-12-31 09:15:49'),
('CT00013', 'PR04', 'Gorontalo', '2021-12-28 09:16:36', '2021-12-31 09:16:36'),
('CT00014', 'PR02', 'Kota administrasi Jakarta Barat', '2021-12-28 09:17:11', '2021-12-31 09:17:11'),
('CT00015', 'PR02', 'Kota Administrasi Jakarta Pusat', '2021-12-28 09:17:45', '2021-12-31 09:17:46'),
('CT00016', 'PR02', 'Kota Administrasi Jakarta Selatan', '2021-12-28 09:18:27', '2021-12-31 09:18:27'),
('CT00017', 'PR02', 'Kota Administrasi Jakarta Timur', '2021-12-28 09:19:03', '2021-12-31 09:19:03'),
('CT00018', 'PR02', 'Kota Administrasi Jakarta Utara', '2021-12-28 09:19:03', '2021-12-31 09:19:03'),
('CT00019', 'PR05', 'Sungai Penuh', '2021-12-28 09:20:03', '2021-12-31 09:20:03'),
('CT00020', 'PR05', 'Jambi', '2021-12-28 09:21:46', '2021-12-31 09:21:46'),
('CT00021', 'PR01', 'Bandung', '2021-12-28 09:22:07', '2021-12-31 09:22:07'),
('CT00022', 'PR01', 'Bekasi', '2021-12-28 09:24:00', '2021-12-31 09:24:00'),
('CT00023', 'PR01', 'Bogor', '2021-12-28 09:24:35', '2021-12-31 09:24:35'),
('CT00024', 'PR01', 'Cimahi', '2021-12-28 09:24:35', '2021-12-31 09:24:35'),
('CT00025', 'PR01', 'Cirebon', '2021-12-28 09:27:06', '2021-12-31 09:27:06'),
('CT00026', 'PR01', 'Depok', '2021-12-28 09:27:06', '2021-12-31 09:27:06'),
('CT00027', 'PR01', 'Sukabumi', '2021-12-28 09:27:55', '2021-12-31 09:27:55'),
('CT00028', 'PR01', 'Tasikmalaya', '2021-12-28 09:28:18', '2021-12-31 09:28:18'),
('CT00029', 'PR01', 'Banjar', '2021-12-28 09:28:18', '2021-12-31 09:28:18'),
('CT00030', 'PR07', 'Magelang', '2021-12-28 09:30:15', '2021-12-31 09:30:15'),
('CT00031', 'PR07', 'Pekalongan', '2021-12-28 09:30:40', '2021-12-31 09:30:40'),
('CT00032', 'PR07', 'Salatiga', '2021-12-28 09:30:59', '2021-12-31 09:30:59'),
('CT00033', 'PR07', 'Semarang', '2021-12-28 09:31:22', '2021-12-31 09:31:22'),
('CT00034', 'PR07', 'Surakarta', '2021-12-28 09:31:22', '2021-12-31 09:31:22'),
('CT00035', 'PR07', 'Tegal', '2021-12-28 09:32:31', '2021-12-31 09:32:31'),
('CT00036', 'PR06', 'Batu', '2021-12-28 09:33:16', '2021-12-31 09:33:16'),
('CT00037', 'PR06', 'Blitar', '2021-12-28 09:33:16', '2021-12-31 09:33:16'),
('CT00038', 'PR06', 'Kediri', '2021-12-28 09:34:12', '2021-12-31 09:34:12'),
('CT00039', 'PR06', 'Madiun', '2021-12-28 09:34:12', '2021-12-31 09:34:12'),
('CT00040', 'PR06', 'Malang', '2021-12-28 09:34:55', '2021-12-31 09:34:55'),
('CT00041', 'PR06', 'Mojokerto', '2021-12-28 09:34:55', '2021-12-31 09:34:55'),
('CT00042', 'PR06', 'Pasuruan', '2021-12-28 09:35:43', '2021-12-31 09:35:43'),
('CT00043', 'PR06', 'Probolinggo', '2021-12-28 09:35:43', '2021-12-31 09:35:43'),
('CT00044', 'PR06', 'Surabaya', '2021-12-28 09:36:42', '2021-12-31 09:36:42'),
('CT00045', 'PR13', 'Pontianak', '2021-12-28 09:37:21', '2021-12-31 09:37:21'),
('CT00046', 'PR13', 'Singkawang', '2021-12-28 09:37:21', '2021-12-31 09:37:21'),
('CT00047', 'PR14', 'Banjar Baru', '2021-12-28 09:38:23', '2021-12-31 09:38:23'),
('CT00048', 'PR13', 'Banjarmasin', '2021-12-28 09:38:23', '2021-12-31 09:38:23'),
('CT00049', 'PR15', 'Palangkaraya', '2021-12-28 09:39:45', '2021-12-31 09:39:45'),
('CT00050', 'PR16', 'Balikpapan', '2021-12-28 09:41:46', '2021-12-31 09:41:46'),
('CT00051', 'PR16', 'Bontang', '2021-12-28 09:41:46', '2021-12-31 09:41:46'),
('CT00052', 'PR16', 'Samarinda', '2021-12-28 09:44:05', '2021-12-31 09:44:05'),
('CT00053', 'PR17', 'Tarakan', '2021-12-28 09:44:47', '2021-12-31 09:44:47'),
('CT00054', 'PR18', 'Batam', '2021-12-28 09:45:20', '2021-12-31 09:45:20'),
('CT00055', 'PR18', 'Tanjung Pinang', '2021-12-28 09:45:20', '2021-12-31 09:45:20'),
('CT00056', 'PR18', 'Bandar Lampung', '2021-12-28 09:46:28', '2021-12-31 09:46:28'),
('CT00057', 'PR19', 'Metro', '2021-12-28 09:46:56', '2021-12-31 09:46:56'),
('CT00058', 'PR20', 'Ternate', '2021-12-28 09:47:25', '2021-12-31 09:47:25'),
('CT00059', 'PR20', 'Tidore Kepulauan', '2021-12-28 09:47:25', '2021-12-31 09:47:25'),
('CT00060', 'PR20', 'Ambon', '2021-12-28 09:48:30', '2021-12-31 09:48:30'),
('CT00061', 'PR21', 'Tual', '2021-12-28 09:49:13', '2021-12-31 09:49:13'),
('CT00062', 'PR22', 'Bima', '2021-12-28 09:49:37', '2021-12-31 09:49:37'),
('CT00063', 'PR22', 'Mataram', '2021-12-28 09:49:37', '2021-12-31 09:49:37'),
('CT00064', 'PR23', 'Kupang', '2021-12-28 09:50:39', '2021-12-31 09:50:39'),
('CT00065', 'PR24', 'Sorong', '2021-12-28 09:51:24', '2021-12-31 09:51:24'),
('CT00066', 'PR25', 'Jayapura', '2021-12-28 09:51:55', '2021-12-31 09:51:55'),
('CT00067', 'PR26', 'Dumai', '2021-12-28 09:52:29', '2021-12-31 09:52:29'),
('CT00068', 'PR26', 'Pekan Baru', '2021-12-28 09:52:29', '2021-12-31 09:52:29'),
('CT00069', 'PR27', 'Makasar', '2021-12-28 09:53:29', '2021-12-31 09:53:29'),
('CT00070', 'PR27', 'Palopo', '2021-12-28 03:54:05', '2021-12-28 03:54:05'),
('CT00071', 'PR27', 'Parepare', '2021-12-28 09:54:05', '2021-12-31 09:54:05'),
('CT00072', 'PR28', 'Palu', '2021-12-28 09:54:51', '2021-12-31 09:54:51'),
('CT00073', 'PR29', 'Baubau', '2021-12-28 09:55:43', '2021-12-31 09:55:43'),
('CT00074', 'PR29', 'Kendari', '2021-12-28 09:55:43', '2021-12-31 09:55:43'),
('CT00075', 'PR30', 'Bitung', '2021-12-28 09:56:58', '2021-12-31 09:56:58'),
('CT00076', 'PR30', 'Kotamobago', '2021-12-28 09:56:58', '2021-12-31 09:56:58'),
('CT00077', 'PR30', 'Manado', '2021-12-28 09:58:05', '2021-12-31 09:58:05'),
('CT00078', 'PR30', 'Tomohon', '2021-12-28 09:58:05', '2021-12-31 09:58:05'),
('CT00079', 'PR31', 'Bukittinggi', '2021-12-28 09:59:20', '2021-12-31 09:59:20'),
('CT00080', 'PR31', 'Padang Panjang', '2021-12-28 09:59:20', '2021-12-31 09:59:20'),
('CT00081', 'PR31', 'Pariaman', '2021-12-28 10:00:32', '2021-12-31 10:00:32'),
('CT00082', 'PR31', 'Payakumbuh', '2021-12-28 10:00:32', '2021-12-31 10:00:32'),
('CT00083', 'PR31', 'Sawahlunto', '2021-12-28 10:01:21', '2021-12-31 10:01:21'),
('CT00084', 'PR31', 'Solok', '2021-12-28 10:01:21', '2022-01-01 10:01:21'),
('CT00085', 'PR32', 'Lubuk Linggau', '2021-12-28 10:03:40', '2021-12-31 10:03:40'),
('CT00086', 'PR32', 'Pagar Alam', '2021-12-28 10:04:20', '2021-12-31 10:04:20'),
('CT00087', 'PR32', 'Palembang', '2021-12-28 10:04:20', '2021-12-31 10:04:20'),
('CT00088', 'PR32', 'Prabumulih', '2021-12-28 10:05:20', '2021-12-31 10:05:20'),
('CT00089', 'PR32', 'Sekayu', '2021-12-28 10:05:20', '2021-12-31 10:05:20'),
('CT00090', 'PR33', 'Gunung Sitoli', '2021-12-28 10:06:09', '2021-12-31 10:06:09'),
('CT00091', 'PR33', 'Medan', '2021-12-28 10:06:09', '2021-12-31 10:06:09'),
('CT00092', 'PR33', 'Padang Sidempuan', '2021-12-28 10:07:00', '2021-12-31 10:07:00'),
('CT00093', 'PR33', 'Pematang Siantar', '2021-12-28 10:07:00', '2021-12-31 10:07:00'),
('CT00094', 'PR33', 'Sibolga', '2021-12-28 10:07:57', '2021-12-31 10:07:57'),
('CT00095', 'PR33', 'Tanjung Balai', '2021-12-28 10:08:29', '2021-12-31 10:08:29'),
('CT00096', 'PR33', 'Tebing Tinggi', '2021-12-28 10:08:29', '2021-12-31 10:08:29'),
('CT00097', 'PR08', 'Kabupaten Aceh Barat ', '2022-01-12 13:26:48', '2022-01-12 13:26:48'),
('CT00098', 'PR08', 'Kabupaten Aceh Barat Daya', '2022-01-12 13:27:34', '2022-01-12 13:27:34'),
('CT00099', 'PR08', 'Kabupaten Aceh Besar', '2022-01-12 13:27:46', '2022-01-12 13:27:46'),
('CT00100', 'PR08', 'Kabupaten Aceh Jaya', '2022-01-12 13:28:12', '2022-01-12 13:28:12'),
('CT00101', 'PR08', 'Kabupaten Aceh Selatan', '2022-01-12 13:28:23', '2022-01-12 13:28:23'),
('CT00102', 'PR08', 'Kabupaten Aceh Singkil', '2022-01-12 13:28:37', '2022-01-12 13:28:37'),
('CT00103', 'PR08', 'Kabupaten Aceh Tamiang', '2022-01-12 13:28:53', '2022-01-12 13:28:53'),
('CT00104', 'PR08', 'Kabupaten Aceh Tengah', '2022-01-12 13:29:05', '2022-01-12 13:29:05'),
('CT00105', 'PR08', 'Kabupaten Aceh Tenggara', '2022-01-12 13:29:28', '2022-01-12 13:29:28'),
('CT00106', 'PR08', 'Kabupaten Aceh Timur', '2022-01-12 13:29:40', '2022-01-12 13:29:40'),
('CT00107', 'PR08', 'Kabupaten Aceh Utara', '2022-01-12 13:29:55', '2022-01-12 13:29:55'),
('CT00108', 'PR08', 'Kabupaten Bener Meriah', '2022-01-12 13:30:05', '2022-01-12 13:30:05'),
('CT00109', 'PR09', 'Kabupaten Badung', '2022-01-12 13:30:31', '2022-01-12 13:30:31'),
('CT00110', 'PR09', 'Kabupaten Bangil', '2022-01-12 13:30:48', '2022-01-12 13:30:48'),
('CT00111', 'PR09', 'Kabupaten Buleleng', '2022-01-12 13:31:00', '2022-01-12 13:31:00'),
('CT00112', 'PR09', 'Kabupaten Gianyar', '2022-01-12 13:31:12', '2022-01-12 13:31:12'),
('CT00113', 'PR09', 'Kabupaten Jembrana', '2022-01-12 13:31:27', '2022-01-12 13:31:27'),
('CT00114', 'PR09', 'Kabupaten Karangasem', '2022-01-12 13:31:42', '2022-01-12 13:31:42'),
('CT00115', 'PR09', 'Kabupaten Klungkung', '2022-01-12 13:32:02', '2022-01-12 13:32:02'),
('CT00116', 'PR11', 'Kabupaten Lebak', '2022-01-12 13:32:23', '2022-01-12 13:32:23'),
('CT00117', 'PR11', 'Kabupaten Pandeglang', '2022-01-12 13:32:37', '2022-01-12 13:32:37'),
('CT00118', 'PR11', 'Kabupaten Serang', '2022-01-12 13:32:57', '2022-01-12 13:32:57'),
('CT00119', 'PR11', 'Kabupaten Tangerang', '2022-01-12 13:33:12', '2022-01-12 13:33:12'),
('CT00120', 'PR12', 'Kabupaten Bengkulu Selatan', '2022-01-12 13:33:49', '2022-01-12 13:33:49'),
('CT00121', 'PR12', 'Kabupaten Bemgkulu Tengah', '2022-01-12 13:34:15', '2022-01-12 13:34:15'),
('CT00122', 'PR12', 'Kabupaten Bengkulu Utara', '2022-01-12 13:34:28', '2022-01-12 13:34:28'),
('CT00123', 'PR12', 'Kabupaten Kaur', '2022-01-12 13:34:39', '2022-01-12 13:34:39'),
('CT00124', 'PR12', 'Kabupaten kapahiang', '2022-01-12 13:35:04', '2022-01-12 13:35:04'),
('CT00125', 'PR12', 'Kabupaten Lebong', '2022-01-12 13:35:17', '2022-01-12 13:35:17'),
('CT00126', 'PR12', 'Kabupaten Mukomuko', '2022-01-12 13:35:26', '2022-01-12 13:35:26'),
('CT00127', 'PR12', 'Kabupaten Rejang Lebong', '2022-01-12 13:35:37', '2022-01-12 13:35:37'),
('CT00128', 'PR12', 'Kabupaten seluma', '2022-01-12 13:35:47', '2022-01-12 13:35:47'),
('CT00129', 'PR03', 'Kabupaten Bantul', '2022-01-12 13:36:47', '2022-01-12 13:36:47'),
('CT00130', 'PR03', 'Kabupaten Gunung kildul', '2022-01-12 13:37:05', '2022-01-12 13:37:05'),
('CT00131', 'PR03', 'Kabupaten Kulon Progo', '2022-01-12 13:37:15', '2022-01-12 13:37:15'),
('CT00132', 'PR03', 'Kabupaten Sleman', '2022-01-12 13:37:25', '2022-01-12 13:37:25'),
('CT00133', 'PR02', 'Kabupaten Kepulauan Seribu', '2022-01-12 13:38:00', '2022-01-12 13:38:00'),
('CT00134', 'PR04', 'Kabupaten Boalemo', '2022-01-12 13:38:20', '2022-01-12 13:38:20'),
('CT00135', 'PR04', 'Kabupaten Bone Bolango', '2022-01-12 13:38:33', '2022-01-12 13:38:33'),
('CT00136', 'PR04', 'Kabupaten Gorontalo', '2022-01-12 13:38:44', '2022-01-12 13:38:44'),
('CT00137', 'PR04', 'Kabupaten gorontalo Utara', '2022-01-12 13:38:55', '2022-01-12 13:38:55'),
('CT00138', 'PR04', 'Kabupaten Pahuwato', '2022-01-12 13:39:07', '2022-01-12 13:39:07'),
('CT00139', 'PR05', 'Kabupaten Batanghari', '2022-01-12 13:39:27', '2022-01-12 13:39:27'),
('CT00140', 'PR05', 'Kabupaten Bungo', '2022-01-12 13:39:37', '2022-01-12 13:39:37'),
('CT00141', 'PR05', 'Kabupaten Kerinci', '2022-01-12 13:39:47', '2022-01-12 13:39:47'),
('CT00142', 'PR05', 'Kabupaten Merangin', '2022-01-12 13:39:58', '2022-01-12 13:39:58'),
('CT00143', 'PR05', 'Kabupaten Muaro Jambi', '2022-01-12 13:40:09', '2022-01-12 13:40:09'),
('CT00144', 'PR05', 'Kabupaten Sarolangun', '2022-01-12 13:40:19', '2022-01-12 13:40:19'),
('CT00145', 'PR05', 'Kabupaten Tanjung Jabung Barat', '2022-01-12 13:40:32', '2022-01-12 13:40:32'),
('CT00146', 'PR05', 'Kabupaten Tanjung Jabung Timur', '2022-01-12 13:40:41', '2022-01-12 13:40:41'),
('CT00147', 'PR01', 'Kabupaten Bandung', '2022-01-12 13:41:01', '2022-01-12 13:41:01'),
('CT00148', 'PR01', 'Kabupaten Bandung Barat', '2022-01-12 13:41:14', '2022-01-12 13:41:14'),
('CT00149', 'PR01', 'Kabupaten Bekasi', '2022-01-12 13:41:26', '2022-01-12 13:41:26'),
('CT00150', 'PR01', 'Kabupaten Bogor', '2022-01-12 13:41:36', '2022-01-12 13:41:36'),
('CT00151', 'PR01', 'Kabupaten Ciamis', '2022-01-12 13:41:46', '2022-01-12 13:41:46'),
('CT00152', 'PR01', 'Kabupaten Cianjur', '2022-01-12 13:41:57', '2022-01-12 13:41:57'),
('CT00153', 'PR01', 'Kabupaten Cirebon', '2022-01-12 13:43:30', '2022-01-12 13:43:30'),
('CT00154', 'PR01', 'Kabupaten Garut', '2022-01-12 13:43:39', '2022-01-12 13:43:39'),
('CT00155', 'PR01', 'Kabupaten Indramayu', '2022-01-12 13:43:48', '2022-01-12 13:43:48'),
('CT00156', 'PR01', 'Kabupaten Karawang', '2022-01-12 13:43:59', '2022-01-12 13:43:59'),
('CT00157', 'PR01', 'Kabupaten Kuningan', '2022-01-12 13:44:09', '2022-01-12 13:44:09'),
('CT00158', 'PR01', 'Kabupaten Majalengka', '2022-01-12 13:44:20', '2022-01-12 13:44:20'),
('CT00159', 'PR01', 'Kabupaten Pangandaran', '2022-01-12 13:44:30', '2022-01-12 13:44:30'),
('CT00160', 'PR01', 'Kabupaten Purwakarta', '2022-01-12 13:44:40', '2022-01-12 13:44:40'),
('CT00161', 'PR01', 'Kabupaten Subang', '2022-01-12 13:44:53', '2022-01-12 13:44:53'),
('CT00162', 'PR01', 'Kabupaten Sukabumi', '2022-01-12 13:45:09', '2022-01-12 13:45:09'),
('CT00163', 'PR01', 'Kabupaten Sumedang', '2022-01-12 13:45:30', '2022-01-12 13:45:30'),
('CT00164', 'PR01', 'Kabupaten Tasikmalaya', '2022-01-12 13:45:44', '2022-01-12 13:45:44'),
('CT00165', 'PR07', 'Kabupaten Banjarnegara', '2022-01-12 13:46:08', '2022-01-12 13:46:08'),
('CT00166', 'PR07', 'Kabupaten Banyumas', '2022-01-12 13:46:22', '2022-01-12 13:46:22'),
('CT00167', 'PR07', 'Kabupaten Batang', '2022-01-12 13:46:36', '2022-01-12 13:46:36'),
('CT00168', 'PR07', 'Kabupaten Blora', '2022-01-12 13:46:47', '2022-01-12 13:46:47'),
('CT00169', 'PR07', 'Kabupaten Boyolali', '2022-01-12 13:47:02', '2022-01-12 13:47:02'),
('CT00170', 'PR07', 'Kabupaten Brebes', '2022-01-12 13:48:07', '2022-01-12 13:48:07'),
('CT00171', 'PR07', 'Kabupaten Cilacap', '2022-01-12 13:48:32', '2022-01-12 13:48:32'),
('CT00172', 'PR07', 'Kabupaten Demak', '2022-01-12 13:51:22', '2022-01-12 13:51:22'),
('CT00173', 'PR07', 'Kabupaten Grobogan', '2022-01-12 13:51:33', '2022-01-12 13:51:33'),
('CT00174', 'PR07', 'Kabupaten Jepara', '2022-01-12 13:51:48', '2022-01-12 13:51:48'),
('CT00175', 'PR07', 'Kabupaten Karanganyar', '2022-01-12 13:53:25', '2022-01-12 13:53:25'),
('CT00176', 'PR07', 'Kabupaten Kebumen', '2022-01-12 13:53:39', '2022-01-12 13:53:39'),
('CT00177', 'PR07', 'Kabupaten Kendal', '2022-01-12 13:55:59', '2022-01-12 13:55:59'),
('CT00178', 'PR07', 'Kabupaten Klaten', '2022-01-12 13:56:09', '2022-01-12 13:56:09'),
('CT00179', 'PR07', 'Kabupaten Kudus', '2022-01-12 13:56:19', '2022-01-12 13:56:19'),
('CT00180', 'PR07', 'Kabupaten Magelang', '2022-01-12 13:56:30', '2022-01-12 13:56:30'),
('CT00181', 'PR07', 'Kabupaten Pati', '2022-01-12 13:56:40', '2022-01-12 13:56:40'),
('CT00182', 'PR07', 'Kabupaten Pekalongan', '2022-01-12 13:56:50', '2022-01-12 13:56:50'),
('CT00183', 'PR07', 'Kabupaten Pemalang', '2022-01-12 13:57:01', '2022-01-12 13:57:01'),
('CT00184', 'PR07', 'Kabupaten Purbalingga', '2022-01-12 13:57:12', '2022-01-12 13:57:12'),
('CT00185', 'PR07', 'Kabupaten Purworejo', '2022-01-12 13:57:20', '2022-01-12 13:57:20'),
('CT00186', 'PR07', 'Kabupaten Rembang', '2022-01-12 13:57:44', '2022-01-12 13:57:44'),
('CT00187', 'PR07', 'Kabupaten Semarang', '2022-01-12 13:57:56', '2022-01-12 13:57:56'),
('CT00188', 'PR07', 'Kabupaten Sragen', '2022-01-12 13:58:08', '2022-01-12 13:58:08'),
('CT00189', 'PR07', 'Kabupaten Sukoharjo', '2022-01-12 13:58:22', '2022-01-12 13:58:22'),
('CT00190', 'PR07', 'Kabupaten Tegal', '2022-01-12 13:58:35', '2022-01-12 13:58:35'),
('CT00191', 'PR07', 'Kabupaten Temanggung', '2022-01-12 13:58:44', '2022-01-12 13:58:44'),
('CT00192', 'PR07', 'Kabupaten Wonogiri', '2022-01-12 13:58:56', '2022-01-12 13:58:56'),
('CT00193', 'PR07', 'Kabupaten Wonosobo', '2022-01-12 13:59:10', '2022-01-12 13:59:10'),
('CT00194', 'PR06', 'Kabupaten Bangkalan', '2022-01-12 14:02:00', '2022-01-12 14:02:00'),
('CT00195', 'PR06', 'Kabupaten Banyuwangi', '2022-01-12 14:02:10', '2022-01-12 14:02:10'),
('CT00196', 'PR06', 'Kabupaten Blitar', '2022-01-12 14:02:24', '2022-01-12 14:02:24'),
('CT00197', 'PR06', 'Kabupaten Bojonegoro', '2022-01-12 14:02:35', '2022-01-12 14:02:35'),
('CT00198', 'PR06', 'Kabupaten Bondowoso', '2022-01-12 14:02:46', '2022-01-12 14:02:46'),
('CT00199', 'PR06', 'Kabupaten Gresik', '2022-01-12 14:02:57', '2022-01-12 14:02:57'),
('CT00200', 'PR06', 'Kabupaten Jember', '2022-01-12 14:03:19', '2022-01-12 14:03:19'),
('CT00201', 'PR06', 'Kabupaten Jombang', '2022-01-12 14:03:33', '2022-01-12 14:03:33'),
('CT00202', 'PR06', 'Kabupaten Kediri', '2022-01-12 14:03:54', '2022-01-12 14:03:54'),
('CT00203', 'PR06', 'Kabupaten Lamongan', '2022-01-12 14:04:06', '2022-01-12 14:04:06'),
('CT00204', 'PR06', 'Kabupaten Lumajang', '2022-01-12 14:04:27', '2022-01-12 14:04:27'),
('CT00205', 'PR06', 'Kabupaten Madiun', '2022-01-12 14:04:40', '2022-01-12 14:04:40'),
('CT00206', 'PR06', 'Kabupaten Magetan', '2022-01-12 14:04:53', '2022-01-12 14:04:53'),
('CT00207', 'PR06', 'Kabupaten Malang', '2022-01-12 14:21:53', '2022-01-12 14:21:53'),
('CT00208', 'PR06', 'Kabupaten Malang', '2022-01-12 14:22:34', '2022-01-12 14:22:34'),
('CT00209', 'PR06', 'Kabupaten Nganjuk', '2022-01-12 14:26:18', '2022-01-12 14:26:18'),
('CT00210', 'PR06', 'Kabupaten Ngawi', '2022-01-12 14:26:32', '2022-01-12 14:26:32'),
('CT00211', 'PR06', 'Kabupaten Pacitan', '2022-01-12 14:26:45', '2022-01-12 14:26:45'),
('CT00212', 'PR06', 'Kabupaten Pamekasan', '2022-01-12 14:26:56', '2022-01-12 14:26:56'),
('CT00213', 'PR06', 'Kabupaten Pasuruan', '2022-01-12 14:27:05', '2022-01-12 14:27:05'),
('CT00214', 'PR06', 'Kabupaten Ponorogo', '2022-01-12 14:27:18', '2022-01-12 14:27:18'),
('CT00215', 'PR06', 'Kabupaten Probolinggo', '2022-01-12 14:27:28', '2022-01-12 14:27:28'),
('CT00216', 'PR06', 'Kabupaten Sampang', '2022-01-12 14:27:41', '2022-01-12 14:27:41'),
('CT00217', 'PR06', 'Kabupaten Sidoarjo', '2022-01-12 14:27:55', '2022-01-12 14:27:55'),
('CT00218', 'PR06', 'Kabupaten Situbondo', '2022-01-12 14:28:05', '2022-01-12 14:28:05'),
('CT00219', 'PR06', 'Kabupaten Sumenep', '2022-01-12 14:28:16', '2022-01-12 14:28:16'),
('CT00220', 'PR06', 'Kabupaten Trenggalek', '2022-01-12 14:28:30', '2022-01-12 14:28:30'),
('CT00221', 'PR06', 'Kabupaten Tuban', '2022-01-12 14:28:53', '2022-01-12 14:28:53'),
('CT00222', 'PR06', 'Kabupaten Tulungagung', '2022-01-12 14:29:05', '2022-01-12 14:29:05'),
('CT00223', 'PR13', 'Kabupaten Bengkayang', '2022-01-12 14:30:47', '2022-01-12 14:30:47'),
('CT00224', 'PR13', 'Kabupaten Kapuas Hulu', '2022-01-12 14:30:58', '2022-01-12 14:30:58'),
('CT00225', 'PR13', 'Kabupaten Kayong Utara', '2022-01-12 14:31:14', '2022-01-12 14:31:14'),
('CT00226', 'PR13', 'Kabupaten Ketapang', '2022-01-12 14:31:27', '2022-01-12 14:31:27'),
('CT00227', 'PR13', 'Kabupaten Kubu Raya', '2022-01-12 14:31:40', '2022-01-12 14:31:40'),
('CT00228', 'PR13', 'Kabupaten Landak', '2022-01-12 14:32:58', '2022-01-12 14:32:58'),
('CT00229', 'PR13', 'Kabupaten Melawi', '2022-01-12 14:33:23', '2022-01-12 14:33:23'),
('CT00230', 'PR13', 'Kabupaten Pontianak', '2022-01-12 14:33:34', '2022-01-12 14:33:34'),
('CT00231', 'PR13', 'Kabupaten Sambas', '2022-01-12 14:33:55', '2022-01-12 14:33:55'),
('CT00232', 'PR13', 'Kabupaten Sanggau', '2022-01-12 14:34:07', '2022-01-12 14:34:07'),
('CT00233', 'PR13', 'Kabupaten Sekadau', '2022-01-12 14:35:57', '2022-01-12 14:35:57'),
('CT00234', 'PR13', 'Kabupaten Sintang', '2022-01-12 14:37:34', '2022-01-12 14:37:34'),
('CT00235', 'PR15', 'Kabupaten Barito Selatan', '2022-01-12 14:38:44', '2022-01-12 14:38:44'),
('CT00236', 'PR15', 'Kabupaten Barito Timur', '2022-01-12 14:38:54', '2022-01-12 14:38:54'),
('CT00237', 'PR15', 'Kabupaten Barito Utara', '2022-01-12 14:39:54', '2022-01-12 14:39:54'),
('CT00238', 'PR15', 'Kabupaten Gunung Mas', '2022-01-12 14:41:14', '2022-01-12 14:41:14'),
('CT00239', 'PR15', 'Kabupaten Kapuas', '2022-01-12 14:41:29', '2022-01-12 14:41:29'),
('CT00240', 'PR15', 'Kabupaten Katingan', '2022-01-12 14:41:38', '2022-01-12 14:41:38'),
('CT00241', 'PR15', 'Kabupaten Kotawaringin Barat', '2022-01-12 14:42:33', '2022-01-12 14:42:33'),
('CT00242', 'PR15', 'Kabupaten Kotawaringin Timur', '2022-01-12 14:44:21', '2022-01-12 14:44:21'),
('CT00243', 'PR15', 'Kabupaten Lamandau', '2022-01-12 14:46:50', '2022-01-12 14:46:50'),
('CT00244', 'PR15', 'Kabupaten Murung Raya', '2022-01-12 14:47:00', '2022-01-12 14:47:00'),
('CT00245', 'PR15', 'Kabupaten Pulang Pisau', '2022-01-12 14:47:11', '2022-01-12 14:47:11'),
('CT00246', 'PR15', 'Kabupaten Sukamara', '2022-01-12 14:47:26', '2022-01-12 14:47:26'),
('CT00247', 'PR15', 'Kabupaten Seruyan', '2022-01-12 14:47:36', '2022-01-12 14:47:36'),
('CT00248', 'PR16', 'Kabupaten Berau', '2022-01-12 14:47:57', '2022-01-12 14:47:57'),
('CT00249', 'PR16', 'Kabupaten Kutai Barat', '2022-01-12 14:48:07', '2022-01-12 14:48:07'),
('CT00250', 'PR16', 'Kabupaten Kutai Kartanegara', '2022-01-12 14:48:52', '2022-01-12 14:48:52'),
('CT00251', 'PR16', 'Kabupaten Kutai Timur', '2022-01-12 14:49:03', '2022-01-12 14:49:03'),
('CT00252', 'PR16', 'Kabupaten Paser', '2022-01-12 14:49:15', '2022-01-12 14:49:15'),
('CT00253', 'PR16', 'Kabupaten Mahakam Ulu', '2022-01-12 14:50:29', '2022-01-12 14:50:29'),
('CT00254', 'PR17', 'Kabupaten Bulungan', '2022-01-12 14:50:52', '2022-01-12 14:50:52'),
('CT00255', 'PR17', 'Kabupaten Malinau', '2022-01-12 14:51:02', '2022-01-12 14:51:02'),
('CT00256', 'PR17', 'Kabupaten Nunukan', '2022-01-12 14:51:19', '2022-01-12 14:51:19'),
('CT00257', 'PR17', 'Kabupaten Tana Tidung', '2022-01-12 14:51:34', '2022-01-12 14:51:34'),
('CT00258', 'PR10', 'Kabupaten Bangka', '2022-01-12 14:52:02', '2022-01-12 14:52:02'),
('CT00259', 'PR10', 'Kabupaten Bangka Barat ', '2022-01-12 14:52:10', '2022-01-12 14:52:10'),
('CT00260', 'PR10', 'Kabupaten Bangka Selatan', '2022-01-12 14:52:15', '2022-01-12 14:52:15'),
('CT00261', 'PR10', 'Kabupaten Bangka Tengah', '2022-01-12 14:52:23', '2022-01-12 14:52:23'),
('CT00262', 'PR10', 'Kabupaten Belitung', '2022-01-12 14:52:36', '2022-01-12 14:52:36'),
('CT00263', 'PR10', 'Kabupaten Belitung Timur', '2022-01-12 14:52:45', '2022-01-12 14:52:45'),
('CT00264', 'PR18', 'Kabupaten Bintan', '2022-01-12 14:53:06', '2022-01-12 14:53:06'),
('CT00265', 'PR18', 'Kabupaten Karimun', '2022-01-12 14:53:22', '2022-01-12 14:53:22'),
('CT00266', 'PR18', 'Kabupaten Kepulauan Anambas', '2022-01-12 14:53:32', '2022-01-12 14:53:32'),
('CT00267', 'PR18', 'Kabupaten Lingga', '2022-01-12 14:53:42', '2022-01-12 14:53:42'),
('CT00268', 'PR18', 'Kabupaten Natuna', '2022-01-12 14:54:17', '2022-01-12 14:54:17'),
('CT00269', 'PR19', 'Kabupaten Lampung Barat', '2022-01-12 14:55:10', '2022-01-12 14:55:10'),
('CT00270', 'PR19', 'Kabupaten Lampung Selatan', '2022-01-12 14:55:37', '2022-01-12 14:55:37'),
('CT00271', 'PR19', 'Kabupaten Lampung Tengah', '2022-01-12 14:55:47', '2022-01-12 14:55:47'),
('CT00272', 'PR19', 'Kabupaten Lampung Timur', '2022-01-12 14:55:57', '2022-01-12 14:55:57'),
('CT00273', 'PR19', 'Kabupaten Lampung Utara', '2022-01-12 14:56:07', '2022-01-12 14:56:07'),
('CT00274', 'PR19', 'Kabupaten Mesuji', '2022-01-12 14:56:15', '2022-01-12 14:56:15'),
('CT00275', 'PR19', 'Kabupaten Pesawaran', '2022-01-12 14:56:25', '2022-01-12 14:56:25'),
('CT00276', 'PR19', 'Kabupaten Pringsewu', '2022-01-12 14:56:35', '2022-01-12 14:56:35'),
('CT00277', 'PR19', 'Kabupaten Tanggamus', '2022-01-12 14:56:44', '2022-01-12 14:56:44'),
('CT00278', 'PR19', 'Kabupaten Tulang Bawang', '2022-01-12 14:56:54', '2022-01-12 14:56:54'),
('CT00279', 'PR19', 'Kabupaten Tulang Bawang Barat', '2022-01-12 14:57:00', '2022-01-12 14:57:00'),
('CT00280', 'PR19', 'Kabupaten Way Kanan', '2022-01-12 14:57:10', '2022-01-12 14:57:10'),
('CT00281', 'PR19', 'Kabupaten Pesisir Barat', '2022-01-12 14:57:32', '2022-01-12 14:57:32'),
('CT00282', 'PR21', 'Kabupaten Buru', '2022-01-12 14:57:52', '2022-01-12 14:57:52'),
('CT00283', 'PR21', 'Kabupaten Buru Selatan', '2022-01-12 14:58:13', '2022-01-12 14:58:13'),
('CT00284', 'PR21', 'Kabupaten Kepulauan Aru', '2022-01-12 14:58:23', '2022-01-12 14:58:23'),
('CT00285', 'PR21', 'Kabupaten Maluku Barat Daya', '2022-01-12 14:58:34', '2022-01-12 14:58:34'),
('CT00286', 'PR21', 'Kabupaten Maluku Tengah', '2022-01-12 14:58:45', '2022-01-12 14:58:45'),
('CT00287', 'PR21', 'Kabupaten Maluku Tenggara', '2022-01-12 14:58:57', '2022-01-12 14:58:57'),
('CT00288', 'PR21', 'Kabupaten Maluku Tenggara Barat', '2022-01-12 14:59:11', '2022-01-12 14:59:11'),
('CT00289', 'PR21', 'Kabupaten Seram Bagian Barat', '2022-01-12 14:59:23', '2022-01-12 14:59:23'),
('CT00290', 'PR21', 'Kabupaten Seram Bagian Timur', '2022-01-12 14:59:34', '2022-01-12 14:59:34'),
('CT00291', 'PR20', 'Kabupaten Halmahera Barat', '2022-01-12 15:09:28', '2022-01-12 15:09:28'),
('CT00292', 'PR20', 'Kabupaten Halmahera Tengah', '2022-01-12 15:09:49', '2022-01-12 15:09:49'),
('CT00293', 'PR20', 'Kabupaten Halmahera Utara', '2022-01-12 15:10:02', '2022-01-12 15:10:02'),
('CT00294', 'PR20', 'Kabupaten Halmahera Selatan', '2022-01-12 15:10:16', '2022-01-12 15:10:16'),
('CT00295', 'PR20', 'Kabupaten Halmahera Timur', '2022-01-12 15:10:27', '2022-01-12 15:10:27'),
('CT00296', 'PR20', 'Kabupaten Kepulauan Sula', '2022-01-12 15:10:40', '2022-01-12 15:10:40'),
('CT00297', 'PR22', 'Kabupaten Bima', '2022-01-12 15:11:02', '2022-01-12 15:11:02'),
('CT00298', 'PR22', 'Kabupaten Dompu', '2022-01-12 15:13:52', '2022-01-12 15:13:52'),
('CT00299', 'PR22', 'Kabupaten Lombok Barat', '2022-01-12 15:14:33', '2022-01-12 15:14:33'),
('CT00300', 'PR22', 'Kabupaten Lombok Tengah', '2022-01-12 15:14:42', '2022-01-12 15:14:42'),
('CT00301', 'PR22', 'Kabupaten Lombok Timur', '2022-01-12 15:14:48', '2022-01-12 15:14:48'),
('CT00302', 'PR22', 'Kabupaten Lombok Utara', '2022-01-12 15:14:59', '2022-01-12 15:14:59'),
('CT00303', 'PR22', 'Kabupaten Sumbawa', '2022-01-12 15:15:09', '2022-01-12 15:15:09'),
('CT00304', 'PR22', 'Kabupaten Sumbawa Barat', '2022-01-12 15:15:16', '2022-01-12 15:15:16'),
('CT00305', 'PR08', '', '0000-00-00 00:00:00', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `handyman_service`
--

CREATE TABLE `handyman_service` (
  `hs_id` varchar(25) NOT NULL,
  `hs_name` varchar(25) NOT NULL,
  `hs_phone` varchar(20) NOT NULL,
  `hs_harga` double NOT NULL,
  `hs_create` datetime NOT NULL,
  `hs_update` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `handyman_service`
--

INSERT INTO `handyman_service` (`hs_id`, `hs_name`, `hs_phone`, `hs_harga`, `hs_create`, `hs_update`) VALUES
('HS000001', 'indra t', '082147483647', 150000, '2022-01-20 14:39:42', '2022-03-08 09:54:30'),
('HS0002', 'Sakri', '087666555444', 120000, '2022-03-08 09:53:37', '2022-03-08 09:53:37'),
('HS0003', 'Paijo', '08966677732', 100000, '2022-03-08 09:54:14', '2022-03-08 09:54:14');

-- --------------------------------------------------------

--
-- Table structure for table `member`
--

CREATE TABLE `member` (
  `mb_id` varchar(12) NOT NULL,
  `mb_name` varchar(55) NOT NULL,
  `mb_email` varchar(45) NOT NULL,
  `mb_phone` varchar(13) NOT NULL,
  `mb_username` varchar(35) NOT NULL,
  `mb_password` text NOT NULL,
  `mb_type` enum('seller','client') NOT NULL,
  `mb_picture` varchar(50) NOT NULL,
  `mb_create` datetime NOT NULL,
  `mb_update` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `member`
--

INSERT INTO `member` (`mb_id`, `mb_name`, `mb_email`, `mb_phone`, `mb_username`, `mb_password`, `mb_type`, `mb_picture`, `mb_create`, `mb_update`) VALUES
('MB000000001', 'vatmawati s', 'vatmawat01@gmail.com', '089234781221', 'vatma02', '8cb2237d0679ca88db6464eac60da96345513964', 'client', 'vatma.jpg', '2022-01-26 12:38:00', '0000-00-00 00:00:00'),
('MB000000002', 'indah p', 'indah@gmail.com', '089234784882', 'indah', '7110eda4d09e062aa5e4a390b0a572ac0d2c0220', 'seller', '', '2022-01-26 12:39:00', '0000-00-00 00:00:00'),
('MB000000003', 'aay ', 'aay03@gmail.com', '081226017964', 'aay03', '7c4a8d09ca3762af61e59520943dc26494f8941b', 'seller', 'aay.jpg', '2022-02-21 12:38:00', '2022-02-21 12:38:00'),
('MB000000004', 'Dede', 'dede@gmail.com', '083824985242', 'dede02', '7c4a8d09ca3762af61e59520943dc26494f8941b', 'client', '', '2022-02-22 10:03:00', '2022-02-22 10:03:00'),
('MB000000005', 'athiyah', 'athiyah@gmail.com', '085824985242', 'athiyah', '20eabe5d64b0e216796e834f52d61fd0b70332fc', 'client', '', '2022-02-22 10:04:19', '2022-02-22 10:04:19'),
('MB000000006', 'fani', 'fani@gmail.com', '087824985242', 'fani', '7110eda4d09e062aa5e4a390b0a572ac0d2c0220', 'client', '', '2022-02-22 10:07:12', '2022-02-22 10:07:12'),
('MB000000007', 'dendi', 'dendi@gmail.com', '085224490710', 'dendi', '7c222fb2927d828af22f592134e8932480637c0d', 'client', '', '2022-02-22 10:09:55', '2022-02-22 10:09:55'),
('MB000000008', 'ahmad', 'ahmad@gmail.com', '087324490150', 'ahmad', '7c222fb2927d828af22f592134e8932480637c0d', 'seller', '', '2022-02-22 10:14:14', '2022-02-22 10:14:14'),
('MB000000009', 'roni', 'roni@gmail.com', '087324490150', 'roni', 'f7c3bc1d808e04732adf679965ccc34ca7ae3441', 'seller', '', '2022-02-22 10:15:56', '2022-02-22 10:15:56'),
('MB000000010', 'siti', 'siti@gmail.com', '087324490150', 'siti', 'f7c3bc1d808e04732adf679965ccc34ca7ae3441', 'seller', '', '2022-02-22 10:16:43', '2022-02-22 10:16:43'),
('MB000000011', 'anggun', 'anggun2@gmail.com', '085223459210', 'anggun2', '7c222fb2927d828af22f592134e8932480637c0d', 'seller', '', '2022-03-03 12:13:00', '2022-03-03 12:13:00'),
('MB000000012', 'sri indah', 'sri indah@gmail.com', '081223480150', 'indah1', '3a2cacccccdba4d73189b4f4903d76eb47447060', 'seller', '', '2022-03-03 13:18:00', '2022-03-03 13:18:00'),
('MB000000013', 'farid ', 'farid@gmail.com', '08521442881', 'farid', '7c4a8d09ca3762af61e59520943dc26494f8941b', 'seller', '', '2022-03-03 13:25:09', '2022-03-03 13:25:09'),
('MB000000014', 'rizal ahmad', 'rizal@gmail.com', '085223448322', 'rizal A', '20eabe5d64b0e216796e834f52d61fd0b70332fc', 'seller', '', '2022-03-03 13:25:00', '2022-03-03 13:25:00'),
('MB000000015', 'Doni S', 'doniS@gmail.com', '089554288100', 'doniS', '7c4a8d09ca3762af61e59520943dc26494f8941b', 'seller', '', '2022-03-03 13:28:00', '2022-03-03 13:28:00'),
('MB000000016', 'permata', 'permata@gmail.com', '08122390120', 'permata', '8cb2237d0679ca88db6464eac60da96345513964', 'seller', '', '2022-03-03 13:29:00', '2022-03-03 13:29:00'),
('MB000000017', 'sinta', 'sinta@gmail.com', '081380281928', 'sinta', '7c4a8d09ca3762af61e59520943dc26494f8941b', 'seller', '', '2022-03-03 13:30:00', '2022-03-03 13:30:00'),
('MB000000018', 'akmal', 'akmal@gmail.com', '082243689044', 'akmal', '20eabe5d64b0e216796e834f52d61fd0b70332fc', 'seller', '', '2022-03-03 13:32:01', '2022-03-03 13:32:01'),
('MB000000019', 'putri', 'putri@gmail.com', '081226017966', 'putri', '7c4a8d09ca3762af61e59520943dc26494f8941b', 'seller', '', '2022-03-03 13:33:05', '2022-03-03 13:33:05'),
('MB000000020', 'irawan', 'irawan@gmail.com', '085223459210', 'irawan', '7c222fb2927d828af22f592134e8932480637c0d', 'seller', '', '2022-01-26 13:38:00', '2022-01-26 13:38:00'),
('MB000000021', 'widya', 'widya@gmail.com', '085231556866', 'widya', '7c4a8d09ca3762af61e59520943dc26494f8941b', 'seller', '', '2022-03-03 13:20:00', '2022-03-03 13:20:00'),
('MB000000022', 'setiawan', 'setiawan', '089234781221', 'setiawan', '8cb2237d0679ca88db6464eac60da96345513964', 'seller', '', '2022-03-03 13:20:00', '2022-03-03 13:20:00'),
('MB000000023', 'budi', 'budi@gmail.com', '08951225398', 'budi', '7c4a8d09ca3762af61e59520943dc26494f8941b', 'seller', '', '2022-03-03 15:30:00', '2022-03-03 15:30:00'),
('MB000000024', 'Reza', 'reza@gmail.com', '085223459210', 'reza', '8cb2237d0679ca88db6464eac60da96345513964', 'seller', '', '2022-03-03 15:30:00', '2022-03-03 15:30:00'),
('MB000000025', 'hilda ae', 'hildaae@gmail.com', '081226017964', 'hilda', '8cb2237d0679ca88db6464eac60da96345513964', 'seller', '', '2022-03-03 15:35:00', '2022-03-03 15:35:00');

-- --------------------------------------------------------

--
-- Table structure for table `notif`
--

CREATE TABLE `notif` (
  `id_notif` varchar(12) NOT NULL,
  `id_tujuan` varchar(12) NOT NULL,
  `isi_notif` text NOT NULL,
  `asal` varchar(14) NOT NULL,
  `status` int(1) NOT NULL DEFAULT '1',
  `create_notif` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `notif`
--

INSERT INTO `notif` (`id_notif`, `id_tujuan`, `isi_notif`, `asal`, `status`, `create_notif`) VALUES
('NTF00000001', 'CHT00000001', 'aay', 'MB', 1, '2022-04-28 09:50:24'),
('NTF00000002', 'RTL00000004', 'Toko Bangunan', 'MB', 1, '2022-04-03 13:21:37'),
('NTF00000003', 'CHT00000003', 'vatmawati s', 'MB', 1, '2022-04-01 08:20:21'),
('NTF00000004', 'RTL00000007', 'toko besi berkat jaya', 'MB', 1, '2022-04-04 08:12:13');

-- --------------------------------------------------------

--
-- Table structure for table `order`
--

CREATE TABLE `order` (
  `odr_id` varchar(14) NOT NULL,
  `odr_date` datetime NOT NULL,
  `odr_mb_id` varchar(12) NOT NULL,
  `odr_shp_id` varchar(9) NOT NULL,
  `odr_adr_id` varchar(9) NOT NULL,
  `odr_rtl_id` varchar(12) NOT NULL,
  `odr_pay_id` varchar(8) NOT NULL,
  `odr_ongkir` double NOT NULL,
  `odr_berattotal` varchar(14) NOT NULL,
  `odr_status` enum('Dikemas','Dikirim','Dibatalkan','Selesai','Belum Dibayar') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `order`
--

INSERT INTO `order` (`odr_id`, `odr_date`, `odr_mb_id`, `odr_shp_id`, `odr_adr_id`, `odr_rtl_id`, `odr_pay_id`, `odr_ongkir`, `odr_berattotal`, `odr_status`) VALUES
('ODR000000001', '2022-02-09 10:20:00', 'MB000000001', 'SHP0001', 'AD00001', 'RTL00000001', 'PYM00003', 35000, '3000gram', 'Belum Dibayar'),
('ODR000000002', '2022-02-22 11:17:09', 'MB000000002', 'SHP0004', 'AD00002', 'RTL00000003', 'PYM00004', 40000, '3500gram', 'Dikemas'),
('ODR000000003', '2022-02-22 11:23:08', 'MB000000003', 'SHP0001', 'AD00003', 'RTL00000004', 'PYM00005', 20000, '2000gram', 'Dibatalkan'),
('ODR000000004', '2022-02-22 11:24:08', 'MB000000004', 'SHP0003', 'AD00004', 'RTL00000001', 'PYM00005', 20000, '2000gram', 'Dikemas'),
('ODR000000005', '2022-02-22 11:26:08', 'MB000000005', 'SHP0002', 'AD00005', 'RTL00000002', 'PYM00006', 30000, '3000gram', 'Dikirim'),
('ODR000000006', '2022-02-22 11:27:08', 'MB000000006', 'SHP0004', 'AD00006', 'RTL00000005', 'PYM00002', 10000, '1000gram', 'Belum Dibayar'),
('ODR000000007', '2022-02-22 11:28:08', 'MB000000007', 'SHP0001', 'AD00007', 'RTL00000005', 'PYM00006', 50000, '5000gram', 'Dikirim'),
('ODR000000008', '2022-02-22 11:29:08', 'MB000000008', 'SHP0002', 'AD00008', 'RTL00000002', 'PYM00003', 20000, '2000gram', 'Dikemas'),
('ODR000000009', '2022-02-22 11:32:10', 'MB000000009', 'SHP0003', 'AD00009', 'RTL00000005', 'PYM00001', 50000, '5000gram', 'Dibatalkan'),
('ODR000000010', '2022-02-22 11:33:12', 'MB000000010', 'SHP0002', 'AD00010', 'RTL00000001', 'PYM00002', 20000, '2000gram', 'Dikirim');

-- --------------------------------------------------------

--
-- Table structure for table `order_detail`
--

CREATE TABLE `order_detail` (
  `odd_id` varchar(14) NOT NULL,
  `odr_id` varchar(12) NOT NULL,
  `odd_prd_id` varchar(12) NOT NULL,
  `odd_prd_name` varchar(50) NOT NULL,
  `odd_price` double NOT NULL,
  `odd_qty` int(4) NOT NULL,
  `odd_totalprice` double NOT NULL,
  `odd_create` datetime NOT NULL,
  `odd_update` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `order_detail`
--

INSERT INTO `order_detail` (`odd_id`, `odr_id`, `odd_prd_id`, `odd_prd_name`, `odd_price`, `odd_qty`, `odd_totalprice`, `odd_create`, `odd_update`) VALUES
('ODD000000001', 'ODR000000001', 'PRD0006', 'kompor gas rinnai R1-522C(2tungku)', 292900, 1, 292900, '2022-02-16 09:30:16', '2022-02-16 09:30:16'),
('ODD000000002', 'ODR000000001', 'PRD0005', 'kompor-tanam-3-tungku', 332000, 2, 664000, '2022-02-16 13:00:00', '2022-02-16 13:00:00'),
('ODD000000003', 'ODR000000002', 'PRD0014', 'franke keranjang pengering piring / 210-423 adjust', 333000, 2, 666000, '2022-03-22 13:24:20', '2022-02-22 13:24:20'),
('ODD000000004', 'ODR000000002', 'PRD0015', 'toto thx20n ivory shower spray complete', 299000, 1, 299000, '2022-07-22 13:26:26', '2022-02-22 13:26:26'),
('ODD000000005', 'ODR000000003', 'PRD0018', 'elite es-17999 shower column set', 4382000, 1, 4382000, '2022-06-22 13:30:10', '2022-02-22 13:30:10'),
('ODD000000006', 'ODR000000004', 'PRD0033', 'zehn genteng atap roma roof title Upvc asa cokelat', 400000, 2, 800000, '2022-02-22 13:32:10', '2022-02-22 13:32:10'),
('ODD000000007', 'ODR000000005', 'PRD0082', 'obeng bolak-balik USA 4', 50000, 2, 100000, '2022-01-22 13:34:10', '2022-02-22 13:34:10'),
('ODD000000008', 'ODR000000006', 'PRD0024', 'hand shower', 2629000, 1, 2629000, '2022-02-22 13:36:10', '2022-02-22 13:36:10'),
('ODD000000009', 'ODR000000007', 'PRD0026', 'rooftop top ridge (nok) biru', 982900, 1, 982900, '2022-04-22 13:38:10', '2022-02-22 13:38:10'),
('ODD000000010', 'ODR000000008', 'PRD0083', 'paku kayu 2 inch-paku kayu 5cm per 250 gram', 5000, 5, 25000, '2022-02-22 13:39:10', '2022-02-22 13:39:10'),
('ODD000000011', 'ODR000000009', 'PRD0025', 'rooftop top ridge (nok) putih', 238000, 1, 238000, '2022-05-22 13:41:10', '2022-02-22 13:41:10'),
('ODD000000012', 'ODR000000010', 'PRD0028', 'zig zag nok samping embosse black', 400000, 2, 800000, '2022-03-22 13:42:10', '2022-02-22 13:42:10');

-- --------------------------------------------------------

--
-- Table structure for table `payment`
--

CREATE TABLE `payment` (
  `pay_id` varchar(8) NOT NULL,
  `pay_name` varchar(30) NOT NULL,
  `pay_create` datetime NOT NULL,
  `pay_update` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `payment`
--

INSERT INTO `payment` (`pay_id`, `pay_name`, `pay_create`, `pay_update`) VALUES
('PYM00001', 'BCA (Bank Central Asia)', '2022-01-26 12:42:00', '0000-00-00 00:00:00'),
('PYM00002', 'MANDIRI', '2022-01-26 12:42:00', '0000-00-00 00:00:00'),
('PYM00003', 'BNI (Bank Negara Indonesia)', '2022-01-26 12:43:00', '0000-00-00 00:00:00'),
('PYM00004', 'BRI (Bank Rakyat Indonesia)', '2022-01-26 12:44:00', '0000-00-00 00:00:00'),
('PYM00005', 'BSI (Bank Syari\'ah Indonesia)', '2022-01-26 12:44:00', '0000-00-00 00:00:00'),
('PYM00006', 'PERMATA', '2022-01-26 12:44:00', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

CREATE TABLE `product` (
  `prd_id` varchar(14) NOT NULL,
  `prd_name` varchar(50) NOT NULL,
  `prd_stock` int(11) NOT NULL,
  `prd_price` double NOT NULL,
  `prd_thumbnail` text NOT NULL,
  `prd_ctg_id` varchar(7) NOT NULL,
  `prd_rtl_id` varchar(14) NOT NULL,
  `prd_berat` text NOT NULL,
  `prd_create` datetime NOT NULL,
  `prd_update` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`prd_id`, `prd_name`, `prd_stock`, `prd_price`, `prd_thumbnail`, `prd_ctg_id`, `prd_rtl_id`, `prd_berat`, `prd_create`, `prd_update`) VALUES
('PRD0001', 'Zehn dish rack dr-2 double layer (rak piring)', 20, 521000, 'rak piring dua layer.jpg', 'CTG0001', 'RTL00000001', '1000gram\r\n', '2022-01-04 10:04:01', '2022-01-28 10:04:01'),
('PRD0002', 'Modena kompor tanam gas 2 tungku ', 15, 2742000, 'modena kompor tanam.jpg', 'CTG0001', 'RTL00000001', '1000gram', '2022-01-04 10:18:40', '2022-01-22 10:18:40'),
('PRD0003', 'Modena penghisap asap dapur  ', 25, 1121000, 'penghisap alat dapur.jpg', 'CTG0001', 'RTL00000001', '3000gram', '2022-01-04 10:18:57', '2022-01-22 10:18:57'),
('PRD0004', 'Penghisap asap kompor ', 15, 220000, 'penghisap asap kompor.jpg', 'CTG0001', 'RTL00000001', '3000gram', '2022-01-04 10:19:14', '2022-01-28 10:19:14'),
('PRD0005', 'Rinnai-RB-3SSCGB-Kompor-Tanam-3-Tungku-', 30, 332000, 'kompor tanam 3 tungku.jpg', 'CTG0001', 'RTL00000001', '5000gram', '2022-01-04 10:19:31', '2022-01-22 10:19:31'),
('PRD0006', 'Kompor gas rinnai R1-522C (2tungku)', 30, 292900, 'kompor gas rinai.jpg\r\n', 'CTG0001', 'RTL00000001', '1000gram', '2022-01-04 10:19:46', '2022-01-29 10:19:46'),
('PRD0007', 'Fotile  HW25800K-C2G Built-in Microwave oven (25lt', 25, 949900, 'microwave.jpg', 'CTG0001', 'RTL00000001', '2500gram\r\n', '2022-01-04 10:19:59', '2022-01-28 10:19:59'),
('PRD0008', 'Water faucet', 25, 309000, 'water faucet.jpg', 'CTG0001', 'RTL00000001', '4000gram', '2022-01-04 10:20:15', '2022-01-28 10:20:15'),
('PRD0009', 'OULU w240 wastafel gantung ', 25, 420000, 'wastafel gantung oulu.jpg', 'CTG0001', 'RTL00000001', '5000gram', '2022-01-04 10:20:29', '2022-01-26 10:20:29'),
('PRD0010', 'TOTO keran air TX109LD  ', 50, 175000, 'kran air Toto.jpg', 'CTG0001', 'RTL00000001', '500gram', '2022-01-04 10:20:42', '2022-01-28 10:20:42'),
('PRD0011', 'TOTO Kran Air TX122LESN ', 30, 900000, 'keran toto air Tx122lesn.jpg', 'CTG0001', 'RTL00000001', '700gram', '2022-01-04 10:20:58', '2022-01-29 10:20:58'),
('PRD0012', 'toto l521v3 wastafel meja ', 30, 635000, 'wastafel.jpg', 'CTG0001', 'RTL00000001', '2000gram', '2022-01-04 10:21:12', '2022-01-28 10:21:12'),
('PRD0013', 'tidy WLS7540 stainless steel kithcen sink wastafel', 44, 1220000, 'kitchen slink wastafel.jpg', 'CTG0001', 'RTL00000003', '5000gram', '2022-01-04 10:21:28', '2022-01-22 10:21:28'),
('PRD0014', 'franke keranjang pengering piring / 210-423 adjust', 44, 333000, 'keranjang pengering piring.jpg', 'CTG0001', 'RTL00000003', '1000gram', '2022-01-04 10:21:42', '2022-01-28 10:21:42'),
('PRD0015', 'toto thx20n ivory  shower spray complete', 25, 299000, 'tot thx20n ivory.jpg', 'CTG0002', 'RTL00000003', '700gram', '2022-01-04 11:32:42', '2022-01-29 11:32:42'),
('PRD0016', 'toto cw823njn avante toilet kloset duduk monoblok ', 20, 6943000, 'toto cw823 njn kloset duduk.jpg', 'CTG0002', 'RTL00000003', '5000gram', '2022-01-04 12:00:11', '2022-01-29 12:00:11'),
('PRD0017', 'PALOMA saringan got floor drain 13 ', 25, 240000, 'paloma saringan got.jpg\r\n', 'CTG0002', 'RTL00000003', '200gram', '2022-01-04 12:00:31', '2022-01-30 12:00:31'),
('PRD0018', 'elite es-17999 shower column set ', 50, 4382000, 'elite es-17999 shower.jpg', 'CTG0002', 'RTL00000004', '1000gram', '2022-01-04 12:01:07', '2022-01-29 12:01:07'),
('PRD0019', 'tidy 6002 shower box motif line model seperempat l', 26, 350000, 'tidy 6002 shower.jpg', 'CTG0002', 'RTL00000004', '1500gram', '2022-01-04 12:01:20', '2022-01-28 12:01:20'),
('PRD0020', 'toto CE-6 toilet jongkok putih ', 26, 463000, 'toto CE-6 toilet jongkok putih.jpg', 'CTG0002', 'RTL00000004', '7000gram', '2022-01-04 13:09:53', '2022-01-30 13:09:53'),
('PRD0021', 'amstad hand shower ivory ', 26, 463000, 'amstad hand shower ivory.jpg', 'CTG0002', 'RTL00000004', '1000gram', '2022-01-04 13:10:10', '2022-01-31 13:10:10'),
('PRD0022', 'gator bak mandi plastik persegi ivory ', 20, 250000, 'gator bak mandi plastik persegi.jpg', 'CTG0002', 'RTL00000004', '1000gram', '2022-01-04 13:10:23', '2022-01-29 13:10:23'),
('PRD0023', 'rinnai res-eco10 water heater listrik 10 liter ', 15, 169900, 'rinnai res-eco 10 water heater.jpg', 'CTG0002', 'RTL00000005', '1000gram', '2022-01-04 13:10:39', '2022-01-26 13:10:39'),
('PRD0024', 'hand shower', 35, 2629000, 'amstad hand shower genie gray.jpg', 'CTG0002', 'RTL00000005', '1500gram', '2022-01-04 13:12:03', '2022-01-26 13:12:03'),
('PRD0025', 'rooftop top ridge (nok) putih ', 50, 238000, 'rooftop top ridge.jpg', 'CTG0004', 'RTL00000005', '3500gram', '2022-01-04 14:21:42', '2022-01-29 14:21:42'),
('PRD0026', 'rooftop top ridge (nok) biru ', 50, 238000, 'rooftop biru.jpg', 'CTG0004', 'RTL00000005', '3500gram', '2022-01-04 14:22:31', '2022-01-29 14:22:31'),
('PRD0027', 'rooftop c-series atap putih doff 7m ', 45, 982900, 'rooftop c-series.jpg', 'CTG0004', 'RTL00000005', '3000gram', '2022-01-04 14:34:23', '2022-01-29 14:34:23'),
('PRD0028', 'zig zag nok samping embosse black ', 40, 400000, 'zig zag nok.jpg', 'CTG0004', 'RTL00000001', '4000gram', '2022-01-04 14:34:38', '2022-01-28 14:34:38'),
('PRD0029', 'zig zag nok samping charcoal ', 38, 378000, 'zig zag nok genteng samping charcoal.jpg', 'CTG0004', 'RTL00000001', '4000gram', '2022-01-04 14:34:52', '2022-01-29 14:34:52'),
('PRD0030', 'zig zag nok alpha embosse ', 35, 400000, 'alpha alpha.jpg', 'CTG0004', 'RTL00000001', '4000gram', '2022-01-04 14:35:10', '2022-01-28 14:35:10'),
('PRD0031', 'zehn roma ridge unit upvc asa black  ', 250, 149000, 'zehn roma ridge.jpg', 'CTG0004', 'RTL00000001', '800gram', '2022-01-04 14:35:47', '2022-01-29 14:35:47'),
('PRD0032', 'zehn genteng atap roma roof tile Upvc asa cokelat ', 150, 400000, 'zehn roma roof tile.jpg', 'CTG0004', 'RTL00000001', '6000gram', '2022-01-04 14:36:05', '2022-01-29 14:36:05'),
('PRD0033', 'zehn talang air atap Upvc All type valley gutter h', 250, 200000, 'zehn talang air Upvc all type.jpg', 'CTG0004', 'RTL00000001', '5000gram', '2022-01-04 14:36:28', '2022-01-29 14:36:28'),
('PRD0034', 'zehn Upvc roof  barge board black ', 250, 149000, 'zehn barge board hitam.jpg', 'CTG0004', 'RTL00000001', '5000gram', '2022-01-04 14:36:42', '2022-01-29 14:36:42'),
('PRD0035', 'zehn upvc roof 4 way ridge asa borwn  ', 250, 150000, 'roof 4 borwn.jpg', 'CTG0004', 'RTL00000001', '5000gram', '2022-01-04 14:36:56', '2022-01-29 14:36:56'),
('PRD0036', 'zehn upvc roof 4 way ridge asa black  ', 250, 150000, 'roof 4 black.jpg', 'CTG0004', 'RTL00000001', '1000gram', '2022-01-04 14:37:11', '2022-01-28 14:37:11'),
('PRD0037', 'zehn upvc roof terminal diagonal ridge asa black ', 250, 80000, 'upvc roof terminal diagonal.jpg', 'CTG0004', 'RTL00000001', '5000gram', '2022-01-04 14:37:25', '2022-01-29 14:37:25'),
('PRD0038', 'Penahan pengait jendela hook PALOMA WHP 522 steel ', 500, 19500, 'pengait jendela whp 522 steel.jpg', 'CTG0005', 'RTL00000001', '500gram', '2022-01-05 08:57:20', '2022-01-31 08:57:20'),
('PRD0039', 'PALOMA fpp 605 castle 90mm tarikan jendela', 500, 39000, 'paloma tarikan jendela.jpg', 'CTG0005', 'RTL00000001', '500gram', '2022-01-05 08:57:35', '2022-01-29 08:57:35'),
('PRD0040', 'Venta UPVC jendela window bouven awning 60X40 cm w', 100, 6862000, 'venta UPVC jendela window bouven awning 60X40 cm.jpg', 'CTG0005', 'RTL00000001', '1000gram', '2022-01-05 08:57:57', '2022-01-31 08:57:57'),
('PRD0041', 'Venta UPVC Jendela Window Awning 40X150Cm White Sh', 150, 1479000, 'jendela window awning 40X150 cm white sh.jpg', 'CTG0005', 'RTL00000001', '1000gram', '2022-01-05 09:05:52', '2022-01-24 09:05:52'),
('PRD0042', 'Venta UPVC Jendela Window Sliding 100X140Cm White ', 150, 1849000, 'venta jendela window 100X140cm white cr.jpg', 'CTG0005', 'RTL00000001', '1000gram', '2022-01-05 09:06:43', '2022-01-31 09:06:43'),
('PRD0043', 'Venta W4 Upvc Window 60X150Cm Awning White ', 250, 149900, 'Venta W4 Upvc Window 60X150Cm Awning White.jpg', 'CTG0005', 'RTL00000001', '1000gram', '2022-01-05 09:06:57', '2022-01-31 09:06:57'),
('PRD0044', 'Venta W1 Upvc Window 100X120Cm Double Sliding Whit', 200, 137200, 'jendela double sliding venta W1 white 100X120 cm.jpg', 'CTG0005', 'RTL00000001', '1000gram', '2022-01-05 09:07:16', '2022-01-29 09:07:16'),
('PRD0045', 'Jendela almunium kamar/ ruang tamu alphamax type A', 200, 173600, 'jendela almunium.jpg', 'CTG0005', 'RTL00000001', '3000gram', '2022-01-05 09:07:32', '2022-01-31 09:07:32'),
('PRD0046', 'Venta UPVC Jendela Window Single Case 40X150Cm Whi', 200, 149900, 'Venta UPVC jendela window single case 40X150cm Wb R bukaan kanan.jpg', 'CTG0005', 'RTL00000001', '1000gram', '2022-01-05 09:07:46', '2022-01-31 09:07:46'),
('PRD0047', 'Venta UPVC jendela window single case 40X150cm Wb ', 200, 149900, 'Venta UPVC Jendela Window Single Case 40X150Cm White Wb L Bukaan Kiri.jpg', 'CTG0005', 'RTL00000001', '1000gram', '2022-01-05 09:08:01', '2022-01-29 09:08:01'),
('PRD0048', 'ZEHN W1-AT Double Sliding Window With Mesh Jendela', 200, 279900, 'ZEHN W1-AT Double Sliding Window With Mesh Jendela 100X140CM White.jpg', 'CTG0005', 'RTL00000001', '800gram', '2022-01-05 09:08:15', '2022-01-29 09:08:15'),
('PRD0049', 'Solid Hak Angin Penahan Jendela Ha641 8Inch ', 150, 28900, 'Solid Hak Angin Penahan Jendela Ha641 8Inch.jpg', 'CTG0005', 'RTL00000001', '700gram', '2022-01-05 09:09:45', '2022-01-29 09:09:45'),
('PRD0050', 'Quickie Clean Sw-05 Window Cleaner ', 150, 55000, 'pembersih kaca.jpg', 'CTG0005', 'RTL00000001', '500gram', '2022-01-05 09:46:32', '2022-01-29 09:46:32'),
('PRD0051', 'Bellucci Es/Blc 432 Ss Hinge ', 200, 135000, 'Bellucci 432.jpg', 'CTG0005', 'RTL00000001', '700gram', '2022-01-05 09:46:47', '2022-01-29 09:46:47'),
('PRD0052', 'Bellucci Es/Blc 325 Ss Hinge ', 200, 669000, 'Bellucci 325.jpg', 'CTG0005', 'RTL00000001', '700gram', '2022-01-05 09:47:02', '2022-01-28 09:47:02'),
('PRD0053', 'Bellucci Es/Blc 533 Ss Hinge Engsel ', 200, 110000, 'Bellucci  533.jpg', 'CTG0005', 'RTL00000001', '700gram', '2022-01-05 09:47:17', '2022-01-29 09:47:17'),
('PRD0054', 'Save Compare  Bagikan Onassis Hi/Ons 533 Sus 304 H', 500, 241900, 'Save Compare 533 Sus 304.jpg', 'CTG0005', 'RTL00000001', '900gram', '2022-01-05 09:47:33', '2022-01-29 09:47:33'),
('PRD0055', 'Onassis Hi/Ons 433 Sus 304 Hinge ', 500, 200000, 'Onassis 433 Sus 304.jpg', 'CTG0005', 'RTL00000001', '900gram', '2022-01-05 09:47:51', '2022-01-30 09:47:51'),
('PRD0056', 'Onassis Hi/Ons 432 Sus 304 Hinge ', 500, 146900, 'Onassis 432 Sus 304.jpg', 'CTG0005', 'RTL00000001', '900gram', '2022-01-05 09:48:06', '2022-01-29 09:48:06'),
('PRD0057', 'Onassis Hi/Ons 32525 Sus 304 Hinge ', 500, 133900, 'Onassis 32525 Sus 304.jpg', 'CTG0005', 'RTL00000001', '900gram', '2022-01-05 09:51:31', '2022-01-28 09:51:31'),
('PRD0058', 'Tidy Jendela Aluminium Wgw1210-2P White Double Sli', 25, 1373000, 'Tidy Jendela Aluminium Wgw1210-2P.jpg', 'CTG0005', 'RTL00000001', '4000gram', '2022-01-05 09:51:47', '2022-01-29 09:51:47'),
('PRD0059', 'Zehn Tangga Alumunium Alx 135 Cm (5 Step) ', 25, 628000, 'Zehn Tangga Alumunium Alx 135 Cm (5 Step).jpg', 'CTG0006', 'RTL00000001', '3000gram', '2022-01-05 10:10:17', '2022-01-29 10:10:17'),
('PRD0060', 'NERO Stainless V81622 Sakelar 2 Gang 2 Way Switch ', 25, 890000, 'nero saklar stainless v81622.jpg', 'CTG0006', 'RTL00000001', '300gram', '2022-01-05 10:10:31', '2022-01-31 10:10:31'),
('PRD0061', 'Durevole Antenna TV Luar Ruang GT 60N BR (4G Filte', 25, 129000, 'antena luar ruangan.jpg', 'CTG0006', 'RTL00000001', '2500gram', '2022-01-05 10:10:47', '2022-01-29 10:10:47'),
('PRD0062', 'FTALIT Cat Kayu Dan Besi 115-607 SPC Mahogany Brow', 50, 1223000, 'teak brown.jpg', 'CTG0007', 'RTL00000001', '5000gram', '2022-01-05 11:02:55', '2022-01-29 11:02:55'),
('PRD0063', 'FTALIT Cat Kayu Dan Besi 115-607 SPC Hino Green Li', 50, 1223000, 'ftalit cat kayu green light.jpg', 'CTG0007', 'RTL00000001', '5000gram', '2022-01-05 11:09:40', '2022-01-29 11:09:40'),
('PRD0064', 'FTALIT Cat Kayu Dan Besi 115-607 SPC Bright Orange', 50, 1223000, 'cat kayu bright orange.jpg', 'CTG0007', 'RTL00000001', '5000gram', '2022-01-05 11:10:01', '2022-01-29 11:10:01'),
('PRD0065', 'FTALIT Cat Kayu Dan Besi 115-607 STD Teak Brown 1K', 50, 1223000, 'teak brown.jpg', 'CTG0007', 'RTL00000001', '5000gram', '2022-01-05 11:10:16', '2022-01-31 11:10:16'),
('PRD0066', 'FTALIT Cat Kayu Dan Besi 115-607 STD Stone Grey 1K', 50, 1223000, 'stine grey.jpg', 'CTG0007', 'RTL00000001', '5000gram', '2022-01-05 11:10:32', '2022-01-30 11:10:32'),
('PRD0067', 'FTALIT Cat Kayu Dan Besi 115-607 STD Light Blue 1K', 50, 1223000, 'light blue.jpg', 'CTG0007', 'RTL00000001', '5000gram', '2022-01-05 11:10:49', '2022-01-29 11:10:49'),
('PRD0068', 'FTALIT Cat Kayu Dan Besi 115-998 Silver 1Kg ', 50, 1223000, 'silver.jpg', 'CTG0007', 'RTL00000001', '5000gram', '2022-01-05 11:11:08', '2022-01-29 11:11:08'),
('PRD0069', 'Aquaproof Waterproofing Grey 20Kg Cat Anti Bocor ', 50, 979000, 'aqquaproof.jpg', 'CTG0007', 'RTL00000001', '20000gram', '2022-01-05 11:11:23', '2022-01-29 11:11:23'),
('PRD0070', 'Avitex Cat Interior 831-Light Cream Copolymer Emul', 50, 1223000, 'avitex light cream.jpeg', 'CTG0007', 'RTL00000001', '10000gram', '2022-01-05 11:11:39', '2022-01-29 11:11:39'),
('PRD0071', 'Avitex Cat Interior copolymer emul 750 sunny yello', 50, 1223000, 'avitex yellow.jpg', 'CTG0007', 'RTL00000001', '7500gram', '2022-01-05 11:11:58', '2022-01-29 11:11:58'),
('PRD0072', 'Avitex Cat Interior 040-Cream Copolymer Emul', 50, 1223000, 'avitex cream.jpg', 'CTG0007', 'RTL00000001', '7500gram', '2022-01-05 11:12:12', '2022-01-30 11:12:12'),
('PRD0073', 'Avitex Cat Interior 620-Apple Green Copolymer Emul', 50, 1223000, 'avitex apple green.jpeg', 'CTG0007', 'RTL00000001', '7500gram', '2022-01-05 11:12:27', '2022-01-31 11:12:27'),
('PRD0074', 'Onduline Speedy Screw Hitam (1Pack=20 Pcs) ', 50, 24000, 'speedy screw hitam (20pcs).jpeg', 'CTG0008', 'RTL00000001', '450gram', '2022-01-05 12:51:54', '2022-01-29 12:51:54'),
('PRD0075', 'Onduline Speedy Screw Coklat (1Pack=20 Pcs)  ', 50, 24000, 'speedy screw coklat (20pcs).jpeg', 'CTG0008', 'RTL00000001', '450gram', '2022-01-05 12:52:09', '2022-01-30 12:52:09'),
('PRD0076', 'Onduline Speedy Screw Merah(1Pack=20 Pcs) ', 50, 24000, 'speedy screw merah.jpeg', 'CTG0008', 'RTL00000001', '450gram', '2022-01-05 12:52:26', '2022-01-30 12:52:26'),
('PRD0077', 'SCG Semen PCC 40 KG  ', 50, 420000, 'semen scg 40 kg.jpg', 'CTG0008', 'RTL00000001', '40000gram', '2022-01-05 12:52:47', '2022-01-30 12:52:47'),
('PRD0078', 'Demix Nuda X2 - Acian Ekspos Dekoratif Honey Cream', 50, 335000, 'expos dekoratif exterior 20kg.jpg', 'CTG0008', 'RTL00000001', '4000gram', '2022-01-05 12:58:20', '2022-01-30 12:58:20'),
('PRD0079', 'Batu bata merah /bata ringan ', 50, 500000, 'batu bata merah.jfif', 'CTG0008', 'RTL00000001', '3000gram', '2022-01-05 12:58:36', '2022-01-30 12:58:36'),
('PRD0080', 'Semen tiga roda - 1 sak  50 kg ', 50, 820000, 'semen tiga roda.jpg', 'CTG0008', 'RTL00000001', '50000gram', '2022-01-05 13:04:46', '2022-01-29 13:04:46'),
('PRD0081', 'Pasir bangunan ', 50, 1500000, 'pasir bangunan.jpg', 'CTG0008', 'RTL00000001', '1000gram', '2022-01-05 13:05:03', '2022-01-30 13:05:03'),
('PRD0082', 'Obeng bolak-balik USA 4 ', 50000, 65000, 'obeng bolak balik usa.jpg', 'CTG0008', 'RTL00000002', '900gram', '2022-01-05 13:05:21', '2022-01-30 13:05:21'),
('PRD0083', 'Paku kayu 2 inch – paku kayu 5cm per 250 gram ', 50, 5000, 'paku kayu.jpg', 'CTG0008', 'RTL00000002', '250gram', '2022-01-05 13:05:40', '2022-01-30 13:05:40'),
('PRD0084', 'Paku seng asbes payung roofing 2inch 900 gram ', 50, 27000, 'paku payung.jpg', 'CTG0008', 'RTL00000002', '900gram', '2022-01-05 13:05:58', '2022-01-30 13:05:58');

-- --------------------------------------------------------

--
-- Table structure for table `product_detail`
--

CREATE TABLE `product_detail` (
  `pdd_id` varchar(14) NOT NULL,
  `pdd_prd_id` varchar(50) NOT NULL,
  `images` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `product_detail`
--

INSERT INTO `product_detail` (`pdd_id`, `pdd_prd_id`, `images`) VALUES
('PDD00001', 'PRD0001', 'www.images/');

-- --------------------------------------------------------

--
-- Table structure for table `province`
--

CREATE TABLE `province` (
  `prv_id` varchar(7) NOT NULL,
  `prv_name` text NOT NULL,
  `prv_create` datetime NOT NULL,
  `prv_update` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `province`
--

INSERT INTO `province` (`prv_id`, `prv_name`, `prv_create`, `prv_update`) VALUES
('PR01', 'jawa barat', '2021-12-21 11:15:35', '2021-12-22 08:15:35'),
('PR02', 'jakarta', '2021-12-21 14:21:04', '2021-12-24 14:21:04'),
('PR03', 'daerah istimewa yogyakarta', '2021-12-21 14:21:04', '2021-12-24 15:21:04'),
('PR04', 'gorontalo', '2021-12-21 14:21:51', '2021-12-24 14:21:51'),
('PR05', 'jambi', '2021-12-21 14:25:13', '2021-12-23 14:25:13'),
('PR06', 'jawa timur', '2021-12-21 14:01:01', '2021-12-22 14:01:01'),
('PR07', 'jawa tengah', '2021-12-21 14:16:21', '2021-12-23 14:16:21'),
('PR08', 'aceh', '2021-12-21 14:14:37', '2021-12-23 14:14:37'),
('PR09', 'bali', '2021-12-21 14:14:37', '2021-12-23 14:14:37'),
('PR10', 'bangka belitung', '2021-12-21 14:17:54', '2021-12-23 14:17:54'),
('PR11', 'banten', '2021-12-21 14:18:23', '2021-12-23 14:18:23'),
('PR12', 'bengkulu', '2021-12-21 14:18:23', '2021-12-23 14:18:23'),
('PR13', 'Kalimantan Barat', '2021-12-28 08:53:04', '2021-12-31 08:53:04'),
('PR14', 'Kalimantan Selatan', '2021-12-28 08:53:52', '2021-12-31 08:53:52'),
('PR15', 'Kalimantan Tengah', '2021-12-28 08:54:22', '2021-12-31 08:54:22'),
('PR16', 'Kalimantan Timur', '2021-12-28 08:54:53', '2021-12-31 08:54:53'),
('PR17', 'Kalimantan Utara', '2021-12-28 08:55:27', '2021-12-31 08:55:27'),
('PR18', 'Kepulauan Riau', '2021-12-28 08:55:50', '2021-12-31 08:55:50'),
('PR19', 'Lampung', '2021-12-28 08:56:52', '2021-12-31 08:56:52'),
('PR20', 'Maluku Utara', '2021-12-28 08:57:18', '2021-12-31 08:57:18'),
('PR21', 'Maluku', '2021-12-28 08:57:39', '2021-12-31 08:57:39'),
('PR22', 'Nusa Tenggara Barat', '2021-12-28 08:58:01', '2021-12-31 08:58:01'),
('PR23', 'Nusa Tenggara Timur', '2021-12-28 08:58:35', '2021-12-31 08:58:35'),
('PR24', 'Papua Barat', '2021-12-28 08:59:09', '2021-12-31 08:59:09'),
('PR25', 'Papua', '2021-12-28 08:59:35', '2021-12-31 08:59:35'),
('PR26', 'Riau', '2021-12-28 09:00:18', '2021-12-31 09:00:18'),
('PR27', 'Sulawesi Selatan', '2021-12-28 09:00:38', '2021-12-31 09:00:38'),
('PR28', 'Sulawesi Tengah', '2021-12-28 09:01:15', '2021-12-31 09:01:15'),
('PR29', 'Sulawesi Tenggara', '2021-12-28 09:01:43', '2021-12-31 09:01:43'),
('PR30', 'Sulawesi Utara', '2021-12-28 09:02:35', '2021-12-31 09:02:35'),
('PR31', 'Sumatra Barat', '2021-12-28 09:02:56', '2021-12-31 09:02:56'),
('PR32', 'Sumatra Selatan', '2021-12-28 09:03:20', '2021-12-31 09:03:20'),
('PR33', 'Sumatra Utara', '2021-12-28 09:04:01', '2021-12-31 09:04:01'),
('PR34', 'sumatara tenga', '0000-00-00 00:00:00', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `reset_password`
--

CREATE TABLE `reset_password` (
  `rs_id` varchar(30) NOT NULL,
  `email` varchar(30) NOT NULL,
  `password` varchar(25) NOT NULL,
  `temp_key` varchar(100) NOT NULL,
  `created` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `reset_password`
--

INSERT INTO `reset_password` (`rs_id`, `email`, `password`, `temp_key`, `created`) VALUES
('RS000000001', 'vatmawat02@gmail.com', '', 'djshdsjdbdhshssjdgds', '2022-01-25 03:35:25');

-- --------------------------------------------------------

--
-- Table structure for table `retail`
--

CREATE TABLE `retail` (
  `rtl_id` varchar(12) NOT NULL,
  `rtl_name` varchar(60) NOT NULL,
  `rtl_mb_id` varchar(12) NOT NULL,
  `rtl_phone` varchar(13) NOT NULL,
  `rtl_addres` text NOT NULL,
  `rtl_city` varchar(9) NOT NULL,
  `rtl_status` enum('Review','Validate','Rejected','Nonactive') NOT NULL,
  `rtl_long` float(10,6) NOT NULL,
  `rtl_lat` float(10,6) NOT NULL,
  `rtl_create` datetime NOT NULL,
  `rtl_update` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `retail`
--

INSERT INTO `retail` (`rtl_id`, `rtl_name`, `rtl_mb_id`, `rtl_phone`, `rtl_addres`, `rtl_city`, `rtl_status`, `rtl_long`, `rtl_lat`, `rtl_create`, `rtl_update`) VALUES
('RTL00000001', 'TB. Wargi Putra II', 'MB000000002', '085223448211', 'jl. Pahlawan No.35', 'CT00021', 'Validate', 107.634735, -6.892947, '2022-02-09 15:17:12', '2022-03-21 10:13:15'),
('RTL00000002', 'Sinar Mulya', 'MB000000003', '089223448344', 'jl.Cikutra Barat No.51', 'CT00021', 'Validate', 107.631538, -6.892170, '2022-02-09 10:20:05', '2022-03-25 14:26:55'),
('RTL00000003', 'PD. Cahaya Makmur', 'MB000000008', '087324490150', 'jl.Cikutra Barat No.95', 'CT00021', 'Rejected', 107.629196, -6.891776, '2022-02-22 11:06:11', '2022-03-16 10:43:56'),
('RTL00000004', 'Toko Bangunan', 'MB000000009', '085223448211', 'jl.Terusan Pasir Koja No.71', 'CT00021', 'Review', 107.594536, -6.926182, '2022-02-22 11:10:12', '2022-03-21 10:13:34'),
('RTL00000005', 'TB.Terang', 'MB000000010', '085223448223', 'jl.Raya Kopo No.2', 'CT00021', 'Validate', 107.598068, -6.926736, '2022-02-22 11:11:07', '2022-03-09 09:33:25'),
('RTL00000006', 'Toko Bangunan Rahayu', 'MB000000011', '085223459210', 'Jl. Pasir Kaliki No.138, Pasir Kaliki, Kec. Cicendo, Kota Bandung, ', 'CT00148', 'Rejected', 108.497002, -6.734680, '2022-03-03 11:10:12', '2022-03-03 11:10:12'),
('RTL00000007', 'toko besi berkat jaya', 'MB000000012', '081223480150', 'Jl. Sukagalih No.57, Cipedes, Kec. Sukajadi', 'CT00021', 'Review', 0.000000, -6.890888, '2022-03-03 15:00:00', '2022-03-21 10:13:43'),
('RTL00000008', 'bangunan mart', 'MB000000013', '085223448211', 'jl.marga cinta no118', 'CT00021', 'Validate', 107.653336, -6.950987, '2022-03-03 14:00:00', '2022-03-03 14:00:00'),
('RTL00000009', 'sinar bangunan', 'MB000000014', '085223448322', 'GG.suniarja no72', 'CT00021', 'Validate', 107.604042, -6.910950, '2022-03-03 14:00:00', '2022-03-09 09:53:05'),
('RTL00000010', 'toko bahan bangunan rkm', 'MB000000015', '08954288100', 'jl. A. yani n0.323', 'CT00021', 'Nonactive', 107.636757, -6.911126, '2022-03-03 14:30:00', '2022-03-03 14:30:00'),
('RTL00000011', 'bangunan jaya', 'MB000000016', '081223901200', 'gg.suniaraja no.56', 'CT00160', 'Validate', 107.607063, -6.913540, '2022-03-03 14:25:00', '2022-03-03 14:25:00'),
('RTL00000012', 'toko bahan bangunan sumber logan', 'MB000000017', '081380281928', 'jl. A.yani no 373,sukamaju', 'CT00025', 'Rejected', 107.637596, -6.909938, '2022-03-03 15:00:00', '2022-03-09 09:53:31'),
('RTL00000013', 'lamoza material', 'MB000000018', '0822433689044', 'jl.samoja no.3', 'CT00162', 'Rejected', 107.625473, -6.919682, '2022-03-03 15:30:00', '2022-03-03 15:30:00'),
('RTL00000014', 'TB.lancar jaya', 'MB000000019', '081226017966', 'jl.soekarno hata, no.475', 'CT00130', 'Validate', 107.620827, -6.946683, '2022-03-03 15:00:00', '2022-03-03 15:00:00'),
('RTL00000015', 'toko besi adil', 'MB000000020', '089554288100', 'jl.gatot subroto , no.355', 'CT00148', 'Rejected', 107.639053, -6.927455, '2022-03-03 15:00:00', '2022-03-03 15:00:00'),
('RTL00000016', 'Toko Suniarja', 'MB000000021', '085231556866', 'jl.suniaraja n0.85', 'CT00025', 'Validate', 107.600883, -6.912329, '2022-03-03 15:00:00', '2022-03-09 09:53:43'),
('RTL00000017', 'toko griya bangunan', 'MB000000022', '089234781221', 'jl.Suniaraja No.82', 'CT00157', 'Nonactive', 107.614441, -6.910795, '2022-03-03 15:00:00', '2022-03-03 15:00:00'),
('RTL00000018', 'TB.lodaya Material', 'MB000000023', '08951225398', 'jl.lodaya No.44', 'CT00130', 'Validate', 107.630707, -6.927682, '2022-03-03 14:50:00', '2022-03-03 14:50:00'),
('RTL00000019', 'Sumber bangunan Toko', 'MB000000024', '085223459210', 'jl.sukagalih no.5', 'CT00021', 'Validate', 107.607025, -6.885026, '2022-03-03 15:55:00', '2022-03-09 09:53:54'),
('RTL00000020', 'Lodaya building', 'MB000000025', '081226017964', 'jl.lodaya no.44', 'CT00130', 'Validate', 107.627228, -6.935414, '2022-03-03 15:20:00', '2022-03-16 10:44:09');

-- --------------------------------------------------------

--
-- Table structure for table `shipping`
--

CREATE TABLE `shipping` (
  `shp_id` varchar(8) NOT NULL,
  `shp_name` varchar(25) NOT NULL,
  `shp_jenis` varchar(25) NOT NULL,
  `shp_create` datetime NOT NULL,
  `shp_update` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `shipping`
--

INSERT INTO `shipping` (`shp_id`, `shp_name`, `shp_jenis`, `shp_create`, `shp_update`) VALUES
('SHP0001', 'JEMPUT', 'Reguler', '2022-01-26 12:32:47', '0000-00-00 00:00:00'),
('SHP0002', 'ANTAR', 'Reguler', '2022-01-26 12:32:52', '0000-00-00 00:00:00'),
('SHP0003', 'JEMPUT', 'Cargo', '2022-01-26 12:33:07', '0000-00-00 00:00:00'),
('SHP0004', 'ANTAR', 'Cargo', '2022-01-26 12:33:14', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `store_building`
--

CREATE TABLE `store_building` (
  `sb_id` varchar(30) NOT NULL,
  `sb_name` varchar(50) NOT NULL,
  `sb_phone` int(25) NOT NULL,
  `sb_address` text NOT NULL,
  `sb_create` datetime NOT NULL,
  `sb_update` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `store_building`
--

INSERT INTO `store_building` (`sb_id`, `sb_name`, `sb_phone`, `sb_address`, `sb_create`, `sb_update`) VALUES
('SB000001', 'gajah mada', 2147483647, 'jl.terusan cisokan No.10', '2022-01-27 16:24:38', '2022-01-27 16:27:51'),
('SB000002', 'bangunan jaya', 2147483647, 'jl.sunan gunung jati kab.cirebon', '2022-01-27 16:39:59', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `user_role`
--

CREATE TABLE `user_role` (
  `id` int(11) NOT NULL,
  `role` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user_role`
--

INSERT INTO `user_role` (`id`, `role`) VALUES
(1, 'administrator'),
(2, 'Customer Service'),
(3, 'Supervisor');

-- --------------------------------------------------------

--
-- Table structure for table `wishlist`
--

CREATE TABLE `wishlist` (
  `ws_id` varchar(12) NOT NULL,
  `ws_mb_id` varchar(12) NOT NULL,
  `ws_rtl_id` varchar(12) NOT NULL,
  `ws_prd_id` varchar(12) NOT NULL,
  `ws_date` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `wishlist`
--

INSERT INTO `wishlist` (`ws_id`, `ws_mb_id`, `ws_rtl_id`, `ws_prd_id`, `ws_date`) VALUES
('WS00001', 'MB000000001', 'RTL00000001', 'PRD0003', '2022-02-25 09:46:40'),
('WS00002', 'MB000000007', 'RTL00000004', 'PRD0019', '2022-02-25 09:47:58'),
('WS00003', 'MB000000004', 'RTL00000004', 'PRD0022', '2022-02-25 09:52:13'),
('WS00004', 'MB000000006', 'RTL00000001', 'PRD0005', '2022-02-25 09:52:33'),
('WS00005', 'MB000000001', 'RTL00000001', 'PRD0007', '2022-02-25 09:52:51'),
('WS00006', 'MB000000004', 'RTL00000004', 'PRD0018', '2022-02-25 09:55:20'),
('WS00007', 'MB000000006', 'RTL00000004', 'PRD0020', '2022-02-25 09:55:53'),
('WS00008', 'MB000000007', 'RTL00000005', 'PRD0025', '2022-02-25 09:56:11');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `address`
--
ALTER TABLE `address`
  ADD PRIMARY KEY (`adr_id`),
  ADD KEY `adr_mb_id` (`adr_mb_id`),
  ADD KEY `adr_cty_id` (`adr_cty_id`);

--
-- Indexes for table `administrator`
--
ALTER TABLE `administrator`
  ADD PRIMARY KEY (`adm_id`),
  ADD UNIQUE KEY `adm_username` (`adm_username`),
  ADD UNIQUE KEY `adm_email` (`adm_email`);

--
-- Indexes for table `architect_consultant`
--
ALTER TABLE `architect_consultant`
  ADD PRIMARY KEY (`ac_id`);

--
-- Indexes for table `cart`
--
ALTER TABLE `cart`
  ADD PRIMARY KEY (`crt_id`),
  ADD KEY `crt_mb_id` (`crt_mb_id`),
  ADD KEY `crt_rtl_id` (`crt_rtl_id`);

--
-- Indexes for table `cart_detail`
--
ALTER TABLE `cart_detail`
  ADD PRIMARY KEY (`crd_id`);

--
-- Indexes for table `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`ctg_id`);

--
-- Indexes for table `chat`
--
ALTER TABLE `chat`
  ADD PRIMARY KEY (`chat_id`);

--
-- Indexes for table `chat_admin`
--
ALTER TABLE `chat_admin`
  ADD PRIMARY KEY (`chat_id`);

--
-- Indexes for table `city`
--
ALTER TABLE `city`
  ADD PRIMARY KEY (`cty_id`),
  ADD KEY `cty_prv_id` (`cty_prv_id`);

--
-- Indexes for table `handyman_service`
--
ALTER TABLE `handyman_service`
  ADD PRIMARY KEY (`hs_id`);

--
-- Indexes for table `member`
--
ALTER TABLE `member`
  ADD PRIMARY KEY (`mb_id`),
  ADD UNIQUE KEY `mb_username` (`mb_username`);

--
-- Indexes for table `notif`
--
ALTER TABLE `notif`
  ADD PRIMARY KEY (`id_notif`);

--
-- Indexes for table `order`
--
ALTER TABLE `order`
  ADD PRIMARY KEY (`odr_id`),
  ADD KEY `odr_mb_id` (`odr_mb_id`),
  ADD KEY `odr_shp_id` (`odr_shp_id`),
  ADD KEY `odr_adr_id` (`odr_adr_id`),
  ADD KEY `odr_rtl_id` (`odr_rtl_id`);

--
-- Indexes for table `order_detail`
--
ALTER TABLE `order_detail`
  ADD PRIMARY KEY (`odd_id`);

--
-- Indexes for table `payment`
--
ALTER TABLE `payment`
  ADD PRIMARY KEY (`pay_id`);

--
-- Indexes for table `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`prd_id`),
  ADD KEY `prd_rtl_id` (`prd_rtl_id`),
  ADD KEY `prd_ctg_id` (`prd_ctg_id`) USING BTREE;

--
-- Indexes for table `product_detail`
--
ALTER TABLE `product_detail`
  ADD PRIMARY KEY (`pdd_id`);

--
-- Indexes for table `province`
--
ALTER TABLE `province`
  ADD PRIMARY KEY (`prv_id`);

--
-- Indexes for table `reset_password`
--
ALTER TABLE `reset_password`
  ADD PRIMARY KEY (`rs_id`);

--
-- Indexes for table `retail`
--
ALTER TABLE `retail`
  ADD PRIMARY KEY (`rtl_id`),
  ADD KEY `rtl_mb_id` (`rtl_mb_id`),
  ADD KEY `rtl_city` (`rtl_city`);

--
-- Indexes for table `shipping`
--
ALTER TABLE `shipping`
  ADD PRIMARY KEY (`shp_id`);

--
-- Indexes for table `store_building`
--
ALTER TABLE `store_building`
  ADD PRIMARY KEY (`sb_id`);

--
-- Indexes for table `user_role`
--
ALTER TABLE `user_role`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `wishlist`
--
ALTER TABLE `wishlist`
  ADD PRIMARY KEY (`ws_id`),
  ADD KEY `ws_prd_id` (`ws_prd_id`),
  ADD KEY `ws_mb_id` (`ws_mb_id`),
  ADD KEY `ws_rtl_id` (`ws_rtl_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `user_role`
--
ALTER TABLE `user_role`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `address`
--
ALTER TABLE `address`
  ADD CONSTRAINT `address_ibfk_1` FOREIGN KEY (`adr_mb_id`) REFERENCES `member` (`mb_id`),
  ADD CONSTRAINT `address_ibfk_2` FOREIGN KEY (`adr_cty_id`) REFERENCES `city` (`cty_id`);

--
-- Constraints for table `cart`
--
ALTER TABLE `cart`
  ADD CONSTRAINT `cart_ibfk_1` FOREIGN KEY (`crt_mb_id`) REFERENCES `member` (`mb_id`),
  ADD CONSTRAINT `cart_ibfk_2` FOREIGN KEY (`crt_rtl_id`) REFERENCES `retail` (`rtl_id`);

--
-- Constraints for table `city`
--
ALTER TABLE `city`
  ADD CONSTRAINT `city_ibfk_1` FOREIGN KEY (`cty_prv_id`) REFERENCES `province` (`prv_id`);

--
-- Constraints for table `order`
--
ALTER TABLE `order`
  ADD CONSTRAINT `order_ibfk_1` FOREIGN KEY (`odr_mb_id`) REFERENCES `member` (`mb_id`),
  ADD CONSTRAINT `order_ibfk_2` FOREIGN KEY (`odr_shp_id`) REFERENCES `shipping` (`shp_id`),
  ADD CONSTRAINT `order_ibfk_3` FOREIGN KEY (`odr_adr_id`) REFERENCES `address` (`adr_id`),
  ADD CONSTRAINT `order_ibfk_4` FOREIGN KEY (`odr_rtl_id`) REFERENCES `retail` (`rtl_id`);

--
-- Constraints for table `product`
--
ALTER TABLE `product`
  ADD CONSTRAINT `product_ibfk_1` FOREIGN KEY (`prd_ctg_id`) REFERENCES `category` (`ctg_id`),
  ADD CONSTRAINT `product_ibfk_2` FOREIGN KEY (`prd_rtl_id`) REFERENCES `retail` (`rtl_id`);

--
-- Constraints for table `retail`
--
ALTER TABLE `retail`
  ADD CONSTRAINT `retail_ibfk_1` FOREIGN KEY (`rtl_mb_id`) REFERENCES `member` (`mb_id`),
  ADD CONSTRAINT `retail_ibfk_2` FOREIGN KEY (`rtl_city`) REFERENCES `city` (`cty_id`);

--
-- Constraints for table `wishlist`
--
ALTER TABLE `wishlist`
  ADD CONSTRAINT `wishlist_ibfk_1` FOREIGN KEY (`ws_mb_id`) REFERENCES `member` (`mb_id`),
  ADD CONSTRAINT `wishlist_ibfk_2` FOREIGN KEY (`ws_prd_id`) REFERENCES `product` (`prd_id`),
  ADD CONSTRAINT `wishlist_ibfk_3` FOREIGN KEY (`ws_rtl_id`) REFERENCES `retail` (`rtl_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
