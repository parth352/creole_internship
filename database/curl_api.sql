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
-- Database: `curl_api`
--

-- --------------------------------------------------------

--
-- Table structure for table `basic_info`
--

CREATE TABLE `basic_info` (
  `id` int(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `address` varchar(255) NOT NULL,
  `phone_number` int(10) NOT NULL,
  `image` varchar(255) NOT NULL,
  `create_time` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `basic_info`
--

INSERT INTO `basic_info` (`id`, `name`, `email`, `address`, `phone_number`, `image`, `create_time`) VALUES
(1, 'sdfgh', 'abc@gmail', 'dfgh', 123456789, '', '2023-02-28 12:01:16'),
(100, 'parth', 'parth@gmail.com', 'kumbhalmer', 1234567890, 'image 4.jpg', '2023-03-02 12:28:29'),
(101, 'parth', 'parth@gmail.com', 'kumbhalmer', 1234567890, 'image 4.jpg', '2023-03-02 12:38:05'),
(102, 'parth', 'parth@gmail.com', 'kumbhalmer', 1234567890, 'image 4.jpg', '2023-03-02 16:22:56');

-- --------------------------------------------------------

--
-- Table structure for table `emp`
--

CREATE TABLE `emp` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `skills` varchar(255) NOT NULL,
  `address` varchar(255) NOT NULL,
  `designation` varchar(255) NOT NULL,
  `age` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

-- --------------------------------------------------------

--
-- Table structure for table `generate_token`
--

CREATE TABLE `generate_token` (
  `id` int(255) NOT NULL,
  `user_id` int(255) NOT NULL,
  `access_token` varchar(255) NOT NULL,
  `refresh_token` varchar(255) NOT NULL,
  `create_time` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `update_time` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `generate_token`
--

INSERT INTO `generate_token` (`id`, `user_id`, `access_token`, `refresh_token`, `create_time`, `update_time`) VALUES
(20, 44, 'eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJpZCI6IjQ0IiwiZXhwaXJlIjoxNjc3Nzc0NTcxfQ.kmqz6An-zGQ9qfU6rmNTpIp8KmPkg3QuS-Oc-uRo9_A', 'eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJpZCI6IjQ0IiwiZXhwaXJlIjoxNjc3Nzc1NjUxfQ.KYjdjYVYybCWeSoxkIaFEhF3o0CiZhVqiMQ4mXnHAN0', '2023-03-02 16:27:31', '2023-03-02 17:27:31');

-- --------------------------------------------------------

--
-- Table structure for table `register_user`
--

CREATE TABLE `register_user` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `token` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `register_user`
--

INSERT INTO `register_user` (`id`, `name`, `email`, `password`, `token`) VALUES
(44, 'parth', 'abc@gmail.com', '123456789', 'eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJpZCI6IjQ0IiwibmFtZSI6InBhcnRoIiwiZW1haWwiOiJhYmNAZ21haWwuY29tIiwiZXhwaXJlIjoxNjc3NzQxNzgyfQ.lZo12hl4yoYpQoBCf6OMcP0lfFfdcRqxIHhpAsjOVFo'),
(50, 'harsh', 'harsh@gmail.com', '123456789', ''),
(51, 'harsh', 'harsh@gmail.com', '123456789', ''),
(52, 'harsh', 'harsh@gmail.com', '123456789', ''),
(53, 'harsh', 'harsh@gmail.com', '123456789', '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `basic_info`
--
ALTER TABLE `basic_info`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `generate_token`
--
ALTER TABLE `generate_token`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `register_user`
--
ALTER TABLE `register_user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `basic_info`
--
ALTER TABLE `basic_info`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=103;

--
-- AUTO_INCREMENT for table `generate_token`
--
ALTER TABLE `generate_token`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `register_user`
--
ALTER TABLE `register_user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=54;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
