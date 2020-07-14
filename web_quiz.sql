-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 14, 2020 at 11:29 AM
-- Server version: 10.4.13-MariaDB
-- PHP Version: 7.4.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `web_quiz`
--

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE `category` (
  `id` int(5) NOT NULL,
  `cat_name` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`id`, `cat_name`) VALUES
(1, 'HTML'),
(2, 'DBMS'),
(3, 'OS'),
(4, 'NETWORKING');

-- --------------------------------------------------------

--
-- Table structure for table `questions`
--

CREATE TABLE `questions` (
  `id` int(10) NOT NULL,
  `ques` varchar(100) NOT NULL,
  `answer1` varchar(100) NOT NULL,
  `answer2` varchar(100) NOT NULL,
  `answer3` varchar(100) NOT NULL,
  `answer4` varchar(100) NOT NULL,
  `correct_ans` int(4) NOT NULL,
  `cat_id` int(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `questions`
--

INSERT INTO `questions` (`id`, `ques`, `answer1`, `answer2`, `answer3`, `answer4`, `correct_ans`, `cat_id`) VALUES
(1, 'What does HTML stand for?\r\n\r\n', 'Hyper text Markup language', 'Home Tool Markup Language', 'Hyperlinks and Text Markup Language', 'None of these', 0, 1),
(2, 'Which attribute specifies a unique alphanumeric identifier to be associated with an element?', 'class', 'id', 'article', 'html', 1, 1),
(3, 'The _____________ attribute specifies an inline style associated with an element, which determines t', 'dir', 'style', 'class', 'article', 1, 1),
(4, 'Which attribute is used to provide an advisory text about an element or its contents?', 'tooltip', 'dir', 'title', 'head', 2, 1),
(5, 'The __________ attribute sets the text direction as related to the lang attribute.', 'lang', 'sub', 'dir', 'ds', 2, 1),
(6, 'Which of the following is the attribute that specifies the column name from the data source object t', 'dataFormatAs', 'datafld', 'disabled', 'datasrc', 1, 1);

-- --------------------------------------------------------

--
-- Table structure for table `signup`
--

CREATE TABLE `signup` (
  `id` int(20) NOT NULL,
  `name` varchar(30) NOT NULL,
  `email` varchar(30) NOT NULL,
  `pass` varchar(255) NOT NULL,
  `img` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `signup`
--

INSERT INTO `signup` (`id`, `name`, `email`, `pass`, `img`) VALUES
(1, 'gk', 'abc@gmail.com', '1234', 'IMG_20200324_210643.jpg'),
(2, 'gourav', 'abcd@gmail.com', '1234', 'p1.jpg'),
(3, 'gourav kumar', 'gouravraj7668@gmail.com', '123456789', 'IMG-20200330-WA0017.jpg'),
(4, 'ravindra', 'xyz@gmail.com', '123', '1152px-Gutenberg_Bible,_Lenox_Copy,_New_York_Public_Library,_2009._Pic_01.jpg');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `questions`
--
ALTER TABLE `questions`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `signup`
--
ALTER TABLE `signup`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `category`
--
ALTER TABLE `category`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `questions`
--
ALTER TABLE `questions`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `signup`
--
ALTER TABLE `signup`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
