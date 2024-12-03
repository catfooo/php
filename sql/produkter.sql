-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Värd: localhost:8889
-- Tid vid skapande: 01 dec 2024 kl 13:44
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
-- Databas: `projekt`
--

-- --------------------------------------------------------

--
-- Tabellstruktur `produkter`
--

CREATE TABLE `produkter` (
  `id` int NOT NULL,
  `artikelnummer` int NOT NULL,
  `produktnamn` varchar(255) NOT NULL,
  `pris` int NOT NULL,
  `beskrivning` varchar(255) NOT NULL,
  `bildnamn` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3;

--
-- Dumpning av Data i tabell `produkter`
--

INSERT INTO `produkter` (`id`, `artikelnummer`, `produktnamn`, `pris`, `beskrivning`, `bildnamn`) VALUES
(1, 101, 'bröd', 3, 'äta när hungrig', '01.ico'),
(2, 102, 'vatten flaska', 2, 'dricka när törstig', '02.ico'),
(3, 103, 'täcke', 5, 'engångstäcke för att sova', '03.ico'),
(4, 104, 'godis', 2, 'när man är ledsen', '04.ico'),
(5, 105, 'drömfångare', 5, 'undvik madröm(eller få madröm!)', '05.ico'),
(6, 106, 'pajama', 3, 'sova lite', '06.ico'),
(7, 107, 'mössa', 2, 'det hjälper att sömnar', '07.ico'),
(8, 108, 'kudde', 3, 'så mjuk så sova bättre', '08.ico'),
(9, 109, 'elstad', 2, 'sova varmt', '09.ico'),
(10, 110, 'hus', 10, 'natt i huset(engång)?', '10.ico');

--
-- Index för dumpade tabeller
--

--
-- Index för tabell `produkter`
--
ALTER TABLE `produkter`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT för dumpade tabeller
--

--
-- AUTO_INCREMENT för tabell `produkter`
--
ALTER TABLE `produkter`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
