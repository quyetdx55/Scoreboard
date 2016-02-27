-- phpMyAdmin SQL Dump
-- version 4.0.4.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Feb 27, 2016 at 06:39 PM
-- Server version: 5.6.11
-- PHP Version: 5.5.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `web`
--
CREATE DATABASE IF NOT EXISTS `web` DEFAULT CHARACTER SET utf8 COLLATE utf8_unicode_ci;
USE `web`;

-- --------------------------------------------------------

--
-- Table structure for table `lopmonhoc`
--

CREATE TABLE IF NOT EXISTS `lopmonhoc` (
  `id` int(20) NOT NULL AUTO_INCREMENT,
  `id_lop` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `name_lop` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `sem_lop` varchar(2) COLLATE utf8_unicode_ci NOT NULL,
  `year_lop` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=7 ;

--
-- Dumping data for table `lopmonhoc`
--

INSERT INTO `lopmonhoc` (`id`, `id_lop`, `name_lop`, `sem_lop`, `year_lop`) VALUES
(2, 'EMA3065', 'CÃ´ng suáº¥t Ä‘iá»‡n tá»«', '1', '2013-2014'),
(4, 'EMA3014', 'CÆ¡ há»c quá»¹ Ä‘áº¡o bay', '1', '2013-2014'),
(5, 'EMA3014', 'CÆ¡ há»c quá»¹ Ä‘áº¡o bay', '1', '2014-2015'),
(6, 'INT4051', 'NiÃªn luáº­n', '1', '2014-2015');

-- --------------------------------------------------------

--
-- Table structure for table `year`
--

CREATE TABLE IF NOT EXISTS `year` (
  `id_year` varchar(20) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `year`
--

INSERT INTO `year` (`id_year`) VALUES
('2013-2014'),
('2014-2015'),
('2015-2016'),
('2016-2017'),
('2012-2013');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
