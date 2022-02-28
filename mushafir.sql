-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Feb 28, 2022 at 04:21 PM
-- Server version: 10.4.21-MariaDB
-- PHP Version: 7.4.26

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `mushafir`
--

-- --------------------------------------------------------

--
-- Table structure for table `auth`
--

CREATE TABLE `auth` (
  `id` int(11) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(100) NOT NULL,
  `role` enum('user','admin') NOT NULL DEFAULT 'user',
  `blocked` tinyint(1) NOT NULL DEFAULT 0,
  `isVerified` tinyint(1) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `auth`
--

INSERT INTO `auth` (`id`, `email`, `password`, `role`, `blocked`, `isVerified`) VALUES
(43, 'user@gmai.com', '81dc9bdb52d04dc20036dbd8313ed055', 'user', 0, 0),
(44, 'other@gmail.com', '81dc9bdb52d04dc20036dbd8313ed055', 'admin', 0, 0);

-- --------------------------------------------------------

--
-- Table structure for table `booking`
--

CREATE TABLE `booking` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `status` enum('booked','pending','canceled') NOT NULL,
  `adults` int(5) NOT NULL,
  `children` int(5) NOT NULL,
  `plan` int(10) NOT NULL,
  `price` int(255) NOT NULL,
  `created_at` date NOT NULL DEFAULT current_timestamp(),
  `updated_at` date NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `booking`
--

INSERT INTO `booking` (`id`, `user_id`, `status`, `adults`, `children`, `plan`, `price`, `created_at`, `updated_at`) VALUES
(1, 2, 'canceled', 0, 0, 0, 0, '2021-12-09', '2021-12-09'),
(2, 9, 'canceled', 1, 0, 8, 123, '2022-02-21', '2022-02-21'),
(3, 9, 'canceled', 1, 0, 8, 123, '2022-02-21', '2022-02-21'),
(4, 9, 'canceled', 1, 0, 6, 0, '2022-02-21', '2022-02-21'),
(5, 9, 'booked', 1, 2, 8, 246, '2022-02-21', '2022-02-21'),
(6, 9, 'booked', 1, 0, 8, 123, '2022-02-21', '2022-02-21');

-- --------------------------------------------------------

--
-- Table structure for table `destinations`
--

CREATE TABLE `destinations` (
  `id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `short_des` text NOT NULL,
  `thumbnail` varchar(200) NOT NULL,
  `photos` text NOT NULL,
  `most_visited` tinyint(1) NOT NULL,
  `type` enum('country','state','city') NOT NULL,
  `location` varchar(255) NOT NULL,
  `description` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `destinations`
--

INSERT INTO `destinations` (`id`, `name`, `short_des`, `thumbnail`, `photos`, `most_visited`, `type`, `location`, `description`) VALUES
(1, 'Bikaner', 'description', '/uploads/1641400465.png', '/uploads/1641400465.png,/uploads/1641400465.png,/uploads/1641400465.png', 1, 'city', 'location', 'description'),
(2, 'Jaipur', 'pink city', '/uploads/1641659596.png', '/uploads/1641659596.png', 1, 'city', 'Rajasthan, India', 'pink city, jaipur'),
(3, 'Delhi', 'delhi', '/uploads/1641659690.png', '/uploads/1641659690.png', 1, 'city', 'delhi', 'Delhi'),
(4, 'Noida', 'Noida', '/uploads/1641659784.png', '/uploads/1641659784.png,/uploads/1641659784.png', 0, 'city', 'UP', 'UP');

-- --------------------------------------------------------

--
-- Table structure for table `plans`
--

CREATE TABLE `plans` (
  `id` int(11) NOT NULL,
  `name` varchar(200) NOT NULL,
  `price` int(10) NOT NULL,
  `destination` int(11) NOT NULL,
  `valid_from` date NOT NULL,
  `valid_to` date NOT NULL,
  `details` text NOT NULL,
  `created_at` date NOT NULL DEFAULT current_timestamp(),
  `updated_at` date NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `plans`
--

INSERT INTO `plans` (`id`, `name`, `price`, `destination`, `valid_from`, `valid_to`, `details`, `created_at`, `updated_at`) VALUES
(6, 'Test', 0, 1, '2022-01-17', '2022-01-19', 'Details', '2022-01-27', '2022-01-27'),
(7, 'type 1', 0, 3, '2022-01-27', '2022-01-31', 'Details', '2022-01-27', '2022-01-27'),
(8, 'Test plan', 123, 1, '2022-02-18', '2022-02-25', 'Details', '2022-02-18', '2022-02-18');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `gender` enum('male','female','other') NOT NULL,
  `dob` varchar(10) NOT NULL,
  `city` varchar(50) NOT NULL,
  `pf_image` varchar(200) NOT NULL,
  `auth_id` int(11) NOT NULL,
  `created_at` date NOT NULL DEFAULT current_timestamp(),
  `updated_at` date NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `gender`, `dob`, `city`, `pf_image`, `auth_id`, `created_at`, `updated_at`) VALUES
(8, 'User', 'user@gmai.com', 'male', '2021-12-23', 'Nohar', '/uploads/1640283587_circle-cropped(1).png', 43, '2021-12-23', '2021-12-23'),
(9, 'Sandeep Kumar', 'other@gmail.com', 'male', '1998-06-06', 'Nohar', '/uploads/1642347781.jpg', 44, '2022-01-16', '2022-01-16');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `auth`
--
ALTER TABLE `auth`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email` (`email`);

--
-- Indexes for table `booking`
--
ALTER TABLE `booking`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_plan` (`plan`);

--
-- Indexes for table `destinations`
--
ALTER TABLE `destinations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `plans`
--
ALTER TABLE `plans`
  ADD PRIMARY KEY (`id`),
  ADD KEY `destination` (`destination`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD KEY `auth_id` (`auth_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `auth`
--
ALTER TABLE `auth`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=45;

--
-- AUTO_INCREMENT for table `booking`
--
ALTER TABLE `booking`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `destinations`
--
ALTER TABLE `destinations`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `plans`
--
ALTER TABLE `plans`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `booking`
--
ALTER TABLE `booking`
  ADD CONSTRAINT `fk_plan` FOREIGN KEY (`plan`) REFERENCES `plans` (`id`);

--
-- Constraints for table `plans`
--
ALTER TABLE `plans`
  ADD CONSTRAINT `fk_destination` FOREIGN KEY (`destination`) REFERENCES `destinations` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `users`
--
ALTER TABLE `users`
  ADD CONSTRAINT `fk_auth_id` FOREIGN KEY (`auth_id`) REFERENCES `auth` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
