-- phpMyAdmin SQL Dump
-- version 4.9.7
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Sep 29, 2023 at 10:39 AM
-- Server version: 8.0.30
-- PHP Version: 7.3.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `liamwyli_articles`
--

-- --------------------------------------------------------

--
-- Table structure for table `articles`
--

CREATE TABLE `articles` (
  `article_id` int NOT NULL,
  `main_image` varchar(64) COLLATE utf8mb4_general_ci NOT NULL,
  `short_description` varchar(32) COLLATE utf8mb4_general_ci NOT NULL DEFAULT 'Article Image',
  `category` varchar(32) COLLATE utf8mb4_general_ci NOT NULL,
  `sub_category` varchar(32) COLLATE utf8mb4_general_ci NOT NULL,
  `title` varchar(64) COLLATE utf8mb4_general_ci NOT NULL,
  `read_time` tinyint NOT NULL,
  `article_body` varchar(128) COLLATE utf8mb4_general_ci NOT NULL,
  `author` varchar(32) COLLATE utf8mb4_general_ci NOT NULL,
  `author_avatar` varchar(64) COLLATE utf8mb4_general_ci NOT NULL,
  `date_posted` datetime DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `articles`
--

INSERT INTO `articles` (`article_id`, `main_image`, `short_description`, `category`, `sub_category`, `title`, `read_time`, `article_body`, `author`, `author_avatar`, `date_posted`) VALUES
(2, 'img/latest-news/placeholder.png', 'Article Image', 'web', '', 'This is a dummy entry', 0, 'This is a dummy entry, hopefully youre not seeing this', '', '', '2022-01-01 00:00:00'),
(3, 'img/latest-news/placeholder.png', 'Article Image', 'web', '', 'This is a dummy entry', 0, 'This is a dummy entry, hopefully youre not seeing this', '', '', '2022-01-01 00:00:00'),
(4, 'img/latest-news/placeholder.png', 'Article Image', 'web', '', 'This is a dummy entry', 0, 'This is a dummy entry, hopefully youre not seeing this', '', '', '2022-01-01 00:00:00'),
(5, 'img/latest-news/receptionist-dKHK.jpg', 'Receptionist Vacancy Norfolk', 'Career', 'Web Design', 'Temporary Role - Receptionist', 0, 'Salary Range £21,000-£23,000 per annum Hours 40 hours per week, Mon - Fri Location Wymondham, Norfol...', 'Bethany Shakespeare', 'img/latest-news/bethany-shakespeare-F6Iu.jpg', '2023-07-14 00:00:00'),
(6, 'img/latest-news/up-building-products-U0Oi.png', 'UP Building Products case study', 'Case Studies', 'Digital Marketing', 'UP Building Products - Web Case ', 5, 'The ClientUP Building Products are a leading supplier of UPVC building materials across the UK. Stoc...', '', '', '2023-07-11 00:00:00'),
(7, 'img/latest-news/the-green-team-VG1Q.png', 'Reducing our carbon footprint', 'Environmental News', 'Web Design', 'The Green Team Reducing Our Carbon Footprint - Part 3', 0, 'Netmatters is continuously striving to become more environmentally friendly, diminish our carbon emi...', '', '', '2023-07-10 00:00:00');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `articles`
--
ALTER TABLE `articles`
  ADD PRIMARY KEY (`article_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `articles`
--
ALTER TABLE `articles`
  MODIFY `article_id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
