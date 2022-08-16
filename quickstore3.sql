-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 29, 2020 at 08:30 AM
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
-- Database: `quickstore`
--

-- --------------------------------------------------------

--
-- Table structure for table `cart`
--

CREATE TABLE `cart` (
  `cart_id` int(11) NOT NULL,
  `user_id` int(11) DEFAULT NULL,
  `product_id` int(11) DEFAULT NULL,
  `quantity` int(11) DEFAULT NULL,
  `status` varchar(10) DEFAULT NULL,
  `price` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `cart`
--

INSERT INTO `cart` (`cart_id`, `user_id`, `product_id`, `quantity`, `status`, `price`) VALUES
(41, 8, 1, 5, 'close', 12);

-- --------------------------------------------------------

--
-- Table structure for table `customer`
--

CREATE TABLE `customer` (
  `user_id` int(11) NOT NULL,
  `password` varchar(10) DEFAULT NULL,
  `name` varchar(30) DEFAULT NULL,
  `email_id` varchar(30) DEFAULT NULL,
  `mobile_no` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `customer`
--

INSERT INTO `customer` (`user_id`, `password`, `name`, `email_id`, `mobile_no`) VALUES
(8, 'ayush', 'Ayush', 'ayush@gmail.com', 1234567890),
(9, 'ayur', 'Ayur', 'ayur@gmail.com', 1231231230);

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `order_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `product_id` int(11) NOT NULL,
  `price` int(11) NOT NULL,
  `mode_of_del` varchar(30) NOT NULL,
  `address` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`order_id`, `user_id`, `product_id`, `price`, `mode_of_del`, `address`) VALUES
(3, 8, 1, 12, 'Scheduled_Pick_Up', 'asdfdghgjhkjlhgfd');

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

CREATE TABLE `product` (
  `product_id` int(11) NOT NULL,
  `image` varchar(30) DEFAULT NULL,
  `Pname` varchar(30) DEFAULT NULL,
  `price` int(11) DEFAULT NULL,
  `quantity` int(11) DEFAULT NULL,
  `type` varchar(30) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`product_id`, `image`, `Pname`, `price`, `quantity`, `type`) VALUES
(1, 'noodle.jpg', 'Maggie Noodles', 12, 35, 'noodle'),
(2, 'noodle2.jpg', 'Chings Noodles', 10, 25, 'noodle'),
(3, 'p23.jpg', 'Dairy Milk Silk', 60, 40, 'chocolate'),
(4, 'p24.jpg', 'Dairy Milk Fruit&Nut', 40, 40, 'chocolate'),
(5, 'p19.jpg', 'Horlicks', 250, 30, 'healthDrink'),
(6, 'p22.jpg', 'Bornvita', 230, 30, 'healthDrink'),
(7, 'p3.jpg', 'Parle-G', 20, 100, 'biscuit'),
(8, 'p4.jpg', 'Hide & Seek', 30, 100, 'biscuit'),
(9, 'p2.jpg', 'Uncle Chips', 20, 20, 'chips'),
(10, 'p11.png', 'Diamond Chips', 15, 20, 'chips'),
(11, 'p8.jpg', 'India Gate Basmati Rice 1KG', 70, 40, 'rice'),
(12, 'p9.jpg', 'Dawat Basmati Rice 1KG', 65, 40, 'rice'),
(13, 'p17.jpg', 'Aashirwad Wheat Flour 10KG', 180, 40, 'flour'),
(14, 'p18.jpg', ' Laxmi Bhog Wheat Flour 10KG', 160, 40, 'flour'),
(15, 'p15.jpg', 'Kamal Toor Dal (1 KG )', 100, 50, 'pulse'),
(16, 'p16.jpg', 'Pukhraj Toor Dal (1KG)', 110, 50, 'pulse');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `cart`
--
ALTER TABLE `cart`
  ADD PRIMARY KEY (`cart_id`),
  ADD KEY `FK_user_id1` (`user_id`),
  ADD KEY `FK_product_id1` (`product_id`);

--
-- Indexes for table `customer`
--
ALTER TABLE `customer`
  ADD PRIMARY KEY (`user_id`),
  ADD UNIQUE KEY `email_id` (`email_id`);

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`order_id`),
  ADD KEY `user_id` (`user_id`),
  ADD KEY `product_id` (`product_id`);

--
-- Indexes for table `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`product_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `cart`
--
ALTER TABLE `cart`
  MODIFY `cart_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=42;

--
-- AUTO_INCREMENT for table `customer`
--
ALTER TABLE `customer`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `order_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `product`
--
ALTER TABLE `product`
  MODIFY `product_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `cart`
--
ALTER TABLE `cart`
  ADD CONSTRAINT `FK_product_id1` FOREIGN KEY (`product_id`) REFERENCES `product` (`product_id`),
  ADD CONSTRAINT `FK_user_id1` FOREIGN KEY (`user_id`) REFERENCES `customer` (`user_id`);

--
-- Constraints for table `orders`
--
ALTER TABLE `orders`
  ADD CONSTRAINT `orders_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `customer` (`user_id`),
  ADD CONSTRAINT `orders_ibfk_2` FOREIGN KEY (`product_id`) REFERENCES `product` (`product_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
