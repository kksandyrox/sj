-- phpMyAdmin SQL Dump
-- version 4.0.4
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Mar 15, 2014 at 08:36 PM
-- Server version: 5.5.32
-- PHP Version: 5.4.16

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `sports`
--
CREATE DATABASE IF NOT EXISTS `sports` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `sports`;

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE IF NOT EXISTS `categories` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(40) NOT NULL,
  `created` datetime DEFAULT NULL,
  `modified` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=11 ;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `name`, `created`, `modified`) VALUES
(3, 'Football again bitch', '2014-03-15 09:42:04', '2014-03-15 18:04:12'),
(4, 'Cricket', '2014-03-15 09:42:15', '2014-03-15 09:42:15'),
(5, 'Basketball', '2014-03-15 09:42:26', '2014-03-15 09:42:26'),
(6, 'Rugby', '2014-03-15 13:07:36', '2014-03-15 13:07:36'),
(7, '', '2014-03-15 13:23:26', '2014-03-15 13:23:26'),
(8, 'Metallica', '2014-03-15 13:24:24', '2014-03-15 13:24:24'),
(9, 'FootballMegadeth12345', '2014-03-15 13:26:27', '2014-03-15 13:31:07'),
(10, 'Fdp', '2014-03-15 13:26:43', '2014-03-15 13:28:01');

-- --------------------------------------------------------

--
-- Table structure for table `events`
--

CREATE TABLE IF NOT EXISTS `events` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(40) NOT NULL,
  `category_id` int(11) NOT NULL,
  `date` date DEFAULT NULL,
  `description` text NOT NULL,
  `image` varchar(255) NOT NULL,
  `dir` varchar(255) NOT NULL,
  `result` varchar(255) NOT NULL,
  `is_enabled` tinyint(1) DEFAULT '0',
  `created` datetime DEFAULT NULL,
  `modified` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=6 ;

--
-- Dumping data for table `events`
--

INSERT INTO `events` (`id`, `name`, `category_id`, `date`, `description`, `image`, `dir`, `result`, `is_enabled`, `created`, `modified`) VALUES
(2, 'sa', 1, NULL, 'sad', '91068056.png', '2', 'sda', 0, '2014-03-13 20:11:55', '2014-03-13 20:11:55'),
(3, 'world cup', 1, '2014-05-31', 'waka waka', '922268_511608032239245_552497876_o.jpg', '3', '', 0, '2014-03-13 21:22:05', '2014-03-13 21:22:05'),
(4, 'Asia Cup', 4, '2014-03-28', 'asia cup is a cricket tournament. But you suck', '91068056.png', '4', 'Sri Lanke WOn', 1, '2014-03-14 18:01:49', '2014-03-15 09:43:09'),
(5, 'Sandeep Kumar', 8, '2014-03-31', 'EVENTOFY is an Android application that will turn an event into a powerful networking platform (a common platform for Communication e.g. social media) where everyone attending the event can communicate with each other. It will keep everyone informed, enabled, and engaged before, during, and after the event.', 'Koala.jpg', '5', 'Good Concert', 1, '2014-03-15 18:31:00', '2014-03-15 18:40:23');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(40) NOT NULL,
  `password` varchar(40) NOT NULL,
  `created` datetime DEFAULT NULL,
  `modified` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `password`, `created`, `modified`) VALUES
(1, 'sandeep', '0b44e38113a03a073e8e5f9386c29b9868c99376', '2014-03-13 22:21:25', '2014-03-13 22:21:25');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
