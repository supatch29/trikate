-- phpMyAdmin SQL Dump
-- version 5.1.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 14, 2022 at 08:33 AM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 7.4.29

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `trikate`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `name` varchar(255) DEFAULT NULL,
  `username` varchar(255) DEFAULT NULL,
  `password` varchar(255) DEFAULT NULL,
  `status` varchar(191) DEFAULT NULL,
  `last_login` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL,
  `created_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `name`, `username`, `password`, `status`, `last_login`, `updated_at`, `created_at`) VALUES
(1, 'supatcharaporn boonpanthanagun ', 'supatch', '$2y$10$Uwcx7QfAKXJ/IiNFkQ/eUu04.SolPbkR/OeyiXPDN8nK008oCYqjW', 'Super Admin', '2022-08-26 10:42:02', '2021-04-27 15:03:43', '2021-03-13 14:26:51'),
(7, 'สุพัชราพร บุญผันธนากุล', 'mint', '$2y$10$rLyTV4WcPsSkbUudT9rS7Oem55UmZz1OwxAsOv7abyJXwbIWTZSxi', 'Admin', '2022-06-18 02:19:28', '2022-06-05 16:55:43', '2022-06-05 16:55:43'),
(9, 'สุพัชราพร บุญผันธนากุล', 'ments', '$2y$10$MHhGTRnVgSUuWoRJ6eWnsut4BEZ963zpCwu5uOvscVmHjiQXm/2c.', 'Super Admin', '2022-07-10 20:03:27', '2022-07-10 20:12:36', '2022-07-10 20:03:08'),
(10, 'สุพัชราพร บุญผันธนากุล', 'ment', '$2y$10$LM/Tnsv8Bi7JQ.XQEMrSi.cBSJi7BvWCZaZpKlJ9L6WEuA5q1Il62', 'Super Admin', '2022-07-22 10:27:09', '2022-07-22 10:27:50', '2022-07-22 10:27:09');

-- --------------------------------------------------------

--
-- Table structure for table `books`
--

CREATE TABLE `books` (
  `id` int(11) NOT NULL,
  `book_id` varchar(11) NOT NULL COMMENT 'รหัสหนังสือ',
  `book_name` varchar(255) NOT NULL COMMENT 'ชื่อหนังสือ',
  `type_id` varchar(10) NOT NULL COMMENT 'ประเภทหนังสือ',
  `quantity_book` int(20) NOT NULL COMMENT 'จำนวนหนังสือในคลัง',
  `price` int(20) NOT NULL COMMENT 'ราคาหนังสือ',
  `page` int(50) NOT NULL COMMENT 'จำนวนหน้า',
  `author` varchar(255) NOT NULL COMMENT 'ผู้แต่ง',
  `admin_id` int(11) NOT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `books`
--

INSERT INTO `books` (`id`, `book_id`, `book_name`, `type_id`, `quantity_book`, `price`, `page`, `author`, `admin_id`, `updated_at`, `created_at`) VALUES
(1, '01', 'บันเทิง', '000', 2, 300, 50, 'moowhan', 0, '2022-09-30 04:37:03', NULL),
(6, '0051', 'ประโยคและคำศัพท์อังกฤษ สำหรับเตรียมสอบ', '400', 0, 180, 50, 'maxma', 0, '2022-08-07 18:56:57', '2022-05-06 18:05:03'),
(7, '555', 'นักปราชญ์', '100', 5, 600, 50, 'กองบรรณาธิการสำนักพิมพ์', 0, '2022-08-07 18:53:22', '2022-05-30 18:44:20'),
(8, 'ก536ศ', 'ศาสนา ม.6', '200', 1, 200, 30, 'กองบรรณาธิการสำนักพิมพ์', 0, '2022-08-26 04:26:28', '2022-05-30 18:44:56'),
(9, '5596', 'สังคมศึกษาม.1', '300', 25, 180, 50, 'กองบรรณาธิการสำนักพิมพ์', 1, '2022-08-10 15:12:26', '2022-05-30 18:45:40'),
(10, '0325', 'ทดลองน่ารู้', '500', 1, 180, 50, 'กองบรรณาธิการสำนักพิมพ์', 0, '2022-08-26 04:12:52', '2022-05-30 18:46:15'),
(11, 'ง336ท', 'technology', '600', 13, 180, 50, 'maxma', 0, '2022-06-13 12:06:08', '2022-05-30 18:47:24'),
(12, 'ก665ร', 'รำไทย', '700', 3, 180, 50, 'กองบรรณาธิการสำนักพิมพ์', 0, '2022-08-25 09:58:47', '2022-05-30 18:48:04'),
(14, 'ป2235', 'โลกยุกต์หิน', '900', 6, 180, 50, 'กองบรรณาธิการสำนักพิมพ์', 0, '2022-06-13 17:58:35', '2022-05-30 18:49:31'),
(24, '1', 'แฮปปี้', '700', 1, 90, 10, 'maxma', 1, '2022-08-25 09:51:29', '2022-06-13 18:05:41'),
(26, '2', 'พระพุทธเจ้า', '200', 2, 90, 8, 'สำนักพิมพ์ไทย', 1, '2022-07-20 12:40:22', '2022-06-16 10:05:14'),
(29, '0052', 'อังกฤษสำหรับเตรียมสอบม.2', '400', 8, 300, 30, 'กองบรรณาธิการสำนักพิมพ์', 1, '2022-09-30 04:36:09', '2022-06-18 13:04:49'),
(30, 'ป719น', 'นับถอยหลังสู่สงครามโลกครั้งที่ 3', '800', 10, 380, 313, 'เปรมศักดิ์ จีระแพทย์', 1, '2022-08-10 15:45:17', '2022-07-22 03:42:13'),
(32, 'ม960ก', 'การเทศนาด้วยความสดใส', '200', 8, 160, 268, 'เปรมศักดิ์ จีระแพทย์', 1, '2022-08-26 04:12:52', '2022-07-22 05:01:21'),
(33, 'น246ส', 'สิ่งแวดล้อม เทคโนโลยีและชีวิต', '300', 3, 200, 301, 'คณะกรรมการวิชาสิ่งแวดล้อม เทคโนโลยีและชีวิต ศูนย์วิชาบูรณาการ หมวดวิชาศึกษาทั่วไป มหาวิทยาลัยเกษตรศาสตร์', 1, '2022-08-23 12:53:29', '2022-08-10 15:09:52'),
(34, 'ก053ป', 'โปรตีนชีวสารสนเทศ', '500', 9, 450, 252, 'เกียริทวี ชูวงศ์โกมล', 1, '2022-08-25 16:24:44', '2022-08-25 09:52:52'),
(35, 'ว285ค', 'คนนิสัยดี', '100', 3, 350, 160, 'ศ.คร.นายแพทย์ วิทยา นาควัชระ', 1, '2022-09-30 04:38:12', '2022-08-26 03:51:52');

-- --------------------------------------------------------

--
-- Table structure for table `book_type`
--

CREATE TABLE `book_type` (
  `id` int(11) NOT NULL,
  `code` varchar(50) NOT NULL COMMENT 'รหัสประเภทหนังสือ',
  `type_name` varchar(191) NOT NULL COMMENT 'ชื่อประเภทหนังสือ',
  `admin_id` int(11) DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `created_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `book_type`
--

INSERT INTO `book_type` (`id`, `code`, `type_name`, `admin_id`, `updated_at`, `created_at`) VALUES
(1, '000', 'เบ็ตเตล็ดหรือความรู้ทั่วไป (Generalities)', NULL, NULL, NULL),
(2, '100', 'ปรัชญา (Philosophy)', NULL, NULL, NULL),
(3, '200', 'ศาสนา (Religion)', NULL, NULL, NULL),
(4, '300', 'สังคมศาสตร์ (Social sciences)', NULL, NULL, NULL),
(5, '400', 'ภาษาศาสตร์ (Language)', NULL, NULL, NULL),
(6, '500', 'วิทยาศาสตร์ (Science)', NULL, NULL, NULL),
(7, '600', 'วิทยาศาสตร์ประยุกต์ หรือเทคโนโลยี (Technology)', NULL, NULL, NULL),
(8, '700', 'ศิลปกรรมและการบันเทิง (Arts and recreation)', NULL, NULL, NULL),
(9, '800', 'วรรณคดี (Literature)', NULL, NULL, NULL),
(10, '900', 'ประวัติศาสตร์และภูมิศาสตร์ (History and geography)', NULL, NULL, NULL),
(16, '123', 'อ้างอิงทั่วไป', 1, '2022-06-18 13:56:58', '2022-06-18 20:56:58');

-- --------------------------------------------------------

--
-- Table structure for table `borrow_return_books`
--

CREATE TABLE `borrow_return_books` (
  `id` int(11) NOT NULL,
  `member_id` varchar(11) NOT NULL COMMENT 'รหัสสมาชิก',
  `book_id` varchar(11) NOT NULL COMMENT 'รหัสหนังสือ',
  `borrow_date` date NOT NULL COMMENT 'วันที่ยืม',
  `due_date` date NOT NULL COMMENT 'กำหนดวันคืน',
  `return_date` date DEFAULT NULL COMMENT 'วันที่คืน',
  `fines` int(10) NOT NULL COMMENT 'ค่าปรับ',
  `status_fines` varchar(2) NOT NULL COMMENT 'สถานะค่าปรับ',
  `status` int(1) NOT NULL COMMENT 'สถานะยืม-คืน',
  `admin_id` int(11) NOT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `borrow_return_id` varchar(191) NOT NULL COMMENT 'รหัสยืม',
  `late` int(11) NOT NULL COMMENT 'เลยกำหนด(วัน)',
  `quantity` int(11) NOT NULL COMMENT 'จำนวนยืม'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `borrow_return_books`
--

INSERT INTO `borrow_return_books` (`id`, `member_id`, `book_id`, `borrow_date`, `due_date`, `return_date`, `fines`, `status_fines`, `status`, `admin_id`, `updated_at`, `created_at`, `borrow_return_id`, `late`, `quantity`) VALUES
(54, '1023', '01', '2022-07-20', '2022-08-01', '2022-08-02', 5, '1', 2, 1, '2022-08-01 17:45:20', '2022-08-01 17:43:47', 'TK650054', 1, 1),
(55, '1234', '0051', '2022-07-20', '2022-08-01', '2022-08-02', 5, '2', 2, 1, '2022-08-11 11:10:05', '2022-08-01 17:44:20', 'TK650055', 1, 1),
(56, '1023', '0325', '2022-08-02', '2022-08-16', '2022-08-08', 0, '0', 2, 1, '2022-08-07 17:41:11', '2022-08-01 17:46:10', 'TK650056', 0, 1),
(57, '2493', 'ป719น', '2022-07-28', '2022-08-05', '2022-08-10', 25, '1', 2, 1, '2022-08-10 15:37:40', '2022-08-05 21:04:15', 'TK650057', 5, 1),
(59, '2493', '0052', '2022-08-06', '2022-08-20', NULL, 0, '', 1, 1, '2022-08-05 21:08:05', '2022-08-05 21:08:05', 'TK650059', 0, 1),
(60, '1234', '0051', '2022-08-06', '2022-08-20', NULL, 0, '', 1, 1, '2022-08-05 21:11:52', '2022-08-05 21:11:52', 'TK650060', 0, 1),
(84, '0104', 'ก665ร', '2022-08-10', '2022-08-17', '2022-08-25', 40, '1', 2, 1, '2022-08-25 09:58:47', '2022-08-10 15:21:07', 'TK650062', 8, 1),
(85, '0104', 'ก536ศ', '2022-08-11', '2022-08-18', '2022-08-24', 30, '2', 2, 1, '2022-08-24 08:41:12', '2022-08-10 17:45:22', 'TK650085', 6, 1),
(88, '1234', '01', '2022-08-11', '2022-08-25', '2022-08-11', 0, '0', 2, 1, '2022-08-11 11:07:37', '2022-08-11 10:56:49', 'TK650088', 0, 1),
(89, '0155', '0325', '2022-08-11', '2022-08-18', NULL, 0, '', 1, 1, '2022-08-11 10:58:10', '2022-08-11 10:58:10', 'TK650089', 0, 1),
(90, '0155', '01', '2022-08-11', '2022-08-18', NULL, 0, '', 1, 1, '2022-08-11 10:58:10', '2022-08-11 10:58:10', 'TK650089', 0, 1),
(92, '0104', 'ม960ก', '2022-08-12', '2022-08-19', '2022-08-12', 0, '0', 2, 1, '2022-08-11 18:58:55', '2022-08-11 18:12:50', 'TK650091', 0, 1),
(95, '0115', 'น246ส', '2022-08-23', '2022-08-30', NULL, 0, '', 1, 1, '2022-08-23 12:53:29', '2022-08-23 12:53:29', 'TK650093', 0, 1),
(96, '2493', 'ม960ก', '2022-08-24', '2022-09-07', NULL, 0, '', 1, 1, '2022-08-24 08:40:35', '2022-08-24 08:40:35', 'TK650096', 0, 1),
(97, '1234', 'ก665ร', '2022-08-24', '2022-09-07', NULL, 0, '', 1, 1, '2022-08-24 08:42:58', '2022-08-24 08:42:58', 'TK650097', 0, 1),
(98, '0114', 'ก053ป', '2022-08-25', '2022-09-01', '2022-08-25', 0, '0', 2, 1, '2022-08-25 16:24:44', '2022-08-25 09:54:37', 'TK650098', 0, 1),
(104, '115', '0052', '2022-08-25', '2022-09-08', NULL, 0, '', 1, 1, '2022-08-25 16:20:42', '2022-08-25 16:20:42', 'TK650099', 0, 1),
(105, '115', '01', '2022-08-25', '2022-09-08', NULL, 0, '', 1, 1, '2022-08-25 16:20:42', '2022-08-25 16:20:42', 'TK650099', 0, 1),
(106, '0114', 'ก053ป', '2022-08-25', '2022-09-01', NULL, 0, '', 1, 1, '2022-08-25 16:24:32', '2022-08-25 16:24:32', 'TK6500106', 0, 1),
(107, '0114', 'ก536ศ', '2022-08-25', '2022-09-01', '2022-08-26', 0, '0', 2, 1, '2022-08-26 04:26:28', '2022-08-25 16:24:32', 'TK6500106', 0, 1),
(108, '0120', 'ว285ค', '2022-08-26', '2022-09-02', NULL, 0, '', 1, 1, '2022-08-26 04:10:13', '2022-08-26 04:10:13', 'TK6500108', 0, 1),
(109, '0119', 'ม960ก', '2022-08-26', '2022-09-02', NULL, 0, '', 1, 1, '2022-08-26 04:12:52', '2022-08-26 04:12:52', 'TK6500109', 0, 1),
(110, '0119', '0325', '2022-08-26', '2022-09-02', NULL, 0, '', 1, 1, '2022-08-26 04:12:52', '2022-08-26 04:12:52', 'TK6500109', 0, 1),
(111, '9999', '0052', '2022-08-26', '2022-09-09', '2022-09-30', 105, '1', 2, 1, '2022-09-30 04:36:09', '2022-08-26 04:22:09', 'TK6500111', 21, 1),
(112, '9999', '01', '2022-08-26', '2022-09-09', '2022-09-30', 105, '1', 2, 1, '2022-09-30 04:37:03', '2022-08-26 04:22:09', 'TK6500111', 21, 1),
(113, '9999', 'ว285ค', '2022-08-26', '2022-09-09', '2022-08-26', 0, '0', 2, 1, '2022-08-26 04:30:57', '2022-08-26 04:22:09', 'TK6500111', 0, 1),
(114, '0555', 'ว285ค', '2022-08-26', '2022-09-02', '2022-09-30', 140, '1', 2, 1, '2022-09-30 04:38:12', '2022-08-26 04:23:04', 'TK6500114', 28, 1);

-- --------------------------------------------------------

--
-- Table structure for table `member`
--

CREATE TABLE `member` (
  `id` int(11) NOT NULL,
  `member_id` varchar(50) NOT NULL COMMENT 'รหัสสมาชิก',
  `prefix` varchar(191) NOT NULL COMMENT 'คำนำหน้าชื่อ',
  `name` varchar(255) NOT NULL COMMENT 'ชื่อ-นามสกุล',
  `phone_number` varchar(10) NOT NULL COMMENT 'เบอร์โทรศัพท์',
  `email` varchar(191) NOT NULL COMMENT 'อีเมล',
  `member_type` int(2) NOT NULL COMMENT 'ประเภทสมาชิก',
  `admin_id` int(11) NOT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `gender` varchar(20) NOT NULL COMMENT 'เพศ',
  `class` varchar(20) NOT NULL,
  `quantity_borrow` int(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `member`
--

INSERT INTO `member` (`id`, `member_id`, `prefix`, `name`, `phone_number`, `email`, `member_type`, `admin_id`, `updated_at`, `created_at`, `gender`, `class`, `quantity_borrow`) VALUES
(37, '1234', 'นาย', 'แสนไกร นุนุ', '', '', 1, 1, '2022-08-24 08:42:58', '2022-07-22 15:46:57', 'ชาย', '', 1),
(38, '1023', 'นางสาว', 'สุพัชราพร บุญผันธนากุล', '', '', 3, 1, '2022-07-22 15:48:30', '2022-07-22 15:48:30', 'หญิง', '', 3),
(41, '0153', 'นาย', 'มามา ไวไว', '0111111111', '0155@gmail.com', 2, 1, '2022-08-25 09:41:47', '2022-07-27 16:02:40', 'ชาย', '6', 3),
(42, '0119', 'นาย', 'พยม พวงมาลา', '0988888889', '0119@gmail.com', 2, 1, '2022-08-26 04:12:52', '2022-08-05 21:34:08', 'ชาย', '6', 1),
(43, '0115', 'เด็กชาย', 'สหัสชัย โสมิญะ', '0988888889', '0122@gmail.com', 2, 1, '2022-08-25 16:09:58', '2022-08-05 21:39:52', 'ชาย', '4', 1),
(44, '0555', 'นางสาว', 'อังควิภา เสารางทอย', '0988888000', '0555@gmail.com', 2, 1, '2022-08-26 04:23:04', '2022-08-07 18:39:48', 'หญิง', '6', 2),
(46, '0104', 'นาย', 'อภิปรัชญ์ ชุ่มวงศ์', '', '0104@gmail.com', 2, 1, '2022-08-25 09:58:30', '2022-08-10 15:03:34', 'ชาย', '7', 0),
(47, '2493', 'นาย', 'เกษมศักดิ์ ปุกคาม', '0895456465', '2493@gmail.com', 3, 1, '2022-08-24 08:40:35', '2022-08-10 15:08:33', 'ชาย', '', 2),
(48, '0114', 'เด็กชาย', 'ทัตเทพ ทองโชติ', '0645215645', '114@gmail.com', 2, 1, '2022-08-25 16:24:32', '2022-08-25 09:48:48', 'ชาย', '3', 0),
(50, '0120', 'นางสาว', 'รมิดา สมกุล', '0895946253', '0102@gmail.com', 2, 1, '2022-08-26 04:10:13', '2022-08-26 03:47:39', 'หญิง', '5', 2),
(51, '9999', 'นาย', 'นพนันท์ สุขสมบูรณ์', '0897855956', '', 1, 1, '2022-08-26 04:22:09', '2022-08-26 04:21:11', 'ชาย', '', 2);

-- --------------------------------------------------------

--
-- Table structure for table `member_type`
--

CREATE TABLE `member_type` (
  `id` int(2) NOT NULL,
  `type_name` varchar(191) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `member_type`
--

INSERT INTO `member_type` (`id`, `type_name`) VALUES
(1, 'ครู/อาจารย์'),
(2, 'นักเรียน'),
(3, 'บุคลากรอื่นๆ');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `books`
--
ALTER TABLE `books`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `book_type`
--
ALTER TABLE `book_type`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `borrow_return_books`
--
ALTER TABLE `borrow_return_books`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `member`
--
ALTER TABLE `member`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `member_type`
--
ALTER TABLE `member_type`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `books`
--
ALTER TABLE `books`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=36;

--
-- AUTO_INCREMENT for table `book_type`
--
ALTER TABLE `book_type`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `borrow_return_books`
--
ALTER TABLE `borrow_return_books`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=115;

--
-- AUTO_INCREMENT for table `member`
--
ALTER TABLE `member`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=52;

--
-- AUTO_INCREMENT for table `member_type`
--
ALTER TABLE `member_type`
  MODIFY `id` int(2) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
