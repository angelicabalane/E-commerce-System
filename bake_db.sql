-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 25, 2025 at 12:33 PM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `bake_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `cart`
--

CREATE TABLE `cart` (
  `id` int(100) NOT NULL,
  `user_id` int(100) NOT NULL,
  `name` varchar(100) NOT NULL,
  `price` int(100) NOT NULL,
  `quantity` int(100) NOT NULL,
  `image` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `cart`
--

INSERT INTO `cart` (`id`, `user_id`, `name`, `price`, `quantity`, `image`) VALUES
(72, 4, 'Cheese Monay', 123, 3, '9.jpg'),
(73, 4, 'Baguette', 108, 1, '7.jpg'),
(74, 1, 'Almond Croissant', 118, 9, '6.jpg'),
(77, 7, 'Apple Crumble Danish', 120, 1, 'AppleCrumbleDanish_590x.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `id` int(100) NOT NULL,
  `user_id` int(100) NOT NULL,
  `name` varchar(100) NOT NULL,
  `number` varchar(12) NOT NULL,
  `email` varchar(100) NOT NULL,
  `method` varchar(50) NOT NULL,
  `address` varchar(500) NOT NULL,
  `total_products` varchar(1000) NOT NULL,
  `total_price` int(100) NOT NULL,
  `placed_on` varchar(50) NOT NULL,
  `payment_status` varchar(20) NOT NULL DEFAULT 'pending',
  `order_status` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`id`, `user_id`, `name`, `number`, `email`, `method`, `address`, `total_products`, `total_price`, `placed_on`, `payment_status`, `order_status`) VALUES
(12, 1, 'Marinela Joy Apolonio Ibay', '09952351704', 'majapolonio@gmail.com', 'cash on delivery', 'Block 76 Lot 6, Phase 3 Package 3, Caloocan City, Philippines - 1428', ', apple crumble danish (3) ', 330, '19-May-2023', 'pending', ''),
(13, 1, 'Angelica Jean Arida Balane', '09279424391', 'angelicajeanbalane@gmail.com', 'cash on delivery', 'Block 75 Lot 32, Phase 2 Package 3, Caloocan City, Philippines - 1428', ', Ube Cheese Pandesal (1) , Garlic Toast (1) ', 473, '19-May-2023', 'completed', ''),
(14, 1, 'Jurilaine HErera PAcamara', '09488833118', 'jurilaine@gmail.com', 'cash on delivery', '12, asfd, Caloocan City, Philippines - 1428', ', Apple Crumble Danish (4) , Baguette (4) ', 872, '19-May-2023', 'completed', ''),
(15, 5, 'Daisy Domenden Apolonio', '09095297489', 'ysaidapple@gmail.com', 'credit card', 'Block 76 Lot 6, Phase 3 Package 3, Caloocan City, Philippines - 1428', ', Cheese Monay (10) ', 1230, '25-May-2023', 'completed', ''),
(16, 7, '', '', '', 'standard shipping', '', 'Apple Crumble Danish (1) ', 120, '09-Mar-2025', 'completed', '');

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` int(100) NOT NULL,
  `name` varchar(100) NOT NULL,
  `description` varchar(200) NOT NULL,
  `price` decimal(10,2) NOT NULL,
  `image` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `name`, `description`, `price`, `image`) VALUES
(1, 'Almond Croissant', ' The classic version of the breakfast pastry with a sweet almond filling or frangipane swirled throughout the dough and topped with toasted almonds baked right into the top.', 125.00, 'Almond Croissant.jpg'),
(2, 'Apple Crumble Danish', 'Layers of rich, buttery French pastry baked with spiced Australian grown apples, hazelnut custard topped with white chocolate and coconut crumble.', 120.00, 'AppleCrumbleDanish_590x.jpg'),
(3, 'Apple Turnover', 'Buttery, flaky puff pastry wrapped around an irresistibly caramelly apple filling.', 118.00, 'Apple Turnover.jpg'),
(4, 'Baguette', 'A long, thin loaf of French bread that is commonly made from the basic lean dough.', 115.00, 'Baguette.jpg'),
(5, 'Belgian Chocolate Chip', 'These chips hold their form in the oven and have the lovely intense cocoa-meets-milky-caramel taste of Belgian milk chocolate.', 105.00, 'Belgian Chocolate Chip.jpg'),
(6, 'Blueberry Danish', 'This Blueberry Danish is made with a flaky puff pastry dough, a cream cheese mixture and fresh blueberries.', 120.00, 'Blueberry Danish.jpg'),
(7, 'Blueberry Muffin', 'They’re extra buttery, soft, and moist. For that bakery style goodness, top with cinnamon brown sugar streusel.', 78.00, 'Blueberry muffin.jpg'),
(8, 'Butter Stick', 'These Butter Bread Stick coated with sugar are very crusty and full of buttery fragrance.', 65.00, 'butter stick.jpg'),
(9, 'Cheese Monay', 'Also known as Pan de Monja, is a classic Filipino bread with a slightly sweet taste and dense texture. Delicious with jam or butter!', 135.00, 'Cheese monay.jpg'),
(10, 'Chocolate Palmier', 'These Chocolate Palmiers are a flaky and buttery French pastry that\'s perfect for satisfying your sweet tooth. Rolled with a generous amount of rich chocolate filling and sprinkled with powdered sugar', 90.00, 'Chocolate Palmier.jpg'),
(11, 'Dark Choco Chip', 'Dark chocolate chips are dark brown to black colored, small chocolate chunks in the shape of teardrop with flat bases.', 105.00, 'Dark Chocolate Chip.jpg'),
(12, 'English Muffin', 'English Muffin Bread has all the same nooks and crannies as your favorite English muffins in a sliceable bread form.', 125.00, 'English muffi_.jpg'),
(13, 'French Sourdough Bread', 'Is a beloved and traditional bread with distinct characteristics. It is known for its deep sourdough flavor, chewy crust, open crumb, and moderately dense texture.', 165.00, 'French Sourdough Bread.jpg'),
(14, 'Garlic Toast', 'It consists of bread, topped with garlic and occasionally olive oil or butter and may include additional herbs, such as oregano or chives.', 270.00, 'garlic toast.jpg'),
(15, 'Ham and Cheese Bun', 'These easy ham and cheese buns combine soft buttery milk bread with sliced ham and perfectly melty cheese.', 80.00, 'Ham and Cheese Bun.jpg'),
(16, 'Hopia Monggo', ' Is deliciously thin, flaky and filled with bean paste. ', 125.00, 'hopia mongo.jpg'),
(17, 'Parisian Macaroon (5s)', 'A delicate meringue-based cookie sandwich made primarily from egg whites, almond four, and sugar.  ', 125.00, 'parisianmacaronbox_c9c1f2a2-7df3-4823-bcd8-f36c9cadac45_590x.jpg'),
(18, 'Pinoy Pandesal (10s)', 'A popular yeast-raised bread in the Philippines.  ', 25.00, 'Pinoy Pandesal.jpg'),
(19, 'Pizza Bun', 'These from-scratch buns are made with homemade pizza dough that\'s stuffed with pizza sauce, mozzarella cheese, and pepperoni.', 72.00, 'Pizza bun.jpg'),
(20, 'Sans Rival', 'A Filipino dessert cake made of layers of buttercream, meringue and chopped cashews.', 110.00, 'Sansrival_590x.png'),
(21, 'Soft Cinnamon Roll', 'A sweet baked dough filled with a cinnamon-sugar filling', 78.00, 'CinnamonRolls_590x.png'),
(22, 'Tuna Turnover', 'Flaky and delicious puff pastry filled with a flavorful and creamy tuna goodness.', 130.00, 'Tuna Turnover.jpg'),
(23, 'Ube Cheese Pandesal (6s)', 'They are deliciously soft and pillowy with melty cheese filling.', 235.00, 'Ube Cheese Pandesal.jpg'),
(24, 'Vol Au Vent Shell', 'A small hollow case of puff pastry', 75.00, 'Vol au vent shell.jpg'),
(25, 'Whole Wheat Loaf', 'Made up of whole wheat flour which makes it a healthier alternative to the usual white bread.', 160.00, 'Whole wheat loaf.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(100) NOT NULL,
  `firstname` varchar(100) NOT NULL,
  `middlename` varchar(100) NOT NULL,
  `lastname` varchar(100) NOT NULL,
  `birthday` varchar(100) NOT NULL,
  `age` int(100) NOT NULL,
  `gender` enum('sg','f','m','r') NOT NULL,
  `contactnumber` varchar(11) NOT NULL,
  `housenumber` varchar(100) NOT NULL,
  `streetname` varchar(100) NOT NULL,
  `barangay` int(3) NOT NULL,
  `city` varchar(100) NOT NULL,
  `region` enum('sr','one','two','three','ncr','foura','fourb','five','six','seven','eight','nine','ten','eleven','twelve','thirteen','car','barmm') NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `user_type` varchar(20) NOT NULL DEFAULT 'user'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `firstname`, `middlename`, `lastname`, `birthday`, `age`, `gender`, `contactnumber`, `housenumber`, `streetname`, `barangay`, `city`, `region`, `email`, `password`, `user_type`) VALUES
(1, 'Marinela Joy', 'Apolonio', 'Ibay', '2002-10-26', 20, 'f', '09952351704', 'Block 76 Lot 6', 'Phase 3 Package 3', 176, 'Caloocan City', 'ncr', 'majapolonio@gmail.com', '6796770dfc7eed04d3c796fe2c2dcc97', 'user'),
(2, 'Manuellie Joy', 'Apolonio', 'Ibay', '2009-03-02', 14, 'f', '09460070608', 'Block 76 Lot 6', 'Phase 3 Package 3', 176, 'Caloocan City', 'ncr', 'manuellieibay@gmail.com', '25d55ad283aa400af464c76d713c07ad', 'user'),
(4, 'Jean', 'Arida', 'Balane', '2002-09-05', -5, 'f', '09279424391', 'Block 75 Lot 32', 'Phase 2 Package 3', 176, 'Caloocan City', 'ncr', 'jeanbalane@gmail.com', '25d55ad283aa400af464c76d713c07ad', 'user'),
(5, 'Daisy', 'Domenden', 'Apolonio', '1978-11-15', 45, 'f', '09095297489', 'Block 76 Lot 6', 'Phase 3 Package 3', 176, 'Caloocan City', 'ncr', 'ysaidapple@gmail.com', '6796770dfc7eed04d3c796fe2c2dcc97', 'user'),
(6, 'Manuel', 'Bermudez', 'Ibay', '1967-03-10', 55, 'm', '09090989123', 'Block 76 Lot 6', 'Phase 3 Package 3', 176, 'Caloocan City', 'ncr', 'manuel1967@gmail.com', '6796770dfc7eed04d3c796fe2c2dcc97', 'admin'),
(7, 'Joy', 'Apolonio', 'Ibay', '2002-10-24', 22, 'f', '09075645255', 'Block 76 Lot 6', 'Phase 3 Package 3', 176, 'Caloocan City', 'ncr', 'majapolonio@gmail.com', 'e88dc46b66f991334e0b18d8ce6c99f1', 'user'),
(8, 'Billy', 'Apolonio', 'Ibay', '2021-12-28', 4, 'm', '09123456789', 'Block 76 Lot 6', 'Phase 3 Package 3', 176, 'Caloocan City', 'ncr', 'anieprintingshop@gmail.com', 'd2264bb12cc5ec97aadf76530754ac21', 'admin');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `cart`
--
ALTER TABLE `cart`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `cart`
--
ALTER TABLE `cart`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=78;

--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
