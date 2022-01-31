-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 30, 2022 at 08:06 AM
-- Server version: 10.4.20-MariaDB
-- PHP Version: 8.0.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `covihospital_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin_creds`
--

CREATE TABLE `admin_creds` (
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin_creds`
--

INSERT INTO `admin_creds` (`username`, `password`) VALUES
('', 'd41d8cd98f00b204e9800998ecf8427e'),
('Admin', 'e6e061838856bf47e1de730719fb2609');

-- --------------------------------------------------------

--
-- Table structure for table `alumnus_bio`
--

CREATE TABLE `alumnus_bio` (
  `id` int(30) NOT NULL,
  `hospitalname` varchar(200) NOT NULL,
  `contactdetail` varchar(200) NOT NULL,
  `city` varchar(200) NOT NULL,
  `state` varchar(10) NOT NULL,
  `pincode` int(10) NOT NULL,
  `address` varchar(100) NOT NULL,
  `beds` int(200) NOT NULL,
  `cyclinders` int(200) NOT NULL,
  `date_created` datetime NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `alumnus_bio`
--

INSERT INTO `alumnus_bio` (`id`, `hospitalname`, `contactdetail`, `city`, `state`, `pincode`, `address`, `beds`, `cyclinders`, `date_created`) VALUES
(24, 'Apollo Spectra Hospitals', '93345666', 'Pune', 'Maharashtr', 433556, 'Saras Baug Rd, opp. Sanas Play Ground, Vijayanagar Colony, Sadashiv Peth, Pune, Maharashtra 411030', 20, 55, '2022-01-17 13:03:18'),
(26, 'Unique Hospital', '445678', 'Pune', 'Maharashtr', 433556, 'PMMR+R4J, Manohar Nagar, Talegaon Dabhade, Maharashtra 410506', 32, 78, '2022-01-17 12:59:52'),
(27, 'Ashwini Hospital', '445678', 'Solapur', 'Maharashtr', 323444, 'Plot No. 180, Survey No. 7107/1, North, S Sadar Bazar, Solapur, Maharashtra 413003', 20, 34, '2022-01-17 12:58:23'),
(28, 'Krishna Hospital', '9346558667', 'Solapur', 'Maharashtr', 413003, ' DAV College Road, Bhavani Peth', 50, 31, '2021-12-26 22:29:46'),
(29, 'Central Multispeciality Hospital', '9775432124', 'Solapur', 'Maharashtr', 413002, 'MWH6+5M3, Guruwar Peth', 41, 22, '2021-12-26 22:30:51'),
(30, 'AKLUJ CRITICAL CARE AND TRAUMA CENTER', '78754 49886', 'Akluj', 'Maharashtr', 413101, 'Girzani Bypass Rd, Sangram Nagar', 45, 34, '2021-12-26 22:32:28');

-- --------------------------------------------------------

--
-- Table structure for table `courses`
--

CREATE TABLE `courses` (
  `id` int(30) NOT NULL,
  `hospital_id` int(200) NOT NULL,
  `beds` int(200) NOT NULL,
  `cyclinders` int(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `courses`
--

INSERT INTO `courses` (`id`, `hospital_id`, `beds`, `cyclinders`) VALUES
(7, 19, 20, 34),
(10, 23, 31, 34);

-- --------------------------------------------------------

--
-- Table structure for table `donation`
--

CREATE TABLE `donation` (
  `sno` int(11) NOT NULL,
  `name` varchar(15) NOT NULL,
  `lastname` varchar(15) NOT NULL,
  `email` varchar(30) NOT NULL,
  `phone` int(10) NOT NULL,
  `address` varchar(30) NOT NULL,
  `city` varchar(15) NOT NULL,
  `state` varchar(15) NOT NULL,
  `amount` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `donation`
--

INSERT INTO `donation` (`sno`, `name`, `lastname`, `email`, `phone`, `address`, `city`, `state`, `amount`) VALUES
(2, 'Chinmay', 'Kulkarni', 'abc@gmail.com', 0, 'Nath Regency', 'Solapur ', 'Maharashtra', '50000'),
(3, 'Siddhesh', 'Deshmukh', 'xyz@gmail.com', 0, 'Arihant Appartment', 'Solapur', 'Maharashtra', '20000'),
(0, 'Samarth', 'Zunje', 'sam@gmail.com', 974653, 'Nath Plaza', 'Solapur ', 'Maharashtra', '50000');

-- --------------------------------------------------------

--
-- Table structure for table `events`
--

CREATE TABLE `events` (
  `id` int(30) NOT NULL,
  `title` varchar(250) NOT NULL,
  `content` text NOT NULL,
  `schedule` datetime NOT NULL,
  `banner` text NOT NULL,
  `date_created` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `events`
--

INSERT INTO `events` (`id`, `title`, `content`, `schedule`, `banner`, `date_created`) VALUES
(4, 'New Meet', 'Trial', '2021-08-18 23:01:00', '1628443920_cimg.jpg', '2021-08-08 23:02:02'),
(5, 'Alumni Meet', 'Casual Meet', '2021-08-10 18:00:00', '1628590200_cimg.jpg', '2021-08-10 15:40:27');

-- --------------------------------------------------------

--
-- Table structure for table `system_settings`
--

CREATE TABLE `system_settings` (
  `id` int(30) NOT NULL,
  `name` text NOT NULL,
  `email` varchar(200) NOT NULL,
  `contact` varchar(20) NOT NULL,
  `cover_img` text NOT NULL,
  `about_content` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `system_settings`
--

INSERT INTO `system_settings` (`id`, `name`, `email`, `contact`, `cover_img`, `about_content`) VALUES
(1, 'Alumni Management System', 'info@sample.comm', '+6948 8542 623', '1628137980_cimg.jpg', '&lt;p style=&quot;text-align: center; background: transparent; position: relative;&quot;&gt;&lt;span style=&quot;color: rgb(0, 0, 0); font-family: &amp;quot;Open Sans&amp;quot;, Arial, sans-serif; font-weight: 400; text-align: justify;&quot;&gt;&amp;nbsp;is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry&rsquo;s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.&lt;/span&gt;&lt;br&gt;&lt;/p&gt;&lt;p style=&quot;text-align: center; background: transparent; position: relative;&quot;&gt;&lt;br&gt;&lt;/p&gt;&lt;p style=&quot;text-align: center; background: transparent; position: relative;&quot;&gt;&lt;br&gt;&lt;/p&gt;&lt;p&gt;&lt;/p&gt;');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `alumnus_bio`
--
ALTER TABLE `alumnus_bio`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `courses`
--
ALTER TABLE `courses`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `events`
--
ALTER TABLE `events`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `system_settings`
--
ALTER TABLE `system_settings`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `alumnus_bio`
--
ALTER TABLE `alumnus_bio`
  MODIFY `id` int(30) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;

--
-- AUTO_INCREMENT for table `courses`
--
ALTER TABLE `courses`
  MODIFY `id` int(30) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `events`
--
ALTER TABLE `events`
  MODIFY `id` int(30) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `system_settings`
--
ALTER TABLE `system_settings`
  MODIFY `id` int(30) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
