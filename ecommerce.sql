-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 11, 2019 at 06:00 PM
-- Server version: 10.1.38-MariaDB
-- PHP Version: 7.3.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ecommerce`
--

-- --------------------------------------------------------

--
-- Table structure for table `admins`
--

CREATE TABLE `admins` (
  `id` int(11) NOT NULL,
  `AdminName` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `FirstName` varchar(255) NOT NULL,
  `LastName` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admins`
--

INSERT INTO `admins` (`id`, `AdminName`, `password`, `FirstName`, `LastName`) VALUES
(1, 'Prtyksh', '1234321', 'Pratyaksh', 'Gupta');

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `category` varchar(255) NOT NULL,
  `created_at` date NOT NULL,
  `image_path` varchar(255) NOT NULL,
  `admin_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `name`, `category`, `created_at`, `image_path`, `admin_id`) VALUES
(16, 'DenimJacket', 'Fashion', '2019-10-31', 'http://[::1]/CodeIgniter-3.1.10/uploads/denimJacket.PNG', 1),
(17, 'Guitar', 'Electronics', '2019-10-31', 'http://[::1]/CodeIgniter-3.1.10/uploads/guitar.PNG', 1),
(18, 'Speaker', 'Home', '2019-10-31', 'http://[::1]/CodeIgniter-3.1.10/uploads/HomeSpeaker.PNG', 1),
(19, 'Laptop', 'Electronics', '2019-10-31', 'http://[::1]/CodeIgniter-3.1.10/uploads/laptop.PNG', 1),
(20, 'Shaker', 'Sports', '2019-10-31', 'http://[::1]/CodeIgniter-3.1.10/uploads/sportsGYM.PNG', 1),
(21, 'Watch', 'Sports', '2019-10-31', 'http://[::1]/CodeIgniter-3.1.10/uploads/watch.PNG', 1);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `FirstName` varchar(20) NOT NULL,
  `LastName` varchar(20) NOT NULL,
  `Email` text NOT NULL,
  `Password` varchar(30) NOT NULL,
  `Gender` varchar(10) NOT NULL,
  `month` varchar(20) NOT NULL,
  `day` int(11) NOT NULL,
  `year` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `FirstName`, `LastName`, `Email`, `Password`, `Gender`, `month`, `day`, `year`) VALUES
(1, 'Pratyaksh', 'Gupta', 'pratyakshgupta@gmail.com', '1e34rs6', 'Male', '', 0, 0),
(2, 'Samaksh', 'Kalsotra', 'kalsotras@gmail.com', 'samaksh', 'M', '09', 19, 1998);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admins`
--
ALTER TABLE `admins`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admins`
--
ALTER TABLE `admins`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
