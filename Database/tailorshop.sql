-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Mar 27, 2021 at 06:30 PM
-- Server version: 10.4.17-MariaDB
-- PHP Version: 8.0.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `tailorshop`
--

-- --------------------------------------------------------

--
-- Table structure for table `cloth-types`
--

CREATE TABLE `cloth-types` (
  `id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `gender` varchar(15) NOT NULL,
  `date_added` date NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `cloth-types`
--

INSERT INTO `cloth-types` (`id`, `title`, `gender`, `date_added`) VALUES
(1, 'BLOUSE', 'Female', '2021-03-11'),
(2, 'TROUSER', 'Male', '2021-03-11'),
(3, 'GOWN', 'Female', '2021-03-11'),
(4, 'SUIT', 'Female', '2021-03-11'),
(5, 'SHIRT', 'Male', '2021-03-11');

-- --------------------------------------------------------

--
-- Table structure for table `customers`
--

CREATE TABLE `customers` (
  `id` int(11) NOT NULL,
  `FullName` varchar(255) NOT NULL,
  `Address` varchar(255) NOT NULL,
  `Phone` varchar(20) NOT NULL,
  `City` varchar(255) NOT NULL,
  `Email` varchar(255) NOT NULL,
  `Comment` text NOT NULL,
  `Sex` varchar(10) NOT NULL,
  `date_added` date NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `customers`
--

INSERT INTO `customers` (`id`, `FullName`, `Address`, `Phone`, `City`, `Email`, `Comment`, `Sex`, `date_added`) VALUES
(3, 'Mushe Abdul', 'live at home', '0209229025', 'Koforidua', 'musheabdulhakim99@gmail.com', 'this is a comment on mushe', 'Male', '2021-03-08'),
(7, 'last test', 'test', '4258342020435', 'koftown', 'musheabdulhakim99@gmail.com', 'this is a comment', 'Female', '2021-03-08'),
(8, 'Yahuza Hakim', 'vendetta home', '0542441933', 'Accra', 'musheabdulhakim99@gmail.com', 'This is a comment about yahuza abdul hakim', 'Male', '2021-03-08'),
(9, 'Yahuza Hakim', 'vendetta home', '0542441933', 'Accra', 'musheabdulhakim99@gmail.com', 'This is a comment about yahuza abdul hakim', 'Male', '2021-03-08'),
(10, 'Yahuza Hakim', 'vendetta home', '0542441933', 'Accra', 'musheabdulhakim99@gmail.com', 'This is a comment about yahuza abdul hakim', 'Male', '2021-03-08');

-- --------------------------------------------------------

--
-- Table structure for table `expenses`
--

CREATE TABLE `expenses` (
  `id` int(11) NOT NULL,
  `expense_category` varchar(255) NOT NULL,
  `description` varchar(255) NOT NULL,
  `date` date NOT NULL,
  `amount` varchar(255) NOT NULL,
  `date_added` date NOT NULL DEFAULT current_timestamp()
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `expenses`
--

INSERT INTO `expenses` (`id`, `expense_category`, `description`, `date`, `amount`, `date_added`) VALUES
(1, 'Staff Salary', 'This is expense on staff of our tailorshop', '2021-03-11', '2000', '2021-03-11');

-- --------------------------------------------------------

--
-- Table structure for table `expense_category`
--

CREATE TABLE `expense_category` (
  `id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `expense_category`
--

INSERT INTO `expense_category` (`id`, `title`) VALUES
(1, 'Material Purchase'),
(2, 'Staff Salary'),
(3, 'Rent'),
(4, 'Staff Incentive'),
(5, 'Machine Purchase'),
(6, 'Machine Maintenance and Repair'),
(8, 'Generator Fuel'),
(9, 'Generator Maintenance'),
(10, 'Tax, Dues, Security, Waste'),
(11, 'Needle, Tread, Accessory Purchase'),
(13, 'Testing'),
(14, 'Last Test');

-- --------------------------------------------------------

--
-- Table structure for table `income`
--

CREATE TABLE `income` (
  `id` int(11) NOT NULL,
  `income_category` varchar(225) NOT NULL,
  `description` text NOT NULL,
  `date` date NOT NULL DEFAULT current_timestamp(),
  `amount` varchar(225) NOT NULL,
  `date_added` date NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `income`
--

INSERT INTO `income` (`id`, `income_category`, `description`, `date`, `amount`, `date_added`) VALUES
(1, 'Repair Cloth', 'this is the amount for repairing a cloth for small kids	', '2021-03-11', '100', '2021-03-11'),
(2, 'Training and Tutor	', 'This is the fees for tutor and teaching.', '2021-03-12', '1000', '2021-03-12');

-- --------------------------------------------------------

--
-- Table structure for table `income_category`
--

CREATE TABLE `income_category` (
  `id` int(11) NOT NULL,
  `title` varchar(225) NOT NULL,
  `date_added` date NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `income_category`
--

INSERT INTO `income_category` (`id`, `title`, `date_added`) VALUES
(1, 'Repair Cloth', '2021-03-11'),
(2, 'Training and Tutor	', '2021-03-11'),
(3, 'Machine Repair	', '2021-03-11');

-- --------------------------------------------------------

--
-- Table structure for table `measurements`
--

CREATE TABLE `measurements` (
  `id` int(11) NOT NULL,
  `customer` varchar(255) NOT NULL,
  `part` varchar(255) NOT NULL,
  `measurement` varchar(255) NOT NULL,
  `comment` text DEFAULT NULL,
  `date_added` date NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `id` int(8) NOT NULL,
  `customer` varchar(255) NOT NULL,
  `description` varchar(255) CHARACTER SET latin1 NOT NULL,
  `amount` decimal(11,2) NOT NULL,
  `paid` decimal(11,2) NOT NULL,
  `balance` decimal(11,2) DEFAULT NULL,
  `received_by` varchar(255) NOT NULL,
  `date_received` date DEFAULT NULL,
  `completed` varchar(10) DEFAULT 'No',
  `date_collected` date DEFAULT NULL,
  `date_added` date NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf16;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`id`, `customer`, `description`, `amount`, `paid`, `balance`, `received_by`, `date_received`, `completed`, `date_collected`, `date_added`) VALUES
(1, 'Mushe Abdul', 'this is a test', '100.00', '100.00', NULL, 'Mushe ', '2021-03-08', 'Yes', '2021-03-11', '2021-03-09');

-- --------------------------------------------------------

--
-- Table structure for table `parts`
--

CREATE TABLE `parts` (
  `id` int(11) NOT NULL,
  `category` varchar(225) NOT NULL,
  `title` varchar(225) NOT NULL,
  `description` text NOT NULL,
  `image` varchar(255) DEFAULT NULL,
  `date_added` date NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `parts`
--

INSERT INTO `parts` (`id`, `category`, `title`, `description`, `image`, `date_added`) VALUES
(1, 'BLOUSE', 'SHORT SLEEVE', 'This is the measurement for short sleeve', 'short-sleeve.jpg', '2021-03-11'),
(2, 'SHIRT', 'SHORT SLEEVE LENGTH	', 'Measure with arm at your side, from the tip of the shoulder to a point on the outside of the arm where you want the sleeve to end.	', 'short-sleeve-length.jpg', '2021-03-11'),
(3, 'SHIRT', 'CHEST', 'Stand up straight, relax and take deep breath with hands down at your side. The chest measurement should be taken around the chest under the armpits. Make sure the tape is parallel and you can move the tape easily. Do not tighten the tape measure. Avoid having thick clothes on when measuring.	', 'chest.jpg', '2021-03-26'),
(4, 'SHIRT', 'WAIST', 'Stand up in a relaxed posture, do not hold your breath or hold your stomach in. If you do not have beer belly, the waist measurement should be taken around the waist at the narrowest point. If you have beer belly, you should measure the widest point. Make sure you can move the tape easily. Do not tighten the tape measure.	', 'waist.jpg', '2021-03-26');

-- --------------------------------------------------------

--
-- Table structure for table `session_data`
--

CREATE TABLE `session_data` (
  `session_id` varchar(32) NOT NULL DEFAULT '',
  `hash` varchar(32) NOT NULL DEFAULT '',
  `session_data` blob NOT NULL,
  `session_expire` int(11) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `session_data`
--

INSERT INTO `session_data` (`session_id`, `hash`, `session_data`, `session_expire`) VALUES
('d0gl6jdo38dbsvtqgb5ddk8pr6', '9c5477c3a643b1ad54281862df483f26', 0x757365727c733a353a2261646d696e223b, 1616774634),
('sj4c4nlna7ko9v2o7kfvp56h92', '9c5477c3a643b1ad54281862df483f26', 0x757365727c733a353a2261646d696e223b, 1616867586);

-- --------------------------------------------------------

--
-- Table structure for table `staff`
--

CREATE TABLE `staff` (
  `id` int(11) NOT NULL,
  `Designation` varchar(255) NOT NULL,
  `FullName` varchar(255) NOT NULL,
  `Address` varchar(255) NOT NULL,
  `Phone` varchar(20) NOT NULL,
  `Gender` varchar(225) NOT NULL,
  `Salary` varchar(255) NOT NULL,
  `date_added` date NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `staff`
--

INSERT INTO `staff` (`id`, `Designation`, `FullName`, `Address`, `Phone`, `Gender`, `Salary`, `date_added`) VALUES
(1, 'Apprentist', 'Yahuza Hakim', 'vendetta home', '0542441933', 'Male', '1000', '2021-03-09');

-- --------------------------------------------------------

--
-- Table structure for table `staff_designation`
--

CREATE TABLE `staff_designation` (
  `id` int(11) NOT NULL,
  `Title` varchar(255) NOT NULL,
  `date_added` date NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `staff_designation`
--

INSERT INTO `staff_designation` (`id`, `Title`, `date_added`) VALUES
(1, 'Tailor', '2021-03-09'),
(2, 'Counter', '2021-03-09'),
(3, 'Security', '2021-03-09'),
(4, 'Apprentist', '2021-03-09'),
(5, 'Last Test', '2021-03-11'),
(6, 'another test', '2021-03-15'),
(7, 'last testing', '2021-03-15');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `firstname` varchar(50) NOT NULL,
  `lastname` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `phone` varchar(22) NOT NULL,
  `avatar` varchar(255) DEFAULT NULL,
  `password` varchar(255) NOT NULL,
  `status` varchar(255) NOT NULL,
  `created_at` datetime NOT NULL DEFAULT current_timestamp(),
  `updated_at` datetime DEFAULT NULL ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `firstname`, `lastname`, `email`, `phone`, `avatar`, `password`, `status`, `created_at`, `updated_at`) VALUES
(1, 'vendetta', 'Mushe', 'Abdul-Hakim', 'musheabdulhakim99@gmail.com', '0542441933', 'coding.jpg', '$2y$10$DBhStjf6m4LelOy6SCZGiukZP2BXl9Zz/3KbEr.KkbuBFJjrCa2Km', 'Active', '2021-02-19 09:19:04', '2021-03-12 21:09:19'),
(3, 'admin', 'Mushe', 'Abdul-Hakim', 'musheabdulhakim@protonmail.ch', '2330209229025', 'photo_2021-01-13_18-03-27.jpg', '$2y$10$EnmUY/nYP5mG3cAZJIjgtuykCslwvsyjYuaYBuLhoVfrXIEEC5/hm', 'Active', '2021-03-12 22:16:41', NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `cloth-types`
--
ALTER TABLE `cloth-types`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `customers`
--
ALTER TABLE `customers`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `expenses`
--
ALTER TABLE `expenses`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `expense_category`
--
ALTER TABLE `expense_category`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `income`
--
ALTER TABLE `income`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `income_category`
--
ALTER TABLE `income_category`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `measurements`
--
ALTER TABLE `measurements`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `parts`
--
ALTER TABLE `parts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `session_data`
--
ALTER TABLE `session_data`
  ADD PRIMARY KEY (`session_id`);

--
-- Indexes for table `staff`
--
ALTER TABLE `staff`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `staff_designation`
--
ALTER TABLE `staff_designation`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `username` (`username`,`email`),
  ADD UNIQUE KEY `phone` (`phone`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `cloth-types`
--
ALTER TABLE `cloth-types`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `customers`
--
ALTER TABLE `customers`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `expenses`
--
ALTER TABLE `expenses`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `expense_category`
--
ALTER TABLE `expense_category`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `income`
--
ALTER TABLE `income`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `income_category`
--
ALTER TABLE `income_category`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `measurements`
--
ALTER TABLE `measurements`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `id` int(8) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `parts`
--
ALTER TABLE `parts`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `staff`
--
ALTER TABLE `staff`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `staff_designation`
--
ALTER TABLE `staff_designation`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
