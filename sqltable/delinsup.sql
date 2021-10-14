-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Anamakine: 127.0.0.1
-- Üretim Zamanı: 14 Eki 2021, 17:51:52
-- Sunucu sürümü: 10.4.21-MariaDB
-- PHP Sürümü: 8.0.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Veritabanı: `delinsup`
--

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `inserttable_de`
--

CREATE TABLE `inserttable_de` (
  `insert_id` int(11) NOT NULL,
  `title` varchar(255) COLLATE utf8_turkish_ci NOT NULL,
  `text1` varchar(255) COLLATE utf8_turkish_ci NOT NULL,
  `text2` varchar(255) COLLATE utf8_turkish_ci NOT NULL,
  `text3` varchar(255) COLLATE utf8_turkish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci;

--
-- Tablo döküm verisi `inserttable_de`
--

INSERT INTO `inserttable_de` (`insert_id`, `title`, `text1`, `text2`, `text3`) VALUES
(1, 'dd', 'd', 'd', 'd');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `inserttable_en`
--

CREATE TABLE `inserttable_en` (
  `insert_id` int(11) NOT NULL,
  `title` varchar(255) COLLATE utf8_turkish_ci NOT NULL,
  `text1` varchar(255) COLLATE utf8_turkish_ci NOT NULL,
  `text2` varchar(255) COLLATE utf8_turkish_ci NOT NULL,
  `text3` varchar(255) COLLATE utf8_turkish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci;

--
-- Tablo döküm verisi `inserttable_en`
--

INSERT INTO `inserttable_en` (`insert_id`, `title`, `text1`, `text2`, `text3`) VALUES
(1, 'en', 'w', 'eee', 'eee');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `inserttable_tr`
--

CREATE TABLE `inserttable_tr` (
  `insert_id` int(11) NOT NULL,
  `title` varchar(255) COLLATE utf8_turkish_ci NOT NULL,
  `text1` varchar(255) COLLATE utf8_turkish_ci NOT NULL,
  `text2` varchar(255) COLLATE utf8_turkish_ci NOT NULL,
  `text3` varchar(255) COLLATE utf8_turkish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci;

--
-- Tablo döküm verisi `inserttable_tr`
--

INSERT INTO `inserttable_tr` (`insert_id`, `title`, `text1`, `text2`, `text3`) VALUES
(1, 'aa', 'bb', 'cc', 'dd');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `languages`
--

CREATE TABLE `languages` (
  `lang_id` int(1) NOT NULL,
  `title` varchar(255) COLLATE utf8_turkish_ci NOT NULL,
  `name` varchar(255) COLLATE utf8_turkish_ci NOT NULL,
  `active` enum('0','1') COLLATE utf8_turkish_ci NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci;

--
-- Tablo döküm verisi `languages`
--

INSERT INTO `languages` (`lang_id`, `title`, `name`, `active`) VALUES
(1, 'tr', 'Türkçe', '1'),
(2, 'en', 'İngilizce', '1'),
(3, 'de', 'Almanca', '1');

--
-- Dökümü yapılmış tablolar için indeksler
--

--
-- Tablo için indeksler `inserttable_de`
--
ALTER TABLE `inserttable_de`
  ADD PRIMARY KEY (`insert_id`);

--
-- Tablo için indeksler `inserttable_en`
--
ALTER TABLE `inserttable_en`
  ADD PRIMARY KEY (`insert_id`);

--
-- Tablo için indeksler `inserttable_tr`
--
ALTER TABLE `inserttable_tr`
  ADD PRIMARY KEY (`insert_id`);

--
-- Tablo için indeksler `languages`
--
ALTER TABLE `languages`
  ADD PRIMARY KEY (`lang_id`);

--
-- Dökümü yapılmış tablolar için AUTO_INCREMENT değeri
--

--
-- Tablo için AUTO_INCREMENT değeri `inserttable_de`
--
ALTER TABLE `inserttable_de`
  MODIFY `insert_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- Tablo için AUTO_INCREMENT değeri `inserttable_en`
--
ALTER TABLE `inserttable_en`
  MODIFY `insert_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- Tablo için AUTO_INCREMENT değeri `inserttable_tr`
--
ALTER TABLE `inserttable_tr`
  MODIFY `insert_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- Tablo için AUTO_INCREMENT değeri `languages`
--
ALTER TABLE `languages`
  MODIFY `lang_id` int(1) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
