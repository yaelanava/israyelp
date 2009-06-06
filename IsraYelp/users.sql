-- phpMyAdmin SQL Dump
-- version 2.11.9.3
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Jun 05, 2009 at 10:52 PM
-- Server version: 5.0.67
-- PHP Version: 5.2.9

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `test`
--

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `id` bigint(50) unsigned NOT NULL auto_increment,
  `username` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  PRIMARY KEY  (`id`),
  UNIQUE KEY `email` (`email`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=6 ;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `email`, `password`) VALUES
(1, 'ss', 'ss', '*80926D3F75126C85D893B06075303123B69AAD58'),
(2, 'yaelamar', 'yael.amar@gmail.com', '*49A10F3E311E3A15524E924E08DC14399E01C7B1'),
(3, 'a', 'avi_amar@smile.net.il', '*667F407DE7C6AD07358FA38DAED7828A72014B4E'),
(4, 's', 's', '*16863C23B2E91537AEAEDDE9D1B40DA2A975C5DC'),
(5, 'simamar', 'simamar@zahav.net.il', '*85AC05E6555E3DFD5C1385A34FFC3F763F7E5F73');
