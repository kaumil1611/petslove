-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 23, 2021 at 06:46 AM
-- Server version: 10.4.19-MariaDB
-- PHP Version: 7.3.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
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
(1, 1, 'Pets Love');

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
(1, 3, 'kaumil patel', '37', 'jay avinash society', 'k.k.nagatr', 'k.k.nagar', 'Ahmedabad', 'Gujarat', 380061),
(2, 5, 'heli patel', '44', 'jay avinash society', 'k.k.nagar', 'ghatlodiya', 'Select city_name', 'Select State', 380061);

-- --------------------------------------------------------

--
-- Table structure for table `cart`
--

CREATE TABLE `cart` (
  `CART_ID` int(50) NOT NULL,
  `BUYER_ID` int(50) NOT NULL,
  `PRODUCT_ID` int(50) DEFAULT NULL,
  `PET_ID` int(50) DEFAULT NULL,
  `MEDICINE_ID` int(50) DEFAULT NULL,
  `QUANTITY` int(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `cart`
--

INSERT INTO `cart` (`CART_ID`, `BUYER_ID`, `PRODUCT_ID`, `PET_ID`, `MEDICINE_ID`, `QUANTITY`) VALUES
(6, 1, 2, NULL, NULL, 1);

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
  `DATE` timestamp(6) NOT NULL DEFAULT current_timestamp(6) ON UPDATE current_timestamp(6)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `login`
--

INSERT INTO `login` (`LOGIN_ID`, `EMAIL_ID`, `PHONE_NO`, `PASSWORD`, `PROFILE_PIC`, `ROLE`, `STATUS`, `ACTIVE`, `DATE`) VALUES
(1, 'petslove2019@gmail.com', 8141487720, '2a0e11c09ae06eac54b7466a8000a316', 'photos/petslove.png', 1, 1, 1, '2019-04-11 14:10:44.129979'),
(2, 'hetvipatel2110@gmail.com', 8141487720, '103423b606c17437502aeae5f6c17db8', 'photos/Default.png', 2, 1, 1, '2019-04-11 14:21:12.419976'),
(3, 'kaumil@gmail.com', 7016860311, 'ec960dae8136685da09c2c4e494e952f', '', 3, 0, 0, '2019-04-11 18:20:42.862158'),
(5, 'heli@gmail.com', 7990412879, 'bfbae0e563a0b07b7f14c781d375e5cd', '', 3, 0, 0, '2019-04-25 15:29:36.702727'),
(6, 'kuldeep@gmail.com', 7990412879, 'a8029adfae3bca6d42ac99453b200db9', '', 2, 0, 0, '2019-04-25 16:02:18.001447');

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

--
-- Dumping data for table `medicine`
--

INSERT INTO `medicine` (`MEDICINE_ID`, `SELLER_ID`, `MEDICINE_NAME`, `COMPANY`, `PET_CATEGORY`, `DESCRIPTION`, `QUANTITY`, `PRICE`, `IMAGE_1`, `IMAGE_2`, `IMAGE_3`) VALUES
(1, 1, 'Virbac CET Poultry Toothpaste ', 'Virbac', 'Cats', 'Cet toothpaste is specially formulated to be safe effective and appealing to your dog or cat.', 1, 2316, 'photos/Virbac CET Poultry Toothpaste (70gm)1.jpg', 'photos/Virbac CET Poultry Toothpaste (70gm)2.jpg', 'photos/Virbac CET Poultry Toothpaste (70gm)3.jpg'),
(2, 1, 'Virbac Epi-Soothe Oatmeal Shampoo', 'Virbac', 'Dogs', 'Shampoo For Routine Use In Dogs , Cats , Horses With Sensitive Skin . Soothing Moisturising Colloida', 1, 266, 'photos/Virbac Vitabest Derm Oral Supplement1.jpg', 'photos/Virbac Vitabest Derm Oral Supplement2.jpg', 'photos/Virbac Vitabest Derm Oral Supplement3.jpg'),
(3, 1, 'Virbac Nutrich 60 Tab Pets Nutritional Supplement ', 'Virbac', 'Dogs', ' tablet complete nutritional supplement of vitamins and minerals for pets nutritional value ', 1, 315, 'photos/Virbac Vitabest Derm Oral Supplement4 (1).jpg', 'photos/Virbac Vitabest Derm Oral Supplement4 (2).jpg', 'photos/'),
(4, 1, 'Virbac Vitabest Derm Oral Supplement', 'Virbac', 'Dogs', 'Liquid omega 6 & omega-3 fatty acid supplement in 5: 1 ratio with zinc & vitamins for skin', 1, 350, 'photos/Virbac Vitabest Derm Oral Supplement7 (1).jpg', 'photos/Virbac Vitabest Derm Oral Supplement7 (2).jpg', 'photos/');

-- --------------------------------------------------------

--
-- Table structure for table `order_details`
--

CREATE TABLE `order_details` (
  `ORDER_ID` int(50) NOT NULL,
  `SELLER_ID` int(50) NOT NULL,
  `BUYER_ID` int(50) NOT NULL,
  `PRODUCT_ID` int(50) DEFAULT NULL,
  `PET_ID` int(50) DEFAULT NULL,
  `MEDICINE_ID` int(50) DEFAULT NULL,
  `DATE` timestamp(6) NOT NULL DEFAULT current_timestamp(6) ON UPDATE current_timestamp(6),
  `QUANTITY` int(50) NOT NULL,
  `PAYMENT_PRICE` double NOT NULL,
  `PAYMENT_METHOD` varchar(50) NOT NULL,
  `SHIPMENT_STATUS` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `order_details`
--

INSERT INTO `order_details` (`ORDER_ID`, `SELLER_ID`, `BUYER_ID`, `PRODUCT_ID`, `PET_ID`, `MEDICINE_ID`, `DATE`, `QUANTITY`, `PAYMENT_PRICE`, `PAYMENT_METHOD`, `SHIPMENT_STATUS`) VALUES
(10, 1, 1, 1, NULL, NULL, '2019-04-11 18:24:35.362303', 1, 659, 'COD', 'ordered'),
(11, 1, 1, NULL, 20, NULL, '2019-04-25 16:58:28.700051', 1, 0, 'COD', 'dispatch'),
(12, 1, 1, NULL, NULL, 1, '2019-04-11 18:24:35.696112', 1, 0, 'COD', 'ordered'),
(13, 1, 2, 1, NULL, NULL, '2019-04-25 16:00:38.685935', 1, 659, 'COD', 'ordered');

-- --------------------------------------------------------

--
-- Table structure for table `otp`
--

CREATE TABLE `otp` (
  `OTP_ID` int(50) NOT NULL,
  `LOGIN_ID` int(50) NOT NULL,
  `OTP` int(50) NOT NULL,
  `OPT_TIME` timestamp(6) NOT NULL DEFAULT current_timestamp(6) ON UPDATE current_timestamp(6)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `otp`
--

INSERT INTO `otp` (`OTP_ID`, `LOGIN_ID`, `OTP`, `OPT_TIME`) VALUES
(1, 1, 235436, '2021-05-22 17:09:09.699599');

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

--
-- Dumping data for table `pets`
--

INSERT INTO `pets` (`PET_ID`, `SELLER_ID`, `REGISTRATION_ID`, `VERIFIED`, `BREED`, `GENDER`, `AGE`, `COLOR`, `TYPE`, `PET_CATEGORY`, `PRICE`, `DESCRIPTION`, `IMAGE_1`, `IMAGE_2`, `IMAGE_3`) VALUES
(1, 1, '101', 1, 'Macaw', 'Male', 8, 'Red', 'Large Breed', 'Birds', 20000, '', 'photos/Macaw1.jpg', 'photos/Macaw2.jpg', 'photos/Macaw3.jpg'),
(2, 1, '102', 1, 'Rose-ringed parakeet', 'Female', 2, 'Green', 'Large Breed', 'Birds', 30000, '', 'photos/Rose-ringed parakeet1.jpg', 'photos/Rose-ringed parakeet2.jpg', 'photos/Rose-ringed parakeet3.jpg'),
(3, 1, '103', 1, 'British Shorthair', 'Male', 1, 'Red', 'Large Breed', 'Cats', 40000, '', 'photos/British Shorthair1.jpg', 'photos/British Shorthair2.jpg', 'photos/British Shorthair3.jpg'),
(4, 1, '104', 1, 'Ragamuffin', 'Female', 1, 'Black', 'Large Breed', 'Cats', 30000, '', 'photos/Ragamuffin1.jpeg', 'photos/Ragamuffin2.jpg', 'photos/Ragamuffin3.jpg'),
(5, 1, '105', 1, 'Persian', 'Female', 4, 'White', 'Medium Breed', 'Cats', 40000, '', 'photos/Persian1.jpeg', 'photos/Persian2.jpg', 'photos/Persian3.jpg'),
(6, 1, '106', 1, 'Sphynx', 'Female', 4, 'White', 'Medium Breed', 'Cats', 30000, '', 'photos/Sphynx1.jpg', 'photos/Sphynx2.jpg', 'photos/Sphynx3.jpeg'),
(7, 1, '106', 1, 'Munchkin', 'Male', 4, 'Black', 'Small Breed', 'Cats', 40000, '', 'photos/Munchkin1.jpeg', 'photos/Munchkin2.jpg', 'photos/Munchkin3.jpg'),
(8, 1, '107', 1, 'Oriental', 'Male', 4, 'Black', 'Small Breed', 'Cats', 40000, '', 'photos/Oriental1.jpg', 'photos/Oriental2.jpg', 'photos/Oriental3.jpg'),
(9, 1, '108', 1, 'Great Dane', 'Female', 2, 'Black', 'Giant Breed', 'Dogs', 50000, '', 'photos/Great dane1.jpg', 'photos/Great dane2.jpg', 'photos/Great dane3.jpg'),
(10, 1, '109', 1, 'Mastiff', 'Female', 2, 'White', 'Giant Breed', 'Dogs', 40000, '', 'photos/Mastiff1.jpeg', 'photos/Mastiff2.jpeg', 'photos/Mastiff3.jpg'),
(11, 1, '110', 1, 'St. Bernard', 'Male', 2, 'Red', 'Giant Breed', 'Dogs', 60000, '', 'photos/St. Bernard1.jpg', 'photos/St. Bernard2.jpg', 'photos/St. Bernard3.jpg'),
(12, 1, '111', 1, 'Akita', 'Female', 4, 'Black', 'Large Breed', 'Dogs', 50000, '', 'photos/Akita1.jpeg', 'photos/Akita2.jpg', 'photos/Akita3.jpg'),
(13, 1, '112', 1, 'Bernese Mountain Dog', 'Male', 4, 'White', 'Large Breed', 'Dogs', 45000, '', 'photos/Bernese-Mountain-Dog1.jpg', 'photos/Bernese-Mountain-Dog2.jpg', 'photos/Bernese-Mountain-Dog3.jpg'),
(14, 1, '113', 1, 'Golden Retriever', 'Female', 4, 'White', 'Large Breed', 'Dogs', 55000, '', 'photos/Golden retriver1.jpg', 'photos/Golden retriver2.jpg', 'photos/Golden retriver3.jpg'),
(15, 1, '114', 0, 'Border Collie', 'Female', 2, 'Black', 'Medium Breed', 'Dogs', 40000, '', 'photos/border collie1.jpg', 'photos/border collie2.jpg', 'photos/border collie3.jpg'),
(16, 1, '115', 0, 'Boxer', 'Male', 3, '0', '0', 'Dogs', 55000, '', 'photos/', 'photos/', 'photos/'),
(17, 1, '116', 0, 'Labrador Retriever', 'Male', 4, 'Black', 'Medium Breed', 'Dogs', 50000, '', 'photos/Labrador Retriever1.jpg', 'photos/Labrador Retriever2.jpg', 'photos/Labrador Retriever3.jpg'),
(18, 1, '117', 0, 'Beagle', 'Female', 4, 'White', 'Small Breed', 'Dogs', 40000, '', 'photos/beagle1.jpg', 'photos/beagle2.jpg', 'photos/beagle3.jpg'),
(19, 1, '118', 1, 'Boston Terrier', 'Female', 3, 'White', 'Small Breed', 'Dogs', 50000, '', 'photos/Boston Terrier1.jpg', 'photos/Boston Terrier2.jpg', 'photos/Boston Terrier3.jpg'),
(20, 1, '119', 1, 'French Bulldog', 'Male', 3, 'White', 'Small Breed', 'Dogs', 30000, '', 'photos/French Bulldog 1.jpeg', 'photos/French Bulldog 2.jpg', 'photos/French Bulldog 3.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `PRODUCT_ID` int(50) NOT NULL,
  `SELLER_ID` int(50) NOT NULL,
  `PRODUCT_NAME` varchar(50) NOT NULL,
  `COMPANY` varchar(50) NOT NULL,
  `CATEGORY` varchar(30) NOT NULL,
  `PET_CATEGORY` varchar(20) NOT NULL,
  `DESCRIPTION` varchar(200) NOT NULL,
  `PRICE` double NOT NULL,
  `QUANTITY` int(50) NOT NULL,
  `IMAGE_1` varchar(100) NOT NULL,
  `IMAGE_2` varchar(100) NOT NULL,
  `IMAGE_3` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`PRODUCT_ID`, `SELLER_ID`, `PRODUCT_NAME`, `COMPANY`, `CATEGORY`, `PET_CATEGORY`, `DESCRIPTION`, `PRICE`, `QUANTITY`, `IMAGE_1`, `IMAGE_2`, `IMAGE_3`) VALUES
(1, 1, 'Douge Couture Party Tuxedo for Dogs', 'Douge Couture', 'Cloths', 'Dogs', 'Soft and comfortable', 659, 1, 'photos/Douge Couture Party Tuxedo for Dogs, Black 1.jpg', 'photos/Douge Couture Party Tuxedo for Dogs, Black 2.jpg', 'photos/Douge Couture Party Tuxedo for Dogs, Black 3.jpg'),
(2, 1, 'Pet Adidog Printed Round Neck Sleeveless Vest Tank', 'Ruse.', 'Cloths', 'Dogs', 'Cotton super-combed and bio-washed for softness and comfort.', 649, 1, 'photos/Douge Couture Party Tuxedo for Dogs, Black 4.jpg', 'photos/Douge Couture Party Tuxedo for Dogs, Black 5.jpg', 'photos/Douge Couture Party Tuxedo for Dogs, Black 6.jpg'),
(3, 1, 'Drools Chicken and Egg Adult Dog Food,', 'Drools', 'Food', 'Dogs', 'This food is bursting with nourishment and wholesome goodness to promote immunity, skin and coat health and overall development.', 500, 1, 'photos/Drools Chicken and Egg Adult Dog Food, 10kg1.jpg', 'photos/Drools Chicken and Egg Adult Dog Food, 10kg2.jpg', 'photos/Drools Chicken and Egg Adult Dog Food, 10kg3.jpg'),
(4, 1, 'Fidele Large Adult Dog Food', 'Fidle', 'Food', 'Dogs', 'Fidele Large Adult Dog Food, 4Kg', 1625, 1, 'photos/Fidele Large Adult Dog Food, 4Kg1.jpg', 'photos/Fidele Large Adult Dog Food, 4Kg2.jpg', 'photos/Fidele Large Adult Dog Food, 4Kg3.jpg'),
(5, 1, 'Pedigree Adult Dry Dog Food, Meat & Rice', 'Pedigree', 'Food', 'Dogs', 'Pedigree is a complete and balanced food for your dog. Made with high quality ingredients', 1467, 1, 'photos/Pedigree Adult Dry Dog Food, Meat _ Rice â€“ 10 kg Pack1.jpg', 'photos/Pedigree Adult Dry Dog Food, Meat _ Rice â€“ 10 kg Pack2.jpg', 'photos/Pedigree Adult Dry Dog Food, Meat _ Rice â€“ 10 kg Pack3.jpg'),
(6, 1, 'Royal Canin Regular Fit 32 Cat Food', 'Royal canin ', 'Food', 'Cats', 'Cats that have access to the outdoors, have higher energy and nutritional requirements', 2290, 1, 'photos/Royal Canin Regular Fit 32 Cat Food, 4 kg1.jpg', 'photos/Royal Canin Regular Fit 32 Cat Food, 4 kg2.jpg', 'photos/Royal Canin Regular Fit 32 Cat Food, 4 kg3.jpg'),
(7, 1, 'Royal Canin Medium Adult', 'Royal Canin', 'Food', 'Dogs', 'Complete feed for adult medium breed dogs (from 11 to 25 kg) over 12 months. ', 2063, 1, 'photos/Royal Canin Medium Adult, 4 kg1.jpg', 'photos/Royal Canin Medium Adult, 4 kg2.jpg', 'photos/Royal Canin Medium Adult, 4 kg3.jpg'),
(8, 1, 'Versele Laga Exotic Nuts', 'Versele Laga', 'Food', 'Birds', 'Versele-Laga exotic nuts is a delicacy which parrots just love.', 793, 1, 'photos/Royal Canin Medium Adult, 4 kg3.jpg', 'photos/', 'photos/'),
(9, 1, 'Vitapol Economic Food for Cockatiel', 'Vitapol', 'Food', 'Birds', 'Cockatiel smaker fruit stick.', 469, 1, 'photos/Vitapol Economic Food for Cockatiel, 1200g.jpg', 'photos/', 'photos/'),
(10, 1, 'Whiskas Adult Dry Cat Food, Ocean Fish Flavour', 'Whiskas', 'Food', 'Cats', 'Whiskas Adult Cat Food is the nutrition that your cat needs for a healthy and active lifestyle', 1564, 1, 'photos/Whiskas Adult Dry Cat Food, Ocean Fish Flavour â€“ 3 kg Pack1.jpg', 'photos/Whiskas Adult Dry Cat Food, Ocean Fish Flavour â€“ 3 kg Pack2.jpg', 'photos/Whiskas Adult Dry Cat Food, Ocean Fish Flavour â€“ 3 kg Pack3.jpg'),
(11, 1, 'Inditradition Pet Grooming, Hair Removal and Deshe', 'Inditradition', 'Gromming Products', 'Dogs', 'Multi functional Pet Glove Brush, Can be used for variety of grooming works on your loving pets.', 299, 1, 'photos/Inditradition Pet Grooming, Hair Removal and Deshedding Brush Glove (Red)2.jpg', 'photos/Inditradition Pet Grooming, Hair Removal and Deshedding Brush Glove (Red)3.jpg', 'photos/Inditradition Pet Grooming, Hair Removal and Deshedding Brush Glove (Red)4.jpg'),
(12, 1, 'Pets Empire 3Pcs Funny Pet Cat Kitten Playing Toys', 'Pets Empire', 'Toys', 'Cats', 'Cute, small, lightweight, funny.', 265, 1, 'photos/Inditradition Pet Grooming, Hair Removal and Deshedding Brush Glove (Red)4.jpg', 'photos/Inditradition Pet Grooming, Hair Removal and Deshedding Brush Glove (Red)5.jpg', 'photos/Inditradition Pet Grooming, Hair Removal and Deshedding Brush Glove (Red)6.jpg'),
(13, 1, 'BnM Dog Toy Rope Ball, Chew Toy for Adult Dog and ', 'Panoramic Enterprises', 'Toys', 'Dogs', 'Usage of the Dog Toy: Chew toy rope ball for Dog and teething puppies Fetch Dog toy rope ball for Outdoor and Indoor Plays Rope toy ball for dogs and puppies Safe to chew dog toy ball for all sizes an', 199, 1, 'photos/Inditradition Pet Grooming, Hair Removal and Deshedding Brush Glove (Red)(3)9.jpg', 'photos/Inditradition Pet Grooming, Hair Removal and Deshedding Brush Glove (Red)7 (1).jpg', 'photos/Inditradition Pet Grooming, Hair Removal and Deshedding Brush Glove (Red)(2)8.jpg'),
(14, 1, 'Foodie Puppies Cotton Durable Dog Chew Rope Toy fo', 'Foodie Puppies', 'Toys', 'Dogs', 'Everyone loves to play with their dog. Show him or her some extra attention with these fun rope toys.', 180, 1, 'photos/Inditradition Pet Grooming, Hair Removal and Deshedding Brush Glove (Red)10.jpg', 'photos/Inditradition Pet Grooming, Hair Removal and Deshedding Brush Glove (Red)11.jpg', 'photos/Inditradition Pet Grooming, Hair Removal and Deshedding Brush Glove (Red)12.jpg'),
(15, 1, 'Kong Classic Dog Toy (Large)', 'Kong', 'Toys', 'Dogs', 'Our combo bundle features 2 best selling products intended to reward or keep your pet engaged for hours of fun, play, and healthy development.', 1199, 1, 'photos/Inditradition Pet Grooming, Hair Removal and Deshedding Brush Glove (Red)13.jpg', 'photos/Inditradition Pet Grooming, Hair Removal and Deshedding Brush Glove (Red)14.jpg', 'photos/Inditradition Pet Grooming, Hair Removal and Deshedding Brush Glove (Red)15.jpg'),
(16, 1, 'Super Dog Spiked Rubber Dog Ball', 'Super Dog', 'Toys', 'Dogs', 'Super Dog spiked rubber dog ball is made of tough rubber which is sure to give your dog many days of playing pleasure.', 155, 1, 'photos/Inditradition Pet Grooming, Hair Removal and Deshedding Brush Glove (Red).jpg', 'photos/', 'photos/');

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
(1, 2, 'Hetvi patel', '101', 'pets & products', 'maruti nandan', 'k.k.nagar', 'ghatlodiya', 'Ahmedabad', 'Gujarat', 380061, '1234567890');

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
  ADD KEY `PRODUCT_ID` (`PRODUCT_ID`),
  ADD KEY `SELLER_ID` (`SELLER_ID`);

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
  MODIFY `ADMIN_ID` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `buyer`
--
ALTER TABLE `buyer`
  MODIFY `BUYER_ID` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `cart`
--
ALTER TABLE `cart`
  MODIFY `CART_ID` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

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
  MODIFY `LOGIN_ID` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `medicine`
--
ALTER TABLE `medicine`
  MODIFY `MEDICINE_ID` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `order_details`
--
ALTER TABLE `order_details`
  MODIFY `ORDER_ID` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `otp`
--
ALTER TABLE `otp`
  MODIFY `OTP_ID` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `pets`
--
ALTER TABLE `pets`
  MODIFY `PET_ID` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `PRODUCT_ID` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `seller`
--
ALTER TABLE `seller`
  MODIFY `SELLER_ID` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `admin`
--
ALTER TABLE `admin`
  ADD CONSTRAINT `admin_ibfk_1` FOREIGN KEY (`LOGIN_ID`) REFERENCES `login` (`LOGIN_ID`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `buyer`
--
ALTER TABLE `buyer`
  ADD CONSTRAINT `buyer_ibfk_1` FOREIGN KEY (`LOGIN_ID`) REFERENCES `login` (`LOGIN_ID`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `cart`
--
ALTER TABLE `cart`
  ADD CONSTRAINT `cart_ibfk_1` FOREIGN KEY (`BUYER_ID`) REFERENCES `buyer` (`BUYER_ID`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `cart_ibfk_2` FOREIGN KEY (`MEDICINE_ID`) REFERENCES `medicine` (`MEDICINE_ID`) ON DELETE SET NULL ON UPDATE SET NULL,
  ADD CONSTRAINT `cart_ibfk_3` FOREIGN KEY (`PET_ID`) REFERENCES `pets` (`PET_ID`) ON DELETE SET NULL ON UPDATE SET NULL,
  ADD CONSTRAINT `cart_ibfk_4` FOREIGN KEY (`PRODUCT_ID`) REFERENCES `products` (`PRODUCT_ID`) ON DELETE SET NULL ON UPDATE SET NULL;

--
-- Constraints for table `faq_req_sug`
--
ALTER TABLE `faq_req_sug`
  ADD CONSTRAINT `faq_req_sug_ibfk_1` FOREIGN KEY (`BUYER_ID`) REFERENCES `buyer` (`BUYER_ID`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `feedback`
--
ALTER TABLE `feedback`
  ADD CONSTRAINT `feedback_ibfk_1` FOREIGN KEY (`BUYER_ID`) REFERENCES `buyer` (`BUYER_ID`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `medicine`
--
ALTER TABLE `medicine`
  ADD CONSTRAINT `medicine_ibfk_1` FOREIGN KEY (`SELLER_ID`) REFERENCES `seller` (`SELLER_ID`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `order_details`
--
ALTER TABLE `order_details`
  ADD CONSTRAINT `order_details_ibfk_1` FOREIGN KEY (`BUYER_ID`) REFERENCES `buyer` (`BUYER_ID`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `order_details_ibfk_2` FOREIGN KEY (`MEDICINE_ID`) REFERENCES `medicine` (`MEDICINE_ID`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `order_details_ibfk_3` FOREIGN KEY (`PET_ID`) REFERENCES `pets` (`PET_ID`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `order_details_ibfk_4` FOREIGN KEY (`PRODUCT_ID`) REFERENCES `products` (`PRODUCT_ID`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `order_details_ibfk_5` FOREIGN KEY (`SELLER_ID`) REFERENCES `seller` (`SELLER_ID`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `otp`
--
ALTER TABLE `otp`
  ADD CONSTRAINT `otp_ibfk_1` FOREIGN KEY (`LOGIN_ID`) REFERENCES `login` (`LOGIN_ID`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `pets`
--
ALTER TABLE `pets`
  ADD CONSTRAINT `pets_ibfk_1` FOREIGN KEY (`SELLER_ID`) REFERENCES `seller` (`SELLER_ID`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `products`
--
ALTER TABLE `products`
  ADD CONSTRAINT `products_ibfk_2` FOREIGN KEY (`SELLER_ID`) REFERENCES `seller` (`SELLER_ID`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `seller`
--
ALTER TABLE `seller`
  ADD CONSTRAINT `seller_ibfk_1` FOREIGN KEY (`LOGIN_ID`) REFERENCES `login` (`LOGIN_ID`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
