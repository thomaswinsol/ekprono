-- phpMyAdmin SQL Dump
-- version 4.6.4
-- https://www.phpmyadmin.net/
--
-- Host: fdb18.biz.nf
-- Gegenereerd op: 05 jun 2021 om 05:51
-- Serverversie: 5.7.20-log
-- PHP-versie: 5.5.38

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `2631859_thomas`
--

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `deelnemers`
--

CREATE TABLE `deelnemers` (
  `id` int(11) NOT NULL,
  `naam` text,
  `email` text,
  `timestamp` datetime DEFAULT NULL,
  `afdeling` int(1) DEFAULT NULL,
  `status` int(1) DEFAULT NULL,
  `betaald` int(1) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Gegevens worden geëxporteerd voor tabel `deelnemers`
--

INSERT INTO `deelnemers` (`id`, `naam`, `email`, `timestamp`, `afdeling`, `status`, `betaald`) VALUES
(85, 'Kris Planckaert', 'kris.planckaert@winsol.eu', '2021-06-03 18:39:01', 1, 1, 0),
(86, 'decroix kristof', 'kristof.decroix@winsol.eu', '2021-06-04 05:53:24', 1, 1, 0),
(87, 'VERVAECKE MIKE', 'mike.vervaecke@winsol.eu', '2021-06-04 06:13:36', 1, 1, 0),
(88, 'An Katrien Dejaeghere', 'ankatrien.dejaeghere@winsol.be', '2021-06-04 08:11:07', 1, 1, 0),
(89, 'Simon', 'simon.hemeryck@winsol.eu', '2021-06-04 10:31:56', 1, 1, 0),
(90, 'Thomas Vanhuysse', 'thomas.vanhuysse@winsol.eu', '2021-06-05 05:24:59', 1, 1, 0);

--
-- Indexen voor geëxporteerde tabellen
--

--
-- Indexen voor tabel `deelnemers`
--
ALTER TABLE `deelnemers`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT voor geëxporteerde tabellen
--

--
-- AUTO_INCREMENT voor een tabel `deelnemers`
--
ALTER TABLE `deelnemers`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=91;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
