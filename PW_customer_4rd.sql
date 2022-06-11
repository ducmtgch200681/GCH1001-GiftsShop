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
  `Ad_password` varchar(50) NOT NULL,
  `Ad_Email` varchar(100) NOT NULL,
  `Ad_DoB` date NOT NULL,
  PRIMARY KEY (`Ad_id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4;

-- Dumping data for table giftsshop.admin: ~3 rows (approximately)
/*!40000 ALTER TABLE `admin` DISABLE KEYS */;
INSERT INTO `admin` (`Ad_id`, `Ad_Fullname`, `Ad_Username`, `Ad_password`, `Ad_Email`, `Ad_DoB`) VALUES
	(1, 'Nguyen Van Tuan', 'TuanT', '123456', 'tuannvgch200546@gmail.com', '2002-12-13'),
	(2, 'Mai The Duc', 'DucD', '111111', 'ducgchddd200@gmail.com', '2002-01-01'),
	(3, 'Cao Viet Hoang', 'HoangH', '222222', 'HoangHgch600@gmail.com', '2002-02-02');
/*!40000 ALTER TABLE `admin` ENABLE KEYS */;

-- Dumping structure for table giftsshop.category
CREATE TABLE IF NOT EXISTS `category` (
  `Cate_id` int(11) NOT NULL AUTO_INCREMENT,
  `Cate_Name` varchar(50) NOT NULL,
  `Cate_Description` text NOT NULL,
  PRIMARY KEY (`Cate_id`) USING BTREE
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4;

-- Dumping data for table giftsshop.category: ~3 rows (approximately)
/*!40000 ALTER TABLE `category` DISABLE KEYS */;
INSERT INTO `category` (`Cate_id`, `Cate_Name`, `Cate_Description`) VALUES
	(1, 'Handmade', 'Gifts made by our hand. We love it!'),
	(2, 'Sweet', 'The best sweets we can find in nearby area and some delivery from other famous land!'),
	(3, 'Luxury', 'Luxury gift bring out every thing you need for your lover, friend, elder,...');
/*!40000 ALTER TABLE `category` ENABLE KEYS */;

-- Dumping structure for table giftsshop.customer
CREATE TABLE IF NOT EXISTS `customer` (
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  `Cus_Fullname` varchar(100) NOT NULL,
  `Cus_Username` varchar(100) NOT NULL,
  `Cus_password` varchar(50) NOT NULL,
  `Cus_gender` varchar(20) NOT NULL,
  `Cus_tele` varchar(20) NOT NULL,
  `Cus_Dob` date NOT NULL,
  `Cus_Add` varchar(255) NOT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- Dumping data for table giftsshop.customer: ~0 rows (approximately)
/*!40000 ALTER TABLE `customer` DISABLE KEYS */;
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
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=utf8mb4;

-- Dumping data for table giftsshop.gifts: ~2 rows (approximately)
/*!40000 ALTER TABLE `gifts` DISABLE KEYS */;
INSERT INTO `gifts` (`Gifts_id`, `Gifts_Name`, `Cate_id`, `Price`, `Brand`, `Gifts_Description`, `Gifts_Images`) VALUES
	(5, 'AH', 1, '$999', 'German', 'meow', 'Images/W3EgCKRWZyVXESe9SCbdhE1G2EHHEzeMHlBAdVYa.jpg'),
	(6, 'AH2', 2, '956', 'Yahooo', 'sfdgsfg', 'Images/s3useaQZxiA2wSxbEuNLTgiFck61h3toMmebtsyo.jpg'),
	(7, 'AH', 2, '956', 'Nikon', 'woof woof', 'Images/tQaseC0J5eEay3RkvOhCQcBj7NIK2CLkOGw6mmyw.jpg');
/*!40000 ALTER TABLE `gifts` ENABLE KEYS */;

/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IFNULL(@OLD_FOREIGN_KEY_CHECKS, 1) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40111 SET SQL_NOTES=IFNULL(@OLD_SQL_NOTES, 1) */;
