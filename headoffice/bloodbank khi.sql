-- phpMyAdmin SQL Dump
-- version 4.9.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 22, 2020 at 12:06 PM
-- Server version: 10.4.8-MariaDB
-- PHP Version: 7.3.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `bloodbank`
--

-- --------------------------------------------------------

--
-- Table structure for table `donations`
--

CREATE TABLE `donations` (
  `Donation_id` int(11) NOT NULL,
  `Date` date NOT NULL DEFAULT current_timestamp(),
  `Quantity` varchar(10) NOT NULL,
  `Donor_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `donations`
--

INSERT INTO `donations` (`Donation_id`, `Date`, `Quantity`, `Donor_id`) VALUES
(1, '2020-01-22', '2ltr', 1),
(3, '2020-01-22', '3ltr', 1),
(4, '2020-01-22', '4ltr', 2),
(5, '2020-01-22', '4ltr', 6),
(6, '2020-01-22', '1ltr', 4);

-- --------------------------------------------------------

--
-- Table structure for table `donors`
--

CREATE TABLE `donors` (
  `DonorID` int(11) NOT NULL,
  `Name` varchar(20) NOT NULL,
  `Email` varchar(30) NOT NULL,
  `Phone_no` varchar(15) NOT NULL,
  `DOB` varchar(10) NOT NULL,
  `City` varchar(15) NOT NULL,
  `Blood_gp` varchar(10) NOT NULL,
  `ref` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `donors`
--

INSERT INTO `donors` (`DonorID`, `Name`, `Email`, `Phone_no`, `DOB`, `City`, `Blood_gp`, `ref`) VALUES
(1, 'ibad', 'ibad@hotmail.com', '3145448644', '11/12/1999', 'Islamabad', 'a-ve', 0),
(2, 'moiz', 'moiz@yahoo.com', '0000000000', '21/12/1999', 'Islamabad', 'b+ve', 0),
(3, 'kashif', 'kashf@hotmail.com', '0000000', '9/3/2005', 'Karachi', 'o+ve', 0),
(4, 'rehan', 'rehan@gmail.com', '0000000', '19/3/2001', 'Karachi', 'o-ve', 0),
(5, 'Tahami Tofique', 'tahamitofique@hotmail.com', '3145448644', '16/1/1999', 'Lahore', 'b-ve', 0),
(6, 'saif', 'said@yahoo.com', '00000000', '23/2/1998', 'Lahore', 'b+ve', 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `donations`
--
ALTER TABLE `donations`
  ADD PRIMARY KEY (`Donation_id`),
  ADD KEY `Donor_id` (`Donor_id`);

--
-- Indexes for table `donors`
--
ALTER TABLE `donors`
  ADD PRIMARY KEY (`DonorID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `donations`
--
ALTER TABLE `donations`
  MODIFY `Donation_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `donors`
--
ALTER TABLE `donors`
  MODIFY `DonorID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `donations`
--
ALTER TABLE `donations`
  ADD CONSTRAINT `donations_ibfk_1` FOREIGN KEY (`Donor_id`) REFERENCES `donors` (`DonorID`) ON DELETE NO ACTION ON UPDATE NO ACTION;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
