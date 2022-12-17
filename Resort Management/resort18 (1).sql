-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 17, 2022 at 01:55 PM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `resort18`
--

-- --------------------------------------------------------

--
-- Table structure for table `activity`
--

CREATE TABLE `activity` (
  `aid` int(2) NOT NULL,
  `aname` varchar(10) DEFAULT NULL,
  `description` text DEFAULT NULL,
  `status` tinyint(1) DEFAULT NULL,
  `imagepath` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `activity`
--

INSERT INTO `activity` (`aid`, `aname`, `description`, `status`, `imagepath`) VALUES
(1, 'Jet Skiing', 'Lorem ipsum, dolor sit amet consectetur adipisicing elit. Voluptates illo aperiam suscipit recusandae, harum doloremque quae eum omnis veniam autem?Lorem ipsum dolor sit amet consectetur adipisicing elit. Nostrum quis totam quisquam quod quae, libero reprehenderit tempora, iure, eaque facilis ipsa distinctio veniam explicabo! Optio modi mollitia labore sint earum Lorem ipsum dolor sit amet consectetur adipisicing elit. Reprehenderit modi illum sunt, qui tenetur, est eligendi corporis deleniti nihil cupiditate aut rem quae corrupti accusamus ipsa nesciunt officia asperiores Lorem ipsum dolor sit amet consectetur, adipisicing elit. Velit eveniet reiciendis cupiditate corrupti cumque odio maiores! Iure ab animi esse consectetur ipsa optio inventore deserunt temporibus dolore? Voluptas, mollitia asperiores!', 1, 'image/activity1.jpg'),
(2, 'Snorkeling', 'Lorem, ipsum dolor sit amet consectetur adipisicing elit. Repellendus corrupti repellat quis, sed quidem tempore doloremque hic alias, voluptatem nihil, ipsam iusto incidunt nulla? Placeat assumenda eius saepe vitae voluptate?Lorem ipsum dolor sit amet consectetur adipisicing elit. Sint iusto quo magnam iste quidem! Sed repellat, consequatur adipisci eligendi incidunt omnis magnam reprehenderit nesciunt maxime molestiae hic reiciendis quibusdam quod! Lorem ipsum dolor sit amet consectetur adipisicing elit. Reprehenderit modi illum sunt, qui tenetur, est eligendi corporis deleniti nihil cupiditate aut rem quae corrupti accusamus ipsa nesciunt officia asperiores Lorem ipsum dolor sit amet consectetur, adipisicing elit. Velit eveniet reiciendis cupiditate corrupti cumque odio maiores! Iure ab animi esse consectetur ipsa optio inventore deserunt temporibus dolore? Voluptas, mollitia asperiores!', 1, 'image/activity2.jpg'),
(3, 'Diving', 'Lorem, ipsum dolor sit amet consectetur adipisicing elit. Repellendus corrupti repellat quis, sed quidem tempore doloremque hic alias, voluptatem nihil, ipsam iusto incidunt nulla? Placeat assumenda eius saepe vitae voluptate?Lorem ipsum dolor sit amet consectetur adipisicing elit. Sint iusto quo magnam iste quidem! Sed repellat, consequatur adipisci eligendi incidunt omnis magnam reprehenderit nesciunt maxime molestiae hic reiciendis quibusdam quod! Lorem ipsum dolor sit amet consectetur adipisicing elit. Reprehenderit modi illum sunt, qui tenetur, est eligendi corporis deleniti nihil cupiditate aut rem quae corrupti accusamus ipsa nesciunt officia asperiores Lorem ipsum dolor sit amet consectetur, adipisicing elit. Velit eveniet reiciendis cupiditate corrupti cumque odio maiores! Iure ab animi esse consectetur ipsa optio inventore deserunt temporibus dolore? Voluptas, mollitia asperiores!', 1, 'image/activity3.jfif'),
(4, 'Island Hop', 'Lorem, ipsum dolor sit amet consectetur adipisicing elit. Repellendus corrupti repellat quis, sed quidem tempore doloremque hic alias, voluptatem nihil, ipsam iusto incidunt nulla? Placeat assumenda eius saepe vitae voluptate?Lorem ipsum dolor sit amet consectetur adipisicing elit. Sint iusto quo magnam iste quidem! Sed repellat, consequatur adipisci eligendi incidunt omnis magnam reprehenderit nesciunt maxime molestiae hic reiciendis quibusdam quod! Lorem ipsum dolor sit amet consectetur adipisicing elit. Reprehenderit modi illum sunt, qui tenetur, est eligendi corporis deleniti nihil cupiditate aut rem quae corrupti accusamus ipsa nesciunt officia asperiores Lorem ipsum dolor sit amet consectetur, adipisicing elit. Velit eveniet reiciendis cupiditate corrupti cumque odio maiores! Iure ab animi esse consectetur ipsa optio inventore deserunt temporibus dolore? Voluptas, mollitia asperiores!', 1, 'image/activity4.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `fname` varchar(10) DEFAULT NULL,
  `lname` varchar(10) DEFAULT NULL,
  `username` varchar(10) NOT NULL,
  `password` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`fname`, `lname`, `username`, `password`) VALUES
('Jimmy', 'Fallon', 'admin', 'admin123');

-- --------------------------------------------------------

--
-- Table structure for table `customer`
--

CREATE TABLE `customer` (
  `fullname` varchar(20) DEFAULT NULL,
  `contact` bigint(10) DEFAULT NULL,
  `email` varchar(20) NOT NULL,
  `address` text DEFAULT NULL,
  `password` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `customer`
--

INSERT INTO `customer` (`fullname`, `contact`, `email`, `address`, `password`) VALUES
('James Gosling', 4875632145, 'gosling@gmail.com', '8th street NYC', '$2y$10$6ArbPSkLImGsq'),
('Riya Sharma', 7894587690, 'rits@gmail.com', 'Shiraya building 4th block ,Bangalore', '$2y$10$qgg/CR80zdGVF'),
('Selena Gomez', 4897613231, 'selmez@gmail.com', 'qwerty 5th street', '$2y$10$woOaNwVmIc.Va');

-- --------------------------------------------------------

--
-- Table structure for table `reservation`
--

CREATE TABLE `reservation` (
  `bookid` int(10) NOT NULL,
  `email` varchar(20) NOT NULL,
  `rno` int(2) NOT NULL,
  `checkin` date DEFAULT NULL,
  `checkout` date DEFAULT NULL,
  `bookingstatus` varchar(20) DEFAULT 'Pending'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `reservation`
--

INSERT INTO `reservation` (`bookid`, `email`, `rno`, `checkin`, `checkout`, `bookingstatus`) VALUES
(18, 'selmez@gmail.com', 1, '2022-12-18', '2022-12-19', 'Pending'),
(20, 'rits@gmail.com', 3, '2022-12-20', '2022-12-21', 'Pending');

-- --------------------------------------------------------

--
-- Table structure for table `room`
--

CREATE TABLE `room` (
  `rno` int(2) NOT NULL,
  `rname` varchar(10) DEFAULT NULL,
  `type` varchar(10) DEFAULT NULL,
  `description` text DEFAULT NULL,
  `price` int(6) DEFAULT NULL,
  `imagepath` text DEFAULT NULL,
  `status` tinyint(1) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `room`
--

INSERT INTO `room` (`rno`, `rname`, `type`, `description`, `price`, `imagepath`, `status`) VALUES
(1, 'Room1', 'Double', 'First floor,with AC,built in bathroom and has Double bed', 1200, 'image/room1.jpg', 0),
(2, 'Room2', 'Double', 'First floor,with AC,built in bathroom and has Double bed ', 1500, 'image/room2.jfif', 1),
(3, 'Room3', 'Double', 'Second floor,with AC,built in bathroom and has Double bed', 2000, 'image/room3.jfif', 0),
(4, 'Room4', 'Single', 'Second floor,with AC,built in bathroom and has Single bed', 1000, 'image/room4.jpg', 1),
(5, 'Room5', 'Double', 'Second floor,with AC,built in bathroom and has Double bed', 3000, 'image/room5.jpeg', 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `activity`
--
ALTER TABLE `activity`
  ADD PRIMARY KEY (`aid`);

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`username`,`password`);

--
-- Indexes for table `customer`
--
ALTER TABLE `customer`
  ADD PRIMARY KEY (`email`);

--
-- Indexes for table `reservation`
--
ALTER TABLE `reservation`
  ADD PRIMARY KEY (`bookid`,`email`,`rno`),
  ADD KEY `email` (`email`),
  ADD KEY `rno` (`rno`);

--
-- Indexes for table `room`
--
ALTER TABLE `room`
  ADD PRIMARY KEY (`rno`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `reservation`
--
ALTER TABLE `reservation`
  MODIFY `bookid` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `reservation`
--
ALTER TABLE `reservation`
  ADD CONSTRAINT `reservation_ibfk_1` FOREIGN KEY (`email`) REFERENCES `customer` (`email`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `reservation_ibfk_2` FOREIGN KEY (`rno`) REFERENCES `room` (`rno`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
