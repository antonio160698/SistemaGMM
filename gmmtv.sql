-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 10-06-2021 a las 13:14:54
-- Versión del servidor: 10.4.18-MariaDB
-- Versión de PHP: 8.0.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `gmmtv`
--

DELIMITER $$
--
-- Procedimientos
--
CREATE DEFINER=`root`@`localhost` PROCEDURE `Pro_Search` (IN `v_Search` CHAR(255))  BEGIN
CREATE TEMPORARY TABLE TSearch (
    id INT NOT NULL
    , Tab INT NOT NULL
    , Title VARCHAR(255) NULL
    , Description TEXT NULL
    , Imagen TEXT NULL	
);

INSERT INTO TSearch (id, Tab, Title, Description, Imagen) SELECT IdArtist id, 1 Tab, Real_name Title, Nickname Description, Image Imagen FROM artist WHERE Real_name LIKE '%pro%' or Nickname LIKE '%pro%';

INSERT INTO TSearch (id, Tab, Title, Description, Imagen) SELECT IdArticulo id, 2 Tab, Category Title, Descripcion Description, Imagen FROM article WHERE Category LIKE '%'+v_Search+'%' or Descripcion LIKE '%'+v_Search+'%';

INSERT INTO TSearch (id, Tab, Title, Description, Imagen) SELECT BeginId id , 3 Tab, Title, Description, Image Imagen FROM begin WHERE Title LIKE '%'+v_Search+'%' or Description LIKE '%'+v_Search+'%';

SELECT * FROM TSearch;
DROP TABLE TSearch;
END$$

DELIMITER ;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `article`
--

CREATE TABLE `article` (
  `IdArticulo` int(11) NOT NULL,
  `Category` varchar(255) NOT NULL,
  `Size` varchar(200) NOT NULL,
  `Price` decimal(50,0) NOT NULL,
  `Descripcion` text NOT NULL,
  `Imagen` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `article`
--

INSERT INTO `article` (`IdArticulo`, `Category`, `Size`, `Price`, `Descripcion`, `Imagen`) VALUES
(1, 'skincare', '400 ML', '145', 'IDOLO SWAY SHOWER GEL 400 ML Full of energy in first step for cleansing that shower gel are enriched with natural extract and can reduce bacterial accumulation its cause of body odor. 3X Hya complex, Black tea and Seaweeds extract help to leaves the skin feeling soft and moisturized, delicately with breezy scented and refresh your skin with evoking confidence and freshness. Directions : Pump directly onto the palm of your hand or a sponge. Work into lather and apply on body, then rinse off.', 'https://www.gmm-tv.com/shop/image/cache/catalog/product/4-idolo/03-idolo-sway-shower-gel/GMTV-IDLO-0022-01-540x540.jpg'),
(2, 'makeup', 'Brown color', '229', 'IDOLO ICI EYE EYELINER & EYESHADOW 2 IN 1 A double head pen with one head of eyeliner and one head of eyeshadow. To make your eyes  look charmming and glamorous Deep black eyeliner with soft & comfortable pen tip to quickly get smooth eye line, and immediately magnify your eyes. Color eyeshadow, more fitting to skin. Let you keep a charming eye makeup all day long. To increase the efficiency of your eyes stand out. Should be used on both sides together. Directions 1) Eyeshadow : Apply and decorate the eye 2) Eye liner : Being by lining from inner to outer corner of the eye. Adjust the line as preferred', 'https://www.gmm-tv.com/shop/image/cache/catalog/product/4-idolo/11-idolo-ici-eye-eyeliner-eyeshadow-2-in-1/GMTV-IDLO-0014-00-540x540.jpg'),
(3, 'makeup', 'Natural color', '289', 'IDOLO PERFECTA COMPACT POWDER Pressed powder from Japan that is lightweight on your skin and not leaving any sticky feeling. It gives a super thin layer of coverage that makes your face look smooth and hides any blemishes and dark spots as well as controls excess oil. The Prism Airy Powder (3-color pearl) helps reflecting light and completely clean your pores as well as cover up uneven skin tone with sun protection of SPF50+ PA+++Directions : Press the puff onto the powder and gently pat on face. Reapply as needed throughout the day.', 'https://www.gmm-tv.com/shop/image/cache/catalog/product/4-idolo/10-idolo-perfecta-compact-powder/GMTV-IDLO-0011-00-540x540.jpg'),
(4, 'merchandasing', 'Small ', '790', 'SINGTO | PORTRAIT ART SERIES T-SHIRT Singto T-Shirt - limited edition from special GMMTV Portrait Art Series T-Shirt collection. White T-shirt with portrait line drawing of Singto Prachaya. The back of each T-shirt is screen printed with Singto’s autograph. Made with Premium Quality EXTRA SOFT fabric,  100% Cotton, soft and breathable with cool designed packaging for the GMMTV Portrait Art Series T-Shirt collection. Special! Card with Singto Prachaya’s autograph.', 'https://www.gmm-tv.com/shop/image/cache/catalog/product/8-shirt/23-SINGTO-GMMTV-Portrait-Art-Series-T-Shirt%20/01-540x540.jpg'),
(5, 'merchandasing', 'Medium', '790', 'GUN | PORTRAIT ART SERIES T-SHIRT Gun T-Shirt - limited edition from special GMMTV Portrait Art Series T-Shirt collection. White T-shirt with portrait line drawing of Gun Atthaphan. The back of each T-shirt is screen printed with Gun’s autograph. Made with Premium Quality EXTRA SOFT fabric,  100% Cotton, soft and breathable with cool designed packaging for the GMMTV Portrait Art Series T-Shirt collection. Special! Card with Gun Atthaphan’s autograph.', 'https://www.gmm-tv.com/shop/image/cache/catalog/product/8-shirt/25-gun-t-shirt-portrait-art-series/01-540x540.jpg'),
(6, 'accesories', '51 cm', '350', 'TONHON CHONLATEE ANCHOR NECKLACE Anchor necklace, Tonhon’s gift to Chonlatee from Tonhon Chonlatee series. Plus a signed card from lead actors, Pod Suphakorn and Khaotung Thanawat Anchor necklace, enamel metal pendant, 6 x 8 cm with brown braided cord rope, 51 cm length.', 'https://www.gmm-tv.com/shop/image/cache/catalog/product/11-accessories/16-tonhon-chonlatee-anchor-necklace/THCT-ACCE-0001-01-540x540.jpg'),
(7, 'merchandasing', 'Large', '790', 'TAY | PORTRAIT ART SERIES T-SHIRT Tay T-Shirt - limited edition from special GMMTV Portrait Art Series T-Shirt collection. White T-shirt with portrait line drawing of Tay Tawan. The back of each T-shirt is screen printed with Tay’s autograph. Made with Premium Quality EXTRA SOFT fabric,  100% Cotton, soft and breathable with cool designed packaging for the GMMTV Portrait Art Series T-Shirt collection. Special! Card with Tay Tawan’s autograph.', 'https://www.gmm-tv.com/shop/image/cache/catalog/product/8-shirt/26-tay-t-shirt-portrait-art-series/01-540x540.jpg'),
(8, 'merchandasing', 'Extra large', '790', 'NEW | PORTRAIT ART SERIES T-SHIRT New T-Shirt - limited edition from special GMMTV Portrait Art Series T-Shirt collection. White T-shirt with portrait line drawing of New Thitipoom.  The back of each T-shirt is screen printed with New’s autograph. Made with Premium Quality EXTRA SOFT fabric,  100% Cotton, soft and breathable with cool designed packaging for the GMMTV Portrait Art Series T-Shirt collection. Special! Card with New Thitipoom’s autograph.', 'https://www.gmm-tv.com/shop/image/cache/catalog/product/8-shirt/27-new-t-shirt-portrait-art-series/01-540x540.jpg'),
(9, 'merchandasing', 'Small ', '490', '1000STARS T-SHIRT (GREEN) Base of operation Phaphirun T-Shirt from 1000stars series, Premium Quality 100% Cotton No.20, soft and comfortable fabric Special! An iconic “I’m not your wife” label tag and a postcard with Earth Pirapat & Mix Sahaphap’s autographs', 'https://www.gmm-tv.com/shop/image/cache/catalog/product/8-shirt/20-1000stars-t-shirt-green/1-540x540.jpg'),
(10, 'merchandasing', 'Medium', '490', '1000STARS T-SHIRT (BROWN) Base of operation Phaphirun T-Shirt from 1000stars series, Premium Quality 100% Cotton No.20, soft and comfortable fabric Special! An iconic “I’m not your wife” label tag and a postcard with Earth Pirapat & Mix Sahaphap’s autographs', 'https://www.gmm-tv.com/shop/image/cache/catalog/product/8-shirt/20-1000stars-t-shirt-brown/1-540x540.jpg'),
(11, 'merchandasing', '20 ounsers', '450', 'PETE-KAO Tumbler Pete-Kao Tumbler from Dark Blue Kiss Size: 20 ounces', 'https://www.gmm-tv.com/shop/image/cache/catalog/product/9-mug-and-tumbler/02-pete-kao-tumbler/POLC-ACCE-0001-01-540x540.jpg'),
(12, 'merchandasing', '8 x 9.6 cm', '490', 'Theory of Love Mug 2 memorabilia ceramic mugs from Theory of Love Size: 8 x 9.6 cm (2/set)', 'https://www.gmm-tv.com/shop/image/cache/catalog/product/9-mug-and-tumbler/03-theory-of-love-mug/BABI-ACCE-0002-01-540x540.jpg'),
(13, 'merchandasing', '28 x 21 x 5.6 cm', '1450', 'DVD BOXSET STILL 2GETHER The hottest series of the year that makes people around the world fall in love is back by demand. The story of Sarawat and Tine from 2gether The Series continues in “Still 2gether” with 5 more special episodes and is now available in DVDs with premium gifts only in this boxset for your collection! Still 2gether DVD Boxset includes: – BOXSET  SIZE  (28 x 21 x 5.6 cm) – 4 DVDs packed in 2 clear cases (2 discs/case) screen printed on the discs – 5 special episodes, 2 OST Music Videos, Never-before-seen behind the scenes and interviews of the cast– Photobook that captures all the memorable scenes from the series + Behind the Scenes and Interviews (Thai/English), 100 pages excluding covers, (19.8 x 22.8 cm) – Clear plastic sheet with the cast’s signatures printed in gold – 18 postcards with pictures from the series in a postcard sleeve (19.6 x 22.6 cm)', 'https://www.gmm-tv.com/shop/image/cache/catalog/product/7-dvd-boxset/03-dvd-boxset-still-2gether/2GET-DVD--0002-01-Edit-540x540.jpg'),
(14, 'merchandasing', '16 cm', '650', 'BRIGHT PLUSH DOLL Bright 15 cm stuffed doll in football jersey collection (Khao Omo), with “bright” name embroidered on the back of the doll, packed in a special design box, a cute memorabilia to cuddle from Still 2gether The Series.', 'https://www.gmm-tv.com/shop/image/cache/catalog/product/11-accessories/09-bright-plush-doll/2GET-ACCE-0003-01-540x540.jpg'),
(15, 'merchandasing', '16 cm', '650', 'WIN PLUSH DOLL Win 15 cm stuffed doll in football jersey collection (Salawad), with “win” name embroidered on the back of the doll, packed in a special design box, a cute memorabilia to cuddle from Still 2gether The Series.', 'https://www.gmm-tv.com/shop/image/cache/catalog/product/11-accessories/10-win-plush-doll/2GET-ACCE-0004-01-540x540.jpg');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `artist`
--

CREATE TABLE `artist` (
  `IdArtist` int(11) NOT NULL,
  `Tiktok` int(11) DEFAULT NULL,
  `Twitter` int(11) DEFAULT NULL,
  `Instagram` int(11) DEFAULT NULL,
  `Email` varchar(255) NOT NULL,
  `Skills` varchar(100) NOT NULL,
  `Width` decimal(10,0) NOT NULL,
  `Height` decimal(10,0) NOT NULL,
  `Years_old` int(11) NOT NULL,
  `Real_name` varchar(255) NOT NULL,
  `Nickname` varchar(255) NOT NULL,
  `Image` text NOT NULL,
  `idbrand` int(11) DEFAULT NULL,
  `skin` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `artist`
--

INSERT INTO `artist` (`IdArtist`, `Tiktok`, `Twitter`, `Instagram`, `Email`, `Skills`, `Width`, `Height`, `Years_old`, `Real_name`, `Nickname`, `Image`, `idbrand`, `skin`) VALUES
(2, 38100, 195700, 1000000, 'darapa.cho@gmm.tv.com', 'model', '80', '189', 24, 'Joss Yay-ar Sangnger', 'Joss Wayar', 'https://www.gmm-tv.com/cms/upload_file/vj_floating/pic/78e7cf192d0bf644fc1c633a9594c9bc.jpg', 5, 'medium'),
(3, NULL, 500000, 1900000, 'darapa.cho@gmm.tv.com', 'actor', '72', '183', 21, 'Ohm Pawat Chittsawandee', 'Ohm Pawat ', 'https://www.gmm-tv.com/cms/upload_file/vj_floating/pic/65b66df28d9fa8867b2c817a841d9373.jpg', 9, 'fair'),
(4, 132200, 156600, 1300000, 'darapa.cho@gmm.tv.com', 'actor', '70', '183', 26, 'Earth Pirapat Watthanasetsiri', 'Earth Pirapat', 'https://www.gmm-tv.com/cms/upload_file/vj_floating/pic/7947100b4e4848134786b893dee1b06e.jpg', 2, 'medium'),
(5, 3073, 2300000, 6800000, 'darapa.cho@gmm.tv.com', 'singer', '73', '183', 23, 'Brigth Vachirawit Chivaaree', 'Bright Vachirawit', 'https://www.gmm-tv.com/cms/upload_file/vj_floating/pic/adda67ee0faafc8a4a9e6f88de9a0e3f.jpg', 13, 'fair'),
(6, 1200000, 261300, 2900000, 'darapa.cho@gmm.tv.com', 'actor', '68', '177', 28, 'New Thitipoom Tachaapaikun', 'New Thitipoom', 'https://www.gmm-tv.com/cms/upload_file/vj_floating/pic/32472df17d36fc67faf9b846590b6147.jpg', 2, 'medium'),
(7, 11700, 496100, 960000, 'darapa.cho@gmm.tv.com', 'actor', '60', '174', 22, 'Khaotung Thanawat Ratanakitpaisan', 'Khaotung Thanawat', 'https://www.gmm-tv.com/cms/upload_file/vj_floating/pic/e1521d391064844e5aa46c63e1fe9836.jpg', 4, 'medium'),
(8, 1200000, 733200, 2500000, 'darapa.cho@gmm.tv.com', 'actress', '66', '178', 35, 'Jennie Panhan Watchara Sukchum', 'Jennie Panhan', 'https://www.gmm-tv.com/cms/upload_file/vj_floating/pic/7b9dcbeae19f72a14c925748fe5982eb.jpg', 2, 'brown'),
(9, 194600, 143100, 941000, 'darapa.cho@gmm.tv.com', 'actress', '48', '170', 25, 'Jan Ployshompoo Supasap', 'Jan Ployshompoo', 'https://www.gmm-tv.com/cms/upload_file/vj_floating/pic/bef3894f9dd3efdbf72d50dbc19d6f4d.jpg', 7, 'fair'),
(10, NULL, 109800, 525000, 'darapa.cho@gmm.tv.com', 'actress', '49', '167', 24, 'Gigie Chanunphat Kamolkiriluck', 'Gigie Chanunphat', 'https://www.gmm-tv.com/cms/upload_file/vj_floating/pic/e47da5b2c342cf29eb574689ec96235a.jpg', 10, 'fair'),
(11, 19200, 1400000, 3500000, 'darapa.cho@gmm.tv.com', 'actor', '56', '170', 27, 'Gun Atthapahn Phunsawat', 'Gun Atthaphan', 'https://www.gmm-tv.com/cms/upload_file/vj_floating/pic/726e12aeb2466aaa6afe94c92db6666a.jpg', 4, 'fair'),
(12, 1700000, 714600, 2100000, 'darapa.cho@gmm.tv.com', 'dancer', '60', '174', 26, 'Toptaop Jirakit Kuariyakul', 'Toptap Jirakit', 'https://www.gmm-tv.com/cms/upload_file/vj_floating/pic/eb24ee12f85f3c1f8f5f7562b14abcef.jpg', 1, 'medium'),
(13, 907400, 321900, 1300000, 'darapa.cho@gmm.tv.com', 'model', '72', '180', 21, 'Drake Sattabut Laedeke', 'Drake Sattabut', 'https://www.gmm-tv.com/cms/upload_file/vj_floating/pic/da542e74c9fad94b77d1248c747acb7c.jpg', 4, 'fair'),
(14, 793600, 543100, 1500000, 'darapa.cho@gmm.tv.com', 'actor', '67', '182', 21, 'Frank Thanatsaran Samthonglai', 'Fraank Thanatsaran', 'https://www.gmm-tv.com/cms/upload_file/vj_floating/pic/c44ee2c053240f155753302bf1bbdccd.jpg', 6, 'medium'),
(15, 1300000, 2000000, 4900000, 'darapa.cho@gmm.tv.com', 'actor', '71', '185', 23, 'Win Metawin Opasiamkajorn', 'Win Metawin', 'https://www.gmm-tv.com/cms/upload_file/vj_floating/pic/35693ddc6e03a73931baceee78b42cd2.jpg', 8, 'medium'),
(16, 417600, 35400, 445000, 'darapa.cho@gmm.tv.com', 'dancer', '45', '169', 21, 'Aye Sarunchana Apisamaimongkol', 'Aye Sarunchana', 'https://www.gmm-tv.com/cms/upload_file/vj_floating/pic/92d53696ea9c7aaf0c647a6f4d3997ed.jpg', 5, 'fair'),
(17, 441800, 194800, 773000, 'darapa.cho@gmm.tv.com', 'actress', '40', '155', 21, 'Ciize Apachiya Saejung', 'Ciize Apachiya', 'https://www.gmm-tv.com/cms/upload_file/vj_floating/pic/f08974f6b94a2c4dbcac9463c1d49bb7.jpg', 6, 'fair');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `begin`
--

CREATE TABLE `begin` (
  `BeginId` int(11) NOT NULL,
  `Year` int(11) NOT NULL,
  `Genere` varchar(150) NOT NULL,
  `State` varchar(150) NOT NULL,
  `Title` varchar(255) DEFAULT NULL,
  `Description` text DEFAULT NULL,
  `Image` text DEFAULT NULL,
  `video` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `begin`
--

INSERT INTO `begin` (`BeginId`, `Year`, `Genere`, `State`, `Title`, `Description`, `Image`, `video`) VALUES
(1, 2021, 'Serie', 'emision', 'A tale of 1000 stars', 'The story of the tale will come true with the prayer of thousands of stars. He received a heart donation from Weaver Dream (Ah, Saralchana), who died the same day that Thea had a heart attack. A new heart has been replaced by an old one and has changed the life of Theo forever. He wants to repay the dream that gave him a second life and find out the meaning of life, why people like him have the right to live on earth for a second time. He went up to Pha Pan Dao Village to become a volunteer teacher instead of dreaming. The head of the holy unit that oversees Pha Pan Dao village is here to take care of the theater. However, Thea tried to prove himself until he saw his intentions, and their relationship improved and gradually developed feelings until Thea himself wondered if this feeling was caused by the heart of a dream that had loved the head of the phu pha, or that he had begun to dread the relationship himself, but no matter what happened, the only secret he did not want the head of the phu pha and the villagers to know was that he had a dream from them.', 'https://www.gmm-tv.com/cms/upload_file/hilight/mobile_big/05e52302d2547eb469d1a11743187998.jpg', NULL),
(2, 2009, 'Serie', 'emision', 'A tale of 1000 stars', 'The story of the tale will come true with the prayer of thousands of stars. He received a heart donation from Weaver Dream (Ah, Saralchana), who died the same day that Thea had a heart attack. A new heart has been replaced by an old one and has changed the life of Theo forever. He wants to repay the dream that gave him a second life and find out the meaning of life, why people like him have the right to live on earth for a second time. He went up to Pha Pan Dao Village to become a volunteer teacher instead of dreaming. The head of the holy unit that oversees Pha Pan Dao village is here to take care of the theater. However, Thea tried to prove himself until he saw his intentions, and their relationship improved and gradually developed feelings until Thea himself wondered if this feeling was caused by the heart of a dream that had loved the head of the phu pha, or that he had begun to dread the relationship himself, but no matter what happened, the only secret he did not want the head of the phu pha and the villagers to know was that he had a dream from them.', 'https://www.gmm-tv.com/cms/upload_file/hilight/mobile_big/05e52302d2547eb469d1a11743187998.jpg', NULL),
(3, 2020, 'Serie', 'finished', 'Still 2gether', 'After Tyne and the Inspector overcome the obstacles that eventually interstitial together, the story seems to end like Happy Ending, but it\'s actually just the beginning of the next test stage that will interstitial between them again. \"Tyne\" and \"Inspector\" during their second-year lives seemed full of love and warmth for each other, but chaos happened. When Dim graduated, he assigned the inspector to be president of the music club after him. Fang asked Tyne to be president of the cheerleading club, too, and now the music club room and the cheerleader club moved into an adjoining room. As a result, the sound of rehearsals from the two clubs hit each other so often that even a couple of captains, Mill, Man, Type, Dim, Green, as well as friends like Bosses, prams, fongs, oms, ern were also affected by the fights of these two clubs. When duty is in charge of love. Will they sustain this love forever? Every Friday 21:30 on GMM25 starting August 14, #ยังคั่นกู #STILL2GETHER (see the first retrospective on LINE TV at 11pm)', 'https://www.gmm-tv.com/cms/upload_file/category/poster/d3ff35690795b98379208938e1e3bce6.jpg', NULL),
(4, 2020, 'Serie', 'finished', 'Friend Zone 2: Dangerous Area', 'The story of a group of best friends, Boyo Boom Earth Stud, and the intense drama of ambiguous love. When Boyo, who, after deciding to date Goode for a year, still treats her like a friend, Boom moved in and had trouble dealing with women, who have re-entered their lives since he was a singer. Earth looking for himself. After quitting his job and trying to manage a marriage that feels unstable. After Drama comes to Sam\'s bed with Stud, including the return of his ex-girlfriend Sam and doesn\'t his relationship with Stud to be reunited? At the beginning, it was beyond friends, and the return of an old friend like Bew, who would spin their lives and take us through the stories of this group of friends\' relationships in the past from university.', 'https://www.gmm-tv.com/cms/upload_file/category/poster/a52fc23bc6d016ce20e128eee1c4b0cc.jpg', NULL),
(5, 2020, 'Serie', 'finished', '3 will be free', 'Neo\'s unlikely action, love, crime and adventures of three unlikely hearts ( played by Joss Weah), a young barhos working man, pleases the girls. When he gets involved with Xiao Thana\'s wife, The savage real estate lord made him the target of the four snipers\' chase until it was a rainy night of pigs. When he meets Miu ( played by Mind Lopasal), neo\'s co-manager has been in a lot of business together, including Shin (played by Te Tawan), Xiao Tana\'s only son who accidentally visits the bar where Moo worked that night, the bloody chaos causes the three of them to escape the hunt together. It leads to a journey to experience madness from people who want to exploit them. All three face a past that has escaped, both from brothers he once let down. Dad\'s enemies are waiting to catch him. An ex-boyfriend who\'s still waiting with loyalty and a rab dog chase from a shooter who can\'t love anyone, and a transgender woman\'s grudge when a lover is taken from her. Their hearts are tested against love that breaks social rules and tests the life of whether they will survive. Follow the story of their journey in 3 Will Be Free.', 'https://www.gmm-tv.com/cms/upload_file/category/poster/3ad7bd979b3c9234abc7576722682d70.jpg', NULL),
(6, 2021, 'Webshow', 'emision', 'School Rangers [EP.159] Benjamrachanusorn School, Nonthaburi Part 1', 'School Rangers 13-03-64 Rangers invite adorable guests From the 2000 year office girl series GIRL2K, \"Om Suchar\" joined us to visit Benjamrachanusorn School, Nonthaburi Province. When it comes to missions that require Thai language skills', 'https://www.gmm-tv.com/cms/upload_file/category/poster/48f5f606c131c897a8adc6f5ccb2cbea.jpg', NULL),
(7, 2021, 'Webshow', 'emision', '475 | STAYCATION Episode 2', '475 | STAYCATION Episode 2 Mayu Bangkok Japanese Style Hotel Host: Pompam, Gotji, Golf, Jenny Panan Host: Pompam, Gotji, Golf, Jenny Panan Tour on Sunday 22:30 on GMM25 FB | Thailand Travel Guide https://www.facebook.com/toeytiewthai', 'https://www.gmm-tv.com/cms/upload_file/category/poster/63405d8e9bdde2cc078de5f7622eb214.jpg', 'https://www.facebook.com/toeytiewthai'),
(8, 2020, 'Webshow', 'emision', 'The challenge decides the winner. Find a big roundabout area with just | one ruler! Tutorial by BrandsSummerCamp Ep.10', 'Tutorial by BrandsSummerCamp shows you how much knowledge you can turn into knowledge with a competition that requires both brain and body power. Take first place with 4 artists who are fully knowledgeable. Te Tawan, K Lertsitchai, Sugar Tippanari and Puimek Napasorn Stay tuned Every Monday at 19:00 on YouTube & Facebook : GMMTV', 'https://www.gmm-tv.com/cms/upload_file/category/poster/20a8f842f89883a6673fb6bf1f82b64a.jpg', NULL),
(9, 2020, 'Webshow', 'finished', 'Season Off Battle - Gun | Last Episode [Eng Sub]', 'Close your mother\'s hand season with an off-the-go cooking competition.', 'https://www.gmm-tv.com/cms/upload_file/category/poster/359038aa925d6629d7e68afd81a5a558.jpg', NULL),
(10, 2021, 'Record', 'finished', 'Eye Lying As Ost.Tales Of Thousand Stars 1000stars - Earth Pirapat', 'Music, Eyesight, Can\'t Lie (Soundtrack to the 1000stars Story series) Singer Earth Pirapat Lyrics / Melody: Achariya Dulaiphaiboon Composed: Chonlathat Chansiricharoenkul Digital Download *1232323 Spotify | iTunes | JOOX [Official Trailer] 1000stars https://www.youtube.com/watch?v=o-gaRz2AE_Y Follow Tales of the Thousand Stars every Friday at 8:30 p.m. on GMM25 | 10:30 p.m. on LINE TV.', 'https://www.gmm-tv.com/cms/upload_file/videos/poster/2021/02/9fbc9b727069b53fc70c04eeb944dd68.jpg', 'https://www.youtube.com/embed/o-gaRz2AE_Y'),
(11, 2021, 'Record', 'finished', 'Dust Nabi Version Ost.NABI I\'m not going to love you.', 'Music Scrap (Dust) NAB Version Soundtrack Series Naby, I\'m so I\'M NOT GOING TO LOVE YOU NABI, MY STEPDARLING. Singer Aye Sarunchana LYRICS KANGSOMKS Melody KANGSOMKS PRODUCED KANGSOMKS Arranged FRIDAY, KANGSOMKS Mix&Mastering KANGSOMKS Digital Download *1232323 Spotify | iTunes | JOOX [Official Trailer] I\'M NOT GOING TO LOVE YOU NABI, MY STEPDARLING. https://www.youtube.com/watch?v=o-7PY87Kt8w Follow \"Nabi, I Won\'t Love You\" every Monday-Tuesday at 8:30 p.m. on GMM25 and watch the first free retrospective on Viu at 10:30 p.m.', 'https://www.gmm-tv.com/cms/upload_file/videos/poster/2021/03/6efa9ecbbbd4ea95037033e8252570b8.jpg', 'https://www.youtube.com/embed/o-7PY87Kt8w'),
(12, 2021, 'Record', 'finished', 'Thousand-star tales Ost.Tales of thousands of stars 1000stars - Gun Nophat', 'Song Tales Of Thousand Stars (Soundtrack of The Thousand Stars Series 1000stars) Singer Kannapat Lyrics / Melody : Ajchariya Dulaiphaiboon Remix : Supakij Pongtanakit , Achariya Dulaiphaiboon Executive Producer : Achariya Dulaiphaiboon Producer : Ajchariya Dulaiphaiboon Flute : Aran Sangmuang Guitar : Prateep Luang Prom Background vocal : Amp Vocal Director : Ajchariya Duliyaphaiboon Mix - Mastering : Ravi Kangsanarak Recording at DBS Studio by Norapat Digital Download *1232323 Spotify | iTunes | JOOX [Official Trailer] 1000stars https://www.youtube.com/watch?v=o-gaRz2AE_Y Follow Tales of the Thousand Stars every Friday at 8:30 p.m. on GMM25 | 10:30 p.m. on LINE TV.', 'https://www.gmm-tv.com/cms/upload_file/videos/poster/2021/01/ab2f3ad920d5db2c4ede12791fe0d9f0.jpg', 'https://www.youtube.com/embed/o-gaRz2AE_Y'),
(13, 2021, 'Record', 'finished', 'There\'s no day to love Ost.TonNachonthee - Ice Saranyu', 'Songs, No Day, No Love (Early Series Soundtrack) Singer Ice Saranyu Lyrics GOP Poscard Thanee Wongniwatkajorn AFU Narongsak Sribandasakwatcharakorn Executive Producer : AFU Narongsak Sribandasakwatcharakorn Thani Wongniwatkajorn Digital Download *1232323 Spotify | iTunes | JOOX TonNachonthee [Official Trailer] https://www.youtube.com/watch?v=ClrYEqhGdP0 Follow Ton Chonthee every Friday at 21:30 on GMM25 and AISPLAY.Starting November 13', 'https://www.gmm-tv.com/cms/upload_file/videos/poster/2020/11/ceadb4f8c598a8b34faebdb581398e75.jpg', 'https://www.youtube.com/embed/ClrYEqhGdP0'),
(14, 2020, 'Record', 'finished', 'That person has to be her. Ost. Because we(young) pair up, Still 2gether - Win Methwin', 'That song has to be you (the soundtrack to the series because we(young) are still 2gether).Singer Vin Methwin Lyrics / Melody : Achariya Dulaiphaiboon Composed : Chonlathat Chansiricharoenkul Executive Producer : Achariya Dulaiphaiboon Producer : Ajchariya Dulaiphaiboon , Chonlathat Chansiricharoenkul ( Achariya Dulyapaiboon , Chonlatas Chansiri ) Guide / Background Vocals : Genius Duliyaphaiboon Vocal Director : Achariya Dulaiphaiboon / Chonlathat Chansiricharoenkul , Ms. Green Digital Editor : Chonlathat Chansiricharoenkul Mix - Mastering : Rawee Kangsanarak Digital Download *1232323 JOOX : https://api.joox.com/s/rd?k=NcdH Because we\'re still 2gether [Official Trailer]. https://www.youtube.com/watch?v=NGRiLvi-OM0 ', 'https://www.gmm-tv.com/cms/upload_file/videos/poster/2020/09/9fcdd56860907ef6f5dc7d19dae41e85.jpg', 'https://api.joox.com/s/rd?k=NcdH'),
(15, 2019, 'Serie', 'finished', 'Theory of Love | EP.1 [1/4]', '\"What to do when you feel with your best friend beyond your friends and try to cut your heart out\" \"Brutal Gang\" is a third-year film gang whose members are four hot boys: \"Thurs, Camp, Two, Bone.\" When \"Two\" realized the fact that the Turks had been in love with the camp for the past three years, the mission to help his friends fulfill their hopes began. The camp is starting to feel good responding, but that\'s just a stupid testament to the camp\'s curious idea that the Turks really like themselves? When the Turks realized the truth, the camp was just trying. The Turks were devastated and tried to cut off the camp, but instead... The camp really had a good feeling about the Thurs. The camp\'s \"flirting theory\" began.', 'https://www.gmm-tv.com/cms/upload_file/category/poster/87ece6ea01ececa06cdb1681097f5797.jpg', NULL),
(16, 2019, 'Serie', 'finished', 'Dark Blue Kiss, the last kiss for you alone, | Official Trailer.', 'When the feeling comes to a turning point, how will this love end? \"Pete-Nine\" comes with a love that grows to the next level when their love is tested by \"Nont,\" a pupil who comes to special classes with nine who interstitial in the middle of a relationship, misleading Pete and nine, as well as the secrets they\'ve been secretly dating. It\'s being suspected by both friends and family that it\'s a translator for their love to start shaking. A hot-blooded guy who likes to have fights all over the place until \"Sun\". The brother of a close friend was frequently affected, so Sun filed a word for Fogle to change himself and worked with him at the Blue Sky Café from the wrong place. They had to work closely together until their feelings began to change gradually amid the confusion over what was really going on with their feelings.', 'https://www.gmm-tv.com/cms/upload_file/category/poster/57e3faab9972cc59cc76db48fe05dc5a.jpg', NULL),
(17, 2018, 'Serie', 'finished', 'He\'s coming to me | EP.1 [1/4]', NULL, 'https://www.gmm-tv.com/cms/upload_file/category/poster/6661d09a3591b720dc4d7cd8ea0b70bd.jpg', NULL);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `brands`
--

CREATE TABLE `brands` (
  `IdBrands` int(11) NOT NULL,
  `Category` varchar(255) NOT NULL,
  `Title` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `brands`
--

INSERT INTO `brands` (`IdBrands`, `Category`, `Title`) VALUES
(1, 'Makeup', 'Idolo'),
(2, 'Food', 'Vfoods'),
(3, 'Skincare', 'Idolo'),
(4, 'Technology', 'Oppo'),
(5, 'Beverage', 'Estcola'),
(6, 'Beverage', 'Oishi'),
(7, 'Food ', 'Corneto'),
(8, 'Skincare', 'Julas Herb'),
(9, 'Skincare', 'Giffarine'),
(10, 'Car', 'Suzuki'),
(11, 'Skincare', 'ILY Skin'),
(12, 'Skincare', 'Super'),
(13, 'Food ', 'iiusua'),
(14, 'Skincare', 'Carabao'),
(15, 'Skincare', 'Colly'),
(16, 'Skincare', 'SaRa');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `compra`
--

CREATE TABLE `compra` (
  `IdCompra` int(11) NOT NULL,
  `IdArticle` int(11) NOT NULL,
  `Cantidad` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `compra`
--

INSERT INTO `compra` (`IdCompra`, `IdArticle`, `Cantidad`) VALUES
(1, 2, 3),
(2, 6, 1),
(3, 4, 1),
(4, 5, 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `direccion`
--

CREATE TABLE `direccion` (
  `IdDireccion` int(11) NOT NULL,
  `Address1` varchar(255) NOT NULL,
  `Address2` varchar(255) DEFAULT NULL,
  `District` varchar(255) NOT NULL,
  `Postcode` int(11) NOT NULL,
  `Contry` varchar(255) NOT NULL,
  `City` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `direccion`
--

INSERT INTO `direccion` (`IdDireccion`, `Address1`, `Address2`, `District`, `Postcode`, `Contry`, `City`) VALUES
(1, 'San Vlentin', '', 'Nuevo Leon', 66600, 'mexico', 'apodaca'),
(2, 'San Vlentin', '', 'Nuevo Leon', 66600, 'mexico', 'apodaca'),
(3, 'San Vlentin', '', 'Nuevo Leon', 66600, 'mexico', 'apodaca'),
(4, 'San Valentin', 'Villas de San Cristobal', 'algo', 66478, 'Mexico', 'San Nicolás de los Garza'),
(5, 'San Valentin', 'Villas de San Cristobal', 'algo', 66478, 'Mexico', 'San Nicolás de los Garza'),
(6, 'San Valentin', 'Villas de San Cristobal', 'algo', 66478, 'Mexico', 'San Nicolás de los Garza'),
(7, 'San Valentin', 'Villas de San Cristobal', 'algo', 66478, 'Mexico', 'San Nicolás de los Garza'),
(8, 'San Valentin', 'Villas de San Cristobal', 'algo', 66478, 'Mexico', 'San Nicolás de los Garza'),
(9, 'San Valentin', 'Villas de San Cristobal', 'algo', 66478, 'Mexico', 'San Nicolás de los Garza'),
(10, 'San Valentin', 'Villas de San Cristobal', 'algo', 66478, 'Mexico', 'San Nicolás de los Garza'),
(11, 'San Valentin', 'Villas de San Cristobal', 'algo', 66478, 'Mexico', 'San Nicolás de los Garza'),
(12, 'San Valentin', 'Villas de San Cristobal', 'algo', 66478, 'Mexico', 'San Nicolás de los Garza'),
(13, 'San Valentin', 'Villas de San Cristobal', 'algo', 66478, 'Mexico', 'San Nicolás de los Garza'),
(14, 'San Valentin', 'Villas de San Cristobal', 'algo', 66478, 'Mexico', 'San Nicolás de los Garza'),
(15, 'San Valentin', 'Villas de San Cristobal', 'algo', 66478, 'Mexico', 'San Nicolás de los Garza'),
(16, 'San Valentin', 'Villas de San Cristobal', 'algo', 66478, 'Mexico', 'San Nicolás de los Garza'),
(17, 'San Valentin', 'Villas de San Cristobal', 'algo', 66478, 'Mexico', 'San Nicolás de los Garza'),
(18, 'San Valentin', 'Villas de San Cristobal', 'algo', 66478, 'Mexico', 'San Nicolás de los Garza'),
(19, 'San Valentin', 'Villas de San Cristobal', 'algo', 66478, 'Mexico', 'San Nicolás de los Garza'),
(20, 'San Valentin', 'Villas de San Cristobal', 'algo', 66478, 'Mexico', 'San Nicolás de los Garza'),
(21, 'San Valentin', 'Villas de San Cristobal', 'algo', 66478, 'Mexico', 'San Nicolás de los Garza'),
(22, 'San Valentin', 'Villas de San Cristobal', 'algo', 66478, 'Mexico', 'San Nicolás de los Garza'),
(23, 'San Valentin', 'Villas de San Cristobal', 'algo', 66478, 'Mexico', 'San Nicolás de los Garza'),
(24, 'San Valentin', 'Villas de San Cristobal', 'algo', 66478, 'Mexico', 'San Nicolás de los Garza'),
(25, 'San Valentin', 'Villas de San Cristobal', 'algo', 66478, 'Mexico', 'San Nicolás de los Garza'),
(26, 'San Valentin', 'Villas de San Cristobal', 'algo', 66478, 'Mexico', 'San Nicolás de los Garza'),
(27, 'san valentin', 'san valentin', 'aponaca', 34567, 'Mexico', 'apodaca');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuario`
--

CREATE TABLE `usuario` (
  `IdUsuario` int(11) NOT NULL,
  `Firstname` varchar(50) NOT NULL,
  `Lastname` varchar(50) NOT NULL,
  `Email` varchar(100) NOT NULL,
  `Password` varchar(25) NOT NULL,
  `Phone` int(25) DEFAULT NULL,
  `IdDireccion` int(11) DEFAULT NULL,
  `Card` int(11) DEFAULT NULL,
  `ExpDate` date DEFAULT NULL,
  `CVV` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `usuario`
--

INSERT INTO `usuario` (`IdUsuario`, `Firstname`, `Lastname`, `Email`, `Password`, `Phone`, `IdDireccion`, `Card`, `ExpDate`, `CVV`) VALUES
(1, 'Antonio', 'Elizondo', 'antonio@g.com', 'hola', 2147483647, NULL, NULL, NULL, NULL),
(2, 'Antonio', 'Gil', 'a@g.com', 'hola', 67686768, 1, 2147483647, '2021-04-10', 282),
(3, 'Antonio', 'Gil', 'a@g.com', 'hola', 67686768, 2, 2147483647, '2021-04-10', 282),
(4, 'Antonio', 'Gil', 'a@g.com', 'hola', 67686768, 3, 2147483647, '2021-04-10', 282),
(5, 'Maria Mayte', 'Solis', 'mayte_lozanos@hotmail.com', 'hola', 23456789, 4, 0, '2021-05-03', 345),
(6, 'Maria Mayte', 'Solis', 'mayte_lozanos@hotmail.com', 'hola', 23456789, 5, 0, '2021-05-03', 345),
(7, 'Maria Mayte', 'Solis', 'mayte_lozanos@hotmail.com', 'hola', 23456789, 6, 0, '2021-05-03', 345),
(8, 'Maria Mayte', 'Solis', 'mayte_lozanos@hotmail.com', 'hola', 23456789, 7, 0, '2021-05-03', 345),
(9, 'Maria Mayte', 'Solis', 'mayte_lozanos@hotmail.com', 'hola', 23456789, 8, 0, '2021-05-03', 345),
(10, 'Maria Mayte', 'Solis', 'mayte_lozanos@hotmail.com', 'hola', 23456789, 9, 0, '2021-05-03', 345),
(11, 'Maria Mayte', 'Solis', 'mayte_lozanos@hotmail.com', 'ant', 89767634, 10, 0, '2021-05-31', 567),
(12, 'Maria Mayte', 'Solis', 'antonio_1606_98@hotmail.com', 'ant', 89986433, 11, 0, '2021-05-31', 456),
(13, 'Maria Mayte', 'Solis', 'antonio_1606_98@hotmail.com', 'ant', 67676767, 12, 0, '2021-05-31', 456),
(14, 'Maria Mayte', 'Solis', 'antonio_1606_98@hotmail.com', 'ant', 67676767, 13, 0, '2021-05-31', 456),
(15, 'Maria Mayte', 'Solis', 'antonio_1606_98@hotmail.com', 'ant', 67676767, 14, 0, '2021-05-31', 456),
(16, 'Maria Mayte', 'Solis', 'antonio_1606_98@hotmail.com', 'ant', 67676767, 15, 0, '2021-05-31', 456),
(17, 'Maria Mayte', 'Solis', 'antonio_1606_98@hotmail.com', 'ant', 67676767, 16, 0, '2021-05-31', 456),
(18, 'Maria Mayte', 'Solis', 'antonio_1606_98@hotmail.com', 'ant', 67676767, 17, 0, '2021-05-31', 456),
(19, 'Maria Mayte', 'Solis', 'antonio_1606_98@hotmail.com', 'ant', 67676767, 18, 0, '2021-05-31', 456),
(20, 'Maria Mayte', 'Solis', 'antonio_1606_98@hotmail.com', 'ant', 67676767, 19, 0, '2021-05-31', 456),
(21, 'Maria Mayte', 'Solis', 'antonio_1606_98@hotmail.com', 'ant', 67676767, 20, 0, '2021-05-31', 456),
(22, 'Maria Mayte', 'Solis', 'antonio_1606_98@hotmail.com', 'ant', 67676767, 21, 0, '2021-05-31', 456),
(23, 'Maria Mayte', 'Solis', 'antonio_1606_98@hotmail.com', 'ant', 67676767, 22, 0, '2021-05-31', 456),
(24, 'Maria Mayte', 'Solis', 'antonio_1606_98@hotmail.com', 'ant', 67676767, 23, 0, '2021-05-31', 456),
(25, 'Maria Mayte', 'Solis', 'antonio_1606_98@hotmail.com', 'ant', 67676767, 24, 0, '2021-05-31', 456),
(26, 'Maria Mayte', 'Solis', 'antonio_1606_98@hotmail.com', 'ant', 67676767, 25, 0, '2021-05-31', 456),
(27, 'Maria Mayte', 'Solis', 'antonio_1606_98@hotmail.com', 'ant', 67676767, 26, 0, '2021-05-31', 456),
(28, 'Hola', 'Adios', 'antonio_1606_98@hotmail.com', 'hola', 2147483647, 27, 0, '2021-06-10', 345);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `wishlist`
--

CREATE TABLE `wishlist` (
  `IdWishlist` int(11) NOT NULL,
  `IdUsuario` int(11) NOT NULL,
  `IdArticle` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `wishlist`
--

INSERT INTO `wishlist` (`IdWishlist`, `IdUsuario`, `IdArticle`) VALUES
(1, 1, 4),
(2, 1, 5);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `article`
--
ALTER TABLE `article`
  ADD PRIMARY KEY (`IdArticulo`);

--
-- Indices de la tabla `artist`
--
ALTER TABLE `artist`
  ADD PRIMARY KEY (`IdArtist`);

--
-- Indices de la tabla `begin`
--
ALTER TABLE `begin`
  ADD PRIMARY KEY (`BeginId`);

--
-- Indices de la tabla `brands`
--
ALTER TABLE `brands`
  ADD PRIMARY KEY (`IdBrands`);

--
-- Indices de la tabla `compra`
--
ALTER TABLE `compra`
  ADD PRIMARY KEY (`IdCompra`);

--
-- Indices de la tabla `direccion`
--
ALTER TABLE `direccion`
  ADD PRIMARY KEY (`IdDireccion`);

--
-- Indices de la tabla `usuario`
--
ALTER TABLE `usuario`
  ADD PRIMARY KEY (`IdUsuario`);

--
-- Indices de la tabla `wishlist`
--
ALTER TABLE `wishlist`
  ADD PRIMARY KEY (`IdWishlist`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `article`
--
ALTER TABLE `article`
  MODIFY `IdArticulo` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT de la tabla `artist`
--
ALTER TABLE `artist`
  MODIFY `IdArtist` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT de la tabla `begin`
--
ALTER TABLE `begin`
  MODIFY `BeginId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT de la tabla `brands`
--
ALTER TABLE `brands`
  MODIFY `IdBrands` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT de la tabla `compra`
--
ALTER TABLE `compra`
  MODIFY `IdCompra` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT de la tabla `direccion`
--
ALTER TABLE `direccion`
  MODIFY `IdDireccion` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;

--
-- AUTO_INCREMENT de la tabla `usuario`
--
ALTER TABLE `usuario`
  MODIFY `IdUsuario` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;

--
-- AUTO_INCREMENT de la tabla `wishlist`
--
ALTER TABLE `wishlist`
  MODIFY `IdWishlist` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
