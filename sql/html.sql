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
-- Table structure for table `html`
--

CREATE TABLE `html` (
  `id` int(11) NOT NULL,
  `video` varchar(255) NOT NULL,
  `name` varchar(256) NOT NULL,
  `clock` varchar(255) NOT NULL,
  `lesson_number` varchar(255) NOT NULL,
  `title_desc` varchar(255) NOT NULL,
  `description` text NOT NULL,
  `image` varchar(255) NOT NULL,
  `choose` varchar(50) NOT NULL,
  `fromq` int(250) NOT NULL,
  `toq` int(250) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `html`
--

INSERT INTO `html` (`id`, `video`, `name`, `clock`, `lesson_number`, `title_desc`, `description`, `image`, `choose`, `fromq`, `toq`) VALUES
(1, '1', 'gasd', '12:00', '1', 'dgfsdgasdfads', 'shghsfjsdjsfgjdgh', 'video.png', 'video', 0, 0),
(2, '2', 'asda', '', '2', 'dsg', 'jsfgksfgjsf', 'exme.png', 'exme', 1, 11),
(3, '3', 'video', '13:00', '3', 'video', 'video', 'video.png', 'video', 0, 0),
(4, '', 'css', '', '4', 'css', 'css', 'exme.png', 'exme', 11, 21),
(5, '5.mp4', 'javascropt', '20:00', '5', 'title desc', 'title desc', 'video.png', 'video', 0, 0),
(6, '6.mp4', 'php', '15:00', '6', 'lesson6', 'lesson 6', 'video.png', 'video', 0, 0),
(7, '7.mp4', 'lesson 7', '10:00', '7', 'lesson 7', 'lesson7', 'video.png', 'video', 0, 0),
(8, '8.mp4', 'lesson 8', '9:00', '8', 'lesson 8', 'lesson 8', 'video.png', 'video', 0, 0),
(9, '9.mp4', 'lesson 9', '12:00', '9', 'lesson 9', 'lesson 9', 'video.png', 'video', 0, 0),
(10, '10.mp4', 'lesson 10', '0', '10', 'lesson 10', 'lesson 10', 'video.png', 'exme', 10, 15),
(11, '0', 'cert', '0', '11', 'cert', 'cert', 'cert.png', 'cert', 0, 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `html`
--
ALTER TABLE `html`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `html`
--
ALTER TABLE `html`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
