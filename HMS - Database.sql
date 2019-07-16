-- phpMyAdmin SQL Dump
-- version 4.1.12
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Jul 16, 2019 at 06:35 PM
-- Server version: 5.6.16
-- PHP Version: 5.5.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `hospital`
--

-- --------------------------------------------------------

--
-- Table structure for table `accountant`
--

CREATE TABLE IF NOT EXISTS `accountant` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(999) NOT NULL,
  `email` varchar(999) NOT NULL,
  `password` varchar(999) NOT NULL,
  `address` varchar(999) NOT NULL,
  `phone` varchar(999) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `accountant`
--

INSERT INTO `accountant` (`id`, `name`, `email`, `password`, `address`, `phone`) VALUES
(1, 'Joey Tribbiani', 'joey10@gmail.com', 'joey10', '201, Bejpara, Jessore, Bangladesh', '01678898679');

-- --------------------------------------------------------

--
-- Table structure for table `department`
--

CREATE TABLE IF NOT EXISTS `department` (
  `department_id` int(11) NOT NULL AUTO_INCREMENT,
  `department_name` varchar(999) NOT NULL,
  `description` varchar(999) NOT NULL,
  PRIMARY KEY (`department_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=6 ;

--
-- Dumping data for table `department`
--

INSERT INTO `department` (`department_id`, `department_name`, `description`) VALUES
(1, 'Cardiology', 'We have the best Cardiology department in the Bangladesh.'),
(2, 'Urology', 'We have the best Urology department in Bangladesh.'),
(3, 'Pathology', 'We have the best Pathology department in Bangladesh.'),
(4, 'General', 'We have the best General department in Bangladesh.'),
(5, 'Orthopedics', 'We have the best Orthopeics department in Bangladesh.');

-- --------------------------------------------------------

--
-- Table structure for table `doctor`
--

CREATE TABLE IF NOT EXISTS `doctor` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(999) NOT NULL,
  `email` varchar(999) NOT NULL,
  `password` varchar(999) NOT NULL,
  `address` varchar(999) NOT NULL,
  `phone` varchar(999) NOT NULL,
  `profile` varchar(999) NOT NULL,
  `department` varchar(999) NOT NULL,
  `fee` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=6 ;

--
-- Dumping data for table `doctor`
--

INSERT INTO `doctor` (`id`, `name`, `email`, `password`, `address`, `phone`, `profile`, `department`, `fee`) VALUES
(1, 'Dr. David Moore', 'david10@gmail.com', 'david10', '100, Bejpara, Jessore, Bangladesh', '01789675439', 'MBBS', 'General', 500),
(2, 'Dr. Preet Singh', 'preet10@gmail.com', 'preet10', '136, Bejpara, Jessore, Bangladesh', '01978456789', 'MBBS', 'General', 400),
(3, 'Dr. Sanjay Sarkar', 'sanjay10@gmail.com', 'sanjay10', '167, Bejpara, Jessore, Bangladesh', '01521678579', 'MBBS, MD', 'Cardiology', 800),
(4, 'Dr. Sakib Islam', 'sakib10@gmail.com', 'sakib10', '161, Bejpara, Jessore, Bangladesh', '01678562345', 'MBBS, MD', 'Cardiology', 800),
(5, 'Dr. Anusuya Majumder', 'anusuya11@gmail.com', 'anusuya11', '198, Bejpara, Jessore, Bangladesh', '01789555555', 'MBBS, FCPS, MD, FRCP,', 'General', 1000);

-- --------------------------------------------------------

--
-- Table structure for table `laboratorist`
--

CREATE TABLE IF NOT EXISTS `laboratorist` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(999) NOT NULL,
  `email` varchar(999) NOT NULL,
  `password` varchar(999) NOT NULL,
  `address` varchar(999) NOT NULL,
  `phone` varchar(999) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `laboratorist`
--

INSERT INTO `laboratorist` (`id`, `name`, `email`, `password`, `address`, `phone`) VALUES
(1, 'Chris Pratt', 'chris10@gmail.com', 'chris10', '140, Bejpara, Jessore, Bangladesh', '01767453489');

-- --------------------------------------------------------

--
-- Table structure for table `labtest`
--

CREATE TABLE IF NOT EXISTS `labtest` (
  `pat_id` int(11) NOT NULL,
  `test_name` varchar(999) NOT NULL,
  `price` int(11) NOT NULL,
  `status` varchar(999) NOT NULL,
  `date_time` date NOT NULL,
  `ref_doc` int(11) NOT NULL,
  `ref_name` varchar(999) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

CREATE TABLE IF NOT EXISTS `login` (
  `role` varchar(999) NOT NULL,
  `userid` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `login`
--

INSERT INTO `login` (`role`, `userid`, `password`) VALUES
('admin', 'arnab10@gmail.com', 'arnab10'),
('doctor', 'david10@gmail.com', 'david10'),
('reception', 'tom10@gmail.com', 'tom10'),
('laboratorist', 'chris10@gmail.com', 'chris10'),
('accountant', 'joey10@gmail.com', 'joey10'),
('doctor', 'preet10@gmail.com', 'preet10'),
('doctor', 'sanjay10@gmail.com', 'sanjay10'),
('doctor', 'sakib10@gmail.com', 'sakib10'),
('doctor', 'anusuya11@gmail.com', 'anusuya11');

-- --------------------------------------------------------

--
-- Table structure for table `noticeboard`
--

CREATE TABLE IF NOT EXISTS `noticeboard` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `noticeboard` varchar(999) NOT NULL,
  `date` varchar(999) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `noticeboard`
--

INSERT INTO `noticeboard` (`id`, `noticeboard`, `date`) VALUES
(1, 'Hello,\n\nMy name is Arnab Majumder. I am the admin of the hospital.\n\nGreetings,\nArnab Majumder\nAdmin', '2017/11/23'),
(2, 'Today 10% will be deducted from every customer.', '2017/11/26');

-- --------------------------------------------------------

--
-- Table structure for table `patient_information`
--

CREATE TABLE IF NOT EXISTS `patient_information` (
  `id` int(11) NOT NULL,
  `first_name` varchar(999) NOT NULL,
  `middle_name` varchar(999) NOT NULL,
  `last_name` varchar(999) NOT NULL,
  `full_name` varchar(999) NOT NULL,
  `gender` varchar(999) NOT NULL,
  `contact_number` varchar(999) NOT NULL,
  `date_of_birth` varchar(999) NOT NULL,
  `age` int(11) NOT NULL,
  `email` varchar(999) NOT NULL,
  `nationality` varchar(999) NOT NULL,
  `address` varchar(999) NOT NULL,
  `religion` varchar(999) NOT NULL,
  `blood_group` varchar(999) NOT NULL,
  `marital_status` varchar(999) NOT NULL,
  `occupation` varchar(999) NOT NULL,
  `ecp` varchar(999) NOT NULL,
  `relation` varchar(999) NOT NULL,
  `contact_number_ecp` varchar(999) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `patient_queue`
--

CREATE TABLE IF NOT EXISTS `patient_queue` (
  `doc_id` int(11) NOT NULL,
  `id` int(11) NOT NULL,
  `date_time` datetime NOT NULL,
  `status` varchar(999) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `prescription`
--

CREATE TABLE IF NOT EXISTS `prescription` (
  `doctor_id` int(11) NOT NULL,
  `pat_id` int(11) NOT NULL,
  `weight` varchar(999) NOT NULL,
  `height` varchar(999) NOT NULL,
  `blood_pressure` varchar(999) NOT NULL,
  `pulse_rate` varchar(999) NOT NULL,
  `clinic_note` varchar(999) NOT NULL,
  `doctor_note` varchar(999) NOT NULL,
  `test_name` varchar(999) NOT NULL,
  `remark` varchar(999) NOT NULL,
  `date_time` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `prescription_medicine`
--

CREATE TABLE IF NOT EXISTS `prescription_medicine` (
  `doc_id` int(11) NOT NULL,
  `pat_id` int(11) NOT NULL,
  `med_name` varchar(999) NOT NULL,
  `med_time` varchar(999) NOT NULL,
  `med_when_to_eat` varchar(999) NOT NULL,
  `med_days` varchar(999) NOT NULL,
  `date_time` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `reception`
--

CREATE TABLE IF NOT EXISTS `reception` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(999) NOT NULL,
  `email` varchar(999) NOT NULL,
  `password` varchar(999) NOT NULL,
  `address` varchar(999) NOT NULL,
  `phone` varchar(999) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `reception`
--

INSERT INTO `reception` (`id`, `name`, `email`, `password`, `address`, `phone`) VALUES
(1, 'Tom Hanks', 'tom10@gmail.com', 'tom10', '102, Bejpara, Jessore, Bangladesh', '01678564523');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
