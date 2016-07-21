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
-- Table structure for table `userBot`
--

CREATE TABLE `userBot` (
  `id` int(11) NOT NULL,
  `uid` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `token` text COLLATE utf8_unicode_ci NOT NULL,
  `lastlogin` text COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `userBot`
--

INSERT INTO `userBot` (`id`, `uid`, `token`, `lastlogin`) VALUES
(57577, '100009726405316', 'EAAAACZAVC6ygBAN4VqkiLFsaZApcQJ2VAr7mL7PTFBSqfd7bB2FoTgXjFaP87gWPUNVCZAzAGaSGt3ow9CW3nMUulZAM8k2xGR792mJ9Jl3xPudvgRqIv7AVKguyIXmVal8jtADZB05KTXQnMUWhnA4sDCnqJQZB0ZD', '1469128601');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `userBot`
--
ALTER TABLE `userBot`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `userBot`
--
ALTER TABLE `userBot`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=57578;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
