-- phpMyAdmin SQL Dump
-- version 4.0.4
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Mar 21, 2014 at 03:21 AM
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
  PRIMARY KEY (`id`),
  KEY `id` (`id`),
  KEY `id_2` (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=7 ;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `name`, `created`, `modified`) VALUES
(1, 'Cricket', '2014-03-18 10:07:42', '2014-03-21 01:00:05'),
(2, 'Football', '2014-03-18 10:14:28', '2014-03-18 10:14:28'),
(3, 'Baseball', '2014-03-18 10:21:57', '2014-03-18 10:21:57'),
(6, 'Tennis', '2014-03-21 01:23:29', '2014-03-21 01:23:29');

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
  UNIQUE KEY `id_2` (`id`),
  KEY `id` (`id`),
  KEY `category_id` (`category_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=12 ;

--
-- Dumping data for table `events`
--

INSERT INTO `events` (`id`, `name`, `category_id`, `date`, `description`, `image`, `dir`, `result`, `is_enabled`, `created`, `modified`) VALUES
(1, 'England India ODI', 1, '2014-03-25', 'Match between England and India. A must win game for India.', 'cricket_l_14.jpg', '1', 'India won comfortably', 1, '2014-03-18 10:09:51', '2014-03-21 01:12:33'),
(2, 'Video game', 1, '2014-03-20', 'This is a video game dude', 'video game.jpg', '2', 'India won again', 0, '2014-03-18 10:13:17', '2014-03-21 01:36:28'),
(3, 'Champions league', 2, '2014-03-19', 'This a champions league football game. I dont like football, but doesn''t matter.', 'Football_iu_1996.jpg', '3', 'A brilliant goal by Gerrard.', 1, '2014-03-18 10:16:25', '2014-03-18 10:16:25'),
(4, 'Chicago rivals vs Bulls', 3, '2014-03-25', 'This is a baseball match, I have no much idea about baseball, but it is good for testing.', 'BAseball-hit.jpg', '4', 'It ended in a draw', 1, '2014-03-18 10:22:52', '2014-03-21 01:40:54'),
(11, 'IPL 7', 1, '2014-05-07', 'starts in may', '', '', 'Mumbai Indians win', 0, '2014-03-20 23:58:28', '2014-03-21 01:40:43');

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
(1, 'sandeep', '7f4ff2b9927e366356e59b6e799e17b83ed15aed', '2014-03-13 22:21:25', '2014-03-13 22:21:25');

--
-- Constraints for dumped tables
--

--
-- Constraints for table `events`
--
ALTER TABLE `events`
  ADD CONSTRAINT `events_ibfk_1` FOREIGN KEY (`category_id`) REFERENCES `categories` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
