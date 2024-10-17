-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 17, 2024 at 06:10 PM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `cafe-order-system`
--

-- --------------------------------------------------------

--
-- Table structure for table `cafe_tables`
--

CREATE TABLE `cafe_tables` (
  `id` int(11) NOT NULL,
  `table_num` varchar(50) NOT NULL,
  `status` enum('available','occupied','booked') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `cafe_tables`
--

INSERT INTO `cafe_tables` (`id`, `table_num`, `status`) VALUES
(1, '1', 'occupied'),
(5, '4', 'available'),
(11, '2', 'available'),
(12, '3', 'available');

-- --------------------------------------------------------

--
-- Table structure for table `cashiers`
--

CREATE TABLE `cashiers` (
  `cashier_id` int(11) NOT NULL,
  `cashier_name` varchar(100) NOT NULL,
  `shift` enum('Morning','Evening','Night') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `cashiers`
--

INSERT INTO `cashiers` (`cashier_id`, `cashier_name`, `shift`) VALUES
(1, 'cashier1', 'Evening'),
(2, 'cashier2', 'Morning'),
(6, 'cashier3', 'Night'),
(8, 'cashier4', 'Morning'),
(9, 'cashier5', 'Evening');

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE `category` (
  `id` int(11) NOT NULL,
  `category_name` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`id`, `category_name`) VALUES
(1, 'food'),
(2, 'soft drink'),
(3, 'tea'),
(4, 'coffee'),
(5, 'bakery items');

-- --------------------------------------------------------

--
-- Table structure for table `customers`
--

CREATE TABLE `customers` (
  `customer_id` int(11) NOT NULL,
  `customer_name` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `customers`
--

INSERT INTO `customers` (`customer_id`, `customer_name`) VALUES
(1, 'haha'),
(2, 'haha');

-- --------------------------------------------------------

--
-- Table structure for table `menu`
--

CREATE TABLE `menu` (
  `item_id` int(11) UNSIGNED NOT NULL,
  `item_name` varchar(100) NOT NULL,
  `price` decimal(10,2) NOT NULL,
  `description` text DEFAULT NULL,
  `subcategory_id` int(11) DEFAULT NULL,
  `category_id` int(11) DEFAULT NULL,
  `menu_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `menu`
--

INSERT INTO `menu` (`item_id`, `item_name`, `price`, `description`, `subcategory_id`, `category_id`, `menu_id`) VALUES
(1, 'momo', 100.00, 'momo is delicious', NULL, NULL, NULL),
(4, 'Latte', 100.00, 'hjggfg', 2, 4, NULL),
(6, 'fruit Juice', 150.00, NULL, 6, 2, NULL),
(9, 'Ice tea', 200.00, NULL, 3, 3, NULL),
(10, 'strawberry cake', 140.00, NULL, 5, 5, NULL),
(11, 'chocolate cake', 200.00, NULL, 5, 5, NULL),
(13, 'cheesecake', 125.00, NULL, 5, 5, NULL),
(16, 'chocolate donut', 80.00, NULL, 9, 5, NULL),
(17, 'chicken_momo', 180.00, NULL, 11, 1, NULL),
(18, 'buff momo', 140.00, NULL, 11, 1, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `table_num` int(11) NOT NULL,
  `order_details` text DEFAULT NULL,
  `customer_name` varchar(255) DEFAULT NULL,
  `order_items` text DEFAULT NULL,
  `total_price` decimal(10,2) DEFAULT NULL,
  `order_id` int(11) NOT NULL,
  `order_date` datetime DEFAULT current_timestamp(),
  `status` enum('pending','completed','canceled') DEFAULT 'pending',
  `customer_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`table_num`, `order_details`, `customer_name`, `order_items`, `total_price`, `order_id`, `order_date`, `status`, `customer_id`) VALUES
(1, NULL, 'jenisha', '11', NULL, 1, '2024-10-10 20:52:53', 'pending', NULL),
(1, NULL, 'jenisa', '6', NULL, 2, '2024-10-10 20:52:53', 'pending', NULL),
(1, NULL, 'jensa', '16', NULL, 3, '2024-10-10 20:52:53', 'pending', NULL),
(5, NULL, 'haha', NULL, 200.00, 4, '2024-10-10 20:52:53', 'pending', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `orderss`
--

CREATE TABLE `orderss` (
  `order_id` int(11) NOT NULL,
  `customer_name` varchar(100) NOT NULL,
  `table_id` int(11) DEFAULT NULL,
  `total_price` decimal(10,2) NOT NULL,
  `order_date` datetime DEFAULT current_timestamp(),
  `status` enum('Pending','In Progress','Completed') NOT NULL DEFAULT 'Pending'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `orderss`
--

INSERT INTO `orderss` (`order_id`, `customer_name`, `table_id`, `total_price`, `order_date`, `status`) VALUES
(1, 'jenisha', 5, 0.00, '2024-10-16 17:19:01', 'Completed'),
(12, 'jhar', 7, 100.00, '2024-10-17 21:14:33', 'Pending'),
(14, 'jeni', 11, 100.00, '2024-10-17 21:27:45', 'Pending'),
(15, 'jeni', 11, 100.00, '2024-10-17 21:28:21', 'Pending'),
(16, 'jeni', 11, 100.00, '2024-10-17 21:30:06', 'Pending'),
(17, 'jeni', 3, 200.00, '2024-10-17 21:36:03', 'In Progress'),
(18, 'Jinisha Budhathoki', 3, 180.00, '2024-10-17 21:42:34', 'Pending');

-- --------------------------------------------------------

--
-- Table structure for table `order_items`
--

CREATE TABLE `order_items` (
  `order_item_id` int(11) NOT NULL,
  `order_id` int(11) DEFAULT NULL,
  `item_id` int(11) DEFAULT NULL,
  `quantity` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `order_items`
--

INSERT INTO `order_items` (`order_item_id`, `order_id`, `item_id`, `quantity`) VALUES
(1, 1, 1, 0),
(2, 4, 1, 2),
(3, 4, 0, 0),
(4, 4, 0, 0),
(5, 4, 0, 0),
(7, 4, 0, 0),
(8, 4, 0, 0),
(9, 4, 0, 0),
(10, 4, 0, 0),
(11, 4, 0, 0),
(22, 8, 0, 2),
(23, 8, 0, 0),
(24, 8, 0, 0),
(25, 8, 0, 0),
(26, 8, 0, 0),
(27, 8, 0, 0),
(28, 8, 0, 0),
(29, 8, 0, 0),
(30, 8, 0, 0),
(31, 8, 0, 0),
(32, 9, 0, 2),
(33, 9, 0, 0),
(34, 9, 0, 0),
(35, 9, 0, 0),
(36, 9, 0, 0),
(37, 9, 0, 0),
(38, 9, 0, 0),
(39, 9, 0, 0),
(40, 9, 0, 0),
(41, 9, 0, 0),
(42, 10, 0, 1),
(43, 10, 0, 0),
(44, 10, 0, 0),
(45, 10, 0, 0),
(46, 10, 0, 0),
(47, 10, 0, 0),
(48, 10, 0, 0),
(49, 10, 0, 0),
(50, 10, 0, 0),
(51, 10, 0, 0),
(52, 11, 0, 1),
(53, 11, 0, 0),
(54, 11, 0, 0),
(55, 11, 0, 0),
(56, 11, 0, 0),
(57, 11, 0, 0),
(58, 11, 0, 0),
(59, 11, 0, 0),
(60, 11, 0, 0),
(61, 11, 0, 0),
(62, 12, 0, 1),
(63, 12, 0, 0),
(64, 12, 0, 0),
(65, 12, 0, 0),
(66, 12, 0, 0),
(67, 12, 0, 0),
(68, 12, 0, 0),
(69, 12, 0, 0),
(70, 12, 0, 0),
(71, 12, 0, 0),
(72, 13, 0, 0),
(73, 13, 0, 2),
(74, 13, 0, 0),
(75, 13, 0, 0),
(76, 13, 0, 0),
(77, 13, 0, 0),
(78, 13, 0, 0),
(79, 13, 0, 0),
(80, 13, 0, 0),
(81, 13, 0, 0),
(82, 14, 0, 0),
(83, 14, 0, 1),
(84, 14, 0, 0),
(85, 14, 0, 0),
(86, 14, 0, 0),
(87, 14, 0, 0),
(88, 14, 0, 0),
(89, 14, 0, 0),
(90, 14, 0, 0),
(91, 14, 0, 0),
(92, 15, 0, 0),
(93, 15, 0, 1),
(94, 15, 0, 0),
(95, 15, 0, 0),
(96, 15, 0, 0),
(97, 15, 0, 0),
(98, 15, 0, 0),
(99, 15, 0, 0),
(100, 15, 0, 0),
(101, 15, 0, 0),
(102, 16, 0, 0),
(103, 16, 0, 1),
(104, 16, 0, 0),
(105, 16, 0, 0),
(106, 16, 0, 0),
(107, 16, 0, 0),
(108, 16, 0, 0),
(109, 16, 0, 0),
(110, 16, 0, 0),
(111, 16, 0, 0),
(112, 17, 1, 1),
(113, 17, 4, 1),
(114, 18, 1, 1),
(115, 18, 16, 1);

-- --------------------------------------------------------

--
-- Table structure for table `sub_category`
--

CREATE TABLE `sub_category` (
  `id` int(11) NOT NULL,
  `subcategory_name` varchar(255) NOT NULL,
  `category_id` int(11) DEFAULT NULL,
  `image` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `sub_category`
--

INSERT INTO `sub_category` (`id`, `subcategory_name`, `category_id`, `image`) VALUES
(2, 'ice-coffee', 4, 'iced.jpeg'),
(3, 'iced-tea', 3, 'icedtea.jpg'),
(4, 'iced-tea', 3, 'icedtea.jpg'),
(5, 'cake', 5, 'menu-strawberry.jpeg'),
(6, 'Juice', 2, 'juice2.jpeg'),
(8, 'cake', 5, 'cake.jpeg'),
(9, 'Donuts', 5, 'donut.png'),
(11, 'MOMO', 1, 'momo.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `tables`
--

CREATE TABLE `tables` (
  `table_id` int(11) NOT NULL,
  `table_num` int(11) NOT NULL,
  `status` enum('available','occupied') NOT NULL DEFAULT 'available',
  `capacity` int(11) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `tables`
--

INSERT INTO `tables` (`table_id`, `table_num`, `status`, `capacity`) VALUES
(3, 1, 'occupied', 0),
(5, 2, 'available', 0),
(6, 3, 'occupied', 0),
(7, 4, 'available', 0),
(8, 5, 'occupied', 0),
(11, 6, 'available', 5);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `user_id` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(255) NOT NULL,
  `role` enum('admin','cashier') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`user_id`, `username`, `email`, `password`, `role`) VALUES
(1, 'admin', 'admin@gmail.com', '$2y$10$hhNzpuyls7lirNkHfrRZLe3Mh7.5K5q0qE35MOqLI7fQLs/woH532', 'admin'),
(2, 'cashier', 'cashier@gmail.com', '$2y$10$k37hYCAfh9VIzMZV00u7dOnR3aCSoAB1SWO2SajUehuTZ3E2i2L0O', 'cashier');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `cafe_tables`
--
ALTER TABLE `cafe_tables`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `cashiers`
--
ALTER TABLE `cashiers`
  ADD PRIMARY KEY (`cashier_id`);

--
-- Indexes for table `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `customers`
--
ALTER TABLE `customers`
  ADD PRIMARY KEY (`customer_id`);

--
-- Indexes for table `menu`
--
ALTER TABLE `menu`
  ADD PRIMARY KEY (`item_id`),
  ADD KEY `fk_subcategory` (`subcategory_id`),
  ADD KEY `fk_category` (`category_id`);

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`order_id`),
  ADD KEY `table_id` (`table_num`),
  ADD KEY `fk_customer` (`customer_id`);

--
-- Indexes for table `orderss`
--
ALTER TABLE `orderss`
  ADD PRIMARY KEY (`order_id`),
  ADD KEY `orderss_ibfk_1` (`table_id`);

--
-- Indexes for table `order_items`
--
ALTER TABLE `order_items`
  ADD PRIMARY KEY (`order_item_id`);

--
-- Indexes for table `sub_category`
--
ALTER TABLE `sub_category`
  ADD PRIMARY KEY (`id`),
  ADD KEY `category_id` (`category_id`);

--
-- Indexes for table `tables`
--
ALTER TABLE `tables`
  ADD PRIMARY KEY (`table_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`user_id`),
  ADD UNIQUE KEY `email` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `cafe_tables`
--
ALTER TABLE `cafe_tables`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `cashiers`
--
ALTER TABLE `cashiers`
  MODIFY `cashier_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `category`
--
ALTER TABLE `category`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `customers`
--
ALTER TABLE `customers`
  MODIFY `customer_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `menu`
--
ALTER TABLE `menu`
  MODIFY `item_id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `order_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `orderss`
--
ALTER TABLE `orderss`
  MODIFY `order_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `order_items`
--
ALTER TABLE `order_items`
  MODIFY `order_item_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=116;

--
-- AUTO_INCREMENT for table `sub_category`
--
ALTER TABLE `sub_category`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `tables`
--
ALTER TABLE `tables`
  MODIFY `table_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `menu`
--
ALTER TABLE `menu`
  ADD CONSTRAINT `fk_category` FOREIGN KEY (`category_id`) REFERENCES `category` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `fk_subcategory` FOREIGN KEY (`subcategory_id`) REFERENCES `sub_category` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `orders`
--
ALTER TABLE `orders`
  ADD CONSTRAINT `fk_customer` FOREIGN KEY (`customer_id`) REFERENCES `customers` (`customer_id`) ON DELETE CASCADE,
  ADD CONSTRAINT `orders_ibfk_1` FOREIGN KEY (`table_num`) REFERENCES `cafe_tables` (`id`);

--
-- Constraints for table `orderss`
--
ALTER TABLE `orderss`
  ADD CONSTRAINT `orderss_ibfk_1` FOREIGN KEY (`table_id`) REFERENCES `tables` (`table_id`) ON DELETE CASCADE;

--
-- Constraints for table `sub_category`
--
ALTER TABLE `sub_category`
  ADD CONSTRAINT `sub_category_ibfk_1` FOREIGN KEY (`category_id`) REFERENCES `category` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
