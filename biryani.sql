-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 25, 2024 at 03:22 PM
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
-- Database: `biryani`
--

-- --------------------------------------------------------

--
-- Table structure for table `booking`
--

CREATE TABLE `booking` (
  `name` varchar(30) DEFAULT NULL,
  `email` varchar(20) NOT NULL,
  `item` varchar(30) NOT NULL,
  `price` int(11) NOT NULL,
  `address` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `booking`
--

INSERT INTO `booking` (`name`, `email`, `item`, `price`, `address`) VALUES
('kumar', 'kumar@gmail.com', '7 up', 30, 'vijayawada'),
('nikhil', 'nikhil@gmail.com', 'prawn biryani', 350, 'vijayawada'),
('pranav', 'pranav@gmail.com', 'mazaa', 25, 'mylavaram');

-- --------------------------------------------------------

--
-- Table structure for table `drinks`
--

CREATE TABLE `drinks` (
  `Item` varchar(30) DEFAULT NULL,
  `price` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `drinks`
--

INSERT INTO `drinks` (`Item`, `price`) VALUES
('pepsi', 20),
('mazaa', 25),
('7 up', 30),
('string', 10);

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

CREATE TABLE `login` (
  `email` varchar(30) NOT NULL,
  `name` varchar(20) DEFAULT NULL,
  `password` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `login`
--

INSERT INTO `login` (`email`, `name`, `password`) VALUES
('hero@gmail.com', 'hero', 'hero'),
('chari@gmail.com', 'chari', 'chari');

-- --------------------------------------------------------

--
-- Table structure for table `nonveg-items`
--

CREATE TABLE `nonveg-items` (
  `Item` varchar(30) DEFAULT NULL,
  `price` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `nonveg-items`
--

INSERT INTO `nonveg-items` (`Item`, `price`) VALUES
('wings biryani', 450),
('prawn biryani', 350),
('fish mandi', 500),
('Mixed mandi', 1800);

-- --------------------------------------------------------

--
-- Table structure for table `veg-items`
--

CREATE TABLE `veg-items` (
  `Item` varchar(20) NOT NULL,
  `price` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `veg-items`
--

INSERT INTO `veg-items` (`Item`, `price`) VALUES
('gobi paneer', 150),
('masala channa', 300),
('Palak panner', 200),
('paneer butter', 250);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `veg-items`
--
ALTER TABLE `veg-items`
  ADD PRIMARY KEY (`Item`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
