-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: sql100.infinityfree.com
-- Generation Time: Oct 21, 2025 at 06:50 AM
-- Server version: 10.6.22-MariaDB
-- PHP Version: 7.2.22

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `if0_40130519_mcq_test`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `email` text NOT NULL,
  `pass` text NOT NULL,
  `ad_id` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin5 COLLATE=latin5_turkish_ci;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`email`, `pass`, `ad_id`) VALUES
('admin@gmail.com', '123', 1),
('teacher@gmail.com', '123', 3);

-- --------------------------------------------------------

--
-- Table structure for table `answer`
--

CREATE TABLE `answer` (
  `ans_id` int(11) NOT NULL,
  `test_id` int(11) DEFAULT NULL,
  `std_id` int(11) DEFAULT NULL,
  `question_id` int(11) DEFAULT NULL,
  `selected_opt` text NOT NULL,
  `correct_opt` text DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin5 COLLATE=latin5_turkish_ci;

--
-- Dumping data for table `answer`
--

INSERT INTO `answer` (`ans_id`, `test_id`, `std_id`, `question_id`, `selected_opt`, `correct_opt`) VALUES
(66, 163, 48, 122, 'New Delhi', 'New Delhi'),
(65, 163, 48, 123, 'Mars', 'Mars'),
(64, 163, 48, 124, 'Rabindranath Tagore', 'Rabindranath Tagore'),
(67, 163, 49, 124, 'Rabindranath Tagore', 'Rabindranath Tagore'),
(68, 163, 49, 123, 'Mars', 'Mars'),
(69, 163, 49, 122, 'Mumbai', 'New Delhi'),
(70, 163, 49, 124, 'Rabindranath Tagore', 'Rabindranath Tagore'),
(71, 163, 49, 123, 'Mars', 'Mars'),
(72, 163, 49, 122, 'Mumbai', 'New Delhi'),
(73, 163, 49, 124, 'Rabindranath Tagore', 'Rabindranath Tagore'),
(74, 163, 49, 123, 'Venus', 'Mars'),
(75, 163, 49, 122, 'Mumbai', 'New Delhi'),
(76, 163, 50, 124, 'Rabindranath Tagore', 'Rabindranath Tagore'),
(77, 163, 50, 123, 'Mars', 'Mars'),
(78, 163, 50, 122, 'Chennai', 'New Delhi');

-- --------------------------------------------------------

--
-- Table structure for table `questions`
--

CREATE TABLE `questions` (
  `test_id` int(11) DEFAULT NULL,
  `question_id` int(11) NOT NULL,
  `question` text NOT NULL,
  `opt_1` text NOT NULL,
  `opt_2` text NOT NULL,
  `opt_3` text NOT NULL,
  `opt_4` text NOT NULL,
  `correct_opt` text NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin5 COLLATE=latin5_turkish_ci;

--
-- Dumping data for table `questions`
--

INSERT INTO `questions` (`test_id`, `question_id`, `question`, `opt_1`, `opt_2`, `opt_3`, `opt_4`, `correct_opt`) VALUES
(163, 124, 'Who wrote the national anthem of India?', 'Mahatma Gandhi', 'Rabindranath Tagore', 'Jawaharlal Nehru', 'Subhas Chandra Bose', 'Rabindranath Tagore'),
(163, 123, 'Which planet is known as the Red Planet?', 'Venus', 'Mars', 'Jupiter', 'Saturn', 'Mars'),
(163, 122, 'What is the capital of India?', 'Mumbai', 'Chennai', 'New Delhi', 'Kolkata', 'New Delhi');

-- --------------------------------------------------------

--
-- Table structure for table `student`
--

CREATE TABLE `student` (
  `std_id` int(11) NOT NULL,
  `std_name` varchar(24) NOT NULL,
  `std_number` varchar(10) NOT NULL,
  `std_pass` text NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin5 COLLATE=latin5_turkish_ci;

--
-- Dumping data for table `student`
--

INSERT INTO `student` (`std_id`, `std_name`, `std_number`, `std_pass`) VALUES
(49, 'bunny', '1234567890', 'bunny@123'),
(48, 'bhavesh', '123', '123'),
(50, 'bhavesh', '9876543210', '123');

-- --------------------------------------------------------

--
-- Table structure for table `test`
--

CREATE TABLE `test` (
  `test_id` int(11) NOT NULL,
  `test_name` varchar(24) NOT NULL,
  `noq` int(11) NOT NULL,
  `mpq` int(11) NOT NULL,
  `tm` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin5 COLLATE=latin5_turkish_ci;

--
-- Dumping data for table `test`
--

INSERT INTO `test` (`test_id`, `test_name`, `noq`, `mpq`, `tm`) VALUES
(163, 'GK Quiz', 3, 5, 15);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`ad_id`);

--
-- Indexes for table `answer`
--
ALTER TABLE `answer`
  ADD PRIMARY KEY (`ans_id`),
  ADD KEY `test_id` (`test_id`),
  ADD KEY `std_id` (`std_id`),
  ADD KEY `question_id` (`question_id`);

--
-- Indexes for table `questions`
--
ALTER TABLE `questions`
  ADD PRIMARY KEY (`question_id`),
  ADD KEY `fk_test` (`test_id`);

--
-- Indexes for table `student`
--
ALTER TABLE `student`
  ADD PRIMARY KEY (`std_id`);

--
-- Indexes for table `test`
--
ALTER TABLE `test`
  ADD PRIMARY KEY (`test_id`),
  ADD KEY `test_id` (`test_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `ad_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `answer`
--
ALTER TABLE `answer`
  MODIFY `ans_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=79;

--
-- AUTO_INCREMENT for table `questions`
--
ALTER TABLE `questions`
  MODIFY `question_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=125;

--
-- AUTO_INCREMENT for table `student`
--
ALTER TABLE `student`
  MODIFY `std_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=51;

--
-- AUTO_INCREMENT for table `test`
--
ALTER TABLE `test`
  MODIFY `test_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=164;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
