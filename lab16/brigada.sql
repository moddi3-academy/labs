-- phpMyAdmin SQL Dump
-- version 4.4.15.7
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1:3306
-- Generation Time: Jun 02, 2017 at 12:31 PM
-- Server version: 5.5.50
-- PHP Version: 5.3.29

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `brigada`
--

-- --------------------------------------------------------

--
-- Table structure for table `bmw`
--

CREATE TABLE IF NOT EXISTS `bmw` (
  `author` varchar(20) NOT NULL,
  `title` varchar(20) NOT NULL,
  `category` varchar(16) DEFAULT NULL,
  `year` smallint(6) DEFAULT NULL,
  `isbn` char(13) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `bmw`
--

INSERT INTO `bmw` (`author`, `title`, `category`, `year`, `isbn`) VALUES
('Mark Twain', 'The Adventures of To', 'Fiction', 1876, '9898986698984'),
('Jane Austen', 'Pride and Prejudice', 'Fiction', 1811, '9898989833984'),
('Charles Darwin', 'The Origin of Specie', 'Non-Fiction', 1856, '9238989898984'),
('Charles Dickens', 'The Old Curiosity Sh', 'Fiction', 1841, '9781598184891'),
('William Shakespeare', 'Romeo and Juliet', 'Play', 1594, '9898989898984');

-- --------------------------------------------------------

--
-- Table structure for table `customers`
--

CREATE TABLE IF NOT EXISTS `customers` (
  `name` varchar(128) DEFAULT NULL,
  `isbn` varchar(13) NOT NULL DEFAULT ''
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `customers`
--

INSERT INTO `customers` (`name`, `isbn`) VALUES
('Joe Bloggs', '9780099533474'),
('Mary Smith', '9780582506206'),
('Jack Wilson', '9780517123201');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `bmw`
--
ALTER TABLE `bmw`
  ADD KEY `author` (`author`),
  ADD KEY `title` (`title`),
  ADD KEY `category` (`category`(4)),
  ADD KEY `year` (`year`);

--
-- Indexes for table `customers`
--
ALTER TABLE `customers`
  ADD PRIMARY KEY (`isbn`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
