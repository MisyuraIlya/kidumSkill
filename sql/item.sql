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
-- Table structure for table `item`
--

CREATE TABLE `item` (
  `id` int(11) NOT NULL,
  `video` varchar(255) NOT NULL,
  `name` varchar(256) NOT NULL,
  `clock` varchar(255) NOT NULL,
  `lesson_number` varchar(255) NOT NULL,
  `title_desc` varchar(255) NOT NULL,
  `description` text NOT NULL,
  `price` int(255) NOT NULL,
  `image` varchar(255) NOT NULL,
  `created` timestamp NOT NULL DEFAULT current_timestamp(),
  `modified` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `item`
--

INSERT INTO `item` (`id`, `video`, `name`, `clock`, `lesson_number`, `title_desc`, `description`, `price`, `image`, `created`, `modified`) VALUES
(1, '1.mp4', 'הקדמה', '15:00', '1', 'סייבר מבוא', 'במבוא נלמד לעשות סייבר ופריצות', 34000, 'apple-iphone-6s.jpeg', '0000-00-00 00:00:00', '2019-01-19 11:13:04'),
(2, '2.mp4', 'בניית מעבדה', '10:00', '2', 'בניית מעבדה', 'פה תבנו מעבדה לצורך בניית ', 0, '', '2020-08-29 11:46:07', '2020-08-29 11:46:07'),
(3, '3.mp4', 'פריצות תקשורת ', '7:00', '3', 'מערך פריצות', 'פה נלמד לעשות פריצות ', 0, '', '2020-08-29 12:12:50', '2020-08-29 12:12:50'),
(4, '4.mp4', 'מערותץ', '12:00', '4', 'פה נלמד לעשות פריצות', 'פה נלמד לעשות פריצות', 0, '', '2020-08-29 12:17:17', '2020-08-29 12:17:17'),
(5, '5.mp4', 'פה נלמד לעשות פריצות', '7:00', '5', 'gogi', 'פה נלמד לעשות פריצות', 0, '', '2020-08-29 12:17:45', '2020-08-29 12:17:45'),
(6, '6.mp4', 'פה נלמד לעשות פריצות', '5:00', '6', 'פה נלמד לעשות פריצות', 'פה נלמד לעשות פריצות', 0, '', '2020-08-29 12:18:21', '2020-08-29 12:18:21'),
(7, '7.mp4', 'פה נלמד לעשות פריצות', '5:24', '7', 'פה נלמד לעשות פריצות', 'פה נלמד לעשות פריצות', 0, '', '2020-08-29 12:18:47', '2020-08-29 12:18:47');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `item`
--
ALTER TABLE `item`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `item`
--
ALTER TABLE `item`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12345680;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
