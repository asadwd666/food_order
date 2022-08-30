-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Sep 24, 2021 at 08:31 PM
-- Server version: 10.1.13-MariaDB
-- PHP Version: 5.6.23

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `food_order`
--

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE `category` (
  `cate_id` int(30) NOT NULL,
  `category_name` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`cate_id`, `category_name`) VALUES
(1, 'Corn');

-- --------------------------------------------------------

--
-- Table structure for table `customers`
--

CREATE TABLE `customers` (
  `cust_id` int(20) NOT NULL,
  `username` varchar(30) NOT NULL,
  `password` varchar(30) NOT NULL,
  `name` varchar(30) NOT NULL,
  `address` text NOT NULL,
  `city` varchar(30) NOT NULL,
  `contact_no` varchar(30) NOT NULL,
  `email` varchar(30) NOT NULL,
  `reg_date` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `customers`
--

INSERT INTO `customers` (`cust_id`, `username`, `password`, `name`, `address`, `city`, `contact_no`, `email`, `reg_date`) VALUES
(1, 'asad1234', 'asad1234', 'asad ali', 'lkajsdlkjf', 'Buner', '234324324234', 'asad@gmail.com', '24-09-21');

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `order_id` int(30) NOT NULL,
  `cust_id` int(30) NOT NULL,
  `order_date` varchar(30) NOT NULL,
  `status` varchar(30) NOT NULL,
  `total_amount` int(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`order_id`, `cust_id`, `order_date`, `status`, `total_amount`) VALUES
(1, 0, '24-09-2021', 'Pending', 99),
(3, 1, '24-09-2021', 'Pending', 100),
(4, 1, '24-09-2021', 'Pending', 100),
(5, 1, '24-09-2021', 'Pending', 100),
(6, 1, '24-09-2021', 'Pending', 100),
(7, 1, '24-09-2021', 'Pending', 100),
(8, 1, '24-09-2021', 'Pending', 20),
(9, 1, '24-09-2021', 'Pending', 40);

-- --------------------------------------------------------

--
-- Table structure for table `order_detail`
--

CREATE TABLE `order_detail` (
  `order_detail_id` int(30) NOT NULL,
  `product_id` int(30) NOT NULL,
  `Qty_ordered` int(30) NOT NULL,
  `total_price` int(30) NOT NULL,
  `order_id` int(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `order_detail`
--

INSERT INTO `order_detail` (`order_detail_id`, `product_id`, `Qty_ordered`, `total_price`, `order_id`) VALUES
(1, 1, 3, 33, 1),
(5, 1, 3, 33, 3),
(6, 3, 2, 40, 3),
(7, 2, 3, 60, 3),
(8, 1, 3, 33, 4),
(9, 3, 2, 40, 4),
(10, 2, 3, 60, 4),
(11, 1, 3, 33, 5),
(12, 3, 2, 40, 5),
(13, 2, 3, 60, 5),
(14, 1, 3, 33, 6),
(15, 3, 2, 40, 6),
(16, 2, 3, 60, 6),
(17, 1, 3, 33, 7),
(18, 3, 2, 40, 7),
(19, 2, 3, 60, 7),
(20, 3, 1, 20, 8),
(21, 2, 1, 20, 9),
(22, 3, 1, 20, 9);

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `product_id` int(40) NOT NULL,
  `product_name` varchar(40) NOT NULL,
  `img_path` varchar(200) NOT NULL,
  `description` text NOT NULL,
  `stock` int(40) NOT NULL,
  `unit_price` double NOT NULL,
  `durability` varchar(30) NOT NULL,
  `cate_id` int(30) NOT NULL,
  `brand_id` int(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`product_id`, `product_name`, `img_path`, `description`, `stock`, `unit_price`, `durability`, `cate_id`, `brand_id`) VALUES
(2, 'Pizza 1', 'products/foodnerd-pizza-restaurants-islamabad-food.jpg', '4x4', 40, 20, 'New', 1, 0),
(3, 'Bred', 'products/images.jpg', '2x2', 40, 20, 'New', 1, 0);

-- --------------------------------------------------------

--
-- Table structure for table `shopping_cart`
--

CREATE TABLE `shopping_cart` (
  `cart_id` int(20) NOT NULL,
  `product_id` int(20) NOT NULL,
  `quantity` int(20) NOT NULL,
  `total_price` int(30) NOT NULL,
  `ip` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `shopping_cart`
--

INSERT INTO `shopping_cart` (`cart_id`, `product_id`, `quantity`, `total_price`, `ip`) VALUES
(1, 1, 1, 3000, '192.168.10.4'),
(2, 2, 1, 4000, '192.168.10.4'),
(3, 3, 1, 35000, '192.168.10.4');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `user_id` int(20) NOT NULL,
  `user_name` varchar(20) NOT NULL,
  `user_pass` TEXT NOT NULL,
  `answer` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`user_id`, `user_name`, `user_pass`, `answer`) VALUES
(2, 'aaa', '123', 'html');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`cate_id`);

--
-- Indexes for table `customers`
--
ALTER TABLE `customers`
  ADD PRIMARY KEY (`cust_id`);

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`order_id`),
  ADD KEY `cust_id` (`cust_id`);

--
-- Indexes for table `order_detail`
--
ALTER TABLE `order_detail`
  ADD PRIMARY KEY (`order_detail_id`),
  ADD KEY `order_id` (`order_id`),
  ADD KEY `product_id` (`product_id`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`product_id`),
  ADD KEY `cate_id` (`cate_id`),
  ADD KEY `brand_id` (`brand_id`);

--
-- Indexes for table `shopping_cart`
--
ALTER TABLE `shopping_cart`
  ADD PRIMARY KEY (`cart_id`),
  ADD KEY `product_id` (`product_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `category`
--
ALTER TABLE `category`
  MODIFY `cate_id` int(30) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `customers`
--
ALTER TABLE `customers`
  MODIFY `cust_id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `order_id` int(30) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
--
-- AUTO_INCREMENT for table `order_detail`
--
ALTER TABLE `order_detail`
  MODIFY `order_detail_id` int(30) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;
--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `product_id` int(40) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `shopping_cart`
--
ALTER TABLE `shopping_cart`
  MODIFY `cart_id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `user_id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
