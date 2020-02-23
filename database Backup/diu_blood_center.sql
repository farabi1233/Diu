-- phpMyAdmin SQL Dump
-- version 4.8.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 23, 2020 at 10:25 AM
-- Server version: 10.4.8-MariaDB
-- PHP Version: 7.3.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `diu_blood_center`
--

-- --------------------------------------------------------

--
-- Table structure for table `blog`
--

CREATE TABLE `blog` (
  `id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `description` text NOT NULL,
  `date` date NOT NULL,
  `image` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `blog`
--

INSERT INTO `blog` (`id`, `title`, `description`, `date`, `image`) VALUES
(0, 'deg', 'cvzdf', '2020-02-15', 'uploads/533900apofiss.jpg'),
(7, 'abc ', ' adf ', '2020-02-23', 'uploads/627822_2649__a_very_long_ermine___illustration_by_cryptid_creations_ddqw7en-250t.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `blood_group`
--

CREATE TABLE `blood_group` (
  `id` int(11) NOT NULL,
  `blood_group` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `blood_group`
--

INSERT INTO `blood_group` (`id`, `blood_group`) VALUES
(1, 'O+'),
(2, 'A+');

-- --------------------------------------------------------

--
-- Table structure for table `campaign`
--

CREATE TABLE `campaign` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `details` text NOT NULL,
  `start_time` date NOT NULL,
  `end_time` date NOT NULL,
  `location` varchar(100) NOT NULL,
  `image` varchar(333) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `campaign`
--

INSERT INTO `campaign` (`id`, `name`, `details`, `start_time`, `end_time`, `location`, `image`) VALUES
(8, 'rgergreger', ' gggggggggggggggggggggggggg ', '2020-02-22', '2020-02-22', ' gggggggggggggggg ', 'uploads/474758anthonypresley.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `donate`
--

CREATE TABLE `donate` (
  `id` int(11) NOT NULL,
  `user_id` int(50) NOT NULL,
  `date` varchar(33) NOT NULL,
  `venue` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `donate`
--

INSERT INTO `donate` (`id`, `user_id`, `date`, `venue`) VALUES
(1, 1233, '2020-02-20', 'PC'),
(3, 1233, '2020-02-23 ', 'Permanent Campus'),
(4, 1234, '2020-02-23 ', 'Main Campus <');

-- --------------------------------------------------------

--
-- Table structure for table `donate_info`
--

CREATE TABLE `donate_info` (
  `id` int(11) NOT NULL,
  `donor_id` varchar(20) NOT NULL,
  `donation_date` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `donor_list`
--

CREATE TABLE `donor_list` (
  `id` varchar(20) NOT NULL,
  `name` varchar(30) NOT NULL,
  `blood_id` int(11) DEFAULT NULL,
  `age` varchar(3) DEFAULT NULL,
  `gender` varchar(30) NOT NULL,
  `phone` varchar(15) NOT NULL,
  `email` varchar(30) NOT NULL,
  `address` varchar(100) NOT NULL,
  `image` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `donor_list`
--

INSERT INTO `donor_list` (`id`, `name`, `blood_id`, `age`, `gender`, `phone`, `email`, `address`, `image`) VALUES
('1224', 'farabi ', 2, '12', 'others', '+88001944179099', 'hosnain15-1233@diu.edu.bd ', ' 1 rc v ', 'uploads/639943apofiss.jpg'),
('132e', 'mirana', 1, 'awf', '', '01944179099', 'hosnain15-1233@diu.edu.bd', ' qawfdgfhgjh         ', 'uploads/267935anthonypresley.jpg'),
('dfdsf', 'Farabi', 1, '22', '', '+88001944179099', 'md.hosnain@gmail.com', ' dfsdf     ', 'uploads/486381arualmeow.jpg');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `blog`
--
ALTER TABLE `blog`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `blood_group`
--
ALTER TABLE `blood_group`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `campaign`
--
ALTER TABLE `campaign`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `donate`
--
ALTER TABLE `donate`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `donate_info`
--
ALTER TABLE `donate_info`
  ADD PRIMARY KEY (`id`),
  ADD KEY `donor_id` (`donor_id`);

--
-- Indexes for table `donor_list`
--
ALTER TABLE `donor_list`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `id` (`id`),
  ADD KEY `blood_id` (`blood_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `blog`
--
ALTER TABLE `blog`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `blood_group`
--
ALTER TABLE `blood_group`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `campaign`
--
ALTER TABLE `campaign`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `donate`
--
ALTER TABLE `donate`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `donate_info`
--
ALTER TABLE `donate_info`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `donate_info`
--
ALTER TABLE `donate_info`
  ADD CONSTRAINT `donate_info_ibfk_1` FOREIGN KEY (`donor_id`) REFERENCES `donor_list` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `donor_list`
--
ALTER TABLE `donor_list`
  ADD CONSTRAINT `donor_list_ibfk_1` FOREIGN KEY (`blood_id`) REFERENCES `blood_group` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
