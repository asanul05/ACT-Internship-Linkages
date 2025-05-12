-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 12, 2025 at 02:46 PM
-- Server version: 11.4.5-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `linkages`
--

-- --------------------------------------------------------

--
-- Table structure for table `partners`
--

CREATE TABLE `partners` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `location` varchar(255) NOT NULL,
  `type` enum('national','international') NOT NULL,
  `region` enum('asia','europe','america','africa','australia','antarctica') NOT NULL,
  `logo` varchar(255) NOT NULL,
  `description` text DEFAULT NULL,
  `partnership_since` year(4) DEFAULT NULL,
  `programs` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `partners`
--

INSERT INTO `partners` (`id`, `name`, `location`, `type`, `region`, `logo`, `description`, `partnership_since`, `programs`) VALUES
(1, 'SEAMEO Innotech', 'Quezon City, Philippines', 'international', 'asia', 'logo-seameo-innotech.png', 'an exciting collaboration that typically focuses on technology development, digital skills training, and research initiatives in the field of information and communication technology (ICT). Such collaborations are part of a broader push to improve the Philippines’ ICT capabilities and develop a workforce that can thrive in the fast-evolving technology landscape. With Huawei\'s expertise and WMSU’s commitment to education, this partnership could create a pipeline of skilled professionals who are well-prepared for careers in tech. ', '2018', 'Technology Development,\r\nDigital Training,\r\nResearch Initiatives'),
(2, 'Royal Roads University (RRU)', 'British Columbia, Canada', 'international', 'america', 'logo-royal-roads-university.png', NULL, NULL, NULL),
(3, 'University of North Carolina', 'Charlotte, USA', 'international', 'america', 'logo-university-of-north-carolina.png', NULL, NULL, NULL),
(4, 'University of California', 'Los Angeles, USA', 'international', 'america', 'logo-university-of-california.png', NULL, NULL, NULL),
(5, 'University of Nevada', 'Las Vegas, USA', 'international', 'america', 'logo-university-of-nevada.png', NULL, NULL, NULL),
(6, 'Saint John Hospital', 'Los Angeles, USA', 'international', 'america', 'logo-sjh.png', NULL, NULL, NULL),
(7, 'Wadhwani Foundation', 'California, USA', 'international', 'america', 'logo-wadhwani.png', NULL, NULL, NULL),
(8, 'British Council', 'London, United Kingdom', 'international', 'europe', 'logo-british-council.png', NULL, NULL, NULL),
(9, 'International Alert', 'London, United Kingdom', 'international', 'europe', 'logo-alert.png', NULL, NULL, NULL),
(10, 'La Universidad Catolica', 'Mexico City, Mexico', 'international', 'america', 'logo-catolica.png', NULL, NULL, NULL),
(11, 'University of La Laguna', 'Canary Islands, Spain', 'international', 'europe', 'logo-laguna.png', NULL, NULL, NULL),
(12, 'La Universidad Europea De Madrid', 'Madrid, Spain', 'international', 'europe', 'logo-la-universidad-europea.png', NULL, NULL, NULL),
(13, 'Lovely Professional University', 'California, USA', 'international', 'america', 'logo-lovely-professional.png', NULL, NULL, NULL),
(14, 'Mae Fah Luang University', 'Chiang Rai, Northern Thailand', 'international', 'asia', 'logo-mae-fah-luang.png', NULL, NULL, NULL),
(15, 'Universitas Negeri Surabaya', 'East Java, Indonesia', 'international', 'asia', 'logo-universitas-negeri.png', NULL, NULL, NULL),
(16, 'University of Brawijaya', 'East Java, Indonesia', 'international', 'asia', 'logo-university-of-brawijaya.png', NULL, NULL, NULL),
(17, 'University in Asia Pacific', 'Taipei, Taiwan', 'international', 'asia', 'logo-university-in-asia-pacific.png', NULL, NULL, NULL),
(18, 'Sun Moon University', 'Asan, South Korea', 'international', 'asia', 'logo-sun-moon-university.png', NULL, NULL, NULL),
(19, 'Sunhak Universal Peace Graduate University', 'Seongnam, South Korea', 'international', 'asia', 'logo-sunhak-universal-peace.png', NULL, NULL, NULL),
(20, 'APCEIU', 'Seoul, South Korea', 'international', 'asia', 'logo-apceiu.png', NULL, NULL, NULL),
(21, 'Hyojeong Academic Foundation of Arts and Sciences', 'Seoul, South Korea', 'international', 'asia', 'logo-hyojeong-academic-foundation.png', NULL, NULL, NULL),
(22, 'Nippon University', 'Tokyo, Japan', 'international', 'asia', 'logo-nippon-university.png', NULL, NULL, NULL),
(23, 'UMAP-Philippines', 'Malate, Metro Manila', 'national', 'asia', 'logo-umap-philippines.png', NULL, NULL, NULL),
(24, 'iLAB (CHED)', 'Quezon City, Philippines', 'national', 'asia', 'logo-ilab-ched.png', NULL, NULL, NULL),
(25, 'Interliserve Global Resources, Inc', 'Quezon City, Philippines', 'national', 'asia', 'logo-interliserve-global.png', NULL, NULL, NULL),
(26, 'PCAARRD', 'Taguig, Metro Manila', 'national', 'asia', 'logo-pcaarrd.png', NULL, NULL, NULL),
(39, 'Partner', 'Partner location', 'national', 'asia', 'logo.png', 'description', '2025', 'yipee');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `partners`
--
ALTER TABLE `partners`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `partners`
--
ALTER TABLE `partners`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=40;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
