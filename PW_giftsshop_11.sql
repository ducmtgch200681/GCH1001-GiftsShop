-- --------------------------------------------------------
-- Host:                         127.0.0.1
-- Server version:               10.4.24-MariaDB - mariadb.org binary distribution
-- Server OS:                    Win64
-- HeidiSQL Version:             11.3.0.6295
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!50503 SET NAMES utf8mb4 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;


-- Dumping database structure for giftsshop
CREATE DATABASE IF NOT EXISTS `giftsshop` /*!40100 DEFAULT CHARACTER SET utf8mb4 */;
USE `giftsshop`;

-- Dumping structure for table giftsshop.admin
CREATE TABLE IF NOT EXISTS `admin` (
  `Ad_id` int(11) NOT NULL AUTO_INCREMENT,
  `Ad_Fullname` varchar(100) NOT NULL,
  `Ad_Username` varchar(100) NOT NULL,
  `Ad_password` varchar(300) NOT NULL,
  `Ad_Email` varchar(100) NOT NULL,
  `Ad_DoB` date NOT NULL,
  PRIMARY KEY (`Ad_id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4;

-- Dumping data for table giftsshop.admin: ~3 rows (approximately)
/*!40000 ALTER TABLE `admin` DISABLE KEYS */;
INSERT INTO `admin` (`Ad_id`, `Ad_Fullname`, `Ad_Username`, `Ad_password`, `Ad_Email`, `Ad_DoB`) VALUES
	(1, 'Nguyen Van Tuan', 'TuanT', '6a0129d59aa4967c0627c4c0803ae1a9a49f6ddd', 'tuannvgch200546@gmail.com', '2002-12-13'),
	(2, 'Mai The Duc', 'DucD', 'b7c40b9c66bc88d38a59e554c639d743e77f1b65', 'ducgchddd200@gmail.com', '2002-01-01'),
	(3, 'Cao Viet Hoang', 'HoangH', '7c4a8d09ca3762af61e59520943dc26494f8941b', 'HoangHgch600@gmail.com', '2002-02-02');
/*!40000 ALTER TABLE `admin` ENABLE KEYS */;

-- Dumping structure for table giftsshop.category
CREATE TABLE IF NOT EXISTS `category` (
  `Cate_id` int(11) NOT NULL AUTO_INCREMENT,
  `Cate_Name` varchar(50) NOT NULL,
  `Cate_Description` text NOT NULL,
  `Cate_image` varchar(255) NOT NULL,
  PRIMARY KEY (`Cate_id`) USING BTREE
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4;

-- Dumping data for table giftsshop.category: ~3 rows (approximately)
/*!40000 ALTER TABLE `category` DISABLE KEYS */;
INSERT INTO `category` (`Cate_id`, `Cate_Name`, `Cate_Description`, `Cate_image`) VALUES
	(1, 'Handmade', 'Gifts made by our hand. We love it!', 'handmade.jpg'),
	(2, 'Sweet', 'The best sweets we can find in nearby area and some delivery from other famous land!', 'USA_695x695.jpg'),
	(3, 'Luxury', 'Luxury gift bring out every thing you need for your lover, friend, elder,...', 'butmay.jpg');
/*!40000 ALTER TABLE `category` ENABLE KEYS */;

-- Dumping structure for table giftsshop.customer
CREATE TABLE IF NOT EXISTS `customer` (
  `Cus_id` int(11) NOT NULL AUTO_INCREMENT,
  `Cus_Fullname` varchar(100) NOT NULL,
  `Cus_Username` varchar(100) NOT NULL,
  `Cus_password` varchar(50) NOT NULL,
  `Cus_gender` varchar(20) NOT NULL,
  `Cus_phone` varchar(20) NOT NULL,
  `Cus_DoB` date NOT NULL,
  `Cus_add` varchar(255) NOT NULL,
  PRIMARY KEY (`Cus_id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4;

-- Dumping data for table giftsshop.customer: ~2 rows (approximately)
/*!40000 ALTER TABLE `customer` DISABLE KEYS */;
INSERT INTO `customer` (`Cus_id`, `Cus_Fullname`, `Cus_Username`, `Cus_password`, `Cus_gender`, `Cus_phone`, `Cus_DoB`, `Cus_add`) VALUES
	(1, 'User name', 'xxxx', '123456', 'Male', '01234567891', '2000-01-01', 'khap moi noi'),
	(2, 'Ho Va Ten', 'qqww', '123456', 'Female', '01233345122', '1999-02-06', 'everywhere');
/*!40000 ALTER TABLE `customer` ENABLE KEYS */;

-- Dumping structure for table giftsshop.gifts
CREATE TABLE IF NOT EXISTS `gifts` (
  `Gifts_id` int(11) NOT NULL AUTO_INCREMENT,
  `Gifts_Name` varchar(255) NOT NULL DEFAULT '0',
  `Cate_id` int(11) NOT NULL DEFAULT 0,
  `Price` varchar(100) NOT NULL DEFAULT '0',
  `Brand` varchar(100) NOT NULL DEFAULT '0',
  `Gifts_Description` text NOT NULL,
  `Gifts_Images` varchar(255) NOT NULL DEFAULT '0',
  PRIMARY KEY (`Gifts_id`),
  KEY `FK_Cateid` (`Cate_id`),
  CONSTRAINT `FK_Cateid` FOREIGN KEY (`Cate_id`) REFERENCES `category` (`Cate_id`)
) ENGINE=InnoDB AUTO_INCREMENT=24 DEFAULT CHARSET=utf8mb4;

-- Dumping data for table giftsshop.gifts: ~23 rows (approximately)
/*!40000 ALTER TABLE `gifts` DISABLE KEYS */;
INSERT INTO `gifts` (`Gifts_id`, `Gifts_Name`, `Cate_id`, `Price`, `Brand`, `Gifts_Description`, `Gifts_Images`) VALUES
	(1, 'Moon cake', 1, '20$', 'The Gifts Shop', 'Weight: 200g\r\nPacking type: Double pack\r\nFood Type: Seasonal, Traditional\r\nIngredients: POWDER, SUGAR, BEACH\r\nExpiration Date: 30-06-2222\r\nType of cake: MOON CAKE\r\nPackage Size: 200MG', 'mooncake.jpg'),
	(2, 'Wooden Cup', 1, '100$', 'The Gifts Shop', 'wooden material.\r\nHandcrafted, durable material.\r\nLong-term use, no harmful substances.', 'woodencup.webp'),
	(3, 'Flower', 1, '10$', 'The Gifts Shop', 'Flower material: Handmade high quality Italian paper flowers\r\nNumber of flowers/bundle: 16 flowers\r\nColor: Blue white', 'flower.jpeg'),
	(4, 'Model House', 1, '30$', 'The Gifts Shop', 'Product size: 30*24.5*27.6 cm\r\nFull of details to assemble into a house as shown in the picture (shop guarantees 100% when missing details)\r\nHas a battery-powered light, has on/off power he main material is wood (90%), small items are made of plastic', 'modelhouse.webp'),
	(5, 'Wall Painting', 1, '30$', 'The Gifts Shop', 'Easily manipulate and install pictures with a set of dedicated tripods that come with pictures.\r\nPicture frame made of anti-termite, anti-mold composite plastic.\r\nFrame version 2cm, wood grain color/white/black.\r\n2 paintings of size 20x30cm\r\n4 paintings size 13x18cm\r\nProducts can be used as housewarming gifts, opening...', 'wallpainting.jpg'),
	(6, 'Bracelet', 1, '5.0$', 'The Gifts Shop', 'Material: Nylon\r\nProduct type: Braided rope\r\nColor: Black, Red, brown, blue, green, white, beige\r\nLength: 18-24cm (7.09-9.45in)\r\nWire diameter: approx 0.4cm(0.16in)\r\nQuantity: 1 Piece (other accessories demo in the picture is not included)', 'bracelet.jpg'),
	(7, 'For The Love Of Nerds', 2, '9.99$', 'The Gifts Shop', 'Do you love Nerds? Then this large selection tray is perfect for you! Packed to the brim in a Nerds themed box this also makes a fantastic gift for anyone with a sweet tooth!\r\n', 'nerds_695x695.jpg'),
	(8, 'Retro Sweet Hamper', 2, '9.99$', 'The Gifts Shop', 'We are pleased to present our Retro Sweet Hamper packed full of all your iconic favourites! Perfect for movie nights, gifts to loved ones or as a special treat for yourself! \r\nThis hamper contains the following: \r\n3 x Fruit Softies, Swizzels Giant Fizzers, Refreshers, Flump, 5 x Anglo Bubbly, 3 x Chuppa Chup Lollies, 3 x Tango Popping Candy Flavours, Tropical Jawbreakers, Strawberry Jawbreakers, Love Hearts, Black Jack Chews, Fruit Salad Chews, Candy Necklace, Swizzels Parma Violets, 2 x Drum Stick Lollies, Candy Lipstick, Candy Whistle, Nougat Bar, Vimto Chew Bar, Refreshers Chew Bar, Barratt Candy Sticks, Sherbet Fountain, Chocolate Jazzles, Chocolate White Mice, Fizzy Strawberry Roller, Rainbow Drops, Fizzy Blueberry Roller, White Chocolate Snowies, Flying Saucers, Sherbet Dip Dab, Sherbet Double Dip, Drumstick Chew Bar, Wham Chew Bar, Fizz Whizz Popping Candy. \r\nPlease note we do occasionally go out of stock of a certain sweet and if so we will replace this with something similar or double up on another sweet in the box. \r\nHamper Dimensions - Height 13cm x Length 32cm x Width 22cm', 'hamper_695x695.jpg'),
	(9, 'Retro Sweet Mega Box', 2, '16.99$', 'The Gifts Shop', 'We are pleased to present our Retro Sweet Mega Box packed full of all your iconic favourites! Perfect for movie nights, gifts to loved ones or as a special tuck box for yourself! \r\nThis mega box contains the following: \r\n3 x Fruit Softies, Swizzels Giant Fizzers, Refreshers, Flump, 5 x Anglo Bubbly, 3 x Chuppa Chup Lollies, 3 x Tango Popping Candy Flavours, Tropical Jawbreakers, Strawberry Jawbreakers, Love Hearts, Black Jack Chews, Fruit Salad Chews, Candy Necklace, Swizzels Parma Violets, 2 x Drum Stick Lollies, Candy Lipstick, Candy Whistle, Nougat Bar, Vimto Chew Bar, Refreshers Chew Bar, Barratt Candy Sticks, Sherbet Fountain, Chocolate Jazzles, Chocolate White Mice, Fizzy Strawberry Roller, Rainbow Drops, Fizzy Blueberry Roller, White Chocolate Snowies, Flying Saucers, Sherbet Dip Dab, Sherbet Double Dip, Drumstick Chew Bar, Wham Chew Bar, Fizz Whizz Popping Candy. \r\nPlease note we do occasionally go out of stock of a certain sweet and if so we will replace this with something similar or double up on another sweet in the box. \r\nBox Dimensions - Height 5cm x Length 35cm x Width 25cm', 'Mega_695x695.jpg'),
	(10, 'Retro Sweet Snack Box 1', 2, '5.49$', 'The Gifts Shop', 'We are pleased to present our Retro Sweet Snack Box packed full of all your iconic favourites! Perfect for movie nights, gifts to loved ones or as a special tuck box for yourself! \r\nThis snack box contains the following: \r\n1 x Dip Dab, 1 x Rainbow Drops, 1 x Chocolate Jazzles, 1 x Wham Bar, 1 x Refresher Bar, 1 x Vimto Bar, 1 x Drumstick Bar, 1 x Tropical Jawbreakers, 1 x Nougat Bar\r\nPlease note we do occasionally go out of stock of a certain sweet and if so we will replace this with something similar or double up on another sweet in the box. \r\nBox Dimensions - Height 5cm x Length 20cm x Width 15cm', 'Sweet-Box-1_695x695.jpg'),
	(11, 'Retro Sweet Snack Box 2', 2, '5.49$', 'The Gifts Shop', 'We are pleased to present our Retro Sweet Snack Box packed full of all your iconic favourites! Perfect for movie nights, gifts to loved ones or as a special tuck box for yourself! \r\nThis snack box contains the following: \r\n1 x Rainbow Drops, 1 x Double Dip, 1 x Fruit Salads, 1 x Black Jacks, 1 x Sherbet Fountain, 1 x Candy Lipstick, 3 x Softies, 5 x Anglo Bubblys\r\nPlease note we do occasionally go out of stock of a certain sweet and if so we will replace this with something similar or double up on another sweet in the box. \r\nBox Dimensions - Height 5cm x Length 20cm x Width 15cm', 'Sweet-Box-2_695x695.jpg'),
	(12, 'Retro Sweet Snack Box 3', 2, '5.49$', 'The Gifts Shop', 'We are pleased to present our Retro Sweet Snack Box packed full of all your iconic favourites! Perfect for movie nights, gifts to loved ones or as a special tuck box for yourself! \r\nThis snack box contains the following: \r\n1 x Rainbow Drops, 1 x Double Dip, 3 x Softies, Strawberry Jawbreakers, 1 x Wham Bar, 1 x Flump, 1 x Giant Fizzers, 1 x Giant Parma Violets, 1 x Love Hearts \r\nPlease note we do occasionally go out of stock of a certain sweet and if so we will replace this with something similar or double up on another sweet in the box. \r\nBox Dimensions - Height 5cm x Length 20cm x Width 15cm', 'Sweet-Box-3_695x695.jpg'),
	(13, 'The American Mega Sweet Mix', 2, '11.99$', 'The Gifts Shop', 'Do you love American sweets? Then this large selection tray is perfect for you! Packed to the brim inside an American flag themed box this also makes a fantastic gift for anyone with a sweet tooth!\r\n1 x Ferrara Pan GrapeHead Grape Candy 0.8oz (23g)\r\n1 x Ferrara Pan Cherryhead Candy 0.8oz (23g)\r\n1 x Mike & Ike - Original Fruits 0.78oz (22g)\r\n1 x Mike & Ike - Jolly Joes 0.78oz 22g\r\n1 x Mike & Ike - Berry Blast Candy 0.78oz (22g)\r\n1 x Mike & Ike - Tropical Typhoon 0.78oz (22g)\r\n1 x Chewy Lemonhead - Berry Awesome - 0.8oz (23g)\r\n1 x Chewy Lemonhead - Fruit Mix - 0.8oz (23g)\r\n1 x Chewy Lemonhead - Pink Lemonade - 0.8oz (23g)\r\n1 x Chewy Lemonhead - Redrific - 0.8oz (23g)\r\n1 x Chewy Lemonhead & Friends - Tropical - 0.9oz 26g\r\n1 x Original Lemonhead - 0.8oz (23g)\r\n5 x Nerd Fun Size (Strawberry/Lemonade Wild Cherry)\r\n2 x Tootsie Roll Miniature \r\n1 x Sweetarts Original Miniature Roll\r\n1 x Airhead Fun Size (Cherry/Blue Raspberry/Watermelon)\r\nImported from the USA', 'USA_695x695.jpg'),
	(14, 'Cigar CUBA', 3, '498$', 'CUBA', 'A cigar is a rolled bundle of dried and fermented tobacco leaves made to be smoked. Cigars are produced in a variety of sizes and shapes. Since the 20th century, almost all cigars are made of three distinct components: the filler, the binder leaf which holds the filler together, and a wrapper leaf, which is often the highest quality leaf used.\r\n', 'xiga.jpeg'),
	(15, 'Diamond Ring', 3, '1.999$', 'JEMMIA', 'native crystalline carbon that is the hardest known mineral, that is usually nearly colorless, that when transparent and free from flaws is highly valued as a precious stone, and that is used industrially especially as an abrasive also : a piece of this substance.\r\n', 'nhankimcuong.jpeg'),
	(16, 'Headphones B&0', 3, '765$', 'B&O', 'Headphones are a pair of small loudspeaker drivers worn on or around the head over a user`s ears. They are electroacoustic transducers, which convert an electrical signal to a corresponding sound.\r\n', 'headphone.png'),
	(17, 'Hublot 418.NX.2001.RX.1604.MXM20', 3, '40.000$', 'HUBLOT', 'Hublot (French pronunciation: [yblo]) is a Swiss luxury watchmaker founded in 1980 by Italian Carlo Crocco. The company operates as a wholly owned subsidiary of the French luxury conglomerate LVMH.\r\n', 'hublot.jpg'),
	(18, 'Lipstick', 3, '85$', 'PREVESE', 'Lip balm or lip salve is a wax-like substance applied topically to the lips to moisturize and relieve chapped or dry lips, angular cheilitis, stomatitis, or cold sores. Lip balm often contains beeswax or carnauba wax, camphor, cetyl alcohol, lanolin, paraffin, and petrolatum, among other ingredients. Some varieties contain dyes, flavor, fragrance, phenol, salicylic acid, and sunscreen.\r\n', 'lipstick.jpg'),
	(19, 'Perfume Chanel', 3, '275$', 'Chanel', 'Perfumes can be defined as substances that emit and diffuse a pleasant and fragrant odor. They consist of manmade mixtures of aromatic chemicals and essential oils. Until the nineteenth century perfumes were usually composed of natural aromatic oils.\r\n', 'chanel.jpg'),
	(20, 'Perfume Dior', 3, '306$', 'Dior', 'Perfumes can be defined as substances that emit and diffuse a pleasant and fragrant odor. They consist of manmade mixtures of aromatic chemicals and essential oils. Until the nineteenth century perfumes were usually composed of natural aromatic oils.\r\n', 'dior.jpg'),
	(21, 'Virtual reality glasses', 3, '199$', 'SAMSUNG', '(Virtual Reality headset) A head-worn apparatus that completely covers the eyes for an immersive 3D experience. Also called "VR goggles," VR headsets may be entirely self-contained such as the Oculus Rift or the HTC Vive.\r\n', 'vr.jpg'),
	(22, 'Wallet bag', 3, '800$', 'MCM', 'A bag is a kind of soft container. It can hold or carry things. It may be made from cloth, leather, plastic, or paper. Many bags are disposable but some are made to use for a long time. A bag may have one or two handles or a shoulder strap.\r\n', 'walletbag.jpg'),
	(23, 'Wine', 3, '98$', 'Charles Heidsieck', 'Wines with high acidity taste tart and zesty. Red wines have more tart fruit characteristics (versus “sweet fruit”). White wines are often described with characteristics similar to lemon or lime juice.\r\n', 'wine.jpg');
/*!40000 ALTER TABLE `gifts` ENABLE KEYS */;

/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IFNULL(@OLD_FOREIGN_KEY_CHECKS, 1) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40111 SET SQL_NOTES=IFNULL(@OLD_SQL_NOTES, 1) */;
