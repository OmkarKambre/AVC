-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 27, 2023 at 07:48 AM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.1.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `final_year_project`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin_login`
--

CREATE TABLE `admin_login` (
  `sr_no` int(11) NOT NULL,
  `email` varchar(20) NOT NULL,
  `password` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `admin_login`
--

INSERT INTO `admin_login` (`sr_no`, `email`, `password`) VALUES
(1, 'admin.sam@gmail.com', 'sam@vasai26');

-- --------------------------------------------------------

--
-- Table structure for table `feedback`
--

CREATE TABLE `feedback` (
  `sr_no` int(11) NOT NULL,
  `name` varchar(20) NOT NULL,
  `email` varchar(50) NOT NULL,
  `pno` bigint(20) NOT NULL,
  `feedback` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `feedback`
--

INSERT INTO `feedback` (`sr_no`, `name`, `email`, `pno`, `feedback`) VALUES
(4, 'Kabir Shah', 'kabir.shah96@gmail.com', 7388514789, 'Nice Service'),
(5, 'Omkar', 'okambre2@gmail.com', 8591074271, 'Best service I have ever had'),
(6, 'Pratipal Dhaulakhand', 'pratham@gmail.com', 4751482562, 'Fast Service and great experience');

-- --------------------------------------------------------

--
-- Table structure for table `offsite_og`
--

CREATE TABLE `offsite_og` (
  `f_name` varchar(50) NOT NULL,
  `l_name` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `p_no` bigint(20) NOT NULL,
  `date` date NOT NULL,
  `v_no` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `offsite_og`
--

INSERT INTO `offsite_og` (`f_name`, `l_name`, `email`, `p_no`, `date`, `v_no`) VALUES
('Kabir', 'Shah', 'kabir.shah96@gmail.com', 7894868427, '2023-06-15', 'MH06AB6421'),
('Pratipal', 'Dhaulakhandi', 'pratipal.d@gmail.com', 9874589678, '2023-06-23', 'MH45AP8282'),
('Omkar', 'Kambre', 'omkar.kambre@gmail.com', 8798568978, '2023-06-16', 'MH47AK9297');

-- --------------------------------------------------------

--
-- Table structure for table `onsite_og`
--

CREATE TABLE `onsite_og` (
  `f_name` varchar(20) NOT NULL,
  `l_name` varchar(20) NOT NULL,
  `email` varchar(50) NOT NULL,
  `p_no` bigint(20) NOT NULL,
  `address` varchar(50) NOT NULL,
  `city` varchar(20) NOT NULL,
  `zip` bigint(20) NOT NULL,
  `date` date NOT NULL,
  `vc_no` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `onsite_og`
--

INSERT INTO `onsite_og` (`f_name`, `l_name`, `email`, `p_no`, `address`, `city`, `zip`, `date`, `vc_no`) VALUES
('Kabir', 'Shah', 'kabir.shah96@gmail.com', 7259889458, 'Nallasopara', 'Nallasopara', 401201, '2023-06-22', 'MH45AB4896'),
('Pratipal', 'Dhaulakhandi', 'pratipal.d@gmail.com', 9845789658, 'Andheri East', 'Mumbai', 400047, '2023-06-28', 'MH45AP8585'),
('Omkar', 'Kambre', 'omkar.kambre@gmail.com', 8597531589, 'Malad', 'Mumbai', 400097, '2023-06-21', 'MH47AK9297');

-- --------------------------------------------------------

--
-- Table structure for table `purchase`
--

CREATE TABLE `purchase` (
  `sr_no` int(11) NOT NULL,
  `f_name` varchar(20) NOT NULL,
  `l_name` varchar(20) NOT NULL,
  `email` varchar(20) NOT NULL,
  `v_no` varchar(20) NOT NULL,
  `i_up` blob NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `purchase`
--

INSERT INTO `purchase` (`sr_no`, `f_name`, `l_name`, `email`, `v_no`, `i_up`) VALUES
(6, 'Omkar', 'Kambre', 'okambre2@gmail.com', 'MH47AK1161', ''),
(7, 'Bhaji', 'Nikarange', 'pratik.nikarange@gma', 'MH47AB1234', 0x62672e706e67);

-- --------------------------------------------------------

--
-- Table structure for table `purchase_amc`
--

CREATE TABLE `purchase_amc` (
  `sr_no` int(11) NOT NULL,
  `f_name` varchar(20) NOT NULL,
  `l_name` varchar(20) NOT NULL,
  `email` varchar(50) NOT NULL,
  `v_no` varchar(20) NOT NULL,
  `i_up` varchar(100) NOT NULL,
  `time` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `purchase_amc`
--

INSERT INTO `purchase_amc` (`sr_no`, `f_name`, `l_name`, `email`, `v_no`, `i_up`, `time`) VALUES
(18, 'Omkar', 'Kambre', 'okambre2@gmail.com', 'MH47AK1161', 'bg.png', '2023-04-23 12:26:48'),
(20, 'Pratipal', 'Dhaulakhandi', 'pratipal.d@gmail.com', 'MH45AP8282', 'image_up.png', '2023-05-18 17:31:19'),
(22, 'Kabir', 'Shah', 'kabir.shah96@gmail.com', 'MH06AB6421', 'pay.jpg', '2023-05-18 17:33:18');

-- --------------------------------------------------------

--
-- Table structure for table `registration`
--

CREATE TABLE `registration` (
  `sr_no` int(11) NOT NULL,
  `f_name` varchar(30) NOT NULL,
  `l_name` varchar(30) NOT NULL,
  `p_no` bigint(20) NOT NULL,
  `v_no` varchar(50) NOT NULL,
  `rc_no` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `registration`
--

INSERT INTO `registration` (`sr_no`, `f_name`, `l_name`, `p_no`, `v_no`, `rc_no`, `email`, `password`) VALUES
(2, 'Omkar', 'Kambre', 8591074271, 'MH47AK1161', 'APC021547', 'okambre2@gmail.com', 'Omkar@123'),
(3, 'Pratipal', 'Dhaulakhandi', 8850585249, 'MH45AP8282', 'APC031647', 'pratipal.d@gmail.com', 'Pr@tipal69'),
(4, 'Kabir', 'Shah', 7385062648, 'MH06AB6421', 'APC974896', 'kabir.shah96@gmail.com', 'K@birJ789'),
(5, 'Aryan', 'Patil', 1417141654, 'Mh14GF1478', 'APC0981234', 'aryanpatil@gmail.com', 'Aryan@123'),
(6, 'Adity', 'Sharma', 7894589855, 'MH47AK7755', 'APC0981234', 'aditya@gmail.com', 'aDITYA@123');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin_login`
--
ALTER TABLE `admin_login`
  ADD PRIMARY KEY (`sr_no`);

--
-- Indexes for table `feedback`
--
ALTER TABLE `feedback`
  ADD PRIMARY KEY (`sr_no`);

--
-- Indexes for table `offsite_og`
--
ALTER TABLE `offsite_og`
  ADD PRIMARY KEY (`v_no`);

--
-- Indexes for table `onsite_og`
--
ALTER TABLE `onsite_og`
  ADD PRIMARY KEY (`vc_no`);

--
-- Indexes for table `purchase`
--
ALTER TABLE `purchase`
  ADD PRIMARY KEY (`sr_no`);

--
-- Indexes for table `purchase_amc`
--
ALTER TABLE `purchase_amc`
  ADD PRIMARY KEY (`sr_no`),
  ADD UNIQUE KEY `v_no_pk` (`v_no`),
  ADD UNIQUE KEY `unique_v_no` (`v_no`);

--
-- Indexes for table `registration`
--
ALTER TABLE `registration`
  ADD PRIMARY KEY (`sr_no`),
  ADD UNIQUE KEY `unique_v_no_register` (`v_no`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin_login`
--
ALTER TABLE `admin_login`
  MODIFY `sr_no` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `feedback`
--
ALTER TABLE `feedback`
  MODIFY `sr_no` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `purchase`
--
ALTER TABLE `purchase`
  MODIFY `sr_no` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `purchase_amc`
--
ALTER TABLE `purchase_amc`
  MODIFY `sr_no` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT for table `registration`
--
ALTER TABLE `registration`
  MODIFY `sr_no` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
