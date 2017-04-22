-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 11, 2017 at 04:42 PM
-- Server version: 10.1.21-MariaDB
-- PHP Version: 5.6.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `csi`
--

-- --------------------------------------------------------

--
-- Table structure for table `mem`
--

CREATE TABLE `mem` (
  `DATE` date NOT NULL,
  `TIME` time(6) NOT NULL,
  `VENUE` varchar(25) NOT NULL,
  `SPEAKER NAME` varchar(25) NOT NULL,
  `FIRST NAME` varchar(25) NOT NULL,
  `LAST NAME` varchar(25) NOT NULL,
  `ADDRESS` varchar(30) NOT NULL,
  `CONTACT NO` bigint(10) NOT NULL,
  `EMAIL ID` varchar(25) NOT NULL,
  `DEPARTMENT` varchar(25) NOT NULL,
  `YEAR` varchar(20) NOT NULL,
  `CSI MEMBER` varchar(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `mem`
--

INSERT INTO `mem` (`DATE`, `TIME`, `VENUE`, `SPEAKER NAME`, `FIRST NAME`, `LAST NAME`, `ADDRESS`, `CONTACT NO`, `EMAIL ID`, `DEPARTMENT`, `YEAR`, `CSI MEMBER`) VALUES
('2017-01-01', '03:05:00.000000', 'DBIT', 'NILESH', 'SALONI', 'JUWATKAR', 'OPEN SOURCE', 97268712281, 'salonijuwatkar@gmail.com', 'IT', 'SE', 'YES'),
('2017-02-05', '06:05:00.000000', 'VSIT', 'TAYYAB', 'SANIKA', 'BHAT', 'OPEN SOURCE', 2589461946, 'asf@ghjm.com', 'Computers', 'TE', 'NO');

-- --------------------------------------------------------

--
-- Table structure for table `workshopdet`
--

CREATE TABLE `workshopdet` (
  `Workshop Name` varchar(25) NOT NULL,
  `Date` varchar(10) NOT NULL,
  `Time From` time(6) NOT NULL,
  `Time To` time(6) NOT NULL,
  `Speaker Name` varchar(25) NOT NULL,
  `Venue` varchar(25) NOT NULL,
  `Speaker Email Id` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `workshopdet`
--

INSERT INTO `workshopdet` (`Workshop Name`, `Date`, `Time From`, `Time To`, `Speaker Name`, `Venue`, `Speaker Email Id`) VALUES
('OPENSOURCE', '2017-01-01', '02:06:00.000000', '03:05:00.000000', 'DBIT', '917621831', 'nilesh@gmail.com'),
('OPENSOURC', '6501-05-06', '09:05:00.000000', '18:05:00.000000', 'VSIT', '917621831', 'asd@gmail.com');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
