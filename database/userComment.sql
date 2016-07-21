-- phpMyAdmin SQL Dump
-- version 4.5.2
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Jul 21, 2016 at 10:03 PM
-- Server version: 10.1.13-MariaDB
-- PHP Version: 7.0.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `like`
--

-- --------------------------------------------------------

--
-- Table structure for table `userComment`
--

CREATE TABLE `userComment` (
  `id` int(11) NOT NULL,
  `uid` varchar(100) CHARACTER SET utf8 NOT NULL,
  `token` text CHARACTER SET utf8 NOT NULL,
  `lastlogin` text CHARACTER SET utf8 NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `userComment`
--

INSERT INTO `userComment` (`id`, `uid`, `token`, `lastlogin`) VALUES
(2, '100009726405316', 'EAAAACZAVC6ygBAN4VqkiLFsaZApcQJ2VAr7mL7PTFBSqfd7bB2FoTgXjFaP87gWPUNVCZAzAGaSGt3ow9CW3nMUulZAM8k2xGR792mJ9Jl3xPudvgRqIv7AVKguyIXmVal8jtADZB05KTXQnMUWhnA4sDCnqJQZB0ZD', '1469129655');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `userComment`
--
ALTER TABLE `userComment`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `userComment`
--
ALTER TABLE `userComment`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
