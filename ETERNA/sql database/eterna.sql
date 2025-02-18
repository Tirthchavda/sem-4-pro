-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 17, 2025 at 02:58 PM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `eterna`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin_cred`
--

CREATE TABLE `admin_cred` (
  `sr_no` int(11) NOT NULL,
  `admin_name` varchar(150) NOT NULL,
  `admin_pass` varchar(150) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `admin_cred`
--

INSERT INTO `admin_cred` (`sr_no`, `admin_name`, `admin_pass`) VALUES
(1, 'admin', 'admin@123');

-- --------------------------------------------------------

--
-- Table structure for table `carousel`
--

CREATE TABLE `carousel` (
  `sr_no` int(11) NOT NULL,
  `image` varchar(150) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `carousel`
--

INSERT INTO `carousel` (`sr_no`, `image`) VALUES
(3, 'IMG_66697.jpg'),
(4, 'IMG_96180.webp'),
(5, 'IMG_71559.webp'),
(6, 'IMG_22416.webp'),
(7, 'IMG_76243.webp'),
(8, 'IMG_63463.webp'),
(10, 'IMG_63109.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `cat_details`
--

CREATE TABLE `cat_details` (
  `sr_no` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `page` varchar(100) NOT NULL,
  `picture` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `cat_details`
--

INSERT INTO `cat_details` (`sr_no`, `name`, `page`, `picture`) VALUES
(8, 'BESTSELLER', 'men.php', 'IMG_97429.webp'),
(10, 'SALE', 'men.php', 'IMG_14967.webp'),
(11, 'MEN', 'men.php', 'IMG_60247.webp'),
(12, 'WOMEN', 'men.php', 'IMG_18474.webp'),
(13, 'KIDS', 'men.php', 'IMG_35145.webp'),
(14, 'COUPLE', 'men.php', 'IMG_85864.webp'),
(15, 'LUXURY', 'men.php', 'IMG_86396.webp'),
(16, 'SMART WATCH', 'men.php', 'IMG_58836.webp');

-- --------------------------------------------------------

--
-- Table structure for table `contact_details`
--

CREATE TABLE `contact_details` (
  `sr_no` int(11) NOT NULL,
  `ps` varchar(100) NOT NULL,
  `ios` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `pn1` bigint(20) NOT NULL,
  `pn2` bigint(20) NOT NULL,
  `fb` varchar(100) NOT NULL,
  `insta` varchar(100) NOT NULL,
  `yt` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `contact_details`
--

INSERT INTO `contact_details` (`sr_no`, `ps`, `ios`, `email`, `pn1`, `pn2`, `fb`, `insta`, `yt`) VALUES
(1, 'https://play.google.com/store/games?device=phone', 'https://www.apple.com/in/app-store/', 'dhruvingameryt@gmail.com', 917016387575, 917575858099, 'https://www.facebook.com/', 'https://www.instagram.com/', 'https://www.youtube.com/');

-- --------------------------------------------------------

--
-- Table structure for table `men`
--

CREATE TABLE `men` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `category` varchar(50) NOT NULL,
  `price` int(30) NOT NULL,
  `quantity` int(30) NOT NULL,
  `brand` varchar(50) NOT NULL,
  `modelnumber` varchar(50) NOT NULL,
  `movement` varchar(50) NOT NULL,
  `casematerial` varchar(100) NOT NULL,
  `strapmaterial` varchar(100) NOT NULL,
  `dialsize` varchar(100) NOT NULL,
  `waterresistance` varchar(100) NOT NULL,
  `warranty` varchar(50) NOT NULL,
  `description` varchar(350) NOT NULL,
  `status` tinyint(4) NOT NULL DEFAULT 1,
  `removed` tinyint(4) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `men`
--

INSERT INTO `men` (`id`, `name`, `category`, `price`, `quantity`, `brand`, `modelnumber`, `movement`, `casematerial`, `strapmaterial`, `dialsize`, `waterresistance`, `warranty`, `description`, `status`, `removed`) VALUES
(1, 'Eterna 5822P - Cubitus', 'Men Watch', 50000, 5, 'Eterna', '5822p', 'Swiss Mechanism', 'Stainless steel', 'Stainless steel', '45mm', 'hg', '2 Years', 'as', 1, 1),
(2, 'h', 'h', 4, 3, 'h', 'h', 'h', 'h', 'h', 'h', 'h', 'h', 'h', 1, 1),
(3, 'h', 'f', 45, 18, 'jhj', 'jjjk', 'klj', 'mjuj', 'nhij9i', 'njji', 'nji', 'ji', 'k', 1, 1),
(4, 'Eterna  Nebula Art Deco 18k Gold Skeleton Automatic Watch', 'Men Watch', 640000, 1, 'ETERNA', 'NT5074DL01', 'Automatic', '18 Karat Gold', 'Leather', '45 Mm', 'Yes', 'Lifetime', 'Art Deco 18K Gold Skeletal Automatic Wristwatch - A Tribute to 1920s Elegance and Precision. In the heart of our Art Deco collection lies a flagship masterpiece crafted in 18K gold, a tribute to the geometric elegance of the 1920s. This Art Deco Skeletal Automatic wristwatch is powered by the Swiss STP6 15 calibre, bringing precision and art to the', 1, 0);

-- --------------------------------------------------------

--
-- Table structure for table `men_images`
--

CREATE TABLE `men_images` (
  `sr_no` int(11) NOT NULL,
  `men_id` int(11) NOT NULL,
  `image` varchar(150) NOT NULL,
  `thumb` tinyint(4) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `men_images`
--

INSERT INTO `men_images` (`sr_no`, `men_id`, `image`, `thumb`) VALUES
(17, 4, 'IMG_21168.webp', 0),
(18, 4, 'IMG_60517.webp', 0),
(19, 4, 'IMG_17994.webp', 1),
(20, 4, 'IMG_42816.webp', 0),
(21, 4, 'IMG_58219.webp', 0),
(22, 4, 'IMG_40802.webp', 0),
(23, 4, 'IMG_52982.webp', 0),
(24, 4, 'IMG_72900.webp', 0);

-- --------------------------------------------------------

--
-- Table structure for table `settings`
--

CREATE TABLE `settings` (
  `sr_no` int(11) NOT NULL,
  `site_title` varchar(50) NOT NULL,
  `site_about` varchar(250) NOT NULL,
  `shutdown` tinyint(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `settings`
--

INSERT INTO `settings` (`sr_no`, `site_title`, `site_about`, `shutdown`) VALUES
(1, 'ETERNA', 'Welcome to Eterna, where timeless craftsmanship meets modern elegance. Our precision-engineered watches embody sophistication, durability, and style. Designed for those who appreciate fine horology, Eterna timepieces blend heritage with innovation.', 0);

-- --------------------------------------------------------

--
-- Table structure for table `user_cred`
--

CREATE TABLE `user_cred` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `email` varchar(150) NOT NULL,
  `address` varchar(300) NOT NULL,
  `phonenum` varchar(30) NOT NULL,
  `pincode` int(11) NOT NULL,
  `profile` varchar(150) NOT NULL,
  `city` varchar(50) NOT NULL,
  `password` varchar(200) NOT NULL,
  `is_verified` int(11) DEFAULT 0,
  `token` varchar(200) DEFAULT NULL,
  `t_expire` date NOT NULL,
  `status` int(11) NOT NULL DEFAULT 1,
  `datentime` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `user_cred`
--

INSERT INTO `user_cred` (`id`, `name`, `email`, `address`, `phonenum`, `pincode`, `profile`, `city`, `password`, `is_verified`, `token`, `t_expire`, `status`, `datentime`) VALUES
(10, 'Dhruvin Oza', 'ozadhruvin0911@gmail.com', '177-D Siddhhivinayak Township, 150 ft. Ring Road\r\n150 ft. Ring Road, Bhavnagar', '7575858099', 364002, 'IMG_29965.jpeg', 'Bhavnagar', '$2y$10$O3JtyAdXcJdnD9eoiE6nf.wQ6rqkcFEV4LFbFITPKlRbxQDslU44O', 1, '911f967c9a1d283c4df527ef06db33c8', '0000-00-00', 1, '2025-02-16 17:31:55');

-- --------------------------------------------------------

--
-- Table structure for table `user_queries`
--

CREATE TABLE `user_queries` (
  `sr_no` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `email` varchar(150) NOT NULL,
  `subject` varchar(200) NOT NULL,
  `message` varchar(500) NOT NULL,
  `date` date NOT NULL DEFAULT current_timestamp(),
  `seen` tinyint(4) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin_cred`
--
ALTER TABLE `admin_cred`
  ADD PRIMARY KEY (`sr_no`);

--
-- Indexes for table `carousel`
--
ALTER TABLE `carousel`
  ADD PRIMARY KEY (`sr_no`);

--
-- Indexes for table `cat_details`
--
ALTER TABLE `cat_details`
  ADD PRIMARY KEY (`sr_no`);

--
-- Indexes for table `contact_details`
--
ALTER TABLE `contact_details`
  ADD PRIMARY KEY (`sr_no`);

--
-- Indexes for table `men`
--
ALTER TABLE `men`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `men_images`
--
ALTER TABLE `men_images`
  ADD PRIMARY KEY (`sr_no`),
  ADD KEY `men_id` (`men_id`);

--
-- Indexes for table `settings`
--
ALTER TABLE `settings`
  ADD PRIMARY KEY (`sr_no`);

--
-- Indexes for table `user_cred`
--
ALTER TABLE `user_cred`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user_queries`
--
ALTER TABLE `user_queries`
  ADD PRIMARY KEY (`sr_no`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin_cred`
--
ALTER TABLE `admin_cred`
  MODIFY `sr_no` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `carousel`
--
ALTER TABLE `carousel`
  MODIFY `sr_no` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `cat_details`
--
ALTER TABLE `cat_details`
  MODIFY `sr_no` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `contact_details`
--
ALTER TABLE `contact_details`
  MODIFY `sr_no` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `men`
--
ALTER TABLE `men`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `men_images`
--
ALTER TABLE `men_images`
  MODIFY `sr_no` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT for table `settings`
--
ALTER TABLE `settings`
  MODIFY `sr_no` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `user_cred`
--
ALTER TABLE `user_cred`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `user_queries`
--
ALTER TABLE `user_queries`
  MODIFY `sr_no` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=57;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `men_images`
--
ALTER TABLE `men_images`
  ADD CONSTRAINT `men_images_ibfk_1` FOREIGN KEY (`men_id`) REFERENCES `men` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
