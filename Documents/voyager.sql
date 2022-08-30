-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 29, 2022 at 04:51 AM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 8.1.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `voyager`
--

-- --------------------------------------------------------

--
-- Table structure for table `booking`
--

CREATE TABLE `booking` (
  `User_ID` int(10) DEFAULT NULL,
  `Bus_ID` int(10) DEFAULT NULL,
  `Booking_ID` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `booking`
--

INSERT INTO `booking` (`User_ID`, `Bus_ID`, `Booking_ID`) VALUES
(1111, 101, 99),
(6666, 2001, 199),
(2222, 201, 399),
(9999, 109, 994),
(3333, 301, 999),
(8888, 105, 1199),
(0, 901, 8799),
(4444, 809, 9009),
(5555, 1001, 43299),
(7777, 103, 99876);

-- --------------------------------------------------------

--
-- Table structure for table `bus`
--

CREATE TABLE `bus` (
  `Bus_Name` varchar(20) DEFAULT NULL,
  `Bus_ID` int(10) NOT NULL,
  `Route_ID` int(10) DEFAULT NULL,
  `Type` varchar(25) DEFAULT NULL,
  `Seat_lft` int(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `bus`
--

INSERT INTO `bus` (`Bus_Name`, `Bus_ID`, `Route_ID`, `Type`, `Seat_lft`) VALUES
('RIDE ROSE', 101, 336, 'ac', 20),
('RUNNER', 103, 38836, 'non-ac', 6),
('PARIS PARADISE', 201, 346, 'non-ac', 12),
('DREAM LINE', 301, 3366, 'ac', 6),
('WEBB', 336, 396, 'AC', 25),
('accent', 459, 3136, 'AC', 7),
('deliver', 505, 38826, 'AC', 7),
('quit', 526, 396, 'NON AC', 9),
('smooth', 596, 3336, 'NON AC', 12),
('rhythm', 607, 3136, 'NON AC', 20),
('happen', 677, 3336, 'AC', 10),
('adopt', 695, 396, 'AC', 21),
('nationalist', 768, 38826, 'AC', 9),
('pick', 787, 3136, 'AC', 5),
('response', 792, 38826, 'NON AC', 14),
('KING', 809, 3136, 'ac', 10),
('STAR TRAVEL', 901, 396, 'non-ac', 5),
('consensus', 936, 336, 'NON AC', 5),
('flower', 940, 3386, 'AC', 11),
('marble', 968, 3136, 'NON AC', 20),
('ROYAL COACH', 1001, 3386, 'non-ac', 13),
('grip', 1055, 3336, 'NON AC', 11),
('news', 1072, 346, 'NON AC', 20),
('king', 1100, 3386, 'NON AC', 11),
('earthquake', 1121, 3386, 'NON AC', 5),
('professor', 1124, 336, 'NON AC', 11),
('rugby', 1138, 3136, 'AC', 14),
('cemetery', 1293, 38826, 'AC', 6),
('scan', 1303, 3336, 'AC', 6),
('color-blind', 1385, 336, 'AC', 20),
('blame', 1403, 3136, 'NON AC', 8),
('my', 1420, 396, 'AC', 7),
('lamp', 1457, 3336, 'AC', 9),
('regulation', 1525, 336, 'AC', 19),
('transition', 1589, 336, 'NON AC', 18),
('calculation', 1740, 3386, 'NON AC', 14),
('exploit', 1771, 3136, 'NON AC', 6),
('gem', 1786, 3386, 'AC', 17),
('stem', 1797, 336, 'AC', 12),
('evoke', 1812, 346, 'AC', 7),
('bark', 1849, 346, 'AC', 6),
('attachment', 1862, 336, 'AC', 19),
('salvation', 1946, 346, 'AC', 13),
('paint', 1979, 3136, 'NON AC', 17),
('BLUE BIRD', 2001, 3336, 'ac', 9),
('small', 2037, 38826, 'NON AC', 11),
('modest', 2064, 3136, 'AC', 9),
('battery', 2074, 38826, 'AC', 7),
('mist', 2079, 396, 'NON AC', 21),
('reveal', 2108, 336, 'AC', 10),
('crusade', 2162, 336, 'AC', 8),
('sensitivity', 2212, 346, 'NON AC', 19),
('bell', 2408, 38826, 'AC', 11),
('ward', 2458, 336, 'NON AC', 11),
('broken', 2525, 396, 'AC', 12),
('date', 2532, 3136, 'AC', 21),
('arise', 2565, 3136, 'NON AC', 17),
('DARK F', 5217, 336, 'AC', 8),
('BWRT', 5463, 38826, 'AC', 21),
('J LINE', 7898, 3386, 'AC', 12),
('GOLDEN CHAIR', 9878, 396, 'NON AC', 3),
('transition', 15890, 336, 'NON AC', 18),
('crown', 18409, 346, 'AC', 20);

-- --------------------------------------------------------

--
-- Table structure for table `route`
--

CREATE TABLE `route` (
  `R_ID` int(10) NOT NULL,
  `Staring` varchar(25) DEFAULT NULL,
  `Destination` varchar(25) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `route`
--

INSERT INTO `route` (`R_ID`, `Staring`, `Destination`) VALUES
(336, 'Uttara', 'Badda'),
(346, 'Azimpur', 'Gabtoli'),
(396, 'Norda', 'Kilkhet'),
(3136, 'Basundhara', 'Gazipur'),
(3336, 'Gabtoli', 'Baridhara'),
(3366, 'Uttara', 'Gulshan'),
(3386, 'Mirpur', 'Badda'),
(38826, 'Nilkhet', 'Mirpur'),
(111661, 'Norda', 'Kilkhet'),
(114161, 'Azimpur', 'Gabtoli'),
(115161, 'Uttara', 'Gulshan'),
(116161, 'Basundhara', 'Gazipur'),
(1114461, 'Gabtoli', 'Baridhara');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `Name` varchar(20) DEFAULT NULL,
  `User_ID` int(10) NOT NULL,
  `pin` int(10) DEFAULT NULL,
  `Email` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`Name`, `User_ID`, `pin`, `Email`) VALUES
('Atim', 0, 181920, 'a@voyager.com'),
('Tom', 1111, 121314, 't@voyager.com'),
('Oram', 2222, 151617, 'o@voyager.com'),
('Moris', 3333, 242526, 'm@voyager.com'),
('Evan', 4444, 303132, 'e@voyager.com'),
('Roger', 5555, 212223, 'r@voyager.com'),
('Steven', 6666, 1234, 's@voyager.com'),
('Jon', 7777, 5678, 'jon@voyager.com'),
('David', 8888, 91011, 'd@voyager.com'),
('Pablo', 9999, 272829, 'p@voyager.com'),
(NULL, 323635, 852852, 'email@gmail.com'),
(NULL, 2012691, 1104, 'email@gmail.com');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `booking`
--
ALTER TABLE `booking`
  ADD PRIMARY KEY (`Booking_ID`);

--
-- Indexes for table `bus`
--
ALTER TABLE `bus`
  ADD PRIMARY KEY (`Bus_ID`);

--
-- Indexes for table `route`
--
ALTER TABLE `route`
  ADD PRIMARY KEY (`R_ID`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`User_ID`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
