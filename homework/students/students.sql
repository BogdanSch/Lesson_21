-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 11, 2023 at 09:27 PM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `students`
--

-- --------------------------------------------------------

--
-- Table structure for table `students`
--

CREATE TABLE `students` (
  `id` int(11) NOT NULL,
  `student_name` varchar(60) NOT NULL,
  `student_last_name` varchar(60) CHARACTER SET utf8 NOT NULL,
  `student_birthday` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `students`
--

INSERT INTO `students` (`id`, `student_name`, `student_last_name`, `student_birthday`) VALUES
(1, 'Lev', 'Kudin', '2002-07-11'),
(2, 'Bohdan', 'Shcherbak', '2003-01-22'),
(3, 'Mark', 'Butov', '2003-01-24');

-- --------------------------------------------------------

--
-- Table structure for table `students_stat`
--

CREATE TABLE `students_stat` (
  `student_id` int(11) NOT NULL,
  `average_student_mark` double NOT NULL,
  `student_attendance` int(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `students_stat`
--

INSERT INTO `students_stat` (`student_id`, `average_student_mark`, `student_attendance`) VALUES
(1, 4.9, 90),
(2, 4.5, 80),
(3, 3.9, 68);

-- --------------------------------------------------------

--
-- Table structure for table `students_subject`
--

CREATE TABLE `students_subject` (
  `student_id` int(11) NOT NULL,
  `student_subject` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `students_subject`
--

INSERT INTO `students_subject` (`student_id`, `student_subject`) VALUES
(1, 'PHP'),
(2, 'C#'),
(3, 'Java');

-- --------------------------------------------------------

--
-- Table structure for table `subjects`
--

CREATE TABLE `subjects` (
  `subject_name` varchar(100) NOT NULL,
  `subject_hours` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `subjects`
--

INSERT INTO `subjects` (`subject_name`, `subject_hours`) VALUES
('PHP', 30),
('Java', 40),
('C#', 54);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `students`
--
ALTER TABLE `students`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `students_stat`
--
ALTER TABLE `students_stat`
  ADD PRIMARY KEY (`student_id`);

--
-- Indexes for table `students_subject`
--
ALTER TABLE `students_subject`
  ADD PRIMARY KEY (`student_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `students`
--
ALTER TABLE `students`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
