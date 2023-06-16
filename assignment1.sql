-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 17, 2023 at 12:46 AM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `assignment1`
--

-- --------------------------------------------------------

--
-- Table structure for table `school_band`
--

CREATE TABLE `school_band` (
  `id` int(5) NOT NULL,
  `fname` varchar(20) NOT NULL,
  `lname` varchar(20) NOT NULL,
  `age` int(2) NOT NULL,
  `instrument` varchar(100) NOT NULL,
  `bname` varchar(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `school_band`
--

INSERT INTO `school_band` (`id`, `fname`, `lname`, `age`, `instrument`, `bname`) VALUES
(1, 'Michael', 'Nikishin', 19, 'Piano Electric Guitar', 'Melodic Blues'),
(2, 'A', 'A', 23, 'Piano Electric Guitar Saxophone Bass Guitar Drums', 'Classy Jazz'),
(3, 'John', 'Smith', 19, 'Electric Guitar Drums', 'Dizzy Rock'),
(4, 'Aaron', 'Black', 20, 'Saxophone Drums', 'Melodic Blues'),
(5, 'New', 'User', 99, 'Drums', 'Dizzy Rock'),
(6, 'Hi', 'There', 9, 'Electric Guitar', 'Melodic Blues'),
(7, 'Test', 'Test', 16, 'Saxophone', 'Classy Jazz');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `school_band`
--
ALTER TABLE `school_band`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `school_band`
--
ALTER TABLE `school_band`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
