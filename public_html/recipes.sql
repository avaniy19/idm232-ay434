-- phpMyAdmin SQL Dump
-- version 4.9.7
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Dec 09, 2022 at 11:28 PM
-- Server version: 5.7.23-23
-- PHP Version: 7.4.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `avaniyat_production_idm232`
--

-- --------------------------------------------------------

--
-- Table structure for table `recipes`
--

CREATE TABLE `recipes` (
  `id` int(11) NOT NULL,
  `recipe_title` varchar(255) NOT NULL,
  `image_path` varchar(250) NOT NULL,
  `description` varchar(250) NOT NULL,
  `servings` varchar(255) NOT NULL,
  `total_time` varchar(250) NOT NULL,
  `ingredients` varchar(10000) NOT NULL,
  `instructions` varchar(10000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `recipes`
--

INSERT INTO `recipes` (`id`, `recipe_title`, `image_path`, `description`, `servings`, `total_time`, `ingredients`, `instructions`) VALUES
(1, 'Seafood Paella', 'dist/images/1.jpeg', 'Paella is a traditional Spanish dish that looks and tastes quite impressive, so your guests will never guess you threw everything into one skillet.', '6', '1hr 35min', '<p>1/3 c. extra virgin olive oil</p>\r\n<p>8 oz. (16 to 20 ct.) peeled, deveined shrimp </p>\r\n<p>8 oz. squid (bodies), rinsed, patted dry and sliced\r\n</p>\r\n<p>Kosher salt</p>\r\n<p>1 medium onion, finely chopped\r\n</p>\r\n<p>1 can (14 oz.) fire-roasted diced tomatoes, drained\r\n</p>\r\n<p>3 cloves garlic, chopped\r\n</p>\r\n1 1/2 c. Arborio rice\r\n</p>\r\n<p>3 1/2 c. seafood broth\r\n</p>\r\n<p>1 8-oz bottle clam juice\r\n</>\r\n<p>12 littleneck clams, scrubbed\r\n</>\r\n<p>Parsley and lemon wedges, for garnish\r\n</p>', '<p>1. In a 12-inch cast iron skillet, heat oil on medium-high until hot but not smoking. Add the shrimp, squid and a pinch of salt. Cook 2 minutes or until the shrimp start to brown, stirring once. With a slotted spoon, transfer to a medium bowl.</p>\r\n<p>2. Reduce heat to medium. Add the onion and tomatoes. Cook 8 minutes, stirring often. Add the garlic; cook 2 minutes. Add the rice; cook 2 minutes, stirring.</p>\r\n<p>3. To the skillet, add the broth and clam juice, stirring to distribute rice evenly in the pan. Heat to boiling on medium-high. Boil, without stirring, 15 minutes. Nestle the shrimp, squid and clams on top of the rice. Cover the skillet with a lid or foil; cook another 10 to 16 minutes or until the clams open and the rice is just tender. Remove from heat. Let stand, covered, 10 minutes before serving. Garnish with parsley and lemons.</p>');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `recipes`
--
ALTER TABLE `recipes`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `recipes`
--
ALTER TABLE `recipes`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
