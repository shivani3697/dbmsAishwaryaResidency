-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 24, 2017 at 07:58 PM
-- Server version: 10.1.25-MariaDB
-- PHP Version: 5.6.31

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `society`
--

-- --------------------------------------------------------

--
-- Table structure for table `maintenance`
--

CREATE TABLE `maintenance` (
  `ybudget` int(10) NOT NULL,
  `year_main` int(4) NOT NULL,
  `sdate_elev` varchar(10) NOT NULL,
  `ddate_elev` varchar(10) NOT NULL,
  `amt_ele` varchar(10) NOT NULL,
  `sdate_swim` date NOT NULL,
  `ddate_swim` date NOT NULL,
  `amt_swim` int(10) NOT NULL,
  `sdate_gym` date NOT NULL,
  `ddate_gym` date NOT NULL,
  `amt_gym` int(10) NOT NULL,
  `sdate_garden` date NOT NULL,
  `ddate_garden` date NOT NULL,
  `amt_garden` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `maintenance`
--

INSERT INTO `maintenance` (`ybudget`, `year_main`, `sdate_elev`, `ddate_elev`, `amt_ele`, `sdate_swim`, `ddate_swim`, `amt_swim`, `sdate_gym`, `ddate_gym`, `amt_gym`, `sdate_garden`, `ddate_garden`, `amt_garden`) VALUES
(1234, 0, '0000-00-00', '0000-00-00', '1234', '0000-00-00', '0000-00-00', 556, '0000-00-00', '0000-00-00', 987, '0000-00-00', '0000-00-00', 7654),
(68, 20170906, '0000-00-00', '0000-00-00', '6876', '0000-00-00', '0000-00-00', 6876786, '0000-00-00', '0000-00-00', 6546, '0000-00-00', '0000-00-00', 546465),
(565, 20170914, '0076-06-07', '0056-07-06', '76576', '0057-07-06', '0057-07-06', 565, '0576-06-07', '2017-09-21', 7657, '2017-09-15', '0007-05-07', 56);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `maintenance`
--
ALTER TABLE `maintenance`
  ADD PRIMARY KEY (`year_main`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
