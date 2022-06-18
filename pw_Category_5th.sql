-- --------------------------------------------------------
-- Host:                         127.0.0.1
-- Server version:               10.4.24-MariaDB - mariadb.org binary distribution
-- Server OS:                    Win64
-- HeidiSQL Version:             12.0.0.6468
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!50503 SET NAMES utf8mb4 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
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
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8mb4;

-- Dumping data for table giftsshop.admin: ~6 rows (approximately)
INSERT INTO `admin` (`Ad_id`, `Ad_Fullname`, `Ad_Username`, `Ad_password`, `Ad_Email`, `Ad_DoB`) VALUES
	(1, 'Nguyen Van Tuan', 'TuanT', '123456', 'tuannvgch200546@gmail.com', '2002-12-13'),
	(2, 'Mai The Duc', 'DucD', '111111', 'ducgchddd200@gmail.com', '2002-01-01'),
	(3, 'Cao Viet Hoang', 'HoangH', '222222', 'HoangHgch600@gmail.com', '2002-02-02'),
	(4, 'Nguyen Van Tuan', 'TuanT', '123456', 'tuannvgch200546@gmail.com', '2002-12-13'),
	(5, 'Mai The Duc', 'DucD', '111111', 'ducgchddd200@gmail.com', '2002-01-01'),
	(6, 'Cao Viet Hoang', 'HoangH', '222222', 'HoangHgch600@gmail.com', '2002-02-02');

-- Dumping structure for table giftsshop.category
CREATE TABLE IF NOT EXISTS `category` (
  `Cate_id` int(11) NOT NULL AUTO_INCREMENT,
  `Cate_Name` varchar(50) NOT NULL,
  `Cate_Description` text NOT NULL,
  `Cate_image` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`Cate_id`)
) ENGINE=InnoDB AUTO_INCREMENT=14 DEFAULT CHARSET=utf8mb4;

-- Dumping data for table giftsshop.category: ~2 rows (approximately)
INSERT INTO `category` (`Cate_id`, `Cate_Name`, `Cate_Description`, `Cate_image`) VALUES
	(11, 'lower1', 'i love you', 'banh.png'),
	(13, 'test', 'test', 'chu-ky-ten-hoang-rhesmanisa-otf.jpeg');

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
INSERT INTO `customer` (`Cus_id`, `Cus_Fullname`, `Cus_Username`, `Cus_password`, `Cus_gender`, `Cus_phone`, `Cus_DoB`, `Cus_add`) VALUES
	(1, 'User name', 'xxxx', '123456', 'Male', '01234567891', '2000-01-01', 'khap moi noi'),
	(2, 'Ho Va Ten', 'qqww', '123456', 'Female', '01233345122', '1999-02-06', 'everywhere');

-- Dumping structure for table giftsshop.gifts
CREATE TABLE IF NOT EXISTS `gifts` (
  `Gifts_id` int(11) NOT NULL AUTO_INCREMENT,
  `Gifts_Name` varchar(255) NOT NULL DEFAULT '0',
  `Cate_id` int(11) NOT NULL DEFAULT 0,
  `Price` varchar(100) NOT NULL DEFAULT '0',
  `Brand` varchar(100) NOT NULL DEFAULT '0',
  `Gifts_Description` text NOT NULL,
  `Gifts_Images` varchar(255) DEFAULT '0',
  PRIMARY KEY (`Gifts_id`),
  KEY `FK_Cateid` (`Cate_id`),
  CONSTRAINT `FK_Cateid` FOREIGN KEY (`Cate_id`) REFERENCES `category` (`Cate_id`) ON UPDATE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=23 DEFAULT CHARSET=utf8mb4;

-- Dumping data for table giftsshop.gifts: ~3 rows (approximately)
INSERT INTO `gifts` (`Gifts_id`, `Gifts_Name`, `Cate_id`, `Price`, `Brand`, `Gifts_Description`, `Gifts_Images`) VALUES
	(20, 'lower', 11, '123', 'asdas', 'i love you', 'pYLiJqNDT78LRfjXlt6zx6zwQ3O71Bpm7D9aavwF.jpg'),
	(21, 'ml duc', 11, 'asdsadsa', '2412', 'asdsa', 'oIc4aY1CnvDrzW3eJToYFKIlKBaWvXNevZbM2bQ5.jpg'),
	(22, 'test', 13, '100', 'test', 'test', 'JQA24L26IOMiyrX686TJhWIw46Pmini2NMeYf32a.jpg');

/*!40103 SET TIME_ZONE=IFNULL(@OLD_TIME_ZONE, 'system') */;
/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IFNULL(@OLD_FOREIGN_KEY_CHECKS, 1) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40111 SET SQL_NOTES=IFNULL(@OLD_SQL_NOTES, 1) */;
