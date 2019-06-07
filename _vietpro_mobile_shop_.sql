-- phpMyAdmin SQL Dump
-- version 4.2.11
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Mar 21, 2019 at 05:19 PM
-- Server version: 5.6.21
-- PHP Version: 5.6.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: ``vietpro_mobile_shop``
--

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE IF NOT EXISTS `category` (
`cat_id` int(11) NOT NULL,
  `cat_name` varchar(255) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`cat_id`, `cat_name`) VALUES
(1, 'iPhone'),
(4, 'Nokia'),
(7, 'OPPO'),
(2, 'Samsung'),
(5, 'Sony'),
(9, 'Vivo'),
(8, 'Xiaomi');

-- --------------------------------------------------------

--
-- Table structure for table `comment`
--

CREATE TABLE IF NOT EXISTS `comment` (
`comm_id` int(11) NOT NULL,
  `parent_comment_id` int(11) NOT NULL,
  `prd_id` int(11) NOT NULL,
  `comm_name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `comm_mail` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `comm_date` datetime NOT NULL,
  `comm_details` text COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=92 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `comment`
--

INSERT INTO `comment` (`comm_id`, `parent_comment_id`, `prd_id`, `comm_name`, `comm_mail`, `comm_date`, `comm_details`) VALUES
(1, 0, 1, 'Nguyễn Văn A', 'nguyenvana@gmail.com', '2018-12-12 20:59:56', 'Đây thực sự là một sản phẩm tuyệt vời'),
(2, 0, 2, 'Nguyễn Văn A', 'nguyenvana@gmail.com', '2018-12-12 20:59:56', 'Đây thực sự là một sản phẩm tuyệt vời'),
(3, 0, 3, 'Nguyễn Văn A', 'nguyenvana@gmail.com', '2018-12-12 20:59:56', 'Đây thực sự là một sản phẩm tuyệt vời'),
(4, 0, 4, 'Nguyễn Văn A', 'nguyenvana@gmail.com', '2018-12-12 20:59:56', 'Đây thực sự là một sản phẩm tuyệt vời'),
(5, 0, 5, 'Nguyễn Văn A', 'nguyenvana@gmail.com', '2018-12-12 20:59:56', 'Đây thực sự là một sản phẩm tuyệt vời'),
(6, 0, 6, 'Nguyễn Văn A', 'nguyenvana@gmail.com', '2018-12-12 20:59:56', 'Đây thực sự là một sản phẩm tuyệt vời'),
(7, 0, 7, 'Nguyễn Văn A', 'nguyenvana@gmail.com', '2018-12-12 20:59:56', 'Đây thực sự là một sản phẩm tuyệt vời'),
(8, 0, 8, 'Nguyễn Văn A', 'nguyenvana@gmail.com', '2018-12-12 20:59:56', 'Đây thực sự là một sản phẩm tuyệt vời'),
(9, 0, 9, 'Nguyễn Văn A', 'nguyenvana@gmail.com', '2018-12-12 20:59:56', 'Đây thực sự là một sản phẩm tuyệt vời'),
(10, 0, 10, 'Nguyễn Văn A', 'nguyenvana@gmail.com', '2018-12-12 20:59:56', 'Đây thực sự là một sản phẩm tuyệt vời'),
(11, 0, 11, 'Nguyễn Văn A', 'nguyenvana@gmail.com', '2018-12-12 20:59:56', 'Đây thực sự là một sản phẩm tuyệt vời'),
(12, 0, 12, 'Nguyễn Văn A', 'nguyenvana@gmail.com', '2018-12-12 20:59:56', 'Đây thực sự là một sản phẩm tuyệt vời'),
(13, 0, 13, 'Nguyễn Văn A', 'nguyenvana@gmail.com', '2018-12-12 20:59:56', 'Đây thực sự là một sản phẩm tuyệt vời'),
(14, 0, 14, 'Nguyễn Văn A', 'nguyenvana@gmail.com', '2018-12-12 20:59:56', 'Đây thực sự là một sản phẩm tuyệt vời'),
(16, 0, 16, 'Nguyễn Văn A', 'nguyenvana@gmail.com', '2018-12-12 20:59:56', 'Đây thực sự là một sản phẩm tuyệt vời'),
(17, 0, 17, 'Nguyễn Văn A', 'nguyenvana@gmail.com', '2018-12-12 20:59:56', 'Đây thực sự là một sản phẩm tuyệt vời'),
(18, 0, 18, 'Nguyễn Văn A', 'nguyenvana@gmail.com', '2018-12-12 20:59:56', 'Đây thực sự là một sản phẩm tuyệt vời'),
(19, 0, 19, 'Nguyễn Văn A', 'nguyenvana@gmail.com', '2018-12-12 20:59:56', 'Đây thực sự là một sản phẩm tuyệt vời'),
(21, 0, 21, 'Nguyễn Văn A', 'nguyenvana@gmail.com', '2018-12-12 20:59:56', 'Đây thực sự là một sản phẩm tuyệt vời'),
(22, 0, 22, 'Nguyễn Văn A', 'nguyenvana@gmail.com', '2018-12-12 20:59:56', 'Đây thực sự là một sản phẩm tuyệt vời'),
(23, 0, 23, 'Nguyễn Văn A', 'nguyenvana@gmail.com', '2018-12-12 20:59:56', 'Đây thực sự là một sản phẩm tuyệt vời'),
(24, 0, 24, 'Nguyễn Văn A', 'nguyenvana@gmail.com', '2018-12-12 20:59:56', 'Đây thực sự là một sản phẩm tuyệt vời'),
(25, 0, 25, 'Nguyễn Văn A', 'nguyenvana@gmail.com', '2018-12-12 20:59:56', 'Đây thực sự là một sản phẩm tuyệt vời'),
(26, 0, 26, 'Nguyễn Văn A', 'nguyenvana@gmail.com', '2018-12-12 20:59:56', 'Đây thực sự là một sản phẩm tuyệt vời'),
(27, 0, 27, 'Nguyễn Văn A', 'nguyenvana@gmail.com', '2018-12-12 20:59:56', 'Đây thực sự là một sản phẩm tuyệt vời'),
(28, 0, 28, 'Nguyễn Văn A', 'nguyenvana@gmail.com', '2018-12-12 20:59:56', 'Đây thực sự là một sản phẩm tuyệt vời'),
(29, 0, 29, 'Nguyễn Văn A', 'nguyenvana@gmail.com', '2018-12-12 20:59:56', 'Đây thực sự là một sản phẩm tuyệt vời'),
(30, 0, 30, 'Nguyễn Văn A', 'nguyenvana@gmail.com', '2018-12-12 20:59:56', 'Đây thực sự là một sản phẩm tuyệt vời'),
(31, 0, 50, 'Vũ Minh Đức ', 'minhd2474@gmail.com', '2019-03-07 16:17:20', 'ĐẸP'),
(32, 0, 50, 'Vũ Minh Đức ', 'minhd2474@gmail.com', '2019-03-07 16:17:28', 'ĐẸP'),
(33, 0, 50, 'Vũ Minh Đức ', 'minhd2474@gmail.com', '2019-03-07 16:17:31', 'ĐẸP'),
(34, 0, 17, 'Vũ Minh Đức ', 'minhd2474@gmail.com', '2019-03-08 10:45:36', 'asdasdasd'),
(35, 0, 17, 'Vũ Minh Đức ', 'minhd2474@gmail.com', '2019-03-08 10:46:58', 'asdasdasd'),
(36, 0, 17, 'Vũ Minh Đức ', 'minhd2474@gmail.com', '2019-03-08 10:47:03', 'asdasdasd'),
(37, 0, 17, 'Vũ Minh Đức ', 'minhd2474@gmail.com', '2019-03-08 10:47:15', 'asdasdasd'),
(38, 0, 0, '', '', '2019-03-09 15:50:44', ''),
(39, 0, 0, 'Minh Äá»©c', '', '2019-03-09 15:51:10', '  anhyeuem'),
(40, 0, 0, 'khong phai do toi', '', '2019-03-09 15:51:16', 'asdadas'),
(41, 0, 0, 'das', '', '2019-03-09 15:51:18', 'asdas'),
(42, 0, 0, 'Minh Äá»©c', '', '2019-03-09 15:55:48', '  123123123'),
(43, 0, 0, 'Minh Äá»©c', '', '2019-03-09 16:00:11', '  anh aaa'),
(44, 0, 0, '', '', '2019-03-09 16:08:09', '  '),
(45, 0, 0, '', '', '2019-03-09 16:08:09', ''),
(46, 0, 0, '', '', '2019-03-09 16:08:10', ''),
(47, 0, 0, '', '', '2019-03-09 16:08:10', ''),
(48, 0, 0, '', '', '2019-03-09 16:08:11', ''),
(49, 0, 0, '', '', '2019-03-09 16:08:11', ''),
(50, 0, 0, '', '', '2019-03-09 16:08:12', ''),
(51, 0, 0, '', '', '2019-03-09 16:08:12', ''),
(52, 0, 0, '', '', '2019-03-09 16:08:12', ''),
(53, 0, 0, 'Minh Äá»©c', '', '2019-03-09 16:28:54', '  1212'),
(54, 0, 0, 'Minh Äá»©c', '', '2019-03-09 16:29:19', '  131231'),
(55, 0, 7, 'Vũ Minh Đức ', 'minhd2474@gmail.com', '2019-03-14 15:20:41', 'Kháng nước của sản phẩm không được tốt lắm\r\n'),
(56, 0, 7, 'Vũ Minh Đức ', 'minhd2474@gmail.com', '2019-03-14 15:21:03', 'Kháng nước của sản phẩm không được tốt lắm\r\n'),
(57, 0, 7, 'Vũ Minh Đức ', 'minhd2474@gmail.com', '2019-03-14 15:40:15', 'tôi rất thích sản phẩm này\r\n'),
(58, 0, 7, 'Vũ Minh Đức ', 'minhd2474@gmail.com', '2019-03-14 15:40:30', 'tôi rất thích sản phẩm này\r\n'),
(59, 0, 7, 'Vũ Minh Đức ', 'minhd2474@gmail.com', '2019-03-14 15:40:35', 'tôi rất thích sản phẩm này\r\n'),
(60, 0, 7, 'Vũ Minh Đức ', 'minhd2474@gmail.com', '2019-03-14 15:40:43', 'tôi rất thích sản phẩm này\r\n'),
(61, 0, 11, 'Vũ Minh Đức ', 'minhd2474@gmail.com', '2019-03-14 15:42:04', 'sản phẩm tốt'),
(62, 0, 11, 'Vũ Minh Đức ', 'minhd2474@gmail.com', '2019-03-14 15:42:08', 'sản phẩm tốt'),
(63, 0, 11, 'Vũ Minh Đức ', 'minhd2474@gmail.com', '2019-03-14 15:42:16', 'sản phẩm tốt'),
(64, 0, 11, 'Vũ Minh Đức ', 'minhd2474@gmail.com', '2019-03-14 16:04:11', 'sản phẩm tốt'),
(65, 0, 11, 'Vũ Minh Đức ', 'minhd2474@gmail.com', '2019-03-14 16:31:49', 'sản phẩm tốt'),
(66, 0, 11, 'Vũ Minh Đức ', 'minhd2474@gmail.com', '2019-03-14 16:31:54', 'sản phẩm tốt'),
(67, 0, 11, 'Vũ Minh Đức ', 'minhd2474@gmail.com', '2019-03-14 16:32:10', 'tot'),
(68, 0, 11, 'Vũ Minh Đức ', 'minhd2474@gmail.com', '2019-03-14 16:32:18', 'tot'),
(69, 0, 35, 'Vũ Minh Đức ', 'minhd2474@gmail.com', '2019-03-14 22:07:20', 'abcc'),
(70, 0, 35, 'Vũ Minh Đức ', 'minhd2474@gmail.com', '2019-03-14 22:07:25', 'abcc'),
(71, 0, 35, 'Vũ Minh Đức ', 'minhd2474@gmail.com', '2019-03-14 22:07:27', 'abcc'),
(72, 0, 11, 'Vũ Minh Đức ', 'minhd2474@gmail.com', '2019-03-14 22:08:37', '12345'),
(73, 0, 11, 'Vũ Minh Đức ', 'minhd2474@gmail.com', '2019-03-14 22:08:45', '12345'),
(74, 0, 7, 'Vũ Minh Đức ', 'minhd2474@gmail.com', '2019-03-15 14:22:35', 'Đẹp lắm'),
(75, 0, 7, 'Vũ Minh Đức ', 'minhd2474@gmail.com', '2019-03-15 14:22:41', 'Đẹp lắm'),
(76, 0, 32, 'Vũ Minh Đức ', 'minhd2474@gmail.com', '2019-03-15 15:16:16', 'hay l\r\n'),
(77, 0, 32, 'Vũ Minh Đức ', 'minhd2474@gmail.com', '2019-03-15 15:16:21', 'hay l\r\n'),
(78, 0, 7, 'Vũ Minh Đức ', 'minhd2474@gmail.com', '2019-03-15 15:16:40', 'hay lam'),
(79, 0, 7, 'Vũ Minh Đức ', 'minhd2474@gmail.com', '2019-03-15 15:16:53', 'asdas'),
(80, 0, 7, 'das', 'minhd2474@gmail.com', '2019-03-15 15:17:06', 'das'),
(81, 0, 7, 'Vũ Minh Đức ', 'minhd2474@gmail.com', '2019-03-15 15:17:17', '123123'),
(82, 0, 7, 'Vũ Minh Đức ', 'minhd2474@gmail.com', '2019-03-15 15:17:23', '123123'),
(83, 0, 36, 'Vũ Minh Đức ', 'minhd2474@gmail.com', '2019-03-15 15:45:56', 'san pham tot\r\n'),
(84, 0, 36, 'Vũ Minh Đức ', 'minhd2474@gmail.com', '2019-03-15 15:46:10', 'san pham tot\r\n'),
(85, 0, 45, 'Vũ Minh Đức ', 'minhd2474@gmail.com', '2019-03-15 16:32:11', '12345'),
(86, 0, 45, 'Vũ Minh Đức ', 'minhd2474@gmail.com', '2019-03-15 16:32:15', '12345'),
(87, 0, 45, 'Vũ Minh Đức ', 'minhd2474@gmail.com', '2019-03-15 16:32:18', '12345'),
(88, 0, 45, 'Vũ Minh Đức ', 'minhd2474@gmail.com', '2019-03-15 16:32:54', '12345'),
(89, 0, 45, 'Vũ Minh Đức ', 'minhd2474@gmail.com', '2019-03-15 16:33:05', '12345'),
(90, 0, 45, 'Vũ Minh Đức ', 'minhd2474@gmail.com', '2019-03-15 16:33:07', '12345'),
(91, 0, 45, 'Vũ Minh Đức ', 'minhd2474@gmail.com', '2019-03-15 20:20:25', '2312312');

-- --------------------------------------------------------

--
-- Table structure for table `counter`
--

CREATE TABLE IF NOT EXISTS `counter` (
  `ip_address` varchar(15) NOT NULL,
  `last_visit` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `counter`
--

INSERT INTO `counter` (`ip_address`, `last_visit`) VALUES
('1', '2019-03-16 13:57:26'),
('2', '2019-03-16 13:57:26'),
('::1', '2019-03-16 14:02:45'),
('::1', '2019-03-16 14:11:37'),
('::1', '2019-03-16 14:14:06'),
('::1', '2019-03-16 14:15:08'),
('::1', '2019-03-16 14:18:23'),
('::1', '2019-03-16 14:56:57'),
('::1', '2019-03-16 14:58:56'),
('::1', '2019-03-16 15:07:45'),
('::1', '2019-03-16 15:09:58'),
('::1', '2019-03-16 15:13:48'),
('::1', '2019-03-16 15:18:11'),
('::1', '2019-03-16 15:19:51'),
('::1', '2019-03-17 08:16:01'),
('::1', '2019-03-17 08:20:52'),
('::1', '2019-03-17 08:26:28'),
('::1', '2019-03-17 08:42:15'),
('::1', '2019-03-17 08:44:29'),
('::1', '2019-03-17 08:45:34'),
('::1', '2019-03-17 08:47:40'),
('::1', '2019-03-17 08:48:42'),
('::1', '2019-03-17 08:49:52'),
('::1', '2019-03-17 08:51:14'),
('::1', '2019-03-17 08:55:27'),
('::1', '2019-03-17 09:03:15'),
('::1', '2019-03-17 09:04:52'),
('::1', '2019-03-17 09:06:00'),
('::1', '2019-03-17 09:07:16'),
('::1', '2019-03-17 09:22:32'),
('::1', '2019-03-17 09:25:16'),
('::1', '2019-03-17 09:27:46'),
('::1', '2019-03-17 09:29:25'),
('::1', '2019-03-17 09:35:54'),
('::1', '2019-03-17 09:39:33'),
('::1', '2019-03-17 09:40:36'),
('::1', '2019-03-17 09:43:33'),
('::1', '2019-03-17 09:45:50'),
('::1', '2019-03-17 09:48:02'),
('::1', '2019-03-17 09:49:05'),
('::1', '2019-03-17 09:50:30'),
('::1', '2019-03-17 09:51:31'),
('::1', '2019-03-17 09:53:38'),
('::1', '2019-03-17 09:54:42'),
('::1', '2019-03-17 09:58:49'),
('::1', '2019-03-17 09:59:49'),
('::1', '2019-03-17 10:26:01'),
('::1', '2019-03-17 10:27:36'),
('::1', '2019-03-17 13:33:27'),
('::1', '2019-03-17 13:41:31'),
('::1', '2019-03-17 13:45:29'),
('::1', '2019-03-17 13:47:11'),
('::1', '2019-03-17 13:53:31'),
('::1', '2019-03-17 13:57:19'),
('::1', '2019-03-17 13:58:20'),
('::1', '2019-03-17 13:59:20'),
('::1', '2019-03-17 14:00:56'),
('::1', '2019-03-17 14:19:38'),
('::1', '2019-03-17 14:27:41'),
('::1', '2019-03-17 14:41:24'),
('::1', '2019-03-17 14:44:18'),
('::1', '2019-03-17 14:51:06'),
('::1', '2019-03-18 02:01:52'),
('::1', '2019-03-18 02:05:26'),
('::1', '2019-03-18 02:11:49'),
('::1', '2019-03-18 02:23:06'),
('::1', '2019-03-18 02:24:11'),
('::1', '2019-03-18 02:25:16'),
('::1', '2019-03-18 02:26:26'),
('::1', '2019-03-18 02:29:31'),
('::1', '2019-03-18 03:21:09'),
('::1', '2019-03-18 15:17:48'),
('::1', '2019-03-18 15:19:02'),
('::1', '2019-03-18 15:21:49'),
('::1', '2019-03-18 15:22:53'),
('::1', '2019-03-18 15:24:01'),
('::1', '2019-03-18 15:25:17'),
('::1', '2019-03-18 15:26:53'),
('::1', '2019-03-18 15:28:11'),
('::1', '2019-03-18 15:29:13'),
('::1', '2019-03-18 15:30:51'),
('::1', '2019-03-18 15:31:56'),
('::1', '2019-03-18 15:32:57'),
('::1', '2019-03-18 15:37:51'),
('::1', '2019-03-18 17:01:41'),
('::1', '2019-03-18 17:03:07'),
('::1', '2019-03-18 17:04:17'),
('::1', '2019-03-18 17:05:55'),
('::1', '2019-03-18 18:26:37'),
('::1', '2019-03-18 18:39:55'),
('::1', '2019-03-18 18:42:16'),
('::1', '2019-03-18 18:43:29'),
('::1', '2019-03-18 18:44:29'),
('::1', '2019-03-19 08:27:36'),
('::1', '2019-03-19 08:46:32'),
('::1', '2019-03-19 09:15:26'),
('::1', '2019-03-19 09:52:13'),
('::1', '2019-03-19 09:54:16'),
('::1', '2019-03-19 09:55:53'),
('::1', '2019-03-19 14:12:59'),
('::1', '2019-03-19 14:14:34'),
('::1', '2019-03-19 14:42:28'),
('::1', '2019-03-19 14:54:38'),
('::1', '2019-03-19 15:00:17'),
('::1', '2019-03-19 15:12:41'),
('::1', '2019-03-19 15:14:30'),
('::1', '2019-03-19 15:15:38'),
('::1', '2019-03-19 15:17:39'),
('::1', '2019-03-19 15:19:51'),
('::1', '2019-03-19 15:20:53'),
('::1', '2019-03-19 15:23:40'),
('::1', '2019-03-19 15:25:44'),
('::1', '2019-03-19 15:27:53'),
('::1', '2019-03-19 15:29:14'),
('::1', '2019-03-19 15:30:22'),
('::1', '2019-03-19 15:31:50'),
('::1', '2019-03-19 15:35:08'),
('::1', '2019-03-19 15:36:12'),
('::1', '2019-03-20 08:23:35'),
('::1', '2019-03-20 08:51:02'),
('::1', '2019-03-20 08:54:06'),
('::1', '2019-03-20 08:57:17'),
('::1', '2019-03-20 09:00:19'),
('::1', '2019-03-20 09:02:20'),
('::1', '2019-03-20 09:03:26'),
('::1', '2019-03-20 09:04:27'),
('::1', '2019-03-20 09:07:07'),
('::1', '2019-03-20 09:08:23'),
('::1', '2019-03-20 09:10:03'),
('::1', '2019-03-20 09:13:32'),
('::1', '2019-03-20 09:18:41'),
('::1', '2019-03-20 09:20:27'),
('::1', '2019-03-20 09:21:46'),
('::1', '2019-03-20 09:24:30'),
('::1', '2019-03-20 09:26:56'),
('::1', '2019-03-20 09:28:00'),
('::1', '2019-03-20 09:29:27'),
('::1', '2019-03-20 09:31:22'),
('::1', '2019-03-20 09:34:04'),
('::1', '2019-03-20 09:35:17'),
('::1', '2019-03-20 09:37:37'),
('::1', '2019-03-20 09:38:52'),
('::1', '2019-03-20 09:40:02'),
('::1', '2019-03-20 09:42:49'),
('::1', '2019-03-20 09:45:35'),
('::1', '2019-03-20 09:49:22'),
('::1', '2019-03-20 09:50:25'),
('::1', '2019-03-20 09:52:12'),
('::1', '2019-03-20 09:53:30'),
('::1', '2019-03-20 09:54:34'),
('::1', '2019-03-20 09:59:01'),
('::1', '2019-03-20 10:00:09'),
('::1', '2019-03-20 10:02:33'),
('::1', '2019-03-20 10:03:35'),
('::1', '2019-03-20 10:04:38'),
('::1', '2019-03-20 10:06:45'),
('::1', '2019-03-20 10:10:50'),
('::1', '2019-03-20 10:16:33'),
('::1', '2019-03-20 10:17:45'),
('::1', '2019-03-20 10:29:42'),
('::1', '2019-03-20 10:30:49'),
('::1', '2019-03-20 10:31:59'),
('::1', '2019-03-20 10:34:32'),
('::1', '2019-03-20 10:36:01'),
('::1', '2019-03-20 10:39:04'),
('::1', '2019-03-20 10:40:25'),
('::1', '2019-03-20 10:41:51'),
('::1', '2019-03-20 10:43:08'),
('::1', '2019-03-20 10:44:12'),
('::1', '2019-03-20 10:45:43'),
('::1', '2019-03-20 10:46:47'),
('::1', '2019-03-20 10:48:36'),
('::1', '2019-03-20 10:50:57'),
('::1', '2019-03-20 10:51:59'),
('::1', '2019-03-20 10:53:08'),
('::1', '2019-03-20 10:54:24'),
('::1', '2019-03-20 10:55:27'),
('::1', '2019-03-20 10:56:30'),
('::1', '2019-03-20 10:59:18'),
('::1', '2019-03-20 11:00:24'),
('::1', '2019-03-20 11:01:49'),
('::1', '2019-03-20 11:02:50'),
('::1', '2019-03-20 11:05:04'),
('::1', '2019-03-20 11:06:07'),
('::1', '2019-03-20 11:15:24'),
('::1', '2019-03-20 11:16:39'),
('::1', '2019-03-20 11:17:54'),
('::1', '2019-03-20 11:22:24'),
('::1', '2019-03-20 11:24:15'),
('::1', '2019-03-20 11:27:42'),
('::1', '2019-03-20 13:31:31'),
('::1', '2019-03-20 15:48:29'),
('::1', '2019-03-20 15:49:32'),
('::1', '2019-03-20 15:51:56'),
('::1', '2019-03-20 15:54:24'),
('::1', '2019-03-20 15:55:38'),
('::1', '2019-03-20 15:56:59'),
('::1', '2019-03-20 15:58:20'),
('::1', '2019-03-20 15:59:21'),
('::1', '2019-03-20 16:02:07'),
('::1', '2019-03-20 16:03:56'),
('::1', '2019-03-20 16:04:56'),
('::1', '2019-03-20 16:09:05'),
('::1', '2019-03-20 16:11:44'),
('::1', '2019-03-20 16:19:33'),
('::1', '2019-03-20 16:21:17'),
('::1', '2019-03-20 16:22:48'),
('::1', '2019-03-20 16:23:49'),
('::1', '2019-03-20 16:25:20'),
('::1', '2019-03-20 16:28:00'),
('::1', '2019-03-20 16:37:46'),
('::1', '2019-03-20 16:42:39'),
('::1', '2019-03-20 16:45:56'),
('::1', '2019-03-20 16:48:28'),
('::1', '2019-03-20 16:55:01'),
('::1', '2019-03-21 08:28:44'),
('::1', '2019-03-21 08:29:44'),
('::1', '2019-03-21 08:42:29'),
('::1', '2019-03-21 08:43:46'),
('::1', '2019-03-21 08:45:03'),
('::1', '2019-03-21 08:46:07'),
('::1', '2019-03-21 08:47:13'),
('::1', '2019-03-21 08:58:59'),
('::1', '2019-03-21 09:56:52'),
('::1', '2019-03-21 09:58:07'),
('::1', '2019-03-21 10:05:52'),
('::1', '2019-03-21 10:06:52'),
('::1', '2019-03-21 10:08:52'),
('::1', '2019-03-21 10:10:10'),
('::1', '2019-03-21 10:11:23'),
('::1', '2019-03-21 10:14:51'),
('::1', '2019-03-21 10:18:55'),
('::1', '2019-03-21 10:26:30'),
('::1', '2019-03-21 10:28:02'),
('::1', '2019-03-21 10:35:24'),
('::1', '2019-03-21 10:36:52'),
('::1', '2019-03-21 13:09:58'),
('::1', '2019-03-21 13:10:58'),
('::1', '2019-03-21 13:13:17'),
('::1', '2019-03-21 13:19:16'),
('::1', '2019-03-21 13:20:16'),
('::1', '2019-03-21 13:21:27'),
('::1', '2019-03-21 13:23:11'),
('::1', '2019-03-21 13:24:21'),
('::1', '2019-03-21 13:27:07'),
('::1', '2019-03-21 13:28:09'),
('::1', '2019-03-21 13:33:23'),
('::1', '2019-03-21 13:35:28'),
('::1', '2019-03-21 13:36:37'),
('::1', '2019-03-21 13:39:54'),
('::1', '2019-03-21 13:40:57'),
('::1', '2019-03-21 15:54:22');

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

CREATE TABLE IF NOT EXISTS `product` (
`prd_id` int(11) NOT NULL,
  `cat_id` int(11) NOT NULL,
  `prd_name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `prd_image` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `prd_price` int(11) unsigned NOT NULL,
  `prd_warranty` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `prd_accessories` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `prd_new` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `prd_promotion` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `prd_status` int(1) NOT NULL,
  `prd_featured` int(1) NOT NULL,
  `prd_details` text COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=52 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`prd_id`, `cat_id`, `prd_name`, `prd_image`, `prd_price`, `prd_warranty`, `prd_accessories`, `prd_new`, `prd_promotion`, `prd_status`, `prd_featured`, `prd_details`) VALUES
(1, 0, '', '', 0, '', '', '', '', 0, 0, ''),
(2, 0, 'iPhone X 256GB Silver Seedstock update  ', 'iPhone-7-Plus-32GB-Rose-Gold.png', 10000000, '12 Tháng', 'Hộp, sách, sạc, cáp, tai nghe', 'Máy Mới 100%', 'Dán Màn Hình 4D', 1, 1, 'Sản phẩm này chúng tôi đang cập nhật nội dung chi tiết, các bạn có thể qua trực tiếp cửa hàng để xem sản phẩm, vì hàng chúng tôi luôn có sẵn.'),
(3, 0, 'iPhone Xr 2 Sim 64GB Yellow 121212   ', 'Xiaomi-Redmi-Note-6-Pro-32GB-Blue.png', 10000001, '12 Tháng', 'Hộp, sách, sạc, cáp, tai nghe', 'Máy Mới 100%', 'Dán Màn Hình 4D', 1, 0, 'Sản phẩm này chúng tôi đang cập nhật nội dung chi tiết, các bạn có thể qua trực tiếp cửa hàng để xem sản phẩm, vì hàng chúng tôi luôn có sẵn.'),
(4, 0, 'iPhone Xr 2 Sim 56GB Red    ', 'Nokia-3.1-Black.png', 10000000, '12 Tháng', 'Hộp, sách, sạc, cáp, tai nghe', 'Máy Mới 100%', 'Dán Màn Hình 4D', 1, 0, 'Sản phẩm này chúng tôi đang cập nhật nội dung chi tiết, các bạn có thể qua trực tiếp cửa hàng để xem sản phẩm, vì hàng chúng tôi luôn có sẵn.'),
(5, 0, 'iPhone Xs 256GB Gold      ', 'Nokia-3.1-Black.png', 10000000, '12 Tháng', 'Hộp, sách, sạc, cáp, tai nghe', 'Máy Mới 100%', 'Dán Màn Hình 4D', 1, 0, 'Sản phẩm này chúng tôi đang cập nhật nội dung chi tiết, các bạn có thể qua trực tiếp cửa hàng để xem sản phẩm, vì hàng chúng tôi luôn có sẵn.'),
(6, 0, '', '', 0, '', '', '', '', 0, 0, ''),
(7, 1, 'Samsung Galaxy J2 Core Gold  1234567890  1234      ', 'Samsung-Galaxy-S9-Plus-64GB-Orchid-Gray.png', 10000000, '12 Tháng', 'Hộp, sách, sạc, cáp, tai nghe', 'Máy Mới 100%', 'Dán Màn Hình 4D', 1, 1, 'Sản phẩm này chúng tôi đang cập nhật nội dung chi tiết, các bạn có thể qua trực tiếp cửa hàng để xem sản phẩm, vì hàng chúng tôi luôn có sẵn.'),
(8, 2, 'Samsung Galaxy J4 Core Black 12 ', 'OPPO-F7-128GB-Black.png', 10000000, '12 Tháng', 'Hộp, sách, sạc, cáp, tai nghe', 'Máy Mới 100%', 'Dán Màn Hình 4D', 1, 0, 'Sản phẩm này chúng tôi đang cập nhật nội dung chi tiết, các bạn có thể qua trực tiếp cửa hàng để xem sản phẩm, vì hàng chúng tôi luôn có sẵn.'),
(9, 2, 'Samsung Galaxy S9 Plus 64GB Orchid Gray 124123123   ', 'Samsung-Galaxy-J2-Core-Gold.png', 10000000, '12 Tháng', 'Hộp, sách, sạc, cáp, tai nghe', 'Máy Mới 100%', 'Dán Màn Hình 4D', 1, 0, 'Sản phẩm này chúng tôi đang cập nhật nội dung chi tiết, các bạn có thể qua trực tiếp cửa hàng để xem sản phẩm, vì hàng chúng tôi luôn có sẵn.'),
(10, 2, 'Samsung Galaxy S9 Plus Black 128GB 1212  ', 'Vivo-V9-Gold.png', 10000000, '12 Tháng', 'Hộp, sách, sạc, cáp, tai nghe', 'Máy Mới 100%', 'Dán Màn Hình 4D', 1, 0, 'Sản phẩm này chúng tôi đang cập nhật nội dung chi tiết, các bạn có thể qua trực tiếp cửa hàng để xem sản phẩm, vì hàng chúng tôi luôn có sẵn.'),
(11, 4, 'Nokia 1 red', 'Nokia-1-red.png', 10000000, '12 Tháng', 'Hộp, sách, sạc, cáp, tai nghe', 'Máy Mới 100%', 'Dán Màn Hình 4D', 1, 1, 'Sản phẩm này chúng tôi đang cập nhật nội dung chi tiết, các bạn có thể qua trực tiếp cửa hàng để xem sản phẩm, vì hàng chúng tôi luôn có sẵn.'),
(12, 4, 'Nokia 3.1 Black', 'Nokia-3.1-Black.png', 10000000, '12 Tháng', 'Hộp, sách, sạc, cáp, tai nghe', 'Máy Mới 100%', 'Dán Màn Hình 4D', 1, 0, 'Sản phẩm này chúng tôi đang cập nhật nội dung chi tiết, các bạn có thể qua trực tiếp cửa hàng để xem sản phẩm, vì hàng chúng tôi luôn có sẵn.'),
(13, 4, 'Nokia 6.1 Plus Blue', 'Nokia-6.1-Plus-Blue.png', 10000000, '12 Tháng', 'Hộp, sách, sạc, cáp, tai nghe', 'Máy Mới 100%', 'Dán Màn Hình 4D', 1, 0, 'Sản phẩm này chúng tôi đang cập nhật nội dung chi tiết, các bạn có thể qua trực tiếp cửa hàng để xem sản phẩm, vì hàng chúng tôi luôn có sẵn.'),
(14, 0, 'Nokia 6.1 Plus White           ', 'Nokia-6.1-Plus-White.png', 10000000, '12 Tháng', 'Hộp, sách, sạc, cáp, tai nghe', 'Máy Mới 100%', 'Dán Màn Hình 4D', 1, 0, 'Sản phẩm này chúng tôi đang cập nhật nội dung chi tiết, các bạn có thể qua trực tiếp cửa hàng để xem sản phẩm, vì hàng chúng tôi luôn có sẵn.'),
(15, 4, 'Nokia 150 White', 'Nokia-150-White.png', 10000000, '12 Tháng', 'Hộp, sách, sạc, cáp, tai nghe', 'Máy Mới 100%', 'Dán Màn Hình 4D', 0, 0, 'Sản phẩm này chúng tôi đang cập nhật nội dung chi tiết, các bạn có thể qua trực tiếp cửa hàng để xem sản phẩm, vì hàng chúng tôi luôn có sẵn.'),
(16, 7, 'OPPO A3s 16GB Red', 'OPPO-A3s–16GB-Red.png', 10000000, '12 Tháng', 'Hộp, sách, sạc, cáp, tai nghe', 'Máy Mới 100%', 'Dán Màn Hình 4D', 1, 1, 'Sản phẩm này chúng tôi đang cập nhật nội dung chi tiết, các bạn có thể qua trực tiếp cửa hàng để xem sản phẩm, vì hàng chúng tôi luôn có sẵn.'),
(17, 7, 'OPPO A7 64GB Blue', 'OPPO-A7-64GB-Blue.png', 10000000, '12 Tháng', 'Hộp, sách, sạc, cáp, tai nghe', 'Máy Mới 100%', 'Dán Màn Hình 4D', 1, 0, 'Sản phẩm này chúng tôi đang cập nhật nội dung chi tiết, các bạn có thể qua trực tiếp cửa hàng để xem sản phẩm, vì hàng chúng tôi luôn có sẵn.'),
(18, 7, 'OPPO F7 128GB Black', 'OPPO-F7-128GB-Black.png', 10000000, '12 Tháng', 'Hộp, sách, sạc, cáp, tai nghe', 'Máy Mới 100%', 'Dán Màn Hình 4D', 1, 0, 'Sản phẩm này chúng tôi đang cập nhật nội dung chi tiết, các bạn có thể qua trực tiếp cửa hàng để xem sản phẩm, vì hàng chúng tôi luôn có sẵn.'),
(19, 7, 'OPPO F9 Sunrise Red', 'OPPO-F9-Sunrise-Red.png', 10000000, '12 Tháng', 'Hộp, sách, sạc, cáp, tai nghe', 'Máy Mới 100%', 'Dán Màn Hình 4D', 1, 0, 'Sản phẩm này chúng tôi đang cập nhật nội dung chi tiết, các bạn có thể qua trực tiếp cửa hàng để xem sản phẩm, vì hàng chúng tôi luôn có sẵn.'),
(20, 7, 'OPPO R17 Pro Lavender', 'OPPO-R17-Pro-Lavender.png', 10000000, '12 Tháng', 'Hộp, sách, sạc, cáp, tai nghe', 'Máy Mới 100%', 'Dán Màn Hình 4D', 0, 0, 'Sản phẩm này chúng tôi đang cập nhật nội dung chi tiết, các bạn có thể qua trực tiếp cửa hàng để xem sản phẩm, vì hàng chúng tôi luôn có sẵn.'),
(21, 8, 'Xiaomi Mi 8 Pro Black', 'Xiaomi-Mi-8-Pro-Black.png', 10000000, '12 Tháng', 'Hộp, sách, sạc, cáp, tai nghe', 'Máy Mới 100%', 'Dán Màn Hình 4D', 1, 1, 'Sản phẩm này chúng tôi đang cập nhật nội dung chi tiết, các bạn có thể qua trực tiếp cửa hàng để xem sản phẩm, vì hàng chúng tôi luôn có sẵn.'),
(22, 8, 'Xiaomi Mi A1 Black', 'Xiaomi-Mi-A1-Black.png', 10000000, '12 Tháng', 'Hộp, sách, sạc, cáp, tai nghe', 'Máy Mới 100%', 'Dán Màn Hình 4D', 1, 0, 'Sản phẩm này chúng tôi đang cập nhật nội dung chi tiết, các bạn có thể qua trực tiếp cửa hàng để xem sản phẩm, vì hàng chúng tôi luôn có sẵn.'),
(23, 8, 'Xiaomi Mi A1 Gold', 'Xiaomi-Mi-A1-Gold.png', 10000000, '12 Tháng', 'Hộp, sách, sạc, cáp, tai nghe', 'Máy Mới 100%', 'Dán Màn Hình 4D', 1, 0, 'Sản phẩm này chúng tôi đang cập nhật nội dung chi tiết, các bạn có thể qua trực tiếp cửa hàng để xem sản phẩm, vì hàng chúng tôi luôn có sẵn.'),
(26, 1, 'Vivo V7 WHITE', 'Vivo-V7-Gold.png', 10000000, '12 Tháng', 'Hộp, sách, sạc, cáp, tai nghe', 'Máy Mới 100%', 'Dán Màn Hình 4D', 1, 1, 'Sản phẩm này chúng tôi đang cập nhật nội dung chi tiết, các bạn có thể qua trực tiếp cửa hàng để xem sản phẩm, vì hàng chúng tôi luôn có sẵn.'),
(27, 9, 'Vivo V9 Gold', 'Vivo-V9-Gold.png', 10000000, '12 Tháng', 'Hộp, sách, sạc, cáp, tai nghe', 'Máy Mới 100%', 'Dán Màn Hình 4D', 1, 0, 'Sản phẩm này chúng tôi đang cập nhật nội dung chi tiết, các bạn có thể qua trực tiếp cửa hàng để xem sản phẩm, vì hàng chúng tôi luôn có sẵn.'),
(28, 9, 'Vivo Y53C Gold', 'Vivo-Y53C-Gold.png', 10000000, '12 Tháng', 'Hộp, sách, sạc, cáp, tai nghe', 'Máy Mới 100%', 'Dán Màn Hình 4D', 1, 0, 'Sản phẩm này chúng tôi đang cập nhật nội dung chi tiết, các bạn có thể qua trực tiếp cửa hàng để xem sản phẩm, vì hàng chúng tôi luôn có sẵn.'),
(29, 9, 'Vivo Y69 Gold', 'Vivo-Y69-Gold.png', 10000000, '12 Tháng', 'Hộp, sách, sạc, cáp, tai nghe', 'Máy Mới 100%', 'Dán Màn Hình 4D', 1, 0, 'Sản phẩm này chúng tôi đang cập nhật nội dung chi tiết, các bạn có thể qua trực tiếp cửa hàng để xem sản phẩm, vì hàng chúng tôi luôn có sẵn.'),
(31, 1, 'Iphone xs max', '', 2, 'asdd', 'asdasd', 'asddad', 'dasdasd', 1, 0, 'sÁ'),
(32, 1, 'Iphone xs max ', 'Nokia-3.1-Black.png', 2, 'asdd', 'asdasd', 'asddad', 'dasdasd', 1, 0, 'sÁ'),
(33, 0, 'Iphone xs max ', 'Nokia-3.1-Black.png', 2, 'asdd', 'asdasd', 'asddad', 'dasdasd', 1, 0, 'sÁ'),
(35, 1, 'Iphone xs max', '', 2, 'asdd', 'asdasd', 'asddad', 'dasdasd', 1, 0, 'edqd'),
(36, 1, 'Iphone xs max ', 'OPPO-F7-128GB-Black.png', 2, 'asdd', 'asdasd', 'asddad', 'dasdasd', 1, 0, 'edqd'),
(37, 1, 'Iphone xs max ', 'Xiaomi-Redmi-Note-6-Pro-32GB-Blue.png', 2, 'asdd', 'asdasd', 'asddad', 'dasdasd', 1, 0, 'edqd'),
(40, 1, 'IPhone XS MAX  ', 'Nokia-3.1-Black.png', 23123123, '12Tháng', 'Cáp , sạc , tai nghe', 'Máy mới', 'Dán cường lực', 1, 1, 'Máy được thiết kế rất ngon'),
(41, 3, 'IPhone XS MAX', 'Nokia-3.1-Black.png', 4, '12Tháng', 'Cáp , sạc , tai nghe', 'Máy mới', 'Dán cường lực', 1, 1, 'NGOn'),
(42, 3, 'Iphone xs max', 'Nokia-1-red.png', 7, '12Tháng', 'Cáp , sạc , tai nghe', 'Máy mới', 'Dán cường lực', 0, 1, 'qweqe'),
(43, 3, 'Iphone xs max', 'Nokia-1-red.png', 7, '12Tháng', 'Cáp , sạc , tai nghe', 'Máy mới', 'Dán cường lực', 0, 1, 'qweqe'),
(44, 1, 'Tên sản phẩm', 'iPhone-7-Plus-32GB-Rose-Gold.png', 6, 'Tên sản phẩm', 'Tên sản phẩm', 'Tên sản phẩm', 'Tên sản phẩm', 0, 1, 'Tên sản phẩm'),
(45, 4, 'iPhone X 256GB Silver Seedstock update', 'Nokia-3.1-Black.png', 1234567, '12Tháng', 'Cáp , sạc , tai nghe', 'Máy mới', 'Tên sản phẩm', 1, 1, 'Tên sản phẩm'),
(46, 1, 'iPhone X 256GB Silver Seedstock update', 'Nokia-1-red.png', 21112, 'Tên sản phẩm', 'Tên sản phẩm', 'Máy mới', 'Tên sản phẩm', 1, 0, 'awdda'),
(47, 1, 'iPhone X 256GB Silver Seedstock update', 'Nokia-6.1-Plus-Blue.png', 21112, 'Tên sản phẩm', 'Tên sản phẩm', 'Máy mới', 'Tên sản phẩm', 1, 0, '12312312312'),
(48, 1, 'iPhone X 256GB Silver Seedstock update', 'Nokia-1-red.png', 21112, 'Tên sản phẩm', 'Tên sản phẩm', 'Máy mới', 'Tên sản phẩm', 1, 0, 'qqwearsrthy'),
(49, 1, 'iPhone X 256GB Silver Seedstock update', 'Samsung-Galaxy-J2-Core-Gold.png', 2, 'Tên sản phẩm', 'Tên sản phẩm', 'Tên sản phẩm', 'Tên sản phẩm', 1, 0, 'strdthfj.'),
(50, 1, 'iPhone X 256GB Silver Seedstock update', 'Vivo-V9-Gold.png', 12345, 'asdd', 'asdasd', 'qweqwe', 'dasdasd', 1, 0, '321323123'),
(51, 1, 'iPhone X 256GB Silver Seedstock update', 'Vivo-Y69-Gold.png', 1, 'eq', 'qwq', 'eqw', 'eq', 1, 0, '');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE IF NOT EXISTS `user` (
`user_id` int(11) NOT NULL,
  `user_full` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `user_mail` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `user_pass` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `user_level` int(1) NOT NULL,
  `re_pass` varchar(10) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=12 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`user_id`, `user_full`, `user_mail`, `user_pass`, `user_level`, `re_pass`) VALUES
(1, 'Vietpro Academy', 'vietpro.edu.vn@gmail.com', '1234567', 1, ''),
(2, 'Administrator', 'admin@gmail.com', '1234567', 1, 'EFUKO'),
(3, 'Nguyễn Van A', 'nguyenvana@gmail.com', '1234567', 2, ''),
(4, 'Nguyễn Van B', 'nguyenvanb@gmail.com', '1234567', 2, ''),
(5, 'Nguyễn Van C', 'nguyenvanc@gmail.com', '1234567', 2, ''),
(6, 'Nguyễn Van D', 'nguyenvand@gmail.com', '1234567', 2, ''),
(7, '', 'minhd@gmail.com', '1234567', 1, ''),
(8, 'Vu Minh Duc', 'minhd2@gmail.com', '1234567', 1, ''),
(9, 'Vu Minh Dam', 'root', '1234567', 1, ''),
(10, '', '', '1234567', 0, 'KD24B'),
(11, 'abc', 'ducltvweb@gmail.com', '1234567', 1, 'CLX7H');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE IF NOT EXISTS `users` (
`id` int(11) NOT NULL,
  `oauth_provider` enum('','facebook','google','twitter') COLLATE utf8_unicode_ci NOT NULL,
  `oauth_uid` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `first_name` varchar(25) COLLATE utf8_unicode_ci NOT NULL,
  `last_name` varchar(25) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(25) COLLATE utf8_unicode_ci NOT NULL,
  `gender` varchar(10) COLLATE utf8_unicode_ci DEFAULT NULL,
  `picture` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `link` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `created` datetime NOT NULL,
  `modified` datetime NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `oauth_provider`, `oauth_uid`, `first_name`, `last_name`, `email`, `gender`, `picture`, `link`, `created`, `modified`) VALUES
(1, 'facebook', '765972577119350', 'Äá»©c', 'Minh', 'minhd2474@gmail.com', '', 'https://platform-lookaside.fbsbx.com/platform/profilepic/?asid=765972577119350&height=50&width=50&ext=1555767222&hash=AeTd5uB9mo2bW02W', '', '2019-03-09 16:03:49', '2019-03-21 20:33:42'),
(2, 'facebook', '554302608390438', 'Äá»©c', 'VÅ© Minh', '', '', 'https://platform-lookaside.fbsbx.com/platform/profilepic/?asid=554302608390438&height=50&width=50&ext=1555691709&hash=AeTBkVYg0bTwI2LM', '', '2019-03-19 01:42:12', '2019-03-20 23:35:10');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `category`
--
ALTER TABLE `category`
 ADD PRIMARY KEY (`cat_id`), ADD UNIQUE KEY `cat_name` (`cat_name`);

--
-- Indexes for table `comment`
--
ALTER TABLE `comment`
 ADD PRIMARY KEY (`comm_id`);

--
-- Indexes for table `counter`
--
ALTER TABLE `counter`
 ADD KEY `ip_address` (`ip_address`);

--
-- Indexes for table `product`
--
ALTER TABLE `product`
 ADD PRIMARY KEY (`prd_id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
 ADD PRIMARY KEY (`user_id`), ADD UNIQUE KEY `user_mail` (`user_mail`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
 ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `category`
--
ALTER TABLE `category`
MODIFY `cat_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=10;
--
-- AUTO_INCREMENT for table `comment`
--
ALTER TABLE `comment`
MODIFY `comm_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=92;
--
-- AUTO_INCREMENT for table `product`
--
ALTER TABLE `product`
MODIFY `prd_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=52;
--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=12;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=3;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
