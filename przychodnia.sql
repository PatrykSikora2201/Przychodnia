-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 10, 2021 at 08:19 AM
-- Server version: 10.4.19-MariaDB
-- PHP Version: 8.0.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `przychodnia`
--

-- --------------------------------------------------------

--
-- Table structure for table `lekarze`
--

CREATE TABLE `lekarze` (
  `ID_LEKARZA` int(11) NOT NULL,
  `IMIE` text COLLATE utf8mb4_polish_ci NOT NULL,
  `NAZWISKO` text COLLATE utf8mb4_polish_ci NOT NULL,
  `SPECJALIZACJA` text COLLATE utf8mb4_polish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_polish_ci;

--
-- Dumping data for table `lekarze`
--

INSERT INTO `lekarze` (`ID_LEKARZA`, `IMIE`, `NAZWISKO`, `SPECJALIZACJA`) VALUES
(1, 'Mariusz', 'Miras', 'Kardiolog'),
(2, 'Marta ', 'Sondej', 'Ortopeda'),
(3, 'Matryna', 'Szalony', 'Psycholog');

-- --------------------------------------------------------

--
-- Table structure for table `pacjenci`
--

CREATE TABLE `pacjenci` (
  `ID_PACJENTA` int(11) NOT NULL,
  `IMIE` varchar(20) COLLATE utf8mb4_polish_ci NOT NULL,
  `NAZWISKO` varchar(20) COLLATE utf8mb4_polish_ci NOT NULL,
  `DOLEGLIWOSC` varchar(40) COLLATE utf8mb4_polish_ci NOT NULL,
  `EMAIL` varchar(40) COLLATE utf8mb4_polish_ci NOT NULL,
  `LOGIN` varchar(30) COLLATE utf8mb4_polish_ci NOT NULL,
  `HASLO` varchar(20) COLLATE utf8mb4_polish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_polish_ci;

--
-- Dumping data for table `pacjenci`
--

INSERT INTO `pacjenci` (`ID_PACJENTA`, `IMIE`, `NAZWISKO`, `DOLEGLIWOSC`, `EMAIL`, `LOGIN`, `HASLO`) VALUES
(2, 'Marek', 'Przegub', 'Zapalenie ucha', 'marekprze@wp.pl', 'maro', 'b2118f4ef0b03a7f5428'),
(3, 'Michal', 'Rzeszutek', 'Grypa', 'michalrze@wp.pl', 'micgal123', '6ca4c727d7d0c75bfcb7'),
(5, 'Marzena', 'Sabek', 'Grzybica', 'marzena321@o2.pl', 'marzena111', 'c7ad5e7f050c3c281b1a');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `lekarze`
--
ALTER TABLE `lekarze`
  ADD PRIMARY KEY (`ID_LEKARZA`);

--
-- Indexes for table `pacjenci`
--
ALTER TABLE `pacjenci`
  ADD PRIMARY KEY (`ID_PACJENTA`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `lekarze`
--
ALTER TABLE `lekarze`
  MODIFY `ID_LEKARZA` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `pacjenci`
--
ALTER TABLE `pacjenci`
  MODIFY `ID_PACJENTA` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
