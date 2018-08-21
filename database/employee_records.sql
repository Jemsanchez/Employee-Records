-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Aug 21, 2018 at 09:02 AM
-- Server version: 10.1.19-MariaDB
-- PHP Version: 5.6.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `employeerecords`
--

-- --------------------------------------------------------

--
-- Table structure for table `employee_records`
--

CREATE TABLE `employee_records` (
  `id` double NOT NULL,
  `full_name` varchar(100) NOT NULL,
  `dateof_birth` varchar(100) NOT NULL,
  `address` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `phone_number` varchar(100) NOT NULL,
  `employment_status` varchar(100) NOT NULL,
  `date_hired` varchar(100) NOT NULL,
  `tin_no` varchar(100) NOT NULL,
  `sss` varchar(100) NOT NULL,
  `philhealth` varchar(100) NOT NULL,
  `pagibig` varchar(100) NOT NULL,
  `weekly_salary` varchar(100) NOT NULL,
  `team` varchar(100) NOT NULL,
  `leave_used` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `employee_records`
--

INSERT INTO `employee_records` (`id`, `full_name`, `dateof_birth`, `address`, `email`, `phone_number`, `employment_status`, `date_hired`, `tin_no`, `sss`, `philhealth`, `pagibig`, `weekly_salary`, `team`, `leave_used`) VALUES
(1, '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1.jpg', '', '', ''),
(2, '2', '2', '2', '2', '2', '2', '2', '2', '2', '2', '2.jpg', '', '', ''),
(3, '3', '3', '3', '3', '3', '3', '3', '3', '3', '3', '3.JPG', '', '', ''),
(4, '4', '4', '4', '4', '3', '4', '4', '4', '4', '4', '4.JPG', '', '', ''),
(6, '5', '5', '5', '5', '5', '5', '5', '5', '5', '5', '5.JPG', '', '', ''),
(7, '6', '6', '6', '6', '6', '6', '6', '6', '6', '6', 'IMG_0069.JPG', '', '', ''),
(8, '7', '7', '7', '7', '7', '7', '7', '7', '7', '7', 'IMG_0062.JPG', '', '', ''),
(9, '8', '8', '8', '8', '8', '8', '8', '8', '8', '8', '5.JPG', '', '', ''),
(18, '9', '9', '9', '9', '9', '9', '9', '9', '9', '9', '5.JPG', '', '', ''),
(19, '10', '10', '10', '10', '10', '10', '10', '10', '10', '10', '5.JPG', '', '', ''),
(21, 'j', 'j', 'j', 'j@gmail.com', '`121221`ewddgg', '1997-02-22', '2018-05-23', '208ejeje', '213', 'erw', 'IMG_E1290.JPG', '', '', ''),
(22, 'ads', 'hkjh', 'hkhkj', 'kjh@gmail.com', '098i', '2018-06-14', '2018-06-20', '3232', '3232', 'adf', 'achievement-adult-african-1059116.jpg', '', '', ''),
(23, 'Jem', 'Sanchez', 'Lipa Batangas', 'jemsanchez224@gmail.com', '091223234234', '2018-08-20', '2018-08-29', '234234234', '4000', 'Metacom', 'jem1x1.jpg', '', '', '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `employee_records`
--
ALTER TABLE `employee_records`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `employee_records`
--
ALTER TABLE `employee_records`
  MODIFY `id` double NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
