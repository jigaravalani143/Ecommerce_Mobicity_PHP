-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 06, 2018 at 07:11 AM
-- Server version: 10.1.29-MariaDB
-- PHP Version: 7.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `e_commerce`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin_login`
--

CREATE TABLE `admin_login` (
  `user_id` int(10) NOT NULL,
  `user_name` varchar(30) NOT NULL,
  `user_password` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin_login`
--

INSERT INTO `admin_login` (`user_id`, `user_name`, `user_password`) VALUES
(1, 'admin', 'admin'),
(0, 'jigar', 'jigar1999');

-- --------------------------------------------------------

--
-- Table structure for table `cart`
--

CREATE TABLE `cart` (
  `product_id` int(10) NOT NULL,
  `product_name` varchar(40) NOT NULL,
  `image` varchar(30) NOT NULL,
  `price` int(10) NOT NULL,
  `details` varchar(500) NOT NULL,
  `c_price` int(10) NOT NULL,
  `product_type` varchar(30) NOT NULL,
  `tags` varchar(25) NOT NULL,
  `brand` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `cart`
--

INSERT INTO `cart` (`product_id`, `product_name`, `image`, `price`, `details`, `c_price`, `product_type`, `tags`, `brand`) VALUES
(12, 'LG K7', '12.jpg', 9365, 'LG K7 smartphone was launched in January 2016. The phone comes with a 5.00-inch touchscreen display with a resolution of 480 pixels by 854 pixels. LG K7 price in India starts from Rs. 6,740. \r\n\r\nThe LG K7 is powered by 1.3GHz quad-core processor and it comes with 1GB of RAM. The phone packs 8GB of internal storage that can be expanded.', 10699, 'LG ', 'LG, K7', 'LG');

-- --------------------------------------------------------

--
-- Table structure for table `multiple`
--

CREATE TABLE `multiple` (
  `email` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `multiple`
--

INSERT INTO `multiple` (`email`) VALUES
('abc@gmail.com'),
('devucp021@gmail.com'),
('ella@gmail.com'),
('hetvishah208@gmail.com'),
('jigaravalani143@gmail.com'),
('jigaravalani@gmail.com'),
('praneeta.desai99@gmail.com'),
('yutikadonga@gmail.com'),
('yutikapatel95@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `p_names` varchar(30) NOT NULL,
  `details` varchar(100) NOT NULL,
  `cus_name` varchar(30) NOT NULL,
  `contact_no` int(10) NOT NULL,
  `email` varchar(25) NOT NULL,
  `address` varchar(50) NOT NULL,
  `zip_code` int(7) NOT NULL,
  `country` varchar(20) NOT NULL,
  `quantity` int(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`p_names`, `details`, `cus_name`, `contact_no`, `email`, `address`, `zip_code`, `country`, `quantity`) VALUES
('', '', 'Jigar Avalani', 1234567890, 'jigaravalani143@gmail.com', 'a/104 kandivali west', 400067, 'India', 2);

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `product_id` int(10) NOT NULL,
  `product_name` varchar(40) NOT NULL,
  `image` varchar(30) NOT NULL,
  `price` int(10) NOT NULL,
  `details` varchar(500) NOT NULL,
  `c_price` int(10) NOT NULL,
  `product_type` varchar(30) NOT NULL,
  `tags` varchar(25) NOT NULL,
  `brand` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`product_id`, `product_name`, `image`, `price`, `details`, `c_price`, `product_type`, `tags`, `brand`) VALUES
(1, 'Samsung Galaxy J2', '1.jpeg', 6990, 'Samsung Galaxy J2 smartphone was launched in September 2015. The phone comes with a 4.70-inch touchscreen display with a resolution of 540 pixels by 960 pixels. Samsung Galaxy J2 price in India starts from Rs. 6,750. \r\n\r\nThe Samsung Galaxy J2 is powered by 1.3GHz quad-core Exynos 3475 processor and it comes with 1GB of RAM. The phone packs 8GB of internal storage that can be expanded up to 128GB via a microSD card. ', 7200, 'Samsung', 'Samsung, Galaxy, J2', 'Samsung'),
(2, 'Apple iPhone 7', '2.jpg', 41999, 'Apple iPhone 7 smartphone was launched in September 2016. The phone comes with a 4.70-inch touchscreen display with a resolution of 750 pixels by 1334 pixels at a PPI of 326 pixels per inch. Apple iPhone 7 price in India starts from Rs. 42,999. \r\n\r\nThe Apple iPhone 7 is powered by quad-core Apple A10 Fusion processor and it comes with 2GB of RAM. The phone packs 32GB of internal storage that cannot be expanded. ', 52000, 'Apple', 'Apple, iPhone, 7', 'Apple'),
(3, 'Samsung Galaxy Note 8', '3.jpg', 67900, 'Samsung Galaxy Note 8 smartphone was launched in August 2017. The phone comes with a 6.30-inch touchscreen display with a resolution of 1440 pixels by 2960 pixels. Samsung Galaxy Note 8 price in India starts from Rs. 67,000. \r\n\r\nThe Samsung Galaxy Note 8 is powered by 1.7GHz octa-core Samsung Exynos 9 Octa 8895 processor and it comes with 6GB of RAM. The phone packs 64GB of internal storage that can be expanded up to 256GB via a microSD card. ', 70900, 'Samsung', 'Samsung, Galaxy, Note 8', 'Samsung'),
(4, 'Apple iPhone 6s', '4.png', 32999, 'Apple iPhone 6s smartphone was launched in September 2015. The phone comes with a 4.70-inch touchscreen display with a resolution of 750 pixels by 1334 pixels at a PPI of 326 pixels per inch. Apple iPhone 6s price in India starts from Rs. 35,499. \r\n\r\nA9It comes with 2GB of RAM. The phone packs 16GB of internal storage that cannot be expanded. As far as the cameras are concerned, the Apple iPhone 6s packs a 12-megapixel primary camera on the rear and a 5-megapixel front shooter for selfies.\r\n', 36099, 'Apple', 'Apple, iPhone 6s', 'Apple'),
(5, 'Apple iPad 2', '5.jpg', 68449, 'Apple iPad 2 Wi-Fi + 3G tablet was launched in March 2011. The tablet comes with a 9.70-inch display with a resolution of 768 pixels by 1024 pixels at a PPI of 132 pixels per inch. Apple iPad 2 Wi-Fi + 3G price in India starts from Rs. 68,449. \r\n\r\nThe Apple iPad 2 Wi-Fi + 3G is powered by 1GHz processor and it comes with 512MB of RAM. The tablet packs 16GB of internal storage that cannot be expanded. \r\n', 72099, 'Apple', 'Apple, iPad 2', 'Apple'),
(6, 'Samsung Galaxy On7', '6.jpeg', 7200, 'Samsung Galaxy On7 Prime smartphone was launched in January 2018. The phone comes with a 5.50-inch touchscreen display with a resolution of 1080 pixels by 1920 pixels.\r\n\r\nThe Samsung Galaxy On7 Prime is powered by 1.6GHz octa-core Samsung Exynos 7870 processor and it comes with 4GB of RAM. The phone packs 64GB of internal storage that can be expanded up to 256GB via a microSD card. ', 7500, 'Samsung', 'Samsung, Galaxy, On7', 'Samsung'),
(7, 'OnePlus 3', '7.jpeg', 23250, 'OnePlus 3 smartphone was launched in June 2016. The phone comes with a 5.50-inch touchscreen display with a resolution of 1080 pixels by 1920 pixels at a PPI of 401 pixels per inch. OnePlus 3 price in India starts from Rs. 21,990. \r\n\r\nThe OnePlus 3 is powered by 1.6GHz quad-core Qualcomm Snapdragon 820 processor and it comes with 6GB of RAM. The phone packs 64GB of internal storage that cannot be expanded. ', 25499, 'OnePlus', 'OnePlus, 3', 'OnePlus'),
(8, 'OnePlus 5T', '8.jpg', 37999, 'OnePlus 5T smartphone was launched in November 2017. The phone comes with a 6.01-inch touchscreen display with a resolution of 1080 pixels by 2160 pixels at a PPI of 401 pixels per inch. OnePlus 5T price in India starts from Rs. 32,999. \r\n\r\nThe OnePlus 5T is powered by 2.45GHz octa-core Qualcomm Snapdragon 835 processor and it comes with 6GB of RAM. The phone packs 64GB of internal storage that cannot be expanded. ', 40599, 'OnePlus', 'OnePlus, 5T', 'OnePlus'),
(9, 'OnePlus X', '9.jpg', 18000, 'OnePlus X smartphone was launched in October 2015. The phone comes with a 5.00-inch touchscreen display with a resolution of 1080 pixels by 1920 pixels at a PPI of 441 pixels per inch. \r\n\r\nThe OnePlus X is powered by 2.3GHz quad-core Qualcomm Snapdragon 801 processor and it comes with 3GB of RAM. The phone packs 16GB of internal storage that can be expanded up to 128GB via a microSD card. ', 18500, 'OnePlus ', 'OnePlus, X', 'OnePlus '),
(10, 'LG Q6', '10.jpeg', 12990, 'LG Q6 smartphone was launched in July 2017. The phone comes with a 5.50-inch touchscreen display with a resolution of 1080 pixels by 2160 pixels at a PPI of 442 pixels per inch. LG Q6 price in India starts from Rs. 12,990. \r\n\r\nThe LG Q6 is powered by 1.4GHz octa-core Snapdragon 435 processor and it comes with 3GB of RAM. The phone packs 32GB of internal storage that can be expanded up to 256GB via a microSD card.', 13599, 'LG ', 'LG, Q6', 'LG '),
(11, 'LG V30+', '11.jpg', 44990, 'LG V30+ smartphone was launched in August 2017. The phone comes with a 6.00-inch touchscreen display with a resolution of 1440 pixels by 2880 pixels. LG V30+ price in India starts from Rs. 44,990. \r\n\r\nThe LG V30+ is powered by 1.9GHz octa-core Qualcomm Snapdragon 835 processor and it comes with 4GB of RAM. The phone packs 128GB of internal storage that can be expanded up to 200GB via a microSD card. ', 48599, 'LG ', 'LG, V30+', 'LG '),
(12, 'LG K7', '12.jpg', 9365, 'LG K7 smartphone was launched in January 2016. The phone comes with a 5.00-inch touchscreen display with a resolution of 480 pixels by 854 pixels. LG K7 price in India starts from Rs. 6,740. \r\n\r\nThe LG K7 is powered by 1.3GHz quad-core processor and it comes with 1GB of RAM. The phone packs 8GB of internal storage that can be expanded.', 10699, 'LG ', 'LG, K7', 'LG'),
(13, 'Lenovo K6 Power', '13.png', 8350, 'Lenovo K6 Power smartphone was launched in September 2016. The phone comes with a 5.00-inch touchscreen display with a resolution of 1080 pixels by 1920 pixels at a PPI of 441 pixels per inch. Lenovo K6 Power price in India starts from Rs. 7,899. \r\n\r\nThe Lenovo K6 Power is powered by 1.4GHz octa-core Qualcomm Snapdragon 430 processor and it comes with 3GB of RAM. The phone packs 32GB of internal storage that can be expanded up to 128GB via a microSD card.', 9450, 'Lenovo', 'Lenovo, K6 Power', 'Lenovo'),
(14, 'Lenovo K5 Note', '14.jpg', 10380, 'Lenovo K5 Note smartphone was launched in January 2016. The phone comes with a 5.50-inch touchscreen display with a resolution of 1080 pixels by 1920 pixels.\r\n\r\nThe Lenovo K5 Note is powered by 1.8GHz octa-core MediaTek Helio P10 processor and it comes with 2GB of RAM. The phone packs 16GB of internal storage that can be expanded up to 128GB via a microSD card.', 11500, 'Lenovo', 'Lenovo, K5 Note', 'Lenovo'),
(15, 'Lenovo K8 Note', '15.jpeg', 10950, 'Lenovo K8 Note smartphone was launched in August 2017. The phone comes with a 5.50-inch touchscreen display with a resolution of 1080 pixels by 1920 pixels at a PPI of 441 pixels per inch. Lenovo K8 Note price in India starts from Rs. 9,649. \r\n\r\nThe Lenovo K8 Note is powered by 1.4GHz MediaTek Helio X23 processor and it comes with 3GB of RAM. The phone packs 32GB of internal storage that can be expanded up to 128GB via a microSD card. ', 11499, 'Lenovo', 'Lenovo, K8 Note', 'Lenovo'),
(16, 'Mi A1', '16.png', 13799, 'Mi A1 smartphone was launched in September 2017. The phone comes with a 5.50-inch touchscreen display with a resolution of 1080 pixels by 1920 pixels. Mi A1 price in India starts from Rs. 13,999. \r\n\r\nThe Mi A1 is powered by 2GHz octa-core Qualcomm Snapdragon 625 processor and it comes with 4GB of RAM. The phone packs 64GB of internal storage that can be expanded up to 128GB via a microSD card. ', 16499, 'Mi', 'Xiaomi,Mi, A1', 'Mi'),
(17, 'Xiaomi Redmi Note 4 ', '17.jpeg', 10999, 'Xiaomi Redmi Note 4 smartphone was launched in August 2016. The phone comes with a 5.50-inch touchscreen display with a resolution of 1080 pixels by 1920 pixels at a PPI of 401 pixels per inch. Xiaomi Redmi Note 4 price in India starts from Rs. 8,999. \r\n\r\nThe Xiaomi Redmi Note 4 is powered by 2GHz octa-core Qualcomm Snapdragon 625 processor and it comes with 4GB of RAM. The phone packs 64GB of internal storage that can be expanded up to 128GB via a microSD card. ', 11599, 'Mi', 'Xiaomi, Redmi, Note 4 ', 'Mi'),
(18, 'Redmi Note 5', '18.jpeg', 10999, 'The Xiaomi Redmi Note 5 is priced at Rs. 9,999 for the 3GB RAM, 32GB storage variant and goes up to Rs. 11,999 for the 4GB RAM and 64GB storage variant. The phone comes in multiple colour options, including Black, Gold, Lake Blue, and Rose Gold.\r\nThe dual-SIM Redmi Note 5 (Review) runs MIUI 9 based on Android Nougat, and sports a 5.99-inch full-HD (1080x2160 pixels) display with an 18:9 aspect ratio, and 2.5D curved glass.', 11499, 'Mi', 'Xiaomi,Redmi, Note 5', 'Mi'),
(19, 'Oppo F1', '19.png', 17800, 'Oppo F1 smartphone was launched in January 2016. The phone comes with a 5.00-inch touchscreen display with a resolution of 720 pixels by 1280 pixels at a PPI of 294 pixels per inch. Oppo F1 price in India starts from Rs. 11,999. \r\n\r\nThe Oppo F1 is powered by 1.2GHz octa-core Qualcomm Snapdragon 616 processor and it comes with 3GB of RAM. The phone packs 16GB of internal storage that can be expanded up to 128GB via a microSD card.', 18799, 'Oppo', 'Oppo, F1', 'Oppo'),
(20, 'Oppo F3', '20.jpg', 17990, 'Oppo F3 smartphone was launched in May 2017. The phone comes with a 5.50-inch touchscreen display with a resolution of 1080 pixels by 1920 pixels at a PPI of 401 pixels per inch. Oppo F3 price in India starts from Rs. 11,990. \r\n\r\nThe Oppo F3 is powered by 1.5GHz octa-core MediaTek MT6750T processor and it comes with 4GB of RAM. The phone packs 64GB of internal storage that can be expanded up to 128GB via a microSD card. ', 18499, 'Oppo ', 'Oppo, F3', 'Oppo '),
(21, 'Oppo F5', '21.jpg', 19990, 'Oppo F5 smartphone was launched in October 2017. The phone comes with a 6.00-inch touchscreen display with a resolution of 1080 pixels by 2160 pixels. Oppo F5 price in India starts from Rs. 17,999. \r\n\r\nThe Oppo F5 is powered by octa-core MediaTek MT6763T processor and it comes with 4GB of RAM. The phone packs 32GB of internal storage that can be expanded up to 256GB via a microSD card.', 20899, 'Oppo ', 'Oppo, F5', 'Oppo '),
(22, 'Vivo V5', '22.jpg', 17700, 'Vivo V5 smartphone was launched in November 2016. The phone comes with a 5.50-inch touchscreen display with a resolution of 720 pixels by 1280 pixels. Vivo V5 price in India starts from Rs. 13,800. \r\n\r\nThe Vivo V5 is powered by 1.5GHz octa-core MediaTek MT6750 processor and it comes with 4GB of RAM. The phone packs 32GB of internal storage that can be expanded up to 128GB via a microSD card. ', 19299, 'Vivo', 'Vivo, V5', 'Vivo'),
(23, 'Vivo V7', '23.jpg', 16990, 'Vivo V7 smartphone was launched in November 2017. The phone comes with a 5.70-inch touchscreen display with a resolution of 720 pixels by 1440 pixels. Vivo V7 price in India starts from Rs. 15,599. \r\n\r\nThe Vivo V7 is powered by 1.8GHz octa-core Qualcomm Snapdragon 450 processor and it comes with 4GB of RAM. The phone packs 32GB of internal storage that can be expanded up to 256GB via a microSD card.', 18349, 'Vivo', 'Vivo, V7', 'Vivo'),
(24, 'Vivo V9', '24.jpg', 24599, 'Vivo V9 is an upcoming smartphone by Vivo. The phone is rumoured to come with a 6.00-inch touchscreen display with a resolution of 1080 pixels by 2160 pixels.\r\n\r\nSnapdragon 660 come with 4GB of RAM. The phone is rumoured to pack 64GB of internal storage. As far as the cameras are concerned, the Vivo V9 is rumoured to pack a 12-megapixel primary camera on the rear and a 24-megapixel front shooter for selfies.\r\n\r\nThe Vivo V9 is rumoured to run Android 8.0 and be powered by a 3250mAh.', 26799, 'Vivo', 'Vivo, V9', 'Vivo'),
(25, 'Moto E4 Plus', '25.jpeg', 8999, 'Moto brings to you the E4 Plus - a smartphone that’s powered by a long-lasting 5000 mAh battery. Packed with a 13 MP rear camera and a 5 MP front camera, the Moto E4 Plus helps you take flaunt-worthy photos. It runs on Android 7.1 Nougat, and features Google Assistant for a seamless user experience. The 13.97 cm (5.5) HD display of this smartphone breathes life into all your visuals. ', 9999, 'Motorola', 'Motorola, Moto, E4 Plus', 'Motorola'),
(26, 'Moto X4', '26.jpeg', 19999, 'Featuring a metal body with glass all around, the Moto X4 is surely an impressive-looking smartphone. Not to forget, it’s also water- and dust-resistant, thanks to its IP68 rating. Powered by a Qualcomm Snapdragon 630 processor and 4 GB of RAM, this smartphone can handle multiple tasks without any lag. Its 12 MP + 8 MP dual rear camera lets you capture picture-perfect shots while its wireless audio sharing feature enhances your entertainment experience.', 22999, 'Motorola', 'Motorola, Moto, X4', 'Motorola'),
(27, 'Moto G5 Plus', '27.jpg', 13599, 'One of the first new Moto G phones with a head-turning metal design, it’s packed with all of the stuff you need—and none of the stuff you don’t. Take stunning photos using the most advanced 12MP camera in its class featuring Dual Autofocus Pixels. Free yourself with a 3000 mAh all-day battery and fuel up fast with TurboPower charging. Get smooth app performance without stops and stutters thanks to a speedy 2.0 GHz octa-core processor. Use your fingerprint to unlock your phone instantly. ', 16999, 'Motorola', 'Motorola, Moto, G5 Plus', 'Motorola'),
(28, 'Asus Zenfone 4 ', '28.jpeg', 8999, 'Capture life’s best moments and store them securely in the Asus Zenfone 4 Selfie. Equipped with a 13 MP rear camera, this smartphone lets you take your photography skills to the next level. Its 13 MP front camera, with the 140-degree Selfie Panorama Mode, lets you capture beautiful selfies and ‘groupfies’.', 10999, 'Asus', 'Asus, Zenfone 4 ', 'Asus'),
(29, 'Asus Zenfone 3 Laser', '29.jpeg', 15699, 'The Asus ZenFone 3 Laser certainly lives up to its name as its 13 MP rear camera (with an f/2.0 aperture lens) is complemented by a laser auto-focus system that offers faster focusing speeds as compared to standard systems. It also comes with the company’s PixelMaster technology that offers a variety of shooting modes.', 19999, 'Asus', 'Asus, Zenfone 3, Laser', 'Asus'),
(30, 'Asus Zenfone Max', '30.jpeg', 7999, 'Featuring a powerful 5000 mAh battery, the Zenfone Max is a budget phone that\'s the answer to all your battery woes. This phone\'s perfect for your everyday needs such as phone calls, texts, managing social media, browsing the Web or streaming YouTube videos.', 9999, 'Asus', 'Asus, Zenfone Max', 'Asus');

-- --------------------------------------------------------

--
-- Table structure for table `user_info`
--

CREATE TABLE `user_info` (
  `user_id` int(10) NOT NULL,
  `first_name` varchar(100) NOT NULL,
  `last_name` varchar(100) NOT NULL,
  `email` varchar(300) NOT NULL,
  `password` varchar(300) NOT NULL,
  `mobile` varchar(10) NOT NULL,
  `address1` varchar(300) NOT NULL,
  `address2` varchar(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user_info`
--

INSERT INTO `user_info` (`user_id`, `first_name`, `last_name`, `email`, `password`, `mobile`, `address1`, `address2`) VALUES
(3, 'Yutika', 'Patel', 'yutikapatel95@gmail.com', 'f6f3b6b41ad676ce01db22cfb406a114', '8108827617', 'A-204,Manoday building, Dattapada road,  Borivali-East , Mumbai-400066', 'kjask'),
(4, 'Jigar', 'Avalani', 'jigaravalani4699@gmail.com', '320e2a3d61022936645509f7ceb2a63c', '9967643175', 'A101,mangalmay', 'kandivali w'),
(6, 'Paresh', 'Avalani', 'paresh@gmail.com', 'ca8cd5a802c4b549bf5febf5199db568', '1234567890', 'a', 's'),
(7, 'devesh', 'panchal', 'devucp@gmail.com', '400a5c4e728bac4e55f5de7e9534eeec', '1234567890', 'abc', 'vileparle'),
(8, 'devesh', 'panchal', 'def@gmail.com', '400a5c4e728bac4e55f5de7e9534eeec', '1234567890', 'abc', 'vileparle'),
(9, 'Aryan', 'Desai', 'aryan@gmail.com', '1f0bc83584d0cd8a908275976a1cca02', '9769421304', '1,Aparajita,Dadabhai Road, Vile Parle (W)', 'Mumbai-4000'),
(10, 'jigar', 'avalani', 'jigaravalani@gmail.com', '320e2a3d61022936645509f7ceb2a63c', '1234567890', 'abc', 'def');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `multiple`
--
ALTER TABLE `multiple`
  ADD PRIMARY KEY (`email`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`product_id`);

--
-- Indexes for table `user_info`
--
ALTER TABLE `user_info`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `user_info`
--
ALTER TABLE `user_info`
  MODIFY `user_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
