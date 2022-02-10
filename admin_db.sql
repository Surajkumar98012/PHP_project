-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 14, 2021 at 09:43 AM
-- Server version: 10.3.15-MariaDB
-- PHP Version: 7.3.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `admin_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `cart`
--

CREATE TABLE `cart` (
  `id` int(11) NOT NULL,
  `customer` varchar(255) NOT NULL,
  `invoice` varchar(255) NOT NULL,
  `medicine_name` varchar(255) NOT NULL,
  `batch_no` varchar(255) NOT NULL,
  `mobile_no` varchar(250) NOT NULL,
  `exp` date NOT NULL,
  `quantity` int(111) NOT NULL,
  `price_perunit` int(111) NOT NULL,
  `date` date NOT NULL DEFAULT current_timestamp(),
  `pyment` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `cart`
--

INSERT INTO `cart` (`id`, `customer`, `invoice`, `medicine_name`, `batch_no`, `mobile_no`, `exp`, `quantity`, `price_perunit`, `date`, `pyment`) VALUES
(1, ' Suraj kumar', ' 478956', ' lupin(500mg)', ' 457892f', '', '2021-07-31', 25, 500, '2021-07-25', ' card'),
(4, ' Abishek', ' 478956', ' paracitamol(650mg)', ' 45641564', ' 9507624423', '2021-07-29', 20, 210, '2021-07-25', ' cash'),
(5, ' Sanjay singh', ' 478957', ' paracitamol(650mg)', ' 45654', ' 9685656565', '2021-07-30', 25, 24, '2021-07-25', ' card'),
(7, 'aman', '845465', 'telvam', '446546', '9445454524', '2021-07-29', 50, 25, '2021-07-28', 'card'),
(8, 'darsh', '4545', 'coloro', '4545412', '95464654465', '2021-07-22', 45, 95, '2021-07-30', 'card'),
(9, 'aasas', '44654', 'nemoslide', '46544', '95653232', '2021-07-29', 14, 95, '2021-08-19', 'card'),
(10, ' Prasad', ' 478956EF', ' Nemoclide(500mg)', ' 45175E', ' 9852214411', '2021-07-31', 25, 320, '2021-07-26', ' cash'),
(11, ' Suraj kumar', ' 478956', ' paracitamol(500mg)', ' 454232', ' 9854667215', '2021-09-03', 25, 210, '2021-08-02', ' card');

-- --------------------------------------------------------

--
-- Table structure for table `medicine`
--

CREATE TABLE `medicine` (
  `id` int(11) NOT NULL,
  `medicine_company` varchar(20) NOT NULL,
  `medicine_name` varchar(25) NOT NULL,
  `batch_no` varchar(250) NOT NULL,
  `mfg` date NOT NULL,
  `exp` date NOT NULL,
  `quantity` int(11) NOT NULL,
  `price_perunit` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `medicine`
--

INSERT INTO `medicine` (`id`, `medicine_company`, `medicine_name`, `batch_no`, `mfg`, `exp`, `quantity`, `price_perunit`) VALUES
(10, ' serum', ' covishield', ' 7985FE', '2021-07-10', '2021-11-14', 200, 50),
(11, ' serum', ' covaxin', ' 7985FE', '2021-07-16', '2021-07-24', 20, 20),
(15, ' serum', ' paracetamol', ' 4556gg', '2021-10-14', '2021-11-13', 700, 10);

-- --------------------------------------------------------

--
-- Table structure for table `pharmacist`
--

CREATE TABLE `pharmacist` (
  `id` int(11) NOT NULL,
  `number` varchar(15) NOT NULL,
  `address` text NOT NULL,
  `gender` varchar(10) NOT NULL,
  `user_name` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pharmacist`
--

INSERT INTO `pharmacist` (`id`, `number`, `address`, `gender`, `user_name`) VALUES
(1, '1234567890', 'delhi,india', '', '0'),
(6, '9507887678', 'Bihar,india', '', '0'),
(7, '9507887678', 'delhi,india,asia,world', 'male', '0'),
(8, '987412222', 'bihar,india', 'other', '0'),
(10, '11111111111', 'darbhanga', 'other', 'shiv');

-- --------------------------------------------------------

--
-- Table structure for table `pharmacy_users`
--

CREATE TABLE `pharmacy_users` (
  `id` int(11) NOT NULL,
  `user_name` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pharmacy_users`
--

INSERT INTO `pharmacy_users` (`id`, `user_name`, `password`, `name`) VALUES
(1, 'dishant', '456', 'Dishant Bhardwaj'),
(2, 'priyanka', 'def', 'Priyanka Mishra'),
(5, 'srjrnw8@gmail.com', '2a6f0fce0535b9ca43a24800ef27c85e', 'password'),
(6, 'srjrnw9@gmail.com', 'd0a48b424b22ffbbd10ef562373d606f', 'namess'),
(33, 'sdsdasd', '81dc9bdb52d04dc20036dbd8313ed055', 'sagar'),
(34, 'roh', '202cb962ac59075b964b07152d234b70', 'rohan'),
(36, 'shiv', '8d5e957f297893487bd98fa830fa6413', 'shivansh'),
(38, 'srjr@gmail.com', '202cb962ac59075b964b07152d234b70', 'shivam tiwari'),
(44, 'sssss@gmail.com', 'f7cfdde9db36af8e0d9a6d123d5c385e', 'Rohan Joshi');

-- --------------------------------------------------------

--
-- Table structure for table `suppliers`
--

CREATE TABLE `suppliers` (
  `id` int(11) NOT NULL,
  `name` varchar(25) NOT NULL,
  `number` varchar(20) NOT NULL,
  `address` text NOT NULL,
  `gender` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `suppliers`
--

INSERT INTO `suppliers` (`id`, `name`, `number`, `address`, `gender`) VALUES
(32, 'Suraj kumar', '9854667215', 'mumbai', 'male');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `user_name` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `user_name`, `password`, `name`) VALUES
(1, 'suraj', '123', 'surajparmar'),
(2, 'raju', 'abc', 'Rajkishan');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `cart`
--
ALTER TABLE `cart`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `medicine`
--
ALTER TABLE `medicine`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pharmacist`
--
ALTER TABLE `pharmacist`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pharmacy_users`
--
ALTER TABLE `pharmacy_users`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `suppliers`
--
ALTER TABLE `suppliers`
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
-- AUTO_INCREMENT for table `cart`
--
ALTER TABLE `cart`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `medicine`
--
ALTER TABLE `medicine`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `pharmacist`
--
ALTER TABLE `pharmacist`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `pharmacy_users`
--
ALTER TABLE `pharmacy_users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=45;

--
-- AUTO_INCREMENT for table `suppliers`
--
ALTER TABLE `suppliers`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=35;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
