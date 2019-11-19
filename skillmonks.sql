-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 27, 2019 at 04:07 PM
-- Server version: 10.1.40-MariaDB
-- PHP Version: 7.1.29

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `skillmonks`
--

-- --------------------------------------------------------

--
-- Table structure for table `institute_data`
--

CREATE TABLE `institute_data` (
  `id` int(11) NOT NULL,
  `institute` varchar(50) NOT NULL,
  `course` varchar(50) NOT NULL,
  `location` varchar(50) NOT NULL,
  `batch_date` varchar(50) NOT NULL,
  `demo_date` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `number` varchar(50) NOT NULL,
  `photo` varchar(200) NOT NULL,
  `date` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `institute_data`
--

INSERT INTO `institute_data` (`id`, `institute`, `course`, `location`, `batch_date`, `demo_date`, `email`, `number`, `photo`, `date`) VALUES
(1, 'Prime Classes', 'Python', 'Madhapur', '01-07-2019', 'demo', 'info@prime.com', '987654321', 'prime classes.jpeg', '2019-06-24 09:36:17'),
(14, 'Skill Classes', 'Python', 'Gachibowli', '01-07-2019', '29-06-2019', 'test@gmail.com', '2134124', '', '2019-06-25 15:53:34'),
(15, 'Prime Classes', 'Java', 'hyd', '01-07-2019', '29-06-2019', 'test@gmail.com', '2134124', '', '2019-06-26 11:49:56'),
(16, 'Lynda', 'MEAN', 'wec', '08-08-2019', '29-06-2019', 'admin@admin.com', '123456', '', '2019-06-27 14:52:55');

-- --------------------------------------------------------

--
-- Table structure for table `institute_registration`
--

CREATE TABLE `institute_registration` (
  `id` int(11) NOT NULL,
  `institute_name` varchar(30) NOT NULL,
  `email` varchar(50) NOT NULL,
  `number` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `city` varchar(50) NOT NULL,
  `location` varchar(50) NOT NULL,
  `website` varchar(50) NOT NULL,
  `date` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `institute_registration`
--

INSERT INTO `institute_registration` (`id`, `institute_name`, `email`, `number`, `password`, `city`, `location`, `website`, `date`) VALUES
(1, 'prime', 'test@gmail.com', '2134124', 'admin', 'Hyderabad', 'Gachibowli', 'www.primeclasses.com', '2019-06-25 15:46:43'),
(2, 'prime', 'test@gmail.com', '2134124', '123', 'Hyderabad', 'Gachibowli', 'www.primeclasses.com', '2019-06-25 15:46:58');

-- --------------------------------------------------------

--
-- Table structure for table `register`
--

CREATE TABLE `register` (
  `id` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `register`
--

INSERT INTO `register` (`id`, `username`, `email`, `password`) VALUES
(1, 'admin', 'admin@admin.com', '21232f297a57a5a743894a0e4a801fc3'),
(2, 'admin', 'admin@skillmonks.com', '21232f297a57a5a743894a0e4a801fc3');

-- --------------------------------------------------------

--
-- Table structure for table `searched_students`
--

CREATE TABLE `searched_students` (
  `id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `number` varchar(50) NOT NULL,
  `qualification` varchar(50) NOT NULL,
  `date` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `searched_students`
--

INSERT INTO `searched_students` (`id`, `name`, `email`, `number`, `qualification`, `date`) VALUES
(11, 'Sai', 'gd@wewin.com', '12321e', 'B com', '2019-06-27 09:50:32'),
(12, 'wade', 'test@gmail.com', '123456', 'B tech', '2019-06-27 14:51:34'),
(13, 'kumar', 'gd@wewin.com', '2134124', 'B com', '2019-06-27 15:22:48');

-- --------------------------------------------------------

--
-- Table structure for table `student_data`
--

CREATE TABLE `student_data` (
  `id` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `number` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `passing_year` varchar(50) NOT NULL,
  `qualification` varchar(50) NOT NULL,
  `course_interested` varchar(50) NOT NULL,
  `city` varchar(50) NOT NULL,
  `date` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `student_data`
--

INSERT INTO `student_data` (`id`, `username`, `number`, `email`, `passing_year`, `qualification`, `course_interested`, `city`, `date`) VALUES
(2, 'test', '2134124', 'admin@admin.com', '2018', 'B tech', 'python', 'Hyderabad', '2019-06-25 15:21:43'),
(3, 'Gachibowli Divakar', '12321e', 'admin@admin.com', '2018', 'B com', 'python', 'Guntur', '2019-06-27 13:35:26');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `institute_data`
--
ALTER TABLE `institute_data`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `institute_registration`
--
ALTER TABLE `institute_registration`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `register`
--
ALTER TABLE `register`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `searched_students`
--
ALTER TABLE `searched_students`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `student_data`
--
ALTER TABLE `student_data`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `institute_data`
--
ALTER TABLE `institute_data`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `institute_registration`
--
ALTER TABLE `institute_registration`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `register`
--
ALTER TABLE `register`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `searched_students`
--
ALTER TABLE `searched_students`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `student_data`
--
ALTER TABLE `student_data`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
