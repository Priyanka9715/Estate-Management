-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 31, 2021 at 09:19 AM
-- Server version: 10.1.39-MariaDB
-- PHP Version: 7.3.5

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `deepsform`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(30) NOT NULL,
  `adminname` varchar(200) NOT NULL,
  `password` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `adminname`, `password`) VALUES
(1, 'chickenadmin@farm.com', 'chickenfarm@1206');

-- --------------------------------------------------------

--
-- Table structure for table `billtb`
--

CREATE TABLE `billtb` (
  `billid` int(12) NOT NULL,
  `salesid` varchar(20) NOT NULL,
  `salesno` varchar(300) NOT NULL,
  `phoneno` varchar(12) NOT NULL,
  `name` varchar(300) NOT NULL,
  `date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `finalprice` varchar(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `billtb`
--

INSERT INTO `billtb` (`billid`, `salesid`, `salesno`, `phoneno`, `name`, `date`, `finalprice`) VALUES
(1, '', '7', '', '', '2021-08-26 10:42:29', '5900'),
(2, '', '8', '', '', '2021-08-27 05:03:23', '5900'),
(3, '', '9', '', '', '2021-08-27 05:12:41', '5900');

-- --------------------------------------------------------

--
-- Table structure for table `consumption`
--

CREATE TABLE `consumption` (
  `conid` int(20) NOT NULL,
  `date` date NOT NULL,
  `type` varchar(100) NOT NULL,
  `qty` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `consumption`
--

INSERT INTO `consumption` (`conid`, `date`, `type`, `qty`) VALUES
(41, '0000-00-00', 'medicine', '100'),
(42, '0000-00-00', 'medicine', '100'),
(44, '0000-00-00', 'medicine', '100'),
(46, '0000-00-00', 'medicine', '400'),
(55, '2021-08-31', 'medicine', '200'),
(56, '2021-08-31', 'food', '100'),
(57, '2021-08-31', 'medicine', '100');

-- --------------------------------------------------------

--
-- Table structure for table `eggstock`
--

CREATE TABLE `eggstock` (
  `eggid` int(12) NOT NULL,
  `date` date NOT NULL,
  `eggcount` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `eggstock`
--

INSERT INTO `eggstock` (`eggid`, `date`, `eggcount`) VALUES
(5, '2021-09-03', '12'),
(6, '2021-08-24', '200'),
(8, '2021-08-30', '200'),
(9, '2021-08-31', '200');

-- --------------------------------------------------------

--
-- Table structure for table `purchase`
--

CREATE TABLE `purchase` (
  `puid` int(20) NOT NULL,
  `stockname` varchar(200) NOT NULL,
  `sellername` varchar(300) NOT NULL,
  `puquantity` varchar(20) NOT NULL,
  `date` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `purchase`
--

INSERT INTO `purchase` (`puid`, `stockname`, `sellername`, `puquantity`, `date`) VALUES
(2, 'food', 'deeps2333@gmail.com', '12', '0000-00-00 00:00:00'),
(4, 'medicine', 'deeps23@gmail.com', '5', '2021-08-24 15:30:17'),
(6, 'food', 'deeps23@gmail.com', '100', '2021-08-24 16:03:03'),
(7, 'bird', 'shrijith@gmail.com', '22', '2021-08-24 16:06:45'),
(10, 'medicine', 'shrijith@gmail.com', '78', '2021-08-26 10:56:24'),
(12, 'bird', 'deeps2333@gmail.com', '800', '2021-08-30 11:30:51'),
(13, 'medicine', 'deeps23@gmail.com', '100', '2021-08-30 13:20:21'),
(14, 'medicine', 'deeps2333@gmail.com', '100', '2021-08-31 09:46:26'),
(15, 'medicine', 'deeps23@gmail.com', '100', '2021-08-31 09:46:39'),
(21, 'medicine', 'deeps23@gmail.com', '100', '2021-08-31 10:09:51'),
(24, 'food', 'deeps23@gmail.com', '100', '2021-08-31 10:24:58');

-- --------------------------------------------------------

--
-- Table structure for table `sales`
--

CREATE TABLE `sales` (
  `salesid` int(20) NOT NULL,
  `salesno` varchar(20) NOT NULL,
  `date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `phoneno` varchar(12) NOT NULL,
  `name` varchar(200) NOT NULL,
  `type` varchar(20) NOT NULL,
  `qty` varchar(200) NOT NULL,
  `price` varchar(50) NOT NULL,
  `total` varchar(50) NOT NULL,
  `status` varchar(50) NOT NULL DEFAULT 'pending',
  `final_amt` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `sales`
--

INSERT INTO `sales` (`salesid`, `salesno`, `date`, `phoneno`, `name`, `type`, `qty`, `price`, `total`, `status`, `final_amt`) VALUES
(15, 'SALENO001', '2021-08-28 15:43:34', '9632526126', 'Pushpavathi G', 'bird', '45', '1500', '67500', 'confirm', '87900'),
(16, 'SALENO001', '2021-08-28 15:43:34', '9632526126', 'Pushpavathi G', 'egg', '12', '200', '2400', 'confirm', '87900'),
(17, 'SALENO001', '2021-08-28 15:43:34', '9632526126', 'Pushpavathi G', 'egg', '90', '200', '18000', 'confirm', '87900'),
(18, 'SALENO002', '2021-08-28 15:46:32', '2345678912', 'hashit', 'egg', '41', '200', '8200', 'confirm', '10600'),
(19, 'SALENO002', '2021-08-28 15:46:32', '2345678912', 'hashit', 'egg', '12', '200', '2400', 'confirm', '10600'),
(20, 'SALENO003', '2021-08-28 15:49:36', '8521477871', 'deepika nayar', 'bird', '55', '1500', '82500', 'confirm', '84900'),
(21, 'SALENO003', '2021-08-28 15:49:36', '8521477871', 'deepika nayar', 'egg', '12', '200', '2400', 'confirm', '84900'),
(22, 'SALENO004', '2021-08-28 15:52:24', '9632526565', 'deepthi kulal bangera', 'bird', '11', '1500', '16500', 'confirm', '17100'),
(23, 'SALENO004', '2021-08-28 15:52:24', '9632526565', 'deepthi kulal bangera', 'egg', '3', '200', '600', 'confirm', '17100'),
(24, 'SALENO005', '2021-08-28 15:54:17', '7412589632', 'shrijith kulal', 'bird', '41', '1500', '61500', 'confirm', '71900'),
(25, 'SALENO005', '2021-08-28 15:54:17', '7412589632', 'shrijith kulal', 'egg', '52', '200', '10400', 'confirm', '71900'),
(26, 'SALENO006', '2021-08-28 15:57:55', '2345678912', 'mallika nayak p', 'egg', '11', '200', '2200', 'confirm', '17200'),
(27, 'SALENO006', '2021-08-28 15:57:55', '2345678912', 'mallika nayak p', 'bird', '10', '1500', '15000', 'confirm', '17200'),
(28, 'SALENO007', '2021-08-28 16:00:33', '8521452444', 'kulal shrii', 'bird', '8', '1500', '12000', 'confirm', '23000'),
(29, 'SALENO007', '2021-08-28 16:00:33', '8521452444', 'kulal shrii', 'egg', '55', '200', '11000', 'confirm', '23000'),
(30, 'SALENO008', '2021-08-30 04:02:23', '9902509753', 'brill', 'bird', '11', '1500', '16500', 'confirm', '18100'),
(31, 'SALENO008', '2021-08-30 04:02:23', '9902509753', 'brill', 'egg', '8', '200', '1600', 'confirm', '18100'),
(32, 'SALENO009', '2021-08-30 05:56:52', '7852147852', 'prajna kulal', 'bird', '3', '1500', '4500', 'confirm', '4500'),
(35, 'SALENO010', '2021-08-30 07:20:30', '7852147852', 'prajna kulal', 'bird', '2', '1500', '3000', 'confirm', '21000'),
(36, 'SALENO010', '2021-08-30 07:20:30', '7852147852', 'prajna kulal', 'bird', '12', '1500', '18000', 'confirm', '21000'),
(45, 'SALENO011', '2021-08-30 16:41:10', '', '', 'egg', '1000', '200', '200000', 'pending', '');

-- --------------------------------------------------------

--
-- Table structure for table `seller`
--

CREATE TABLE `seller` (
  `sellerid` int(20) NOT NULL,
  `sellerno` varchar(20) NOT NULL,
  `sellername` varchar(200) NOT NULL,
  `email` varchar(200) NOT NULL,
  `contactno` varchar(12) NOT NULL,
  `address` varchar(200) NOT NULL,
  `gender` varchar(13) NOT NULL,
  `gstno` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `seller`
--

INSERT INTO `seller` (`sellerid`, `sellerno`, `sellername`, `email`, `contactno`, `address`, `gender`, `gstno`) VALUES
(7, 'S001', 'deep S', 'deeps23@gmail.com', '5285214521', 'TT Road\r\nCarstreet', 'female', '12'),
(8, 'S002', 'deepthi kulal', 'deeps2333@gmail.com', '5285214521', 'TT Road\r\nCarstreet', 'female', '222'),
(9, 'S003', 'shrijith', 'shrijith@gmail.com', '8585964544', 'manglore', 'male', '854kj45');

-- --------------------------------------------------------

--
-- Table structure for table `staff`
--

CREATE TABLE `staff` (
  `staffid` int(20) NOT NULL,
  `staffno` varchar(20) NOT NULL,
  `staffname` varchar(200) NOT NULL,
  `email` varchar(200) NOT NULL,
  `contactno` varchar(12) NOT NULL,
  `address` varchar(300) NOT NULL,
  `gender` varchar(20) NOT NULL,
  `password` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `staff`
--

INSERT INTO `staff` (`staffid`, `staffno`, `staffname`, `email`, `contactno`, `address`, `gender`, `password`) VALUES
(1, '0001', 'Deepthi kulal', 'deeps23@gmail.com', '1212121212', 'TT Road\r\nCarstreet', 'female', '123'),
(3, '002', 'prajna kulal', 'prajna12@gmail.com', '8523698521', 'madanthyar', 'female', '789'),
(4, '003', 'shrijith kulal', 'shrijith@gmail.com', '8574747474', 'ballamnjaa', 'male', '456'),
(5, '004', 'brill brenhill', 'brill45@brenhill.com', '5285214521', 'kulashekara', 'male', '741');

-- --------------------------------------------------------

--
-- Table structure for table `stock`
--

CREATE TABLE `stock` (
  `stockid` int(20) NOT NULL,
  `stockno` varchar(20) NOT NULL,
  `stockname` varchar(300) NOT NULL,
  `category` varchar(20) NOT NULL,
  `quantity` varchar(14) NOT NULL,
  `price` varchar(20) NOT NULL,
  `stock` varchar(20) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `stock`
--

INSERT INTO `stock` (`stockid`, `stockno`, `stockname`, `category`, `quantity`, `price`, `stock`) VALUES
(1, 'ST01', 'bird', 'sales', '3000', '350', '804'),
(4, 'ST02', 'egg', 'sales', '4000', '200', '988'),
(8, 'ST04', 'food', 'consumption', '4000', '1500', '150'),
(9, 'ST05', 'medicine', 'consumption', '23000', '100', '1300');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `billtb`
--
ALTER TABLE `billtb`
  ADD PRIMARY KEY (`billid`);

--
-- Indexes for table `consumption`
--
ALTER TABLE `consumption`
  ADD PRIMARY KEY (`conid`);

--
-- Indexes for table `eggstock`
--
ALTER TABLE `eggstock`
  ADD PRIMARY KEY (`eggid`);

--
-- Indexes for table `purchase`
--
ALTER TABLE `purchase`
  ADD PRIMARY KEY (`puid`);

--
-- Indexes for table `sales`
--
ALTER TABLE `sales`
  ADD PRIMARY KEY (`salesid`);

--
-- Indexes for table `seller`
--
ALTER TABLE `seller`
  ADD PRIMARY KEY (`sellerid`);

--
-- Indexes for table `staff`
--
ALTER TABLE `staff`
  ADD PRIMARY KEY (`staffid`);

--
-- Indexes for table `stock`
--
ALTER TABLE `stock`
  ADD PRIMARY KEY (`stockid`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(30) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `billtb`
--
ALTER TABLE `billtb`
  MODIFY `billid` int(12) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `consumption`
--
ALTER TABLE `consumption`
  MODIFY `conid` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=58;

--
-- AUTO_INCREMENT for table `eggstock`
--
ALTER TABLE `eggstock`
  MODIFY `eggid` int(12) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `purchase`
--
ALTER TABLE `purchase`
  MODIFY `puid` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT for table `sales`
--
ALTER TABLE `sales`
  MODIFY `salesid` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=50;

--
-- AUTO_INCREMENT for table `seller`
--
ALTER TABLE `seller`
  MODIFY `sellerid` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `staff`
--
ALTER TABLE `staff`
  MODIFY `staffid` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `stock`
--
ALTER TABLE `stock`
  MODIFY `stockid` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
