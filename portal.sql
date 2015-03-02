-- phpMyAdmin SQL Dump
-- version 3.5.2.2
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Apr 16, 2013 at 08:51 PM
-- Server version: 5.5.27
-- PHP Version: 5.4.7

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `portal`
--

-- --------------------------------------------------------

--
-- Table structure for table `bank_information`
--

CREATE TABLE IF NOT EXISTS `bank_information` (
  `Bank_name` varchar(20) DEFAULT NULL,
  `acc_no` int(11) DEFAULT NULL,
  `username` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `bank_information`
--

INSERT INTO `bank_information` (`Bank_name`, `acc_no`, `username`) VALUES
('PNB', 99310, '2011uit1731'),
('PNB', 99314, '2011uit1719'),
('CBI', 77373, '2011uit1636');

-- --------------------------------------------------------

--
-- Table structure for table `faculty_info`
--

CREATE TABLE IF NOT EXISTS `faculty_info` (
  `name` varchar(20) DEFAULT NULL,
  `id` varchar(20) DEFAULT NULL,
  `Departments` varchar(200) DEFAULT NULL,
  `position` varchar(20) DEFAULT NULL,
  `username` varchar(20) DEFAULT NULL,
  `phone_no` varchar(20) DEFAULT NULL,
  `fax_no` varchar(20) DEFAULT NULL,
  `email` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `faculty_info`
--

INSERT INTO `faculty_info` (`name`, `id`, `Departments`, `position`, `username`, `phone_no`, `fax_no`, `email`) VALUES
('Vijay Laxmi', 'CE-001', 'Computer Engineering', 'HOD', '1001', '2713323', '2529154', 'vlaxmi@mnit.ac.in'),
('Mushtaq Ahmed', 'IT-202', 'Information Technology', 'HOD', '1006', '0141-2713361', ' 0141-2529154.', 'mushtaq@mnit.ac.in'),
('Sumit Khandelwal', 'Civil-100', 'CIVIL Engineering', 'Professor', '1005', '0141-2713297', '-', 'khandusa@gmail.com'),
('Namita Mittal', 'CE-202', 'Computer Engineering', 'Professor', '1002', '0141-2713524', '-', 'mittalnamita@rediffm'),
('MS Gaur', 'CE-205', 'Computer Engineering', 'Professor', '1003', '0141-2713127', '-', 'gaurms@gmail.com'),
('Sonia Jain', 'IT-205', 'Information Technology', 'Associate-Professor', '1004', NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `faculty_projects`
--

CREATE TABLE IF NOT EXISTS `faculty_projects` (
  `username` varchar(20) DEFAULT NULL,
  `project_name` varchar(200) DEFAULT NULL,
  `principal_investigator` varchar(20) DEFAULT NULL,
  `sponsoring_agency` varchar(20) DEFAULT NULL,
  `outlay_in_lacs` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `faculty_projects`
--

INSERT INTO `faculty_projects` (`username`, `project_name`, `principal_investigator`, `sponsoring_agency`, `outlay_in_lacs`) VALUES
('1001', 'Biometric application in personal identification', 'Dr. Vijay Laxmi', 'MHRD', '8.00 lacs'),
('1002', 'Keypad-Token-Meter-System', 'Namita Mittal', 'GPIL', '150 lacs');

-- --------------------------------------------------------

--
-- Table structure for table `faculty_security`
--

CREATE TABLE IF NOT EXISTS `faculty_security` (
  `username` varchar(20) DEFAULT NULL,
  `password` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `faculty_security`
--

INSERT INTO `faculty_security` (`username`, `password`) VALUES
('1001', 'vijaylaxmi'),
('1002', 'namitamittal'),
('1003', 'msgaur'),
('1004', 'sonia'),
('1005', 'Sk'),
('1006', 'mushtaq');

-- --------------------------------------------------------

--
-- Table structure for table `hostel_information`
--

CREATE TABLE IF NOT EXISTS `hostel_information` (
  `Hostel_name` varchar(20) DEFAULT NULL,
  `Room_no` int(11) DEFAULT NULL,
  `username` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `hostel_information`
--

INSERT INTO `hostel_information` (`Hostel_name`, `Room_no`, `username`) VALUES
('Aurobindo', 0, '2011uit1731'),
('Aurobindo', 515, '2011uit1731'),
('Hostel-3', 84, '2011uit1719'),
('Aurobindo', 424, '2011uit1636');

-- --------------------------------------------------------

--
-- Table structure for table `library_info`
--

CREATE TABLE IF NOT EXISTS `library_info` (
  `username` varchar(20) DEFAULT NULL,
  `book_no` varchar(20) DEFAULT NULL,
  `book_name` varchar(20) DEFAULT NULL,
  `issued_date` varchar(20) DEFAULT NULL,
  `submission_date` varchar(20) DEFAULT NULL,
  `serial` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `library_info`
--

INSERT INTO `library_info` (`username`, `book_no`, `book_name`, `issued_date`, `submission_date`, `serial`) VALUES
('2011uit1731', 'IT-100', 'D.S.A.', '10-11-2012', '11-12-2013', 1),
('2011uit1731', 'IT-105', 'FLAT', '07-01-2013', '15-01-2013', 2),
('2011uit1719', 'IT-215', 'TOC', '12-02-2013', '15-02-2013', 1),
('2011uit1719', 'HS-109', 'Indian-Economy', '21-03-2013', '31-03-2013', 2),
('2011uit1636', 'PH-226', 'Solar-Physics', '18-12-2013', '29-03-2013', 1);

-- --------------------------------------------------------

--
-- Table structure for table `permanent_address`
--

CREATE TABLE IF NOT EXISTS `permanent_address` (
  `city` varchar(20) DEFAULT NULL,
  `district` varchar(20) DEFAULT NULL,
  `state` varchar(20) DEFAULT NULL,
  `pincode` int(11) DEFAULT NULL,
  `country` varchar(20) DEFAULT NULL,
  `username` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `permanent_address`
--

INSERT INTO `permanent_address` (`city`, `district`, `state`, `pincode`, `country`, `username`) VALUES
('Nabinagar', 'Aurangabad', 'Bihar', 824301, 'India', '2011uit1731'),
('Bharatpur', 'Bharatpur', 'Rajasthan', 78965, 'India', '2011uit1636'),
('Sheoganj', 'Sirohi', 'Rajasthan', 302017, 'India', '2011uit1719');

-- --------------------------------------------------------

--
-- Table structure for table `personal_info`
--

CREATE TABLE IF NOT EXISTS `personal_info` (
  `Date_of_Birth` varchar(20) DEFAULT NULL,
  `Email` varchar(200) DEFAULT NULL,
  `Gender` varchar(20) DEFAULT NULL,
  `AIEEE_Rank` int(11) DEFAULT NULL,
  `Category` varchar(20) DEFAULT NULL,
  `username` varchar(20) DEFAULT NULL,
  `address` varchar(200) DEFAULT NULL,
  `Hostel_name` varchar(20) DEFAULT NULL,
  `Room_no` varchar(20) DEFAULT NULL,
  `Bank_name` varchar(20) DEFAULT NULL,
  `Bank_acc_no` int(11) DEFAULT NULL,
  `father_name` varchar(20) DEFAULT NULL,
  `mother_name` varchar(20) DEFAULT NULL,
  `name` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `personal_info`
--

INSERT INTO `personal_info` (`Date_of_Birth`, `Email`, `Gender`, `AIEEE_Rank`, `Category`, `username`, `address`, `Hostel_name`, `Room_no`, `Bank_name`, `Bank_acc_no`, `father_name`, `mother_name`, `name`) VALUES
('18-04-1993', 'Shubhamjaiswal1860@gmail.com', 'Male', 17264, 'OBC', '2011uit1731', 'district-Aurangabad ', 'Aurobindo', 'AB515', 'PNB', 99314, 'Ramesh Jaiswal', 'Usha Jaiswal', 'Shubham Jaiswal'),
('01-01-1992', 'dkb021@gmail.com', 'Male', 19206, 'OBC', '2011uit1719', 'district-sheoganj state-Rajasthan', 'Hostel-3', '84', 'PNB', 99310, 'Kanhaiya Lal', 'Poni Bai', 'Dinesh Borana'),
('10-12-1992', 'gauri98@gmail.com', 'Male', 10998, 'General', '2011uit1636', 'district-Bharatpur state-Rajasthan', 'Aurobindo', '424', 'CBI', 77373, 'Bani singh', 'Sushila singh', 'Gaurav Singh');

-- --------------------------------------------------------

--
-- Table structure for table `result`
--

CREATE TABLE IF NOT EXISTS `result` (
  `username` varchar(20) DEFAULT NULL,
  `Semester` varchar(20) DEFAULT NULL,
  `SGPA` varchar(20) DEFAULT NULL,
  `CGPA` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `result`
--

INSERT INTO `result` (`username`, `Semester`, `SGPA`, `CGPA`) VALUES
('2011uit1731', '1st', '7.2', '7.2'),
('2011uit1731', '2nd', '7.0', '7.1'),
('2011uit1731', '3rd', '7.4', '7.23'),
('2011uit1719', '1st', '7.6', '7.6'),
('2011uit1719', '2nd', '7.4', '7.5'),
('2011uit1719', '3rd', '8.0', '7.66'),
('2011uit1636', '1st', '7.0', '7.0'),
('2011uit1636', '2nd', '7.4', '7.2'),
('2011uit1636', '3rd', '8.0', '7.46');

-- --------------------------------------------------------

--
-- Table structure for table `security`
--

CREATE TABLE IF NOT EXISTS `security` (
  `username` varchar(20) DEFAULT NULL,
  `password` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `security`
--

INSERT INTO `security` (`username`, `password`) VALUES
('2011uit1731', 'shubham'),
('2011uit1636', 'gaurav'),
('2011uit1719', 'dinesh');

-- --------------------------------------------------------

--
-- Table structure for table `student_projects`
--

CREATE TABLE IF NOT EXISTS `student_projects` (
  `username` varchar(20) DEFAULT NULL,
  `project_name` varchar(200) DEFAULT NULL,
  `team_members` varchar(200) DEFAULT NULL,
  `coordinator` varchar(20) DEFAULT NULL,
  `serial` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `student_projects`
--

INSERT INTO `student_projects` (`username`, `project_name`, `team_members`, `coordinator`, `serial`) VALUES
('2011uit1731', 'Pintos-modelling', 'Shubham jaiswal,Dinesh kumar,Gaurav singh', 'MS Gaur', 1),
('2011uit1731', 'UID identification', 'Shubham jaiswal,Abhishek charan', 'Vijay Laxmi', 2),
('2011uit1719', 'Pintos-modelling', 'Dinesh kumar,shubham jaiswal', 'MS Gaur', 1),
('2011uit1636', 'UID identification', 'Gaurav singh,shubham jaiswal', 'Vijay Laxmi', 1),
('2011uit1731', 'Portal-Designing', 'Shubham Jaiswal,Dinesh Borana', 'Sonia Jain', 3),
('2011uit1719', 'Portal-Designing', 'Dinesh kumar,shubham jaiswal', 'Sonia Jain', 2);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
