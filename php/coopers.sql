-- phpMyAdmin SQL Dump
-- version 4.4.15.7
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Jan 19, 2017 at 12:47 PM
-- Server version: 5.6.31
-- PHP Version: 5.3.29

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `pwd`
--

-- --------------------------------------------------------

--
-- Table structure for table `coopers`
--

CREATE TABLE IF NOT EXISTS `Developments` (
  `PlotNumber` varchar(50) NOT NULL,
  `HouseType` varchar(80) NOT NULL,
  `Description` text NOT NULL,
  `SqFt` int(20) NOT NULL,
  `Price` varchar(20) NOT NULL,
  `Development` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `coopers`
--

INSERT INTO `Developments` (`PlotNumber`, `HouseType`, `Description`, `SqFt`, `Price`,`Development`) VALUES
('332', '<a id="tablelink" href="typeg.html">G</a>', 'SEMI-DETACHED', 1082, 'BOOKED', 'COOPERS'),
('333', '<a id="tablelink" href="typeg.html">G</a>', 'SEMI-DETACHED', 1082, 'BOOKED', 'COOPERS'),
('334', '<a id="tablelink" href="typeg.html">G</a>', 'DETACHED', 1095, 'BOOKED', 'COOPERS'),
('335', '<a id="tablelink" href="typef6.html">F6</a>', 'DETACHED', 1144, 'BOOKED', 'COOPERS'),
('336', '<a id="tablelink" href="typef8.html">F8</a>', 'SEMI-DETACHED', 144, 'BOOKED', 'COOPERS'),
('337', '<a id="tablelink" href="typef9.html">F9</a>', 'SEMI-DETACHED', 976, '&pound; 152,500', 'COOPERS'),
('338', '<a id="tablelink" href="typeg.html">G</a>', 'DETACHED', 1095, 'BOOKED', 'COOPERS'),
('339', '<a id="tablelink" href="typeg.html">G</a>', 'DETACHED', 969, '&pound; 170,000', 'COOPERS'),
('340', '<a id="tablelink" href="typel.html">L</a>', 'SEMI-DETACHED', 969, 'BOOKED', 'COOPERS'),
('341', '<a id="tablelink" href="typef6.html">F6</a>', 'SEMI-DETACHED', 1272, 'BOOKED', 'COOPERS'),
('342', '<a id="tablelink" href="typee.html">E</a>', 'SEMI-DETACHED', 1272, 'BOOKED', 'COOPERS'),
('343', '<a id="tablelink" href="typee.html">E</a>', 'SEMI-DETACHED', 1095, 'BOOKED', 'COOPERS'),
('344', '<a id="tablelink" href="typeg.html">G</a>', 'DETACHED', 1095, '&pound; 170,000', 'COOPERS'),
('345', '<a id="tablelink" href="typeg.html">G</a>', 'DETACHED', 913, '&pound; 170,000', 'COOPERS'),
('346', '<a id="tablelink" href="typeh.html">H</a>', 'SEMI-DETACHED', 913, 'BOOKED', 'COOPERS'),
('347', '<a id="tablelink" href="typeh.html">H</a>', 'SEMI-DETACHED', 913, 'BOOKED', 'COOPERS'),
('348', '<a id="tablelink" href="typeh.html">H</a>', 'SEMI-DETACHED', 913, 'BOOKED', 'COOPERS'),
('349', '<a id="tablelink" href="typeh.html">H</a>', 'SEMI-DETACHED', 913, 'BOOKED', 'COOPERS'),
('350', '<a id="tablelink" href="typef6.html">F6</a>', 'SEMI-DETACHED', 969, 'BOOKED', 'COOPERS'),
('351', '<a id="tablelink" href="typef6.html">F6</a>', 'SEMI-DETACHED', 969, 'BOOKED', 'COOPERS'),
('352', '<a id="tablelink" href="typeg.html">G</a>', 'SEMI-DETACHED', 1082, 'BOOKED', 'COOPERS'),
('353', '<a id="tablelink" href="typeg.html">G</a>', 'SEMI-DETACHED', 1082, 'BOOKED', 'COOPERS'),
('354', '<a id="tablelink" href="typef6.html">F6</a>', 'SEMI-DETACHED', 969, 'BOOKED', 'COOPERS'),
('355', '<a id="tablelink" href="typef6.html">F6</a>', 'SEMI-DETACHED', 969, '&pound; 152,500', 'COOPERS'),
('356', '<a id="tablelink" href="typeh.html">H</a>', 'SEMI-DETACHED', 916, 'BOOKED', 'COOPERS'),
('357', '<a id="tablelink" href="typeh.html">H</a>', 'SEMI-DETACHED', 913, 'BOOKED', 'COOPERS'),
('358', '<a id="tablelink" href="typef6.html">F6</a>', 'DETACHED', 144, 'BOOKED', 'COOPERS'),

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
