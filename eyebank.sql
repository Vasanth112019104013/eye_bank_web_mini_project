-- phpMyAdmin SQL Dump
-- version 4.0.4.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Jun 16, 2019 at 02:28 PM
-- Server version: 5.5.32
-- PHP Version: 5.4.19

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `eyebank`
--
CREATE DATABASE IF NOT EXISTS `eyebank` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `eyebank`;

-- --------------------------------------------------------

--
-- Table structure for table `donar`
--

CREATE TABLE IF NOT EXISTS `donar` (
  `Name` varchar(100) NOT NULL,
  `Gender` text NOT NULL,
  `Age` int(11) NOT NULL,
  `Bloodgroup` varchar(10) NOT NULL,
  `Email` varchar(100) NOT NULL,
  `Phonenumber` double NOT NULL,
  `Doornumber` varchar(100) NOT NULL,
  `Street` varchar(100) NOT NULL,
  `Town` varchar(50) NOT NULL,
  `Pincode` double NOT NULL,
  `State` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `donar`
--

INSERT INTO `donar` (`Name`, `Gender`, `Age`, `Bloodgroup`, `Email`, `Phonenumber`, `Doornumber`, `Street`, `Town`, `Pincode`, `State`) VALUES
('fantasy', 'Female', 20, 'A+', 'fantasy@gmail.com', 7896543218, '66', 'mullai nagar', 'theni', 625531, 'tamil nadu'),
('Divya', 'Female', 23, 'B+', 'divyasureshishu@gmail.com', 0, 'No:6/1,Selvi illam', '10th main Road,Thiruvalluvar Nagar', 'chennai ', 600118, 'TamilNadu'),
('Pavithra', 'Female', 21, 'O+', 'pavithram@gmail.com', 6374641590, 'No:1/17', 'Kannadasan Nagar, Ambattur', 'chennai', 600026, 'TamilNadu'),
('vijilakshmi', 'Female', 35, 'a+', 'viji@gmail.com', 7896534279, '13/1, post office', 'kodungaiyur', 'chennai', 600026, 'TamilNadu');

-- --------------------------------------------------------

--
-- Table structure for table `validation`
--

CREATE TABLE IF NOT EXISTS `validation` (
  `Name` varchar(100) NOT NULL,
  `Email` varchar(100) NOT NULL,
  `Password` varchar(100) NOT NULL,
  PRIMARY KEY (`Email`),
  UNIQUE KEY `Password` (`Password`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `validation`
--

INSERT INTO `validation` (`Name`, `Email`, `Password`) VALUES
('anu', 'anu@gmail.com', '159'),
('Nandha', 'Nandha17@gmail.com', 'nandha'),
('Pavithra', 'pavithram123@gmail.com', 'hjk'),
('Sherly', 'sheerly123@gmail.com', 'qwe'),
('swathi', 'swathirajendran23@gmail.com', 'swathi'),
('Usha Rajeswari', 'usahraji.n@gmail.com', 'ushapappa123'),
('usha ', 'usharaji.n@gmail.com', 'usha123'),
('venkat', 'venkat55@gmail.com', 'venkat'),
('xx', 'xx@gmail.com', 'qwer'),
('Yammiiii', 'yamuyamo1234@gmail.com', 'asd');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
