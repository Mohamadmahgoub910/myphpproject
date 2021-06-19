-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Jun 19, 2021 at 10:06 PM
-- Server version: 10.4.10-MariaDB
-- PHP Version: 7.3.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `vendordb`
--

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

DROP TABLE IF EXISTS `products`;
CREATE TABLE IF NOT EXISTS `products` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `proname` varchar(50) DEFAULT NULL,
  `probrand` varchar(50) DEFAULT NULL,
  `proexpire` varchar(50) CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL,
  `proexist` tinyint(1) DEFAULT NULL,
  `status` tinyint(1) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=13 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `proname`, `probrand`, `proexpire`, `proexist`, `status`) VALUES
(6, 'kalbz', 'snax', '20-3-2022', 0, NULL),
(9, 'shitos', 'snax', '2020-02-02', 0, 1),
(10, 'flamnko', 'snax', '2009-01-23', 1, 1),
(11, 'Ù„Ø§Ø¨ Ø¯ÙŠÙ„', 'Ø¬ÙŠÙ„ Ø®Ù…Ø³ØªØ§Ø´Ø±', '2021-03-23', 0, 1),
(12, 'ÙÙ„Ø§Ù…Ù†ÙƒÙˆ', 'ÙƒØ§Ø±Ø§ØªÙŠÙ‡', '1999-02-02', 0, 1);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
CREATE TABLE IF NOT EXISTS `users` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(50) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(140) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `name` varchar(50) CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL,
  `status` tinyint(1) DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `username` (`username`)
) ENGINE=MyISAM AUTO_INCREMENT=11 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `password`, `name`, `status`) VALUES
(2, 'alisaed', '1234', '3lwaa', NULL),
(3, 'mahmoud', '1234', 'shitos', NULL),
(7, 'mohamad', '1234', 'medo', 0),
(8, 'ahmad', '1234', 'ahmadmahgoub', 0),
(9, 'so3ad', '1234', 'soad ali', 0),
(6, 'safa', '1234', 'safsf', 0),
(10, 'wael', '1234', 'waeleldw', 1);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
