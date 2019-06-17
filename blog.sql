-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Jun 18, 2019 at 01:10 AM
-- Server version: 10.1.13-MariaDB
-- PHP Version: 5.6.20

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `blog`
--

-- --------------------------------------------------------

--
-- Table structure for table `post`
--

CREATE TABLE `post` (
  `id` int(20) NOT NULL,
  `content` varchar(3000) NOT NULL,
  `username` varchar(255) NOT NULL,
  `date` varchar(255) NOT NULL,
  `images` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `post`
--

INSERT INTO `post` (`id`, `content`, `username`, `date`, `images`) VALUES
(2, 'this is a content', 'vaibhav@buccha188', '17/Jun/2019', 'Hydrangeas.jpg/Chrysanthemum.jpg/Desert.jpg/'),
(3, 'i am vaibhav buccha belongs to jaipur currently working at i-verve infoweb pvt. ltd.\r\nmy domain is php.', 'vaibhav@buccha188', '17/Jun/2019', 'Jellyfish.jpg/Koala.jpg/Tulips.jpg/'),
(4, 'The cool thing about gradients is the variety that are available â€“ gradients come in all shapes, sizes, colors. Youâ€™ll likely see the most common ones the most often: linear gradients and radial gradients. Weâ€™ve already talked a bit about CSS Linear Gradients, the most popular ', 'vaibhav@buccha188', '17/Jun/2019', 'Koala.jpg/Lighthouse.jpg/'),
(5, 'The cool thing about gradients is the variety that are available â€“ gradients come in all shapes, sizes, colors. Youâ€™ll likely see the most common ones the most often: linear gradients and radial gradients. Weâ€™ve already talked a bit about CSS Linear Gradients, the most popular ', 'vaibhav@buccha188', '17/Jun/2019', 'Hydrangeas.jpg/'),
(6, 'The cool thing about gradients is the variety that are available â€“ gradients come in all shapes, sizes, colors. Youâ€™ll likely see the most common ones the most often: linear gradients and radial gradients. Weâ€™ve already talked a bit about CSS Linear Gradients, the most popular ', 'vaibhav@buccha188', '18/Jun/2019', 'Desert.jpg/Hydrangeas.jpg/Jellyfish.jpg/Koala.jpg/'),
(7, 'The cool thing about gradients is the variety that are available â€“ gradients come in all shapes, sizes, colors. Youâ€™ll likely see the most common ones the most often: linear gradients and radial gradients. Weâ€™ve already talked a bit about CSS Linear Gradients, the most popular ', 'vaibhav@buccha188', '18/Jun/2019', 'Desert.jpg/Hydrangeas.jpg/Jellyfish.jpg/Koala.jpg/Lighthouse.jpg/Penguins.jpg/Tulips.jpg/'),
(8, 'The cool thing about gradients is the variety that are available â€“ gradients come in all shapes, sizes, colors. Youâ€™ll likely see the most common ones the most often: linear gradients and radial gradients. Weâ€™ve already talked a bit about CSS Linear Gradients, the most popular ', 'vaibhav@buccha188', '18/Jun/2019', '/'),
(12, ' The cool thing about gradients is the variety that are available â€“ gradients come in all shapes, sizes, colors. Youâ€™ll likely see the most common ones the most often: linear gradients and radial gradients. Weâ€™ve already talked a bit about CSS Linear Gradients, the most popular', 'Rajesh@Raval23', '18/Jun/2019', 'Hydrangeas.jpg/Penguins.jpg/Tulips.jpg/');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(300) NOT NULL,
  `password` varchar(400) NOT NULL,
  `dob` varchar(100) NOT NULL,
  `hobbies` varchar(300) NOT NULL,
  `gender` varchar(255) NOT NULL,
  `phone` varchar(10) NOT NULL,
  `country` varchar(100) NOT NULL,
  `username` varchar(100) NOT NULL,
  `image` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `name`, `email`, `password`, `dob`, `hobbies`, `gender`, `phone`, `country`, `username`, `image`) VALUES
(3, 'Vaibhav Buccha', 'jainvaibhav415@gmail.com', '234d0453a53aaa305f1932e5f421b280', '2019-09-08', 'Programing,Dancing', 'Male', '7340272191', 'India', 'vaibhav@buccha188', 'image/pic.jpg'),
(4, 'vishal', 'vishal@gmail.com', '7da42b28fc17e617095dbf4654187db2', '2019-06-17', 'Programing', 'Male', '5313541', 'India', 'vishal180', 'image/Tulips.jpg'),
(5, 'yukti mahobia', 'yukti@gmail.com', '9597960bc1b5140669ece116ae9cf696', '2019-06-18', 'Programing,Dancing', 'Female', '1234567890', 'Pakistan', 'yukti@mahobia23', 'image/Koala.jpg'),
(6, 'Rajesh Raval', 'rajeshraval792@gmail.com', 'cabf031d5e3dc279f3856ac9a4fdde7d', '2019-06-12', 'Programing', 'Male', '9913699728', 'India', 'Rajesh@Raval23', 'image/Penguins.jpg');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `post`
--
ALTER TABLE `post`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `post`
--
ALTER TABLE `post`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
