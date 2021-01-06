-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 06, 2021 at 03:37 PM
-- Server version: 10.4.14-MariaDB
-- PHP Version: 7.4.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `vaidamhealth`
--

-- --------------------------------------------------------

--
-- Table structure for table `fallup`
--

CREATE TABLE `fallup` (
  `id` int(11) NOT NULL,
  `leadname` varchar(20) NOT NULL,
  `assign` varchar(50) NOT NULL,
  `status` varchar(50) NOT NULL,
  `created_at` datetime NOT NULL DEFAULT current_timestamp(),
  `updated_at` date NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `fallup`
--

INSERT INTO `fallup` (`id`, `leadname`, `assign`, `status`, `created_at`, `updated_at`) VALUES
(1, 'hehe', 'jvvhdvi', 'closed', '2021-01-06 16:19:38', '2021-01-06'),
(2, 'jkof', 'jfifi', 'new', '2021-01-06 16:19:38', '2021-01-06'),
(3, 'hehe', 'jvvhdvi', 'converted', '2021-01-06 16:19:41', '2021-01-06'),
(4, 'jkof', 'jfifi', 'new', '2021-01-06 16:19:41', '2021-01-06'),
(5, 'hehe', 'jvvhdvi', 'duplicate', '2021-01-06 16:19:41', '2021-01-06'),
(6, 'hehe', 'jvvhdvi', 'new', '2021-01-06 16:19:38', '2021-01-06'),
(7, 'jkof', 'jfifi', 'new', '2021-01-05 16:19:38', '2021-01-05'),
(8, 'checjjjfjfj', 'jvvhdvi', 'duplicate', '2021-01-06 16:19:41', '2020-12-20'),
(9, 'jfjjfd', 'jvvhdvi', 'new', '2021-01-06 16:19:38', '2020-12-17'),
(10, 'chfhdfbh', 'jvvhdvi', 'duplicate', '2021-01-06 16:19:41', '2020-12-30'),
(11, 'hehe', 'jvvhdvi', 'duplicate', '2021-01-06 16:19:41', '2020-12-16'),
(12, 'hehe', 'jvvhdvi', 'converted', '2021-01-01 16:19:41', '2021-01-06'),
(13, 'dfffrf', 'jvvhdvi', 'converted', '2020-12-15 16:19:41', '2021-01-06'),
(14, 'jkof', 'jfifi', 'new', '2020-12-14 16:19:38', '2021-01-05'),
(15, 'jkof', 'jfifi', 'new', '2021-01-06 16:19:38', '2021-01-05'),
(16, 'hehe', 'jvvhddfdffgggh', 'closed', '2021-01-06 16:19:38', '2021-01-06');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `fallup`
--
ALTER TABLE `fallup`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `fallup`
--
ALTER TABLE `fallup`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
