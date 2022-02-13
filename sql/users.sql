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
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) UNSIGNED NOT NULL,
  `username` varchar(255) NOT NULL,
  `email` varchar(255) DEFAULT NULL,
  `firstname` varchar(100) NOT NULL,
  `lastname` varchar(100) NOT NULL,
  `password` varchar(50) NOT NULL,
  `vkey` varchar(45) DEFAULT NULL,
  `verified` tinyint(1) NOT NULL DEFAULT 0,
  `createdate` timestamp(6) NOT NULL DEFAULT current_timestamp(6),
  `profile_image` varchar(255) DEFAULT NULL,
  `html` int(11) NOT NULL,
  `css` int(100) NOT NULL DEFAULT 0,
  `jsjq` int(100) NOT NULL DEFAULT 0,
  `phpmysql` int(100) NOT NULL DEFAULT 0,
  `certphp` varchar(200) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `email`, `firstname`, `lastname`, `password`, `vkey`, `verified`, `createdate`, `profile_image`, `html`, `css`, `jsjq`, `phpmysql`, `certphp`) VALUES
(72, 'SpeTsaR', 'misyurailya5@gmail.com', 'איליה', 'מיסיורה1', 'e10adc3949ba59abbe56e057f20f883e', 'f7e055630bb898a50112a9815f89ee42', 1, '2020-11-04 18:26:21.112423', '1605894331-1.jpg', 10, 0, 0, 0, ''),
(78, 'gogi', 'spetsar97ilya@yandex.ru', 'איליה', 'בלוח', 'e10adc3949ba59abbe56e057f20f883e', '310dacf674ef65eee3df348df0b6f1a2', 1, '2020-11-21 09:38:24.001281', '1605951676-2.jpg', 13, 0, 0, 0, NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=79;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
