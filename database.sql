-- phpMyAdmin SQL Dump
-- version 4.9.3
-- https://www.phpmyadmin.net/
--
-- Host: localhost:8889
-- Generation Time: Nov 16, 2020 at 03:36 AM
-- Server version: 5.7.26
-- PHP Version: 7.4.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";

--
-- Database: `restu-adi-db`
--

-- --------------------------------------------------------

--
-- Table structure for table `table_booking`
--

CREATE TABLE `table_booking` (
  `id` int(11) NOT NULL,
  `nama-depan` varchar(100) NOT NULL,
  `nama-belakang` varchar(100) NOT NULL,
  `email` varchar(50) NOT NULL,
  `wa-no` varchar(50) NOT NULL,
  `kota` varchar(100) NOT NULL,
  `kewarganegaraan` varchar(50) NOT NULL,
  `no-ktp` varchar(50) NOT NULL,
  `service-select` varchar(50) NOT NULL,
  `trip-method` varchar(50) NOT NULL,
  `depature-date` date NOT NULL,
  `return-date` date NOT NULL,
  `total-adult` varchar(50) NOT NULL,
  `total-childern` varchar(50) NOT NULL,
  `depature-from` varchar(50) NOT NULL,
  `pickup-information` varchar(50) NOT NULL,
  `pickup-address` varchar(100) NOT NULL,
  `inquery` text NOT NULL,
  `status` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `table_booking`
--

INSERT INTO `table_booking` (`id`, `nama-depan`, `nama-belakang`, `email`, `wa-no`, `kota`, `kewarganegaraan`, `no-ktp`, `service-select`, `trip-method`, `depature-date`, `return-date`, `total-adult`, `total-childern`, `depature-from`, `pickup-information`, `pickup-address`, `inquery`, `status`) VALUES
(1, 'Eka', 'Laksmana', 'gedeekaputra31@gmail.com', '085939480939', 'Denpasar', 'Indonesia', '098482848192843002', 'Package Tour', 'Package', '2020-11-16', '2020-11-17', '3', '2', 'jam 08 am lah intinya', 'Hotel', 'jalan kenangan indah', 'saya request harganya dimurahin ya,, tolong kontak lewat wa saja,, ditunggu.', 'request-booking');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `table_booking`
--
ALTER TABLE `table_booking`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `table_booking`
--
ALTER TABLE `table_booking`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
