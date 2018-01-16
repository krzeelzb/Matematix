-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Czas generowania: 16 Sty 2018, 10:52
-- Wersja serwera: 10.1.28-MariaDB
-- Wersja PHP: 7.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Baza danych: `osadnicy`
--

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `logs`
--

CREATE TABLE `logs` (
  `id` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `msg` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Zrzut danych tabeli `logs`
--

INSERT INTO `logs` (`id`, `username`, `msg`) VALUES
(1, 'r', 'wertrew');

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `uzytkownicy`
--

CREATE TABLE `uzytkownicy` (
  `id` int(11) NOT NULL,
  `user` text COLLATE utf8_polish_ci NOT NULL,
  `pass` text COLLATE utf8_polish_ci NOT NULL,
  `email` text COLLATE utf8_polish_ci NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_polish_ci;

--
-- Zrzut danych tabeli `uzytkownicy`
--

INSERT INTO `uzytkownicy` (`id`, `user`, `pass`, `email`) VALUES
(19, 'ela1', '$2y$10$ViSITpCZ.QjOeqzIZLEALu33MRWkVqGcmz0pK/.gkHHUuAsvdjU.6', 'ell22l@wp.pl'),
(18, 'Jasio', '$2y$10$vupeTNpY5pBI4Zwm1a9VSeQIROmkz3Vm9iy15N2V2KJafCnSrI0Km', 'janko@arobaspunto.com'),
(17, 'elaa', '$2y$10$CtiwqDXgqU5EeTpi6j1qVeS2HCj/cohPq2Y2LlFW/4fruAewG7naC', 'e@mp.pl'),
(16, 'kupa', '$2y$10$xaOtry6MxWXEHSyoPX9iIuW8VkaXDFMSwSaCt6lj/PHGl6oQ1c6ri', 'ellaal@wp.pl'),
(11, 'ela', '$2y$10$EVVD0QtvtzGaMpu7aHLYD.TEaF4iEVL2asN3f.jHiuady0plLVAHi', 'el@gmail.com'),
(12, 'ssss', '$2y$10$OMUFSc3CYHz9pndCD/w1dOiB.IgZufhXEdNPvFX/5Crbfx6oFyLFG', 'elll@wp.pl'),
(13, 'wypych', '$2y$10$56HhB3h/A/N5Pdv6eqbFSuXpP/klxq9E5SuWwujkA/3BQkOByHLd6', 'pirania1@buzuaczek.pl'),
(14, 'piotr', '$2y$10$KDlQaOeCmHyxbzhK8jtzMuTsx5dSp9CVqyiFAFEEpTDS1SLCKnGxK', 'ppop@wp.pl'),
(15, 'Aga', '$2y$10$FBVGcncby25C0IH2S5v3YOf7LSAxpV6COi4Dk1xvR9no7e0nYgHlO', 'ag@wp.pl'),
(20, 'ela12', '$2y$10$kJQmBwMp5jfzBJ4MgDUT0.mlaP36lweuyEE4QpLVMQuocIbGuePaO', 'aga@gmail.com'),
(21, 'elaaa', '$2y$10$UM24mrs1Kqwttcoz9m33FuJygy.qho4gLR./IdleK4LWZ/gqWXFxu', 'e@g.pl'),
(22, 'www', '$2y$10$qw2fDvMpoJb89AFnK5d6NO4RV9QF5Ngkv3HWBfj0CaNveQssx0ns2', 'w@g.pl'),
(23, 'ert', '$2y$10$B7/aKJzxhCyuh8LMa8l4Qup1dQLAdu7VcNkos5edkGwbHDew0bkm2', 'ww@p.pl'),
(24, 'ert2', '$2y$10$Zz484alQd4WDLKL93pQaYOT7NWPpP1s/fCcsQK6rijs0FtwCcVLHO', 'ww2@p.pl'),
(25, 'ert23', '$2y$10$3DW28pSFLRsNGLWFsQmvyeVcLiHV9UAGf3XD03gCmaGK7/dN/8Z5K', 'ww23@p.pl');

--
-- Indeksy dla zrzutów tabel
--

--
-- Indexes for table `logs`
--
ALTER TABLE `logs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `uzytkownicy`
--
ALTER TABLE `uzytkownicy`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `id` (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT dla tabeli `logs`
--
ALTER TABLE `logs`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT dla tabeli `uzytkownicy`
--
ALTER TABLE `uzytkownicy`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
