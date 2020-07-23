-- phpMyAdmin SQL Dump
-- version 4.8.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 23, 2020 at 07:46 PM
-- Server version: 10.1.37-MariaDB
-- PHP Version: 7.3.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `unifeed`
--

-- --------------------------------------------------------

--
-- Table structure for table `admintbl`
--

CREATE TABLE `admintbl` (
  `username` text NOT NULL,
  `pass` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admintbl`
--

INSERT INTO `admintbl` (`username`, `pass`) VALUES
('admin', 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `schools`
--

CREATE TABLE `schools` (
  `id` int(11) NOT NULL,
  `logo` longtext NOT NULL,
  `schName` varchar(200) NOT NULL,
  `location` varchar(200) NOT NULL,
  `yearBuilt` varchar(20) NOT NULL,
  `courses` varchar(200) NOT NULL,
  `schHistory` varchar(1000) NOT NULL,
  `schWebsite` varchar(500) NOT NULL,
  `tag_3` text NOT NULL,
  `tag_2` text NOT NULL,
  `tag_1` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `schools`
--

INSERT INTO `schools` (`id`, `logo`, `schName`, `location`, `yearBuilt`, `courses`, `schHistory`, `schWebsite`, `tag_3`, `tag_2`, `tag_1`) VALUES
(5, 'uploads/5edfb6bb292368.02521029.jpg', 'Tamale Technical University', 'Tamale,Sagnarigu', '1950', 'Statistics, Mathematics & Science Language & Liberal Studies Hotel, Tourism Management Fashion,Design & Modeling Computer Science', 'The Tamale Polytechnic is a public tertiary institution in the Northern Region of Ghana.', 'https://tatu.edu.gh', 'tamale technical university', 'tatu', 'T-poly'),
(6, 'uploads/5ee0bd8b71f9e2.95202170.jpg', 'University For Developmental Studies (Tamale Campus)', 'Tamale,Dungu', '1992', 'Statistics, Mathematics & Science Language & Liberal Studies Hotel, Tourism Management Fashion,Design & Modeling Computer Science', 'The University for Development Studies, Tamale was established in 1992 by the government of Ghana with a view to accelerating the development of the then 3 Northern Regions of Ghana (the Northern, Upper East and Upper West Regions). President Jerry John Rawlings player a crucial role in its founding as he used his prize money from World Food Prize of $50,000 as seed money for its founding. It was set up as a multi-campus institution. It is the fifth public university to be established in Ghana. This deviates from the usual practice of having universities with central campuses and administrations. It was created with the three northern regions of North Ghana in mind. These are the Northern Region, Upper East Region and the Upper West Region.', 'https://uds.edu.gh/', 'uds', 'uds-dungu', 'uds-tamale'),
(7, 'uploads/5eea04c2c0c8a1.97255721.gif', 'University Of Cape Coast', 'Cape Coast,Ghana', '1962', 'School of Physical Sciences Department of Physics Department of Mathematics Department of Statistics Department of Laboratory Technology Department of Computer Science & Information Technology Departm', 'The University of Cape Coast is a public collegiate research university located in Cape Coast, Ghana. The university was established in 1962 out of a dire need for highly qualified and skilled manpower in education. It was established to train graduate teachers for second cycle institutions such as teacher training colleges and technical institutions, a mission that the two existing public universities at the time were unequipped to fulfill. The university has since added to its functions the training of doctors and health care professionals, as well as education planners, administrators, legal professionals and agriculturalists. UCC graduates include Ministers of State, High Commissioners, CEOs, and Members of Parliament.', 'https://www.ucc.edu.gh/', 'cape coast', 'university of cape coast', 'ucc');

-- --------------------------------------------------------

--
-- Table structure for table `schpics`
--

CREATE TABLE `schpics` (
  `schoolId` int(11) NOT NULL,
  `Img` longtext NOT NULL,
  `tag_1` text NOT NULL,
  `tag_2` text NOT NULL,
  `tag_3` text NOT NULL,
  `tag_4` text NOT NULL,
  `tag_5` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `schools`
--
ALTER TABLE `schools`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `schpics`
--
ALTER TABLE `schpics`
  ADD PRIMARY KEY (`schoolId`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `schools`
--
ALTER TABLE `schools`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `schpics`
--
ALTER TABLE `schpics`
  MODIFY `schoolId` int(11) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
