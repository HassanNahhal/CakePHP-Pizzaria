-- phpMyAdmin SQL Dump
-- version 4.1.14
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Dec 07, 2015 at 05:20 AM
-- Server version: 5.6.17
-- PHP Version: 5.5.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `cake_blog`
--

-- --------------------------------------------------------

--
-- Table structure for table `articles`
--

CREATE TABLE IF NOT EXISTS `articles` (
  `articleID` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `title` varchar(50) DEFAULT NULL,
  `body` text,
  `created` datetime DEFAULT NULL,
  `modified` datetime DEFAULT NULL,
  `userID` int(10) unsigned NOT NULL,
  `tagID` int(10) unsigned NOT NULL,
  `commentID` int(10) unsigned NOT NULL,
  PRIMARY KEY (`articleID`),
  KEY `userID` (`userID`),
  KEY `tagID` (`tagID`),
  KEY `commentID` (`commentID`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `articles`
--

INSERT INTO `articles` (`articleID`, `title`, `body`, `created`, `modified`, `userID`, `tagID`, `commentID`) VALUES
(1, 'DFGD', 'DFGDBFGNJD', NULL, NULL, 3, 3, 3),
(2, 'A title once again', 'And the article body follows.', '2015-11-05 19:23:09', NULL, 1, 1, 1),
(3, 'Title strikes back', 'This is really exciting! Not.', '2015-11-05 19:23:09', NULL, 2, 2, 2);

-- --------------------------------------------------------

--
-- Table structure for table `comments`
--

CREATE TABLE IF NOT EXISTS `comments` (
  `commentID` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `approved` tinyint(1) DEFAULT NULL,
  `userID` int(10) unsigned DEFAULT NULL,
  `articleID` int(10) unsigned DEFAULT NULL,
  `body` text,
  `created` datetime DEFAULT NULL,
  `modified` datetime DEFAULT NULL,
  PRIMARY KEY (`commentID`),
  KEY `userID` (`userID`),
  KEY `articleID` (`articleID`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `comments`
--

INSERT INTO `comments` (`commentID`, `approved`, `userID`, `articleID`, `body`, `created`, `modified`) VALUES
(1, 1, 1, 1, 'This is the Comment', '2015-11-23 08:43:31', NULL),
(2, 0, 1, 2, 'And the comment follows.', '2015-11-23 08:43:31', NULL),
(3, 1, 3, 3, 'some comment', '2015-11-29 00:00:00', '2015-11-24 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `tags`
--

CREATE TABLE IF NOT EXISTS `tags` (
  `tagID` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `tagName` varchar(50) NOT NULL,
  `articalID` int(10) unsigned NOT NULL,
  `userID` int(10) unsigned NOT NULL,
  `created` datetime NOT NULL,
  `modified` datetime NOT NULL,
  PRIMARY KEY (`tagID`),
  KEY `articalID` (`articalID`),
  KEY `userID` (`userID`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=6 ;

--
-- Dumping data for table `tags`
--

INSERT INTO `tags` (`tagID`, `tagName`, `articalID`, `userID`, `created`, `modified`) VALUES
(1, 'c++', 1, 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(2, 'java', 2, 2, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(3, 'java', 2, 2, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(4, 'c', 3, 3, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(5, 'c', 3, 3, '0000-00-00 00:00:00', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `userID` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `username` varchar(50) DEFAULT NULL,
  `password` varchar(255) DEFAULT NULL,
  `role` varchar(20) DEFAULT NULL,
  `articleID` int(10) unsigned DEFAULT NULL,
  `commentID` int(10) unsigned DEFAULT NULL,
  `created` datetime DEFAULT NULL,
  PRIMARY KEY (`userID`),
  KEY `articleID` (`articleID`),
  KEY `commentID` (`commentID`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`userID`, `username`, `password`, `role`, `articleID`, `commentID`, `created`) VALUES
(1, 'user1', '123456', 'user', 1, 1, NULL),
(2, 'user2', '123456', 'admin', NULL, NULL, NULL),
(3, 'user3', '123456', 'user', 2, 2, NULL),
(4, 'user3', '123456', 'user', 3, 3, NULL);

--
-- Constraints for dumped tables
--

--
-- Constraints for table `articles`
--
ALTER TABLE `articles`
  ADD CONSTRAINT `articles_ibfk_1` FOREIGN KEY (`userID`) REFERENCES `users` (`userID`),
  ADD CONSTRAINT `articles_ibfk_2` FOREIGN KEY (`tagID`) REFERENCES `tags` (`tagID`),
  ADD CONSTRAINT `articles_ibfk_3` FOREIGN KEY (`commentID`) REFERENCES `comments` (`commentID`);

--
-- Constraints for table `comments`
--
ALTER TABLE `comments`
  ADD CONSTRAINT `comments_ibfk_1` FOREIGN KEY (`userID`) REFERENCES `users` (`userID`),
  ADD CONSTRAINT `comments_ibfk_2` FOREIGN KEY (`articleID`) REFERENCES `articles` (`articleID`);

--
-- Constraints for table `tags`
--
ALTER TABLE `tags`
  ADD CONSTRAINT `tags_ibfk_1` FOREIGN KEY (`userID`) REFERENCES `users` (`userID`),
  ADD CONSTRAINT `tags_ibfk_2` FOREIGN KEY (`articalID`) REFERENCES `articles` (`articleID`);

--
-- Constraints for table `users`
--
ALTER TABLE `users`
  ADD CONSTRAINT `users_ibfk_1` FOREIGN KEY (`articleID`) REFERENCES `articles` (`articleID`),
  ADD CONSTRAINT `users_ibfk_2` FOREIGN KEY (`commentID`) REFERENCES `comments` (`commentID`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
