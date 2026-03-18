-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 06, 2026 at 01:09 PM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `vvvs_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `admins`
--

CREATE TABLE `admins` (
  `id` int(11) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `admins`
--

INSERT INTO `admins` (`id`, `email`, `password`) VALUES
(1, 'admin@vvvs.com', 'ca063aed0a640b16bd9784a9492adac8');

-- --------------------------------------------------------

--
-- Table structure for table `gallery_images`
--

CREATE TABLE `gallery_images` (
  `id` int(11) NOT NULL,
  `image` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `gallery_images`
--

INSERT INTO `gallery_images` (`id`, `image`) VALUES
(1, 'si01.jpg.JPG'),
(2, 'MCS_2554.JPG'),
(3, 'Classroom.JPG'),
(4, 'MCS_2367.JPG'),
(5, 'computer-lab.PNG'),
(6, 'DSC_9935.JPG'),
(7, 'Sports & Ground.JPG'),
(8, 'Transport.JPG'),
(9, 'Ground.JPG'),
(10, 'DSC_8923.JPG'),
(14, '1772785354_DSC_4033.JPG'),
(15, '1772785365_DSC_9056.JPG'),
(16, '1772795654_DSC_4026.JPG'),
(17, '1772795695_DSC_4027.JPG'),
(18, '1772795709_DSC_8918.JPG'),
(19, '1772795726_DSC_8923.JPG'),
(20, '1772795744_DSC_3329.JPG'),
(21, '1772795755_DSC_3308.JPG'),
(22, '1772795768_DSC_0232.JPG'),
(23, '1772795779_DSC_0225.JPG');

-- --------------------------------------------------------

--
-- Table structure for table `gallery_videos`
--

CREATE TABLE `gallery_videos` (
  `id` int(11) NOT NULL,
  `youtube_link` varchar(255) DEFAULT NULL,
  `video` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `gallery_videos`
--

INSERT INTO `gallery_videos` (`id`, `youtube_link`, `video`) VALUES
(8, NULL, '1772786806_Smart School.mp4'),
(9, NULL, '1772786821_DJI_0331.mp4');

-- --------------------------------------------------------

--
-- Table structure for table `staff`
--

CREATE TABLE `staff` (
  `id` int(11) NOT NULL,
  `name` varchar(100) DEFAULT NULL,
  `qualification` varchar(100) DEFAULT NULL,
  `image` varchar(255) DEFAULT NULL,
  `order_no` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `staff`
--

INSERT INTO `staff` (`id`, `name`, `qualification`, `image`, `order_no`) VALUES
(4, 'Smt Chethan Kumari C', 'BCA , PPT', 'Smt Chethan Kumari C.jpg', 2),
(5, 'Smt Gowramma D', 'BA , DEd', 'Smt Gowramma D.jpg', 3),
(6, 'Smt Chaitra B R', 'BSc , BEd', 'Smt Chaitra B R.jpg', 4),
(7, 'Smt Leela T C', 'BA , BEd', 'Smt Leela T C.jpg', 5),
(8, 'Smt Chandana A', 'BE, PPt', 'Smt Chandana A.jpg', 6),
(9, 'Smt Yashodha H B', 'BA , DEd', 'Smt Yashodha H B, BA , DEd.jpg', 7),
(10, 'Smt Savitha H B', 'MA , BEd', 'Smt Savitha H B.jpg', 8),
(11, 'Smt Asha Kaniganahal', 'PUC , DEd', 'Smt Asha Kaniganahal.jpg', 9),
(12, 'Smt Vani', 'PUC, DEd', 'Smt Vani.jpg', 10),
(13, 'Smt Asha B L', 'MA , BEd', 'Smt Asha B L.jpg', 11),
(14, 'Mr Mohan Kumar', 'MA , BEd', 'Mr Mohan Kumar.jpg', 12),
(18, 'Smt Mamatha T S', 'MA , BEd', 'Smt Mamatha T S.jpg', 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admins`
--
ALTER TABLE `admins`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `gallery_images`
--
ALTER TABLE `gallery_images`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `gallery_videos`
--
ALTER TABLE `gallery_videos`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `staff`
--
ALTER TABLE `staff`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admins`
--
ALTER TABLE `admins`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `gallery_images`
--
ALTER TABLE `gallery_images`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT for table `gallery_videos`
--
ALTER TABLE `gallery_videos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `staff`
--
ALTER TABLE `staff`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
