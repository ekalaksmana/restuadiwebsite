-- phpMyAdmin SQL Dump
-- version 4.9.3
-- https://www.phpmyadmin.net/
--
-- Host: localhost:8889
-- Generation Time: Nov 16, 2020 at 04:58 PM
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
  `id` int(20) NOT NULL,
  `nama_depan` varchar(100) NOT NULL,
  `nama_belakang` varchar(100) NOT NULL,
  `email` varchar(50) NOT NULL,
  `wa_no` varchar(50) NOT NULL,
  `kota` varchar(100) NOT NULL,
  `kewarganegaraan` varchar(50) NOT NULL,
  `service_select` varchar(50) NOT NULL,
  `trip_method` varchar(50) NOT NULL,
  `depature_date` varchar(50) NOT NULL,
  `return_date` varchar(50) NOT NULL,
  `total_adult` varchar(50) NOT NULL,
  `total_childern` varchar(50) NOT NULL,
  `depature_from` varchar(50) NOT NULL,
  `pickup_information` varchar(50) NOT NULL,
  `pickup_address` varchar(100) NOT NULL,
  `inquery` text NOT NULL,
  `status_book` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `table_booking`
--

INSERT INTO `table_booking` (`id`, `nama_depan`, `nama_belakang`, `email`, `wa_no`, `kota`, `kewarganegaraan`, `service_select`, `trip_method`, `depature_date`, `return_date`, `total_adult`, `total_childern`, `depature_from`, `pickup_information`, `pickup_address`, `inquery`, `status_book`) VALUES
(3, 'Eka', 'Laksmana', 'eka@gmail.com', '0929491912039', 'denpasar', 'Indonesia', 'Charter boat', 'one way', '2020-11-17', '2020-11-17', '20', '30', 'Frome east to java time - 20:00am', 'Hotel', 'jalan kenangan mantan', 'yang murah ya', 'Requested'),
(4, 'Intan', 'goblok', 'intan@gmail.com', '0929491912039', 'denpasar', 'Indonesia', 'Charter boat', 'one way', '2020-11-17', '2020-11-17', '20', '30', 'Frome east to java time - 20:00am', 'Hotel', 'jalan kenangan mantan', 'yang murah ya', 'Canceled'),
(5, 'dimas', 'bisma', 'dimas@gmail.com', '02938884940303', 'denpasar', 'Indonesia', 'Charter boat', 'one way', '2020-11-17', '2020-11-17', '20', '30', 'Frome east to java time - 20:00am', 'Hotel', 'jalan kenangan mantan', 'yang murah ya', 'Reserved'),
(6, 'Lomva', 'Janda', 'kokok@gmail.com', '99827462728729', 'denpasar', 'Indonesia', 'Charter boat', 'one way', '2020-11-17', '2020-11-17', '20', '30', 'Frome east to java time - 10:00am', 'Hotel', 'jalan kenangan mantan', 'yang murah ya', 'Canceled'),
(7, 'barba', 'capta', 'capta@gmail.com', '0929491912039', 'denpasar', 'Indonesia', 'Charter boat', 'one way', '2020-11-17', '2020-11-17', '20', '30', 'Frome east to java time - 20:00am', 'Hotel', 'jalan kenangan mantan', 'yang murah ya', 'Reserved'),
(8, '1', '1', '1', '1', '1', '1', '1', '1', '2020-11-16', '2020-11-17', '1', '1', '1', '1', '1', '1', 'Requested'),
(9, 'asd', 'asd', 'asd', 'asd', 'asd', 'asd', 'asd', 'asd', 'asd', 'asd', 'asd', 'asd', 'asd', 'asd', 'asd', 'asd', 'asd'),
(10, 'asd', 'asd', 'asd', '123123', 'asd', 'asda', 'Daily Transfer', 'One Way', '2020-11-06', '2020-11-18', '123', '1233', 'Lembongan island to Sanur(Bali) - Time: 11.30 Am', 'Dont Picked Up', 'asdasd', 'asdasd', 'Requested'),
(11, 'asd', 'asd', 'asd', '123123', 'asd', 'asda', 'Daily Transfer', 'One Way', '2020-11-06', '2020-11-18', '123', '1233', 'Lembongan island to Sanur(Bali) - Time: 11.30 Am', 'Dont Picked Up', 'asdasd', 'asdasd', 'Requested'),
(12, 'asd', 'asd', 'asd', '123123', 'asd', 'asda', 'Daily Transfer', 'One Way', '2020-11-06', '2020-11-18', '123', '1233', 'Lembongan island to Sanur(Bali) - Time: 11.30 Am', 'Dont Picked Up', 'asdasd', 'asdasd', 'Requested');

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
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
