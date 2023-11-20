-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 20, 2023 at 11:04 AM
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
-- Database: `lab_ajax`
--

-- --------------------------------------------------------

--
-- Table structure for table `employeeinfo`
--

CREATE TABLE `employeeinfo` (
  `EmployeeName` varchar(100) NOT NULL,
  `CompanyName` varchar(100) NOT NULL,
  `EmployeeNumber` varchar(100) NOT NULL,
  `EmployeeUserName` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `employeeinfo`
--

INSERT INTO `employeeinfo` (`EmployeeName`, `CompanyName`, `EmployeeNumber`, `EmployeeUserName`) VALUES
('aaaaaaaaa', 'ahasan lt', '01556789468', 'asifa_2'),
(' asif', 'ahasan ltd', '01556789468', 'bob');

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

CREATE TABLE `login` (
  `UserName` varchar(100) NOT NULL,
  `UserType` varchar(100) NOT NULL,
  `Password` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `login`
--

INSERT INTO `login` (`UserName`, `UserType`, `Password`) VALUES
('AR', 'Admin', '546'),
('asifa_2', 'Employee', '123456'),
('bob', 'Employee', '123456');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `employeeinfo`
--
ALTER TABLE `employeeinfo`
  ADD PRIMARY KEY (`EmployeeUserName`);

--
-- Indexes for table `login`
--
ALTER TABLE `login`
  ADD PRIMARY KEY (`UserName`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
