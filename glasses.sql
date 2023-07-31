-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 31, 2023 at 10:15 AM
-- Server version: 10.4.18-MariaDB
-- PHP Version: 8.0.5

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `glasses`
--

-- --------------------------------------------------------

--
-- Table structure for table `fatoras`
--

CREATE TABLE `fatoras` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `task_id` bigint(20) UNSIGNED DEFAULT NULL,
  `name` varchar(30) DEFAULT NULL,
  `type` varchar(30) DEFAULT NULL,
  `type_customer` varchar(30) DEFAULT NULL,
  `glasses` varchar(30) DEFAULT NULL,
  `type_glasses` varchar(30) DEFAULT NULL,
  `recive` varchar(30) DEFAULT NULL,
  `price` bigint(20) DEFAULT NULL,
  `amount_paid` bigint(20) DEFAULT NULL,
  `remaining_amount` bigint(20) DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `fatoras`
--

INSERT INTO `fatoras` (`id`, `task_id`, `name`, `type`, `type_customer`, `glasses`, `type_glasses`, `recive`, `price`, `amount_paid`, `remaining_amount`, `updated_at`, `created_at`) VALUES
(7, 3, 'ميوش', 'نضارات شمسية', 'عميل محلي', 'o', 'طبي ملون شهري', 'لم يتم الاستلام', 150, 100, 50, '2023-07-31 04:02:05', '2023-07-30 07:57:18'),
(8, 3, 'leen', 'نضارات شمسية', 'عميل VIP', 'o', 'طبي شفاف يومي', 'لم يتم الاستلام', 150, 100, 50, '2023-07-30 08:31:13', '2023-07-30 08:31:13'),
(11, 8, 'leen', 'نضارات شمسية', NULL, NULL, NULL, NULL, 1000, 800, 200, '2023-07-31 02:12:41', '2023-07-31 02:12:41'),
(13, 8, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2023-07-31 03:16:15', '2023-07-31 03:16:15');

-- --------------------------------------------------------

--
-- Table structure for table `tasks`
--

CREATE TABLE `tasks` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `phoneNumber` varchar(30) DEFAULT NULL,
  `total` int(20) DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tasks`
--

INSERT INTO `tasks` (`id`, `phoneNumber`, `total`, `updated_at`, `created_at`) VALUES
(3, '9889878', 150, '2023-07-30 09:54:36', '2023-07-30 04:48:15'),
(7, '0993197662', 0, '2023-07-31 03:16:00', '2023-07-30 07:46:45'),
(8, '0932318300', 200, '2023-07-31 02:12:45', '2023-07-30 07:56:00'),
(11, '549853', 0, '2023-07-31 02:32:28', '2023-07-31 02:32:28'),
(12, '78', 0, '2023-07-31 02:50:22', '2023-07-31 02:47:49'),
(13, '98', 0, '2023-07-31 02:50:22', '2023-07-31 02:47:58'),
(14, '87', 0, '2023-07-31 02:50:22', '2023-07-31 02:48:19'),
(15, '7888888', 0, '2023-07-31 02:50:22', '2023-07-31 02:48:33'),
(17, '788', 0, '2023-07-31 02:50:22', '2023-07-31 02:50:22'),
(18, '12', 0, '2023-07-31 02:53:54', '2023-07-31 02:53:54'),
(19, '11', 0, '2023-07-31 04:24:33', '2023-07-31 04:24:33'),
(20, '123', 0, '2023-07-31 04:30:53', '2023-07-31 04:30:53');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `fatoras`
--
ALTER TABLE `fatoras`
  ADD PRIMARY KEY (`id`),
  ADD KEY `task_id` (`task_id`);

--
-- Indexes for table `tasks`
--
ALTER TABLE `tasks`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `phoneNumber` (`phoneNumber`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `fatoras`
--
ALTER TABLE `fatoras`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `tasks`
--
ALTER TABLE `tasks`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `fatoras`
--
ALTER TABLE `fatoras`
  ADD CONSTRAINT `task_id` FOREIGN KEY (`task_id`) REFERENCES `tasks` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
