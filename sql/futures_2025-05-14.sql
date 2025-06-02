-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 14, 2025 at 07:42 PM
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
-- Database: `futures`
--

-- --------------------------------------------------------

--
-- Table structure for table `administration`
--

CREATE TABLE `administration` (
  `id` int(11) NOT NULL,
  `name` varchar(100) DEFAULT NULL,
  `contact` varchar(100) DEFAULT NULL,
  `email` varchar(100) DEFAULT NULL,
  `password` varchar(100) DEFAULT NULL,
  `type` varchar(100) DEFAULT NULL,
  `verify` int(11) DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `administration`
--

INSERT INTO `administration` (`id`, `name`, `contact`, `email`, `password`, `type`, `verify`) VALUES
(1, 'admin', '8838825568', 'admin@gmail.com', '12345', 'admin', 1);

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `id` int(11) NOT NULL,
  `category_name` varchar(100) NOT NULL,
  `slug_name` varchar(100) DEFAULT NULL,
  `category_image` varchar(300) DEFAULT NULL,
  `status` int(11) NOT NULL DEFAULT 1,
  `date_created` date NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `category_name`, `slug_name`, `category_image`, `status`, `date_created`) VALUES
(6, 'Scanners', 'scanners', '1722963671_a.webp', 1, '2024-08-06'),
(5, 'Printer and MFD', 'printer_and_mfd', '1722963626_a.webp', 1, '2024-08-06'),
(11, 'Projector', 'projector', '1723733977_a.webp', 1, '2024-08-15');

-- --------------------------------------------------------

--
-- Table structure for table `customers`
--

CREATE TABLE `customers` (
  `id` int(11) NOT NULL,
  `name` varchar(100) DEFAULT NULL,
  `contact` varchar(100) DEFAULT NULL,
  `email` varchar(100) DEFAULT NULL,
  `address` text DEFAULT NULL,
  `department_id` int(11) NOT NULL,
  `sec_contact` varchar(100) DEFAULT NULL,
  `due` int(11) DEFAULT NULL,
  `status` int(11) DEFAULT 1,
  `date` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `customers`
--

INSERT INTO `customers` (`id`, `name`, `contact`, `email`, `address`, `department_id`, `sec_contact`, `due`, `status`, `date`) VALUES
(3, 'Arun Kumar a', '8897889899', 'arunkumar@gmail.com', 'dindugal', 0, '', 0, 1, '30-09-2020'),
(5, 'vijay', '9999999999', 'virtualtech1210@gmail.com', 'salem', 0, '8898898989', 0, 1, '30-09-2020'),
(8, 'Sham', '7787797789', 'sham@gmail.com', 'coimbatore', 0, '', 0, 1, '30-09-2020'),
(9, 'Nithin', '8787878787', 'nithinfurie17@gmail.com', 'check', 0, '', 0, 1, '05-02-2025'),
(10, 'ram', '8787878787', 'nithinfurie17@gmail.com', 'check', 0, '', 0, 1, '05-02-2025'),
(11, 'kiran', '8787878787', 'nithinfurie17@gmail.com', 'check', 0, '', 0, 1, '05-02-2025'),
(12, 'tovino', '8787878787', 'nithinfurie17@gmail.com', 'check', 0, '', 0, 1, '05-02-2025'),
(13, 'tovirithickno', '8787878787', 'nithinfurie17@gmail.com', 'check', 0, '', 0, 0, '05-02-2025'),
(14, 'sam', '8787878787', 'nithinfurie17@gmail.com', 'check', 0, '', 0, 0, '05-02-2025'),
(15, 'vivk', '8787878787', 'nithinfurie17@gmail.com', 'check', 0, '', 0, 0, '05-02-2025'),
(16, 'fred', '8787878787', 'nithinfurie17@gmail.com', 'check', 0, '', 0, 0, '05-02-2025'),
(17, 'check', '7876787678', 'nithinmigo1@gamil.com', 'c', 0, '', 0, 0, '05-02-2025'),
(18, 'kiran', '7876787678', 'nithinmigo1@gmail.com', 'chk', 0, '', 0, 0, '05-02-2025'),
(19, 'test', 'fdferfre', 'admin@gmail.com', 'erfe', 0, '', 0, 0, '15-02-2025'),
(20, 'test', '8976543', 'avarvind3765@gmail.com', 'w4f4wg', 0, '', 0, 0, '20-02-2025'),
(24, 'er4gfe4', '9908890989', 'e5ge5', 'e5g5eh', 0, '', 0, 1, '27-02-2025'),
(25, 'ari', '8976543', 'admin@gmail.com', 're3443', 2, '987654321', 39, 1, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `customer_products`
--

CREATE TABLE `customer_products` (
  `id` int(11) NOT NULL,
  `customer_id` int(11) NOT NULL,
  `product_name` varchar(255) NOT NULL,
  `installation_date` date NOT NULL,
  `installed_by` varchar(255) NOT NULL,
  `warranty_months` int(11) NOT NULL,
  `installed_on` date NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `customer_products`
--

INSERT INTO `customer_products` (`id`, `customer_id`, `product_name`, `installation_date`, `installed_by`, `warranty_months`, `installed_on`, `created_at`) VALUES
(1, 8, 'Boat Rockerz 255 ANC Raven Black', '2025-05-05', 'test', 4, '2025-05-12', '2025-05-12 18:14:39'),
(2, 8, 'sony', '2025-05-07', 'ewt', 7, '2025-05-12', '2025-05-12 18:15:23'),
(3, 3, 'xiaomi', '2025-05-01', 'ewt', 7, '2025-05-12', '2025-05-12 18:16:04'),
(4, 3, 'Boat Rockerz 255 ANC Raven Black', '2025-05-11', 'test', 58, '2025-05-14', '2025-05-14 15:32:19'),
(6, 3, 'mouse', '2025-05-06', 'gud', 23, '2025-05-14', '2025-05-14 17:39:02');

-- --------------------------------------------------------

--
-- Table structure for table `departments`
--

CREATE TABLE `departments` (
  `id` int(11) NOT NULL,
  `name` varchar(200) NOT NULL,
  `status` int(11) NOT NULL DEFAULT 1,
  `date` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `departments`
--

INSERT INTO `departments` (`id`, `name`, `status`, `date`) VALUES
(1, 'Defence', 1, '02-02-2025'),
(2, 'Education-test', 1, '02-02-2025'),
(3, 'IT Sector', 1, '02-02-2025');

-- --------------------------------------------------------

--
-- Table structure for table `employee`
--

CREATE TABLE `employee` (
  `id` int(11) NOT NULL,
  `name` varchar(100) DEFAULT NULL,
  `contact` varchar(100) DEFAULT NULL,
  `address` text DEFAULT NULL,
  `email` varchar(100) DEFAULT NULL,
  `sec_contact` varchar(100) DEFAULT NULL,
  `due` int(11) DEFAULT NULL,
  `department_id` int(11) NOT NULL,
  `status` int(11) DEFAULT 1,
  `date` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `employee`
--

INSERT INTO `employee` (`id`, `name`, `contact`, `address`, `email`, `sec_contact`, `due`, `department_id`, `status`, `date`) VALUES
(1, 'Rajakimng', '9908890989', 'salem', 'raja@gmail.com', '', 0, 1, 1, '30-09-2020'),
(2, 'shiva-dude', '77888877888', 'erode ila', 'shiva@gmail.com', '', 0, 1, 1, '30-09-2020'),
(4, 'Barath', '8989898989', 'palakkad', 'barath@gmail.com', '9099090909', 0, 3, 1, '30-09-2020'),
(5, 'Raja mass', '9908890989', 'salem', 'raja@gmail.com', '', 0, 2, 0, '02-02-2025'),
(6, 'vinoth', '8976543', 'tyr5u65u', 'admin@gmail.com', '', 0, 1, 0, NULL),
(7, 'vinoth', '77888877888', '4revg4v', 'admin@gmail.com', '987654321', 0, 1, 1, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `erp_products`
--

CREATE TABLE `erp_products` (
  `id` int(11) NOT NULL,
  `name` varchar(111) NOT NULL,
  `status` int(11) NOT NULL DEFAULT 1,
  `date` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `erp_products`
--

INSERT INTO `erp_products` (`id`, `name`, `status`, `date`) VALUES
(1, 'scanner', 1, '03-02-2025'),
(2, 'mouse', 1, '03-03-2025');

-- --------------------------------------------------------

--
-- Table structure for table `gst_setting`
--

CREATE TABLE `gst_setting` (
  `id` int(11) NOT NULL,
  `gst_type` varchar(100) DEFAULT NULL,
  `gst_percent` varchar(100) DEFAULT NULL,
  `status` int(11) DEFAULT NULL,
  `date_modify` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `gst_setting`
--

INSERT INTO `gst_setting` (`id`, `gst_type`, `gst_percent`, `status`, `date_modify`) VALUES
(1, 'Regular', '18', 1, NULL),
(2, 'Composition', '1', 1, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `invoices`
--

CREATE TABLE `invoices` (
  `id` int(11) NOT NULL,
  `customer_id` int(11) NOT NULL,
  `subtotal` decimal(10,2) NOT NULL,
  `tax_amount` decimal(5,2) NOT NULL,
  `grand_total` decimal(10,2) NOT NULL,
  `invoice_date` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `invoices`
--

INSERT INTO `invoices` (`id`, `customer_id`, `subtotal`, `tax_amount`, `grand_total`, `invoice_date`) VALUES
(1, 9, 0.00, 2.00, 0.00, '2025-04-05 11:28:58'),
(2, 9, 276.00, 0.00, 276.00, '2025-04-05 11:29:42'),
(3, 9, 46.00, 10.00, 50.60, '2025-04-05 11:49:11'),
(4, 9, 46.00, 10.00, 50.60, '2025-04-05 11:54:28'),
(5, 10, 270.00, 120.00, 594.00, '2025-04-05 18:50:44'),
(6, 8, 147.00, 10.00, 161.70, '2025-04-06 17:53:18'),
(7, 9, 4000.00, 20.00, 4800.00, '2025-04-06 17:56:15');

-- --------------------------------------------------------

--
-- Table structure for table `invoice_items`
--

CREATE TABLE `invoice_items` (
  `id` int(11) NOT NULL,
  `invoice_id` int(11) NOT NULL,
  `item_type` enum('product','spare') NOT NULL,
  `item_id` int(11) NOT NULL,
  `item_code` varchar(50) NOT NULL,
  `quantity` int(11) NOT NULL,
  `unit_price` decimal(10,2) NOT NULL,
  `description` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `invoice_items`
--

INSERT INTO `invoice_items` (`id`, `invoice_id`, `item_type`, `item_id`, `item_code`, `quantity`, `unit_price`, `description`) VALUES
(1, 1, 'product', 1, '', 0, 23.00, 'test'),
(2, 2, 'product', 2, '2', 23, 12.00, 'rgredh'),
(3, 3, 'spare', 1, 'GS1234', 2, 23.00, 'rtyui'),
(4, 4, 'spare', 1, 'GS1234', 2, 23.00, 'ssgesgh'),
(5, 5, 'product', 1, '1', 2, 23.00, 'rf'),
(6, 5, 'spare', 1, 'GS1234', 4, 56.00, 'df'),
(7, 6, 'spare', 1, 'GS1234', 3, 45.00, ''),
(8, 6, 'product', 1, '1', 3, 4.00, 'ddtsex'),
(9, 7, 'product', 1, '1', 1, 1000.00, 'test'),
(10, 7, 'spare', 2, 'GS12345', 2, 1500.00, 'test spare');

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

CREATE TABLE `login` (
  `admin_id` int(11) NOT NULL,
  `username` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `login`
--

INSERT INTO `login` (`admin_id`, `username`, `password`) VALUES
(1, 'admin@gmail.com', 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `privacy`
--

CREATE TABLE `privacy` (
  `id` int(11) NOT NULL,
  `privacy` text DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `privacy`
--

INSERT INTO `privacy` (`id`, `privacy`) VALUES
(1, '<p>privacy</p>\r\n');

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` int(11) NOT NULL,
  `category_id` int(11) NOT NULL,
  `subcategory_id` int(11) DEFAULT NULL,
  `product_name` varchar(100) NOT NULL,
  `product_image` varchar(300) NOT NULL,
  `price` int(11) DEFAULT NULL,
  `discound` int(11) DEFAULT NULL,
  `status` int(11) NOT NULL DEFAULT 1,
  `date_created` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `category_id`, `subcategory_id`, `product_name`, `product_image`, `price`, `discound`, `status`, `date_created`) VALUES
(1, 5, NULL, 'Sharp BP 30M35T', '1722964678_a.jpg', 28000, 5, 1, '2024-08-06'),
(2, 5, NULL, 'Sharp BP 30M31T', '1722965251_a.webp', 18000, 0, 1, '2024-08-06'),
(3, 6, NULL, 'Epson WorkForce DS 870', '1722965293_a.webp', 1200, 0, 1, '2024-08-06'),
(7, 11, NULL, 'Epson EB-972 XGA 3LCD', '1723734000_a.webp', 28000, 5, 1, '2024-08-15'),
(8, 11, NULL, 'Epson WorkForce DS 870', '1723734038_a.webp', 18000, 5, 1, '2024-08-15');

-- --------------------------------------------------------

--
-- Table structure for table `profile_setting`
--

CREATE TABLE `profile_setting` (
  `id` int(11) NOT NULL,
  `company_name` varchar(100) DEFAULT NULL,
  `img` varchar(100) DEFAULT NULL,
  `contact` varchar(100) DEFAULT NULL,
  `email` varchar(100) DEFAULT NULL,
  `sec_contact` varchar(100) DEFAULT NULL,
  `address` text DEFAULT NULL,
  `gstin` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `profile_setting`
--

INSERT INTO `profile_setting` (`id`, `company_name`, `img`, `contact`, `email`, `sec_contact`, `address`, `gstin`) VALUES
(1, 'Futures ERP', NULL, '8838825567', 'pingifinit@gmail.com', '', '        saravanapatti ,coimbatore   - 641 101       ', '33THURIU78DJU');

-- --------------------------------------------------------

--
-- Table structure for table `smtp`
--

CREATE TABLE `smtp` (
  `id` int(11) NOT NULL,
  `status` int(11) NOT NULL,
  `port` varchar(100) NOT NULL,
  `host` varchar(100) NOT NULL,
  `user` varchar(100) NOT NULL,
  `pass` varchar(100) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `smtp`
--

INSERT INTO `smtp` (`id`, `status`, `port`, `host`, `user`, `pass`) VALUES
(1, 1, 'port', 'smtp_host', 'user', 'password');

-- --------------------------------------------------------

--
-- Table structure for table `spares`
--

CREATE TABLE `spares` (
  `id` int(11) NOT NULL,
  `spare_name` varchar(100) NOT NULL,
  `spare_code` varchar(100) NOT NULL,
  `spare_type` varchar(100) NOT NULL,
  `status` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `spares`
--

INSERT INTO `spares` (`id`, `spare_name`, `spare_code`, `spare_type`, `status`) VALUES
(1, 'test-spare', 'GS1234', 'demd', 1),
(2, 'test-spare-1', 'GS12345', 'new', 1),
(3, 'test-spare-2', 'GS12345', 'prd', 1);

-- --------------------------------------------------------

--
-- Table structure for table `subscribe`
--

CREATE TABLE `subscribe` (
  `id` int(11) NOT NULL,
  `email` varchar(100) DEFAULT NULL,
  `date` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `subscribe`
--

INSERT INTO `subscribe` (`id`, `email`, `date`) VALUES
(4, 'pingifinit@gmail.com', '08-10-2020'),
(5, 'check@gmail.com', '09-10-2020'),
(6, 'nithinfurie17@gmail.com', '22-10-2020'),
(7, 'virtualtech1210@gmail.com', '01-11-2020'),
(8, 'nithin', '02-11-2020'),
(9, 'nithinfurie17@gmail.com', '02-11-2020'),
(10, 'nithinfurie17@gmail.com', '02-11-2020'),
(11, 'nithinfurie17@gmail.com', '02-11-2020'),
(12, 'nithinfurie17@gmail.com', '02-11-2020'),
(13, 'pingifinit@gmail.com', '02-11-2020'),
(14, 'pingifinit@gmail.com', '02-11-2020'),
(15, 'nithinfurie17@gmail.com', '02-11-2020'),
(16, 'nithinfurie17@gmail.com', '02-11-2020'),
(17, 'nithinmigo1@gmail.com', '02-11-2020'),
(18, 'nithinfurie17@gmail.com', '02-11-2020'),
(19, 'nithinfurie17@gmail.com', '02-11-2020'),
(20, 'nithinmigo1@gmail.com', '02-11-2020'),
(21, 'nithinmigo1@gmail.com', '05-11-2020'),
(22, 'prodigynavin@gmail.com', '19-11-2020'),
(23, 'balasubramanianmini@gmail.com', '19-11-2020');

-- --------------------------------------------------------

--
-- Table structure for table `sub_categories`
--

CREATE TABLE `sub_categories` (
  `id` int(11) NOT NULL,
  `category_id` int(11) NOT NULL,
  `sub_category_name` varchar(100) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `user_id` varchar(100) DEFAULT NULL,
  `fname` varchar(100) NOT NULL,
  `lname` varchar(100) DEFAULT NULL,
  `email` varchar(100) NOT NULL,
  `contact` bigint(11) DEFAULT NULL,
  `password` varchar(100) NOT NULL,
  `img` varchar(100) DEFAULT NULL,
  `status` int(11) DEFAULT NULL,
  `posts` int(11) DEFAULT NULL,
  `visits` int(11) DEFAULT NULL,
  `block` int(11) DEFAULT NULL,
  `date_created` varchar(100) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `user_id`, `fname`, `lname`, `email`, `contact`, `password`, `img`, `status`, `posts`, `visits`, `block`, `date_created`) VALUES
(4, NULL, 'Nithin', 'Balasubramanian', 'nithinmigo1@gmail.com', 8838825568, 'b818082dfcaf5c93f7bf612fa425b9dd2267b3bf', '1602312869_user.jpg', 1, NULL, NULL, NULL, '2020-08-08'),
(5, NULL, 'Nithin', 'Furie', 'nithinfurie17@gmail.com', 8989898989, '2001f505d0dc4d6ad305ef11efa2aa8cccbeafaa', NULL, 1, NULL, NULL, NULL, '2020-08-08'),
(6, NULL, 'ammu', 'ammu', 'varginaslam123@gmail.com', 9443740424, 'f2bb5edfd595b13fa3330ce048858b5332ed05b3', NULL, 1, NULL, NULL, NULL, '2020-08-10'),
(7, NULL, 'vargina', 'rani', 'varginaslam123@gmail.com', 9443740424, '40bd001563085fc35165329ea1ff5c5ecbdbbeef', NULL, 1, NULL, NULL, NULL, '2020-08-13');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `customers`
--
ALTER TABLE `customers`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `customer_products`
--
ALTER TABLE `customer_products`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `departments`
--
ALTER TABLE `departments`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `employee`
--
ALTER TABLE `employee`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `erp_products`
--
ALTER TABLE `erp_products`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `invoices`
--
ALTER TABLE `invoices`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `invoice_items`
--
ALTER TABLE `invoice_items`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `login`
--
ALTER TABLE `login`
  ADD PRIMARY KEY (`admin_id`);

--
-- Indexes for table `privacy`
--
ALTER TABLE `privacy`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `profile_setting`
--
ALTER TABLE `profile_setting`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `smtp`
--
ALTER TABLE `smtp`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `spares`
--
ALTER TABLE `spares`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `subscribe`
--
ALTER TABLE `subscribe`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sub_categories`
--
ALTER TABLE `sub_categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `customers`
--
ALTER TABLE `customers`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT for table `customer_products`
--
ALTER TABLE `customer_products`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `departments`
--
ALTER TABLE `departments`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `employee`
--
ALTER TABLE `employee`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `erp_products`
--
ALTER TABLE `erp_products`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `invoices`
--
ALTER TABLE `invoices`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `invoice_items`
--
ALTER TABLE `invoice_items`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `login`
--
ALTER TABLE `login`
  MODIFY `admin_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `profile_setting`
--
ALTER TABLE `profile_setting`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `spares`
--
ALTER TABLE `spares`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `subscribe`
--
ALTER TABLE `subscribe`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
