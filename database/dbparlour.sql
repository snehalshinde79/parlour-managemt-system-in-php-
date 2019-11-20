-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 20, 2019 at 09:57 AM
-- Server version: 10.1.21-MariaDB
-- PHP Version: 5.6.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `dbparlour`
--

-- --------------------------------------------------------

--
-- Table structure for table `appointments`
--

CREATE TABLE `appointments` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `phone` varchar(255) NOT NULL,
  `notes` varchar(255) NOT NULL,
  `service_type` varchar(255) NOT NULL,
  `service_expert` varchar(255) NOT NULL,
  `date` date NOT NULL,
  `time` time NOT NULL,
  `price` int(11) NOT NULL,
  `status` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `appointments`
--

INSERT INTO `appointments` (`id`, `name`, `email`, `phone`, `notes`, `service_type`, `service_expert`, `date`, `time`, `price`, `status`) VALUES
(1000, 'santosh sah', 'info.techs.csoys@gmail.com', '+918861920664', 'Hey', 'Hair Styles', 'Mila Hartley', '2019-11-20', '09:00:00', 525, 'Approved'),
(1001, 'santosh sah', 'info.techs.csoys@gmail.com', '+91861920664', 'okay', 'Hair Styles', 'Mila Hartley', '2019-11-20', '02:00:00', 525, 'Rejected'),
(1002, 'Rahul', 'rahul@gmail.com', '+918861920664', 'Hey', 'Massage', 'Donna Carr', '2019-11-20', '09:00:00', 525, 'Approved'),
(1003, 'santosh sah', 'info.techs.csoys@gmail.com', '861920664', 'dsfghjk', 'Hair Styles', 'Mila Hartley', '2019-11-21', '09:00:00', 525, 'Approved'),
(1004, 'santosh sah', 'info.techs.csoys@gmail.com', '861920664', 'hjkl', 'Hair Styles', 'Mila Hartley', '2019-11-21', '02:00:00', 525, 'Rejected');

-- --------------------------------------------------------

--
-- Table structure for table `contact`
--

CREATE TABLE `contact` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `message` varchar(5000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `contact`
--

INSERT INTO `contact` (`id`, `name`, `email`, `message`) VALUES
(0, 'santosh sah', 'info.techs.csoys@gmail.com', 'hey '),
(0, 'Santosh Sah', 'santoshsahsays@gmail.com', 'hii'),
(0, 'santosh sah', 'info.techs.csoys@gmail.com', 'atryuiop[]poiuyteq'),
(0, 'Snehal', 'snehal@gmail.com', 'HI how are u');

-- --------------------------------------------------------

--
-- Table structure for table `expert`
--

CREATE TABLE `expert` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `job` varchar(255) NOT NULL,
  `image` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `expert`
--

INSERT INTO `expert` (`id`, `name`, `job`, `image`) VALUES
(1, 'Mila Hartley', 'Hair Styles', '1.jpg'),
(2, 'Teigan Duran', 'Bridal Make Up', '2.jpg'),
(3, 'Tanya Ramsay', 'Coloring', '3.jpg'),
(4, 'Donna Carr', 'Massage', '4.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `portfolio`
--

CREATE TABLE `portfolio` (
  `id` int(11) NOT NULL,
  `image` varchar(255) NOT NULL,
  `type` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `portfolio`
--

INSERT INTO `portfolio` (`id`, `image`, `type`) VALUES
(2, '8.jpg', 'Hairstyles'),
(3, '26.jpg', 'Hairstyles'),
(4, '11.jpg', 'Hairstyles'),
(5, '25.jpg', 'Hairstyles'),
(6, 'b1.jpg', 'BridalMakeup'),
(7, 'b3.jpg', 'BridalMakeup'),
(8, 'b6.jpg', 'BridalMakeup'),
(9, '18.jpg', 'Coloring'),
(10, '8.jpg', 'Coloring'),
(11, '5.jpg', 'Coloring'),
(12, '35.jpg', 'Massage'),
(13, 'h3.jpg', 'Coloring');

-- --------------------------------------------------------

--
-- Table structure for table `services`
--

CREATE TABLE `services` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `description` varchar(5000) NOT NULL,
  `image` varchar(255) NOT NULL,
  `price` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `services`
--

INSERT INTO `services` (`id`, `name`, `description`, `image`, `price`) VALUES
(2, 'Hair Styles', 'We are one of the popular hair stylist in the mangalore', 's4.png', 500),
(3, 'Bridal Make Up', 'We have make up the gorjeous bride .', 's1.png', 2000),
(6, 'Massage', 'We provide quality service of massage to our cusotmers', 's1.png', 500),
(8, 'Coloring', 'We are known for the best colouring art in the face ', 's1.png', 1000);

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `image` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `username`, `email`, `password`, `image`) VALUES
(1, 'Snehal Sindhe', 'snehal@gmail.com', 'admin', 'snehal.jpg'),
(2, 'Sinchana', 'sinchana@gmail.com', 'admin', 'sinchana.jpg');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `appointments`
--
ALTER TABLE `appointments`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `expert`
--
ALTER TABLE `expert`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `portfolio`
--
ALTER TABLE `portfolio`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `services`
--
ALTER TABLE `services`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `appointments`
--
ALTER TABLE `appointments`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1005;
--
-- AUTO_INCREMENT for table `expert`
--
ALTER TABLE `expert`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `portfolio`
--
ALTER TABLE `portfolio`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;
--
-- AUTO_INCREMENT for table `services`
--
ALTER TABLE `services`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
