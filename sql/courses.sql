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
-- Table structure for table `courses`
--

CREATE TABLE `courses` (
  `id` int(11) NOT NULL,
  `type` varchar(255) NOT NULL,
  `image` varchar(255) NOT NULL,
  `name` varchar(200) NOT NULL,
  `total_time` varchar(200) NOT NULL,
  `lessons` varchar(200) NOT NULL,
  `homework` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `courses`
--

INSERT INTO `courses` (`id`, `type`, `image`, `name`, `total_time`, `lessons`, `homework`) VALUES
(1, 'https://localhost/kidumskill/incCourses/html/html.php?item_id=1', '\\kidumskill\\images\\courses\\htmlcss.jpg', 'HTML', '20:00', '20', '20'),
(2, 'https://localhost/kidumskill/incCourses/css/css.php?item_id=1', '\\kidumskill\\images\\courses\\css.jpg', 'CSS', '15', '15', '15'),
(3, 'https://localhost/kidumskill/incCourses/jsjq/jsjq.php?item_id=1', '\\kidumskill\\images\\courses\\jsjquery.jpg', 'JS+JQ', '25', '25', '25'),
(4, 'https://localhost/kidumskill/incCourses/phpmysql/phpmysql.php?item_id=1', '\\kidumskill\\images\\courses\\phpmysql.jpg', 'PHP & Mysql', '30', '40', '10'),
(5, '', '', 'Frontend + figma', '20', '20', '20'),
(6, '', '\\kidumskill\\images\\courses\\bootstrap.jpeg', 'Bootstrap 4', '20', '20', '20'),
(7, '', '\\kidumskill\\images\\courses\\react.jpg', 'React', '20', '20', '20'),
(8, '', '\\kidumskill\\images\\courses\\laravel.jpg', 'Laravel', '20', '20', '20'),
(9, '', '', 'VueJs', '20', '20', '20'),
(10, '', '', 'Modern WEB', '20', '20', '20');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `courses`
--
ALTER TABLE `courses`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `courses`
--
ALTER TABLE `courses`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
