-- phpMyAdmin SQL Dump
-- version 5.1.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 10, 2022 at 07:51 PM
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
(1, 'supatcharaporn boonpanthanagun ', 'supatch', '$2y$10$Uwcx7QfAKXJ/IiNFkQ/eUu04.SolPbkR/OeyiXPDN8nK008oCYqjW', 'Super Admin', '2022-05-10 22:20:03', '2021-04-27 15:03:43', '2021-03-13 14:26:51');

-- --------------------------------------------------------

--
-- Table structure for table `books`
--

CREATE TABLE `books` (
  `id` int(11) NOT NULL,
  `book_id` varchar(11) NOT NULL,
  `book_name` varchar(255) NOT NULL,
  `type_id` varchar(10) NOT NULL,
  `quantity_book` int(20) NOT NULL,
  `price` int(20) NOT NULL,
  `page` int(50) NOT NULL,
  `author` varchar(255) NOT NULL,
  `admin_id` int(11) NOT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `books`
--

INSERT INTO `books` (`id`, `book_id`, `book_name`, `type_id`, `quantity_book`, `price`, `page`, `author`, `admin_id`, `updated_at`, `created_at`) VALUES
(1, '01', 'บันเทิง', '000', 10, 300, 50, 'moowhan', 0, NULL, NULL),
(4, '0051', 'ประโยคและคำศัพท์อังกฤษ สำหรับเตรียมสอบ', '', 2, 180, 50, 'maxma', 0, '2022-05-06 18:00:35', '2022-05-06 18:00:35'),
(5, '0051', 'ประโยคและคำศัพท์อังกฤษ สำหรับเตรียมสอบ', '', 2, 180, 50, 'maxma', 0, '2022-05-06 18:02:07', '2022-05-06 18:02:07'),
(6, '0051', 'ประโยคและคำศัพท์อังกฤษ สำหรับเตรียมสอบ', '400', 2, 180, 50, 'maxma', 0, '2022-05-06 18:05:03', '2022-05-06 18:05:03');

-- --------------------------------------------------------

--
-- Table structure for table `book_type`
--

CREATE TABLE `book_type` (
  `id` int(11) NOT NULL,
  `code` varchar(50) NOT NULL,
  `type_name` varchar(191) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `book_type`
--

INSERT INTO `book_type` (`id`, `code`, `type_name`) VALUES
(1, '000', 'เบ็ตเตล็ดหรือความรู้ทั่วไป (Generalities)'),
(2, '100', 'ปรัชญา (Philosophy)'),
(3, '200', 'ศาสนา (Religion)'),
(4, '300', 'สังคมศาสตร์ (Social sciences)'),
(5, '400', 'ภาษาศาสตร์ (Language)'),
(6, '500', 'วิทยาศาสตร์ (Science)'),
(7, '600', 'วิทยาศาสตร์ประยุกต์ หรือเทคโนโลยี (Technology)'),
(8, '700', 'ศิลปกรรมและการบันเทิง (Arts and recreation)'),
(9, '800', 'วรรณคดี (Literature)'),
(10, '900', 'ประวัติศาสตร์และภูมิศาสตร์ (History and geography)');

-- --------------------------------------------------------

--
-- Table structure for table `borrow_return_books`
--

CREATE TABLE `borrow_return_books` (
  `id` int(11) NOT NULL,
  `member_id` varchar(11) NOT NULL,
  `book_id` varchar(11) NOT NULL,
  `borrow_date` date NOT NULL,
  `return_date` date NOT NULL,
  `return_really` date DEFAULT NULL,
  `fines` int(10) NOT NULL,
  `status_fines` varchar(191) NOT NULL,
  `status` int(1) NOT NULL,
  `admin_id` int(11) NOT NULL,
  `update_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `borrow_return_id` varchar(191) NOT NULL,
  `late` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `borrow_return_books`
--

INSERT INTO `borrow_return_books` (`id`, `member_id`, `book_id`, `borrow_date`, `return_date`, `return_really`, `fines`, `status_fines`, `status`, `admin_id`, `update_at`, `created_at`, `borrow_return_id`, `late`) VALUES
(1, '0122', '01', '2022-05-07', '2022-05-11', NULL, 0, '', 0, 0, NULL, NULL, 'S01', 0);

-- --------------------------------------------------------

--
-- Table structure for table `member`
--

CREATE TABLE `member` (
  `id` int(11) NOT NULL,
  `member_id` varchar(50) NOT NULL,
  `prefix` varchar(191) NOT NULL,
  `name` varchar(255) NOT NULL,
  `phone_number` varchar(10) NOT NULL,
  `email` varchar(191) NOT NULL,
  `member_type` int(2) NOT NULL,
  `admin_id` int(11) NOT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `member`
--

INSERT INTO `member` (`id`, `member_id`, `prefix`, `name`, `phone_number`, `email`, `member_type`, `admin_id`, `updated_at`, `created_at`) VALUES
(1, '0122', 'นาย', 'แสนไกร นุนุ', '099999999', '0122@gmail.com', 2, 0, NULL, NULL),
(2, '0119', 'เด็กหญิง', 'มะม่วงเขียว เขียวเสวย', '0988888882', 'g1@gmail.com', 1, 1, '2022-05-06 17:47:34', '2022-05-06 17:36:31');

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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `books`
--
ALTER TABLE `books`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `book_type`
--
ALTER TABLE `book_type`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `borrow_return_books`
--
ALTER TABLE `borrow_return_books`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `member`
--
ALTER TABLE `member`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `member_type`
--
ALTER TABLE `member_type`
  MODIFY `id` int(2) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
