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
-- Database: `my_first_database`
--

-- --------------------------------------------------------

--
-- Stand-in structure for view `demo_view`
-- (See below for the actual view)
--
CREATE TABLE `demo_view` (
`employe_id` int(11)
,`employe_name` varchar(255)
);

-- --------------------------------------------------------

--
-- Table structure for table `employe_info`
--

CREATE TABLE `employe_info` (
  `employe_id` int(11) NOT NULL,
  `employe_name` varchar(255) DEFAULT NULL,
  `employe_position` varchar(255) DEFAULT NULL,
  `employe_address` varchar(255) DEFAULT 'Ahemdabad',
  `employe_salary` varchar(10) DEFAULT NULL,
  `employe_extra_info` varchar(255) NOT NULL
) ;

--
-- Dumping data for table `employe_info`
--

INSERT INTO `employe_info` (`employe_id`, `employe_name`, `employe_position`, `employe_address`, `employe_salary`, `employe_extra_info`) VALUES
(1, 'parth', 'intern', 'kumbhalmer', '50000', 'gcet_clg'),
(2, 'harpesh', 'hr', 'Ahemdabad', '10000', 'abc'),
(3, 'manave', 'developer', 'Ahemdabad', '200000', 'sadsa'),
(4, 'ayush', 'intern', 'Ahemdabad', '100000', 'dwwdwd'),
(5, 'kush', 'intern', 'Ahemdabad', '1000000', 'sdsd');

-- --------------------------------------------------------

--
-- Table structure for table `order_info`
--

CREATE TABLE `order_info` (
  `order_id` int(11) NOT NULL,
  `employe_id` int(11) NOT NULL,
  `order_name` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `order_info`
--

INSERT INTO `order_info` (`order_id`, `employe_id`, `order_name`) VALUES
(1, 1, 'laptop'),
(2, 1, 'car'),
(3, 3, 'laptop'),
(4, 1, 'lamborginy');

-- --------------------------------------------------------

--
-- Structure for view `demo_view`
--
DROP TABLE IF EXISTS `demo_view`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `demo_view`  AS SELECT `employe_info`.`employe_id` AS `employe_id`, `employe_info`.`employe_name` AS `employe_name` FROM `employe_info``employe_info`  ;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `employe_info`
--
ALTER TABLE `employe_info`
  ADD PRIMARY KEY (`employe_id`),
  ADD UNIQUE KEY `idx_employe_id` (`employe_id`),
  ADD UNIQUE KEY `employe_id` (`employe_id`,`employe_name`,`employe_position`,`employe_address`,`employe_salary`,`employe_extra_info`) USING HASH,
  ADD KEY `idx_name` (`employe_name`),
  ADD KEY `idx_employe_name` (`employe_name`);

--
-- Indexes for table `order_info`
--
ALTER TABLE `order_info`
  ADD KEY `fk_order_info` (`employe_id`);

--
-- Constraints for dumped tables
--

--
-- Constraints for table `order_info`
--
ALTER TABLE `order_info`
  ADD CONSTRAINT `fk_order_info` FOREIGN KEY (`employe_id`) REFERENCES `employe_info` (`employe_id`),
  ADD CONSTRAINT `order_info_ibfk_1` FOREIGN KEY (`employe_id`) REFERENCES `employe_info` (`employe_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
