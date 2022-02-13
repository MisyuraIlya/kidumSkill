-- phpMyAdmin SQL Dump
-- version 5.0.3
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Nov 21, 2020 at 10:48 AM
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
-- Table structure for table `answers_jsjq`
--

CREATE TABLE `answers_jsjq` (
  `aid` int(250) NOT NULL,
  `answer` varchar(250) NOT NULL,
  `ans_id` int(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `answers_jsjq`
--

INSERT INTO `answers_jsjq` (`aid`, `answer`, `ans_id`) VALUES
(1, 'das', 1),
(2, 'css1', 1),
(3, 'css2', 1),
(4, 'css3', 1),
(5, 'css4', 2),
(6, 'css5', 2),
(7, 'css6', 2),
(8, 'css7', 2),
(9, 'js', 3),
(10, 'js2', 3),
(11, 'js3', 3),
(12, 'js4', 3),
(13, 'php', 4),
(14, 'php2', 4),
(15, 'php3', 4),
(16, 'php4', 4),
(17, 'sql', 5),
(18, 'sql2', 5),
(19, 'sql3', 5),
(20, 'sql4', 5),
(21, 'asd', 6),
(22, 'fsdf', 7),
(23, 'sdfa', 8),
(24, 'asdf', 9),
(25, 'gdsfg', 10),
(26, 'sfgdsf', 10),
(27, 'sgdfgsd', 10),
(28, 'dsfgdsf', 11),
(29, '1sdf', 11),
(30, 'asdfasd', 12);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `answers_jsjq`
--
ALTER TABLE `answers_jsjq`
  ADD PRIMARY KEY (`aid`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `answers_jsjq`
--
ALTER TABLE `answers_jsjq`
  MODIFY `aid` int(250) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
