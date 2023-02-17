-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 31, 2021 at 06:54 PM
-- Server version: 10.4.14-MariaDB
-- PHP Version: 7.2.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `urbanbites`
--

-- --------------------------------------------------------

--
-- Table structure for table `customer`
--

CREATE TABLE `customer` (
  `c_id` int(11) NOT NULL,
  `c_username` varchar(100) NOT NULL,
  `c_address` varchar(100) NOT NULL,
  `c_email` varchar(100) NOT NULL,
  `c_fullName` varchar(250) NOT NULL,
  `c_gender` varchar(10) NOT NULL,
  `c_DOB` date NOT NULL,
  `c_phone` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `customer`
--

INSERT INTO `customer` (`c_id`, `c_username`, `c_address`, `c_email`, `c_fullName`, `c_gender`, `c_DOB`, `c_phone`) VALUES
(8, 'cikpah', 'Taman Baharu Puchong ,Selangor', 'cikpah@gmail.com', 'cikpah23', 'Female', '2000-12-30', '01927711949'),
(9, 'pijaheyo', '3177 jalan tanjung felda gunung besout 3', 'ndeadina23@gmail.com', 'Hafizah', 'Female', '2000-02-28', '01133729831'),
(10, 'farahelly', 'Taman AU ,Adenium Bukit Beruntung Selangor', 'faraelly@gmail.com', 'Farrah Kamila', 'Female', '2000-08-23', '014-5346232'),
(11, 'serawr', 'Tman pluto,Shah Alam Malaysia', 'sarawardina@gmail.com', 'Siti Nur Sara Wardina', 'Female', '2000-02-10', '017-4539843'),
(12, 'skinlah', 'TAMAN U  02600 ARAU PERLIS', 'skinlah@gmail.com', 'Nurul Sakinah', 'Female', '2000-01-02', '011-44568372');

-- --------------------------------------------------------

--
-- Table structure for table `orderproduct`
--

CREATE TABLE `orderproduct` (
  `o_id` int(11) NOT NULL,
  `date` date NOT NULL DEFAULT current_timestamp(),
  `c_id` int(11) NOT NULL,
  `p_id` int(11) NOT NULL,
  `o_name` varchar(250) NOT NULL,
  `o_phone` varchar(250) NOT NULL,
  `o_address` varchar(250) NOT NULL,
  `t_quantity` int(11) NOT NULL,
  `o_total_price` double NOT NULL,
  `o_status` varchar(250) NOT NULL,
  `tracking` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `orderproduct`
--

INSERT INTO `orderproduct` (`o_id`, `date`, `c_id`, `p_id`, `o_name`, `o_phone`, `o_address`, `t_quantity`, `o_total_price`, `o_status`, `tracking`) VALUES
(51, '2021-01-30', 8, 57, 'Cikpah Punya Kawan', '019826611', '', 1, 20, 'Arrived', ''),
(52, '2021-01-30', 8, 136, 'Sharifah Ainin Sofia Binti Syed Azahari', '01133729831', 'N0 31 Bukit Kinrara Puchong Selangor', 1, 21, 'Arrived', 'MY0839420RI'),
(53, '2021-01-31', 9, 100, 'NurHafizah', '0113327932', '3177 jalan tanjung felda gunung besout 3', 4, 9.2, 'Arrived', 'MY023F420SI'),
(54, '2021-01-31', 9, 156, 'NurHafizah', '0113327932', '3177 jalan tanjung felda gunung besout 3', 2, 7, 'Arrived', 'EN0EKE420KL'),
(55, '2021-01-31', 9, 106, 'NurHafizah', '0113327932', '3177 jalan tanjung felda gunung besout 3', 14, 294, 'Arrived', 'SR0ERGR20TI'),
(56, '2021-01-31', 9, 122, 'NurHafizah', '0113327932', '3177 jalan tanjung felda gunung besout 3', 4, 80, 'Arrived', 'EN0ERF420SI'),
(57, '2021-01-31', 9, 136, 'NurHafizah', '0113327932', '3177 jalan tanjung felda gunung besout 3', 2, 42, 'Arrived', 'JN0ERF420LI'),
(58, '2021-01-31', 10, 196, 'Nur Farrah Kamilah', '', 'Taman AU ,Jalan Adenium, Bukit Beruntung Selangor', 34, 340, 'Arrived', 'JY08394F0RI'),
(59, '2021-01-31', 11, 60, 'Siti Nur Sara', '0178439238', 'Jalan Pluto , Shah Alam Malaysia', 23, 230, 'Arrived', 'JN0ERF4204I'),
(61, '2021-01-31', 12, 77, 'Nurul Sakinah', '011-90984321', 'Taman UA ,02600 Arau Perlis', 1, 21, 'Arrived', ''),
(62, '2021-01-31', 12, 78, 'Nurul Sakinah', '011-90984321', 'Taman UA ,02600 Arau Perlis', 30, 630, 'Arrived', ''),
(63, '2021-01-31', 12, 91, 'Nurul Sakinah', '011-90984321', 'Taman UA ,02600 Arau Perlis', 1, 7, 'Arrived', 'MY023420S=JI'),
(64, '2021-01-31', 12, 179, 'Nurul Sakinah', '011-90984321', 'Taman UA ,02600 Arau Perlis', 4, 47.6, 'Arrived', 'EN0EFF420SI'),
(65, '2021-01-31', 12, 93, 'Nurul Sakinah', '011-90984321', 'Taman UA ,02600 Arau Perlis', 9, 56.7, 'Arrived', 'LK0023321KI'),
(66, '2021-01-31', 12, 95, 'Nurul Sakinah', '011-90984321', 'Taman UA ,02600 Arau Perlis', 10, 45, 'Arrived', 'EN02RF420SI'),
(68, '2021-01-31', 9, 112, 'NurHafizah', '01133729831', '3177 jalan tanjung felda gunung besout 3', 10, 280, 'Arrived', ''),
(69, '2021-01-31', 9, 119, 'NurHafizah', '01133729831', '3177 jalan tanjung felda gunung besout 3', 6, 72, 'Arrived', ''),
(70, '2021-01-31', 9, 120, 'NurHafizah', '01133729831', '3177 jalan tanjung felda gunung besout 3', 5, 90, 'Arrived', ''),
(71, '2021-01-31', 9, 118, 'NurHafizah', '01133729831', '3177 jalan tanjung felda gunung besout 3', 13, 123.5, 'Arrived', ''),
(72, '2021-01-31', 9, 122, 'NurHafizah', '01133729831', '3177 jalan tanjung felda gunung besout 3', 5, 100, 'Arrived', ''),
(73, '2021-01-31', 11, 151, 'Siti Nur Sara', '01767329190', 'Taman Pluto Shah Alam Malaysia', 54, 243, 'Arrived', ''),
(74, '2021-01-31', 11, 147, 'Siti Nur Sara', '01767329190', 'Taman Pluto Shah Alam Malaysia', 15, 210, 'Arrived', ''),
(75, '2021-01-31', 11, 150, 'Siti Nur Sara', '01767329190', 'Taman Pluto Shah Alam Malaysia', 10, 25, 'Arrived', ''),
(76, '2021-01-31', 11, 169, 'Siti Nur Sara', '01767329190', 'Taman Pluto Shah Alam Malaysia', 35, 175, 'Arrived', ''),
(77, '2021-01-31', 11, 177, 'Siti Nur Sara', '01767329190', 'Taman Pluto Shah Alam Malaysia', 10, 78, 'Arrived', ''),
(78, '2021-01-31', 11, 158, 'Siti Nur Sara', '01767329190', 'Taman Pluto Shah Alam Malaysia', 10, 35, 'Arrived', ''),
(79, '2021-01-31', 11, 176, 'Siti Nur Sara', '01767329190', 'Taman Pluto Shah Alam Malaysia', 32, 320, 'Arrived', ''),
(80, '2021-01-31', 8, 180, 'Sharifah Ainin Sofia Binti Syed Azahari', '0174539381', 'Taman Bukit Kinrara Puchong Selangor', 32, 384, 'Arrived', ''),
(81, '2021-01-31', 9, 77, 'Rarar', '01921', '11 street', 1, 21, 'Pending', ''),
(82, '2021-01-31', 9, 138, 'Rarar', '01921', '11 street', 2, 24, 'Pending', '');

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

CREATE TABLE `product` (
  `p_id` int(11) NOT NULL,
  `s_id` int(10) NOT NULL,
  `p_name` varchar(100) NOT NULL,
  `p_type` varchar(100) NOT NULL,
  `p_brand` varchar(250) NOT NULL,
  `p_price` double NOT NULL,
  `p_quantity_onhand` int(10) NOT NULL,
  `p_quantity_sold` int(10) NOT NULL DEFAULT 0,
  `p_description` varchar(250) NOT NULL,
  `p_image` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`p_id`, `s_id`, `p_name`, `p_type`, `p_brand`, `p_price`, `p_quantity_onhand`, `p_quantity_sold`, `p_description`, `p_image`) VALUES
(58, 4, 'Bahulu Arang Homemade', 'Traditional Snacks', 'Bahulu Arang ', 9, 15, 0, '•Bahulu Original\r\n•Bahulu Mix\r\n•Bahulu Fruity \r\nAll in one for only RM9', '20210129190011.jpg'),
(59, 4, 'Karipap Mini Goreng', 'Traditional Snacks', 'Jajan Malaysia', 0, 20, 0, '•Mini karipap goreng pedas\r\n', '20210129190706.jpg'),
(60, 4, ' Makmur Snacks', 'Traditional Snacks', 'lynmeyzul homeade', 10, 7, 23, '•Your day will delightful with our makmur snaks\r\n•Traditional food for everyone', '20210129191333.jpg'),
(61, 4, 'Ubi Salted Egg Takoyaki', 'Traditional Snacks', 'Osem Crunch', 5, 30, 0, '•Our new Ubi Salted Egg Takoyaki is the \r\nnew recipe that will cherish your day\r\n•RM5.50 and you will get it for two', '20210129191549.jpg'),
(63, 4, 'Dodol ', 'Traditional Snacks', 'Dodol Cik Ani', 9, 50, 0, '•Sweet Dodol', '20210129192024.jpg'),
(64, 4, 'Loyang Snacks', 'Traditional Snacks', 'Cikya Kuih Loyang', 13, 40, 0, '•Feel The crunch of these traditional\r\nflower shaped', '20210129192247.jpg'),
(65, 4, 'Mouthgasm Crunchy', 'Chocojar', 'Moughtgasm Crunchy', 15.9, 100, 0, '•Mocha Flavour will hit your day', '20210129192527.jpg'),
(66, 4, 'Rocher Cookies', 'Chocojar', 'Crimebites', 13, 50, 0, '•Enjoy the melted hazelnut', '20210129192848.jpg'),
(67, 4, 'Choco Crispy', 'Healthy Snacks', 'Choco Crispy Emterprise', 14, 50, 0, '•Mini Kruch with chocolate', '20210129193126.jpg'),
(68, 4, 'Choco Nation', 'Chocojar', 'Zur Wda Kitchen', 8.6, 45, 0, '•Beli satu takkan cukup', '20210129193300.jpg'),
(69, 4, 'Chocolate Chip Cookies', 'Chocojar', 'Lokal munchies', 10, 45, 0, '•Coated with premium chocolate&chocoflakes', '20210129193441.jpg'),
(70, 4, 'Chunky Chocojar', 'Chocojar', 'Chunky', 6, 54, 0, '•Chocojar premium at lowest price', '20210129193708.jpg'),
(71, 5, 'Nutyy Granola', 'Healthy Snacks', 'Signature Healthy', 14, 15, 0, '•A good morning is when  you have granola for breakfast', '20210129194537.jpg'),
(72, 5, 'Almond Choco', 'Healthy Snacks', 'KETO FRIENDLY', 14, 43, 0, '•All Natural', '20210129195113.jpg'),
(73, 5, 'Quick oat', 'Healthy Snacks', 'Healthy Baker', 4.5, 45, 0, '•Healthy Baker Quick Oat', '20210129195448.jpg'),
(74, 5, 'Rolled Oad', 'Healthy Snacks', 'Healthy Baker', 5, 54, 0, '•Healthy Baker Rolled Oat', '20210129195558.jpg'),
(76, 5, 'Granola Cereal Choc Chip', 'Healthy Snacks', 'Marathon Baker', 6, 54, 0, '•Protien Packed', '20210129200134.jpg'),
(77, 5, 'Antioxident Boost', 'Healthy Snacks', 'Signature Market', 21, 42, 1, '•Mixed fruit', '20210129200336.jpg'),
(78, 5, 'Healthy Nut Mix', 'Healthy Snacks', 'Signature Market', 21, 35, 30, '•Colestrol,fat free', '20210129200528.jpg'),
(79, 5, 'Granola Cereal Goji Berry', 'Healthy Snacks', 'Marathon Baker', 6, 43, 0, '•Cut your fat with this', '20210129200700.jpg'),
(80, 5, 'Granola Bites Salted Dark Chocolate', 'Healthy Snacks', 'Yooky Bites', 16, 34, 0, '•Made from organic rolled oats and seed', '20210130032420.jpg'),
(81, 5, 'Granola Bites Tom Yam', 'Healthy Snacks', 'Yooky Bites', 16, 34, 0, '•Made from organic rolled oats & seeds', '20210130032628.jpg'),
(82, 5, 'Granola Bites Coconut', 'Healthy Snacks', 'Yooky Bites', 0, 54, 0, '•Made from organic rolled oats & seeds', '20210130032835.jpg'),
(83, 5, 'Granola Bites Nasi Lemak', 'Healthy Snacks', 'Yooky Bites', 16, 43, 0, '•Made from organic rolled oats & seed', '20210130033118.jpg'),
(84, 5, 'Healthy Granola', 'Healthy Snacks', 'Momnola.my', 17, 43, 0, '•Made from healthy granola', '20210130033407.jpg'),
(86, 5, 'Hazelnut blackforest', 'Healthy Snacks', 'Amazin Graze', 14, 34, 0, '•Discover joy in every bites', '20210130034027.jpg'),
(88, 5, 'Blueberry Goji Coconut ', 'Healthy Snacks', 'Amazin Graze', 14, 30, 0, '•Discover joy in every bites', '20210130034244.jpg'),
(89, 5, 'Salted Gula Melaka', 'Healthy Snacks', 'Amazin  Graze', 14, 43, 0, '•Discover joy in every bites', '20210130034437.jpg'),
(90, 6, 'Honey Quinoa Granola', 'Healthy Snacks', 'Artisan Kintry', 7, 45, 0, '•Simple Wholesome grains', '20210130035024.jpg'),
(91, 6, 'Salted Butter Caramel Granola', 'Healthy Snacks', 'Artisan Kintry', 7, 55, 1, '•Simple Wholesome grains', '20210130035215.jpg'),
(92, 6, 'Oat Cookies with Choc Chips', 'Healthy Snacks', 'Artisan Kintry', 7, 32, 0, '•Simple Wholesome grains', '20210130035259.jpg'),
(93, 7, 'Pegaga Yusriza', 'Traditional Snacks', 'Pegaga Yusriza', 6.3, 34, 9, '•Pegaga Healthy', '20210130040043.jpg'),
(95, 7, 'Kerepek Ubi Spicy Lemon', 'Traditional Snacks', 'Ali Ha', 4.5, 33, 10, '•Spicy Lemon Flavour', '20210130043444.jpg'),
(96, 7, 'Kerepek Ubi Cili Padi', 'Traditional Snacks', 'Ali Ha', 6.5, 43, 0, '•Spicy Potatoes Snacks', '20210130043736.jpg'),
(97, 7, 'Kerepek Ubi Black Pepper', 'Traditional Snacks', 'Ali Ha', 6.5, 43, 0, '•Black Pepper falvour', '20210130043830.jpg'),
(98, 7, 'Acar Rebung Ikan Masin', 'Others', 'TokJa', 7.3, 54, 0, '•Acar rebung', '20210130044021.jpg'),
(99, 7, 'Rempah Kari Ikan', 'Others', 'Mokcun Malaysia', 2, 100, 0, '•Fish Curry Powder', '20210130044206.jpg'),
(100, 7, 'Rempah Dalca', 'Others', 'Mokcun Malaysia', 2.3, 96, 4, '•Dalca Powder', '20210130044314.jpg'),
(101, 7, 'Rempah Kurma', 'Others', 'Mokcun Malaysia', 2.5, 100, 0, '•Kurma Powder', '20210130044443.jpg'),
(102, 7, 'Sambal Tempe', 'Others', 'Kak Asiah', 10.3, 76, 0, '•Tempe ', '20210130044623.jpg'),
(103, 7, 'Kudapan Kentang Bilis', 'Others', 'Kak Asiah', 5.5, 100, 0, '•Potatoes anchovies snacks', '20210130044758.jpg'),
(104, 7, 'Corned Beef', 'Others', 'Pawada', 8.5, 100, 0, '•Beed corned', '20210130044903.jpg'),
(106, 9, 'Sambal  Ikan Bilis Petai', 'Others', 'Sambal Tempoyak Jiwa Kacau', 21, 126, 14, '•Sambal Tempoyak padu', '20210130045901.jpg'),
(107, 9, 'Potai Jeruk Sodap', 'Others', 'Sambal Tempoyak Jiwa Kacau', 12, 150, 0, '•Potai Pickles', '20210130050120.jpg'),
(108, 9, 'Sambal Hitam Menangis', 'Others', 'Sambal Tempoyak Jiwa Kacau', 14.5, 97, 0, '•Sambal Hitam', '20210130050302.jpg'),
(109, 9, 'Sambal Tempoyak Premium', 'Others', 'Sambal Tempoyak Jiwa Kacau', 25, 56, 0, '•Premium Quality', '20210130050442.jpg'),
(110, 9, 'Sambal Ijo', 'Others', 'Sambaleena', 12, 66, 0, '•Green Chillies Sambal', '20210130050657.jpg'),
(111, 10, 'Belacan Melayu', 'Others', 'Dapur Kayu Bonda Rozita', 3.5, 98, 0, '•Belacan melayu bersih dan halal', '20210130051148.jpg'),
(112, 10, 'Ikan Lunak', 'Others', 'Dapur Kayu Bonda Rozita', 28, 68, 10, '•Ikan Lunak Melayu', '20210130051335.jpg'),
(113, 10, 'Ikan Talapia', 'Others', 'Dapur Kayu Bonda Rozita', 23, 89, 0, '•Rencah Bakar Bonda Rozita', '20210130051443.jpg'),
(114, 10, 'Karipap Buncit& Cucur Badak', 'Others', 'Dapur Kayu Bonda Rozita', 10, 56, 0, '•Mix both karipap and cucur badak', '20210130051603.jpg'),
(115, 10, 'Asam Lada Hitam', 'Others', 'Dapur Kayu Bonda Rozita', 8.9, 78, 0, '•Spices', '20210130051915.jpg'),
(116, 10, 'Stew Lada hitam', 'Others', 'Dapur Kayu Bonda Rozita', 8.9, 76, 0, '•Stew Spices', '20210130052025.jpg'),
(117, 10, 'Smoked Beef', 'Others', 'Dapur Kayu Bonda Rozita', 36, 34, 0, '•Smooked Beef Kunuckle 42', '20210130052139.jpg'),
(118, 10, 'Air Asam Gula Aren', 'Others', 'Dapur Kayu Bonda Rozita', 9.5, 30, 13, '•Gula Aren', '20210130052305.jpg'),
(119, 11, 'Rempah Mandi Ayam', 'Others', 'Al-Hexa', 12, 26, 6, '•Rempah Arab', '20210130052755.jpg'),
(120, 11, 'Nasi Beriani Arab', 'Others', 'Al-Hexa', 18, 82, 5, '•Rempah Arab', '20210130052908.jpg'),
(121, 11, 'Salted Egg Sauce', 'Others', 'Hexa', 17.5, 21, 0, '•Salted Egg Sauce', '20210130053021.jpg'),
(122, 12, 'Gochujang', 'Others', 'Marimogo', 20, 3, 9, '•Freshly korean recipe', '20210130053441.jpg'),
(123, 12, 'Dazzling Danmuji', 'Others', 'Marimogo', 9.8, 65, 0, '•Danmuji', '20210130053556.jpg'),
(124, 12, 'Krunchi Kimchi', 'Others', 'Marimogo', 10, 4, 0, '•Cruchy Fresh Kimchi', '20210130053705.jpg'),
(125, 12, 'Topokkie Express', 'Others', 'Marimogo', 14.9, 54, 0, '•Topokkie ready to eat', '20210130053814.jpg'),
(133, 13, 'Baby Crunchy', 'Chocojar', 'ChocoLoco Frunchie', 5.9, 98, 0, '•Baby crunch chocojar', '20210130055417.jpg'),
(134, 13, 'Choco Crispy', 'Chocojar', 'ChocoLoco Frunchie', 11.8, 45, 0, '•Crunchy Chocojar', '20210130055544.jpg'),
(135, 13, 'Frunchie Chocojar', 'Chocojar', 'ChocoLoco Frunchie', 15, 54, 0, '•Frunchie Chocojar', '20210130055632.jpg'),
(136, 13, 'LMK Chocojar', 'Chocojar', 'ChocoLoco Frunchie', 21, 33, 3, '•The best seller chocojar', '20210130055752.jpg'),
(137, 15, 'Strawberry Shots', 'Beverage', 'Micasa', 10, 54, 0, '•Shake Well before drink', '20210130070352.jpg'),
(138, 15, 'Katira Duranny', 'Beverage', 'Zilky', 12, 43, 0, '•Katira+durian', '20210130070612.jpg'),
(139, 15, 'Sehat Brew', 'Beverage', 'Micassa', 3, 16, 0, '•Sehat Brew Macchiato', '20210130070852.jpg'),
(140, 15, 'Healthy Drinks', 'Beverage', 'Micasa', 2, 10, 0, '•Healthy Herbal Drinks', '20210130071024.jpg'),
(141, 15, 'Teh Tarik Karamel', 'Beverage', 'Blast Sugarbomb', 3.5, 45, 0, '•Teh Tarik Karamel Padu', '20210130071148.jpg'),
(142, 15, 'Teh Special', 'Beverage', 'Three Tea', 1.5, 45, 0, '•The Special Pandan &Caramel', '20210130071319.jpg'),
(143, 15, 'Cereal Milk', 'Beverage', 'Breakfast Club', 2.5, 14, 0, '•Healthy Breakfast Drink', '20210130071517.jpg'),
(144, 15, 'Combo Banana&Redberry Milk', 'Beverage', 'Micasa', 8, 10, 0, '•Homemade Strawberry Milk', '20210130071653.jpg'),
(145, 15, 'Greenade Juice', 'Beverage', 'Micasa', 5, 43, 0, 'Mix of apple ,guava,lemon', '20210130071811.jpg'),
(146, 15, 'Lemon Juice Detox', 'Beverage', 'Micasa', 6.4, 87, 0, '•Detox your body with lemon juice', '20210130071923.jpg'),
(147, 15, 'Air Katira Cik Selasih', 'Beverage', 'Micasa', 14, 28, 15, '•Katira+Selasih', '20210130072032.jpg'),
(148, 15, 'Selasih', 'Beverage', 'Micasa', 2.5, 23, 0, '•Selasih Drinks', '20210130072625.jpg'),
(149, 15, 'Bird Nest Drinks', 'Beverage', 'Micasa', 4.5, 25, 0, '•Bird Nest+goji berries', '20210130072802.jpg'),
(150, 15, 'Apple Smoothie', 'Beverage', 'Micasa', 2.5, 32, 10, '•Smoothie Fresh for you', '20210130072851.jpg'),
(151, 14, 'Dates And Banana', 'Beverage', 'Nilofa', 4.5, 46, 54, '•Dates+banana flavoured milk', '20210130073118.jpg'),
(152, 14, 'Susu Berperisa Pisang', 'Beverage', 'Nilofa', 4.5, 100, 0, '•Banana', '20210130073232.jpg'),
(153, 14, 'Durian Milk', 'Beverage', 'Nilofa', 4.5, 100, 0, '•Durian ', '20210130073420.jpg'),
(154, 10, 'Ice Tea Peach Mengkudu', 'Beverage', 'Jamu Ratu By Bonda Rozita', 3, 34, 0, '•Ice tea+peach mengkudu', '20210130073636.jpg'),
(155, 10, 'Chocolate Fiber Life', 'Beverage', 'Jamu Ratu By Bonda Rozita', 18, 50, 0, '•Mix oats+ostleta glucan,malt', '20210130073800.jpg'),
(156, 16, 'Yogurt Bites Figs', 'Fruit Snacks', 'Fruit Snack Malaysia', 3.5, 41, 2, '•Real Fruit,Guilt Free,No Added Sugar', '20210130075220.jpg'),
(157, 16, 'Yogurt Bites Passion Fruit', 'Fruit Snacks', 'Fruit Snack Malaysia', 3.5, 43, 0, '•Real Fruit,Guilt Free,No Added Sugar', '20210130075405.jpg'),
(158, 16, 'Yogurt Bites Mulberries', 'Fruit Snacks', 'Fruit Snack Malaysia', 3.5, 33, 10, '•Real Fruit,Guilt Free,No Added Sugar', '20210130075521.jpg'),
(159, 16, 'Yogurt Bites Gac Fruit', 'Fruit Snacks', 'Fruit Snack Malaysia', 3.5, 43, 0, '•Real Fruit,Guilt Free,No Added Sugar', '20210130075631.jpg'),
(160, 16, 'Jackfruit Chips', 'Fruit Snacks', 'Fruit Snack Malaysia', 5, 34, 0, '•Snack a more meaningful', '20210130075838.jpg'),
(161, 16, 'Kerepek Pisang ', 'Fruit Snacks', 'Frudees', 4.3, 34, 0, '•No preservative', '20210130080117.jpg'),
(162, 16, 'Kerepek Salak', 'Fruit Snacks', 'Frudees', 5.5, 76, 0, '•No preservative', '20210130080228.jpg'),
(163, 16, 'Coconut Chips Original', 'Fruit Snacks', 'Frudees', 5, 43, 0, '•original flavour', '20210130080433.jpg'),
(164, 16, 'Coconut Chips Honey Butter', 'Fruit Snacks', 'Frudees', 5, 34, 0, '•Honey Butter flavour', '20210130080556.jpg'),
(165, 16, 'Coconut Chips in cream', 'Fruit Snacks', 'Frudees', 6.5, 34, 0, '•Cream Flavour', '20210130080709.jpg'),
(166, 16, 'Dragon Fruit', 'Fruit Snacks', 'Osuda', 4, 50, 0, '•Freeze Dried ,Fruit Chips', '20210130080927.jpg'),
(167, 16, 'Banana Fruit', 'Fruit Snacks', 'Osuda', 4, 50, 0, '•Freeze Dried ,Fruit Chips', '20210130081019.jpg'),
(168, 16, 'Mangi Fruit', 'Fruit Snacks', 'Osuda', 5, 50, 0, '•Freeze Dried ,Fruit Chips', '20210130081132.jpg'),
(169, 16, 'Jack Fruit', 'Fruit Snacks', 'Osuda', 5, 15, 35, '•Freeze Dried ,Fruit Chips', '20210130081239.jpg'),
(170, 17, 'Homemad Triple Granola', 'Fruit Snacks', 'Homemade Fruit', 25, 56, 0, '•Triple mix Almond-berry,original,berry', '20210130081550.jpg'),
(171, 17, 'Kerepek Buah Ngaku', 'Fruit Snacks', 'Kudap-kudap', 8.5, 15, 0, '•Fruit Snacks', '20210130081701.jpg'),
(172, 17, 'Kerepek Mangga', 'Fruit Snacks', 'Homemade Fruit', 5.3, 44, 0, '•No preservative', '20210130081815.jpg'),
(173, 17, 'Tripe mix fruit snacks', 'Fruit Snacks', 'Homemade Fruit', 10, 23, 0, '•No preservative', '20210130081943.jpg'),
(174, 17, 'Honey JackFruit Chips', 'Fruit Snacks', 'Pakcik Chips', 6, 18, 0, '•No preservative', '20210130082058.jpg'),
(175, 17, 'Crispy Banana Cracker', 'Fruit Snacks', 'Pakcik Chips', 6, 54, 0, '•No preservative', '20210130082202.jpg'),
(176, 17, 'Banana Salai', 'Fruit Snacks', 'Puluts', 10, 15, 32, '•No preservative', '20210130082439.jpg'),
(177, 17, 'Pisang Salai', 'Fruit Snacks', 'TokMad', 7.8, 46, 10, '•No preservative', '20210130083427.jpg'),
(178, 6, 'Pandan Gula Melaka Snacks', 'Traditional Snacks', 'Artisan Kintry', 5.6, 78, 0, '•Delicious Traditional Food', '20210130084149.jpg'),
(179, 6, 'Salted Egg Yolk', 'Traditional Snacks', 'Artisan Kintry', 11.9, 2, 4, '•No preservative', '20210130084242.jpg'),
(180, 18, 'Kuih Sepit', 'Traditional Snacks', 'Produk Orang Kita', 12, 2, 32, '•Homemade', '20210130085008.jpg'),
(181, 18, 'Kuih Tiram', 'Traditional Snacks', 'Produk Orang Kita', 6.5, 33, 0, '•Homemade', '20210130085223.jpg'),
(182, 18, 'Kuih Loyang', 'Traditional Snacks', 'Produk Orang Kita', 10, 24, 0, '•Homemade', '20210130085325.jpg'),
(185, 18, 'Pegaga Yusriza', 'Traditional Snacks', 'Produk Orang Kita', 5, 12, 0, '•No preservative', '20210130085616.jpg'),
(186, 18, 'Tortilla Chips', 'Traditional Snacks', 'Raisha Crunchy', 5, 54, 0, '•No preservative', '20210130090307.jpg'),
(187, 18, 'Kerepek Tempe', 'Traditional Snacks', 'Jim', 7.8, 43, 0, '•No preservative', '20210130090419.jpg'),
(188, 18, 'Kerepek Bawang', 'Traditional Snacks', 'Produk Orang Kita', 6.7, 24, 0, '•No preservative', '20210130090506.jpg'),
(189, 18, 'Kacang Kuning', 'Traditional Snacks', 'Produk Orang Kita', 3.4, 76, 0, '•No preservative', '20210130090634.jpg'),
(190, 18, 'Kacang Tua', 'Traditional Snacks', 'Produk Orang Kita', 5, 34, 0, '•No preservative', '20210130090718.jpg'),
(191, 18, 'Rempeyek Spicy', 'Traditional Snacks', 'Produk Orang Kita', 12, 32, 0, '•No preservative', '20210130090901.jpg'),
(192, 18, 'Keropok Roda', 'Traditional Snacks', 'Produk Orang Kita', 3, 76, 0, '•No preservative', '20210130090942.jpg'),
(193, 18, 'Kerepek Sengkuang', 'Traditional Snacks', 'Produk Orang Kita', 12, 21, 0, '•No preservative', '20210130091031.jpg'),
(194, 18, 'Choco Chips', 'Traditional Snacks', 'Produk Orang Kita', 24, 54, 0, '•No preservative', '20210130091112.jpg'),
(195, 18, 'Spicy Salted Egg', 'Traditional Snacks', 'Produk Orang Kita', 15, 32, 0, '•No preservative', '20210130091237.jpg'),
(196, 19, 'Kerepek Anep', 'Traditional Snacks', 'Kerepek Anep', 10, 20, 34, '•The Best seller Kerepek', '20210130091355.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `seller`
--

CREATE TABLE `seller` (
  `s_id` int(11) NOT NULL,
  `s_store` varchar(250) NOT NULL,
  `s_phone` varchar(250) NOT NULL,
  `s_username` varchar(250) NOT NULL,
  `s_shopname` varchar(250) NOT NULL,
  `s_email` varchar(250) NOT NULL,
  `s_fname` varchar(250) NOT NULL,
  `s_lname` varchar(250) NOT NULL,
  `s_ic` varchar(250) NOT NULL,
  `s_companyaddress` varchar(250) NOT NULL,
  `s_city` varchar(250) NOT NULL,
  `s_postal` varchar(250) NOT NULL,
  `s_state` varchar(250) NOT NULL,
  `s_bankname` varchar(250) NOT NULL,
  `s_accname` varchar(250) NOT NULL,
  `s_accnumber` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `seller`
--

INSERT INTO `seller` (`s_id`, `s_store`, `s_phone`, `s_username`, `s_shopname`, `s_email`, `s_fname`, `s_lname`, `s_ic`, `s_companyaddress`, `s_city`, `s_postal`, `s_state`, `s_bankname`, `s_accname`, `s_accnumber`) VALUES
(4, 'Individual', '01133729831', 'pasteluxe_', 'Pasteluxe', 'ndeadina23@gmail.com', 'Nurul ', 'Hanis', '000228-08-0810', '3189,Bangunan AU', 'Bangi', '35690', 'Selangor', 'Bank Islam Malaysia Berhad', 'Nurul Hanis', '0809087624'),
(5, 'Company', '0 174181514', 'SignatureHealthy ', 'Signature Healthy Malaysia', 'signature@gmail.com', 'Vida ', 'Datuk Ali', '650123-08-0820', '3212 Jalan perindustrian baru', 'Klang', '009823', 'Selangor', 'Maybank Islamic Berhad', 'Maybank', '1800923243'),
(6, 'Individual', '05-4313277', 'artisan', 'Artisan Kintry Food Company', 'artisan@gmail.com', 'Dato ', 'Alif', '750123-03-0821', 'Maxim Building,Taman Perindustrian Sentul', 'Sentul', '43200', 'Federal Territory of Kuala Lumpur', 'Affin Bank Berhad', 'Aliff', '0098762453'),
(7, 'Company', '03-43256321', 'mokcun', 'Mokcun Malaysia', 'mokcun@gmail.com', 'Erma ', 'Fatima', '580124-01-0822', '452 Lot3, Jalan Klang Lama', 'Klang', '009823', 'Selangor', 'Maybank Banking Berhad', 'Mokcun', '2345637892'),
(9, 'Individual', '013-5638721', 'sambalJiwa', 'Sambal Tempoyak Jiwa Kacau', 'sambal@gmail.com', 'Hariz', 'Othman', '900301-01-0283', '454 Lot3, Jalan Klang Lama', 'Klang', '009823', 'Selangor', 'Maybank Banking Berhad', 'Hariz', '2134929310'),
(10, 'Company', '08-09321832', 'bondaRozita', 'Dapur Kayu Bonda Rozita', 'jrm@gmail.com', 'Rozita', 'Hali', '530901-08-0932', 'Rumah Hutan ,Jalan Lama', 'Batang Kali', '324321', 'Selangor', 'Maybank Islamic Berhad', 'Rozita', '12347554392'),
(11, 'Company', '011-1234567', 'hexafood', 'Hexa Food', 'hexa@gmail.com', 'Nur ', 'Hafizah', '000223-08-0820', '3177 jalan tanjung ', 'SUNGKAI', '35600', 'Perak', 'Bank Islam Malaysia Berhad', 'Hafizah', '0806123497'),
(12, 'Company', '08-9327432', 'marimogo', 'Marimogo', 'marimogohq@gmail.com', 'Nabilatul', 'Widad', '001021-08-0840', '3820,Jalan Mydin Baru', 'Parit Buntar', '356700', 'Perak', 'Bank Islam Malaysia Berhad', 'Nabilatul', '0809763524'),
(13, 'Company', '012-4317632', 'chocoloco', 'ChocoLoco Frunchie', 'chocoloco@gmail.com', 'Ameera', 'Khan', '000208-03-0890', 'Bangunan Naelofar Prima,TTDI', 'TTD', '43200', 'Federal Territory of Kuala Lumpur', 'Maybank Banking Berhad', 'Ammera', '1581765432'),
(14, 'Company', '014-123456', 'nilofa', 'Nilofa Group', 'nilofahq@gmail.com', 'Noor ', 'Neelofa', '890224-03-1292', 'Bangunan Naelofar Prima,TTDI', 'TTD', '43200', 'Federal Territory of Kuala Lumpur', 'Maybank Banking Berhad', 'Neelofa', '1234567683'),
(15, 'Individual', '018-9876345', 'micasa', 'Micasa', 'micasa@gmail.com', 'Mika', 'Mikail', '960910-04-1243', 'Taman Urban jaya,', 'Cyberjaya', '42354', 'Selangor', 'Maybank Banking Berhad', 'Mikail', '2345763891'),
(16, 'Company', '05-5439230', 'FruitSnack', 'Fruit Snacks Malaysia', 'fruitsnack@gmail.com', 'Luqman ', 'Hakim', '000501-08-1293', 'Fruit Snacks Sdn Bhd Free Industrial Zone 1 ', 'Bayan Lepas ', '11900 ', 'Pulau Pinang', 'Maybank Banking Berhad', 'Luqman', '4563789210'),
(17, 'Individual', '013-4823721', 'homemadeFruit', 'Homeade Fruit Snacks', 'homemade@gmail.com', 'Adriana', 'Sofia', '00910-09-1232', '35A Damansara Utama', 'Damansara', '023453', 'Selangor', 'Bank Islam Malaysia Berhad', 'Adriana', '08179324562'),
(18, 'Individual', '017-4539381', 'ProdukKita', 'Produk Orang Kita', 'produk@gmail.com', 'Rogaya', 'Hamid', '560109-03-1292', 'Bangunan Cmart ', 'Arau', '02600', 'Perlis', 'CIMB Bank Berhad', 'Gayaa', '1244682731'),
(19, 'Individual', '018-4327632', 'kerepekanep', 'Kerepek Anep', 'anep@gmail.com', 'Mohammad', 'Hanif', '970610-04-1998', 'Jalan tanjung dawai', 'Arau', '02600', 'Perlis', 'Ambank (M) Berhad', 'hanif', '6523789201');

-- --------------------------------------------------------

--
-- Table structure for table `trolley`
--

CREATE TABLE `trolley` (
  `t_id` int(11) NOT NULL,
  `p_id` int(11) NOT NULL,
  `c_id` int(11) NOT NULL,
  `t_quantity` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `trolley`
--

INSERT INTO `trolley` (`t_id`, `p_id`, `c_id`, `t_quantity`) VALUES
(13, 21, 1, 1),
(66, 53, 5, 1);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `type` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `password`, `type`) VALUES
(1, 'admin', 'admin', 'admin'),
(21, 'pasteluxe_', '123', 'seller'),
(22, 'SignatureHealthy ', '123', 'seller'),
(23, 'artisan', '123', 'seller'),
(24, 'mokcun', '123', 'seller'),
(26, 'sambalJiwa', '123', 'seller'),
(27, 'bondaRozita', '123', 'seller'),
(28, 'hexafood', '123', 'seller'),
(29, 'marimogo', '123', 'seller'),
(30, 'chocoloco', '123', 'seller'),
(31, 'nilofa', '123', 'seller'),
(32, 'micasa', '123', 'seller'),
(33, 'FruitSnack', '123', 'seller'),
(34, 'homemadeFruit', '123', 'seller'),
(35, 'ProdukKita', '123', 'seller'),
(36, 'kerepekanep', '123', 'seller'),
(37, 'pijaheyo', '123', 'customer'),
(38, 'farahelly', '123', 'customer'),
(39, 'serawr', '123', 'customer'),
(40, 'skinlah', '123', 'customer');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `customer`
--
ALTER TABLE `customer`
  ADD PRIMARY KEY (`c_id`);

--
-- Indexes for table `orderproduct`
--
ALTER TABLE `orderproduct`
  ADD PRIMARY KEY (`o_id`);

--
-- Indexes for table `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`p_id`);

--
-- Indexes for table `seller`
--
ALTER TABLE `seller`
  ADD PRIMARY KEY (`s_id`);

--
-- Indexes for table `trolley`
--
ALTER TABLE `trolley`
  ADD PRIMARY KEY (`t_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `customer`
--
ALTER TABLE `customer`
  MODIFY `c_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `orderproduct`
--
ALTER TABLE `orderproduct`
  MODIFY `o_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=84;

--
-- AUTO_INCREMENT for table `product`
--
ALTER TABLE `product`
  MODIFY `p_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=208;

--
-- AUTO_INCREMENT for table `seller`
--
ALTER TABLE `seller`
  MODIFY `s_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;

--
-- AUTO_INCREMENT for table `trolley`
--
ALTER TABLE `trolley`
  MODIFY `t_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=125;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=52;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
