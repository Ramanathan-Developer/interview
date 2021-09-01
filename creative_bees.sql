-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 01, 2021 at 01:59 PM
-- Server version: 10.4.20-MariaDB
-- PHP Version: 8.0.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `creative_bees`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `admin_id` int(11) NOT NULL,
  `username` varchar(12) NOT NULL,
  `password` varchar(8) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`admin_id`, `username`, `password`) VALUES
(1, 'Ramanathan', '124578');

-- --------------------------------------------------------

--
-- Table structure for table `employee`
--

CREATE TABLE `employee` (
  `employee_id` int(11) NOT NULL,
  `firstname` varchar(12) NOT NULL,
  `lastname` varchar(8) NOT NULL,
  `date_of_birth` varchar(12) NOT NULL,
  `education_qualification` varchar(10) NOT NULL,
  `emp_address` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `phone` bigint(10) NOT NULL,
  `emp_password` varchar(12) NOT NULL,
  `photo` varchar(50) NOT NULL,
  `emp_resume` varchar(50) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `employee`
--

INSERT INTO `employee` (`employee_id`, `firstname`, `lastname`, `date_of_birth`, `education_qualification`, `emp_address`, `email`, `phone`, `emp_password`, `photo`, `emp_resume`, `created_at`) VALUES
(30, 'Ramanathan', 'K', '1999-01-27', 'BE-CSE', 'Tiruppur', 'ramanathan.developer.in@gmail.com', 8838027431, '1234', 'images/PicsArt_05-19-12.14.10.jpg', 'resume/DETAILS NOTIFICATION - ENGLISH 2021-22 FINA', '2021-09-01 09:36:57'),
(31, 'Karthick', 'R', '1999-05-28', 'BE-EEE', 'Coimbatore', 'karthi@gmail.com', 8838027431, '124635', 'images/banner-02.jpg', 'resume/bill.docx', '2021-09-01 11:34:43'),
(32, 'Jai Sri Ram', 'M', '1998-07-10', 'B.Com-BBA', 'Trichy', 'jsr@gmail.com', 64556246625, '45213', 'images/blog-02.jpg', 'resume/DETAILS NOTIFICATION - ENGLISH 2021-22 FINA', '2021-09-01 11:36:40'),
(33, 'Prabhu', 'C', '1998-08-21', 'B.E-Chemic', 'Chennai', 'prabhu@gmail.com', 5124356254, '42153', 'images/gallery-01.jpg', 'resume/Unit-1.docx', '2021-09-01 11:38:14'),
(35, 'Ravi', 'G', '1999-02-04', 'B.Sc', 'Virudhunagar', 'rv@gmail.com', 52458535323, '53233663', 'images/gallery-03.jpg', 'resume/Unit-1.docx', '2021-09-01 11:40:52'),
(36, 'Thamarai', 'M', '2000-04-23', 'B.Sc', 'Afghanistan', 'thamarai@gmail.com', 24524524225, '24255583', 'images/about-02.jpg', 'resume/GTA.pdf', '2021-09-01 11:42:28'),
(37, 'Kalidoss', 'K', '1999-02-05', 'BE-Mech', 'Coimbatore', 'kali@gmail.com', 35356353225, '5252552', 'images/gallery-07.jpg', 'resume/GTA.pdf', '2021-09-01 11:43:49'),
(38, 'Dhivakar', 'N', '1999-06-20', 'BE-CSE', 'Japan', 'dhivaroatract@gmail.com', 5246535433666, '24525', 'images/gallery-04.jpg', 'resume/favicon.png', '2021-09-01 11:45:00'),
(39, 'Dinesh', 'R', '1999-06-24', 'BE-CSE', 'Sahana Desert', 'dk@gmail.com', 45278247524, '452450.', 'images/blog-01.jpg', 'resume/icon-heart-02.png', '2021-09-01 11:46:09'),
(40, 'Karthick', 'G', '1009-01-20', 'BE-CSE', 'Afghanistan', 'gk@gmail.com', 572583556, 'q555555', 'images/avatar-01.jpg', 'resume/pin.png', '2021-09-01 11:47:28'),
(41, 'Sai Aravind ', 'S', '1998-02-24', 'BE-CSE', 'America', 'sap@gmail.com', 24352262423, '55255', 'images/banner-06.jpg', 'resume/icon-pay-01.png', '2021-09-01 11:49:05');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`admin_id`);

--
-- Indexes for table `employee`
--
ALTER TABLE `employee`
  ADD PRIMARY KEY (`employee_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `admin_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `employee`
--
ALTER TABLE `employee`
  MODIFY `employee_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=43;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
