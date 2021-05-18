-- phpMyAdmin SQL Dump
-- version 4.6.6deb5
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Czas generowania: 18 Maj 2021, 23:50
-- Wersja serwera: 10.3.27-MariaDB-0+deb10u1
-- Wersja PHP: 7.3.27-1~deb10u1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Baza danych: `projekt`
--

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `oswietlenie1`
--

CREATE TABLE `oswietlenie1` (
  `id` int(11) NOT NULL,
  `data` date NOT NULL,
  `stan` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `statystyki`
--

CREATE TABLE `statystyki` (
  `id` int(11) NOT NULL,
  `czas` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Zrzut danych tabeli `statystyki`
--

INSERT INTO `statystyki` (`id`, `czas`) VALUES
(1, '2021-05-18 23:17:52'),
(2, '2021-05-18 23:18:30'),
(3, '2021-05-18 23:18:31'),
(4, '2021-05-18 23:18:31'),
(5, '2021-05-18 23:18:31'),
(6, '2021-05-18 23:18:32'),
(7, '2021-05-18 23:18:32'),
(8, '2021-05-18 23:19:00'),
(9, '2021-05-18 23:19:06'),
(10, '2021-05-18 23:19:08'),
(11, '2021-05-18 23:21:31'),
(12, '2021-05-18 23:21:46'),
(13, '2021-05-18 23:21:47'),
(14, '2021-05-18 23:21:47'),
(15, '2021-05-18 23:21:48'),
(16, '2021-05-18 23:21:49'),
(17, '2021-05-18 23:21:50'),
(18, '2021-05-18 23:21:51'),
(19, '2021-05-18 23:24:38'),
(20, '2021-05-18 23:24:51'),
(21, '2021-05-18 23:24:51'),
(22, '2021-05-18 23:27:48'),
(23, '2021-05-18 23:27:56'),
(24, '2021-05-18 23:27:59'),
(25, '2021-05-18 23:30:59'),
(26, '2021-05-18 23:36:01'),
(27, '2021-05-18 23:40:08'),
(28, '2021-05-18 23:40:17'),
(29, '2021-05-18 23:41:42'),
(30, '2021-05-18 23:42:38'),
(31, '2021-05-18 23:44:00'),
(32, '2021-05-18 23:47:36'),
(33, '2021-05-18 23:47:54'),
(34, '2021-05-18 23:48:09'),
(35, '2021-05-18 23:48:28'),
(36, '2021-05-18 23:48:31');

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `uzytkownicy`
--

CREATE TABLE `uzytkownicy` (
  `id` int(11) NOT NULL,
  `uzytkownik` text CHARACTER SET utf8mb4 COLLATE utf8mb4_polish_ci NOT NULL,
  `login` text CHARACTER SET utf8mb4 COLLATE utf8mb4_polish_ci NOT NULL,
  `haslo` text COLLATE utf8_polish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_polish_ci;

--
-- Zrzut danych tabeli `uzytkownicy`
--

INSERT INTO `uzytkownicy` (`id`, `uzytkownik`, `login`, `haslo`) VALUES
(1, 'Jakub', 'jakub', '1231'),
(2, 'Piotr', 'piotr', '1231');

--
-- Indeksy dla zrzutów tabel
--

--
-- Indexes for table `statystyki`
--
ALTER TABLE `statystyki`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `uzytkownicy`
--
ALTER TABLE `uzytkownicy`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT dla tabeli `statystyki`
--
ALTER TABLE `statystyki`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=37;
--
-- AUTO_INCREMENT dla tabeli `uzytkownicy`
--
ALTER TABLE `uzytkownicy`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
