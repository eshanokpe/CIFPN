-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Oct 09, 2024 at 07:40 AM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.0.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `infoscert_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `core_values`
--

CREATE TABLE `core_values` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `core_values` text DEFAULT NULL,
  `core_values_img` text DEFAULT NULL,
  `mission` text DEFAULT NULL,
  `mission_img` text DEFAULT NULL,
  `vision` text DEFAULT NULL,
  `vision_img` text DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `core_values`
--

INSERT INTO `core_values` (`id`, `core_values`, `core_values_img`, `mission`, `mission_img`, `vision`, `vision_img`, `created_at`, `updated_at`) VALUES
(4, '<p>cc</p>', 'assets/images/core-value/1728439790_6705e5ee1b046.jpg', 'Our mission at Infoscert Xpression Streams Limited is to deliver seamless, innovative technology solutions that address the critical needs of diverse industries, including agriculture, telecom, oil and gas, education, and the public sector. We are committed to bridging the gap between profit and purpose by leveraging technology to solve complex challenges while uplifting communities through sustainable social impact initiatives. Through collaboration, expertise, and innovation, we strive to create a positive, lasting influence on the industries we serve and the world around us.', 'assets/images/core-value/6705ea1f7f5f2.jpg', 'Our mission at Infoscert Xpression Streams Limited is to deliver seamless, innovative technology solutions that address the critical needs of diverse industries, including agriculture, telecom, oil and gas, education, and the public sector. We are committed to bridging the gap between profit and purpose by leveraging technology to solve complex challenges while uplifting communities through sustainable social impact initiatives. Through collaboration, expertise, and innovation, we strive to create a positive, lasting influence on the industries we serve and the world around us', 'assets/images/core-value/6705ea60cc732.jpg', '2024-10-09 01:09:50', '2024-10-09 01:28:48');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `core_values`
--
ALTER TABLE `core_values`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `core_values`
--
ALTER TABLE `core_values`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
