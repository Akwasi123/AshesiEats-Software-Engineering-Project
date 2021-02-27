-- phpMyAdmin SQL Dump
-- version 5.0.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 27, 2021 at 01:55 PM
-- Server version: 10.4.14-MariaDB
-- PHP Version: 7.4.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `sep`
--

-- --------------------------------------------------------

--
-- Table structure for table `cart`
--

CREATE DATABASE sep;

USE sep;

CREATE TABLE `cart` (
  `Cart_ID` int(11) NOT NULL,
  `Customer_ID` int(11) NOT NULL,
  `Product_ID` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `customers`
--

CREATE TABLE `customers` (
  `Customer_ID` int(11) NOT NULL,
  `CName` varchar(100) NOT NULL,
  `Gender` enum('Male','Female') NOT NULL,
  `CEmail` varchar(100) NOT NULL,
  `Password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `meal`
--

CREATE TABLE `meal` (
  `id` varchar(230) NOT NULL,
  `Breakfast` varchar(255) NOT NULL,
  `Lunch` varchar(255) NOT NULL,
  `Drink` varchar(255) NOT NULL,
  `Supper` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `meal`
--

INSERT INTO `meal` (`id`, `Breakfast`, `Lunch`, `Drink`, `Supper`) VALUES
('1', 'Porridge with Bread and omelette', 'Fried Rice with Grilled Chicken', 'Pineapple Juice', 'Banku with Okro Stew'),
('2', 'Tom Brown with Bread', 'Jollof Rice with Fried Chicken', 'Soft Drinks', 'Fufu and Goat Soup'),
('3', 'Porridge with Bread and omelette', 'Fried Rice with Grilled Chicken', 'Pineapple Juice', 'Banku with Okro Stew'),
('4', 'Tom Brown with Bread', 'Jollof Rice with Fried Chicken', 'Soft Drinks', 'Fufu and Goat Soup');

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

CREATE TABLE `product` (
  `Product_ID` int(11) NOT NULL,
  `Item_Name` varchar(100) NOT NULL,
  `Price` decimal(8,2) NOT NULL,
  `Picture` varchar(255) NOT NULL,
  `Restaurant_ID` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `restaurants`
--

CREATE TABLE `restaurants` (
  `Restaurant_ID` int(11) NOT NULL,
  `Name` varchar(100) NOT NULL,
  `REMail` varchar(100) NOT NULL,
  `Password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `signup`
--

CREATE TABLE `signup` (
  `id` int(230) NOT NULL,
  `Name` varchar(255) NOT NULL,
  `Email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `signup`
--

INSERT INTO `signup` (`id`, `Name`, `Email`, `password`) VALUES
(1, '', '', 'd41d8cd98f00b204e9800998ecf8427e'),
(2, '', '', 'd41d8cd98f00b204e9800998ecf8427e'),
(3, '', '', 'd41d8cd98f00b204e9800998ecf8427e'),
(4, '', '', 'd41d8cd98f00b204e9800998ecf8427e'),
(5, '', '', 'd41d8cd98f00b204e9800998ecf8427e'),
(6, '', '', 'd41d8cd98f00b204e9800998ecf8427e'),
(7, '', '', 'd41d8cd98f00b204e9800998ecf8427e'),
(8, '', '', 'd41d8cd98f00b204e9800998ecf8427e'),
(9, '', 'bright.okrah@ashesi.edu.gh', 'c4ca4238a0b923820dcc509a6f75849b'),
(10, '', 'bright.okrah@ashesi.edu.gh', '6512bd43d9caa6e02c990b0a82652dca'),
(11, '', '', '6512bd43d9caa6e02c990b0a82652dca'),
(12, '', 'bright.okrah@ashesi.edu.gh', '6512bd43d9caa6e02c990b0a82652dca'),
(13, '', 'bright.okrah@ashesi.edu.gh', 'c4ca4238a0b923820dcc509a6f75849b'),
(14, 'Bright', 'bright.okrah@ashesi.edu.gh', 'c4ca4238a0b923820dcc509a6f75849b'),
(15, '', '', 'd41d8cd98f00b204e9800998ecf8427e'),
(16, '', '', 'd41d8cd98f00b204e9800998ecf8427e'),
(17, '', '', 'd41d8cd98f00b204e9800998ecf8427e'),
(18, 'Nana', 'bright.okrah@ashesi.edu.gh', '6512bd43d9caa6e02c990b0a82652dca'),
(19, 'Bright Jnr O', 'b@gmail.com', 'bbc69d27003568a7a94626ce4337bc9d'),
(20, 'Okrah', 'bb@gmail.com', 'bbc69d27003568a7a94626ce4337bc9d'),
(21, 'Bright', 'b@gmail.com', 'bbc69d27003568a7a94626ce4337bc9d');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `cart`
--
ALTER TABLE `cart`
  ADD PRIMARY KEY (`Cart_ID`),
  ADD KEY `Customer_ID` (`Customer_ID`),
  ADD KEY `Product_ID` (`Product_ID`);

--
-- Indexes for table `customers`
--
ALTER TABLE `customers`
  ADD PRIMARY KEY (`Customer_ID`);

--
-- Indexes for table `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`Product_ID`),
  ADD KEY `Restaurant_ID` (`Restaurant_ID`);

--
-- Indexes for table `restaurants`
--
ALTER TABLE `restaurants`
  ADD PRIMARY KEY (`Restaurant_ID`);

--
-- Indexes for table `signup`
--
ALTER TABLE `signup`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `cart`
--
ALTER TABLE `cart`
  MODIFY `Cart_ID` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `customers`
--
ALTER TABLE `customers`
  MODIFY `Customer_ID` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `product`
--
ALTER TABLE `product`
  MODIFY `Product_ID` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `restaurants`
--
ALTER TABLE `restaurants`
  MODIFY `Restaurant_ID` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `signup`
--
ALTER TABLE `signup`
  MODIFY `id` int(230) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `cart`
--
ALTER TABLE `cart`
  ADD CONSTRAINT `cart_ibfk_1` FOREIGN KEY (`Customer_ID`) REFERENCES `customers` (`Customer_ID`),
  ADD CONSTRAINT `cart_ibfk_2` FOREIGN KEY (`Product_ID`) REFERENCES `product` (`Product_ID`);

--
-- Constraints for table `product`
--
ALTER TABLE `product`
  ADD CONSTRAINT `product_ibfk_1` FOREIGN KEY (`Restaurant_ID`) REFERENCES `restaurants` (`Restaurant_ID`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
