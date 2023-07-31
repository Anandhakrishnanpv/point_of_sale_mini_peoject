-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 29, 2023 at 05:10 PM
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
-- Database: `pos_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` int(11) NOT NULL,
  `barcode` varchar(20) NOT NULL,
  `description` varchar(100) NOT NULL,
  `qty` int(11) NOT NULL,
  `amount` decimal(10,2) NOT NULL,
  `image` varchar(500) NOT NULL,
  `user_id` varchar(60) NOT NULL,
  `date` datetime NOT NULL,
  `views` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `barcode`, `description`, `qty`, `amount`, `image`, `user_id`, `date`, `views`) VALUES
(1, '2222993669215', 'cafe', 1, 1.05, 'uploads/ac9f70cf6d8d33c029b157c87aba3e6b7c7e2af6_4487.jpg', '10', '2023-07-29 14:46:43', 0),
(2, '2222746156059', 'cafe', 1, 1.15, 'uploads/e7d79ee4aac882b06286672f4d9d306f1d843d08_2613.jpg', '10', '2023-07-29 14:47:20', 0),
(3, '8055173116990', 'softdrink', 1, 0.10, 'uploads/0c546253fd7c0b4bdd066c766d3aa055b91b61fe_2411.jpg', '10', '2023-07-29 16:01:57', 0),
(4, '8055517115255', 'cafeqwertyui', 4, 0.05, 'uploads/74ce9b97431272d019e60c736d318772be43e0d1_4686.png', '10', '2023-07-29 16:22:02', 0),
(5, '805559756276', 'Soft Drink Cola', 8, 0.00, 'uploads/69e3ebe62835cfca803ef0bed68809fcd41675af_6339.jpg', '10', '2023-07-29 17:02:22', 0);

-- --------------------------------------------------------

--
-- Table structure for table `sales`
--

CREATE TABLE `sales` (
  `id` int(11) NOT NULL,
  `barcode` varchar(30) NOT NULL,
  `recipt_no` int(11) NOT NULL,
  `description` varchar(150) NOT NULL,
  `qty` int(11) NOT NULL,
  `amount` decimal(10,2) NOT NULL,
  `total` decimal(10,2) NOT NULL,
  `date` datetime NOT NULL,
  `user_id` varchar(60) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `username` varchar(30) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(255) NOT NULL,
  `date` datetime NOT NULL,
  `image` varchar(500) DEFAULT NULL,
  `role` int(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `email`, `password`, `date`, `image`, `role`) VALUES
(3, 'Anandhakrishnan', 'ananatha@gmail.com', '12345678', '2023-07-18 14:57:16', NULL, 0),
(8, 'Allen Joseph', 'allen@gmail.com', '$2y$10$uF/gy4r7XC5rrnbqU1WYYO0fJvdxuoERya354dZDxL0am4Cbluf..', '2023-07-20 12:19:55', NULL, 0),
(10, 'Anandhakrishnan P V', 'ananathak676@gmail.com', '$2y$10$ro5ubeKMiNHSyNxlNBuapejb83/BwMBDXXM/nkUrqCYQopQBHPune', '2023-07-23 07:15:39', NULL, 0),
(11, 'Anandhakrishnan', 'ananathak676@gmail.com', '$2y$10$N45bPuiHS.x.nhVLNOYBW.zpsoA/T9yF0JgoBqwPoH2cvJRAfCXbq', '2023-07-23 13:39:52', NULL, 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`),
  ADD KEY `barcode` (`barcode`),
  ADD KEY `description` (`description`),
  ADD KEY `qty` (`qty`),
  ADD KEY `views` (`views`),
  ADD KEY `date` (`date`),
  ADD KEY `user_id` (`user_id`);

--
-- Indexes for table `sales`
--
ALTER TABLE `sales`
  ADD PRIMARY KEY (`id`),
  ADD KEY `recipt_no` (`recipt_no`),
  ADD KEY `barcode` (`barcode`),
  ADD KEY `user_id` (`user_id`),
  ADD KEY `date` (`date`),
  ADD KEY `description` (`description`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD KEY `email` (`email`),
  ADD KEY `date` (`date`),
  ADD KEY `role` (`role`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `sales`
--
ALTER TABLE `sales`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
