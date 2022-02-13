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
-- Table structure for table `questions_html`
--

CREATE TABLE `questions_html` (
  `qid` int(250) NOT NULL,
  `question` varchar(250) NOT NULL,
  `ans_id` int(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `questions_html`
--

INSERT INTO `questions_html` (`qid`, `question`, `ans_id`) VALUES
(1, 'מה עושה תגית P?', 1),
(2, 'מה עושה תגית H', 5),
(3, 'איך משנים רשימה מצד שמאל לימין', 9),
(4, 'מה עושה תגית IMG', 13),
(5, 'מה נותן תגית OL LI', 19),
(6, 'gogi', 21),
(7, 'bloh', 22),
(8, 'ilya', 23),
(9, 'misyura', 24),
(10, 'hhj', 25),
(11, 'sgdfgr', 27),
(12, 'gsdfg', 32),
(13, 'dfsgdg', 34),
(14, 'dgsdhdfs', 35),
(15, 'dsfdsf', 36);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `questions_html`
--
ALTER TABLE `questions_html`
  ADD PRIMARY KEY (`qid`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `questions_html`
--
ALTER TABLE `questions_html`
  MODIFY `qid` int(250) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
