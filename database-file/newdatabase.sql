-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 25, 2023 at 06:07 AM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `newdatabase`
--

-- --------------------------------------------------------

--
-- Table structure for table `bookings`
--

CREATE TABLE `bookings` (
  `bookingid` int(11) NOT NULL,
  `personname` varchar(255) NOT NULL,
  `bookingdate` varchar(11) NOT NULL,
  `bookingtime` varchar(11) NOT NULL,
  `email` varchar(255) NOT NULL,
  `service` varchar(255) NOT NULL,
  `charges` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `bookings`
--

INSERT INTO `bookings` (`bookingid`, `personname`, `bookingdate`, `bookingtime`, `email`, `service`, `charges`) VALUES
(15, 'Aditi', '2023-08-04', '11:04', 'aditi@gmail.com', '1', ''),
(16, 'Asha', '2023-08-12', '14:05', 'asha@gmail.com', '14', ''),
(17, 'Richa', '2023-09-05', '15:07', 'richa@gmail.com', '3', '');

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE `category` (
  `id` int(11) NOT NULL,
  `cname` varchar(255) NOT NULL,
  `service` varchar(255) NOT NULL,
  `charges` varchar(255) NOT NULL,
  `available` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`id`, `cname`, `service`, `charges`, `available`) VALUES
(1, 'Hair', 'Spa', '2000/-', ''),
(2, 'Skin', 'dry skin', '2000/-', ''),
(3, 'nails', 'manicure', '5000/-', ''),
(4, 'Makeup', 'bridal makeup', '40,000/-', ''),
(5, 'Makeup', 'HD-Makeup', '30,000/-', ''),
(6, 'Makeup', 'Party Makeup', '2000/-', ''),
(12, 'Arms', 'Waxing', '500/-', ''),
(13, 'makeup', 'HD-Makeup', '40,000/-', ''),
(14, 'Hair', 'Smoothening', '2000/-', ''),
(15, 'Arms', 'Waxing', '500/-', ''),
(16, 'nails', 'manicure', '8000/-', ''),
(17, 'Nails', 'Pedicure', '10,000/-', '');

-- --------------------------------------------------------

--
-- Table structure for table `contactus`
--

CREATE TABLE `contactus` (
  `id` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `query` varchar(255) NOT NULL,
  `phone` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `contactus`
--

INSERT INTO `contactus` (`id`, `username`, `email`, `query`, `phone`) VALUES
(1, 'Ayana', 'ayana@gmail.com', 'need home service', '4444544445'),
(2, 'Ayana', 'ayana@gmail.com', 'need home service', '4444544445');

-- --------------------------------------------------------

--
-- Table structure for table `hair`
--

CREATE TABLE `hair` (
  `id` int(11) NOT NULL,
  `pimage` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `hair`
--

INSERT INTO `hair` (`id`, `pimage`) VALUES
(17, '1692030871791.jpg'),
(18, '1692030879863.jpg'),
(19, '1692030894441.jpg'),
(20, '1692031016053.jpg'),
(22, '1692031031136.jpg'),
(23, '1692031043011.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `logintable`
--

CREATE TABLE `logintable` (
  `id` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `logintable`
--

INSERT INTO `logintable` (`id`, `username`, `password`) VALUES
(1, 'admin', 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `makeup`
--

CREATE TABLE `makeup` (
  `id` int(11) NOT NULL,
  `pimage` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `makeup`
--

INSERT INTO `makeup` (`id`, `pimage`) VALUES
(1, '1692008850031.jpg'),
(2, '1692008857850.jpg'),
(3, '1692008873284.jpg'),
(4, '1692031385640.png'),
(5, '1692031629875.jpg'),
(6, '1692031643169.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `nails`
--

CREATE TABLE `nails` (
  `id` int(11) NOT NULL,
  `pimage` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `nails`
--

INSERT INTO `nails` (`id`, `pimage`) VALUES
(7, '1692031255315.jpg'),
(8, '1692031265318.jpg'),
(9, '1692031273855.jpg'),
(10, '1692031279851.jpg'),
(11, '1692031289113.jpg'),
(12, '1692031315146.jpg'),
(13, '1692111601519.jpg'),
(14, '1692111609497.jpg'),
(15, '1692111625628.jpg'),
(17, '1692111636948.jpg'),
(18, '1692725446085.jpg'),
(19, '1692725454503.jpg'),
(20, '1692725460832.jpg'),
(21, '1692725467967.jpg'),
(22, '1692725503312.jpg'),
(23, '1692725509765.jpg'),
(24, '1692725517799.jpg'),
(25, '1692725524326.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `signup`
--

CREATE TABLE `signup` (
  `id` int(11) NOT NULL,
  `fullname` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `signup`
--

INSERT INTO `signup` (`id`, `fullname`, `email`, `password`) VALUES
(1, 'Ayana', 'ayana@gmail.com', '1234'),
(2, 'richa', 'richa@gmail.com', '1234'),
(4, '', '', ''),
(5, 'harbans', 'harbans@gmail.com', '12345'),
(6, 'harbans', 'harbans@gmail.com', '12345'),
(7, 'harbans', 'harbans@gmail.com', '12345');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `bookings`
--
ALTER TABLE `bookings`
  ADD PRIMARY KEY (`bookingid`);

--
-- Indexes for table `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `contactus`
--
ALTER TABLE `contactus`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `hair`
--
ALTER TABLE `hair`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `logintable`
--
ALTER TABLE `logintable`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `makeup`
--
ALTER TABLE `makeup`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `nails`
--
ALTER TABLE `nails`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `signup`
--
ALTER TABLE `signup`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `bookings`
--
ALTER TABLE `bookings`
  MODIFY `bookingid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `category`
--
ALTER TABLE `category`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `contactus`
--
ALTER TABLE `contactus`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `hair`
--
ALTER TABLE `hair`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT for table `logintable`
--
ALTER TABLE `logintable`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `makeup`
--
ALTER TABLE `makeup`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `nails`
--
ALTER TABLE `nails`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT for table `signup`
--
ALTER TABLE `signup`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
