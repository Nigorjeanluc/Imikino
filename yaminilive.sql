-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Jun 23, 2017 at 06:17 PM
-- Server version: 10.1.16-MariaDB
-- PHP Version: 7.0.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `yaminilive`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `ID` int(11) NOT NULL,
  `Picture` text NOT NULL,
  `Username` varchar(100) NOT NULL,
  `Password` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`ID`, `Picture`, `Username`, `Password`) VALUES
(1, 'images/1.jpg', 'Kwizera', '123456');

-- --------------------------------------------------------

--
-- Table structure for table `adverts`
--

CREATE TABLE `adverts` (
  `ID` int(11) NOT NULL,
  `Company` varchar(50) NOT NULL,
  `picture1` text NOT NULL,
  `Date` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `adverts`
--

INSERT INTO `adverts` (`ID`, `Company`, `picture1`, `Date`) VALUES
(1, 'Motherfucker', 'images/pub/1.0x0.jpg', '2017-06-16 08:29:44'),
(2, 'Motherfucker', 'images/pub/1.0x0.jpg', '2017-06-16 08:30:01'),
(3, 'tel', 'images/pub/pack_sono_300personnes_design_decoration_ekipement_location_mobilier_sonorisation_eclairage_lille_paris_belgique.jpg', '2017-06-16 15:20:58');

-- --------------------------------------------------------

--
-- Table structure for table `comments`
--

CREATE TABLE `comments` (
  `ID` int(11) NOT NULL,
  `User` varchar(50) NOT NULL,
  `Content` text NOT NULL,
  `Article` int(11) NOT NULL,
  `Phone` varchar(15) NOT NULL,
  `Email` varchar(100) NOT NULL,
  `counter` int(11) NOT NULL,
  `Date` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `comments`
--

INSERT INTO `comments` (`ID`, `User`, `Content`, `Article`, `Phone`, `Email`, `counter`, `Date`) VALUES
(19, 'Kwizera', 'hhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhh', 47, '42728', 'kercera@ymail.com', 0, '2017-06-12 14:41:19'),
(20, 'GGDFHSJIOW', 'JKLK;KF', 48, '25054568212', '', 0, '2017-06-12 14:49:38'),
(21, 'hex', 'yeeeeeeeeeeeeeh', 48, '246', '', 0, '2017-06-12 14:56:37'),
(22, 'gshfifwiuf', 'hkgffslfjfh', 47, '3252676', '', 0, '2017-06-12 15:05:24'),
(23, 'YE', 'EGO DA', 52, '2314', '', 0, '2017-06-12 15:19:35'),
(24, 'yamini', 'yebabaweeeeeeeeeeeeeee', 56, '0728165504', '', 0, '2017-06-16 16:04:24'),
(25, 'xfsgdh', 'gdyhhfhhhthrhdgdg', 53, 'sfsgdhrh', '', 0, '2017-06-16 16:43:02');

-- --------------------------------------------------------

--
-- Table structure for table `messages`
--

CREATE TABLE `messages` (
  `ID` int(11) NOT NULL,
  `User` varchar(100) NOT NULL,
  `Phone` varchar(50) NOT NULL,
  `Email` varchar(100) NOT NULL,
  `Content` varchar(1000) NOT NULL,
  `counter` int(11) NOT NULL,
  `Date` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `messages`
--

INSERT INTO `messages` (`ID`, `User`, `Phone`, `Email`, `Content`, `counter`, `Date`) VALUES
(3, 'JayJay lee', '0784456890', 'nigorjeanluc@gmail.com', 'Est ce que tu me vois vivre', 0, '2017-06-16 08:08:11');

-- --------------------------------------------------------

--
-- Table structure for table `news`
--

CREATE TABLE `news` (
  `ID` int(11) NOT NULL,
  `Title` varchar(100) NOT NULL,
  `picture1` text NOT NULL,
  `pic1_txt` varchar(100) NOT NULL,
  `picture2` text NOT NULL,
  `pic2_txt` varchar(100) NOT NULL,
  `picture3` text NOT NULL,
  `pic3_txt` varchar(100) NOT NULL,
  `picture4` text NOT NULL,
  `pic4_txt` varchar(100) NOT NULL,
  `picture5` text NOT NULL,
  `pic5_txt` varchar(100) NOT NULL,
  `Author` varchar(50) NOT NULL,
  `Content` text NOT NULL,
  `Categorie` varchar(50) NOT NULL,
  `Place` varchar(50) NOT NULL,
  `Views` int(11) NOT NULL,
  `counter` varchar(11) NOT NULL,
  `Date` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `news`
--

INSERT INTO `news` (`ID`, `Title`, `picture1`, `pic1_txt`, `picture2`, `pic2_txt`, `picture3`, `pic3_txt`, `picture4`, `pic4_txt`, `picture5`, `pic5_txt`, `Author`, `Content`, `Categorie`, `Place`, `Views`, `counter`, `Date`) VALUES
(48, 'AMAVUBI YAKUBISWE', 'images/news/18949578_1718267718465858_8433818200147230720_n.jpg', 'DKGJVJ;;GJKF;LFJG', 'images/news/', '', 'images/news/', '', 'images/news/', '', 'images/news/', '', 'YAMINI', '<div style="text-align: left;"><span style="color: rgb(102, 102, 102); font-family: &quot;Ek Mukta&quot;, sans-serif; font-size: 15px; text-align: justify;">Many strides have been made in advancing IoT technology in industrial applications because of the value gained in connecting end equipment for automation, system reliability and centralized management. While developed for industrial applications, many of these advances are applicable to all types of embedded systems, including wearables, medical monitors, security devices, residential and commercial HVAC, and a myriad of evolving consumer applications&nbsp;</span><span style="color: rgb(102, 102, 102); font-family: &quot;Ek Mukta&quot;, sans-serif; font-size: 15px; text-align: justify;">Many strides have been made in advancing IoT technology in industrial applications because of the value gained in connecting end equipment for automation, system reliability and centralized management. While developed for industrial applications, many of these advances are applicable to all types of embedded systems, including wearables, medical monitors, security devices, residential and commercial HVAC, and a myriad of evolving consumer applications</span></div><div style="text-align: left;"><span style="color: rgb(102, 102, 102); font-family: &quot;Ek Mukta&quot;, sans-serif; font-size: 15px; text-align: justify;"><br></span></div><div style="text-align: left;"><span style="color: rgb(102, 102, 102); font-family: &quot;Ek Mukta&quot;, sans-serif; font-size: 15px; text-align: justify;">Many strides have been made in advancing IoT technology in industrial applications because of the value gained in connecting end equipment for automation, system reliability and centralized management. While developed for industrial applications, many of these advances are applicable to all types of embedded systems, including wearables, medical monitors, security devices, residential and commercial HVAC, and a myriad of evolving consumer applications&nbsp;</span><span style="color: rgb(102, 102, 102); font-family: &quot;Ek Mukta&quot;, sans-serif; font-size: 15px; text-align: justify;">Many strides have been made in advancing IoT technology in industrial applications because of the value gained in connecting end equipment for automation, system reliability and centralized management. While developed for industrial applications, many of these advances are applicable to all types of embedded systems, including wearables, medical monitors, security devices, residential and commercial HVAC, and a myriad of evolving consumer applications</span><span style="color: rgb(102, 102, 102); font-family: &quot;Ek Mukta&quot;, sans-serif; font-size: 15px; text-align: justify;"><br></span></div><div style="text-align: left;"><span style="color: rgb(102, 102, 102); font-family: &quot;Ek Mukta&quot;, sans-serif; font-size: 15px; text-align: justify;"><br></span></div><div style="text-align: left;"><span style="color: rgb(102, 102, 102); font-family: &quot;Ek Mukta&quot;, sans-serif; font-size: 15px; text-align: justify;">Many strides have been made in advancing IoT technology in industrial applications because of the value gained in connecting end equipment for automation, system reliability and centralized management. While developed for industrial applications, many of these advances are applicable to all types of embedded systems, including wearables, medical monitors, security devices, residential and commercial HVAC, and a myriad of evolving consumer applications&nbsp;</span><span style="color: rgb(102, 102, 102); font-family: &quot;Ek Mukta&quot;, sans-serif; font-size: 15px; text-align: justify;">Many strides have been made in advancing IoT technology in industrial applications because of the value gained in connecting end equipment for automation, system reliability and centralized management. While developed for industrial applications, many of these advances are applicable to all types of embedded systems, including wearables, medical monitors, security devices, residential and commercial HVAC, and a myriad of evolving consumer applications</span><span style="color: rgb(102, 102, 102); font-family: &quot;Ek Mukta&quot;, sans-serif; font-size: 15px; text-align: justify;"><br></span></div><div style="text-align: left;"><span style="color: rgb(102, 102, 102); font-family: &quot;Ek Mukta&quot;, sans-serif; font-size: 15px; text-align: justify;"><br></span></div><div style="text-align: left;"><span style="color: rgb(102, 102, 102); font-family: &quot;Ek Mukta&quot;, sans-serif; font-size: 15px; text-align: justify;">Many strides have been made in advancing IoT technology in industrial applications because of the value gained in connecting end equipment for automation, system reliability and centralized management. While developed for industrial applications, many of these advances are applicable to all types of embedded systems, including wearables, medical monitors, security devices, residential and commercial HVAC, and a myriad of evolving consumer applications&nbsp;</span><span style="color: rgb(102, 102, 102); font-family: &quot;Ek Mukta&quot;, sans-serif; font-size: 15px; text-align: justify;">Many strides have been made in advancing IoT technology in industrial applications because of the value gained in connecting end equipment for automation, system reliability and centralized management. While developed for industrial applications, many of these advances are applicable to all types of embedded systems, including wearables, medical monitors, security devices, residential and commercial HVAC, and a myriad of evolving consumer applications</span><span style="color: rgb(102, 102, 102); font-family: &quot;Ek Mukta&quot;, sans-serif; font-size: 15px; text-align: justify;"><br></span></div>', 'athletic', 'Rwanda', 14, '1', '2017-06-13 05:02:36'),
(51, 'manchester united', 'images/news/5 star hotel.jpg', 'eeeh', 'images/news/', '', 'images/news/', '', 'images/news/', '', 'images/news/pack_sono_300personnes_design_decoration_ekipement_location_mobilier_sonorisation_eclairage_lille_paris_belgique.jpg', 'Yes', 'yamini', '<span style="color: rgb(102, 102, 102); font-family: &quot;Ek Mukta&quot;, sans-serif; font-size: 15px; text-align: justify;">Many strides have been made in advancing IoT technology in industrial applications because of the value gained in connecting end equipment for automation, system reliability and centralized management. While developed for industrial applications, many of these advances are applicable to all types of embedded systems, including wearables, medical monitors, security devices, residential and commercial HVAC, and a myriad of evolving consumer applications&nbsp;</span><span style="color: rgb(102, 102, 102); font-family: &quot;Ek Mukta&quot;, sans-serif; font-size: 15px; text-align: justify;">Many strides have been made in advancing IoT technology in industrial applications because of the value gained in connecting end equipment for automation, system reliability and centralized management. While developed for industrial applications, many of these advances are applicable to all types of embedded systems, including wearables, medical monitors, security devices, residential and commercial HVAC, and a myriad of evolving consumer applications</span><div><span style="color: rgb(102, 102, 102); font-family: &quot;Ek Mukta&quot;, sans-serif; font-size: 15px; text-align: justify;"><br></span></div><div><span style="color: rgb(102, 102, 102); font-family: &quot;Ek Mukta&quot;, sans-serif; font-size: 15px; text-align: justify;">Many strides have been made in advancing IoT technology in industrial applications because of the value gained in connecting end equipment for automation, system reliability and centralized management. While developed for industrial applications, many of these advances are applicable to all types of embedded systems, including wearables, medical monitors, security devices, residential and commercial HVAC, and a myriad of evolving consumer applications&nbsp;</span><span style="color: rgb(102, 102, 102); font-family: &quot;Ek Mukta&quot;, sans-serif; font-size: 15px; text-align: justify;">Many strides have been made in advancing IoT technology in industrial applications because of the value gained in connecting end equipment for automation, system reliability and centralized management. While developed for industrial applications, many of these advances are applicable to all types of embedded systems, including wearables, medical monitors, security devices, residential and commercial HVAC, and a myriad of evolving consumer applications</span><span style="color: rgb(102, 102, 102); font-family: &quot;Ek Mukta&quot;, sans-serif; font-size: 15px; text-align: justify;"><br></span></div><div><span style="color: rgb(102, 102, 102); font-family: &quot;Ek Mukta&quot;, sans-serif; font-size: 15px; text-align: justify;"><br></span></div><div><span style="color: rgb(102, 102, 102); font-family: &quot;Ek Mukta&quot;, sans-serif; font-size: 15px; text-align: justify;">Many strides have been made in advancing IoT technology in industrial applications because of the value gained in connecting end equipment for automation, system reliability and centralized management. While developed for industrial applications, many of these advances are applicable to all types of embedded systems, including wearables, medical monitors, security devices, residential and commercial HVAC, and a myriad of evolving consumer applications&nbsp;</span><span style="color: rgb(102, 102, 102); font-family: &quot;Ek Mukta&quot;, sans-serif; font-size: 15px; text-align: justify;">Many strides have been made in advancing IoT technology in industrial applications because of the value gained in connecting end equipment for automation, system reliability and centralized management. While developed for industrial applications, many of these advances are applicable to all types of embedded systems, including wearables, medical monitors, security devices, residential and commercial HVAC, and a myriad of evolving consumer applications</span><span style="color: rgb(102, 102, 102); font-family: &quot;Ek Mukta&quot;, sans-serif; font-size: 15px; text-align: justify;"><br></span></div><div><span style="color: rgb(102, 102, 102); font-family: &quot;Ek Mukta&quot;, sans-serif; font-size: 15px; text-align: justify;"><br></span></div><div><span style="color: rgb(102, 102, 102); font-family: &quot;Ek Mukta&quot;, sans-serif; font-size: 15px; text-align: justify;">Many strides have been made in advancing IoT technology in industrial applications because of the value gained in connecting end equipment for automation, system reliability and centralized management. While developed for industrial applications, many of these advances are applicable to all types of embedded systems, including wearables, medical monitors, security devices, residential and commercial HVAC, and a myriad of evolving consumer applications&nbsp;</span><span style="color: rgb(102, 102, 102); font-family: &quot;Ek Mukta&quot;, sans-serif; font-size: 15px; text-align: justify;">Many strides have been made in advancing IoT technology in industrial applications because of the value gained in connecting end equipment for automation, system reliability and centralized management. While developed for industrial applications, many of these advances are applicable to all types of embedded systems, including wearables, medical monitors, security devices, residential and commercial HVAC, and a myriad of evolving consumer applications</span><span style="color: rgb(102, 102, 102); font-family: &quot;Ek Mukta&quot;, sans-serif; font-size: 15px; text-align: justify;"><br></span></div>', 'football', 'Rwanda', 22, '1', '2017-06-16 06:37:19'),
(53, 'Many strides have been made in advancing IoT technology in industrial applications', 'images/news/d75386bd92ec11df826983d4867af115.jpg', 'ryafgfya', 'images/news/', '', 'images/news/', '', 'images/news/', '', 'images/news/146764628.jpg', 'makurcv', 'jyewe', '<div style="text-align: justify;"><span style="color: rgb(102, 102, 102); font-family: &quot;Ek Mukta&quot;, sans-serif; font-size: 15px;">Many strides have been made in advancing IoT technology in industrial applications because of the value gained in connecting end equipment for automation, system reliability and centralized management. While developed for industrial applications, many of these advances are applicable to all types of embedded systems, including wearables, medical monitors, security devices, residential and commercial HVAC, and a myriad of evolving consumer applications&nbsp;</span><span style="color: rgb(102, 102, 102); font-family: &quot;Ek Mukta&quot;, sans-serif; font-size: 15px;">Many strides have been made in advancing IoT technology in industrial applications because of the value gained in connecting end equipment for automation, system reliability and centralized management. While developed for industrial applications, many of these advances are applicable to all types of embedded systems, including wearables, medical monitors, security devices, residential and commercial HVAC, and a myriad of evolving consumer applications</span><br></div><div style="text-align: justify;"><span style="color: rgb(102, 102, 102); font-family: &quot;Ek Mukta&quot;, sans-serif; font-size: 15px;"><br></span></div><div style="text-align: justify;"><span style="color: rgb(102, 102, 102); font-family: &quot;Ek Mukta&quot;, sans-serif; font-size: 15px;">Many strides have been made in advancing IoT technology in industrial applications because of the value gained in connecting end equipment for automation, system reliability and centralized management. While developed for industrial applications, many of these advances are applicable to all types of embedded systems, including wearables, medical monitors, security devices, residential and commercial HVAC, and a myriad of evolving consumer applications&nbsp;</span><span style="color: rgb(102, 102, 102); font-family: &quot;Ek Mukta&quot;, sans-serif; font-size: 15px;">Many strides have been made in advancing IoT technology in industrial applications because of the value gained in connecting end equipment for automation, system reliability and centralized management. While developed for industrial applications, many of these advances are applicable to all types of embedded systems, including wearables, medical monitors, security devices, residential and commercial HVAC, and a myriad of evolving consumer applications</span><span style="color: rgb(102, 102, 102); font-family: &quot;Ek Mukta&quot;, sans-serif; font-size: 15px;"><br></span></div><div style="text-align: justify;"><span style="color: rgb(102, 102, 102); font-family: &quot;Ek Mukta&quot;, sans-serif; font-size: 15px;"><br></span></div><div style="text-align: justify;"><span style="color: rgb(102, 102, 102); font-family: &quot;Ek Mukta&quot;, sans-serif; font-size: 15px;">Many strides have been made in advancing IoT technology in industrial applications because of the value gained in connecting end equipment for automation, system reliability and centralized management. While developed for industrial applications, many of these advances are applicable to all types of embedded systems, including wearables, medical monitors, security devices, residential and commercial HVAC, and a myriad of evolving consumer applications&nbsp;</span><span style="color: rgb(102, 102, 102); font-family: &quot;Ek Mukta&quot;, sans-serif; font-size: 15px;">Many strides have been made in advancing IoT technology in industrial applications because of the value gained in connecting end equipment for automation, system reliability and centralized management. While developed for industrial applications, many of these advances are applicable to all types of embedded systems, including wearables, medical monitors, security devices, residential and commercial HVAC, and a myriad of evolving consumer applications</span><span style="color: rgb(102, 102, 102); font-family: &quot;Ek Mukta&quot;, sans-serif; font-size: 15px;"><br></span></div>', 'cycling', 'France', 15, '1', '2017-06-12 15:32:43'),
(54, 'centralized management. While developed for industrial applications', 'images/news/productimg1284821975810.jpg', 'DKGJVJ;;GJKF;LFJG', 'images/news/', '', 'images/news/', '', 'images/news/', '', 'images/news/', '', 'jhgiufu', '<span style="color: rgb(102, 102, 102); font-family: &quot;Ek Mukta&quot;, sans-serif; font-size: 15px; text-align: justify;">&nbsp;IoT</span><span style="color: rgb(102, 102, 102); font-family: &quot;Ek Mukta&quot;, sans-serif; font-size: 15px; text-align: justify;">Many strides have been made in advancing</span><span style="color: rgb(102, 102, 102); font-family: &quot;Ek Mukta&quot;, sans-serif; font-size: 15px; text-align: justify;">&nbsp;technology in industrial applications because of the value gained in connecting end equipment for automation, system reliability and centralized management. While developed for industrial applications, many of these advances are applicable to all types of embedded systems, including wearables, medical monitors, security devices, residential and commercial HVAC, and a myriad of evolving consumer applications&nbsp;</span><span style="color: rgb(102, 102, 102); font-family: &quot;Ek Mukta&quot;, sans-serif; font-size: 15px; text-align: justify;">Many strides have been made in advancing IoT technology in industrial applications because of the value gained in connecting end equipment for automation, system reliability and centralized management. While developed for industrial applications, many of these advances are applicable to all types of embedded systems, including wearables, medical monitors, security</span><div><span style="color: rgb(102, 102, 102); font-family: &quot;Ek Mukta&quot;, sans-serif; font-size: 15px; text-align: justify;"><br></span></div><div><span style="color: rgb(102, 102, 102); font-family: &quot;Ek Mukta&quot;, sans-serif; font-size: 15px; text-align: justify;">Many strides have been made in advancing IoT technology in industrial applications because of the value gained in connecting end equipment for automation, system reliability and centralized management. While developed for industrial applications, many of these advances are applicable to all types of embedded systems, including wearables, medical monitors, security devices, residential and commercial HVAC, and a myriad of evolving consumer applications&nbsp;</span><span style="color: rgb(102, 102, 102); font-family: &quot;Ek Mukta&quot;, sans-serif; font-size: 15px; text-align: justify;">Many strides have been made in advancing IoT technology in industrial applications because of the value gained in connecting end equipment for automation, system reliability and centralized management. While developed for industrial applications, many of these advances are applicable to all types of embedded systems, including wearables, medical monitors, security</span><span style="color: rgb(102, 102, 102); font-family: &quot;Ek Mukta&quot;, sans-serif; font-size: 15px; text-align: justify;"><br></span></div><div><span style="color: rgb(102, 102, 102); font-family: &quot;Ek Mukta&quot;, sans-serif; font-size: 15px; text-align: justify;"><br></span></div><div><span style="color: rgb(102, 102, 102); font-family: &quot;Ek Mukta&quot;, sans-serif; font-size: 15px; text-align: justify;">Many strides have been made in advancing IoT technology in industrial applications because of the value gained in connecting end equipment for automation, system reliability and centralized management. While developed for industrial applications, many of these advances are applicable to all types of embedded systems, including wearables, medical monitors, security devices, residential and commercial HVAC, and a myriad of evolving consumer applications&nbsp;</span><span style="color: rgb(102, 102, 102); font-family: &quot;Ek Mukta&quot;, sans-serif; font-size: 15px; text-align: justify;">Many strides have been made in advancing IoT technology in industrial applications because of the value gained in connecting end equipment for automation, system reliability and centralized management. While developed for industrial applications, many of these advances are applicable to all types of embedded systems, including wearables, medical monitors, security</span><span style="color: rgb(102, 102, 102); font-family: &quot;Ek Mukta&quot;, sans-serif; font-size: 15px; text-align: justify;"><br></span></div><div><span style="color: rgb(102, 102, 102); font-family: &quot;Ek Mukta&quot;, sans-serif; font-size: 15px; text-align: justify;"><br></span></div><div><span style="color: rgb(102, 102, 102); font-family: &quot;Ek Mukta&quot;, sans-serif; font-size: 15px; text-align: justify;">Many strides have been made in advancing IoT technology in industrial applications because of the value gained in connecting end equipment for automation, system reliability and centralized management. While developed for industrial applications, many of these advances are applicable to all types of embedded systems, including wearables, medical monitors, security devices, residential and commercial HVAC, and a myriad of evolving consumer applications&nbsp;</span><span style="color: rgb(102, 102, 102); font-family: &quot;Ek Mukta&quot;, sans-serif; font-size: 15px; text-align: justify;">Many strides have been made in advancing IoT technology in industrial applications because of the value gained in connecting end equipment for automation, system reliability and centralized management. While developed for industrial applications, many of these advances are applicable to all types of embedded systems, including wearables, medical monitors, security</span><span style="color: rgb(102, 102, 102); font-family: &quot;Ek Mukta&quot;, sans-serif; font-size: 15px; text-align: justify;"><br></span></div>', 'swimming', 'Spain', 22, '1', '2017-06-12 15:35:59'),
(55, 'Every day', 'images/news/19050821_1440476289308402_6420384273911513088_n.jpg', 'Workers', 'images/news/', '', 'images/news/', '', 'images/news/', '', 'images/news/', '', 'Raggamuffin', '<span style="color: rgb(102, 102, 102); font-family: &quot;Ek Mukta&quot;, sans-serif; font-size: 15px; text-align: justify;">Many strides have been made in advancing IoT technology in industrial applications because of the value gained in connecting end equipment for automation, system reliability and centralized management. While developed for industrial applications, many of these advances are applicable to all types of embedded systems, including wearables, medical monitors, security devices, residential and commercial HVAC, and a myriad of evolving consumer applications&nbsp;</span><span style="color: rgb(102, 102, 102); font-family: &quot;Ek Mukta&quot;, sans-serif; font-size: 15px; text-align: justify;">Many strides have been made in advancing IoT technology in industrial applications because of the value gained in connecting end equipment for automation, system reliability and centralized management. While developed for industrial applications, many of these advances are applicable to all types of embedded systems, including wearables, medical monitors, security devices, residential and commercial HVAC, and a myriad of evolving consumer applications</span><div><span style="color: rgb(102, 102, 102); font-family: &quot;Ek Mukta&quot;, sans-serif; font-size: 15px; text-align: justify;"><br></span></div><div><span style="color: rgb(102, 102, 102); font-family: &quot;Ek Mukta&quot;, sans-serif; font-size: 15px; text-align: justify;">Many strides have been made in advancing IoT technology in industrial applications because of the value gained in connecting end equipment for automation, system reliability and centralized management. While developed for industrial applications, many of these advances are applicable to all types of embedded systems, including wearables, medical monitors, security devices, residential and commercial HVAC, and a myriad of evolving consumer applications&nbsp;</span><span style="color: rgb(102, 102, 102); font-family: &quot;Ek Mukta&quot;, sans-serif; font-size: 15px; text-align: justify;">Many strides have been made in advancing IoT technology in industrial applications because of the value gained in connecting end equipment for automation, system reliability and centralized management. While developed for industrial applications, many of these advances are applicable to all types of embedded systems, including wearables, medical monitors, security devices, residential and commercial HVAC, and a myriad of evolving consumer applications</span><span style="color: rgb(102, 102, 102); font-family: &quot;Ek Mukta&quot;, sans-serif; font-size: 15px; text-align: justify;"><br></span></div><div><span style="color: rgb(102, 102, 102); font-family: &quot;Ek Mukta&quot;, sans-serif; font-size: 15px; text-align: justify;"><br></span></div><div><span style="color: rgb(102, 102, 102); font-family: &quot;Ek Mukta&quot;, sans-serif; font-size: 15px; text-align: justify;">Many strides have been made in advancing IoT technology in industrial applications because of the value gained in connecting end equipment for automation, system reliability and centralized management. While developed for industrial applications, many of these advances are applicable to all types of embedded systems, including wearables, medical monitors, security devices, residential and commercial HVAC, and a myriad of evolving consumer applications&nbsp;</span><span style="color: rgb(102, 102, 102); font-family: &quot;Ek Mukta&quot;, sans-serif; font-size: 15px; text-align: justify;">Many strides have been made in advancing IoT technology in industrial applications because of the value gained in connecting end equipment for automation, system reliability and centralized management. While developed for industrial applications, many of these advances are applicable to all types of embedded systems, including wearables, medical monitors, security devices, residential and commercial HVAC, and a myriad of evolving consumer applications</span><span style="color: rgb(102, 102, 102); font-family: &quot;Ek Mukta&quot;, sans-serif; font-size: 15px; text-align: justify;"><br></span></div>', 'rugby', 'Rwanda', 13, '1', '2017-06-13 04:09:40'),
(56, 'Fall in love', 'images/news/5 star hotel.jpg', 'Separate', 'images/news/1.0x0.jpg', 'navigating', 'images/news/d75386bd92ec11df826983d4867af115.jpg', 'blah', 'images/news/2017-Ivory-Classic-Mens-Suit-Peaked-Lapel-Wedding-Suits-For-Men-Wedding-Tuxedos-For-Men-One.jpg_640x640.jpg', 'Twose', 'images/news/pack_sono_300personnes_design_decoration_ekipement_location_mobilier_sonorisation_eclairage_lille_paris_belgique.jpg', 'good', 'Yewe', '<div style="text-align: justify;"><span style="color: rgb(102, 102, 102); font-family: &quot;Ek Mukta&quot;, sans-serif; font-size: 15px;">Many strides have been made in advancing IoT technology in industrial applications because of the value gained in connecting end equipment for automation, system reliability and centralized management. While developed for industrial applications, many of these advances are applicable to all types of embedded systems, including wearables, medical monitors, security devices, residential and commercial HVAC, and a myriad of evolving consumer applications&nbsp;</span><span style="color: rgb(102, 102, 102); font-family: &quot;Ek Mukta&quot;, sans-serif; font-size: 15px;">Many strides have been made in advancing IoT technology in industrial applications because of the value gained in connecting end equipment for automation, system reliability and centralized management. While developed for industrial applications, many of these advances are applicable to all types of embedded systems, including wearables, medical monitors, security devices, residential and commercial HVAC, and a myriad of evolving consumer applications</span><span style="color: rgb(102, 102, 102); font-family: &quot;Ek Mukta&quot;, sans-serif; font-size: 15px;"><br></span></div><div style="text-align: justify;"><span style="color: rgb(102, 102, 102); font-family: &quot;Ek Mukta&quot;, sans-serif; font-size: 15px;"><br></span></div><div style="text-align: justify;"><span style="color: rgb(102, 102, 102); font-family: &quot;Ek Mukta&quot;, sans-serif; font-size: 15px;">Many strides have been made in advancing IoT technology in industrial applications because of the value gained in connecting end equipment for automation, system reliability and centralized management. While developed for industrial applications, many of these advances are applicable to all types of embedded systems, including wearables, medical monitors, security devices, residential and commercial HVAC, and a myriad of evolving consumer applications&nbsp;</span><span style="color: rgb(102, 102, 102); font-family: &quot;Ek Mukta&quot;, sans-serif; font-size: 15px;">Many strides have been made in advancing IoT technology in industrial applications because of the value gained in connecting end equipment for automation, system reliability and centralized management. While developed for industrial applications, many of these advances are applicable to all types of embedded systems, including wearables, medical monitors, security devices, residential and commercial HVAC, and a myriad of evolving consumer applications</span><span style="color: rgb(102, 102, 102); font-family: &quot;Ek Mukta&quot;, sans-serif; font-size: 15px;"><br></span></div><div style="text-align: justify;"><span style="color: rgb(102, 102, 102); font-family: &quot;Ek Mukta&quot;, sans-serif; font-size: 15px;"><br></span></div><div style="text-align: justify;"><span style="color: rgb(102, 102, 102); font-family: &quot;Ek Mukta&quot;, sans-serif; font-size: 15px;">Many strides have been made in advancing IoT technology in industrial applications because of the value gained in connecting end equipment for automation, system reliability and centralized management. While developed for industrial applications, many of these advances are applicable to all types of embedded systems, including wearables, medical monitors, security devices, residential and commercial HVAC, and a myriad of evolving consumer applications&nbsp;</span><span style="color: rgb(102, 102, 102); font-family: &quot;Ek Mukta&quot;, sans-serif; font-size: 15px;">Many strides have been made in advancing IoT technology in industrial applications because of the value gained in connecting end equipment for automation, system reliability and centralized management. While developed for industrial applications, many of these advances are applicable to all types of embedded systems, including wearables, medical monitors, security devices, residential and commercial HVAC, and a myriad of evolving consumer applications</span><span style="color: rgb(102, 102, 102); font-family: &quot;Ek Mukta&quot;, sans-serif; font-size: 15px;"><br></span></div>', 'football', 'America', 53, '1', '2017-06-16 15:46:14');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `adverts`
--
ALTER TABLE `adverts`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `comments`
--
ALTER TABLE `comments`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `messages`
--
ALTER TABLE `messages`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `news`
--
ALTER TABLE `news`
  ADD PRIMARY KEY (`ID`),
  ADD UNIQUE KEY `Title` (`Title`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `adverts`
--
ALTER TABLE `adverts`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `comments`
--
ALTER TABLE `comments`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;
--
-- AUTO_INCREMENT for table `messages`
--
ALTER TABLE `messages`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `news`
--
ALTER TABLE `news`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=57;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
