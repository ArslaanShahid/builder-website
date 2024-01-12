-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Jan 12, 2024 at 06:18 PM
-- Server version: 5.7.33
-- PHP Version: 7.4.19

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `builderz`
--

-- --------------------------------------------------------

--
-- Table structure for table `admins`
--

CREATE TABLE `admins` (
  `id` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `status` int(11) NOT NULL DEFAULT '1',
  `date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admins`
--

INSERT INTO `admins` (`id`, `username`, `status`, `date`, `password`) VALUES
(4, 'admin', 1, '2022-12-02 00:33:41', '6c7ca345f63f835cb353ff15bd6c5e052ec08e7a');

-- --------------------------------------------------------

--
-- Table structure for table `employees`
--

CREATE TABLE `employees` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `gender` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `cnic` varchar(255) NOT NULL,
  `joiningDate` date NOT NULL,
  `employeeCode` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `employees`
--

INSERT INTO `employees` (`id`, `name`, `gender`, `email`, `cnic`, `joiningDate`, `employeeCode`) VALUES
(1, 'Taimoor', 'female', 'dymib@mailinator.com', '47', '2023-01-17', 65494),
(2, 'vuxezisysa', 'female', 'zekyrabo@mailinator.com', '86', '2023-01-17', 37410),
(3, 'lupaxa', 'male', 'qefy@mailinator.com', '87', '2023-01-17', 29450),
(4, 'pixovelo', 'female', 'rofebys@mailinator.com', '52', '2023-01-17', 56473),
(5, 'mezameroji', 'female', 'pokijowo@mailinator.com', '9', '2023-01-17', 41659),
(6, 'gawetiwo', 'male', 'pypa@mailinator.com', '53', '2023-01-17', 26983),
(7, 'vetyzik', 'male', 'fonizuxyv@mailinator.com', '55', '2023-01-17', 14022);

-- --------------------------------------------------------

--
-- Table structure for table `jobs`
--

CREATE TABLE `jobs` (
  `id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `date` date NOT NULL,
  `status` int(11) NOT NULL DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `jobs`
--

INSERT INTO `jobs` (`id`, `title`, `date`, `status`) VALUES
(1, 'Magni fugit labore ', '1988-02-15', 1),
(2, 'Software Engineer', '2023-07-15', 1),
(3, 'Digital Marketing', '2023-07-15', 1),
(4, 'Civil Engineer', '2023-08-22', 1);

-- --------------------------------------------------------

--
-- Table structure for table `packages`
--

CREATE TABLE `packages` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `price` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `resumes`
--

CREATE TABLE `resumes` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `date` date NOT NULL,
  `phone` varchar(255) NOT NULL,
  `resume_name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `msg` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `resumes`
--

INSERT INTO `resumes` (`id`, `name`, `date`, `phone`, `resume_name`, `email`, `msg`) VALUES
(1, 'Chaim Stewart', '2023-07-27', '46', 'Arslan_Shahid_Resume.pdf', 'arslan@yahoo.com', 'hello'),
(2, 'Arslan Shahid', '2023-08-16', '03237553458', 'Assessment - open book exam - CSC- 40054(3).pdf', 'arslan@yahoo.com', 'hello'),
(3, 'lyftron', '2023-08-16', '03237553458', 'ADP-Transcript.pdf', 'hello@yahoo.com', 'hello'),
(4, 'Taimoor Shahzad', '2023-08-21', '03237553458', 'Taimoor-Shahzad_resume.pdf', 'arslan@yahoo.com', 'hello'),
(5, 'Brooke Burke', '2023-08-21', '29', 'ADP-Transcript.pdf', 'vyzyn@mailinator.com', 'Asperiores omnis pro'),
(6, 'Lavinia Berg', '2023-08-21', '55', 'ADP-Transcript.pdf', 'ralejux@mailinator.com', 'Neque aut in cumque ');

-- --------------------------------------------------------

--
-- Table structure for table `services`
--

CREATE TABLE `services` (
  `id` int(11) NOT NULL,
  `service_name` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `services`
--

INSERT INTO `services` (`id`, `service_name`) VALUES
(9, 'PROJECT MANAGEMENT'),
(10, 'ENGINEERING'),
(11, 'CIVIL CONSTRUCTION WORK'),
(12, 'BUILDING WORK'),
(13, 'ROAD & INFRASTRUCTURE WORK'),
(14, 'ARCHITECTURAL WORK'),
(15, 'PROCUREMENT'),
(16, 'E & I INSTALLATION'),
(17, 'OPERATION & MAINTENANCE'),
(18, 'SECURITY FENCE'),
(19, 'TRADING MATERIAL WORK'),
(20, 'MANPOWER');

-- --------------------------------------------------------

--
-- Table structure for table `settings`
--

CREATE TABLE `settings` (
  `id` int(11) NOT NULL,
  `phone` varchar(255) NOT NULL,
  `opening_hours` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `location` varchar(255) NOT NULL,
  `about_us` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `settings`
--

INSERT INTO `settings` (`id`, `phone`, `opening_hours`, `email`, `location`, `about_us`) VALUES
(1, '+1 (517) 642-2824', 'Voluptatibus quaerat', 'gajiqewy@mailinator.com', 'Ajwa City, Gujranwala', 'New Builld CC is a versatile New Builld CC is a versatile constuction company constuction New Builld CC is a versatile constuction company company New New Builld CC is a versatile constuction company Builld CC is a  New Builld CC is a versatile constuction company versatile constuction company New Builld CC is a versatile constuction company');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admins`
--
ALTER TABLE `admins`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `employees`
--
ALTER TABLE `employees`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `jobs`
--
ALTER TABLE `jobs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `packages`
--
ALTER TABLE `packages`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `resumes`
--
ALTER TABLE `resumes`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `services`
--
ALTER TABLE `services`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `settings`
--
ALTER TABLE `settings`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admins`
--
ALTER TABLE `admins`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `employees`
--
ALTER TABLE `employees`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `jobs`
--
ALTER TABLE `jobs`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `packages`
--
ALTER TABLE `packages`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `resumes`
--
ALTER TABLE `resumes`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `services`
--
ALTER TABLE `services`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `settings`
--
ALTER TABLE `settings`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
