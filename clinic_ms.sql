-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 11, 2024 at 06:36 AM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.1.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `clinic_ms`
--

-- --------------------------------------------------------

--
-- Table structure for table `add_patient`
--

CREATE TABLE `add_patient` (
  `id` int(100) NOT NULL,
  `student_id` varchar(100) NOT NULL,
  `name` varchar(255) NOT NULL,
  `position` varchar(100) NOT NULL,
  `course` varchar(100) NOT NULL,
  `age` int(100) NOT NULL,
  `sex` varchar(50) NOT NULL,
  `illness` varchar(100) NOT NULL,
  `temp` varchar(50) NOT NULL,
  `weight` varchar(50) NOT NULL,
  `height` varchar(50) NOT NULL,
  `bp` varchar(100) NOT NULL,
  `date` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `add_patient`
--

INSERT INTO `add_patient` (`id`, `student_id`, `name`, `position`, `course`, `age`, `sex`, `illness`, `temp`, `weight`, `height`, `bp`, `date`) VALUES
(20, '2021500470', 'Christine Haduca', 'Student', 'BSIT', 20, 'Female', 'Cold', '37', '47kg', '162.5cm', '120/80', '2023-12-04 21:30:33'),
(23, '2021500123', 'Danielle Dela Cruz', 'Student', 'BSIT', 20, 'Female', 'Toothache', '37', '50kg', '150cm', '120/80', '2023-12-04 21:34:40'),
(26, '3218731723', 'Alexis Aballa', 'Student', 'BSIT', 21, 'Female', 'fever', '0', '', '', '0', '2023-12-13 09:50:50'),
(33, '2021500567', 'Kim Dami', 'Student', 'BIT', 22, 'Female', 'Toothache', '35', '50', '57', '100', '2024-03-11 13:14:33');

-- --------------------------------------------------------

--
-- Table structure for table `events`
--

CREATE TABLE `events` (
  `id` int(255) NOT NULL,
  `title` varchar(255) NOT NULL,
  `start` datetime NOT NULL,
  `end` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `medical_certifications`
--

CREATE TABLE `medical_certifications` (
  `id` int(11) NOT NULL,
  `patient_name` varchar(255) NOT NULL,
  `diagnosis` text NOT NULL,
  `certification_date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(100) NOT NULL,
  `fname` varchar(200) DEFAULT NULL,
  `lname` varchar(255) NOT NULL,
  `email` varchar(200) DEFAULT NULL,
  `password` varchar(200) DEFAULT NULL,
  `date` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `fname`, `lname`, `email`, `password`, `date`) VALUES
(6, 'RD', 'Villalobos', 'rdgv@gmail.com', 'roi1234', '2023-12-04 21:36:31'),
(8, 'Teressa', 'Gomez', 'teressa.gomez@bulsu.edu.ph', 'k1ndN3sS_', '2023-12-05 00:08:33'),
(9, 'Roichelle Denise', 'Villalobos', 'roichelledenise@gmail.com', 'roi1234', '2023-12-05 09:14:45'),
(10, 'Sarah ', 'Geronimo', 'sarahg@gmail.com', '123456', '2023-12-13 09:48:26');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `add_patient`
--
ALTER TABLE `add_patient`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `events`
--
ALTER TABLE `events`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `medical_certifications`
--
ALTER TABLE `medical_certifications`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `add_patient`
--
ALTER TABLE `add_patient`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=34;

--
-- AUTO_INCREMENT for table `events`
--
ALTER TABLE `events`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=37;

--
-- AUTO_INCREMENT for table `medical_certifications`
--
ALTER TABLE `medical_certifications`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
