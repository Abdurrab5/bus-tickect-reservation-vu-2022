-- phpMyAdmin SQL Dump
-- version 5.1.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 05, 2022 at 02:11 PM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 7.4.29

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `bus_service`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `admin_id` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`admin_id`, `username`, `password`, `email`) VALUES
(1, 'admin', 'admin', 'admin@1234');

-- --------------------------------------------------------

--
-- Table structure for table `bookings`
--

CREATE TABLE `bookings` (
  `booking_id` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `s_id` int(11) NOT NULL,
  `bus_no` varchar(50) NOT NULL,
  `seat_no` varchar(50) NOT NULL,
  `dep_from` varchar(50) NOT NULL,
  `dep_to` varchar(50) NOT NULL,
  `amount` int(11) NOT NULL,
  `dep_date` varchar(50) NOT NULL,
  `dep_time` varchar(50) NOT NULL,
  `status` tinyint(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `bookings`
--

INSERT INTO `bookings` (`booking_id`, `username`, `s_id`, `bus_no`, `seat_no`, `dep_from`, `dep_to`, `amount`, `dep_date`, `dep_time`, `status`) VALUES
(1, '0', 7, 'kll3333', '1', 'karachi', 'multan', 3000, '0000-00-00', '00:09:00', 1),
(3, 'aqib', 6, 'lhr-3344', '3', 'karachi', 'lahore', 3000, '20-06-2022', '0900', 1),
(4, 'aqib', 7, 'kll3333', '1', 'karachi', 'multan', 3000, '21/06/2022', '0900', 1),
(5, 'aqib', 6, 'lhr-3344', '3', 'karachi', 'lahore', 3000, '20-06-2022', '0900', 1);

-- --------------------------------------------------------

--
-- Table structure for table `buses`
--

CREATE TABLE `buses` (
  `bus_id` int(11) NOT NULL,
  `bus_no` varchar(50) NOT NULL,
  `seat_capacity` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `buses`
--

INSERT INTO `buses` (`bus_id`, `bus_no`, `seat_capacity`) VALUES
(17, 'lhr-3344', 10),
(18, 'kll3333', 10),
(19, 'sde4444', 7);

-- --------------------------------------------------------

--
-- Table structure for table `passenger`
--

CREATE TABLE `passenger` (
  `passenger_id` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `phone` bigint(15) NOT NULL,
  `address` varchar(50) NOT NULL,
  `gender` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `passenger`
--

INSERT INTO `passenger` (`passenger_id`, `username`, `password`, `email`, `phone`, `address`, `gender`) VALUES
(1, 'aqib', '1234', 'aqib@gmail.com', 3456789456, 'karachi', 'male'),
(2, 'sajid ', '1234', 'sajid@gmail.com', 3334455666, 'gujranwala', 'male'),
(3, 'zain ', '1234', 'zain@gmail.com', 3445566777, 'lahore', 'male');

-- --------------------------------------------------------

--
-- Table structure for table `schedule`
--

CREATE TABLE `schedule` (
  `s_id` int(11) NOT NULL,
  `bus_no` varchar(50) NOT NULL,
  `dep_from` varchar(50) NOT NULL,
  `dep_to` varchar(50) NOT NULL,
  `dep_date` varchar(50) NOT NULL,
  `dep_time` varchar(50) NOT NULL,
  `fair` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `schedule`
--

INSERT INTO `schedule` (`s_id`, `bus_no`, `dep_from`, `dep_to`, `dep_date`, `dep_time`, `fair`) VALUES
(6, 'lhr-3344', 'karachi', 'lahore', '20-06-2022', '0900', 4000),
(7, 'kll3333', 'karachi', 'multan', '21/06/2022', '0900', 3000);

-- --------------------------------------------------------

--
-- Table structure for table `seats`
--

CREATE TABLE `seats` (
  `seat_id` int(11) NOT NULL,
  `bus_no` varchar(50) NOT NULL,
  `seat_no` varchar(50) NOT NULL,
  `status` tinyint(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `seats`
--

INSERT INTO `seats` (`seat_id`, `bus_no`, `seat_no`, `status`) VALUES
(35, 'lhr-3344', '1', 1),
(36, 'lhr-3344', '2', 1),
(37, 'lhr-3344', '3', 1),
(38, 'lhr-3344', '4', 0),
(39, 'lhr-3344', '5', 0),
(40, 'lhr-3344', '6', 0),
(41, 'lhr-3344', '7', 0),
(42, 'lhr-3344', '8', 0),
(43, 'lhr-3344', '9', 0),
(44, 'lhr-3344', '10', 0),
(45, 'kll3333', '1', 1),
(46, 'kll3333', '2', 0),
(47, 'kll3333', '3', 0),
(48, 'kll3333', '4', 0),
(49, 'kll3333', '5', 0),
(50, 'kll3333', '6', 0),
(51, 'kll3333', '7', 0),
(52, 'kll3333', '8', 0),
(53, 'kll3333', '9', 0),
(54, 'kll3333', '10', 0),
(55, 'sde4444', '1', 0),
(56, 'sde4444', '2', 0),
(57, 'sde4444', '3', 0),
(58, 'sde4444', '4', 0),
(59, 'sde4444', '5', 0),
(60, 'sde4444', '6', 0),
(61, 'sde4444', '7', 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`admin_id`);

--
-- Indexes for table `bookings`
--
ALTER TABLE `bookings`
  ADD PRIMARY KEY (`booking_id`);

--
-- Indexes for table `buses`
--
ALTER TABLE `buses`
  ADD PRIMARY KEY (`bus_id`);

--
-- Indexes for table `passenger`
--
ALTER TABLE `passenger`
  ADD PRIMARY KEY (`passenger_id`);

--
-- Indexes for table `schedule`
--
ALTER TABLE `schedule`
  ADD PRIMARY KEY (`s_id`);

--
-- Indexes for table `seats`
--
ALTER TABLE `seats`
  ADD PRIMARY KEY (`seat_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `admin_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `bookings`
--
ALTER TABLE `bookings`
  MODIFY `booking_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `buses`
--
ALTER TABLE `buses`
  MODIFY `bus_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `passenger`
--
ALTER TABLE `passenger`
  MODIFY `passenger_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `schedule`
--
ALTER TABLE `schedule`
  MODIFY `s_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `seats`
--
ALTER TABLE `seats`
  MODIFY `seat_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=62;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
