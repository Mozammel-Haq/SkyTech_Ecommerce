-- phpMyAdmin SQL Dump
-- version 5.2.3
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Nov 15, 2025 at 05:42 PM
-- Server version: 8.4.3
-- PHP Version: 8.3.26

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `skytech`
--

-- --------------------------------------------------------

--
-- Table structure for table `bank_accounts`
--

CREATE TABLE `bank_accounts` (
  `id` int NOT NULL,
  `bank_name` varchar(255) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `account_number` varchar(50) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `created_at` datetime DEFAULT CURRENT_TIMESTAMP,
  `updated_at` datetime DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `brands`
--

CREATE TABLE `brands` (
  `id` int NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `description` text COLLATE utf8mb4_general_ci,
  `created_at` datetime DEFAULT CURRENT_TIMESTAMP,
  `updated_at` datetime DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `brands`
--

INSERT INTO `brands` (`id`, `name`, `description`, `created_at`, `updated_at`) VALUES
(1, 'Walton', 'Bangladeshi electronics brand', '2025-10-21 09:40:09', '2025-10-21 09:40:09'),
(2, 'Samsung', 'Smartphones, TVs, and appliances', '2025-10-21 09:40:09', '2025-10-21 09:40:09'),
(3, 'Apple', 'Premium devices and accessories', '2025-10-21 09:40:09', '2025-10-21 09:40:09'),
(4, 'HP', 'Laptops and printers', '2025-10-21 09:40:09', '2025-10-21 09:40:09'),
(5, 'Asus', 'Gaming and productivity laptops', '2025-10-21 09:40:09', '2025-10-21 09:40:09'),
(6, 'Acer', 'Budget laptops and monitors', '2025-10-21 09:40:09', '2025-10-21 09:40:09'),
(7, 'Logitech', 'Computer peripherals', '2025-10-21 09:40:09', '2025-10-21 09:40:09'),
(8, 'Xiaomi', 'Affordable smart devices', '2025-10-21 09:40:09', '2025-10-21 09:40:09'),
(9, 'Realme', 'Smartphones and IoT', '2025-10-21 09:40:09', '2025-10-21 09:40:09'),
(10, 'Dell', 'Computers and displays', '2025-10-21 09:40:09', '2025-10-21 09:40:09'),
(11, 'Canon', 'Cameras and printers', '2025-10-21 09:40:09', '2025-10-21 09:40:09'),
(12, 'Lenovo', 'Laptops and tablets', '2025-10-21 09:40:09', '2025-10-21 09:40:09'),
(13, 'OnePlus', 'Smartphones and accessories', '2025-10-21 09:40:09', '2025-10-21 09:40:09'),
(14, 'Sony', 'Audio and gaming devices', '2025-10-21 09:40:09', '2025-10-21 09:40:09'),
(15, 'Huawei', 'Smartphones and network equipment', '2025-10-21 09:40:09', '2025-10-21 09:40:09'),
(16, 'Corsair', 'Gaming gear and components', '2025-10-21 09:40:09', '2025-10-21 09:40:09'),
(17, 'Gigabyte', 'Motherboards and GPUs', '2025-10-21 09:40:09', '2025-10-21 09:40:09'),
(18, 'MSI', 'Gaming laptops and components', '2025-10-21 09:40:09', '2025-10-21 09:40:09'),
(19, 'TP-Link', 'Routers and network gear', '2025-10-21 09:40:09', '2025-10-21 09:40:09'),
(20, 'Intel', 'Processors and components', '2025-10-21 09:40:09', '2025-10-21 09:40:09');

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `id` int NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `description` text COLLATE utf8mb4_general_ci,
  `image_path` varchar(255) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `created_at` datetime DEFAULT CURRENT_TIMESTAMP,
  `updated_at` datetime DEFAULT CURRENT_TIMESTAMP,
  `status` tinyint(1) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `name`, `description`, `image_path`, `created_at`, `updated_at`, `status`) VALUES
(1, 'Smartphones', 'Latest Android and iOS phones', 'product-01.jpg', '2025-10-21 09:40:52', '2025-10-21 09:40:52', 1),
(2, 'Laptops', 'Personal and gaming laptops', 'product-08.jpg', '2025-10-21 09:40:52', '2025-10-21 09:40:52', 1),
(3, 'Desktops', 'Office and gaming desktops', 'email-attach-02.jpg', '2025-10-21 09:40:52', '2025-10-21 09:40:52', 1),
(4, 'Computer Accessories', 'Keyboards, mice, etc.', 'img-03.jpg', '2025-10-21 09:40:52', '2025-10-21 09:40:52', 1),
(5, 'Networking', 'Routers, switches, modems', 'product-10.jpg', '2025-10-21 09:40:52', '2025-10-21 09:40:52', NULL),
(6, 'Storage', 'SSDs, HDDs, memory cards', 'product-10.jpg', '2025-10-21 09:40:52', '2025-10-21 09:40:52', NULL),
(7, 'Audio', 'Headphones, speakers', 'product-07.jpg', '2025-10-21 09:40:52', '2025-10-21 09:40:52', NULL),
(8, 'Smart Gadgets', 'Watches, fitness bands', 'product-09.jpg', '2025-10-21 09:40:52', '2025-10-21 09:40:52', NULL),
(9, 'Printers', 'Inkjet and laser printers', 'product-02.jpg', '2025-10-21 09:40:52', '2025-10-21 09:40:52', NULL),
(10, 'Components', 'Processors, GPUs, RAM', 'product-10.jpg', '2025-10-21 09:40:52', '2025-10-21 09:40:52', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `contact_messages`
--

CREATE TABLE `contact_messages` (
  `id` int NOT NULL,
  `customer_id` int DEFAULT NULL,
  `subject` varchar(255) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `message` text COLLATE utf8mb4_general_ci,
  `created_at` datetime DEFAULT CURRENT_TIMESTAMP,
  `updated_at` datetime DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `currencies`
--

CREATE TABLE `currencies` (
  `id` int NOT NULL,
  `name` varchar(50) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `code` varchar(10) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `symbol` varchar(10) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `created_at` datetime DEFAULT CURRENT_TIMESTAMP,
  `updated_at` datetime DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `customers`
--

CREATE TABLE `customers` (
  `id` int NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `email` varchar(255) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `phone` varchar(50) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `photo` varchar(255) COLLATE utf8mb4_general_ci NOT NULL,
  `address` varchar(255) COLLATE utf8mb4_general_ci NOT NULL,
  `status` varchar(255) COLLATE utf8mb4_general_ci NOT NULL,
  `created_at` datetime DEFAULT CURRENT_TIMESTAMP,
  `updated_at` datetime DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `customers`
--

INSERT INTO `customers` (`id`, `name`, `email`, `phone`, `photo`, `address`, `status`, `created_at`, `updated_at`) VALUES
(1, 'Rakib Hasan', 'rakib@gmail.com', '01711000111', 'avatar-01.jpg', 'Mirpur, Dhaka', 'Active', '2025-10-21 09:43:57', '2025-10-21 09:43:57'),
(2, 'Sadia Rahman', 'sadia@gmail.com', '01711000222', 'avatar-02.jpg', 'Uttara, Dhaka', 'Active', '2025-10-21 09:43:57', '2025-10-21 09:43:57'),
(3, 'Ahsan Kabir', 'ahsan@gmail.com', '01711000333', 'avatar-03.jpg', 'Chittagong', 'Active', '2025-10-21 09:43:57', '2025-10-21 09:43:57'),
(4, 'Nusrat Jahan', 'nusrat@gmail.com', '01711000444', 'avatar-04.jpg', 'Rajshahi', 'Active', '2025-10-21 09:43:57', '2025-10-21 09:43:57'),
(5, 'Arif Chowdhury', 'arif@gmail.com', '01711000555', 'avatar-05.jpg', 'Sylhet', 'Inactive', '2025-10-21 09:43:57', '2025-10-21 09:43:57');

-- --------------------------------------------------------

--
-- Table structure for table `customer_addresses`
--

CREATE TABLE `customer_addresses` (
  `id` int NOT NULL,
  `customer_id` int NOT NULL,
  `shipping_address` varchar(255) COLLATE utf8mb4_general_ci NOT NULL,
  `billing_address` varchar(255) COLLATE utf8mb4_general_ci NOT NULL,
  `created_at` datetime DEFAULT CURRENT_TIMESTAMP,
  `updated_at` datetime DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `discount_types`
--

CREATE TABLE `discount_types` (
  `id` int NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_general_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `expenses`
--

CREATE TABLE `expenses` (
  `id` int NOT NULL,
  `amount` decimal(10,2) DEFAULT NULL,
  `category` varchar(255) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `expense_date` datetime DEFAULT CURRENT_TIMESTAMP,
  `created_at` datetime DEFAULT CURRENT_TIMESTAMP,
  `updated_at` datetime DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `expenses`
--

INSERT INTO `expenses` (`id`, `amount`, `category`, `expense_date`, `created_at`, `updated_at`) VALUES
(1, 25000.00, 'Inventory Purchase', '2025-10-21 09:47:37', '2025-10-21 09:47:37', '2025-10-21 09:47:37'),
(2, 5000.00, 'Office Supplies', '2025-10-21 09:47:37', '2025-10-21 09:47:37', '2025-10-21 09:47:37'),
(3, 10000.00, 'Marketing', '2025-10-21 09:47:37', '2025-10-21 09:47:37', '2025-10-21 09:47:37'),
(4, 7000.00, 'Utility Bills', '2025-10-21 09:47:37', '2025-10-21 09:47:37', '2025-10-21 09:47:37');

-- --------------------------------------------------------

--
-- Table structure for table `incomes`
--

CREATE TABLE `incomes` (
  `id` int NOT NULL,
  `amount` decimal(10,2) DEFAULT NULL,
  `source` varchar(255) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `received_date` datetime DEFAULT CURRENT_TIMESTAMP,
  `created_at` datetime DEFAULT CURRENT_TIMESTAMP,
  `updated_at` datetime DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `incomes`
--

INSERT INTO `incomes` (`id`, `amount`, `source`, `received_date`, `created_at`, `updated_at`) VALUES
(1, 18990.00, 'Order #1', '2025-10-21 09:47:37', '2025-10-21 09:47:37', '2025-10-21 09:47:37'),
(2, 72000.00, 'Order #2', '2025-10-21 09:47:37', '2025-10-21 09:47:37', '2025-10-21 09:47:37'),
(3, 4990.00, 'Order #4', '2025-10-21 09:47:37', '2025-10-21 09:47:37', '2025-10-21 09:47:37');

-- --------------------------------------------------------

--
-- Table structure for table `inventory`
--

CREATE TABLE `inventory` (
  `id` int NOT NULL,
  `product_id` int DEFAULT NULL,
  `warehouse_id` int DEFAULT NULL,
  `supplier_id` int DEFAULT NULL,
  `quantity` int DEFAULT NULL,
  `created_at` datetime DEFAULT CURRENT_TIMESTAMP,
  `updated_at` datetime DEFAULT CURRENT_TIMESTAMP,
  `transaction_type_id` int DEFAULT NULL,
  `remarks` text COLLATE utf8mb4_general_ci
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `inventory`
--

INSERT INTO `inventory` (`id`, `product_id`, `warehouse_id`, `supplier_id`, `quantity`, `created_at`, `updated_at`, `transaction_type_id`, `remarks`) VALUES
(1, 1, 1, 2, 50, '2025-10-21 10:03:56', '2025-10-21 10:03:56', 1, ''),
(2, 1, 0, 0, -3, '2025-10-21 10:07:25', '2025-10-21 10:07:25', 2, ''),
(3, 1, 0, 0, -2, '2025-10-21 11:27:06', '2025-10-21 11:27:06', 2, ''),
(4, 1, 1, 3, 10, '2025-10-21 11:27:31', '2025-10-21 11:27:31', 1, ''),
(5, 10, 1, 5, 1, '2025-10-21 12:45:29', '2025-10-21 12:45:29', 1, ''),
(6, 10, 0, 0, -1, '2025-10-21 17:11:06', '2025-10-21 17:11:06', 2, ''),
(7, 7, 0, 0, -1, '2025-10-21 23:40:05', '2025-10-21 23:40:05', 2, ''),
(8, 4, 0, 0, -4, '2025-10-27 18:08:07', '2025-10-27 18:08:07', 2, ''),
(9, 1, 0, 0, -3, '2025-10-27 19:26:59', '2025-10-27 19:26:59', 2, ''),
(10, 2, 0, 0, -1, '2025-10-27 20:18:25', '2025-10-27 20:18:25', 2, ''),
(11, 1, 0, 0, -2, '2025-10-27 20:18:25', '2025-10-27 20:18:25', 2, ''),
(12, 5, 0, 0, -5, '2025-10-29 23:00:15', '2025-10-29 23:00:15', 2, ''),
(13, 5, 0, 0, 20, '2025-10-29 23:14:21', '2025-10-29 23:14:21', 1, ''),
(14, 3, 0, 0, -5, '2025-11-07 09:56:24', '2025-11-07 09:56:24', 2, ''),
(15, 6, 0, 0, -1, '2025-11-07 09:56:24', '2025-11-07 09:56:24', 2, ''),
(16, 3, 3, 3, 15, '2025-11-07 09:59:10', '2025-11-07 09:59:10', 1, ''),
(17, 4, 0, 0, -1, '2025-11-09 20:12:06', '2025-11-09 20:12:06', 2, ''),
(18, 6, 0, 0, -1, '2025-11-09 20:12:06', '2025-11-09 20:12:06', 2, '');

-- --------------------------------------------------------

--
-- Table structure for table `invoices`
--

CREATE TABLE `invoices` (
  `id` int NOT NULL,
  `customer_id` int NOT NULL,
  `order_id` int DEFAULT NULL,
  `invoice_date` datetime DEFAULT CURRENT_TIMESTAMP,
  `due_date` datetime DEFAULT CURRENT_TIMESTAMP,
  `total_amount` decimal(10,2) DEFAULT NULL,
  `status` varchar(255) COLLATE utf8mb4_general_ci NOT NULL,
  `payment_method` varchar(255) COLLATE utf8mb4_general_ci NOT NULL,
  `created_at` datetime DEFAULT CURRENT_TIMESTAMP,
  `updated_at` datetime DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `invoice_templates`
--

CREATE TABLE `invoice_templates` (
  `id` int NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `template_html` text COLLATE utf8mb4_general_ci,
  `created_at` datetime DEFAULT CURRENT_TIMESTAMP,
  `updated_at` datetime DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `media`
--

CREATE TABLE `media` (
  `id` int NOT NULL,
  `type` varchar(50) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `file_path` varchar(255) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `created_at` datetime DEFAULT CURRENT_TIMESTAMP,
  `updated_at` datetime DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `media`
--

INSERT INTO `media` (`id`, `type`, `file_path`, `created_at`, `updated_at`) VALUES
(1, 'banner', 'banner-01.jpg', '2025-10-21 09:46:39', '2025-10-21 09:46:39'),
(2, 'banner', 'banner-02.jpg', '2025-10-21 09:46:39', '2025-10-21 09:46:39'),
(3, 'promo', 'offer-01.jpg', '2025-10-21 09:46:39', '2025-10-21 09:46:39');

-- --------------------------------------------------------

--
-- Table structure for table `news`
--

CREATE TABLE `news` (
  `id` int NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `content` text COLLATE utf8mb4_general_ci,
  `published_at` datetime DEFAULT CURRENT_TIMESTAMP,
  `created_at` datetime DEFAULT CURRENT_TIMESTAMP,
  `updated_at` datetime DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `news`
--

INSERT INTO `news` (`id`, `title`, `content`, `published_at`, `created_at`, `updated_at`) VALUES
(1, 'Mega Electronics Sale', 'Up to 40% off on selected gadgets!', '2025-10-21 09:46:39', '2025-10-21 09:46:39', '2025-10-21 09:46:39'),
(2, 'New Store Opening', 'SkyTech opens new outlet in Sylhet.', '2025-10-21 09:46:39', '2025-10-21 09:46:39', '2025-10-21 09:46:39'),
(3, 'Winter Offers', 'Grab exclusive laptop discounts this season.', '2025-10-21 09:46:39', '2025-10-21 09:46:39', '2025-10-21 09:46:39');

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `id` int NOT NULL,
  `customer_id` int DEFAULT NULL,
  `order_date` datetime DEFAULT CURRENT_TIMESTAMP,
  `status` varchar(50) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `total_amount` decimal(10,2) DEFAULT NULL,
  `created_at` datetime DEFAULT CURRENT_TIMESTAMP,
  `updated_at` datetime DEFAULT CURRENT_TIMESTAMP,
  `delivery_date` date DEFAULT NULL,
  `shipping_address` varchar(255) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `billing_address` varchar(255) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `paid_amount` decimal(10,2) DEFAULT NULL,
  `discount` float DEFAULT NULL,
  `tracking_id` int DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`id`, `customer_id`, `order_date`, `status`, `total_amount`, `created_at`, `updated_at`, `delivery_date`, `shipping_address`, `billing_address`, `paid_amount`, `discount`, `tracking_id`) VALUES
(1, 1, '2025-10-21 00:00:00', 'paid', 56970.00, '2025-10-21 10:07:25', '2025-10-21 10:07:25', '2025-10-25', 'Mirpur, Dhaka', '', 0.00, 0, 0),
(2, 2, '2025-10-21 00:00:00', 'paid', 37980.00, '2025-10-21 11:27:06', '2025-10-21 11:27:06', '2025-10-25', 'Uttara, Dhaka', '', 0.00, 0, 0),
(3, 1, '2025-10-21 00:00:00', 'paid', 4999.00, '2025-10-21 17:11:06', '2025-10-21 17:11:06', '2025-10-25', 'Mirpur, Dhaka', '', 0.00, 0, 0),
(4, 3, '2025-10-22 00:00:00', 'paid', 7805.00, '2025-10-21 23:40:05', '2025-10-21 23:40:05', '2025-10-25', 'Chittagong', '', 0.00, 0, 0),
(5, 5, '2025-05-15 00:00:00', 'paid', 288000.00, '2025-10-27 18:08:07', '2025-10-27 18:08:07', '2025-05-20', 'Sylhet', '', 0.00, 0, 0),
(6, 1, '2024-01-15 00:00:00', 'paid', 56970.00, '2025-10-27 19:26:59', '2025-10-27 19:26:59', '2024-01-25', 'Mirpur, Dhaka', '', 0.00, 0, 0),
(7, 2, '2025-10-27 00:00:00', 'paid', 80979.00, '2025-10-27 20:18:25', '2025-10-27 20:18:25', '2025-10-30', 'Uttara, Dhaka', '', 0.00, 0, 0),
(8, 5, '2025-09-15 00:00:00', 'paid', 475100.00, '2025-10-29 23:00:15', '2025-10-29 23:00:15', '2025-10-25', 'Sylhet', '', 0.00, 0, 0),
(9, 3, '2025-11-14 00:00:00', 'unpaid', 761200.00, '2025-11-07 09:56:24', '2025-11-07 09:56:24', '2025-11-07', 'Chittagong', '', 0.00, 0, 0),
(10, 3, '2025-11-10 00:00:00', 'paid', 82920.00, '2025-11-09 20:12:06', '2025-11-09 20:12:06', '2025-11-10', 'Chittagong', '', 0.00, 0, 0);

-- --------------------------------------------------------

--
-- Table structure for table `order_details`
--

CREATE TABLE `order_details` (
  `id` int NOT NULL,
  `order_id` int DEFAULT NULL,
  `product_id` int DEFAULT NULL,
  `variation_id` int DEFAULT NULL,
  `quantity` int DEFAULT NULL,
  `price` decimal(10,2) DEFAULT NULL,
  `created_at` datetime DEFAULT CURRENT_TIMESTAMP,
  `updated_at` datetime DEFAULT CURRENT_TIMESTAMP,
  `discount` float DEFAULT NULL,
  `vat` float DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `order_details`
--

INSERT INTO `order_details` (`id`, `order_id`, `product_id`, `variation_id`, `quantity`, `price`, `created_at`, `updated_at`, `discount`, `vat`) VALUES
(1, 1, 1, 0, 3, 18990.00, '2025-10-21 10:07:25', '2025-10-21 10:07:25', 0, 0),
(2, 2, 1, 0, 2, 18990.00, '2025-10-21 11:27:06', '2025-10-21 11:27:06', 0, 0),
(3, 3, 10, 0, 1, 4999.00, '2025-10-21 17:11:06', '2025-10-21 17:11:06', 0, 0),
(4, 4, 7, 0, 1, 7800.00, '2025-10-21 23:40:05', '2025-10-21 23:40:05', 0, 5),
(5, 5, 4, 0, 4, 72000.00, '2025-10-27 18:08:07', '2025-10-27 18:08:07', 0, 0),
(6, 6, 1, 0, 3, 18990.00, '2025-10-27 19:26:59', '2025-10-27 19:26:59', 0, 0),
(7, 7, 2, 0, 1, 42999.00, '2025-10-27 20:18:25', '2025-10-27 20:18:25', 0, 0),
(8, 7, 1, 0, 2, 18990.00, '2025-10-27 20:18:25', '2025-10-27 20:18:25', 0, 0),
(9, 8, 5, 0, 5, 95000.00, '2025-10-29 23:00:15', '2025-10-29 23:00:15', 0, 100),
(10, 9, 3, 0, 5, 150000.00, '2025-11-07 09:56:24', '2025-11-07 09:56:24', 0, 200),
(11, 9, 6, 0, 1, 10900.00, '2025-11-07 09:56:24', '2025-11-07 09:56:24', 0, 100),
(12, 10, 4, 0, 1, 72000.00, '2025-11-09 20:12:06', '2025-11-09 20:12:06', 0, 20),
(13, 10, 6, 0, 1, 10900.00, '2025-11-09 20:12:06', '2025-11-09 20:12:06', 0, 0);

-- --------------------------------------------------------

--
-- Table structure for table `pages`
--

CREATE TABLE `pages` (
  `id` int NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `content` text COLLATE utf8mb4_general_ci,
  `created_at` datetime DEFAULT CURRENT_TIMESTAMP,
  `updated_at` datetime DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `pages`
--

INSERT INTO `pages` (`id`, `title`, `content`, `created_at`, `updated_at`) VALUES
(1, 'About Us', 'SkyTech is a leading tech retailer in Bangladesh.', '2025-10-21 09:46:40', '2025-10-21 09:46:40'),
(2, 'Privacy Policy', 'We protect your personal data as per BD law.', '2025-10-21 09:46:40', '2025-10-21 09:46:40'),
(3, 'Terms and Conditions', 'All purchases are subject to our policies.', '2025-10-21 09:46:40', '2025-10-21 09:46:40');

-- --------------------------------------------------------

--
-- Table structure for table `payments_refunds`
--

CREATE TABLE `payments_refunds` (
  `id` int NOT NULL,
  `order_id` int DEFAULT NULL,
  `type` varchar(50) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `amount` decimal(10,2) DEFAULT NULL,
  `payment_date` datetime DEFAULT CURRENT_TIMESTAMP,
  `created_at` datetime DEFAULT CURRENT_TIMESTAMP,
  `updated_at` datetime DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `payment_methods`
--

CREATE TABLE `payment_methods` (
  `id` int NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `details` text COLLATE utf8mb4_general_ci,
  `created_at` datetime DEFAULT CURRENT_TIMESTAMP,
  `updated_at` datetime DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `payment_methods`
--

INSERT INTO `payment_methods` (`id`, `name`, `details`, `created_at`, `updated_at`) VALUES
(1, 'Cash on Delivery', 'Pay when product arrives', '2025-10-21 09:46:19', '2025-10-21 09:46:19'),
(2, 'bKash', 'bKash merchant payment', '2025-10-21 09:46:19', '2025-10-21 09:46:19'),
(3, 'Nagad', 'Instant mobile payment', '2025-10-21 09:46:19', '2025-10-21 09:46:19'),
(4, 'Credit Card', 'Visa, Mastercard accepted', '2025-10-21 09:46:19', '2025-10-21 09:46:19');

-- --------------------------------------------------------

--
-- Table structure for table `permissions`
--

CREATE TABLE `permissions` (
  `id` int NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `description` text COLLATE utf8mb4_general_ci,
  `created_at` datetime DEFAULT CURRENT_TIMESTAMP,
  `updated_at` datetime DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` int NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `category_id` int DEFAULT NULL,
  `brand_id` int DEFAULT NULL,
  `unit_id` int DEFAULT NULL,
  `sku` varchar(100) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `selling_price` decimal(10,2) DEFAULT NULL,
  `purchase_price` decimal(10,2) DEFAULT NULL,
  `description` text COLLATE utf8mb4_general_ci,
  `created_at` datetime DEFAULT CURRENT_TIMESTAMP,
  `updated_at` datetime DEFAULT CURRENT_TIMESTAMP,
  `barcode` varchar(50) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `alert_quantity` int DEFAULT NULL,
  `discount` decimal(10,2) DEFAULT NULL,
  `tax_id` int DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `name`, `category_id`, `brand_id`, `unit_id`, `sku`, `selling_price`, `purchase_price`, `description`, `created_at`, `updated_at`, `barcode`, `alert_quantity`, `discount`, `tax_id`) VALUES
(1, 'Walton Primo X6', 1, 1, 1, 'WAL-X6', 18990.00, 16000.00, '4GB RAM, 128GB Storage', '2025-10-21 09:42:42', '2025-10-21 09:42:42', '111111', 10, NULL, NULL),
(2, 'Samsung Galaxy A55', 1, 2, 1, 'SAM-A55', 42999.00, 38000.00, '6GB RAM, 128GB Storage', '2025-10-21 09:42:42', '2025-10-21 09:42:42', '222222', 10, NULL, NULL),
(3, 'iPhone 15', 1, 3, 1, 'APL-15', 150000.00, 135000.00, '128GB, A16 Bionic', '2025-10-21 09:42:42', '2025-10-21 09:42:42', '333333', 5, NULL, NULL),
(4, 'HP Pavilion 14', 2, 4, 1, 'HP-P14', 72000.00, 65000.00, 'i5 12th Gen, 8GB RAM', '2025-10-21 09:42:42', '2025-10-21 09:42:42', '444444', 10, NULL, NULL),
(5, 'Asus TUF F15', 2, 5, 1, 'ASU-F15', 95000.00, 88000.00, 'Gaming Laptop', '2025-10-21 09:42:42', '2025-10-21 09:42:42', '555555', 5, NULL, NULL),
(6, 'Logitech MX Master 3S', 4, 7, 1, 'LOG-MX3S', 10900.00, 9200.00, 'Wireless mouse', '2025-10-21 09:42:42', '2025-10-21 09:42:42', '666666', 20, NULL, NULL),
(7, 'TP-Link Archer AX23', 5, 19, 1, 'TPL-AX23', 7800.00, 6900.00, 'WiFi 6 Router', '2025-10-21 09:42:42', '2025-10-21 09:42:42', '777777', 15, NULL, NULL),
(8, 'Corsair Vengeance 16GB', 10, 16, 1, 'COR-V16', 8500.00, 7800.00, 'DDR4 RAM', '2025-10-21 09:42:42', '2025-10-21 09:42:42', '888888', 10, NULL, NULL),
(9, 'Sony WH-1000XM5', 7, 14, 1, 'SON-WH5', 42000.00, 38000.00, 'Noise Cancelling Headphone', '2025-10-21 09:42:42', '2025-10-21 09:42:42', '999999', 5, NULL, NULL),
(10, 'Xiaomi Smart Band 8', 10, 0, 1, 'XIA-B8', 4999.00, 4300.00, '0', '2025-10-21 09:42:42', '2025-10-21 09:42:42', '101010', 20, 0.00, 1);

-- --------------------------------------------------------

--
-- Table structure for table `product_images`
--

CREATE TABLE `product_images` (
  `id` int NOT NULL,
  `product_id` int DEFAULT NULL,
  `image_path` varchar(255) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `is_main` tinyint(1) DEFAULT NULL,
  `created_at` datetime DEFAULT CURRENT_TIMESTAMP,
  `updated_at` datetime DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `product_images`
--

INSERT INTO `product_images` (`id`, `product_id`, `image_path`, `is_main`, `created_at`, `updated_at`) VALUES
(1, 1, 'product-01.jpg', 1, '2025-10-21 09:43:42', '2025-10-21 09:43:42'),
(2, 1, 'product-01b.jpg', 0, '2025-10-21 09:43:42', '2025-10-21 09:43:42'),
(3, 2, 'product-02.jpg', 1, '2025-10-21 09:43:42', '2025-10-21 09:43:42'),
(4, 2, 'product-02b.jpg', 0, '2025-10-21 09:43:42', '2025-10-21 09:43:42'),
(5, 3, 'product-03.jpg', 1, '2025-10-21 09:43:42', '2025-10-21 09:43:42'),
(6, 3, 'product-03b.jpg', 0, '2025-10-21 09:43:42', '2025-10-21 09:43:42'),
(7, 4, 'product-04.jpg', 1, '2025-10-21 09:43:42', '2025-10-21 09:43:42'),
(8, 4, 'product-04b.jpg', 0, '2025-10-21 09:43:42', '2025-10-21 09:43:42'),
(9, 5, 'product-05.jpg', 1, '2025-10-21 09:43:42', '2025-10-21 09:43:42'),
(10, 5, 'product-05b.jpg', 0, '2025-10-21 09:43:42', '2025-10-21 09:43:42'),
(11, 6, 'product-06.jpg', 1, '2025-10-21 09:43:42', '2025-10-21 09:43:42'),
(12, 6, 'product-06b.jpg', 0, '2025-10-21 09:43:42', '2025-10-21 09:43:42'),
(13, 7, 'product-07.jpg', 1, '2025-10-21 09:43:42', '2025-10-21 09:43:42'),
(14, 7, 'product-07b.jpg', 0, '2025-10-21 09:43:42', '2025-10-21 09:43:42'),
(15, 8, 'product-08.jpg', 1, '2025-10-21 09:43:42', '2025-10-21 09:43:42'),
(16, 8, 'product-08b.jpg', 0, '2025-10-21 09:43:42', '2025-10-21 09:43:42'),
(17, 9, 'product-09.jpg', 1, '2025-10-21 09:43:42', '2025-10-21 09:43:42'),
(18, 9, 'product-09b.jpg', 0, '2025-10-21 09:43:42', '2025-10-21 09:43:42'),
(19, 10, 'product-10.jpg', 1, '2025-10-21 09:43:42', '2025-10-21 09:43:42'),
(20, 10, 'product-10b.jpg', 0, '2025-10-21 09:43:42', '2025-10-21 09:43:42');

-- --------------------------------------------------------

--
-- Table structure for table `product_variations`
--

CREATE TABLE `product_variations` (
  `id` int NOT NULL,
  `product_id` int DEFAULT NULL,
  `variation_name` varchar(100) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `variation_value` varchar(100) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `selling_price` decimal(10,2) DEFAULT NULL,
  `purchase_price` decimal(10,2) DEFAULT NULL,
  `sku` varchar(100) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `created_at` datetime DEFAULT CURRENT_TIMESTAMP,
  `updated_at` datetime DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `purchases`
--

CREATE TABLE `purchases` (
  `id` int NOT NULL,
  `supplier_id` int DEFAULT NULL,
  `warehouse_id` int NOT NULL,
  `order_date` datetime DEFAULT CURRENT_TIMESTAMP,
  `status` varchar(50) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `total_amount` decimal(10,2) DEFAULT NULL,
  `created_at` datetime DEFAULT CURRENT_TIMESTAMP,
  `updated_at` datetime DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `purchases`
--

INSERT INTO `purchases` (`id`, `supplier_id`, `warehouse_id`, `order_date`, `status`, `total_amount`, `created_at`, `updated_at`) VALUES
(1, 2, 1, '2025-10-15 00:00:00', 'paid', 800000.00, '2025-10-21 10:03:56', '2025-10-21 10:03:56'),
(2, 3, 1, '2025-10-23 00:00:00', 'paid', 160000.00, '2025-10-21 11:27:31', '2025-10-21 11:27:31'),
(3, 5, 1, '2025-10-25 00:00:00', 'paid', 4300.00, '2025-10-21 12:45:29', '2025-10-21 12:45:29'),
(4, 0, 0, '2025-09-15 00:00:00', 'paid', 1760000.00, '2025-10-29 23:14:21', '2025-10-29 23:14:21'),
(5, 3, 3, '2025-11-07 00:00:00', 'paid', 2025000.00, '2025-11-07 09:59:10', '2025-11-07 09:59:10');

-- --------------------------------------------------------

--
-- Table structure for table `purchase_details`
--

CREATE TABLE `purchase_details` (
  `id` int NOT NULL,
  `purchase_id` int DEFAULT NULL,
  `product_id` int DEFAULT NULL,
  `quantity` int DEFAULT NULL,
  `price` decimal(10,2) DEFAULT NULL,
  `created_at` datetime DEFAULT CURRENT_TIMESTAMP,
  `updated_at` datetime DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `purchase_details`
--

INSERT INTO `purchase_details` (`id`, `purchase_id`, `product_id`, `quantity`, `price`, `created_at`, `updated_at`) VALUES
(1, 1, 1, 50, 16000.00, '2025-10-21 10:03:56', '2025-10-21 10:03:56'),
(2, 2, 1, 10, 16000.00, '2025-10-21 11:27:31', '2025-10-21 11:27:31'),
(3, 3, 10, 1, 4300.00, '2025-10-21 12:45:29', '2025-10-21 12:45:29'),
(4, 4, 5, 20, 88000.00, '2025-10-29 23:14:21', '2025-10-29 23:14:21'),
(5, 5, 3, 15, 135000.00, '2025-11-07 09:59:10', '2025-11-07 09:59:10');

-- --------------------------------------------------------

--
-- Table structure for table `roles`
--

CREATE TABLE `roles` (
  `id` int NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `description` text COLLATE utf8mb4_general_ci,
  `created_at` datetime DEFAULT CURRENT_TIMESTAMP,
  `updated_at` datetime DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `roles`
--

INSERT INTO `roles` (`id`, `name`, `description`, `created_at`, `updated_at`) VALUES
(1, 'Admin', 'Full access', '2025-10-21 09:46:20', '2025-10-21 09:46:20'),
(2, 'Manager', 'Inventory and order management', '2025-10-21 09:46:20', '2025-10-21 09:46:20'),
(3, 'Customer', 'Regular shopper', '2025-10-21 09:46:20', '2025-10-21 09:46:20'),
(4, 'Vendor', 'Product supplier', '2025-10-21 09:46:20', '2025-10-21 09:46:20');

-- --------------------------------------------------------

--
-- Table structure for table `role_permissions`
--

CREATE TABLE `role_permissions` (
  `id` int NOT NULL,
  `role_id` int DEFAULT NULL,
  `permission_id` int DEFAULT NULL,
  `created_at` datetime DEFAULT CURRENT_TIMESTAMP,
  `updated_at` datetime DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `settings`
--

CREATE TABLE `settings` (
  `id` int NOT NULL,
  `key_name` varchar(255) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `value` text COLLATE utf8mb4_general_ci,
  `created_at` datetime DEFAULT CURRENT_TIMESTAMP,
  `updated_at` datetime DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `settings`
--

INSERT INTO `settings` (`id`, `key_name`, `value`, `created_at`, `updated_at`) VALUES
(1, 'site_name', 'SkyTech BD', '2025-10-21 09:46:20', '2025-10-21 09:46:20'),
(2, 'currency', 'BDT', '2025-10-21 09:46:20', '2025-10-21 09:46:20'),
(3, 'timezone', 'Asia/Dhaka', '2025-10-21 09:46:20', '2025-10-21 09:46:20'),
(4, 'support_email', 'support@skytech.com', '2025-10-21 09:46:20', '2025-10-21 09:46:20');

-- --------------------------------------------------------

--
-- Table structure for table `status`
--

CREATE TABLE `status` (
  `id` int NOT NULL,
  `person_status` varchar(255) COLLATE utf8mb4_general_ci NOT NULL,
  `item_status` varchar(255) COLLATE utf8mb4_general_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `suppliers`
--

CREATE TABLE `suppliers` (
  `id` int NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `contact_person` varchar(255) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `phone` varchar(50) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `email` varchar(255) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `created_at` datetime DEFAULT CURRENT_TIMESTAMP,
  `updated_at` datetime DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `suppliers`
--

INSERT INTO `suppliers` (`id`, `name`, `contact_person`, `phone`, `email`, `created_at`, `updated_at`) VALUES
(1, 'TechSource BD', 'Mr. Hasan', '01710000011', 'techsourcebd@gmail.com', '2025-10-21 09:41:43', '2025-10-21 09:41:43'),
(2, 'GadgetPro', 'Ms. Nabila', '01710000022', 'sales@gadgetpro.com', '2025-10-21 09:41:43', '2025-10-21 09:41:43'),
(3, 'SmartLink Ltd', 'Mr. Rafiq', '01710000033', 'info@smartlink.com', '2025-10-21 09:41:43', '2025-10-21 09:41:43'),
(4, 'ElectroHub', 'Mr. Jalal', '01710000044', 'contact@electrohub.com', '2025-10-21 09:41:43', '2025-10-21 09:41:43'),
(5, 'DigitalMart', 'Mr. Tanim', '01710000055', 'sales@digitalmart.com', '2025-10-21 09:41:43', '2025-10-21 09:41:43');

-- --------------------------------------------------------

--
-- Table structure for table `support_tickets`
--

CREATE TABLE `support_tickets` (
  `id` int NOT NULL,
  `customer_id` int DEFAULT NULL,
  `subject` varchar(255) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `description` text COLLATE utf8mb4_general_ci,
  `status` varchar(50) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `priority` varchar(50) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `created_at` datetime DEFAULT CURRENT_TIMESTAMP,
  `updated_at` datetime DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `taxes`
--

CREATE TABLE `taxes` (
  `id` int NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_general_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `tax_rates`
--

CREATE TABLE `tax_rates` (
  `id` int NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `rate` decimal(5,2) DEFAULT NULL,
  `created_at` datetime DEFAULT CURRENT_TIMESTAMP,
  `updated_at` datetime DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `test_products`
--

CREATE TABLE `test_products` (
  `id` int NOT NULL,
  `sku` varchar(100) DEFAULT NULL,
  `title` varchar(255) NOT NULL,
  `slug` varchar(255) NOT NULL,
  `description` text,
  `category_id` int NOT NULL,
  `subcategory` varchar(100) DEFAULT NULL,
  `brand_id` int NOT NULL,
  `price` decimal(10,2) DEFAULT NULL,
  `original_price` decimal(10,2) DEFAULT NULL,
  `discount_percent` decimal(5,2) DEFAULT NULL,
  `rating` decimal(3,2) DEFAULT NULL,
  `reviews_count` int DEFAULT '0',
  `stock` int DEFAULT '0',
  `stock_status` varchar(50) DEFAULT 'In Stock',
  `thumbnail` varchar(255) DEFAULT NULL,
  `featured` tinyint(1) DEFAULT '0',
  `bestseller` tinyint(1) DEFAULT '0',
  `new_arrival` tinyint(1) DEFAULT '0',
  `on_sale` tinyint(1) DEFAULT '0',
  `best_value` tinyint(1) DEFAULT '0',
  `deal_end_time` datetime DEFAULT NULL,
  `shipping_estimate` varchar(255) DEFAULT NULL,
  `warranty` varchar(255) DEFAULT NULL,
  `created_at` datetime DEFAULT CURRENT_TIMESTAMP,
  `updated_at` datetime DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `test_products`
--

INSERT INTO `test_products` (`id`, `sku`, `title`, `slug`, `description`, `category_id`, `subcategory`, `brand_id`, `price`, `original_price`, `discount_percent`, `rating`, `reviews_count`, `stock`, `stock_status`, `thumbnail`, `featured`, `bestseller`, `new_arrival`, `on_sale`, `best_value`, `deal_end_time`, `shipping_estimate`, `warranty`, `created_at`, `updated_at`) VALUES
(1, 'SKU001', 'Wireless Headphones 1', 'wireless-headphones-1', 'High quality wireless headphones', 1, 'Headphones', 1, 99.99, 149.99, 33.33, 4.50, 120, 50, 'In Stock', 'thumb1.jpg', 1, 1, 1, 1, 0, NULL, '3-5 days', '1 year', '2025-11-15 21:18:32', '2025-11-15 21:18:32'),
(2, 'SKU002', 'Wireless Headphones 2', 'wireless-headphones-2', 'Noise cancelling headphones', 1, 'Headphones', 2, 129.99, 179.99, 27.78, 4.70, 80, 30, 'In Stock', 'thumb2.jpg', 0, 1, 1, 1, 1, NULL, '3-5 days', '2 years', '2025-11-15 21:18:32', '2025-11-15 21:18:32'),
(3, 'SKU003', 'Gaming Mouse 1', 'gaming-mouse-1', 'RGB gaming mouse', 2, 'Mouse', 3, 49.99, 69.99, 28.57, 4.20, 60, 100, 'In Stock', 'thumb3.jpg', 1, 0, 1, 0, 1, NULL, '2-4 days', '6 months', '2025-11-15 21:18:32', '2025-11-15 21:18:32'),
(4, 'SKU004', 'Mechanical Keyboard 1', 'mechanical-keyboard-1', 'Mechanical RGB keyboard', 2, 'Keyboard', 4, 89.99, 129.99, 30.23, 4.80, 200, 25, 'In Stock', 'thumb4.jpg', 1, 1, 0, 1, 0, NULL, '2-4 days', '1 year', '2025-11-15 21:18:32', '2025-11-15 21:18:32'),
(5, 'SKU005', 'Smart Watch 1', 'smart-watch-1', 'Fitness tracker smartwatch', 3, 'Smartwatch', 5, 199.99, 249.99, 20.00, 4.60, 150, 75, 'In Stock', 'thumb5.jpg', 0, 1, 1, 1, 1, NULL, '5-7 days', '1 year', '2025-11-15 21:18:32', '2025-11-15 21:18:32'),
(6, 'SKU006', 'Smart Watch 2', 'smart-watch-2', 'Heart rate monitor smartwatch', 3, 'Smartwatch', 6, 179.99, 219.99, 17.81, 4.40, 90, 60, 'In Stock', 'thumb6.jpg', 1, 0, 1, 0, 1, NULL, '5-7 days', '2 years', '2025-11-15 21:18:32', '2025-11-15 21:18:32'),
(7, 'SKU007', 'Laptop 1', 'laptop-1', 'High performance laptop', 2, 'Laptop', 7, 899.99, 999.99, 10.00, 4.70, 75, 15, 'In Stock', 'thumb7.jpg', 1, 1, 0, 1, 0, NULL, '7-10 days', '1 year', '2025-11-15 21:18:32', '2025-11-15 21:18:32'),
(8, 'SKU008', 'Laptop 2', 'laptop-2', 'Slim lightweight laptop', 2, 'Laptop', 8, 749.99, 849.99, 11.76, 4.50, 65, 20, 'In Stock', 'thumb8.jpg', 0, 1, 1, 1, 1, NULL, '7-10 days', '2 years', '2025-11-15 21:18:32', '2025-11-15 21:18:32'),
(9, 'SKU009', 'Bluetooth Speaker 1', 'bluetooth-speaker-1', 'Portable Bluetooth speaker', 1, 'Speakers', 9, 59.99, 79.99, 24.99, 4.30, 55, 40, 'In Stock', 'thumb9.jpg', 1, 0, 1, 0, 1, NULL, '3-5 days', '6 months', '2025-11-15 21:18:32', '2025-11-15 21:18:32'),
(10, 'SKU010', 'Bluetooth Speaker 2', 'bluetooth-speaker-2', 'Waterproof Bluetooth speaker', 1, 'Speakers', 10, 69.99, 89.99, 21.35, 4.60, 95, 35, 'In Stock', 'thumb10.jpg', 0, 1, 1, 1, 0, NULL, '3-5 days', '1 year', '2025-11-15 21:18:32', '2025-11-15 21:18:32'),
(11, 'SKU011', 'Tablet 1', 'tablet-1', 'Android tablet', 2, 'Tablet', 11, 299.99, 349.99, 14.29, 4.40, 85, 50, 'In Stock', 'thumb11.jpg', 1, 0, 1, 1, 0, NULL, '5-7 days', '1 year', '2025-11-15 21:18:32', '2025-11-15 21:18:32'),
(12, 'SKU012', 'Tablet 2', 'tablet-2', '10 inch Android tablet', 2, 'Tablet', 12, 329.99, 379.99, 13.16, 4.50, 95, 45, 'In Stock', 'thumb12.jpg', 0, 1, 0, 1, 1, NULL, '5-7 days', '2 years', '2025-11-15 21:18:32', '2025-11-15 21:18:32'),
(13, 'SKU013', 'Camera 1', 'camera-1', 'Digital SLR camera', 4, 'Camera', 13, 499.99, 599.99, 16.67, 4.80, 120, 25, 'In Stock', 'thumb13.jpg', 1, 1, 1, 1, 0, NULL, '5-7 days', '1 year', '2025-11-15 21:18:32', '2025-11-15 21:18:32'),
(14, 'SKU014', 'Camera 2', 'camera-2', 'Mirrorless camera', 4, 'Camera', 14, 599.99, 699.99, 14.29, 4.70, 80, 30, 'In Stock', 'thumb14.jpg', 0, 1, 1, 0, 1, NULL, '5-7 days', '2 years', '2025-11-15 21:18:32', '2025-11-15 21:18:32'),
(15, 'SKU015', 'Earbuds 1', 'earbuds-1', 'Wireless earbuds', 1, 'Earbuds', 15, 49.99, 69.99, 28.57, 4.40, 150, 100, 'In Stock', 'thumb15.jpg', 1, 0, 1, 1, 0, NULL, '2-4 days', '6 months', '2025-11-15 21:18:32', '2025-11-15 21:18:32'),
(16, 'SKU016', 'Earbuds 2', 'earbuds-2', 'Noise cancelling earbuds', 1, 'Earbuds', 16, 59.99, 79.99, 24.99, 4.50, 130, 90, 'In Stock', 'thumb16.jpg', 0, 1, 1, 0, 1, NULL, '2-4 days', '1 year', '2025-11-15 21:18:32', '2025-11-15 21:18:32'),
(17, 'SKU017', 'Smartphone 1', 'smartphone-1', 'Android smartphone', 5, 'Smartphone', 17, 499.99, 599.99, 16.67, 4.60, 110, 50, 'In Stock', 'thumb17.jpg', 1, 1, 0, 1, 0, NULL, '5-7 days', '1 year', '2025-11-15 21:18:32', '2025-11-15 21:18:32'),
(18, 'SKU018', 'Smartphone 2', 'smartphone-2', 'Flagship smartphone', 5, 'Smartphone', 18, 699.99, 799.99, 12.50, 4.80, 90, 30, 'In Stock', 'thumb18.jpg', 0, 1, 1, 1, 1, NULL, '5-7 days', '2 years', '2025-11-15 21:18:32', '2025-11-15 21:18:32'),
(19, 'SKU019', 'Monitor 1', 'monitor-1', '27 inch 4K monitor', 2, 'Monitor', 19, 349.99, 399.99, 12.50, 4.50, 65, 20, 'In Stock', 'thumb19.jpg', 1, 0, 1, 1, 0, NULL, '3-5 days', '1 year', '2025-11-15 21:18:32', '2025-11-15 21:18:32'),
(20, 'SKU020', 'Monitor 2', 'monitor-2', '24 inch HD monitor', 2, 'Monitor', 20, 199.99, 249.99, 20.00, 4.30, 50, 25, 'In Stock', 'thumb20.jpg', 0, 1, 0, 1, 1, NULL, '3-5 days', '1 year', '2025-11-15 21:18:32', '2025-11-15 21:18:32'),
(21, 'SKU021', 'Keyboard 2', 'keyboard-2', 'Wireless keyboard', 2, 'Keyboard', 21, 59.99, 79.99, 24.99, 4.40, 70, 40, 'In Stock', 'thumb21.jpg', 1, 0, 1, 0, 1, NULL, '2-4 days', '6 months', '2025-11-15 21:18:32', '2025-11-15 21:18:32'),
(22, 'SKU022', 'Mouse 2', 'mouse-2', 'Ergonomic mouse', 2, 'Mouse', 22, 39.99, 59.99, 32.20, 4.20, 60, 80, 'In Stock', 'thumb22.jpg', 0, 1, 1, 1, 0, NULL, '2-4 days', '6 months', '2025-11-15 21:18:32', '2025-11-15 21:18:32'),
(23, 'SKU023', 'Charger 1', 'charger-1', 'Fast charging adapter', 6, 'Charger', 23, 19.99, 29.99, 33.33, 4.30, 40, 200, 'In Stock', 'thumb23.jpg', 1, 0, 1, 0, 1, NULL, '1-3 days', '6 months', '2025-11-15 21:18:32', '2025-11-15 21:18:32'),
(24, 'SKU024', 'Charger 2', 'charger-2', 'USB-C charger', 6, 'Charger', 24, 24.99, 34.99, 28.58, 4.50, 45, 180, 'In Stock', 'thumb24.jpg', 0, 1, 1, 1, 0, NULL, '1-3 days', '1 year', '2025-11-15 21:18:32', '2025-11-15 21:18:32'),
(25, 'SKU025', 'Headphone Stand 1', 'headphone-stand-1', 'Premium headphone stand', 6, 'Stand', 25, 29.99, 39.99, 23.08, 4.40, 35, 150, 'In Stock', 'thumb25.jpg', 1, 0, 1, 0, 1, NULL, '2-4 days', '6 months', '2025-11-15 21:18:32', '2025-11-15 21:18:32');

-- --------------------------------------------------------

--
-- Table structure for table `test_product_badges`
--

CREATE TABLE `test_product_badges` (
  `id` int NOT NULL,
  `product_id` int DEFAULT NULL,
  `badge` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `test_product_badges`
--

INSERT INTO `test_product_badges` (`id`, `product_id`, `badge`) VALUES
(1, 1, 'Hot'),
(2, 2, 'New'),
(3, 3, 'Sale'),
(4, 4, 'Bestseller'),
(5, 5, 'Limited'),
(6, 6, 'Hot'),
(7, 7, 'Bestseller'),
(8, 8, 'New'),
(9, 9, 'Hot'),
(10, 10, 'Sale'),
(11, 11, 'New'),
(12, 12, 'Limited'),
(13, 13, 'Hot'),
(14, 14, 'Bestseller'),
(15, 15, 'Sale'),
(16, 16, 'Hot'),
(17, 17, 'Bestseller'),
(18, 18, 'Limited'),
(19, 19, 'New'),
(20, 20, 'Sale'),
(21, 21, 'Hot'),
(22, 22, 'New'),
(23, 23, 'Sale'),
(24, 24, 'Limited'),
(25, 25, 'Hot');

-- --------------------------------------------------------

--
-- Table structure for table `test_product_brands`
--

CREATE TABLE `test_product_brands` (
  `id` int NOT NULL,
  `name` varchar(100) NOT NULL,
  `logo` varchar(255) DEFAULT NULL,
  `description` text,
  `featured` tinyint(1) DEFAULT '0',
  `founded` int DEFAULT NULL,
  `origin` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `test_product_brands`
--

INSERT INTO `test_product_brands` (`id`, `name`, `logo`, `description`, `featured`, `founded`, `origin`) VALUES
(1, 'BrandA', 'branda.svg', 'BrandA audio devices', 1, 2010, 'USA'),
(2, 'BrandB', 'brandb.svg', 'BrandB headphones', 0, 2012, 'USA'),
(3, 'BrandC', 'brandc.svg', 'Gaming mouse expert', 1, 2011, 'USA'),
(4, 'BrandD', 'brandd.svg', 'Mechanical keyboards', 1, 2013, 'Germany'),
(6, 'BrandF', 'brandf.svg', 'Heart rate monitor watches', 1, 2016, 'China'),
(7, 'BrandG', 'brandg.svg', 'High performance laptops', 1, 2009, 'USA'),
(8, 'BrandH', 'brandh.svg', 'Slim lightweight laptops', 0, 2010, 'USA'),
(9, 'BrandI', 'brandi.svg', 'Bluetooth speakers', 1, 2014, 'Germany'),
(10, 'BrandJ', 'brandj.svg', 'Waterproof speakers', 0, 2015, 'Germany'),
(11, 'BrandK', 'brandk.svg', 'Android tablets', 1, 2013, 'China'),
(12, 'BrandL', 'brandl.svg', '10 inch tablets', 0, 2014, 'China'),
(13, 'BrandM', 'brandm.svg', 'Digital cameras', 1, 2010, 'Japan'),
(14, 'BrandN', 'brandn.svg', 'Mirrorless cameras', 0, 2011, 'Japan'),
(15, 'BrandO', 'brando.svg', 'Wireless earbuds', 1, 2015, 'China'),
(16, 'BrandP', 'brandp.svg', 'Noise cancelling earbuds', 0, 2016, 'China'),
(17, 'BrandQ', 'brandq.svg', 'Android smartphones', 1, 2012, 'USA'),
(18, 'BrandR', 'brandr.svg', 'Flagship smartphones', 0, 2013, 'USA'),
(19, 'BrandS', 'brands.svg', '4K monitors', 1, 2011, 'Germany'),
(20, 'BrandT', 'brandt.svg', 'HD monitors', 0, 2012, 'Germany'),
(21, 'BrandU', 'brandu.svg', 'Wireless keyboards', 1, 2014, 'Germany'),
(22, 'BrandV', 'brandv.svg', 'Ergonomic mouse', 0, 2013, 'Germany'),
(23, 'BrandW', 'brandw.svg', 'Fast chargers', 1, 2015, 'China'),
(24, 'BrandX', 'brandx.svg', 'USB-C chargers', 0, 2016, 'China'),
(25, 'BrandY', 'brandy.svg', 'Headphone stands', 1, 2014, 'China');

-- --------------------------------------------------------

--
-- Table structure for table `test_product_categories`
--

CREATE TABLE `test_product_categories` (
  `id` int NOT NULL,
  `name` varchar(100) NOT NULL,
  `slug` varchar(100) NOT NULL,
  `description` text,
  `image` varchar(255) DEFAULT NULL,
  `heroColor` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `test_product_categories`
--

INSERT INTO `test_product_categories` (`id`, `name`, `slug`, `description`, `image`, `heroColor`) VALUES
(1, 'Audio', 'audio', 'Speakers, headphones, and audio devices', 'audio.svg', 'bg-gradient-to-br from-primary/80 to-secondary/70'),
(2, 'Computers', 'computers', 'Laptops, monitors, keyboards, and computer peripherals', 'computer-hero.svg', 'bg-gradient-to-br from-primary/80 to-secondary/70'),
(3, 'Wearables', 'wearables', 'Smartwatches and fitness trackers', 'wearable-hero.svg', 'bg-gradient-to-br from-primary/80 to-secondary/70'),
(4, 'Photography', 'photography', 'Cameras and photography accessories', 'photo-hero.svg', 'bg-gradient-to-br from-primary/80 to-secondary/70'),
(5, 'Mobiles', 'mobiles', 'Smartphones and mobile accessories', 'phone-hero.svg', 'bg-gradient-to-br from-primary/80 to-secondary/70'),
(6, 'Accessories', 'accessories', 'Chargers, stands, and other accessories', 'accessory-hero.svg', 'bg-gradient-to-br from-primary/80 to-secondary/70');

-- --------------------------------------------------------

--
-- Table structure for table `test_product_highlights`
--

CREATE TABLE `test_product_highlights` (
  `id` int NOT NULL,
  `product_id` int DEFAULT NULL,
  `highlight_text` text
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `test_product_highlights`
--

INSERT INTO `test_product_highlights` (`id`, `product_id`, `highlight_text`) VALUES
(1, 1, 'Top sound quality'),
(2, 2, 'Noise cancelling'),
(3, 3, 'High precision gaming'),
(4, 4, 'RGB lighting'),
(5, 5, 'Track your health'),
(6, 6, 'Heart rate monitor'),
(7, 7, 'High performance'),
(8, 8, 'Lightweight laptop'),
(9, 9, 'Portable speaker'),
(10, 10, 'Waterproof speaker'),
(11, 11, 'Android tablet'),
(12, 12, '10 inch screen'),
(13, 13, 'DSLR camera'),
(14, 14, 'Mirrorless camera'),
(15, 15, 'Wireless earbuds'),
(16, 16, 'Noise cancelling earbuds'),
(17, 17, 'Android smartphone'),
(18, 18, 'Flagship phone'),
(19, 19, '4K monitor'),
(20, 20, 'HD monitor'),
(21, 21, 'Wireless keyboard'),
(22, 22, 'Ergonomic mouse'),
(23, 23, 'Fast charger'),
(24, 24, 'USB-C charger'),
(25, 25, 'Premium stand');

-- --------------------------------------------------------

--
-- Table structure for table `test_product_images`
--

CREATE TABLE `test_product_images` (
  `id` int NOT NULL,
  `product_id` int DEFAULT NULL,
  `image_path` varchar(255) DEFAULT NULL,
  `is_main` tinyint(1) DEFAULT '0',
  `created_at` datetime DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `test_product_images`
--

INSERT INTO `test_product_images` (`id`, `product_id`, `image_path`, `is_main`, `created_at`) VALUES
(1, 1, 'headphones1_1.jpg', 1, '2025-11-15 21:18:32'),
(2, 1, 'headphones1_2.jpg', 0, '2025-11-15 21:18:32'),
(3, 1, 'headphones1_3.jpg', 0, '2025-11-15 21:18:32'),
(4, 2, 'headphones2_1.jpg', 1, '2025-11-15 21:18:32'),
(5, 2, 'headphones2_2.jpg', 0, '2025-11-15 21:18:32'),
(6, 2, 'headphones2_3.jpg', 0, '2025-11-15 21:18:32'),
(7, 3, 'mouse1_1.jpg', 1, '2025-11-15 21:18:32'),
(8, 3, 'mouse1_2.jpg', 0, '2025-11-15 21:18:32'),
(9, 3, 'mouse1_3.jpg', 0, '2025-11-15 21:18:32'),
(10, 4, 'keyboard1_1.jpg', 1, '2025-11-15 21:18:32'),
(11, 4, 'keyboard1_2.jpg', 0, '2025-11-15 21:18:32'),
(12, 4, 'keyboard1_3.jpg', 0, '2025-11-15 21:18:32'),
(13, 5, 'watch1_1.jpg', 1, '2025-11-15 21:18:32'),
(14, 5, 'watch1_2.jpg', 0, '2025-11-15 21:18:32'),
(15, 6, 'watch2_1.jpg', 1, '2025-11-15 21:18:32'),
(16, 6, 'watch2_2.jpg', 0, '2025-11-15 21:18:32'),
(17, 7, 'laptop1_1.jpg', 1, '2025-11-15 21:18:32'),
(18, 7, 'laptop1_2.jpg', 0, '2025-11-15 21:18:32'),
(19, 8, 'laptop2_1.jpg', 1, '2025-11-15 21:18:32'),
(20, 8, 'laptop2_2.jpg', 0, '2025-11-15 21:18:32'),
(21, 9, 'speaker1_1.jpg', 1, '2025-11-15 21:18:32'),
(22, 9, 'speaker1_2.jpg', 0, '2025-11-15 21:18:32'),
(23, 10, 'speaker2_1.jpg', 1, '2025-11-15 21:18:32'),
(24, 10, 'speaker2_2.jpg', 0, '2025-11-15 21:18:32'),
(25, 11, 'tablet1_1.jpg', 1, '2025-11-15 21:18:32'),
(26, 11, 'tablet1_2.jpg', 0, '2025-11-15 21:18:32'),
(27, 12, 'tablet2_1.jpg', 1, '2025-11-15 21:18:32'),
(28, 12, 'tablet2_2.jpg', 0, '2025-11-15 21:18:32'),
(29, 13, 'camera1_1.jpg', 1, '2025-11-15 21:18:32'),
(30, 13, 'camera1_2.jpg', 0, '2025-11-15 21:18:32'),
(31, 14, 'camera2_1.jpg', 1, '2025-11-15 21:18:32'),
(32, 14, 'camera2_2.jpg', 0, '2025-11-15 21:18:32'),
(33, 15, 'earbuds1_1.jpg', 1, '2025-11-15 21:18:32'),
(34, 15, 'earbuds1_2.jpg', 0, '2025-11-15 21:18:32'),
(35, 16, 'earbuds2_1.jpg', 1, '2025-11-15 21:18:32'),
(36, 16, 'earbuds2_2.jpg', 0, '2025-11-15 21:18:32'),
(37, 17, 'smartphone1_1.jpg', 1, '2025-11-15 21:18:32'),
(38, 17, 'smartphone1_2.jpg', 0, '2025-11-15 21:18:32'),
(39, 18, 'smartphone2_1.jpg', 1, '2025-11-15 21:18:32'),
(40, 18, 'smartphone2_2.jpg', 0, '2025-11-15 21:18:32'),
(41, 19, 'monitor1_1.jpg', 1, '2025-11-15 21:18:32'),
(42, 19, 'monitor1_2.jpg', 0, '2025-11-15 21:18:32'),
(43, 20, 'monitor2_1.jpg', 1, '2025-11-15 21:18:32'),
(44, 20, 'monitor2_2.jpg', 0, '2025-11-15 21:18:32'),
(45, 21, 'keyboard2_1.jpg', 1, '2025-11-15 21:18:32'),
(46, 21, 'keyboard2_2.jpg', 0, '2025-11-15 21:18:32'),
(47, 22, 'mouse2_1.jpg', 1, '2025-11-15 21:18:32'),
(48, 22, 'mouse2_2.jpg', 0, '2025-11-15 21:18:32'),
(49, 23, 'charger1_1.jpg', 1, '2025-11-15 21:18:32'),
(50, 23, 'charger1_2.jpg', 0, '2025-11-15 21:18:32'),
(51, 24, 'charger2_1.jpg', 1, '2025-11-15 21:18:32'),
(52, 24, 'charger2_2.jpg', 0, '2025-11-15 21:18:32'),
(53, 25, 'stand1_1.jpg', 1, '2025-11-15 21:18:32');

-- --------------------------------------------------------

--
-- Table structure for table `test_product_recommendations`
--

CREATE TABLE `test_product_recommendations` (
  `id` int NOT NULL,
  `product_id` int DEFAULT NULL,
  `recommended_id` int DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `test_product_recommendations`
--

INSERT INTO `test_product_recommendations` (`id`, `product_id`, `recommended_id`) VALUES
(1, 1, 5),
(2, 1, 6),
(3, 2, 6),
(4, 2, 7),
(5, 3, 7),
(6, 3, 8),
(7, 4, 8),
(8, 4, 9),
(9, 5, 9),
(10, 5, 10),
(11, 6, 10),
(12, 6, 11),
(13, 7, 11),
(14, 7, 12),
(15, 8, 12),
(16, 8, 13),
(17, 9, 13),
(18, 9, 14),
(19, 10, 14),
(20, 10, 15),
(21, 11, 15),
(22, 11, 16),
(23, 12, 16),
(24, 12, 17),
(25, 13, 17);

-- --------------------------------------------------------

--
-- Table structure for table `test_product_relations`
--

CREATE TABLE `test_product_relations` (
  `id` int NOT NULL,
  `product_id` int DEFAULT NULL,
  `related_id` int DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `test_product_relations`
--

INSERT INTO `test_product_relations` (`id`, `product_id`, `related_id`) VALUES
(1, 1, 2),
(2, 1, 3),
(3, 2, 1),
(4, 2, 4),
(5, 3, 4),
(6, 3, 5),
(7, 4, 5),
(8, 4, 6),
(9, 5, 6),
(10, 5, 7),
(11, 6, 7),
(12, 6, 8),
(13, 7, 8),
(14, 7, 9),
(15, 8, 9),
(16, 8, 10),
(17, 9, 10),
(18, 9, 11),
(19, 10, 11),
(20, 10, 12),
(21, 11, 12),
(22, 11, 13),
(23, 12, 13),
(24, 12, 14),
(25, 13, 14);

-- --------------------------------------------------------

--
-- Table structure for table `test_product_specs`
--

CREATE TABLE `test_product_specs` (
  `id` int NOT NULL,
  `product_id` int DEFAULT NULL,
  `spec_text` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `test_product_specs`
--

INSERT INTO `test_product_specs` (`id`, `product_id`, `spec_text`) VALUES
(1, 1, 'Battery: 20h'),
(2, 1, 'Weight: 200g'),
(3, 2, 'Battery: 18h'),
(4, 2, 'Weight: 210g'),
(5, 3, 'DPI: 16000'),
(6, 4, 'Switch: Mechanical'),
(7, 5, 'Battery: 7 days'),
(8, 6, 'Battery: 6 days'),
(9, 7, 'RAM: 16GB'),
(10, 8, 'RAM: 8GB'),
(11, 9, 'Bluetooth 5.0'),
(12, 10, 'Bluetooth 5.1'),
(13, 11, 'Screen: 10 inch'),
(14, 12, 'Screen: 10.5 inch'),
(15, 13, 'Lens: 24-70mm'),
(16, 14, 'Lens: 18-55mm'),
(17, 15, 'Battery: 5h'),
(18, 16, 'Battery: 6h'),
(19, 17, 'RAM: 8GB'),
(20, 18, 'RAM: 12GB'),
(21, 19, 'Resolution: 4K'),
(22, 20, 'Resolution: 1080p'),
(23, 21, 'Wireless'),
(24, 22, 'Ergonomic'),
(25, 23, 'Fast Charge'),
(26, 24, 'USB-C'),
(27, 25, 'Aluminium');

-- --------------------------------------------------------

--
-- Table structure for table `test_product_tags`
--

CREATE TABLE `test_product_tags` (
  `id` int NOT NULL,
  `product_id` int DEFAULT NULL,
  `tag` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `test_product_tags`
--

INSERT INTO `test_product_tags` (`id`, `product_id`, `tag`) VALUES
(1, 1, 'Wireless'),
(2, 1, 'Audio'),
(3, 2, 'Wireless'),
(4, 2, 'Audio'),
(5, 3, 'Gaming'),
(6, 4, 'Mechanical'),
(7, 5, 'Smartwatch'),
(8, 6, 'Smartwatch'),
(9, 7, 'Laptop'),
(10, 8, 'Laptop'),
(11, 9, 'Bluetooth'),
(12, 10, 'Bluetooth'),
(13, 11, 'Tablet'),
(14, 12, 'Tablet'),
(15, 13, 'Camera'),
(16, 14, 'Camera'),
(17, 15, 'Earbuds'),
(18, 16, 'Earbuds'),
(19, 17, 'Smartphone'),
(20, 18, 'Smartphone'),
(21, 19, 'Monitor'),
(22, 20, 'Monitor'),
(23, 21, 'Keyboard'),
(24, 22, 'Mouse'),
(25, 23, 'Charger'),
(26, 24, 'Charger'),
(27, 25, 'Stand');

-- --------------------------------------------------------

--
-- Table structure for table `test_product_variants`
--

CREATE TABLE `test_product_variants` (
  `id` int NOT NULL,
  `product_id` int DEFAULT NULL,
  `color` varchar(100) DEFAULT NULL,
  `storage` varchar(100) DEFAULT NULL,
  `price` decimal(10,2) DEFAULT NULL,
  `created_at` datetime DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `test_product_variants`
--

INSERT INTO `test_product_variants` (`id`, `product_id`, `color`, `storage`, `price`, `created_at`) VALUES
(1, 1, 'Black', '64GB', 99.99, '2025-11-15 21:18:32'),
(2, 1, 'White', '128GB', 119.99, '2025-11-15 21:18:32'),
(3, 2, 'Red', '64GB', 129.99, '2025-11-15 21:18:32'),
(4, 2, 'Blue', '128GB', 149.99, '2025-11-15 21:18:32'),
(5, 3, 'Black', 'Standard', 49.99, '2025-11-15 21:18:32'),
(6, 4, 'Black', 'Standard', 89.99, '2025-11-15 21:18:32'),
(7, 5, 'Black', 'Standard', 199.99, '2025-11-15 21:18:32'),
(8, 6, 'Silver', 'Standard', 179.99, '2025-11-15 21:18:32'),
(9, 7, 'Gray', '512GB', 899.99, '2025-11-15 21:18:32'),
(10, 8, 'Gray', '256GB', 749.99, '2025-11-15 21:18:32'),
(11, 9, 'Black', 'Standard', 59.99, '2025-11-15 21:18:32'),
(12, 10, 'Black', 'Standard', 69.99, '2025-11-15 21:18:32'),
(13, 11, 'Black', '64GB', 299.99, '2025-11-15 21:18:32'),
(14, 12, 'White', '128GB', 329.99, '2025-11-15 21:18:32'),
(15, 13, 'Black', 'Standard', 499.99, '2025-11-15 21:18:32'),
(16, 14, 'Black', 'Standard', 599.99, '2025-11-15 21:18:32'),
(17, 15, 'Black', 'Standard', 49.99, '2025-11-15 21:18:32'),
(18, 16, 'White', 'Standard', 59.99, '2025-11-15 21:18:32'),
(19, 17, 'Black', '128GB', 499.99, '2025-11-15 21:18:32'),
(20, 18, 'Black', '256GB', 699.99, '2025-11-15 21:18:32'),
(21, 19, 'Black', 'Standard', 349.99, '2025-11-15 21:18:32'),
(22, 20, 'Black', 'Standard', 199.99, '2025-11-15 21:18:32'),
(23, 21, 'Black', 'Standard', 59.99, '2025-11-15 21:18:32'),
(24, 22, 'Black', 'Standard', 39.99, '2025-11-15 21:18:32'),
(25, 23, 'White', 'Standard', 19.99, '2025-11-15 21:18:32'),
(26, 24, 'Black', 'Standard', 24.99, '2025-11-15 21:18:32'),
(27, 25, 'Black', 'Standard', 29.99, '2025-11-15 21:18:32');

-- --------------------------------------------------------

--
-- Table structure for table `trackings`
--

CREATE TABLE `trackings` (
  `id` int NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_general_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `transactions`
--

CREATE TABLE `transactions` (
  `id` int NOT NULL,
  `type` varchar(50) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `reference_id` int DEFAULT NULL,
  `amount` decimal(10,2) DEFAULT NULL,
  `transaction_date` datetime DEFAULT CURRENT_TIMESTAMP,
  `created_at` datetime DEFAULT CURRENT_TIMESTAMP,
  `updated_at` datetime DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `transactions`
--

INSERT INTO `transactions` (`id`, `type`, `reference_id`, `amount`, `transaction_date`, `created_at`, `updated_at`) VALUES
(1, 'income', 1, 18990.00, '2025-10-21 09:47:37', '2025-10-21 09:47:37', '2025-10-21 09:47:37'),
(2, 'income', 2, 72000.00, '2025-10-21 09:47:37', '2025-10-21 09:47:37', '2025-10-21 09:47:37'),
(3, 'expense', 1, 25000.00, '2025-10-21 09:47:37', '2025-10-21 09:47:37', '2025-10-21 09:47:37'),
(4, 'expense', 3, 10000.00, '2025-10-21 09:47:37', '2025-10-21 09:47:37', '2025-10-21 09:47:37');

-- --------------------------------------------------------

--
-- Table structure for table `transaction_type`
--

CREATE TABLE `transaction_type` (
  `id` int NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_general_ci NOT NULL,
  `created_at` datetime DEFAULT CURRENT_TIMESTAMP,
  `updated_at` datetime DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `transaction_type`
--

INSERT INTO `transaction_type` (`id`, `name`, `created_at`, `updated_at`) VALUES
(1, 'Purchase', '2025-10-21 10:26:22', '2025-10-21 10:26:22'),
(2, 'Sell', '2025-10-21 10:26:22', '2025-10-21 10:26:22'),
(3, 'Stock In', '2025-10-21 10:26:22', '2025-10-21 10:26:22');

-- --------------------------------------------------------

--
-- Table structure for table `units`
--

CREATE TABLE `units` (
  `id` int NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `created_at` datetime DEFAULT CURRENT_TIMESTAMP,
  `updated_at` datetime DEFAULT CURRENT_TIMESTAMP,
  `short_name` varchar(20) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `status` tinyint(1) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `units`
--

INSERT INTO `units` (`id`, `name`, `created_at`, `updated_at`, `short_name`, `status`) VALUES
(1, 'Piece', '2025-10-21 09:41:11', '2025-10-21 09:41:11', 'pc', NULL),
(2, 'Box', '2025-10-21 09:41:11', '2025-10-21 09:41:11', 'bx', NULL),
(3, 'Pack', '2025-10-21 09:41:11', '2025-10-21 09:41:11', 'pk', NULL),
(4, 'Set', '2025-10-21 09:41:11', '2025-10-21 09:41:11', 'set', NULL),
(5, 'Kilogram', '2025-10-21 09:41:11', '2025-10-21 09:41:11', 'kg', NULL),
(6, 'Gram', '2025-10-21 09:41:11', '2025-10-21 09:41:11', 'g', NULL),
(7, 'Meter', '2025-10-21 09:41:11', '2025-10-21 09:41:11', 'm', NULL),
(8, 'Liter', '2025-10-21 09:41:11', '2025-10-21 09:41:11', 'l', NULL),
(9, 'Dozen', '2025-10-21 09:41:11', '2025-10-21 09:41:11', 'dz', NULL),
(10, 'Pair', '2025-10-21 09:41:11', '2025-10-21 09:41:11', 'pr', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `username` varchar(255) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `email` varchar(255) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `phone` varchar(255) COLLATE utf8mb4_general_ci NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `photo` varchar(255) COLLATE utf8mb4_general_ci NOT NULL,
  `role_id` int DEFAULT NULL,
  `status` varchar(50) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `created_at` datetime DEFAULT CURRENT_TIMESTAMP,
  `updated_at` datetime DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `username`, `email`, `phone`, `password`, `photo`, `role_id`, `status`, `created_at`, `updated_at`) VALUES
(6, 'Mozammel Haq', 'mozammel29', 'hmojammel29@gmail.com', '01799007398', '$2y$10$w/PljnglFedfA2jGxJYJIuT4ysXXKB4jysvyDl.BJy23yCZLQp686', 'avatar-17.jpg', 1, 'Active', '2025-10-12 20:21:39', '2025-10-12 20:21:39');

-- --------------------------------------------------------

--
-- Table structure for table `vendors`
--

CREATE TABLE `vendors` (
  `id` int NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `email` varchar(255) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `phone` varchar(50) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `status` varchar(50) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `created_at` datetime DEFAULT CURRENT_TIMESTAMP,
  `updated_at` datetime DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `vendor_payments`
--

CREATE TABLE `vendor_payments` (
  `id` int NOT NULL,
  `vendor_id` int DEFAULT NULL,
  `amount` decimal(10,2) DEFAULT NULL,
  `payment_date` datetime DEFAULT CURRENT_TIMESTAMP,
  `created_at` datetime DEFAULT CURRENT_TIMESTAMP,
  `updated_at` datetime DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `warehouses`
--

CREATE TABLE `warehouses` (
  `id` int NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `location` text COLLATE utf8mb4_general_ci,
  `created_at` datetime DEFAULT CURRENT_TIMESTAMP,
  `updated_at` datetime DEFAULT CURRENT_TIMESTAMP,
  `manager` varchar(255) COLLATE utf8mb4_general_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_general_ci NOT NULL,
  `phone` varchar(20) COLLATE utf8mb4_general_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `warehouses`
--

INSERT INTO `warehouses` (`id`, `name`, `location`, `created_at`, `updated_at`, `manager`, `email`, `phone`) VALUES
(1, 'Dhaka Central', 'Motijheel, Dhaka', '2025-10-21 09:42:26', '2025-10-21 09:42:26', 'Rahim Uddin', 'rahim@skytech.com', '01799001122'),
(2, 'Chittagong Branch', 'Agrabad, Chittagong', '2025-10-21 09:42:26', '2025-10-21 09:42:26', 'Hasan Ali', 'hasan@skytech.com', '01799002233'),
(3, 'Rajshahi Storage', 'Kazla, Rajshahi', '2025-10-21 09:42:26', '2025-10-21 09:42:26', 'Sajjad Karim', 'sajjad@skytech.com', '01799003344'),
(4, 'Sylhet Hub', 'Zindabazar, Sylhet', '2025-10-21 09:42:26', '2025-10-21 09:42:26', 'Rafi Rahman', 'rafi@skytech.com', '01799004455');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `bank_accounts`
--
ALTER TABLE `bank_accounts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `brands`
--
ALTER TABLE `brands`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `contact_messages`
--
ALTER TABLE `contact_messages`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `currencies`
--
ALTER TABLE `currencies`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `customers`
--
ALTER TABLE `customers`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `customer_addresses`
--
ALTER TABLE `customer_addresses`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `discount_types`
--
ALTER TABLE `discount_types`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `expenses`
--
ALTER TABLE `expenses`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `incomes`
--
ALTER TABLE `incomes`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `inventory`
--
ALTER TABLE `inventory`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `invoices`
--
ALTER TABLE `invoices`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `invoice_templates`
--
ALTER TABLE `invoice_templates`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `media`
--
ALTER TABLE `media`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `news`
--
ALTER TABLE `news`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `order_details`
--
ALTER TABLE `order_details`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pages`
--
ALTER TABLE `pages`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `payments_refunds`
--
ALTER TABLE `payments_refunds`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `payment_methods`
--
ALTER TABLE `payment_methods`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `permissions`
--
ALTER TABLE `permissions`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `product_images`
--
ALTER TABLE `product_images`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `product_variations`
--
ALTER TABLE `product_variations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `purchases`
--
ALTER TABLE `purchases`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `purchase_details`
--
ALTER TABLE `purchase_details`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `roles`
--
ALTER TABLE `roles`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `role_permissions`
--
ALTER TABLE `role_permissions`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `settings`
--
ALTER TABLE `settings`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `status`
--
ALTER TABLE `status`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `suppliers`
--
ALTER TABLE `suppliers`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `support_tickets`
--
ALTER TABLE `support_tickets`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `taxes`
--
ALTER TABLE `taxes`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tax_rates`
--
ALTER TABLE `tax_rates`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `test_products`
--
ALTER TABLE `test_products`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `slug_unique` (`slug`);

--
-- Indexes for table `test_product_badges`
--
ALTER TABLE `test_product_badges`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `test_product_brands`
--
ALTER TABLE `test_product_brands`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `test_product_categories`
--
ALTER TABLE `test_product_categories`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `slug_unique` (`slug`);

--
-- Indexes for table `test_product_highlights`
--
ALTER TABLE `test_product_highlights`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `test_product_images`
--
ALTER TABLE `test_product_images`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `test_product_recommendations`
--
ALTER TABLE `test_product_recommendations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `test_product_relations`
--
ALTER TABLE `test_product_relations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `test_product_specs`
--
ALTER TABLE `test_product_specs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `test_product_tags`
--
ALTER TABLE `test_product_tags`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `test_product_variants`
--
ALTER TABLE `test_product_variants`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `trackings`
--
ALTER TABLE `trackings`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `transactions`
--
ALTER TABLE `transactions`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `transaction_type`
--
ALTER TABLE `transaction_type`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `units`
--
ALTER TABLE `units`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `vendors`
--
ALTER TABLE `vendors`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `vendor_payments`
--
ALTER TABLE `vendor_payments`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `warehouses`
--
ALTER TABLE `warehouses`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `bank_accounts`
--
ALTER TABLE `bank_accounts`
  MODIFY `id` int NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `brands`
--
ALTER TABLE `brands`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `contact_messages`
--
ALTER TABLE `contact_messages`
  MODIFY `id` int NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `currencies`
--
ALTER TABLE `currencies`
  MODIFY `id` int NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `customers`
--
ALTER TABLE `customers`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `customer_addresses`
--
ALTER TABLE `customer_addresses`
  MODIFY `id` int NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `discount_types`
--
ALTER TABLE `discount_types`
  MODIFY `id` int NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `expenses`
--
ALTER TABLE `expenses`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `incomes`
--
ALTER TABLE `incomes`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `inventory`
--
ALTER TABLE `inventory`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `invoices`
--
ALTER TABLE `invoices`
  MODIFY `id` int NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `invoice_templates`
--
ALTER TABLE `invoice_templates`
  MODIFY `id` int NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `media`
--
ALTER TABLE `media`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `news`
--
ALTER TABLE `news`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `order_details`
--
ALTER TABLE `order_details`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `pages`
--
ALTER TABLE `pages`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `payments_refunds`
--
ALTER TABLE `payments_refunds`
  MODIFY `id` int NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `payment_methods`
--
ALTER TABLE `payment_methods`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `permissions`
--
ALTER TABLE `permissions`
  MODIFY `id` int NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `product_images`
--
ALTER TABLE `product_images`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT for table `product_variations`
--
ALTER TABLE `product_variations`
  MODIFY `id` int NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `purchases`
--
ALTER TABLE `purchases`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `purchase_details`
--
ALTER TABLE `purchase_details`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `roles`
--
ALTER TABLE `roles`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `role_permissions`
--
ALTER TABLE `role_permissions`
  MODIFY `id` int NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `settings`
--
ALTER TABLE `settings`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `status`
--
ALTER TABLE `status`
  MODIFY `id` int NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `suppliers`
--
ALTER TABLE `suppliers`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `support_tickets`
--
ALTER TABLE `support_tickets`
  MODIFY `id` int NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `taxes`
--
ALTER TABLE `taxes`
  MODIFY `id` int NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tax_rates`
--
ALTER TABLE `tax_rates`
  MODIFY `id` int NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `test_products`
--
ALTER TABLE `test_products`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT for table `test_product_badges`
--
ALTER TABLE `test_product_badges`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT for table `test_product_brands`
--
ALTER TABLE `test_product_brands`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT for table `test_product_categories`
--
ALTER TABLE `test_product_categories`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `test_product_highlights`
--
ALTER TABLE `test_product_highlights`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT for table `test_product_images`
--
ALTER TABLE `test_product_images`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=54;

--
-- AUTO_INCREMENT for table `test_product_recommendations`
--
ALTER TABLE `test_product_recommendations`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT for table `test_product_relations`
--
ALTER TABLE `test_product_relations`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT for table `test_product_specs`
--
ALTER TABLE `test_product_specs`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;

--
-- AUTO_INCREMENT for table `test_product_tags`
--
ALTER TABLE `test_product_tags`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;

--
-- AUTO_INCREMENT for table `test_product_variants`
--
ALTER TABLE `test_product_variants`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;

--
-- AUTO_INCREMENT for table `trackings`
--
ALTER TABLE `trackings`
  MODIFY `id` int NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `transactions`
--
ALTER TABLE `transactions`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `transaction_type`
--
ALTER TABLE `transaction_type`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `units`
--
ALTER TABLE `units`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `vendors`
--
ALTER TABLE `vendors`
  MODIFY `id` int NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `vendor_payments`
--
ALTER TABLE `vendor_payments`
  MODIFY `id` int NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `warehouses`
--
ALTER TABLE `warehouses`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
