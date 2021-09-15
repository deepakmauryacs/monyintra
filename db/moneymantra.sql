-- phpMyAdmin SQL Dump
-- version 4.9.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 26, 2021 at 07:42 PM
-- Server version: 10.4.8-MariaDB
-- PHP Version: 7.3.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `moneymantra`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbl_admin`
--

CREATE TABLE `tbl_admin` (
  `id` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `contact` varchar(255) NOT NULL,
  `address` text NOT NULL,
  `password` varchar(50) DEFAULT NULL,
  `image1` text NOT NULL,
  `created_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_admin`
--

INSERT INTO `tbl_admin` (`id`, `username`, `email`, `contact`, `address`, `password`, `image1`, `created_at`) VALUES
(1, 'deepak maurya', 'deepak@gmail.com', ' 9506018089', 'Lucknow', 'admin121', 'p151.jpg', '2021-07-06 12:33:43'),
(2, 'deepak maurya', ' guru@gmail.com', '8081008926', 'Lucknow                                                                                                                                                                                                                               ', '123456', 'p152.jpg', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_blog`
--

CREATE TABLE `tbl_blog` (
  `id` int(11) NOT NULL,
  `title` text NOT NULL,
  `category` varchar(255) NOT NULL,
  `description` text NOT NULL,
  `image` text NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `updated_at` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_blog`
--

INSERT INTO `tbl_blog` (`id`, `title`, `category`, `description`, `image`, `created_at`, `updated_at`) VALUES
(2, 'web-devlopment', '3', '<p>web-devlopment</p>\r\n', '96539566a7bd51d5d8397adc5a8f69d4.png', '2021-07-09 12:56:02', '2021-07-09');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_blog_category`
--

CREATE TABLE `tbl_blog_category` (
  `id` int(11) NOT NULL,
  `category` varchar(255) DEFAULT NULL,
  `slug` varchar(255) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_blog_category`
--

INSERT INTO `tbl_blog_category` (`id`, `category`, `slug`, `created_at`) VALUES
(1, 'web', 'Vegetables', '2021-07-26 08:14:22');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_brand`
--

CREATE TABLE `tbl_brand` (
  `id` int(11) NOT NULL,
  `brand` varchar(255) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `updated_at` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_brand`
--

INSERT INTO `tbl_brand` (`id`, `brand`, `created_at`, `updated_at`) VALUES
(1, 'Home Made', '2021-07-01 17:26:09', NULL),
(2, 'Home Made', '2021-07-02 17:18:50', NULL),
(3, 'Home Made ', '2021-07-02 17:29:23', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_cancellation`
--

CREATE TABLE `tbl_cancellation` (
  `id` int(11) NOT NULL,
  `title` text DEFAULT NULL,
  `description` text DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `updated_at` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_cancellation`
--

INSERT INTO `tbl_cancellation` (`id`, `title`, `description`, `created_at`, `updated_at`) VALUES
(1, 'd', '<p>dgge</p>\r\n', '2021-07-05 12:28:33', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_cateogery`
--

CREATE TABLE `tbl_cateogery` (
  `id` int(11) NOT NULL,
  `image` text NOT NULL,
  `category_name` varchar(255) NOT NULL,
  `about` text NOT NULL,
  `slug` varchar(100) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `updated_at` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_cateogery`
--

INSERT INTO `tbl_cateogery` (`id`, `image`, `category_name`, `about`, `slug`, `created_at`, `updated_at`) VALUES
(1, 'lohp-category-development.jpg', 'Web development', 'Web development 	', 'web-development', '2021-07-10 11:08:04', NULL),
(6, 'lohp-category-development1.jpg', 'JavaScript', 'JavaScript', 'JavaScript', '2021-07-10 11:12:35', NULL),
(7, 'lohp-category-design.jpg', 'Data Science', 'Data Science', 'Data-Science', '2021-07-10 11:15:50', NULL),
(8, 'lohp-category-it-and-software.jpg', 'IT and Software', 'IT and Software', 'IT and Software', '2021-07-10 11:10:25', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_contact_details`
--

CREATE TABLE `tbl_contact_details` (
  `id` int(11) NOT NULL,
  `address` text DEFAULT NULL,
  `contact_number` varchar(50) DEFAULT NULL,
  `email` text DEFAULT NULL,
  `facebook` text DEFAULT NULL,
  `instagram` text DEFAULT NULL,
  `twitter` text DEFAULT NULL,
  `linkedin` text DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_contact_details`
--

INSERT INTO `tbl_contact_details` (`id`, `address`, `contact_number`, `email`, `facebook`, `instagram`, `twitter`, `linkedin`, `created_at`, `updated_at`) VALUES
(1, '    e                                                   \r\n                                                  ', 'e', 'e', 'e', 'e', 'ee', 'e', NULL, NULL),
(2, '                                                         e                                                   \r\n                                                    \r\n                                                  ', 'e', 'e', 'e', 'e', 'ee', 'e', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_course`
--

CREATE TABLE `tbl_course` (
  `id` int(11) NOT NULL,
  `course` varchar(255) DEFAULT NULL,
  `category` int(11) DEFAULT NULL,
  `sub_category` int(11) DEFAULT NULL,
  `sort_description` text DEFAULT NULL,
  `description` text DEFAULT NULL,
  `url` text DEFAULT NULL,
  `product_unit` varchar(255) DEFAULT NULL,
  `product_quantity` int(11) DEFAULT NULL,
  `price` int(11) DEFAULT NULL,
  `discount` int(11) DEFAULT NULL,
  `discount_type` varchar(50) DEFAULT NULL,
  `mrp` int(11) DEFAULT NULL,
  `selling_price` int(11) DEFAULT NULL,
  `discount_price` int(11) DEFAULT NULL,
  `status` enum('1','2') NOT NULL DEFAULT '1',
  `image_one` text DEFAULT NULL,
  `image_two` text DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `updated_at` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_course`
--

INSERT INTO `tbl_course` (`id`, `course`, `category`, `sub_category`, `sort_description`, `description`, `url`, `product_unit`, `product_quantity`, `price`, `discount`, `discount_type`, `mrp`, `selling_price`, `discount_price`, `status`, `image_one`, `image_two`, `created_at`, `updated_at`) VALUES
(4, 'The Complete 2021 Web Development Bootcamp', 1, 0, 'Become a full-stack web developer with just one course. HTML, CSS, Javascript, Node, React, MongoDB and more!', '<h2>What you&#39;ll learn</h2>\r\n\r\n<ul>\r\n	<li>\r\n	<p>Be able to build ANY website you want.</p>\r\n	</li>\r\n	<li>\r\n	<p>Craft a portfolio of websites to apply for junior developer jobs.</p>\r\n	</li>\r\n	<li>\r\n	<p>Build fully-fledged websites and web apps for your startup or business.</p>\r\n	</li>\r\n	<li>\r\n	<p>Work as a freelance web developer.</p>\r\n	</li>\r\n	<li>\r\n	<p>Master backend development with Node</p>\r\n	</li>\r\n	<li>\r\n	<p>Master frontend development with React</p>\r\n	</li>\r\n	<li>\r\n	<p>Learn the latest frameworks and technologies, including Javascript ES6, Bootstrap 4, MongoDB.</p>\r\n	</li>\r\n</ul>\r\n', 'https://www.udemy.com/course/the-complete-web-development-bootcamp/', NULL, NULL, NULL, NULL, NULL, 8000, 455, NULL, '1', 'e7d38f24d99b7eebf1a68a24e5f322a6.jpg', '52f10f667c02f2848c6c0ed62c5d9299.jpg', '2021-07-10 06:28:32', NULL),
(27, 'The Complete JavaScript Course 2021: From Zero to Expert!', 6, 0, 'The modern JavaScript course for everyone! Master JavaScript with projects, challenges and theory. Many courses in one!', '<h2>What you&#39;ll learn</h2>\r\n\r\n<ul>\r\n	<li>\r\n	<p>Become an advanced, confident, and modern JavaScript developer from scratch</p>\r\n	</li>\r\n	<li>\r\n	<p>Build 6 beautiful real-world projects for your portfolio (not boring toy apps)</p>\r\n	</li>\r\n	<li>\r\n	<p>Become job-ready by understanding how JavaScript really works behind the scenes</p>\r\n	</li>\r\n	<li>\r\n	<p>How to think and work like a developer: problem-solving, researching, workflows</p>\r\n	</li>\r\n	<li>\r\n	<p>JavaScript fundamentals: variables, if/else, operators, boolean logic, functions, arrays, objects, loops, strings, etc.</p>\r\n	</li>\r\n	<li>\r\n	<p>Modern ES6+ from the beginning: arrow functions, destructuring, spread operator, optional chaining (ES2020), etc.</p>\r\n	</li>\r\n	<li>\r\n	<p>Modern OOP: Classes, constructors, prototypal inheritance, encapsulation, etc.</p>\r\n	</li>\r\n	<li>\r\n	<p>Complex concepts like the &#39;this&#39; keyword, higher-order functions, closures, etc.</p>\r\n	</li>\r\n	<li>\r\n	<p>Asynchronous JavaScript: Event loop, promises, async/await, AJAX calls and APIs</p>\r\n	</li>\r\n	<li>\r\n	<p>How to architect your code using flowcharts and common patterns</p>\r\n	</li>\r\n	<li>\r\n	<p>Modern tools for 2021 and beyond: NPM, Parcel, Babel and ES6 modules</p>\r\n	</li>\r\n	<li>\r\n	<p>Practice your skills with 50+ challenges and assignments (solutions included)</p>\r\n	</li>\r\n	<li>\r\n	<p>Get friendly support in the Q&amp;A area</p>\r\n	</li>\r\n	<li>\r\n	<p>Design your unique learning path according to your goals: course pathways</p>\r\n	</li>\r\n</ul>\r\n', '', NULL, NULL, NULL, NULL, NULL, 8600, 455, NULL, '1', '50f7cd3317c74476737797d2b08fb00a.png', 'c9a8e7b6247ff6928e57493569fc59f5.png', '2021-07-10 06:23:58', NULL),
(28, 'The Complete Web Developer Course 2.0', 1, 0, 'Learn Web Development by building 25 websites and mobile apps using HTML, CSS, Javascript, PHP, Python, MySQL & more!', '<h2>What you&#39;ll learn</h2>\r\n\r\n<ul>\r\n	<li>\r\n	<p>Build websites and webapps</p>\r\n	</li>\r\n	<li>\r\n	<p>Build HTML-based mobile apps</p>\r\n	</li>\r\n	<li>\r\n	<p>Get a job as a junior web developer</p>\r\n	</li>\r\n	<li>\r\n	<p>Bid for projects on freelance websites</p>\r\n	</li>\r\n	<li>\r\n	<p>Start their own online business</p>\r\n	</li>\r\n	<li>\r\n	<p>Be a comfortable front-end developer</p>\r\n	</li>\r\n	<li>\r\n	<p>Be proficient with databases and server-side languages</p>\r\n	</li>\r\n</ul>\r\n', 'https://www.udemy.com/course/the-complete-web-developer-course-2/', NULL, NULL, NULL, NULL, NULL, 8000, 455, NULL, '1', '9d5b88959a09d272efa1c0ee977c75ec.jpg', '6b7bc674ed480c74055e02e5c5fbfdd4.jpg', '2021-07-10 07:32:13', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_event`
--

CREATE TABLE `tbl_event` (
  `id` int(11) NOT NULL,
  `title` text NOT NULL,
  `category` varchar(255) NOT NULL,
  `language` varchar(255) NOT NULL,
  `description` text NOT NULL,
  `date` varchar(20) NOT NULL,
  `time` varchar(20) NOT NULL,
  `place` text NOT NULL,
  `image` text NOT NULL,
  `status` enum('1','2') NOT NULL DEFAULT '1' COMMENT '1->active,2->inactive',
  `created_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `updated_at` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_event`
--

INSERT INTO `tbl_event` (`id`, `title`, `category`, `language`, `description`, `date`, `time`, `place`, `image`, `status`, `created_at`, `updated_at`) VALUES
(1, 'web-devlopment-01', '1', '1', '<p>web-devlopment</p>\r\n', '2021-07-22', '12:41 PM', 'Lucknow', '52af94549a58b92fb086b6e816e6b208.jpg', '1', '2021-07-09 06:35:49', '');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_eventcateogery`
--

CREATE TABLE `tbl_eventcateogery` (
  `id` int(11) NOT NULL,
  `category_name` text DEFAULT NULL,
  `slug` text DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_eventcateogery`
--

INSERT INTO `tbl_eventcateogery` (`id`, `category_name`, `slug`, `created_at`, `updated_at`) VALUES
(1, 'New IT', 'New-IT', NULL, NULL),
(4, 'Vegetables', 'vegetables', NULL, NULL),
(5, 'Web development', 'web-development', NULL, NULL),
(6, 'Breakfast & Dairy', 'breakfast', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_gereral_settings`
--

CREATE TABLE `tbl_gereral_settings` (
  `id` int(11) NOT NULL,
  `site_name` text DEFAULT NULL,
  `site_description` text DEFAULT NULL,
  `site_keywords` text DEFAULT NULL,
  `copyright_text` text DEFAULT NULL,
  `site_logo_one` text DEFAULT NULL,
  `site_logo_two` text DEFAULT NULL,
  `site_favicon` text NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `updated_at` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_gereral_settings`
--

INSERT INTO `tbl_gereral_settings` (`id`, `site_name`, `site_description`, `site_keywords`, `copyright_text`, `site_logo_one`, `site_logo_two`, `site_favicon`, `created_at`, `updated_at`) VALUES
(1, 'demo', '                                                                                                                                                                                                                                                                                                                                          demo                                                                                                                                                                                                                                                                                                                                                                                                                            ', '                                                                                                                                                                                                                                                                                                                                          demoo                                                                                                                                                                                                                                                                                                                                                                                                                 ', 'demo', NULL, '81b6d07544cb75bf33e0865fc23fefa9.jpg', '61c351ed932f31a48555eae7fef88dff.jpg', '2021-07-03 10:55:28', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_google_recaptch`
--

CREATE TABLE `tbl_google_recaptch` (
  `id` int(11) NOT NULL,
  `site_key` text DEFAULT NULL,
  `secretkey` text DEFAULT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_google_recaptch`
--

INSERT INTO `tbl_google_recaptch` (`id`, `site_key`, `secretkey`, `created_at`, `updated_at`) VALUES
(1, 'd', 'd', '0000-00-00 00:00:00', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_language`
--

CREATE TABLE `tbl_language` (
  `id` int(11) NOT NULL,
  `name` varchar(255) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `updated_at` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_language`
--

INSERT INTO `tbl_language` (`id`, `name`, `created_at`, `updated_at`) VALUES
(1, 'English', '2021-07-08 10:50:23', '2021-07-08'),
(2, 'Hindi', '2021-07-08 10:51:18', '2021-07-08');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_privacy`
--

CREATE TABLE `tbl_privacy` (
  `id` int(11) NOT NULL,
  `title` text DEFAULT NULL,
  `description` text DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `updated_at` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_privacy`
--

INSERT INTO `tbl_privacy` (`id`, `title`, `description`, `created_at`, `updated_at`) VALUES
(1, 'dd', '<p>dddd</p>\r\n', '2021-07-05 12:26:31', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_refund_reture_policy`
--

CREATE TABLE `tbl_refund_reture_policy` (
  `id` int(11) NOT NULL,
  `title` text DEFAULT NULL,
  `description` text DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `updated_at` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_refund_reture_policy`
--

INSERT INTO `tbl_refund_reture_policy` (`id`, `title`, `description`, `created_at`, `updated_at`) VALUES
(1, 'd', '<p>ee</p>\r\n', '2021-07-05 12:28:25', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_services`
--

CREATE TABLE `tbl_services` (
  `id` int(11) NOT NULL,
  `category` varchar(255) DEFAULT NULL,
  `title` text DEFAULT NULL,
  `description` text DEFAULT NULL,
  `slug` varchar(255) DEFAULT NULL,
  `image` text DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `updated_at` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_services`
--

INSERT INTO `tbl_services` (`id`, `category`, `title`, `description`, `slug`, `image`, `created_at`, `updated_at`) VALUES
(3, 'Vegetables', 'php', '<p>testing</p>\r\n', 'testing', 'ed1170d79acc825949342578f6783e13.jpg', '2021-07-26 08:07:29', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_service_category`
--

CREATE TABLE `tbl_service_category` (
  `id` int(11) NOT NULL,
  `category` varchar(255) DEFAULT NULL,
  `slug` varchar(255) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_service_category`
--

INSERT INTO `tbl_service_category` (`id`, `category`, `slug`, `created_at`) VALUES
(1, 'web', 'Vegetables', '2021-07-26 08:07:18');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_subcateogery`
--

CREATE TABLE `tbl_subcateogery` (
  `id` int(11) NOT NULL,
  `category_name` varchar(255) DEFAULT NULL,
  `subcategory_name` varchar(255) DEFAULT NULL,
  `slug` varchar(100) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `updated_at` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_subcateogery`
--

INSERT INTO `tbl_subcateogery` (`id`, `category_name`, `subcategory_name`, `slug`, `created_at`, `updated_at`) VALUES
(3, '1', 'Web development', 'web-development', '2021-07-12 05:56:21', NULL),
(4, '6', 'JavaScript', 'JavaScript', '2021-07-12 05:56:43', NULL),
(5, '7', 'Data Science', 'Data-Science', '2021-07-12 05:57:07', NULL),
(6, '8', 'IT and Software', 'IT-Software', '2021-07-12 05:57:36', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_term_of_use`
--

CREATE TABLE `tbl_term_of_use` (
  `id` int(11) NOT NULL,
  `title` text DEFAULT NULL,
  `description` text DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `updated_at` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_term_of_use`
--

INSERT INTO `tbl_term_of_use` (`id`, `title`, `description`, `created_at`, `updated_at`) VALUES
(1, 'd', '<p>ddd</p>\r\n', '2021-07-05 12:28:14', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_unit`
--

CREATE TABLE `tbl_unit` (
  `id` int(11) NOT NULL,
  `unit` text DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `updated_at` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_unit`
--

INSERT INTO `tbl_unit` (`id`, `unit`, `created_at`, `updated_at`) VALUES
(1, '250 gram', '2021-07-01 17:19:11', NULL),
(2, '500 gram', '2021-07-01 17:19:19', NULL),
(5, '300 gram', '2021-07-02 17:45:44', NULL),
(6, '1 kg', '2021-07-02 17:45:55', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_users`
--

CREATE TABLE `tbl_users` (
  `id` int(11) NOT NULL,
  `name` varchar(255) DEFAULT NULL,
  `username` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `contact` varchar(50) DEFAULT NULL,
  `password` varchar(50) DEFAULT NULL,
  `status` enum('1','2') NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `updated_at` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_users`
--

INSERT INTO `tbl_users` (`id`, `name`, `username`, `email`, `contact`, `password`, `status`, `created_at`, `updated_at`) VALUES
(1, 'deepak maurya', 'deepak', 'deepak@gmail.com', '8081008926', '123456', '1', '2021-07-13 05:24:36', NULL),
(2, 'deepak', 'deepakji', 'deepak@gmail.com', NULL, '123456', '1', '2021-07-13 05:32:36', NULL),
(3, 'deepak maurya', 'guru', 'guru@gmail.com', '9506018089', '12345678', '1', '2021-07-13 05:24:36', NULL),
(4, 'jas', 'jas', 'jk@gmail.com', '34', 'password', '1', '2021-07-20 12:04:11', NULL),
(5, 'karan', 'karan', 'ks@gmail.com', '56', 'password', '1', '2021-07-21 08:32:49', NULL),
(6, 'neha', 'neha jaishal', 'erneha0315@gmail.com', '6306257700', '123', '1', '2021-07-23 10:04:54', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_web_login_status`
--

CREATE TABLE `tbl_web_login_status` (
  `id` int(11) NOT NULL,
  `google_client_id` text DEFAULT NULL,
  `google_secret_key` text DEFAULT NULL,
  `facebook_app_id` text DEFAULT NULL,
  `facebook_app_secret` text DEFAULT NULL,
  `created_at` int(11) NOT NULL,
  `updated_at` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_web_login_status`
--

INSERT INTO `tbl_web_login_status` (`id`, `google_client_id`, `google_secret_key`, `facebook_app_id`, `facebook_app_secret`, `created_at`, `updated_at`) VALUES
(1, 'demo', 'demo', 'demo', 'demo', 0, NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbl_admin`
--
ALTER TABLE `tbl_admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_blog`
--
ALTER TABLE `tbl_blog`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_blog_category`
--
ALTER TABLE `tbl_blog_category`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_brand`
--
ALTER TABLE `tbl_brand`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_cancellation`
--
ALTER TABLE `tbl_cancellation`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_cateogery`
--
ALTER TABLE `tbl_cateogery`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_contact_details`
--
ALTER TABLE `tbl_contact_details`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_course`
--
ALTER TABLE `tbl_course`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_event`
--
ALTER TABLE `tbl_event`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_eventcateogery`
--
ALTER TABLE `tbl_eventcateogery`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_gereral_settings`
--
ALTER TABLE `tbl_gereral_settings`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_google_recaptch`
--
ALTER TABLE `tbl_google_recaptch`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_language`
--
ALTER TABLE `tbl_language`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_privacy`
--
ALTER TABLE `tbl_privacy`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_refund_reture_policy`
--
ALTER TABLE `tbl_refund_reture_policy`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_services`
--
ALTER TABLE `tbl_services`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_service_category`
--
ALTER TABLE `tbl_service_category`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_subcateogery`
--
ALTER TABLE `tbl_subcateogery`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_term_of_use`
--
ALTER TABLE `tbl_term_of_use`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_unit`
--
ALTER TABLE `tbl_unit`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_users`
--
ALTER TABLE `tbl_users`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_web_login_status`
--
ALTER TABLE `tbl_web_login_status`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbl_admin`
--
ALTER TABLE `tbl_admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `tbl_blog`
--
ALTER TABLE `tbl_blog`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `tbl_blog_category`
--
ALTER TABLE `tbl_blog_category`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `tbl_brand`
--
ALTER TABLE `tbl_brand`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `tbl_cancellation`
--
ALTER TABLE `tbl_cancellation`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `tbl_cateogery`
--
ALTER TABLE `tbl_cateogery`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `tbl_contact_details`
--
ALTER TABLE `tbl_contact_details`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `tbl_course`
--
ALTER TABLE `tbl_course`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;

--
-- AUTO_INCREMENT for table `tbl_event`
--
ALTER TABLE `tbl_event`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `tbl_eventcateogery`
--
ALTER TABLE `tbl_eventcateogery`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `tbl_gereral_settings`
--
ALTER TABLE `tbl_gereral_settings`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `tbl_google_recaptch`
--
ALTER TABLE `tbl_google_recaptch`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `tbl_language`
--
ALTER TABLE `tbl_language`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `tbl_privacy`
--
ALTER TABLE `tbl_privacy`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `tbl_refund_reture_policy`
--
ALTER TABLE `tbl_refund_reture_policy`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `tbl_services`
--
ALTER TABLE `tbl_services`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `tbl_service_category`
--
ALTER TABLE `tbl_service_category`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `tbl_subcateogery`
--
ALTER TABLE `tbl_subcateogery`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `tbl_term_of_use`
--
ALTER TABLE `tbl_term_of_use`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `tbl_unit`
--
ALTER TABLE `tbl_unit`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `tbl_users`
--
ALTER TABLE `tbl_users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `tbl_web_login_status`
--
ALTER TABLE `tbl_web_login_status`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
