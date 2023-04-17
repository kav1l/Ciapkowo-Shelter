-- phpMyAdmin SQL Dump
-- version 5.1.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 10, 2022 at 06:55 PM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 7.4.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ciapkowoprojekt`
--

-- --------------------------------------------------------

--
-- Table structure for table `found`
--

CREATE TABLE `found` (
  `id` int(11) NOT NULL,
  `imie` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `plec` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `wielkosc` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `kolor` varchar(40) COLLATE utf8_unicode_ci NOT NULL,
  `siersc` varchar(40) COLLATE utf8_unicode_ci NOT NULL,
  `info` text COLLATE utf8_unicode_ci NOT NULL,
  `miejsce` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `zdjecie` varchar(1000) COLLATE utf8_unicode_ci NOT NULL,
  `daneszuk` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `nrtele` bigint(20) NOT NULL,
  `email` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `uwagi` varchar(100) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `found`
--

INSERT INTO `found` (`id`, `imie`, `plec`, `wielkosc`, `kolor`, `siersc`, `info`, `miejsce`, `zdjecie`, `daneszuk`, `nrtele`, `email`, `uwagi`) VALUES
(2, 'Maciek', 'samiec', 'średni', 'szary', 'długa', '', 'Park Sielanka', 'img/usr/maciek.jpg', 'Leo Ryba', 799245671, 'l.ryba@zsp9.elodz.edu.pl', ''),
(3, 'Reksio', 'samiec', 'średni', 'brązowy', 'długa', '', 'ulica Zielona', 'img/usr/32299_20220408_101107_002.jpg', 'Leo Ryba', 729265518, 'l.ryba@zsp9.elodz.edu.pl', ''),
(5, 'Kumi', 'samiec', 'duży', 'trikolor', 'krótka', '', 'Ul. Na skaju ', 'img/usr/kumi.png', 'Maianna Wokulska', 457689475, 'wokulsmar@onet.com', ''),
(6, 'Odi', 'samiec', 'średni', 'trikolor', 'krótka', '', 'ul Piotrkowska', 'img/usr/odi.png', 'Alojzy Dymowski', 374859323, 'dymkowali@wp.pl', ''),
(7, 'Elcia', 'samica', 'średni', 'brązowy', 'krótka', '', 'ul. Górczewska', 'img/usr/4757.png', 'Alicja Hororzy', 374859323, 'horaczykalicja@wp.pl', ''),
(8, 'Loki', 'samiec', 'średni', 'ciemny', 'szorstka', '', 'Ul. Karola Wojtyly', 'img/usr/490_mini.png', 'Oliwia Mrozinska', 894758364, 'oliwia8574@gmail.com', ''),
(9, 'Hulek', 'samiec', 'mały', 'jasny', 'długa', '', 'ul.Baletowa Łask', 'img/usr/Hulka.png', 'Schronisko Ciapkowo', 213742069, 'schronisko.zwierzak@ciapkowo.pl', ''),
(10, 'Duki', 'samica', 'mały', 'ciemny', 'krótka', '', 'ul. Przyłeczkowska', 'img/usr/483_mini.png', 'Antonii Osrudka', 389485675, 'olikowski74@gmail.com', ''),
(11, 'Miko', 'samiec', 'mały', 'trikolor', 'krótka', '', 'Retkinia, piaski', 'img/usr/Miko.jpg', 'Julia Kowalczyk', 785746321, 'julka6547@wp.pl', ''),
(12, 'Loko', 'samiec', 'duży', 'jasny', 'krótka', '', 'Lesie Łagiewnickim, Łódź', 'img/usr/37938_20220105_170814_001.jpg', 'Magdalena Stefanik', 384756321, 'Sterfanko67@wp.pl', ''),
(14, 'Kulka', 'samica', 'mały', 'jasny', 'krótka', '', 'Dąbrowskiego Kilińskiego', 'img/usr/lfbase_20211026_211811.jpg', 'Dorota K', 878998789, 'kolusinska090@gmail.com', ''),
(15, 'Pafi', 'samiec', 'średni', 'jasny', 'krótka', '', 'Źródłowa łódź', 'img/usr/pafi.jpg', 'Joanna Krupa', 463079890, 'kurpokik55@gmail.com', ''),
(16, 'Django', 'samiec', 'średni', 'trikolor', 'krótka', '', 'ul. Piotrkowska', 'img/usr/lfbase_20211213_121720.jpg', 'Oliwia Sochacka', 476547567, 'sochak99@wp.pl', ''),
(17, 'Pimpek', 'samiec', 'mały', 'jasny', 'krótka', '', 'Łupkowa/ Antoniego Książka', 'img/usr/lfbase_20220326_183431.jpg', 'Kasia O', 298777654, 'kastiokolia254@onet.pl', ''),
(18, 'Tomek', 'samiec', 'duży', 'jasny', 'długa', '', 'ul. Sanitariuszek ', 'img/usr/lfbase_20220407_102402.jpg', 'Aleksander Kaczorowski', 980567687, 'asd.@gmail.com', '');

-- --------------------------------------------------------

--
-- Table structure for table `pracownicy`
--

CREATE TABLE `pracownicy` (
  `Imie` varchar(50) NOT NULL,
  `Nazwisko` varchar(50) NOT NULL,
  `Stanowisko` varchar(50) NOT NULL,
  `nr_telefonu` varchar(9) NOT NULL,
  `email` varchar(100) NOT NULL,
  `informacje` text NOT NULL,
  `login` varchar(50) NOT NULL,
  `passwd` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `pracownicy`
--

INSERT INTO `pracownicy` (`Imie`, `Nazwisko`, `Stanowisko`, `nr_telefonu`, `email`, `informacje`, `login`, `passwd`) VALUES
('', '', '', '', '', '', 'administrator', 'c380f833034d60bf035a134094eb538d600dc6f9');

-- --------------------------------------------------------

--
-- Table structure for table `zaginione`
--

CREATE TABLE `zaginione` (
  `id` int(11) NOT NULL,
  `imie` varchar(60) NOT NULL,
  `gatunek` varchar(30) NOT NULL,
  `wiek` int(11) NOT NULL,
  `plec` varchar(30) NOT NULL,
  `wielkosc` varchar(30) NOT NULL,
  `kolor` varchar(40) NOT NULL,
  `siersc` varchar(40) NOT NULL,
  `info` text NOT NULL,
  `miejsce` varchar(100) NOT NULL,
  `zdjecie` varchar(1000) NOT NULL,
  `daneszuk` varchar(100) NOT NULL,
  `nrtele` varchar(9) NOT NULL,
  `email` varchar(100) NOT NULL,
  `uwagi` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `zaginione`
--

INSERT INTO `zaginione` (`id`, `imie`, `gatunek`, `wiek`, `plec`, `wielkosc`, `kolor`, `siersc`, `info`, `miejsce`, `zdjecie`, `daneszuk`, `nrtele`, `email`, `uwagi`) VALUES
(3, 'Rysiek', 'pies', 12, 'samiec', 'średni', 'podpalany', 'krótka', 'Reaguje na imie Rysiek i odmiany, lubi pieczywo czosnkowe', 'łódź widzew', 'img/usr/20220321_112355.jpg', 'Tomasz Judym', '132423435', 'a.kaczorowski@zsp9.elodz.edu.pl', ''),
(4, 'Uzi', 'kot', 14, 'samica', 'średni', 'czarny', 'krótka', 'Ma białą plamkę sierści pod brodą', 'obok Port Łódź', 'img/usr/20211130_193612.jpg', 'Aleksander Kaczorowski', '980567687', 'a.kaczorowski@zsp9.elodz.edu.pl', ''),
(5, 'Dejzi', 'kot', 5, 'samica', 'duży', 'jasny', 'szorstka', 'Trochę grubszy kot, przyjazny, reaguje na zwykłe kici kici lub po imieniu', 'Rzgowska/Kurczaki', 'img/usr/20210818_223644.jpg', 'Monika Kotowska', '213769420', 'kotowska@gmail.com', ''),
(6, 'Olaf', 'kot', 5, 'samiec', 'średni', 'czarny', 'krótka', 'Niezdara, biegnąc do Ciebie prawdopodobnie się wywróci, reaguje na imię lub zwykłe kici kici', 'Jutrzenki/strażacka', 'img/usr/20210215_084839.jpg', 'Martyna Miałk', '987654312', 'mialk.2000@gmail.com', ''),
(7, 'Waldo', 'pies', 1, 'samiec', 'mały', 'ciemny', 'krótka', 'Młody przestraszony psiak, znaleziony w lesie, osamotniony bardzo przyjazny', 'ul. Ogrodowa', 'img/usr/waldo.jpg', 'Schronisko Ciapkowo', '213742069', 'schronisko.zwierzak@ciapkowo.pl', ''),
(8, 'DiabeÅ‚', 'kot', 6, 'samica', 'duży', 'jasny', 'krótka', 'Ogólnie to to jest diabeł, więc jak się nie znajdzie, to nie będę jakoś dużo płakał. Reaguje na kici kici, krew i ból. Bardzo boi się czosnku.', 'Chyba w piekle (Politechniki/Skrzywana)', 'img/usr/VideoCapture_20210813-182919.jpg', 'Aleksander Kaczorowski', '980567643', 'a.kaczorowski@zsp9.elodz.edu.pl', ''),
(9, 'Mariuszek', 'pies', 5, 'samiec', 'średni', 'szary', 'długa', 'Reaguje na imie oraz zapach kiełbasy', 'Piotrkowska 123', 'img/usr/31344_20210722_155328_011.jpg', 'Aleksander Kaczorowski', '980567687', 'ytr@gmail.com', ''),
(10, 'Gofer', 'kot', 7, 'samiec', 'średni', 'szary', 'długa', 'Bardzo lubi gofry, reaguje na klaskanie', 'Demokratyczna', 'img/usr/Bez nazwy.png', 'Piotr Grifin', '234765789', 'pawel.gryfin@gmail.com', ''),
(11, 'Chudy', 'kot', 2, 'samiec', 'duży', 'brązowy', 'szorstka', 'Uciekł ponieważ dostał kawałek kalafiora, kot reaguje na zapach kiełbasy oraz swoje imie \"Chudy\"', 'Chocianowicka', 'img/usr/received_256912468810262.jpeg', 'Elżbieta Karaś', '852495632', 'elzbietka@gmail.com', ''),
(12, 'Sernik', 'kot', 8, 'samica', 'mały', 'jasny', 'krótka', 'Ma słabość do sernika, uciekł mi z transportera w okolicach ulicy Powszechnej', 'ul Powszechna', 'img/usr/received_520929964913595.jpeg', 'Mikołaj Śnieg', '543543456', 'mikolaj.snieg@gmail.com', ''),
(13, 'Lupo', 'pies', 3, 'samiec', 'średni', 'czarny', 'szorstka', 'To bardzo miły psiak. Nie jest agresywny', 'Pabianicka/Rudzka', 'img/usr/das.jpg', 'Ola Nowołódzka', '432645765', 'nowolodzka.ola@gmail.com', 'nie gryzie'),
(14, 'Jima', 'pies', 1, 'samica', 'mały', 'jasny', 'krótka', 'Piesek wabi się Jima, ale reaguje też na Iwo. Lubi się bawić i nie boi się ludzi', 'Rolnicza', 'img/usr/gfd.jpg', 'Kacper Kwas', '312432543', 'kwasik@gmail.com', ''),
(15, 'Papo', 'pies', 2, 'samiec', 'duży', 'trikolor', 'długa', 'Najbardziej przyjacielski pies jakiego znam, na pewno podejdzie po zawołaniu go po imieniu', 'Socjalna', 'img/usr/gfh.jpg', 'Ewa Stokrotka', '596222333', 'stokrotka@gmail.com', ''),
(16, 'Plumba', 'pies', 7, 'samica', 'średni', 'brązowy', 'długa', 'Pies wystawowy, bardzo zależy mi na znalezieniu go, reaguje na imię i gwizdanie', 'wróblewskiego', 'img/usr/gkhj.jpg', 'Adam Pawłowski', '534765987', 'pawlowski@gmail.com', ''),
(17, 'Bobo', 'pies', 3, 'samiec', 'mały', 'czarny', 'krótka', 'Bobo bardzo lubi jeść trawę, prawdopodobnie schował się gdzieś w krzakach na Stawach Jana, reaguje na imię i gwizdanie', 'Stawy Jana', 'img/usr/ilojoiuoui.jpg', 'Piotr Paweł', '543245664', 'Pawel.123@gmail.com', '');

-- --------------------------------------------------------

--
-- Table structure for table `zwierzaki`
--

CREATE TABLE `zwierzaki` (
  `id` int(11) NOT NULL,
  `imie` varchar(30) NOT NULL,
  `gatunek` varchar(30) NOT NULL,
  `rasa` varchar(50) NOT NULL,
  `plec` varchar(30) NOT NULL,
  `rozmiar` varchar(50) NOT NULL,
  `wiek` varchar(30) NOT NULL,
  `opis` text NOT NULL,
  `zdjecie` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `zwierzaki`
--

INSERT INTO `zwierzaki` (`id`, `imie`, `gatunek`, `rasa`, `plec`, `rozmiar`, `wiek`, `opis`, `zdjecie`) VALUES
(8, 'Ciapek', 'kot', 'dachowiec', 'samiec', 'duży', '5', 'kochany kot szuka nowego ciepłego domu', 'img/38088_20220329_102225_001.jpg'),
(9, 'Luna', 'pies', 'york', 'samica', 'mały', '1', 'Luna szuka domu, ma wadę wzroku, ale dobry słuch', 'img/lfbase_20220323_232630.jpg'),
(10, 'Telma', 'kot', 'dachowiec', 'samica', 'średni', '2', 'Telma to kochający kot szukającego nowego domu, jest bardzo przyjazna i podchodzi do każdego.', 'img/32305_20220410_091859_003.jpg'),
(11, 'Szczypiorek', 'kot', 'dachowiec', 'samiec', 'mały', '1', 'Mały kociak poszukujący nowej rodziny.', 'img/32306_20220410_092807_006.jpg'),
(12, 'Dora', 'pies', 'kundel', 'samica', 'mały', '1', 'Dora to szczeniaczek uwielbia się bawić', 'img/lfbase_20211213_121720.jpg'),
(13, 'Raha', 'pies', 'kundel', 'samiec', 'średni', '3', 'Raha potrzebuje towarzysza, który najlepiej pracuje w domu', 'img/lfbase_20211202_220858.jpg'),
(14, 'Domino', 'pies', 'kundel', 'samiec', 'duży', '5', 'Uwielbia być miziany po brzuszku', 'img/37816_20211220_140208_001.jpg'),
(15, 'Hikari', 'kot', 'dachowiec', 'samica', 'duży', '4', 'Hikari jest typem samotnika, potrzebuje dużo czasu dla siebie', 'img/lfbase_20211125_234245.jpg'),
(16, 'Raven', 'kot', 'dachowiec', 'samica', 'średni', '2', 'Kot ten ma zbyt dużo energi, ale zawsze znajdzie czas na sen', 'img/lfbase_20211115_141657.jpg'),
(17, 'Memphis', 'pies', 'kundel', 'samiec', 'mały', '6', 'Memphis uwielbia spacery', 'img/lfbase_20211213_213905.jpg'),
(18, 'Joszi', 'kot', 'kundel', 'samiec', 'średni', '3', 'Joszi ma nadzwyczaj energii i szuka szalonego domu', 'img/lfbase_20211210_162843.jpg');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `found`
--
ALTER TABLE `found`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `zaginione`
--
ALTER TABLE `zaginione`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `zwierzaki`
--
ALTER TABLE `zwierzaki`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `found`
--
ALTER TABLE `found`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `zaginione`
--
ALTER TABLE `zaginione`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `zwierzaki`
--
ALTER TABLE `zwierzaki`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
