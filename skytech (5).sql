-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 21, 2025 at 09:19 AM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

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
  `id` int(11) NOT NULL,
  `bank_name` varchar(255) DEFAULT NULL,
  `account_number` varchar(50) DEFAULT NULL,
  `created_at` datetime DEFAULT current_timestamp(),
  `updated_at` datetime DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `brands`
--

CREATE TABLE `brands` (
  `id` int(11) NOT NULL,
  `name` varchar(255) DEFAULT NULL,
  `description` text DEFAULT NULL,
  `created_at` datetime DEFAULT current_timestamp(),
  `updated_at` datetime DEFAULT current_timestamp()
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
  `id` int(11) NOT NULL,
  `name` varchar(255) DEFAULT NULL,
  `description` text DEFAULT NULL,
  `image_path` varchar(255) DEFAULT NULL,
  `created_at` datetime DEFAULT current_timestamp(),
  `updated_at` datetime DEFAULT current_timestamp(),
  `status` tinyint(1) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `name`, `description`, `image_path`, `created_at`, `updated_at`, `status`) VALUES
(1, 'Smartphones', 'Latest Android and iOS phones', 'product-01.jpg', '2025-10-21 09:40:52', '2025-10-21 09:40:52', NULL),
(2, 'Laptops', 'Personal and gaming laptops', 'product-08.jpg', '2025-10-21 09:40:52', '2025-10-21 09:40:52', NULL),
(3, 'Desktops', 'Office and gaming desktops', 'email-attach-02.jpg', '2025-10-21 09:40:52', '2025-10-21 09:40:52', NULL),
(4, 'Computer Accessories', 'Keyboards, mice, etc.', 'img-03.jpg-04.jpg', '2025-10-21 09:40:52', '2025-10-21 09:40:52', NULL),
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
  `id` int(11) NOT NULL,
  `customer_id` int(11) DEFAULT NULL,
  `subject` varchar(255) DEFAULT NULL,
  `message` text DEFAULT NULL,
  `created_at` datetime DEFAULT current_timestamp(),
  `updated_at` datetime DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `currencies`
--

CREATE TABLE `currencies` (
  `id` int(11) NOT NULL,
  `name` varchar(50) DEFAULT NULL,
  `code` varchar(10) DEFAULT NULL,
  `symbol` varchar(10) DEFAULT NULL,
  `created_at` datetime DEFAULT current_timestamp(),
  `updated_at` datetime DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `customers`
--

CREATE TABLE `customers` (
  `id` int(11) NOT NULL,
  `name` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `phone` varchar(50) DEFAULT NULL,
  `photo` varchar(255) NOT NULL,
  `address` varchar(255) NOT NULL,
  `status` varchar(255) NOT NULL,
  `created_at` datetime DEFAULT current_timestamp(),
  `updated_at` datetime DEFAULT current_timestamp()
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
  `id` int(11) NOT NULL,
  `customer_id` int(11) NOT NULL,
  `shipping_address` varchar(255) NOT NULL,
  `billing_address` varchar(255) NOT NULL,
  `created_at` datetime DEFAULT current_timestamp(),
  `updated_at` datetime DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `discount_types`
--

CREATE TABLE `discount_types` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `expenses`
--

CREATE TABLE `expenses` (
  `id` int(11) NOT NULL,
  `amount` decimal(10,2) DEFAULT NULL,
  `category` varchar(255) DEFAULT NULL,
  `expense_date` datetime DEFAULT current_timestamp(),
  `created_at` datetime DEFAULT current_timestamp(),
  `updated_at` datetime DEFAULT current_timestamp()
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
  `id` int(11) NOT NULL,
  `amount` decimal(10,2) DEFAULT NULL,
  `source` varchar(255) DEFAULT NULL,
  `received_date` datetime DEFAULT current_timestamp(),
  `created_at` datetime DEFAULT current_timestamp(),
  `updated_at` datetime DEFAULT current_timestamp()
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
  `id` int(11) NOT NULL,
  `product_id` int(11) DEFAULT NULL,
  `warehouse_id` int(11) DEFAULT NULL,
  `supplier_id` int(11) DEFAULT NULL,
  `quantity` int(11) DEFAULT NULL,
  `created_at` datetime DEFAULT current_timestamp(),
  `updated_at` datetime DEFAULT current_timestamp(),
  `transaction_type_id` int(11) DEFAULT NULL,
  `remarks` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `inventory`
--

INSERT INTO `inventory` (`id`, `product_id`, `warehouse_id`, `supplier_id`, `quantity`, `created_at`, `updated_at`, `transaction_type_id`, `remarks`) VALUES
(1, 1, 1, 2, 50, '2025-10-21 10:03:56', '2025-10-21 10:03:56', 1, ''),
(2, 1, 0, 0, -3, '2025-10-21 10:07:25', '2025-10-21 10:07:25', 2, ''),
(3, 1, 0, 0, -2, '2025-10-21 11:27:06', '2025-10-21 11:27:06', 2, ''),
(4, 1, 1, 3, 10, '2025-10-21 11:27:31', '2025-10-21 11:27:31', 1, ''),
(5, 10, 1, 5, 1, '2025-10-21 12:45:29', '2025-10-21 12:45:29', 1, '');

-- --------------------------------------------------------

--
-- Table structure for table `invoices`
--

CREATE TABLE `invoices` (
  `id` int(11) NOT NULL,
  `customer_id` int(11) NOT NULL,
  `order_id` int(11) DEFAULT NULL,
  `invoice_date` datetime DEFAULT current_timestamp(),
  `due_date` datetime DEFAULT current_timestamp(),
  `total_amount` decimal(10,2) DEFAULT NULL,
  `status` varchar(255) NOT NULL,
  `payment_method` varchar(255) NOT NULL,
  `created_at` datetime DEFAULT current_timestamp(),
  `updated_at` datetime DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `invoice_templates`
--

CREATE TABLE `invoice_templates` (
  `id` int(11) NOT NULL,
  `name` varchar(255) DEFAULT NULL,
  `template_html` text DEFAULT NULL,
  `created_at` datetime DEFAULT current_timestamp(),
  `updated_at` datetime DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `media`
--

CREATE TABLE `media` (
  `id` int(11) NOT NULL,
  `type` varchar(50) DEFAULT NULL,
  `file_path` varchar(255) DEFAULT NULL,
  `created_at` datetime DEFAULT current_timestamp(),
  `updated_at` datetime DEFAULT current_timestamp()
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
  `id` int(11) NOT NULL,
  `title` varchar(255) DEFAULT NULL,
  `content` text DEFAULT NULL,
  `published_at` datetime DEFAULT current_timestamp(),
  `created_at` datetime DEFAULT current_timestamp(),
  `updated_at` datetime DEFAULT current_timestamp()
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
  `id` int(11) NOT NULL,
  `customer_id` int(11) DEFAULT NULL,
  `order_date` datetime DEFAULT current_timestamp(),
  `status` varchar(50) DEFAULT NULL,
  `total_amount` decimal(10,2) DEFAULT NULL,
  `created_at` datetime DEFAULT current_timestamp(),
  `updated_at` datetime DEFAULT current_timestamp(),
  `delivery_date` date DEFAULT NULL,
  `shipping_address` varchar(255) DEFAULT NULL,
  `billing_address` varchar(255) DEFAULT NULL,
  `paid_amount` decimal(10,2) DEFAULT NULL,
  `discount` float DEFAULT NULL,
  `tracking_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`id`, `customer_id`, `order_date`, `status`, `total_amount`, `created_at`, `updated_at`, `delivery_date`, `shipping_address`, `billing_address`, `paid_amount`, `discount`, `tracking_id`) VALUES
(1, 1, '2025-10-21 00:00:00', 'paid', 56970.00, '2025-10-21 10:07:25', '2025-10-21 10:07:25', '2025-10-25', 'Mirpur, Dhaka', '', 0.00, 0, 0),
(2, 2, '2025-10-21 00:00:00', 'paid', 37980.00, '2025-10-21 11:27:06', '2025-10-21 11:27:06', '2025-10-25', 'Uttara, Dhaka', '', 0.00, 0, 0);

-- --------------------------------------------------------

--
-- Table structure for table `order_details`
--

CREATE TABLE `order_details` (
  `id` int(11) NOT NULL,
  `order_id` int(11) DEFAULT NULL,
  `product_id` int(11) DEFAULT NULL,
  `variation_id` int(11) DEFAULT NULL,
  `quantity` int(11) DEFAULT NULL,
  `price` decimal(10,2) DEFAULT NULL,
  `created_at` datetime DEFAULT current_timestamp(),
  `updated_at` datetime DEFAULT current_timestamp(),
  `discount` float DEFAULT NULL,
  `vat` float DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `order_details`
--

INSERT INTO `order_details` (`id`, `order_id`, `product_id`, `variation_id`, `quantity`, `price`, `created_at`, `updated_at`, `discount`, `vat`) VALUES
(1, 1, 1, 0, 3, 18990.00, '2025-10-21 10:07:25', '2025-10-21 10:07:25', 0, 0),
(2, 2, 1, 0, 2, 18990.00, '2025-10-21 11:27:06', '2025-10-21 11:27:06', 0, 0);

-- --------------------------------------------------------

--
-- Table structure for table `pages`
--

CREATE TABLE `pages` (
  `id` int(11) NOT NULL,
  `title` varchar(255) DEFAULT NULL,
  `content` text DEFAULT NULL,
  `created_at` datetime DEFAULT current_timestamp(),
  `updated_at` datetime DEFAULT current_timestamp()
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
  `id` int(11) NOT NULL,
  `order_id` int(11) DEFAULT NULL,
  `type` varchar(50) DEFAULT NULL,
  `amount` decimal(10,2) DEFAULT NULL,
  `payment_date` datetime DEFAULT current_timestamp(),
  `created_at` datetime DEFAULT current_timestamp(),
  `updated_at` datetime DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `payment_methods`
--

CREATE TABLE `payment_methods` (
  `id` int(11) NOT NULL,
  `name` varchar(255) DEFAULT NULL,
  `details` text DEFAULT NULL,
  `created_at` datetime DEFAULT current_timestamp(),
  `updated_at` datetime DEFAULT current_timestamp()
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
  `id` int(11) NOT NULL,
  `name` varchar(255) DEFAULT NULL,
  `description` text DEFAULT NULL,
  `created_at` datetime DEFAULT current_timestamp(),
  `updated_at` datetime DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` int(11) NOT NULL,
  `name` varchar(255) DEFAULT NULL,
  `category_id` int(11) DEFAULT NULL,
  `brand_id` int(11) DEFAULT NULL,
  `unit_id` int(11) DEFAULT NULL,
  `sku` varchar(100) DEFAULT NULL,
  `selling_price` decimal(10,2) DEFAULT NULL,
  `purchase_price` decimal(10,2) DEFAULT NULL,
  `description` text DEFAULT NULL,
  `created_at` datetime DEFAULT current_timestamp(),
  `updated_at` datetime DEFAULT current_timestamp(),
  `barcode` varchar(50) DEFAULT NULL,
  `alert_quantity` int(11) DEFAULT NULL,
  `discount` decimal(10,2) DEFAULT NULL,
  `tax_id` int(11) DEFAULT NULL
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
  `id` int(11) NOT NULL,
  `product_id` int(11) DEFAULT NULL,
  `image_path` varchar(255) DEFAULT NULL,
  `is_main` tinyint(1) DEFAULT NULL,
  `created_at` datetime DEFAULT current_timestamp(),
  `updated_at` datetime DEFAULT current_timestamp()
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
  `id` int(11) NOT NULL,
  `product_id` int(11) DEFAULT NULL,
  `variation_name` varchar(100) DEFAULT NULL,
  `variation_value` varchar(100) DEFAULT NULL,
  `selling_price` decimal(10,2) DEFAULT NULL,
  `purchase_price` decimal(10,2) DEFAULT NULL,
  `sku` varchar(100) DEFAULT NULL,
  `created_at` datetime DEFAULT current_timestamp(),
  `updated_at` datetime DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `purchases`
--

CREATE TABLE `purchases` (
  `id` int(11) NOT NULL,
  `supplier_id` int(11) DEFAULT NULL,
  `warehouse_id` int(11) NOT NULL,
  `order_date` datetime DEFAULT current_timestamp(),
  `status` varchar(50) DEFAULT NULL,
  `total_amount` decimal(10,2) DEFAULT NULL,
  `created_at` datetime DEFAULT current_timestamp(),
  `updated_at` datetime DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `purchases`
--

INSERT INTO `purchases` (`id`, `supplier_id`, `warehouse_id`, `order_date`, `status`, `total_amount`, `created_at`, `updated_at`) VALUES
(1, 2, 1, '2025-10-15 00:00:00', 'paid', 800000.00, '2025-10-21 10:03:56', '2025-10-21 10:03:56'),
(2, 3, 1, '2025-10-23 00:00:00', 'paid', 160000.00, '2025-10-21 11:27:31', '2025-10-21 11:27:31'),
(3, 5, 1, '2025-10-25 00:00:00', 'paid', 4300.00, '2025-10-21 12:45:29', '2025-10-21 12:45:29');

-- --------------------------------------------------------

--
-- Table structure for table `purchase_details`
--

CREATE TABLE `purchase_details` (
  `id` int(11) NOT NULL,
  `purchase_id` int(11) DEFAULT NULL,
  `product_id` int(11) DEFAULT NULL,
  `quantity` int(11) DEFAULT NULL,
  `price` decimal(10,2) DEFAULT NULL,
  `created_at` datetime DEFAULT current_timestamp(),
  `updated_at` datetime DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `purchase_details`
--

INSERT INTO `purchase_details` (`id`, `purchase_id`, `product_id`, `quantity`, `price`, `created_at`, `updated_at`) VALUES
(1, 1, 1, 50, 16000.00, '2025-10-21 10:03:56', '2025-10-21 10:03:56'),
(2, 2, 1, 10, 16000.00, '2025-10-21 11:27:31', '2025-10-21 11:27:31'),
(3, 3, 10, 1, 4300.00, '2025-10-21 12:45:29', '2025-10-21 12:45:29');

-- --------------------------------------------------------

--
-- Table structure for table `roles`
--

CREATE TABLE `roles` (
  `id` int(11) NOT NULL,
  `name` varchar(255) DEFAULT NULL,
  `description` text DEFAULT NULL,
  `created_at` datetime DEFAULT current_timestamp(),
  `updated_at` datetime DEFAULT current_timestamp()
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
  `id` int(11) NOT NULL,
  `role_id` int(11) DEFAULT NULL,
  `permission_id` int(11) DEFAULT NULL,
  `created_at` datetime DEFAULT current_timestamp(),
  `updated_at` datetime DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `settings`
--

CREATE TABLE `settings` (
  `id` int(11) NOT NULL,
  `key_name` varchar(255) DEFAULT NULL,
  `value` text DEFAULT NULL,
  `created_at` datetime DEFAULT current_timestamp(),
  `updated_at` datetime DEFAULT current_timestamp()
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
  `id` int(11) NOT NULL,
  `person_status` varchar(255) NOT NULL,
  `item_status` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `suppliers`
--

CREATE TABLE `suppliers` (
  `id` int(11) NOT NULL,
  `name` varchar(255) DEFAULT NULL,
  `contact_person` varchar(255) DEFAULT NULL,
  `phone` varchar(50) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `created_at` datetime DEFAULT current_timestamp(),
  `updated_at` datetime DEFAULT current_timestamp()
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
  `id` int(11) NOT NULL,
  `customer_id` int(11) DEFAULT NULL,
  `subject` varchar(255) DEFAULT NULL,
  `description` text DEFAULT NULL,
  `status` varchar(50) DEFAULT NULL,
  `priority` varchar(50) DEFAULT NULL,
  `created_at` datetime DEFAULT current_timestamp(),
  `updated_at` datetime DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `taxes`
--

CREATE TABLE `taxes` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `tax_rates`
--

CREATE TABLE `tax_rates` (
  `id` int(11) NOT NULL,
  `name` varchar(255) DEFAULT NULL,
  `rate` decimal(5,2) DEFAULT NULL,
  `created_at` datetime DEFAULT current_timestamp(),
  `updated_at` datetime DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `trackings`
--

CREATE TABLE `trackings` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `transactions`
--

CREATE TABLE `transactions` (
  `id` int(11) NOT NULL,
  `type` varchar(50) DEFAULT NULL,
  `reference_id` int(11) DEFAULT NULL,
  `amount` decimal(10,2) DEFAULT NULL,
  `transaction_date` datetime DEFAULT current_timestamp(),
  `created_at` datetime DEFAULT current_timestamp(),
  `updated_at` datetime DEFAULT current_timestamp()
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
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `created_at` datetime DEFAULT current_timestamp(),
  `updated_at` datetime DEFAULT current_timestamp()
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
  `id` int(11) NOT NULL,
  `name` varchar(255) DEFAULT NULL,
  `created_at` datetime DEFAULT current_timestamp(),
  `updated_at` datetime DEFAULT current_timestamp(),
  `short_name` varchar(20) DEFAULT NULL,
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
  `id` int(11) NOT NULL,
  `name` varchar(255) DEFAULT NULL,
  `username` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `phone` varchar(255) NOT NULL,
  `password` varchar(255) DEFAULT NULL,
  `photo` varchar(255) NOT NULL,
  `role_id` int(11) DEFAULT NULL,
  `status` varchar(50) DEFAULT NULL,
  `created_at` datetime DEFAULT current_timestamp(),
  `updated_at` datetime DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `username`, `email`, `phone`, `password`, `photo`, `role_id`, `status`, `created_at`, `updated_at`) VALUES
(6, 'Mozammel Haq', 'mozammel29', 'hmojammel29@gmail.com', '01799007398', '$2y$10$w/PljnglFedfA2jGxJYJIuT4ysXXKB4jysvyDl.BJy23yCZLQp686', 'avatar-06.jpg', 1, 'Active', '2025-10-12 20:21:39', '2025-10-12 20:21:39');

-- --------------------------------------------------------

--
-- Table structure for table `vendors`
--

CREATE TABLE `vendors` (
  `id` int(11) NOT NULL,
  `name` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `phone` varchar(50) DEFAULT NULL,
  `status` varchar(50) DEFAULT NULL,
  `created_at` datetime DEFAULT current_timestamp(),
  `updated_at` datetime DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `vendor_payments`
--

CREATE TABLE `vendor_payments` (
  `id` int(11) NOT NULL,
  `vendor_id` int(11) DEFAULT NULL,
  `amount` decimal(10,2) DEFAULT NULL,
  `payment_date` datetime DEFAULT current_timestamp(),
  `created_at` datetime DEFAULT current_timestamp(),
  `updated_at` datetime DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `warehouses`
--

CREATE TABLE `warehouses` (
  `id` int(11) NOT NULL,
  `name` varchar(255) DEFAULT NULL,
  `location` text DEFAULT NULL,
  `created_at` datetime DEFAULT current_timestamp(),
  `updated_at` datetime DEFAULT current_timestamp(),
  `manager` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `phone` varchar(20) NOT NULL
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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `brands`
--
ALTER TABLE `brands`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `contact_messages`
--
ALTER TABLE `contact_messages`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `currencies`
--
ALTER TABLE `currencies`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `customers`
--
ALTER TABLE `customers`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `customer_addresses`
--
ALTER TABLE `customer_addresses`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `discount_types`
--
ALTER TABLE `discount_types`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `expenses`
--
ALTER TABLE `expenses`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `incomes`
--
ALTER TABLE `incomes`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `inventory`
--
ALTER TABLE `inventory`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `invoices`
--
ALTER TABLE `invoices`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `invoice_templates`
--
ALTER TABLE `invoice_templates`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `media`
--
ALTER TABLE `media`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `news`
--
ALTER TABLE `news`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `order_details`
--
ALTER TABLE `order_details`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `pages`
--
ALTER TABLE `pages`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `payments_refunds`
--
ALTER TABLE `payments_refunds`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `payment_methods`
--
ALTER TABLE `payment_methods`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `permissions`
--
ALTER TABLE `permissions`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `product_images`
--
ALTER TABLE `product_images`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `product_variations`
--
ALTER TABLE `product_variations`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `purchases`
--
ALTER TABLE `purchases`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `purchase_details`
--
ALTER TABLE `purchase_details`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `roles`
--
ALTER TABLE `roles`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `role_permissions`
--
ALTER TABLE `role_permissions`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `settings`
--
ALTER TABLE `settings`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `status`
--
ALTER TABLE `status`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `suppliers`
--
ALTER TABLE `suppliers`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `support_tickets`
--
ALTER TABLE `support_tickets`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `taxes`
--
ALTER TABLE `taxes`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tax_rates`
--
ALTER TABLE `tax_rates`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `trackings`
--
ALTER TABLE `trackings`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `transactions`
--
ALTER TABLE `transactions`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `transaction_type`
--
ALTER TABLE `transaction_type`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `units`
--
ALTER TABLE `units`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `vendors`
--
ALTER TABLE `vendors`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `vendor_payments`
--
ALTER TABLE `vendor_payments`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `warehouses`
--
ALTER TABLE `warehouses`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
