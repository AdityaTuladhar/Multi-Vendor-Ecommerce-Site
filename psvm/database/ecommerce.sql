-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 28, 2022 at 08:08 AM
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
(1, 4, 1, 'Mi Smart Band 6 / 1.56\" Display', 5999, 'Body net weight: 12.8 g<br>Waterproof rating: 5 ATM<br>Wireless connection: Bluetooth 5.0', 'https://static-01.daraz.com.np/p/d63af36fa56dc6f729bb9f62705570e0.jpg'),
(2, 11, 2, 'Aux Audio Cable - 1.5M - 3.5mm', 94, 'Premium Quality<br> 3.5mm <br>Lenght 1.5M Approx.', 'https://static-01.daraz.com.np/p/06046606f2b30aaef116e54f2d0ddef5.jpg'),
(3, 8, 4, 'Traditional Cotton Retro Summer Shirts For Men', 1049, 'Material : FINE COTTON Traditional <br>Clothing : Top <br>gender : Men<br> Fabric Type : Yes <br>origin : NP (Origin)', 'https://static-01.daraz.com.np/p/e936b96644e7e4447f234445f57b3640.jpg'),
(4, 9, 5, 'Womens Art Silk Kurta', 2007, 'Color Name: Blue<br> Material: Art Silk with sleeveless Straight fit Calf length', 'https://static-01.daraz.com.np/p/ae97963775c5dca696f2236cf516c0a9.jpg'),
(5, 10, 6, 'Casio Analog watch MTP-VT01G-1B2UDF For Men', 6745, 'Mineral Glass <br>Water Resistant<br> Regular timekeeping ', 'https://static-01.daraz.com.np/p/02983e10d6db9130202a4097d901f7ee.jpg'),
(6, 7, 7, 'Mi TV 4A 100cm (40\") 40 Inches Full HD Android Smart TV', 39199, 'Brand: MI <br>Model:Mi TV 4A <br>100cm (40\") 4K HDR 10-bit display with WCG 20W speakers Dolby™<br>  DTS-HD® Android TV™   Google Assistant, Data Saver', 'https://static-01.daraz.com.np/p/f2f1b5f1df2f4f5a2c44da721b768a94.jpg'),
(7, 6, 8, 'NIU AERO ROAD-01 Lite Bicycle', 128500, 'NIU AERO ROAD-01 liteis easy to ride and professional. For ROAD-01, it is not a problem.The cloud intelligent system is scientific and efficient, which greatly improves the riding experience.', 'https://static-01.daraz.com.np/p/27c4022a520ac58b41242d340e2257c7.jpg'),
(8, 2, 9, 'Bella Vita Organic CEO Men Perfume Office Wear - 100 ml', 1050, '    Long Lasting Luxury Perfume For Men     Inspired By Invictus, Paco Robanne     Best For Brunches, Dinners, Meetings, Office, Every Day     Mild Floral, Fruity ', 'https://static-01.daraz.com.np/p/5d9915e6597d62cb3373b10874533dfa.jpg'),
(9, 8, 7, 'Converse Star Player Maroon Ox For Men (161570C)', 3585, 'Color : Dark Burgundy/White<br>Gender : Men <br>Closing : Lace Up Main <br>Material :Canvas', 'https://static-01.daraz.com.np/p/287845a54a375a53139289ec9d97ccad.jpg'),
(10, 8, 10, 'Zamz Genuine 100% Leather Wallet For Men', 389, '     100% Leather     Leather lining     Bifold closure     Made In Nepal', 'https://static-01.daraz.com.np/p/74f8ab20d98a94e19eeeae505f1a69c0.jpg'),
(11, 8, 11, 'White Classic Cap For Men', 630, 'Main Material: Cotton<br> Adjustable back strap <br>Easy wash <br>Fit: Regular', 'https://static-01.daraz.com.np/p/95a9909dc53eb771ea76390479ed8896.jpg');

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
(2, 'Fantech', 'fantech@gmail.com', 188412349, 'Dillibazar'),
(4, 'Kinjaz', 'kinjaz@gmail.com', 827333242, 'Kalimati'),
(5, 'NPG DIRECT', 'npg_real@gmail.com', 123832418, 'Thamel'),
(6, 'HOURGLASS', 'hourglass@gmail.com', 849245703, 'Durbarmarg'),
(7, 'Aero Zone', 'aerozone@gmail.com', 723424122, 'New road'),
(8, 'NIU', 'niu@gmail.com', 934534142, 'Jhamsikhel'),
(9, 'Bella Vita Organic', 'bella.organic@gmail.com', 623423423, 'New road'),
(10, 'ZAMZ', 'zamz@gmail.com', 238428924, 'Ason'),
(11, 'Shrestha Fancy Store', 'shresthafacncy@gmail.com', 242395953, 'Thamel');

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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

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
