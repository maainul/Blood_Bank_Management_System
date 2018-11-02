-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Dec 04, 2016 at 09:02 PM
-- Server version: 10.1.16-MariaDB
-- PHP Version: 5.6.24

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `bbms`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin_login`
--

CREATE TABLE `admin_login` (
  `username` varchar(30) NOT NULL,
  `password` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin_login`
--

INSERT INTO `admin_login` (`username`, `password`) VALUES
('15103205', '789456123'),
('15478963', 'qw4548@'),
('', ''),
('', ''),
('', ''),
('', ''),
('', ''),
('', ''),
('', ''),
('', ''),
('', ''),
('', ''),
('', ''),
('', ''),
('', ''),
('', ''),
('', ''),
('', ''),
('', ''),
('', '');

-- --------------------------------------------------------

--
-- Table structure for table `authority`
--

CREATE TABLE `authority` (
  `id` int(15) NOT NULL,
  `name` varchar(50) NOT NULL,
  `address` varchar(30) NOT NULL,
  `contact` int(20) NOT NULL,
  `mail` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `authority`
--

INSERT INTO `authority` (`id`, `name`, `address`, `contact`, `mail`) VALUES
(1, 'Md.Mainul Hasan', 'BBMS Hospital', 1742503080, ''),
(2, 'Md.Mainul Hasan', 'BBMS Hospital', 1478596325, ''),
(3, 'Md.Mainul Hasan', 'BBMS Hospital', 1478596325, 'manik@gmail.com'),
(55, 'habib Wahid', 'BBMS Hospital', 1478596325, 'jahid@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `donar`
--

CREATE TABLE `donar` (
  `id` int(15) NOT NULL,
  `name` varchar(40) NOT NULL,
  `blood_group` varchar(8) NOT NULL,
  `sex` varchar(8) NOT NULL,
  `weight` varchar(5) NOT NULL,
  `age` varchar(3) NOT NULL,
  `contact` int(20) NOT NULL,
  `dis` varchar(100) NOT NULL,
  `mail` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `donar`
--

INSERT INTO `donar` (`id`, `name`, `blood_group`, `sex`, `weight`, `age`, `contact`, `dis`, `mail`) VALUES
(1, 'anik', 'o+ve', 'male', '59', '26', 1478596325, 'tangail', 'jahid@gmail.com'),
(3, 'manik ', 'ab+', 'male', '53', '24', 1478596325, 'gazipur', 'pin2@gmail.com'),
(2, 'manik Hasan', 'o+ve', 'male', '59', '26', 1478596325, 'feni', 'jahid@gmail.com'),
(4, 'Md.malek Hasan', '', 'male', '53', '26', 1478596325, 'gazipur', 'jahid@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `request_for_blood`
--

CREATE TABLE `request_for_blood` (
  `name` varchar(40) NOT NULL,
  `blood_group` varchar(5) NOT NULL,
  `amount` varchar(10) NOT NULL,
  `contact` int(15) NOT NULL,
  `address` varchar(200) NOT NULL,
  `mail` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `request_for_blood`
--

INSERT INTO `request_for_blood` (`name`, `blood_group`, `amount`, `contact`, `address`, `mail`) VALUES
('abdul', '0+ve', '1unit', 147899620, 'IUBAT Hospital', 'pin2@gmail.com'),
('jahid', '0+ve', '1unit', 178459632, 'BBMS Hospital', 'jahid@gmail.com'),
('kamal', '0+ve', '1unit', 147899620, 'IUBAT Hospital', 'pin2@gmail.com'),
('Md.Mainul Hasan', '0+ve', '1unit', 147899620, 'IUBAT Hospital', 'pin2@gmail.com'),
('samiul', '0+ve', '1unit', 1478596325, 'BBMS Hospital', 'jahid@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `stock`
--

CREATE TABLE `stock` (
  `id` int(15) NOT NULL,
  `d_name` varchar(40) NOT NULL,
  `blood_group` varchar(10) NOT NULL,
  `unit` varchar(11) NOT NULL,
  `donate_date` varchar(20) NOT NULL,
  `address` varchar(40) NOT NULL,
  `contact` int(19) NOT NULL,
  `mail` varchar(31) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `stock`
--

INSERT INTO `stock` (`id`, `d_name`, `blood_group`, `unit`, `donate_date`, `address`, `contact`, `mail`) VALUES
(0, 'samsu', '0+ve', '1', '', 'BBMS Hospital', 1478596325, 'jahid@gmail.com'),
(2, 'anik', '0-ve', '1', '21/2/2016', 'BBMS Hospital', 147899620, 'jahid@gmail.com'),
(9, 'anik', 'ab+', '1', '25-9-2016', 'BBMS Hospital', 1478596325, 'jahid@gmail.com'),
(74, 'anik', '0+ve', '1', '20-2-2016', 'BBMS Hospital', 1478596325, 'jahid@gmail.com');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `authority`
--
ALTER TABLE `authority`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `donar`
--
ALTER TABLE `donar`
  ADD PRIMARY KEY (`name`);

--
-- Indexes for table `request_for_blood`
--
ALTER TABLE `request_for_blood`
  ADD PRIMARY KEY (`name`);

--
-- Indexes for table `stock`
--
ALTER TABLE `stock`
  ADD PRIMARY KEY (`id`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
