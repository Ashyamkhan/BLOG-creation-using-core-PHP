-- phpMyAdmin SQL Dump
-- version 4.5.0.2
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Oct 10, 2016 at 12:34 PM
-- Server version: 10.0.17-MariaDB
-- PHP Version: 5.6.14

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `online_examination`
--

-- --------------------------------------------------------

--
-- Table structure for table `image`
--

CREATE TABLE `image` (
  `id` int(11) NOT NULL,
  `name` varchar(240) DEFAULT NULL,
  `title` varchar(255) NOT NULL,
  `description` varchar(255) NOT NULL,
  `posted_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `image`
--

INSERT INTO `image` (`id`, `name`, `title`, `description`, `posted_date`) VALUES
(13, 'images/1183549016', 'Defuzed', 'I dont know about lonely.I dont know about lonely.I dont know about lonely.I dont know about lonely.I dont know about lonely.I dont know about lonely.I dont know about lonely.I dont know about lonely.I dont know about lonely.I dont know about lonely.I don', '2016-10-10 05:03:13'),
(19, 'images/597061548', 'lonely', 'loneliness loneliness loneliness loneliness loneliness loneliness loneliness loneliness loneliness loneliness loneliness loneliness loneliness loneliness loneliness loneliness loneliness loneliness loneliness loneliness loneliness loneliness loneliness lo', '2016-10-10 09:15:24'),
(20, 'images/1824789819', 'referel', 'referalreferalreferalreferalreferalreferalreferalreferalreferalreferalreferalreferalreferal', '2016-10-10 09:15:43'),
(21, 'images/308704843', 'asd', 'hijnbkjbkjbkjbjkb', '2016-10-10 09:49:11'),
(29, 'images/393495434', 'edcsklmnl`', 'knmjk bnkjn ', '2016-10-10 10:25:08'),
(30, 'images/1882026113', 'fvvfdvfd', 'vcxvbbv', '2016-10-10 10:25:17'),
(31, 'images/200928151', 'sdffdsdf', 'fsdsfdfdssdf', '2016-10-10 10:25:25');

-- --------------------------------------------------------

--
-- Table structure for table `teacher`
--

CREATE TABLE `teacher` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `mobile` varchar(255) NOT NULL,
  `semester` varchar(255) NOT NULL,
  `status` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `teacher`
--

INSERT INTO `teacher` (`id`, `name`, `email`, `mobile`, `semester`, `status`) VALUES
(1, 'evans', 'evans@gmail.com', '8798989898', 'i', 1),
(2, 'Adama', 'adams@gmail.com', '7887894565', 'v', 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `image`
--
ALTER TABLE `image`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `teacher`
--
ALTER TABLE `teacher`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `image`
--
ALTER TABLE `image`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=32;
--
-- AUTO_INCREMENT for table `teacher`
--
ALTER TABLE `teacher`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
