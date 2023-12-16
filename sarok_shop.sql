-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 16, 2023 at 05:07 AM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `sarok_shop`
--

-- --------------------------------------------------------

--
-- Table structure for table `email_code`
--

CREATE TABLE `email_code` (
  `id` int(11) NOT NULL,
  `email_address` varchar(255) NOT NULL,
  `token_access` varchar(255) NOT NULL,
  `code` int(11) NOT NULL,
  `status` varchar(11) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `email_code`
--

INSERT INTO `email_code` (`id`, `email_address`, `token_access`, `code`, `status`, `created_at`, `updated_at`) VALUES
(8, 'devnull.arthur@gmail.com', 'ZGV2bnVsbC5hcnRodXJAZ21haWwuY29t', 695, 'verify', '2023-12-11 10:21:34', '2023-12-12 16:10:27'),
(9, 'devnull.arthurs@gmail.com', 'ZGV2bnVsbC5hcnRodXJzQGdtYWlsLmNvbQ==', 6744, 'not_verify', '2023-12-12 08:15:05', '2023-12-12 16:15:05');

-- --------------------------------------------------------

--
-- Table structure for table `product_list`
--

CREATE TABLE `product_list` (
  `id` int(11) NOT NULL,
  `product_name` varchar(255) NOT NULL,
  `product_price` int(11) NOT NULL,
  `product_decs` longtext NOT NULL,
  `product_img` varchar(255) NOT NULL,
  `product_quantity` int(255) NOT NULL,
  `status` varchar(50) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `product_list`
--

INSERT INTO `product_list` (`id`, `product_name`, `product_price`, `product_decs`, `product_img`, `product_quantity`, `status`, `created_at`, `updated_at`) VALUES
(20, 'Extra Small Sarok', 80, '', 'sarok_img_1', 1000, 'available', '2023-12-14 09:14:09', '2023-12-14 17:14:09'),
(21, 'Large Sarok', 200, '', 'sarok_img_2', 1000, 'available', '2023-12-14 09:14:09', '2023-12-14 17:14:09'),
(22, 'Meduim Sarok', 150, '', 'sarok_img_3', 1000, 'available', '2023-12-14 09:14:09', '2023-12-14 17:14:09'),
(23, 'Sarok Box Basket', 800, '', 'sarok_img_4', 1000, 'available', '2023-12-14 09:14:09', '2023-12-14 17:14:09'),
(24, 'Sarok Chandelier', 800, '', 'sarok_img_5', 1000, 'available', '2023-12-14 09:14:09', '2023-12-14 17:14:09'),
(25, 'Sarok Decorative', 50, '', 'sarok_img_6', 1000, 'available', '2023-12-14 09:14:09', '2023-12-14 17:14:09'),
(26, 'Sarok Lampshade', 400, '', 'sarok_img_7', 1000, 'available', '2023-12-14 09:14:09', '2023-12-14 17:14:09'),
(27, 'Sarok Necklace', 150, '', 'sarok_img_8', 1000, 'available', '2023-12-14 09:14:09', '2023-12-14 17:14:09'),
(28, 'Small Sarok', 100, '', 'sarok_img_9', 1000, 'available', '2023-12-14 09:14:09', '2023-12-14 17:14:09'),
(29, 'Small Box Basket', 100, '', 'sarok_img_10', 1000, 'available', '2023-12-14 09:14:09', '2023-12-14 17:14:09');

-- --------------------------------------------------------

--
-- Table structure for table `shopping_cart`
--

CREATE TABLE `shopping_cart` (
  `id` int(11) NOT NULL,
  `product_id` int(11) NOT NULL,
  `product_quantity` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `shopping_cart`
--

INSERT INTO `shopping_cart` (`id`, `product_id`, `product_quantity`, `user_id`, `created_at`, `updated_at`) VALUES
(34, 23, 1, 12, '2023-12-14 20:53:38', '2023-12-15 04:53:38'),
(35, 21, 7, 12, '2023-12-14 20:53:47', '2023-12-15 04:55:50'),
(36, 22, 9, 12, '2023-12-14 20:56:02', '2023-12-15 04:56:02'),
(37, 27, 7, 12, '2023-12-14 21:24:12', '2023-12-15 05:24:12');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `fname` varchar(50) NOT NULL,
  `lname` varchar(50) NOT NULL,
  `email` varchar(50) DEFAULT NULL,
  `password` varchar(255) DEFAULT NULL,
  `status` enum('verify','not_verify') DEFAULT NULL,
  `contact` varchar(50) DEFAULT NULL,
  `address` varchar(255) DEFAULT NULL,
  `created_at` datetime NOT NULL DEFAULT current_timestamp(),
  `updated_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `fname`, `lname`, `email`, `password`, `status`, `contact`, `address`, `created_at`, `updated_at`) VALUES
(12, '', '', 'devnull.arthur@gmail.com', '$2y$12$acHEZ.Hc.4juzP9SPJpKIeM2HShca3baAOddfhtR4rvFLDm2.SJbi', NULL, NULL, NULL, '2023-12-12 16:09:38', '2023-12-12 16:09:38'),
(13, '', '', 'devnull.arthurs@gmail.com', '$2y$12$/sxSY.GNZc2D9/Lbo9h5Eeeuc.nM2dkJQMU.36quGrqmmGw6e6tPy', NULL, NULL, NULL, '2023-12-12 16:15:05', '2023-12-12 16:15:05');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `email_code`
--
ALTER TABLE `email_code`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `product_list`
--
ALTER TABLE `product_list`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `shopping_cart`
--
ALTER TABLE `shopping_cart`
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
-- AUTO_INCREMENT for table `email_code`
--
ALTER TABLE `email_code`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `product_list`
--
ALTER TABLE `product_list`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;

--
-- AUTO_INCREMENT for table `shopping_cart`
--
ALTER TABLE `shopping_cart`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=38;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
