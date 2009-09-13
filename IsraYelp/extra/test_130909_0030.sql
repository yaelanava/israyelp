-- phpMyAdmin SQL Dump
-- version 2.11.9.3
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Sep 13, 2009 at 12:30 AM
-- Server version: 5.0.67
-- PHP Version: 5.2.9

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `test`
--

-- --------------------------------------------------------

--
-- Table structure for table `beauty`
--

DROP TABLE IF EXISTS `beauty`;
CREATE TABLE IF NOT EXISTS `beauty` (
  `id` bigint(20) NOT NULL auto_increment,
  `name` varchar(100) NOT NULL,
  `another_name` varchar(100) default NULL,
  `address` varchar(200) NOT NULL,
  `city_id` bigint(20) NOT NULL,
  `lat` double default NULL,
  `lon` double default NULL,
  `phone_number` varchar(100) NOT NULL,
  `category` set('Hair Salons','Day Spas','Hair Removal','Nail Salons') NOT NULL,
  `grading` int(10) unsigned NOT NULL default '0',
  `num_reviews` bigint(20) unsigned NOT NULL default '0',
  `hours` varchar(100) NOT NULL default '08:00-20:00',
  `link` varchar(100) default NULL,
  `invalid_access` varchar(2) NOT NULL,
  `parking` varchar(2) NOT NULL,
  `events` varchar(2) NOT NULL,
  PRIMARY KEY  (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=9 ;

--
-- Dumping data for table `beauty`
--

INSERT INTO `beauty` (`id`, `name`, `another_name`, `address`, `city_id`, `lat`, `lon`, `phone_number`, `category`, `grading`, `num_reviews`, `hours`, `link`, `invalid_access`, `parking`, `events`) VALUES
(1, 'îøëæ öéôä', 'Private Sea', '÷äéìú ñìåðé÷é 11, úì àáéá', 1, 32.113591, 34.824404, '03-6488112', 'Day Spas', 3, 3, 'à''- ä'' 09:00 - 21:00 å'' 09:00 - 15:00', 'www.privatesea.co.il', 'ìà', 'ëï', 'ëï'),
(2, 'ìééó ìå÷ñ', 'life luxe', 'ðçìú éöç÷ 18, îâãìé ú"à ', 1, 32.074653, 34.797989, '1-700-700-606', 'Day Spas', 0, 0, 'éåí à'' 17:00-21:00 éåí á''-ä'' 9:00-21:00 éîé å'' åùáú: 9:00-18:00', 'www.lifeluxe.co.il', 'ëï', 'ëï', 'ëï'),
(3, 'ñôà îòì ëåìí', NULL, 'àìéòæø ôøé 10, úì àáéá', 1, 32.087071, 34.770266, '03-5201880', 'Day Spas', 5, 2, 'ëì éîåú äùòåú ëåìì ùéùé åùáú - 07:19:00 ', 'www.aboveall.co.il', 'ìà', 'ëï', 'ëï'),
(4, 'èéèðé÷ ñôà', 'Titanic Spa', 'ìéùéðñ÷é 17, øàùåï ìöéåï', 2, 31.992468, 34.767047, '03-9416171', 'Day Spas', 0, 0, '9:00 - 21:00', 'www.titanicspa.co.il', 'ìà', 'ëï', 'ëï'),
(5, 'ãåãå øåîðå', NULL, 'ùîòåï ôøñ 33 øàùåï ìöéåï', 2, 31.968443, 34.763871, '1-700-709705', 'Hair Salons', 0, 0, ' à''-ä''	 9:00-21:00    å''	8:30-15:00', 'www.dudu-romano.co.il', 'ëï', 'ëï', ''),
(6, 'åéöéàðå ùìåîé - òéöåá ùéòø', NULL, 'ùãøåú äçéøåú 17 , çãøä', 7, 32.440936, 34.915484, '04-6325444', 'Hair Salons,Nail Salons', 0, 0, '09:00-19:30', NULL, 'ìà', 'ìà', 'ìà'),
(7, 'îìé ìééï òéöåá ùéòø', NULL, 'äðùéà 67, çãøä', 7, 32.440356, 34.917608, '050-7802400', 'Hair Salons', 0, 0, '09:00-20:00', NULL, 'ìà', 'ìà', 'ìà'),
(8, 'øåàé òøáä - áñâðåï àçø', NULL, 'äðùéà 55, çãøä', 7, 32.438941, 34.922935, '04-6324870', 'Hair Salons', 0, 0, '09:00-19:00', NULL, 'ìà', 'ìà', 'ìà');

-- --------------------------------------------------------

--
-- Table structure for table `cities`
--

DROP TABLE IF EXISTS `cities`;
CREATE TABLE IF NOT EXISTS `cities` (
  `id` bigint(20) NOT NULL auto_increment,
  `name` varchar(50) NOT NULL,
  `english_name` varchar(50) NOT NULL,
  PRIMARY KEY  (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=8 ;

--
-- Dumping data for table `cities`
--

INSERT INTO `cities` (`id`, `name`, `english_name`) VALUES
(1, 'úì àáéá', 'Tel Aviv'),
(2, 'øàùåï ìöéåï', 'Rishon Le Zion'),
(3, 'éøåùìéí', 'Jerusalem'),
(4, 'çéôä', 'Haifa'),
(5, 'áàø ùáò', 'Be''er Sheva'),
(6, 'øçåáåú', 'Rehovot'),
(7, 'çãøä', 'Hadera');

-- --------------------------------------------------------

--
-- Table structure for table `coupons`
--

DROP TABLE IF EXISTS `coupons`;
CREATE TABLE IF NOT EXISTS `coupons` (
  `id` bigint(20) unsigned NOT NULL auto_increment,
  `city_id` bigint(20) NOT NULL,
  `biz_id` bigint(20) NOT NULL,
  `biz_type` enum('restaurants','shopping','nightlife','beauty','hotels') NOT NULL,
  `coupon` varchar(100) NOT NULL,
  PRIMARY KEY  (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `coupons`
--

INSERT INTO `coupons` (`id`, `city_id`, `biz_id`, `biz_type`, `coupon`) VALUES
(1, 1, 4, 'restaurants', '÷éðåç äáéú îúðä ìæåâ (÷ãàéó îäèàáåï) áäæîðú àøåçä îìàä'),
(2, 1, 3, 'restaurants', 'ùúé ëåñåú ééï àå ÷éðåç òì çùáåï äáéú áäæîðä îòì 100 ù"ç ìà ëåìì àøåçåú áå÷ø');

-- --------------------------------------------------------

--
-- Table structure for table `favorites`
--

DROP TABLE IF EXISTS `favorites`;
CREATE TABLE IF NOT EXISTS `favorites` (
  `user_id` bigint(20) NOT NULL,
  `biz_id` bigint(20) NOT NULL,
  `biz_type` enum('restaurants','shopping','nightlife','beauty','hotels') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `favorites`
--

INSERT INTO `favorites` (`user_id`, `biz_id`, `biz_type`) VALUES
(26, 4, 'restaurants'),
(1, 1, 'beauty'),
(1, 1, 'nightlife'),
(26, 1, 'restaurants');

-- --------------------------------------------------------

--
-- Table structure for table `friends`
--

DROP TABLE IF EXISTS `friends`;
CREATE TABLE IF NOT EXISTS `friends` (
  `user_id` bigint(20) NOT NULL,
  `friend_id` bigint(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `friends`
--

INSERT INTO `friends` (`user_id`, `friend_id`) VALUES
(1, 2),
(2, 1),
(1, 5),
(5, 1),
(1, 4),
(4, 1),
(1, 7),
(7, 1),
(5, 8),
(8, 5),
(1, 2),
(2, 1),
(26, 36),
(36, 26);

-- --------------------------------------------------------

--
-- Table structure for table `hotels`
--

DROP TABLE IF EXISTS `hotels`;
CREATE TABLE IF NOT EXISTS `hotels` (
  `id` bigint(20) NOT NULL auto_increment,
  `name` varchar(100) NOT NULL,
  `another_name` varchar(100) default NULL,
  `address` varchar(200) NOT NULL,
  `city_id` bigint(20) NOT NULL,
  `lat` double default NULL,
  `lon` double default NULL,
  `phone_number` varchar(100) NOT NULL,
  `category` set('hotels') NOT NULL,
  `grading` int(10) unsigned NOT NULL default '0',
  `num_reviews` bigint(20) unsigned NOT NULL default '0',
  `link` varchar(100) default NULL,
  `invalid_access` varchar(2) NOT NULL,
  `parking` varchar(2) NOT NULL,
  `spa` varchar(2) NOT NULL,
  `pool` varchar(2) NOT NULL,
  `kosher` varchar(2) NOT NULL,
  `kids_club` varchar(2) NOT NULL,
  `intranet` varchar(2) NOT NULL,
  `tv` varchar(2) NOT NULL,
  `mini_bar` varchar(2) NOT NULL,
  `jim` varchar(2) NOT NULL,
  PRIMARY KEY  (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=13 ;

--
-- Dumping data for table `hotels`
--

INSERT INTO `hotels` (`id`, `name`, `another_name`, `address`, `city_id`, `lat`, `lon`, `phone_number`, `category`, `grading`, `num_reviews`, `link`, `invalid_access`, `parking`, `spa`, `pool`, `kosher`, `kids_club`, `intranet`, `tv`, `mini_bar`, `jim`) VALUES
(1, 'ãï', 'Dan', 'äéø÷åï 99 , úì àáéá', 1, 32.079496, 34.767931, '03-5202525', 'hotels', 0, 0, NULL, 'ëï', 'ëï', 'ëï', 'ëï', 'ëï', 'ëï', 'ëï', 'ëï', 'ëï', 'ìà'),
(2, 'âåìãï áéõ''', 'Golden Beach', 'äøáøè ñîåàì 56 , úì àáéá', 1, 32.07345, 34.764948, '057-9376958', 'hotels', 0, 0, NULL, 'ìà', 'ìà', 'ìà', 'ìà', 'ìà', 'ìà', 'ëï', 'ëï', 'ëï', 'ìà'),
(3, 'éùøåèì èàåàø', 'ISROTEL Tower', 'äéø÷åï 78 , úì àáéá', 1, 32.076891, 34.767107, '03-5113603', 'hotels', 0, 0, NULL, 'ëï', 'ëï', 'ìà', 'ëï', 'ìà', 'ìà', 'ìà', 'ìà', 'ìà', 'ëï'),
(4, 'îøéðä', 'Marina', 'äéø÷åï 167 , úì àáéá', 1, 32.085627, 34.770259, '03-5211777', 'hotels', 0, 0, NULL, 'ëï', 'ëï', 'ìà', 'ëï', 'ëï', 'ìà', 'ëï', 'ëï', 'ëï', 'ìà'),
(5, '÷øìèåï', 'Carlton', 'àìéòæø ôøé 10 , úì àáéá', 1, 32.086757, 34.770213, '03-5201818', 'hotels', 5, 1, NULL, 'ëï', 'ëï', 'ìà', 'ëï', 'ëï', 'ìà', 'ëï', 'ëï', 'ëï', 'ëï'),
(6, 'âìøé', 'Gallery', 'äøöì 61, çéôä', 4, 32.808, 35.000655, '057-9379311', 'hotels', 0, 0, NULL, 'ìà', 'ëï', 'ëï', 'ìà', 'ëï', 'ìà', 'ëï', 'ëï', 'ìà', 'ëï'),
(7, 'äø äëøîì', 'Mount Carmel', 'ãøê äéí 103, çéôä', 4, 32.810308, 34.974732, '04-8381414', 'hotels', 0, 0, NULL, 'ìà', 'ëï', 'ëï', 'ëï', 'ëï', 'ìà', 'ëï', 'ëï', 'ìà', 'ëï'),
(8, '÷åìåðé', 'Colony Hotel', 'áï âåøéåï 28, çéôä', 4, 32.820292, 34.99065, '04-8513366', 'hotels', 0, 0, NULL, 'ëï', 'ëï', 'ìà', 'ìà', 'ìà', 'ìà', 'ëï', 'ëï', 'ëï', 'ìà'),
(9, 'ãï áåèé÷', 'Dan boutique', 'ãøê çáøåï 31, éøåùìéí', 3, 31.766868, 35.225776, '02-5689999', 'hotels', 0, 0, NULL, 'ëï', 'ëï', 'ìà', 'ìà', 'ëï', 'ìà', 'ëï', 'ëï', 'ìà', 'ëï'),
(10, 'ôøéîä ôàìàñ', 'Prima Palace', 'ôéðñ 2 , éøåùìéí', 3, 31.785323, 35.215017, '057-9379977', 'hotels', 0, 0, NULL, 'ëï', 'ëï', 'ìà', 'ìà', 'ëï', 'ìà', 'ìà', 'ìà', 'ëï', 'ìà'),
(11, 'ôìàæä', 'Plaza', 'äîìê â`åøâ` 47 , éøåùìéí', 3, 31.776671, 35.216734, '02-62986666', 'hotels', 0, 0, NULL, 'ëï', 'ëï', 'ìà', 'ëï', 'ëï', 'ëï', 'ëï', 'ëï', 'ëï', 'ìà'),
(12, 'ìàåðøãå ðâá', NULL, 'äðøééèä ñåìã, 4 áàø ùáò', 5, 31.247196, 34.801045, '08-6405444', 'hotels', 0, 0, NULL, 'ìà', 'ìà', 'ëï', 'ìà', 'ìà', 'ìà', 'ëï', 'ëï', 'ëï', 'ëï');

-- --------------------------------------------------------

--
-- Table structure for table `messages`
--

DROP TABLE IF EXISTS `messages`;
CREATE TABLE IF NOT EXISTS `messages` (
  `id` bigint(20) NOT NULL auto_increment,
  `sender_id` bigint(20) NOT NULL,
  `recipient_id` bigint(20) NOT NULL,
  `message` text NOT NULL,
  PRIMARY KEY  (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `messages`
--

INSERT INTO `messages` (`id`, `sender_id`, `recipient_id`, `message`) VALUES
(1, 1, 2, 'hello!!!! :)'),
(2, 2, 1, 'hello to you too!!!! :)');

-- --------------------------------------------------------

--
-- Table structure for table `nightlife`
--

DROP TABLE IF EXISTS `nightlife`;
CREATE TABLE IF NOT EXISTS `nightlife` (
  `id` bigint(20) NOT NULL auto_increment,
  `name` varchar(100) NOT NULL,
  `another_name` varchar(100) default NULL,
  `address` varchar(200) NOT NULL,
  `city_id` bigint(20) NOT NULL,
  `lat` double default NULL,
  `lon` double default NULL,
  `phone_number` varchar(100) NOT NULL,
  `category` set('Bars','Comedy Clubs','Karaoke','Jazz & Blues','Dance Clubs') NOT NULL,
  `grading` int(10) unsigned NOT NULL default '0',
  `num_reviews` bigint(20) unsigned NOT NULL default '0',
  `hours` varchar(100) NOT NULL default '08:00-20:00',
  `link` varchar(100) default NULL,
  `invalid_access` varchar(2) NOT NULL,
  `Happy Hour` varchar(100) NOT NULL,
  `parking` varchar(2) NOT NULL,
  `outside` varchar(2) NOT NULL,
  `smoking` varchar(2) NOT NULL,
  PRIMARY KEY  (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `nightlife`
--

INSERT INTO `nightlife` (`id`, `name`, `another_name`, `address`, `city_id`, `lat`, `lon`, `phone_number`, `category`, `grading`, `num_reviews`, `hours`, `link`, `invalid_access`, `Happy Hour`, `parking`, `outside`, `smoking`) VALUES
(1, 'ùáìåì jazz', 'Sablul Jazz', 'äàðâø 13 - ðîì úì-àáéá, úì àáéá', 1, 32.098629, 34.774257, '03-5461891 ', 'Jazz & Blues', 5, 1, '20:00-02:00', 'www.shabluljazz.com', 'ëï', 'ìà', 'ëï', 'ìà', 'ìà'),
(2, 'îåòãåï äáìå÷ ', 'The Block Club', 'ãåã çëîé 35, úì-àáéá', 1, 32.063436, 34.783764, '03-5379963', 'Dance Clubs', 5, 1, '', 'www.block-club.com', 'ìà', 'ëï', 'ëï', 'ìà', 'ìà');

-- --------------------------------------------------------

--
-- Table structure for table `restaurants`
--

DROP TABLE IF EXISTS `restaurants`;
CREATE TABLE IF NOT EXISTS `restaurants` (
  `id` bigint(20) NOT NULL auto_increment,
  `name` varchar(100) NOT NULL,
  `another_name` varchar(100) default NULL,
  `address` varchar(200) NOT NULL,
  `city_id` bigint(20) NOT NULL,
  `lat` double default NULL,
  `lon` double default NULL,
  `phone_number` varchar(100) NOT NULL,
  `category` set('events','meat','gourmet','fish','mediterranean','sea_food','chef_rest','take_away') NOT NULL,
  `grading` int(10) unsigned NOT NULL default '0',
  `num_reviews` bigint(20) unsigned NOT NULL default '0',
  `link` varchar(100) default NULL,
  `delivery` varchar(2) NOT NULL,
  `invalid_access` varchar(2) NOT NULL,
  `events` varchar(2) NOT NULL,
  `parking` varchar(2) NOT NULL,
  `outside` varchar(2) NOT NULL,
  `kosher` varchar(2) NOT NULL,
  `child_friendly` varchar(2) NOT NULL,
  `romantic` varchar(2) NOT NULL,
  `smoking` varchar(2) NOT NULL,
  PRIMARY KEY  (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=16 ;

--
-- Dumping data for table `restaurants`
--

INSERT INTO `restaurants` (`id`, `name`, `another_name`, `address`, `city_id`, `lat`, `lon`, `phone_number`, `category`, `grading`, `num_reviews`, `link`, `delivery`, `invalid_access`, `events`, `parking`, `outside`, `kosher`, `child_friendly`, `romantic`, `smoking`) VALUES
(1, 'ìå÷àñ', 'Lucas', 'îæà"ä 5, úì àáéá', 1, 32.06711, 34.77177, '03-5252565, 03-5686820', 'events,take_away', 5, 40, NULL, 'ëï', 'ëï', 'ëï', 'ëï', 'ëï', 'ìà', 'ëï', 'ëï', 'ëï'),
(2, 'Niho', 'ðéäå', 'îùä á÷ø 9 - à.ú. éùï, øàùåï ìöéåï', 2, 31.974337, 34.80871, '057-222-3333 (ùìåçä 4222)', 'events,meat,fish', 4, 4, NULL, 'ìà', 'ëï', 'ëï', 'ëï', 'ëï', 'ìà', 'ëï', 'ëï', 'ëï'),
(3, '÷ôä ðîøåã', 'Kafe Nimrod', 'äàðâø 8 - ðîì úì àáéá, úì àáéá', 1, 32.098034, 34.774446, '077-2133007', 'events', 5, 8, NULL, 'ìà', 'ëï', 'ëï', 'ëï', 'ëï', 'ìà', 'ëï', 'ëï', 'ëï'),
(4, 'ôàùä', 'Pasha', 'äàøáòä 8, úì àáéá', 1, 32.070416, 34.783591, '03-5617778', 'events,meat,mediterranean', 4, 4, NULL, 'ìà', 'ëï', 'ëï', 'ëï', 'ìà', 'ëï', 'ìà', 'ëï', 'ìà'),
(6, 'Black Bar ''n'' Burger', 'áì÷', 'äáøæì 23 - øîú äçééì , úì àáéá', 1, 32.108993, 34.839746, '03-6441000', 'events,meat,take_away', 5, 2, NULL, 'ëï', 'ëï', 'ëï', 'ëï', 'ìà', 'ìà', 'ëï', 'ëï', 'ìà'),
(7, 'Black Bar ''n'' Burger', 'áì÷', '÷ðéåï òæøéàìé ÷åîä 1, úì àáéá', 1, 32.074226, 34.790897, '03-6950060', 'events,meat,take_away', 5, 1, NULL, 'ëï', 'ëï', 'ëï', 'ëï', 'ìà', 'ìà', 'ëï', 'ëï', 'ìà'),
(8, 'Black Bar ''n'' Burger', 'áì÷', 'ðôçà 52, îúçí one plaza, áàø ùáò', 5, 31.249344, 34.811348, '1-599-555550', 'events,meat,take_away', 0, 0, NULL, 'ëï', 'ëï', 'ëï', 'ëï', 'ìà', 'ìà', 'ëï', 'ëï', 'ìà'),
(9, 'Black Bar ''n'' Burger', 'áì÷', 'éìãé èäøï 6 îòøá øàùì"ö – îúçí G2, øàùåï ìöéåï', 2, 31.985023, 34.769998, '03-9414485', 'events,meat,take_away', 0, 0, NULL, 'ëï', 'ëï', 'ëï', 'ëï', 'ìà', 'ìà', 'ëï', 'ëï', 'ìà'),
(10, 'Black Bar ''n'' Burger', 'áì÷', 'ùìåîöéåï äîìëä 18, éøåùìéí', 3, 31.778973, 35.222379, '02-6246767', 'events,meat,take_away', 5, 2, NULL, 'ëï', 'ëï', 'ëï', 'ëï', 'ìà', 'ìà', 'ëï', 'ëï', 'ìà'),
(11, 'Black Bar ''n'' Burger', 'áì÷', 'äîãò 6, øçåáåú', 6, 31.913277, 34.803907, '08-9361230', 'events,meat,take_away', 0, 0, NULL, 'ëï', 'ëï', 'ëï', 'ëï', 'ìà', 'ìà', 'ëï', 'ëï', 'ìà'),
(12, 'Black Bar ''n'' Burger', 'áì÷', 'öåîú ìá äîôøõ cinemall, çéôä', 4, 32.79289, 35.037221, '04-8422400', 'events,meat,take_away', 0, 0, NULL, 'ëï', 'ëï', 'ëï', 'ëï', 'ìà', 'ìà', 'ëï', 'ëï', 'ìà'),
(13, 'àøåîä ùòøé çãøä', 'Aroma', 'øç'' 4 äàâåãåú 1, îúçí "ùòøé çãøä', 7, 32.434547, 34.909261, '04-6221333', 'take_away', 0, 0, NULL, 'ëï', 'ëï', 'ìà', 'ëï', 'ëï', 'ìà', 'ìà', 'ëï', 'ëï'),
(14, '÷ôä îàåã', 'Caf´e Meod', 'äðùéà 1 , çãøä', 7, 32.440834, 34.915881, '04-6248040', 'events', 0, 0, NULL, 'ìà', 'ëï', 'ëï', 'ëï', 'ìà', 'ëï', 'ëï', 'ëï', 'ëï'),
(15, 'àåôøä', 'Opera', 'äðùéà 61 , çãøä', 7, 32.43874, 34.923692, '04-6322352', 'events,fish,take_away', 0, 0, NULL, 'ìà', 'ëï', 'ëï', 'ëï', 'ìà', 'ëï', 'ìà', 'ìà', 'ëï');

-- --------------------------------------------------------

--
-- Table structure for table `reviews`
--

DROP TABLE IF EXISTS `reviews`;
CREATE TABLE IF NOT EXISTS `reviews` (
  `id` bigint(20) unsigned NOT NULL auto_increment,
  `city_id` bigint(20) NOT NULL,
  `biz_id` bigint(20) NOT NULL,
  `biz_type` enum('restaurants','shopping','nightlife','beauty','hotels') NOT NULL,
  `user_id` bigint(20) NOT NULL,
  `grading` int(11) NOT NULL,
  `title` varchar(100) NOT NULL,
  `review` longtext NOT NULL,
  `added` timestamp NOT NULL default CURRENT_TIMESTAMP on update CURRENT_TIMESTAMP,
  PRIMARY KEY  (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=87 ;

--
-- Dumping data for table `reviews`
--

INSERT INTO `reviews` (`id`, `city_id`, `biz_id`, `biz_type`, `user_id`, `grading`, `title`, `review`, `added`) VALUES
(1, 1, 1, 'restaurants', 1, 5, 'title111', 'Great', '0000-00-00 00:00:00'),
(2, 1, 1, 'restaurants', 1, 5, 'title222', 'ëëë', '0000-00-00 00:00:00'),
(3, 1, 1, 'restaurants', 1, 5, 'title333', 'ëëëë', '0000-00-00 00:00:00'),
(4, 1, 1, 'restaurants', 1, 4, 'title444', 'âãëãâëã', '0000-00-00 00:00:00'),
(5, 1, 1, 'restaurants', 1, 5, 'title555', 'òëâãòã', '0000-00-00 00:00:00'),
(6, 1, 1, 'restaurants', 1, 5, 'won''t come again', 'ëâëãùë', '0000-00-00 00:00:00'),
(7, 1, 1, 'restaurants', 1, 3, 'title3', '4444', '0000-00-00 00:00:00'),
(8, 1, 1, 'restaurants', 1, 1, 'title2', 'ëëëëëë', '0000-00-00 00:00:00'),
(9, 1, 1, 'restaurants', 1, 4, 'title1', 'dddddd', '0000-00-00 00:00:00'),
(10, 1, 1, 'restaurants', 3, 4, 'nice place', 'I really enjoyed there!', '0000-00-00 00:00:00'),
(11, 1, 1, 'restaurants', 4, 4, 'stam', 'bla bla', '0000-00-00 00:00:00'),
(12, 1, 1, 'restaurants', 3, 4, 'title33', 'comment', '0000-00-00 00:00:00'),
(13, 1, 1, 'restaurants', 22, 4, 'âëâ', 'âëâë', '0000-00-00 00:00:00'),
(14, 2, 2, 'restaurants', 22, 5, 'àçìä î÷åí!', 'ôùåè îàåã, îçéø îåì îåöø. áîçéø ùì äòñ÷éåú áìå÷àñ àåëìéí áøùú äîáåøâøéí éãåòä. ñèéé÷ èòéí òñéñé åòùåé äéèá åäîçéø áøöôä. ôùåè îàåã, îçéø îåì îåöø. áîçéø ùì äòñ÷éåú áìå÷àñ àåëìéí áøùú äîáåøâøéí éãåòä. ñèéé÷ èòéí òñéñé åòùåé äéèá åäîçéø áøöôä. ôùåè îàåã, îçéø îåì îåöø.', '2009-08-26 21:24:03'),
(15, 1, 1, 'restaurants', 22, 5, 'òåã áé÷åøú !', 'øáåúé, çéôùúé îñòãä èåáä òí ñèéé÷éí àéëåúééí, åëùøàéúé àú äîçéø áìå÷àñ, çùáúé ôòîééí àí ììëú ëé æä ðøàä çùåã. àáì àðùéí, ÷éáìúé ùí àú àçã äñèéé÷éí äèåáéí ùàëìúé àé ôòí', '0000-00-00 00:00:00'),
(16, 1, 1, 'restaurants', 22, 4, 'áé÷åøú', 'øáåúé, çéôùúé îñòãä èåáä òí ñèéé÷éí àéëåúééí, åëùøàéúé àú äîçéø áìå÷àñ, çùáúé ôòîééí àí ììëú ëé æä ðøàä çùåã. àáì àðùéí, ÷éáìúé ùí àú àçã äñèéé÷éí äèåáéí ùàëìúé àé ôòí', '0000-00-00 00:00:00'),
(17, 1, 1, 'restaurants', 22, 4, 'áé÷åøú', 'øáåúé, çéôùúé îñòãä èåáä òí ñèéé÷éí àéëåúééí, åëùøàéúé àú äîçéø áìå÷àñ, çùáúé ôòîééí àí ììëú ëé æä ðøàä çùåã. àáì àðùéí, ÷éáìúé ùí àú àçã äñèéé÷éí äèåáéí ùàëìúé àé ôòí. øáåúé, çéôùúé îñòãä èåáä òí ñèéé÷éí àéëåúééí, åëùøàéúé àú äîçéø áìå÷àñ, çùáúé ôòîééí àí ììëú ëé æä ðøàä çùåã. àáì àðùéí, ÷éáìúé ùí àú àçã äñèéé÷éí äèåáéí ùàëìúé àé ôòí', '2009-08-26 21:08:12'),
(18, 1, 1, 'restaurants', 22, 4, 'title', 'comment', '2009-08-23 00:00:00'),
(19, 1, 1, 'restaurants', 21, 5, 'ëëë', 'ëë', '2009-08-24 14:07:45'),
(20, 1, 1, 'restaurants', 21, 1, 'îñòãä ôùåè îòåìä!', 'ìëå åúéååëçå.', '2009-08-24 14:54:18'),
(21, 1, 3, 'restaurants', 21, 3, 'òòò', 'ò', '2009-08-26 22:35:53'),
(22, 1, 3, 'restaurants', 21, 3, 'áé÷åøú ÷öøä', 'ðéñéåï ðéñéåï', '2009-08-26 22:36:22'),
(23, 2, 2, 'restaurants', 21, 4, 'áé÷åøú øàùåðä ìðéäå', 'ëéó ëéó', '2009-08-26 22:37:08'),
(24, 1, 3, 'restaurants', 21, 2, 'ðéäå', 'çä çä', '2009-08-26 22:59:52'),
(25, 1, 1, 'restaurants', 21, 5, 'áé÷åøú îàåã àøåëä', 'øáåúé, çéôùúé îñòãä èåáä òí ñèéé÷éí àéëåúééí, åëùøàéúé àú äîçéø áìå÷àñ, çùáúé ôòîééí àí ììëú ëé æä ðøàä çùåã. àáì àðùéí, ÷éáìúé ùí àú àçã äñèéé÷éí äèåáéí ùàëìúé àé ôòí. øáåúé, çéôùúé îñòãä èåáä òí ñèéé÷éí àéëåúééí, åëùøàéúé àú äîçéø áìå÷àñ, çùáúé ôòîééí àí ììëú ëé æä ðøàä çùåã. àáì àðùéí, ÷éáìúé ùí àú àçã äñèéé÷éí äèåáéí ùàëìúé àé ôòíøáåúé, çéôùúé îñòãä èåáä òí ñèéé÷éí àéëåúééí, åëùøàéúé àú äîçéø áìå÷àñ, çùáúé ôòîééí àí ììëú ëé æä ðøàä çùåã. àáì àðùéí, ÷éáìúé ùí àú àçã äñèéé÷éí äèåáéí ùàëìúé àé ôòí. øáåúé, çéôùúé îñòãä èåáä òí ñèéé÷éí àéëåúééí, åëùøàéúé àú äîçéø áìå÷àñ, çùáúé ôòîééí àí ììëú ëé æä ðøàä çùåã. àáì àðùéí, ÷éáìúé ùí àú àçã äñèéé÷éí äèåáéí ùàëìúé àé ôòíøáåúé, çéôùúé îñòãä èåáä òí ñèéé÷éí àéëåúééí, åëùøàéúé àú äîçéø áìå÷àñ, çùáúé ôòîééí àí ììëú ëé æä ðøàä çùåã. àáì àðùéí, ÷éáìúé ùí àú àçã äñèéé÷éí äèåáéí ùàëìúé àé ôòí. øáåúé, çéôùúé îñòãä èåáä òí ñèéé÷éí àéëåúééí, åëùøàéúé àú äîçéø áìå÷àñ, çùáúé ôòîééí àí ììëú ëé æä ðøàä çùåã. àáì àðùéí, ÷éáìúé ùí àú àçã äñèéé÷éí äèåáéí ùàëìúé àé ôòíøáåúé, çéôùúé îñòãä èåáä òí ñèéé÷éí àéëåúééí, åëùøàéúé àú äîçéø áìå÷àñ, çùáúé ôòîééí àí ììëú ëé æä ðøàä çùåã. àáì àðùéí, ÷éáìúé ùí àú àçã äñèéé÷éí äèåáéí ùàëìúé àé ôòí. øáåúé, çéôùúé îñòãä èåáä òí ñèéé÷éí àéëåúééí, åëùøàéúé àú äîçéø áìå÷àñ, çùáúé ôòîééí àí ììëú ëé æä ðøàä çùåã. àáì àðùéí, ÷éáìúé ùí àú àçã äñèéé÷éí äèåáéí ùàëìúé àé ôòí', '2009-08-26 23:02:51'),
(26, 1, 1, 'restaurants', 24, 4, 'áé÷åøú çãùä òáåø ìå÷àñ', 'ðëúáúé ãøê "çôù î÷åí"!!', '2009-08-28 14:49:38'),
(28, 3, 10, 'restaurants', 24, 4, 'áé÷åøú', 'äîáåøâø îòåìä', '2009-08-28 17:11:32'),
(29, 2, 1, 'restaurants', 24, 4, 'á', 'á', '2009-08-28 19:22:35'),
(30, 2, 1, 'restaurants', 24, 4, 'á', 'á', '2009-08-28 19:23:07'),
(31, 2, 1, 'restaurants', 24, 5, 'ù', 'ù"ù', '2009-08-28 19:25:13'),
(32, 2, 1, 'restaurants', 24, 5, 'áé÷åøú àîéúéú', 'øáåúé, çéôùúé îñòãä èåáä òí ñèéé÷éí àéëåúééí, åëùøàéúé àú äîçéø áìå÷àñ, çùáúé ôòîééí àí ììëú ëé æä ðøàä çùåã. àáì àðùéí, ÷éáìúé ùí àú àçã äñèéé÷éí äèåáéí ùàëìúé àé ôòí (åàëìúé áäøáä îñòãåú ùó áùøéåú). òùåé áîéãú öìééä îåùìîú, áùø àéëåúé, îçéø îôúéò (600 âø á-90 ù"ç àì îåì 500 âø áîçéø îîåöò ùì 120 ù"ç áî÷åîåú àçøéí). áú æåâúé ðäðúä îàåã îîðú ëáã äòåó ùìäí. á÷éöåø, îîìéõ áçåí, ììëú åìéäðåú.', '2009-08-28 19:25:57'),
(33, 2, 1, 'restaurants', 24, 5, 'ðéñéåï', 'ðéñéåï', '2009-08-28 19:32:49'),
(34, 1, 6, 'restaurants', 25, 4, 'àëìúé åðäðéúé', 'àëìúé ááì÷ òí äçáøä ùìé àøåçä òñ÷éú. èòéí åîùúìí.\r\n\r\nîîìéõ!', '2009-08-28 19:42:31'),
(35, 1, 4, 'restaurants', 26, 5, 'ë', 'ë', '2009-09-01 19:41:17'),
(36, 1, 1, 'restaurants', 24, 4, 'jjj', 'jjjj', '2009-08-31 19:32:48'),
(37, 1, 1, 'restaurants', 24, 5, 'îñòãä àãéøä!', 'øáåúé, çéôùúé îñòãä èåáä òí ñèéé÷éí àéëåúééí, åëùøàéúé àú äîçéø áìå÷àñ, çùáúé ôòîééí àí ììëú ëé æä ðøàä çùåã. àáì àðùéí, ÷éáìúé ùí àú àçã äñèéé÷éí äèåáéí ùàëìúé àé ôòí (åàëìúé áäøáä îñòãåú ùó áùøéåú). òùåé áîéãú öìééä îåùìîú, áùø àéëåúé, îçéø îôúéò (600 âø á-90 ù"ç àì îåì 500 âø áîçéø îîåöò ùì 120 ù"ç áî÷åîåú àçøéí). áú æåâúé ðäðúä îàåã îîðú ëáã äòåó ùìäí. á÷éöåø, îîìéõ áçåí, ììëú åìéäðåú.', '2009-08-31 22:50:51'),
(40, 1, 1, 'restaurants', 24, 1, 'áé÷åøåú ðåñôú', 'áé÷åøú áé÷åøú áé÷åøú', '2009-09-01 19:43:48'),
(42, 1, 1, 'nightlife', 26, 5, 'î÷åí îòåìä', 'àåéøä èåáä, îåñé÷ä îòåìä åâí äàåëì. îîìéöä!', '2009-09-02 00:32:37'),
(43, 1, 1, 'restaurants', 26, 5, 'ëë', 'ëëë', '2009-09-04 12:49:52'),
(44, 1, 1, 'restaurants', 32, 1, 'áãé÷ä', 'áãé÷ä', '2009-09-04 14:03:48'),
(45, 1, 1, 'restaurants', 32, 1, '4', '4', '2009-09-04 14:04:45'),
(46, 1, 1, 'restaurants', 32, 1, 'áãé÷ä', 'áãé÷ä', '2009-09-04 14:05:13'),
(47, 1, 1, 'restaurants', 32, 1, '1', '1', '2009-09-04 14:08:22'),
(48, 1, 1, 'restaurants', 32, 1, '1', '1', '2009-09-04 14:10:15'),
(49, 1, 1, 'restaurants', 32, 1, '1', '1', '2009-09-04 14:10:31'),
(54, 1, 2, 'shopping', 32, 1, '1', '1', '2009-09-04 14:14:34'),
(57, 1, 2, 'shopping', 32, 1, '1', '1', '2009-09-04 14:44:14'),
(58, 1, 2, 'shopping', 32, 5, '5', '5', '2009-09-04 14:44:22'),
(59, 2, 2, 'restaurants', 32, 1, '1', '1', '2009-09-04 15:54:00'),
(60, 2, 2, 'restaurants', 32, 4, '4', '4', '2009-09-04 17:30:35'),
(61, 2, 1, 'shopping', 32, 3, '3', '3', '2009-09-04 17:31:18'),
(62, 1, 1, 'restaurants', 1, 5, '111', '111', '2009-09-05 14:00:06'),
(63, 1, 4, 'restaurants', 1, 4, '1', '1', '2009-09-05 14:06:12'),
(64, 1, 4, 'restaurants', 1, 1, '1', '1', '2009-09-05 14:07:49'),
(65, 1, 1, 'restaurants', 1, 5, '1', '1', '2009-09-05 14:20:11'),
(66, 1, 1, 'restaurants', 1, 5, 'ewq', 'ewq', '2009-09-05 14:20:30'),
(67, 1, 3, 'restaurants', 33, 5, '1', '1', '2009-09-05 20:46:45'),
(68, 1, 3, 'restaurants', 1, 5, 'u', 'u', '2009-09-06 13:06:46'),
(69, 1, 3, 'restaurants', 1, 5, 'q', 'qqqqq', '2009-09-06 13:23:58'),
(70, 1, 1, 'restaurants', 1, 4, 'ëåúøú', 'áé÷åøú', '2009-09-06 13:28:28'),
(71, 1, 4, 'restaurants', 1, 1, 'ëåúøú', 'áé÷åøú', '2009-09-06 13:42:36'),
(72, 1, 3, 'restaurants', 1, 4, 'ëåúøú', 'áé÷åøú', '2009-09-06 13:45:37'),
(73, 3, 10, 'restaurants', 1, 5, '5', '5', '2009-09-06 21:39:35'),
(74, 1, 1, 'beauty', 1, 5, 'title', 'comment', '2009-09-08 09:58:55'),
(75, 1, 1, 'beauty', 1, 3, '1', '1', '2009-09-08 11:09:02'),
(76, 1, 1, 'beauty', 1, 1, '1', '1', '2009-09-08 11:31:30'),
(77, 1, 6, 'restaurants', 1, 5, 'yoohooo', 'wooohooo', '2009-09-08 12:36:14'),
(78, 1, 7, 'restaurants', 1, 5, 'áé÷åøú øàùåðä', 'ìñðéó áòæøéàìé', '2009-09-08 12:38:31'),
(79, 1, 3, 'beauty', 1, 5, '123', '123', '2009-09-08 12:38:58'),
(80, 1, 2, 'nightlife', 1, 5, 'àçìä ', 'î÷åí èåá', '2009-09-08 17:54:11'),
(82, 1, 5, 'hotels', 1, 5, 'ìà äééúé', 'àæ ìà éåãòú', '2009-09-09 12:08:38'),
(83, 1, 3, 'restaurants', 36, 3, 'áãé''''÷ä÷''', 'á''''ë''', '2009-09-10 14:50:27'),
(86, 1, 3, 'beauty', 26, 5, 'ââ', 'øáåúé, çéôùúé îñòãä èåáä òí ñèéé÷éí àéëåúééí, åëùøàéúé àú äîçéø áìå÷àñ, çùáúé ôòîééí àí ììëú ëé æä ðøàä çùåã. àáì àðùéí, ÷éáìúé ùí àú àçã äñèéé÷éí äèåáéí ùàëìúé àé ôòí. øáåúé, çéôùúé îñòãä èåáä òí ñèéé÷éí àéëåúééí, åëùøàéúé àú äîçéø áìå÷àñ, çùáúé ôòîééí àí ììëú ëé æä ðøàä çùåã. àáì àðùéí, ÷éáìúé ùí àú àçã äñèéé÷éí äèåáéí ùàëìúé àé ôòíøáåúé, çéôùúé îñòãä èåáä òí ñèéé÷éí àéëåúééí, åëùøàéúé àú äîçéø áìå÷àñ, çùáúé ôòîééí àí ììëú ëé æä ðøàä çùåã. àáì àðùéí, ÷éáìúé ùí àú àçã äñèéé÷éí äèåáéí ùàëìúé àé ôòí. øáåúé, çéôùúé îñòãä èåáä òí ñèéé÷éí àéëåúééí, åëùøàéúé àú äîçéø áìå÷àñ, çùáúé ôòîééí àí ììëú ëé æä ðøàä çùåã. àáì àðùéí, ÷éáìúé ùí àú àçã äñèéé÷éí äèåáéí ùàëìúé àé ôòíøáåúé, çéôùúé îñòãä èåáä òí ñèéé÷éí àéëåúééí, åëùøàéúé àú äîçéø áìå÷àñ, çùáúé ôòîééí àí ììëú ëé æä ðøàä çùåã. àáì àðùéí, ÷éáìúé ùí àú àçã äñèéé÷éí äèåáéí ùàëìúé àé ôòí. øáåúé, çéôùúé îñòãä èåáä òí ñèéé÷éí àéëåúééí, åëùøàéúé àú äîçéø áìå÷àñ, çùáúé ôòîééí àí ììëú ëé æä ðøàä çùåã. àáì àðùéí, ÷éáìúé ùí àú àçã äñèéé÷éí äèåáéí ùàëìúé àé ôòíøáåúé, çéôùúé îñòãä èåáä òí ñèéé÷éí àéëåúééí, åëùøàéúé àú äîçéø áìå÷àñ, çùáúé ôòîééí àí ììëú ëé æä ðøàä çùåã. àáì àðùéí, ÷éáìúé ùí àú àçã äñèéé÷éí äèåáéí ùàëìúé àé ôòí. øáåúé, çéôùúé îñòãä èåáä òí ñèéé÷éí àéëåúééí, åëùøàéúé àú äîçéø áìå÷àñ, çùáúé ôòîééí àí ììëú ëé æä ðøàä çùåã. àáì àðùéí, ÷éáìúé ùí àú àçã äñèéé÷éí äèåáéí ùàëìúé àé ôòí', '2009-09-12 22:46:03');

-- --------------------------------------------------------

--
-- Table structure for table `shopping`
--

DROP TABLE IF EXISTS `shopping`;
CREATE TABLE IF NOT EXISTS `shopping` (
  `id` bigint(20) NOT NULL auto_increment,
  `name` varchar(100) NOT NULL,
  `another_name` varchar(100) default NULL,
  `address` varchar(200) NOT NULL,
  `city_id` bigint(20) NOT NULL,
  `lat` double default NULL,
  `lon` double default NULL,
  `phone_number` varchar(100) NOT NULL,
  `category` set('Antiques','Fashion','Electronics','Jewelry','Flowers & Gifts','Computers','Home & Garden','Toy Stores','Shopping Centers','Drugstores','Books & Music & Video','Office Equipment') NOT NULL,
  `grading` int(10) unsigned NOT NULL default '0',
  `num_reviews` bigint(20) unsigned NOT NULL default '0',
  `hours` varchar(200) NOT NULL default '08:00-20:00',
  `link` varchar(100) default NULL,
  `invalid_access` varchar(2) NOT NULL,
  `parking` varchar(2) NOT NULL,
  PRIMARY KEY  (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Dumping data for table `shopping`
--

INSERT INTO `shopping` (`id`, `name`, `another_name`, `address`, `city_id`, `lat`, `lon`, `phone_number`, `category`, `grading`, `num_reviews`, `hours`, `link`, `invalid_access`, `parking`) VALUES
(1, '÷ðéåï øåèùéìã', 'Rotchiled', 'øåèùéìã 45, øàùåï ìöéåï', 2, 31.963892, 34.801337, '03-9500765', 'Shopping Centers', 3, 1, '09:00-22:00', NULL, 'ëï', 'ëï'),
(2, 'îøëæ òæøéàìé', 'Azrieli', 'ãøê îðçí áâéï 132, úì àáéá', 1, 32.07438, 34.791917, '03-6081199', 'Shopping Centers', 3, 3, '09:00-23:00', NULL, 'ëï', 'ëï'),
(3, '÷ðéåï ìá çãøä', NULL, 'øåèùéìã 40, çãøä', 7, 32.437379, 34.921141, '04-6322570', 'Shopping Centers', 0, 0, '09:00-21:00', NULL, 'ëï', 'ëï'),
(4, '÷ðéåï ùòøé çãøä', NULL, 'àøáò äàâåãåú 1, çãøä', 7, 32.434403, 34.90927, '04-3643315', 'Shopping Centers', 0, 0, '08:00-22:00', NULL, 'ëï', 'ëï');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
CREATE TABLE IF NOT EXISTS `users` (
  `id` bigint(50) unsigned NOT NULL auto_increment,
  `username` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `city` varchar(50) NOT NULL,
  `register_since` varchar(100) NOT NULL default '2009',
  `password` varchar(50) NOT NULL,
  PRIMARY KEY  (`id`),
  UNIQUE KEY `email` (`email`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=37 ;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `email`, `city`, `register_since`, `password`) VALUES
(1, 'ss', 'ss', '', '2009', '*A4B6157319038724E3560894F7F932C8886EBFCF'),
(2, 'yaelamar', 'yael.amar@gmail.com', '', '2009', '*49A10F3E311E3A15524E924E08DC14399E01C7B1'),
(3, 'a', 'avi_amar@smile.net.il', '', '2009', '*667F407DE7C6AD07358FA38DAED7828A72014B4E'),
(4, 's', 's', '', '2009', '*16863C23B2E91537AEAEDDE9D1B40DA2A975C5DC'),
(5, 'simamar', 'simamar@zahav.net.il', '', '2009', '*85AC05E6555E3DFD5C1385A34FFC3F763F7E5F73'),
(6, 'tehila', 'tehila@zahav.net.il', '', '2009', '*2D8EF61A814C7AEC5FE0446292E7AA6CC39B868D'),
(7, 'fame', 'fame@gmail.com', '', '2009', '*23AE809DDACAF96AF0FD78ED04B6A265E05AA257'),
(8, 'first', 'first@gmail', 'hadera', '2009', '*23AE809DDACAF96AF0FD78ED04B6A265E05AA257'),
(9, 'new', 'new@gmail', 'lon', '2009', '*23AE809DDACAF96AF0FD78ED04B6A265E05AA257'),
(10, 'new1', 'new1@gmail', 'lon', '2009', '*23AE809DDACAF96AF0FD78ED04B6A265E05AA257'),
(11, 'new2', 'new2@gmail', 'lon', '2009', '*23AE809DDACAF96AF0FD78ED04B6A265E05AA257'),
(12, 'new3', 'new3@gmail', 'lon', '2009', '*23AE809DDACAF96AF0FD78ED04B6A265E05AA257'),
(13, 'new4', 'new4@gmail', 'lon', '2009', '*23AE809DDACAF96AF0FD78ED04B6A265E05AA257'),
(14, 'new5', 'new5@gmail', 'tel aviv', '2009', '*23AE809DDACAF96AF0FD78ED04B6A265E05AA257'),
(15, 'last_new', 'last_new@gmail', 'çãøä', '2009', '*AA803D048B666A933E512AA53B36C70174A37D1E'),
(16, 'new6', 'new6@gmail', '', '2009', '*AA803D048B666A933E512AA53B36C70174A37D1E'),
(17, 'a', 'b', '', '2009', '*E6CC90B878B948C35E92B003C792C46C58C4AF40'),
(18, 'a', 'bbb', '', '2009', '*E6CC90B878B948C35E92B003C792C46C58C4AF40'),
(19, 'new7', 'new7@gmail', 'éøåùìéí', '2009', '*AA803D048B666A933E512AA53B36C70174A37D1E'),
(20, 'new8', 'new8@gmail', 'çãøä', '2009', '*AA803D048B666A933E512AA53B36C70174A37D1E'),
(21, 'ìéàì', 'liel@gmail.com', 'øàùåï ìöéåï', '2009', '*DB733DE410D73FD3F5FBFEEF905D50C20EDC2289'),
(22, 'éòì', 'ya@gmail.com', 'øàùåï ìöéåï', '2009', '*BB911A171A3326A6E6C06494EA65C16BFE40BF6C'),
(23, 'new9', 'new9', '', '2009', '*AA803D048B666A933E512AA53B36C70174A37D1E'),
(24, 'éùøàééìô', 'israyelp@gmail.com', 'øàùåï ìöéåï', '2009', '*6D551B5115752364CD833A0FB7E25C08828FC719'),
(25, 'àåøï', 'oren.anava@gmail.com', 'øàùåï ìöéåï', '2009', '*6DCDFA17ECCBC77002231BA2D41645CB5C12A6FA'),
(26, 'ø', 'ø', 'øàùåï ìöéåï', '2009', '*5955B221A4E47BA49143AA9B7343DB99B634AC49'),
(27, 'çãù', 'hadash@hotmail.com', 'úì àáéá', '2009', '*D8445BE238B03A4071435DEC958363BA86BC8F47'),
(28, 'ä', '2@f.com', 'ft', '2009', '*3EECD34F01EF55D497F717E8D1FF50477CC1DE27'),
(29, 'ò', 'alonarden1@gmail.com', 'ô', 'ñôèîáø,2009', '*AB6A3653693DD7DE3BFAA517B02B1F52EE1C8B7B'),
(30, 'éòì', 'alonaddrden@gmail.com', '÷÷÷÷', 'ñôèîáø,2009', '*BB911A171A3326A6E6C06494EA65C16BFE40BF6C'),
(31, 'éòì', 'd@gmail.com', 'q', 'ñôèîáø ,2009', '*3FBEFEC33FD8E842761B011670846D73057E67BE'),
(32, 'éòì', 'w@gmail.com', 'øàùåï ìöéåï', 'ñôèîáø, 2009', '*BB911A171A3326A6E6C06494EA65C16BFE40BF6C'),
(33, 'mila', 'milaor@gmail.com', 'øçåáåú', 'ñôèîáø, 2009', '*23AE809DDACAF96AF0FD78ED04B6A265E05AA257'),
(34, 'ë', 'aba@gmail.com', 'øàùåï ìöéåï', 'ñôèîáø, 2009', '*3F8F2091F624B478075922483EBDAB5E813AE87C'),
(35, 'simamr', 'ã', 'øàùåï ìöéåï', 'ñôèîáø, 2009', '*F111ECC54F9FEEA55AF0B32CD8081F1410A0D6CC'),
(36, 'ëë''â', 'r@gmail.com', 'øàùåï ìöéåï', 'ñôèîáø, 2009', '*7B844B41A3799185EBF33B603FA8C632E65CA3EF');
