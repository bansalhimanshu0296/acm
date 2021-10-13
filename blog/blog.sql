-- phpMyAdmin SQL Dump
-- version 4.5.0.2
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Nov 05, 2015 at 11:32 AM
-- Server version: 10.0.17-MariaDB
-- PHP Version: 5.6.14

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `blog`
--

-- --------------------------------------------------------

--
-- Table structure for table `blog1`
--

CREATE TABLE `blog1` (
  `id` int(11) NOT NULL,
  `name` varchar(40) NOT NULL,
  `comment` varchar(1000) NOT NULL,
  `date1` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `blog2`
--

CREATE TABLE `blog2` (
  `id` int(11) NOT NULL,
  `name` varchar(40) NOT NULL,
  `comment` varchar(1000) NOT NULL,
  `date1` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `blog3`
--

CREATE TABLE `blog3` (
  `id` int(11) NOT NULL,
  `name` varchar(40) NOT NULL,
  `comment` varchar(1000) NOT NULL,
  `date1` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `blog4`
--

CREATE TABLE `blog4` (
  `id` int(11) NOT NULL,
  `name` varchar(40) NOT NULL,
  `comment` varchar(1000) NOT NULL,
  `date1` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `blog5`
--

CREATE TABLE `blog5` (
  `id` int(11) NOT NULL,
  `name` varchar(40) NOT NULL,
  `comment` varchar(1000) NOT NULL,
  `date1` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `blog1`
--
ALTER TABLE `blog1`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `blog2`
--
ALTER TABLE `blog2`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `blog3`
--
ALTER TABLE `blog3`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `blog4`
--
ALTER TABLE `blog4`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `blog5`
--
ALTER TABLE `blog5`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `blog1`
--
ALTER TABLE `blog1`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=830;
--
-- AUTO_INCREMENT for table `blog2`
--
ALTER TABLE `blog2`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `blog3`
--
ALTER TABLE `blog3`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `blog4`
--
ALTER TABLE `blog4`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `blog5`
--
ALTER TABLE `blog5`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
