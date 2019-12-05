-- phpMyAdmin SQL Dump
-- version 4.6.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 20, 2019 at 04:53 AM
-- Server version: 5.7.14
-- PHP Version: 5.6.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `furniture_renting`
--

DELIMITER $$
--
-- Procedures
--
CREATE DEFINER=`root`@`localhost` PROCEDURE `GetBill` (IN `n` VARCHAR(5))  NO SQL
BEGIN
select R.Rent_ID ,
R.Customer_name,
F.price_per_term*R.Term*R.No_of_pieces
from furniture F,rents R
where R.Furniture_ID=F.Furniture_ID AND R.Rent_ID=n;
END$$

DELIMITER ;

-- --------------------------------------------------------

--
-- Table structure for table `furniture`
--

CREATE TABLE `furniture` (
  `Furniture_ID` varchar(5) NOT NULL,
  `Furniture` varchar(20) DEFAULT NULL,
  `Showroom_ID` varchar(5) DEFAULT NULL,
  `No_of_pieces` int(3) DEFAULT NULL,
  `price_per_term` int(6) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `furniture`
--

INSERT INTO `furniture` (`Furniture_ID`, `Furniture`, `Showroom_ID`, `No_of_pieces`, `price_per_term`) VALUES
('F001', 'Chair', 'S001', 25, 1500),
('F002', 'Sofa', 'S001', 20, 7500),
('F003', 'Cot', 'S001', 20, 15000),
('F004', 'Chair', 'S002', 20, 1500),
('F005', 'Chair', 'S003', 20, 1500),
('F006', 'Sofa', 'S002', 20, 7500),
('F007', 'Cot', 'S002', 20, 15000),
('F008', 'Sofa', 'S003', 20, 7500),
('F009', 'Cot', 'S003', 20, 15000),
('F010', 'Chair', 'S004', 20, 1500),
('F011', 'Sofa', 'S004', 20, 7500),
('F012', 'Cot', 'S004', 20, 15000),
('F013', 'Chair', 'S005', 20, 1500),
('F014', 'Sofa', 'S005', 20, 7500),
('F015', 'Cot', 'S005', 20, 15000);

-- --------------------------------------------------------

--
-- Table structure for table `rents`
--

CREATE TABLE `rents` (
  `Rent_ID` varchar(5) NOT NULL,
  `Customer_name` varchar(20) DEFAULT NULL,
  `Customer_Address` varchar(20) DEFAULT NULL,
  `Customer_Phone` varchar(10) DEFAULT NULL,
  `Furniture_ID` varchar(5) DEFAULT NULL,
  `Showroom_ID` varchar(5) DEFAULT NULL,
  `No_of_pieces` int(3) DEFAULT NULL,
  `Term` int(6) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `rents`
--

INSERT INTO `rents` (`Rent_ID`, `Customer_name`, `Customer_Address`, `Customer_Phone`, `Furniture_ID`, `Showroom_ID`, `No_of_pieces`, `Term`) VALUES
('R001', 'Nithya', 'Jayanagar', '7019772496', 'F001', 'S001', 2, 2),
('R002', 'Ravali', 'OAKYARD APARTMENT', '7411824620', 'F001', 'S002', 2, 1);

-- --------------------------------------------------------

--
-- Table structure for table `showroom`
--

CREATE TABLE `showroom` (
  `Showroom_ID` varchar(5) NOT NULL,
  `Showroom_Address` varchar(20) DEFAULT NULL,
  `Showrroom_number` int(11) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `showroom`
--

INSERT INTO `showroom` (`Showroom_ID`, `Showroom_Address`, `Showrroom_number`) VALUES
('S001', 'Jayanagar', 1800676343),
('S002', 'Nagarbhavi', 1800676344),
('S003', 'KanakpuraRoad', 1800676345),
('S004', 'RaceCourseRoad', 1800676346),
('S005', 'RRNagar', 1800676347);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `furniture`
--
ALTER TABLE `furniture`
  ADD PRIMARY KEY (`Furniture_ID`),
  ADD KEY `Showroom_ID` (`Showroom_ID`);

--
-- Indexes for table `rents`
--
ALTER TABLE `rents`
  ADD PRIMARY KEY (`Rent_ID`),
  ADD KEY `Furniture_ID` (`Furniture_ID`),
  ADD KEY `Showroom_ID` (`Showroom_ID`);

--
-- Indexes for table `showroom`
--
ALTER TABLE `showroom`
  ADD PRIMARY KEY (`Showroom_ID`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
