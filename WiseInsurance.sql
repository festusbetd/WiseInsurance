-- phpMyAdmin SQL Dump
-- version 3.3.9
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Jul 04, 2018 at 01:46 PM
-- Server version: 5.1.53
-- PHP Version: 5.3.4

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `wiseinsurance`
--

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `username` varchar(100) NOT NULL,
  `email` varchar(50) NOT NULL,
  `user_type` varchar(100) NOT NULL,
  `user_policy` varchar(50) NOT NULL,
  `password` varchar(100) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=26 ;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `email`, `user_type`, `user_policy`, `password`) VALUES
(25, 'charitie', 'festusbet@gmail.com', 'user', 'Health Insurance', '81dc9bdb52d04dc20036dbd8313ed055'),
(24, 'festus', 'festusbet@gmail.com', 'user', 'General Insurance', '81dc9bdb52d04dc20036dbd8313ed055'),
(2, 'festusbetd', 'festusbet@gmail.com', 'admin', 'none', '81dc9bdb52d04dc20036dbd8313ed055'),
(23, 'festus', 'festusbet@gmail.com', 'user', 'General Insurance', '81dc9bdb52d04dc20036dbd8313ed055');
