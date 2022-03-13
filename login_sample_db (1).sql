-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3307
-- Generation Time: Mar 13, 2022 at 08:54 PM
-- Server version: 10.4.21-MariaDB
-- PHP Version: 8.0.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `login_sample_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `courses`
--

CREATE TABLE `courses` (
  `s_enroll_no` varchar(50) DEFAULT NULL,
  `course_code_1` varchar(15) NOT NULL,
  `course_name_1` varchar(50) NOT NULL,
  `course_unit_1` int(11) NOT NULL,
  `course_grade_1` varchar(1) NOT NULL,
  `course_code_2` varchar(15) NOT NULL,
  `course_name_2` varchar(50) NOT NULL,
  `course_unit_2` int(11) NOT NULL,
  `course_grade_2` varchar(1) NOT NULL,
  `course_code_3` varchar(15) NOT NULL,
  `course_name_3` varchar(50) NOT NULL,
  `course_unit_3` int(11) NOT NULL,
  `course_grade_3` varchar(1) NOT NULL,
  `course_code_4` varchar(15) NOT NULL,
  `course_name_4` varchar(50) NOT NULL,
  `course_unit_4` int(11) NOT NULL,
  `course_grade_4` varchar(1) NOT NULL,
  `course_code_5` varchar(15) NOT NULL,
  `course_name_5` varchar(50) NOT NULL,
  `course_unit_5` int(11) NOT NULL,
  `course_grade_5` varchar(1) NOT NULL,
  `course_code_6` varchar(15) NOT NULL,
  `course_name_6` varchar(50) NOT NULL,
  `course_unit_6` int(11) NOT NULL,
  `course_grade_6` varchar(1) NOT NULL,
  `course_code_7` varchar(15) NOT NULL,
  `course_name_7` varchar(50) NOT NULL,
  `course_unit_7` int(11) NOT NULL,
  `course_grade_7` varchar(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `courses`
--

INSERT INTO `courses` (`s_enroll_no`, `course_code_1`, `course_name_1`, `course_unit_1`, `course_grade_1`, `course_code_2`, `course_name_2`, `course_unit_2`, `course_grade_2`, `course_code_3`, `course_name_3`, `course_unit_3`, `course_grade_3`, `course_code_4`, `course_name_4`, `course_unit_4`, `course_grade_4`, `course_code_5`, `course_name_5`, `course_unit_5`, `course_grade_5`, `course_code_6`, `course_name_6`, `course_unit_6`, `course_grade_6`, `course_code_7`, `course_name_7`, `course_unit_7`, `course_grade_7`) VALUES
('19STUCHH010030', 'CHEM111', 'Chemistry', 3, 'A', 'EGL112', 'English Language Skills', 3, 'A', 'MATH113', 'Linear Algebra', 3, 'A', 'PHY114', 'Physics I', 3, 'A', 'TA116', 'Computer Programming I', 3, 'B', 'EVS117', 'Environmental Science', 2, 'B', 'TA115', 'Engineering  Graphics', 4, 'B'),
('19STUCHH010030', 'AO121', 'Probability & Statistics', 2, 'A', 'ES121', 'Thermodynamics', 3, 'B', 'MATH123', 'Higher Calculus', 3, 'B', 'PHY124', 'Physics II', 3, 'B', 'TA127', 'Computer Programming II', 3, 'A', 'TA125', 'Scientific Measurements', 4, 'A', 'TA126', 'Workshop Practice', 4, 'A'),
('19STUCHH010030', 'ES211', 'Electrical Sciences I', 3, 'A', 'ES212', 'Digital Electronics', 3, 'B', 'ES213', 'Engineering Mechanics', 3, 'B', 'MATH215', 'Complex Variables', 3, 'B', 'MATH216', 'Differential Equations & Fourier Series', 3, 'B', 'DS211', 'Discrete Structures for Computers', 3, 'A', 'MGTS224', 'Principles of Management', 3, 'A'),
('19stuchh010230', 'CHEM111', 'Chemistry', 3, 'A', 'EGL112', 'English Language Skills', 3, 'B', 'MATH113', 'Linear Algebra', 3, 'B', 'PHY114', 'Physics I', 3, 'A', 'TA116', 'Computer Programming I', 3, 'B', 'EVS117', 'Environmental Science', 2, 'B', 'TA115', 'Engineering Graphics', 4, 'A'),
('19STUCHH010146', 'CHEM111', 'Chemistry', 3, 'A', 'EGL112', 'English Language Skills', 3, 'A', 'MATH113', 'Linear Algebra', 3, 'B', 'PHY114', 'Physics I', 3, 'A', 'TA116', 'Computer Programming I', 3, 'B', 'EVS117', 'Environmental Science', 2, 'A', 'TA115', 'Engineering Graphics', 4, 'A'),
('19STUCHH010230', 'AO121', 'Probability & Statistics', 2, 'A', 'ES121', 'Thermodynamics', 3, 'B', 'MATH123', 'Higher Calculus', 3, 'A', 'PHY124', 'Physics II', 3, 'A', 'TA127', 'Computer Programming II', 3, 'B', 'TA125', 'Scientific Measurements', 3, 'B', 'TA126', 'Workshop Practice', 4, 'B'),
('19STUCHH010146', 'AO121', 'Probability & Statistics', 2, 'A', 'ES121', 'Thermodynamics', 3, 'A', 'MATH123', 'Higher Calculus', 3, 'B', 'PHY124', 'Physics II', 3, 'B', 'TA127', 'Computer Programming II', 3, 'A', 'TA125', 'Scientific Measurements', 3, 'A', 'TA126', 'Workshop Practice', 4, 'A'),
('19STUCHH010146', 'AO121', 'Probability & Statistics', 2, 'A', 'ES121', 'Thermodynamics', 3, 'B', 'MATH123', 'Higher Calculus', 3, 'B', 'PHY124', 'Physics II', 3, 'A', 'TA127', 'Computer Programming II', 3, 'B', 'TA125', 'Scientific Measurements', 3, 'B', 'TA126', 'Workshop Practice', 4, 'A'),
('19STUCHH010236', 'ES211', 'Electrical Sciences I', 3, 'A', 'ES212', 'Digital Electronics', 3, 'A', 'ES213', 'Engineering Mechanics', 3, 'A', 'MATH215', 'Complex Variables', 3, 'A', 'MATH216', 'Differential Equations & Fourier Series', 3, 'A', '', '', 3, 'A', '', '', 3, 'A'),
('19STUCHH010030', '123', 'TOC', 3, 'A', '121', 'DBMS', 4, 'A', '154', 'OS', 4, 'B', '104', 'CS', 3, 'A', '105', 'NM', 2, 'B', '106', 'MPPI', 2, 'A', '107', 'PC', 3, 'A'),
('19STUCHH010030', '123', 'TOC', 3, 'A', '121', 'DBMS', 4, 'A', '154', 'OS', 4, 'B', '104', 'CS', 3, 'A', '105', 'NM', 2, 'B', '106', 'MPPI', 2, 'A', '107', 'PC', 3, 'A'),
('19STUCHH010236', 'AO121', 'Probability & Statistics', 2, 'A', 'ES121', 'Thermodynamics', 3, 'A', 'MATH123', 'Higher Calculus', 3, 'A', 'PHY124', 'Physics II', 3, 'A', 'TA127', 'Computer Programming II', 3, 'A', 'TA125', 'Scientific Measurements', 3, 'A', 'TA126', 'Workshop Practice', 4, 'A'),
('19STUCHH010030', 'AO311', 'Numercial methods', 3, 'A', 'AO312', 'Control Systems', 3, 'A', '103', 'DBMS', 4, 'A', '145', 'OS', 3, 'A', '105', 'NM', 2, 'B', '106', 'MPPI', 2, 'B', '107', 'Engineering  Graphics', 3, 'A'),
('19STUCHH010146', 'AO311', 'Numercial methods', 3, 'B', 'AO312', 'Control Systems', 3, 'B', '154', 'OS', 4, 'B', '104', 'CS', 3, 'A', '789', 'NM', 2, 'B', '106', 'MPPI', 2, 'A', '107', 'Principles of Management', 3, 'A'),
('19STUCHH010146', 'ES211', 'Electrical Sciences I', 3, 'A', 'ES212', 'Digital Electronics', 3, 'A', 'ES213', 'Engineering Mechanics', 3, 'B', 'MATH215', 'Complex Variables', 3, 'B', 'MATH216', 'Differential Equations & Fourier Series', 3, 'B', 'MGTS225', 'Principle of Management', 3, 'B', '', '', 3, 'A'),
('19STUCHH010030', 'CS221', 'Data Structures', 3, 'A', 'ES221', 'Electrical Science', 3, 'B', 'TA222', 'Engineering Measurements', 4, 'B', 'AO225', 'Optimization Techniques', 2, 'A', 'ECON214', 'Principal of Economics', 3, 'A', 'TA223', 'Professional Communication', 3, 'B', 'ES226', 'Structures and Properties of Materials', 4, 'A'),
('19STUCHH010146', 'CS221', 'Data Structures', 3, 'A', 'ES221', 'Electrical Science', 3, 'B', 'TA222', 'Engineering Measurements', 4, 'B', 'AO225', 'Optimization Techniques', 2, 'A', 'ECON214', 'Principal of Economics', 3, 'B', 'TA223', 'Professional Communication', 3, 'B', 'ES226', 'Structures and Properties of Materials', 4, 'A'),
('19STUCHH010146', 'CS221', 'Data Structures', 3, 'A', 'ES221', 'Electrical Science', 3, 'B', 'TA222', 'Engineering Measurements', 4, 'B', 'AO225', 'Optimization Techniques', 2, 'A', 'ECON214', 'Principal of Economics', 3, 'B', 'TA223', 'Professional Communication', 3, 'B', 'ES226', 'Structures and Properties of Materials', 4, 'A'),
('19STUCHH010146', 'AO311', 'Numercial methods', 3, 'A', 'AO312', 'Control Systems', 3, 'A', 'ES213', 'Engineering Mechanics', 3, 'B', '104', 'CS', 3, 'B', '789', 'NM', 2, 'B', '106', 'MPPI', 2, 'B', 'TA126', 'Workshop Practice', 4, 'A'),
('19STUCHH010146', 'AO311', 'Numercial methods', 3, 'A', 'AO312', 'Control Systems', 3, 'A', 'ES213', 'Engineering Mechanics', 3, 'B', '104', 'CS', 3, 'B', '789', 'NM', 2, 'B', '106', 'MPPI', 2, 'B', 'TA126', 'Workshop Practice', 4, 'A'),
('19STUCHH010146', 'AO311', 'Numercial methods', 3, 'A', 'AO312', 'Control Systems', 3, 'A', 'ES213', 'Engineering Mechanics', 3, 'B', '104', 'CS', 3, 'B', '789', 'NM', 2, 'B', '106', 'MPPI', 2, 'B', 'TA126', 'Workshop Practice', 4, 'A'),
('19STUCHH010146', 'AO311', 'Numercial methods', 3, 'A', 'AO312', 'Control Systems', 3, 'A', 'ES213', 'Engineering Mechanics', 3, 'B', '104', 'CS', 3, 'B', '789', 'NM', 2, 'B', '106', 'MPPI', 2, 'B', 'TA126', 'Workshop Practice', 4, 'A'),
('19STUCHH010030', '123', 'TOC', 3, 'A', '121', 'DBMS', 4, 'A', '154', 'OS', 4, 'A', '104', 'CS', 3, 'A', '105', 'NM', 2, 'B', '106', 'MPPI', 2, 'A', 'MGTS224', 'PC', 3, 'A'),
('19STUCHH010030', '123', 'TOC', 3, 'A', '121', 'DBMS', 4, 'C', '154', 'OS', 4, 'B', '104', 'CS', 3, 'A', '105', 'NM', 2, 'B', '106', 'MPPI', 2, 'B', '107', 'PC', 3, 'B'),
('19STUCHH010030', '123', 'TOC', 3, 'A', '121', 'DBMS', 4, 'C', '154', 'OS', 4, 'B', '104', 'CS', 3, 'A', '105', 'NM', 2, 'B', '106', 'MPPI', 2, 'B', '107', 'PC', 3, 'B'),
('19STUCHH010030', '123', 'TOC', 3, 'A', '121', 'DBMS', 4, 'C', '154', 'OS', 4, 'B', '104', 'CS', 3, 'A', '105', 'NM', 2, 'B', '106', 'MPPI', 2, 'B', '107', 'PC', 3, 'B'),
('19STUCHH010030', '123', 'TOC', 3, 'A', '121', 'DBMS', 4, 'C', '154', 'OS', 4, 'B', '104', 'CS', 3, 'A', '105', 'NM', 2, 'B', '106', 'MPPI', 2, 'B', '107', 'PC', 3, 'B'),
('19STUCHH010030', '123', 'TOC', 3, 'A', '121', 'DBMS', 4, 'C', '154', 'OS', 4, 'B', '104', 'CS', 3, 'A', '105', 'NM', 2, 'B', '106', 'MPPI', 2, 'B', '107', 'PC', 3, 'B'),
('19STUCHH010030', '123', 'TOC', 3, 'A', '121', 'DBMS', 4, 'C', '154', 'OS', 4, 'B', '104', 'CS', 3, 'A', '105', 'NM', 2, 'B', '106', 'MPPI', 2, 'B', '107', 'PC', 3, 'B'),
('19STUCHH010030', '123', 'TOC', 3, 'A', '121', 'DBMS', 4, 'C', '154', 'OS', 4, 'B', '104', 'CS', 3, 'A', '105', 'NM', 2, 'B', '106', 'MPPI', 2, 'B', '107', 'PC', 3, 'B'),
('19STUCHH010030', '123', 'TOC', 3, 'A', '121', 'DBMS', 4, 'C', '154', 'OS', 4, 'B', '104', 'CS', 3, 'A', '105', 'NM', 2, 'B', '106', 'MPPI', 2, 'B', '107', 'PC', 3, 'B'),
('19STUCHH010146', '101', 'TOC', 3, 'A', '121', 'DBMS', 4, 'A', '154', 'OS', 4, 'A', '104', 'CS', 3, 'B', '105', 'NM', 2, 'B', '106', 'MPPI', 2, 'B', '107', 'PC', 3, 'A'),
('19STUCHH010146', '101', 'TOC', 3, 'A', '121', 'DBMS', 4, 'A', '154', 'OS', 4, 'A', '104', 'CS', 3, 'B', '105', 'NM', 2, 'B', '106', 'MPPI', 2, 'B', '107', 'PC', 3, 'A'),
('19STUCHH010146', '101', 'TOC', 3, 'A', '121', 'DBMS', 4, 'A', '154', 'OS', 4, 'A', '104', 'CS', 3, 'B', '105', 'NM', 2, 'B', '106', 'MPPI', 2, 'B', '107', 'PC', 3, 'A'),
('19STUCHH010146', '123', 'TOC', 3, 'B', '121', 'DBMS', 4, 'B', '103', 'OS', 4, 'B', '145', 'CS', 3, 'B', '789', 'NM', 2, 'B', '106', 'MPPI', 2, 'A', 'MGTS224', 'Principles of Management', 3, 'A'),
('19STUCHH010146', '123', 'TOC', 3, 'B', '121', 'DBMS', 4, 'B', '103', 'OS', 4, 'B', '145', 'CS', 3, 'B', '789', 'NM', 2, 'B', '106', 'MPPI', 2, 'A', 'MGTS224', 'Principles of Management', 3, 'A'),
('19STUCHH010236', 'CHEM111', 'Chemistry', 3, 'A', 'EGL112', 'English Language Skills', 3, 'A', 'MATH113', 'Linear Algebra', 3, 'B', 'PHY114', 'Physics I', 3, 'A', 'TA116', 'Computer Programming I', 3, 'A', 'EVS117', 'Environmental Science', 2, 'A', 'TA115', 'Engineering Graphics', 4, 'A'),
('19STUCHH010236', 'AO311', 'Numercial methods', 3, 'A', 'AO312', 'Control Systems', 3, 'A', '', '', 3, 'A', '', '', 3, 'A', '', '', 4, 'A', '', '', 3, 'B', '', '', 3, 'B');

-- --------------------------------------------------------

--
-- Table structure for table `faculty`
--

CREATE TABLE `faculty` (
  `t_id` varchar(50) NOT NULL,
  `user_name` varchar(50) DEFAULT NULL,
  `surname` varchar(20) NOT NULL,
  `ph_no` bigint(20) NOT NULL,
  `experience` int(11) NOT NULL,
  `add_details` varchar(150) NOT NULL,
  `dept` varchar(15) NOT NULL,
  `education` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `faculty`
--

INSERT INTO `faculty` (`t_id`, `user_name`, `surname`, `ph_no`, `experience`, `add_details`, `dept`, `education`) VALUES
('TD030', 'pj123', 'JOGA', 7981584383, 7, 'good in web development ', 'CSE', 'MTECH'),
('TD07', 'param5407', 'JOGA', 7993682865, 3, 'GOOD IN C, JAVA, PYTHON', 'CSE', 'BTECH'),
('TD0789', 'deepthi789', 'RAPAKA', 7995397811, 5, 'GOOD IN C, C++, JAVA, PYTHON', 'CSE', 'BTECH'),
('TD143', 'nikki123', 'YADAV', 79149149143, 7, 'good in web desgining', 'CSE', 'BTECH'),
('td146', 'sravani', 'kota', 6301789456, 10, 'good in web desgining', 'CSE', 'BTECH');

-- --------------------------------------------------------

--
-- Table structure for table `results`
--

CREATE TABLE `results` (
  `rid` int(11) NOT NULL,
  `s_name` varchar(50) NOT NULL,
  `s_enroll_no` varchar(50) NOT NULL,
  `s_department` varchar(20) DEFAULT NULL,
  `s_year` int(11) NOT NULL,
  `s_semester` int(11) NOT NULL,
  `s_email_id` varchar(50) NOT NULL,
  `GPA` float(5,2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `results`
--

INSERT INTO `results` (`rid`, `s_name`, `s_enroll_no`, `s_department`, `s_year`, `s_semester`, `s_email_id`, `GPA`) VALUES
(11732, 'sasi', '19STUCHH010032', 'ECE', 1, 1, 'sasi@ifheindia.org', 8.57),
(45760, 'nikki', '19STUCHH010140', 'DS&AI', 3, 1, 'nikita@gmail.com', 9.52),
(72764, 'Nitesh Kumar', '19STUCHH010023', 'mbbs', 1, 1, 'niteshjaswini@gmail.com', 9.24),
(80300, 'ram', '19STUCHH010239', 'CSE', 3, 1, 'ram@ifheindia.org', 9.52),
(288816, 'Joga Parmeshwar', '19STUCHH010236', 'CSE', 3, 2, 'parameswara.rao19@ifheindia.org', 10.00),
(3708557, 'kevin', '19STUCHH010238', 'ECE', 1, 1, 'kevin@ifheindia.org', 7.05),
(6521735, 'KOTA SRAVANI', '19STUCHH010146', 'CSE', 3, 1, 'kota.sravani19@ifheindia.org', 10.00),
(2147483647, 'Deepthi Rapaka', '19STUCHH010030', 'CSE', 3, 1, 'deepthi.rapaka19@ifheindia.org', 9.81);

-- --------------------------------------------------------

--
-- Table structure for table `results1_1`
--

CREATE TABLE `results1_1` (
  `rid` int(11) NOT NULL,
  `s_name` varchar(100) DEFAULT NULL,
  `s_enroll_no` varchar(100) DEFAULT NULL,
  `s_department` varchar(15) DEFAULT NULL,
  `s_year` int(11) DEFAULT NULL,
  `s_email_id` varchar(100) DEFAULT NULL,
  `s_semester` int(11) DEFAULT NULL,
  `gpa` float(5,2) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `results1_1`
--

INSERT INTO `results1_1` (`rid`, `s_name`, `s_enroll_no`, `s_department`, `s_year`, `s_email_id`, `s_semester`, `gpa`) VALUES
(277715489, 'KOTA SRAVANI', '19STUCHH010146', 'CSE', 1, 'kota.sravani19@ifheindia.org', 1, 9.43),
(780974211, 'Deepthi Rapaka', '19STUCHH010030', 'CSE', 1, 'deepthi.rapaka19@ifheindia.org', 1, 9.14),
(817870206, 'CH VENKATESH', '19STUCHH010022', 'CSE', 1, 'venkatesh19@ifheindia.org', 1, 9.14),
(1628158164, 'KARAN', '19STUCHH010260', 'DS&AI', 1, 'karan5421gmail.com', 1, 8.57),
(2147483647, 'Joga Parmeshwar', '19STUCHH010236', 'CSE', 1, 'parameswara.rao19@ifheindia.org', 1, 10.00);

-- --------------------------------------------------------

--
-- Table structure for table `results1_2`
--

CREATE TABLE `results1_2` (
  `rid` int(11) NOT NULL,
  `s_name` varchar(100) DEFAULT NULL,
  `s_enroll_no` varchar(100) DEFAULT NULL,
  `s_department` varchar(15) DEFAULT NULL,
  `s_year` int(11) DEFAULT NULL,
  `s_email_id` varchar(100) DEFAULT NULL,
  `s_semester` int(11) DEFAULT NULL,
  `gpa` float(5,2) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `results1_2`
--

INSERT INTO `results1_2` (`rid`, `s_name`, `s_enroll_no`, `s_department`, `s_year`, `s_email_id`, `s_semester`, `gpa`) VALUES
(956800, ' KARAN', '19STUCHH010260', 'DS&AI', 1, 'karan5421gmail.com', 2, 8.29),
(25076308, 'CH VENKATESH', '19STUCHH010022', 'CSE', 1, 'venkatesh19@ifheindia.org', 2, 9.05),
(61529765, 'Joga Parmeshwar', '19STUCHH010236', 'CSE', 1, 'parameswara.rao19@ifheindia.org', 2, 10.00),
(921197173, 'KOTA SRAVANI', '19STUCHH010146', 'CSE', 1, 'kota.sravani19@ifheindia.org', 2, 8.86),
(2147483647, 'Deepthi Rapaka', '19STUCHH010030', 'CSE', 1, 'deepthi.rapaka19@ifheindia.org', 2, 9.18);

-- --------------------------------------------------------

--
-- Table structure for table `results2_1`
--

CREATE TABLE `results2_1` (
  `rid` int(11) NOT NULL,
  `s_name` varchar(100) DEFAULT NULL,
  `s_enroll_no` varchar(100) DEFAULT NULL,
  `s_department` varchar(15) DEFAULT NULL,
  `s_year` int(11) DEFAULT NULL,
  `s_email_id` varchar(100) DEFAULT NULL,
  `s_semester` int(11) DEFAULT NULL,
  `gpa` float(5,2) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `results2_1`
--

INSERT INTO `results2_1` (`rid`, `s_name`, `s_enroll_no`, `s_department`, `s_year`, `s_email_id`, `s_semester`, `gpa`) VALUES
(50956, 'CH VENKATESH', '19STUCHH010022', 'CSE', 2, 'venkatesh19@ifheindia.org', 1, 8.29),
(5628328, 'Deepthi Rapaka', '19STUCHH010030', 'CSE', 2, 'deepthi.rapaka19@ifheindia.org', 1, 8.86),
(865930071, 'KOTA SRAVANI', '19STUCHH010146', 'CSE', 2, 'kota.sravani19@ifheindia.org', 1, 8.86),
(2147483647, 'Joga Parmeshwar', '19STUCHH010236', 'CSE', 2, 'parameswara.rao19@ifheindia.org', 1, 9.33);

-- --------------------------------------------------------

--
-- Table structure for table `results2_2`
--

CREATE TABLE `results2_2` (
  `rid` int(11) NOT NULL,
  `s_name` varchar(100) DEFAULT NULL,
  `s_enroll_no` varchar(100) DEFAULT NULL,
  `s_department` varchar(15) DEFAULT NULL,
  `s_year` int(11) DEFAULT NULL,
  `s_email_id` varchar(100) DEFAULT NULL,
  `s_semester` int(11) DEFAULT NULL,
  `gpa` float(5,2) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `results2_2`
--

INSERT INTO `results2_2` (`rid`, `s_name`, `s_enroll_no`, `s_department`, `s_year`, `s_email_id`, `s_semester`, `gpa`) VALUES
(2305, 'KOTA SRAVANI', '19STUCHH010146', 'CSE', 2, 'kota.sravani19@ifheindia.org', 2, 8.82),
(57118956, 'Deepthi Rapaka', '19STUCHH010030', 'CSE', 2, 'deepthi.rapaka19@ifheindia.org', 2, 9.09),
(72808456, 'CH VENKATESH', '19STUCHH010022', 'CSE', 2, 'venkatesh19@ifheindia.org', 2, 7.45),
(210019310, ' KARAN', '19STUCHH010260', 'DS&AI', 2, 'karan5421gmail.com', 2, 9.09),
(2147483647, 'Joga Parmeshwar', '19STUCHH010236', 'cse', 2, 'parameswara.rao19@ifheindia.org', 2, 9.81);

-- --------------------------------------------------------

--
-- Table structure for table `results3_1`
--

CREATE TABLE `results3_1` (
  `rid` int(11) NOT NULL,
  `s_name` varchar(100) DEFAULT NULL,
  `s_enroll_no` varchar(100) DEFAULT NULL,
  `s_department` varchar(15) DEFAULT NULL,
  `s_year` int(11) DEFAULT NULL,
  `s_email_id` varchar(100) DEFAULT NULL,
  `s_semester` int(11) DEFAULT NULL,
  `gpa` float(5,2) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `results3_1`
--

INSERT INTO `results3_1` (`rid`, `s_name`, `s_enroll_no`, `s_department`, `s_year`, `s_email_id`, `s_semester`, `gpa`) VALUES
(36126, 'Joga Parmeshwar', '19STUCHH010236', 'CSE', 3, 'parameswara.rao19@ifheindia.org', 1, 9.81),
(73679, 'Deepthi Rapaka', '19STUCHH010030', 'CSE', 3, 'deepthi.rapaka19@ifheindia.org', 1, 9.60),
(1358252, ' KARAN', '19STUCHH010260', 'DS&AI', 3, 'karan5421gmail.com', 1, 8.29),
(433178154, 'KOTA SRAVANI', '19STUCHH010146', 'CSE', 3, 'kota.sravani19@ifheindia.org', 1, 8.80),
(2147483647, 'CH VENKATESH', '19STUCHH010022', 'CSE', 3, 'venkatesh19@ifheindia.org', 1, 8.10);

-- --------------------------------------------------------

--
-- Table structure for table `results3_2`
--

CREATE TABLE `results3_2` (
  `rid` int(11) NOT NULL,
  `s_name` varchar(100) DEFAULT NULL,
  `s_enroll_no` varchar(100) DEFAULT NULL,
  `s_department` varchar(15) DEFAULT NULL,
  `s_year` int(11) DEFAULT NULL,
  `s_email_id` varchar(100) DEFAULT NULL,
  `s_semester` int(11) DEFAULT NULL,
  `gpa` float(5,2) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `results3_2`
--

INSERT INTO `results3_2` (`rid`, `s_name`, `s_enroll_no`, `s_department`, `s_year`, `s_email_id`, `s_semester`, `gpa`) VALUES
(8950, 'CH VENKATESH', '19STUCHH010022', 'CSE', 3, 'venkatesh19@ifheindia.org', 2, 7.47),
(617741, 'Deepthi Rapaka', '19STUCHH010030', 'CSE', 3, 'deepthi.rapaka19@ifheindia.org', 2, 9.43),
(2659426, ' KARAN', '19STUCHH010260', 'DS&AI', 3, 'karan5421gmail.com', 2, 8.29),
(268800709, 'KOTA SRAVANI', '19STUCHH010146', 'CSE', 3, 'kota.sravani19@ifheindia.org', 2, 9.00),
(2147483647, 'Joga Parmeshwar', '19STUCHH010236', 'CSE', 3, 'parameswara.rao19@ifheindia.org', 2, 9.81);

-- --------------------------------------------------------

--
-- Table structure for table `results4_1`
--

CREATE TABLE `results4_1` (
  `rid` int(11) NOT NULL,
  `s_name` varchar(100) DEFAULT NULL,
  `s_enroll_no` varchar(100) DEFAULT NULL,
  `s_department` varchar(15) DEFAULT NULL,
  `s_year` int(11) DEFAULT NULL,
  `s_email_id` varchar(100) DEFAULT NULL,
  `s_semester` int(11) DEFAULT NULL,
  `gpa` float(5,2) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `results4_1`
--

INSERT INTO `results4_1` (`rid`, `s_name`, `s_enroll_no`, `s_department`, `s_year`, `s_email_id`, `s_semester`, `gpa`) VALUES
(5019, 'Deepthi Rapaka', '19STUCHH010030', 'CSE', 4, 'deepthi.rapaka19@ifheindia.org', 1, 9.81),
(7820313, ' KARAN', '19STUCHH010260', 'DS&AI', 4, 'karan5421gmail.com', 1, 7.62),
(25204369, 'KOTA SRAVANI', '19STUCHH010146', 'CSE', 4, 'kota.sravani19@ifheindia.org', 1, 9.33),
(43132683, 'CH VENKATESH', '19STUCHH010022', 'CSE', 4, 'venkatesh19@ifheindia.org', 1, 8.57),
(2147483647, 'Joga Parmeshwar', '19STUCHH010236', 'CSE', 4, 'parameswara.rao19@ifheindia.org', 1, 9.81);

-- --------------------------------------------------------

--
-- Table structure for table `results4_2`
--

CREATE TABLE `results4_2` (
  `rid` int(11) NOT NULL,
  `s_name` varchar(100) DEFAULT NULL,
  `s_enroll_no` varchar(100) DEFAULT NULL,
  `s_department` varchar(15) DEFAULT NULL,
  `s_year` int(11) DEFAULT NULL,
  `s_email_id` varchar(100) DEFAULT NULL,
  `s_semester` int(11) DEFAULT NULL,
  `gpa` float(5,2) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `results4_2`
--

INSERT INTO `results4_2` (`rid`, `s_name`, `s_enroll_no`, `s_department`, `s_year`, `s_email_id`, `s_semester`, `gpa`) VALUES
(12345, 'Deepthi Rapaka', '19STUCHH010030', 'CSE', 4, 'deepthirapaka19@ifheindia.org', 2, 9.12),
(135489, 'CH VENKATESH', '19STUCHH010022', 'CSE', 4, 'venkatesh19@ifheindia.org', 2, 7.52),
(1603875, 'KOTA SRAVANI', '19STUCHH010146', 'CSE', 4, 'kota.sravani19@ifheindia.org', 2, 8.48),
(9196932, ' KARAN', '19STUCHH010260', 'DS&AI', 4, 'karan5421gmail.com', 2, 8.67),
(2147483647, 'Joga Parmeshwar', '19STUCHH010236', 'CSE', 4, 'parameswara.rao19@ifheindia.org', 2, 9.81);

-- --------------------------------------------------------

--
-- Table structure for table `search`
--

CREATE TABLE `search` (
  `sno` int(11) NOT NULL,
  `enroll_no` varchar(100) NOT NULL DEFAULT '123456'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `search`
--

INSERT INTO `search` (`sno`, `enroll_no`) VALUES
(1, '19STUCHH010030');

-- --------------------------------------------------------

--
-- Table structure for table `students`
--

CREATE TABLE `students` (
  `s_name` varchar(50) NOT NULL,
  `s_enroll_no` varchar(50) NOT NULL,
  `s_department` varchar(15) NOT NULL,
  `s_year` int(11) NOT NULL,
  `s_email_id` varchar(50) NOT NULL,
  `s_semester` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `students`
--

INSERT INTO `students` (`s_name`, `s_enroll_no`, `s_department`, `s_year`, `s_email_id`, `s_semester`) VALUES
('Deepthi Rapaka', '19STUCHH010030', 'CSE', 3, 'deepthi.rapaka19@ifheindia.org', 1),
('Joga Parmeshwar', '19STUCHH010236', 'CSE', 3, 'parameswara.rao19@ifheindia.org', 1),
('Joga Parmeshwar', '19STUCHH010236', 'CSE', 3, 'parameswara.rao19@ifheindia.org', 2),
('kevin', '19STUCHH010238', 'ECE', 1, 'kevin@ifheindia.org', 1),
('KOTA SRAVANI', '19STUCHH010146', 'CSE', 3, 'kota.sravani19@ifheindia.org', 1),
('nikki', '19STUCHH010140', 'DS&AI', 3, 'nikita@gmail.com', 1),
('Nitesh Kumar', '19STUCHH010023', 'mbbs', 1, 'niteshjaswini@gmail.com', 1),
('PARAM', '19STUCHH010230', 'CSE', 1, 'param@ifheindia.org', 1),
('ram', '19STUCHH010239', 'CSE', 3, 'ram@ifheindia.org', 1),
('sasi', '19STUCHH010032', 'ECE', 1, 'sasi@ifheindia.org', 1);

-- --------------------------------------------------------

--
-- Table structure for table `students1_1`
--

CREATE TABLE `students1_1` (
  `s_name` varchar(100) NOT NULL,
  `s_enroll_no` varchar(100) DEFAULT NULL,
  `s_department` varchar(15) DEFAULT NULL,
  `s_year` int(11) DEFAULT NULL,
  `s_email_id` varchar(100) DEFAULT NULL,
  `s_semester` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `students1_1`
--

INSERT INTO `students1_1` (`s_name`, `s_enroll_no`, `s_department`, `s_year`, `s_email_id`, `s_semester`) VALUES
('ASHISH', '19STUCHH010031', 'CSE', 1, 'ASHISH', 1),
('CH VENKATESH', '19STUCHH010022', 'CSE', 1, 'venkatesh19@ifheindia.org', 1),
('Deepthi Rapaka', '19STUCHH010030', 'CSE', 1, 'deepthi.rapaka19@ifheindia.org', 1),
('Joga Parmeshwar', '19STUCHH010236', 'CSE', 1, 'parameswara.rao19@ifheindia.org', 1),
('KARAN', '19STUCHH010260', 'DS&AI', 1, 'karan5421gmail.com', 1),
('KOTA SRAVANI', '19STUCHH010146', 'CSE', 1, 'kota.sravani19@ifheindia.org', 1);

-- --------------------------------------------------------

--
-- Table structure for table `students1_2`
--

CREATE TABLE `students1_2` (
  `s_name` varchar(100) NOT NULL,
  `s_enroll_no` varchar(100) DEFAULT NULL,
  `s_department` varchar(15) DEFAULT NULL,
  `s_year` int(11) DEFAULT NULL,
  `s_email_id` varchar(100) DEFAULT NULL,
  `s_semester` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `students1_2`
--

INSERT INTO `students1_2` (`s_name`, `s_enroll_no`, `s_department`, `s_year`, `s_email_id`, `s_semester`) VALUES
(' Deepthi Rapaka', '19STUCHH010030', 'CSE', 1, 'deepthi.rapaka19@ifheindia.org', 2),
(' KARAN', '19STUCHH010260', 'DS&AI', 2, 'karan5421gmail.com', 2),
(' KOTA SRAVANI', '19STUCHH010146', 'CSE', 3, 'kota.sravani19@ifheindia.org', 1),
(' Samitha Bandi', '19STUCHH010291', 'ECE', 1, 'samithabandi19@ifheindia.org', 2),
('CH VENKATESH', '19STUCHH010022', 'CSE', 1, 'venkatesh19@ifheindia.org', 2),
('Deepthi Rapaka', '19STUCHH010030', 'CSE', 1, 'deepthi.rapaka19@ifheindia.org', 2),
('Joga Parmeshwar', '19STUCHH010236', 'CSE', 1, 'parameswara.rao19@ifheindia.org', 2),
('KOTA SRAVANI', '19STUCHH010146', 'CSE', 1, 'kota.sravani19@ifheindia.org', 2),
('Nitesh Kumar', '19STUCHH010230', 'ECE', 1, 'niteshjaswini@gmail.com', 2);

-- --------------------------------------------------------

--
-- Table structure for table `students2_1`
--

CREATE TABLE `students2_1` (
  `s_name` varchar(100) NOT NULL,
  `s_enroll_no` varchar(100) DEFAULT NULL,
  `s_department` varchar(15) DEFAULT NULL,
  `s_year` int(11) DEFAULT NULL,
  `s_email_id` varchar(100) DEFAULT NULL,
  `s_semester` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `students2_1`
--

INSERT INTO `students2_1` (`s_name`, `s_enroll_no`, `s_department`, `s_year`, `s_email_id`, `s_semester`) VALUES
('CH VENKATESH', '19STUCHH010022', 'CSE', 2, 'venkatesh19@ifheindia.org', 1),
('Deepthi Rapaka', '19STUCHH010030', 'CSE', 2, 'deepthi.rapaka19@ifheindia.org', 1),
('Joga Parmeshwar', '19STUCHH010236', 'CSE', 2, 'parameswara.rao19@ifheindia.org', 1),
('KOTA SRAVANI', '19STUCHH010146', 'CSE', 2, 'kota.sravani19@ifheindia.org', 1),
('SASI', '19STUCHH010001', 'ECE', 2, 'sasi@ifheindia.org', 1);

-- --------------------------------------------------------

--
-- Table structure for table `students2_2`
--

CREATE TABLE `students2_2` (
  `s_name` varchar(100) NOT NULL,
  `s_enroll_no` varchar(100) DEFAULT NULL,
  `s_department` varchar(15) DEFAULT NULL,
  `s_year` int(11) DEFAULT NULL,
  `s_email_id` varchar(100) DEFAULT NULL,
  `s_semester` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `students2_2`
--

INSERT INTO `students2_2` (`s_name`, `s_enroll_no`, `s_department`, `s_year`, `s_email_id`, `s_semester`) VALUES
(' KARAN', '19STUCHH010260', 'DS&AI', 2, 'karan5421gmail.com', 2),
('CH VENKATESH', '19STUCHH010022', 'CSE', 2, 'venkatesh19@ifheindia.org', 2),
('Deepthi Rapaka', '19STUCHH010030', 'CSE', 2, 'deepthi.rapaka19@ifheindia.org', 2),
('Joga Parmeshwar', '19STUCHH010236', 'cse', 2, 'parameswara.rao19@ifheindia.org', 2),
('KOTA SRAVANI', '19STUCHH010146', 'CSE', 2, 'kota.sravani19@ifheindia.org', 2);

-- --------------------------------------------------------

--
-- Table structure for table `students3_1`
--

CREATE TABLE `students3_1` (
  `s_name` varchar(100) NOT NULL,
  `s_enroll_no` varchar(100) DEFAULT NULL,
  `s_department` varchar(15) DEFAULT NULL,
  `s_year` int(11) DEFAULT NULL,
  `s_email_id` varchar(100) DEFAULT NULL,
  `s_semester` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `students3_1`
--

INSERT INTO `students3_1` (`s_name`, `s_enroll_no`, `s_department`, `s_year`, `s_email_id`, `s_semester`) VALUES
(' AKSHAYA', '19STUCHH010192', 'CSE', 3, 'akshaya19@ifheindia.org', 1),
(' BUJJI', '19STUCHH0100030', 'CSE', 3, 'bujji@789gmail.com', 1),
(' Joga Parmeshwar', '19STUCHH010236', 'CSE', 3, 'parameswara.rao19@ifheindia.org', 1),
(' KARAN', '19STUCHH010260', 'DS&AI', 3, 'karan5421gmail.com', 1),
('CH VENKATESH', '19STUCHH010022', 'CSE', 3, 'venkatesh19@ifheindia.org', 1),
('Deepthi Rapaka', '19STUCHH010030', 'CSE', 3, 'deepthi.rapaka19@ifheindia.org', 1),
('Joga Parmeshwar', '19STUCHH010236', 'CSE', 3, 'parameswara.rao19@ifheindia.org', 1),
('KOTA SRAVANI', '19STUCHH010146', 'CSE', 3, 'kota.sravani19@ifheindia.org', 1);

-- --------------------------------------------------------

--
-- Table structure for table `students3_2`
--

CREATE TABLE `students3_2` (
  `s_name` varchar(100) NOT NULL,
  `s_enroll_no` varchar(100) DEFAULT NULL,
  `s_department` varchar(15) DEFAULT NULL,
  `s_year` int(11) DEFAULT NULL,
  `s_email_id` varchar(100) DEFAULT NULL,
  `s_semester` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `students3_2`
--

INSERT INTO `students3_2` (`s_name`, `s_enroll_no`, `s_department`, `s_year`, `s_email_id`, `s_semester`) VALUES
(' KARAN', '19STUCHH010260', 'DS&AI', 3, 'karan5421gmail.com', 2),
('CH VENKATESH', '19STUCHH010022', 'CSE', 3, 'venkatesh19@ifheindia.org', 2),
('Deepthi Rapaka', '19STUCHH010030', 'CSE', 3, 'deepthi.rapaka19@ifheindia.org', 2),
('Joga Parmeshwar', '19STUCHH010236', 'CSE', 3, 'parameswara.rao19@ifheindia.org', 2),
('KOTA SRAVANI', '19STUCHH010146', 'CSE', 3, 'kota.sravani19@ifheindia.org', 2);

-- --------------------------------------------------------

--
-- Table structure for table `students4_1`
--

CREATE TABLE `students4_1` (
  `s_name` varchar(100) NOT NULL,
  `s_enroll_no` varchar(100) DEFAULT NULL,
  `s_department` varchar(15) DEFAULT NULL,
  `s_year` int(11) DEFAULT NULL,
  `s_email_id` varchar(100) DEFAULT NULL,
  `s_semester` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `students4_1`
--

INSERT INTO `students4_1` (`s_name`, `s_enroll_no`, `s_department`, `s_year`, `s_email_id`, `s_semester`) VALUES
(' KARAN', '19STUCHH010260', 'DS&AI', 4, 'karan5421gmail.com', 1),
('CH VENKATESH', '19STUCHH010022', 'CSE', 4, 'venkatesh19@ifheindia.org', 1),
('Deepthi Rapaka', '19STUCHH010030', 'CSE', 4, 'deepthi.rapaka19@ifheindia.org', 1),
('Joga Parmeshwar', '19STUCHH010236', 'CSE', 4, 'parameswara.rao19@ifheindia.org', 1),
('KOTA SRAVANI', '19STUCHH010146', 'CSE', 4, 'kota.sravani19@ifheindia.org', 1);

-- --------------------------------------------------------

--
-- Table structure for table `students4_2`
--

CREATE TABLE `students4_2` (
  `s_name` varchar(100) NOT NULL,
  `s_enroll_no` varchar(100) DEFAULT NULL,
  `s_department` varchar(15) DEFAULT NULL,
  `s_year` int(11) DEFAULT NULL,
  `s_email_id` varchar(100) DEFAULT NULL,
  `s_semester` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `students4_2`
--

INSERT INTO `students4_2` (`s_name`, `s_enroll_no`, `s_department`, `s_year`, `s_email_id`, `s_semester`) VALUES
(' KARAN', '19STUCHH010260', 'DS&AI', 4, 'karan5421gmail.com', 2),
('CH VENKATESH', '19STUCHH010022', 'CSE', 4, 'venkatesh19@ifheindia.org', 2),
('Deepthi Rapaka', '19STUCHH010030', 'CSE', 4, 'deepthi.rapaka19@ifheindia.org', 2),
('Joga Parmeshwar', '19STUCHH010236', 'CSE', 4, 'parameswara.rao19@ifheindia.org', 2),
('KOTA SRAVANI', '19STUCHH010146', 'CSE', 4, 'kota.sravani19@ifheindia.org', 2);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) NOT NULL,
  `user_id` bigint(20) NOT NULL,
  `name` varchar(50) DEFAULT NULL,
  `user_name` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `email_id` varchar(50) DEFAULT NULL,
  `date` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `user_id`, `name`, `user_name`, `password`, `email_id`, `date`) VALUES
(9, 6723797, 'Joga Parmeshwar', 'param5407', '3630', 'parmeshwar5jan@gmail.com', '2021-10-19 14:29:27'),
(11, 1351, 'Deepthi Rapaka', 'deepthi789', 'globy', 'deepthi.rapaka19@ifheindia.org', '2021-11-22 17:20:16'),
(12, 171965, 'kota sravani', 'sravani', 'sravs@143', 'kota.sravani19@ifheindia.org', '2021-10-07 15:25:20'),
(20, 560417455873885182, 'param', 'pj123', '1234', 'parameswara.rao@gmail.conm', '2021-10-10 07:49:42'),
(22, 673299, 'anush joga', 'ashish07', 'anush', 'ashish@gmail.com', '2021-10-20 09:05:10'),
(23, 714563660, 'nikita yadav', 'nikki123', '5407', 'nikki143@gmail.com', '2021-11-01 05:37:32'),
(24, 83385649535437393, 'krishna', 'kitu', '81dc9bdb52d04dc20036dbd8313ed055', 'kittu@gmail.com', '2021-11-27 06:30:41');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `courses`
--
ALTER TABLE `courses`
  ADD KEY `s_enroll_no` (`s_enroll_no`);

--
-- Indexes for table `faculty`
--
ALTER TABLE `faculty`
  ADD PRIMARY KEY (`t_id`),
  ADD KEY `user_name` (`user_name`);

--
-- Indexes for table `results`
--
ALTER TABLE `results`
  ADD PRIMARY KEY (`rid`),
  ADD KEY `s_name` (`s_name`),
  ADD KEY `s_department` (`s_department`),
  ADD KEY `s_department_2` (`s_department`),
  ADD KEY `s_year` (`s_year`),
  ADD KEY `GPA` (`GPA`),
  ADD KEY `s_semester` (`s_semester`),
  ADD KEY `s_enroll_no` (`s_enroll_no`),
  ADD KEY `s_email_id` (`s_email_id`);

--
-- Indexes for table `results1_1`
--
ALTER TABLE `results1_1`
  ADD PRIMARY KEY (`rid`),
  ADD UNIQUE KEY `s_enroll_no` (`s_enroll_no`),
  ADD KEY `s_name` (`s_name`),
  ADD KEY `s_department` (`s_department`),
  ADD KEY `s_year` (`s_year`),
  ADD KEY `s_email_id` (`s_email_id`),
  ADD KEY `s_semester` (`s_semester`);

--
-- Indexes for table `results1_2`
--
ALTER TABLE `results1_2`
  ADD PRIMARY KEY (`rid`),
  ADD KEY `s_name` (`s_name`),
  ADD KEY `s_enroll_no` (`s_enroll_no`),
  ADD KEY `s_department` (`s_department`),
  ADD KEY `s_year` (`s_year`),
  ADD KEY `s_email_id` (`s_email_id`),
  ADD KEY `s_semester` (`s_semester`);

--
-- Indexes for table `results2_1`
--
ALTER TABLE `results2_1`
  ADD PRIMARY KEY (`rid`),
  ADD KEY `s_name` (`s_name`),
  ADD KEY `s_enroll_no` (`s_enroll_no`),
  ADD KEY `s_department` (`s_department`),
  ADD KEY `s_year` (`s_year`),
  ADD KEY `s_email_id` (`s_email_id`),
  ADD KEY `s_semester` (`s_semester`);

--
-- Indexes for table `results2_2`
--
ALTER TABLE `results2_2`
  ADD PRIMARY KEY (`rid`),
  ADD KEY `s_name` (`s_name`),
  ADD KEY `s_enroll_no` (`s_enroll_no`),
  ADD KEY `s_department` (`s_department`),
  ADD KEY `s_year` (`s_year`),
  ADD KEY `s_email_id` (`s_email_id`),
  ADD KEY `s_semester` (`s_semester`);

--
-- Indexes for table `results3_1`
--
ALTER TABLE `results3_1`
  ADD PRIMARY KEY (`rid`),
  ADD KEY `s_name` (`s_name`),
  ADD KEY `s_enroll_no` (`s_enroll_no`),
  ADD KEY `s_department` (`s_department`),
  ADD KEY `s_year` (`s_year`),
  ADD KEY `s_email_id` (`s_email_id`),
  ADD KEY `s_semester` (`s_semester`);

--
-- Indexes for table `results3_2`
--
ALTER TABLE `results3_2`
  ADD PRIMARY KEY (`rid`),
  ADD KEY `s_name` (`s_name`),
  ADD KEY `s_enroll_no` (`s_enroll_no`),
  ADD KEY `s_department` (`s_department`),
  ADD KEY `s_year` (`s_year`),
  ADD KEY `s_email_id` (`s_email_id`),
  ADD KEY `s_semester` (`s_semester`);

--
-- Indexes for table `results4_1`
--
ALTER TABLE `results4_1`
  ADD PRIMARY KEY (`rid`),
  ADD KEY `s_name` (`s_name`),
  ADD KEY `s_enroll_no` (`s_enroll_no`),
  ADD KEY `s_department` (`s_department`),
  ADD KEY `s_year` (`s_year`),
  ADD KEY `s_email_id` (`s_email_id`),
  ADD KEY `s_semester` (`s_semester`);

--
-- Indexes for table `results4_2`
--
ALTER TABLE `results4_2`
  ADD PRIMARY KEY (`rid`),
  ADD KEY `s_name` (`s_name`),
  ADD KEY `s_enroll_no` (`s_enroll_no`),
  ADD KEY `s_department` (`s_department`),
  ADD KEY `s_year` (`s_year`),
  ADD KEY `s_email_id` (`s_email_id`),
  ADD KEY `s_semester` (`s_semester`);

--
-- Indexes for table `search`
--
ALTER TABLE `search`
  ADD PRIMARY KEY (`sno`);

--
-- Indexes for table `students`
--
ALTER TABLE `students`
  ADD PRIMARY KEY (`s_name`,`s_enroll_no`,`s_department`,`s_year`,`s_email_id`,`s_semester`),
  ADD KEY `s_enroll_no` (`s_enroll_no`),
  ADD KEY `s_department` (`s_department`),
  ADD KEY `s_email_id` (`s_email_id`),
  ADD KEY `s_semester` (`s_semester`),
  ADD KEY `s_year` (`s_year`),
  ADD KEY `s_name` (`s_name`);

--
-- Indexes for table `students1_1`
--
ALTER TABLE `students1_1`
  ADD PRIMARY KEY (`s_name`),
  ADD KEY `s_enroll_no` (`s_enroll_no`),
  ADD KEY `s_department` (`s_department`),
  ADD KEY `s_year` (`s_year`),
  ADD KEY `s_email_id` (`s_email_id`),
  ADD KEY `s_semester` (`s_semester`);

--
-- Indexes for table `students1_2`
--
ALTER TABLE `students1_2`
  ADD PRIMARY KEY (`s_name`),
  ADD KEY `s_department` (`s_department`),
  ADD KEY `s_year` (`s_year`),
  ADD KEY `s_email_id` (`s_email_id`),
  ADD KEY `s_semester` (`s_semester`),
  ADD KEY `s_enroll_no` (`s_enroll_no`);

--
-- Indexes for table `students2_1`
--
ALTER TABLE `students2_1`
  ADD PRIMARY KEY (`s_name`),
  ADD KEY `s_department` (`s_department`),
  ADD KEY `s_year` (`s_year`),
  ADD KEY `s_email_id` (`s_email_id`),
  ADD KEY `s_semester` (`s_semester`),
  ADD KEY `s_enroll_no` (`s_enroll_no`);

--
-- Indexes for table `students2_2`
--
ALTER TABLE `students2_2`
  ADD PRIMARY KEY (`s_name`),
  ADD KEY `s_enroll_no` (`s_enroll_no`),
  ADD KEY `s_department` (`s_department`),
  ADD KEY `s_year` (`s_year`),
  ADD KEY `s_email_id` (`s_email_id`),
  ADD KEY `s_semester` (`s_semester`);

--
-- Indexes for table `students3_1`
--
ALTER TABLE `students3_1`
  ADD PRIMARY KEY (`s_name`),
  ADD KEY `s_enroll_no` (`s_enroll_no`),
  ADD KEY `s_department` (`s_department`),
  ADD KEY `s_year` (`s_year`),
  ADD KEY `s_email_id` (`s_email_id`),
  ADD KEY `s_semester` (`s_semester`);

--
-- Indexes for table `students3_2`
--
ALTER TABLE `students3_2`
  ADD PRIMARY KEY (`s_name`),
  ADD KEY `s_enroll_no` (`s_enroll_no`),
  ADD KEY `s_department` (`s_department`),
  ADD KEY `s_year` (`s_year`),
  ADD KEY `s_email_id` (`s_email_id`),
  ADD KEY `s_semester` (`s_semester`);

--
-- Indexes for table `students4_1`
--
ALTER TABLE `students4_1`
  ADD PRIMARY KEY (`s_name`),
  ADD KEY `s_enroll_no` (`s_enroll_no`),
  ADD KEY `s_department` (`s_department`),
  ADD KEY `s_year` (`s_year`),
  ADD KEY `s_email_id` (`s_email_id`),
  ADD KEY `s_semester` (`s_semester`);

--
-- Indexes for table `students4_2`
--
ALTER TABLE `students4_2`
  ADD PRIMARY KEY (`s_name`),
  ADD KEY `s_enroll_no` (`s_enroll_no`),
  ADD KEY `s_department` (`s_department`),
  ADD KEY `s_email_id` (`s_email_id`),
  ADD KEY `s_semester` (`s_semester`),
  ADD KEY `s_year` (`s_year`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `user_id_2` (`user_id`),
  ADD KEY `user_id` (`user_id`),
  ADD KEY `date` (`date`),
  ADD KEY `user_name` (`user_name`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `search`
--
ALTER TABLE `search`
  MODIFY `sno` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `courses`
--
ALTER TABLE `courses`
  ADD CONSTRAINT `courses_ibfk_1` FOREIGN KEY (`s_enroll_no`) REFERENCES `students` (`s_enroll_no`);

--
-- Constraints for table `faculty`
--
ALTER TABLE `faculty`
  ADD CONSTRAINT `faculty_ibfk_1` FOREIGN KEY (`user_name`) REFERENCES `users` (`user_name`);

--
-- Constraints for table `results`
--
ALTER TABLE `results`
  ADD CONSTRAINT `results_ibfk_1` FOREIGN KEY (`s_name`) REFERENCES `students` (`s_name`),
  ADD CONSTRAINT `results_ibfk_10` FOREIGN KEY (`s_enroll_no`) REFERENCES `students` (`s_enroll_no`) ON UPDATE CASCADE,
  ADD CONSTRAINT `results_ibfk_11` FOREIGN KEY (`s_year`) REFERENCES `students` (`s_year`) ON UPDATE CASCADE,
  ADD CONSTRAINT `results_ibfk_12` FOREIGN KEY (`s_department`) REFERENCES `students` (`s_department`) ON UPDATE CASCADE,
  ADD CONSTRAINT `results_ibfk_13` FOREIGN KEY (`s_semester`) REFERENCES `students` (`s_semester`) ON UPDATE CASCADE,
  ADD CONSTRAINT `results_ibfk_14` FOREIGN KEY (`s_email_id`) REFERENCES `students` (`s_email_id`) ON UPDATE CASCADE,
  ADD CONSTRAINT `results_ibfk_15` FOREIGN KEY (`s_name`) REFERENCES `students` (`s_name`),
  ADD CONSTRAINT `results_ibfk_16` FOREIGN KEY (`s_enroll_no`) REFERENCES `students` (`s_enroll_no`),
  ADD CONSTRAINT `results_ibfk_17` FOREIGN KEY (`s_year`) REFERENCES `students` (`s_year`),
  ADD CONSTRAINT `results_ibfk_18` FOREIGN KEY (`s_department`) REFERENCES `students` (`s_department`),
  ADD CONSTRAINT `results_ibfk_19` FOREIGN KEY (`s_email_id`) REFERENCES `students` (`s_email_id`),
  ADD CONSTRAINT `results_ibfk_2` FOREIGN KEY (`s_enroll_no`) REFERENCES `students` (`s_enroll_no`),
  ADD CONSTRAINT `results_ibfk_20` FOREIGN KEY (`s_semester`) REFERENCES `students` (`s_semester`),
  ADD CONSTRAINT `results_ibfk_21` FOREIGN KEY (`s_name`,`s_enroll_no`) REFERENCES `students` (`s_name`, `s_enroll_no`),
  ADD CONSTRAINT `results_ibfk_3` FOREIGN KEY (`s_name`) REFERENCES `students` (`s_name`),
  ADD CONSTRAINT `results_ibfk_4` FOREIGN KEY (`s_enroll_no`) REFERENCES `students` (`s_enroll_no`),
  ADD CONSTRAINT `results_ibfk_5` FOREIGN KEY (`s_year`) REFERENCES `students` (`s_year`),
  ADD CONSTRAINT `results_ibfk_6` FOREIGN KEY (`s_semester`) REFERENCES `students` (`s_semester`),
  ADD CONSTRAINT `results_ibfk_7` FOREIGN KEY (`s_email_id`) REFERENCES `students` (`s_email_id`),
  ADD CONSTRAINT `results_ibfk_8` FOREIGN KEY (`s_department`) REFERENCES `students` (`s_department`),
  ADD CONSTRAINT `results_ibfk_9` FOREIGN KEY (`s_name`) REFERENCES `students` (`s_name`) ON UPDATE CASCADE;

--
-- Constraints for table `results1_1`
--
ALTER TABLE `results1_1`
  ADD CONSTRAINT `results1_1_ibfk_1` FOREIGN KEY (`s_name`) REFERENCES `students1_1` (`s_name`) ON UPDATE CASCADE,
  ADD CONSTRAINT `results1_1_ibfk_10` FOREIGN KEY (`s_semester`) REFERENCES `students1_1` (`s_semester`) ON UPDATE CASCADE,
  ADD CONSTRAINT `results1_1_ibfk_2` FOREIGN KEY (`s_enroll_no`) REFERENCES `students1_1` (`s_enroll_no`) ON UPDATE CASCADE,
  ADD CONSTRAINT `results1_1_ibfk_3` FOREIGN KEY (`s_enroll_no`) REFERENCES `students1_1` (`s_enroll_no`) ON UPDATE CASCADE,
  ADD CONSTRAINT `results1_1_ibfk_4` FOREIGN KEY (`s_enroll_no`) REFERENCES `students1_1` (`s_enroll_no`) ON UPDATE CASCADE,
  ADD CONSTRAINT `results1_1_ibfk_5` FOREIGN KEY (`s_enroll_no`) REFERENCES `students1_1` (`s_enroll_no`) ON UPDATE CASCADE,
  ADD CONSTRAINT `results1_1_ibfk_6` FOREIGN KEY (`s_enroll_no`) REFERENCES `students1_1` (`s_enroll_no`) ON UPDATE CASCADE,
  ADD CONSTRAINT `results1_1_ibfk_7` FOREIGN KEY (`s_department`) REFERENCES `students1_1` (`s_department`) ON UPDATE CASCADE,
  ADD CONSTRAINT `results1_1_ibfk_8` FOREIGN KEY (`s_year`) REFERENCES `students1_1` (`s_year`) ON UPDATE CASCADE,
  ADD CONSTRAINT `results1_1_ibfk_9` FOREIGN KEY (`s_email_id`) REFERENCES `students1_1` (`s_email_id`) ON UPDATE CASCADE;

--
-- Constraints for table `results1_2`
--
ALTER TABLE `results1_2`
  ADD CONSTRAINT `results1_2_ibfk_1` FOREIGN KEY (`s_name`) REFERENCES `students1_2` (`s_name`) ON UPDATE CASCADE,
  ADD CONSTRAINT `results1_2_ibfk_2` FOREIGN KEY (`s_enroll_no`) REFERENCES `students1_2` (`s_enroll_no`) ON UPDATE CASCADE,
  ADD CONSTRAINT `results1_2_ibfk_3` FOREIGN KEY (`s_department`) REFERENCES `students1_2` (`s_department`) ON UPDATE CASCADE,
  ADD CONSTRAINT `results1_2_ibfk_4` FOREIGN KEY (`s_year`) REFERENCES `students1_2` (`s_year`) ON UPDATE CASCADE,
  ADD CONSTRAINT `results1_2_ibfk_5` FOREIGN KEY (`s_email_id`) REFERENCES `students1_2` (`s_email_id`) ON UPDATE CASCADE,
  ADD CONSTRAINT `results1_2_ibfk_6` FOREIGN KEY (`s_semester`) REFERENCES `students1_2` (`s_semester`) ON UPDATE CASCADE;

--
-- Constraints for table `results2_1`
--
ALTER TABLE `results2_1`
  ADD CONSTRAINT `results2_1_ibfk_1` FOREIGN KEY (`s_name`) REFERENCES `students2_1` (`s_name`) ON UPDATE CASCADE,
  ADD CONSTRAINT `results2_1_ibfk_2` FOREIGN KEY (`s_enroll_no`) REFERENCES `students2_1` (`s_enroll_no`) ON UPDATE CASCADE,
  ADD CONSTRAINT `results2_1_ibfk_3` FOREIGN KEY (`s_department`) REFERENCES `students2_1` (`s_department`) ON UPDATE CASCADE,
  ADD CONSTRAINT `results2_1_ibfk_4` FOREIGN KEY (`s_year`) REFERENCES `students2_1` (`s_year`) ON UPDATE CASCADE,
  ADD CONSTRAINT `results2_1_ibfk_5` FOREIGN KEY (`s_email_id`) REFERENCES `students2_1` (`s_email_id`) ON UPDATE CASCADE,
  ADD CONSTRAINT `results2_1_ibfk_6` FOREIGN KEY (`s_semester`) REFERENCES `students2_1` (`s_semester`) ON UPDATE CASCADE;

--
-- Constraints for table `results2_2`
--
ALTER TABLE `results2_2`
  ADD CONSTRAINT `results2_2_ibfk_1` FOREIGN KEY (`s_name`) REFERENCES `students2_2` (`s_name`) ON UPDATE CASCADE,
  ADD CONSTRAINT `results2_2_ibfk_2` FOREIGN KEY (`s_enroll_no`) REFERENCES `students2_2` (`s_enroll_no`) ON UPDATE CASCADE,
  ADD CONSTRAINT `results2_2_ibfk_3` FOREIGN KEY (`s_department`) REFERENCES `students2_2` (`s_department`) ON UPDATE CASCADE,
  ADD CONSTRAINT `results2_2_ibfk_4` FOREIGN KEY (`s_year`) REFERENCES `students2_2` (`s_year`) ON UPDATE CASCADE,
  ADD CONSTRAINT `results2_2_ibfk_5` FOREIGN KEY (`s_email_id`) REFERENCES `students2_2` (`s_email_id`) ON UPDATE CASCADE,
  ADD CONSTRAINT `results2_2_ibfk_6` FOREIGN KEY (`s_semester`) REFERENCES `students2_2` (`s_semester`) ON UPDATE CASCADE;

--
-- Constraints for table `results3_1`
--
ALTER TABLE `results3_1`
  ADD CONSTRAINT `results3_1_ibfk_1` FOREIGN KEY (`s_name`) REFERENCES `students3_1` (`s_name`) ON UPDATE CASCADE,
  ADD CONSTRAINT `results3_1_ibfk_2` FOREIGN KEY (`s_enroll_no`) REFERENCES `students3_1` (`s_enroll_no`) ON UPDATE CASCADE,
  ADD CONSTRAINT `results3_1_ibfk_3` FOREIGN KEY (`s_department`) REFERENCES `students3_1` (`s_department`) ON UPDATE CASCADE,
  ADD CONSTRAINT `results3_1_ibfk_4` FOREIGN KEY (`s_year`) REFERENCES `students3_1` (`s_year`) ON UPDATE CASCADE,
  ADD CONSTRAINT `results3_1_ibfk_5` FOREIGN KEY (`s_email_id`) REFERENCES `students3_1` (`s_email_id`) ON UPDATE CASCADE,
  ADD CONSTRAINT `results3_1_ibfk_6` FOREIGN KEY (`s_semester`) REFERENCES `students3_1` (`s_semester`) ON UPDATE CASCADE;

--
-- Constraints for table `results3_2`
--
ALTER TABLE `results3_2`
  ADD CONSTRAINT `results3_2_ibfk_1` FOREIGN KEY (`s_name`) REFERENCES `students3_2` (`s_name`) ON UPDATE CASCADE,
  ADD CONSTRAINT `results3_2_ibfk_2` FOREIGN KEY (`s_enroll_no`) REFERENCES `students3_2` (`s_enroll_no`) ON UPDATE CASCADE,
  ADD CONSTRAINT `results3_2_ibfk_3` FOREIGN KEY (`s_department`) REFERENCES `students3_2` (`s_department`) ON UPDATE CASCADE,
  ADD CONSTRAINT `results3_2_ibfk_4` FOREIGN KEY (`s_year`) REFERENCES `students3_2` (`s_year`) ON UPDATE CASCADE,
  ADD CONSTRAINT `results3_2_ibfk_5` FOREIGN KEY (`s_email_id`) REFERENCES `students3_2` (`s_email_id`) ON UPDATE CASCADE,
  ADD CONSTRAINT `results3_2_ibfk_6` FOREIGN KEY (`s_semester`) REFERENCES `students3_2` (`s_semester`) ON UPDATE CASCADE;

--
-- Constraints for table `results4_1`
--
ALTER TABLE `results4_1`
  ADD CONSTRAINT `results4_1_ibfk_1` FOREIGN KEY (`s_name`) REFERENCES `students4_1` (`s_name`) ON UPDATE CASCADE,
  ADD CONSTRAINT `results4_1_ibfk_2` FOREIGN KEY (`s_enroll_no`) REFERENCES `students4_1` (`s_enroll_no`) ON UPDATE CASCADE,
  ADD CONSTRAINT `results4_1_ibfk_3` FOREIGN KEY (`s_department`) REFERENCES `students4_1` (`s_department`) ON UPDATE CASCADE,
  ADD CONSTRAINT `results4_1_ibfk_4` FOREIGN KEY (`s_year`) REFERENCES `students4_1` (`s_year`) ON UPDATE CASCADE,
  ADD CONSTRAINT `results4_1_ibfk_5` FOREIGN KEY (`s_email_id`) REFERENCES `students4_1` (`s_email_id`) ON UPDATE CASCADE,
  ADD CONSTRAINT `results4_1_ibfk_6` FOREIGN KEY (`s_semester`) REFERENCES `students4_1` (`s_semester`) ON UPDATE CASCADE;

--
-- Constraints for table `results4_2`
--
ALTER TABLE `results4_2`
  ADD CONSTRAINT `results4_2_ibfk_1` FOREIGN KEY (`s_name`) REFERENCES `students4_2` (`s_name`) ON UPDATE CASCADE,
  ADD CONSTRAINT `results4_2_ibfk_2` FOREIGN KEY (`s_enroll_no`) REFERENCES `students4_2` (`s_enroll_no`) ON UPDATE CASCADE,
  ADD CONSTRAINT `results4_2_ibfk_3` FOREIGN KEY (`s_department`) REFERENCES `students4_2` (`s_department`) ON UPDATE CASCADE,
  ADD CONSTRAINT `results4_2_ibfk_4` FOREIGN KEY (`s_year`) REFERENCES `students4_2` (`s_year`) ON UPDATE CASCADE,
  ADD CONSTRAINT `results4_2_ibfk_5` FOREIGN KEY (`s_email_id`) REFERENCES `students4_2` (`s_email_id`) ON UPDATE CASCADE,
  ADD CONSTRAINT `results4_2_ibfk_6` FOREIGN KEY (`s_semester`) REFERENCES `students4_2` (`s_semester`) ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
