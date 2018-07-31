-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Jul 15, 2018 at 12:45 AM
-- Server version: 5.7.19
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
-- Database: `shop_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `cashflow`
--

DROP TABLE IF EXISTS `cashflow`;
CREATE TABLE IF NOT EXISTS `cashflow` (
  `cashId` int(11) NOT NULL AUTO_INCREMENT,
  `expenditure` varchar(50) NOT NULL,
  `inflow` double(15,2) NOT NULL,
  `outflow` double(15,2) NOT NULL,
  `projection` double(15,2) NOT NULL,
  PRIMARY KEY (`cashId`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COMMENT='cash flow data';

-- --------------------------------------------------------

--
-- Table structure for table `customers`
--

DROP TABLE IF EXISTS `customers`;
CREATE TABLE IF NOT EXISTS `customers` (
  `custId` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(50) NOT NULL,
  `contact` int(15) NOT NULL,
  `email` varchar(40) NOT NULL,
  PRIMARY KEY (`custId`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COMMENT='Stores customers'' data';

-- --------------------------------------------------------

--
-- Table structure for table `debt`
--

DROP TABLE IF EXISTS `debt`;
CREATE TABLE IF NOT EXISTS `debt` (
  `debtId` int(11) NOT NULL AUTO_INCREMENT,
  `custId` int(11) NOT NULL,
  `uId` int(11) NOT NULL,
  `pId` int(11) NOT NULL,
  `quantity` int(11) NOT NULL,
  `date` date NOT NULL,
  `time` time NOT NULL,
  `Type` varchar(10) NOT NULL,
  PRIMARY KEY (`debtId`),
  KEY `custId` (`custId`),
  KEY `pId` (`pId`),
  KEY `uId` (`uId`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COMMENT='debt data';

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

DROP TABLE IF EXISTS `products`;
CREATE TABLE IF NOT EXISTS `products` (
  `pId` int(50) NOT NULL AUTO_INCREMENT,
  `sId` int(50) NOT NULL,
  `name` int(50) NOT NULL,
  `quantity` int(11) NOT NULL,
  `bulkQuantity` double(15,2) NOT NULL,
  `costPrice` double(15,2) NOT NULL,
  `retailPrice` double(15,2) NOT NULL,
  `bulkPrice` double(15,2) NOT NULL,
  PRIMARY KEY (`pId`),
  KEY `sId` (`sId`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COMMENT='Stores products data';

-- --------------------------------------------------------

--
-- Table structure for table `sales`
--

DROP TABLE IF EXISTS `sales`;
CREATE TABLE IF NOT EXISTS `sales` (
  `salesId` int(20) NOT NULL AUTO_INCREMENT,
  `pId` int(20) NOT NULL,
  `quantity` int(20) NOT NULL,
  `price` double(7,2) NOT NULL,
  `profit` double(7,2) NOT NULL,
  `date` date NOT NULL,
  `time` time NOT NULL,
  `Type` varchar(50) NOT NULL,
  PRIMARY KEY (`salesId`),
  KEY `pId` (`pId`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `suppliers`
--

DROP TABLE IF EXISTS `suppliers`;
CREATE TABLE IF NOT EXISTS `suppliers` (
  `sId` int(20) NOT NULL,
  `name` text NOT NULL,
  `contact` int(50) NOT NULL,
  `email` text NOT NULL,
  `account` int(50) NOT NULL,
  PRIMARY KEY (`sId`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COMMENT='Stores supplier data';

-- --------------------------------------------------------

--
-- Table structure for table `userlog`
--

DROP TABLE IF EXISTS `userlog`;
CREATE TABLE IF NOT EXISTS `userlog` (
  `logId` int(50) NOT NULL AUTO_INCREMENT,
  `uId` int(40) NOT NULL,
  `logDate` date NOT NULL,
  `logTime` time(6) NOT NULL,
  PRIMARY KEY (`logId`),
  KEY `uId` (`uId`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COMMENT='user log data';

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
CREATE TABLE IF NOT EXISTS `users` (
  `uId` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(50) NOT NULL,
  `username` varchar(25) NOT NULL,
  `password` varchar(40) NOT NULL,
  `notifications` tinyint(1) NOT NULL,
  `analytics` tinyint(1) NOT NULL,
  `sales` tinyint(1) NOT NULL,
  `products` tinyint(1) NOT NULL,
  `suppliers` tinyint(1) NOT NULL,
  `customers` tinyint(1) NOT NULL,
  `finances` tinyint(1) NOT NULL,
  PRIMARY KEY (`uId`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`uId`, `name`, `username`, `password`, `notifications`, `analytics`, `sales`, `products`, `suppliers`, `customers`, `finances`) VALUES
(1, 'Jesse', 'admin', '5baa61e4c9b93f3f0682250b6cf8331b7ee68fd8', 1, 1, 1, 1, 1, 1, 1);

--
-- Constraints for dumped tables
--

--
-- Constraints for table `debt`
--
ALTER TABLE `debt`
  ADD CONSTRAINT `debt_ibfk_1` FOREIGN KEY (`custId`) REFERENCES `debt` (`debtId`),
  ADD CONSTRAINT `debt_ibfk_2` FOREIGN KEY (`pId`) REFERENCES `debt` (`debtId`),
  ADD CONSTRAINT `debt_ibfk_3` FOREIGN KEY (`uId`) REFERENCES `debt` (`debtId`);

--
-- Constraints for table `products`
--
ALTER TABLE `products`
  ADD CONSTRAINT `products_ibfk_1` FOREIGN KEY (`sId`) REFERENCES `products` (`pId`);

--
-- Constraints for table `sales`
--
ALTER TABLE `sales`
  ADD CONSTRAINT `sales_ibfk_1` FOREIGN KEY (`pId`) REFERENCES `sales` (`salesId`);

--
-- Constraints for table `userlog`
--
ALTER TABLE `userlog`
  ADD CONSTRAINT `userlog_ibfk_1` FOREIGN KEY (`uId`) REFERENCES `userlog` (`logId`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
