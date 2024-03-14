-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 04, 2024 at 03:46 PM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `lutfor`
--

-- --------------------------------------------------------

--
-- Table structure for table `about_photo`
--

CREATE TABLE `about_photo` (
  `id` int(10) NOT NULL,
  `about_image` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `about_photo`
--

INSERT INTO `about_photo` (`id`, `about_image`) VALUES
(4, '1704977208-9535.png');

-- --------------------------------------------------------

--
-- Table structure for table `banners`
--

CREATE TABLE `banners` (
  `id` int(10) NOT NULL,
  `banner_photo` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `banners`
--

INSERT INTO `banners` (`id`, `banner_photo`) VALUES
(154, '1704971385-2147.jpg'),
(158, '1704971432-1893.jpg'),
(159, '1704971472-2323.jpg'),
(161, '1704971580-6744.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `footer_settings`
--

CREATE TABLE `footer_settings` (
  `id` int(10) NOT NULL,
  `footer_settings_name` varchar(100) NOT NULL,
  `footer_settings_value` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `footer_settings`
--

INSERT INTO `footer_settings` (`id`, `footer_settings_name`, `footer_settings_value`) VALUES
(1, 'footer_colum_one_title', 'Contarct'),
(2, 'footer_colum_one_disc', 'Fusce dapibus, tellus commodo, tortor mauris condimentum utellus fermentum, porta sem malesuada magna.'),
(3, 'footer_colum_one_phn_num', '01798960830'),
(4, 'footer_colum_one_loction', 'Moonshine Street No: 14/05 Light City, Jupiter'),
(5, 'footer_colum_one_email', 'lutfor251588@gmail.com'),
(6, 'footer_colum_one_loction_icon', 'fa fa-map-marker'),
(7, 'footer_colum_one_phn_icon', 'fa fa-phone'),
(8, 'footer_colum_one_email_icon', 'fa fa-envelope'),
(9, 'footer_col_two_title', 'Twitter'),
(10, 'footer_col_two_disc_one', 'Donec ullamcorper metus auctor fringilla. Nullam quis risus eget\r\n'),
(11, 'footer_col_two_disc_two', 'Donec ullamcorper metus auctor fringilla. Nullam quis risus eget\r\n'),
(12, 'footer_col_two_disc_three', 'Vestibulum id ligula porta euismod semper. Maecenas faucibus mollis.\r\nDonec ullamcorper metus auctor fringilla. Nullam quis risus eget\r\n'),
(13, 'footer_col_three_title', 'Populer Post'),
(14, 'footer_col_three_dis_one', 'Vivamus sagittis lacus vel augue laoreet rutrum dolor auctor'),
(15, 'footer_col_three_dis_one_date', '14 Nov, 2022'),
(16, 'footer_col_three_dis_two', 'Donec ullamcorper metus auctor fringilla. Nullam quis risus eget.'),
(17, 'footer_col_three_dis_two_date', '14 Nov, 2023'),
(18, 'footer_col_three_dis_three', 'Vestibulum id ligula porta euismod semper. Maecenas faucibus mollis'),
(19, 'footer_col_three_dis_three_date', '15 Nov, 2024'),
(20, 'footer_col_four_title', 'About Us'),
(21, 'footer_col_four_dis_one', ' Vestibulum id ligula porta felis euismod semper. Duis mollis, est non commodo luctus, nisi erat porttitor ligula, eget lacinia odio sem nec elit'),
(22, 'footer_col_four_dis_two', 'Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus curabitur blandit tempus. '),
(23, 'developer_name', 'Lutfor Rhaman Shanto'),
(24, 'developer_comment', '© 2024 Kubb. All rights reserved.Developar by');

-- --------------------------------------------------------

--
-- Table structure for table `gallerys`
--

CREATE TABLE `gallerys` (
  `id` int(10) NOT NULL,
  `gallery_photo` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `gallerys`
--

INSERT INTO `gallerys` (`id`, `gallery_photo`) VALUES
(45, '1704892660-5114.jpg'),
(46, '1704615371-6743.jpg'),
(47, '1704615383-2878.jpg'),
(48, '1704706215-7915.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `jurnalist`
--

CREATE TABLE `jurnalist` (
  `id` int(10) NOT NULL,
  `jurnalist_title` varchar(100) NOT NULL,
  `jurnalist_sub_title` varchar(100) NOT NULL,
  `jurnalist_discription` text NOT NULL,
  `jurnalist_photo` varchar(150) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `jurnalist`
--

INSERT INTO `jurnalist` (`id`, `jurnalist_title`, `jurnalist_sub_title`, `jurnalist_discription`, `jurnalist_photo`) VALUES
(4, 'Pellentesque Malesuada Vulputate', '21.04.2014 / Photography, Journal', 'quaerat ratione et nisi quia asperiores beatae! dolores vero quod ea cupiditate laborum sint soluta qui id commodi sequi. dolores vero quod nisi quia asperiores', '1704951220-1807.jpg'),
(5, 'Pellentesque Malesuada Vulputate', '21.04.2014 / Photography, Journal', 'quaerat ratione et nisi quia asperiores beatae! dolores vero quod ea cupiditate laborum sint soluta qui id commodi sequi. dolores vero quod nisi quia asperiores', '1704785731-1014.jpg'),
(6, 'Pellentesque Malesuada Vulputate', '21.04.2014 / Photography, Journal', 'quaerat ratione et nisi quia asperiores beatae! dolores vero quod ea cupiditate laborum sint soluta qui id commodi sequi. dolores vero quod nisi quia asperiores', '1704951237-9361.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `my_services`
--

CREATE TABLE `my_services` (
  `id` int(10) NOT NULL,
  `my_service_title` varchar(100) NOT NULL,
  `my_service_discription` text NOT NULL,
  `my_sevice_photo` varchar(150) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `my_services`
--

INSERT INTO `my_services` (`id`, `my_service_title`, `my_service_discription`, `my_sevice_photo`) VALUES
(11, 'Photography', 'Curabitur blandit tempus porttitor. Duis at vollisky inceptos mollisestor commodo luctus erat. Morbi risus, porta consectetur vestibulum at eros.', '1705039785-9724.png'),
(12, 'Motion Video', 'Curabitur blandit tempus porttitor. Duis at vollisky inceptos mollisestor commodo luctus erat. Morbi risus, porta consectetur vestibulum at eros.', '1705039843-8822.png'),
(13, 'Photo Retouching', 'Curabitur blandit tempus porttitor. Duis at vollisky inceptos mollisestor commodo luctus erat. Morbi risus, porta consectetur vestibulum at eros.', '1705039876-7315.png');

-- --------------------------------------------------------

--
-- Table structure for table `services`
--

CREATE TABLE `services` (
  `id` int(10) NOT NULL,
  `service_title` varchar(100) NOT NULL,
  `service_discription` text NOT NULL,
  `sevice_photo` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `services`
--

INSERT INTO `services` (`id`, `service_title`, `service_discription`, `sevice_photo`) VALUES
(75, 'This is Products', 'Based in New York, I specialize in landscape, advertorial and conceptual', '1705045635-7759.jpg'),
(76, 'This is Products', 'Based in New York, I specialize in landscape, advertorial and conceptual', '1705045707-3425.jpg'),
(77, 'This is Products', 'Based in New York, I specialize in landscape, advertorial and conceptual', '1705045730-8818.jpg'),
(78, 'This is Products', 'Based in New York, I specialize in landscape, advertorial and conceptual', '1705060704-8379.jpg'),
(79, 'This is Products', 'Based in New York, I specialize in landscape, advertorial and conceptual', '1705060740-8860.jpg'),
(80, 'This is Products', 'Based in New York, I specialize in landscape, advertorial and conceptual', '1705053943-7778.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `text_settings`
--

CREATE TABLE `text_settings` (
  `id` int(10) NOT NULL,
  `setting_name` text NOT NULL,
  `setting_value` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `text_settings`
--

INSERT INTO `text_settings` (`id`, `setting_name`, `setting_value`) VALUES
(1, 'service_title', 'Hello! I’m Lutfor Rhaman, a freelance Software Developer.'),
(2, 'service_sub_title', 'Based in New York, I specialize in landscape, advertorial and conceptual photography.'),
(3, 'service_header', 'WHAT SERVICES DO I OFFER'),
(4, 'instagram', 'LATEST INSTAGRAM SHOTS'),
(8, 'banner_title', 'My Name Is'),
(9, 'banner_title_name', 'lutfor Rhaman Shanto'),
(10, 'banner_bio', 'I am professional Software and Web Developer'),
(11, 'journal', 'FROM THE JOURNAL'),
(12, 'about_title', 'A LITTLE ABOUT ME'),
(13, 'about_sub_title', 'My Name is Lutfor Rhaman Shanto, I am Professional Software  Developer.'),
(14, 'about_discription', 'Lorem ipsum dolor sit amet consectetur, adipisicing elit. Autem assumenda, eum voluptate dolorum labore corporis molestias velit voluptates nam obcaecati veniam nobis amet et quasi ab recusandae maiores, ipsam ratione. Lorem ipsum dolor sit amet consectetur, adipisicing elit. Autem assumenda, eum voluptate dolorum labore corporis molestias velit voluptates nam quasi ab recusandae maiores');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(10) NOT NULL,
  `full_name` varchar(100) NOT NULL,
  `email_address` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `gender` varchar(10) NOT NULL,
  `profile_image` varchar(150) NOT NULL DEFAULT 'default.jpg'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `full_name`, `email_address`, `password`, `gender`, `profile_image`) VALUES
(50, 'Lufor Rhaman', 'lutfor199296@gmail.com', 'c20ad4d76fe97759aa27a0c99bff6710', 'male', '50.jpg'),
(56, 'jack shon', 'jak@gmail.com', 'c20ad4d76fe97759aa27a0c99bff6710', 'male', '56.jpg'),
(57, 'kodu', 'kum@gmail.com', 'c20ad4d76fe97759aa27a0c99bff6710', 'female', '57.jpg');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `about_photo`
--
ALTER TABLE `about_photo`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `banners`
--
ALTER TABLE `banners`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `footer_settings`
--
ALTER TABLE `footer_settings`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `gallerys`
--
ALTER TABLE `gallerys`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `jurnalist`
--
ALTER TABLE `jurnalist`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `my_services`
--
ALTER TABLE `my_services`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `services`
--
ALTER TABLE `services`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `text_settings`
--
ALTER TABLE `text_settings`
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
-- AUTO_INCREMENT for table `about_photo`
--
ALTER TABLE `about_photo`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `banners`
--
ALTER TABLE `banners`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=162;

--
-- AUTO_INCREMENT for table `footer_settings`
--
ALTER TABLE `footer_settings`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT for table `gallerys`
--
ALTER TABLE `gallerys`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=49;

--
-- AUTO_INCREMENT for table `jurnalist`
--
ALTER TABLE `jurnalist`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `my_services`
--
ALTER TABLE `my_services`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `services`
--
ALTER TABLE `services`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=81;

--
-- AUTO_INCREMENT for table `text_settings`
--
ALTER TABLE `text_settings`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=62;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
