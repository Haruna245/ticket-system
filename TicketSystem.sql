-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 21, 2023 at 12:22 AM
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
-- Database: `ticketingsystem`
--

-- --------------------------------------------------------

--
-- Table structure for table `bookings`
--

CREATE TABLE `bookings` (
  `BookingID` int(11) NOT NULL,
  `UserID` int(11) NOT NULL,
  `EventID` int(11) NOT NULL,
  `TicketID` int(11) NOT NULL,
  `TotalPrice` double NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `event`
--

CREATE TABLE `event` (
  `EventID` int(11) NOT NULL,
  `EventName` varchar(255) NOT NULL,
  `Location` varchar(255) NOT NULL,
  `EventDate` date NOT NULL,
  `TicketPrice` double NOT NULL,
  `Time` time NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `event`
--

INSERT INTO `event` (`EventID`, `EventName`, `Location`, `EventDate`, `TicketPrice`, `Time`) VALUES
(4, 'devfest1', 'Accra digital Center', '2023-10-27', 50, '02:02:00'),
(5, 'Pentannivers', 'pent', '2023-10-20', 20, '22:16:00');

-- --------------------------------------------------------

--
-- Table structure for table `tickets`
--

CREATE TABLE `tickets` (
  `id` int(11) NOT NULL,
  `EventID` int(11) NOT NULL,
  `Amount` double NOT NULL,
  `Date` date NOT NULL,
  `TicketOwner` varchar(255) NOT NULL,
  `phoneNumber` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tickets`
--

INSERT INTO `tickets` (`id`, `EventID`, `Amount`, `Date`, `TicketOwner`, `phoneNumber`) VALUES
(4, 1, 20, '2023-09-30', 'Seidu Haruna', '0551763022'),
(5, 1, 20, '2023-10-05', 'Haruna Seidu', '0551763022'),
(7, 2, 20, '2023-10-05', 'kotei', '0551763022'),
(16, 2, 20, '2023-10-06', 'Haruna', '0551763022'),
(17, 1, 20, '2023-10-06', 'Seidu', '0551763022'),
(18, 2, 20, '2023-10-09', 'John', 'Doe'),
(19, 4, 50, '2023-10-20', 'seidu', '0551763022'),
(20, 4, 50, '2023-10-20', 'Alimam', '0551763022'),
(22, 4, 50, '2023-10-21', 'haruna', '0551763022'),
(24, 4, 50, '2023-10-21', 'john', '0551763022');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `Firstname` varchar(128) NOT NULL,
  `Lastname` varchar(128) NOT NULL,
  `Email` varchar(128) NOT NULL,
  `Password` varchar(255) NOT NULL,
  `phoneNumber` varchar(20) NOT NULL,
  `admin` tinyint(1) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `Firstname`, `Lastname`, `Email`, `Password`, `phoneNumber`, `admin`) VALUES
(4, 'Seidu', 'Haruna', 'haruna@gmail.com', '21232f297a57a5a743894a0e4a801fc3', '+44551763022', 0),
(5, 'Seidu', 'Haruna', 'harunaseidujnr@gmail.com', '21232f297a57a5a743894a0e4a801fc3', '+44551763022', 0),
(6, 'Alimam', 'Seidu', 'alimam@gmail.com', '21232f297a57a5a743894a0e4a801fc3', '0551763022', 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `bookings`
--
ALTER TABLE `bookings`
  ADD PRIMARY KEY (`BookingID`);

--
-- Indexes for table `event`
--
ALTER TABLE `event`
  ADD PRIMARY KEY (`EventID`);

--
-- Indexes for table `tickets`
--
ALTER TABLE `tickets`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `bookings`
--
ALTER TABLE `bookings`
  MODIFY `BookingID` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `event`
--
ALTER TABLE `event`
  MODIFY `EventID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `tickets`
--
ALTER TABLE `tickets`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
