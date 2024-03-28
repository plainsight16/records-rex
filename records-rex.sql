-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Mar 28, 2024 at 10:52 AM
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
-- Database: `records-rex`
--

-- --------------------------------------------------------

--
-- Table structure for table `Customer`
--

CREATE TABLE `Customer` (
  `id` int(11) NOT NULL,
  `first_name` varchar(255) NOT NULL,
  `last_name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `phone` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `Customer`
--

INSERT INTO `Customer` (`id`, `first_name`, `last_name`, `email`, `phone`) VALUES
(1, 'John', 'Doe', 'john.doe@example.com', '123-456-7890'),
(2, 'Jane', 'Smith', 'jane.smith@example.com', '456-789-0123'),
(3, 'Michael', 'Johnson', 'michael.johnson@example.com', '789-012-3456'),
(4, 'Emily', 'Brown', 'emily.brown@example.com', '012-345-6789'),
(5, 'David', 'Davis', 'david.davis@example.com', '345-678-9012'),
(6, 'Sarah', 'Wilson', 'sarah.wilson@example.com', '678-901-2345'),
(7, 'James', 'Taylor', 'james.taylor@example.com', '901-234-5678'),
(8, 'Jennifer', 'Anderson', 'jennifer.anderson@example.com', '234-567-8901'),
(9, 'William', 'Martinez', 'william.martinez@example.com', '567-890-1234'),
(10, 'Jessica', 'Hernandez', 'jessica.hernandez@example.com', '890-123-4567');

-- --------------------------------------------------------

--
-- Table structure for table `Inventory`
--

CREATE TABLE `Inventory` (
  `id` int(11) NOT NULL,
  `product_id` int(11) NOT NULL,
  `warehouse_id` int(11) NOT NULL,
  `quantity` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `Inventory`
--

INSERT INTO `Inventory` (`id`, `product_id`, `warehouse_id`, `quantity`) VALUES
(1, 1, 1, 50),
(2, 2, 1, 100),
(3, 3, 2, 75),
(4, 1, 3, 30),
(5, 2, 3, 50),
(6, 3, 1, 25),
(7, 1, 2, 80),
(8, 2, 2, 60),
(9, 3, 3, 40),
(10, 1, 1, 70);

-- --------------------------------------------------------

--
-- Table structure for table `Order_Detail`
--

CREATE TABLE `Order_Detail` (
  `id` int(11) NOT NULL,
  `product_id` int(11) NOT NULL,
  `order_id` int(11) NOT NULL,
  `quantity` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `Order_Detail`
--

INSERT INTO `Order_Detail` (`id`, `product_id`, `order_id`, `quantity`) VALUES
(1, 1, 61, 5),
(2, 2, 61, 3),
(3, 3, 62, 2),
(4, 1, 63, 4),
(5, 2, 63, 1),
(6, 3, 64, 6),
(7, 1, 65, 2),
(8, 2, 66, 3),
(9, 3, 66, 4),
(10, 1, 70, 1);

-- --------------------------------------------------------

--
-- Table structure for table `Order_Table`
--

CREATE TABLE `Order_Table` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `customer_id` int(11) NOT NULL,
  `order_date` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `Order_Table`
--

INSERT INTO `Order_Table` (`id`, `user_id`, `customer_id`, `order_date`) VALUES
(61, 5, 1, '2024-03-20 08:00:00'),
(62, 6, 2, '2024-03-21 09:00:00'),
(63, 7, 3, '2024-03-22 10:00:00'),
(64, 8, 4, '2024-03-23 11:00:00'),
(65, 9, 5, '2024-03-24 12:00:00'),
(66, 10, 6, '2024-03-25 13:00:00'),
(67, 5, 7, '2024-03-26 14:00:00'),
(68, 6, 8, '2024-03-27 15:00:00'),
(69, 12, 9, '2024-03-28 16:00:00'),
(70, 13, 10, '2024-03-29 17:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `Product`
--

CREATE TABLE `Product` (
  `id` int(11) NOT NULL,
  `Name` varchar(255) NOT NULL,
  `Description` varchar(255) NOT NULL,
  `Price` float NOT NULL,
  `image` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `Product`
--

INSERT INTO `Product` (`id`, `Name`, `Description`, `Price`, `image`) VALUES
(1, 'Steel Frame Bicycle', 'Lightweight and durable bicycle with a steel frame.', 299.99, 'https://github.com/plainsight16/records-rex/blob/main/steel_frame_bicycle.jpeg?raw=true\r\n'),
(2, 'Smartphone Holder', 'Adjustable holder for smartphones with 360-degree rotation.', 19.99, 'https://github.com/plainsight16/records-rex/blob/main/Smart_Phone_Holder.jpeg?raw=true\r\n'),
(3, 'Portable Bluetooth Speaker', 'Waterproof speaker with long battery life for outdoor use.', 129.99, 'https://github.com/plainsight16/records-rex/blob/main/Bluetooth_Speaker.jpeg?raw=true');

-- --------------------------------------------------------

--
-- Stand-in structure for view `record`
-- (See below for the actual view)
--
CREATE TABLE `record` (
`OrderDate` datetime
,`Handled_by` varchar(511)
,`Product` varchar(255)
,`Description` varchar(255)
,`Warehouse` varchar(255)
,`Customer` varchar(511)
,`Price` float
,`Quantity` int(11)
);

-- --------------------------------------------------------

--
-- Table structure for table `User`
--

CREATE TABLE `User` (
  `id` int(11) NOT NULL,
  `first_name` varchar(255) NOT NULL,
  `last_name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `role` int(11) NOT NULL,
  `password` varchar(255) NOT NULL,
  `created_at` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `User`
--

INSERT INTO `User` (`id`, `first_name`, `last_name`, `email`, `role`, `password`, `created_at`) VALUES
(3, 'abc', 'abc', 'abc@gmail.com', 1, '$2y$10$YPqXSkgjNtQCMBimjwi60.hSqOQ9/2iNEtGp.0EcwQ/OksVv0Hq6S', '2024-03-22 11:13:22'),
(4, 'John', 'Doe', 'johndoe@example.com', 1, '$2y$10$UVUr/uEkk31ZuEnf97OEBO5poMWDv2lyqoCfa9fldh3U8W0kouw5a', '2024-03-22 11:15:23'),
(5, 'jane', 'smith', 'jane.smith@example.com', 2, '$2y$10$t4QsoR9MneMysv9tnqGSFutFOjKvydM99w4.xNXuWkY5ZK69ymwqG', '2024-03-22 11:16:19'),
(6, 'micheal', 'johnson', 'micheal.johnson@example.com', 2, '$2y$10$nUcAAzUqx0DslfvYycac1eQqSCOlmFoDoGHK72AKrBz4OXmPFioZq', '2024-03-22 11:16:57'),
(7, 'emily', 'brown', 'emily.brown@example.com', 2, '$2y$10$wxmQE4xIaE0vW4oZ9JYZSeGce1YJpVBQLNDbPlz8RH9y5GyADKDjW', '2024-03-22 11:17:39'),
(8, 'david', 'davis', 'david.davis@example.com', 2, '$2y$10$efQdEvg23vMBOae7QttVp.NwrSm4YPTJhbOvQkd9wtEQWLgd3e2AG', '2024-03-22 11:18:31'),
(9, 'sarah', 'wilson', 'sarah.wilson@gmail.com', 2, '$2y$10$6bfhMjUCzNxwhcvcBaluG.uC80myJCFZq4QIYlVQbqm7e95fx.zPm', '2024-03-22 11:19:13'),
(10, 'james', 'taylor', 'james.taylor@gmail.com', 2, '$2y$10$lsTEaW9Kq7Jc3WX6qhwkV./zD7U7mdByIjqjewt7A/OQLS0TTCYSS', '2024-03-22 11:20:39'),
(11, 'jennifer', 'anderson', 'jennifer.anderson@gmail.com', 1, '$2y$10$hNbhq73umljRcKXgTJHdU.otJPiki5XjlQWm6T8O1ZTT6nYLO91au', '2024-03-22 11:21:48'),
(12, 'william', 'martinez', 'william.martinez@example.com', 2, '$2y$10$mVUxP5ckWEQ5rKIrvdbpCeGFKCbGvzDN4IotVhm6tqwkm5nQm2tlm', '2024-03-22 11:23:29'),
(13, 'jessica', 'hernandez', 'jessica.hernandez@example.com', 2, '$2y$10$QWmDvY6wqw9mNM0M61ppr.E3yNUBxjwqBX1GKT/LBdHJfxnJnuQ9O', '2024-03-22 11:24:24');

-- --------------------------------------------------------

--
-- Table structure for table `Warehouse`
--

CREATE TABLE `Warehouse` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `location` varchar(255) NOT NULL,
  `capacity` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `Warehouse`
--

INSERT INTO `Warehouse` (`id`, `name`, `location`, `capacity`) VALUES
(1, 'Central Distribution Center', '123 Main Street, Anytown, USA', 1000),
(2, 'Southern Logistics Hub', '456 Elm Avenue, Anytown, USA', 800),
(3, 'Eastern Warehouse Facility', '789 Oak Boulevard, Anytown, USA', 1200);

-- --------------------------------------------------------

--
-- Stand-in structure for view `warehouse_detail`
-- (See below for the actual view)
--
CREATE TABLE `warehouse_detail` (
`Warehouse` varchar(255)
,`Location` varchar(255)
,`Product` varchar(255)
,`Total_Quantity` decimal(32,0)
,`Capacity` int(11)
);

-- --------------------------------------------------------

--
-- Structure for view `record`
--
DROP TABLE IF EXISTS `record`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `record`  AS SELECT `order_table`.`order_date` AS `OrderDate`, concat(`user`.`first_name`,' ',`user`.`last_name`) AS `Handled_by`, `product`.`Name` AS `Product`, `product`.`Description` AS `Description`, `warehouse`.`name` AS `Warehouse`, concat(`customer`.`first_name`,' ',`customer`.`last_name`) AS `Customer`, `product`.`Price` AS `Price`, `order_detail`.`quantity` AS `Quantity` FROM ((((((`order_table` join `order_detail` on(`order_detail`.`order_id` = `order_table`.`id`)) join `product` on(`product`.`id` = `order_detail`.`product_id`)) join `inventory` on(`inventory`.`product_id` = `product`.`id`)) join `warehouse` on(`warehouse`.`id` = `inventory`.`warehouse_id`)) join `customer` on(`customer`.`id` = `order_table`.`customer_id`)) join `user` on(`user`.`id` = `order_table`.`user_id`)) ;

-- --------------------------------------------------------

--
-- Structure for view `warehouse_detail`
--
DROP TABLE IF EXISTS `warehouse_detail`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `warehouse_detail`  AS SELECT `warehouse`.`name` AS `Warehouse`, `warehouse`.`location` AS `Location`, `product`.`Name` AS `Product`, sum(`inventory`.`quantity`) AS `Total_Quantity`, `warehouse`.`capacity` AS `Capacity` FROM ((`warehouse` join `inventory`) join `product`) GROUP BY `warehouse`.`name`, `product`.`Name` ;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `Customer`
--
ALTER TABLE `Customer`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `Inventory`
--
ALTER TABLE `Inventory`
  ADD PRIMARY KEY (`id`),
  ADD KEY `product_id` (`product_id`),
  ADD KEY `warehouse_id` (`warehouse_id`);

--
-- Indexes for table `Order_Detail`
--
ALTER TABLE `Order_Detail`
  ADD PRIMARY KEY (`id`),
  ADD KEY `order_id` (`order_id`),
  ADD KEY `product_id` (`product_id`);

--
-- Indexes for table `Order_Table`
--
ALTER TABLE `Order_Table`
  ADD PRIMARY KEY (`id`),
  ADD KEY `customer_id` (`customer_id`),
  ADD KEY `user_id` (`user_id`);

--
-- Indexes for table `Product`
--
ALTER TABLE `Product`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `User`
--
ALTER TABLE `User`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `Warehouse`
--
ALTER TABLE `Warehouse`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `Customer`
--
ALTER TABLE `Customer`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `Inventory`
--
ALTER TABLE `Inventory`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `Order_Detail`
--
ALTER TABLE `Order_Detail`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `Order_Table`
--
ALTER TABLE `Order_Table`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=71;

--
-- AUTO_INCREMENT for table `Product`
--
ALTER TABLE `Product`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `User`
--
ALTER TABLE `User`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `Warehouse`
--
ALTER TABLE `Warehouse`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `Inventory`
--
ALTER TABLE `Inventory`
  ADD CONSTRAINT `inventory_ibfk_1` FOREIGN KEY (`product_id`) REFERENCES `record_rex`.`Product` (`id`),
  ADD CONSTRAINT `inventory_ibfk_2` FOREIGN KEY (`warehouse_id`) REFERENCES `record_rex`.`Warehouse` (`id`);

--
-- Constraints for table `Order_Detail`
--
ALTER TABLE `Order_Detail`
  ADD CONSTRAINT `order_detail_ibfk_1` FOREIGN KEY (`order_id`) REFERENCES `record_rex`.`Order_Table` (`id`),
  ADD CONSTRAINT `order_detail_ibfk_2` FOREIGN KEY (`product_id`) REFERENCES `record_rex`.`Product` (`id`);

--
-- Constraints for table `Order_Table`
--
ALTER TABLE `Order_Table`
  ADD CONSTRAINT `order_table_ibfk_1` FOREIGN KEY (`customer_id`) REFERENCES `record_rex`.`Customer` (`id`),
  ADD CONSTRAINT `order_table_ibfk_2` FOREIGN KEY (`user_id`) REFERENCES `record_rex`.`User` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
