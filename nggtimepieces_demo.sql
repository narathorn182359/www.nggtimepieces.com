-- phpMyAdmin SQL Dump
-- version 4.8.4
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Aug 05, 2020 at 10:55 AM
-- Server version: 5.5.32
-- PHP Version: 5.6.27

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `nggtimepieces_demo`
--

-- --------------------------------------------------------

--
-- Table structure for table `banner`
--

CREATE TABLE `banner` (
  `id_banner` int(10) UNSIGNED NOT NULL,
  `name_banner` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `img` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `active` tinyint(1) NOT NULL DEFAULT '1',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `banner`
--

INSERT INTO `banner` (`id_banner`, `name_banner`, `img`, `active`, `created_at`, `updated_at`) VALUES
(3, '3', '1594179030.jpg', 1, '2020-07-08 03:30:30', NULL),
(4, '2', '1588574910.jpg', 1, '2020-05-04 06:48:30', NULL),
(5, '5', '1588660576.jpg', 1, '2020-05-05 06:36:16', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `blog`
--

CREATE TABLE `blog` (
  `id_blog` int(10) UNSIGNED NOT NULL,
  `img` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `name_blog` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `titel_blog` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `blog_detail` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `active` tinyint(1) NOT NULL DEFAULT '1',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `blog`
--

INSERT INTO `blog` (`id_blog`, `img`, `name_blog`, `titel_blog`, `blog_detail`, `active`, `created_at`, `updated_at`) VALUES
(1, '1588361258.jpg', 'Our values at Aerowatch', 'Each watch is assembled and then tested in our workshops, according to extremely demanding criteria. All our movements are composed of sets of parts crafted to chronometer-precision standards', '<p><img alt=\"\" src=\"https://www.nggtimepieces.com/img/1.png\" style=\"width:100%\" /></p>\r\n\r\n<p><img alt=\"\" src=\"https://www.nggtimepieces.com/img/2.png\" style=\"width:100%\" /></p>', 1, '2020-05-04 08:52:25', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `boutiuqes`
--

CREATE TABLE `boutiuqes` (
  `id_boutiuqes` int(10) UNSIGNED NOT NULL,
  `name_boutiuqes` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `boutiuqes_detail` varchar(500) COLLATE utf8mb4_unicode_ci NOT NULL,
  `active` tinyint(1) NOT NULL DEFAULT '1',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `boutiuqes`
--

INSERT INTO `boutiuqes` (`id_boutiuqes`, `name_boutiuqes`, `boutiuqes_detail`, `active`, `created_at`, `updated_at`) VALUES
(1, 'NGG Timepieces Head Office', '<p>Multi-Brands.&nbsp; Bangkok, Thailand</p>\r\n\r\n<p>428 Ratchadapisek Rd.,</p>\r\n\r\n<p>Chong Nonsi, Yan Nawa, Bangkok 10120</p>\r\n\r\n<p>STORE HOURS 09:00 - 18:30 (Mon-Fri)</p>\r\n\r\n<p>CONTACT Tel:&nbsp;<a href=\"tel:+662-678-9988\">+662-678-9988</a></p>\r\n\r\n<ul>\r\n</ul>', 1, NULL, NULL),
(2, 'Central World', '<p>Multi-Brands Bangkok, Thailand</p>\r\n\r\n<p>Department Store 1 FL. 4/4 / 2/4 Ratchadamri Road,</p>\r\n\r\n<p>Pathumwan, Pathumwan, Bangkok 10330</p>\r\n\r\n<p>STORE HOURS&nbsp; &nbsp;10:30 - 22:00 (Mon-Sun)</p>\r\n\r\n<p>CONTACT&nbsp; Tel:&nbsp;<a href=\"tel:+662-640-7000\">+662-640-7000</a></p>\r\n\r\n<ul>\r\n</ul>', 1, NULL, NULL),
(3, 'Central Plaza Ladprao', '<p>Multi-Brands&nbsp; Bangkok, Thailand</p>\r\n\r\n<p>Department Store 3 FL. 1693 Phaholyothin Rd.,</p>\r\n\r\n<p>Chatuchak, Chatuchak, Bangkok 10900</p>\r\n\r\n<p>STORE HOURS&nbsp; 10:00 - 22:00 (Mon-Sun)</p>\r\n\r\n<p>CONTACT&nbsp; Tel:&nbsp;<a href=\"tel:+662-793-6000\">+662-793-6000</a></p>\r\n\r\n<ul>\r\n</ul>', 1, NULL, NULL),
(4, 'Central Plaza WestGate', '<p>Multi-Brands&nbsp; Nonthaburi, Thailand</p>\r\n\r\n<p>Department Store 1 FL. 199, 199/1, 199/2 Moo 6 Bang Yai Sub-district,</p>\r\n\r\n<p>Sao Thong Hin Nonthaburi 11140</p>\r\n\r\n<p>STORE HOURS 10:00 - 21:00 (Mon-Sun)</p>\r\n\r\n<p>CONTACT Tel:&nbsp;<a href=\"tel:+662-102-7999\">+662-102-7999</a></p>\r\n\r\n<ul>\r\n</ul>', 1, NULL, NULL),
(5, 'Central Plaza Udonthani', '<p>Rolex Boutique&nbsp; Udonthani, Thailand</p>\r\n\r\n<p>Department Store 1 FL. 277 / 1-3 Prajaksilpak Amphoe Mueang Udon Thani,</p>\r\n\r\n<p>Udon Thani 41000</p>\r\n\r\n<p>STORE HOURS&nbsp; 10:30 - 21:00 (Mon-Sun)</p>\r\n\r\n<p>CONTACT Tel:&nbsp;<a href=\"tel:+664-292-1339\">+664-292-1339</a></p>\r\n\r\n<ul>\r\n</ul>', 1, NULL, NULL),
(6, 'เซ็นทรัล สาขาลาดพร้าว', '<p>คุณสุรีย์ มะหะหมัด (คุณไม)</p>\r\n\r\n<p>ห้องเลขที่ 342 ชั้น3 ที่อยู่ 1693</p>\r\n\r\n<p>ถ.พหลโยธิน แขวงจตุจักร เขตกรุงเทพฯ</p>\r\n\r\n<p>จ.กรุงเทพฯ 10900 โทร 064-696-3969</p>\r\n\r\n<p>&nbsp;</p>', 1, NULL, NULL),
(7, 'เซ็นทรัลพลาซ่า สาขาเวสเกต', '<p>คุณนิรชัย เรืองแก้ว (คุณระ)</p>\r\n\r\n<p>ห้องเลขที่ 107 ,108 ชั้น1 ที่อยู่ 199,199/1,199/2</p>\r\n\r\n<p>ม.6 ต.บางเสาธงหิน อ.บางใหญ่ จ.นนทบุรี 11140</p>\r\n\r\n<p>โทร 089-826-0217</p>\r\n\r\n<p>&nbsp;</p>', 1, NULL, NULL),
(8, 'เซ็นทรัลพลาซ่าสาขาอุดรธานี', '<p>เลขที่ห้อง 101, เลขที่ 277/1-3</p>\r\n\r\n<p>คุณอนุรักษณ์ ปาวงศ์ (แพรวา)</p>\r\n\r\n<p>ถ.ประจักษ์ศิลปาคม ต.หมากแข้ง</p>\r\n\r\n<p>อ.เมือง จ.อุดรธานี 41000</p>\r\n\r\n<p>โทร 042-921-3399</p>', 1, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `contact`
--

CREATE TABLE `contact` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `from_country` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `message` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `ip` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `send_mail` tinyint(1) NOT NULL DEFAULT '0',
  `market` tinyint(1) NOT NULL DEFAULT '0',
  `key_set` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `active` tinyint(1) NOT NULL DEFAULT '1',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `contact`
--

INSERT INTO `contact` (`id`, `name`, `phone`, `email`, `from_country`, `message`, `ip`, `send_mail`, `market`, `key_set`, `active`, `created_at`, `updated_at`) VALUES
(3, 'วิลาสินี บุตตะวงค์', '0935433355', 'Buttawong2521@gmail.com', 'Thailand', 'ต้องการทราบราคา Cosmograph Daytona\r\nOyster 40 mm gold  green color', '49.228.177.133', 0, 1, 'OS4eEm6UlxsEfPam', 1, '2020-05-10 06:53:23', NULL),
(7, 'Katerina Russu', '0942574730', 'russukaterina@gmail.com', 'Thailand', 'Good afternoon!\r\n\r\nI have some problem with my Suunto 9 watch, \r\n(black screen, there is no way to restart, the clock does not turn on, the computer does not see them)\r\n\r\ndo you think there is any chance to fix it now at your place?\r\n\r\nUnfortunately, I\'m stuck on  Koh Chang, but I hope I can send it by thai post or Kerry. \r\n\r\nThank you', '118.174.206.152', 1, 1, 'd8L28e1tibmFiXic', 1, '2020-05-19 06:30:07', NULL),
(8, 'Atthaporn Panichayakul', '+66898954195', 'mummy_mind@hotmail.com', 'Thailand', 'Hi krub,\r\n  I\'m interested in black Rolex Sub (no date/date) and willing to buy right away. May you please let me know whether you have the stock krub?', '182.232.46.81', 0, 1, 'KXAWrgt6nBvg1j2j', 1, '2020-05-23 04:21:19', NULL),
(15, 'ืnarathorn', '-', 'nioachieverspushbot@gmail.com', 'eded', 'ทดสอบระบบป้องกัน บอท ทาง Programmer NIO', '49.228.59.221', 1, 1, 't1QmYgxMeUxX1mVH', 1, '2020-05-29 15:12:55', NULL),
(16, 'amanda lee', '+60122967500', 'mandy@pegasusfilm.com', 'Malaysia', 'Hi Im wondering if you have Sub or any sport model avail in your boutique? thank you !', '159.192.221.105', 0, 1, 'Pkbi1zYJkRSqEcl1', 1, '2020-06-07 11:14:54', NULL),
(17, 'Tang Kai Kwong', '0847647976', 'kaikwong85@gmail.com', 'thailand', 'Hi,\r\n\r\nI would like to purchase Rolex Submariner Date Green or Black color. Do you have available stock in your store?', '124.122.190.15', 0, 1, 'hTgSebBeJnUbF1rp', 1, '2020-06-08 05:15:41', NULL),
(18, 'Stefan Constantin', '+40722224429', 'constantin.stefan89@yahoo.com', 'Thailand', 'Suunto Spartan Trainer broken casing (part that\'s holding the strap). \r\nCan this be fixed? \r\nHow much would it cost and how long would it take? \r\nThank you', '188.146.173.153', 0, 1, 'KOaNrJqWtvUDhd9r', 1, '2020-06-19 14:16:30', NULL),
(19, 'JPB', '090-945-0164', 'email.jpb@gmail.com', 'Thailand', 'Greetings!\r\n\r\nI recently found out that you are representing in Thailand the Swiss brand watch Paul Picot.\r\n\r\nI need to get one of my watches serviced. It is a \"Le Chronograph\" male model. This watch needs cleaning and replacement of a push button. \r\n\r\nWhere should I bring it?\r\n\r\nRegards,\r\n\r\nJPB', '110.169.222.120', 0, 1, 'dgjkxO4gcKbMraKk', 1, '2020-06-25 01:45:57', NULL),
(20, 'Romain Milet', '+6597263858', 'romain.milet@bovet.com', 'Singapore', 'Good afternoon,\r\n \r\nHope you are well and safe.\r\n \r\nMy name is Romain Milet and I am in charge of the brand Bovet 1822 in Asia.\r\n \r\nCreated in 1822 by Edouard Bovet who was living in Guangdong, the brand has a long history with China and used to be the official watchmakers of Chinese emperors for almost a century.\r\nIn 2001, Mr Pascal Raffy acquired the Maison and has decided to rebuild the reputation of Bovet creating exceptional timepieces for gentlemen.\r\n \r\nToday Bovet has a strong presence in China (we open 5 more Chow Tai Fook point of sales soon), in Hong-Kong and in Japan. And we have a strong willingness to develop as well South-East Asia. \r\nPreviously distributed by Sincere in Singapore, our strategy has changed and we will soon open a retail concept to welcome our VIP clients in Singapore that I will be happy to share with you.\r\n \r\nPersonally I am based in Singapore, I know the potential of cities like Bangkok and Vientiane for Bovet and I am very interested to discuss the opportunity to work together.\r\nThe objective for Bovet is not to open as many partners as possible but to select a very few key partners who will have the exclusivity of the distribution of the brand in the region. \r\n \r\nI am totally aware the period is complicated and that’s why I want you to know I am very open on the ways to collaborate.\r\n \r\n \r\nBest Regards,\r\nRomain Milet', '218.212.131.105', 0, 1, 'm5NpXm4TlhbovStU', 1, '2020-07-14 01:43:29', NULL),
(21, 'Romain Milet', '+65 97263858', 'romain.milet@bovet.com', 'Singapore', 'Good afternoon,\r\n \r\nHope you are well and safe.\r\n \r\nMy name is Romain Milet and I am in charge of the brand Bovet 1822 in Asia.\r\n \r\nCreated in 1822 by Edouard Bovet who was living in Guangdong, the brand has a long history with China and used to be the official watchmakers of Chinese emperors for almost a century.\r\nIn 2001, Mr Pascal Raffy acquired the Maison and has decided to rebuild the reputation of Bovet creating exceptional timepieces for gentlemen.\r\n \r\nToday Bovet has a strong presence in China (we open 5 more Chow Tai Fook point of sales soon), in Hong-Kong and in Japan. And we have a strong willingness to develop as well South-East Asia. \r\nPreviously distributed by Sincere in Singapore, our strategy has changed and we will soon open a retail concept to welcome our VIP clients in Singapore that I will be happy to share with you.\r\n \r\nPersonally I am based in Singapore, I know the potential of cities like Bangkok or Vientiane and I am very interested to discuss the opportunity to work together.\r\nThe objective for Bovet is not to open as many partners as possible but to select a very few key partners who will have the exclusivity of the distribution of the brand in the region. \r\n \r\nI am totally aware the period is complicated and that’s why I want you to know I am very open on the ways to collaborate.\r\n \r\nBest Regards,\r\nRomain Milet', '218.212.131.105', 0, 1, '3OMNBTwPDQju43v1', 1, '2020-07-14 01:45:50', NULL),
(22, 'john edkins', '0897231083', 'jae.apc@gmail.com', 'Thailand', 'I have a suunito watch about 2-3 years old. It has stopped working. I cannot fix via the app . Can I send it to you for a service?', '183.89.199.166', 0, 1, '7tuT5L4lHkzJ3vVC', 1, '2020-07-25 03:31:56', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(34, '2014_10_12_000000_create_users_table', 1),
(35, '2014_10_12_100000_create_password_resets_table', 1),
(36, '2020_05_01_063258_create_boutiuqes_table', 1),
(37, '2020_05_01_063319_create_banner_table', 1),
(38, '2020_05_01_063343_create_contact_table', 1),
(39, '2020_05_01_063402_create_bolg_table', 1),
(40, '2020_05_01_105233_create_trending_table', 1);

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `trending`
--

CREATE TABLE `trending` (
  `id` int(10) UNSIGNED NOT NULL,
  `img` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `detail` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `trending`
--

INSERT INTO `trending` (`id`, `img`, `detail`, `created_at`, `updated_at`) VALUES
(1, '1588583746.jpg', '<p>Baselworld 2017</p>\r\n\r\n<p>In less than five months, Baselworld, the world&#39;s leading show for watches and jewellery, will once again unite the most important brands, buyers and media representatives for the industry&rsquo;s major annual event. The watchmaking flagship brands are present at Baselworld 2018 as are the industry leaders in jewellery and gemstones - many of them represented exclusively and with numerous innovations.</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>&nbsp;</p>', '2020-05-05 07:14:53', NULL),
(2, '1588586502.jpg', '<p>Siam Paragon Watch Expo 2017</p>\r\n\r\n<p>&nbsp; กลับมาอีกครั้งกับปรากฏการณ์อาณาจักรแห่งเวลา &rdquo;Siam Paragon Watch Expo 2017&rdquo; มหกรรมงานแสดงนาฬิกาที่ยิ่งใหญ่ และได้รับความนิยมมากที่สุดของประเทศไทยและระดับเอเชีย พร้อมมอบประสบการณ์สุดพิเศษให้เหล่าคนรักนาฬิกา นักลงทุน นักสะสม รวมถึงผู้ประกอบการได้สัมผัสหลากหลายแง่มุมของเรือนเวลาที่ศูนย์การค้าสยามพารากอนภูมิใจนำเสนอ ทั้งเทรนด์นาฬิกาล่าสุด ประวัติศาสตร์อันยาวนานของเรือนเวลาในตำนาน ศาสตร์ศิลป์ชั้นสูงและความประณีตหรูหรา นวัตกรรมเทคโนโลยีระบบกลไกต่างๆ ตลอดจนข้อเสนอที่ให้คุณได้เป็นเจ้าของนาฬิกาในดวงใจได้ไม่ยาก และนี่คือ 5 ความพิเศษของงาน &quot;Siam Paragon Watch Expo 2017&rdquo; ที่คุณไม่ควรพลาด!</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>&nbsp;</p>', '2020-05-05 07:15:00', NULL),
(3, '1588586572.jpg', '<p>Central International Watch Fair 2017</p>\r\n\r\n<p>22 August &ndash; 18 September 2017 at The Event Hall, 3rd Floor, Central Chidlom</p>\r\n\r\n<p>22 August &ndash; 30 September 2017 at every Central store &amp; ZEN</p>\r\n\r\n<p>&bull; Up to 30% off Selected Items.</p>\r\n\r\n<p>&bull; Up to 44% On-top discount with Central The 1 credit card or up to 27% Rewards with The 1 Card and participating credit cards.</p>\r\n\r\n<p>&bull; Free! Up to 80,000.- Cash Coupon with purchase.</p>\r\n\r\n<p>&bull; Free! Up to 80,000 The 1 Card points with purchase.</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>&nbsp;</p>', '2020-05-05 07:15:08', NULL),
(4, '1588586648.jpg', '<p>Baselworld 2018</p>\r\n\r\n<p>Baselworld, the world&rsquo;s most important show for watches, jewellery and gems, opens its gates on Thursday. As in past years, Baselworld brings together the industry&rsquo;s top players under one roof. Five of the six highest-revenue Swiss watch companies fete global premieres of their latest products here; leading jewellery and gemstone companies likewise present their new creations and rarities to the public for the first time.<br />\r\nMedia representatives can be onsite in the convention centre at 11:30 a.m. tomorrow morning or can view the event remotely via live streaming. Important market data will be announced at the press conference, which will also offer a first look at avidly awaited new items for 2018. There is plenty of reason for curiosity because the press conference promises to unveil several innovations.</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>&nbsp;</p>', '2020-05-05 07:15:15', NULL),
(5, '1588586701.jpg', '<p><strong>ROLEX, PATEK PHILIPPE, CHANEL, CHOPARD AND TUDOR LEAVE BASELWORLD. CREATION OF A NEW WATCH TRADE SHOW IN GENEVA IN COLLABORATION WITH THE FONDATION DE LA HAUTE HORLOGERIE</strong></p>\r\n\r\n<p><strong>&nbsp; &nbsp;Geneva, 14 April 2020 &ndash; Rolex, Patek Philippe, Chanel, Chopard and Tudor leave Baselworld to create a new watch trade show in Geneva with the Fondation de la Haute Horlogerie. The show will be held early April 2021 at Palexpo, at the same time as Watches &amp; Wonders. This departure follows a number of unilateral decisions made without consultation by Baselworld management, including the postponement of the watch show until January 2021, as well as its inability to meet the brands&rsquo; needs and expectations.</strong></p>\r\n\r\n<p><br />\r\n&nbsp; &nbsp; &nbsp; The new show, which will be linked to Watches &amp; Wonders, organized by the Fondation de la Haute Horlogerie, is to take place at Palexpo. The aim is to offer partner brands the best possible professional platform, applying a shared vision to successfully meet future challenges in the watchmaking industry. It will also give crucial prominence to the sector&rsquo;s expertise and innovations, both in Switzerland and internationally. Other brands may also be added, according to terms that have not yet been defined. This new event will be geared predominantly towards retailers, the press and VIP customers.</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p><br />\r\n<strong>Jean-Fr&eacute;d&eacute;ric Dufour, Chief Executive Officer, Rolex SA, and Board Member, Tudor</strong>, said: &ldquo;We have taken part in Baselworld since 1939. Unfortunately, given the way the event has evolved and the recent decisions made by MCH Group, and in spite of the great attachment we had to this watch show, we have decided to withdraw. Following discussions initiated by Rolex, it seemed only natural to create a new event with partners that share our vision and our endless, unwavering support for the Swiss watchmaking sector. This will allow us to present our new watches in line with our needs and expectations, to join forces and better defend the interests of the industry.&rdquo; Thierry Stern, President, Patek Philippe said: &ldquo;The decision to leave Baselworld was not an easy one to take for me, being the fourth generation of the Stern family to participate to this traditional yearly event. But life evolves constantly, things change and people change as well, whether it is at the level of those responsible for the watch fair organization, the brands or the clients. We constantly have to adapt ourselves, question what we do, since what was right yesterday may not necessarily be valid today! Today Patek Philippe is not in line with Baselworld&rsquo;s vision anymore, there have been too many discussions and unsolved problems, trust is no longer present. We need to answer the legitimate needs of our retailers, the clients and the press from around the world. They have to be able to discover the new models from Swiss watchmakers each year, at one time, in one place, and this in the most professional manner possible. That is why, following several discussions with Rolex and in agreement with other participating brands, we have decided to create, all together, a unique event in Geneva, representative of our savoir-faire.</p>\r\n\r\n<p><br />\r\n<strong>Fr&eacute;d&eacute;ric Grangier, CEO of Chanel Watches &amp; Fine Jewellery&nbsp;</strong>said: &ldquo;Like its partners, CHANEL shares the same independence and the same desire to protect and promote the values, know-how, utmost quality and precision of Swiss Watchmaking. This initiative marks a key milestone in the history of CHANEL Watchmaking and is part of a long-term strategy, which began with the launch of this activity in 1987. This exhibition will allow us to present all of our new creations in an environment that meets our high-quality standards.&rdquo;</p>\r\n\r\n<p><br />\r\n<strong>Karl-Friedrich Scheufele, Co-President Chopard et Cie SA&nbsp;</strong>said: &ldquo;Chopard first exhibited at the Basel fair in 1964 with a stand of some 25 square metres. After careful consideration, our family decided to support the Rolex initiative and retire from Baselworld &ndash; a painful decision. The creation of this new watch show in Geneva, in parallel to Watches &amp; Wonders, will allow us to better serve our watchmaking partners and our customers. Through the alliance, these grandes maisons will also be able to collaborate in promoting the values and best interests of Swiss watchmaking.&rdquo;</p>\r\n\r\n<p><br />\r\n<strong>J&eacute;r&ocirc;me Lambert, on behalf of the Fondation de la Haute Horlogerie Council</strong>&nbsp;said: &ldquo;The Fondation de la Haute Horlogerie is delighted to welcome a new salon which will strengthen the historical Watch &amp; Wonders event in Geneva next year in early April.&rdquo; Further information will be published at a later date, in particular concerning the name of the new watch fair and its organization.</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>&nbsp;</p>', '2020-05-05 07:38:01', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(10) UNSIGNED NOT NULL,
  `username` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'admin', '$2y$10$MRTYeODYgZCq5CPCk2h2dOPTFMupyCT7g7k0OHp1hRc2TrH.sRFF6', 'rHu862P962CXY2i1R3OZfUksm0QRK2yFDOB3GYwuUYEPH2oWFZNvL4BGp5Dp', NULL, NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `banner`
--
ALTER TABLE `banner`
  ADD PRIMARY KEY (`id_banner`);

--
-- Indexes for table `blog`
--
ALTER TABLE `blog`
  ADD PRIMARY KEY (`id_blog`);

--
-- Indexes for table `boutiuqes`
--
ALTER TABLE `boutiuqes`
  ADD PRIMARY KEY (`id_boutiuqes`);

--
-- Indexes for table `contact`
--
ALTER TABLE `contact`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`(191));

--
-- Indexes for table `trending`
--
ALTER TABLE `trending`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `banner`
--
ALTER TABLE `banner`
  MODIFY `id_banner` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `blog`
--
ALTER TABLE `blog`
  MODIFY `id_blog` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `boutiuqes`
--
ALTER TABLE `boutiuqes`
  MODIFY `id_boutiuqes` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `contact`
--
ALTER TABLE `contact`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=41;

--
-- AUTO_INCREMENT for table `trending`
--
ALTER TABLE `trending`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
