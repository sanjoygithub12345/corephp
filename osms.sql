-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 07, 2020 at 05:40 PM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.4.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `osms`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin_login`
--

CREATE TABLE `admin_login` (
  `id` int(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin_login`
--

INSERT INTO `admin_login` (`id`, `email`, `password`) VALUES
(1, 'gsanjoy333@gmail.com', '567890'),
(2, 'sanjoysgg@gmail.com', '890');

-- --------------------------------------------------------

--
-- Table structure for table `asset`
--

CREATE TABLE `asset` (
  `id` int(100) NOT NULL,
  `pname` varchar(100) NOT NULL,
  `pdate` date NOT NULL,
  `pava` int(100) NOT NULL,
  `ptotal` int(100) NOT NULL,
  `poriginalprise` int(100) NOT NULL,
  `psellprise` int(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `asset`
--

INSERT INTO `asset` (`id`, `pname`, `pdate`, `pava`, `ptotal`, `poriginalprise`, `psellprise`) VALUES
(1, 'keyboard', '2020-02-11', 3, 6, 300, 350),
(2, 'mouse', '2020-02-07', 6, 7, 90, 100),
(4, 'ram', '2020-02-07', 5, 7, 15000, 2000),
(5, 'hard disk', '2020-02-18', 5, 5, 3000, 3500);

-- --------------------------------------------------------

--
-- Table structure for table `assign_work`
--

CREATE TABLE `assign_work` (
  `id` int(100) NOT NULL,
  `request_id` int(100) NOT NULL,
  `requestinfo` varchar(100) NOT NULL,
  `description` text NOT NULL,
  `name` varchar(20) NOT NULL,
  `addressone` varchar(20) NOT NULL,
  `addresstwo` varchar(30) NOT NULL,
  `city` varchar(30) NOT NULL,
  `state` varchar(20) NOT NULL,
  `zip` int(30) NOT NULL,
  `email` varchar(50) NOT NULL,
  `mobile` int(30) NOT NULL,
  `datee` date NOT NULL,
  `technician` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `assign_work`
--

INSERT INTO `assign_work` (`id`, `request_id`, `requestinfo`, `description`, `name`, `addressone`, `addresstwo`, `city`, `state`, `zip`, `email`, `mobile`, `datee`, `technician`) VALUES
(4, 2, 'request', 'this is the descriptiuon', 'soumitra', 'kolkata', 'kolkata', 'kolkata', 'kolkata', 657676, 'efil@gmail.com', 2147483647, '2020-01-28', 'sun');

-- --------------------------------------------------------

--
-- Table structure for table `customer`
--

CREATE TABLE `customer` (
  `id` int(100) NOT NULL,
  `c_name` varchar(100) NOT NULL,
  `k_address` varchar(100) NOT NULL,
  `pname` varchar(100) NOT NULL,
  `pava` int(100) NOT NULL,
  `ptotal` int(100) NOT NULL,
  `psellprise` int(30) NOT NULL,
  `t_prise` int(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `customer`
--

INSERT INTO `customer` (`id`, `c_name`, `k_address`, `pname`, `pava`, `ptotal`, `psellprise`, `t_prise`) VALUES
(5, 'sanjoy', 'medinipur', 'keyboard', 6, 10, 350, 2000),
(6, 'soumita', 'kolkata', 'keyboard', 6, 1, 350, 350),
(8, 'santu', 'kolkata', 'keyboard', 5, 1, 350, 350),
(12, 'sanjoy', 'kolkata', 'keyboard', 4, 1, 350, 350),
(13, 'sanjoy', 'kolkata', 'keyboard', 3, 1, 350, 350),
(14, 'sanjoy', 'kolkata', 'mouse', 6, 1, 100, 60),
(15, 'sanjoy', 'kolkata', 'ram', 6, 1, 2000, 2000),
(16, 'soumita', 'kolkata', 'ram', 5, 1, 2000, 2000);

-- --------------------------------------------------------

--
-- Table structure for table `signup`
--

CREATE TABLE `signup` (
  `id` int(100) NOT NULL,
  `username` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` int(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `signup`
--

INSERT INTO `signup` (`id`, `username`, `email`, `password`) VALUES
(1, 'sanjoy', 'gsanjoy333@gmail.com', 12345);

-- --------------------------------------------------------

--
-- Table structure for table `technician`
--

CREATE TABLE `technician` (
  `id` int(100) NOT NULL,
  `name` varchar(100) NOT NULL,
  `city` varchar(100) NOT NULL,
  `mobile` bigint(100) NOT NULL,
  `email` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `technician`
--

INSERT INTO `technician` (`id`, `name`, `city`, `mobile`, `email`) VALUES
(45, 'sanjoy', 'medinipur', 5634534234, 'san@gmail.com'),
(46, 'santanu', 'kolkata', 7856345678, 'dfr@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `userrequest`
--

CREATE TABLE `userrequest` (
  `id` int(100) NOT NULL,
  `requestinfo` varchar(100) NOT NULL,
  `description` text NOT NULL,
  `name` varchar(100) NOT NULL,
  `addressone` varchar(20) NOT NULL,
  `addresstwo` varchar(20) NOT NULL,
  `city` varchar(30) NOT NULL,
  `state` varchar(30) NOT NULL,
  `zip` int(20) NOT NULL,
  `email` varchar(30) NOT NULL,
  `mobile` int(50) NOT NULL,
  `datee` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `userrequest`
--

INSERT INTO `userrequest` (`id`, `requestinfo`, `description`, `name`, `addressone`, `addresstwo`, `city`, `state`, `zip`, `email`, `mobile`, `datee`) VALUES
(1, 'requestinfo', 'this is the description', 'sanjoy', 'padima', 'pindrui', 'medinipur', 'west bengal', 721131, 'gsanjoy333@gmail.com', 2147483647, '2020-01-28'),
(2, 'request', 'this is the descriptiuon', 'soumitra', 'kolkata', 'kolkata', 'kolkata', 'kolkata', 657676, 'efil@gmail.com', 2147483647, '2020-01-28');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin_login`
--
ALTER TABLE `admin_login`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `asset`
--
ALTER TABLE `asset`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `assign_work`
--
ALTER TABLE `assign_work`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `customer`
--
ALTER TABLE `customer`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `signup`
--
ALTER TABLE `signup`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `technician`
--
ALTER TABLE `technician`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `userrequest`
--
ALTER TABLE `userrequest`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin_login`
--
ALTER TABLE `admin_login`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `asset`
--
ALTER TABLE `asset`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `assign_work`
--
ALTER TABLE `assign_work`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `customer`
--
ALTER TABLE `customer`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `signup`
--
ALTER TABLE `signup`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `technician`
--
ALTER TABLE `technician`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=51;

--
-- AUTO_INCREMENT for table `userrequest`
--
ALTER TABLE `userrequest`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
