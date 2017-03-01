-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Feb 28, 2017 at 07:51 PM
-- Server version: 10.1.16-MariaDB
-- PHP Version: 5.6.24

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `clg`
--

-- --------------------------------------------------------

--
-- Table structure for table `book`
--

CREATE TABLE `book` (
  `nm` varchar(100) NOT NULL,
  `pwd` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `des`
--

CREATE TABLE `des` (
  `nm` varchar(100) NOT NULL,
  `addr` varchar(100) NOT NULL,
  `cuisines` varchar(100) NOT NULL,
  `highlights` text NOT NULL,
  `cost` varchar(100) NOT NULL,
  `phno` varchar(100) NOT NULL,
  `hrs` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `des`
--

INSERT INTO `des` (`nm`, `addr`, `cuisines`, `highlights`, `cost`, `phno`, `hrs`) VALUES
('prashant-corner.jpg', '3, Jangid Heights, Next to Cinemax, Vasant Vihar, Ghodbunder Rd, Thane West,  Maharashtra 400607', 'finger food,snacks', 'Home Delivery\r\nHygenic\r\nLive Music\r\nValet Parking Available\r\ncheap rates\r\nOutdoor Seating\r\nLive Sports Screening', 'AVERAGE\r\n?800 for two people (approx.)\r\n?190  for a pint of beer (approx.)', '022-2346588', '10am-10pm(monday to sunday)'),
('ms.jpg', '3, Jangid Heights, Next to Cinemax, Vasant Vihar, Ghodbunder Rd, Thane West, Maharashtra 400607', 'North Indian, Chinese, Seafood', 'Home Delivery\r\nServes Non Veg\r\nTable booking not available\r\nWifi\r\nLive Sports Screening', '?950 for two people (approx.)', '022-2343454', '10am-12pm');

-- --------------------------------------------------------

--
-- Table structure for table `reiview`
--

CREATE TABLE `reiview` (
  `name` varchar(100) NOT NULL,
  `id` varchar(100) NOT NULL,
  `review` text NOT NULL,
  `date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `reiview`
--

INSERT INTO `reiview` (`name`, `id`, `review`, `date`) VALUES
('abc', 'prashant-corner.jpg', 'good food', '0000-00-00');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `un` varchar(50) NOT NULL,
  `pwd` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`un`, `pwd`) VALUES
('ewe', 'ddd'),
('sdsd', 'sasas'),
('jjj', 'll'),
('', ''),
('', ''),
('', ''),
('', ''),
('', ''),
('abc', 'abc'),
('Rohan', '12345'),
('apeksha', '123456'),
('hghghg', 'hhjh'),
('apeksha', '12345'),
('madhura', 'abs');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
