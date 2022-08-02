-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 02, 2020 at 05:47 AM
-- Server version: 10.4.10-MariaDB
-- PHP Version: 7.3.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `cookie`
--

-- --------------------------------------------------------

--
-- Table structure for table `user`
--


-- CREATE DATABASE test;



USE test;

CREATE TABLE `user` (
  `userid` int(11) NOT NULL,
  `username` varchar(30) NOT NULL,
  `password` varchar(30) NOT NULL,
  `fullname` varchar(60) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`userid`, `username`, `password`, `fullname`) VALUES
(1, 'shoaib', 'khan', 'shoaib khan');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`userid`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `userid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;


CREATE TABLE customers (
  cu_id int(11) NOT NULL AUTO_INCREMENT PRIMARY KEY ,
  name varchar(30) NOT NULL,
  age int NOT NULL, 
  CNIC varchar(30) NOT NULL,
  phone varchar(20) NOT NULL,
  address varchar(100) NOT NULL,
  Gender varchar(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
INSERT INTO customers VALUES
(1, 'shoaib khan',20, '1730178828391','03219116660' , 'dalazak road saeed abad no 2 street 3 house 35 peshawar','M'),
(2, 'Mohsin Ihsan',20, '173017328381','03339886660' , 'hayatabad phase 2 house 23 peshawar','M'),
(3, 'Ahmad khan',20, '1730148628351','03008787660' , 'ring road ittehad Colony street 3 house 5 peshawar','M'),
(4, 'Nadeem khan',20, '1730117228399','03139996660' , 'dalazak road momin town street 1 house 35 peshawar','M');




CREATE TABLE hotel (
  h_id int(11) NOT NULL AUTO_INCREMENT PRIMARY KEY ,
  name varchar(30) NOT NULL,
  city varchar(30) NOT NULL,
  phone varchar(20) NOT NULL,
  star int NOT NULL,
  address varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

INSERT INTO hotel VALUES
(1, 'Swiss Wood Cottages', 'Naran','03337430208',4, 'Naran, Mansehra, Khyber Pakhtunkhwa'),
(2, 'Shangrila Resort Hotel', 'Murree','03136430222',3, 'Murree, Rawalpindi, Khyber Pakhtunkhwa'),
(3, 'Hotel Walnut Heights', 'Kalam','03034241118',4, 'Kalam, Swat, Khyber Pakhtunkhwa'),
(4, 'Swat View Hotel', 'Swat','03438844472',3, 'Kalam road , Swat, Khyber Pakhtunkhwa');

CREATE TABLE vehicle (
  v_id int(11) NOT NULL AUTO_INCREMENT PRIMARY KEY ,
  name varchar(30) NOT NULL,
  model_name varchar(30) NOT NULL,
  vin_number varchar(30) NOT NULL,
  type varchar(30) NOT NULL,
  manufacturer varchar(30) NOT NULL,
  status varchar(30) NOT NULL,
  color varchar(30) NOT NULL,
  nameplate varchar(20) NOT NULL,
  capacity int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

INSERT INTO vehicle VALUES
(1, 'Vitz', 'RS 5-door', 'JTWD57C491198247','hatchback','toyota','availible','black','DSR174',4),
(2, 'Vitz', 'RS 5-door', 'JTWD57C491198247','hatchback','toyota','availible','black','DSR174',4),
(3, 'Vitz', 'RS 5-door', 'JTWD57C491198247','hatchback','toyota','availible','black','DSR174',4),
(4, 'Vitz', 'RS 5-door', 'JTWD57C491198247','hatchback','toyota','availible','black','DSR174',4);


CREATE TABLE drivers (
  d_id int(11) NOT NULL AUTO_INCREMENT PRIMARY KEY ,
  name varchar(30) NOT NULL,
  age int NOT NULL, 
  CNIC varchar(30) NOT NULL,
  phone varchar(20) NOT NULL,
  address varchar(100) NOT NULL,
  Gender varchar(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

INSERT INTO drivers VALUES
(1, 'Ali khan',20, '1730178828391','03219116660' , 'dalazak road saeed abad no 2 street 3 house 35 peshawar','M'),
(2, 'Jameel Khan',20, '173017328381','03339886660' , 'hayatabad phase 2 house 23 peshawar','M'),
(3, 'Asim khan',20, '1730148628351','03008787660' , 'ring road ittehad Colony street 3 house 5 peshawar','M'),
(4, 'Bilal khan',20, '1730117228399','03139996660' , 'dalazak road momin town street 1 house 35 peshawar','M');

CREATE TABLE booked_tour (
  id int(11) NOT NULL AUTO_INCREMENT PRIMARY KEY ,
  hotel_id int(11) NOT NULL,
  customer_id int(11) NOT NULL,
  vehicle_id int(11) NOT NULL,
  driver_id int(11) NOT NULL,
  status varchar(30) NOT NULL,
  s_date INT NOT NULL, 
  e_date varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

CREATE TABLE tour (
id int(11) NOT NULL AUTO_INCREMENT PRIMARY KEY ,
hotel_id int(11) NOT NULL);
price int(11) NOT NULL);
picture varchar(100) NOT NULL);

INSERT INTO tour VALUES
(1,1,5000,"1.jpg"),
(2,2,8000,"2.png"),
(3,3,4000,"3.jpg"),
(4,4,6000,"4.jpg");