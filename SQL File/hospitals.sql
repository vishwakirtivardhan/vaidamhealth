-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 05, 2021 at 05:08 PM
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
-- Table structure for table `hospitals`
--

CREATE TABLE `hospitals` (
  `id` int(11) NOT NULL,
  `hospital_id` varchar(11) DEFAULT NULL,
  `domestic_intimation_to` varchar(255) DEFAULT NULL,
  `di_cc` varchar(255) DEFAULT NULL,
  `di_bcc` varchar(255) DEFAULT NULL,
  `de_email` varchar(255) DEFAULT NULL,
  `assignee_group` varchar(255) NOT NULL,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `hospitals`
--

INSERT INTO `hospitals` (`id`, `hospital_id`, `domestic_intimation_to`, `di_cc`, `di_bcc`, `de_email`, `assignee_group`, `created_at`, `updated_at`) VALUES
(7, '444444444', 'abc@gmail.com', 'abc@gmail.com', 'abc@gmail.com', 'abc@gmail.com', 'Group3', NULL, NULL),
(9, '1374140206', 'bakkfk@gmail.com', 'bakkfk@gmail.com', 'bakkfk@gmail.com', 'bakkfk@gmail.com', 'Group2', NULL, NULL),
(10, '1943848', 'bakkfk@gmail.com', 'bakkfk@gmail.com', 'bakkfk@gmail.com', 'bakkfk@gmail.com', 'Group3', NULL, NULL),
(11, '1925885360', 'uGr9V0YuoMI', 'AEEzU3UFLLz', 'BKxNgN0byKZ', 'vEpgrJTBaig@gmail.com', 'Group 1', NULL, NULL),
(13, '2043595849', '96Bk9GdBKbM', 'S6j51ruhoZO', 'RgR25OM5u8n', 'cO1z5ZXa2sW@gmail.com', 'KpEk0B5T0aM', NULL, NULL),
(14, '824678885', 'MptBnexVHzc', 'KZ0sgE1oO2F', 'Jzd22Sg8ChU', 'jMpkom7NCCt@gmail.com', 'fUNvwfqn6pD', NULL, NULL),
(15, '119321384', 'bakkfk@gmail.com', 'bakkfk@gmail.com', 'bakkfk@gmail.com', 'U5zNl4Kyqyn@gmail.com', 'Group2', NULL, NULL),
(18, '306819279', 'Ksk@gmail.com', 'Ksk@gmail.com', 'Ksk@gmail.com', 'Ksk@gmail.com', 'Group2', NULL, NULL),
(19, '1180933595', 'bakksssfk@gmail.com', 'bakksssfk@gmail.com', 'bakksssfk@gmail.com', 'bakksssfk@gmail.com', 'Group1', NULL, NULL),
(20, '1180933599', 'UiV5wCQxTFh', 'CVO0aUbDBzV', 'eqy59BsxiYl', 'vishwakirti@gmail.com', 'Group 1', NULL, NULL),
(27, '117021568', 'Laravel code', 'laravel code', 'lalal', 'vishwakirti@gmail.com', 'Group 3', NULL, NULL),
(30, '8788888', 'name@example.com', 'name@example.com', 'name@example.com', 'name@example.com', 'Group 1', NULL, NULL),
(31, '9444444444', 'kirti@aceno.com', 'kirti@aceno.com', 'kirti@aceno.com', 'kirti@aceno.com', 'Group 2', NULL, NULL),
(32, '8585848485', 'bakkfk@gmail.com', 'bakkfk@gmail.com', 'bakkfk@gmail.com', 'bakkfk@gmail.com', 'Group3', NULL, NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `hospitals`
--
ALTER TABLE `hospitals`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `hospitals`
--
ALTER TABLE `hospitals`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=33;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
