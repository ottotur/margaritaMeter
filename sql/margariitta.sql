-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: 30.10.2017 klo 19:43
-- Palvelimen versio: 10.1.13-MariaDB
-- PHP Version: 5.6.21

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `margariitta`
--

-- --------------------------------------------------------

--
-- Rakenne taululle `arvosana`
--

CREATE TABLE `arvosana` (
  `id` int(11) NOT NULL,
  `name` text NOT NULL,
  `restaurant` text NOT NULL,
  `grade` text NOT NULL,
  `time` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Vedos taulusta `arvosana`
--

INSERT INTO `arvosana` (`id`, `name`, `restaurant`, `grade`, `time`) VALUES
(1, 'Otto Turunen', 'husker', '7', '0000-00-00 00:00:00'),
(2, 'Otto Turunen', 'apollo', '7', '0000-00-00 00:00:00'),
(3, 'Otto Turunen', 'apollo', '7', '2017-10-10 23:04:39'),
(4, 'Otto Turunen', 'apollo', '8', '2017-10-10 23:34:14'),
(5, 'Otto Turunen', 'hotdog', '2', '2017-10-11 00:06:37'),
(6, 'Otto Turunen', 'starbuck', '10', '2017-10-11 00:08:26');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `arvosana`
--
ALTER TABLE `arvosana`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `id_2` (`id`),
  ADD KEY `id` (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `arvosana`
--
ALTER TABLE `arvosana`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
