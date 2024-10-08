-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Oct 08, 2024 at 06:41 AM
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
-- Table structure for table `admins`
--

CREATE TABLE `admins` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) NOT NULL,
  `phone` varchar(255) NOT NULL,
  `last_login` varchar(255) NOT NULL,
  `login_ip` varchar(255) NOT NULL,
  `otp` varchar(255) NOT NULL,
  `remember_token` varchar(100) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `admins`
--

INSERT INTO `admins` (`id`, `name`, `email`, `email_verified_at`, `password`, `phone`, `last_login`, `login_ip`, `otp`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'admin', 'admin@gmail.com', NULL, '$2y$10$SDWpI4m9YUWunhV9hP/spuxDlU25RYtkN52ts4CzC5fZjnHxv.Zwq', '', '', '', '', NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `contact_us`
--

CREATE TABLE `contact_us` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `company_name` varchar(255) DEFAULT NULL,
  `first_phone` varchar(255) DEFAULT NULL,
  `second_phone` varchar(255) DEFAULT NULL,
  `first_email` varchar(255) DEFAULT NULL,
  `second_email` varchar(255) DEFAULT NULL,
  `first_address` text DEFAULT NULL,
  `second_address` text DEFAULT NULL,
  `website_link` varchar(255) DEFAULT NULL,
  `site_logo` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `contact_us`
--

INSERT INTO `contact_us` (`id`, `company_name`, `first_phone`, `second_phone`, `first_email`, `second_email`, `first_address`, `second_address`, `website_link`, `site_logo`, `created_at`, `updated_at`) VALUES
(1, 'Infoscert Xpression Streams Limited', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(2, '2024_10_08_035736_create_contact_us_table', 2),
(3, '2024_10_08_040354_create_admins_table', 3),
(4, '2024_10_08_041650_create_services_table', 4);

-- --------------------------------------------------------

--
-- Table structure for table `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tokenable_type` varchar(255) NOT NULL,
  `tokenable_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `token` varchar(64) NOT NULL,
  `abilities` text DEFAULT NULL,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `expires_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `services`
--

CREATE TABLE `services` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` text NOT NULL,
  `content` text NOT NULL,
  `image` text NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `services`
--

INSERT INTO `services` (`id`, `title`, `content`, `image`, `created_at`, `updated_at`) VALUES
(1, 'Digital Transformation', '<p>In today’s fast-paced world, digital transformation is no longer optional—it’s essential for businesses to remain competitive. At Infoscert, we help organizations reimagine their operations, enhance customer experiences, and embrace innovation through digital solutions that drive growth and agility.</p><p><strong>Our Digital Transformation Solutions Include:</strong></p><p><strong>Cloud Integration:</strong> Migrate systems and data to secure cloud platforms, improving scalability, flexibility, and collaboration.</p><p><strong>AI and Data Analytics:</strong> Leverage artificial intelligence and advanced analytics to gain insights, optimize decision-making, and automate processes.</p><p><strong>Process Automation:</strong> Automate manual tasks with robotic process automation (RPA), AI-driven bots, and workflow optimization to improve efficiency.</p><p><strong>Digital Platforms:</strong> Develop custom digital platforms for e-commerce, customer engagement, and internal business operations, tailored to your industry.</p><p><strong>Cybersecurity:</strong> Ensure robust protection for your digital assets through comprehensive cybersecurity frameworks, threat detection, and mitigation strategies.</p><p><strong>Impact:</strong><br>We help businesses transform into agile, data-driven organizations, unlocking new revenue streams, improving customer experiences, and building a future-ready digital infrastructure.</p>', 'services/1728361251.jpg', '2024-10-08 03:20:51', '2024-10-08 03:20:51'),
(2, 'Systems Integration', '<p>Our core expertise lies in seamlessly integrating various technologies to create unified, efficient, and scalable systems for your business. Whether it’s across departments or across industries, we ensure that your technology systems work together to maximize performance and value.</p><p><strong>Our Systems Integration Solutions Include:</strong></p><p><strong>ERP Integration:</strong> Streamline operations by integrating enterprise resource planning (ERP) systems that manage finance, procurement, HR, and supply chain.</p><p><strong>Legacy Systems Modernization:</strong> Upgrade or replace outdated systems with modern, efficient solutions that enhance performance while preserving valuable data.</p><p><strong>API Integration:</strong> Connect diverse software applications using APIs to enable smooth data flow and better communication between systems.</p><p><strong>IoT Integration:</strong> Enable smart devices and sensors to work together for real-time monitoring, predictive maintenance, and data-driven decision-making.</p><p><strong>Cross-Industry Integration:</strong> From agriculture to telecom to public services, we integrate systems across sectors, enhancing collaboration and delivering end-to-end solutions.</p><p><strong>Impact:</strong><br>We enhance the operational efficiency and flexibility of your business by creating a cohesive ecosystem of systems that communicate seamlessly, drive automation, and improve decision-making.</p>', 'services/1728361324.jpg', '2024-10-08 03:22:04', '2024-10-08 03:22:04'),
(3, 'Cloud Solutions', '<p>Cloud computing offers unprecedented scalability, flexibility, and cost-efficiency. Infoscert provides cloud solutions that are designed to enhance your organization’s capabilities while reducing infrastructure costs and complexity.</p><p><strong>Our Cloud Solutions Include:</strong></p><p><strong>Cloud Infrastructure as a Service (IaaS):</strong> Provision virtualized computing resources on-demand, allowing your organization to scale without the need for physical servers.</p><p><strong>Software as a Service (SaaS):</strong> Access cutting-edge software applications through cloud-based platforms that improve collaboration, efficiency, and accessibility.</p><p><strong>Cloud Storage &amp; Backup:</strong> Safeguard critical data with secure cloud storage solutions, ensuring easy recovery and high availability.</p><p><strong>Hybrid Cloud Solutions:</strong> Integrate public and private cloud environments for optimized flexibility and control, ensuring data sovereignty and compliance.</p><p><strong>Cloud Security Solutions:</strong> Ensure data protection and compliance with end-to-end cloud security measures, including encryption, identity management, and access controls.</p><p><strong>Impact:</strong><br>Our cloud solutions help businesses reduce costs, improve scalability, and foster innovation by leveraging the power of the cloud for critical operations and storage.</p>', 'services/1728361413.jpg', '2024-10-08 03:23:33', '2024-10-08 03:23:33'),
(4, 'IoT and Automation Solutions', '<p>The Internet of Things (IoT) and automation technologies are revolutionizing industries by enabling real-time data collection, predictive analytics, and process optimization. At Infoscert, we help businesses harness these technologies to improve efficiency and drive smarter decision-making.</p><p><strong>Our IoT and Automation Solutions Include:</strong></p><p><strong>Smart Sensors &amp; Devices:</strong> Deploy IoT devices to gather real-time data on operations, from environmental conditions in agriculture to machinery health in oil and gas.</p><p><strong>Industrial Automation:</strong> Implement automated production lines, logistics systems, and robotic technologies to improve efficiency, reduce errors, and lower costs.</p><p><strong>Remote Monitoring &amp; Control:</strong> Use IoT technologies for remote monitoring of assets, infrastructure, and operations across geographically dispersed locations.</p><p><strong>Predictive Maintenance:</strong> Leverage IoT and AI to predict equipment failure before it occurs, reducing downtime and maintenance costs.</p><p><strong>Home and Office Automation:</strong> Provide automation solutions for smart homes and businesses, from lighting and climate control to security systems and smart appliances.</p><p><strong>Impact:</strong><br>Our IoT and automation solutions empower organizations to make data-driven decisions, optimize asset utilization, and reduce costs by automating critical processes.</p>', 'services/1728361473.jpg', '2024-10-08 03:24:33', '2024-10-08 03:24:33'),
(5, 'Data Analytics & AI Solutions', '<p>In the digital age, data is one of the most valuable assets a business can possess. At Infoscert, we help companies harness the power of data through advanced analytics and artificial intelligence to unlock insights, enhance decision-making, and drive growth.</p><p><strong>Our Data Analytics &amp; AI Solutions Include:</strong></p><p><strong>Business Intelligence (BI):</strong> Use BI tools to analyze data and create actionable insights that drive decision-making and optimize business processes.</p><p><strong>Predictive Analytics:</strong> Apply machine learning algorithms to predict future trends, customer behaviors, and operational challenges.</p><p><strong>AI-Powered Automation:</strong> Automate business processes and customer interactions using AI-driven chatbots, RPA, and natural language processing (NLP).</p><p><strong>Data Visualization:</strong> Transform complex data sets into intuitive, visual dashboards that allow for real-time performance tracking and analysis.</p><p><strong>Big Data Solutions:</strong> Develop scalable big data infrastructures that handle large volumes of structured and unstructured data, delivering deeper insights and better forecasting.</p><p><strong>Impact:</strong><br>By transforming data into actionable insights, we help businesses improve efficiency, make informed decisions, and stay ahead of the competition through AI-driven technologies.</p>', 'services/1728361523.jpg', '2024-10-08 03:25:23', '2024-10-08 03:25:23'),
(6, 'Enterprise Resource Planning (ERP)', '<p>An effective ERP system is the backbone of a well-run organization, streamlining operations and providing a single source of truth across departments. At Infoscert, we implement customized ERP solutions that empower businesses to optimize their workflows and drive operational excellence.</p><p><strong>Our ERP Solutions Include:</strong></p><p><strong>Custom ERP Implementation:</strong> Tailor ERP systems to meet the specific needs of industries such as agriculture, telecom, oil &amp; gas, and education.</p><p><strong>Finance &amp; Accounting Modules:</strong> Centralize your financial operations, ensuring transparency, compliance, and real-time visibility into financial performance.</p><p><strong>Supply Chain Management:</strong> Optimize inventory, procurement, and distribution through integrated supply chain modules that provide real-time data and automation.</p><p><strong>Human Resource Management (HRM):</strong> Streamline employee management with modules for payroll, attendance, talent acquisition, and performance tracking.</p><p><strong>Customer Relationship Management (CRM):</strong> Enhance customer engagement and sales with CRM modules that track interactions, automate marketing, and drive sales growth.</p><p><strong>Impact:</strong><br>Our ERP solutions provide businesses with the tools they need to optimize processes, enhance operational visibility, and make informed decisions across departments.</p>', 'services/1728361576.jpg', '2024-10-08 03:26:16', '2024-10-08 03:26:16'),
(7, 'Cybersecurity Solutions', '<p>In an increasingly digital world, protecting your data and systems from cyber threats is crucial. Infoscert offers comprehensive cybersecurity solutions to ensure that your business remains secure, compliant, and resilient.</p><p><strong>Our Cybersecurity Solutions Include:</strong></p><p><strong>Network Security:</strong> Implement firewalls, intrusion detection systems, and advanced monitoring to secure your network infrastructure from cyber threats.</p><p><strong>Endpoint Security:</strong> Protect end-user devices, such as computers, mobile phones, and servers, with antivirus software, encryption, and access control.</p><p><strong>Data Encryption &amp; Privacy:</strong> Secure sensitive data through encryption, ensuring compliance with data protection regulations and preventing unauthorized access.</p><p><strong>Incident Response &amp; Recovery:</strong> Develop robust incident response plans that minimize damage from security breaches and ensure swift recovery.</p><p><strong>Compliance Management:</strong> Ensure that your organization complies with industry regulations such as GDPR, HIPAA, and ISO standards through robust security frameworks.</p><p><strong>Impact:</strong><br>We safeguard your business from the growing threat of cyber-attacks by implementing proactive, multi-layered security solutions that ensure data integrity and regulatory compliance.</p>', 'services/1728361640.jpg', '2024-10-08 03:27:20', '2024-10-08 03:27:20');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admins`
--
ALTER TABLE `admins`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `admins_email_unique` (`email`);

--
-- Indexes for table `contact_us`
--
ALTER TABLE `contact_us`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indexes for table `services`
--
ALTER TABLE `services`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admins`
--
ALTER TABLE `admins`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `contact_us`
--
ALTER TABLE `contact_us`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `services`
--
ALTER TABLE `services`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
