-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 15, 2024 at 01:11 PM
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
(20, '2021500470', 'Christine Haduca', 'Student', 'BSIT', 20, 'Female', 'Sprain', '37', '', '162.5cm', '', '2023-12-04 21:30:33'),
(23, '2021500123', 'Danielle Dela Cruz', 'Student', 'BSIT', 20, 'Female', 'Toothache', '37', '50kg', '150cm', '120/80', '2023-12-04 21:34:40'),
(26, '3218731723', 'Alexis Aballa', 'Student', 'BSIT', 21, 'Female', 'fever', '0', '', '', '0', '2023-12-13 09:50:50'),
(34, '12345', 'maskara', 'Faculty', 'BSDS', 2, 'Female', 'pregnant', '', '', '', '', '2024-04-04 14:26:37'),
(35, '123', 'Courage', 'Student', 'BSIT', 21, 'Female', 'Diarrhea', '29', '52', '164', '0', '2024-04-12 16:08:01');

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
  `password` varchar(16) DEFAULT NULL,
  `date` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `fname`, `lname`, `email`, `password`, `date`) VALUES
(6, 'RD', 'Villalobos', 'rdgv@gmail.com', 'roi1234', '2023-12-04 21:36:31'),
(8, 'Teressa', 'Gomez', 'teressa.gomez@bulsu.edu.ph', 'k1ndN3sS_', '2023-12-05 00:08:33'),
(9, 'Roichelle Denise', 'Villalobos', 'roichelledenise@gmail.com', 'roi1234', '2023-12-05 09:14:45'),
(11, 'Christine', 'Haduca', 'tintin@gmail.com', 'christine1', '2024-03-29 13:48:41');

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
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=36;

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
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
