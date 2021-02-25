-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 25, 2021 at 05:37 AM
-- Server version: 10.4.17-MariaDB
-- PHP Version: 8.0.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ta_au_fm`
--

-- --------------------------------------------------------

--
-- Table structure for table `admins`
--

CREATE TABLE `admins` (
  `id` int(11) NOT NULL,
  `fullname` varchar(50) NOT NULL,
  `username` varchar(50) NOT NULL,
  `cnic` varchar(20) NOT NULL,
  `fathername` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `phone` varchar(20) NOT NULL,
  `password` varchar(20) NOT NULL,
  `location` varchar(50) NOT NULL,
  `dob` date NOT NULL,
  `gender` varchar(10) NOT NULL,
  `address` varchar(500) NOT NULL,
  `profilepicture` varchar(1000) NOT NULL,
  `createDT` timestamp NOT NULL DEFAULT current_timestamp(),
  `status` int(11) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admins`
--

INSERT INTO `admins` (`id`, `fullname`, `username`, `cnic`, `fathername`, `email`, `phone`, `password`, `location`, `dob`, `gender`, `address`, `profilepicture`, `createDT`, `status`) VALUES
(1, 'Muazan Qureshi', 'muazan', '12101-4661709-5', 'Ishtiaq Hussain Qureshi', 'muazan.web@gmail.com', '+923010301642', '12101*Mq', 'Karachi, Pakistan (KHI)', '2001-07-05', 'Male', 'House No 740, Street No 09, Azam Basti, Karachi.', 'IMG_20210206_174703.jpg', '2021-02-23 15:18:06', 1);

-- --------------------------------------------------------

--
-- Table structure for table `agents`
--

CREATE TABLE `agents` (
  `id` int(11) NOT NULL,
  `fullname` varchar(50) DEFAULT NULL,
  `username` varchar(50) DEFAULT NULL,
  `cnic` varchar(20) DEFAULT NULL,
  `fathername` varchar(50) NOT NULL,
  `email` varchar(50) DEFAULT NULL,
  `phone` varchar(20) DEFAULT NULL,
  `password` varchar(50) DEFAULT NULL,
  `company` varchar(100) DEFAULT NULL,
  `location` varchar(100) DEFAULT NULL,
  `dob` date DEFAULT NULL,
  `gender` varchar(10) DEFAULT NULL,
  `address` varchar(500) DEFAULT NULL,
  `profilepicture` varchar(1000) DEFAULT NULL,
  `createDT` timestamp NOT NULL DEFAULT current_timestamp(),
  `status` int(11) DEFAULT 1,
  `createby` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `agents`
--

INSERT INTO `agents` (`id`, `fullname`, `username`, `cnic`, `fathername`, `email`, `phone`, `password`, `company`, `location`, `dob`, `gender`, `address`, `profilepicture`, `createDT`, `status`, `createby`) VALUES
(1, 'Umair Warsi', 'umair_warsi', '42101-1234567-8', 'Muhammad Ali Warsi', 'umair@yahoo.com', '+923082704545', '123456*Uw', 'Mas Production', 'Karachi, Pakistan (KHI)', '1994-02-02', 'Male', 'Gulshan Iqbal, Karachi.', 'IMG_20201210_165127.jpg', '2021-02-24 02:17:30', 1, 1),
(2, 'Shahzaib Khan Afridi', 'shaxi66221', '45651-1234567-8', 'Muhammad Khan', 'shaxi66221@gmail.com', '+923123372750', '123456*Sa', 'Shaxi TOurs', 'Peshawar, Pakistan (PEW)', '1996-05-08', 'Male', 'Nazimabad , Karachi', 'IMG_20201210_170522_1.jpg', '2021-02-24 17:02:47', 1, 1);

-- --------------------------------------------------------

--
-- Table structure for table `visitorquery`
--

CREATE TABLE `visitorquery` (
  `id` int(11) NOT NULL,
  `name` varchar(200) DEFAULT NULL,
  `email` varchar(50) DEFAULT NULL,
  `subject` varchar(100) DEFAULT NULL,
  `message` varchar(1000) DEFAULT NULL,
  `createDT` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `visitorquery`
--

INSERT INTO `visitorquery` (`id`, `name`, `email`, `subject`, `message`, `createDT`) VALUES
(1, 'Ahmed Muazan', 'ahmedmuazan1@gmail.com', 'Agent', 'An Agent Named Shahzaib Khan Afridi is not resoonsible to his work.\r\nRegards Ahmed Muazan.', '2021-02-24 17:31:33'),
(2, 'Shahzaib Khan Afridi', 'shaxi66221@gmail.com', 'My Report', 'Dear gdfugdu fg uyguf8 fdujhfjh jv8 eziuo;slddf\r\njdfjoweiro idfy9e8 xiuh98 ihxihvkljnfr98y9 9 shdfihknkv cnoa9hinsnkzkh snnjkdnjfd fdkjnkf dskfhf  kfkjnfiewkoiwerq hqpohi hihihn oi hoiqw98o nk iohifhijhd  ish ihk   hfdkhifhi', '2021-02-25 03:08:13');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admins`
--
ALTER TABLE `admins`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `cnic` (`cnic`),
  ADD UNIQUE KEY `username` (`username`),
  ADD UNIQUE KEY `email` (`email`),
  ADD UNIQUE KEY `phone` (`phone`);

--
-- Indexes for table `agents`
--
ALTER TABLE `agents`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `username` (`username`),
  ADD UNIQUE KEY `email` (`email`),
  ADD UNIQUE KEY `cnic` (`cnic`),
  ADD UNIQUE KEY `phone` (`phone`);

--
-- Indexes for table `visitorquery`
--
ALTER TABLE `visitorquery`
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
-- AUTO_INCREMENT for table `agents`
--
ALTER TABLE `agents`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `visitorquery`
--
ALTER TABLE `visitorquery`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
