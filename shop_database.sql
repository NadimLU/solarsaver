-- phpMyAdmin SQL Dump
-- version 4.7.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Nov 27, 2017 at 05:04 PM
-- Server version: 10.1.25-MariaDB
-- PHP Version: 7.0.23

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `u602077723_shop`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `admin_id` int(11) NOT NULL,
  `username` varchar(100) NOT NULL,
  `password` varchar(200) NOT NULL,
  `role` varchar(20) NOT NULL,
  `admin_avatar` varchar(200) NOT NULL,
  `admin_created_at` timestamp(6) NOT NULL DEFAULT CURRENT_TIMESTAMP(6) ON UPDATE CURRENT_TIMESTAMP(6),
  `power` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 ROW_FORMAT=COMPACT;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`admin_id`, `username`, `password`, `role`, `admin_avatar`, `admin_created_at`, `power`) VALUES
(1, 'nadimcse', 'e10adc3949ba59abbe56e057f20f883e', 'admin', 'uploads/images/avatar/8458914135a1c0da4a3c1d.png', '2017-11-27 13:05:40.671627', 'super'),
(16, 'nadim', '6301cfb4cdfe115c5a9e9cfb8b237fac', 'admin', '', '2017-11-11 10:12:56.295744', ''),
(17, 'virtual.staffing7@gmail.com', '202cb962ac59075b964b07152d234b70', 'admin', '', '2017-11-09 21:28:32.415410', ''),
(18, 'Sylhet', 'cc3d69ed781b16bce06687822ae56e6d', 'admin', '', '2017-11-09 21:28:32.415410', ''),
(19, 'abcd123', 'e10adc3949ba59abbe56e057f20f883e', 'admin', 'uploads/images/avatar/13383608705a04c6d60c3ed.png', '2017-11-11 10:12:52.535135', ''),
(20, 'admin', '21232f297a57a5a743894a0e4a801fc3', 'admin', 'uploads/images/avatar/15808996105a0f583a7e91e.', '2017-11-17 21:44:26.518618', '');

-- --------------------------------------------------------

--
-- Table structure for table `contact_message`
--

CREATE TABLE `contact_message` (
  `message_id` int(10) NOT NULL,
  `sender_name` varchar(100) NOT NULL,
  `sender_email` varchar(100) NOT NULL,
  `sender_subject` varchar(100) NOT NULL,
  `sender_message` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `contact_message`
--

INSERT INTO `contact_message` (`message_id`, `sender_name`, `sender_email`, `sender_subject`, `sender_message`) VALUES
(5, 'Nadim', 'na146363@gmail.com', 'Test', 'It\'s just test'),
(6, 'Nadim', 'na146363@gmail.com', 'Test', 'It\'s just test'),
(7, 'Nadim', 'na146363@gmail.com', 'Test', 'It\'s just test'),
(8, 'Nadim', 'na146363@gmail.com', 'Test', 'It\'s just test'),
(9, 'Nadim', 'na146363@gmail.com', 'Test', 'It\'s just test'),
(10, 'Nadim', 'na146363@gmail.com', 'Test', 'It\'s just test'),
(11, 'Nadim', 'na146363@gmail.com', 'Test', 'It\'s just test'),
(12, 'Nadim Haque', 'virtual.staffing7@gmail.com', 'Test', 'Another test'),
(13, 'Nadim Haque', 'virtual.staffing7@gmail.com', 'Test', 'Another test'),
(14, 'Nadim Haque', 'virtual.staffing7@gmail.com', 'Test', 'script>\r\n      (function(b,o,i,l,e,r){b.GoogleAnalyticsObject=l;b[l]||(b[l]=\r\n      function(){(b[l].q=b[l].q||[]).push(arguments)});b[l].l=+new Date;\r\n      e=o.createElement(i);r=o.getElementsByTagName(i)[0];\r\n      e.src=\'//www.google-analytics.com/analytics.js\';\r\n      r[removed].insertBefore(e,r)}(window,document,\'script\',\'ga\'));\r\n      ga(\'create\',\'UA-XXXXX-X\');ga(\'send\',\'pageview\');\r\n    [removed]'),
(15, 'Nadim Haque', 'virtual.staffing7@gmail.com', 'Test', 'script>\r\n      (function(b,o,i,l,e,r){b.GoogleAnalyticsObject=l;b[l]||(b[l]=\r\n      function(){(b[l].q=b[l].q||[]).push(arguments)});b[l].l=+new Date;\r\n      e=o.createElement(i);r=o.getElementsByTagName(i)[0];\r\n      e.src=\'//www.google-analytics.com/analytics.js\';\r\n      r[removed].insertBefore(e,r)}(window,document,\'script\',\'ga\'));\r\n      ga(\'create\',\'UA-XXXXX-X\');ga(\'send\',\'pageview\');\r\n    [removed]'),
(16, 'Nadim Haque', 'virtual.staffing7@gmail.com', 'Test', 'script>\r\n      (function(b,o,i,l,e,r){b.GoogleAnalyticsObject=l;b[l]||(b[l]=\r\n      function(){(b[l].q=b[l].q||[]).push(arguments)});b[l].l=+new Date;\r\n      e=o.createElement(i);r=o.getElementsByTagName(i)[0];\r\n      e.src=\'//www.google-analytics.com/analytics.js\';\r\n      r[removed].insertBefore(e,r)}(window,document,\'script\',\'ga\'));\r\n      ga(\'create\',\'UA-XXXXX-X\');ga(\'send\',\'pageview\');\r\n    [removed]'),
(17, 'Nadim Haque', 'virtual.staffing7@gmail.com', 'Test', 'script>\r\n      (function(b,o,i,l,e,r){b.GoogleAnalyticsObject=l;b[l]||(b[l]=\r\n      function(){(b[l].q=b[l].q||[]).push(arguments)});b[l].l=+new Date;\r\n      e=o.createElement(i);r=o.getElementsByTagName(i)[0];\r\n      e.src=\'//www.google-analytics.com/analytics.js\';\r\n      r[removed].insertBefore(e,r)}(window,document,\'script\',\'ga\'));\r\n      ga(\'create\',\'UA-XXXXX-X\');ga(\'send\',\'pageview\');\r\n    [removed]'),
(18, 'Nadim Haque', 'virtual.staffing7@gmail.com', 'Test', 'script>\r\n      (function(b,o,i,l,e,r){b.GoogleAnalyticsObject=l;b[l]||(b[l]=\r\n      function(){(b[l].q=b[l].q||[]).push(arguments)});b[l].l=+new Date;\r\n      e=o.createElement(i);r=o.getElementsByTagName(i)[0];\r\n      e.src=\'//www.google-analytics.com/analytics.js\';\r\n      r[removed].insertBefore(e,r)}(window,document,\'script\',\'ga\'));\r\n      ga(\'create\',\'UA-XXXXX-X\');ga(\'send\',\'pageview\');\r\n    [removed]'),
(19, 'Nadim Haque', 'virtual.staffing7@gmail.com', 'asa', 'asass'),
(20, 'Nadim Haque', 'virtual.staffing7@gmail.com', 'Test', 'script>\r\n      (function(b,o,i,l,e,r){b.GoogleAnalyticsObject=l;b[l]||(b[l]=\r\n      function(){(b[l].q=b[l].q||[]).push(arguments)});b[l].l=+new Date;\r\n      e=o.createElement(i);r=o.getElementsByTagName(i)[0];\r\n      e.src=\'//www.google-analytics.com/analytics.js\';\r\n      r[removed].insertBefore(e,r)}(window,document,\'script\',\'ga\'));\r\n      ga(\'create\',\'UA-XXXXX-X\');ga(\'send\',\'pageview\');\r\n    [removed]'),
(21, 'Nadim Haque', 'virtual.staffing7@gmail.com', 'Test', 'script>\r\n      (function(b,o,i,l,e,r){b.GoogleAnalyticsObject=l;b[l]||(b[l]=\r\n      function(){(b[l].q=b[l].q||[]).push(arguments)});b[l].l=+new Date;\r\n      e=o.createElement(i);r=o.getElementsByTagName(i)[0];\r\n      e.src=\'//www.google-analytics.com/analytics.js\';\r\n      r[removed].insertBefore(e,r)}(window,document,\'script\',\'ga\'));\r\n      ga(\'create\',\'UA-XXXXX-X\');ga(\'send\',\'pageview\');\r\n    [removed]'),
(22, 'Nadim Haque', 'virtual.staffing7@gmail.com', 'Test', 'script>\r\n      (function(b,o,i,l,e,r){b.GoogleAnalyticsObject=l;b[l]||(b[l]=\r\n      function(){(b[l].q=b[l].q||[]).push(arguments)});b[l].l=+new Date;\r\n      e=o.createElement(i);r=o.getElementsByTagName(i)[0];\r\n      e.src=\'//www.google-analytics.com/analytics.js\';\r\n      r[removed].insertBefore(e,r)}(window,document,\'script\',\'ga\'));\r\n      ga(\'create\',\'UA-XXXXX-X\');ga(\'send\',\'pageview\');\r\n    [removed]'),
(23, 'Nadim Haque', 'virtual.staffing7@gmail.com', 'Test', 'script>\r\n      (function(b,o,i,l,e,r){b.GoogleAnalyticsObject=l;b[l]||(b[l]=\r\n      function(){(b[l].q=b[l].q||[]).push(arguments)});b[l].l=+new Date;\r\n      e=o.createElement(i);r=o.getElementsByTagName(i)[0];\r\n      e.src=\'//www.google-analytics.com/analytics.js\';\r\n      r[removed].insertBefore(e,r)}(window,document,\'script\',\'ga\'));\r\n      ga(\'create\',\'UA-XXXXX-X\');ga(\'send\',\'pageview\');\r\n    [removed]'),
(24, 'Nadim Haque', 'virtual.staffing7@gmail.com', 'sasaas', 'assaasas'),
(25, 'Nadim Haque', 'virtual.staffing7@gmail.com', 'asda', 'sadasd'),
(26, 'Nadim Haque', 'virtual.staffing7@gmail.com', 'asad', 'asdasd'),
(27, 'ffff', 'dd@gco.com', 's', 'aa'),
(28, 'Nadim Haque', 'virtual.staffing7@gmail.com', 'assa', 'assas'),
(29, 'Nadim Haque', 'virtual.staffing7@gmail.com', 'assa', 'asass'),
(30, 'Nadim Haque', 'virtual.staffing7@gmail.com', 'asas', 'asass'),
(31, 'Nadim Haque', 'na146363@gmail.com', 'sss', 'ssss'),
(32, 'Nadim Haque', 'na146363@gmail.com', 'sss', 'ssss'),
(33, 'Nadim Haque', 'na146363@gmail.com', 'sss', 'ssss'),
(34, 'Nadim Haque', 'virtual.staffing7@gmail.com', 'asda', 'asdas'),
(35, 'asd', 'na146363@gmail.com', 'sdadas', 'asdads'),
(36, 'asd', 'na146363@gmail.com', 'sdadas', 'asdads'),
(37, 'Nadim Haque', 'virtual.staffing7@gmail.com', 'asddas', 'asdsada'),
(38, 'asdada', 'na146363@gmail.com', 'asdada', 'asdasd'),
(39, 'assdadas', 'na146363@gmail.com', 'asdasd', 'asdaasas'),
(40, 'Nadim Haque', 'virtual.staffing7@gmail.com', 'asass', 'asas'),
(41, 'Nadim Haque', 'virtual.staffing7@gmail.com', 'asdasdasasd', 'dasdasdasdasdasd'),
(42, 'Nadim Haque', 'virtual.staffing7@gmail.com', 'asdasdasasd', 'dasdasdasdasdasd'),
(43, 'Nadim Haque', 'virtual.staffing7@gmail.com', 'asdasdasasd', 'dasdasdasdasdasd'),
(44, 'Nadim Haque', 'virtual.staffing7@gmail.com', 'test22', 'test22222'),
(45, 'Nadim Haque', 'virtual.staffing7@gmail.com', 'asdasdasdsadasdas', 'asdasdasdsa'),
(46, 'Nadim Haque', 'virtual.staffing7@gmail.com', 'asdasdasdsadasdas', 'asdasdasdsa'),
(47, 'Nadim Haque', 'virtual.staffing7@gmail.com', 'kkkkkkk', 'kkkkkk'),
(48, 'Nadim Haque', 'virtual.staffing7@gmail.com', 'nnnn', 'nnnnnnn'),
(49, 'Nadim Haque', 'virtual.staffing7@gmail.com', 'nnnn', 'asdasdasd'),
(50, 'Nadim Haque', 'virtual.staffing7@gmail.com', 'asdasdasasd', 'asdasdasd'),
(51, 'Nadim Haque', 'virtual.staffing7@gmail.com', 'asdasdas', 'asdasdasa'),
(52, 'Nadim Haque', 'virtual.staffing7@gmail.com', 'asdasdas', 'asdasdasdsd'),
(53, 'Nadim Haque', 'virtual.staffing7@gmail.com', 'asdasdas', 'asdasdasd'),
(54, 'Nadim Haque', 'virtual.staffing7@gmail.com', 'asdada', 'asdad'),
(55, 'Nadim Haque', 'asa@co.coma', 'sdasd', 'asdasdasd'),
(56, 'Nadim Haque', 'virtual.staffing7@gmail.com', 'asdasdas', 'asdasdas'),
(57, 'Nadim Haque', 'virtual.staffing7@gmail.com', 'asdasdasa', 'sdasdasda'),
(58, 'Nadim Haque', 'virtual.staffing7@gmail.com', 'asdasda', 'asdasdasd'),
(59, 'Nadim Haque', 'virtual.staffing7@gmail.com', 'asdasdas', 'asdasd'),
(60, 'Nadim Haque', 'virtual.staffing7@gmail.com', 'asdasdas', 'adsasdasdada'),
(61, 'shihan', 'virtual.staffing7@gmail.com', 'nothing', 'nothing'),
(62, 'shihan', 'virtual.staffing7@gmail.com', 'asdasdasdas', 'asdasdasdasdasdas'),
(63, 'shihan', 'virtual.staffing7@gmail.com', 'asdasdasdsa', 'asdasdsadasdasd'),
(64, 'Nadim Haque', 'virtual.staffing7@gmail.com', 'asdasd', 'asdadasd'),
(65, 'kamal', 'kamal@kamal.com', 'kamal', 'kamal is a good boy'),
(66, 'rana', 'rana@gmail.com', 'nothing', 'asdasdadadas');

-- --------------------------------------------------------

--
-- Table structure for table `order_details`
--

CREATE TABLE `order_details` (
  `order_id` int(10) UNSIGNED NOT NULL,
  `order_master_id` int(10) UNSIGNED NOT NULL,
  `product_id` int(10) UNSIGNED NOT NULL,
  `product_name` varchar(255) NOT NULL,
  `product_unit_price` decimal(10,2) UNSIGNED NOT NULL,
  `product_quantity` int(10) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `order_details`
--

INSERT INTO `order_details` (`order_id`, `order_master_id`, `product_id`, `product_name`, `product_unit_price`, `product_quantity`) VALUES
(1, 1, 4, 'Tint', '50.00', 5),
(2, 1, 3, 'Remove Tint', '10.00', 10),
(3, 1, 6, 'Window fixed', '50.00', 1),
(4, 2, 5, 'Window remove', '40.00', 6),
(5, 2, 6, 'Window fixed', '50.00', 9),
(6, 3, 5, 'Window remove', '40.00', 6),
(7, 3, 6, 'Window fixed', '50.00', 9),
(8, 4, 5, 'Window remove', '40.00', 6),
(9, 4, 6, 'Window fixed', '50.00', 9),
(10, 5, 5, 'Window remove', '40.00', 6),
(11, 5, 6, 'Window fixed', '50.00', 9),
(12, 6, 5, 'Window remove', '40.00', 6),
(13, 6, 6, 'Window fixed', '50.00', 9),
(14, 7, 5, 'Window remove', '40.00', 6),
(15, 7, 6, 'Window fixed', '50.00', 9),
(16, 8, 5, 'Window remove', '40.00', 7),
(17, 9, 5, 'Window remove', '40.00', 7),
(18, 10, 5, 'Window remove', '40.00', 7),
(19, 10, 6, 'Window fixed', '50.00', 1),
(20, 11, 5, 'Window remove', '40.00', 7),
(21, 11, 6, 'Window fixed', '50.00', 1),
(22, 12, 65, 'Butter Bread', '30.00', 4),
(23, 12, 6, 'Window fixed', '50.00', 6),
(24, 13, 65, 'Butter Bread', '30.00', 4),
(25, 13, 6, 'Window fixed', '50.00', 6),
(26, 14, 65, 'Butter Bread', '30.00', 4),
(27, 14, 6, 'Window fixed', '50.00', 6),
(28, 15, 65, 'Butter Bread', '30.00', 4),
(29, 15, 6, 'Window fixed', '50.00', 6),
(30, 16, 5, 'Window remove', '40.00', 10),
(31, 16, 6, 'Window fixed', '50.00', 8),
(32, 17, 6, 'Window fixed', '50.00', 4),
(33, 18, 3, 'Remove Tint', '10.00', 7),
(34, 19, 3, 'Remove Tint', '10.00', 7),
(35, 20, 3, 'Remove Tint', '10.00', 7),
(36, 21, 3, 'Remove Tint', '10.00', 7),
(37, 22, 3, 'Remove Tint', '10.00', 7),
(38, 23, 3, 'Remove Tint', '10.00', 7),
(39, 24, 3, 'Remove Tint', '10.00', 2),
(40, 24, 6, 'Window fixed', '50.00', 1),
(41, 24, 5, 'Window remove', '40.00', 1),
(42, 25, 3, 'Remove Tint', '10.00', 2),
(43, 25, 6, 'Window fixed', '50.00', 1),
(44, 25, 5, 'Window remove', '40.00', 1),
(45, 26, 5, 'Window remove', '40.00', 8),
(46, 27, 6, 'Window fixed', '50.00', 7),
(47, 28, 6, 'Window fixed', '50.00', 7),
(48, 29, 5, 'Window remove', '40.00', 6),
(49, 30, 5, 'Window remove', '40.00', 6),
(50, 31, 5, 'Window remove', '40.00', 6),
(51, 32, 5, 'Window remove', '40.00', 10),
(52, 33, 6, 'Window fixed', '50.00', 3),
(53, 34, 6, 'Window fixed', '50.00', 6),
(54, 35, 3, 'Remove Tint', '10.00', 10),
(55, 36, 6, 'Window fixed', '50.00', 3),
(56, 37, 5, 'Window remove', '40.00', 2),
(57, 37, 3, 'Remove Tint', '10.00', 4),
(58, 38, 5, 'Window remove', '40.00', 4),
(59, 39, 5, 'Window remove', '40.00', 2),
(60, 39, 6, 'Window fixed', '50.00', 3),
(61, 40, 5, 'Window remove', '40.00', 4),
(62, 40, 6, 'Window fixed', '50.00', 6),
(63, 41, 6, 'Window fixed', '50.00', 3),
(64, 42, 5, 'Window remove', '40.00', 4),
(65, 43, 5, 'Window remove', '40.00', 3),
(66, 43, 6, 'Window fixed', '50.00', 3),
(67, 44, 3, 'Remove Tint', '10.00', 2),
(68, 45, 3, 'Remove Tint', '10.00', 6),
(69, 46, 5, 'Window remove', '40.00', 4),
(70, 46, 6, 'Window fixed', '50.00', 4),
(71, 47, 5, 'Window remove', '40.00', 5),
(72, 48, 6, 'Window fixed', '50.00', 0),
(73, 48, 5, 'Window remove', '40.00', 4),
(74, 49, 5, 'Window remove', '40.00', 4),
(75, 50, 3, 'Remove Tint', '10.00', 0),
(76, 50, 6, 'Window fixed', '50.00', 3),
(77, 51, 3, 'Remove Tint', '10.00', 4),
(78, 51, 4, 'Tint', '50.00', 1),
(79, 51, 5, 'Window remove', '40.00', 4),
(80, 51, 6, 'Window fixed', '50.00', 2),
(81, 52, 3, 'Remove Tint', '10.00', 2),
(82, 52, 7, 'Test', '80.00', 6),
(83, 52, 8, 'Add headlight', '100.00', 9),
(84, 53, 3, 'Remove Tint', '10.00', 4),
(85, 54, 7, 'Test', '80.00', 3),
(86, 55, 7, 'Test', '80.00', 2),
(87, 56, 3, 'Remove Tint', '10.00', 10),
(88, 57, 7, 'Test', '80.00', 6),
(89, 57, 8, 'Add headlight', '100.00', 3),
(90, 58, 7, 'Test', '80.00', 2),
(91, 59, 7, 'Test', '80.00', 10),
(92, 60, 8, 'Add headlight', '100.00', 4),
(93, 61, 6, 'Window fixed', '50.00', 9),
(94, 61, 4, 'Tint', '50.00', 5),
(95, 61, 7, 'Test', '80.00', 2),
(96, 62, 7, 'Test', '80.00', 3),
(97, 63, 6, 'Window fixed', '50.00', 9),
(98, 63, 4, 'Tint', '50.00', 5),
(99, 63, 7, 'Test', '80.00', 2),
(100, 63, 8, 'Add headlight', '100.00', 2),
(101, 64, 8, 'Add headlight', '100.00', 3),
(102, 65, 8, 'Add headlight', '100.00', 4),
(103, 66, 7, 'Test', '80.00', 2),
(104, 67, 8, 'Add headlight', '100.00', 3),
(105, 68, 7, 'Test', '80.00', 4),
(106, 69, 7, 'Test', '80.00', 6),
(107, 70, 7, 'Test', '80.00', 6),
(108, 71, 7, 'Test', '80.00', 6),
(109, 72, 7, 'Test', '80.00', 6),
(110, 73, 7, 'Test', '80.00', 6),
(111, 74, 7, 'Test', '80.00', 4),
(112, 74, 8, 'Add headlight', '100.00', 6),
(113, 75, 7, 'Test', '80.00', 5),
(114, 76, 7, 'Test', '80.00', 3),
(115, 77, 7, 'Test', '80.00', 3),
(116, 78, 7, 'Test', '80.00', 7),
(117, 79, 7, 'Test', '80.00', 5),
(118, 80, 7, 'Test', '80.00', 6),
(119, 81, 3, 'Remove Tint', '10.00', 7),
(120, 82, 7, 'Test', '80.00', 6);

-- --------------------------------------------------------

--
-- Table structure for table `order_master`
--

CREATE TABLE `order_master` (
  `order_master_id` int(10) UNSIGNED NOT NULL,
  `reference_no` varchar(100) NOT NULL,
  `vehicle_id` int(11) NOT NULL,
  `order_date_time` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `profile_id` int(10) UNSIGNED NOT NULL,
  `reservation_id` int(11) NOT NULL,
  `grand_total` decimal(10,2) UNSIGNED NOT NULL,
  `square_transaction_id` varchar(255) NOT NULL,
  `status` tinyint(1) NOT NULL COMMENT '1=Pending,2=Cancelled,3=Confirmed'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `order_master`
--

INSERT INTO `order_master` (`order_master_id`, `reference_no`, `vehicle_id`, `order_date_time`, `profile_id`, `reservation_id`, `grand_total`, `square_transaction_id`, `status`) VALUES
(1, '53874557934013', 0, '2017-11-14 19:13:57', 1, 1, '400.00', '', 3),
(2, '99229296718942', 2, '2017-11-14 19:23:51', 2, 2, '690.00', '', 3),
(3, '91074908047073', 2, '2017-11-14 19:52:48', 3, 3, '690.00', '', 3),
(4, '07166170214033', 2, '2017-11-14 19:54:19', 4, 4, '690.00', '', 3),
(5, '33957094918605', 2, '2017-11-14 19:56:40', 5, 5, '690.00', '', 3),
(6, '31285901913877', 0, '2017-11-14 19:59:50', 6, 6, '690.00', '', 3),
(7, '09890862875400', 2, '2017-11-14 20:09:46', 7, 7, '690.00', '', 3),
(8, '52619613649285', 0, '2017-11-14 20:49:17', 8, 8, '280.00', '', 3),
(9, '38899400904681', 2, '2017-11-14 20:54:43', 11, 11, '280.00', '8c5f0554-6ac4-524c-446d-71bef0e9d662', 3),
(10, '84845575035090', 0, '2017-11-14 21:57:09', 12, 12, '330.00', '42f3cc11-9cf1-50ad-4ee3-621a6ed62a12', 3),
(11, '01510156441616', 0, '2017-11-14 21:58:51', 13, 13, '330.00', '20cc15e8-a34b-5df1-66a0-0ce6250cfa51', 3),
(12, '76353112398980', 0, '2017-11-16 16:17:56', 14, 14, '420.00', '123456Test', 3),
(13, '24775391113844', 0, '2017-11-16 16:19:27', 15, 15, '420.00', '123456Test', 3),
(14, '28427023466519', 0, '2017-11-16 16:20:33', 16, 16, '420.00', '123456Test', 3),
(15, '02399095003051', 0, '2017-11-16 16:21:47', 17, 17, '420.00', '123456Test', 3),
(16, '99567767377587', 2, '2017-11-16 17:42:05', 18, 18, '800.00', '123456Test', 3),
(17, '01931343218466', 2, '2017-11-16 17:53:42', 19, 19, '200.00', '123456Test', 3),
(18, '52839319685197', 0, '2017-11-16 18:16:07', 20, 20, '70.00', '123456Test', 3),
(19, '97949254718291', 0, '2017-11-16 18:28:31', 21, 21, '70.00', '123456Test', 3),
(20, '95795236743080', 0, '2017-11-16 18:29:28', 22, 22, '70.00', '123456Test', 3),
(21, '41582713409427', 0, '2017-11-16 18:42:15', 23, 23, '70.00', '123456Test', 3),
(22, '00998770465356', 0, '2017-11-16 18:43:40', 24, 24, '70.00', '123456Test', 3),
(23, '03376477106574', 0, '2017-11-16 19:23:12', 25, 25, '70.00', '123456Test', 3),
(24, '23062888026592', 2, '2017-11-16 19:25:33', 26, 26, '110.00', '123456Test', 3),
(25, '38784723887153', 2, '2017-11-16 19:26:37', 27, 27, '110.00', '123456Test', 3),
(26, '80702223328139', 2, '2017-11-16 19:54:19', 28, 28, '320.00', '', 3),
(27, '', 2, '2017-11-16 20:22:58', 29, 29, '350.00', '', 3),
(28, 'ch_1BOtuJEhmcMcCUn5wWe7W1y1', 2, '2017-11-16 20:24:19', 30, 30, '350.00', 'ch_1BOtuJEhmcMcCUn5wWe7W1y1', 3),
(29, '05591608313315', 0, '2017-11-17 19:02:58', 31, 31, '240.00', 'ch_1BPF77EhmcMcCUn5tXUPHBPC', 3),
(30, '62860420054230', 0, '2017-11-17 19:05:01', 32, 32, '240.00', '', 3),
(31, '94918195471715', 0, '2017-11-17 19:05:39', 33, 33, '240.00', '', 3),
(32, '45959965944740', 0, '2017-11-17 19:08:43', 34, 34, '400.00', '', 3),
(33, '07391053310763', 0, '2017-11-17 19:46:57', 35, 35, '150.00', '', 3),
(34, '27119918909993', 0, '2017-11-17 19:49:31', 36, 36, '300.00', '', 3),
(35, '89051012891755', 0, '2017-11-17 19:59:07', 37, 37, '100.00', '', 3),
(36, '34254074093544', 0, '2017-11-17 20:10:12', 38, 38, '150.00', '', 3),
(37, '98387151998026', 2, '2017-11-17 20:39:06', 39, 39, '120.00', '', 3),
(38, '15346664241433', 0, '2017-11-17 20:39:25', 40, 40, '160.00', '', 3),
(39, '17558764919002', 0, '2017-11-17 20:44:08', 41, 41, '230.00', '', 3),
(40, '83935470088181', 0, '2017-11-17 21:34:00', 42, 42, '460.00', '', 3),
(41, '02427844476723', 2, '2017-11-17 21:34:21', 43, 43, '150.00', '', 3),
(42, '39938396725855', 1, '2017-11-18 20:14:08', 44, 44, '160.00', 'ch_1BPchYEhmcMcCUn59WBwC1D7', 3),
(43, '87248311337223', 2, '2017-11-18 20:19:34', 45, 45, '270.00', 'ch_1BPcmoEhmcMcCUn51FK9w6ou', 3),
(44, '44891656223413', 1, '2017-11-18 20:23:40', 46, 46, '20.00', 'ch_1BPcqlEhmcMcCUn53O7mrY0E', 3),
(45, '19952862322481', 1, '2017-11-18 20:28:48', 47, 47, '60.00', 'ch_1BPcvkEhmcMcCUn5MN56V5hQ', 3),
(46, '41728105388692', 2, '2017-11-18 20:33:58', 48, 48, '360.00', 'ch_1BPd0jEhmcMcCUn5mXHNNPZm', 3),
(47, '37454603834757', 2, '2017-11-18 20:36:45', 49, 49, '200.00', 'ch_1BPd3QEhmcMcCUn5uVkLpCbW', 3),
(48, '45161971104561', 2, '2017-11-18 20:48:38', 50, 50, '160.00', 'ch_1BPdEwEhmcMcCUn507Wfdubu', 3),
(49, '73626954107665', 2, '2017-11-18 20:50:47', 51, 51, '160.00', 'ch_1BPdH1EhmcMcCUn5ttfEeJwT', 3),
(50, '20680995816355', 2, '2017-11-18 20:58:49', 52, 52, '150.00', 'ch_1BPdOnEhmcMcCUn5afutXrRl', 3),
(51, '39255181914671', 2, '2017-11-18 21:06:19', 53, 53, '350.00', 'ch_1BPdW2EhmcMcCUn5YnBAFb8i', 3),
(52, '47187999268125', 3, '2017-11-18 21:50:37', 54, 54, '1400.00', 'ch_1BPeCvEhmcMcCUn51jiyloAk', 3),
(53, '65153653634520', 0, '2017-11-22 14:50:36', 55, 55, '40.00', 'ch_1BQzYdEhmcMcCUn5BbYjHozk', 3),
(54, '36476097403795', 3, '2017-11-22 17:18:10', 56, 56, '240.00', 'ch_1BR1rREhmcMcCUn5wcFrGqNl', 3),
(55, '24385216888386', 3, '2017-11-22 17:35:48', 57, 57, '160.00', 'ch_1BR28VEhmcMcCUn5752UX51h', 3),
(56, '64851348114303', 1, '2017-11-22 17:44:16', 58, 58, '100.00', 'ch_1BR2GiEhmcMcCUn5o2CYBCks', 3),
(57, '14551919859363', 3, '2017-11-22 19:23:02', 59, 59, '780.00', 'ch_1BR3oHEhmcMcCUn5KXjCbOOs', 3),
(58, '00502757182279', 3, '2017-11-22 19:54:33', 60, 60, '160.00', 'ch_1BR4ImEhmcMcCUn5EiJoQt6Z', 3),
(59, '56213432161338', 3, '2017-11-22 21:38:05', 61, 61, '800.00', 'ch_1BR5uzEhmcMcCUn5eeHTQV96', 3),
(60, '15788161658373', 3, '2017-11-22 22:54:15', 62, 62, '400.00', 'ch_1BR76hEhmcMcCUn5h80p7EBj', 3),
(61, '79858793272643', 0, '2017-11-22 23:02:23', 63, 63, '860.00', 'ch_1BR7EZBnbJ6FrlhRBRsH11qE', 3),
(62, '74025172368756', 3, '2017-11-22 23:06:09', 64, 64, '240.00', 'ch_1BR7ICBnbJ6FrlhRPRsLV3ha', 3),
(63, '32880255071889', 3, '2017-11-22 23:10:55', 65, 65, '1060.00', 'ch_1BR7MoBnbJ6FrlhRbVxio09P', 3),
(64, '06710260169307', 3, '2017-11-22 23:30:18', 66, 66, '300.00', 'ch_1BR7fYBnbJ6FrlhRDdP5sUaI', 3),
(65, '57059702315918', 3, '2017-11-22 23:37:56', 67, 67, '400.00', 'ch_1BR7mxLrw0jxlA5BWy4RKnMP', 3),
(66, '59302626853698', 3, '2017-11-22 23:38:22', 68, 68, '160.00', 'ch_1BR7nNLrw0jxlA5BpbjkInZ9', 3),
(67, '72169480312095', 0, '2017-11-22 23:55:30', 69, 69, '300.00', 'ch_1BR83wLrw0jxlA5B43BWgqUs', 3),
(68, '75738816804070', 3, '2017-11-22 23:59:31', 70, 70, '320.00', 'ch_1BR87rLrw0jxlA5BvtBWlqQc', 3),
(69, '69050035523581', 3, '2017-11-23 00:07:03', 71, 71, '480.00', 'ch_1BR8F8Lrw0jxlA5B61lMa5Lq', 3),
(70, '58430594790913', 3, '2017-11-23 00:09:04', 72, 72, '480.00', 'ch_1BR8H6Lrw0jxlA5BEwtwnMy9', 3),
(71, '26695033617860', 3, '2017-11-23 00:09:58', 73, 73, '480.00', 'ch_1BR8HyLrw0jxlA5BPla5rjV8', 3),
(72, '55059517102868', 3, '2017-11-23 00:10:57', 74, 74, '480.00', 'ch_1BR8IuLrw0jxlA5B3h1awDTs', 3),
(73, '42400810637110', 3, '2017-11-23 00:11:48', 75, 75, '480.00', 'ch_1BR8JjLrw0jxlA5Bv2Cld6ZT', 3),
(74, '85433873812164', 3, '2017-11-23 08:01:38', 76, 76, '920.00', 'ch_1BRFePLrw0jxlA5BkjVcAYsk', 3),
(75, '51169180957050', 3, '2017-11-23 12:23:11', 77, 77, '400.00', 'ch_1BRJjWLrw0jxlA5BJRwBN81u', 3),
(76, '75933378480367', 3, '2017-11-25 09:46:15', 79, 78, '240.00', 'ch_1BS0ElLrw0jxlA5B5Hy1i4aU', 3),
(77, '52710027484402', 3, '2017-11-25 09:50:03', 80, 79, '240.00', 'ch_1BS0IRLrw0jxlA5BFzRbM2o7', 3),
(78, '79569027851633', 3, '2017-11-25 09:59:41', 81, 80, '560.00', 'ch_1BS0RkLrw0jxlA5B1yRXqmrM', 3),
(79, '16747750217221', 3, '2017-11-25 17:13:59', 82, 81, '400.00', 'ch_1BS7E2Lrw0jxlA5BpKdObezv', 3),
(80, '34805474481645', 3, '2017-11-26 19:14:39', 83, 82, '480.00', 'ch_1BSVaNLrw0jxlA5B4YcvzeH5', 3),
(81, '10240688945081', 1, '2017-11-27 15:40:08', 84, 83, '70.00', 'ch_1BSoiJLrw0jxlA5BHr4Ly581', 2),
(82, '36632952046088', 3, '2017-11-27 15:41:07', 85, 84, '480.00', 'ch_1BSojGLrw0jxlA5B3OVG4SAA', 2);

-- --------------------------------------------------------

--
-- Table structure for table `profile`
--

CREATE TABLE `profile` (
  `profile_id` int(11) NOT NULL,
  `first_name` varchar(100) NOT NULL,
  `last_name` varchar(100) NOT NULL,
  `company` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `phone` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `profile`
--

INSERT INTO `profile` (`profile_id`, `first_name`, `last_name`, `company`, `email`, `phone`) VALUES
(1, '', '', '', '', ''),
(2, 'nadim', 'hauqe', 'teamfly', 'na146363@gmail.com', ''),
(3, 'k', 'k', 'k', 'na146363@gmail.com', ''),
(4, 'k', 'k', 'k', 'na146363@gmail.com', ''),
(5, 'l', 'l', 'l', 'na146363@gmail.com', ''),
(6, 'k', 'k', 'k', 'na146363@gmail.com', ''),
(7, 'l', 'l', 'll', 'na146363@gmail.com', ''),
(8, 'n', 'n', 'n', 'n', ''),
(9, 'o', 'o', 'o', 'o', ''),
(10, 'k', 'k', 'k', 'kk', ''),
(11, 'k', 'k', 'kk', 'k', ''),
(12, 'J', 'JJ', 'J', 'J', ''),
(13, 'l', 'll', 'l', 'll', ''),
(14, 'ashdbjk', 'kuhab', 'kbckabsk', 'abc@abc.com', '7870992'),
(15, 'nadim', 'hauqe', 'teamfly', 'na146363@gmail.com', '0'),
(16, 'nadim', 'hauqe', 'teamfly', 'na146363@gmail.com', '0'),
(17, 'nadim', 'hauqe', 'teamfly', 'na146363@gmail.com', '0'),
(18, 'nadim', 'hauqe', 'teamfly', 'na146363@gmail.com', '0'),
(19, 'nadim', 'ass', 'sadas', 'na146363@gmail.com', '0'),
(20, 'nn', 'n', 'n', 'n2@asda.ocm', '+8801731001333'),
(21, 'nn', 'n', 'n', 'n2@asda.ocm', '+8801731001333'),
(22, 'nn', 'n', 'n', 'n2@asda.ocm', '+8801731001333'),
(23, 'nn', 'n', 'n', 'n2@asda.ocm', '+8801731001333'),
(24, 'nn', 'n', 'n', 'n2@asda.ocm', '+8801731001333'),
(25, 'nn', 'n', 'n', 'n2@asda.ocm', '+8801731001333'),
(26, 'p', 'p', 'p', 'na146363@gmail.com', '00000000000'),
(27, 'p', 'p', 'p', 'na146363@gmail.com', '00000000000'),
(28, 'Ashik', 'Khan', 'none', 'ashik@gmailc.om', '8801312313213'),
(29, 'lk', 'lk', 'kl', 'kl@gmailc.om', '123414141124325235'),
(30, 'lk', 'lk', 'kl', 'kl@gmailc.om', '123414141124325235'),
(31, 'baal', 'baal', 'baal', 'na146363@gmail.com', '9999999999'),
(32, 'baal', 'baal', 'baal', 'na146363@gmail.com', '9999999999'),
(33, 'baal', 'baal', 'baal', 'na146363@gmail.com', '9999999999'),
(34, 'oooo', 'oooo', 'oooo', 'n2@asda.ocm', '0000000000'),
(35, 'p', 'p', 'p', 'na146363@gmail.com', '00000000000'),
(36, 'j', 'j', 'j', 'na146363@gmail.com', '00000000000'),
(37, 'daasda', 'adsas', 'asdas', 'da@co.com', '1231233112'),
(38, 'asdas', 'asdasas', 'asdasdas', 'na146363@gmail.com', '31312142124214'),
(39, 'Ashiq', 'Rahman', 'SoccerCric', 'md.ashik.ar@gmail.com', '0000000000000'),
(40, 'Mahmudul Haque ', 'Nadim', 'teamfly', 'na146363@gmail.com', '12331212313123'),
(41, 'asdas', 'dadasds', 'asdas', 'na146363@gmail.com', '31323112312312'),
(42, '12331', 'eqwe', 'ewqewq', 'na146363@gmail.com', '1231324113231213'),
(43, 'Md.', 'Doe', 'Serve', 'md.ashik.ar@gmail.com', '17501750358866'),
(44, 'dasdasknjaknj', 'njkjdnksfjknjkfsd', 'jnkjksanjnkf', 'na146363@gmail.com', '131221311244144214'),
(45, 'Md.', 'Rahman', 'SS', 'md.ashik.ar@gmail.com', '17501750358866'),
(46, 'Robert', 'Gallo', 'OSN', 'robert@protospan.com', '55533777483'),
(47, 'adsdasdas', 'sakkfalm', 'qklmkfakmasfmk', 'na146363@gmail.com', '990999909090'),
(48, 'safjkn', 'qjknfnjkasjknfs', 'jnkajkfs', 'na146363@gmail.com', '2421241442'),
(49, 'fsasfjnk', 'jnkjksnfjknfn', 'jnkjnkjnkaf', 'na146363@gmail.com', '141424121412421'),
(50, 'affasjnk', 'fsfs', 'jknjnkfjn', 'na146363@gmail.com', '3123123112312'),
(51, 'asdd', 'safjkn', 'jkjnkjnf', 'na146363@gmail.com', '1213132213'),
(52, 'Md.', 'Rahman', 'AA', 'md.ashik.ar@gmail.com', '17501750358866'),
(53, 'Robert', 'Gallo', 'NSC', 'robert@protospan.com', '77777755335'),
(54, 'Robert', 'Gallo', 'Google', 'robert@protospan.com', '8887878787'),
(55, 'asddjasjn', 'jafsjjafjskn', 'jinasjfisan', 'na146363@gmail.com', '12321123213321'),
(56, 'Hon', 'Smith', 'HOtCAr', 'robert@protospan.com', '5555534342'),
(57, 'John', 'Smith', 'hhf38', 'robert@protospan.com', '5554435364'),
(58, 'Md Ashiqur', 'Rahman', 'Synergy', 'md.ashik.ar@gmail.com', '000000000000'),
(59, 'Ashik', 'Ar', 'Teamfly', 'md.ashik.ar@gmail.com', '123456789'),
(60, 'John', 'Smith', '2786', 'robert@protospan.com', '2428783602'),
(61, 'John', 'Moll', 'Jho', 'robert@protospan.com', '8976775647'),
(62, 'nadim', 'haque', 'teamfly', 'na146363@gmail.com', '12331231231231'),
(63, 'Md.', 'Rahman', 'SoccerCric', 'md.ashik.ar@gmail.com', '17501750358866'),
(64, 'nasdnak', 'jnksafjknj', 'jnafsjnkjnk', 'na146363@gmail.com', '1312114142'),
(65, 'Md.', 'S', 'S', 'md.ashik.ar@gmail.com', '17501750358866'),
(66, 'adsads', 'safas', 'fsf', 'na146363@gmail.com', '123311414412'),
(67, 'Md.', 'Rahman', 'SoccerCric', 'md.ashik.ar@gmail.com', '17501750358866'),
(68, 'adsdas', 'dsadas', 'asdads', 'na146363@gmail.com', '3123121342241'),
(69, 'Md.', 'Ashiq', 'SoccerCric', 'md.ashik.ar@gmail.com', '17501750358866'),
(70, 'John', 'Smith', 'TOW', 'robert@protospan.com', '4444253523'),
(71, 'Jhone ', 'Doe', 'Microsoft', 'na146363@gmail.com', '123445656534'),
(72, 'Jhone ', 'Doe', 'Microsoft', 'na146363@gmail.com', '123445656534'),
(73, 'Jhone ', 'Doe', 'Microsoft', 'na146363@gmail.com', '123445656534'),
(74, 'Jhone ', 'Doe', 'Microsoft', 'na146363@gmail.com', '123445656534'),
(75, 'Jhone ', 'Doe', 'Microsoft', 'na146363@gmail.com', '123445656534'),
(76, 'Md.', 'Ashiq', 'SoccerCric', 'md.ashik.ar@gmail.com', '17501750358866'),
(77, 'Md.', 'Rahman', 'SS', 'md.ashik.ar@gmail.com', '17501750358866'),
(78, 'Nadim', 'Haque', 'Teamfly', 'na146363@gmail.com', '8801731001333'),
(79, 'Nadim', 'Haque', 'Teamfly', 'na146363@gmail.com', '8801731001333'),
(80, 'Nadim', 'Haque', 'Teamfly', 'na146363@gmail.com', '8801731001333'),
(81, 'Nadim', 'haque', 'Teamfly', 'na146363@gmail.com', '8801731001315'),
(82, 'Rob', 'Hsbs', 'Dhsj', 'robert@protospan.com', '340106484646401'),
(83, 'Hvf', 'Ggbcfhb', 'Ggdhvg', 'robert@protospan.com', '5800888598'),
(84, 'Nadim', 'Haque', 'Teamfly', 'na146363@gmail.com', '8801731001333'),
(85, 'Ahnaf ', 'Rafi', 'Synergy', 'ahnafrafi7@gmail.com', '000220303023003');

-- --------------------------------------------------------

--
-- Table structure for table `reservation`
--

CREATE TABLE `reservation` (
  `reservation_id` int(11) NOT NULL,
  `street_address` varchar(100) NOT NULL,
  `country` varchar(100) NOT NULL,
  `zip` varchar(30) NOT NULL,
  `profile_id` int(11) NOT NULL,
  `reservation_request_time` timestamp(6) NOT NULL DEFAULT CURRENT_TIMESTAMP(6) ON UPDATE CURRENT_TIMESTAMP(6),
  `reservation_date` varchar(100) NOT NULL,
  `reservation_time` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `reservation`
--

INSERT INTO `reservation` (`reservation_id`, `street_address`, `country`, `zip`, `profile_id`, `reservation_request_time`, `reservation_date`, `reservation_time`) VALUES
(1, '', '', '', 1, '2017-11-14 19:13:57.000000', '', ''),
(2, 'abcd', 'efgh', '3100', 2, '2017-11-14 19:23:51.000000', '2017-11-18', '03:56'),
(3, 'n', 'n', '3100', 3, '2017-11-14 19:52:48.000000', '2017-11-18', '01:56'),
(4, 'n', 'n', '3100', 4, '2017-11-14 19:54:18.000000', '2017-11-16', '01:56'),
(5, 'n', 'n', '3100', 5, '2017-11-14 19:56:40.000000', '2017-11-25', '01:57'),
(6, 'k', 'k', 'k', 6, '2017-11-14 19:59:50.000000', '2017-11-18', '01:58'),
(7, 'k', 'k', 'k', 7, '2017-11-14 20:09:46.000000', '2017-11-24', '01:56'),
(8, 'n', 'n', 'nn', 8, '2017-11-14 20:49:17.000000', '', ''),
(9, 'n', 'n', 'nn', 9, '2017-11-14 20:52:14.000000', '', ''),
(10, 'n', 'n', 'nn', 10, '2017-11-14 20:53:11.000000', '', ''),
(11, 'n', 'n', 'nn', 11, '2017-11-14 20:54:43.000000', '', ''),
(12, 'N', 'N', 'NN', 12, '2017-11-14 21:57:09.000000', '', ''),
(13, 'k', 'kk', 'k', 13, '2017-11-14 21:58:51.000000', '', ''),
(14, 'hasfd ', 'kuhab', '123', 14, '2017-11-16 16:17:56.000000', '0055-07-05', '0055-07-05'),
(15, 'hasfd ', 'hauqe', '123', 15, '2017-11-16 16:19:27.000000', '2017-11-16', '2017-11-16'),
(16, 'hasfd ', 'hauqe', '123', 16, '2017-11-16 16:20:33.000000', '2017-11-16', '2017-11-16'),
(17, 'hasfd ', 'hauqe', '123', 17, '2017-11-16 16:21:47.000000', '2017-11-16', '2017-11-16'),
(18, 'n', 'hauqe', '3100', 18, '2017-11-16 17:42:05.000000', '2017-11-16', '2017-11-16'),
(19, 'n', 'ass', 'sylhet', 19, '2017-11-16 17:53:42.000000', '2017-11-23', '2017-11-23'),
(20, 'n', 'n', '3100', 20, '2017-11-16 18:16:07.000000', '2017-11-17', '2017-11-17'),
(21, 'n', 'n', '3100', 21, '2017-11-16 18:28:31.000000', '2017-11-17', '2017-11-17'),
(22, 'n', 'n', '3100', 22, '2017-11-16 18:29:28.000000', '2017-11-17', '2017-11-17'),
(23, 'n', 'n', '3100', 23, '2017-11-16 18:42:15.000000', '2017-11-17', '2017-11-17'),
(24, 'n', 'n', '3100', 24, '2017-11-16 18:43:40.000000', '2017-11-17', '2017-11-17'),
(25, 'n', 'n', '3100', 25, '2017-11-16 19:23:12.000000', '2017-11-17', '2017-11-17'),
(26, 'b', 'p', '31312', 26, '2017-11-16 19:25:33.000000', '2017-11-26', '2017-11-26'),
(27, 'b', 'p', '31312', 27, '2017-11-16 19:26:37.000000', '2017-11-26', '2017-11-26'),
(28, 'Sylhet', 'Khan', 'Foridpur', 28, '2017-11-16 19:54:19.000000', '2017-11-17', '2017-11-17'),
(29, 'km', 'lk', '123', 29, '2017-11-16 20:22:58.000000', '2017-11-17', '2017-11-17'),
(30, 'km', 'lk', '123', 30, '2017-11-16 20:24:19.000000', '2017-11-17', '2017-11-17'),
(31, 'nadim', 'baal', '3100', 31, '2017-11-17 19:02:58.000000', '2017-11-09', '2017-11-09'),
(32, 'nadim', 'baal', '3100', 32, '2017-11-17 19:05:01.000000', '2017-11-09', '2017-11-09'),
(33, 'nadim', 'baal', '3100', 33, '2017-11-17 19:05:39.000000', '2017-11-09', '2017-11-09'),
(34, 'n', 'oooo', '3100', 34, '2017-11-17 19:08:43.000000', '2017-11-17', '2017-11-17'),
(35, 'o', 'p', '12313', 35, '2017-11-17 19:46:57.000000', '2017-11-18', '2017-11-18'),
(36, 'n', 'j', '88998', 36, '2017-11-17 19:49:31.000000', '2017-11-18', '2017-11-18'),
(37, 'asdah', 'adsas', '123312', 37, '2017-11-17 19:59:07.000000', '2017-11-11', '2017-11-11'),
(38, 'aszfsaf', 'asdasas', '123', 38, '2017-11-17 20:10:12.000000', '2017-11-18', '2017-11-18'),
(39, 'Shahporan', 'Rahman', '3100', 39, '2017-11-17 20:39:06.000000', '2017-11-24', '2017-11-24'),
(40, 'Sylhet', 'Nadim', '3100', 40, '2017-11-17 20:39:25.000000', '2017-11-18', '2017-11-18'),
(41, 'asdjdasjknk', 'dadasds', '1312', 41, '2017-11-17 20:44:08.000000', '2017-11-18', '2017-11-18'),
(42, 'dadadas', 'eqwe', '12123', 42, '2017-11-17 21:34:00.000000', '2017-11-18', '2017-11-18'),
(43, 'New York', 'Doe', '12345', 43, '2017-11-17 21:34:21.000000', '2017-11-24', '2017-11-24'),
(44, 'asdkdaskjn', 'njkjdnksfjknjkfsd', '1323', 44, '2017-11-18 20:14:08.000000', '2017-11-19', '2017-11-19'),
(45, '07 Albert Street', 'Rahman', '12345', 45, '2017-11-18 20:19:34.000000', '2017-11-21', '2017-11-21'),
(46, '649 Edwards Ct', 'Gallo', '30039', 46, '2017-11-18 20:23:40.000000', '2017-11-24', '2017-11-24'),
(47, 'adsadsdasj', 'sakkfalm', 'eqweqwqew', 47, '2017-11-18 20:28:48.000000', '2017-11-19', '2017-11-19'),
(48, 'asjkndanjk', 'qjknfnjkasjknfs', '2132', 48, '2017-11-18 20:33:58.000000', '2017-11-19', '2017-11-19'),
(49, 'adsdasadsjkn', 'jnkjksnfjknfn', '12312', 49, '2017-11-18 20:36:45.000000', '2017-11-19', '2017-11-19'),
(50, 'asa', 'fsfs', '12321', 50, '2017-11-18 20:48:38.000000', '2017-11-19', '2017-11-19'),
(51, 'asddasjkn', 'safjkn', '21312', 51, '2017-11-18 20:50:47.000000', '2017-11-19', '2017-11-19'),
(52, 'Shahporan', 'Rahman', '3100', 52, '2017-11-18 20:58:49.000000', '2017-11-21', '2017-11-21'),
(53, '1554 Juntas', 'Gallo', '30004', 53, '2017-11-18 21:06:19.000000', '2017-11-13', '2017-11-13'),
(54, '649 Edwards Ct', 'Gallo', '30094', 54, '2017-11-18 21:50:37.000000', '2017-11-23', '2017-11-23'),
(55, 'asdasda', 'jafsjjafjskn', '123312', 55, '2017-11-22 14:50:36.000000', '2017-11-22', '2017-11-22'),
(56, '1554 Court Max', 'Smith', '30012', 56, '2017-11-22 17:18:09.000000', '2017-11-17', '2017-11-17'),
(57, '482y', 'Smith', '49274', 57, '2017-11-22 17:35:48.000000', '2017-11-16', '2017-11-16'),
(58, 'Shahporan', 'Rahman', '3100', 58, '2017-11-22 17:44:16.000000', '2017-11-23', '2017-11-23'),
(59, 'Sylhet', 'Ar', '3100', 59, '2017-11-22 19:23:02.000000', '2017-11-23', '2017-11-23'),
(60, 'rjwrfnjenef', 'Smith', '32974', 60, '2017-11-22 19:54:33.000000', '2017-11-24', '2017-11-24'),
(61, '67 Utopia Lane', 'Moll', '66854', 61, '2017-11-22 21:38:05.000000', '2017-11-17', '2017-11-17'),
(62, 'asddas', 'haque', '3121', 62, '2017-11-22 22:54:15.000000', '2017-11-30', '10:00'),
(63, 'Shahporan', 'Rahman', '3100', 63, '2017-11-22 23:02:23.000000', '2017-11-24', '11:11'),
(64, 'ada', 'jnksafjknj', '211', 64, '2017-11-22 23:06:09.000000', '2017-11-30', '22:00'),
(65, 'Shahporan', 'S', '3100', 65, '2017-11-22 23:10:55.000000', '2017-11-30', '11:11'),
(66, 'asdasd', 'safas', '312', 66, '2017-11-22 23:30:17.000000', '2017-11-28', '17:00'),
(67, 'Shahporan', 'Rahman', '3100', 67, '2017-11-22 23:37:56.000000', '2017-11-29', '15:30'),
(68, 'adsdas', 'dsadas', '21213', 68, '2017-11-22 23:38:22.000000', '2017-11-28', '22:12'),
(69, 'Shahporan', 'Ashiq', '3100', 69, '2017-11-22 23:55:30.000000', '2017-11-29', '17:00'),
(70, '442 South Shole', 'Smith', '2964', 70, '2017-11-22 23:59:31.000000', '2017-11-17', '02:03'),
(71, '', 'Nayasharak', '3100', 71, '2017-11-23 00:07:03.000000', '2017-11-29', '13:00'),
(72, '', 'Nayasharak', '3100', 72, '2017-11-23 00:09:04.000000', '2017-11-29', '13:00'),
(73, '', 'Nayasharak', '3100', 73, '2017-11-23 00:09:58.000000', '2017-11-29', '13:00'),
(74, '', 'Nayasharak', '3100', 74, '2017-11-23 00:10:57.000000', '2017-11-29', '13:00'),
(75, 'Mirboxtula', 'Nayasharak', '3100', 75, '2017-11-23 00:11:48.000000', '2017-11-29', '13:00'),
(76, 'Shahporan', 'New york', '3100', 76, '2017-11-23 08:01:38.000000', '2017-11-27', '17:06'),
(77, 'sylhet', 'shah eidgah', '1000', 77, '2017-11-23 12:23:11.000000', '2017-11-25', '11:20'),
(78, '', '', '2000', 79, '2017-11-25 09:46:15.000000', '2017-11-28', '15:00'),
(79, 'New South Head Rd, Bellevue Hill NSW 2023, Australia', '', '2023', 80, '2017-11-25 09:50:03.000000', '2017-11-29', '22:00'),
(80, '207 Thomas St, Haymarket NSW 2000, Australia', 'Australia', '2000', 81, '2017-11-25 09:59:41.000000', '2017-11-29', '22:00'),
(81, 'Rose Bay NSW 2029, Australia', 'Australia', '2029', 82, '2017-11-25 17:13:59.000000', '2017-11-05', '21:13'),
(82, 'Forest Lodge NSW 2037, Australia', 'Australia', '2037', 83, '2017-11-26 19:14:39.000000', '2017-11-23', '18:13'),
(83, 'Town Hall Square, 15-16 George St, Sydney NSW 2000, Australia', 'Australia', '2000', 84, '2017-11-27 15:40:08.000000', '2017-11-30', '13:00'),
(84, '10010 CA-1, Jenner, CA 95450, USA', 'United States', '95450', 85, '2017-11-27 15:41:07.000000', '2017-11-30', '12:00');

-- --------------------------------------------------------

--
-- Table structure for table `services`
--

CREATE TABLE `services` (
  `service_id` int(11) NOT NULL,
  `service_name` varchar(100) NOT NULL,
  `price` varchar(30) NOT NULL,
  `service_quantity` varchar(10) NOT NULL,
  `vehicle_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `services`
--

INSERT INTO `services` (`service_id`, `service_name`, `price`, `service_quantity`, `vehicle_id`) VALUES
(3, 'Remove Tint', '10', '100', 1),
(4, 'Tint', '50', '100', 1),
(5, 'Window remove', '40', '500', 2),
(6, 'Window fixed', '50', '60', 2),
(7, 'Test', '80', '9', 3),
(8, 'Add headlight', '100', '9', 3);

-- --------------------------------------------------------

--
-- Table structure for table `settings`
--

CREATE TABLE `settings` (
  `settings_id` int(11) NOT NULL,
  `site_title` varchar(100) NOT NULL,
  `current_email` varchar(100) NOT NULL,
  `service_charge` varchar(30) NOT NULL,
  `current_phone` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `settings`
--

INSERT INTO `settings` (`settings_id`, `site_title`, `current_email`, `service_charge`, `current_phone`) VALUES
(1, 'solarsaversllc.com', 'contact@greengrocerer.com', '25', '+2 95 01 88 821');

-- --------------------------------------------------------

--
-- Table structure for table `vehicle_list`
--

CREATE TABLE `vehicle_list` (
  `vehicle_id` int(11) NOT NULL,
  `vehicle_name` varchar(100) NOT NULL,
  `vehicle_model` varchar(30) NOT NULL,
  `vehicle_year` varchar(30) NOT NULL,
  `vehicle_make` varchar(30) NOT NULL,
  `vehicle_avatar` varchar(200) NOT NULL,
  `vehicle_alt` varchar(100) NOT NULL,
  `vehicle_date_created_admin` varchar(30) NOT NULL,
  `vehicle_edited` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `vehicle_list`
--

INSERT INTO `vehicle_list` (`vehicle_id`, `vehicle_name`, `vehicle_model`, `vehicle_year`, `vehicle_make`, `vehicle_avatar`, `vehicle_alt`, `vehicle_date_created_admin`, `vehicle_edited`) VALUES
(1, 'Sedan', 's7', '2015', 'Germany', 'uploads/images/avatar/774848435a09b0c5eaf3e.png', 'Sedan Car ', '2017-11-13 15:48:38', '2017-11-27 13:41:39'),
(2, 'jaguar', 'j9', '2017', 'Germany', 'uploads/images/avatar/20731812245a09b4d5d0473.png', 'Jaguar', '2017-11-13 16:05:57', ''),
(3, 'Ford X90', 'T9', '2019', 'Ford', 'uploads/images/avatar/13706575925a10a8d103c6e.jpeg', 'nvhjbh ', '2017-11-18 21:40:33', '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`admin_id`);

--
-- Indexes for table `contact_message`
--
ALTER TABLE `contact_message`
  ADD PRIMARY KEY (`message_id`);

--
-- Indexes for table `order_details`
--
ALTER TABLE `order_details`
  ADD PRIMARY KEY (`order_id`);

--
-- Indexes for table `order_master`
--
ALTER TABLE `order_master`
  ADD PRIMARY KEY (`order_master_id`);

--
-- Indexes for table `profile`
--
ALTER TABLE `profile`
  ADD PRIMARY KEY (`profile_id`);

--
-- Indexes for table `reservation`
--
ALTER TABLE `reservation`
  ADD PRIMARY KEY (`reservation_id`);

--
-- Indexes for table `services`
--
ALTER TABLE `services`
  ADD PRIMARY KEY (`service_id`);

--
-- Indexes for table `settings`
--
ALTER TABLE `settings`
  ADD PRIMARY KEY (`settings_id`);

--
-- Indexes for table `vehicle_list`
--
ALTER TABLE `vehicle_list`
  ADD PRIMARY KEY (`vehicle_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `admin_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;
--
-- AUTO_INCREMENT for table `contact_message`
--
ALTER TABLE `contact_message`
  MODIFY `message_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=67;
--
-- AUTO_INCREMENT for table `order_details`
--
ALTER TABLE `order_details`
  MODIFY `order_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=121;
--
-- AUTO_INCREMENT for table `order_master`
--
ALTER TABLE `order_master`
  MODIFY `order_master_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=83;
--
-- AUTO_INCREMENT for table `profile`
--
ALTER TABLE `profile`
  MODIFY `profile_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=86;
--
-- AUTO_INCREMENT for table `reservation`
--
ALTER TABLE `reservation`
  MODIFY `reservation_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=85;
--
-- AUTO_INCREMENT for table `services`
--
ALTER TABLE `services`
  MODIFY `service_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
--
-- AUTO_INCREMENT for table `settings`
--
ALTER TABLE `settings`
  MODIFY `settings_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `vehicle_list`
--
ALTER TABLE `vehicle_list`
  MODIFY `vehicle_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
