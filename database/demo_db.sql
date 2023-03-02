-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 02, 2023 at 05:32 PM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `demo_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `employe_info`
--

CREATE TABLE `employe_info` (
  `id` int(10) NOT NULL,
  `firstname` varchar(30) DEFAULT NULL,
  `lastname` varchar(30) NOT NULL,
  `email` varchar(50) NOT NULL,
  `reg_date` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `employe_info`
--

INSERT INTO `employe_info` (`id`, `firstname`, `lastname`, `email`, `reg_date`) VALUES
(1, 'Narsinhbhai', 'patel', '123@gmail.com', '0000-00-00 00:00:00'),
(2, 'jayantilal', 'patel', 'patelpart@gmail.com', '0000-00-00 00:00:00'),
(3, 'sss', 'patel', 'patelpart@gmail.com', '2023-02-07 09:38:57'),
(6, 'harpesh', 'patel', '123@gmail.com', '0000-00-00 00:00:00'),
(26, 'jayantilal', 'patel', 'patelparthjayantilal93@gmail.com', '0000-00-00 00:00:00'),
(30, 'jayantilal', 'patel', 'patelparthjayantilal93@gmail.com', '0000-00-00 00:00:00'),
(31, 'jayantilal', 'patel', 'patelparthjayantilal93@gmail.com', '0000-00-00 00:00:00'),
(32, 'jayantilal', 'patel', 'patelparthjayantilal93@gmail.com', '0000-00-00 00:00:00'),
(33, 'jayantilal', 'patel', 'patelparthjayantilal93@gmail.com', '0000-00-00 00:00:00'),
(34, 'jayantilal', 'patel', 'patelparthjayantilal93@gmail.com', '0000-00-00 00:00:00'),
(35, 'jayantilal', 'patel', 'patelparthjayantilal93@gmail.com', '0000-00-00 00:00:00'),
(36, 'jayantilal', 'patel', 'patelparthjayantilal93@gmail.com', '0000-00-00 00:00:00'),
(37, 'jayantilal', 'patel', 'patelparthjayantilal93@gmail.com', '0000-00-00 00:00:00'),
(38, 'jayantilal', 'patel', 'patelparthjayantilal93@gmail.com', '0000-00-00 00:00:00'),
(39, 'jayantilal', 'patel', 'patelparthjayantilal93@gmail.com', '0000-00-00 00:00:00'),
(40, 'jayantilal', 'patel', 'patelparthjayantilal93@gmail.com', '0000-00-00 00:00:00'),
(41, 'John', 'Doe', 'john@example.com', '2023-02-07 06:47:52'),
(42, 'parth', 'patel', '123@gmail.com', '2023-02-07 06:50:58'),
(43, 'parth', 'patel', '123@gmail.com', '2023-02-07 06:51:23'),
(44, 'parth', 'patel', '123@gmail.com', '2023-02-07 06:51:55'),
(45, 'parth', 'patel', '123@gmail.com', '2023-02-07 06:51:56'),
(46, 'parth', 'patel', '123@gmail.com', '2023-02-07 06:51:56'),
(47, 'parth', 'patel', '123@gmail.com', '2023-02-07 06:51:56'),
(48, 'yash', 'patel', '1@.com', '0000-00-00 00:00:00'),
(49, 'ayush', 'prajapati', '2@.com', '0000-00-00 00:00:00'),
(50, 'kush', 'patel', '3@.com', '0000-00-00 00:00:00'),
(51, 'yash', 'patel', '1@.com', '0000-00-00 00:00:00'),
(52, 'ayush', 'prajapati', '2@.com', '0000-00-00 00:00:00'),
(53, 'kush', 'patel', '3@.com', '0000-00-00 00:00:00'),
(54, 'yash', 'patel', '1@.com', '0000-00-00 00:00:00'),
(55, 'ayush', 'prajapati', '2@.com', '0000-00-00 00:00:00'),
(56, 'kush', 'patel', '3@.com', '0000-00-00 00:00:00'),
(57, 'yash', 'patel', '1@.com', '0000-00-00 00:00:00'),
(58, 'ayush', 'prajapati', '2@.com', '0000-00-00 00:00:00'),
(59, 'kush', 'patel', '3@.com', '0000-00-00 00:00:00'),
(60, 'yash', 'patel', '1@.com', '0000-00-00 00:00:00'),
(61, 'ayush', 'prajapati', '2@.com', '0000-00-00 00:00:00'),
(62, 'kush', 'patel', '3@.com', '0000-00-00 00:00:00'),
(69, 'jayantilal', 'patel', 'patelparthjayantilal93@gmail.com', '0000-00-00 00:00:00'),
(82, 'jayantilal', 'patel', 'patelparthjayantilal93@gmail.com', '0000-00-00 00:00:00'),
(83, 'harsh', 'gandhi', 'harsh@gmail.com', '0000-00-00 00:00:00'),
(84, 'jayantilal', 'patel', 'patelparthjayantilal93@gmail.com', '0000-00-00 00:00:00'),
(85, 'jayantilal', 'patel', 'patelparthjayantilal93@gmail.com', '0000-00-00 00:00:00'),
(86, 'jayantilal', 'patel', 'patelparthjayantilal93@gmail.com', '0000-00-00 00:00:00');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `employe_info`
--
ALTER TABLE `employe_info`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `employe_info`
--
ALTER TABLE `employe_info`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=87;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
