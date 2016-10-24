-- phpMyAdmin SQL Dump
-- version 4.1.4
-- http://www.phpmyadmin.net
--
-- Anamakine: 127.0.0.1
-- Üretim Zamanı: 24 Eki 2016, 08:46:34
-- Sunucu sürümü: 5.6.15-log
-- PHP Sürümü: 5.4.24

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Veritabanı: `cms`
--

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `pages`
--

CREATE TABLE IF NOT EXISTS `pages` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `label` varchar(20) NOT NULL,
  `title` varchar(20) NOT NULL,
  `body` text NOT NULL,
  `slug` varchar(20) NOT NULL,
  `created` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated` timestamp NULL DEFAULT NULL ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=19 ;

--
-- Tablo döküm verisi `pages`
--

INSERT INTO `pages` (`id`, `label`, `title`, `body`, `slug`, `created`, `updated`) VALUES
(17, 'adam gibi bir futbol', 'zinedine zidane', 'Orta sahada, oyun kurucu mevkiinde oynayan fransÄ±z fultbolcu, Real Madrid ve Juventus FC gibi prestijli Avrupa kulÃ¼plerinde oynamÄ±ÅŸtÄ±r. Bu kulÃ¼plerle Ã§ok sayÄ±da yerel ve uluslararasÄ± kupalar kazanmÄ±ÅŸtÄ±r.', '', '2016-03-26 20:53:46', '2016-10-24 06:45:16'),
(18, '10n0066', 'mkostek', 'gobeller', ' haydaaa', '2016-04-17 09:07:35', '2016-04-17 09:07:47');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
