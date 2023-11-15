-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 14, 2023 at 11:40 PM
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
-- Database: `hotel_management_system`
--

-- --------------------------------------------------------

--
-- Table structure for table `aboutus`
--

CREATE TABLE `aboutus` (
  `Id` int(100) NOT NULL,
  `AboutUs` varchar(10000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `aboutus`
--

INSERT INTO `aboutus` (`Id`, `AboutUs`) VALUES
(1, 'Pan Pacific Hotels Group is a global hospitality company that owns and/or manages more than 50 hotels, resorts and serviced suites across three brands – Pan Pacific, PARKROYAL COLLECTION, and PARKROYAL – encompassing more than 30 cities across Asia Pacific, North America and Europe. Headquartered in Singapore, it is a member of Singapore-listed UOL Group Limited. \r\n\r\nPan Pacific Hotels and Resorts delivers sincere and graceful service to every guest with a passion for excellence. \r\n\r\nPARKROYAL COLLECTION Hotels & Resorts is driven by our passion for life and sustainability.\r\n\r\nPARKROYAL Hotels & Resorts is distinguished by its passion for people and places, immersing every guest into local and authentic cultures.');

-- --------------------------------------------------------

--
-- Table structure for table `faq`
--

CREATE TABLE `faq` (
  `Id` int(100) NOT NULL,
  `Faq` varchar(10000) NOT NULL,
  `Answer` varchar(5000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `faq`
--

INSERT INTO `faq` (`Id`, `Faq`, `Answer`) VALUES
(1, 'Q; ekfagrshgfljhgljjgh', 'Answer: ksadkfkfkgkrkg');

-- --------------------------------------------------------

--
-- Table structure for table `guestinfo`
--

CREATE TABLE `guestinfo` (
  `GuestId` varchar(100) NOT NULL,
  `GuestName` varchar(100) NOT NULL,
  `GuestEmail` varchar(100) NOT NULL,
  `GuestNumber` varchar(100) NOT NULL,
  `Gender` varchar(100) NOT NULL,
  `GuestUserName` varchar(100) NOT NULL,
  `GuestImg` blob NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `guestinfo`
--

INSERT INTO `guestinfo` (`GuestId`, `GuestName`, `GuestEmail`, `GuestNumber`, `Gender`, `GuestUserName`, `GuestImg`) VALUES
('G-6', ' asif rahman', 'bob@aiub.edu', '01566998777', 'Male', 'ASIF54', ''),
('G-4', ' asif rahma', 'bob@aiub.edu', '01556789468', 'Male', 'bo', ''),
('G-3', ' asif rahman', 'bob@aiub.edu', '01556789468', 'Male', 'bob', ''),
('G-5', 'bob cena', 'bob@aiub.edu', '01566998779', 'Male', 'bob8', ''),
('G-2', 'randy orton', 'nakamura@aiub.edu', '01556789468', 'Male', 'bob9', ''),
('G-1', 'Randy', 'randy@aiub.edu', '01556789468', 'Male', 'randy', '');

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
('AR', 'Admin', '987456123+'),
('ASIF54', 'Guest', '12345678/'),
('asifa2', 'Admin', '123456789/'),
('bob', 'Admin', '123456789*'),
('bob5', 'Admin', '123456789/'),
('bob8', 'Guest', '123456789/'),
('bob9', 'Guest', '456789123/'),
('or', 'Receptionist', '123456789/'),
('orton', 'Admin', '123456789/'),
('randy', 'Guest', '789456123/');

-- --------------------------------------------------------

--
-- Table structure for table `noticeboard`
--

CREATE TABLE `noticeboard` (
  `Id` int(100) NOT NULL,
  `Date` date NOT NULL,
  `Notice` varchar(10000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `noticeboard`
--

INSERT INTO `noticeboard` (`Id`, `Date`, `Notice`) VALUES
(1, '2023-11-14', 'sgjgkjkjkgjnkmgjnm');

-- --------------------------------------------------------

--
-- Table structure for table `salary`
--

CREATE TABLE `salary` (
  `StaffType` varchar(100) NOT NULL,
  `StaffSalary` bigint(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `salary`
--

INSERT INTO `salary` (`StaffType`, `StaffSalary`) VALUES
('Admin', 100000),
('Receptionist', 80000);

-- --------------------------------------------------------

--
-- Table structure for table `salarysheet`
--

CREATE TABLE `salarysheet` (
  `StaffId` varchar(100) NOT NULL,
  `StaffName` varchar(100) NOT NULL,
  `StaffType` varchar(100) NOT NULL,
  `StaffUserName` varchar(100) NOT NULL,
  `StaffSalary` bigint(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `salarysheet`
--

INSERT INTO `salarysheet` (`StaffId`, `StaffName`, `StaffType`, `StaffUserName`, `StaffSalary`) VALUES
('S-1', 'jhon cena', 'Admin', 'AR', 100000),
('S-4', ' seth rolilns', 'Admin', 'asifa2', 100000),
('S-2', 'Bob cena', 'Admin', 'bob', 100000),
('S-3', 'bob rock', 'Admin', 'bob5', 100000),
('S-6', 'randy orton', 'Receptionist', 'or', 80000),
('S-5', 'randy orton', 'Admin', 'orton', 100000);

-- --------------------------------------------------------

--
-- Table structure for table `staffinfo`
--

CREATE TABLE `staffinfo` (
  `StaffId` varchar(100) NOT NULL,
  `StaffName` varchar(100) NOT NULL,
  `StaffEmail` varchar(100) NOT NULL,
  `StaffNumber` varchar(100) NOT NULL,
  `StaffAddress` varchar(100) NOT NULL,
  `StaffType` varchar(100) NOT NULL,
  `Gender` varchar(100) NOT NULL,
  `StaffUserName` varchar(100) NOT NULL,
  `StaffImg` blob NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `staffinfo`
--

INSERT INTO `staffinfo` (`StaffId`, `StaffName`, `StaffEmail`, `StaffNumber`, `StaffAddress`, `StaffType`, `Gender`, `StaffUserName`, `StaffImg`) VALUES
('S-1', 'jhon cena', 'jhon@aiub.edu', '01556789469', '1161/B Rampura', 'Admin', 'Male', 'AR', ''),
('S-4', ' seth rolilns', 'bob@aiub.edu', '01556789468', '1161/B Rampura', 'Admin', 'Male', 'asifa2', ''),
('S-2', 'Bob cena', 'bob@aiub.edu', '01654789999', '1161/B banasree', 'Admin', 'Male', 'bob', ''),
('S-3', 'bob rock', 'bob@aiub.edu', '01556789468', '1161/B Rampura', 'Admin', 'Male', 'bob5', ''),
('S-6', 'randy orton', 'bob@aiub.edu', '01556789468', '1161/B Rampura', 'Receptionist', 'Male', 'or', ''),
('S-5', 'randy orton', 'bob@aiub.edu', '01556789468', '1161/B Rampura', 'Admin', 'Male', 'orton', '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `aboutus`
--
ALTER TABLE `aboutus`
  ADD PRIMARY KEY (`Id`);

--
-- Indexes for table `faq`
--
ALTER TABLE `faq`
  ADD PRIMARY KEY (`Id`);

--
-- Indexes for table `guestinfo`
--
ALTER TABLE `guestinfo`
  ADD PRIMARY KEY (`GuestUserName`);

--
-- Indexes for table `login`
--
ALTER TABLE `login`
  ADD PRIMARY KEY (`UserName`);

--
-- Indexes for table `noticeboard`
--
ALTER TABLE `noticeboard`
  ADD PRIMARY KEY (`Id`);

--
-- Indexes for table `salarysheet`
--
ALTER TABLE `salarysheet`
  ADD PRIMARY KEY (`StaffUserName`);

--
-- Indexes for table `staffinfo`
--
ALTER TABLE `staffinfo`
  ADD PRIMARY KEY (`StaffUserName`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
