-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 25, 2017 at 12:15 PM
-- Server version: 10.1.28-MariaDB
-- PHP Version: 7.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `bookshelf`
--

-- --------------------------------------------------------

--
-- Table structure for table `book`
--

CREATE TABLE `book` (
  `isbn` varchar(200) NOT NULL,
  `title` varchar(250) NOT NULL,
  `author` varchar(150) NOT NULL,
  `rating` int(11) NOT NULL,
  `genre` varchar(50) NOT NULL,
  `language` varchar(100) NOT NULL,
  `total_page` int(11) NOT NULL,
  `summary` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `book`
--

INSERT INTO `book` (`isbn`, `title`, `author`, `rating`, `genre`, `language`, `total_page`, `summary`) VALUES
('AC1', '13 reasons why', 'Jay Asher', 4, 'Young adult fiction', 'English', 288, 'It is the story of a young high school student as she descends into despair brought on by betrayal and bullying, culminating with her suicide.'),
('AC2', 'Mithoskria', 'Kishor pasha emon', 4, 'MYSTRY', 'Bengali', 300, 'Detective Asif tries to solve the biggest murder case of a famous scientist. When he tries to do that, more than one shocking information come from the investigation.'),
('AC3', 'PS I Love You', 'Cecelia Ahern', 3, 'Romance', 'English', 400, 'A novel about holding on, letting go, and learning to love again.'),
('AC4', 'Sesher Kobita', 'Robindronath Tagore', 5, 'Romance', 'Bengali', 100, 'The novel recounts the love story of Amit Ray,a barrister educated at Oxford.He meets Labannya in a car accident..'),
('AC5', 'The Da Vinci Code', 'Dan Brown', 3, 'Mystery', 'English', 400, 'A fascinating and absorbing thrillr ,perfect for history buffs,conspiracy nuts,puzzle lovers or anyone who appreciates a great,riveting story..'),
('AC6', 'Sense and Sensibility', 'Jane Austin', 4, 'Fiction', 'English', 100, 'When Elinor and Marianne Dashwood and their mother are unfairly swindled out of their family inheritance they are forced ..');

-- --------------------------------------------------------

--
-- Table structure for table `bookshelf`
--

CREATE TABLE `bookshelf` (
  `id` int(11) NOT NULL,
  `email` varchar(100) NOT NULL,
  `isbn` varchar(200) NOT NULL,
  `shelf` varchar(100) NOT NULL,
  `review` text NOT NULL,
  `start_date` date NOT NULL,
  `finished_date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `bookshelf`
--

INSERT INTO `bookshelf` (`id`, `email`, `isbn`, `shelf`, `review`, `start_date`, `finished_date`) VALUES
(10, 'jasia@gmail.com', 'AC6', 'currently reading', 'Enter your review..', '2017-12-04', '0000-00-00'),
(11, 'jasia@gmail.com', 'AC4', 'read', 'It was a very nicely written book. ', '2017-11-06', '2017-12-03'),
(12, 'jasia@gmail.com', 'AC2', 'want to read', 'Enter your review..', '0000-00-00', '0000-00-00'),
(13, 'jasia@gmail.com', 'AC3', 'read', 'This is one of the best romance books ever.', '2017-02-14', '2017-03-08'),
(14, 'tahia@yahoo.com', 'AC3', 'want to read', 'Enter your review..', '0000-00-00', '0000-00-00'),
(15, 'tahia@yahoo.com', 'AC2', 'want to read', 'Enter your review..', '0000-00-00', '0000-00-00'),
(16, 'tahia@yahoo.com', 'AC6', 'want to read', 'Enter your review..', '0000-00-00', '0000-00-00');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(10) UNSIGNED NOT NULL,
  `fname` varchar(30) NOT NULL,
  `lname` varchar(50) NOT NULL,
  `email` varchar(100) NOT NULL,
  `pw` text NOT NULL,
  `gender` varchar(7) NOT NULL,
  `image` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `fname`, `lname`, `email`, `pw`, `gender`, `image`) VALUES
(1, 'jasia', 'islam', 'jasia@gmail.com', '1234', 'female', 'trrProjectCakeMadeBySir.jpg'),
(2, 'syeda', 'lubaba', 'lubaba@gmail.com', '1234', 'female', 'me_eid_15.8.jpg'),
(3, 'tahia', 'naziba', 'tahia@yahoo.com', '1234', 'female', 'meCartoon.jpg'),
(4, '', '', '', '', '', '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `book`
--
ALTER TABLE `book`
  ADD PRIMARY KEY (`isbn`);

--
-- Indexes for table `bookshelf`
--
ALTER TABLE `bookshelf`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `bookshelf`
--
ALTER TABLE `bookshelf`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
