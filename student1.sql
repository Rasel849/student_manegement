-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 28, 2022 at 04:22 PM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `student1`
--

-- --------------------------------------------------------

--
-- Table structure for table `student_in`
--

CREATE TABLE `student_in` (
  `s_id` int(11) NOT NULL,
  `student_name` varchar(250) NOT NULL,
  `s_dpt` varchar(255) NOT NULL,
  `s_sec` varchar(255) NOT NULL,
  `s_cgpa` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `student_in`
--

INSERT INTO `student_in` (`s_id`, `student_name`, `s_dpt`, `s_sec`, `s_cgpa`) VALUES
(201311011, 'Md Rasel Islam', ' cse', 'A', 3.11),
(201311018, 'sheyasee', ' cse', 'A', 3.89);

-- --------------------------------------------------------

--
-- Table structure for table `s_log`
--

CREATE TABLE `s_log` (
  `id` int(11) NOT NULL,
  `stud_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `s_log`
--

INSERT INTO `s_log` (`id`, `stud_id`) VALUES
(1, 201311011),
(2, 201311011),
(3, 201311011),
(4, 201311018),
(5, 201311018);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `student_in`
--
ALTER TABLE `student_in`
  ADD PRIMARY KEY (`s_id`);

--
-- Indexes for table `s_log`
--
ALTER TABLE `s_log`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `s_log`
--
ALTER TABLE `s_log`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
