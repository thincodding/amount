-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 23, 2023 at 04:32 AM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `amount`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbl_amount`
--

CREATE TABLE `tbl_amount` (
  `id` int(11) NOT NULL,
  `firstname` varchar(100) NOT NULL,
  `lastname` varchar(100) NOT NULL,
  `phone` varchar(100) NOT NULL,
  `Email` varchar(200) NOT NULL,
  `price` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tbl_amount`
--

INSERT INTO `tbl_amount` (`id`, `firstname`, `lastname`, `phone`, `Email`, `price`) VALUES
(11, 'sokthin', 'Sokthinw', '0887350657', 'sowkthin33@gmail.com', ''),
(17, 'sokthin', 'Sokthinw', '0887350657', 'sowkthin33@gmail.com', ''),
(18, 'sokthin', 'Sokthinw', '0887350657', 'sowkthin33@gmail.com', ''),
(29, 'sokthine', 'Sokthinw', '0887350657', 'sowkthin33@gmail.com', ''),
(34, 'sokthinsff', 'Sokthinww', '0887350657', 'sowkthin33@gmail.com', ''),
(37, 'blue', 'Fc', '088735066', 'sowkthin33@gmail.com', ''),
(38, 'keans', 'ff', '0887350657', 'sowkthin33@gmail.com', ''),
(39, 'chanoom', 'bbwe', '0887350659', 'sowkthin33@gmail.com', ''),
(40, 'sokthinewew', 'Sokthin53', '088735093', 'sowkthin33@gmail.com', ''),
(41, 'sokthin4', 'Sokthin32', '0887354898', 'sowkthin33@gmail.com', ''),
(42, 'bluew', 'gwwe', '0832322283', 'sokthinqwe223@gmail.com', ''),
(43, 'houy', 'blue', '0378273287', 'sokthin@gmail.com', ''),
(44, 'houy', 'bn', '08488444', 'sowkthin33@gmail.com', ''),
(45, 'sokthin', 'ee', '0887350657', 'sokthin@gmail.com', ''),
(46, 'ewew', 'ewrw', '0887350655', 'sokthinqwe22553@gmail.com', ''),
(48, 'rwrw', 'wrw', 'wrw', 'sokthinqwe22e3@gmail.com', ''),
(49, 'sokthineww', 'wew', 'wew', 'sokthin334@gmail.com', ''),
(50, 'Phabew', 'Sokthin', '0887350649', 'sokthinsee@gmail.com', ''),
(51, 'ekw', '322', '23', '322@gmail.com', ''),
(52, 'sokthinew', 'Sokthinew', '08873506io', 'sowkthin33ee@gmail.com', ''),
(53, 'sokthine', 'ddddr', '0887350893', 'sokthin42@gmail.com', ''),
(55, 'noutt', 'ewwe', '0887350693', 'sokthinqwe223e@gmail.com', ''),
(56, 'sokthin322r', '23r2', '0883892839', 'sokthinqwe232r23@gmail.com', ''),
(57, 'sokthin', 'Sokthinew', '0904343', 'sokthinqwewe223@gmail.com', ''),
(58, 'er232', '3232', '08842422', 'sokthinqwe42223@gmail.com', ''),
(59, 'eww', 'rwr3', '3r2', '3r22@3.com', ''),
(60, 'r3232', 'r32', '03904222', 'sokthinqwe223r@gmail.com', ''),
(61, 'sokthin3', 'dddd33', '094994332', 'sokthinqwe2233@gmail.com', ''),
(62, 'sokthinew', 'ddddew', '07484843', 'sokthinqwe2323@gmail.com', ''),
(66, 'sokthin', 'Sokthin', '0887350657', 'sokthinqwe223@gmail.com', ''),
(67, 'sokthin', 'Sokthin', '0887350657', 'sokthinqwe223@gmail.com', ''),
(68, 'sokthin', 'Sokthin', '0887350657', 'sokthinqwe223@gmail.com', ''),
(69, 'boolen', 'sokthine', '0888323232', 'sowkthin3233@gmail.com', ''),
(70, 'sokthin45', 'Sokthin24444444', '0887350643', 'sokthinqwe22324@gmail.com', ''),
(71, 'boole3n', 'sokthinewewe', '082113', 'sowkthin3233313@gmail.com', ''),
(72, 'kaka33', '09933422', '0883323400', 'kaka422@gmail.com', ''),
(73, 'Puns', 'Pies', '0883882323', 'sokthinqwe373223@gmail.com', ''),
(74, 'sofew', 'ewew', '0887350657', 'sokthinqwe223@gmail.com', ''),
(75, 'sofew', 'ewew', '0887350657', 'sokthinqwe223@gmail.com', ''),
(76, 'Both', 'Sokthin', '0887350657', 'sowkthin33@gmail.com', ''),
(77, 'Bean', 'Blue', '088838342', 'sokthin@gmail.com', ''),
(78, 'sokthinbmc', 'sokthinb.c', '0887350657', 'sowekthin33@gmail.com', ''),
(79, 'kean', 'sokthin', '0993838442', 'sokthin@gmail.com', ''),
(80, 'Thean', '1234', '0883929328', 'sokthin@gmail.com', ''),
(81, 'thins', 'bmc', '088838833', 'sokthinqwe223@gmail.com', ''),
(83, 'sokejwo', 'ewew', '0884824242', 'sdokb@gmail.com', ''),
(84, 'bluegkeh', 'bluesg', '0883928982', 'sokthin32@gmail.com', ''),
(85, 'num', 'numsokthin', '0993984884', 'esowkthin33@gmail.com', ''),
(86, 'Park', 'blues', '0489284284', 'Park497@gmail.com', ''),
(87, 'blog', 'blog394', '0884883331', 'sokthin@gmail.com', ''),
(88, 'Sunday', '123', '0884828498', 'sokthin38@gmail.com', ''),
(89, 'peak', 'sok', '088838323', 'sokpeak123@email.com', ''),
(90, 'bbb', 'jddss', '088323223', 'sokpeak3123@email.com', ''),
(91, 'Sokthinbbn', 'lastone', '088477733', 'sokthin123@gmail.com', ''),
(92, 'petty', 'sok', '09388332', 'petty123@gmail.com', ''),
(94, 'heange', ' bbu', '08837443', 'sokthinqwe223@gmail.com', '400000'),
(95, 'boxring', 'bbu', '0887350657', 'sokthinqwe223@gmail.com', '45000'),
(96, 'kim', 'chanton', '0888433', 'sokthinqwe223@gmail.com', '54000'),
(97, 'him', 'dok', '0883737372', 'sokthin@gmail.com', '89000'),
(99, 'goo', 'dd', '0488488283', 'ggo@gmail.com', '1000'),
(100, 'koyPHP', 'bbog', '0989389283', 'sokthin@gmail.com', '40000'),
(101, 'yout', 'jos', '0884393588', 'sowkthin98@gmail.com', '40000'),
(102, 'sokthinuj', '9055', '0889006666', 'sokthinnuj@gmail.com', '60099778'),
(103, 'sothe', 'bbb', '0848393848', 'sothe8@gmail.com', '2000000'),
(104, 'skth', 'gwew', '039828329', 'sothe8@gmail.com', '10000000'),
(106, 'Phabgg', 'dfff', '0888787654', 'Phabgg@gmail.com', '200033'),
(107, 'blue', 'hhh', '08766666', 'sowkthin33@gmail.com', '70000'),
(108, 'fruite', 'biofkdkd', '0888868948', 'sokthin@gmail.com', '290004'),
(109, 'sokthie', 'gjbi33', '0887350634', 'sowkthin33@gmail.com', '80004'),
(110, 'Phab', 'dddd', '0888499444', 'sowkthin33@gmail.com', '89000');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_totals`
--

CREATE TABLE `tbl_totals` (
  `id` int(11) NOT NULL,
  `student` varchar(110) NOT NULL,
  `phone` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `price` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbl_amount`
--
ALTER TABLE `tbl_amount`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_totals`
--
ALTER TABLE `tbl_totals`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbl_amount`
--
ALTER TABLE `tbl_amount`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=111;

--
-- AUTO_INCREMENT for table `tbl_totals`
--
ALTER TABLE `tbl_totals`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
