-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Oct 08, 2024 at 12:31 PM
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
-- Table structure for table `dropdown_items`
--

CREATE TABLE `dropdown_items` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `menu_item_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `slug` varchar(250) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `dropdown_items`
--

INSERT INTO `dropdown_items` (`id`, `menu_item_id`, `name`, `slug`, `created_at`, `updated_at`) VALUES
(4, 6, 'Digital Transformation', 'digital-transformation', '2024-10-08 08:24:29', '2024-10-08 08:24:29'),
(5, 6, 'Systems Integration', 'systems-integration', '2024-10-08 08:24:29', '2024-10-08 08:24:29'),
(6, 6, 'Cloud Solutions', 'cloud-solutions', '2024-10-08 08:24:29', '2024-10-08 08:24:29'),
(7, 6, 'IoT and Automation Solutions', 'iot-and-automation-solutions', '2024-10-08 08:24:29', '2024-10-08 08:24:29'),
(8, 6, 'Data Analytics & AI Solutions', 'data-analytics-ai-solutions', '2024-10-08 08:24:29', '2024-10-08 08:24:29'),
(9, 6, 'Enterprise Resource Planning (ERP)', 'enterprise-resource-planning-erp', '2024-10-08 08:24:29', '2024-10-08 08:24:29'),
(10, 6, 'Cybersecurity Solutions', 'cybersecurity-solutions', '2024-10-08 08:24:29', '2024-10-08 08:24:29'),
(20, 4, 'Vision', 'vision', '2024-10-08 08:41:44', '2024-10-08 08:41:44'),
(21, 4, 'Mission', 'mission', '2024-10-08 08:41:44', '2024-10-08 08:41:44'),
(22, 4, 'Core Values', 'core-values', '2024-10-08 08:41:44', '2024-10-08 08:41:44'),
(24, 7, 'Agriculture', 'agriculture', '2024-10-08 08:51:07', '2024-10-08 08:51:07'),
(25, 7, 'Telecommunications', 'telecommunications', '2024-10-08 08:51:07', '2024-10-08 08:51:07'),
(26, 7, 'Corporate consulting', 'corporate-consulting', '2024-10-08 08:51:07', '2024-10-08 08:51:07'),
(27, 7, 'Oil & Gas', 'oil-gas', '2024-10-08 08:51:07', '2024-10-08 08:51:07'),
(28, 7, 'Education', 'education', '2024-10-08 08:51:07', '2024-10-08 08:51:07'),
(29, 7, 'NGOs', 'ngos', '2024-10-08 08:51:07', '2024-10-08 08:51:07'),
(30, 7, 'Public Sector', 'public-sector', '2024-10-08 08:51:07', '2024-10-08 08:51:07'),
(31, 7, 'Manufacturing', 'manufacturing', '2024-10-08 08:51:07', '2024-10-08 08:51:07'),
(32, 7, 'Banking', 'banking', '2024-10-08 08:51:07', '2024-10-08 08:51:07');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `dropdown_items`
--
ALTER TABLE `dropdown_items`
  ADD PRIMARY KEY (`id`),
  ADD KEY `dropdown_items_menu_item_id_foreign` (`menu_item_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `dropdown_items`
--
ALTER TABLE `dropdown_items`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=33;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `dropdown_items`
--
ALTER TABLE `dropdown_items`
  ADD CONSTRAINT `dropdown_items_menu_item_id_foreign` FOREIGN KEY (`menu_item_id`) REFERENCES `menu_items` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
