-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 02, 2023 at 05:31 PM
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
-- Database: `form_data`
--

-- --------------------------------------------------------

--
-- Table structure for table `login_data`
--

CREATE TABLE `login_data` (
  `id` int(11) NOT NULL,
  `email` varchar(255) NOT NULL,
  `pass` varchar(50) NOT NULL,
  `name` varchar(255) NOT NULL,
  `user_role` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `login_data`
--

INSERT INTO `login_data` (`id`, `email`, `pass`, `name`, `user_role`) VALUES
(19, 'abc@gmail.com', 'ea5c0fd3bfbd258c6798b044fae866ef', 'parth', NULL),
(21, 'harpesh@gmail.com', 'cf0e8be6fb2155ea7b67b53675a0d8bc', 'ddwefwfew', NULL),
(28, 'patel@gmail.com', 'c58c3b2b1bbfef9392667015afd7c979', 'patel', NULL),
(45, 'harshgandhi2001@yahoo.com', 'd41d8cd98f00b204e9800998ecf8427e', 'gandhi', NULL),
(46, 'harshgandhi831@gmail.com', 'e807f1fcf82d132f9bb018ca6738a19f', 'harsh', NULL),
(49, 'manavofficial27@gmail.com', '60d2d9d8c2a9ba515dc5284731382375', 'manav', NULL),
(55, 'abc@gmail', '4f265a2aaa7b23109cb58f25b0eab4f5', 'parth', NULL),
(81, 'patelparth@gmail.com', '4f265a2aaa7b23109cb58f25b0eab4f5', 'patel', NULL),
(96, 'parth@gmail.com', 'e807f1fcf82d132f9bb018ca6738a19f', 'parth', 'admin'),
(97, 'patelraj6114@gmail.com', 'e807f1fcf82d132f9bb018ca6738a19f', 'patel raj', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `reset_password`
--

CREATE TABLE `reset_password` (
  `id` int(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `otp` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `reset_password`
--

INSERT INTO `reset_password` (`id`, `email`, `otp`) VALUES
(77, 'harshgandhi831@gmail.com', '718977'),
(78, 'harshgandhi831@gmail.com', '221564'),
(79, 'harshgandhi831@gmail.com', '404135'),
(80, 'harshgandhi831@gmail.com', '323865'),
(81, 'harpesh@gmail.com', '802493'),
(82, 'harpesh@gmail.com', '409082'),
(83, 'harpesh@gmail.com', '362783'),
(84, 'harshgandhi831@gmail.com', '257257'),
(85, 'harshgandhi831@gmail.com', '977075'),
(86, 'harshgandhi831@gmail.com', '900610'),
(87, 'harshgandhi831@gmail.com', '961249'),
(88, 'harshgandhi831@gmail.com', '244113'),
(89, 'harshgandhi831@gmail.com', '104962'),
(90, 'harshgandhi831@gmail.com', '144259'),
(91, 'harshgandhi831@gmail.com', '246682'),
(92, 'harshgandhi831@gmail.com', '555891'),
(93, 'harshgandhi831@gmail.com', '478931'),
(94, 'harshgandhi831@gmail.com', '635552'),
(95, 'harshgandhi2001@yahoo.com', '873784'),
(96, 'harshgandhi831@gmail.com', '357535'),
(97, 'harshgandhi831@gmail.com', '730009'),
(98, 'harshgandhi831@gmail.com', '636915'),
(99, 'harshgandhi831@gmail.com', '243853'),
(100, 'harpesh@gmail.com', '982208'),
(101, 'harpesh@gmail.com', '436232'),
(102, 'xyzess@gmail.com', '985716'),
(103, 'harpesh@gmail.com', '219174'),
(104, 'abc@gmail.com', '959715'),
(105, 'abc@gmail.com', '203621'),
(106, 'abc@gmail.com', '340786'),
(107, '123@gmail.com', '362672'),
(108, '123@gmail.com', '480591'),
(109, 'abc@gmail.com', '890918'),
(110, 'abc@gmail.com', '848364'),
(111, 'abc@gmail.com', '712100'),
(112, 'abc@gmail.com', '440102'),
(113, 'abc@gmail.com', '739185'),
(114, 'abc@gmail.com', '766062'),
(115, 'abc@gmail.com', '448755'),
(116, 'abc@gmail.com', '856797'),
(117, 'abc@gmail.com', '402528'),
(118, 'abc@gmail.com', '331051'),
(119, 'abc@gmail.com', '536580'),
(120, 'abc@gmail.com', '751217'),
(121, 'abc@gmail.com', '982841'),
(122, 'abc@gmail.com', '643186'),
(123, 'abc@gmail.com', '227829'),
(124, 'abc@gmail.com', '358622'),
(125, 'abc@gmail.com', '532061'),
(126, 'abc@gmail.com', '186752'),
(127, 'abc@gmail.com', '833567'),
(128, 'harshgandhi831@gmail.com', '156076'),
(129, 'harshgandhi831@gmail.com', '914212'),
(130, 'harshgandhi831@gmail.com', '247841'),
(131, 'parth@gmail.com', '163949'),
(132, 'parth@gmail.com', '337761'),
(133, 'harshgandhi831@gmail.com', '281736'),
(135, 'abc@gmail.com', '975405');

-- --------------------------------------------------------

--
-- Table structure for table `user_list`
--

CREATE TABLE `user_list` (
  `id` int(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `mo_number` int(10) NOT NULL,
  `address` varchar(255) NOT NULL,
  `image` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `user_list`
--

INSERT INTO `user_list` (`id`, `name`, `email`, `mo_number`, `address`, `image`) VALUES
(107, 'parth', 'patelparthjayantilal93@gmail.com', 1234567890, 'kotadiya bungalo Opp Old Garam Panchayat', 'image 2.jpg'),
(108, 'harsh', 'harshgandhi831@gmail.com', 2147483647, 'ahemdabad', 'image 4.jpg'),
(109, 'harpesh', 'harpesh@gmail.com', 1234567890, 'palanpur', 'image 4.jpg'),
(110, 'parth', 'parth@gmail.com', 1234567890, 'kumbhalmer', 'image 2.jpg'),
(117, 'jayantilal', 'patelparthjayantilal93@gmail.com', 1234567890, 'kotadiya bungalo Opp Old Garam Panchayat', 'image 2.jpg'),
(119, 'jayantilal', 'abcxyz.@gmail.com', 1234567890, 'kotadiya bungalo Opp Old Garam Panchayat', 'image 4.jpg'),
(120, 'jayantilal', 'xyzabc@gmail.com', 1234567890, 'kotadiya bungalo Opp Old Garam Panchayat', 'image 4.jpg'),
(125, 'ayush', 'ayush@gmail.com', 1234567890, 'kotadiya bungalo Opp Old Garam Panchayat', 'image 2.jpg'),
(126, 'manav', 'manavofficial27@gmail.com', 1234567890, 'kumbhalmer', 'image 4.jpg'),
(127, 'patel raj', 'patelraj6114@gmail.com', 1234567890, 'asdfghjk', 'image 2.jpg');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `login_data`
--
ALTER TABLE `login_data`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id` (`id`);

--
-- Indexes for table `reset_password`
--
ALTER TABLE `reset_password`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user_list`
--
ALTER TABLE `user_list`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `login_data`
--
ALTER TABLE `login_data`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=98;

--
-- AUTO_INCREMENT for table `reset_password`
--
ALTER TABLE `reset_password`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=136;

--
-- AUTO_INCREMENT for table `user_list`
--
ALTER TABLE `user_list`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=128;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
