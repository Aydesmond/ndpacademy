-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Nov 08, 2023 at 05:05 PM
-- Server version: 10.4.10-MariaDB
-- PHP Version: 7.4.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `register`
--

-- --------------------------------------------------------

--
-- Table structure for table `successful_payment`
--

DROP TABLE IF EXISTS `successful_payment`;
CREATE TABLE IF NOT EXISTS `successful_payment` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `email` varchar(100) NOT NULL,
  `amount_paid` varchar(100) NOT NULL,
  `course_id` varchar(100) NOT NULL,
  `receipt_number` varchar(100) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `successful_payment`
--

INSERT INTO `successful_payment` (`id`, `email`, `amount_paid`, `course_id`, `receipt_number`) VALUES
(1, 'avalonmsg@gmail.com', '150000', '1', 'NDPR76HG7');

-- --------------------------------------------------------

--
-- Table structure for table `successful_payment_master`
--

DROP TABLE IF EXISTS `successful_payment_master`;
CREATE TABLE IF NOT EXISTS `successful_payment_master` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `email` varchar(100) NOT NULL,
  `amount_paid` varchar(100) NOT NULL,
  `course_id` varchar(100) NOT NULL,
  `receipt_number` varchar(100) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `successful_payment_master`
--

INSERT INTO `successful_payment_master` (`id`, `email`, `amount_paid`, `course_id`, `receipt_number`) VALUES
(1, 'avalonmsg@gmail.com', '300000', '2', 'NDPRMA78D');

-- --------------------------------------------------------

--
-- Table structure for table `toy`
--

DROP TABLE IF EXISTS `toy`;
CREATE TABLE IF NOT EXISTS `toy` (
  `id` int(8) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  `code` varchar(20) NOT NULL,
  `category` varchar(255) NOT NULL,
  `price` double NOT NULL,
  `stock_count` bigint(16) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=17 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `toy`
--

INSERT INTO `toy` (`id`, `name`, `code`, `category`, `price`, `stock_count`) VALUES
(9, 'Music Aeroplane', 'TOY#MA01', 'Music Toys', 250, 500),
(10, 'Power Rangers', 'TOY#BT01', 'Battery Toys', 1000, 100),
(11, 'Remote Car', 'TOY#RMT01', 'Remote Control Toys', 280, 800),
(12, 'Bubbles', 'TOY#WT01', 'Water Games', 100, 1000),
(13, 'Cricket Cards', 'TOY#CD01', 'Card Games', 200, 80),
(14, 'Basket Ball', 'TOY#BB01', 'Outdoor Toys', 2000, 500),
(15, 'Word Puzzles', 'TOY#PZ01', 'Puzzles', 200, 200),
(16, 'Water Gun', 'TOY#WG01', 'Water Games', 100, 1000);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
CREATE TABLE IF NOT EXISTS `users` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `firstname` varchar(100) NOT NULL,
  `lastname` varchar(100) NOT NULL,
  `username` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `organisation` varchar(255) NOT NULL,
  `phone` varchar(50) NOT NULL,
  `course` varchar(100) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=138 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `firstname`, `lastname`, `username`, `email`, `password`, `organisation`, `phone`, `course`) VALUES
(3, 'Ayoola', 'Desmond', 'ayoola', 'avalonmsg@gmail.com', '3ad909d5a0792677a298aeeeabffc6ef', '', '', ''),
(8, 'Ayoola', 'Ibrahim', 'aydesmond', 'aydesmondng@gmail.com', '3ad909d5a0792677a298aeeeabffc6ef', '', '08160416180', '');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
