-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Oct 06, 2022 at 02:36 PM
-- Server version: 10.4.25-MariaDB
-- PHP Version: 8.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `cars`
--

-- --------------------------------------------------------

--
-- Table structure for table `cars`
--

CREATE TABLE `cars` (
  `id` int(3) NOT NULL,
  `car_name` varchar(20) NOT NULL,
  `car_image` blob NOT NULL,
  `car_price` int(20) NOT NULL,
  `car_description` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `cars`
--

INSERT INTO `cars` (`id`, `car_name`, `car_image`, `car_price`, `car_description`) VALUES
(5, 'Aston Martin', 0x6173746f6e206d617274696e2e6a7067, 200, 'Aston Martin\'s vision is to be the world\'s most desirable, ultra-luxury British brand, creating the most exquisitely addictive performance cars. Founded in 1913 by Lionel Martin and Robert Bamford, Aston Martin is acknowledged as an iconic global brand synonymous with style, luxury, performance, and exclusivity.'),
(6, 'Aventador', 0x6176656e7461646f722e6a7067, 500, 'The Lamborghini Aventador (Spanish pronunciation: [aβentaˈðoɾ]) is a mid-engine sportscar produced by the Italian automotive manufacturer Lamborghini'),
(7, 'Ford Mustang', 0x666f72645f6d757374616e672e6a7067, 300, 'Currently in its sixth generation, it is the fifth-best selling Ford car nameplate. The namesake of the \"pony car\" automobile segment, the Mustang was developed as a highly styled line of sporty coupes and convertibles derived from existing model lines, initially distinguished by \"long hood, short deck\" proportions.'),
(8, 'GTR', 0x4754522e6a7067, 700, 'The Nissan GT-R (Japanese: 日産・GT-R, Nissan GT-R), is a high-performance sports car and grand tourer produced by Nissan, unveiled in 2007.'),
(9, 'Mercedes SUV', 0x4d65726365646573205355562e6a7067, 900, 'There’s a Mercedes-Benz SUV for every family, every adventure, and every style. Explore the wide range of models to choose from. Pioneering Safety Systems. See Our Vehicle Range. 125+ Years of Innovation. The Best or Nothing. Models: A-Class, B-Class, C-Class'),
(10, 'NIssan Skyline', 0x6e697373616e20736b796c696e652e6a7067, 500, 'The Skyline GT-R became the flagship of Nissan performance, showcasing many advanced technologies including the ATTESA E-TS All-wheel drive system and the Super-HICAS four-wheel steering. Today, the car is popular for import drag racing, circuit track, time attack and events hosted by tuning magazines.'),
(11, 'Porche 911', 0x706f726368653931312e6a7067, 500, 'The Porsche 911 (pronounced Nine Eleven or in German: Neunelfer) is a two-door 2+2 high performance rear-engined sports car introduced in September 1964 by Porsche AG of Stuttgart, Germany. It has a rear-mounted flat-six engine and originally a torsion bar suspension.'),
(12, 'Subaru BRZ', 0x7375626172752062727a2e6a7067, 200, 'The 2023 Subaru BRZ features a powerful 2.4-liter direct-injection SUBARU BOXER engine; a track-tuned suspension; a lightweight, rigid chassis; and a standard 6-speed manual transmission.'),
(13, 'Toyota GR', 0x546f796f74612047522e6a7067, 300, 'The Toyota GR Yaris is a performance-oriented variant of the XP210 series Yaris supermini/subcompact hatchback, in a segment commonly called the hot hatch.');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `cars`
--
ALTER TABLE `cars`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `cars`
--
ALTER TABLE `cars`
  MODIFY `id` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
