-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Oct 09, 2024 at 07:39 AM
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
-- Table structure for table `vision_missions`
--

CREATE TABLE `vision_missions` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `mission` text NOT NULL,
  `mission_img` text NOT NULL,
  `vision` text NOT NULL,
  `vision_img` text NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `vision_missions`
--

INSERT INTO `vision_missions` (`id`, `mission`, `mission_img`, `vision`, `vision_img`, `created_at`, `updated_at`) VALUES
(1, '<p>Our mission at <strong>Infoscert Xpression Streams Limited</strong> is to deliver seamless, innovative technology solutions that address the critical needs of diverse industries, including agriculture, telecom, oil and gas, education, and the public sector. We are committed to bridging the gap between profit and purpose by leveraging technology to solve complex challenges while uplifting communities through sustainable social impact initiatives. Through collaboration, expertise, and innovation, we strive to create a positive, lasting influence on the industries we serve and the world around us.</p>', 'assets/images/mission/6705f1dfa5b4f.jpg', '<p>At <strong>Infoscert Xpression Streams Limited</strong>, our vision is to be a global leader in innovative technology systems integration, driving transformative change across industries while making a lasting social impact. We envision a world where cutting-edge technology not only fuels business growth but also empowers communities, enhances sustainability, and creates a more equitable future for all.</p>', 'assets/images/vision/1728442789.jpg', '2024-10-09 01:59:49', '2024-10-09 02:01:17');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `vision_missions`
--
ALTER TABLE `vision_missions`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `vision_missions`
--
ALTER TABLE `vision_missions`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
