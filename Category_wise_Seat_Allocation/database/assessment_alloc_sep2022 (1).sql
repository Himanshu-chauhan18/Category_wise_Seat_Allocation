-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 17, 2022 at 06:21 AM
-- Server version: 10.4.18-MariaDB
-- PHP Version: 8.0.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `assessment_alloc_sep2022`
--

-- --------------------------------------------------------

--
-- Table structure for table `categorymaster`
--

CREATE TABLE `categorymaster` (
  `Id` int(50) NOT NULL,
  `CategoryName` varchar(225) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `categorymaster`
--

INSERT INTO `categorymaster` (`Id`, `CategoryName`) VALUES
(1, 'Economy'),
(2, 'Premium'),
(3, 'Supreme Premium'),
(4, 'Ladies Special'),
(5, 'Deluxe'),
(6, 'Other');

-- --------------------------------------------------------

--
-- Table structure for table `categorywiseallocation`
--

CREATE TABLE `categorywiseallocation` (
  `Id` int(11) NOT NULL,
  `AllocationDateId` int(11) NOT NULL,
  `CategoryId` int(11) NOT NULL,
  `SeatsCount` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `categorywiseallocation`
--

INSERT INTO `categorywiseallocation` (`Id`, `AllocationDateId`, `CategoryId`, `SeatsCount`) VALUES
(1, 1, 2, 40),
(2, 1, 3, 20),
(3, 1, 6, 25),
(4, 1, 4, 20),
(5, 2, 6, 25),
(6, 2, 1, 150),
(7, 2, 5, 200),
(8, 2, 3, 15),
(9, 3, 5, 20),
(10, 3, 1, 20),
(11, 3, 2, 20),
(12, 3, 6, 20),
(13, 4, 4, 40),
(14, 4, 5, 60),
(15, 4, 3, 90),
(16, 4, 1, 60);

-- --------------------------------------------------------

--
-- Table structure for table `dateallocation`
--

CREATE TABLE `dateallocation` (
  `Id` int(11) NOT NULL,
  `AllocationDate` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `dateallocation`
--

INSERT INTO `dateallocation` (`Id`, `AllocationDate`) VALUES
(1, '2022-09-13'),
(2, '2022-09-20'),
(3, '2022-08-24'),
(4, '2022-09-08');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `categorymaster`
--
ALTER TABLE `categorymaster`
  ADD PRIMARY KEY (`Id`);

--
-- Indexes for table `categorywiseallocation`
--
ALTER TABLE `categorywiseallocation`
  ADD PRIMARY KEY (`Id`);

--
-- Indexes for table `dateallocation`
--
ALTER TABLE `dateallocation`
  ADD PRIMARY KEY (`Id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `categorymaster`
--
ALTER TABLE `categorymaster`
  MODIFY `Id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `categorywiseallocation`
--
ALTER TABLE `categorywiseallocation`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `dateallocation`
--
ALTER TABLE `dateallocation`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
