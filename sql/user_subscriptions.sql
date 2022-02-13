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
-- Table structure for table `user_subscriptions`
--

CREATE TABLE `user_subscriptions` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL DEFAULT 0,
  `payment_method` enum('paypal') COLLATE utf8_unicode_ci NOT NULL DEFAULT 'paypal',
  `validity` int(5) NOT NULL COMMENT 'in month(s)',
  `valid_from` datetime NOT NULL,
  `valid_to` datetime NOT NULL,
  `item_number` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `txn_id` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `payment_gross` float(10,2) NOT NULL,
  `currency_code` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  `subscr_id` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `payer_email` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `payment_status` varchar(50) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `user_subscriptions`
--

INSERT INTO `user_subscriptions` (`id`, `user_id`, `payment_method`, `validity`, `valid_from`, `valid_to`, `item_number`, `txn_id`, `payment_gross`, `currency_code`, `subscr_id`, `payer_email`, `payment_status`) VALUES
(7, 72, 'paypal', 1, '2020-09-20 17:15:58', '2020-10-20 17:15:58', 'MS123456', '0R197380LR3207924', 20.00, 'USD', 'I-LAD4AV7PFGX5', 'gogibloh@gmail.com', 'Pending'),
(8, 74, 'paypal', 2, '2020-11-17 20:21:42', '2020-11-19 20:21:42', '42314', 's3', 234.00, '234', '4352', 'gogi@gmail.com', 'Pending'),
(9, 72, 'paypal', 2, '2020-11-09 20:40:07', '2020-11-25 20:40:07', '564', '345', 3456.00, '34', '34', 'gogi@gmail.com', 'gogi@gmail.com');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `user_subscriptions`
--
ALTER TABLE `user_subscriptions`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `user_subscriptions`
--
ALTER TABLE `user_subscriptions`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
