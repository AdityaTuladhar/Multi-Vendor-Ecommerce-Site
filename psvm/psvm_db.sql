-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 17, 2021 at 03:24 PM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.4.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `psvm_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `contacts_tbl`
--

CREATE TABLE `contacts_tbl` (
  `cid` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `message` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `contacts_tbl`
--

INSERT INTO `contacts_tbl` (`cid`, `name`, `email`, `message`) VALUES
(1, 'Yashu Sthapit', 'yashusthapit@gmail.com', 'I think this site is best for any users.');

-- --------------------------------------------------------

--
-- Table structure for table `services_tbl`
--

CREATE TABLE `services_tbl` (
  `id` int(11) NOT NULL,
  `s_name` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `services_tbl`
--

INSERT INTO `services_tbl` (`id`, `s_name`) VALUES
(2, 'Carpenter'),
(3, 'Mechanic'),
(4, 'Movers'),
(5, 'ISP'),
(6, 'Cab Facility'),
(7, 'Medical'),
(8, 'Builders'),
(10, 'Testing'),
(16, 'Plumber');

-- --------------------------------------------------------

--
-- Table structure for table `users_tbl`
--

CREATE TABLE `users_tbl` (
  `id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `password` varchar(20) NOT NULL,
  `email` varchar(100) NOT NULL,
  `phone` varchar(20) NOT NULL,
  `image` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users_tbl`
--

INSERT INTO `users_tbl` (`id`, `name`, `password`, `email`, `phone`, `image`) VALUES
(3, 'ajashala', 'ajashala', 'ajashala@gmail.com', '9867897654', '../uploads/DSC_0340.JPG'),
(4, 'yashusthapit', 'yashu', 'yashusthapit@gmail.com', '9808768922', '../uploads/778717_127356074101975_1704838083_o.jpg'),
(5, 'rashik', 'rashik', 'rashik@gmail.com', '987658922', '../uploads/DSC_0401.JPG'),
(6, '', '', '', '', '../uploads/'),
(7, 'Subha', 'subha', 'subha9808@gmail.com', '981234748', '../uploads/DSC_0350.JPG');

-- --------------------------------------------------------

--
-- Table structure for table `workers_tbl`
--

CREATE TABLE `workers_tbl` (
  `eid` int(11) NOT NULL,
  `sid` int(11) NOT NULL,
  `w_name` varchar(50) NOT NULL,
  `w_address` varchar(50) NOT NULL,
  `w_phone` varchar(20) NOT NULL,
  `w_email` varchar(50) NOT NULL,
  `w_image` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `workers_tbl`
--

INSERT INTO `workers_tbl` (`eid`, `sid`, `w_name`, `w_address`, `w_phone`, `w_email`, `w_image`) VALUES
(1, 3, 'Yashu Sthapit', 'Kathmandu', 'Kathmandu', 'sthapit.yashu@gmail.com', '../uploads/10390160_763215783742464_2494418227092730470_n.jpg'),
(2, 5, 'Sarthak Gurung', 'Ramkot', '9841221982', 'sarthakgurung@gmail.com', '../uploads/dummy3.jpg'),
(3, 4, 'Ajashala Bajracharya', 'Hadigaun', '9841329764', 'ajashala@gmail.com', '../uploads/aza.jpg'),
(4, 1, 'Subha Man Shrestha', 'Lagan', '9818654876', 'subha9808@gmail.com', '../uploads/subha.jpg'),
(6, 10, 'Aditya Tuladhar', 'Swyambhu', '9808765763', 'aditya@gmail.com', '../uploads/dummy2.jpg'),
(7, 7, 'Lishu Maharjan', 'Bhimsenthan', '9863458768', 'maharjanlishu@gmail.com', '../uploads/dummy2.jpg'),
(9, 4, 'Liza Maharjan', 'Lagan Tole', '982217893', 'liza@gmail.com', '../uploads/dummy2.jpg');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `contacts_tbl`
--
ALTER TABLE `contacts_tbl`
  ADD PRIMARY KEY (`cid`);

--
-- Indexes for table `services_tbl`
--
ALTER TABLE `services_tbl`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users_tbl`
--
ALTER TABLE `users_tbl`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `workers_tbl`
--
ALTER TABLE `workers_tbl`
  ADD PRIMARY KEY (`eid`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `contacts_tbl`
--
ALTER TABLE `contacts_tbl`
  MODIFY `cid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `services_tbl`
--
ALTER TABLE `services_tbl`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `users_tbl`
--
ALTER TABLE `users_tbl`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `workers_tbl`
--
ALTER TABLE `workers_tbl`
  MODIFY `eid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
