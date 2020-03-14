-- phpMyAdmin SQL Dump
-- version 5.0.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Mar 14, 2020 at 11:08 AM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.4.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `bhajiwaala`
--

-- --------------------------------------------------------

--
-- Table structure for table `customer`
--

CREATE TABLE `customer` (
  `id` int(11) NOT NULL,
  `cid` int(11) NOT NULL,
  `name` varchar(256) NOT NULL,
  `phone` varchar(256) NOT NULL,
  `email` varchar(256) NOT NULL,
  `address` varchar(256) NOT NULL,
  `gstin` varchar(256) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `customer`
--

INSERT INTO `customer` (`id`, `cid`, `name`, `phone`, `email`, `address`, `gstin`) VALUES
(1, 1, 'Karan patil', '8169157715', 'Karan2000apatil@gmail.com', 'N m joshi marg', 'G15232'),
(2, 1, 'Love it restarunt', '8912981212', 'Loveit@c.in', 'N m joshi marg', '#ihasiudhi');

-- --------------------------------------------------------

--
-- Table structure for table `C_order`
--

CREATE TABLE `C_order` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `customer_id` int(11) NOT NULL,
  `products` varchar(256) NOT NULL,
  `date` varchar(256) NOT NULL,
  `total_amount` varchar(256) NOT NULL,
  `paid_amount` varchar(256) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `invoice`
--

CREATE TABLE `invoice` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `bill_id` int(11) NOT NULL,
  `order_type` varchar(256) NOT NULL,
  `products` varchar(256) NOT NULL,
  `total_amount` varchar(256) NOT NULL,
  `paid_amount` varchar(256) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `name` varchar(256) CHARACTER SET utf8 DEFAULT NULL,
  `marathi` varchar(256) CHARACTER SET utf8 NOT NULL,
  `hindi` varchar(256) CHARACTER SET utf8 NOT NULL,
  `weight_type` varchar(256) NOT NULL,
  `gst` varchar(256) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `user_id`, `name`, `marathi`, `hindi`, `weight_type`, `gst`) VALUES
(7, 1, 'Onion', 'कांदा', 'कांदा', 'Kg', ''),
(8, 1, ' green beans', 'फरसबी', 'फरसबी', 'Kg', '');

-- --------------------------------------------------------

--
-- Table structure for table `seller`
--

CREATE TABLE `seller` (
  `id` int(11) NOT NULL,
  `cid` int(11) NOT NULL,
  `name` varchar(256) NOT NULL,
  `phone` varchar(256) NOT NULL,
  `email` varchar(256) NOT NULL,
  `address` varchar(256) NOT NULL,
  `gstin` varchar(256) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `seller`
--

INSERT INTO `seller` (`id`, `cid`, `name`, `phone`, `email`, `address`, `gstin`) VALUES
(1, 1, 'Yash karade', '9892440489', 'Yash@dayx.in', 'Opposite rani bagh', 'G1266');

-- --------------------------------------------------------

--
-- Table structure for table `S_order`
--

CREATE TABLE `S_order` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `seller_id` int(11) NOT NULL,
  `products` varchar(256) NOT NULL,
  `total_amount` varchar(256) NOT NULL,
  `paid_amount` varchar(256) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `name` varchar(256) NOT NULL,
  `password` varchar(256) NOT NULL,
  `phone` varchar(256) NOT NULL,
  `email` varchar(256) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `name`, `password`, `phone`, `email`) VALUES
(1, 'admin ', '$2y$10$RNtRYVBikBp/vt8iPSq.JuQSgnT6g17ErMokBkvJHPAt3Y2b2TYnS', '8169157715', 'admin@bhajiwaala.com');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `customer`
--
ALTER TABLE `customer`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `C_order`
--
ALTER TABLE `C_order`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `invoice`
--
ALTER TABLE `invoice`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `seller`
--
ALTER TABLE `seller`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `S_order`
--
ALTER TABLE `S_order`
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
-- AUTO_INCREMENT for table `customer`
--
ALTER TABLE `customer`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `C_order`
--
ALTER TABLE `C_order`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `invoice`
--
ALTER TABLE `invoice`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `seller`
--
ALTER TABLE `seller`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `S_order`
--
ALTER TABLE `S_order`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
