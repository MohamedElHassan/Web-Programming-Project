-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 25, 2021 at 10:41 PM
-- Server version: 10.4.21-MariaDB
-- PHP Version: 8.0.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `web_project`
--

-- --------------------------------------------------------

--
-- Table structure for table `contacts`
--

CREATE TABLE `contacts` (
  `id` int(11) NOT NULL,
  `name` varchar(512) NOT NULL,
  `email` varchar(512) NOT NULL,
  `phone_number` varchar(512) DEFAULT NULL,
  `website` varchar(512) DEFAULT NULL,
  `message` varchar(2048) NOT NULL,
  `created_date` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `contacts`
--

INSERT INTO `contacts` (`id`, `name`, `email`, `phone_number`, `website`, `message`, `created_date`) VALUES
(1, 'Mohammed El Hassan', 'mahamedh6@gmail.com', '0234234234', 'www.example.com', 'Hello My Friend Mohammed How are you today in the cold day', '2021-12-24 16:02:07'),
(8, '', '', '', '', '', '2021-12-24 16:08:54'),
(9, '', '', '', '', '', '2021-12-24 16:08:58'),
(10, '', '', '', '', '', '2021-12-24 16:09:09'),
(11, 'MOHAMED ELHASSAN ABOHASHIM', 'mohamed@gmail.com', '0234234234', 'www.example.com', 'SDFSDFSDFSD', '2021-12-24 20:35:39');

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` int(11) NOT NULL,
  `title` varchar(512) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `image` varchar(2048) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `price` decimal(10,2) NOT NULL,
  `create_date` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `title`, `description`, `image`, `price`, `create_date`) VALUES
(55, 'لابتوب ايسر نيترو 5', 'ان هذا اللابتوب يوفر مميزات رائعه جدا جدا جدا جدا جدا جدا. لازم تشتريه ناوووو', 'images/GqdPEePq/81Z8NvO2TFL.jpg', '15699.00', '2021-12-24 15:21:24'),
(56, 'لابتوب hp بطئ', 'ان هذا اللابتوب يوفر مميزات رائعه جدا جدا جدا جدا جدا جدا. لازم تشتريه ناوووو', 'images/dHksC5fL/hp-15-dw3028ne-i3-1115g4-1tb-4g-win-10-bk_1.jpg', '4599.00', '2021-12-24 15:21:52'),
(57, 'ايفون جيبك لايتحمل سعره', 'ان هذا الايفون يوفر مميزات رائعه جدا جدا جدا جدا جدا جدا. لازم تشتريه ناوووو', 'images/52FBgGMq/iPhone-13-Pro-Max_-1.jpg', '45000000.00', '2021-12-24 15:22:56'),
(58, 'بانادول لعلاج المواسير', 'بانادول للصداع يعالج جميع الامراض', 'images/MPIidnlp/Panadol Advance 455x455.jpg', '23.00', '2021-12-24 15:23:35'),
(59, 'جبنه دومتي بالزيتون', 'حبنه لذيذه جدا. اشتريها دلووووووووووووقتي', 'images/8SM9KBt6/7230e61c34d9559c3836300948145c77f83bdcb9.jpg', '12.00', '2021-12-24 15:23:57');

-- --------------------------------------------------------

--
-- Table structure for table `register`
--

CREATE TABLE `register` (
  `id` int(11) NOT NULL,
  `name` varchar(512) NOT NULL,
  `email` varchar(512) NOT NULL,
  `password` varchar(512) NOT NULL,
  `join_date` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `register`
--

INSERT INTO `register` (`id`, `name`, `email`, `password`, `join_date`) VALUES
(12, 'MOHAMED ELHASSAN ABOHASHIM', 'mahamedh6@gmail.com', '1', '2021-12-20 22:48:13'),
(14, 'MOHAMED ELHASSAN ABOHASHIM', 'mahamedh7@gmail.com', '1', '2021-12-20 22:56:49'),
(15, 'MOHAMED ELHASSAN ABOHASHIM', 'mohammedelhassan2001@gmail.com', '1234', '2021-12-20 23:32:32'),
(16, 'MOHAMED ELHASSAN ABOHASHIM', 'mahamedh8@gmail.com', '1', '2021-12-22 14:04:32');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `contacts`
--
ALTER TABLE `contacts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `register`
--
ALTER TABLE `register`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `contacts`
--
ALTER TABLE `contacts`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=60;

--
-- AUTO_INCREMENT for table `register`
--
ALTER TABLE `register`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
