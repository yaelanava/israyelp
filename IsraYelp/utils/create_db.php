<?php

include './functions.php';

$mysqli = getMysqliConnection();

$query = "

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
  `category` set('עיצוב שיער','ספא','הסרת שיער','בניית ציפורניים') NOT NULL,
  `grading` int(10) unsigned NOT NULL default '0',
  `num_reviews` bigint(20) unsigned NOT NULL default '0',
  `hours` varchar(100) NOT NULL default '08:00-20:00',
  `link` varchar(100) default NULL,
  `invalid_access` varchar(2) NOT NULL,
  `parking` varchar(2) NOT NULL,
  `events` varchar(2) NOT NULL,
  PRIMARY KEY  (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

--
-- Dumping data for table `beauty`
--

INSERT INTO `beauty` 
(`id`, `name`, `another_name`, `address`, `city_id`, `lat`, `lon`, `phone_number`, `category`, `grading`, `num_reviews`, `hours`, `link`, `invalid_access`, `parking`, `events`) VALUES
(1, 'מרכז ציפה', 'Private Sea', 'קהילת סלוניקי 11, תל אביב', 1, 32.113591, 34.824404, '03-6488112', 'ספא', 0, 0, 'א\'- ה\' 09:00 - 21:00 ו\' 09:00 - 15:00', 'www.privatesea.co.il', 'לא', 'כן', 'כן'),
(2, 'לייף לוקס', 'life luxe', 'נחלת יצחק 18, מגדלי תל אביב', 1, 32.074653, 34.797989, '1-700-700-606', 'ספא', 0, 0, 'יום א\' 17:00-21:00 יום ב\'-ה\' 9:00-21:00 ימי ו\' ושבת: 9:00-18:00', 'www.lifeluxe.co.il', 'כן', 'כן', 'כן'),
(3, 'ספא מעל כולם', 'aboveall', 'אליעזר פרי 10, תל אביב', 1, 32.087071, 34.770266, '03-5201880', 'ספא', 0, 0, 'כל ימות השעות כולל שישי ושבת - 07:00-19:00', 'www.aboveall.co.il', 'לא', 'כן', 'כן'),
(4, 'טיטניק ספא', 'Titanic Spa', 'לישינסקי 17, ראשון לציון', 2, 31.992468, 34.767047, '03-9416171', 'ספא', 0, 0, '9:00 - 21:00', 'www.titanicspa.co.il', 'לא', 'כן', 'כן'),
(5, 'דודו רומנו', NULL, 'שמעון פרס 33 ראשון לציון', 2, 31.968443, 34.763871, '1-700-709705', 'עיצוב שיער', 0, 0, 'א\'-ה\' 9:00-21:00 ו\' 8:30-15:00', 'www.dudu-romano.co.il', 'כן', 'כן', ''),
(6, 'ויציאנו שלומי - עיצוב שיער', NULL, 'שדרות החירות 17 , חדרה', 7, 32.440936, 34.915484, '04-6325444', 'עיצוב שיער,בניית ציפורניים', 0, 0, '09:00-19:30', NULL, 'לא', 'לא', 'לא'),
(7, 'מלי ליין עיצוב שיער', NULL, 'הנשיא 67, חדרה', 7, 32.440356, 34.917608, '050-7802400', 'עיצוב שיער', 0, 0, '09:00-20:00', NULL, 'לא', 'לא', 'לא'),
(8, 'רואי ערבה - בסגנון אחר', NULL, 'הנשיא 55, חדרה', 7, 32.438941, 34.922935, '04-6324870', 'עיצוב שיער', 0, 0, '09:00-19:00', NULL, 'לא', 'לא', 'לא');

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
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

--
-- Dumping data for table `cities`
--

INSERT INTO `cities` (`id`, `name`, `english_name`) VALUES
(1, 'תל אביב', 'Tel Aviv'),
(2, 'ראשון לציון', 'Rishon Le Zion'),
(3, 'ירושלים', 'Jerusalem'),
(4, 'חיפה', 'Haifa'),
(5, 'באר שבע', 'Be''er Sheva'),
(6, 'רחובות', 'Rehovot'),
(7, 'חדרה', 'Hadera');

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
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

--
-- Dumping data for table `coupons`
--

INSERT INTO `coupons` (`id`, `city_id`, `biz_id`, `biz_type`, `coupon`) VALUES
(1, 1, 4, 'restaurants', 'שתי כוסות יין או קינוח על חשבון הבית בהזמנה מעל 100 ש\"ח לא כולל ארוחות בוקר'),
(2, 1, 3, 'restaurants', 'קינוח הבית מתנה לזוג (קדאיף מהטאבון) בהזמנת ארוחה מלאה');

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
(1, 4, 'restaurants'),
(1, 7, 'restaurants'),
(1, 1, 'beauty'),
(1, 1, 'nightlife'),
(1, 2, 'beauty'),
(1, 1, 'hotels'),
(26, 1, 'restaurants');

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
  `category` set('מלונות') NOT NULL,
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
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

--
-- Dumping data for table `hotels`
--

INSERT INTO `hotels` (`id`, `name`, `another_name`, `address`, `city_id`, `lat`, `lon`, `phone_number`, `category`, `grading`, `num_reviews`, `link`, `invalid_access`, `parking`, `spa`, `pool`, `kosher`, `kids_club`, `intranet`, `tv`, `mini_bar`, `jim`) VALUES
(1, 'דן', 'Dan', 'הירקון 99 , תל אביב', 1, 32.079496, 34.767931, '03-5202525', 'מלונות', 0, 0, NULL, 'כן', 'כן', 'כן', 'כן', 'כן', 'כן', 'כן', 'כן', 'כן', 'לא'),
(2, 'גולדן ביץ\'', 'Golden Beach', 'הרברט סמואל 56 , תל אביב', 1, 32.07345, 34.764948, '057-9376958', 'מלונות', 0, 0, NULL, 'לא', 'לא', 'לא', 'לא', 'לא', 'לא', 'כן', 'כן', 'כן', 'לא'),
(3, 'ישרוטל טאואר', 'ISROTEL Tower', 'הירקון 78 , תל אביב', 1, 32.076891, 34.767107, '03-5113603', 'מלונות', 0, 0, NULL, 'כן', 'כן', 'לא', 'כן', 'לא', 'לא', 'לא', 'לא', 'לא', 'כן'),
(4, 'מרינה', 'Marina', 'הירקון 167 , תל אביב', 1, 32.085627, 34.770259, '03-5211777', 'מלונות', 0, 0, NULL, 'כן', 'כן', 'לא', 'כן', 'כן', 'לא', 'כן', 'כן', 'כן', 'לא'),
(5, 'קרלטון', 'Carlton', 'אליעזר פרי 10 , תל אביב', 1, 32.086757, 34.770213, '03-5201818', 'מלונות', 0, 0, NULL, 'כן', 'כן', 'לא', 'כן', 'כן', 'לא', 'כן', 'כן', 'כן', 'כן'),
(6, 'גלרי', 'Gallery', 'הרצל 61, חיפה', 4, 32.808, 35.000655, '057-9379311', 'מלונות', 0, 0, NULL, 'לא', 'כן', 'כן', 'לא', 'כן', 'לא', 'כן', 'כן', 'לא', 'כן'),
(7, 'הר הכרמל', 'Mount Carmel', 'דרך הים 103, חיפה', 4, 32.810308, 34.974732, '04-8381414', 'מלונות', 0, 0, NULL, 'לא', 'כן', 'כן', 'כן', 'כן', 'לא', 'כן', 'כן', 'לא', 'כן'),
(8, 'קולוני', 'Colony Hotel', 'בן גוריון 28, חיפה', 4, 32.820292, 34.99065, '04-8513366', 'מלונות', 0, 0, NULL, 'כן', 'כן', 'לא', 'לא', 'לא', 'לא', 'כן', 'כן', 'כן', 'לא'),
(9, 'דן בוטיק', 'Dan boutique', 'דרך חברון 31, ירושלים', 3, 31.766868, 35.225776, '02-5689999', 'מלונות', 0, 0, NULL, 'כן', 'כן', 'לא', 'לא', 'כן', 'לא', 'כן', 'כן', 'לא', 'כן'),
(10, 'פרימה פאלאס', 'Prima Palace', 'פינס 2 , ירושלים', 3, 31.785323, 35.215017, '057-9379977', 'מלונות', 0, 0, NULL, 'כן', 'כן', 'לא', 'לא', 'כן', 'לא', 'לא', 'לא', 'כן', 'לא'),
(11, 'פלאזה', 'Plaza', 'המלך ג\`ורג\` 47 , ירושלים', 3, 31.776671, 35.216734, '02-62986666', 'מלונות', 0, 0, NULL, 'כן', 'כן', 'לא', 'כן', 'כן', 'כן', 'כן', 'כן', 'כן', 'לא'),
(12, 'לאונרדו נגב', NULL, 'הנרייטה סולד 4, באר שבע', 5, 31.247196, 34.801045, '08-6405444', 'מלונות', 0, 0, NULL, 'לא', 'לא', 'כן', 'לא', 'לא', 'לא', 'כן', 'כן', 'כן', 'כן');

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
  `category` set('ברים','קומדי קלאב','קריוקי','ג\'אז ובלוז','מועדוני דאנס') NOT NULL,
  `grading` int(10) unsigned NOT NULL default '0',
  `num_reviews` bigint(20) unsigned NOT NULL default '0',
  `hours` varchar(100) NOT NULL,
  `link` varchar(100) default NULL,
  `invalid_access` varchar(2) NOT NULL,
  `Happy Hour` varchar(100) NOT NULL,
  `parking` varchar(2) NOT NULL,
  `outside` varchar(2) NOT NULL,
  `smoking` varchar(2) NOT NULL,
  PRIMARY KEY  (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

--
-- Dumping data for table `nightlife`
--

INSERT INTO `nightlife` (`id`, `name`, `another_name`, `address`, `city_id`, `lat`, `lon`, `phone_number`, `category`, `grading`, `num_reviews`, `hours`, `link`, `invalid_access`, `Happy Hour`, `parking`, `outside`, `smoking`) VALUES
(1, 'שבלול jazz', 'Sablul Jazz', 'האנגר 13 - נמל תל-אביב, תל אביב', 1, 32.098629, 34.774257, '03-5461891', 'ג\'אז ובלוז', 0, 0, '20:00-02:00', 'www.shabluljazz.com', 'כן', 'לא', 'כן', 'לא', 'לא'),
(2, 'מועדון הבלוק', 'The Block Club', 'דוד חכמי 35, תל-אביב', 1, 32.063436, 34.783764, '03-5379963', 'מועדוני דאנס', 0, 0, '', 'www.block-club.com', 'לא', 'כן', 'כן', 'לא', 'לא');

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
  `category` set('ארועים','בשר','גורמה','דגים','ים-תיכוני','מאכלי ים','מסעדת ים','טייק אווי') NOT NULL,
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
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

--
-- Dumping data for table `restaurants`
--

INSERT INTO `restaurants` (`id`, `name`, `another_name`, `address`, `city_id`, `lat`, `lon`, `phone_number`, `category`, `grading`, `num_reviews`, `link`, `delivery`, `invalid_access`, `events`, `parking`, `outside`, `kosher`, `child_friendly`, `romantic`, `smoking`) VALUES
(1, 'לוקאס', 'Lucas', 'מזא\"ה 5, תל אביב', 1, 32.06711, 34.77177, '03-5252565, 03-5686820', 'ארועים,טייק אווי', 0, 0, NULL, 'כן', 'כן', 'כן', 'כן', 'כן', 'לא', 'כן', 'כן', 'כן'),
(2, 'Niho','ניהו' ,'משה בקר 9 - א.ת. ישן, ראשון לציון', 2, 31.974337, 34.80871, '057-222-3333  (שלוחה 4222)', 'ארועים,בשר,דגים', 0, 0, NULL, 'לא', 'כן', 'כן', 'כן', 'כן', 'לא', 'כן', 'כן', 'כן'),
(3, 'קפה נמרוד', 'cafe Nimrod', 'האנגר 8 - נמל תל אביב, תל אביב', 1, 32.098034, 34.774446, '077-2133007', 'ארועים', 0, 0, NULL, 'לא', 'כן', 'כן', 'כן', 'כן', 'לא', 'כן', 'כן', 'כן'),
(4, 'פאשה', 'Pasha', 'הארבעה 8, תל אביב', 1, 32.070416, 34.783591, '03-5617778', 'ארועים,בשר,ים-תיכוני', 0, 0, NULL, 'לא', 'כן', 'כן', 'כן', 'לא', 'כן', 'לא', 'כן', 'לא'),
(6, 'Black Bar ''n'' Burger', 'בלק','הברזל 23 - רמת החייל , תל אביב', 1, 32.108993, 34.839746, '03-6441000', 'ארועים,בשר,טייק אווי', 0, 0, NULL, 'כן', 'כן', 'כן', 'כן', 'לא', 'לא', 'כן', 'כן', 'לא'),
(7, 'Black Bar ''n'' Burger', 'בלק', 'קניון עזריאלי קומה 1, תל אביב', 1, 32.074226, 34.790897, '03-6950060', 'ארועים,בשר,טייק אווי', 0, 0, NULL, 'כן', 'כן', 'כן', 'כן', 'לא', 'לא', 'כן', 'כן', 'לא'),
(8, 'Black Bar ''n'' Burger', 'בלק', 'נפחא 52, מתחם one plaza, באר שבע', 5, 31.249344, 34.811348, '1-599-555550', 'ארועים,בשר,טייק אווי', 0, 0, NULL, 'כן', 'כן', 'כן', 'כן', 'לא', 'לא', 'כן', 'כן', 'לא'),
(9, 'Black Bar ''n'' Burger', 'בלק','ילדי טהרן 6 מערב ראשל\"צ – מתחם G2, ראשון לציון', 2, 31.985023, 34.769998, '03-9414485', 'ארועים,בשר,טייק אווי', 0, 0, NULL, 'כן', 'כן', 'כן', 'כן', 'לא', 'לא', 'כן', 'כן', 'לא'),
(10, 'Black Bar ''n'' Burger', 'בלק', 'שלומציון המלכה 18, ירושלים', 3, 31.778973, 35.222379, '02-6246767', 'ארועים,בשר,טייק אווי', 0, 0, NULL, 'כן', 'כן', 'כן', 'כן', 'לא', 'לא', 'כן', 'כן', 'לא'),
(11, 'Black Bar ''n'' Burger', 'בלק', 'המדע 6, רחובות', 6, 31.913277, 34.803907, '08-9361230', 'ארועים,בשר,טייק אווי', 0, 0, NULL, 'כן', 'כן', 'כן', 'כן', 'לא', 'לא', 'כן', 'כן', 'לא'),
(12, 'Black Bar ''n'' Burger', 'בלק','צומת לב המפרץ cinemall, חיפה', 4, 32.79289, 35.037221, '04-8422400', 'ארועים,בשר,טייק אווי', 0, 0, NULL, 'כן', 'כן', 'כן', 'כן', 'לא', 'לא', 'כן', 'כן', 'לא'),
(13, 'ארומה שערי חדרה', 'Aroma', 'רח\' 4 האגודות 1, מתחם שערי חדרה', 7, 32.434547, 34.909261, '04-6221333', 'טייק אווי', 0, 0, NULL, 'כן', 'כן', 'לא', 'כן', 'כן', 'לא', 'לא', 'כן', 'כן'),
(14, 'קפה מאוד', 'Cafe Meod', 'הנשיא 1 , חדרה', 7, 32.440834, 34.915881, '04-6248040', 'ארועים', 0, 0, NULL, 'לא', 'כן', 'כן', 'כן', 'לא', 'כן', 'כן', 'כן', 'כן'),
(15, 'אופרה', 'Opera', 'הנשיא 61 , חדרה', 7, 32.43874, 34.923692, '04-6322352', 'ארועים,דגים,טייק אווי', 0, 0, NULL, 'לא', 'כן', 'כן', 'כן', 'לא', 'כן', 'לא', 'לא', 'כן');

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
  `category` set('עתיקות','אופנה','אלקטרוניקה','תכשיטים','פרחים ומתנות','מחשבים','בית וגינה','חנויות צעצועים','מרכזי קניות','בתי מרקחת','ספרים מוזיקה ווידאו','ציוד משרדי') NOT NULL,
  `grading` int(10) unsigned NOT NULL default '0',
  `num_reviews` bigint(20) unsigned NOT NULL default '0',
  `hours` varchar(200) NOT NULL,
  `link` varchar(100) default NULL,
  `invalid_access` varchar(2) NOT NULL,
  `parking` varchar(2) NOT NULL,
  PRIMARY KEY  (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

--
-- Dumping data for table `shopping`
--

INSERT INTO `shopping` (`id`, `name`, `another_name`, `address`, `city_id`, `lat`, `lon`, `phone_number`, `category`, `grading`, `num_reviews`, `hours`, `link`, `invalid_access`, `parking`) VALUES
(1, 'קניון רוטשילד', 'Rotchiled', 'רוטשילד 45, ראשון לציון', 2, 31.963892, 34.801337, '03-9500765', 'מרכזי קניות', 0, 0, '09:00-22:00', NULL, 'כן', 'כן'),
(2, 'מרכז עזריאלי', 'Azrieli', 'דרך מנחם בגין 132, תל אביב', 1, 32.07438, 34.791917, '03-6081199', 'מרכזי קניות', 0, 0, '09:00-23:00', NULL, 'כן', 'כן'),
(3, 'קניון לב חדרה', NULL, 'רוטשילד 40, חדרה', 7, 32.437379, 34.921141, '04-6322570', 'מרכזי קניות', 0, 0, '09:00-21:00', NULL, 'כן', 'כן'),
(4, 'קניון שערי חדרה', NULL, 'ארבע האגודות 1, חדרה', 7, 32.434403, 34.90927, '04-3643315', 'מרכזי קניות', 0, 0, '08:00-22:00', NULL, 'כן', 'כן');

-- --------------------------------------------------------

--
-- Table structure for table `messages`
--

DROP TABLE IF EXISTS `messages`;
CREATE TABLE IF NOT EXISTS `messages` (
  `sender_id` bigint(20) NOT NULL,
  `recipient_id` bigint(20) NOT NULL,
  `message` text NOT NULL,
  PRIMARY KEY  (`recipient_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `messages`
--

INSERT INTO `messages` (`sender_id`, `recipient_id`, `message`) VALUES
(1, 2, 'hello!!!! :)'),
(2, 1, 'hello to you too!!!! :)');


-- ----------------------------------------------------------

--
-- Table structure for table `users` - example
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
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

--
-- Dumping data for table `users`
--

-- INSERT INTO `users` (`id`, `username`, `email`, `city`, `register_since`, `password`) VALUES
-- (1, 'יעל', 'yael.amar@gmail.com', 'ראשון לציון', 'ספטמבר, 2009', '*80926D3F75126C85D893B06075303123B69AAD58');

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
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

--
-- Dumping data for table `reviews` - example
--

-- INSERT INTO `reviews` (`id`, `city_id`, `biz_id`, `biz_type`, `user_id`, `grading`, `title`, `review`, `added`) VALUES
-- (1, 1, 1, 'restaurants', 1, 5, 'title111', 'Great', '0000-00-00 00:00:00');

";

$result = $mysqli->query($query);
if ($result) {
	echo "nice";
} else {
	echo "shit!";
}

?>