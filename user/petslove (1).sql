-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 25, 2019 at 02:35 PM
-- Server version: 10.1.36-MariaDB
-- PHP Version: 7.2.10


SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `petslove`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `ADMIN_ID` int(50) NOT NULL,
  `LOGIN_ID` int(50) NOT NULL,
  `NAME` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`ADMIN_ID`, `LOGIN_ID`, `NAME`) VALUES
(1, 1, 'Hetvi patel'),
(2, 7, 'kaumil'),
(3, 8, 'shyamal'),
(6, 13, '<script>alert(1)</script>');

-- --------------------------------------------------------

--
-- Table structure for table `buyer`
--

CREATE TABLE `buyer` (
  `BUYER_ID` int(50) NOT NULL,
  `LOGIN_ID` int(50) NOT NULL,
  `NAME` varchar(50) NOT NULL,
  `HOUSE_NO` varchar(50) NOT NULL,
  `SOC_NAME` varchar(50) NOT NULL,
  `STREET_NAME` varchar(50) NOT NULL,
  `LANDMARK` varchar(50) NOT NULL,
  `CITY_NAME` varchar(50) NOT NULL,
  `STATE` varchar(50) NOT NULL,
  `PINCODE` int(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `buyer`
--

INSERT INTO `buyer` (`BUYER_ID`, `LOGIN_ID`, `NAME`, `HOUSE_NO`, `SOC_NAME`, `STREET_NAME`, `LANDMARK`, `CITY_NAME`, `STATE`, `PINCODE`) VALUES
(1, 9, 'Hetvi patel', '44', 'Jay Avinash Soc.', 'K.K.Nagar', 'K.K.Nagar', 'Ahmedabad', 'Gujarat', 380061),
(2, 10, 'kaumil patel', '32', 'new kamlesh society', 'vijaynagar school', 'naranpura', 'Ahmedabad', 'gujarat', 380013);

-- --------------------------------------------------------

--
-- Table structure for table `cart`
--

CREATE TABLE `cart` (
  `CART_ID` int(50) NOT NULL,
  `BUYER_ID` int(50) NOT NULL,
  `PRODUCT_ID` int(50) NOT NULL,
  `PET_ID` int(50) NOT NULL,
  `MEDICINE_ID` int(50) NOT NULL,
  `QUANTITY` int(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE `category` (
  `CATEGORY_ID` int(50) NOT NULL,
  `CATEGORY_NAME` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `faq`
--

CREATE TABLE `faq` (
  `FAQ_ID` int(50) NOT NULL,
  `QUESTION` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `faq_req_sug`
--

CREATE TABLE `faq_req_sug` (
  `SUGGESTION_ID` int(50) NOT NULL,
  `BUYER_ID` int(50) NOT NULL,
  `QUESTION` varchar(100) NOT NULL,
  `AMSWER` varchar(100) NOT NULL,
  `SUGGESTED_PETS` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `feedback`
--

CREATE TABLE `feedback` (
  `FEEDBACK_ID` int(50) NOT NULL,
  `BUYER_ID` int(50) NOT NULL,
  `COMMENT` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `location`
--

CREATE TABLE `location` (
  `LOCATION_ID` int(50) NOT NULL,
  `LOCATION_NAME` varchar(50) NOT NULL,
  `PINCODE` int(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

CREATE TABLE `login` (
  `LOGIN_ID` int(50) NOT NULL,
  `EMAIL_ID` varchar(50) NOT NULL,
  `PHONE_NO` bigint(50) NOT NULL,
  `PASSWORD` varchar(50) NOT NULL,
  `PROFILE_PIC` varchar(100) NOT NULL,
  `ROLE` int(30) NOT NULL,
  `STATUS` int(30) NOT NULL,
  `ACTIVE` int(50) NOT NULL,
  `DATE` timestamp(6) NOT NULL DEFAULT CURRENT_TIMESTAMP(6) ON UPDATE CURRENT_TIMESTAMP(6)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `login`
--

INSERT INTO `login` (`LOGIN_ID`, `EMAIL_ID`, `PHONE_NO`, `PASSWORD`, `PROFILE_PIC`, `ROLE`, `STATUS`, `ACTIVE`, `DATE`) VALUES
(1, 'hetvi@gmail.com', 9898987653, '1234', 'photos/16708654_1369935586410568_5040825231673147294_n.jpg', 1, 1, 1, '2019-03-25 07:58:32.532175'),
(7, 'kp@gmail.com', 9987456321, '789', 'photos/tom_jerry.jpg', 1, 0, 1, '2019-03-25 05:20:14.911988'),
(8, 'shy@gmail.com', 8795462139, '0000', 'photos/Default.png', 1, 0, 1, '2019-03-25 05:20:21.722699'),
(9, 'hetvi123@gmail.com', 8141487720, '7777', 'photos/Default.png', 3, 1, 1, '2019-03-25 05:09:05.172526'),
(10, 'kaumil123@gmail.com', 7896541203, '12345', 'photos/Default.png', 3, 1, 1, '2019-03-25 05:22:38.464848'),
(11, 'shyamal123@gmail.com', 9852013647, '00000', 'photos/Default.png', 2, 1, 1, '2019-03-25 07:13:52.391569'),
(12, 'kuldeep12@gmail.com', 7229095475, '9999', 'photos/tom_jerry.jpg', 2, 1, 0, '2019-03-25 07:26:08.704118'),
(13, 'xxx@xxx.xx', 9875812003, 'xxxx', 'photos/', 1, 0, 0, '2019-03-25 08:00:16.717821');

-- --------------------------------------------------------

--
-- Table structure for table `medicine`
--

CREATE TABLE `medicine` (
  `MEDICINE_ID` int(50) NOT NULL,
  `SELLER_ID` int(50) NOT NULL,
  `MEDICINE_NAME` varchar(50) NOT NULL,
  `COMPANY` varchar(50) NOT NULL,
  `PET_CATEGORY` varchar(50) NOT NULL,
  `DESCRIPTION` varchar(100) NOT NULL,
  `QUANTITY` int(30) NOT NULL,
  `PRICE` double NOT NULL,
  `IMAGE_1` varchar(100) NOT NULL,
  `IMAGE_2` varchar(100) NOT NULL,
  `IMAGE_3` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `order_details`
--

CREATE TABLE `order_details` (
  `ORDER_ID` int(50) NOT NULL,
  `BUYER_ID` int(50) NOT NULL,
  `PRODUCT_ID` int(50) NOT NULL,
  `PET_ID` int(50) NOT NULL,
  `MEDICINE_ID` int(50) NOT NULL,
  `DATE` timestamp(6) NOT NULL DEFAULT CURRENT_TIMESTAMP(6) ON UPDATE CURRENT_TIMESTAMP(6),
  `QUANTITY` int(50) NOT NULL,
  `PAYMENT_PRICE` double NOT NULL,
  `PAYMENT_METHOD` varchar(50) NOT NULL,
  `SHIPMENT_STATUS` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `otp`
--

CREATE TABLE `otp` (
  `OTP_ID` int(50) NOT NULL,
  `LOGIN_ID` int(50) NOT NULL,
  `OTP` int(50) NOT NULL,
  `OPT_TIME` timestamp(6) NOT NULL DEFAULT CURRENT_TIMESTAMP(6) ON UPDATE CURRENT_TIMESTAMP(6)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `otp`
--

INSERT INTO `otp` (`OTP_ID`, `LOGIN_ID`, `OTP`, `OPT_TIME`) VALUES
(1, 1, 714716, '2019-03-16 17:14:44.073263'),
(3, 1, 508170, '2019-03-25 07:57:20.201922'),
(4, 1, 377915, '2019-03-25 07:58:24.476264');

-- --------------------------------------------------------

--
-- Table structure for table `pets`
--

CREATE TABLE `pets` (
  `PET_ID` int(50) NOT NULL,
  `SELLER_ID` int(50) NOT NULL,
  `REGISTRATION_ID` varchar(50) NOT NULL,
  `VERIFIED` int(50) NOT NULL,
  `BREED` varchar(50) NOT NULL,
  `GENDER` varchar(50) NOT NULL,
  `AGE` int(50) NOT NULL,
  `COLOR` varchar(50) NOT NULL,
  `TYPE` varchar(50) NOT NULL,
  `PET_CATEGORY` varchar(50) NOT NULL,
  `PRICE` double NOT NULL,
  `DESCRIPTION` varchar(100) NOT NULL,
  `IMAGE_1` varchar(100) NOT NULL,
  `IMAGE_2` varchar(100) NOT NULL,
  `IMAGE_3` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `PRODUCT_ID` int(50) NOT NULL,
  `CATEGORY_ID` int(50) NOT NULL,
  `SELLER_ID` int(50) NOT NULL,
  `PRODUCT_NAME` varchar(50) NOT NULL,
  `COMPANY` varchar(50) NOT NULL,
  `PET_CATEGORY` varchar(20) NOT NULL,
  `DESCRIPTION` varchar(100) NOT NULL,
  `PRICE` double NOT NULL,
  `QUANTITY` int(50) NOT NULL,
  `IMAGE_1` varchar(100) NOT NULL,
  `IMAGE_2` varchar(100) NOT NULL,
  `IMAGE_3` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `seller`
--

CREATE TABLE `seller` (
  `SELLER_ID` int(50) NOT NULL,
  `LOGIN_ID` int(50) NOT NULL,
  `NAME` varchar(50) NOT NULL,
  `SHOP_NO` varchar(50) NOT NULL,
  `SHOP_NAME` varchar(50) NOT NULL,
  `COMPLEX_NAME` varchar(50) NOT NULL,
  `STREET` varchar(50) NOT NULL,
  `LANDMARK` varchar(50) NOT NULL,
  `CITY_NAME` varchar(50) NOT NULL,
  `STATE` varchar(50) NOT NULL,
  `PINCODE` int(50) NOT NULL,
  `SHOP_LICENCE_NO` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `seller`
--

INSERT INTO `seller` (`SELLER_ID`, `LOGIN_ID`, `NAME`, `SHOP_NO`, `SHOP_NAME`, `COMPLEX_NAME`, `STREET`, `LANDMARK`, `CITY_NAME`, `STATE`, `PINCODE`, `SHOP_LICENCE_NO`) VALUES
(1, 11, 'shyamal joshi', '23', 'pets love', 'maruti nandan', 'k.k.nagar', 'k.k.nagar', 'Ahmedabad', 'gujarat', 380061, '1234567890'),
(2, 12, 'kuldeep pandya', '19', 'Hiral', 'maruti nandan', 'nayannagar', 'jain derasar', 'Ahmedabad', 'Gujarat', 382345, '09876543210');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`ADMIN_ID`),
  ADD KEY `LOGIN_ID` (`LOGIN_ID`);

--
-- Indexes for table `buyer`
--
ALTER TABLE `buyer`
  ADD PRIMARY KEY (`BUYER_ID`),
  ADD KEY `LOGIN_ID` (`LOGIN_ID`);

--
-- Indexes for table `cart`
--
ALTER TABLE `cart`
  ADD PRIMARY KEY (`CART_ID`),
  ADD KEY `BUYER_ID` (`BUYER_ID`),
  ADD KEY `MEDICINE_ID` (`MEDICINE_ID`),
  ADD KEY `PET_ID` (`PET_ID`),
  ADD KEY `PRODUCT_ID` (`PRODUCT_ID`);

--
-- Indexes for table `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`CATEGORY_ID`);

--
-- Indexes for table `faq`
--
ALTER TABLE `faq`
  ADD PRIMARY KEY (`FAQ_ID`);

--
-- Indexes for table `faq_req_sug`
--
ALTER TABLE `faq_req_sug`
  ADD PRIMARY KEY (`SUGGESTION_ID`),
  ADD KEY `BUYER_ID` (`BUYER_ID`);

--
-- Indexes for table `feedback`
--
ALTER TABLE `feedback`
  ADD PRIMARY KEY (`FEEDBACK_ID`),
  ADD KEY `BUYER_ID` (`BUYER_ID`);

--
-- Indexes for table `location`
--
ALTER TABLE `location`
  ADD PRIMARY KEY (`LOCATION_ID`);

--
-- Indexes for table `login`
--
ALTER TABLE `login`
  ADD PRIMARY KEY (`LOGIN_ID`);

--
-- Indexes for table `medicine`
--
ALTER TABLE `medicine`
  ADD PRIMARY KEY (`MEDICINE_ID`),
  ADD KEY `SELLER_ID` (`SELLER_ID`);

--
-- Indexes for table `order_details`
--
ALTER TABLE `order_details`
  ADD PRIMARY KEY (`ORDER_ID`),
  ADD KEY `BUYER_ID` (`BUYER_ID`),
  ADD KEY `MEDICINE_ID` (`MEDICINE_ID`),
  ADD KEY `PET_ID` (`PET_ID`),
  ADD KEY `PRODUCT_ID` (`PRODUCT_ID`);

--
-- Indexes for table `otp`
--
ALTER TABLE `otp`
  ADD PRIMARY KEY (`OTP_ID`),
  ADD KEY `LOGIN_ID` (`LOGIN_ID`);

--
-- Indexes for table `pets`
--
ALTER TABLE `pets`
  ADD PRIMARY KEY (`PET_ID`),
  ADD KEY `SELLER_ID` (`SELLER_ID`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`PRODUCT_ID`),
  ADD KEY `CATEGORY_ID` (`CATEGORY_ID`),
  ADD KEY `SELLER_ID` (`SELLER_ID`);

--
-- Indexes for table `seller`
--
ALTER TABLE `seller`
  ADD PRIMARY KEY (`SELLER_ID`),
  ADD KEY `LOGIN_ID` (`LOGIN_ID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `ADMIN_ID` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `buyer`
--
ALTER TABLE `buyer`
  MODIFY `BUYER_ID` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `cart`
--
ALTER TABLE `cart`
  MODIFY `CART_ID` int(50) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `category`
--
ALTER TABLE `category`
  MODIFY `CATEGORY_ID` int(50) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `faq`
--
ALTER TABLE `faq`
  MODIFY `FAQ_ID` int(50) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `faq_req_sug`
--
ALTER TABLE `faq_req_sug`
  MODIFY `SUGGESTION_ID` int(50) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `feedback`
--
ALTER TABLE `feedback`
  MODIFY `FEEDBACK_ID` int(50) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `location`
--
ALTER TABLE `location`
  MODIFY `LOCATION_ID` int(50) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `login`
--
ALTER TABLE `login`
  MODIFY `LOGIN_ID` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `medicine`
--
ALTER TABLE `medicine`
  MODIFY `MEDICINE_ID` int(50) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `order_details`
--
ALTER TABLE `order_details`
  MODIFY `ORDER_ID` int(50) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `otp`
--
ALTER TABLE `otp`
  MODIFY `OTP_ID` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `pets`
--
ALTER TABLE `pets`
  MODIFY `PET_ID` int(50) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `PRODUCT_ID` int(50) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `seller`
--
ALTER TABLE `seller`
  MODIFY `SELLER_ID` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `admin`
--
ALTER TABLE `admin`
  ADD CONSTRAINT `admin_ibfk_1` FOREIGN KEY (`LOGIN_ID`) REFERENCES `login` (`LOGIN_ID`);

--
-- Constraints for table `buyer`
--
ALTER TABLE `buyer`
  ADD CONSTRAINT `buyer_ibfk_1` FOREIGN KEY (`LOGIN_ID`) REFERENCES `login` (`LOGIN_ID`);

--
-- Constraints for table `cart`
--
ALTER TABLE `cart`
  ADD CONSTRAINT `cart_ibfk_1` FOREIGN KEY (`BUYER_ID`) REFERENCES `buyer` (`BUYER_ID`),
  ADD CONSTRAINT `cart_ibfk_2` FOREIGN KEY (`MEDICINE_ID`) REFERENCES `medicine` (`MEDICINE_ID`),
  ADD CONSTRAINT `cart_ibfk_3` FOREIGN KEY (`PET_ID`) REFERENCES `pets` (`PET_ID`),
  ADD CONSTRAINT `cart_ibfk_4` FOREIGN KEY (`PRODUCT_ID`) REFERENCES `products` (`PRODUCT_ID`);

--
-- Constraints for table `faq_req_sug`
--
ALTER TABLE `faq_req_sug`
  ADD CONSTRAINT `faq_req_sug_ibfk_1` FOREIGN KEY (`BUYER_ID`) REFERENCES `buyer` (`BUYER_ID`);

--
-- Constraints for table `feedback`
--
ALTER TABLE `feedback`
  ADD CONSTRAINT `feedback_ibfk_1` FOREIGN KEY (`BUYER_ID`) REFERENCES `buyer` (`BUYER_ID`);

--
-- Constraints for table `medicine`
--
ALTER TABLE `medicine`
  ADD CONSTRAINT `medicine_ibfk_1` FOREIGN KEY (`SELLER_ID`) REFERENCES `seller` (`SELLER_ID`);

--
-- Constraints for table `order_details`
--
ALTER TABLE `order_details`
  ADD CONSTRAINT `order_details_ibfk_1` FOREIGN KEY (`BUYER_ID`) REFERENCES `buyer` (`BUYER_ID`),
  ADD CONSTRAINT `order_details_ibfk_2` FOREIGN KEY (`MEDICINE_ID`) REFERENCES `medicine` (`MEDICINE_ID`),
  ADD CONSTRAINT `order_details_ibfk_3` FOREIGN KEY (`PET_ID`) REFERENCES `pets` (`PET_ID`),
  ADD CONSTRAINT `order_details_ibfk_4` FOREIGN KEY (`PRODUCT_ID`) REFERENCES `products` (`PRODUCT_ID`);

--
-- Constraints for table `otp`
--
ALTER TABLE `otp`
  ADD CONSTRAINT `otp_ibfk_1` FOREIGN KEY (`LOGIN_ID`) REFERENCES `login` (`LOGIN_ID`);

--
-- Constraints for table `pets`
--
ALTER TABLE `pets`
  ADD CONSTRAINT `pets_ibfk_1` FOREIGN KEY (`SELLER_ID`) REFERENCES `seller` (`SELLER_ID`);

--
-- Constraints for table `products`
--
ALTER TABLE `products`
  ADD CONSTRAINT `products_ibfk_1` FOREIGN KEY (`CATEGORY_ID`) REFERENCES `category` (`CATEGORY_ID`),
  ADD CONSTRAINT `products_ibfk_2` FOREIGN KEY (`SELLER_ID`) REFERENCES `seller` (`SELLER_ID`);

--
-- Constraints for table `seller`
--
ALTER TABLE `seller`
  ADD CONSTRAINT `seller_ibfk_1` FOREIGN KEY (`LOGIN_ID`) REFERENCES `login` (`LOGIN_ID`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
