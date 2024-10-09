-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Oct 09, 2024 at 07:32 AM
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
-- Table structure for table `industries`
--

CREATE TABLE `industries` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) DEFAULT NULL,
  `slug` varchar(250) DEFAULT NULL,
  `content` text DEFAULT NULL,
  `image` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `industries`
--

INSERT INTO `industries` (`id`, `title`, `slug`, `content`, `image`, `created_at`, `updated_at`) VALUES
(1, 'Corporate Consulting', 'corporate-consulting', '<p>Infoscert Xpression Streams Limited partners with corporate consulting firms to provide cutting-edge technology solutions that enable them to deliver more value to their clients. Whether it’s improving operational efficiency, streamlining project management, or driving digital transformation, our solutions give consultants the tools they need to offer data-driven insights and innovative strategies.</p><h4><strong>Our Solutions for Corporate Consulting:</strong></h4><p><strong>Digital Transformation Consulting:</strong> We empower consulting firms with the digital tools needed to guide their clients through complex digital transformation journeys, helping businesses improve operational efficiency and customer experiences.</p><p><strong>Business Intelligence &amp; Analytics:</strong> Equip consulting firms with advanced data analytics solutions, helping them provide actionable insights and recommendations based on real-time data.</p><p><strong>Process Automation:</strong> We enable consultants to offer workflow automation solutions that reduce bottlenecks and increase organizational agility for their clients.</p><p><strong>Cloud Infrastructure &amp; Cybersecurity:</strong> Help consulting firms provide robust and secure cloud-based solutions to ensure their clients\' operations remain agile and secure in an increasingly digital environment.</p><h4><strong>Social Impact in Corporate Consulting:</strong></h4><p>Infoscert supports the consulting industry in advising businesses on sustainability, ethics, and corporate responsibility. We help consulting firms offer solutions that address social and environmental challenges, promoting ethical practices and corporate governance that benefit society as a whole.</p>', 'assets/images/industries/67061538e33d9.jpg', '2024-10-09 03:57:25', '2024-10-09 04:31:36');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `industries`
--
ALTER TABLE `industries`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `industries`
--
ALTER TABLE `industries`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
