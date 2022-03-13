-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 13, 2022 at 05:08 PM
-- Server version: 10.4.21-MariaDB
-- PHP Version: 7.4.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_himatektro`
--

-- --------------------------------------------------------

--
-- Table structure for table `table_admin`
--

CREATE TABLE `table_admin` (
  `id` int(11) NOT NULL,
  `AdminUserName` varchar(255) CHARACTER SET latin1 NOT NULL,
  `AdminPassword` varchar(255) CHARACTER SET latin1 NOT NULL,
  `AdminEmailId` varchar(255) CHARACTER SET latin1 NOT NULL,
  `Is_Active` int(11) NOT NULL,
  `CreationDate` timestamp NOT NULL DEFAULT current_timestamp(),
  `UpdationDate` timestamp NULL DEFAULT '0000-00-00 00:00:00' ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `table_admin`
--

INSERT INTO `table_admin` (`id`, `AdminUserName`, `AdminPassword`, `AdminEmailId`, `Is_Active`, `CreationDate`, `UpdationDate`) VALUES
(10, 'basyair7', '$2y$12$2F3TxIkqNpc4FJoA4ZhOE.N9g1Ie1bk1nFYyuZ.yOD1zMmtkeEHvO', 'basyair.fathul@gmail.com', 0, '2022-03-13 15:40:52', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `table_category`
--

CREATE TABLE `table_category` (
  `id` int(11) NOT NULL,
  `CategoryName` varchar(200) CHARACTER SET latin1 DEFAULT NULL,
  `Description` mediumtext CHARACTER SET latin1 DEFAULT NULL,
  `PostingDate` timestamp NULL DEFAULT current_timestamp(),
  `UpdationDate` timestamp NULL DEFAULT NULL,
  `Is_Active` int(1) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `table_category`
--

INSERT INTO `table_category` (`id`, `CategoryName`, `Description`, `PostingDate`, `UpdationDate`, `Is_Active`) VALUES
(1, 'Pendidikan', 'Berita Pendidikan', '2022-03-08 10:52:08', NULL, 1),
(2, 'Sports', 'Tentang berita olahraga himatektro', '2022-03-08 10:53:04', NULL, 1),
(3, 'Other', 'Other News', '2022-03-08 10:53:40', NULL, 1),
(4, 'Informasi penting', NULL, '2022-03-08 11:02:02', NULL, 1);

-- --------------------------------------------------------

--
-- Table structure for table `table_comments`
--

CREATE TABLE `table_comments` (
  `id` int(11) NOT NULL,
  `postId` char(11) CHARACTER SET latin1 DEFAULT NULL,
  `name` varchar(120) CHARACTER SET latin1 DEFAULT NULL,
  `email` varchar(150) CHARACTER SET latin1 DEFAULT NULL,
  `comment` mediumtext CHARACTER SET latin1 DEFAULT NULL,
  `postingDate` timestamp NULL DEFAULT current_timestamp(),
  `status` int(1) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `table_pages`
--

CREATE TABLE `table_pages` (
  `id` int(11) NOT NULL,
  `PageName` varchar(200) CHARACTER SET latin1 DEFAULT NULL,
  `PageTitle` mediumtext CHARACTER SET latin1 DEFAULT NULL,
  `Description` longtext CHARACTER SET latin1 DEFAULT NULL,
  `PostingDate` timestamp NULL DEFAULT current_timestamp(),
  `UpdationDate` timestamp NULL DEFAULT NULL ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `table_posts`
--

CREATE TABLE `table_posts` (
  `id` int(11) NOT NULL,
  `PostTitle` longtext CHARACTER SET latin1 DEFAULT NULL,
  `CategoryId` int(11) DEFAULT NULL,
  `SubCategoryId` int(11) DEFAULT NULL,
  `PostDetails` longtext CHARACTER SET utf8 DEFAULT NULL,
  `PostingDate` timestamp NULL DEFAULT current_timestamp(),
  `UpdationDate` timestamp NULL DEFAULT NULL ON UPDATE current_timestamp(),
  `Is_Active` int(1) DEFAULT NULL,
  `PostUrl` mediumtext CHARACTER SET latin1 DEFAULT NULL,
  `PostImage` varchar(255) CHARACTER SET latin1 DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `table_subcategory`
--

CREATE TABLE `table_subcategory` (
  `SubCategoryId` int(11) NOT NULL,
  `CategoryId` int(11) DEFAULT NULL,
  `Subcategory` varchar(255) CHARACTER SET latin1 DEFAULT NULL,
  `SubCatDescription` mediumtext CHARACTER SET latin1 DEFAULT NULL,
  `PostingDate` timestamp NULL DEFAULT current_timestamp(),
  `UpdationDate` int(11) DEFAULT NULL,
  `Is_Active` int(1) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `table_admin`
--
ALTER TABLE `table_admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `table_category`
--
ALTER TABLE `table_category`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `table_comments`
--
ALTER TABLE `table_comments`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `table_pages`
--
ALTER TABLE `table_pages`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `table_posts`
--
ALTER TABLE `table_posts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `table_subcategory`
--
ALTER TABLE `table_subcategory`
  ADD PRIMARY KEY (`SubCategoryId`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `table_admin`
--
ALTER TABLE `table_admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `table_category`
--
ALTER TABLE `table_category`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `table_comments`
--
ALTER TABLE `table_comments`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `table_pages`
--
ALTER TABLE `table_pages`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `table_posts`
--
ALTER TABLE `table_posts`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `table_subcategory`
--
ALTER TABLE `table_subcategory`
  MODIFY `SubCategoryId` int(11) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
