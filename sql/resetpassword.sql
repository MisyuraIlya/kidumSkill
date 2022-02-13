-- phpMyAdmin SQL Dump
-- version 5.0.3
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Nov 21, 2020 at 10:49 AM
-- Server version: 10.4.14-MariaDB
-- PHP Version: 7.4.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `kidumskillnew`
--

-- --------------------------------------------------------

--
-- Table structure for table `resetpassword`
--

CREATE TABLE `resetpassword` (
  `id` int(11) NOT NULL,
  `email` varchar(255) NOT NULL,
  `code` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `resetpassword`
--

INSERT INTO `resetpassword` (`id`, `email`, `code`) VALUES
(2, 'misyurailya5@gmail.com', '15f6af5b03d646'),
(3, 'misyurailya5@gmail.com', '15f6af835c451e'),
(4, 'misyurailya5@gmail.com', '15f6af848a0107'),
(5, 'misyurailya5@gmail.com', '15f6af94da4036'),
(6, 'misyurailya5@gmail.com', '15f6af9731bb27'),
(7, 'misyurailya5@gmail.com', '15f6afa00a9800'),
(8, 'misyurailya5@gmail.com', '15f6afa3e44b30'),
(9, 'misyurailya5@gmail.com', '15f6afa9fed484'),
(10, 'misyurailya5@gmail.com', '15f6afab7f05e1'),
(11, 'misyurailya5@gmail.com', '15f6afac41db17'),
(12, 'misyurailya5@gmail.com', '15f6afaccbedce'),
(13, 'misyurailya5@gmail.com', '15f6afadaea6c4'),
(14, 'misyurailya5@gmail.com', '15f6afafdf262c'),
(15, 'misyurailya5@gmail.com', '15f6afb3eb0f15'),
(16, 'misyurailya5@gmail.com', '15f6afb9af3771'),
(17, 'misyurailya5@gmail.com', '15f6afbba6bb83'),
(18, 'צןדטורשןךטש5', '15f6afdb06c187'),
(19, 'kkkkk', '15f6afe4f4a908'),
(20, 'mi', '15f6aff8465257'),
(21, 'spetsar97ilya@gmail.com', '15fb566738efb7');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `resetpassword`
--
ALTER TABLE `resetpassword`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `resetpassword`
--
ALTER TABLE `resetpassword`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
