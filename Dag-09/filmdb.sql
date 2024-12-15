-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Värd: localhost:8889
-- Tid vid skapande: 15 dec 2024 kl 13:37
-- Serverversion: 8.0.35
-- PHP-version: 8.2.20

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Databas: `filmdb`
--

-- --------------------------------------------------------

--
-- Tabellstruktur `films`
--

CREATE TABLE `films` (
  `id` int NOT NULL,
  `title` varchar(100) NOT NULL,
  `price` int NOT NULL,
  `image` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3;

--
-- Dumpning av Data i tabell `films`
--

INSERT INTO `films` (`id`, `title`, `price`, `image`) VALUES
(1, 'Braveheart', 35, 'braveheart.jpg'),
(2, 'Matrix', 30, 'matrix.jpg'),
(3, 'fight club', 25, 'fight-club.jpg'),
(5, 'Goldeneye', 20, 'goldeneye.jpg');

-- --------------------------------------------------------

--
-- Tabellstruktur `orders`
--

CREATE TABLE `orders` (
  `ordernummer` int NOT NULL,
  `artikelnummer` int NOT NULL,
  `customer_email` varchar(100) NOT NULL,
  `orderdatum` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3;

--
-- Dumpning av Data i tabell `orders`
--

INSERT INTO `orders` (`ordernummer`, `artikelnummer`, `customer_email`, `orderdatum`) VALUES
(1, 2, 'ttest@test', '2024-12-15 11:58:18');

--
-- Index för dumpade tabeller
--

--
-- Index för tabell `films`
--
ALTER TABLE `films`
  ADD PRIMARY KEY (`id`);

--
-- Index för tabell `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`ordernummer`);

--
-- AUTO_INCREMENT för dumpade tabeller
--

--
-- AUTO_INCREMENT för tabell `films`
--
ALTER TABLE `films`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT för tabell `orders`
--
ALTER TABLE `orders`
  MODIFY `ordernummer` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
