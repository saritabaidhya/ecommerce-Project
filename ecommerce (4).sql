-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 24, 2026 at 05:10 AM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.1.17

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ecommerce`
--

-- --------------------------------------------------------

--
-- Table structure for table `approaches`
--

CREATE TABLE `approaches` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) DEFAULT NULL,
  `detail` text DEFAULT NULL,
  `path` varchar(255) DEFAULT NULL,
  `category` varchar(191) DEFAULT NULL,
  `title` varchar(191) DEFAULT NULL,
  `status` varchar(191) DEFAULT NULL,
  `point` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_bin DEFAULT NULL CHECK (json_valid(`point`)),
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `approaches`
--

INSERT INTO `approaches` (`id`, `name`, `detail`, `path`, `category`, `title`, `status`, `point`, `created_at`, `updated_at`) VALUES
(10, 'Tired of facing different problems in your life', 'Having trouble in your life and career? Time to talk to an expert astrologer and get personalized reading about your future(astrology)', '7PSX7l5BxFj33tw4jjDecILIRkeoF8UoXe6mdxom.png', 'horoscope', NULL, '1', '[{\"title\":\"Secure a free domain for your brand.\"},{\"title\":\"Install WooCommerce in one click and start building your store.\"},{\"title\":\"Boost conversions with AI-generated product descriptions.\"},{\"title\":\"Enjoy high uptime and performance, thanks to stable and secure cloud servers.\"},{\"title\":\"Sell hundreds of products globally\"}]', '2025-05-22 06:00:46', '2025-05-22 22:23:13'),
(12, 'How to perform puja from Shree Om Mandir?', 'How to perform puja from Shree Om Mandir?', 'UZ2sFtcqFBltZ4pXfaIgVNq4tqsOhipP3pGyb84v.png', 'app', NULL, '1', '[{\"title\":\"Download Shree Om Mandir app from app store or play store and sign up with your email id or google.\"},{\"title\":\"You can view puja in your home screen.\"},{\"title\":\"Choose the puja as per your requirement from the list.\"},{\"title\":\"After selecting the puja, fill the information of your gotra and birth name(Nwaran) in the provided form.\"},{\"title\":\"Now, after the completion of your puja, video of puja along with digital certificate will be shared in your registered email id.\"}]', '2025-05-22 06:28:28', '2025-05-22 22:23:45');

-- --------------------------------------------------------

--
-- Table structure for table `areas`
--

CREATE TABLE `areas` (
  `id` int(11) NOT NULL,
  `name` varchar(155) DEFAULT NULL,
  `title` varchar(155) DEFAULT NULL,
  `slug` varchar(225) DEFAULT NULL,
  `detail` text NOT NULL,
  `path` varchar(155) DEFAULT NULL,
  `status` varchar(15) DEFAULT NULL,
  `hidden` text DEFAULT NULL,
  `meta_keyword` varchar(255) DEFAULT NULL,
  `meta_description` text DEFAULT NULL,
  `created_at` timestamp(6) NULL DEFAULT NULL,
  `updated_at` timestamp(6) NULL DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `areas`
--

INSERT INTO `areas` (`id`, `name`, `title`, `slug`, `detail`, `path`, `status`, `hidden`, `meta_keyword`, `meta_description`, `created_at`, `updated_at`) VALUES
(27, 'Leader/High _Performer Badges', NULL, 'leaderhigh-performer-badges', '<p>Awarded to all products in the Leaders or High Performers Quadrant of the G2 Grid at the quarterly review deadline.</p>', 'k0tVG5bauVrRebsjfYTJaxiTXtL517o4lBx4zzZo.png', '1', NULL, NULL, NULL, '2025-05-16 03:53:56.000000', '2025-05-16 04:28:11.000000');

-- --------------------------------------------------------

--
-- Table structure for table `associates`
--

CREATE TABLE `associates` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) DEFAULT NULL,
  `detail` text DEFAULT NULL,
  `status` varchar(255) NOT NULL,
  `path` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `associates`
--

INSERT INTO `associates` (`id`, `name`, `detail`, `status`, `path`, `created_at`, `updated_at`) VALUES
(4, 'gdf', NULL, '1', 'z3EWU51EXqv3LrskZDZ6YKwTTjLHHbAfud0henqD.png', '2025-09-04 09:24:56', '2025-09-04 09:24:56'),
(5, 'dgdfg', NULL, '1', 'CNZd63nZOZlQhRyeVpTCsNdcAO8qpPnKnkX65jsF.png', '2025-09-04 09:25:03', '2025-09-04 09:25:03'),
(6, 'dfgdfg', NULL, '1', 'uGfhnmt39KQtOXg3NG2ArpXYmg1HOQsCkSRg166W.png', '2025-09-04 09:25:10', '2025-09-04 09:25:10'),
(7, 'gdfgdg', NULL, '1', 'Zv0kAF6mKFbz6khRQISSne9mTxdOfsBaO5kCKnsb.png', '2025-09-04 09:25:18', '2025-09-04 09:25:18'),
(8, 'gdfgdg', NULL, '1', 'OOxRxF6s1d33mNRiuiWap2JZZAcF7NlRa00gcswE.png', '2025-09-04 09:25:24', '2025-09-04 09:25:24'),
(9, 'dgfg', NULL, '1', 'FLo0NYWykNwXPbE058nSv9fY3RcrtKW2CcYo6njn.png', '2025-09-04 09:25:33', '2025-09-04 09:25:33');

-- --------------------------------------------------------

--
-- Table structure for table `businesses`
--

CREATE TABLE `businesses` (
  `id` int(11) NOT NULL,
  `name` varchar(155) DEFAULT NULL,
  `detail` longtext DEFAULT NULL,
  `phone` varchar(25) DEFAULT NULL,
  `email` varchar(155) DEFAULT NULL,
  `suburb` varchar(150) DEFAULT NULL,
  `address` varchar(155) DEFAULT NULL,
  `service` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_bin DEFAULT NULL,
  `abn` varchar(55) DEFAULT NULL,
  `package` varchar(55) DEFAULT NULL,
  `gst` varchar(55) DEFAULT NULL,
  `slug` varchar(150) DEFAULT NULL,
  `website` varchar(191) DEFAULT NULL,
  `cost` varchar(13) DEFAULT NULL,
  `liability` varchar(155) DEFAULT NULL,
  `indemnity` varchar(155) DEFAULT NULL,
  `status` varchar(11) DEFAULT '0',
  `updated_at` timestamp(6) NULL DEFAULT NULL,
  `created_at` timestamp(6) NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `businesses`
--

INSERT INTO `businesses` (`id`, `name`, `detail`, `phone`, `email`, `suburb`, `address`, `service`, `abn`, `package`, `gst`, `slug`, `website`, `cost`, `liability`, `indemnity`, `status`, `updated_at`, `created_at`) VALUES
(14, 'Ultra Elite Paints', '<p>Perhaps Australia\'s most comprehensive tradesman and services directories and websites, with one of the fastest search engines for finding contractors.</p>', '9849997452', 'razatshrestha07@gmail.com', '19', NULL, '[\"209\",\"210\",\"211\"]', 'ABCDEF12456', '6 Months', 'Yes', 'ultra-elite-paints', 'https://elitecps.com.au/', 'A$149', '098', 'qwerty', '1', '2025-04-21 22:23:07.000000', '2025-04-21 18:40:24.000000'),
(15, 'ABC Termites Pty Ltd', '<p>For over a decade, this family-run business in Melbourne, Victoria, has been offering natural pest and termite control services. Started in 2011.</p>', '9849997452', 'razatshrestha07@gmail.com', '19', NULL, '[\"285\",\"286\"]', 'ABCDE12345', '6 Months', 'No', 'abc-termites-pty-ltd', 'https://rapidtermites.com.au/', '125', 'Yes', 'Yes', '1', '2025-04-28 17:37:55.000000', '2025-04-28 17:35:57.000000');

-- --------------------------------------------------------

--
-- Table structure for table `complaints`
--

CREATE TABLE `complaints` (
  `id` int(11) NOT NULL,
  `name` varchar(155) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `detail` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `subject` varchar(1950) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `phone` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp(6) NULL DEFAULT NULL,
  `updated_at` timestamp(6) NULL DEFAULT NULL,
  `email` varchar(155) DEFAULT NULL,
  `category` varchar(55) DEFAULT NULL,
  `unit` varchar(191) DEFAULT NULL,
  `quantity` varchar(191) DEFAULT NULL,
  `package` varchar(191) DEFAULT NULL,
  `address` varchar(191) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `complaints`
--

INSERT INTO `complaints` (`id`, `name`, `detail`, `subject`, `phone`, `created_at`, `updated_at`, `email`, `category`, `unit`, `quantity`, `package`, `address`) VALUES
(25, 'sarita Biadhya', 'sasas', 'Nakshatra of Mangal Special 10,000 Mangal Mool Jaap and Dashansh Havan', '9843518368', '2025-05-28 04:10:11.000000', '2025-05-28 04:10:11.000000', 'saritabaidhyas@gmail.com', 'Pooja', NULL, NULL, 'Couple Pooja', NULL),
(26, '11,000 Chandrama Mool Mantra Jaap and Kavach Path Havan', 'ss', 'Duimukhi Rudrakshya', '9843518368', '2025-05-28 04:12:19.000000', '2025-05-28 04:12:19.000000', 'saritabaidhyas@gmail.com', 'Rudrakshya', 'Medium', '2', NULL, NULL),
(27, '11,000 Chandrama Mool Mantra Jaap and Kavach Path Havan', 'sdsd', 'Duimukhi Rudrakshya', '9843518368', '2025-05-28 04:14:47.000000', '2025-05-28 04:14:47.000000', 'saritabaidhyas@gmail.com', 'Rudrakshya', 'Medium', '7', NULL, 'Bhaktapur'),
(30, '11,000 Chandrama Mool Mantra Jaap and Kavach Path Havan', 'ccc', '1 Mukhi Rudrakshya', '9843518368', '2025-06-04 06:32:33.000000', '2025-06-04 06:32:33.000000', 'saritabaidhyas@gmail.com', 'Rudrakshya', 'Regular', '1', NULL, 'Bhaktapur'),
(29, 'ssarriitta', 'sdsad', 'Astrology Service', '9843518368', '2025-05-30 03:54:40.000000', '2025-05-30 03:54:40.000000', 'saritabaidhyas@gmail.com', 'Astrology', NULL, NULL, 'harihar Adhikari', NULL),
(31, '11,000 Chandrama Mool Mantra Jaap and Kavach Path Havan', 'asdsad', '11,000 Chandrama Mool Mantra Jaap and Kavach Path Havan', '9843518368', '2025-06-04 06:32:45.000000', '2025-06-04 06:32:45.000000', 'saritabaidhyas@gmail.com', 'Pooja', NULL, NULL, NULL, NULL),
(32, '11,000 Chandrama Mool Mantra Jaap and Kavach Path Havan', 'dsad', '11,000 Chandrama Mool Mantra Jaap and Kavach Path Havan', '9843518368', '2025-06-04 06:32:51.000000', '2025-06-04 06:32:51.000000', 'saritabaidhyas@gmail.com', 'Pooja', NULL, NULL, 'Group Pooja', NULL),
(33, '11,000 Chandrama Mool Mantra Jaap and Kavach Path Havan', 'jh', 'Nakshatra of Mangal Special 10,000 Mangal Mool', '9843518368', '2025-06-13 06:12:57.000000', '2025-06-13 06:12:57.000000', 'saritabaidhyas@gmail.com', 'Pooja', NULL, NULL, 'Group Pooja', NULL),
(34, 'sarita Baidhya', 'ds', 'harihar Adhikari', '9843518368', '2025-06-16 06:42:18.000000', '2025-06-16 06:42:18.000000', 'saritabaidhyas@gmail.com', NULL, NULL, NULL, 'Puja for love & relationships', NULL),
(35, 'sass', 'dad', 'harihar Adhikari', '9843518368', '2025-06-16 06:43:40.000000', '2025-06-16 06:43:40.000000', 'saritabaidhyas@gmail.com', NULL, NULL, NULL, 'Puja for love & relationships', NULL),
(36, 'Contract leave', 'dsd', 'harihar Adhikari', '9843518368dsd', '2025-06-16 06:44:12.000000', '2025-06-16 06:44:12.000000', 'saritabaidhyas@gmail.com', 'Astrology', NULL, NULL, 'Puja for love & relationships', NULL),
(37, 'fdszfsa', 'fsaf', 'Shiritish Shakya', 'fasf', '2025-06-24 06:49:13.000000', '2025-06-24 06:49:13.000000', 'fsdfdfg@gmail.com', 'Astrology', NULL, NULL, 'Astrology Service', NULL),
(38, 'sarita Baidhya', NULL, '11,000 Chandrama Mool Mantra Jaap and Kavach Path Havan', '9843518368', '2025-07-02 03:33:19.000000', '2025-07-02 03:33:19.000000', 'saritabaidhyas@gmail.com', 'Pooja', NULL, NULL, 'Group Pooja', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `conditions`
--

CREATE TABLE `conditions` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) DEFAULT NULL,
  `detail` longtext DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `conditions`
--

INSERT INTO `conditions` (`id`, `name`, `detail`, `created_at`, `updated_at`) VALUES
(1, 'Terms & Condition', '<ol>\r\n<li>\r\n<p class=\"\" data-start=\"344\" data-end=\"377\"><strong data-start=\"344\" data-end=\"363\">Effective Date:</strong> [05/03/2025]</p>\r\n<p class=\"\" data-start=\"379\" data-end=\"600\">Welcome to Tradie Quote, Australia\'s most comprehensive directory and search engine for tradesmen and service providers (&ldquo;Tradies&rdquo;). By accessing or using our platform, you agree to be bound by these Terms and Conditions.</p>\r\n<h6 data-start=\"602\" data-end=\"624\">1. <strong data-start=\"609\" data-end=\"624\">Definitions</strong></h6>\r\n<ul data-start=\"625\" data-end=\"887\">\r\n<li class=\"\" data-start=\"625\" data-end=\"701\">\r\n<p class=\"\" data-start=\"627\" data-end=\"701\"><strong data-start=\"627\" data-end=\"648\">&ldquo;We&rdquo;, &ldquo;Us&rdquo;, &ldquo;Our&rdquo;</strong>: Refers to the owners and operators of Tradie Quote.</p>\r\n</li>\r\n<li class=\"\" data-start=\"702\" data-end=\"792\">\r\n<p class=\"\" data-start=\"704\" data-end=\"792\"><strong data-start=\"704\" data-end=\"714\">&ldquo;User&rdquo;</strong>: Any person using the website to search for or request services from tradies.</p>\r\n</li>\r\n<li class=\"\" data-start=\"793\" data-end=\"887\">\r\n<p class=\"\" data-start=\"795\" data-end=\"887\"><strong data-start=\"795\" data-end=\"807\">&ldquo;Tradie&rdquo;</strong>: A registered tradesman or service provider offering services via the platform.</p>\r\n</li>\r\n</ul>\r\n<hr class=\"\" data-start=\"889\" data-end=\"892\" />\r\n<h6 data-start=\"894\" data-end=\"920\">2. <strong data-start=\"901\" data-end=\"920\">Use of Platform</strong></h6>\r\n<ul data-start=\"921\" data-end=\"1230\">\r\n<li class=\"\" data-start=\"921\" data-end=\"1012\">\r\n<p class=\"\" data-start=\"923\" data-end=\"1012\">The platform allows users to search, compare, and request quotes from registered tradies.</p>\r\n</li>\r\n<li class=\"\" data-start=\"1013\" data-end=\"1111\">\r\n<p class=\"\" data-start=\"1015\" data-end=\"1111\">Users agree to provide accurate, lawful, and current information when submitting quote requests.</p>\r\n</li>\r\n<li class=\"\" data-start=\"1112\" data-end=\"1230\">\r\n<p class=\"\" data-start=\"1114\" data-end=\"1230\">Tradies agree to offer services in compliance with applicable Australian laws, licenses, and insurance requirements.</p>\r\n</li>\r\n</ul>\r\n<hr class=\"\" data-start=\"1232\" data-end=\"1235\" />\r\n<h6 data-start=\"1237\" data-end=\"1269\">3. <strong data-start=\"1244\" data-end=\"1269\">Quote Requests &amp; Jobs</strong></h6>\r\n<ul data-start=\"1270\" data-end=\"1597\">\r\n<li class=\"\" data-start=\"1270\" data-end=\"1374\">\r\n<p class=\"\" data-start=\"1272\" data-end=\"1374\">Tradie Quote does not guarantee that a user will receive quotes or that a tradie will be awarded work.</p>\r\n</li>\r\n<li class=\"\" data-start=\"1375\" data-end=\"1481\">\r\n<p class=\"\" data-start=\"1377\" data-end=\"1481\">Users are responsible for verifying credentials, insurance, and qualifications before engaging a tradie.</p>\r\n</li>\r\n<li class=\"\" data-start=\"1482\" data-end=\"1597\">\r\n<p class=\"\" data-start=\"1484\" data-end=\"1597\">Tradie Quote is not liable for any work performed, quotes provided, or agreements made between users and tradies.</p>\r\n</li>\r\n</ul>\r\n<hr class=\"\" data-start=\"1599\" data-end=\"1602\" />\r\n<h6 data-start=\"1604\" data-end=\"1630\">4. <strong data-start=\"1611\" data-end=\"1630\">Payments &amp; Fees</strong></h6>\r\n<ul data-start=\"1631\" data-end=\"1821\">\r\n<li class=\"\" data-start=\"1631\" data-end=\"1681\">\r\n<p class=\"\" data-start=\"1633\" data-end=\"1681\">Use of the platform is currently free for users.</p>\r\n</li>\r\n<li class=\"\" data-start=\"1682\" data-end=\"1821\">\r\n<p class=\"\" data-start=\"1684\" data-end=\"1821\">Tradies may be charged a subscription or lead fee to access or respond to quote requests. Fees are non-refundable unless otherwise stated.</p>\r\n</li>\r\n</ul>\r\n<hr class=\"\" data-start=\"1823\" data-end=\"1826\" />\r\n<h6 data-start=\"1828\" data-end=\"1851\">5. <strong data-start=\"1835\" data-end=\"1851\">User Conduct</strong></h6>\r\n<ul data-start=\"1852\" data-end=\"2018\">\r\n<li class=\"\" data-start=\"1852\" data-end=\"1922\">\r\n<p class=\"\" data-start=\"1854\" data-end=\"1922\">You must not use the platform for unlawful or fraudulent activities.</p>\r\n</li>\r\n<li class=\"\" data-start=\"1923\" data-end=\"2018\">\r\n<p class=\"\" data-start=\"1925\" data-end=\"2018\">Harassment, abuse, or offensive conduct toward other users or tradies is strictly prohibited.</p>\r\n</li>\r\n</ul>\r\n<hr class=\"\" data-start=\"2020\" data-end=\"2023\" />\r\n<h6 data-start=\"2025\" data-end=\"2059\">6. <strong data-start=\"2032\" data-end=\"2059\">Limitation of Liability</strong></h6>\r\n<ul data-start=\"2060\" data-end=\"2343\">\r\n<li class=\"\" data-start=\"2060\" data-end=\"2166\">\r\n<p class=\"\" data-start=\"2062\" data-end=\"2166\">Tradie Quote acts solely as a facilitator and is not a party to any agreement between users and tradies.</p>\r\n</li>\r\n<li class=\"\" data-start=\"2167\" data-end=\"2252\">\r\n<p class=\"\" data-start=\"2169\" data-end=\"2252\">We do not inspect, endorse, or guarantee the work or behavior of any tradie listed.</p>\r\n</li>\r\n<li class=\"\" data-start=\"2253\" data-end=\"2343\">\r\n<p class=\"\" data-start=\"2255\" data-end=\"2343\">We are not liable for any damages, losses, or disputes arising from use of the platform.</p>\r\n</li>\r\n</ul>\r\n<hr class=\"\" data-start=\"2345\" data-end=\"2348\" />\r\n<h6 data-start=\"2350\" data-end=\"2368\">7. <strong data-start=\"2357\" data-end=\"2368\">Privacy</strong></h6>\r\n<ul data-start=\"2369\" data-end=\"2556\">\r\n<li class=\"\" data-start=\"2369\" data-end=\"2445\">\r\n<p class=\"\" data-start=\"2371\" data-end=\"2445\">All data is collected and handled in accordance with our [Privacy Policy].</p>\r\n</li>\r\n<li class=\"\" data-start=\"2446\" data-end=\"2556\">\r\n<p class=\"\" data-start=\"2448\" data-end=\"2556\">Users agree to the use of their contact details for communication with tradies and platform-related updates.</p>\r\n</li>\r\n</ul>\r\n<hr class=\"\" data-start=\"2558\" data-end=\"2561\" />\r\n<h6 data-start=\"2563\" data-end=\"2595\">8. <strong data-start=\"2570\" data-end=\"2595\">Intellectual Property</strong></h6>\r\n<ul data-start=\"2596\" data-end=\"2752\">\r\n<li class=\"\" data-start=\"2596\" data-end=\"2752\">\r\n<p class=\"\" data-start=\"2598\" data-end=\"2752\">All content, branding, and software on Tradie Quote is the intellectual property of the platform and must not be copied or reused without written consent.</p>\r\n</li>\r\n</ul>\r\n<hr class=\"\" data-start=\"2754\" data-end=\"2757\" />\r\n<h6 data-start=\"2759\" data-end=\"2786\">9. <strong data-start=\"2766\" data-end=\"2786\">Changes to Terms</strong></h6>\r\n<ul data-start=\"2787\" data-end=\"2905\">\r\n<li class=\"\" data-start=\"2787\" data-end=\"2905\">\r\n<p class=\"\" data-start=\"2789\" data-end=\"2905\">We may update these Terms &amp; Conditions at any time. Continued use of the platform constitutes acceptance of changes.</p>\r\n</li>\r\n</ul>\r\n<hr class=\"\" data-start=\"2907\" data-end=\"2910\" />\r\n<h6 data-start=\"2912\" data-end=\"2937\">10. <strong data-start=\"2920\" data-end=\"2937\">Governing Law</strong></h6>\r\n<p class=\"\" data-start=\"2938\" data-end=\"3119\">These terms are governed by the laws of the State of Australia. Any disputes shall be resolved in courts of competent jurisdiction within that state.</p>\r\n<hr class=\"\" data-start=\"3121\" data-end=\"3124\" />\r\n<p class=\"\" data-start=\"3126\" data-end=\"3204\"><strong data-start=\"3126\" data-end=\"3141\">Contact Us:</strong><br data-start=\"3141\" data-end=\"3144\" />For any questions, email us at [info<a rel=\"noopener\">@tradiequote.com.au</a>].</p>\r\n</li>\r\n</ol>', NULL, '2025-05-02 17:56:34');

-- --------------------------------------------------------

--
-- Table structure for table `connects`
--

CREATE TABLE `connects` (
  `id` int(11) NOT NULL,
  `name` varchar(155) DEFAULT NULL,
  `detail` varchar(500) DEFAULT NULL,
  `email` varchar(90) DEFAULT NULL,
  `phone` varchar(50) DEFAULT NULL,
  `suburb` varchar(150) DEFAULT NULL,
  `created_at` timestamp(6) NULL DEFAULT NULL,
  `updated_at` timestamp(6) NULL DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `connects`
--

INSERT INTO `connects` (`id`, `name`, `detail`, `email`, `phone`, `suburb`, `created_at`, `updated_at`) VALUES
(15, 'Nikola Mitrovic', 'Whether you have questions or you would just like to say hello, contact us.', 'razatshrestha07@gmail.com', '9849997452', 'Sebastopol', '2025-05-16 04:43:04.000000', '2025-05-16 04:43:04.000000'),
(16, '11,000 Chandrama Mool Mantra Jaap and Kavach Path Havan', 'gfgfd', 'saritabaidhyas@gmail.com', '9843518368', 'Bhaktapur', '2025-05-26 01:23:38.000000', '2025-05-26 01:23:38.000000'),
(22, 'Nakshatra of Mangal Special 10,000 Mangal Mool Mantra Jaap and Dashansh Havan', 'sgsdg', 'saritabaidhyas@gmail.com', '9843518368', 'Bhaktapur', '2025-06-04 06:32:14.000000', '2025-06-04 06:32:14.000000'),
(20, '11,000 Chandrama Mool Mantra Jaap and Kavach Path Havan', 'ghjhg', 'saritabaidhyas@gmail.com', '9843518368', 'Bhaktapur', '2025-06-04 06:31:05.000000', '2025-06-04 06:31:05.000000'),
(21, '11,000 Chandrama Mool Mantra Jaap and Kavach Path Havan', 'dadsa', 'saritabaidhyas@gmail.com', '9843518368', 'Bhaktapur', '2025-06-04 06:31:25.000000', '2025-06-04 06:31:25.000000'),
(23, 'sdfsdf', 'fsdf', 'fsdf', 'dfds', 'sdfsd', '2025-07-02 04:47:31.000000', '2025-07-02 04:47:31.000000'),
(24, 'sarita Baidhya', 'gfjhfgj', 'saritabaidhyas@gmail.com', '9843518366', 'Bhaktapur', '2025-09-25 04:26:16.000000', '2025-09-25 04:26:16.000000');

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` varchar(255) NOT NULL,
  `connection` text NOT NULL,
  `queue` text NOT NULL,
  `payload` longtext NOT NULL,
  `exception` longtext NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `grants`
--

CREATE TABLE `grants` (
  `id` int(11) NOT NULL,
  `name` varchar(145) DEFAULT NULL,
  `detail` longtext DEFAULT NULL,
  `category` varchar(191) DEFAULT NULL,
  `path` varchar(245) DEFAULT NULL,
  `status` varchar(45) DEFAULT NULL,
  `created_at` timestamp(6) NULL DEFAULT NULL,
  `updated_at` timestamp(6) NULL DEFAULT NULL,
  `slug` varchar(245) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `grants`
--

INSERT INTO `grants` (`id`, `name`, `detail`, `category`, `path`, `status`, `created_at`, `updated_at`, `slug`) VALUES
(6, 'Shop Now', '<div>\r\n<div>&nbsp;CATCH BIG <strong>DEALS </strong>ON THE CAMERAS</div>\r\n</div>', 'Normal', '0e4bGo89aXbZvSXpcojBrHNTL1iQd1c3g8QfTjaA.png', '1', '2025-09-04 03:39:33.000000', '2025-09-04 03:40:14.000000', 'shop-now'),
(7, 'Shop Now', '<div>\r\n<div>&nbsp;CATCH BIG <strong>DEALS </strong>ON THE CAMERAS</div>\r\n</div>', 'Normal', 'TE7so80pp7MKamIFeZPwhvADjHvGBcoDzArrf10K.jpg', '1', '2025-09-04 03:39:44.000000', '2025-09-04 03:40:30.000000', 'shop-now'),
(8, 'Shop Now', '<div>\r\n<div>CATCH BIG <strong>DEALS&nbsp; </strong>ON THE CAMERAS</div>\r\n</div>', 'Normal', 'dL4OkFwv3w9Vx8xkveEocUPcd9dEQxDOh1lBcxz5.jpg', '1', '2025-09-04 03:41:02.000000', '2025-09-04 03:41:02.000000', 'shop-now'),
(9, 'Shop Now', '<div>\r\n<div>CATCH BIG <strong>DEALS&nbsp; </strong>ON THE CAMERAS</div>\r\n</div>', 'Normal', 'yv8NhPWxqbA8rRAgsGP5325qu9oyhWzITJDxiTdG.png', '1', '2025-09-04 03:41:09.000000', '2025-09-04 03:41:09.000000', 'shop-now');

-- --------------------------------------------------------

--
-- Table structure for table `journals`
--

CREATE TABLE `journals` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) DEFAULT NULL,
  `detail` text DEFAULT NULL,
  `path` varchar(255) NOT NULL,
  `status` tinyint(1) NOT NULL DEFAULT 1,
  `category` varchar(255) NOT NULL,
  `meta_keyword` varchar(255) NOT NULL,
  `meta_description` varchar(255) NOT NULL,
  `slug` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `journals`
--

INSERT INTO `journals` (`id`, `name`, `detail`, `path`, `status`, `category`, `meta_keyword`, `meta_description`, `slug`, `created_at`, `updated_at`) VALUES
(2, 'How to Become an Electrician', '<p>The UK needs an estimated 104,000 extra electricians by 2032 to meet government targets for housebuilding and renewable energy installations. If you&rsquo;re wondering how to become an electrician and figuring out if it&rsquo;s the right career path for you, there&rsquo;s never been a better time to join the in-demand industry.</p>', 'mKEcb1CPGwj2cqxnPmg9V9ZtlOwQUJ4Bv47CFnjL.png', 1, '1', 'industry,electrician', 'there’s never been a better time to join the in-demand industry.', 'how-to-become-an-electrician', '2025-02-03 11:14:35', '2025-05-26 01:06:39');

-- --------------------------------------------------------

--
-- Table structure for table `markets`
--

CREATE TABLE `markets` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) DEFAULT NULL,
  `detail` text DEFAULT NULL,
  `hero` varchar(355) DEFAULT NULL,
  `path` varchar(255) NOT NULL,
  `status` tinyint(1) NOT NULL DEFAULT 1,
  `category` varchar(255) DEFAULT NULL,
  `icon` varchar(55) DEFAULT NULL,
  `meta_keyword` varchar(255) DEFAULT NULL,
  `meta_description` varchar(255) DEFAULT NULL,
  `image` varchar(255) NOT NULL,
  `slug` varchar(255) DEFAULT NULL,
  `order` int(11) DEFAULT NULL,
  `featured` varchar(55) DEFAULT '0',
  `hidden` longtext DEFAULT NULL,
  `title` varchar(225) DEFAULT NULL,
  `type` varchar(191) DEFAULT NULL,
  `offprice` varchar(55) DEFAULT '19',
  `unitprice` varchar(191) DEFAULT NULL,
  `purpose` varchar(191) DEFAULT NULL,
  `benefit` varchar(191) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `price` varchar(45) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `markets`
--

INSERT INTO `markets` (`id`, `name`, `detail`, `hero`, `path`, `status`, `category`, `icon`, `meta_keyword`, `meta_description`, `image`, `slug`, `order`, `featured`, `hidden`, `title`, `type`, `offprice`, `unitprice`, `purpose`, `benefit`, `created_at`, `updated_at`, `price`) VALUES
(317, 'Ek Mukhi Rudrakshya', '<div>\r\n<div>The purpose of this puja is to invoke the blessings of the Moon for the protection and well-being of your children. By worshipping the Moon, the ceremony aims to ensure that children grow in a nurturing environment filled with love and support. The Moon is associated with emotions, mental peace, and beauty, making this ritual significant for fostering children\'s growth and security. Overall, this puja helps create a balanced and harmonious atmosphere for families, encouraging a bright future for the younger generation.</div>\r\n</div>', 'Rudraksha, a very important and mystical Bead of Hindu Mythology & Medication is a kind of natural fruit that grows in eastern hilly areas of Nepal.', 'pSGyZbINg6WdxlEz9IVHB8ELwoNr89amHsKA91kw.jpg', 1, 'Rudrakshya', NULL, NULL, NULL, 'pSGyZbINg6WdxlEz9IVHB8ELwoNr89amHsKA91kw.jpg', 'ek_mukhi_rudrakshya', NULL, '0', NULL, NULL, NULL, '6000', '[{\"title\":\"Regular\",\"price\":\"1500\"},{\"title\":\"Medium\",\"price\":\"2500\"}]', NULL, NULL, '2025-05-22 23:29:33', '2025-05-27 09:01:10', '1999'),
(318, 'Duimukhi Rudrakshya', '<div>\r\n<div>The purpose of this puja is to invoke the blessings of the Moon for the protection and well-being of your children. By worshipping the Moon, the ceremony aims to ensure that children grow in a nurturing environment filled with love and support. The Moon is associated with emotions, mental peace, and beauty, making this ritual significant for fostering children\'s growth and security. Overall, this puja helps create a balanced and harmonious atmosphere for families, encouraging a bright future for the younger generation.</div>\r\n</div>', 'Two Mukhi Rudraksha is known as 2 Face Rudraksha and Dwi Mukhi Rudraksha. Two Mukhi Rudraksha present two natural lines on Rudraksha Bead', '5PZiWolAIQqfVMpaJ0DPPWFV8atLF2mUaaVMtvd3.jpg', 1, 'Rudrakshya', NULL, NULL, NULL, '5PZiWolAIQqfVMpaJ0DPPWFV8atLF2mUaaVMtvd3.jpg', 'duimukhi_rudrakshya', NULL, '0', NULL, NULL, NULL, '6000', '[{\"title\":\"Regular\",\"price\":\"1500\"},{\"title\":\"Medium\",\"price\":\"2500\"}]', NULL, NULL, '2025-05-22 23:37:37', '2025-05-28 04:38:42', '5500'),
(320, '1 Mukhi Rudrakshya', '<p>Two Mukhi Rudraksha is known as 2 Face Rudraksha and Dwi Mukhi Rudraksha. Two Mukhi Rudraksha present two natural lines on Rudraksha Bead so it is known as Two Mukhi Rudraksha. Two Mukhi Rudraksha symbolize to the Ardha Nareshwar meaning the Half God Shiva and Half Goddess Parvati (Husband and Wife Deity). Two Mukhi Rudraksha is also known as the power of God Shiva and Shakti(Mother Parvati). Two Mukhi Rudraksha is also a representation of Dev Deveshwor (God Shiva and God Vishnu). Some People also narrates Dev Deveshwor as God Shiva and God Indra. It is believed that Lord Agni (Fire God) also bless Two Mukhi Rudraksha. Those who have established 2 Mukhi rudraksha in the body, his/her sin of many life is destroyed in the same way that fire burns fuel.</p>', 'Two Mukhi Rudraksha is known as 2 Face Rudraksha and Dwi Mukhi Rudraksha. Two Mukhi Rudraksha present two natural lines on Rudraksha.', 'RqTMBi6k7xdDYBVuLXo0F9FRioJDBss7IHedJ6bL.jpg', 1, 'Rudrakshya', NULL, NULL, NULL, 'RqTMBi6k7xdDYBVuLXo0F9FRioJDBss7IHedJ6bL.jpg', '1-mukhi-indonesian-rudrakshya', NULL, '0', NULL, NULL, NULL, '6851.90', '[{\"title\":\"Regular\",\"price\":\"1500\"},{\"title\":\"Medium\",\"price\":\"2500\"},{\"title\":\"large\",\"price\":\"2500\"},{\"title\":\"extra large\",\"price\":\"9900\"}]', NULL, NULL, '2025-05-27 06:39:41', '2025-06-12 06:00:56', '6851.90'),
(321, '11,000 Chandrama Mool Mantra Jaap and Kavach Path Havan', '<p>sdfdsfsdf</p>', 'dsfsdf', 'TS0xG3hyp7cp4PtRZdccb54K306apBrvGMOOpm1h.jpg', 1, 'Rudrakshya', NULL, NULL, NULL, 'TS0xG3hyp7cp4PtRZdccb54K306apBrvGMOOpm1h.jpg', '11000-chandrama-mool-mantra-jaap-and-kavach-path-havan', NULL, '0', NULL, NULL, NULL, '25000', '[{\"title\":\"fdsf\",\"price\":\"250\"},{\"title\":\"Medium\",\"price\":null}]', NULL, NULL, '2025-06-12 06:17:00', '2025-06-13 03:59:33', '24000'),
(322, 'Rudrakshya', '<p>&nbsp;Rudrakshya lorem ipsum &nbsp;Rudrakshya Rudrakshya Rudrakshya Rudrakshya</p>', 'RudrakshyaRudrakshyaRudrakshyaRudrakshyaRudrakshya', 'yNBhoSI1whhrJmApq74y6QHIDK8TJNbod5BmKDms.png', 1, NULL, NULL, 'fsdfsd', 'dsfsdf', 'yNBhoSI1whhrJmApq74y6QHIDK8TJNbod5BmKDms.png', 'rudrakshya', NULL, '0', NULL, NULL, NULL, '25000', '[{\"title\":\"Regular\",\"price\":\"2500\"},{\"title\":\"Medium\",\"price\":\"4500\"}]', NULL, '[{\"title\":\"dfsdff d df s fdsf ddfdsfds dfsdfds\"},{\"title\":\"fds fds fds f sdf ds\"}]', '2025-06-24 06:03:33', '2025-06-24 06:03:33', '24000'),
(323, 'sarita Baidhya', '<p>ssdfds fsdfsdf dsfdsf fdsfs</p>', 'fsdf sdfds fs fsdfsdf', 'NV6KsVA8Z5JttBtXo81HkUKlnkte1Ttvox4kwo0U.png', 1, 'Rudrakshya', NULL, 'fsdf', 'fdsf', 'NV6KsVA8Z5JttBtXo81HkUKlnkte1Ttvox4kwo0U.png', 'sarita-baidhya', NULL, '0', NULL, NULL, NULL, '3424', '[{\"title\":\"fdsf\",\"price\":\"33\"},{\"title\":\"fsd\",\"price\":\"333\"}]', NULL, NULL, '2025-06-24 06:04:32', '2025-06-24 06:05:01', '234'),
(324, 'Contract leave', '<p>gfdgdfg fgdgfd fdg fdg dfgfd gfdgfdgfd gffdg</p>', 'gfdgfd', 'JrOclEm7sxEXNAcMZUfEgcvyvnWrSRDappWQTCcq.png', 1, NULL, NULL, 'gfdgdfg', 'gfdgdfg', 'JrOclEm7sxEXNAcMZUfEgcvyvnWrSRDappWQTCcq.png', 'contract-leave', NULL, '0', NULL, NULL, NULL, '25000', '[{\"title\":\"Regular\",\"price\":\"4500\"},{\"title\":\"Small\",\"price\":\"4500\"}]', NULL, '[{\"title\":\"gfdgdfg fgdgfd fdg fdg dfgfd gfdgfdgfd gffdg\"},{\"title\":\"gfdgdfg fgdgfd fdg fdg dfgfd gfdgfdgfd gffdg\"}]', '2025-06-24 06:08:35', '2025-06-24 06:08:35', '24000'),
(325, 'fsdf', '<p>sdv ssdf sd fsd sd f</p>', 'sdfsdf', 'hnmuo5be6JZSeOIrQQTAdxfPhEkXZlO5IE8i9cNG.png', 1, 'Shaligram', NULL, 'fdsf sd fds', 'fsdf', 'hnmuo5be6JZSeOIrQQTAdxfPhEkXZlO5IE8i9cNG.png', 'fsdf', NULL, '0', NULL, NULL, NULL, '3434', '[{\"title\":\"34\",\"price\":\"33\"},{\"title\":\"5435\",\"price\":\"543\"}]', 'sdfgs fsdfsd fsd', '[{\"title\":\"fsdf sfd\"},{\"title\":\"fsd fsd fds\"}]', '2025-06-24 06:13:32', '2025-06-24 06:14:58', '434'),
(326, 'fsdf', '<p>sdf sdf ds fsdfsdf</p>', 'sdfsd f', '0UBg3xADXaERgVeBLyHxPuQgyt29GSF9btFxGTXg.png', 1, 'Rudrakshya', NULL, 's fsd', 'fsdfds', '0UBg3xADXaERgVeBLyHxPuQgyt29GSF9btFxGTXg.png', 'fsdf', NULL, '0', NULL, NULL, NULL, '453', '[{\"title\":\"34\",\"price\":\"34\"},{\"title\":\"4324\",\"price\":\"32423\"}]', 'dfgdf fgd fdg', '[{\"title\":\"fdgdfg\"},{\"title\":\"fsdf\"}]', '2025-06-24 06:15:35', '2025-06-24 06:19:17', '5435'),
(327, 'gsdgsg', '<p>5435</p>', 'dgsd', 'BT2mahKSJHyK8j0H8EFsN5dIkoWGzdNI5DdgtfMY.png', 1, 'Rudrakshya', NULL, NULL, NULL, 'BT2mahKSJHyK8j0H8EFsN5dIkoWGzdNI5DdgtfMY.png', 'gsdgsg', NULL, '0', NULL, NULL, NULL, '25000', '[{\"title\":\"small\",\"price\":\"4535\"},{\"title\":\"Medium\",\"price\":\"5345\"}]', NULL, '[{\"title\":\"5435\"}]', '2025-07-02 04:42:11', '2025-07-02 04:42:11', '2500');

-- --------------------------------------------------------

--
-- Table structure for table `media`
--

CREATE TABLE `media` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) DEFAULT NULL,
  `path` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `media`
--

INSERT INTO `media` (`id`, `title`, `path`, `created_at`, `updated_at`) VALUES
(4, 'Test', '7Bg2srj4q7rTZ0fN69f5VVvOAaadCrCLjIK618gm.jpg', '2025-02-03 11:49:07', '2025-02-03 11:49:07'),
(5, 'terst', 'SgkWkOdMkTHetE1uHdHgnqUF0KDCsdqTrslXApe9.svg', '2025-02-10 06:15:54', '2025-02-10 06:15:54'),
(6, 'nav', 'c02sRoB1CZFdrPaMbnMygpi2igYutrFfJx7DXGkC.svg', '2025-02-18 00:38:17', '2025-02-18 00:38:17'),
(9, 'banner', 'e28G6z4LsbmeiBD9hWzPThhpte05lDGm1YEP6HMV.png', '2025-04-16 04:50:37', '2025-04-16 04:50:37'),
(10, 'gf', 'n6eEx2GEoGNOQ3GN0FpdDEmCIgp8t0rVVrZIata2.jpg', '2025-04-16 23:47:42', '2025-04-16 23:47:42'),
(11, 'sd', 'DXVmqduH7QPShm9Y9W2UmZxTgxTf47ED71C0cytJ.png', '2025-04-20 20:19:54', '2025-04-20 20:19:54'),
(12, 'footer', 'LwJmnJ8tNvUBgPo23qc3GzL5qshfm3j4LCRHB1xV.png', '2025-04-20 20:50:50', '2025-04-20 20:50:50'),
(13, 'ss', 'qVAJTxFCKxfKKVKO2a2R9uY301dajDIXCRNzEetP.png', '2025-04-20 20:58:24', '2025-04-20 20:58:24'),
(14, 'ss', '4jx2IT9hg9TDlPoU5ONGcpctCFUdhLL6VJacyaam.png', '2025-04-20 20:59:51', '2025-04-20 20:59:51'),
(15, 'rr', 'K6BRiG93bqqXBBmSbEdE1DWiwtdS9H7HiuQuVqtP.png', '2025-04-28 02:05:24', '2025-04-28 02:05:24'),
(16, 'asdf', 'VSZQ0SMq5Be5JoYgQhkrh0fPkUFljbIKOgPHs9dW.svg', '2025-04-29 05:33:44', '2025-04-29 05:33:44'),
(17, 'mm', 'XjnwhYVFpVKE9lHpf4tOF5Y1YCqgQlq3gh0UNGOk.png', '2025-05-02 06:40:24', '2025-05-02 06:40:24'),
(19, 'yy', 'FKk0qCIEYkgT6FAQGQ4QklLt6efPJXPzZTSXcQJe.jpg', '2025-05-03 02:48:42', '2025-05-03 02:48:42'),
(20, 'hguh', 'gSjopSHP1vo9unEHvxBDDb78GrVvIEzApiTu2MH0.jpg', '2025-05-03 02:50:16', '2025-05-03 02:50:16'),
(21, 'kjh', 'HeDaCr8z9WttBmHpRpUEseqPuZE2VSXWluWjTnF7.png', '2025-05-04 05:42:41', '2025-05-04 05:42:41'),
(22, 'yyy', 'I0hYgpf5KIaUKWcrFhrWaLokHM36x6mgaYKouyRB.png', '2025-05-05 02:58:24', '2025-05-05 02:58:24'),
(23, 'bvcx', 'XnmC6mpD9n5vNoZxNWzdFOCiPKYkzxBOAZeOr3AN.jpg', '2025-05-07 05:48:39', '2025-05-07 05:48:39'),
(24, 'vc', 'WPoHIGSxI2FKjJURu9tG8CGIjfGWoOIGo9N4P4t5.svg', '2025-05-18 23:33:00', '2025-05-18 23:33:00'),
(25, 'asdfg', 'sZCroIiTskIF5yCxa1vuIsTE6uQ5j2K5zsF4RmFU.png', '2025-05-20 01:26:40', '2025-05-20 01:26:40'),
(26, 'qr', 'Jc8wxtWuY5q3NCSuXdzQxlj6tF5hkcEfk5HfUsyz.png', '2025-09-24 10:51:38', '2025-09-24 10:51:38'),
(27, 'mypay', 'n5AvDcxdL4eD5JG16vegpSHGx6tidYeOZPl3pH5c.png', '2025-09-24 10:52:10', '2025-09-24 10:52:10'),
(28, 'cash', 'VzSFQxYJVYosD4TGzclZlrNEAeNquWxT6VX3qkaN.png', '2025-09-24 11:13:19', '2025-09-24 11:13:19');

-- --------------------------------------------------------

--
-- Table structure for table `merchants`
--

CREATE TABLE `merchants` (
  `id` int(11) NOT NULL,
  `merchant_id` int(11) DEFAULT NULL,
  `password` varchar(155) DEFAULT NULL,
  `name` varchar(155) DEFAULT NULL,
  `detail` text DEFAULT NULL,
  `email` varchar(90) DEFAULT NULL,
  `phone` varchar(50) DEFAULT NULL,
  `suburb` varchar(150) DEFAULT NULL,
  `address` varchar(155) DEFAULT NULL,
  `service` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_bin DEFAULT NULL,
  `website` varchar(191) DEFAULT NULL,
  `slug` varchar(155) DEFAULT NULL,
  `abn` varchar(125) DEFAULT NULL,
  `gst` varchar(6) DEFAULT NULL,
  `status` varchar(6) DEFAULT NULL,
  `cost` varchar(13) DEFAULT NULL,
  `liability` varchar(155) DEFAULT NULL,
  `indemnity` varchar(155) DEFAULT NULL,
  `map` varchar(255) DEFAULT NULL,
  `hero` varchar(255) DEFAULT NULL,
  `fav` varchar(155) DEFAULT NULL,
  `path` longtext DEFAULT NULL,
  `created_at` timestamp(6) NULL DEFAULT NULL,
  `updated_at` timestamp(6) NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `merchants`
--

INSERT INTO `merchants` (`id`, `merchant_id`, `password`, `name`, `detail`, `email`, `phone`, `suburb`, `address`, `service`, `website`, `slug`, `abn`, `gst`, `status`, `cost`, `liability`, `indemnity`, `map`, `hero`, `fav`, `path`, `created_at`, `updated_at`) VALUES
(8, 14, '$2y$12$SOOOpSH6zxSHOTJfedfLguvjQcP.XXrBSu41z0/KcqNfjMkC8hov.', 'XYZ Painters Pty. Ltd', '<div>Welcome to Elite Coatings &amp; Paving Supply, your go-to source in Ballarat for high-quality products at unbeatable trade prices. We&rsquo;re open 6 days a week, committed to providing homeowners, DIY enthusiasts, and professionals with premium materials at the SAME WHOLESALE RATES.</div>\r\n<div>&nbsp;</div>\r\n<div>Come visit us today and experience why Elite Coatings &amp; Paving Supply is the preferred choice for quality and affordability in Ballarats!</div>\r\n<div>&nbsp;</div>\r\n<div>At Elite Coatings and Paving Supply, we take pride in offering the highest quality products to meet all of your painting, paving, and home improvement needs. As a trusted supplier in the Australian market, we specialize in premium, locally manufactured paints and coatins. Whether you are working on a residential, commercial, or industrial project, we have the right products for the job.</div>', 'info@xyxpainters.com.au', '0414 367 474', '19', '110 Hertford St, Sebastopol Ballarat', '[\"209\",\"210\",\"211\"]', 'https://elitecps.com.au/', 'ultra-elite-paints', 'ABCDEF12456', 'Yes', '1', 'A$149', '098', 'qwerty', '12345', 'Specialising in coatings & dry powders, Ultra Elite Paints sets the benchmark for tailored white-label paint manufacturing.', 'wwSHA3NyGNH8CyRewDZeVmRA0nZbG6biSHricdiz.png', '[\"kWunhF04Dv4j0bo5TP0Ku5SLKQwzhAt6eSZ7h9mY.jpg\",\"0IMhoAd2CpWAIOEWbpABg37s9LTrFNlyO4Fp9Oss.jpg\",\"zABCjGpKZuNGTwuBiucdGQK8XtSpImvRPCITqHso.jpg\",\"S03QiFhx71ZxIa9yZjhRoqeUG7bfyfGwKim5eCL0.jpg\",\"gKdTbY3Unf2TXhSo43DG3s6OgXW2lSz3NGYJA5Uu.jpg\"]', '2025-04-21 22:23:07.000000', '2025-04-29 05:22:35.000000'),
(15, 15, '$2y$12$CwcqhPrm9xvnqzGqFuaMDuE4vn0tRr0WulHYjyUCWerJRbrKTvWAy', 'ABC Termites Pty Ltd', '<p>For over a decade, this family-run business in Melbourne, Victoria, has been offering natural pest and termite control services. Started in 2011.</p>', 'abctermites@gmail.com', '9849997452', '19', '4/2-4 Crellin Ave, Laverton', '[\"209\",\"210\",\"285\",\"286\"]', 'https://rapidtermites.com', 'abc-termites-pty-ltd', 'ABCDE12345', 'No', '1', '125', 'Yes', 'Yes', 'https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d12598.533677849779!2d144.754978!3d-37.868867!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x6ad689b3b4efffff%3A0x354531f6c4a83f7c!2sRapid%20Termites%20Melbourne!5e0!3m2!1sen!2sau!4v1745900977080!5m2!1sen!2sau', 'For over a decade, this family-run business in Melbourne, Victoria, has been offering natural pest and termite control services.', 'C1LREmtuOTZth4IvqifK9A8MNrjsF01PFMFMPCWS.png', '[\"znb0EBYKy1rTjlGFuE7NQXtQc9RG7H5kekqcw1se.jpg\",\"I4Kfc5M9c2c6COntwLsRUI84QvMKKRpzFQNqKJtC.jpg\",\"Munl3qpebF2RzsazJcm2VuJack3sv83Cs7NezSJa.jpg\",\"bWNDyvrCv8yiQwjwvyfgJrI15H0sd75FxgAW1W64.jpg\",\"2RvtofBdxKMea8mmo7PFQrPRCzHJ6oWR2K5twr3R.jpg\"]', '2025-04-28 17:37:55.000000', '2025-04-29 03:27:41.000000');

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_reset_tokens_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(11, '2025_01_06_104434_create_sliders_table', 2),
(12, '2025_01_08_070048_create_settings_table', 2),
(13, '2025_01_08_110818_create_utilities_table', 3),
(14, '2025_01_08_111744_add_icon_to_utilities_table', 4),
(18, '2025_01_09_091302_create_utility_types_table', 5),
(19, '2025_01_09_101035_create_conditions_table', 5),
(20, '2025_01_09_110801_create_policies_table', 6),
(21, '2025_01_09_114921_create_stories_table', 7),
(22, '2025_01_17_092437_create_media_table', 8),
(23, '2025_01_17_100217_create_popups_table', 9),
(25, '2025_01_17_103224_create_studios_table', 10),
(30, '2025_01_23_063435_create_squads_table', 11),
(31, '2025_01_28_051146_create_journals_table', 12),
(32, '2025_01_28_054258_create_queries_table', 13),
(33, '2025_01_29_105653_create_associates_table', 14),
(34, '2025_01_29_111328_create_reviews_table', 15);

-- --------------------------------------------------------

--
-- Table structure for table `offerings`
--

CREATE TABLE `offerings` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `path` varchar(191) DEFAULT NULL,
  `name` varchar(255) DEFAULT NULL,
  `slug` varchar(191) DEFAULT NULL,
  `unit` varchar(191) DEFAULT NULL,
  `priority` varchar(255) DEFAULT NULL,
  `price` varchar(191) DEFAULT NULL,
  `currency` varchar(191) DEFAULT NULL,
  `status` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_bin DEFAULT '1',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `offerings`
--

INSERT INTO `offerings` (`id`, `path`, `name`, `slug`, `unit`, `priority`, `price`, `currency`, `status`, `created_at`, `updated_at`) VALUES
(18, '0S8ORWTweTIWSaTxlPlY1D9OZ5UWFQ1jeMwwTFkU.png', 'Laddu', 'laddu', 'Liters', '3', '25200', 'NPR', '1', '2025-06-13 04:56:53', '2025-06-17 06:24:47'),
(20, NULL, 'Pray with Pandit', 'pray-with-pandit', 'Liters', '2', '1999', 'NPR', '1', '2025-06-13 05:03:59', '2025-06-13 05:03:59'),
(21, NULL, 'Astrology Service', 'astrology-service', 'Bowl', '2', '1999', 'NPR', '1', '2025-06-13 05:44:39', '2025-06-13 05:44:39'),
(22, NULL, 'Rudrakshya', 'rudrakshya', 'Pieces', '1', '11010', 'NPR', '1', '2025-06-13 06:00:44', '2025-06-13 06:00:44');

-- --------------------------------------------------------

--
-- Table structure for table `orderforms`
--

CREATE TABLE `orderforms` (
  `id` int(11) NOT NULL,
  `name` varchar(155) DEFAULT NULL,
  `detail` varchar(500) DEFAULT NULL,
  `email` varchar(90) DEFAULT NULL,
  `phone` varchar(50) DEFAULT NULL,
  `address` varchar(150) DEFAULT NULL,
  `created_at` timestamp(6) NULL DEFAULT NULL,
  `updated_at` timestamp(6) NULL DEFAULT NULL,
  `amount` varchar(191) DEFAULT NULL,
  `category` varchar(191) DEFAULT NULL,
  `product_ids` varchar(191) DEFAULT NULL,
  `order_id` varchar(191) DEFAULT NULL,
  `redirectId` varchar(191) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `orderforms`
--

INSERT INTO `orderforms` (`id`, `name`, `detail`, `email`, `phone`, `address`, `created_at`, `updated_at`, `amount`, `category`, `product_ids`, `order_id`, `redirectId`) VALUES
(1, 'sarita Baidhya', 'ghfh', 'saritabaidhyas@gmail.com', '9843518366', 'Bhaktapur', '2025-09-25 04:24:24.000000', '2025-09-25 04:24:24.000000', NULL, NULL, NULL, NULL, NULL),
(20, 'sarita Baidhya', 'sdsad', 'saritabaidhyas@gmail.com', '9843518366', 'Bhaktapur', '2025-10-06 06:26:53.000000', '2025-10-06 06:26:53.000000', '10400', 'cart', '[\"5\",\"6\",\"3\"]', NULL, NULL),
(21, 'sarita Baidhya', 'sdsad', 'saritabaidhyas@gmail.com', '9843518366', 'Bhaktapur', '2025-10-06 06:42:55.000000', '2025-10-06 06:42:55.000000', '10400', 'cart', '[\"5\",\"6\",\"3\"]', NULL, NULL),
(22, 'sarita Baidhya', 'dasd', 'saritabaidhyas@gmail.com', '9843518366', 'Bhaktapur', '2025-10-06 08:29:09.000000', '2025-10-06 08:29:09.000000', '10400', 'cart', '[\"5\",\"6\",\"3\"]', NULL, NULL),
(23, 'sarita Baidhya', ';;l', 'saritabaidhyas@gmail.com', '9843518366', 'Bhaktapur', '2026-01-02 09:14:29.000000', '2026-01-02 09:14:29.000000', '1950', 'cart', '[\"3\"]', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `packages`
--

CREATE TABLE `packages` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) DEFAULT NULL,
  `slug` varchar(191) DEFAULT NULL,
  `detail` text DEFAULT NULL,
  `offerings` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_bin DEFAULT NULL,
  `path` varchar(255) DEFAULT NULL,
  `member` varchar(191) DEFAULT NULL,
  `status` varchar(191) DEFAULT NULL,
  `point` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_bin DEFAULT NULL CHECK (json_valid(`point`)),
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `packages`
--

INSERT INTO `packages` (`id`, `name`, `slug`, `detail`, `offerings`, `path`, `member`, `status`, `point`, `created_at`, `updated_at`) VALUES
(13, 'Individual Puja', 'individual-puja', NULL, '[\"Laddu\",\"Pray with Pandit\",\"Astrology Service\",\"Rudrakshya\"]', 'LdbTyGXFqUL1dZkXk2NGi9VgilTfFLjbmyzzedW8.png', '1', '1', '[{\"title\":\"Pandit Ji will mention your name, gotra, and the names of all participants during the puja sankalp.\"},{\"title\":\"After the puja, a video and Panchmeva will be sent to your address within 8-10 days, free of charge.\"}]', '2025-05-27 06:24:26', '2025-06-17 06:23:53'),
(14, 'Couple Pooja', 'couple-pooja', NULL, '[\"Laddu\",\"Pray with Pandit\",\"Astrology Service\"]', '6FAmgSC7ul3PRNtVjCPZ5ekHADjiysrxbgGIJK7E.png', '2', '1', '[{\"title\":\"Pandit Ji will mention two name, gotra, and the names of all participants during the puja sankalp.\"},{\"title\":\"After the puja, a video and Panchmeva will be sent to your address within 8-10 days, free of charge.\"}]', '2025-05-27 06:25:15', '2025-06-13 05:45:07'),
(15, 'Family Pooja', 'family-pooja', NULL, '[\"Laddu\",\"Pray with Pandit\",\"Astrology Service\"]', 'YZzL7kgx4K40xtMJEFkJVHppptwChOVVeHE6urT5.png', '4', '1', '[{\"title\":\"Pandit Ji will mention your 4 , gotra, and the names of all participants during the puja sankalp.\"},{\"title\":\"After the puja, a video and Panchmeva will be sent to your address within 8-10 days, free of charge.\"}]', '2025-05-27 06:25:41', '2025-06-13 05:45:01'),
(16, 'Group Pooja', 'group-pooja', NULL, '[\"Laddu\",\"Pray with Pandit\",\"Astrology Service\"]', 'VGnczAlVueEDn1tEmx8ZTOZmvlTQUgUt1DKhvCzG.png', '6', '1', '[{\"title\":\"Pandit Ji will mention 6  gotra, and the names of all participants during the puja sankalp.\"},{\"title\":\"After the puja, a video and Panchmeva will be sent to your address within 8-10 days, free of charge.\"}]', '2025-05-27 11:35:54', '2025-06-13 05:44:55');

-- --------------------------------------------------------

--
-- Table structure for table `pages`
--

CREATE TABLE `pages` (
  `id` int(11) NOT NULL,
  `name` varchar(255) DEFAULT NULL,
  `detail` longtext DEFAULT NULL,
  `title` varchar(225) DEFAULT NULL,
  `hidden` longtext DEFAULT NULL,
  `created_at` timestamp(6) NULL DEFAULT NULL,
  `updated_at` timestamp(6) NULL DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `pages`
--

INSERT INTO `pages` (`id`, `name`, `detail`, `title`, `hidden`, `created_at`, `updated_at`) VALUES
(1, 'How It Works', '<p>How It Works</p>', 'How It Works | Tradie Quote', 'How It Works', '2025-04-07 01:18:49.000000', '2025-04-08 03:59:40.000000'),
(2, 'Ask Trade', '<p>Ask Trade</p>', '', 'Ask Trade', '2025-04-07 01:26:26.000000', '2025-04-07 01:46:47.000000'),
(3, 'Cost Guides', '<p>Cost Guides</p>', '', 'Cost Guides', '2025-04-07 01:26:43.000000', '2025-04-07 01:45:29.000000'),
(4, 'Categories', '<p>Categories</p>', '', 'Categories', '2025-04-07 01:26:56.000000', '2025-04-07 01:43:21.000000'),
(5, 'Contact', '<p>Contact</p>', 'Contact | Tradie Quote', 'Find the talent needed to get your\r\nbusiness growing.', '2025-04-07 01:27:06.000000', '2025-04-08 04:03:00.000000');

-- --------------------------------------------------------

--
-- Table structure for table `password_reset_tokens`
--

CREATE TABLE `password_reset_tokens` (
  `email` varchar(255) NOT NULL,
  `token` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tokenable_type` varchar(255) NOT NULL,
  `tokenable_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `token` varchar(64) NOT NULL,
  `abilities` text DEFAULT NULL,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `expires_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `policies`
--

CREATE TABLE `policies` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) DEFAULT NULL,
  `detail` longtext DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `policies`
--

INSERT INTO `policies` (`id`, `name`, `detail`, `created_at`, `updated_at`) VALUES
(1, 'Privacy Policy', '<p class=\"\" data-start=\"334\" data-end=\"367\"><strong data-start=\"334\" data-end=\"353\">Effective Date:</strong> [05/03/2025]</p>\r\n<p class=\"\" data-start=\"369\" data-end=\"555\">At Tradie Quote, your privacy is important to us. This Privacy Policy outlines how we collect, use, disclose, and protect your personal information when you use our website and services.</p>\r\n<hr class=\"\" data-start=\"557\" data-end=\"560\" />\r\n<h6 data-start=\"562\" data-end=\"600\">1. <strong data-start=\"569\" data-end=\"600\">What Information We Collect</strong></h6>\r\n<p class=\"\" data-start=\"602\" data-end=\"661\">We may collect the following types of personal information:</p>\r\n<ul data-start=\"663\" data-end=\"1015\">\r\n<li class=\"\" data-start=\"663\" data-end=\"823\">\r\n<p class=\"\" data-start=\"665\" data-end=\"696\"><strong data-start=\"665\" data-end=\"696\">Users (Homeowners/Clients):</strong></p>\r\n<ul data-start=\"699\" data-end=\"823\">\r\n<li class=\"\" data-start=\"699\" data-end=\"730\">\r\n<p class=\"\" data-start=\"701\" data-end=\"730\">Name, email, and phone number</p>\r\n</li>\r\n<li class=\"\" data-start=\"733\" data-end=\"753\">\r\n<p class=\"\" data-start=\"735\" data-end=\"753\">Suburb or postcode</p>\r\n</li>\r\n<li class=\"\" data-start=\"756\" data-end=\"781\">\r\n<p class=\"\" data-start=\"758\" data-end=\"781\">Service request details</p>\r\n</li>\r\n<li class=\"\" data-start=\"784\" data-end=\"823\">\r\n<p class=\"\" data-start=\"786\" data-end=\"823\">IP address and device/browser details</p>\r\n</li>\r\n</ul>\r\n</li>\r\n<li class=\"\" data-start=\"825\" data-end=\"1015\">\r\n<p class=\"\" data-start=\"827\" data-end=\"859\"><strong data-start=\"827\" data-end=\"859\">Tradies (Service Providers):</strong></p>\r\n<ul data-start=\"862\" data-end=\"1015\">\r\n<li class=\"\" data-start=\"862\" data-end=\"893\">\r\n<p class=\"\" data-start=\"864\" data-end=\"893\">Business name, contact person</p>\r\n</li>\r\n<li class=\"\" data-start=\"896\" data-end=\"936\">\r\n<p class=\"\" data-start=\"898\" data-end=\"936\">Email, phone, ABN, and license numbers</p>\r\n</li>\r\n<li class=\"\" data-start=\"939\" data-end=\"975\">\r\n<p class=\"\" data-start=\"941\" data-end=\"975\">Services offered and service areas</p>\r\n</li>\r\n<li class=\"\" data-start=\"978\" data-end=\"1015\">\r\n<p class=\"\" data-start=\"980\" data-end=\"1015\">Reviews, ratings, and quote history</p>\r\n</li>\r\n</ul>\r\n</li>\r\n</ul>\r\n<hr class=\"\" data-start=\"1017\" data-end=\"1020\" />\r\n<h6 data-start=\"1022\" data-end=\"1064\">2. <strong data-start=\"1029\" data-end=\"1064\">How We Collect Your Information</strong></h6>\r\n<p class=\"\" data-start=\"1065\" data-end=\"1096\">We collect information through:</p>\r\n<ul data-start=\"1098\" data-end=\"1287\">\r\n<li class=\"\" data-start=\"1098\" data-end=\"1140\">\r\n<p class=\"\" data-start=\"1100\" data-end=\"1140\">Account registrations and profile setups</p>\r\n</li>\r\n<li class=\"\" data-start=\"1141\" data-end=\"1162\">\r\n<p class=\"\" data-start=\"1143\" data-end=\"1162\">Quote request forms</p>\r\n</li>\r\n<li class=\"\" data-start=\"1163\" data-end=\"1191\">\r\n<p class=\"\" data-start=\"1165\" data-end=\"1191\">Contact and feedback forms</p>\r\n</li>\r\n<li class=\"\" data-start=\"1192\" data-end=\"1233\">\r\n<p class=\"\" data-start=\"1194\" data-end=\"1233\">Cookies, analytics tools, and log files</p>\r\n</li>\r\n<li class=\"\" data-start=\"1234\" data-end=\"1287\">\r\n<p class=\"\" data-start=\"1236\" data-end=\"1287\">Phone calls, chats, or emails with our support team</p>\r\n</li>\r\n</ul>\r\n<hr class=\"\" data-start=\"1289\" data-end=\"1292\" />\r\n<h6 data-start=\"1294\" data-end=\"1332\">3. <strong data-start=\"1301\" data-end=\"1332\">How We Use Your Information</strong></h6>\r\n<p class=\"\" data-start=\"1333\" data-end=\"1369\">We use your personal information to:</p>\r\n<ul data-start=\"1371\" data-end=\"1578\">\r\n<li class=\"\" data-start=\"1371\" data-end=\"1411\">\r\n<p class=\"\" data-start=\"1373\" data-end=\"1411\">Connect users with appropriate tradies</p>\r\n</li>\r\n<li class=\"\" data-start=\"1412\" data-end=\"1458\">\r\n<p class=\"\" data-start=\"1414\" data-end=\"1458\">Send service or quote-related communications</p>\r\n</li>\r\n<li class=\"\" data-start=\"1459\" data-end=\"1493\">\r\n<p class=\"\" data-start=\"1461\" data-end=\"1493\">Manage accounts and transactions</p>\r\n</li>\r\n<li class=\"\" data-start=\"1494\" data-end=\"1546\">\r\n<p class=\"\" data-start=\"1496\" data-end=\"1546\">Improve our website, services, and user experience</p>\r\n</li>\r\n<li class=\"\" data-start=\"1547\" data-end=\"1578\">\r\n<p class=\"\" data-start=\"1549\" data-end=\"1578\">Comply with legal obligations</p>\r\n</li>\r\n</ul>\r\n<hr class=\"\" data-start=\"1580\" data-end=\"1583\" />\r\n<h6 data-start=\"1585\" data-end=\"1621\">4. <strong data-start=\"1592\" data-end=\"1621\">Disclosure of Information</strong></h6>\r\n<p class=\"\" data-start=\"1622\" data-end=\"1657\">We may share your information with:</p>\r\n<ul data-start=\"1659\" data-end=\"1891\">\r\n<li class=\"\" data-start=\"1659\" data-end=\"1712\">\r\n<p class=\"\" data-start=\"1661\" data-end=\"1712\">Registered tradies to fulfill your service requests</p>\r\n</li>\r\n<li class=\"\" data-start=\"1713\" data-end=\"1791\">\r\n<p class=\"\" data-start=\"1715\" data-end=\"1791\">Third-party service providers for hosting, analytics, and payment processing</p>\r\n</li>\r\n<li class=\"\" data-start=\"1792\" data-end=\"1848\">\r\n<p class=\"\" data-start=\"1794\" data-end=\"1848\">Government agencies or regulators when required by law</p>\r\n</li>\r\n<li class=\"\" data-start=\"1849\" data-end=\"1891\">\r\n<p class=\"\" data-start=\"1851\" data-end=\"1891\">Other parties with your explicit consent</p>\r\n</li>\r\n</ul>\r\n<p class=\"\" data-start=\"1893\" data-end=\"1959\">We do not sell or rent your personal information to third parties.</p>\r\n<hr class=\"\" data-start=\"1961\" data-end=\"1964\" />\r\n<h6 data-start=\"1966\" data-end=\"1997\">5. <strong data-start=\"1973\" data-end=\"1997\">Cookies and Tracking</strong></h6>\r\n<p class=\"\" data-start=\"1998\" data-end=\"2041\">We use cookies and similar technologies to:</p>\r\n<ul data-start=\"2043\" data-end=\"2172\">\r\n<li class=\"\" data-start=\"2043\" data-end=\"2091\">\r\n<p class=\"\" data-start=\"2045\" data-end=\"2091\">Enhance site functionality and user experience</p>\r\n</li>\r\n<li class=\"\" data-start=\"2092\" data-end=\"2126\">\r\n<p class=\"\" data-start=\"2094\" data-end=\"2126\">Analyze traffic and usage trends</p>\r\n</li>\r\n<li class=\"\" data-start=\"2127\" data-end=\"2172\">\r\n<p class=\"\" data-start=\"2129\" data-end=\"2172\">Enable remarketing and targeted advertising</p>\r\n</li>\r\n</ul>\r\n<p class=\"\" data-start=\"2174\" data-end=\"2263\">You can disable cookies in your browser settings, but this may affect site functionality.</p>\r\n<hr class=\"\" data-start=\"2265\" data-end=\"2268\" />\r\n<h6 data-start=\"2270\" data-end=\"2309\">6. <strong data-start=\"2277\" data-end=\"2309\">Security of Your Information</strong></h6>\r\n<p class=\"\" data-start=\"2310\" data-end=\"2501\">We use secure servers, encryption, and regular security monitoring to protect your personal information from unauthorized access or disclosure. However, no system can guarantee 100% security.</p>\r\n<hr class=\"\" data-start=\"2503\" data-end=\"2506\" />\r\n<h6 data-start=\"2508\" data-end=\"2540\">7. <strong data-start=\"2515\" data-end=\"2540\">Access and Correction</strong></h6>\r\n<p class=\"\" data-start=\"2541\" data-end=\"2730\">You may access or update your personal information by logging into your account or contacting us. We will respond to access or correction requests in accordance with Australian privacy law.</p>\r\n<hr class=\"\" data-start=\"2732\" data-end=\"2735\" />\r\n<h6 data-start=\"2737\" data-end=\"2765\">8. <strong data-start=\"2744\" data-end=\"2765\">Third-Party Links</strong></h6>\r\n<p class=\"\" data-start=\"2766\" data-end=\"2889\">Our platform may contain links to external websites. We are not responsible for the privacy practices of third-party sites.</p>\r\n<hr class=\"\" data-start=\"2891\" data-end=\"2894\" />\r\n<h6 data-start=\"2896\" data-end=\"2925\">9. <strong data-start=\"2903\" data-end=\"2925\">Children&rsquo;s Privacy</strong></h6>\r\n<p class=\"\" data-start=\"2926\" data-end=\"3045\">Our platform is not intended for use by children under 16 years of age. We do not knowingly collect data from children.</p>\r\n<hr class=\"\" data-start=\"3047\" data-end=\"3050\" />\r\n<h6 data-start=\"3052\" data-end=\"3086\">10. <strong data-start=\"3060\" data-end=\"3086\">Changes to This Policy</strong></h6>\r\n<p class=\"\" data-start=\"3087\" data-end=\"3225\">We may update this Privacy Policy from time to time. The latest version will always be posted on this page with an updated effective date.</p>\r\n<hr class=\"\" data-start=\"3227\" data-end=\"3230\" />\r\n<h6 data-start=\"3232\" data-end=\"3254\">11. <strong data-start=\"3240\" data-end=\"3254\">Contact Us</strong></h6>\r\n<p class=\"\" data-start=\"3256\" data-end=\"3327\">If you have questions or complaints about this Privacy Policy, contact:</p>\r\n<p class=\"\" data-start=\"3329\" data-end=\"3460\"><strong data-start=\"3329\" data-end=\"3345\">Tradie Quote</strong><br data-start=\"3345\" data-end=\"3348\" />Email: [info<a rel=\"noopener\">@tradiequote.com.au</a>]<br data-start=\"3383\" data-end=\"3386\" /><br /></p>', NULL, '2025-05-02 18:00:20');

-- --------------------------------------------------------

--
-- Table structure for table `popups`
--

CREATE TABLE `popups` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) DEFAULT NULL,
  `detail` text DEFAULT NULL,
  `path` varchar(255) NOT NULL,
  `status` tinyint(1) NOT NULL DEFAULT 1,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `popups`
--

INSERT INTO `popups` (`id`, `name`, `detail`, `path`, `status`, `created_at`, `updated_at`) VALUES
(2, 'Razat Shresthas', 'asfasdfs', '6LdYZucDeV6WBXffsP61DRSNvSdacCJzUWryNgBX.jpg', 1, '2025-02-03 04:23:24', '2025-02-03 12:00:17');

-- --------------------------------------------------------

--
-- Table structure for table `queries`
--

CREATE TABLE `queries` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) DEFAULT NULL,
  `detail` text DEFAULT NULL,
  `status` tinyint(1) NOT NULL DEFAULT 1,
  `category` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `queries`
--

INSERT INTO `queries` (`id`, `name`, `detail`, `status`, `category`, `created_at`, `updated_at`) VALUES
(4, 'Who will perform puja?', '<p>Guru ji will perform puja on your behalf by chanting your gotra, birth name.</p>', 1, '1', '2025-02-17 22:03:46', '2025-05-26 10:36:40'),
(5, 'How can I be sure that the Puja of my choice will be genuinely conducted once I book it?', '<div>\r\n<div>Subject to the factors and conditions in our control, the Puja of your choice will be conducted as you have requested and we will be sharing puja video in your registered email id once the puja is completed.</div>\r\n</div>', 1, '1', '2025-02-17 22:24:47', '2025-05-26 10:36:06');

-- --------------------------------------------------------

--
-- Table structure for table `reviews`
--

CREATE TABLE `reviews` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) DEFAULT NULL,
  `detail` text DEFAULT NULL,
  `minititle` varchar(191) DEFAULT NULL,
  `status` varchar(255) NOT NULL,
  `path` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `reviews`
--

INSERT INTO `reviews` (`id`, `name`, `detail`, `minititle`, `status`, `path`, `created_at`, `updated_at`) VALUES
(5, 'Dipika Pariyar, Baniyatar', '<p>Booking through Shree Om Mandir was incredibly easy, with a smooth consultation process that provided clear and helpful guidance. Their astrology services first caught my attention on social media, leading to a Kundali analysis by the experienced Pandit Sudarshan Adhikari.</p>', 'Astrology Consultation', '1', 'hC8gFye5kVkpnHoUmHs8mXdKREkzosQ5xffqKwEq.png', '2025-05-23 00:37:26', '2025-06-16 11:12:29'),
(6, 'Ramesh Parajuli,USA', '<p>Booking through Shree Om Mandir was incredibly easy, with a smooth consultation process that provided clear and helpful guidance. Their astrology services first caught my attention on social media, leading to a Kundali analysis by the experienced Pandit Sudarshan Adhikari.</p>', 'Astrology Consultation', '1', 'wv1BvNmJuQi6DR4mthg1aV0r44oTJLnkJdNwugHW.png', '2025-05-23 00:38:11', '2025-06-16 11:12:21'),
(7, 'Surya Gupta,Nepal', '<p>Booking through Shree Om Mandir was incredibly easy, with a smooth consultation process that provided clear and helpful guidance. Their astrology services first caught my attention on social media, leading to a Kundali analysis by the experienced Pandit Sudarshan Adhikari.</p>', 'Astrology Consultation', '1', 'pCv974Fl4b9p5pjoqfOQ3WXyWmbGPtvpTHiSfnDq.png', '2025-05-23 00:39:02', '2025-06-16 11:12:13');

-- --------------------------------------------------------

--
-- Table structure for table `settings`
--

CREATE TABLE `settings` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) DEFAULT NULL,
  `detail` text DEFAULT NULL,
  `path` varchar(255) NOT NULL,
  `address` varchar(255) DEFAULT NULL,
  `phone` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `facebook` varchar(255) DEFAULT NULL,
  `instagram` varchar(255) DEFAULT NULL,
  `youtube` varchar(255) DEFAULT NULL,
  `meta_keyword` varchar(255) DEFAULT NULL,
  `meta_description` varchar(255) DEFAULT NULL,
  `website` varchar(255) DEFAULT NULL,
  `map` varchar(455) DEFAULT NULL,
  `hidden` longtext DEFAULT NULL,
  `title` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `duration` varchar(145) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `settings`
--

INSERT INTO `settings` (`id`, `name`, `detail`, `path`, `address`, `phone`, `email`, `facebook`, `instagram`, `youtube`, `meta_keyword`, `meta_description`, `website`, `map`, `hidden`, `title`, `created_at`, `updated_at`, `duration`) VALUES
(1, 'Zenis Ecommerce', '<p>Amet minim mollit non deserunt ullamco est sit aliqua dolor do amet sint. Velit officia consequat.</p>', 'JYFPWVex10JcqcUPbUFlEWoqzNmHLvRLljJg8KS6.png', 'Chabahil 07, Gopikrishna, KTM', '980-1910595', 'zenisecommerce@gmail.com', 'https://www.facebook.com/', 'https://www.instagram.com/', 'https://www.youtube.com/', 'Tradie , Local , Tradesman', 'Amet minim mollit non deserunt ullamco est sit aliqua dolor do amet sint. Velit officia consequat.', 'zenisecommerce.com', 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d243219.58996999083!2d85.25902639323442!3d27.672282001859934!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0xae0bb4611f5f8c8f%3A0xa0f786aca645375!2sBig%20Solutions!5e1!3m2!1sen!2snp!4v1736325827187!5m2!1sen!2snp', 'Zenis Ecommerce', 'Zenis Ecommerce', '2025-01-08 02:48:33', '2025-09-03 04:57:13', 'Sun-Fri: 07:00AM - 6:00PM');

-- --------------------------------------------------------

--
-- Table structure for table `sliders`
--

CREATE TABLE `sliders` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) DEFAULT NULL,
  `detail` text DEFAULT NULL,
  `currency` varchar(191) DEFAULT NULL,
  `amount` varchar(191) DEFAULT NULL,
  `path` varchar(255) NOT NULL,
  `status` tinyint(1) NOT NULL DEFAULT 1,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `hero` varchar(145) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `sliders`
--

INSERT INTO `sliders` (`id`, `name`, `detail`, `currency`, `amount`, `path`, `status`, `created_at`, `updated_at`, `hero`) VALUES
(16, 'Pro DJ Headphone', '<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Cum verit atis assum enda maiores eos ducimus ullam accusamus vitae beatae quas in.</p>', 'NPR', '9900', 'Km9JhgUXbjFB3QfTur08Ry8xjl5nL47FFdaysGZY.png', 1, '2025-09-03 05:08:12', '2025-09-03 05:51:58', 'Pro DJ Headphone With Stereo Mood'),
(17, 'Convertible car seats', '<p>Convertible car seats Better Stability and Strength to Absorb the shock</p>', 'NPR', '25000', 'er0oKOHk7UHLUyy77cVlnJqK0xhepHI9o96KYEdH.png', 1, '2025-09-03 05:13:14', '2025-09-03 05:51:51', 'Better Stability and Strength to Absorb the shock'),
(18, 'THE NEW STANDARD', '<div>\r\n<div>UNDER FAVORABLE SMARTWATCHES</div>\r\n</div>', 'NPR', '50,000', 'XP4QLDJNT4kqhpB7JNKfCoyseWOQNXIC2yYg3TNz.png', 1, '2025-09-03 05:15:08', '2025-09-03 05:52:06', 'UNDER FAVORABLE SMARTWATCHES');

-- --------------------------------------------------------

--
-- Table structure for table `squads`
--

CREATE TABLE `squads` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) DEFAULT NULL,
  `slug` varchar(191) DEFAULT NULL,
  `path` varchar(255) DEFAULT NULL,
  `detail` text DEFAULT NULL,
  `status` varchar(255) DEFAULT NULL,
  `designation` varchar(255) DEFAULT NULL,
  `experience` varchar(255) DEFAULT NULL,
  `availability` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `expertise` varchar(145) DEFAULT NULL,
  `services` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_bin DEFAULT NULL CHECK (json_valid(`services`))
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `squads`
--

INSERT INTO `squads` (`id`, `name`, `slug`, `path`, `detail`, `status`, `designation`, `experience`, `availability`, `created_at`, `updated_at`, `expertise`, `services`) VALUES
(6, 'Ondrej Matousek', 'ondrej', 'iIafbADnH3JPNiLeuu5ZZx4oC9j3dfgWXTv5zGsA.png', '<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries,</p>', '1', 'Pandit', '5', 'Everyday', '2025-05-23 00:08:26', '2025-06-13 08:57:39', 'Astrologer', NULL),
(7, 'Nikol Oveckova', 'sdgsd', 'inkWnHHdKoIXctSdT44FtxUBrAlTCaxic5ePCsZj.png', '<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries,</p>', '1', 'Astrology', '2', 'Everyday', '2025-05-23 00:08:54', '2025-06-24 06:42:21', 'Pandit', '\"[\\\"Puja for love & relationships\\\",\\\"Astrology Service\\\"]\"'),
(8, 'Shiritish Shakya', 'shristi', 'v7Ta3n3Na8CkJOTRmhSHwxaXTiYCe6jsKd3qO0QO.png', '<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries,</p>', '1', 'Pandit', '5', 'Everyday', '2025-05-23 00:08:26', '2025-06-24 06:47:52', 'Astrologer', '\"[\\\"Puja for love & relationships\\\",\\\"Astrology Service\\\"]\"'),
(9, 'harihar Adhikari', 'fsdf', 'PyJK9oC7rOkmUFa2Fu8kfmS0oamlQfse5FSoUQj6.png', '<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries,</p>', '1', 'pandit', '5', 'Everyday', '2025-05-23 00:08:54', '2025-06-24 04:22:25', 'Astrologer', '\"[\\\"Rashifal pooja for Anxiety\\\",\\\"Nakshatra of Mangal Special 10,000 Mangal MoolNakshatra of Mangal Special 10,000 Mangal MoolNakshatra of Mangal Special 10,000 Mangal Mool\\\",\\\"11,000 Chandrama Mool Mantra Jaap and Kavach Path Havan\\\",\\\"Puja for love & relationships\\\",\\\"Nakshatra of Mangal Special 10,000 Mangal Mool Mantra Jaap and Dashansh HavanNakshatra of Mangal Special 10,000 Mangal Mool Mantra Jaap and Dashansh Havan\\\",\\\"Astrology Service\\\",\\\"Astro Servivce New\\\"]\"');

-- --------------------------------------------------------

--
-- Table structure for table `stories`
--

CREATE TABLE `stories` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) DEFAULT NULL,
  `detail` text DEFAULT NULL,
  `whyus` varchar(191) NOT NULL,
  `path` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `stories`
--

INSERT INTO `stories` (`id`, `name`, `detail`, `whyus`, `path`, `created_at`, `updated_at`) VALUES
(1, 'About Us', '<p>Shree Om Mandir is a virtual platform that fulfills all the religious needs of devotees to make their devotional journey smooth. The team of experienced priests came together to make spiritual service available worldwide.</p>\r\n<p>Shree Om Mandir offers a wide range of services to meet all your spiritual needs. From booking pujas at temples in Nepal to making offerings at temples around the world, we make it easy for you.</p>', '', 'amJrNmmLbqv7Lt96flqHaSdKbeCUsf5Diqq38hhV.png', NULL, '2025-05-23 02:42:26');

-- --------------------------------------------------------

--
-- Table structure for table `studios`
--

CREATE TABLE `studios` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) DEFAULT NULL,
  `slug` varchar(255) DEFAULT NULL,
  `path` varchar(255) NOT NULL,
  `image` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `studios`
--

INSERT INTO `studios` (`id`, `name`, `slug`, `path`, `image`, `created_at`, `updated_at`) VALUES
(2, 'Tester', 'test', 'W45AoNqbToUSiRBtSu141g2dt1zUxDHzdr2y1VeG.png', '[\"cAshG0PqgXaI0ItfKqJYyYWFlEjhi4zVz3sXs7g3.jpg\",\"qOmvLU8P1bZRIheh8oLIanHo29BVDjmbwD6rD0BY.jpg\",\"emskxgjS8D9pXodT7vknHFlTCNT3HdT5hnA3EZUH.jpg\",\"dxf3m4bugGqePAHtN3pgc3rtLUJwOPuoZYOLPV4q.jpg\"]', '2025-01-17 05:08:55', '2025-05-16 04:30:56');

-- --------------------------------------------------------

--
-- Table structure for table `subscribes`
--

CREATE TABLE `subscribes` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `email` varchar(255) DEFAULT NULL,
  `status` tinyint(1) NOT NULL DEFAULT 1,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `subscribes`
--

INSERT INTO `subscribes` (`id`, `email`, `status`, `created_at`, `updated_at`) VALUES
(16, 'saritabaidhyas@gmail.com', 1, '2025-05-26 02:52:27', '2025-05-26 02:52:27'),
(18, 'saritabaidhyas@gmail.com', 1, '2025-06-04 06:29:47', '2025-06-04 06:29:47'),
(19, 'saritabaidhyas@gmail.com', 1, '2025-06-04 06:30:56', '2025-06-04 06:30:56'),
(20, 'saritabaidhyas@gmail.com', 1, '2025-06-04 06:32:20', '2025-06-04 06:32:20');

-- --------------------------------------------------------

--
-- Table structure for table `triumphs`
--

CREATE TABLE `triumphs` (
  `id` int(11) NOT NULL,
  `name` varchar(145) DEFAULT NULL,
  `designation` varchar(145) DEFAULT NULL,
  `company` varchar(145) DEFAULT NULL,
  `institute` varchar(145) DEFAULT NULL,
  `path` varchar(145) DEFAULT NULL,
  `image` varchar(191) DEFAULT NULL,
  `slug` varchar(145) DEFAULT NULL,
  `created_at` timestamp(6) NULL DEFAULT NULL,
  `updated_at` timestamp(6) NULL DEFAULT NULL,
  `status` varchar(45) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `triumphs`
--

INSERT INTO `triumphs` (`id`, `name`, `designation`, `company`, `institute`, `path`, `image`, `slug`, `created_at`, `updated_at`, `status`) VALUES
(1, 'Nick Mitrovics', 'Tech. Lead', 'Ultra Elite Paints', 'Darwin College of IT', 'QqSPnPUvXmra9Jbk9AGLiyhXeOrhqu6sgYnyGJB3.png', '[\"IMmdmGP2zR8yt5hx5imh4yrWhZnwlTQAzanhsvkW.jpg\",\"YlWaQa3MEdgAHcMj54oj9G5qdzoA2vfYGqCbqAXk.jpg\",\"U0XifN7xMyIqNX41cuw7dNiexiYXw3UpKuYtem5Z.jpg\"]', 'nick-mitrovics', '2025-05-21 03:42:44.000000', '2025-05-30 03:58:05.000000', '1');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) NOT NULL,
  `remember_token` varchar(100) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(3, 'Tester Test', 'tester@gmail.com', NULL, '$2y$12$h5DRatmNH5.yg5IF647WVOyapYORc/2BKVBPNmlEXgwhFRoHgs0dK', NULL, '2025-01-06 03:24:23', '2025-05-01 20:39:22'),
(7, 'Tony Tosevski', 'admin@tradiequote.com.au', NULL, '$2y$12$ckK16gRQdmFUalXXeWHuOuNwswKzEZSwWZXJKcV6FXYvFtyD07ly.', NULL, '2025-02-17 18:16:29', '2025-02-17 18:16:29'),
(8, 'Ultra Elite Painted', 'nickmitrovic6@gmail.com', NULL, '$2y$12$e5W2SsSCTj5za89eBnS1peNNof434DhdKDmNGMW43dxohj.0l8eFS', NULL, '2025-04-10 23:44:32', '2025-04-28 05:46:08'),
(9, 'Apex Admin', 'apexskillsacademy@gmail.com', NULL, '$2y$12$ngaDAD1GPVyeAFz1qaR7IOEETCKTX/m2DARocwARHkt1d7xfdRupO', NULL, '2025-05-16 04:07:18', '2025-05-16 04:07:18');

-- --------------------------------------------------------

--
-- Table structure for table `utilities`
--

CREATE TABLE `utilities` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) DEFAULT NULL,
  `detail` text DEFAULT NULL,
  `hero` varchar(355) DEFAULT NULL,
  `path` varchar(255) NOT NULL,
  `status` tinyint(1) NOT NULL DEFAULT 1,
  `category` varchar(191) DEFAULT NULL,
  `subcategory` varchar(191) DEFAULT NULL,
  `meta_keyword` varchar(255) DEFAULT NULL,
  `meta_description` varchar(255) DEFAULT NULL,
  `image` varchar(255) DEFAULT NULL,
  `slug` varchar(255) DEFAULT NULL,
  `order` int(11) DEFAULT NULL,
  `featured` varchar(55) DEFAULT '0',
  `onsale` varchar(191) DEFAULT NULL,
  `title` varchar(225) DEFAULT NULL,
  `offprice` varchar(55) DEFAULT '19',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `price` varchar(45) DEFAULT NULL,
  `benefit` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_bin DEFAULT NULL CHECK (json_valid(`benefit`)),
  `variant` varchar(191) DEFAULT NULL,
  `purpose` longtext DEFAULT NULL,
  `icon` varchar(191) DEFAULT NULL,
  `unitprice` varchar(191) DEFAULT NULL,
  `offerings` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_bin DEFAULT NULL CHECK (json_valid(`offerings`)),
  `photo` varchar(191) DEFAULT NULL,
  `validity` varchar(191) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `utilities`
--

INSERT INTO `utilities` (`id`, `name`, `detail`, `hero`, `path`, `status`, `category`, `subcategory`, `meta_keyword`, `meta_description`, `image`, `slug`, `order`, `featured`, `onsale`, `title`, `offprice`, `created_at`, `updated_at`, `price`, `benefit`, `variant`, `purpose`, `icon`, `unitprice`, `offerings`, `photo`, `validity`) VALUES
(1, 'Game Console Controller + USB 3.0 Cable', '<p>Perfectly Done<br />Praesent ornare, ex a interdum consectetur, lectus diam sodales elit, vitae egestas est enim ornare nisl. Nullam in lectus nec sem semper viverra. In lobortis egestas massa. Nam nec massa nisi. Suspendisse potenti. Quisque suscipit vulputate dui quis volutpat. Ut id elit facilisis, feugiat est in, tempus lacus. Ut ultrices dictum metus, a ultricies ex vulputate ac. Ut id cursus tellus, non tempor quam. Morbi porta diam nisi, id finibus nunc tincidunt eu.</p>\r\n<p>Wireless<br />Fusce vitae nibh mi. Integer posuere, libero et ullamcorper facilisis, enim eros tincidunt orci, eget vestibulum sapien nisi ut leo. Cras finibus vel est ut mollis. Donec luctus condimentum ante et euismod.</p>\r\n<p>Fresh Design<br />Integer bibendum aliquet ipsum, in ultrices enim sodales sed. Quisque ut urna vitae lacus laoreet malesuada eu at massa. Pellentesque nibh augue, pellentesque nec dictum vel, pretium a arcu. Duis eu urna suscipit, lobortis elit quis, ullamcorper massa.</p>\r\n<p>Fabolous Sound<br />Cras rutrum, nibh a sodales accumsan, elit sapien ultrices sapien, eget semper lectus ex congue elit. Nullam dui elit, fermentum a varius at, iaculis non dolor. In hac habitasse platea dictumst.</p>', '4.5 inch HD Touch Screen (1280 x 720)\r\nAndroid 4.4 KitKat OS\r\n1.4 GHz Quad Core™ Processor\r\n20 MP Electro and 28 megapixel CMOS rear camera', 'qp2obDJyrXaXguCXuto6ZtAB6vt9vvaVflRqwUNh.png', 1, '63', '16', NULL, NULL, '[\"gsJxXZRifMkrypaxtYmMY8GaTeyoRmpvxfGG8jl8.jpg\",\"0fat3wn1Z8e9CkizDQkrGDLrA957F581bvPMBj3r.jpg\",\"hPMBDvxssiWaBs4hnXEDfKLlQbYGShNT75EFLyrf.jpg\"]', 'ultra-wireless-s50-headphones-s50-with-bluetooth', NULL, 'Special', '1', NULL, '5200', '2025-09-04 04:05:48', '2025-09-24 05:22:43', '5500', '[{\"title\":\"Weight\",\"detail\":\"7.25Kg\"}]', '[{\"size\":null,\"color\":null,\"stock\":\"20\",\"price\":null},{\"size\":null,\"color\":null,\"stock\":\"30\",\"price\":null}]', NULL, NULL, NULL, '\"[]\"', '[\"WOWtQv3LpI5eiAwdLqkojQxFgbymPnT1Ng6WUeGR.jpg\",\"0fuBCt5tJ7IcDUsy0wLATAK6hOOgzmlDfkeVIIOv.jpg\",\"w5PKDp9xsR4UzS9vH7mt3zcsivckMCVBs8e34R49.jpg\"]', '2025-09-29'),
(2, 'Tablet White EliteBook Revolve 810 G2', '<h3 class=\"font-size-24 mb-3\">Perfectly Done</h3>\r\n<p>Praesent ornare, ex a interdum consectetur, lectus diam sodales elit, vitae egestas est enim ornare nisl. Nullam in lectus nec sem semper viverra. In lobortis egestas massa. Nam nec massa nisi. Suspendisse potenti. Quisque suscipit vulputate dui quis volutpat. Ut id elit facilisis, feugiat est in, tempus lacus. Ut ultrices dictum metus, a ultricies ex vulputate ac. Ut id cursus tellus, non tempor quam. Morbi porta diam nisi, id finibus nunc tincidunt eu.</p>\r\n<div class=\"row\">\r\n<div class=\"col-md-6\">\r\n<div class=\"pt-lg-8 pt-xl-10\">\r\n<h3 class=\"font-size-24 mb-3\">Wireless</h3>\r\n<p class=\"mb-6\">Fusce vitae nibh mi. Integer posuere, libero et ullamcorper facilisis, enim eros tincidunt orci, eget vestibulum sapien nisi ut leo. Cras finibus vel est ut mollis. Donec luctus condimentum ante et euismod.</p>\r\n<h3 class=\"font-size-24 mb-3\">Fresh Design</h3>\r\n<p class=\"mb-6\">Integer bibendum aliquet ipsum, in ultrices enim sodales sed. Quisque ut urna vitae lacus laoreet malesuada eu at massa. Pellentesque nibh augue, pellentesque nec dictum vel, pretium a arcu. Duis eu urna suscipit, lobortis elit quis, ullamcorper massa.</p>\r\n<h3 class=\"font-size-24 mb-3\">Fabolous Sound</h3>\r\n<p class=\"mb-6\">Cras rutrum, nibh a sodales accumsan, elit sapien ultrices sapien, eget semper lectus ex congue elit. Nullam dui elit, fermentum a varius at, iaculis non dolor. In hac habitasse platea dictumst.</p>\r\n</div>\r\n</div>\r\n</div>', 'Fusce vitae nibh mi. Integer posuere, libero et ullamcorper facilisis, enim eros tincidunt orci, eget vestibulum sapien nisi ut leo. Cras finibus vel est ut mollis. Donec luctus condimentum ante et euismod.', '5cE4Y7Mf0ptNKuALz12knLQ2OpmtMLb1VN3ul4GF.jpg', 1, '62', '14', NULL, NULL, '[\"NUKGYPmkdwW4SzTTiK8w8rjEUHuj9prRvTAvNfON.jpg\",\"TqDJobA1esmsqzH2Inj7ds58Me4FGv7EX3LvCtFD.jpg\",\"uM9qScnwoxqYGGRtVcPer58yYCn3JFfvpSIrplxw.jpg\"]', 'tablet-white-elitebook-revolve-810-g2', NULL, '1', '1', NULL, '1400', '2025-09-04 04:37:36', '2025-09-04 04:40:44', '1600', '[{\"title\":\"Weight\",\"detail\":\"7.25Kg\"}]', NULL, NULL, NULL, '[{\"title\":\"Group Pooja\",\"price\":null},{\"title\":\"Group Pooja\",\"price\":null}]', '\"[]\"', NULL, NULL),
(3, 'Smartphone 6S 32GB LTE', '<h3 class=\"font-size-24 mb-3\">Perfectly Done</h3>\r\n<p>Praesent ornare, ex a interdum consectetur, lectus diam sodales elit, vitae egestas est enim ornare nisl. Nullam in lectus nec sem semper viverra. In lobortis egestas massa. Nam nec massa nisi. Suspendisse potenti. Quisque suscipit vulputate dui quis volutpat. Ut id elit facilisis, feugiat est in, tempus lacus. Ut ultrices dictum metus, a ultricies ex vulputate ac. Ut id cursus tellus, non tempor quam. Morbi porta diam nisi, id finibus nunc tincidunt eu.</p>\r\n<div class=\"row\">\r\n<div class=\"col-md-6\">\r\n<div class=\"pt-lg-8 pt-xl-10\">\r\n<h3 class=\"font-size-24 mb-3\">Wireless</h3>\r\n<p class=\"mb-6\">Fusce vitae nibh mi. Integer posuere, libero et ullamcorper facilisis, enim eros tincidunt orci, eget vestibulum sapien nisi ut leo. Cras finibus vel est ut mollis. Donec luctus condimentum ante et euismod.</p>\r\n<h3 class=\"font-size-24 mb-3\">Fresh Design</h3>\r\n<p class=\"mb-6\">Integer bibendum aliquet ipsum, in ultrices enim sodales sed. Quisque ut urna vitae lacus laoreet malesuada eu at massa. Pellentesque nibh augue, pellentesque nec dictum vel, pretium a arcu. Duis eu urna suscipit, lobortis elit quis, ullamcorper massa.</p>\r\n<h3 class=\"font-size-24 mb-3\">Fabolous Sound</h3>\r\n<p class=\"mb-6\">Cras rutrum, nibh a sodales accumsan, elit sapien ultrices sapien, eget semper lectus ex congue elit. Nullam dui elit, fermentum a varius at, iaculis non dolor. In hac habitasse platea dictumst.</p>\r\n</div>\r\n</div>\r\n</div>', 'Fusce vitae nibh mi. Integer posuere, libero et ullamcorper facilisis, enim eros tincidunt orci, eget vestibulum sapien nisi ut leo. Cras finibus vel est ut mollis. Donec luctus condimentum ante et euismod.', 'ErHV1zCZj0V7qAkcRyWT0MRkqg9ISVw5nE0v0EuF.png', 1, '62', '16', NULL, NULL, '[\"gbqbbo4MSHJ7ksuowUY9B9oR4PrBpoxsZosczZKG.png\",\"6WzLyZooh2k78vDRDJoUH1z800R9Gjm9jseqns8S.png\",\"4Yq1KsVvEr9nxAFWDovxsowEUzy3Oo3GX1bKhMwl.png\",\"8EseTX8zcsSv8XkIeP6zpxskZuU7k1ZkdDyDtOPW.png\"]', 'smartphone-6s-32gb-lte', NULL, '1', '0', NULL, '1800', '2025-09-04 04:39:09', '2025-09-16 11:50:43', '1950', '[{\"title\":\"Weight\",\"detail\":\"7.25Kg\"}]', '[{\"size\":\"SM\",\"color\":\"red\",\"stock\":null,\"price\":\"120\"}]', NULL, NULL, '[{\"title\":\"Group Pooja\",\"price\":null},{\"title\":\"Group Pooja\",\"price\":null}]', '\"[]\"', NULL, NULL),
(4, 'Game Console Controller + USB 3.0 Cable', '<p>Perfectly Done<br />Praesent ornare, ex a interdum consectetur, lectus diam sodales elit, vitae egestas est enim ornare nisl. Nullam in lectus nec sem semper viverra. In lobortis egestas massa. Nam nec massa nisi. Suspendisse potenti. Quisque suscipit vulputate dui quis volutpat. Ut id elit facilisis, feugiat est in, tempus lacus. Ut ultrices dictum metus, a ultricies ex vulputate ac. Ut id cursus tellus, non tempor quam. Morbi porta diam nisi, id finibus nunc tincidunt eu.</p>\r\n<p>Wireless<br />Fusce vitae nibh mi. Integer posuere, libero et ullamcorper facilisis, enim eros tincidunt orci, eget vestibulum sapien nisi ut leo. Cras finibus vel est ut mollis. Donec luctus condimentum ante et euismod.</p>\r\n<p>Fresh Design<br />Integer bibendum aliquet ipsum, in ultrices enim sodales sed. Quisque ut urna vitae lacus laoreet malesuada eu at massa. Pellentesque nibh augue, pellentesque nec dictum vel, pretium a arcu. Duis eu urna suscipit, lobortis elit quis, ullamcorper massa.</p>\r\n<p>Fabolous Sound<br />Cras rutrum, nibh a sodales accumsan, elit sapien ultrices sapien, eget semper lectus ex congue elit. Nullam dui elit, fermentum a varius at, iaculis non dolor. In hac habitasse platea dictumst.</p>', '4.5 inch HD Touch Screen (1280 x 720)\r\nAndroid 4.4 KitKat OS\r\n1.4 GHz Quad Core™ Processor\r\n20 MP Electro and 28 megapixel CMOS rear camera', 'PnQwJUb9ly22Y6w7uRmbEZWpjbG42URfthuqbBR9.png', 1, '62', '14', NULL, NULL, '[\"gsJxXZRifMkrypaxtYmMY8GaTeyoRmpvxfGG8jl8.jpg\",\"0fat3wn1Z8e9CkizDQkrGDLrA957F581bvPMBj3r.jpg\",\"hPMBDvxssiWaBs4hnXEDfKLlQbYGShNT75EFLyrf.jpg\"]', 'ultra-wireless-s50-headphones-s50-with-bluetooth', NULL, '1', '1', NULL, '5200', '2025-09-04 04:05:48', '2025-09-19 05:35:49', '5500', '[{\"title\":\"Weight\",\"detail\":\"7.25Kg\"}]', '[{\"size\":null,\"color\":null,\"stock\":null,\"price\":null}]', NULL, NULL, '[{\"title\":\"Group Pooja\",\"price\":null},{\"title\":\"Group Pooja\",\"price\":null}]', '\"[]\"', '[\"WOWtQv3LpI5eiAwdLqkojQxFgbymPnT1Ng6WUeGR.jpg\",\"0fuBCt5tJ7IcDUsy0wLATAK6hOOgzmlDfkeVIIOv.jpg\",\"w5PKDp9xsR4UzS9vH7mt3zcsivckMCVBs8e34R49.jpg\"]', NULL),
(5, 'Smartphone 6S 32GB LTE', '<h3 class=\"font-size-24 mb-3\">Perfectly Done</h3>\r\n<p>Praesent ornare, ex a interdum consectetur, lectus diam sodales elit, vitae egestas est enim ornare nisl. Nullam in lectus nec sem semper viverra. In lobortis egestas massa. Nam nec massa nisi. Suspendisse potenti. Quisque suscipit vulputate dui quis volutpat. Ut id elit facilisis, feugiat est in, tempus lacus. Ut ultrices dictum metus, a ultricies ex vulputate ac. Ut id cursus tellus, non tempor quam. Morbi porta diam nisi, id finibus nunc tincidunt eu.</p>\r\n<div class=\"row\">\r\n<div class=\"col-md-6\">\r\n<div class=\"pt-lg-8 pt-xl-10\">\r\n<h3 class=\"font-size-24 mb-3\">Wireless</h3>\r\n<p class=\"mb-6\">Fusce vitae nibh mi. Integer posuere, libero et ullamcorper facilisis, enim eros tincidunt orci, eget vestibulum sapien nisi ut leo. Cras finibus vel est ut mollis. Donec luctus condimentum ante et euismod.</p>\r\n<h3 class=\"font-size-24 mb-3\">Fresh Design</h3>\r\n<p class=\"mb-6\">Integer bibendum aliquet ipsum, in ultrices enim sodales sed. Quisque ut urna vitae lacus laoreet malesuada eu at massa. Pellentesque nibh augue, pellentesque nec dictum vel, pretium a arcu. Duis eu urna suscipit, lobortis elit quis, ullamcorper massa.</p>\r\n<h3 class=\"font-size-24 mb-3\">Fabolous Sound</h3>\r\n<p class=\"mb-6\">Cras rutrum, nibh a sodales accumsan, elit sapien ultrices sapien, eget semper lectus ex congue elit. Nullam dui elit, fermentum a varius at, iaculis non dolor. In hac habitasse platea dictumst.</p>\r\n</div>\r\n</div>\r\n</div>', 'Fusce vitae nibh mi. Integer posuere, libero et ullamcorper facilisis, enim eros tincidunt orci, eget vestibulum sapien nisi ut leo. Cras finibus vel est ut mollis. Donec luctus condimentum ante et euismod.', 'ErHV1zCZj0V7qAkcRyWT0MRkqg9ISVw5nE0v0EuF.png', 1, '57', '5', NULL, NULL, '[\"gbqbbo4MSHJ7ksuowUY9B9oR4PrBpoxsZosczZKG.png\",\"6WzLyZooh2k78vDRDJoUH1z800R9Gjm9jseqns8S.png\",\"4Yq1KsVvEr9nxAFWDovxsowEUzy3Oo3GX1bKhMwl.png\",\"8EseTX8zcsSv8XkIeP6zpxskZuU7k1ZkdDyDtOPW.png\"]', 'smartphone-6s-32gb-lte', NULL, '1', '0', NULL, '1800', '2025-09-04 04:39:09', '2025-09-18 05:05:43', '1950', '[{\"title\":\"Weight\",\"detail\":\"7.25Kg\"}]', '[{\"size\":\"SM\",\"color\":\"red\",\"stock\":null,\"price\":\"120\"}]', NULL, NULL, '[{\"title\":\"Group Pooja\",\"price\":null},{\"title\":\"Group Pooja\",\"price\":null}]', '\"[]\"', NULL, NULL),
(6, 'Widescreen NX Mini F1 SMART NX', '<h3 class=\"font-size-24 mb-3\">Perfectly Done</h3>\r\n<p>Praesent ornare, ex a interdum consectetur, lectus diam sodales elit, vitae egestas est enim ornare nisl. Nullam in lectus nec sem semper viverra. In lobortis egestas massa. Nam nec massa nisi. Suspendisse potenti. Quisque suscipit vulputate dui quis volutpat. Ut id elit facilisis, feugiat est in, tempus lacus. Ut ultrices dictum metus, a ultricies ex vulputate ac. Ut id cursus tellus, non tempor quam. Morbi porta diam nisi, id finibus nunc tincidunt eu.</p>\r\n<div class=\"row\">\r\n<div class=\"col-md-6\">\r\n<div class=\"pt-lg-8 pt-xl-10\">\r\n<h3 class=\"font-size-24 mb-3\">Wireless</h3>\r\n<p class=\"mb-6\">Fusce vitae nibh mi. Integer posuere, libero et ullamcorper facilisis, enim eros tincidunt orci, eget vestibulum sapien nisi ut leo. Cras finibus vel est ut mollis. Donec luctus condimentum ante et euismod.</p>\r\n<h3 class=\"font-size-24 mb-3\">Fresh Design</h3>\r\n<p class=\"mb-6\">Integer bibendum aliquet ipsum, in ultrices enim sodales sed. Quisque ut urna vitae lacus laoreet malesuada eu at massa. Pellentesque nibh augue, pellentesque nec dictum vel, pretium a arcu. Duis eu urna suscipit, lobortis elit quis, ullamcorper massa.</p>\r\n<h3 class=\"font-size-24 mb-3\">Fabolous Sound</h3>\r\n<p class=\"mb-6\">Cras rutrum, nibh a sodales accumsan, elit sapien ultrices sapien, eget semper lectus ex congue elit. Nullam dui elit, fermentum a varius at, iaculis non dolor. In hac habitasse platea dictumst.</p>\r\n</div>\r\n</div>\r\n</div>', 'Fusce vitae nibh mi. Integer posuere, libero et ullamcorper facilisis, enim eros tincidunt orci, eget vestibulum sapien nisi ut leo. Cras finibus vel est ut mollis. Donec luctus condimentum ante et euismod.', 'Wk99l2OU7jZ51cJ5Yh2OFFDuvfkCCb7B7SItm5qO.png', 1, '57', '6', NULL, NULL, '[\"aAjfozAR5klRzfhyEXQnDqTN4CrfJ4RkyJFJNpS9.png\",\"sWtGctuDPBOwuyx8qr1sdkNx4OMgfL2DlDLdvq45.png\",\"EQ6kgX7lTqAl6tJq1nOIKEFy98PkLyMewnWHVCDx.png\"]', 'widescreen-nx-mini-f1-smart-nx', NULL, '1', '0', NULL, '3899', '2025-09-04 04:38:15', '2025-09-16 11:48:45', '4550', '[{\"title\":\"Weight\",\"detail\":\"7.25Kg\"}]', '[{\"size\":null,\"color\":null,\"stock\":null,\"price\":null}]', NULL, NULL, '[{\"title\":\"Group Pooja\",\"price\":null},{\"title\":\"Group Pooja\",\"price\":null}]', '\"[]\"', NULL, NULL),
(7, 'Purple Solo 2 Wireless', '<h3 class=\"font-size-24 mb-3\">Perfectly Done</h3>\r\n<p>Praesent ornare, ex a interdum consectetur, lectus diam sodales elit, vitae egestas est enim ornare nisl. Nullam in lectus nec sem semper viverra. In lobortis egestas massa. Nam nec massa nisi. Suspendisse potenti. Quisque suscipit vulputate dui quis volutpat. Ut id elit facilisis, feugiat est in, tempus lacus. Ut ultrices dictum metus, a ultricies ex vulputate ac. Ut id cursus tellus, non tempor quam. Morbi porta diam nisi, id finibus nunc tincidunt eu.</p>\r\n<div class=\"row\">\r\n<div class=\"col-md-6\">\r\n<div class=\"pt-lg-8 pt-xl-10\">\r\n<h3 class=\"font-size-24 mb-3\">Wireless</h3>\r\n<p class=\"mb-6\">Fusce vitae nibh mi. Integer posuere, libero et ullamcorper facilisis, enim eros tincidunt orci, eget vestibulum sapien nisi ut leo. Cras finibus vel est ut mollis. Donec luctus condimentum ante et euismod.</p>\r\n<h3 class=\"font-size-24 mb-3\">Fresh Design</h3>\r\n<p class=\"mb-6\">Integer bibendum aliquet ipsum, in ultrices enim sodales sed. Quisque ut urna vitae lacus laoreet malesuada eu at massa. Pellentesque nibh augue, pellentesque nec dictum vel, pretium a arcu. Duis eu urna suscipit, lobortis elit quis, ullamcorper massa.</p>\r\n<h3 class=\"font-size-24 mb-3\">Fabolous Sound</h3>\r\n<p class=\"mb-6\">Cras rutrum, nibh a sodales accumsan, elit sapien ultrices sapien, eget semper lectus ex congue elit. Nullam dui elit, fermentum a varius at, iaculis non dolor. In hac habitasse platea dictumst.</p>\r\n</div>\r\n</div>\r\n</div>', 'Fusce vitae nibh mi. Integer posuere, libero et ullamcorper facilisis, enim eros tincidunt orci, eget vestibulum sapien nisi ut leo. Cras finibus vel est ut mollis. Donec luctus condimentum ante et euismod.', '14zpKax0gxiCPBVlK5cbi5UQygcxOVfoqtSopwsS.png', 1, '57', '6', NULL, NULL, '[\"lrws0gn1TN0rGpWLdgpCy3ZIHlqqwHFhCf86x26M.jpg\",\"eQzWFUAy0iau2LyndYciMUclyDruAY8BkILBIfS1.jpg\",\"2Za7oY3mVYmBMzrBjbvt8Bcs2x17Zo6ahJYCjIpz.jpg\"]', 'purple-solo-2-wireless', NULL, 'Special', '1', NULL, '1990', '2025-09-04 04:39:44', '2025-09-24 05:21:43', '2299', '[{\"title\":\"Weight\",\"detail\":\"7.25Kg\"}]', '[{\"size\":null,\"color\":null,\"stock\":\"11\",\"price\":null},{\"size\":null,\"color\":null,\"stock\":\"20\",\"price\":null}]', NULL, NULL, NULL, '\"[]\"', NULL, '2025-09-27');

-- --------------------------------------------------------

--
-- Table structure for table `utilitysub_types`
--

CREATE TABLE `utilitysub_types` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) DEFAULT NULL,
  `detail` text DEFAULT NULL,
  `category` varchar(191) NOT NULL,
  `path` varchar(255) DEFAULT NULL,
  `address` varchar(55) DEFAULT NULL,
  `status` tinyint(1) NOT NULL DEFAULT 1,
  `meta_keyword` varchar(255) DEFAULT NULL,
  `meta_description` varchar(255) DEFAULT NULL,
  `image` varchar(255) DEFAULT NULL,
  `slug` varchar(255) NOT NULL,
  `hidden` longtext DEFAULT NULL,
  `title` varchar(225) DEFAULT NULL,
  `hero` varchar(255) DEFAULT NULL,
  `order` int(11) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `utilitysub_types`
--

INSERT INTO `utilitysub_types` (`id`, `name`, `detail`, `category`, `path`, `address`, `status`, `meta_keyword`, `meta_description`, `image`, `slug`, `hidden`, `title`, `hero`, `order`, `created_at`, `updated_at`) VALUES
(5, 'Lighting', NULL, '57', NULL, NULL, 1, NULL, NULL, NULL, 'lighting-', NULL, NULL, NULL, NULL, '2025-09-03 11:20:44', '2025-09-03 11:20:44'),
(6, 'Kitchen', NULL, '57', NULL, NULL, 1, NULL, NULL, NULL, 'kitchen-', NULL, NULL, NULL, NULL, '2025-09-03 11:21:07', '2025-09-03 11:21:07'),
(7, 'Decors', NULL, '57', NULL, NULL, 1, NULL, NULL, NULL, 'decors-', NULL, NULL, NULL, NULL, '2025-09-03 11:21:11', '2025-09-03 11:21:11'),
(8, 'Stationery', NULL, '57', NULL, NULL, 1, NULL, NULL, NULL, 'stationery-', NULL, NULL, NULL, NULL, '2025-09-03 11:21:34', '2025-09-03 11:21:34'),
(9, 'Musical Instruments', NULL, '57', NULL, NULL, 1, NULL, NULL, NULL, 'musical-instruments-', NULL, NULL, NULL, NULL, '2025-09-03 11:21:40', '2025-09-03 11:21:40'),
(10, 'Water Bottles', NULL, '58', NULL, NULL, 1, NULL, NULL, NULL, 'water-bottles-', NULL, NULL, NULL, NULL, '2025-09-03 11:23:08', '2025-09-03 11:23:08'),
(11, 'Travel & Luggage', NULL, '58', NULL, NULL, 1, NULL, NULL, NULL, 'travel-luggage-', NULL, NULL, NULL, NULL, '2025-09-03 11:23:28', '2025-09-03 11:23:28'),
(12, 'Sports Nutritions', NULL, '58', NULL, NULL, 1, NULL, NULL, NULL, 'sports-nutritions-', NULL, NULL, NULL, NULL, '2025-09-03 11:23:54', '2025-09-03 11:23:54'),
(13, 'Cameras', NULL, '62', NULL, NULL, 1, NULL, NULL, NULL, 'cameras-', NULL, NULL, NULL, NULL, '2025-09-03 11:24:18', '2025-09-03 11:24:18'),
(14, 'Gaming Consoles', NULL, '62', NULL, NULL, 1, NULL, NULL, NULL, 'gaming-consoles-', NULL, NULL, NULL, NULL, '2025-09-03 11:24:42', '2025-09-03 11:24:42'),
(15, 'Monitors', NULL, '62', NULL, NULL, 1, NULL, NULL, NULL, 'monitors-', NULL, NULL, NULL, NULL, '2025-09-03 11:24:53', '2025-09-03 11:24:53'),
(16, 'Smart Phones', NULL, '62', NULL, NULL, 1, NULL, NULL, NULL, 'smart-phones-', NULL, NULL, NULL, NULL, '2025-09-03 11:25:03', '2025-09-03 11:25:03'),
(17, 'Tablets', NULL, '62', NULL, NULL, 1, NULL, NULL, NULL, 'tablets-', NULL, NULL, NULL, NULL, '2025-09-03 11:25:14', '2025-09-03 11:25:14'),
(18, 'Laptops', NULL, '62', NULL, NULL, 1, NULL, NULL, NULL, 'laptops-', NULL, NULL, NULL, NULL, '2025-09-03 11:25:25', '2025-09-03 11:25:25'),
(19, 'Mens Bag', NULL, '63', NULL, NULL, 1, NULL, NULL, NULL, 'mens-bag-', NULL, NULL, NULL, NULL, '2025-09-03 11:25:46', '2025-09-03 11:25:46'),
(20, 'Clothing', NULL, '63', NULL, NULL, 1, NULL, NULL, NULL, 'clothing-', NULL, NULL, NULL, NULL, '2025-09-03 11:26:40', '2025-09-03 11:26:40'),
(21, 'Mens Shoes', NULL, '63', NULL, NULL, 1, NULL, NULL, NULL, 'mens-shoes-', NULL, NULL, NULL, NULL, '2025-09-03 11:27:12', '2025-09-03 11:27:12'),
(22, 'Makeup', NULL, '66', NULL, NULL, 1, NULL, NULL, NULL, 'makeup-', NULL, NULL, NULL, NULL, '2025-09-03 11:37:40', '2025-09-03 11:37:40'),
(23, 'Hair Care', NULL, '66', NULL, NULL, 1, NULL, NULL, NULL, 'hair-care-', NULL, NULL, NULL, NULL, '2025-09-03 11:37:59', '2025-09-03 11:37:59'),
(24, 'Fragnances', NULL, '66', NULL, NULL, 1, NULL, NULL, NULL, 'fragnances-', NULL, NULL, NULL, NULL, '2025-09-03 11:38:40', '2025-09-03 11:38:40'),
(25, 'Beauty Tools', NULL, '66', NULL, NULL, 1, NULL, NULL, NULL, 'beauty-tools-', NULL, NULL, NULL, NULL, '2025-09-03 11:38:50', '2025-09-03 11:38:50'),
(26, 'Personal care', NULL, '66', NULL, NULL, 1, NULL, NULL, NULL, 'personal-care-', NULL, NULL, NULL, NULL, '2025-09-03 11:39:42', '2025-09-03 11:39:42'),
(27, 'Toys & Games', NULL, '67', NULL, NULL, 1, NULL, NULL, NULL, 'toys-games-', NULL, NULL, NULL, NULL, '2025-09-03 11:39:57', '2025-09-03 11:39:57'),
(28, 'Clothing & Accessories', NULL, '67', NULL, NULL, 1, NULL, NULL, NULL, 'clothing-accessories-', NULL, NULL, NULL, NULL, '2025-09-03 11:40:11', '2025-09-03 11:40:11'),
(29, 'Baby Grooming', NULL, '67', NULL, NULL, 1, NULL, NULL, NULL, 'baby-grooming-', NULL, NULL, NULL, NULL, '2025-09-03 11:40:36', '2025-09-03 11:40:36'),
(30, 'Toys & Games', NULL, '67', NULL, NULL, 1, NULL, NULL, NULL, 'toys-games-', NULL, NULL, NULL, NULL, '2025-09-03 11:40:48', '2025-09-03 11:40:48'),
(31, 'Sports & Outdoor Plays', NULL, '67', NULL, NULL, 1, NULL, NULL, NULL, 'sports-outdoor-plays-', NULL, NULL, NULL, NULL, '2025-09-03 11:41:21', '2025-09-03 11:41:21'),
(32, 'Headphones', '<p>dsfds</p>', '64', 'Z6wSQfMbezypFWtTvslEZVkEj5DbJTwNJKTggtRP.png', NULL, 1, NULL, NULL, 'Z6wSQfMbezypFWtTvslEZVkEj5DbJTwNJKTggtRP.png', 'headphones-', NULL, NULL, NULL, NULL, '2025-09-04 03:58:44', '2025-09-04 03:58:44');

-- --------------------------------------------------------

--
-- Table structure for table `utility_types`
--

CREATE TABLE `utility_types` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) DEFAULT NULL,
  `detail` text DEFAULT NULL,
  `path` varchar(255) DEFAULT NULL,
  `address` varchar(55) DEFAULT NULL,
  `status` tinyint(1) NOT NULL DEFAULT 1,
  `meta_keyword` varchar(255) DEFAULT NULL,
  `meta_description` varchar(255) DEFAULT NULL,
  `image` varchar(255) DEFAULT NULL,
  `slug` varchar(255) NOT NULL,
  `hidden` longtext DEFAULT NULL,
  `title` varchar(225) DEFAULT NULL,
  `hero` varchar(255) DEFAULT NULL,
  `order` int(11) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `utility_types`
--

INSERT INTO `utility_types` (`id`, `name`, `detail`, `path`, `address`, `status`, `meta_keyword`, `meta_description`, `image`, `slug`, `hidden`, `title`, `hero`, `order`, `created_at`, `updated_at`) VALUES
(57, 'Home & lifestyles', NULL, 'fwWd9pW1hmH4UiA3SVE2k0WmCYWIZQIQlIKKd1gZ.png', '27', 1, NULL, NULL, NULL, 'home-lifestyles-', NULL, NULL, NULL, NULL, '2025-09-03 11:12:44', '2025-09-04 07:12:36'),
(58, 'Sports & Outdoors', NULL, 'fwWd9pW1hmH4UiA3SVE2k0WmCYWIZQIQlIKKd1gZ.png', '27', 1, NULL, NULL, NULL, 'sports-outdoors-', NULL, NULL, NULL, NULL, '2025-09-03 11:12:56', '2025-09-04 07:12:28'),
(61, 'Groceries & Pets', NULL, 'fwWd9pW1hmH4UiA3SVE2k0WmCYWIZQIQlIKKd1gZ.png', NULL, 1, NULL, NULL, NULL, 'groceries-pets-', NULL, NULL, NULL, NULL, '2025-09-03 11:13:57', '2025-09-03 11:13:57'),
(62, 'Electronic Devices', NULL, 'fwWd9pW1hmH4UiA3SVE2k0WmCYWIZQIQlIKKd1gZ.png', NULL, 1, NULL, NULL, NULL, 'electronic-devices-', NULL, NULL, NULL, NULL, '2025-09-03 11:14:17', '2025-09-03 11:14:17'),
(63, 'Mens Fashion', NULL, 'fwWd9pW1hmH4UiA3SVE2k0WmCYWIZQIQlIKKd1gZ.png', NULL, 1, NULL, NULL, NULL, 'mens-fashion-', NULL, NULL, NULL, NULL, '2025-09-03 11:14:31', '2025-09-03 11:14:31'),
(64, 'Watch & Accessories', NULL, 'fwWd9pW1hmH4UiA3SVE2k0WmCYWIZQIQlIKKd1gZ.png', NULL, 1, NULL, NULL, NULL, 'watch-accessories-', NULL, NULL, NULL, NULL, '2025-09-03 11:14:50', '2025-09-03 11:14:50'),
(65, 'Womens Fashion', NULL, 'fwWd9pW1hmH4UiA3SVE2k0WmCYWIZQIQlIKKd1gZ.png', NULL, 1, NULL, NULL, NULL, 'womens-fashion-', NULL, NULL, NULL, NULL, '2025-09-03 11:14:56', '2025-09-03 11:14:56'),
(66, 'Health & Beauty', NULL, 'fwWd9pW1hmH4UiA3SVE2k0WmCYWIZQIQlIKKd1gZ.png', NULL, 1, NULL, NULL, NULL, 'health-beauty-', NULL, NULL, NULL, NULL, '2025-09-03 11:15:15', '2025-09-03 11:15:15'),
(67, 'Babies & Toys', NULL, 'fwWd9pW1hmH4UiA3SVE2k0WmCYWIZQIQlIKKd1gZ.png', '27', 1, NULL, NULL, NULL, 'babies-toys-', NULL, NULL, NULL, NULL, '2025-09-03 11:15:33', '2025-09-04 07:16:15');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `approaches`
--
ALTER TABLE `approaches`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `areas`
--
ALTER TABLE `areas`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `associates`
--
ALTER TABLE `associates`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `businesses`
--
ALTER TABLE `businesses`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `complaints`
--
ALTER TABLE `complaints`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `conditions`
--
ALTER TABLE `conditions`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `connects`
--
ALTER TABLE `connects`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `grants`
--
ALTER TABLE `grants`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `journals`
--
ALTER TABLE `journals`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `markets`
--
ALTER TABLE `markets`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `media`
--
ALTER TABLE `media`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `merchants`
--
ALTER TABLE `merchants`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `offerings`
--
ALTER TABLE `offerings`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `orderforms`
--
ALTER TABLE `orderforms`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `packages`
--
ALTER TABLE `packages`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pages`
--
ALTER TABLE `pages`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_reset_tokens`
--
ALTER TABLE `password_reset_tokens`
  ADD PRIMARY KEY (`email`);

--
-- Indexes for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indexes for table `policies`
--
ALTER TABLE `policies`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `popups`
--
ALTER TABLE `popups`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `queries`
--
ALTER TABLE `queries`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `reviews`
--
ALTER TABLE `reviews`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `settings`
--
ALTER TABLE `settings`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sliders`
--
ALTER TABLE `sliders`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `squads`
--
ALTER TABLE `squads`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `stories`
--
ALTER TABLE `stories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `studios`
--
ALTER TABLE `studios`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `subscribes`
--
ALTER TABLE `subscribes`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `triumphs`
--
ALTER TABLE `triumphs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- Indexes for table `utilities`
--
ALTER TABLE `utilities`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `utilitysub_types`
--
ALTER TABLE `utilitysub_types`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `utility_types`
--
ALTER TABLE `utility_types`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `approaches`
--
ALTER TABLE `approaches`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `areas`
--
ALTER TABLE `areas`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;

--
-- AUTO_INCREMENT for table `associates`
--
ALTER TABLE `associates`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `businesses`
--
ALTER TABLE `businesses`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `complaints`
--
ALTER TABLE `complaints`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=39;

--
-- AUTO_INCREMENT for table `conditions`
--
ALTER TABLE `conditions`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `connects`
--
ALTER TABLE `connects`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `grants`
--
ALTER TABLE `grants`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `journals`
--
ALTER TABLE `journals`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `markets`
--
ALTER TABLE `markets`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=328;

--
-- AUTO_INCREMENT for table `media`
--
ALTER TABLE `media`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;

--
-- AUTO_INCREMENT for table `merchants`
--
ALTER TABLE `merchants`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=35;

--
-- AUTO_INCREMENT for table `offerings`
--
ALTER TABLE `offerings`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT for table `orderforms`
--
ALTER TABLE `orderforms`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT for table `packages`
--
ALTER TABLE `packages`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `pages`
--
ALTER TABLE `pages`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `policies`
--
ALTER TABLE `policies`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `popups`
--
ALTER TABLE `popups`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `queries`
--
ALTER TABLE `queries`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `reviews`
--
ALTER TABLE `reviews`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `settings`
--
ALTER TABLE `settings`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `sliders`
--
ALTER TABLE `sliders`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `squads`
--
ALTER TABLE `squads`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `stories`
--
ALTER TABLE `stories`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `studios`
--
ALTER TABLE `studios`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `subscribes`
--
ALTER TABLE `subscribes`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `triumphs`
--
ALTER TABLE `triumphs`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `utilities`
--
ALTER TABLE `utilities`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=332;

--
-- AUTO_INCREMENT for table `utilitysub_types`
--
ALTER TABLE `utilitysub_types`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=33;

--
-- AUTO_INCREMENT for table `utility_types`
--
ALTER TABLE `utility_types`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=71;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
