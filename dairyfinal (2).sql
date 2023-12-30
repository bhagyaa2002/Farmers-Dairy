-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 20, 2022 at 11:49 AM
-- Server version: 10.4.17-MariaDB
-- PHP Version: 8.0.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `dairyfinal`
--

-- --------------------------------------------------------

--
-- Table structure for table `add_doctor`
--

CREATE TABLE `add_doctor` (
  `doc_id` int(100) NOT NULL,
  `name` varchar(100) NOT NULL,
  `address` varchar(100) NOT NULL,
  `phoneno` varchar(100) NOT NULL,
  `opentm` time NOT NULL,
  `closetm` time NOT NULL,
  `dippoid` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `add_doctor`
--

INSERT INTO `add_doctor` (`doc_id`, `name`, `address`, `phoneno`, `opentm`, `closetm`, `dippoid`) VALUES
(2, 'DR.Pooja', 'Manglore', '7894561235', '09:00:00', '08:00:00', 'shree@gmail.com'),
(3, 'Dr.Devika Rao', 'Manglore', '45789654', '10:00:00', '05:00:00', 'shree@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `add_feed`
--

CREATE TABLE `add_feed` (
  `f_id` int(100) NOT NULL,
  `name` varchar(100) NOT NULL,
  `description` varchar(100) NOT NULL,
  `rate` varchar(100) NOT NULL,
  `rateper` varchar(100) NOT NULL,
  `image` varchar(100) NOT NULL,
  `qty` varchar(100) NOT NULL,
  `subcidy` varchar(100) NOT NULL,
  `dippoid` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `add_feed`
--

INSERT INTO `add_feed` (`f_id`, `name`, `description`, `rate`, `rateper`, `image`, `qty`, `subcidy`, `dippoid`) VALUES
(5, 'godhi boosu', 'It improves milk. It good for cattle health.', '4000', '4 Kgs', 'godhi boosu30.jpg', '18', '3800', 'shree@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `add_manager`
--

CREATE TABLE `add_manager` (
  `m_id` int(100) NOT NULL,
  `fname` varchar(100) NOT NULL,
  `lname` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `phoneno` varchar(100) NOT NULL,
  `address` varchar(100) NOT NULL,
  `city` varchar(100) NOT NULL,
  `state` varchar(100) NOT NULL,
  `pin_code` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `add_manager`
--

INSERT INTO `add_manager` (`m_id`, `fname`, `lname`, `email`, `password`, `phoneno`, `address`, `city`, `state`, `pin_code`) VALUES
(1, 'Madhusha', '', 'madhu@gmail.com', 'abc123', '9496039076', 'periyadka', 'Uppinangady', 'Karnataka', '574241'),
(2, 'Nishmitha', '', 'nishkallaje@gmail.com', '19876', '8976543211', 'kallaje', 'Uppinangady', 'Karnataka', '574241'),
(3, 'Nishmitha', '', 'nishkallaje@gmail.com', '', '8976543211', 'kallaje', 'Uppinangady', 'Karnataka', '574241'),
(4, 'Nishmitha', 'R K', 'nishkallaje@gmail.com', '9876', '987654322', 'periyadka', 'Uppinangady', 'Karnataka', '574241'),
(5, 'madhusha', 'fgj', 'madhu@gmail.com', 'www', '222222', 'periyadka', 'ddd', 'Telangana', '456123'),
(6, 'abc', '', 'abc@gmail.com', '931', '987654322', 'nelyadi', 'puttur', 'Karnataka', '574241'),
(7, 'Nishmitha', 'R K', 'rk@gmail.com', '345', '8971109904', 'periyadka', 'Mangalore', 'Kerala', '574241'),
(8, 'adb', '', 'dfd@gmail.com', '890', '8971109904', 'amruth sangama', 'puttur', 'Gujarath', '574241'),
(9, 'kavya', '', 'kavya@gmail.com', '9000', '90887654321', 'nelyadi', 'Manglore', 'select', '574231');

-- --------------------------------------------------------

--
-- Table structure for table `add_milk`
--

CREATE TABLE `add_milk` (
  `am_id` int(100) NOT NULL,
  `name` varchar(100) NOT NULL,
  `user_no` varchar(100) NOT NULL,
  `phno` varchar(100) NOT NULL,
  `date` date NOT NULL,
  `time` varchar(100) NOT NULL,
  `clr` varchar(100) NOT NULL,
  `fat` float NOT NULL,
  `snf` float NOT NULL,
  `liter` float NOT NULL,
  `amount` float NOT NULL,
  `totalamt` float NOT NULL,
  `dippoid` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `add_milk`
--

INSERT INTO `add_milk` (`am_id`, `name`, `user_no`, `phno`, `date`, `time`, `clr`, `fat`, `snf`, `liter`, `amount`, `totalamt`, `dippoid`) VALUES
(13, 'Shrijith R kulal', 'U004', '7859645678', '2022-08-18', 'Morning', '29.5', 3.5, 8.5, 2.5, 29.6, 88.3, 'shree@gmail.com'),
(14, 'raju', 'U003', '9723456789', '2022-08-18', 'Morning', '26.2', 3.5, 8.9, 1, 22.3, 22.3, 'abc@gmail.com'),
(15, 'Shrijith R kulal', 'U004', '7859645678', '2022-08-18', 'Evening', '26.3', 3.6, 8.5, 2, 52, 104, 'shree@gmail.com'),
(18, 'Shrijith', 'U004', '7859645678', '2022-08-19', 'Evening', '26.0', 4.1, 8.6, 2, 30.22, 60.44, 'shree@gmail.com'),
(19, 'Shrijith', 'U004', '7859645678', '2022-08-19', 'Morning', '26.0', 3.9, 8.9, 4, 30.39, 121.56, 'shree@gmail.com'),
(22, 'mahesh', 'U004', '7859645678', '2022-08-19', 'Evening', '26.0', 3.5, 8.5, 7, 29, 203, 'shree@gmail.com'),
(23, 'roopa ', 'U002', '8971109909', '2022-08-19', 'Morning', '26.0', 3.6, 8.8, 10, 29.17, 291.7, 'shree@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `add_rate`
--

CREATE TABLE `add_rate` (
  `r_id` int(100) NOT NULL,
  `fat` varchar(100) NOT NULL,
  `snf` varchar(100) NOT NULL,
  `amount` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `add_rate`
--

INSERT INTO `add_rate` (`r_id`, `fat`, `snf`, `amount`) VALUES
(10, '3.5', '8.5', '29.00'),
(11, '3.5', '8.6', '29.17'),
(12, '3.5', '8.7', '29.35'),
(13, '3.5', '8.8', '29.52'),
(14, '3.5', '8.9', '29.70'),
(15, '3.5', '9.0', '29.87'),
(16, '3.5', '9.1', '30.04'),
(17, '3.5', '9.2', '30.22'),
(18, '3.6', '8.5', '29.17'),
(19, '3.6', '8.6', '29.37'),
(20, '3.6', '8.7', '29.52'),
(21, '3.6', '8.8', '29.17'),
(22, '3.6', '8.9', '29.87'),
(23, '3.6', '9.0', '30.04'),
(24, '3.6', '9.1', '30.22'),
(25, '3.6', '9.2', '30.39'),
(26, '3.7', '8.5', '29.35'),
(27, '3.7', '8.6', '29.52'),
(28, '3.7', '8.7', '29.70'),
(30, '3.7', '8.8', '29.87'),
(31, '3.7', '8.9', '30.04'),
(32, '3.7', '9.0', '30.22'),
(33, '3.7', '9.1', '30.39'),
(34, '3.7', '9.2', '30.57'),
(35, '3.8', '8.5', '29.52'),
(36, '3.8', '8.6', '29.70'),
(37, '3.8', '8.7', '29.87'),
(38, '3.8', '8.8', '30.04'),
(39, '3.8', '8.9', '30.22'),
(40, '3.8', '9.0', '30.39'),
(41, '3.8', '9.1', '30.57'),
(42, '3.8', '9.2', '30.74'),
(43, '3.9', '8.5', '29.70'),
(44, '3.9', '8.6', '29.87'),
(45, '3.9', '8.7', '30.04'),
(46, '3.9', '8.8', '30.22'),
(47, '3.9', '8.9', '30.39'),
(48, '3.9', '9.0', '30.57'),
(49, '3.9', '9.1', '30.74'),
(51, '3.9', '9.2', '30.91'),
(52, '4.0', '8.5', '29.87'),
(53, '4.0', '8.6', '30.04'),
(54, '4.0', '8.7', '30.22'),
(55, '4.0', '8.8', '30.39'),
(56, '4.0', '8.9', '30.57'),
(57, '4.0', '9.0', '30.74'),
(58, '4.0', '9.1', '30.91'),
(59, '4.0', '9.2', '31.09'),
(60, '4.1', '8.5', '30.04'),
(61, '4.1', '8.6', '30.22'),
(62, '4.1', '8.7', '30.39'),
(63, '4.1', '8.8', '30.57'),
(64, '4.1', '8.9', '30.74'),
(65, '4.1', '9.0', '30.91'),
(66, '4.1', '9.1', '31.09'),
(67, '4.1', '9.2', '31.26'),
(68, '4.2', '8.5', '30.22'),
(69, '4.2', '8.6', '30.39'),
(70, '4.2', '8.7', '30.57'),
(71, '4.2', '8.8', '30.74'),
(72, '4.2', '8.9', '30.91'),
(73, '4.2', '9.0', '31.09'),
(74, '4.2', '9.1', '31.26'),
(75, '4.2', '9.2', '31.44'),
(76, '4.3', '8.5', '30.39'),
(77, '4.3', '8.6', '30.57'),
(78, '4.3', '8.7', '30.74'),
(79, '4.3', '8.8', '30.91'),
(80, '4.3', '8.9', '31.09'),
(81, '4.3', '9.0', '31.26'),
(82, '4.3', '9.1', '31.44'),
(83, '4.3', '9.2', '31.61'),
(84, '4.4', '8.5', '30.57'),
(85, '4.4', '8.6', '30.74'),
(86, '4.4', '8.7', '30.91'),
(87, '4.4', '8.8', '31.09'),
(88, '4.4', '8.9', '31.26'),
(89, '4.4', '9.0', '31.44'),
(90, '4.4', '9.1', '31.61'),
(91, '4.4', '9.2', '31.78'),
(92, '4.5', '8.5', '30.74'),
(93, '4.5', '8.6', '30.91'),
(94, '4.5', '8.7', '31.09'),
(95, '4.5', '8.8', '31.26'),
(96, '4.5', '8.9', '31.44'),
(97, '4.5', '9.0', '31.61'),
(98, '4.5', '9.1', '31.78'),
(99, '4.5', '9.2', '31.96');

-- --------------------------------------------------------

--
-- Table structure for table `add_salary`
--

CREATE TABLE `add_salary` (
  `sal_id` int(100) NOT NULL,
  `name` varchar(100) NOT NULL,
  `accno` varchar(100) NOT NULL,
  `dop` varchar(100) NOT NULL,
  `salary` varchar(100) NOT NULL,
  `dippoid` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `add_salary`
--

INSERT INTO `add_salary` (`sal_id`, `name`, `accno`, `dop`, `salary`, `dippoid`) VALUES
(4, 'Deepthi', '456890765434', '2022-08-01', '15000', 'shree@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `add_staff`
--

CREATE TABLE `add_staff` (
  `s_id` int(100) NOT NULL,
  `fname` varchar(100) NOT NULL,
  `lname` varchar(100) NOT NULL,
  `staffno` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `phno` bigint(100) NOT NULL,
  `address` varchar(100) NOT NULL,
  `city` varchar(100) NOT NULL,
  `state` varchar(100) NOT NULL,
  `pin_code` varchar(100) NOT NULL,
  `acc_no` varchar(100) NOT NULL,
  `ifsc_code` varchar(100) NOT NULL,
  `bank` varchar(100) NOT NULL,
  `dippoid` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `add_staff`
--

INSERT INTO `add_staff` (`s_id`, `fname`, `lname`, `staffno`, `email`, `password`, `phno`, `address`, `city`, `state`, `pin_code`, `acc_no`, `ifsc_code`, `bank`, `dippoid`) VALUES
(2, 'Deepthi', 'kulal', 'S001', 'deeps@gmail.com', '123', 8527418529, 'Manglore   ', 'Manglore      ', 'Karnataka', '575005      ', '456890765434', '1234FFF757757', 'Bank of Baroda', 'shree@gmail.com'),
(3, 'abc', '', 'S002', 'abc@gmail.com', 'jiiuirt', 365498712, 'puttur', 'Manglore  ', 'Karnataka', '575005  ', '5638948322', 'dsey6867', 'State Bank of India', ''),
(4, 'veena', '', 'S003', 'veena@gmail.com', '3456', 2314567458, 'Uppinangady', 'Belthangady', 'TamilNadu', '574241', '678652431', 'bser479653456', 'State Bank of India', ''),
(5, 'Nishmitha', '', 'S004', 'nish@gmail.com', '123', 234523456789, 'Kallaje', 'fghj  ', 'West Bengal', '575005  ', '345678904567890', 'zxcvbnm345678', 'State Bank of India', 'shree@gmail.com'),
(7, 'raksha', '', 'S005', 'raksha@gmail.com', 'kjhfd', 78654224688, 'periyadka', 'Uppinangady', 'Karnataka', '575005', '75543908765', 'BAR88812345', 'Bank of Baroda', 'shree@gmail.com'),
(8, 'Deepthi', 'Rao', 'S006', 'deepthi@gmail.com', '123', 7895425415, 'Manglore', 'Manglore', 'Karnataka', '123456', '123456789088', 'BAR10OPAWE2452', 'Bank of Baroda', 'shree@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `add_user`
--

CREATE TABLE `add_user` (
  `u_id` int(100) NOT NULL,
  `fname` varchar(100) NOT NULL,
  `lname` varchar(100) NOT NULL,
  `userno` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `phone_no` varchar(100) NOT NULL,
  `address` varchar(100) NOT NULL,
  `city` varchar(100) NOT NULL,
  `state` varchar(100) NOT NULL,
  `pincode` varchar(100) NOT NULL,
  `no_cattle` varchar(100) NOT NULL,
  `insurance` varchar(100) NOT NULL,
  `no_insured_cattles` varchar(100) NOT NULL,
  `accno` varchar(100) NOT NULL,
  `ifsc_code` varchar(100) NOT NULL,
  `bank` varchar(100) NOT NULL,
  `dippoid` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `add_user`
--

INSERT INTO `add_user` (`u_id`, `fname`, `lname`, `userno`, `email`, `password`, `phone_no`, `address`, `city`, `state`, `pincode`, `no_cattle`, `insurance`, `no_insured_cattles`, `accno`, `ifsc_code`, `bank`, `dippoid`) VALUES
(2, 'mahesh', '', 'U001', 'mahesh@gmail.com', '420', '7865432190', 'periyadka', 'Uppinangady', 'Karnataka', '574241', '3', '0', '2', '8765432987654', '8674453axcv dfgh', 'Coorperation Bank', 'shree@gmail.com'),
(3, 'roopa', '', 'U002', 'roopa@gmail.com', '7890', '8971109909', 'periyadka', 'Uppinangady', 'Karnataka', '574241', '4', '0', '2', '66666234587', '6777asdfghjcv', 'Bank of Baroda', 'shree@gmail.com'),
(4, 'raju', '', 'U003', 'raju@gmail.com', '190986', '9723456789', 'nelyadi', 'puttur', 'Karnataka', '574241', '6', '0', '3', '4568999853221233', 'BAR88812345', 'CA Bank', 'shree@gmail.com'),
(5, 'Shrijith', 'R Kulal', 'U004', 'shrijith456@gmail.com', '1234', '7859645678', 'T.T. Road', 'Manglore', 'Karnataka', '574005', '7', 'yes', '7', '7894561237894', 'BAR10OPAWE2452', 'Bank of Baroda', 'shree@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `admin_log`
--

CREATE TABLE `admin_log` (
  `a_id` int(100) NOT NULL,
  `username` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin_log`
--

INSERT INTO `admin_log` (`a_id`, `username`, `password`) VALUES
(1, 'admin', '456');

-- --------------------------------------------------------

--
-- Table structure for table `dipo_reg`
--

CREATE TABLE `dipo_reg` (
  `d_id` int(100) NOT NULL,
  `dnumber` varchar(100) NOT NULL,
  `dname` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `ph_number` bigint(100) NOT NULL,
  `address` varchar(100) NOT NULL,
  `city` varchar(100) NOT NULL,
  `pin_code` int(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `dipo_reg`
--

INSERT INTO `dipo_reg` (`d_id`, `dnumber`, `dname`, `email`, `password`, `ph_number`, `address`, `city`, `pin_code`) VALUES
(1, 'D001', 'm p s', 'abc@gmail.com', '123', 1234567897, 'amruth sangama', 'Mangalore', 574241),
(13, 'D002', 'shree krishna MPPS', 'shree@gmail.com', '123', 7418529635, 'Manglore Karnataka', 'Mangloregn n     ', 574006);

-- --------------------------------------------------------

--
-- Table structure for table `feedback`
--

CREATE TABLE `feedback` (
  `id` int(100) NOT NULL,
  `name` varchar(100) NOT NULL,
  `lname` varchar(100) NOT NULL,
  `userno` varchar(100) NOT NULL,
  `ostar` varchar(100) NOT NULL,
  `tstar` varchar(100) NOT NULL,
  `rstar` varchar(100) NOT NULL,
  `fstar` varchar(100) NOT NULL,
  `vstar` varchar(100) NOT NULL,
  `userid` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `feedback`
--

INSERT INTO `feedback` (`id`, `name`, `lname`, `userno`, `ostar`, `tstar`, `rstar`, `fstar`, `vstar`, `userid`) VALUES
(2, 'Shrijith', 'R Kulal', 'U004', '', '', '3 Star', '', '', '7859645678'),
(3, 'Shrijith', 'R Kulal', 'U004', '1 Star', '', '3 Star', '4 Star', '5 Star', '7859645678'),
(4, 'Shrijith', 'R Kulal', 'U004', '1 Star', '2 Star', '3 Star', '4 Star', '5 Star', '7859645678');

-- --------------------------------------------------------

--
-- Table structure for table `medicine`
--

CREATE TABLE `medicine` (
  `mid` int(100) NOT NULL,
  `mname` varchar(100) NOT NULL,
  `descr` varchar(1000) NOT NULL,
  `rate` varchar(100) NOT NULL,
  `qty` varchar(100) NOT NULL,
  `image` varchar(100) NOT NULL,
  `dippoid` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `medicine`
--

INSERT INTO `medicine` (`mid`, `mname`, `descr`, `rate`, `qty`, `image`, `dippoid`) VALUES
(1, 'vitamin', 'It Cures Injury', '300', '', 'vitaminsfsm7.jpg', 'shree@gmail.com'),
(2, 'jbsjbjfse', 'efhvfhewvhsycsdvch', '2000', '', 'jbsjbjfseMastacure Tabletsm8.jpg', ''),
(3, 'dscjn', 'dxvsdvsvirdbvh', '200', '2', 'dscjn33.jpg', 'shree@gmail.com');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `add_doctor`
--
ALTER TABLE `add_doctor`
  ADD PRIMARY KEY (`doc_id`);

--
-- Indexes for table `add_feed`
--
ALTER TABLE `add_feed`
  ADD PRIMARY KEY (`f_id`);

--
-- Indexes for table `add_manager`
--
ALTER TABLE `add_manager`
  ADD PRIMARY KEY (`m_id`);

--
-- Indexes for table `add_milk`
--
ALTER TABLE `add_milk`
  ADD PRIMARY KEY (`am_id`);

--
-- Indexes for table `add_rate`
--
ALTER TABLE `add_rate`
  ADD PRIMARY KEY (`r_id`);

--
-- Indexes for table `add_salary`
--
ALTER TABLE `add_salary`
  ADD PRIMARY KEY (`sal_id`);

--
-- Indexes for table `add_staff`
--
ALTER TABLE `add_staff`
  ADD PRIMARY KEY (`s_id`);

--
-- Indexes for table `add_user`
--
ALTER TABLE `add_user`
  ADD PRIMARY KEY (`u_id`);

--
-- Indexes for table `admin_log`
--
ALTER TABLE `admin_log`
  ADD PRIMARY KEY (`a_id`);

--
-- Indexes for table `dipo_reg`
--
ALTER TABLE `dipo_reg`
  ADD PRIMARY KEY (`d_id`);

--
-- Indexes for table `feedback`
--
ALTER TABLE `feedback`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `medicine`
--
ALTER TABLE `medicine`
  ADD PRIMARY KEY (`mid`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `add_doctor`
--
ALTER TABLE `add_doctor`
  MODIFY `doc_id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `add_feed`
--
ALTER TABLE `add_feed`
  MODIFY `f_id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `add_manager`
--
ALTER TABLE `add_manager`
  MODIFY `m_id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `add_milk`
--
ALTER TABLE `add_milk`
  MODIFY `am_id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT for table `add_rate`
--
ALTER TABLE `add_rate`
  MODIFY `r_id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=100;

--
-- AUTO_INCREMENT for table `add_salary`
--
ALTER TABLE `add_salary`
  MODIFY `sal_id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `add_staff`
--
ALTER TABLE `add_staff`
  MODIFY `s_id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `add_user`
--
ALTER TABLE `add_user`
  MODIFY `u_id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `admin_log`
--
ALTER TABLE `admin_log`
  MODIFY `a_id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `dipo_reg`
--
ALTER TABLE `dipo_reg`
  MODIFY `d_id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `feedback`
--
ALTER TABLE `feedback`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `medicine`
--
ALTER TABLE `medicine`
  MODIFY `mid` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
