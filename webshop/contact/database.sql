-- phpMyAdmin SQL Dump
-- version 4.9.7
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Feb 09, 2021 at 09:27 PM
-- Server version: 5.7.32
-- PHP Version: 7.4.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";

--
-- Database: `database`
--

-- --------------------------------------------------------

--
-- Table structure for table `contactform`
--

CREATE TABLE `contactform` (
  `id` int(11) NOT NULL,
  `name` varchar(50) CHARACTER SET utf8 COLLATE utf8_swedish_ci NOT NULL,
  `mail` varchar(50) NOT NULL,
  `msg` varchar(100) CHARACTER SET utf32 COLLATE utf32_swedish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `contactform`
--
ALTER TABLE `contactform`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `contactform`
--
ALTER TABLE `contactform`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

