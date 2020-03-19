-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 27, 2019 at 09:28 AM
-- Server version: 10.1.26-MariaDB
-- PHP Version: 7.1.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `bloodbank`
--
CREATE DATABASE IF NOT EXISTS `bloodbank` DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci;
USE `bloodbank`;

-- --------------------------------------------------------

--
-- Table structure for table `auth`
--

CREATE TABLE `auth` (
  `auth_id` int(11) NOT NULL,
  `auth_username` varchar(15) COLLATE utf8mb4_unicode_ci NOT NULL,
  `auth_password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `auth_role` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `auth`
--

INSERT INTO `auth` (`auth_id`, `auth_username`, `auth_password`, `auth_role`) VALUES
(1, 'admin', '827ccb0eea8a706c4c34a16891f84e7b', 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `con`
--

CREATE TABLE `con` (
  `id` int(11) NOT NULL,
  `name` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `details` varchar(1000) COLLATE utf8mb4_unicode_ci NOT NULL,
  `date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `con`
--

INSERT INTO `con` (`id`, `name`, `email`, `details`, `date`) VALUES
(4, 'Md Asif Eqbal', 'asif.paglapirbd222@gmail.com', 'A person with poor circulation can suffer from a variety of discomforts including pooling of the fluid in the extremities (like the toes), cold hands and feet, fatigue and achiness created by an accumulation of lactic acid in the muscles. Good circulation brings damaged, tense muscles the oxygen rich blood they need to heal.', '2019-11-26 03:11:39'),
(5, 'Md Kamal ', 'kamal@gmail.com', 'hi ! fluid that transports oxygen and nutrients to the cells and carries away carbon dioxide and other waste products. Technically, blood is a transport liquid pumped by the heart (or an equivalent structure) to all parts of the body, after which it is returned to the heart to repeat the process. Blood is both a tissue and a fluid.', '2019-11-27 06:26:59'),
(6, 'Rana Hossain', 'bdrana@gmail.com', 'It is a tissue because it is a collection of similar specialized cells that serve particular functions. These cells are suspended in a liquid matrix (plasma), which makes the blood a fluid. If blood flow ceases, death will occur within minutes because of the effects of an unfavourable environment on highly susceptible cells.', '2019-11-27 06:39:33');

-- --------------------------------------------------------

--
-- Table structure for table `donor`
--

CREATE TABLE `donor` (
  `id` int(11) NOT NULL,
  `name` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `age` varchar(15) COLLATE utf8mb4_unicode_ci NOT NULL,
  `sex` varchar(10) COLLATE utf8mb4_unicode_ci NOT NULL,
  `b_type` varchar(5) COLLATE utf8mb4_unicode_ci NOT NULL,
  `address` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `city` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `mobile` varchar(12) COLLATE utf8mb4_unicode_ci NOT NULL,
  `don_date` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `stats` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `temp` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `pulse` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `bp` varchar(15) COLLATE utf8mb4_unicode_ci NOT NULL,
  `weight` varchar(15) COLLATE utf8mb4_unicode_ci NOT NULL,
  `hemoglobin` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `hbsag` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `aids` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `date` timestamp(6) NOT NULL DEFAULT CURRENT_TIMESTAMP(6) ON UPDATE CURRENT_TIMESTAMP(6)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `donor`
--

INSERT INTO `donor` (`id`, `name`, `image`, `age`, `sex`, `b_type`, `address`, `city`, `mobile`, `don_date`, `stats`, `temp`, `pulse`, `bp`, `weight`, `hemoglobin`, `hbsag`, `aids`, `date`) VALUES
(13, 'Jamil Hossain', 'image-1574609781.jpg', '2019-11-13', 'Male', 'O-', 'Southa,Manikgong', 'Dhaka', '565646', '2019-11-27', 'Normal', '30', '60', '80 | 120', '60', '16 -18 gm/dl', 'Negative', '45 - 62%', '2019-11-24 18:04:39.333414'),
(14, 'Alamgir Hossain', 'image-1574609781.jpg', '2000-6-25', 'Male', 'O-', 'Noyagram,Nrail', 'Khulna', '01993996778', '2019-1-27', 'Normal', '35', '60', '82 | 120', '75', '16 -18 gm/dl', 'Negative', '45 - 62%', '2019-11-24 18:04:39.333414'),
(15, 'Kamal Hossain', 'image-1574619495.png', '1994-10-18', 'Male', 'A+', 'Baitulaman', 'Faridpur', '3126484768', '2019-10-31', 'Normal', '35', '60', '82 |122', '65', '16 -18 gm/dl', 'Negative', '60 - 70%', '2019-11-24 18:18:15.365627'),
(16, 'Jaman Hossain', 'image-1574609781.jpg', '1985-11-6', 'Male', 'A+', 'jodisa,Manikgong', 'Dhaka', '01765959898', '2018-11-27', 'Normal', '35', '60', '85 | 110', '80', '16 -18 gm/dl', 'Negative', '45 - 62%', '2019-11-24 18:04:39.333414'),
(17, 'Alema Begum', 'image-1574609781.jpg', '1998-5-2', 'Female', 'AB+', 'Salmara,Nrail', 'Khulna', '01793996778', '2019-9-27', 'Normal', '35', '60', '82 | 120', '75', '16 -18 gm/dl', 'Negative', '45 - 62%', '2019-11-24 18:04:39.333414'),
(18, 'Aklima', 'image-1574619495.png', '1999-5-6', 'Female', 'B+', 'Saltha', 'Faridpur', '01775438745', '2019-10-31', 'Normal', '35', '60', '82 |122', '45', '16 -18 gm/dl', 'Negative', '60 - 70%', '2019-11-24 18:18:15.365627'),
(19, 'MD Asif  Eqbal', 'image-1574711928.jpg', '1999-06-11', 'Male', 'B+', 'Gockulpur,Paglapir', 'Rangpur', '01780775601', '2019-09-18', 'Normal', '30', '68', '80 | 120', '72', '16 -18 gm/dl', '55', '65 - 70%', '2019-11-25 19:58:48.396152'),
(20, 'Md Mashud Rana', 'image-1574838955.jpg', '1999-11-02', 'Male', 'O+', 'Hridevpur,Paglapir', 'Rangpur', '01751459891', '2019-10-28', 'Normal', '30', '34', '80 | 120', '50', '16 -18 gm/dl', '55', '65 - 70%', '2019-11-27 07:15:55.884494');

-- --------------------------------------------------------

--
-- Table structure for table `join`
--

CREATE TABLE `join` (
  `id` int(11) NOT NULL,
  `name` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `dod` varchar(15) COLLATE utf8mb4_unicode_ci NOT NULL,
  `bag` varchar(5) COLLATE utf8mb4_unicode_ci NOT NULL,
  `gender` varchar(10) COLLATE utf8mb4_unicode_ci NOT NULL,
  `blood_group` varchar(5) COLLATE utf8mb4_unicode_ci NOT NULL,
  `address` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `city` varchar(15) COLLATE utf8mb4_unicode_ci NOT NULL,
  `mobile` varchar(11) COLLATE utf8mb4_unicode_ci NOT NULL,
  `date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `join`
--

INSERT INTO `join` (`id`, `name`, `email`, `dod`, `bag`, `gender`, `blood_group`, `address`, `city`, `mobile`, `date`) VALUES
(1, 'Hadisur ', 'hadisur@gmail.com', '2019-11-27', '', 'Male', 'A+', 'Faridpur', 'Rangpur', '01765651331', '2019-11-27 06:00:48'),
(2, 'Jamil ', 'hossain@gmail.com', '2019-11-28', '', 'Male', 'B+', 'Saltha', 'Faridpur', '01485478961', '2019-11-27 06:19:34'),
(3, 'Abdul Rahoman', 'hadisur12@gmail.com', '2019-11-28', '2', 'Male', 'A+', 'Faridpur medical college', 'Faridpur', '01765651331', '2019-11-27 06:00:48'),
(4, 'Taslima', 'taslima@gmail.com', '2019-11-28', '3', 'Female', 'O+', 'Sdor Hospital', 'Faridpur', '01485478561', '2019-11-27 06:19:34'),
(5, 'Jaman Hossain', 'jamilhossain@gmail.com', '2019-11-27', '5', 'Male', 'AB+', 'Faridpur medical college', 'Faridpur', '01765651381', '2019-11-27 06:00:48'),
(6, 'Katha Akther', 'ktha@gmail.com', '2019-11-29', '5', 'Female', 'B+', ' diabetic hospital', 'Faridpur', '01985478961', '2019-11-27 06:19:34'),
(7, 'Rakib hossain', 'rakib12@gmail.com', '2019-11-28', '2', 'Male', 'A-', 'Faridpur medical college', 'Faridpur', '01365651331', '2019-11-27 06:00:48'),
(8, 'Laicha Islam', 'laicha@gmail.com', '2019-11-28', '1', 'Female', 'O-', ' Faridpur diabetic hospital', 'Faridpur', '01485878561', '2019-11-27 06:19:34');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `auth`
--
ALTER TABLE `auth`
  ADD PRIMARY KEY (`auth_id`) USING BTREE;

--
-- Indexes for table `con`
--
ALTER TABLE `con`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `donor`
--
ALTER TABLE `donor`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `join`
--
ALTER TABLE `join`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `auth`
--
ALTER TABLE `auth`
  MODIFY `auth_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `con`
--
ALTER TABLE `con`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `donor`
--
ALTER TABLE `donor`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;
--
-- AUTO_INCREMENT for table `join`
--
ALTER TABLE `join`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
