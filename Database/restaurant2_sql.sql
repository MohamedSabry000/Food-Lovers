-- phpMyAdmin SQL Dump
-- version 4.6.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 29, 2017 at 07:04 AM
-- Server version: 5.7.14
-- PHP Version: 5.6.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `restaurant2.sql`
--

-- --------------------------------------------------------

--
-- Table structure for table `for_us`
--

CREATE TABLE `for_us` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `telephone` int(11) NOT NULL,
  `message` text NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `for_us`
--

INSERT INTO `for_us` (`id`, `name`, `email`, `telephone`, `message`) VALUES
(1, 'mohamed', 'm@gmail.com', 1091837581, 'good night');

-- --------------------------------------------------------

--
-- Table structure for table `list_food`
--

CREATE TABLE `list_food` (
  `id` int(11) NOT NULL,
  `pic_src` varchar(255) NOT NULL,
  `food_name` varchar(255) NOT NULL,
  `food_catigory` varchar(255) NOT NULL,
  `food_restaurant` varchar(255) NOT NULL,
  `food_prise` int(11) NOT NULL,
  `about_food` text NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `list_food`
--

INSERT INTO `list_food` (`id`, `pic_src`, `food_name`, `food_catigory`, `food_restaurant`, `food_prise`, `about_food`) VALUES
(1, 'images/desserts/dessert2.jpg', 'dessert', 'desserts', 'Food Lovers', 200, 'This is delicious meal'),
(2, 'images/breakfast/breakfast3.jpg', 'bread1', 'breakfast', 'Food Lovers', 100, 'good'),
(3, 'images/breakfast/breakfast1.jpg', 'bread2', 'breakfast', 'Food Lovers', 50, 'good'),
(4, 'images/breakfast/breakfast2.jpg', 'bread3', 'breakfast', 'Food Lovers', 30, 'good'),
(5, 'images/entree/entree1.jpg', 'soab', 'entree', 'Food Lovers', 10, 'great'),
(6, 'images/entree/entree2.jpg', 'soap 1', 'entree', 'Food Lovers', 140, 'good'),
(7, 'images/entree/entree3.jpg', 'soap2', 'entree', 'Food Lovers', 70, 'waw'),
(8, 'images/salads/salad.png', 'salad1', 'salads', 'Food Lovers', 10, 'welldone'),
(9, 'images/salads/salad2.jpg', 'salad2', 'salads', 'Food Lovers', 10, 'good'),
(10, 'images/salads/salad3.jpg', 'salad3', 'salads', 'Food Lovers', 15, 'wow'),
(11, 'images/rice/rice3.jpg', 'rise1', 'rice', 'Food Lovers', 15, 'good'),
(12, 'images/rice/rice2.jpg', 'rise2', 'rice', 'Food Lovers', 10, 'wow'),
(13, 'images/rice/rice1.jpg', 'rise3', 'rice', 'Food Lovers', 14, 'fail'),
(14, 'images/pasta/pasta.png', 'pasta1', 'pasta', 'Food Lovers', 12, 'good'),
(15, 'images/pasta/pasta2.jpg', 'pasta2', 'pasta', 'Food Lovers', 14, 'verey good'),
(16, 'images/pasta/pasta3.jpg', 'pasta3', 'pasta', 'Food Lovers', 17, 'wow'),
(17, 'images/pizza/pizza3.jpg', 'pizza1', 'pizza', 'Food Lovers', 10, 'good'),
(18, 'images/pizza/pizza.jpg', 'pizza2', 'pizza', 'Food Lovers', 10, 'good'),
(29, 'images/pizza/pizza3.jpg', 'pizza3', 'pizza', 'Food Lovers', 15, 'good'),
(20, 'images/desserts/dessert1.jpg', 'dessert1', 'desserts', 'Food Lovers', 10, 'well'),
(21, 'images/desserts/dessert2.jpg', 'dessert2', 'desserts', 'Food Lovers', 17, 'wow'),
(22, 'images/desserts/dessert3.jpg', 'dessert3', 'desserts', 'Food Lovers', 100, 'wow'),
(23, 'images/desserts/dessert3.jpg', 'dessert3', 'desserts', 'Food Lovers', 12, 'well'),
(24, 'images/drinks/drinks1.jpg', 'drink1', 'drinks', 'Food Lovers', 10, 'good'),
(25, 'images/drinks/drinks2.jpg', 'drink2', 'drinks', 'Food Lovers', 17, 'good'),
(27, '30176.jpg', 'mohamed', 'c', 'c', 14, 'hi'),
(28, '84578.jpg', 'Meal', 'c', 'c', 123, 'good'),
(30, 'uploads/', 'mohamed', 'c', 'c', 12, 'well'),
(31, 'uploads/', 'mohamed', 'c', 'c', 12, 'well'),
(32, 'uploads/', 'mohamed', 'c', 'c', 12, 'well'),
(33, 'images/all_meals/3sdWZ31-free-backgrounds-nature.jpg', 'mohamed', 'c', 'c', 12, 'good'),
(34, 'images/all_meals/15541066_980780588733088_2577800472478806277_o.jpg', 'salad4', 'c', 'c', 10, 'good'),
(35, 'salad4', 'salad4', 'c', 'c', 12, 'good'),
(36, 'images/all_meals/111.jpg', 'mohamed', 'c', 'c', 10, 'good');

-- --------------------------------------------------------

--
-- Table structure for table `owner`
--

CREATE TABLE `owner` (
  `id` int(11) NOT NULL,
  `name` varchar(30) NOT NULL,
  `password` varchar(255) NOT NULL,
  `telephone` varchar(30) NOT NULL,
  `email` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `owner`
--

INSERT INTO `owner` (`id`, `name`, `password`, `telephone`, `email`) VALUES
(1, 'Mohamed', '1235', '124', 'm@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `fname` varchar(255) CHARACTER SET utf8 NOT NULL,
  `lname` varchar(255) NOT NULL,
  `telephone` varchar(30) NOT NULL,
  `str_number` int(11) NOT NULL,
  `str_name` varchar(255) NOT NULL,
  `city` varchar(255) NOT NULL,
  `country` varchar(255) NOT NULL,
  `post_code` varchar(30) NOT NULL,
  `email` varchar(30) NOT NULL,
  `order_ids` varchar(255) NOT NULL,
  `total_price` int(11) NOT NULL,
  `time` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `fname`, `lname`, `telephone`, `str_number`, `str_name`, `city`, `country`, `post_code`, `email`, `order_ids`, `total_price`, `time`) VALUES
(9, 'hatem', 'basuoni', '01091837581', 6, 'barakat', 'toukh', 'qalupia', '+20', 'mohamed.fadah456@gmail.com', 'from function', 0, '2017-08-25 23:28:12'),
(10, 'mohamed', 'sabry', '01091837581', 0, 'k', 'k', 'k', '+20', 'mohamed.fadah456@gmail.com', 'from function', 0, '2017-08-25 23:31:10'),
(11, 'g', 'f', '0', 7, 'f', 'f', 't', '+20', 'mohamed.fadah456@gmail.com', '5,6,7', 0, '2017-08-25 23:35:23'),
(12, 'mohamed', 'sabry', '01091837581', 8, 'c', 'c', 'c', '+20', 'mohamed.fadah456@gmail.com', '20,21', 27, '2017-08-26 00:11:42'),
(13, 'ÙØ§', 'Ø³Ø¨', '5', 5, 'Ø«Ù‚', 'Ø³Ø¨', 'Ù‚', '+20', 'm@gmail.com', '2,3,4', 180, '2017-08-26 10:17:53'),
(14, 'mohamed123', 'sabry', '01091837581', 12, 'm', 'm', 'm', '+20', 'mohamed.fadah456@gmail.com', '14,15,16,15,15,14,15,15,15,15,15,15,15', 181, '2017-08-26 11:56:24');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `for_us`
--
ALTER TABLE `for_us`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `list_food`
--
ALTER TABLE `list_food`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `owner`
--
ALTER TABLE `owner`
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
-- AUTO_INCREMENT for table `for_us`
--
ALTER TABLE `for_us`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `list_food`
--
ALTER TABLE `list_food`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=45;
--
-- AUTO_INCREMENT for table `owner`
--
ALTER TABLE `owner`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
