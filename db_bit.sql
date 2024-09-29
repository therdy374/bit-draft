-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 15, 2024 at 06:39 AM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.0.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_bit`
--

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `user_id` varchar(255) NOT NULL,
  `user_password` varchar(255) NOT NULL,
  `realname` varchar(255) NOT NULL,
  `contact` int(12) NOT NULL,
  `bank_name` varchar(255) NOT NULL,
  `name_depositor` varchar(255) NOT NULL,
  `user_credit` varchar(255) NOT NULL,
  `account_number` int(255) NOT NULL,
  `referal_code` varchar(255) NOT NULL,
  `affiliated_agent_code` varchar(255) NOT NULL,
  `is_ban` int(11) NOT NULL DEFAULT 0 COMMENT '0=active, 1=banned',
  `reg_date` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `user_id`, `user_password`, `realname`, `contact`, `bank_name`, `name_depositor`, `user_credit`, `account_number`, `referal_code`, `affiliated_agent_code`, `is_ban`, `reg_date`) VALUES
(1, 'therd', '', '$2y$10$y/pX8hhZQeBCzln68YRrV.2wYGKGFGRdUaOfNr0y89UtdLAb3Ynby', 'Testing 123', 2147483647, 'asd', 'asd', '1600000', 123123, '99369F91', '', 0, '2024-09-07 15:00:06');

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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
