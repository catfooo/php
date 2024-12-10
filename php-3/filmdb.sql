-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Värd: localhost:8889
-- Tid vid skapande: 10 dec 2024 kl 13:33
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
(2, 'Matrix II', 40, 'matrix.jpg'),
(3, 'Fight Club', 15, 'fight-club.jpg'),
(4, 'Patrioten', 15, 'patrioten.jpg'),
(5, 'Goldeneye', 30, 'goldeneye.jpg'),
(6, 'Blair Witch Project', 25, 'blair-witch-project.jpg');

-- --------------------------------------------------------

--
-- Tabellstruktur `orders`
--

CREATE TABLE `orders` (
  `id` int NOT NULL,
  `film_id` int NOT NULL,
  `email` varchar(100) NOT NULL,
  `date` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3;

--
-- Dumpning av Data i tabell `orders`
--

INSERT INTO `orders` (`id`, `film_id`, `email`, `date`) VALUES
(1, 5, 'ww@ww', '2024-12-10 14:30:12');

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
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT för dumpade tabeller
--

--
-- AUTO_INCREMENT för tabell `films`
--
ALTER TABLE `films`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT för tabell `orders`
--
ALTER TABLE `orders`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
