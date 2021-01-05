-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 05, 2021 at 01:00 PM
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
  `hospital_id` int(11) NOT NULL,
  `domestic_intimation_to` varchar(255) NOT NULL,
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
(5, 11809335, 'test', 'tet', 'kkfk', 'chekcontestupdate@gmail.com', 'Group 1', NULL, NULL),
(6, 2132125841, 'ou2eilCoRdY', 'testcode@gmail.com', 'cost@gmail.com', 'NlTkqG5xzLn@gmail.com', 'Group 3', NULL, NULL),
(7, 732826665, 'oIJ33oeoyxl', 'wWU4STM8Shg', 'qKz9qF1hgWM', '0MnCSe7dJCJ@gmail.com', 'ZyhiuUQS9AL', NULL, NULL),
(9, 1374140206, 'XEeAt3k5IMR', 'RBWfETwLQtf', 'ySzze1HwEFt', 'OLfmtgxKzYP@gmail.com', 'pwXc85CgxfT', NULL, NULL),
(10, 1943848400, '01NYHsfIPmi', 'ozXoB4FMxmi', 'oK7UwyD8uYg', 'vhg0WazPu5o@gmail.com', 'oRqzxjc0tI6', NULL, NULL),
(11, 1925885360, 'uGr9V0YuoMI', 'AEEzU3UFLLz', 'BKxNgN0byKZ', 'vEpgrJTBaig@gmail.com', 'TqskQhg2jwY', NULL, NULL),
(12, 1221331319, 'uBnHMXPWoOS', 'UxB7RpTfwkA', 'CR2QzTDFLHg', 'EsTTJmVbRrI@gmail.com', 'VlCC7rUMZBN', NULL, NULL),
(13, 2043595849, '96Bk9GdBKbM', 'S6j51ruhoZO', 'RgR25OM5u8n', 'cO1z5ZXa2sW@gmail.com', 'KpEk0B5T0aM', NULL, NULL),
(14, 824678885, 'MptBnexVHzc', 'KZ0sgE1oO2F', 'Jzd22Sg8ChU', 'jMpkom7NCCt@gmail.com', 'fUNvwfqn6pD', NULL, NULL),
(15, 119321384, 'oYHphAAkjww', 'hjsybp1AllC', 'pJpsatuD9F9', 'U5zNl4Kyqyn@gmail.com', '7YxVaXRJ196', NULL, NULL),
(16, 637414076, 'oRV9yk5CbDb', 'uYO2VhVZV3X', 'YWHt8TKV0Ae', '7CX5VoJWRwU@gmail.com', '3vpQomPaYa1', NULL, NULL),
(17, 1689662277, 'KSDgnmvSDIP', 'JGSgAyGg0Nd', 'dwUAm9MIuUE', '9yJVKLQMnFr@gmail.com', 'i0AP04dlLMj', NULL, NULL),
(18, 306819279, 'KsdVDgfkhSE', 'yqQbF92eL71', 'fu7YSVAGMbE', 'RPLByxXD2AT@gmail.com', '5Z7e3OyDDxn', NULL, NULL),
(19, 1180933599, 'UiV5wCQxTFh', 'CVO0aUbDBzV', 'eqy59BsxiYl', 'vishwakiri@gmail.com', 'Group 1', NULL, NULL),
(20, 1180933599, 'UiV5wCQxTFh', 'CVO0aUbDBzV', 'eqy59BsxiYl', 'vishwakirti@gmail.com', 'Group 1', NULL, NULL),
(21, 1180933599, 'UiV5wCQxTFh', 'CVO0aUbDBzV', 'eqy59BsxiYl', 'kdkdk@gmail.com', 'Group 1', NULL, NULL),
(22, 1180933599, 'UiV5wCQxTFh', 'CVO0aUbDBzV', 'eqy59BsxiYl', 'kdkdk@gmail.com', 'Group 1', NULL, NULL),
(25, 858544545, 'hdhhf', 'jfjfdj', 'jfjvbj', 'vishwakirti@gmail.com', 'Group 3', NULL, NULL);

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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
