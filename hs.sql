-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3308
-- Generation Time: Sep 25, 2020 at 07:31 PM
-- Server version: 8.0.18
-- PHP Version: 7.3.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `hs`
--

-- --------------------------------------------------------

--
-- Table structure for table `songdata`
--

DROP TABLE IF EXISTS `songdata`;
CREATE TABLE IF NOT EXISTS `songdata` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(30) NOT NULL,
  `URL` varchar(300) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `artist` varchar(30) NOT NULL,
  `mood` varchar(10) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=40 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `songdata`
--

INSERT INTO `songdata` (`id`, `name`, `URL`, `artist`, `mood`) VALUES
(9, 'rajveer', 'asfagfav', 'c', 'chill'),
(10, 'love you zindagi', '<iframe width=\"400\" height=\"80\" src=\"https://www.youtube.com/embed/bw7bVpI5VcM?autoplay=0&autohide=0\" frameborder=\"0\" allow=\"accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture\" allowfullscreen></iframe>', 'jasleen royal', 'happy'),
(11, 'illahi', '<iframe width=\"400\" height=\"80\" src=\"https://www.youtube.com/embed/6w67NOaRe-w?autoplay=0&autohide=0\" frameborder=\"0\" allow=\"accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture\" allowfullscreen></iframe>', 'mohit chhauhan', 'happy'),
(12, 'coca cola tu', '<iframe width=\"400\" height=\"80\" src=\"https://www.youtube.com/embed/_cPHiwPqbqo?autoplay=0&autohide=0\" frameborder=\"0\" allow=\"accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture\" allowfullscreen></iframe>', 'tony kakkar', 'happy'),
(13, 'all iz well', '<iframe width=\"400\" height=\"80\" src=\"https://www.youtube.com/embed/S-LltgOtFSg?autoplay=0&autohide=0\" frameborder=\"0\" allow=\"accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture\" allowfullscreen></iframe>', 'sonu nigam, shaan', 'happy'),
(14, 'malang', '<iframe width=\"400\" height=\"80\" src=\"https://www.youtube.com/embed/KBIq11mNB0I?autoplay=0&autohide=0\" frameborder=\"0\" allow=\"accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture\" allowfullscreen></iframe>', 'ved sharma', 'happy'),
(15, 'malhari', '<iframe width=\"400\" height=\"80\" src=\"https://www.youtube.com/embed/l_MyUGq7pgs?autoplay=0&autohide=0\" frameborder=\"0\" allow=\"accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture\" allowfullscreen></iframe>', 'vishal dadlani', 'happy'),
(16, 'tujhe dekha to', '<iframe width=\"400\" height=\"80\" src=\"https://www.youtube.com/embed/cNV5hLSa9H8?autoplay=0&autohide=0\" frameborder=\"0\" allow=\"accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture\" allowfullscreen></iframe>', 'kumar sanu, lata mangeshkar', 'romantic'),
(17, 'soch na sake', '<iframe width=\"400\" height=\"80\" src=\"https://www.youtube.com/embed/MRtRcTfszjY?autoplay=0&autohide=0\" frameborder=\"0\" allow=\"accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture\" allowfullscreen></iframe>', 'arijit singh', 'romantic'),
(18, 've maahi', '<iframe width=\"400\" height=\"80\" src=\"https://www.youtube.com/embed/j6muwUGdvXw?autoplay=0&autohide=0\" frameborder=\"0\" allow=\"accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture\" allowfullscreen></iframe>', 'arijit singh, asees kaur', 'romantic'),
(19, 'shayad', '<iframe width=\"400\" height=\"80\" src=\"https://www.youtube.com/embed/MJyKN-8UncM?autoplay=0&autohide=0\" frameborder=\"0\" allow=\"accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture\" allowfullscreen></iframe>', 'arijit singh', 'romantic'),
(20, 'tu jaane na', '<iframe width=\"400\" height=\"80\" src=\"https://www.youtube.com/embed/53l2DkivxJs?autoplay=0&autohide=0\" frameborder=\"0\" allow=\"accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture\" allowfullscreen></iframe>', 'atif aslam', 'romantic'),
(21, 'tera ban jaunga', '<iframe width=\"400\" height=\"80\" src=\"https://www.youtube.com/embed/Qdz5n1Xe5Qo?autoplay=0&autohide=0\" frameborder=\"0\" allow=\"accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture\" allowfullscreen></iframe>', 'tulsi kumar, akhil sachdeva', 'romantic'),
(22, 'channa mereya', '<iframe width=\"400\" height=\"80\" src=\"https://www.youtube.com/embed/bzSTpdcs-EI?autoplay=0&autohide=0\" frameborder=\"0\" allow=\"accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture\" allowfullscreen></iframe>', 'arijit singh', 'sad'),
(23, 'rula ke gaya ishq tera', '<iframe width=\"400\" height=\"80\" src=\"https://www.youtube.com/embed/g-C8QJH-NWI?autoplay=0&autohide=0\" frameborder=\"0\" allow=\"accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture\" allowfullscreen></iframe>', 'stebin ben', 'sad'),
(24, 'teri mitti', '<iframe width=\"400\" height=\"80\" src=\"https://www.youtube.com/embed/wF_B_aagLfI?autoplay=0&autohide=0\" frameborder=\"0\" allow=\"accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture\" allowfullscreen></iframe>', 'arijit singh', 'sad'),
(25, 'tum hi aana', '<iframe width=\"400\" height=\"80\" src=\"https://www.youtube.com/embed/RemShT6JAHw?autoplay=0&autohide=0\" frameborder=\"0\" allow=\"accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture\" allowfullscreen></iframe>', 'jubin nautiyal', 'sad'),
(26, 'khairiyat', '<iframe width=\"400\" height=\"80\" src=\"https://www.youtube.com/embed/hoNb6HuNmU0?autoplay=0&autohide=0\" frameborder=\"0\" allow=\"accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture\" allowfullscreen></iframe>', 'arijit singh', 'sad'),
(27, 'kabira', '<iframe width=\"400\" height=\"80\" src=\"https://www.youtube.com/embed/jHNNMj5bNQw?autoplay=0&autohide=0\" frameborder=\"0\" allow=\"accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture\" allowfullscreen></iframe>', 'tochi raina, rekha bhardwaj', 'sad'),
(28, 'chote chote peg', '<iframe width=\"400\" height=\"80\" src=\"https://www.youtube.com/embed/daFPRysCU3E?autoplay=0&autohide=0\" frameborder=\"0\" allow=\"accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture\" allowfullscreen></iframe>', 'navraj hans, honey singh', 'party'),
(29, 'sauda khara khara', '<iframe width=\"400\" height=\"40\" src=\"https://www.youtube.com/embed/LYEqeUr-158?autoplay=0&autohide=0\" frameborder=\"0\" allow=\"accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture\" allowfullscreen></iframe>', 'sukhbir', 'party'),
(30, 'chandigarh mein', '<iframe width=\"400\" height=\"80\" src=\"https://www.youtube.com/embed/yt4-qlU__iM?autoplay=0&autohide=0\" frameborder=\"0\" allow=\"accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture\" allowfullscreen></iframe>', 'badshah', 'party'),
(31, 'khadke glassy', '<iframe width=\"400\" height=\"80\" src=\"https://www.youtube.com/embed/YcDw4h3SUfI?autoplay=0&autohide=0\" frameborder=\"0\" allow=\"accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture\" allowfullscreen></iframe>', 'honeysingh, jyotica tangri, as', 'party'),
(32, 'garmi', '<iframe width=\"400\" height=\"80\" src=\"https://www.youtube.com/embed/q_0uF80IZXM?autoplay=0&autohide=0\" frameborder=\"0\" allow=\"accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture\" allowfullscreen></iframe>', 'badshah, neha kakkar', 'party'),
(33, 'bom diggy diggy', '<iframe width=\"400\" height=\"80\" src=\"https://www.youtube.com/embed/yIIGQB6EMAM?autoplay=0&autohide=0\" frameborder=\"0\" allow=\"accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture\" allowfullscreen></iframe>', 'zack knight, jasmin walia', 'party'),
(34, 'kun faya kun', '<iframe width=\"400\" height=\"80\" src=\"https://www.youtube.com/embed/T94PHkuydcw?autoplay=0&autohide=0\" frameborder=\"0\" allow=\"accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture\" allowfullscreen></iframe>', 'ar rahman, javed ali, mohit ch', 'soulful'),
(35, 'namo namo', '<iframe width=\"400\" height=\"80\" src=\"https://www.youtube.com/embed/dx4Teh-nv3A?autoplay=0&autohide=0\" frameborder=\"0\" allow=\"accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture\" allowfullscreen></iframe>', 'amit trivedi', 'soulful'),
(36, 'bhar do jholi meri', '<iframe width=\"400\" height=\"80\" src=\"https://www.youtube.com/embed/zk0-f92gg9A?autoplay=0&autohide=0\" frameborder=\"0\" allow=\"accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture\" allowfullscreen></iframe>', 'adnan sami', 'soulful'),
(37, 'teri deewani', '<iframe width=\"400\" height=\"80\" src=\"https://www.youtube.com/embed/zZasH6qkn8M?autoplay=0&autohide=0\" frameborder=\"0\" allow=\"accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture\" allowfullscreen></iframe>', 'kailash kher', 'soulful'),
(38, 'maula mere le le meri jaan', '<iframe width=\"400\" height=\"80\" src=\"https://www.youtube.com/embed/90hNT7UYlZA?autoplay=0&autohide=0\" frameborder=\"0\" allow=\"accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture\" allowfullscreen></iframe>', 'salim merchant', 'soulful'),
(39, 'khwaja mere khwaja', '<iframe width=\"400\" height=\"80\" src=\"https://www.youtube.com/embed/Pam8tXa6pkM?autoplay=0&autohide=0\" frameborder=\"0\" allow=\"accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture\" allowfullscreen></iframe>', 'ar rahman', 'soulful');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
CREATE TABLE IF NOT EXISTS `users` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(30) NOT NULL,
  `email` varchar(30) DEFAULT NULL,
  `password` varchar(100) NOT NULL,
  `contact` int(11) NOT NULL,
  `city` varchar(10) NOT NULL,
  `admin` int(10) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `password`, `contact`, `city`, `admin`) VALUES
(1, 'Rajveer Mathur', 'rajveer.mathur25@gmail.com', 'e10adc3949ba59abbe56e057f20f883e', 2147483647, 'chennai', 1),
(2, 'RAJEEV MATHUR', 'rajeevmathur_ecil@yahoo.co.in', 'e10adc3949ba59abbe56e057f20f883e', 2147483647, 'NEW DELHI', 0);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
