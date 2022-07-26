-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 26, 2022 at 05:41 AM
-- Server version: 10.4.21-MariaDB
-- PHP Version: 8.0.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
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
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `id` int(11) NOT NULL,
  `statusId` int(11) DEFAULT NULL,
  `productId` int(11) DEFAULT NULL,
  `userId` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`id`, `statusId`, `productId`, `userId`) VALUES
(3, 3, 2, 7),
(4, 1, 2, 4);

-- --------------------------------------------------------

--
-- Table structure for table `order_status`
--

CREATE TABLE `order_status` (
  `id` int(11) NOT NULL,
  `status` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `order_status`
--

INSERT INTO `order_status` (`id`, `status`) VALUES
(1, 'Pending'),
(2, 'Completed'),
(3, 'Cancelled'),
(4, 'Refunded');

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` int(11) NOT NULL,
  `category_id` int(11) DEFAULT NULL,
  `vendor_id` int(11) DEFAULT NULL,
  `name` varchar(1000) DEFAULT NULL,
  `price` int(11) DEFAULT NULL,
  `details` mediumtext DEFAULT NULL,
  `image_url` varchar(10000) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `category_id`, `vendor_id`, `name`, `price`, `details`, `image_url`) VALUES
(1, 4, 1, 'Mi Smart Band 6 / 1.56\" Display', 5999, 'Body net weight: 12.8 gWaterproof rating: 5 ATMWireless connection: Bluetooth 5.0', 'https://static-01.daraz.com.np/p/d63af36fa56dc6f729bb9f62705570e0.jpg'),
(2, 11, 2, 'Aux Audio Cable - 1.5M - 3.5mm', 94, 'Premium Quality 3.5mm Lenght 1.5M Approx.', 'https://static-01.daraz.com.np/p/06046606f2b30aaef116e54f2d0ddef5.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `product_categories`
--

CREATE TABLE `product_categories` (
  `id` int(11) NOT NULL,
  `category` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `product_categories`
--

INSERT INTO `product_categories` (`id`, `category`) VALUES
(2, 'Health and Beauty'),
(4, 'Electronic Devices'),
(5, 'Home and Lifestyle'),
(6, 'Sports and Outdoor'),
(7, 'TV and Home Appliances'),
(8, 'Mens Fashion'),
(9, 'Womens Fashion'),
(10, 'Watches, Bags, Jewellery'),
(11, 'Electronic Accessories');

-- --------------------------------------------------------

--
-- Table structure for table `user_info`
--

CREATE TABLE `user_info` (
  `id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `email` varchar(100) NOT NULL,
  `phone` int(100) NOT NULL,
  `password` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user_info`
--

INSERT INTO `user_info` (`id`, `name`, `email`, `phone`, `password`) VALUES
(3, 'Subha Man Shrestha', 'subha@gmail.com', 987654321, 'iLoveDota123'),
(4, 'Aditya Das Tuladhar', 'aditya.tuladhar@gmail.com', 417591434, 'asdf12345'),
(7, 'Yashu Sthapit', 'yashu@gmail.com', 2147483647, 'padandas69');

-- --------------------------------------------------------

--
-- Table structure for table `vendor_info`
--

CREATE TABLE `vendor_info` (
  `id` int(11) NOT NULL,
  `name` varchar(1000) NOT NULL,
  `email` varchar(1000) NOT NULL,
  `phone` int(100) NOT NULL,
  `address` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `vendor_info`
--

INSERT INTO `vendor_info` (`id`, `name`, `email`, `phone`, `address`) VALUES
(1, 'Xiaomi', 'xiaomi@gmail.com', 2041435214, 'New road'),
(2, 'Fantech', 'fantech@gmail.com', 188412349, 'Dillibazar');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`id`),
  ADD KEY `statusId` (`statusId`),
  ADD KEY `productId` (`productId`),
  ADD KEY `userId` (`userId`);

--
-- Indexes for table `order_status`
--
ALTER TABLE `order_status`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`),
  ADD KEY `category_id` (`category_id`),
  ADD KEY `vendor_id` (`vendor_id`);

--
-- Indexes for table `product_categories`
--
ALTER TABLE `product_categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user_info`
--
ALTER TABLE `user_info`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `vendor_info`
--
ALTER TABLE `vendor_info`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `order_status`
--
ALTER TABLE `order_status`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `product_categories`
--
ALTER TABLE `product_categories`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `user_info`
--
ALTER TABLE `user_info`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `vendor_info`
--
ALTER TABLE `vendor_info`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `orders`
--
ALTER TABLE `orders`
  ADD CONSTRAINT `orders_ibfk_1` FOREIGN KEY (`statusId`) REFERENCES `order_status` (`id`),
  ADD CONSTRAINT `orders_ibfk_2` FOREIGN KEY (`productId`) REFERENCES `products` (`id`),
  ADD CONSTRAINT `orders_ibfk_3` FOREIGN KEY (`userId`) REFERENCES `user_info` (`id`);

--
-- Constraints for table `products`
--
ALTER TABLE `products`
  ADD CONSTRAINT `products_ibfk_1` FOREIGN KEY (`category_id`) REFERENCES `product_categories` (`id`),
  ADD CONSTRAINT `products_ibfk_2` FOREIGN KEY (`vendor_id`) REFERENCES `vendor_info` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
