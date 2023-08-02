-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 02, 2023 at 07:36 AM
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
(14, '8055479785627', 'Biriyani', 1, 180.00, 'uploads/17f81b6708568cf23e3e7a0327268b75dfffa449_8270.jpg', '10', '2023-07-30 17:34:04', 0),
(15, '805559838023', 'Salad', 1, 280.00, 'uploads/c5613afefe45cda17ec6023c39b4b0e2f0e07ade_1348.jpeg', '10', '2023-07-31 02:59:02', 0),
(24, '805564164054', 'softdrink', 1, 77.00, 'uploads/1c836a9e6f9b9296932d938d5eae7b98fa715a5e_6074.jpg', '10', '2023-08-02 03:50:05', 0),
(25, '8055152821194', 'cafe', 1, 0.00, 'uploads/2436ab358ba23a5df9fb0d40f5062a789304ddf4_1349.jpg', '10', '2023-08-02 03:52:59', 0),
(26, '8055336856583', 'softdrink', 1, 0.00, 'uploads/b5f15451abafdbaf98cdef46a3fdb6e40cc5772f_7488.jpg', '10', '2023-08-02 03:54:09', 0),
(27, '8055154226968', 'Cake', 100, 87.00, 'uploads/54323272ae658b151f0e6c38aae9db4e4d70376f_6100.jpeg', '10', '2023-08-02 05:30:04', 0);

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
(11, 'Anandhakrishnan', 'ananathak676@gmail.com', '$2y$10$N45bPuiHS.x.nhVLNOYBW.zpsoA/T9yF0JgoBqwPoH2cvJRAfCXbq', '2023-07-23 13:39:52', NULL, 0),
(12, 'anandhu', 'ananathak676@gmail.com', '$2y$10$8APo2ZdUAvzpzjf4i9HIl.apXdqrNZv/U8ZPeGDDSGrg55wnw4ORq', '2023-07-30 07:10:40', NULL, 0);

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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;

--
-- AUTO_INCREMENT for table `sales`
--
ALTER TABLE `sales`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
