-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Dec 22, 2016 at 08:49 PM
-- Server version: 10.1.19-MariaDB
-- PHP Version: 7.0.13

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_mvc`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbl_catergory`
--

CREATE TABLE `tbl_catergory` (
  `id` int(11) NOT NULL,
  `cat_name` varchar(50) NOT NULL,
  `title` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_catergory`
--

INSERT INTO `tbl_catergory` (`id`, `cat_name`, `title`) VALUES
(8, 'Test', 'TestCategory'),
(9, 'Nation', 'NationCategory'),
(10, 'Category', 'Category One'),
(15, 'International', 'International Category');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_color`
--

CREATE TABLE `tbl_color` (
  `id` int(11) NOT NULL,
  `color` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_color`
--

INSERT INTO `tbl_color` (`id`, `color`) VALUES
(1, '#e4caff');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_post`
--

CREATE TABLE `tbl_post` (
  `id` int(11) NOT NULL,
  `post_title` varchar(255) NOT NULL,
  `post_content` text NOT NULL,
  `category` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_post`
--

INSERT INTO `tbl_post` (`id`, `post_title`, `post_content`, `category`) VALUES
(1, 'Post Title go here First', '<p>First Post Content Go here.First Post Content Go here.First Post Content Go here.First Post Content Go here.First Post Content Go here.First Post Content Go here.First Post Content Go here.First Post Content Go here.First Post Content Go here.First Post Content Go here.First Post Content Go here.First Post Content Go here.</p>\r\n<p>First Post Content Go here.First Post Content Go here.First Post Content Go here.First Post Content Go here.First Post Content Go here.First Post Content Go here.First Post Content Go here.First Post Content Go here.First Post Content Go here.First Post Content Go here.First Post Content Go here.First Post Content Go here.</p>', 9),
(2, 'Second Post Title Will go here', '<p>Second Post Content Go here.First Post Content Go here.First Post Content Go here.First Post Content Go here.First Post Education Content Go here.First Post Content Go here.First Post Content Go here.First Post Content Go here.First Post Content Go here.First Post Content Go here.First Post Content Go here.First Post Content Go here.</p>\r\n\r\n<p>Second Post Content Go here.First Post Content Go here.First Post Content Go here.First Post Content Go here.First Post Content Go here.First Post Content Go here.First Post Content Go here.First Post Content Go here.First Post Content Go here.First Post Content Go here.First Post Content Go here.First Post Content Go here.</p>', 8),
(3, 'Third  Post Title go here First', '<p>Third Post Content Go here.First Post Content Go here.First Post Content Go here.First Post Content Go here.First Post Content Go here.First Post Content Go here.First Post Content Go here.First Post Content Go here.First Post Content Go here.First Post Content Go here.First Post Content Go here.First Post Content Go here.</p>\r\n<p>Third Post Content Go here.First Post Content Go here.First Post Content Go here.First Post Content Go here.First Post Content Go here.First Post Content Go here.First Post Content Go here.First Post Content Go here.First Post Content Go here.First Post Content Go here.First Post Content Go here.First Post Content Go here.</p>', 10),
(4, 'Fourth Post Title Will go here', '<p>Fourth Post Content Go here.First Post Content Go here.First Post Content Go here.First Post Content Go here.First Post Content Go here.First Post Content Go here.First Post Content Go here.First Post Content Go here.First Post Content Go here.First Post Content Go here.First Post Content Go here.First Post Content Go here.</p>\r\n\r\n<p>Fourth Post Content Go here.First Post Content Go here.First Post Content Go here.First Post Content Go here.First Post Content Go here.First Post Content Go here.First Post Content Go here.First Post Content Go here.First Post Content Go here.First Post Content Go here.First Post Content Go here.First Post Content Go here.</p>', 15),
(9, 'International Post will go here', '<p>International Post will go hereInternational Post will go hereInternational Post will go hereInternational Post will go hereInternational Post will go hereInternational Post will go hereInternational Post will go hereInternational Post will go hereInternational Post will go hereInternational Post will go here</p>', 8),
(11, 'This is Post After Validation first', '<p>This is Post After Validation first This is Post After ValidationThis is Post After ValidationThis is Post After ValidationThis is Post After ValidationThis is Post After ValidationThis is Post After ValidationThis is Post After ValidationThis is Post After ValidationThis is Post After ValidationThis is Post After ValidationThis is Post After ValidationThis is Post After ValidationThis is Post After ValidationThis is Post After ValidationThis is Post After ValidationThis is Post After ValidationThis is Post After ValidationThis is Post After ValidationThis is Post After ValidationThis is Post After ValidationThis is Post After ValidationThis is Post After ValidationThis is Post After ValidationThis is Post After Validation</p>\r\n\r\n<p>&quot;</p>', 9);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_user`
--

CREATE TABLE `tbl_user` (
  `id` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(32) NOT NULL,
  `level` int(11) NOT NULL DEFAULT '2'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_user`
--

INSERT INTO `tbl_user` (`id`, `username`, `password`, `level`) VALUES
(1, 'admin', '202cb962ac59075b964b07152d234b70', 1),
(2, 'author', '202cb962ac59075b964b07152d234b70', 2),
(3, 'Contributor', '202cb962ac59075b964b07152d234b70', 3);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbl_catergory`
--
ALTER TABLE `tbl_catergory`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_color`
--
ALTER TABLE `tbl_color`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_post`
--
ALTER TABLE `tbl_post`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_user`
--
ALTER TABLE `tbl_user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbl_catergory`
--
ALTER TABLE `tbl_catergory`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;
--
-- AUTO_INCREMENT for table `tbl_color`
--
ALTER TABLE `tbl_color`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `tbl_post`
--
ALTER TABLE `tbl_post`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
--
-- AUTO_INCREMENT for table `tbl_user`
--
ALTER TABLE `tbl_user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
