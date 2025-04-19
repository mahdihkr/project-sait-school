-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Feb 23, 2025 at 06:25 AM
-- Server version: 8.2.0
-- PHP Version: 8.2.13

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `onenewsdb`
--

-- --------------------------------------------------------

--
-- Table structure for table `news`
--

DROP TABLE IF EXISTS `news`;
CREATE TABLE IF NOT EXISTS `news` (
  `id` int NOT NULL AUTO_INCREMENT,
  `title` varchar(100) CHARACTER SET utf8mb3 COLLATE utf8mb3_persian_ci NOT NULL,
  `text` varchar(1000) CHARACTER SET utf8mb3 COLLATE utf8mb3_persian_ci NOT NULL,
  `imageurl` varchar(100) CHARACTER SET utf8mb3 COLLATE utf8mb3_persian_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_persian_ci;

--
-- Dumping data for table `news`
--

INSERT INTO `news` (`id`, `title`, `text`, `imageurl`) VALUES
(4, 'قیمت خودرو ارزان شد', 'به دلایل فرا ملی و بین المللی و الهی بی دلیل خودرو ارزان شد. به دلایل فرا ملی و بین المللی و الهی بی دلیل خودرو ارزان شد. به دلایل فرا ملی و بین المللی و الهی بی دلیل خودرو ارزان شد. به دلایل فرا ملی و بین المللی و الهی بی دلیل خودرو ارزان شد. به دلایل فرا ملی و بین المللی و الهی بی دلیل خودرو ارزان شد. ', 'images/everything-about-car-classification.jpg'),
(2, 'افزایش مسافت ایرانی ها', 'ایرانیان به مناسبت های گوناگون تعطیلی رسمی و غیر رسمی سریعا مقدمات سفر مخصوصا جاده های شمال را آماده کرده و حرکت میکنند. در این ', 'images/866039_670.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

DROP TABLE IF EXISTS `user`;
CREATE TABLE IF NOT EXISTS `user` (
  `id` int NOT NULL AUTO_INCREMENT,
  `name` varchar(30) COLLATE utf8mb3_persian_ci NOT NULL,
  `username` varchar(20) COLLATE utf8mb3_persian_ci NOT NULL,
  `password` varchar(20) COLLATE utf8mb3_persian_ci NOT NULL,
  `admin` tinyint(1) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_persian_ci;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `name`, `username`, `password`, `admin`) VALUES
(1, 'hasan', 'h100', '1234', 1),
(2, 'taghi', 'taghi', '1234', 0);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
