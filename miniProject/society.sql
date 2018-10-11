-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 07, 2017 at 06:34 PM
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

DELIMITER $$
--
-- Procedures
--
CREATE DEFINER=`root`@`localhost` PROCEDURE `display` (IN `tableN` INT(10))  NO SQL
SELECT *  FROM tableN$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `test` ()  READS SQL DATA
SELECT *  FROM members$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `test1` ()  READS SQL DATA
select * from maintenance$$

DELIMITER ;

-- --------------------------------------------------------

--
-- Table structure for table `cultural`
--

CREATE TABLE `cultural` (
  `year` int(4) NOT NULL,
  `annul_bug` int(10) NOT NULL,
  `festival_name` varchar(15) NOT NULL,
  `fbudget` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `cultural`
--

INSERT INTO `cultural` (`year`, `annul_bug`, `festival_name`, `fbudget`) VALUES
(2015, 19000, 'Ganesh utsav', 1800),
(2016, 19500, 'diwali', 5000),
(2017, 20000, 'holi', 2000);

-- --------------------------------------------------------

--
-- Table structure for table `house`
--

CREATE TABLE `house` (
  `year` int(6) NOT NULL,
  `annulB` int(10) NOT NULL,
  `monthlyB` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `house`
--

INSERT INTO `house` (`year`, `annulB`, `monthlyB`) VALUES
(2015, 1500, 1250),
(2016, 1700, 1400),
(2017, 1900, 1500);

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
(18000, 2015, '2015-11-09', '2015-12-31', '3000', '2015-11-09', '2015-12-31', 6000, '2015-11-09', '2015-12-31', 4000, '2015-11-09', '2015-12-31', 5000),
(20000, 2016, '2016-11-09', '2016-12-31', '3500', '2016-11-09', '2016-12-31', 6000, '2016-11-09', '2016-12-31', 5000, '2016-11-09', '2016-12-31', 5500),
(20000, 2017, '2017-11-09', '2017-12-31', '3500', '2017-11-09', '2017-12-31', 6000, '2017-11-09', '2017-12-31', 5000, '2017-11-09', '2017-12-31', 5500);

-- --------------------------------------------------------

--
-- Table structure for table `members`
--

CREATE TABLE `members` (
  `fname` varchar(50) NOT NULL,
  `lname` varchar(50) NOT NULL,
  `flatno` varchar(10) NOT NULL,
  `moblie` varchar(10) NOT NULL,
  `email` varchar(30) NOT NULL,
  `usertype` varchar(20) NOT NULL,
  `committee` varchar(20) NOT NULL,
  `username` varchar(20) NOT NULL,
  `password` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `members`
--

INSERT INTO `members` (`fname`, `lname`, `flatno`, `moblie`, `email`, `usertype`, `committee`, `username`, `password`) VALUES
('prasad', 'dhumane', '101', '9876543219', 'prasad.dhumane@gmail.com', 'C', 'Chairman', 'prasad_C', 'a384b6463fc216a5f8ec'),
(' SUCHITRA ', 'HIWALE', '104', '9876543234', 'sucitra.h@gmail.com', 'C', 'Houskeeping Head', 'SuchitrH', '1fd15369718dcd6f915c'),
('Abhijit', 'Bangal', '572', '9423430071', 'smartabhibangal@gmail.com', 'S', 'NULL', 'zxc', '5fa72358f0b4fb4f2c5d');

--
-- Triggers `members`
--
DELIMITER $$
CREATE TRIGGER `uup` BEFORE INSERT ON `members` FOR EACH ROW SET NEW.fname=UPPER(NEW.fname)
$$
DELIMITER ;

-- --------------------------------------------------------

--
-- Table structure for table `pay`
--

CREATE TABLE `pay` (
  `flattype` int(10) NOT NULL,
  `amount` int(10) NOT NULL,
  `paytype` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pay`
--

INSERT INTO `pay` (`flattype`, `amount`, `paytype`) VALUES
(3, 6587, 'CASH'),
(3, 5500, 'CASH'),
(2, 4000, 'cheque');

-- --------------------------------------------------------

--
-- Table structure for table `security`
--

CREATE TABLE `security` (
  `year` int(6) NOT NULL,
  `annulB` int(10) NOT NULL,
  `monthlyB` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `security`
--

INSERT INTO `security` (`year`, `annulB`, `monthlyB`) VALUES
(2015, 60000, 5000),
(2016, 66000, 55000),
(2017, 66000, 55000);

-- --------------------------------------------------------

--
-- Table structure for table `water`
--

CREATE TABLE `water` (
  `Year` int(4) NOT NULL,
  `Budget` int(7) NOT NULL,
  `Tankers_week` int(3) NOT NULL,
  `Tankers_month` int(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `water`
--

INSERT INTO `water` (`Year`, `Budget`, `Tankers_week`, `Tankers_month`) VALUES
(2015, 20000, 3, 12),
(2016, 22000, 4, 16),
(2017, 22000, 4, 16);

-- --------------------------------------------------------

--
-- Table structure for table `workers`
--

CREATE TABLE `workers` (
  `w_id` varchar(10) NOT NULL,
  `w_name` varchar(30) NOT NULL,
  `d_id` varchar(10) NOT NULL,
  `role` varchar(20) NOT NULL,
  `salary` int(30) NOT NULL,
  `gender` varchar(10) NOT NULL,
  `w_contact` int(10) NOT NULL,
  `w_address` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `workers`
--

INSERT INTO `workers` (`w_id`, `w_name`, `d_id`, `role`, `salary`, `gender`, `w_contact`, `w_address`) VALUES
('101', 'Rajesh', '02', 'security', 2500, 'male', 202765439, 'Akurdi'),
('102', 'Arujn Joshi', '03', 'Cleaning', 2000, 'Male', 20234567, 'Nigdi');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `cultural`
--
ALTER TABLE `cultural`
  ADD KEY `year` (`year`,`festival_name`);

--
-- Indexes for table `house`
--
ALTER TABLE `house`
  ADD PRIMARY KEY (`year`);

--
-- Indexes for table `maintenance`
--
ALTER TABLE `maintenance`
  ADD PRIMARY KEY (`year_main`);

--
-- Indexes for table `members`
--
ALTER TABLE `members`
  ADD PRIMARY KEY (`flatno`);

--
-- Indexes for table `security`
--
ALTER TABLE `security`
  ADD PRIMARY KEY (`year`);

--
-- Indexes for table `water`
--
ALTER TABLE `water`
  ADD PRIMARY KEY (`Year`);

--
-- Indexes for table `workers`
--
ALTER TABLE `workers`
  ADD PRIMARY KEY (`w_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
