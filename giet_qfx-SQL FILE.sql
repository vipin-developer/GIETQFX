-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Aug 23, 2017 at 04:49 PM
-- Server version: 10.1.19-MariaDB
-- PHP Version: 5.6.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `giet qfx`
--

-- --------------------------------------------------------

--
-- Table structure for table `booking`
--

CREATE TABLE `booking` (
  `b_id` int(11) NOT NULL,
  `movie_name` varchar(255) NOT NULL,
  `movie_date` date NOT NULL,
  `movie_time` time NOT NULL,
  `seat` varchar(1000) NOT NULL,
  `price` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `booking`
--

INSERT INTO `booking` (`b_id`, `movie_name`, `movie_date`, `movie_time`, `seat`, `price`) VALUES
(1, 'kabil ', '1992-12-12', '00:22:00', 'a:2:{i:0;s:3:"F12";i:1;s:3:"F13";}', 400),
(3, 'Raees ', '2017-02-25', '09:33:00', 'a:2:{i:0;s:2:"A8";i:1;s:2:"A9";}', 600),
(7, 'Raees ', '2017-02-25', '09:33:00', 'a:2:{i:0;s:2:"E8";i:1;s:2:"E9";}', 400),
(8, 'Raees ', '2017-02-25', '09:33:00', 'a:2:{i:0;s:2:"A3";i:1;s:2:"A4";}', 600),
(9, 'Raees ', '2017-02-25', '09:33:00', 'a:1:{i:0;s:3:"I11";}', 100),
(10, 'kabil ', '1992-12-12', '00:22:00', 'a:1:{i:0;s:3:"C13";}', 300),
(14, 'kabil ', '1992-12-12', '00:22:00', 'a:1:{i:0;s:3:"B12";}', 300),
(15, 'kabil ', '1992-12-12', '00:22:00', 'a:1:{i:0;s:3:"C14";}', 300),
(16, 'kabil ', '1992-12-12', '00:22:00', 'a:1:{i:0;s:3:"F15";}', 200),
(17, 'kabil ', '1992-12-12', '00:22:00', 'a:2:{i:0;s:2:"A6";i:1;s:2:"A7";}', 600),
(18, 'kabil ', '1992-12-12', '00:22:00', 'a:2:{i:0;s:2:"A9";i:1;s:3:"A10";}', 600),
(19, 'kabil ', '1992-12-12', '00:22:00', 'a:1:{i:0;s:3:"E15";}', 200),
(20, 'kabil ', '1992-12-12', '00:22:00', 'a:1:{i:0;s:2:"E2";}', 200),
(21, 'kabil ', '1992-12-12', '00:22:00', 'a:2:{i:0;s:2:"A4";i:1;s:2:"C9";}', 600);

-- --------------------------------------------------------

--
-- Table structure for table `customers`
--

CREATE TABLE `customers` (
  `cu_id` int(11) NOT NULL,
  `cu_name` varchar(100) NOT NULL,
  `cu_number` text NOT NULL,
  `cu_roll` text NOT NULL,
  `cu_mail` text NOT NULL,
  `cu_password` text NOT NULL,
  `feedback` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `customers`
--

INSERT INTO `customers` (`cu_id`, `cu_name`, `cu_number`, `cu_roll`, `cu_mail`, `cu_password`, `feedback`) VALUES
(1, 'Binay kushwaha', '7538919416', '14cse190', 'aenishkush@gmail.com', 'b57ffac8d57ad3ee96512e030523d081', 'Great job Binay kushwaha.'),
(3, 'Admin', '7538919416', '14cse190', 'Binay kuswaha', '	\nb57ffac8d57ad3ee96512e030523d081', ''),
(4, 'BINAY', '111111111111', '11', 'asd@mail.com', '8bb33820028dc9ed18e76e9a0a62fabe', ''),
(5, 'kabali', '7538919416', '14cse190', 'abc@gmail.com', '338d811d532553557ca33be45b6bde55', ''),
(6, 'biraj', '1234', '12111', 'biraj@gmail.com', 'b57ffac8d57ad3ee96512e030523d081', '');

-- --------------------------------------------------------

--
-- Table structure for table `movies`
--

CREATE TABLE `movies` (
  `m_id` int(11) NOT NULL,
  `m_name` varchar(100) NOT NULL,
  `m_director` varchar(100) NOT NULL,
  `m_genres` text NOT NULL,
  `m_time` time NOT NULL,
  `m_date` date NOT NULL,
  `comment` text NOT NULL,
  `MovieImage` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `movies`
--

INSERT INTO `movies` (`m_id`, `m_name`, `m_director`, `m_genres`, `m_time`, `m_date`, `comment`, `MovieImage`) VALUES
(1, 'kabil', 'Hritik Roshan,yami Gautam', 'Action,Drama', '00:22:00', '1992-12-12', 'Kaabil (English: Capable) is a 2017 Indian Hindi-language crime drama film, directed by Sanjay Gupta, written by Vijay Kumar Mishra, produced by Rakesh Roshan under his banner FilmKraft Productions.[4] It features a love affair between two blind people, played by Hrithik Roshan and Yami Gautam.[5][6] Music is composed by Rajesh Roshan. Principal photography of the film began on 30 March 2016.[7] The film was released on 25 January 2017.', '  Kaabil.jpg'),
(2, 'Raees', 'sarukh khan', 'action', '09:33:00', '2017-02-25', 'Raees is a 2017 Indian action crime thriller film directed by Rahul Dholakia and produced by Gauri Khan, Ritesh Sidhwani and Farhan Akhtar under their .\r\n\r\n', '  Raees.jpg');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `booking`
--
ALTER TABLE `booking`
  ADD PRIMARY KEY (`b_id`);

--
-- Indexes for table `customers`
--
ALTER TABLE `customers`
  ADD PRIMARY KEY (`cu_id`);

--
-- Indexes for table `movies`
--
ALTER TABLE `movies`
  ADD PRIMARY KEY (`m_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `booking`
--
ALTER TABLE `booking`
  MODIFY `b_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;
--
-- AUTO_INCREMENT for table `customers`
--
ALTER TABLE `customers`
  MODIFY `cu_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `movies`
--
ALTER TABLE `movies`
  MODIFY `m_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
