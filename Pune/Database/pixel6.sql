-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 27, 2021 at 07:07 PM
-- Server version: 10.4.18-MariaDB
-- PHP Version: 7.3.27

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `pixel6`
--

-- --------------------------------------------------------

--
-- Table structure for table `userprofile`
--

CREATE TABLE `userprofile` (
  `UserId` int(11) NOT NULL,
  `FirstName` varchar(40) DEFAULT NULL,
  `LastName` varchar(40) DEFAULT NULL,
  `Gender` varchar(40) DEFAULT NULL,
  `Email` varchar(40) DEFAULT NULL,
  `PhoneNumber` varchar(40) DEFAULT NULL,
  `State` varchar(40) DEFAULT NULL,
  `City` varchar(40) DEFAULT NULL,
  `Photo` varchar(40) DEFAULT NULL,
  `Graduation` varchar(40) DEFAULT NULL,
  `GraduationGrade` varchar(40) DEFAULT NULL,
  `GraduationYear` varchar(40) DEFAULT NULL,
  `Specialisation` varchar(40) DEFAULT NULL,
  `University` varchar(40) DEFAULT NULL,
  `Primaryy` varchar(40) DEFAULT NULL,
  `Secondary` varchar(40) DEFAULT NULL,
  `Certifications` varchar(40) DEFAULT NULL,
  `Speech` varchar(200) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `userprofile`
--

INSERT INTO `userprofile` (`UserId`, `FirstName`, `LastName`, `Gender`, `Email`, `PhoneNumber`, `State`, `City`, `Photo`, `Graduation`, `GraduationGrade`, `GraduationYear`, `Specialisation`, `University`, `Primaryy`, `Secondary`, `Certifications`, `Speech`) VALUES
(6, 'Kavita', 'Ingle', 'Female', 'kavita121@gmail.com', '8369896213', 'Maharashtra', 'Mumbai', 'Uploaded/Kavita.jpg', 'Bachelor of Commerce', '63', '2021', 'ITI', 's.n.d.T', 'Electronics', 'RVTI', 'Typing', 'My name is kavita Ingle . I am housewife'),
(8, 'Aditya', 'Ingle', 'Male', 'adityaingle466@gmail.com', '9920929962', 'Maharashtra', 'Mumbai', 'Uploaded/IMG_20210517_125422.jpg', 'Bachelor of Engg./Tech', '8.02', '2020', 'Computers', 'Vidyalankar Institute Of Technology', 'PHP, MYSQL, AJAX ', 'HTML,HTML 5, CSS,BOOTSTRAP 4,JAVASCRIPT,', 'HTML 5 UDEMY', 'Hey guys this is Aditya Suryakant Ingle.I Am currently getting Trained as PHP Developer and have worked on both front end and back end both');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `userprofile`
--
ALTER TABLE `userprofile`
  ADD PRIMARY KEY (`UserId`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `userprofile`
--
ALTER TABLE `userprofile`
  MODIFY `UserId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
