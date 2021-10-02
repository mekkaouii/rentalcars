-- phpMyAdmin SQL Dump
-- version 5.0.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 02, 2021 at 04:20 AM
-- Server version: 10.4.14-MariaDB
-- PHP Version: 7.2.34

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `rental cars`
--

-- --------------------------------------------------------

--
-- Table structure for table `cars`
--

CREATE TABLE `cars` (
  `id` int(11) NOT NULL,
  `image` text NOT NULL,
  `brand` varchar(30) NOT NULL,
  `price` int(11) NOT NULL,
  `description` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `cars`
--

INSERT INTO `cars` (`id`, `image`, `brand`, `price`, `description`) VALUES
(1, 'https://www.turbo.fr/sites/default/files/styles/slideshow_images/public/slideshow/slides/2020-03/5e5e4738d942c.jpg?itok=JpiALkM7', 'AUDI A3', 250, 'the fourth generation Audi A3. Sportier, more dynamic, this compact 5-door is full of new features on the exterior (light signature, large singleframe grille, etc.), as well as on the interior (digital instrumentation, infotainment system, etc.).'),
(2, 'https://cdn.car-recalls.eu/wp-content/uploads/2021/04/Mercedes-Benz-A-Class-2020-isofix.jpg', 'Mercedes A-Class', 200, 'With the 2020 A-class, the sole engine choice is a turbocharged 2.0-liter four-cylinder that generates 188 horsepower and 221 lb-ft of torque. Front-wheel drive is standard with the A220, while the A220 4Matic adds all-wheel drive. A seven-speed dual-clutch automatic transmission handles the gear shifts.'),
(8, 'https://images.caradisiac.com/logos-ref/modele/modele--renault-clio-5/S0-modele--renault-clio-5.jpg', 'clio 5', 150, 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Nemo reprehenderit dolorum culpa, officiis inventore commodi aperiam dolor ducimus ea?');

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

CREATE TABLE `login` (
  `id` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `login`
--

INSERT INTO `login` (`id`, `username`, `password`) VALUES
(1, 'admin', 'adminpass'),
(2, 'admin2', 'adminpass2');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `cars`
--
ALTER TABLE `cars`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `login`
--
ALTER TABLE `login`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `cars`
--
ALTER TABLE `cars`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `login`
--
ALTER TABLE `login`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
