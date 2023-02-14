-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 29, 2021 at 05:14 AM
-- Server version: 10.4.21-MariaDB
-- PHP Version: 8.0.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `faculty`
--

-- --------------------------------------------------------

--
-- Table structure for table `course`
--

CREATE TABLE `course` (
  `question` text DEFAULT NULL,
  `day` varchar(50) DEFAULT NULL,
  `time` time DEFAULT NULL,
  `room` varchar(50) DEFAULT NULL,
  `course_id` int(11) NOT NULL,
  `subject_code` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `course`
--

INSERT INTO `course` (`question`, `day`, `time`, `room`, `course_id`, `subject_code`) VALUES
('how to please doctor michelle', 'thursday', '08:00:00', 'hall 1', 5, 'CNS'),
(NULL, 'sunday', '12:00:00', 'hall 1', 6, 'DB_1'),
(NULL, 'monday', '08:00:00', 'hall 2', 7, 'MS'),
(NULL, 'sunday', '08:00:00', 'hall 3', 8, 'PL_2'),
(NULL, 'monday', '10:00:00', 'hall 3', 9, 'PS_1'),
(NULL, 'monday', '10:00:00', 'hall 4', 10, 'SWE_1'),
(NULL, 'sunday', '14:00:00', 'hall 4', 11, 'HR'),
(NULL, 'wednesday', '08:00:00', 'hall 2', 12, 'E_1'),
(NULL, 'sunday', '10:00:00', 'hall 3', 13, 'ICS'),
(NULL, 'thursday', '14:00:00', 'hall 2', 14, 'EL'),
(NULL, 'wednesday', '14:00:00', 'hall 2', 15, 'IIS'),
(NULL, 'thursday', '10:00:00', 'hall 3', 16, 'M_1'),
('bad boys', 'sunday', '08:00:00', 'hall 1', 18, 'NW_1'),
(NULL, 'sunday', '10:00:00', 'hall 1', 19, 'IT'),
(NULL, 'sunday', '08:00:00', 'hall 4', 20, 'HI');

-- --------------------------------------------------------

--
-- Table structure for table `professor`
--

CREATE TABLE `professor` (
  `name` varchar(50) DEFAULT NULL,
  `DOB` date DEFAULT NULL,
  `gender` varchar(50) DEFAULT NULL,
  `degree` varchar(50) DEFAULT NULL,
  `username` varchar(50) DEFAULT NULL,
  `password` varchar(50) DEFAULT NULL,
  `department` varchar(50) DEFAULT NULL,
  `national_id` int(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `professor`
--

INSERT INTO `professor` (`name`, `DOB`, `gender`, `degree`, `username`, `password`, `department`, `national_id`) VALUES
('michelle', '2021-12-01', 'male', 'master degree', 'michellesamir', '123', '', 0),
('osama', '1969-12-10', 'male', 'pro.professor', 'osos', 'osos', 'CS', 111444),
('mohammed marie', '1969-12-03', 'male', 'p.professor', 'mero', '252', 'IS', 123456),
('ahmed yakoub', '1979-12-11', 'male', 'professor', 'yakoub', 'jacob', 'SWE', 151151),
('marwa abdelfatah', '1970-12-15', 'female', 'professor', 'm.abdelfatah', 'marwa', 'IS', 65656565),
('soha', '1970-12-24', 'female', 'pro.professor', 'soso', '6589', 'CS', 66659874),
('salah mahfouz', '1964-09-09', 'male', 'professor', 'mahfouz', 'mahfouz', 'SWE', 301254946),
('esaam elshafey', '2021-12-08', 'male', 'professor', 'sasasa', 'shaf3i', 'IS', 987654321),
('metwali', '2021-12-07', 'male', 'professor', 'met', 'wali', 'CS', 1111111111),
('mahmoud elkhouly', '1962-01-16', 'male', 'professor', 'khouly', '123', 'IT', 2147483647);

-- --------------------------------------------------------

--
-- Table structure for table `professor_course`
--

CREATE TABLE `professor_course` (
  `pr_id` int(11) DEFAULT NULL,
  `course_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `professor_course`
--

INSERT INTO `professor_course` (`pr_id`, `course_id`) VALUES
(123456, 15),
(2147483647, 5),
(2147483647, 18),
(2147483647, 19);

-- --------------------------------------------------------

--
-- Table structure for table `student`
--

CREATE TABLE `student` (
  `name` varchar(50) DEFAULT NULL,
  `age` int(11) DEFAULT NULL,
  `username` varchar(50) DEFAULT NULL,
  `email` varchar(50) DEFAULT NULL,
  `password` varchar(50) DEFAULT NULL,
  `level` int(11) DEFAULT NULL,
  `GPA` int(11) DEFAULT NULL,
  `id` int(11) NOT NULL,
  `phone_number` int(11) DEFAULT NULL,
  `registered` varchar(11) NOT NULL DEFAULT 'false'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `student`
--

INSERT INTO `student` (`name`, `age`, `username`, `email`, `password`, `level`, `GPA`, `id`, `phone_number`, `registered`) VALUES
('moataz', 21, 'zee', 'moatazsuperbatman@yahoo.com', 'mmmmm', 1, NULL, 8, 1149060667, 'false'),
('mohannad', 21, 'moo', 'mohand_spider@yahoo.com', 'mnmnmnm', 2, NULL, 9, 1148531452, 'false'),
('amr', 23, 'thaliva', 'amr@yahoo.com', '1234', 4, NULL, 10, 114444, 'false'),
('nourhan', 19, 'noo', 'nourhan@yahoo.com', '555', 2, NULL, 17, 1114141, 'true'),
('esmaeil', 21, 'esmo', 'esmo@yahoo.com', 'esmo', 2, NULL, 18, 1112222, 'false'),
('ebrahim', 25, 'eeoooooooo', 'ebraham@yahoo.com', 'ebra', 2, NULL, 19, 11145587, 'false'),
('mohammed', 26, 'mavrick', 'mohammed@yahoo.com', 'mavrick', 4, NULL, 20, 1111, 'false'),
('yasin', 18, 'yaso', 'yaso@yahoo.com', 'yaso', 1, NULL, 21, 0, 'false'),
('ahmed', 20, 'ahmedo', 'ahmedo@yahoo.com', '123', 1, NULL, 22, 2121212, 'false'),
('nora', 19, 'nono', 'nonoa@yahoo.com', 'nnn', 2, NULL, 23, 2147483647, 'false'),
('safaa', 20, 'safy', 'safy@yahoo.com', 'safy', 3, NULL, 24, 111222, 'false'),
('sayed', 20, 'sayed', 'sayed@yahoo.com', 'sayed', 2, NULL, 25, 211212, 'false'),
('mahmoud', 21, 'mahmoud', 'mahmoud@yahoo.com', 'mahmoud', 2, NULL, 26, 1212121, 'false'),
('khaled', 20, 'khaled', 'khaled@yahoo.com', 'khaled', 2, NULL, 27, 54545, 'false'),
('hany', 20, 'hany', 'hany@yahoo.com', 'hany', 2, NULL, 28, 545454, 'false');

-- --------------------------------------------------------

--
-- Table structure for table `student_course`
--

CREATE TABLE `student_course` (
  `st_id` int(11) NOT NULL,
  `course_id` int(11) NOT NULL,
  `answer` varchar(100) NOT NULL DEFAULT '../uploads/emptyfile.txt',
  `grade` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `student_course`
--

INSERT INTO `student_course` (`st_id`, `course_id`, `answer`, `grade`) VALUES
(17, 5, '../uploads/emptyfile.txt', NULL),
(17, 6, '../uploads/emptyfile.txt', NULL),
(17, 20, '../uploads/emptyfile.txt', NULL),
(17, 7, '../uploads/emptyfile.txt', NULL),
(17, 9, '../uploads/emptyfile.txt', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `subject`
--

CREATE TABLE `subject` (
  `name` varchar(50) NOT NULL,
  `description` text NOT NULL,
  `semester` int(11) NOT NULL,
  `level` int(11) NOT NULL,
  `code` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `subject`
--

INSERT INTO `subject` (`name`, `description`, `semester`, `level`, `code`) VALUES
('communication and negotiation skill', 'study how to deal with people', 1, 2, 'CNS'),
('database-1', 'study concepts of databases ', 1, 2, 'DB_1'),
('electronics', 'discuss electronic devices', 1, 1, 'EL'),
('english-1', 'language', 1, 1, 'E_1'),
('geography', 'stude changeable data', 1, 4, 'GE'),
('history', 'study fake news', 1, 2, 'HI'),
('human rights', 'discuss basic rights of humans', 1, 1, 'HR'),
('introduction to computer science', 'discuss basic concepts of computer science', 1, 1, 'ICS'),
('introductiion to informatics', 'study basic concepts of information systems', 1, 1, 'IIS'),
('information technology', 'discusses the basics of it', 2, 1, 'IT'),
('internet technology', 'amazing subject', 2, 1, 'IT_1'),
('modeling and simulation', 'study simulations', 1, 2, 'MS'),
('math-1', 'study maths', 1, 1, 'M_1'),
('networks', 'discuss networks', 1, 3, 'NW_1'),
('programming language-2', 'study java', 1, 2, 'PL_2'),
('probability and statistics-1', 'study probability and statistics', 1, 2, 'PS_1'),
('software engineering-1', 'good subject', 1, 2, 'SWE_1');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `course`
--
ALTER TABLE `course`
  ADD PRIMARY KEY (`course_id`),
  ADD UNIQUE KEY `subject_code` (`subject_code`),
  ADD UNIQUE KEY `unique` (`day`,`time`,`room`);

--
-- Indexes for table `professor`
--
ALTER TABLE `professor`
  ADD PRIMARY KEY (`national_id`),
  ADD UNIQUE KEY `unique` (`username`) USING BTREE;

--
-- Indexes for table `professor_course`
--
ALTER TABLE `professor_course`
  ADD UNIQUE KEY `unique` (`pr_id`,`course_id`),
  ADD KEY `course foreign key` (`course_id`);

--
-- Indexes for table `student`
--
ALTER TABLE `student`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `unique` (`username`) USING BTREE;

--
-- Indexes for table `student_course`
--
ALTER TABLE `student_course`
  ADD KEY `course foregin key` (`course_id`);

--
-- Indexes for table `subject`
--
ALTER TABLE `subject`
  ADD PRIMARY KEY (`code`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `course`
--
ALTER TABLE `course`
  MODIFY `course_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT for table `student`
--
ALTER TABLE `student`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `course`
--
ALTER TABLE `course`
  ADD CONSTRAINT `foreign key` FOREIGN KEY (`subject_code`) REFERENCES `subject` (`code`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `professor_course`
--
ALTER TABLE `professor_course`
  ADD CONSTRAINT ` professor foreign key` FOREIGN KEY (`pr_id`) REFERENCES `professor` (`national_id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `course foreign key` FOREIGN KEY (`course_id`) REFERENCES `course` (`course_id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
