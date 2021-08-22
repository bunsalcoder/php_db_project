-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 22, 2021 at 07:02 AM
-- Server version: 10.4.20-MariaDB
-- PHP Version: 8.0.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `php_db_project`
--

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE `category` (
  `categoryID` int(11) NOT NULL,
  `categoryName` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`categoryID`, `categoryName`) VALUES
(1, 'Tech'),
(2, 'Travel');

-- --------------------------------------------------------

--
-- Table structure for table `post`
--

CREATE TABLE `post` (
  `postID` int(11) NOT NULL,
  `postTitle` varchar(30) NOT NULL,
  `postImg` varchar(1000) NOT NULL,
  `postDescription` varchar(2500) DEFAULT NULL,
  `postDate` datetime DEFAULT NULL,
  `userID` int(11) DEFAULT NULL,
  `categoryID` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `post`
--

INSERT INTO `post` (`postID`, `postTitle`, `postImg`, `postDescription`, `postDate`, `userID`, `categoryID`) VALUES
(15, 'New AI release date', 'ringo.jpg', 'fasdfasdfadfadfadfa', '2021-08-25 00:10:00', 1, 1),
(17, 'AI is noobie', '335-3357010_taka-wallpaper-vainglory.jpg', 'adfasdfasdfadfadfadfadsfasdf', '2021-08-22 08:51:00', NULL, 1),
(22, 'Switzerland', 'swiss.jpg', 'Switzerland is a mountainous Central European country, home to numerous lakes, villages and the high peaks of the Alps. Its cities contain medieval quarters, with landmarks like capital Berns Zytglogge clock tower and Lucerne’s wooden chapel bridge.', '2021-08-21 10:33:00', NULL, 2),
(23, 'Denmark', 'Denmark.jpg', 'Denmark is a Scandinavian country comprising the Jutland Peninsula and numerous islands. Its linked to nearby Sweden via the Öresund bridge.', '2021-08-18 10:34:00', NULL, 2),
(24, 'Technology ', 'tech.jpg', 'Technology is the sum of techniques, skills, methods, and processes used in the production of goods or services or in the accomplishment of objectives, such as scientific investigation.', '2021-08-26 10:42:00', NULL, 1),
(25, 'Norway', 'Norway.jpg', 'Norway is a Scandinavian country encompassing mountains, glaciers and deep coastal fjords. Oslo, the capital, is a city of green spaces and museums. Preserved 9th-century Viking ships are displayed at Oslos Viking Ship Museum.', '2021-08-27 23:27:00', NULL, 2),
(26, 'Python Programming', 'python.jpg', 'Python is an interpreted high-level general-purpose programming language. Its design philosophy emphasizes code readability with its use of significant indentation. Its language constructs as well as its object-oriented approach aim to help programmers write clear, logical code for small and large-scale projects.', '2021-08-23 19:33:00', NULL, 1),
(27, 'New Tech ', 'New_Tech_Released.jpg', '\r\nArtificial Intelligence, Blockchain, Cloud Computing, Data Science, Virtual Reality, Cyber Security etc, are some of the best technology to get into in 2021.', '2021-08-24 12:30:00', NULL, 1),
(29, 'Newzealand', 'newzealand.jpg', 'New Zealand is an island country in the southwestern Pacific Ocean. It consists of two main landmasses—the North Island and the South Island —and more than 700 smaller islands, covering a total area of 268,021 square kilometres.', '2021-08-25 22:07:00', NULL, 2);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `userID` int(11) NOT NULL,
  `userName` varchar(20) NOT NULL,
  `userProfile` varchar(300) NOT NULL,
  `userRole` varchar(20) NOT NULL,
  `userEmail` varchar(50) NOT NULL,
  `userPassword` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`userID`, `userName`, `userProfile`, `userRole`, `userEmail`, `userPassword`) VALUES
(1, 'bunsal', 'bunsal.JPEG', 'admin', 'bunsal@gmail.com', '$2y$10$CvaiKEW1dLVPLOxcZJJo2epAu46ZqPVbqiE.7ypgZmtWurSvkDAsq'),
(21, 'Jennie', 'jennie.jpg', 'user', 'jennie.bunsal@gmail.com', '$2y$10$EnOvpxPEodPhM3AcP1DT8Oqo8N6D1vciDyMZaahF5K87lrBQ1kCJi'),
(34, 'SingYou', 'singyou.jpg', 'user', 'singyou@gmail.com', '$2y$10$ZXl3k6lENMkR8PVkdlM0L.N5VpNjMuEsYdFXTg1ty8WwITCGzr96O');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`categoryID`);

--
-- Indexes for table `post`
--
ALTER TABLE `post`
  ADD PRIMARY KEY (`postID`),
  ADD KEY `userID` (`userID`),
  ADD KEY `categoryID` (`categoryID`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`userID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `category`
--
ALTER TABLE `category`
  MODIFY `categoryID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `post`
--
ALTER TABLE `post`
  MODIFY `postID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `userID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=35;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `post`
--
ALTER TABLE `post`
  ADD CONSTRAINT `post_ibfk_1` FOREIGN KEY (`userID`) REFERENCES `users` (`userID`),
  ADD CONSTRAINT `post_ibfk_2` FOREIGN KEY (`categoryID`) REFERENCES `category` (`categoryID`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
