-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 11, 2025 at 09:18 AM
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
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `brands`
--

CREATE TABLE `brands` (
  `id` int(11) NOT NULL,
  `name` varchar(255) DEFAULT NULL,
  `description` text DEFAULT NULL,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `brands`
--

INSERT INTO `brands` (`id`, `name`, `description`, `created_at`, `updated_at`) VALUES
(1, 'Dell', 'Dell Computers', '2025-09-30 23:02:31', '2025-09-30 23:02:31'),
(2, 'HP', 'Hewlett Packard', '2025-09-30 23:02:31', '2025-09-30 23:02:31'),
(3, 'Apple', 'Apple Inc.', '2025-09-30 23:02:31', '2025-09-30 23:02:31'),
(4, 'Logitech', 'Logitech peripherals', '2025-09-30 23:02:31', '2025-09-30 23:02:31'),
(5, 'Asus', 'Asus Electronics', '2025-09-30 23:02:31', '2025-09-30 23:02:31'),
(8, NULL, NULL, NULL, NULL),
(9, NULL, NULL, NULL, NULL);

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
(1, 'Laptops', 'Portable computers', 'product-01.jpg', '2025-09-30 23:02:31', '2025-09-30 23:02:31', NULL),
(2, 'Desktops', 'Desktop computers', 'product-02.jpg', '2025-09-30 23:02:31', '2025-09-30 23:02:31', NULL),
(3, 'Mobile Phones', 'Smartphones', 'product-03.jpg', '2025-09-30 23:02:31', '2025-09-30 23:02:31', NULL),
(4, 'Computer Accessories', 'Keyboards, Mouse, etc.', 'product-04.jpg', '2025-09-30 23:02:31', '2025-09-30 23:02:31', NULL),
(5, 'Components', 'Motherboards, GPUs, RAM, etc.', 'product-05.jpg', '2025-09-30 23:02:31', '2025-09-30 23:02:31', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `contact_messages`
--

CREATE TABLE `contact_messages` (
  `id` int(11) NOT NULL,
  `customer_id` int(11) DEFAULT NULL,
  `subject` varchar(255) DEFAULT NULL,
  `message` text DEFAULT NULL,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `contact_messages`
--

INSERT INTO `contact_messages` (`id`, `customer_id`, `subject`, `message`, `created_at`, `updated_at`) VALUES
(1, 1, 'Product Inquiry', 'Do you have Dell Inspiron in stock?', '2025-09-30 23:02:31', '2025-09-30 23:02:31'),
(2, 2, 'Shipping Question', 'When will my order arrive?', '2025-09-30 23:02:31', '2025-09-30 23:02:31');

-- --------------------------------------------------------

--
-- Table structure for table `currencies`
--

CREATE TABLE `currencies` (
  `id` int(11) NOT NULL,
  `name` varchar(50) DEFAULT NULL,
  `code` varchar(10) DEFAULT NULL,
  `symbol` varchar(10) DEFAULT NULL,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `currencies`
--

INSERT INTO `currencies` (`id`, `name`, `code`, `symbol`, `created_at`, `updated_at`) VALUES
(1, 'US Dollar', 'USD', '$', '2025-09-30 23:02:31', '2025-09-30 23:02:31'),
(2, 'Bangladeshi Taka', 'BDT', '৳', '2025-09-30 23:02:31', '2025-09-30 23:02:31');

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
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `customers`
--

INSERT INTO `customers` (`id`, `name`, `email`, `phone`, `photo`, `address`, `status`, `created_at`, `updated_at`) VALUES
(1, 'Ali Khan', 'ali@example.com', '01711111111', 'avatar-01.jpg', 'Karachi', 'Active', '2025-10-07 22:20:08', '2025-10-07 22:20:08'),
(2, 'Sara Rahman', 'sara@example.com', '01712222222', 'avatar-07.jpg', 'Kashmir', 'Active', '2025-10-07 22:21:07', '2025-10-07 22:21:07'),
(12, 'Robi', 'robi@example.com', '12121212121', 'avatar-23-jpg.jpg', 'Delhi', 'Active', '2025-10-07 22:21:58', '2025-10-07 22:21:58');

-- --------------------------------------------------------

--
-- Table structure for table `customer_addresses`
--

CREATE TABLE `customer_addresses` (
  `id` int(11) NOT NULL,
  `customer_id` int(11) NOT NULL,
  `shipping_address` varchar(255) NOT NULL,
  `billing_address` varchar(255) NOT NULL,
  `created_at` date NOT NULL DEFAULT current_timestamp(),
  `updated_at` date NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `discount_types`
--

CREATE TABLE `discount_types` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `discount_types`
--

INSERT INTO `discount_types` (`id`, `name`) VALUES
(1, '%'),
(2, 'Fixed');

-- --------------------------------------------------------

--
-- Table structure for table `expenses`
--

CREATE TABLE `expenses` (
  `id` int(11) NOT NULL,
  `amount` decimal(10,2) DEFAULT NULL,
  `category` varchar(255) DEFAULT NULL,
  `expense_date` datetime DEFAULT NULL,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `expenses`
--

INSERT INTO `expenses` (`id`, `amount`, `category`, `expense_date`, `created_at`, `updated_at`) VALUES
(1, 500.00, 'Purchase Laptops', '2025-09-30 23:02:31', '2025-09-30 23:02:31', '2025-09-30 23:02:31'),
(2, 300.00, 'Office Supplies', '2025-09-30 23:02:31', '2025-09-30 23:02:31', '2025-09-30 23:02:31'),
(3, 1500.00, 'Purchase Gaming Desktop', '2025-09-30 23:03:15', '2025-09-30 23:03:15', '2025-09-30 23:03:15'),
(4, 700.00, 'Purchase RAM and GPU', '2025-09-30 23:03:15', '2025-09-30 23:03:15', '2025-09-30 23:03:15');

-- --------------------------------------------------------

--
-- Table structure for table `incomes`
--

CREATE TABLE `incomes` (
  `id` int(11) NOT NULL,
  `amount` decimal(10,2) DEFAULT NULL,
  `source` varchar(255) DEFAULT NULL,
  `received_date` datetime DEFAULT NULL,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `incomes`
--

INSERT INTO `incomes` (`id`, `amount`, `source`, `received_date`, `created_at`, `updated_at`) VALUES
(1, 1220.00, 'Order #1', '2025-09-30 23:02:31', '2025-09-30 23:02:31', '2025-09-30 23:02:31'),
(2, 730.00, 'Order #2', '2025-09-30 23:02:31', '2025-09-30 23:02:31', '2025-09-30 23:02:31'),
(3, 3499.00, 'Order #3', '2025-09-30 23:03:15', '2025-09-30 23:03:15', '2025-09-30 23:03:15'),
(4, 1380.00, 'Order #4', '2025-09-30 23:03:15', '2025-09-30 23:03:15', '2025-09-30 23:03:15');

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
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL,
  `transaction_type_id` int(11) DEFAULT NULL,
  `remarks` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `inventory`
--

INSERT INTO `inventory` (`id`, `product_id`, `warehouse_id`, `supplier_id`, `quantity`, `created_at`, `updated_at`, `transaction_type_id`, `remarks`) VALUES
(1, 1, 1, 1, 10, '2025-09-30 23:02:31', '2025-09-30 23:02:31', NULL, NULL),
(2, 1, 2, 2, 5, '2025-09-30 23:02:31', '2025-09-30 23:02:31', NULL, NULL),
(3, 2, 1, 1, 8, '2025-09-30 23:02:31', '2025-09-30 23:02:31', NULL, NULL),
(4, 3, 1, 2, 15, '2025-09-30 23:02:31', '2025-09-30 23:02:31', NULL, NULL),
(5, 4, 1, 1, 50, '2025-09-30 23:02:31', '2025-09-30 23:02:31', NULL, NULL),
(6, 5, 2, 2, 20, '2025-09-30 23:02:31', '2025-09-30 23:02:31', NULL, NULL),
(7, 6, 1, 1, 5, '2025-09-30 23:03:15', '2025-09-30 23:03:15', NULL, NULL),
(8, 6, 2, 2, 3, '2025-09-30 23:03:15', '2025-09-30 23:03:15', NULL, NULL),
(9, 2, 1, 2, 7, '2025-09-30 23:03:15', '2025-09-30 23:03:15', NULL, NULL),
(10, 3, 1, 1, 12, '2025-09-30 23:03:15', '2025-09-30 23:03:15', NULL, NULL),
(11, 4, 2, 1, 40, '2025-09-30 23:03:15', '2025-09-30 23:03:15', NULL, NULL),
(12, 5, 2, 2, 25, '2025-09-30 23:03:15', '2025-09-30 23:03:15', NULL, NULL),
(13, 7, 1, 2, 10, '2025-09-30 23:03:15', '2025-09-30 23:03:15', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `invoices`
--

CREATE TABLE `invoices` (
  `id` int(11) NOT NULL,
  `customer_id` int(11) NOT NULL,
  `order_id` int(11) DEFAULT NULL,
  `invoice_date` datetime DEFAULT NULL,
  `due_date` datetime DEFAULT NULL,
  `total_amount` decimal(10,2) DEFAULT NULL,
  `status` varchar(255) NOT NULL,
  `payment_method` varchar(255) NOT NULL,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `invoices`
--

INSERT INTO `invoices` (`id`, `customer_id`, `order_id`, `invoice_date`, `due_date`, `total_amount`, `status`, `payment_method`, `created_at`, `updated_at`) VALUES
(1, 1, 1, '2025-09-30 23:02:31', '2025-10-07 23:02:31', 1220.00, '', '', '2025-09-30 23:02:31', '2025-09-30 23:02:31'),
(2, 1, 2, '2025-09-30 23:02:31', '2025-10-07 23:02:31', 730.00, '', '', '2025-09-30 23:02:31', '2025-09-30 23:02:31'),
(3, 1, 3, '2025-09-30 23:03:15', '2025-10-07 23:03:15', 3499.00, '', '', '2025-09-30 23:03:15', '2025-09-30 23:03:15'),
(4, 2, 4, '2025-09-30 23:03:15', '2025-10-07 23:03:15', 1380.00, '', '', '2025-09-30 23:03:15', '2025-09-30 23:03:15');

-- --------------------------------------------------------

--
-- Table structure for table `invoice_templates`
--

CREATE TABLE `invoice_templates` (
  `id` int(11) NOT NULL,
  `name` varchar(255) DEFAULT NULL,
  `template_html` text DEFAULT NULL,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `media`
--

CREATE TABLE `media` (
  `id` int(11) NOT NULL,
  `type` varchar(50) DEFAULT NULL,
  `file_path` varchar(255) DEFAULT NULL,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `media`
--

INSERT INTO `media` (`id`, `type`, `file_path`, `created_at`, `updated_at`) VALUES
(1, 'image', 'banner-01.jpg', '2025-09-30 23:02:31', '2025-09-30 23:02:31'),
(2, 'image', 'banner-02.jpg', '2025-09-30 23:02:31', '2025-09-30 23:02:31');

-- --------------------------------------------------------

--
-- Table structure for table `news`
--

CREATE TABLE `news` (
  `id` int(11) NOT NULL,
  `title` varchar(255) DEFAULT NULL,
  `content` text DEFAULT NULL,
  `published_at` datetime DEFAULT NULL,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `news`
--

INSERT INTO `news` (`id`, `title`, `content`, `published_at`, `created_at`, `updated_at`) VALUES
(1, 'New Laptop Launch', 'Dell launches new Inspiron model', '2025-09-30 23:02:31', '2025-09-30 23:02:31', '2025-09-30 23:02:31'),
(2, 'Holiday Sale', 'Big discounts on electronics', '2025-09-30 23:02:31', '2025-09-30 23:02:31', '2025-09-30 23:02:31');

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `id` int(11) NOT NULL,
  `customer_id` int(11) DEFAULT NULL,
  `order_date` datetime DEFAULT NULL,
  `status` varchar(50) DEFAULT NULL,
  `total_amount` decimal(10,2) DEFAULT NULL,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL,
  `delivery_date` date DEFAULT NULL,
  `shipping_address` varchar(255) DEFAULT NULL,
  `billing_address` varchar(255) NOT NULL,
  `paid_amount` double DEFAULT NULL,
  `discount` float DEFAULT NULL,
  `tracking_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`id`, `customer_id`, `order_date`, `status`, `total_amount`, `created_at`, `updated_at`, `delivery_date`, `shipping_address`, `billing_address`, `paid_amount`, `discount`, `tracking_id`) VALUES
(1, 1, '2025-09-30 23:02:31', 'pending', 1220.00, '2025-09-30 23:02:31', '2025-09-30 23:02:31', NULL, 'Mohammadpur', 'Dhanmondi', NULL, NULL, 0),
(20, 2, '2025-10-09 09:24:17', 'Pending', 560.00, '2025-10-09 09:26:11', '2025-10-16 09:26:11', '2025-10-16', 'Dhaka', 'Chittagong', 780, 23, 1),
(21, 20, '2025-10-17 10:28:12', 'Pending', 560.00, '2025-09-30 23:02:31', '2025-09-30 23:02:31', '2025-10-16', 'Dhaka', 'Dhaka', 780, 10, 1);

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
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL,
  `discount` float DEFAULT NULL,
  `vat` float DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `order_details`
--

INSERT INTO `order_details` (`id`, `order_id`, `product_id`, `variation_id`, `quantity`, `price`, `created_at`, `updated_at`, `discount`, `vat`) VALUES
(1, 1, 1, 1, 1, 700.00, '2025-09-30 23:02:31', '2025-09-30 23:02:31', NULL, 40),
(2, 20, 20, 3, 1, 520.00, '2025-09-30 23:02:31', '2025-09-30 23:02:31', 10, 5),
(3, 20, 2, NULL, 1, 730.00, '2025-09-30 23:02:31', '2025-09-30 23:02:31', NULL, NULL),
(4, 20, 6, 6, 1, 2500.00, '2025-09-30 23:03:15', '2025-09-30 23:03:15', 10, 5),
(5, 21, 3, 8, 1, 999.00, '2025-09-30 23:03:15', '2025-09-30 23:03:15', NULL, NULL),
(6, 21, 2, 2, 1, 1300.00, '2025-09-30 23:03:15', '2025-09-30 23:03:15', NULL, NULL),
(7, 1, 4, 4, 1, 80.00, '2025-09-30 23:03:15', '2025-09-30 23:03:15', 10, 30);

-- --------------------------------------------------------

--
-- Table structure for table `pages`
--

CREATE TABLE `pages` (
  `id` int(11) NOT NULL,
  `title` varchar(255) DEFAULT NULL,
  `content` text DEFAULT NULL,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `pages`
--

INSERT INTO `pages` (`id`, `title`, `content`, `created_at`, `updated_at`) VALUES
(1, 'About Us', 'Information about the company', '2025-09-30 23:02:31', '2025-09-30 23:02:31'),
(2, 'Contact', 'Contact page details', '2025-09-30 23:02:31', '2025-09-30 23:02:31');

-- --------------------------------------------------------

--
-- Table structure for table `payments_refunds`
--

CREATE TABLE `payments_refunds` (
  `id` int(11) NOT NULL,
  `order_id` int(11) DEFAULT NULL,
  `type` varchar(50) DEFAULT NULL,
  `amount` decimal(10,2) DEFAULT NULL,
  `payment_date` datetime DEFAULT NULL,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `payments_refunds`
--

INSERT INTO `payments_refunds` (`id`, `order_id`, `type`, `amount`, `payment_date`, `created_at`, `updated_at`) VALUES
(1, 1, 'payment', 1220.00, '2025-09-30 23:02:31', '2025-09-30 23:02:31', '2025-09-30 23:02:31'),
(2, 2, 'payment', 730.00, '2025-09-30 23:02:31', '2025-09-30 23:02:31', '2025-09-30 23:02:31'),
(3, 3, 'payment', 3499.00, '2025-09-30 23:03:15', '2025-09-30 23:03:15', '2025-09-30 23:03:15'),
(4, 4, 'payment', 1380.00, '2025-09-30 23:03:15', '2025-09-30 23:03:15', '2025-09-30 23:03:15');

-- --------------------------------------------------------

--
-- Table structure for table `payment_methods`
--

CREATE TABLE `payment_methods` (
  `id` int(11) NOT NULL,
  `name` varchar(255) DEFAULT NULL,
  `details` text DEFAULT NULL,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `payment_methods`
--

INSERT INTO `payment_methods` (`id`, `name`, `details`, `created_at`, `updated_at`) VALUES
(1, 'Credit Card', 'Visa, MasterCard accepted', '2025-09-30 23:02:31', '2025-09-30 23:02:31'),
(2, 'Cash On Delivery', 'Payment upon delivery', '2025-09-30 23:02:31', '2025-09-30 23:02:31');

-- --------------------------------------------------------

--
-- Table structure for table `permissions`
--

CREATE TABLE `permissions` (
  `id` int(11) NOT NULL,
  `name` varchar(255) DEFAULT NULL,
  `description` text DEFAULT NULL,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `permissions`
--

INSERT INTO `permissions` (`id`, `name`, `description`, `created_at`, `updated_at`) VALUES
(1, 'Manage Products', 'Can add/edit/delete products', '2025-09-30 23:02:31', '2025-09-30 23:02:31'),
(2, 'Manage Orders', 'Can view and process orders', '2025-09-30 23:02:31', '2025-09-30 23:02:31'),
(3, 'View Reports', 'Can view reports', '2025-09-30 23:02:31', '2025-09-30 23:02:31');

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
  `discount` varchar(100) DEFAULT NULL,
  `tax_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `name`, `category_id`, `brand_id`, `unit_id`, `sku`, `selling_price`, `purchase_price`, `description`, `created_at`, `updated_at`, `barcode`, `alert_quantity`, `discount`, `tax_id`) VALUES
(1, 'Dell Inspiron Laptop', 1, 1, 1, 'DL-INS-LAP-01', 700.00, 600.00, '15-inch laptop with Intel i5', '2025-09-30 23:02:31', '2025-09-30 23:02:31', '0129-4597', 10, '10', 1),
(2, 'HP Pavilion Desktop', 2, 2, 1, 'HP-PAV-DESK-01', 800.00, 650.00, 'Desktop PC with Intel i7', '2025-09-30 23:02:31', '2025-09-30 23:02:31', '0129-4598', 5, '%', 1),
(3, 'iPhone 14', 3, 3, 1, 'AP-IPH-14-01', 1200.00, 1000.00, 'Apple iPhone 14 128GB', '2025-09-30 23:02:31', '2025-09-30 23:02:31', '0129-4599', 15, '%', 1),
(4, 'Logitech Wireless Mouse', 4, 4, 1, 'LOG-MSE-01', 30.00, 20.00, 'Wireless mouse', '2025-09-30 23:02:31', '2025-09-30 23:02:31', '0129-4600', 5, '%', 2),
(5, 'Asus Motherboard', 5, 5, 1, 'AS-MB-01', 200.00, 150.00, 'Gaming motherboard', '2025-09-30 23:02:31', '2025-09-30 23:02:31', '0129-4601', 3, '%', 2),
(6, 'HP Spectre Laptop', 1, 2, 1, 'HP-SPE-LAP-01', 950.00, 850.00, '13-inch HP Spectre with Intel i7', '2025-09-30 23:03:15', '2025-09-30 23:03:15', '0129-4602', 2, '%', 2);

-- --------------------------------------------------------

--
-- Table structure for table `product_images`
--

CREATE TABLE `product_images` (
  `id` int(11) NOT NULL,
  `product_id` int(11) DEFAULT NULL,
  `image_path` varchar(255) DEFAULT NULL,
  `is_main` tinyint(1) DEFAULT NULL,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `product_images`
--

INSERT INTO `product_images` (`id`, `product_id`, `image_path`, `is_main`, `created_at`, `updated_at`) VALUES
(1, 1, 'product-01.jpg', 1, '2025-09-30 23:02:31', '2025-09-30 23:02:31'),
(2, 1, 'product-02.jpg', 0, '2025-09-30 23:02:31', '2025-09-30 23:02:31'),
(3, 2, 'product-03.jpg', 1, '2025-09-30 23:02:31', '2025-09-30 23:02:31'),
(4, 3, 'product-04.jpg', 1, '2025-09-30 23:02:31', '2025-09-30 23:02:31'),
(5, 3, 'product-05.jpg', 0, '2025-09-30 23:02:31', '2025-09-30 23:02:31'),
(6, 4, 'product-06.jpg', 1, '2025-09-30 23:02:31', '2025-09-30 23:02:31'),
(7, 5, 'product-07.jpg', 1, '2025-09-30 23:02:31', '2025-09-30 23:02:31'),
(8, 6, 'product-08.jpg', 1, '2025-09-30 23:03:15', '2025-09-30 23:03:15'),
(9, 6, 'product-09.jpg', 0, '2025-09-30 23:03:15', '2025-09-30 23:03:15'),
(10, 2, 'product-10.jpg', 1, '2025-09-30 23:03:15', '2025-09-30 23:03:15'),
(11, 2, 'product-11.jpg', 0, '2025-09-30 23:03:15', '2025-09-30 23:03:15'),
(12, 3, 'product-12.jpg', 1, '2025-09-30 23:03:15', '2025-09-30 23:03:15'),
(13, 3, 'product-13.jpg', 0, '2025-09-30 23:03:15', '2025-09-30 23:03:15'),
(14, 4, 'product-14.jpg', 1, '2025-09-30 23:03:15', '2025-09-30 23:03:15'),
(15, 5, 'product-15.jpg', 1, '2025-09-30 23:03:15', '2025-09-30 23:03:15'),
(16, 7, 'product-16.jpg', 1, '2025-09-30 23:03:15', '2025-09-30 23:03:15'),
(17, 7, 'product-17.jpg', 0, '2025-09-30 23:03:15', '2025-09-30 23:03:15');

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
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `product_variations`
--

INSERT INTO `product_variations` (`id`, `product_id`, `variation_name`, `variation_value`, `selling_price`, `purchase_price`, `sku`, `created_at`, `updated_at`) VALUES
(1, 1, 'Color', 'Silver', 700.00, 600.00, 'DL-INS-LAP-01-SLV', '2025-09-30 23:02:31', '2025-09-30 23:02:31'),
(2, 1, 'Color', 'Black', 710.00, 610.00, 'DL-INS-LAP-01-BLK', '2025-09-30 23:02:31', '2025-09-30 23:02:31'),
(3, 3, 'Storage', '128GB', 1200.00, 1000.00, 'AP-IPH-14-128', '2025-09-30 23:02:31', '2025-09-30 23:02:31'),
(4, 3, 'Storage', '256GB', 1300.00, 1100.00, 'AP-IPH-14-256', '2025-09-30 23:02:31', '2025-09-30 23:02:31'),
(5, 6, 'RAM', '32GB', 2500.00, 2300.00, 'DL-ALI-DESK-01-32', '2025-09-30 23:03:15', '2025-09-30 23:03:15'),
(6, 2, 'Color', 'Silver', 1300.00, 1100.00, 'AP-MBAIR-01-SLV', '2025-09-30 23:03:15', '2025-09-30 23:03:15'),
(7, 2, 'Color', 'Space Gray', 1320.00, 1120.00, 'AP-MBAIR-01-GRY', '2025-09-30 23:03:15', '2025-09-30 23:03:15'),
(8, 3, 'Color', 'Black', 999.00, 850.00, 'SM-GAL-S23-01-BLK', '2025-09-30 23:03:15', '2025-09-30 23:03:15'),
(9, 3, 'Color', 'White', 999.00, 850.00, 'SM-GAL-S23-01-WHT', '2025-09-30 23:03:15', '2025-09-30 23:03:15'),
(10, 4, 'Switch Type', 'Blue', 80.00, 60.00, 'LOG-KBD-01-BLUE', '2025-09-30 23:03:15', '2025-09-30 23:03:15'),
(11, 4, 'Switch Type', 'Red', 82.00, 62.00, 'LOG-KBD-01-RED', '2025-09-30 23:03:15', '2025-09-30 23:03:15'),
(12, 5, 'Speed', '3200MHz', 120.00, 90.00, 'COR-RAM-16-01-3200', '2025-09-30 23:03:15', '2025-09-30 23:03:15');

-- --------------------------------------------------------

--
-- Table structure for table `purchase_orders`
--

CREATE TABLE `purchase_orders` (
  `id` int(11) NOT NULL,
  `supplier_id` int(11) DEFAULT NULL,
  `order_date` datetime DEFAULT NULL,
  `status` varchar(50) DEFAULT NULL,
  `total_amount` decimal(10,2) DEFAULT NULL,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `purchase_order_items`
--

CREATE TABLE `purchase_order_items` (
  `id` int(11) NOT NULL,
  `purchase_order_id` int(11) DEFAULT NULL,
  `product_id` int(11) DEFAULT NULL,
  `quantity` int(11) DEFAULT NULL,
  `price` decimal(10,2) DEFAULT NULL,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `roles`
--

CREATE TABLE `roles` (
  `id` int(11) NOT NULL,
  `name` varchar(255) DEFAULT NULL,
  `description` text DEFAULT NULL,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `roles`
--

INSERT INTO `roles` (`id`, `name`, `description`, `created_at`, `updated_at`) VALUES
(1, 'Admin', 'Administrator role', '2025-09-30 23:02:31', '2025-09-30 23:02:31'),
(2, 'Customer', 'Regular customer role', '2025-09-30 23:02:31', '2025-09-30 23:02:31'),
(3, 'Vendor', 'Vendor role', '2025-09-30 23:02:31', '2025-09-30 23:02:31');

-- --------------------------------------------------------

--
-- Table structure for table `role_permissions`
--

CREATE TABLE `role_permissions` (
  `id` int(11) NOT NULL,
  `role_id` int(11) DEFAULT NULL,
  `permission_id` int(11) DEFAULT NULL,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `role_permissions`
--

INSERT INTO `role_permissions` (`id`, `role_id`, `permission_id`, `created_at`, `updated_at`) VALUES
(1, 1, 1, '2025-09-30 23:02:31', '2025-09-30 23:02:31'),
(2, 1, 2, '2025-09-30 23:02:31', '2025-09-30 23:02:31'),
(3, 1, 3, '2025-09-30 23:02:31', '2025-09-30 23:02:31'),
(4, 2, 2, '2025-09-30 23:02:31', '2025-09-30 23:02:31');

-- --------------------------------------------------------

--
-- Table structure for table `settings`
--

CREATE TABLE `settings` (
  `id` int(11) NOT NULL,
  `key_name` varchar(255) DEFAULT NULL,
  `value` text DEFAULT NULL,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `settings`
--

INSERT INTO `settings` (`id`, `key_name`, `value`, `created_at`, `updated_at`) VALUES
(1, 'site_name', 'SkyTech Electronics', '2025-09-30 23:02:31', '2025-09-30 23:02:31'),
(2, 'currency', 'USD', '2025-09-30 23:02:31', '2025-09-30 23:02:31');

-- --------------------------------------------------------

--
-- Table structure for table `status`
--

CREATE TABLE `status` (
  `id` int(11) NOT NULL,
  `person_status` varchar(255) NOT NULL,
  `item_status` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `status`
--

INSERT INTO `status` (`id`, `person_status`, `item_status`) VALUES
(1, 'Active', 'Available'),
(2, 'Offline', 'Out of Stock'),
(3, '', 'Discontinued'),
(4, '', 'Comming Soon'),
(5, '', 'Pre-order');

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
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `suppliers`
--

INSERT INTO `suppliers` (`id`, `name`, `contact_person`, `phone`, `email`, `created_at`, `updated_at`) VALUES
(1, 'Tech Supplier Ltd', 'Mr. Rahim', '01710000001', 'supplier1@example.com', '2025-09-30 23:02:31', '2025-09-30 23:02:31'),
(2, 'ElectroSource', 'Mrs. Nabila', '01710000002', 'supplier2@example.com', '2025-09-30 23:02:31', '2025-09-30 23:02:31');

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
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `support_tickets`
--

INSERT INTO `support_tickets` (`id`, `customer_id`, `subject`, `description`, `status`, `priority`, `created_at`, `updated_at`) VALUES
(1, 1, 'Laptop Issue', 'Screen flickering', 'open', 'High', '2025-09-30 23:02:31', '2025-09-30 23:02:31'),
(2, 2, 'Mouse Issue', 'Wireless mouse not working', 'open', 'Medium', '2025-09-30 23:02:31', '2025-09-30 23:02:31');

-- --------------------------------------------------------

--
-- Table structure for table `taxes`
--

CREATE TABLE `taxes` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `taxes`
--

INSERT INTO `taxes` (`id`, `name`) VALUES
(1, 'VAT(10%)'),
(2, 'CGST(8%)');

-- --------------------------------------------------------

--
-- Table structure for table `tax_rates`
--

CREATE TABLE `tax_rates` (
  `id` int(11) NOT NULL,
  `name` varchar(255) DEFAULT NULL,
  `rate` decimal(5,2) DEFAULT NULL,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tax_rates`
--

INSERT INTO `tax_rates` (`id`, `name`, `rate`, `created_at`, `updated_at`) VALUES
(1, 'VAT', 15.00, '2025-09-30 23:02:31', '2025-09-30 23:02:31');

-- --------------------------------------------------------

--
-- Table structure for table `trackings`
--

CREATE TABLE `trackings` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `trackings`
--

INSERT INTO `trackings` (`id`, `name`) VALUES
(1, 'processing'),
(2, 'Out for Delivery'),
(3, 'Shipped'),
(4, 'Delivered');

-- --------------------------------------------------------

--
-- Table structure for table `transactions`
--

CREATE TABLE `transactions` (
  `id` int(11) NOT NULL,
  `type` varchar(50) DEFAULT NULL,
  `reference_id` int(11) DEFAULT NULL,
  `amount` decimal(10,2) DEFAULT NULL,
  `transaction_date` datetime DEFAULT NULL,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `transactions`
--

INSERT INTO `transactions` (`id`, `type`, `reference_id`, `amount`, `transaction_date`, `created_at`, `updated_at`) VALUES
(1, 'income', 1, 1220.00, '2025-09-30 23:02:31', '2025-09-30 23:02:31', '2025-09-30 23:02:31'),
(2, 'expense', 1, 500.00, '2025-09-30 23:02:31', '2025-09-30 23:02:31', '2025-09-30 23:02:31'),
(3, 'income', 3, 3499.00, '2025-09-30 23:03:15', '2025-09-30 23:03:15', '2025-09-30 23:03:15'),
(4, 'income', 4, 1380.00, '2025-09-30 23:03:15', '2025-09-30 23:03:15', '2025-09-30 23:03:15'),
(5, 'expense', 3, 1500.00, '2025-09-30 23:03:15', '2025-09-30 23:03:15', '2025-09-30 23:03:15'),
(6, 'expense', 4, 700.00, '2025-09-30 23:03:15', '2025-09-30 23:03:15', '2025-09-30 23:03:15');

-- --------------------------------------------------------

--
-- Table structure for table `transaction_type`
--

CREATE TABLE `transaction_type` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `factor` int(11) NOT NULL,
  `created_at` date NOT NULL DEFAULT current_timestamp(),
  `updated_at` date NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `transaction_type`
--

INSERT INTO `transaction_type` (`id`, `name`, `factor`, `created_at`, `updated_at`) VALUES
(1, 'Transfer', -2, '2025-10-06', '2025-10-06'),
(2, 'Sale', 15, '2025-10-06', '2025-10-06'),
(3, 'damage', -5, '2025-10-06', '2025-10-06');

-- --------------------------------------------------------

--
-- Table structure for table `units`
--

CREATE TABLE `units` (
  `id` int(11) NOT NULL,
  `name` varchar(255) DEFAULT NULL,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL,
  `short_name` varchar(20) DEFAULT NULL,
  `status` tinyint(1) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `units`
--

INSERT INTO `units` (`id`, `name`, `created_at`, `updated_at`, `short_name`, `status`) VALUES
(1, 'Piece', '2025-09-30 23:02:31', '2025-09-30 23:02:31', 'pc', NULL),
(2, 'Box', '2025-09-30 23:05:12', '2025-09-30 23:05:12', 'bx', NULL),
(3, 'Pack', '2025-09-30 23:07:45', '2025-09-30 23:07:45', 'pk', NULL),
(4, 'Set', '2025-09-30 23:10:08', '2025-09-30 23:10:08', 'set', NULL),
(5, 'Kilogram', '2025-09-30 23:12:34', '2025-09-30 23:12:34', 'kg', NULL),
(6, 'Gram', '2025-09-30 23:15:21', '2025-09-30 23:15:21', 'g', NULL),
(7, 'Meter', '2025-09-30 23:17:50', '2025-09-30 23:17:50', 'm', NULL),
(8, 'Centimeter', '2025-09-30 23:20:11', '2025-09-30 23:20:11', 'cm', NULL),
(9, 'Liter', '2025-09-30 23:22:42', '2025-09-30 23:22:42', 'l', NULL),
(10, 'Milliliter', '2025-09-30 23:25:05', '2025-09-30 23:25:05', 'ml', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `name` varchar(255) DEFAULT NULL,
  `username` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `password` varchar(255) DEFAULT NULL,
  `role_id` int(11) DEFAULT NULL,
  `status` varchar(50) DEFAULT NULL,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `username`, `email`, `password`, `role_id`, `status`, `created_at`, `updated_at`) VALUES
(1, 'John Doe', 'johndoe', 'john@example.com', 'password123', 1, 'active', '2025-09-30 23:02:31', '2025-09-30 23:02:31'),
(2, 'Alice Smith', 'alice', 'alice@example.com', 'password123', 2, 'active', '2025-09-30 23:02:31', '2025-09-30 23:02:31'),
(3, 'Vendor Mike', 'vendor1', 'vendor@example.com', 'password123', 3, 'active', '2025-09-30 23:02:31', '2025-09-30 23:02:31');

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
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `vendors`
--

INSERT INTO `vendors` (`id`, `name`, `email`, `phone`, `status`, `created_at`, `updated_at`) VALUES
(1, 'Vendor TechPro', 'vendor1@example.com', '01710000003', 'active', '2025-09-30 23:02:31', '2025-09-30 23:02:31'),
(2, 'Vendor Electro', 'vendor2@example.com', '01710000004', 'active', '2025-09-30 23:02:31', '2025-09-30 23:02:31');

-- --------------------------------------------------------

--
-- Table structure for table `vendor_payments`
--

CREATE TABLE `vendor_payments` (
  `id` int(11) NOT NULL,
  `vendor_id` int(11) DEFAULT NULL,
  `amount` decimal(10,2) DEFAULT NULL,
  `payment_date` datetime DEFAULT NULL,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `vendor_payments`
--

INSERT INTO `vendor_payments` (`id`, `vendor_id`, `amount`, `payment_date`, `created_at`, `updated_at`) VALUES
(1, 1, 2000.00, '2025-09-30 23:02:31', '2025-09-30 23:02:31', '2025-09-30 23:02:31'),
(2, 2, 1500.00, '2025-09-30 23:02:31', '2025-09-30 23:02:31', '2025-09-30 23:02:31');

-- --------------------------------------------------------

--
-- Table structure for table `warehouses`
--

CREATE TABLE `warehouses` (
  `id` int(11) NOT NULL,
  `name` varchar(255) DEFAULT NULL,
  `location` text DEFAULT NULL,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL,
  `manager` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `phone` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `warehouses`
--

INSERT INTO `warehouses` (`id`, `name`, `location`, `created_at`, `updated_at`, `manager`, `email`, `phone`) VALUES
(2, 'Secondary Warehouse', 'Chittagong, Bangladesh', '2025-10-07 12:00:52', '2025-10-07 12:00:52', 'Rashid', 'rashid@gamil.com', '01799007398'),
(3, 'Main Storage', '123 Banani, Dhaka', NULL, NULL, 'Rahim Uddin', 'rahim@example.com', '+8801765432100'),
(4, 'Secondary Warehouse', '456 Agrabad, Chittagong', NULL, NULL, 'Hasan Ali', 'hasan@example.com', '+8801987654321'),
(5, 'Central Depot', '789 Motijheel, Dhaka', NULL, NULL, 'Karim Hossain', 'karim@example.com', '+8801555555555'),
(7, 'Test', 'Vill: Hizlain, P.O: Lemubari-1800,P.S: Manikganj Sadar, District', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 'Harun Vai', 'admin@shoppro.com', '01799007398');

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
-- Indexes for table `purchase_orders`
--
ALTER TABLE `purchase_orders`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `purchase_order_items`
--
ALTER TABLE `purchase_order_items`
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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=84;

--
-- AUTO_INCREMENT for table `contact_messages`
--
ALTER TABLE `contact_messages`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `currencies`
--
ALTER TABLE `currencies`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `customers`
--
ALTER TABLE `customers`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `customer_addresses`
--
ALTER TABLE `customer_addresses`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `discount_types`
--
ALTER TABLE `discount_types`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `expenses`
--
ALTER TABLE `expenses`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `incomes`
--
ALTER TABLE `incomes`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `inventory`
--
ALTER TABLE `inventory`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `invoices`
--
ALTER TABLE `invoices`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `invoice_templates`
--
ALTER TABLE `invoice_templates`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `media`
--
ALTER TABLE `media`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `news`
--
ALTER TABLE `news`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT for table `order_details`
--
ALTER TABLE `order_details`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `pages`
--
ALTER TABLE `pages`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `payments_refunds`
--
ALTER TABLE `payments_refunds`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `payment_methods`
--
ALTER TABLE `payment_methods`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `permissions`
--
ALTER TABLE `permissions`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;

--
-- AUTO_INCREMENT for table `product_images`
--
ALTER TABLE `product_images`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=35;

--
-- AUTO_INCREMENT for table `product_variations`
--
ALTER TABLE `product_variations`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `purchase_orders`
--
ALTER TABLE `purchase_orders`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `purchase_order_items`
--
ALTER TABLE `purchase_order_items`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `roles`
--
ALTER TABLE `roles`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `role_permissions`
--
ALTER TABLE `role_permissions`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `settings`
--
ALTER TABLE `settings`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `status`
--
ALTER TABLE `status`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `suppliers`
--
ALTER TABLE `suppliers`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `support_tickets`
--
ALTER TABLE `support_tickets`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `taxes`
--
ALTER TABLE `taxes`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `tax_rates`
--
ALTER TABLE `tax_rates`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `trackings`
--
ALTER TABLE `trackings`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `transactions`
--
ALTER TABLE `transactions`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `transaction_type`
--
ALTER TABLE `transaction_type`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `units`
--
ALTER TABLE `units`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `vendors`
--
ALTER TABLE `vendors`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `vendor_payments`
--
ALTER TABLE `vendor_payments`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `warehouses`
--
ALTER TABLE `warehouses`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
