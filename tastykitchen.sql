-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 24, 2022 at 11:45 AM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 8.0.19

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `tastykitchen`
--

-- --------------------------------------------------------

--
-- Table structure for table `contact`
--

CREATE TABLE `contact` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `message` varchar(100) NOT NULL,
  `sent_date` datetime NOT NULL,
  `is_deleted` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `contact`
--

INSERT INTO `contact` (`id`, `name`, `email`, `message`, `sent_date`, `is_deleted`) VALUES
(1, 'Yasiru', 'yasiru', '$yasiru', '0000-00-00 00:00:00', 0),
(2, 'Yasiru', 'yasiru', 'yasiru', '0000-00-00 00:00:00', 0),
(3, '', '', '', '0000-00-00 00:00:00', 0),
(4, 'Sihil', 'Sihil@2gmail.com', 'PHP patta bn', '0000-00-00 00:00:00', 0),
(5, 'Hash', 'hash@2gmail.com', 'Hari Winodai', '0000-00-00 00:00:00', 0);

-- --------------------------------------------------------

--
-- Table structure for table `nutrients`
--

CREATE TABLE `nutrients` (
  `id` int(11) NOT NULL,
  `food` varchar(15) NOT NULL,
  `fat` varchar(15) NOT NULL,
  `carb` varchar(15) NOT NULL,
  `protein` varchar(15) NOT NULL,
  `calories` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `nutrients`
--

INSERT INTO `nutrients` (`id`, `food`, `fat`, `carb`, `protein`, `calories`) VALUES
(1, 'Pizza', '100g', '100g', '20g', 150),
(2, 'Kottu', '150g', '180g', '20g', 250),
(3, 'Noodles', '150g', '100g', '40g', 80),
(4, 'Fried Rice', '80g', '130g', '50g', 35),
(5, 'Mutten Curry', '40g', '300g', '100g', 65),
(6, 'Mango Juice', '5g', '2g', '10g', 5),
(7, 'Chocolate Cake', '35g', '65g', '20g', 45),
(19, 'aaa', 'aaaa', 'aaaa', 'aaa', 10),
(20, 'bbb', 'bbbb', 'bbbb', 'bbbb', 10);

-- --------------------------------------------------------

--
-- Table structure for table `promotion`
--

CREATE TABLE `promotion` (
  `id` int(11) NOT NULL,
  `percentage` varchar(5) NOT NULL,
  `image` varchar(200) NOT NULL,
  `oldprice` varchar(10) NOT NULL,
  `promoprice` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `promotion`
--

INSERT INTO `promotion` (`id`, `percentage`, `image`, `oldprice`, `promoprice`) VALUES
(23, '40%', ' ../images/Document - Google Chrome 4_14_2022 1_09_51 AM.png', ' Rs: 200.0', '100'),
(24, '40%', ' ../images/39700551364_963fd63205_k.jpg', ' Rs: 200.0', 'Rs: 100.00'),
(25, '10%', ' ../images/Chicken-Nuggets.jpg', ' 200.00', '200.00'),
(26, '20%', ' ../images/Chicken-Shawarma_09_1200x1200-720x540-1 (1).jpg', ' Rs: 200.0', 'Rs : 100.0');

-- --------------------------------------------------------

--
-- Table structure for table `recipedetails`
--

CREATE TABLE `recipedetails` (
  `recipeId` int(11) NOT NULL,
  `rec_name` varchar(50) NOT NULL,
  `rec_preTime` varchar(10) NOT NULL,
  `rec_cookTime` varchar(10) NOT NULL,
  `rec_diflevel` varchar(10) NOT NULL,
  `rec_serves` int(4) NOT NULL,
  `rec_category` varchar(10) NOT NULL,
  `rec_price` varchar(10) NOT NULL,
  `rec_img` varchar(200) NOT NULL,
  `rec_ingr` varchar(1500) NOT NULL,
  `rec_desc` varchar(1500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `recipedetails`
--

INSERT INTO `recipedetails` (`recipeId`, `rec_name`, `rec_preTime`, `rec_cookTime`, `rec_diflevel`, `rec_serves`, `rec_category`, `rec_price`, `rec_img`, `rec_ingr`, `rec_desc`) VALUES
(15, 'Ice Cream', '60 min', '120 min', 'medium', 6, 'Desert', 'Rs: 200.00', '../images/ice cream,.webp', 'Ice Cream', 'Ice Cream'),
(16, 'Mango Juice', '15 min', '15 min', 'easy', 4, 'Beve', 'Rs:100.00', '../images/mango-juice.webp', 'Mango', 'Mango'),
(17, 'Pasta', '30 min', '30 min', 'medium', 4, 'Main', 'Rs: 300.00', '../images/Classic-Red-Sauce-Pasta-SQ.jpg', 'Pasta', 'Pasta'),
(18, 'Falooda', '30 min', '15 min', 'easy', 10, 'Beve', 'Rs : 200.0', '../images/Falooda.jpg', 'Falooda', 'Falooda'),
(20, 'chicken fried rice', '30 min ', ' 10 min ', 'hard ', 4, 'Main', ' Rs:600', '../images/cfr 2.jpg', 'Cooked rice ,carrot, leaks, eggs, chicken, salt, pepper, cocconut oil', 'cook and mix well'),
(21, 'italian pizza', '10 min', '15 min', 'medium', 4, 'Other', 'Rs:800', '../images/pizza.jpg', 'flour, tomato paste, cheese, black olives, pepper and salt', 'bake'),
(22, ' stuffed garlic bread', '10 min', '10 min', 'easy', 2, 'Other', 'Rs:200', '../images/stuffed-garlic-bread-recipe-a.jpg', 'bread, garlic paste', 'bake'),
(23, 'lasagna', '30 min', '15 min', 'medium', 4, 'Other', 'Rs:500', '../images/lasagna.jpg', 'lasagna sheet, milk, red wine, flour, meats, spices', 'bake'),
(24, 'coconut roti', '5 min', '10 min', 'easy', 2, 'Other', 'Rs: 200.00', '../images/roti.jpg', 'coconut, flour, salt', 'bake'),
(25, 'parotta', '30 min', '10 min', 'easy', 6, 'Main', 'Rs: 300.00', '../images/images.jpg', 'pain flour , egg and salt', 'parotta'),
(26, 'ulundu wadei', '30 min ', ' 10 min ', 'easy ', 8, 'Other', ' Rs: 200.0', '../images/Medu-Vada-0-750x500.jpg', 'ulundu flour, curry leaves, onion and salt', 'deep fry'),
(27, 'biriyani', '60 min', '30 min', 'hard', 10, 'Main', 'Rs:900', '../images/Ambur-Chicken-Biriyani.jpg', 'cooked rice, spices, meats, coriander, biriyani coloring', 'cooked and mix well'),
(28, 'watalappan', '30 min', '30 min', 'medium', 8, 'Desert', 'Rs: 200.00', '../images/sri-lankan-watalappan.jpg', 'coconut milk, kithul jaggery, cashews', 'bake well'),
(29, 'chicken wings', '10 min', '10 min', 'easy', 4, 'Snaks', 'Rs: 300.00', '../images/featured-baked-chicken-wings-reshoot.jpg', 'chicken', 'deep fry'),
(30, 'lemon juice', '5 min', '5 min', 'easy', 2, 'Beve', 'Rs:100', '../images/fit640_lemon-juice-fresh.jpg', 'lemon, water, salt, sugar', 'mix well'),
(31, 'ramen noodles soup', '30 min', '10 min', 'medium', 4, 'Soup', 'Rs: 250.00', '../images/190208-delish-ramen-horizontal-093-1550096715.jpg', 'ramen noodles, boiled egg, leaks, spices', 'cooked well'),
(33, 'Shawarma', '10 min', '10 min', 'easy', 4, 'Snaks', 'Rs:250.00', '../images/Chicken-Shawarma_09_1200x1200-720x540-1 (1).jpg', 'pain flour, chicken, cheese, hot sauce, tomato sauce', 'wrap and bake'),
(34, 'Tacos', '10 min', '5 min', 'easy', 2, 'Snaks', 'Rs:150.00', '../images/1520956952-chicken-tacos-horizontal.jpg', 'ground beef, cheddar cheese, tomato sauce, taco shell, chili powder', 'wrap and bake'),
(35, 'Chopsuey rice', '10 min', '30 min', 'hard', 6, 'Main', 'Rs:600.00', '../images/39700551364_963fd63205_k.jpg', 'boiled vegetable, cooked rice, egg, chicken', 'fry and mix well'),
(36, 'Chicken nuggets', '10 min', '10 min', 'easy', 2, 'Snaks', 'Rs: 200.00', '../images/Chicken-Nuggets.jpg', 'boneless chicken, purpose flour, egg, black pepper', 'season and deep fry');

-- --------------------------------------------------------

--
-- Table structure for table `userdetails`
--

CREATE TABLE `userdetails` (
  `userId` int(11) NOT NULL,
  `firstName` varchar(30) NOT NULL,
  `lastName` varchar(30) NOT NULL,
  `userName` varchar(30) NOT NULL,
  `email` varchar(30) NOT NULL,
  `gender` varchar(8) NOT NULL,
  `passw` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `userdetails`
--

INSERT INTO `userdetails` (`userId`, `firstName`, `lastName`, `userName`, `email`, `gender`, `passw`) VALUES
(1, 'Hashan', 'Perera', 'Hash21', 'vhprabhathperera222@gmail.com', 'on', 'Prabhath@2'),
(3, 'Vasath', 'Perera', 'vasa44', 'vasath.v@gmail.com', 'Male', 'Vasath@2'),
(4, 'Sihil', 'Rashmika', 'Sihil123', 'sihil@gmail.com', 'Male', 'Sihil123'),
(5, 'Admin', 'User', 'Admin', 'admin@tastykitchen.com', 'Male', 'Admin@123'),
(6, 'Erandana', 'Perera', 'Era123', 'era@gmail.com', 'Male', 'Era@123');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `contact`
--
ALTER TABLE `contact`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `nutrients`
--
ALTER TABLE `nutrients`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `promotion`
--
ALTER TABLE `promotion`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `recipedetails`
--
ALTER TABLE `recipedetails`
  ADD PRIMARY KEY (`recipeId`);

--
-- Indexes for table `userdetails`
--
ALTER TABLE `userdetails`
  ADD PRIMARY KEY (`userId`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `contact`
--
ALTER TABLE `contact`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `nutrients`
--
ALTER TABLE `nutrients`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `promotion`
--
ALTER TABLE `promotion`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;

--
-- AUTO_INCREMENT for table `recipedetails`
--
ALTER TABLE `recipedetails`
  MODIFY `recipeId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=37;

--
-- AUTO_INCREMENT for table `userdetails`
--
ALTER TABLE `userdetails`
  MODIFY `userId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
