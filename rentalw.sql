-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Feb 16, 2018 at 07:45 PM
-- Server version: 10.1.16-MariaDB
-- PHP Version: 7.0.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `rentalw`
--

-- --------------------------------------------------------

--
-- Table structure for table `books`
--

CREATE TABLE `books` (
  `Ad_id` int(11) NOT NULL,
  `Ad_user_id` int(11) DEFAULT NULL,
  `Ad_title` varchar(255) DEFAULT NULL,
  `Ad_desc` varchar(255) DEFAULT NULL,
  `Ad_price` int(11) DEFAULT NULL,
  `Ad_image_path` varchar(255) DEFAULT NULL,
  `user_name` varchar(255) DEFAULT NULL,
  `user_phone` varchar(255) DEFAULT NULL,
  `user_email` varchar(255) DEFAULT NULL,
  `user_city` varchar(255) DEFAULT NULL,
  `Ad_date` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `books`
--

INSERT INTO `books` (`Ad_id`, `Ad_user_id`, `Ad_title`, `Ad_desc`, `Ad_price`, `Ad_image_path`, `user_name`, `user_phone`, `user_email`, `user_city`, `Ad_date`) VALUES
(1, 7, 'text', '200 pages book . Giving on rental basis of rent 2000', 200, 'images1/image_2016-10-03-23-11-12_57f2c9700b983.jpg', 'devashish bote', '8896789909', 'devab87@gmail.com', 'Nashik', '2016-10-03 14:11:12'),
(3, 4, 'Drawing Board', 'Drawing board is in good condition and 5 months old.You can use it in exams .Rent is also reasonable.You can call me on this number : 8805918089', 50, 'images1/image_2016-10-04-08-37-54_57f34e4247028.jpg', 'Animesh Bote', '9421947009', 'boteanimesh97@gmail.com', 'Wai', '2016-10-03 23:37:54'),
(4, 4, 'Drafter', 'Drafter is in good condition and totally new.You can use it in graphics drawing.Rent is also reasonable.You can call me on this number : 8805918089', 50, 'images1/image_2016-10-04-08-40-29_57f34edd1f645.jpg', 'Akshay Bande', '8805918089', 'akshaybande81@gmail.com', 'Pune', '2016-10-03 23:40:29'),
(5, 4, 'Drafter', 'new', 50, 'images1/image_2016-10-04-10-23-53_57f3671a0a065.jpg', 'Animesh Bote', '8805918089', 'akshaybande81@gmail.com', 'Pune', '2016-10-04 01:23:54');

-- --------------------------------------------------------

--
-- Table structure for table `electronics`
--

CREATE TABLE `electronics` (
  `Ad_id` int(11) NOT NULL,
  `Ad_user_id` int(11) DEFAULT NULL,
  `Ad_title` varchar(255) DEFAULT NULL,
  `Ad_desc` varchar(255) DEFAULT NULL,
  `Ad_price` int(11) DEFAULT NULL,
  `Ad_image_path` varchar(255) DEFAULT NULL,
  `user_name` varchar(255) DEFAULT NULL,
  `user_phone` varchar(255) DEFAULT NULL,
  `user_email` varchar(255) DEFAULT NULL,
  `user_city` varchar(255) DEFAULT NULL,
  `Ad_date` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `electronics`
--

INSERT INTO `electronics` (`Ad_id`, `Ad_user_id`, `Ad_title`, `Ad_desc`, `Ad_price`, `Ad_image_path`, `user_name`, `user_phone`, `user_email`, `user_city`, `Ad_date`) VALUES
(2, 4, 'Laptop Hp Pavelion', 'Laptop is in good condition and 5 months old.You can do your day to day work on the laptop.Rent is also reasonable.You can call me on this number : 8805918089', 500, 'images1/image_2016-10-04-07-55-29_57f344514c049.jpg', 'Devashish bote', '8805918089', 'devab87@gmail.com', 'Pune', '2016-10-03 22:55:29'),
(3, 4, 'Headphone-Bose', 'Headphone is in good condition and 5 months old.You can use it to listen music.Rent is also reasonable.You can call me on this number : 8805918089', 200, 'images1/image_2016-10-04-07-57-57_57f344e5ce262.jpg', 'Animesh bote', '8805918089', 'boteanimesh97@gmail.com', 'mumbai', '2016-10-03 22:57:57'),
(4, 4, 'Laptop-Samsang', 'Laptop is in good condition and 5 months old.You can do your day to day work on the laptop.Rent is also reasonable.You can call me on this number : 8805918089', 600, 'images1/image_2016-10-04-07-58-50_57f3451ac3c40.jpg', 'Akshay Bande', '8805918089', 'boteanimesh97@gmail.com', 'Amaravati', '2016-10-03 22:58:50'),
(5, 4, 'Headphone', 'Headphone is in good condition and 5 months old.You can listen music.Rent is also reasonable.You can call me on this number : 8805918089', 60, 'images1/image_2016-10-04-08-00-03_57f34563f17a8.jpg', 'Akshay Bande', '8805918089', 'boteanimesh97@gmail.com', 'Pune', '2016-10-03 23:00:03');

-- --------------------------------------------------------

--
-- Table structure for table `flats`
--

CREATE TABLE `flats` (
  `Ad_id` int(11) NOT NULL,
  `Ad_user_id` int(11) DEFAULT NULL,
  `Ad_title` varchar(255) DEFAULT NULL,
  `Ad_desc` varchar(255) DEFAULT NULL,
  `Ad_price` int(11) DEFAULT NULL,
  `Ad_image_path` varchar(255) DEFAULT NULL,
  `user_name` varchar(255) DEFAULT NULL,
  `user_phone` varchar(255) DEFAULT NULL,
  `user_email` varchar(255) DEFAULT NULL,
  `user_city` varchar(255) DEFAULT NULL,
  `Ad_date` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `mobiles`
--

CREATE TABLE `mobiles` (
  `Ad_id` int(11) NOT NULL,
  `Ad_user_id` int(11) DEFAULT NULL,
  `Ad_title` varchar(255) DEFAULT NULL,
  `Ad_desc` varchar(255) DEFAULT NULL,
  `Ad_price` int(11) DEFAULT NULL,
  `Ad_image_path` varchar(255) DEFAULT NULL,
  `user_name` varchar(255) DEFAULT NULL,
  `user_phone` varchar(255) DEFAULT NULL,
  `user_email` varchar(255) DEFAULT NULL,
  `user_city` varchar(255) DEFAULT NULL,
  `Ad_date` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `mobiles`
--

INSERT INTO `mobiles` (`Ad_id`, `Ad_user_id`, `Ad_title`, `Ad_desc`, `Ad_price`, `Ad_image_path`, `user_name`, `user_phone`, `user_email`, `user_city`, `Ad_date`) VALUES
(1, 7, 'iphone', '3 months old iphone!!!', 80000, 'images1/image_2016-10-03-22-42-05_57f2c29d8d20a.jpg', 'ankita D', '8890007659', 'boteanimesh97@gmail.com', 'Pune', '2016-10-03 13:42:05'),
(6, 4, 'Videocon', 'Videocon is in good condition and 5 months old.You can do your day to day work on the Device.Rent is also reasonable.You can call me on this number : 8805918089', 400, 'images1/image_2016-10-04-08-31-35_57f34cc771022.jpg', 'Ankita Darekar', '8805991112', 'darekar.ankita61@gmail.com', 'Baramati', '2016-10-03 23:31:35'),
(7, 4, 'Samsung Mobile', 'Mobile is in good condition and 5 months old.You can do your day to day work on the device.Rent is also reasonable.You can call me on this number : 8805918089', 200, 'images1/image_2016-10-04-08-33-43_57f34d47d84ed.jpg', 'Purvesh Chithore', '8805918089', 'pchithore@gmail.com', 'Pune', '2016-10-03 23:33:43');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_users`
--

CREATE TABLE `tbl_users` (
  `user_id` int(11) NOT NULL,
  `user_GUID` varchar(32) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(32) NOT NULL,
  `entry_date` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_users`
--

INSERT INTO `tbl_users` (`user_id`, `user_GUID`, `email`, `password`, `entry_date`) VALUES
(3, '88a731078ae196ee0d3a0474f3b39c32', 'anib@gmail.com', 'abcd123', '2016-09-18 10:48:01'),
(4, '2385a965de1f2357a4d27b8eb841358e', 'boteanimesh99@gmail.com', 'abc', '2016-09-20 08:08:10'),
(5, 'd9b95ed8b0115e554aaef1592a1c56f4', 'akshaybande81@gmail.com', 'abc', '2016-09-21 21:57:38'),
(6, 'adc1dcbd9c5b1a4a2596ce340362be3b', 'b.pritam07@gmail.com', 'pritam', '2016-10-03 03:54:40'),
(7, '74f73ccb01602e5ef0227eb3cf21d263', 'anki@gmail.com', 'ank', '2016-10-03 13:40:10'),
(8, '47467e4d620f98aed8df6c05e4adfdbe', 'boteanimesh97@gmail.com', 'akshay123', '2016-10-03 22:12:55'),
(9, '07ba25b56a33602aeedbc12fa649d415', 'pratik999@123.com', 'pk9696', '2016-10-03 23:59:51'),
(10, '2d0aa3b537ff72491d9328c2e8ecc8b4', 'boteanimesh9@gmail.com', 'animesh', '2016-10-30 10:47:21');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_user_profile`
--

CREATE TABLE `tbl_user_profile` (
  `profile_id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) DEFAULT NULL,
  `user_id` int(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_user_profile`
--

INSERT INTO `tbl_user_profile` (`profile_id`, `name`, `user_id`) VALUES
(1, 'ani', 3),
(2, 'devashish', 4),
(3, 'akshay', 5),
(4, 'pritam', 6),
(5, 'anki', 7),
(6, 'Akshay Bande', 8),
(7, 'pratik', 9),
(8, 'Animesh Bote', 10);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `books`
--
ALTER TABLE `books`
  ADD PRIMARY KEY (`Ad_id`);

--
-- Indexes for table `electronics`
--
ALTER TABLE `electronics`
  ADD PRIMARY KEY (`Ad_id`);

--
-- Indexes for table `flats`
--
ALTER TABLE `flats`
  ADD PRIMARY KEY (`Ad_id`);

--
-- Indexes for table `mobiles`
--
ALTER TABLE `mobiles`
  ADD PRIMARY KEY (`Ad_id`);

--
-- Indexes for table `tbl_users`
--
ALTER TABLE `tbl_users`
  ADD PRIMARY KEY (`user_id`);

--
-- Indexes for table `tbl_user_profile`
--
ALTER TABLE `tbl_user_profile`
  ADD PRIMARY KEY (`profile_id`),
  ADD KEY `user_id` (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `books`
--
ALTER TABLE `books`
  MODIFY `Ad_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `electronics`
--
ALTER TABLE `electronics`
  MODIFY `Ad_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `flats`
--
ALTER TABLE `flats`
  MODIFY `Ad_id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `mobiles`
--
ALTER TABLE `mobiles`
  MODIFY `Ad_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT for table `tbl_users`
--
ALTER TABLE `tbl_users`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
--
-- AUTO_INCREMENT for table `tbl_user_profile`
--
ALTER TABLE `tbl_user_profile`
  MODIFY `profile_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `tbl_user_profile`
--
ALTER TABLE `tbl_user_profile`
  ADD CONSTRAINT `tbl_user_profile_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `tbl_users` (`user_id`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
