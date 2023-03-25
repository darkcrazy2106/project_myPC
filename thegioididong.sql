-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3310
-- Generation Time: Dec 13, 2022 at 06:11 PM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `thegioididong`
--

-- --------------------------------------------------------

--
-- Table structure for table `accounts`
--

CREATE TABLE `accounts` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `admin_accounts`
--

CREATE TABLE `admin_accounts` (
  `id` int(10) UNSIGNED NOT NULL,
  `username` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `name` varchar(45) COLLATE utf8mb4_unicode_ci NOT NULL,
  `address` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `admin_accounts`
--

INSERT INTO `admin_accounts` (`id`, `username`, `password`, `name`, `address`, `phone`, `created_at`, `updated_at`) VALUES
(1, 'admin', '$2y$10$zCyh.Vcw8KhhfWXunrgBQOmRX02DvMySNRRNl.1Vk346TRFOMr0Sq', 'Huỳnh Nhật Hiếu', '35 Nguyễn Quang Bích', '0348572999', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `blogs`
--

CREATE TABLE `blogs` (
  `id` int(11) NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `content` mediumtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `author` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `thumbnail` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` varchar(5) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `blogs`
--

INSERT INTO `blogs` (`id`, `title`, `content`, `author`, `thumbnail`, `status`, `created_at`, `updated_at`) VALUES
(5, 'Start Your Adventure in the Odyssey Ark’s Multi-Universe', '<p>The Odyssey Ark, a groundbreaking gaming screen, was released to make every gamer&rsquo;s dream come true.</p>\r\n<p>&nbsp;</p>\r\n<p>Along with 4K resolution and the 165Hz refresh rate, the world&rsquo;s first 55-inch, 1000R curved gaming screen delivers a brand new gaming experience. The Odyssey Ark is equipped with innovative, high-performance gaming features, providing enhanced graphics and an upgraded gaming experience for gamers to enjoy while in the midst of intense gameplay.</p>\r\n<p>&nbsp;</p>\r\n<p>Together with Odyssey Ark, gamers will dive into an uncharted multi-universe experience and discover the new features throughout the three worlds of the Ark-verse: Gaming Universe for gamers who value an optimized gaming environment, Cinematic Universe for gamers who value immersive experiences and sound quality and Multi-task Universe for gamers who value easy control and screen usability.</p>\r\n<p>&nbsp;</p>\r\n<p>Create an optimal gaming environment with the 55-inch gaming screen that can be scaled to 27-inches. Users can choose a screen ratio between 16:9, 21:9 or 32:9. Four surround-sound speakers fill gamers&rsquo; peripheral vision for a truly immersive experience. Multi View allows users to use the large screen to its full potential by displaying up to four screens all at once while horizontal, or three while in Cockpit Mode.</p>\r\n<p>&nbsp;</p>\r\n<p>Gamers can start a new, personalized adventure today in the Ark-verse with Odyssey Ark.</p>', 'Samsung', 'samsungNews.jpg', '1', '2022-08-22 09:20:17', NULL),
(6, '[Infographic] Samsung’s Portable SSD T7 Series Delivers Reliable Performance and Increased Durability', '<p>Samsung Electronics&rsquo; Portable Solid State Drive (PSSD) T7 Series brings durability and upgraded performance in three devices that fit in the palm of your hand: the T7, T7 Touch and T7 Shield.</p>\r\n<p>&nbsp;</p>\r\n<p>All devices in the T7 Series offer a read speed of 1,050 megabytes per second (MB/s) and a write speed of 1,000 MB/s, delivering reliable high speeds up to 9.5 times faster than external hard disk drives (HDD) without degradation in performance.</p>\r\n<p>&nbsp;</p>\r\n<p>Whether you&rsquo;re storing critical business documents, games, or movies, the T7, T7 Touch and T7 Shield do it all in a palm-sized package. The 85-by-57-millimeter T7 and T7 Touch and 88-by-59-millimeter T7 Shield offer the user credit card-sized portability.</p>\r\n<p>&nbsp;</p>\r\n<p>Optimized to be compatible across a variety of devices, including PC, Mac, Android devices and gaming consoles, the T7, T7 Touch and T7 Shield come with increased security to ensure data is protected even if the device gets lost. The T7 Touch even offers the option of unlocking with a touch of your finger or with a password, so you can keep your private files secure without sacrificing convenience.</p>\r\n<p>&nbsp;</p>\r\n<p>What&rsquo;s more, Samsung&rsquo;s T7 Shield is its most durable PSSD yet &mdash; built to withstand falls of up to 3 meters. The T7 Shield is IP65-certified as both water and dust-resistant yet weighs a mere 98 grams, making it the perfect compact storage device for those who work on the go.</p>\r\n<p>&nbsp;</p>\r\n<p>Designed to store everything from large work files to photos and videos of memorable moments, the T7 Series provides users with the ease of mind that their data is secure in devices that are built to last. Take a look at the infographic below to learn more about the groundbreaking features of the T7, T7 Touch and T7 Shield.</p>', 'Samsung', 'samsungNews2.jpg', '1', '2022-08-22 13:03:59', NULL),
(7, 'Sustainability Through Durability, Samsung’s 20-Year Commitment', '<p>At Bespoke Home 2022 in June, Samsung introduced its vision for sustainable solutions at home based on the Bespoke concept of flexible appliances that adapt to provide efficient home care solutions as lives evolve. This concept includes reducing waste by extending the lifespan of Samsung&rsquo;s appliances through reliability as frequent replacement of home appliances not only costs time and energy but also produces physical waste. Samsung is further combating this waste with sustainable solutions based on durability backed by the company&rsquo;s class-leading 20-year warranty<sup>1</sup>&nbsp;for the digital inverter technologies<sup>2</sup>&nbsp;in its washer, dryer and refrigerator, going into effect July 1.</p>\r\n<p>Samsung is devoted to providing high-quality, durable appliances that improve the lives of users at home, and the 20-year warranty on the key components of major appliances serves as evidence.</p>\r\n<p>&nbsp;</p>\r\n<p>While the warranty initially started as a 10-year warranty for both Europe and the U.S., this increase of up to 20-years reflects Samsung&rsquo;s confidence and commitment to its products.</p>\r\n<p>&nbsp;</p>\r\n<p>The start of this commitment began with research and development. Through decades of continued investment, Samsung is able to offer consumers appliances that pair the most advanced Samsung technologies with beautiful designs that elevate the home experience. This is evidenced by the latest kitchen and living appliances.</p>', 'Samsung', 'samsungNews3.jpg', '1', '2022-08-22 13:30:49', NULL),
(8, 'Apple expands Self Service Repair to Mac notebooks', '<div class=\"pagebody-copy\">Apple announced Self Service Repair will be available tomorrow for MacBook Air and MacBook Pro notebooks with the M1 family of chips, providing repair manuals and genuine Apple parts and tools through the Apple&nbsp;<a href=\"https://www.selfservicerepair.com/\" target=\"_blank\" rel=\"nofollow noopener\" data-analytics-exit-link=\"\">Self Service Repair Store</a>. Self Service Repair for iPhone launched earlier this year and the program will expand to additional countries &mdash; beginning in Europe &mdash; as well as additional Mac models later this year.</div>\r\n<div class=\"pagebody-copy\">Self Service Repair for MacBook Air and MacBook Pro offers more than a dozen different repair types for each model, including the display, top case with battery, and trackpad, with more to come. Customers who are experienced with the complexities of repairing electronic devices will be able to complete repairs on these Mac notebooks, with access to many of the same parts and tools available to Apple Store locations and Apple Authorized Service Providers.</div>\r\n<div class=\"pagebody-copy\">To start the Self Service Repair process, a customer will first review the repair manual for the product they want to repair by visiting&nbsp;<a href=\"https://support.apple.com/self-service-repair\" target=\"_blank\" rel=\"nofollow noopener\" data-analytics-exit-link=\"\">support.apple.com/self-service-repair</a>. Then, they can visit the Apple Self Service Repair Store and order the necessary parts and tools.</div>\r\n<div class=\"pagebody-copy\">Every genuine Apple part is designed and engineered for each product, and goes through extensive testing to ensure the highest quality, safety, and reliability. Customers can send replaced parts back to Apple for refurbishment and recycling, and in many cases receive credit of their purchase by doing so.</div>', 'Apple', 'appleNew1.jpg', '1', '2022-08-22 13:34:43', NULL),
(9, 'Shazam turns 20', '<div class=\"pagebody-copy\">Shazam turns 20 today, and as of this week, it has officially surpassed 70 billion song recognitions. A mainstay in popular culture, the platform has changed the way people engage with music by making song identification accessible to everyone. For more than 225 million global monthly users, to &ldquo;Shazam&rdquo; is to discover something new.</div>\r\n<div class=\"pagebody-copy\">To mark the occasion, Shazam invites fans to take a trip down memory lane with a special playlist comprised of the most Shazamed song of each calendar year for the past 20 years. Featuring everything from Train&rsquo;s &ldquo;Hey, Soul Sister&rdquo; to Sia&rsquo;s &ldquo;Cheap Thrills,&rdquo; the playlist is a true reflection of the music fans across the globe actively searched for over the past two decades. Listen now exclusively on Apple Music.</div>\r\n<div class=\"pagebody-copy\">\r\n<div class=\"pagebody-copy\">Over the years, Shazam&rsquo;s global charts have played a crucial role in helping to identify breaking new talent like Masked Wolf, who was one of Shazam&rsquo;s 5 Artists to Watch in 2021 and ended up having the most Shazamed track globally that year with &ldquo;Astronaut In The Ocean.&rdquo;</div>\r\n<div class=\"pagebody-copy\">&ldquo;The fact that people all over the world took time out of their day to pull out their phone and Shazam my songs is a huge honor for me as an artist,&rdquo; said Masked Wolf. &ldquo;You know you&rsquo;ve got something special if you see the Shazam stats moving.&rdquo;</div>\r\n<div class=\"pagebody-copy\">Shazam&rsquo;s charts have also become a barometer for unexpected pop culture moments. Kate Bush&rsquo;s 1985 song &ldquo;Running Up That Hill&rdquo; being featured in &ldquo;Stranger Things&rdquo; led to an all-time peak in Shazams of the singer, and the track took No. 1 on the Shazam Global Top 200 for 10 days. It ended up reaching the top of 25 national charts &mdash; more than any other song in 2022.</div>\r\n</div>', 'Apple', 'appleNew2.jpg', '1', '2022-08-22 13:36:00', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `category_id` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `category_name` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `category_description` mediumtext COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`category_id`, `category_name`, `category_description`) VALUES
('C01', 'acer', 'Founded in 1976, Acer is a Taiwanese multinational electronics and computer hardware company. Currently, Acer\'s head office is located in New Taipei City, Taiwan and in San Jose, California, USA.'),
('C02', 'keyboard', '<p>The history of the modern computer keyboard&nbsp;<strong>begins with a direct inheritance from the invention of the typewriter</strong>. It was Christopher Latham Sholes who, in 1868, patented the first practical modern typewriter. Soon after, in 1877, the Remington Company began mass marketing the first typewriters.</p>'),
('C03', 'Mac', 'The MacBook is Apple\'s third laptop computer family, introduced in 2006. Prior laptops were the PowerBook and iBook. In 2015, new MacBooks featured Apple\'s Retina Display and higher resolutions, as well as the Force Touch trackpad that senses different pressure levels. By the end of 2016, all MacBooks used solid state drives (SSDs).'),
('C04', 'Airpods', '<p>AirPods are wireless<strong> Bluetooth earbuds designed by Apple Inc</strong>. They were first announced on September 7, 2016, alongside the iPhone 7. Within two years, they became Apple\'s most popular accessory.</p>'),
('C05', 'ram', '<p>Random-access memory (RAM; /r&aelig;m/) is a form of computer memory that can be read and changed in any order, typically used to store working data and machine code.[1][2] A random-access memory device allows data items to be read or written in almost the same amount of time irrespective of the physical location of data inside the memory, in contrast with other direct-access data storage media (such as hard disks, CD-RWs, DVD-RWs and the older magnetic tapes and drum memory), where the time required to read and write data items varies significantly depending on their physical locations on the recording medium, due to mechanical limitations such as media rotation speeds and arm movement. RAM contains multiplexing and demultiplexing circuitry, to connect the data lines to the addressed storage for reading or writing the entry. Usually more than one bit of storage is accessed by the same address, and RAM devices often have multiple data lines and are said to be \"8-bit\" or \"16-bit\", etc. devices.[clarification needed] In today\'s technology, random-access memory takes the form of integrated circuit (IC) chips with MOS (metal-oxide-semiconductor) memory cells. RAM is normally associated with volatile types of memory (such as dynamic random-access memory (DRAM) modules), where stored information is lost if power is removed, although non-volatile RAM has also been developed.[3] Other types of non-volatile memories exist that allow random access for read operations, but either do not allow write operations or have other kinds of limitations on them. These include most types of ROM and a type of flash memory called NOR-Flash.</p>');

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(8, '2014_10_12_000000_create_users_table', 1),
(9, '2014_10_12_100000_create_password_resets_table', 1),
(10, '2019_08_19_000000_create_failed_jobs_table', 1),
(11, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(12, '2022_05_21_091635_create_products_table', 1),
(13, '2022_05_24_103523_create_blogs_table', 1),
(14, '2022_06_25_092459_create_accounts_table', 1),
(15, '2022_06_25_093920_create_tests_table', 1),
(16, '2022_07_30_093512_create_user_accounts_table', 2),
(17, '2022_08_05_090931_create_order_details_table', 3),
(18, '2022_08_15_134536_create_admin_accounts_table', 4);

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `order_id` int(10) UNSIGNED NOT NULL,
  `order_code` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `customer_id` int(10) UNSIGNED DEFAULT NULL,
  `customer_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `customer_address` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `customer_phone` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`order_id`, `order_code`, `customer_id`, `customer_name`, `customer_address`, `customer_phone`, `status`, `created_at`) VALUES
(7, 'AP-20220826112614', NULL, 'Nguyễn Văn A', 'Dĩ An, Bình Dương', '0123456789', '2', '2022-08-26 04:26:14'),
(8, 'AP-20220826113750', NULL, 'Dương Thanh Lợi', 'Tân Phú, HCM', '0123456789', '1', '2022-08-26 04:37:50'),
(9, 'AP-20220828090358', NULL, 'Dương Thanh Lợi', 'Tân Phú, HCM', '0123456789', '1', '2022-08-28 02:03:58'),
(10, 'AP-20220828090546', 2, 'Dương Thanh Lợi', 'Tân Phú, HCM', '0123456789', '1', '2022-08-28 02:05:46'),
(12, 'AP-20220829081729', 10, 'Nguyễn Lê Thảo Nhi', 'Thuận An, Bình Dương', '0842593661', '1', '2022-08-29 01:17:29'),
(14, 'AP-20220830124501', 2, 'Dương Thanh Lợi', 'Quận 1, HCM', '0123456789', '2', '2022-08-30 05:45:01');

-- --------------------------------------------------------

--
-- Table structure for table `order_details`
--

CREATE TABLE `order_details` (
  `order_detail_id` int(10) UNSIGNED NOT NULL,
  `order_id` int(10) UNSIGNED NOT NULL,
  `product_code` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `product_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `product_price` decimal(10,2) NOT NULL,
  `product_quantity_sale` int(11) NOT NULL,
  `product_img` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `order_details`
--

INSERT INTO `order_details` (`order_detail_id`, `order_id`, `product_code`, `product_name`, `product_price`, `product_quantity_sale`, `product_img`, `created_at`, `updated_at`) VALUES
(1, 7, 'LN32493824', 'Macbook Pro 13inch M2 Gray', '1499.99', 3, 'macbook-pro-m2-2022-gray.png', NULL, NULL),
(2, 7, 'LN20349543', 'IPad Pro 12.9Inch Silver', '1899.88', 4, 'ipad-pro-2021-11-inch-silver.png', NULL, NULL),
(3, 8, 'LN438495076', 'Iphone 13 Pink', '1199.00', 2, 'iphone-13-mini-red.png', NULL, NULL),
(4, 8, 'LN4384950', 'iPhone 13 Pro Max Silver', '1099.99', 1, 'iphone-13-pro-max-silver.png', NULL, NULL),
(5, 9, 'LN438495076', 'Iphone 13 Pink', '1199.00', 1, 'iphone-13-mini-red.png', NULL, NULL),
(6, 9, 'LN20349543', 'IPad Pro 12.9Inch Silver', '1899.88', 1, 'ipad-pro-2021-11-inch-silver.png', NULL, NULL),
(7, 10, 'LN20349543', 'IPad Pro 12.9Inch Silver', '1899.88', 1, 'ipad-pro-2021-11-inch-silver.png', NULL, NULL),
(8, 10, 'LN2022492', 'Airpods 3', '469.99', 1, 'bluetooth-airpods-3.png', NULL, NULL),
(9, 10, 'LN2022490', 'Airpods 2', '399.99', 1, 'airpods-2-wireless.png', NULL, NULL),
(12, 12, 'LN2347392', 'Macbook Air M2 Blue', '1299.99', 2, 'apple-macbook-air-m2-2022-xanh.png', NULL, NULL),
(14, 14, 'LN438495076', 'Iphone 13 Pink', '1199.00', 4, 'iphone-13-mini-red.png', NULL, NULL),
(15, 14, 'LN4384955', 'IPad gen 9', '799.99', 2, 'ipad-gen-9-wifi-cellular-grey.png', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `id_reset` int(11) NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `password_resets`
--

INSERT INTO `password_resets` (`id_reset`, `email`, `token`, `created_at`) VALUES
(1, 'loi.duong.cit20@eiu.edu.vn', 'ZZVB6jQAFEjRaP3FmOqxdbRSqYi2Y7sdFHlageLn', '2022-08-17 12:24:04'),
(2, 'dloi8185@gmail.com', 'ZZVB6jQAFEjRaP3FmOqxdbRSqYi2Y7sdFHlageLn', '2022-08-17 13:38:33'),
(3, 'loi.duong.cit20@eiu.edu.vn', 'riQrzqEY88mhvIuUJBMztJ7ShGl4wpH81gOucT1O', '2022-08-24 12:50:46'),
(4, 'nhi.nguyenle.cit19@eiu.edu.vn', 'ZkfLjEd1aPi0zFu9SFjUnczPnCHtqF0d5MgyrpMF', '2022-08-29 01:26:26'),
(5, 'dloi8185@gmail.com', 'Kr5ii3m4OM56DeUiniWJjpHkNXaNTokkp9VFyjOw', '2022-09-05 09:29:55'),
(6, 'loi.duong.cit20@eiu.edu.vn', '02kaXLuEwBHaeAy7CH7Dr4Tr6Ll8T1skpPd7eMKJ', '2022-09-13 04:31:53'),
(7, 'loi.duong.cit20@eiu.edu.vn', 'zPuM7BLqgIlxYW2r9Ub8PiyWf0uGIYPBgWGgqxNn', '2022-12-12 04:50:33');

-- --------------------------------------------------------

--
-- Table structure for table `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tokenable_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tokenable_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL,
  `abilities` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` int(11) NOT NULL,
  `product_code` varchar(15) COLLATE utf8mb4_unicode_ci NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `category_id` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` mediumtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `price` decimal(10,2) NOT NULL,
  `quantity` int(11) DEFAULT NULL,
  `img_path` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `product_code`, `name`, `category_id`, `description`, `price`, `quantity`, `img_path`, `created_at`, `updated_at`) VALUES
(4, 'LN20204378', 'Acer Predator Helios 300', 'C01', '<h2><strong>Đ&aacute;nh gi&aacute; chi tiết laptop gaming&nbsp;Acer Predator&nbsp;Helios 300&nbsp;PH315 55 751D</strong></h2>\r\n<p>&nbsp;</p>\r\n<p>Acer Predator Helios 300 l&agrave; một trong những d&ograve;ng&nbsp;<a href=\"https://gearvn.com/pages/laptop-gaming\" target=\"_blank\" rel=\"noopener\">laptop gaming</a>&nbsp;mới nhất c&oacute; tr&ecirc;n thị trường, được trang bị cấu h&igrave;nh mạnh mẽ, thiết kế hầm hố, hiệu năng ấn tượng,...Nếu bạn đang t&igrave;m cho ri&ecirc;ng m&igrave;nh d&ograve;ng laptop gaming chất lượng c&acirc;n được mọi tựa game th&igrave;&nbsp; Acer Predator Helios 300 PH315 55 751D sẽ l&agrave; sự lựa chọn bạn kh&ocirc;ng n&ecirc;n bỏ qua.</p>\r\n<h3><strong>Sử dụng CPU thế hệ thứ 12</strong></h3>\r\n<p>&nbsp;</p>\r\n<p><img src=\"https://file.hstatic.net/1000026716/file/gearvn-laptop-gaming-acer-predator-helios-300-ph315-55-751d_f6ddd5fd0eec419ea1117a3433e0f5c6_grande.png\" alt=\"GEARVN-laptop-gaming-acer-predator-helios-300-ph315-55-751d\"></p>\r\n<p>&nbsp;</p>\r\n<p>Để người d&ugrave;ng c&oacute; những trải nghiệm th&uacute; vị trong mọi nhu cầu sử dụng từ học tập, l&agrave;m việc cho đến chơi game giải tr&iacute;. Acer Predator Helios 300 PH315 55 751D sử dụng&nbsp;<a href=\"https://gearvn.com/collections/cpu-intel-12th-gen\" target=\"_blank\" rel=\"noopener\">CPU thế hệ thứ 12</a>&nbsp;mới nhất từ Intel mang lại khả năng xử l&yacute; đa nhiệm với tốc độ đ&aacute;ng kinh ngạc.</p>\r\n<h3><strong>Khả năng xử l&yacute; đồ họa đỉnh cao</strong></h3>\r\n<p>&nbsp;</p>\r\n<p><img src=\"https://file.hstatic.net/1000026716/file/gearvn-laptop-gaming-acer-predator-helios-300-ph315-55-751d-1_5b25ec99d3b54a509dae94ebe2d7bdd3_grande.png\" alt=\"GEARVN-laptop-gaming-acer-predator-helios-300-ph315-55-751d\"></p>\r\n<p>&nbsp;</p>\r\n<p>Acer Predator Helios 300 l&agrave; d&ograve;ng laptop chơi game c&oacute; khả năng xử l&yacute; đồ họa đỉnh cao. Trang bị card m&agrave;n h&igrave;nh NVIDIA GeForce RTX 3070Ti 8GB GDDR6 với những t&iacute;nh năng AI ti&ecirc;n tiến như:</p>\r\n<ul>\r\n<li>\r\n<p>C&ocirc;ng nghệ NVIDIA DLSS tăng cường độ ph&acirc;n giải để mang đến chất lượng h&igrave;nh ảnh sắc n&eacute;t, sống động cho người d&ugrave;ng những trải nghiệm chơi game ấn tượng.&nbsp;</p>\r\n</li>\r\n<li>\r\n<p>C&ocirc;ng nghệ xử l&yacute; h&igrave;nh ảnh Ray Tracing gi&uacute;p m&ocirc; phỏng h&igrave;nh ảnh một c&aacute;ch ch&acirc;n thực nhất.</p>\r\n</li>\r\n<li>\r\n<p>C&ocirc;ng nghệ NVIDIA Max-Q gi&uacute;p m&aacute;y t&iacute;nh gaming trở n&ecirc;n mỏng nhẹ, linh hoạt khi di chuyển nhưng vẫn đảm bảo mang đến chất lượng đồ họa.</p>\r\n</li>\r\n</ul>\r\n<h3><strong>M&agrave;n h&igrave;nh k&iacute;ch thước lớn, tấn số qu&eacute;t 165Hz</strong></h3>\r\n<p>&nbsp;</p>\r\n<p><img src=\"https://file.hstatic.net/1000026716/file/gearvn-laptop-gaming-acer-predator-helios-300-ph315-55-751d-4_7381f7b3deb64542a4d202e3a0bbad84_grande.png\" alt=\"GEARVN-laptop-gaming-acer-predator-helios-300-ph315-55-751d\"></p>\r\n<p>&nbsp;</p>\r\n<p>Acer Predator Helios 300 PH315 55 751D trang bị&nbsp;<a href=\"https://gearvn.com/pages/man-hinh\" target=\"_blank\" rel=\"noopener\">m&agrave;n h&igrave;nh</a>&nbsp;với k&iacute;ch thước 15.6 inch với tần số qu&eacute;t 165Hz cho ra h&igrave;nh ảnh sắc n&eacute;t v&agrave; khả năng hiển thị chi tiết, loại bỏ mọi khả năng x&eacute; h&igrave;nh mang đến những trải nghiệm chơi game tốt nhất.</p>\r\n<h3><strong>B&agrave;n ph&iacute;m LED RGB 4 Zone</strong></h3>\r\n<p>Điểm ấn tượng tr&ecirc;n d&ograve;ng sản phẩm Acer Predator Helios 300&nbsp;ch&iacute;nh l&agrave; Acer đ&atilde; trang bị hệ thống LED RGB để tăng th&ecirc;m chất lượng cho nhu cầu chơi game giải tr&iacute;. Acer Predator Helios 300 PH315 55 751D được trang bị&nbsp;<a href=\"https://gearvn.com/collections/ban-phim-may-tinh\" target=\"_blank\" rel=\"noopener\">b&agrave;n ph&iacute;m</a>&nbsp;LED RGB 4 Zone ấn tượng. Th&ecirc;m cụm ph&iacute;m WASD ấn tượng được l&agrave;m nổi bật mang đến cho người chơi những trải nghiệm mới mẻ.</p>\r\n<p><img src=\"https://file.hstatic.net/1000026716/file/gearvn-laptop-gaming-acer-predator-helios-300-ph315-55-751d-2_0bc940aa0b8b437a932c5148c4a7fcd8_grande.png\" alt=\"GEARVN-laptop-gaming-acer-predator-helios-300-ph315-55-751d\"></p>\r\n<p>&nbsp;</p>\r\n<p>Để chiếc laptop gaming Acer mang đậm dấu ấn c&aacute; nh&acirc;n của bản th&acirc;n, người chơi ho&agrave;n to&agrave;n c&oacute; thể dễ d&agrave;ng tinh chỉnh hiệu ứng LED th&ocirc;ng qua phần mềm PredatorSense kh&ocirc;ng kh&aacute;c g&igrave; những d&ograve;ng&nbsp;<a href=\"https://gearvn.com/pages/ban-phim-may-tinh\" target=\"_blank\" rel=\"noopener\">b&agrave;n ph&iacute;m cơ</a>&nbsp;c&oacute; tr&ecirc;n thị trường để tạo n&ecirc;n kh&ocirc;ng gian chơi game c&ugrave;ng hệ thống LED độc đ&aacute;o.</p>\r\n<h3><strong>Tối ưu h&oacute;a tăng khả năng giảm nhiệt v&agrave; l&agrave;m m&aacute;t tổng thể</strong></h3>\r\n<p>&nbsp;</p>\r\n<p><img src=\"https://file.hstatic.net/1000026716/file/gearvn-laptop-gaming-acer-predator-helios-300-ph315-55-751d-3_53844bd07cb64b1ba1cd21b0e49e7d04_grande.png\" alt=\"GEARVN-laptop-gaming-acer-predator-helios-300-ph315-55-751d\"></p>\r\n<p>&nbsp;</p>\r\n<p>Helios 300 l&agrave; d&ograve;ng laptop chơi game với hiệu năng ấn tượng từ CPU thế hệ thứ 12, VGA NVIDIA GEFORCE RTX 30,...nhưng để chiếc laptop c&oacute; thể hoạt động một c&aacute;ch ổn định khi chơi c&aacute;c tựa game max setting trong suốt thời gian d&agrave;i. Acer đ&atilde; tăng cường hệ thống&nbsp;<a href=\"https://gearvn.com/collections/tan-nhiet-khi\" target=\"_blank\" rel=\"noopener\">tản nhiệt</a>,&nbsp;l&agrave;m m&aacute;t với c&ocirc;ng nghệ quạt 3D AeroBlade 5th, c&ocirc;ng nghệ COOLBOOST tự động,... gi&uacute;p tối ưu h&oacute;a tăng khả năng giảm nhiệt v&agrave; l&agrave;m m&aacute;t tổng thể trong suốt thời gian vận h&agrave;nh.&nbsp;</p>\r\n<h3><strong>Cổng kết nối đa dạng&nbsp;</strong></h3>\r\n<p>&nbsp;</p>\r\n<p><img src=\"https://file.hstatic.net/1000026716/file/gearvn-laptop-gaming-acer-predator-helios-300-ph315-55-751d-5_9b0b6d2bc84b4a9c8f280c5ecda48f1b_grande.png\" alt=\"GEARVN-laptop-gaming-acer-predator-helios-300-ph315-55-751d\"></p>\r\n<p>&nbsp;</p>\r\n<p>Để tăng cường t&iacute;nh đa nhiệm cho chiếc laptop gaming mới nhất của m&igrave;nh, Acer trang bị cho Predator Helios 300 PH315 55 751D đầy đủ cổng kết nối USB 3.2 gi&uacute;p bạn dễ d&agrave;ng kết nối với c&aacute;c thiết bị ngoại vi như&nbsp;<a href=\"https://gearvn.com/pages/chuot-may-tinh\" target=\"_blank\" rel=\"noopener\">chuột m&aacute;y t&iacute;nh</a>, loa v&agrave; tai nghe,..gi&uacute;p n&acirc;ng cao chất lượng cho nhu cầu sử dụng.&nbsp;</p>\r\n<p>Ngo&agrave;i ra, Acer Predator Helios 300 c&ograve;n được trang bị cổng Mini DisplayPort 1.4 v&agrave;&nbsp; HDMI 2.1 gi&uacute;p người chơi c&oacute; thể kết nối dễ d&agrave;ng với m&agrave;n h&igrave;nh rời.</p>', '1299.99', 100, 'Acer Predator Helios 300.webp', NULL, '2022-12-13 11:38:38'),
(5, 'LN20203249', 'Laptop Acer Swift 3', 'C01', '<p>Đ&aacute;nh gi&aacute; chi tiết laptop Acer Swift 3 SF314 71 74WD Laptop Acer Swift 3 SF314 71 74WD l&agrave; một si&ecirc;u phẩm mới của nh&agrave; Acer vừa mới ra mắt c&aacute;ch đ&acirc;y kh&ocirc;ng l&acirc;u. N&oacute; l&agrave; một trong những chiếc m&aacute;y t&iacute;nh x&aacute;ch tay được giới nh&acirc;n vi&ecirc;n văn ph&ograve;ng v&agrave; học sinh, sinh vi&ecirc;n săn đ&oacute;n nhất hiện nay nhờ hiệu năng ấn tượng v&agrave; vẻ ngo&agrave;i mỏng nhẹ, sang trọng. D&ugrave; l&agrave; một gương mặt mới trong l&agrave;ng laptop văn ph&ograve;ng nhưng Acer Swift 3 SF314 71 74WD sớm đ&atilde; trở th&agrave;nh sự lựa chọn h&agrave;ng đầu của nhiều người. GEARVN Laptop Acer Swift 3 SF314 71 74WD Thiết kế sang trọng, hiện đại v&agrave; tinh tế Swift 3 SF314 sở hữu vẻ ngo&agrave;i v&ocirc; c&ugrave;ng thanh tho&aacute;t v&agrave; sang trọng khi chỉ nặng 1.4 kg. Thiết kế nhỏ gọn sẽ l&agrave; một điểm cộng lớn khi bạn c&oacute; thể dễ d&agrave;ng bỏ v&agrave;o balo hay t&uacute;i x&aacute;ch mang đi khắp nơi đ&acirc;u. Vỏ m&aacute;y t&iacute;nh được l&agrave;m từ nh&ocirc;m-magie, mang đến độ bền bỉ gấp 4 lần so với c&aacute;c hợp kim nh&ocirc;m thồng thường. Kh&ocirc;ng những vậy, bạn sẽ kh&ocirc;ng c&ograve;n sợ những t&aacute;c động vật l&iacute; l&ecirc;n laptop khi phải di chuyển nhiều. GEARVN Laptop Acer Swift 3 SF314 71 74WD Ngo&agrave;i ra, Swift 3 SF314 được trang bị vi&ecirc;n pin 3-cell 57Wh, c&oacute; thể duy tr&igrave; thời gian on-screen l&ecirc;n đến17 giờ. Vi&ecirc;n pin n&agrave;y kh&aacute; phổ biến tr&ecirc;n thị trường v&agrave; được sử dụng tr&ecirc;n hầu hết c&aacute;c d&ograve;ng laptop Acer. Hỗ trợ sạc nhanh nay đ&atilde; được cập nhật tr&ecirc;n Swift 3 SF314, chỉ với 30 ph&uacute;t sạc bạn đ&atilde; c&oacute; thể sử dụng laptop trong v&ograve;ng 4 giờ đồng hồ. C&ocirc;ng ngh&ecirc; bảo mật tr&ecirc;n Swift 3 SF314 71 74WD Khi sử dụng m&aacute;y t&iacute;nh x&aacute;ch tay, bảo mật vẫn lu&ocirc;n được người d&ugrave;ng quan t&acirc;m. Hiểu được vấn đề n&agrave;y n&ecirc;n Swift 3 SF314 đ&atilde; trang bị c&ocirc;ng nghệ cảm biến v&acirc;n tay. T&iacute;nh năng n&agrave;y gi&uacute;p người d&ugrave;ng mở kh&oacute;a m&agrave;n h&igrave;nh nhanh ch&oacute;ng v&agrave; bảo mật an to&agrave;n hơn nhờ cảm biến v&acirc;n tay đặt ngay dưới b&agrave;n ph&iacute;m. C&oacute; thể thấy rằng Acer đ&atilde; l&agrave;m rất tốt trong việc thực thi bảo mật tối ưu cho người d&ugrave;ng. GEARVN Laptop Acer Swift 3 SF314 71 74WD B&agrave;n ph&iacute;m của Swift 3 SF314 cũng đ&atilde; được n&acirc;ng cấp. B&agrave;n ph&iacute;m ti&ecirc;u chuẩn với đ&egrave;n nền LED t&iacute;ch hợp, mang lại sự thoải m&aacute;i cho người d&ugrave;ng trong mọi điều kiện &aacute;nh s&aacute;ng. Khoảng c&aacute;ch giữa c&aacute;c ph&iacute;m kh&aacute; hợp l&yacute;, độ nảy tốt mang đến trải nghiệm g&otilde; ph&iacute;m thoải m&aacute;i v&agrave; &ecirc;m &aacute;i cho người d&ugrave;ng. C&aacute;c thao t&aacute;c g&otilde; ph&iacute;m thoải m&aacute;i v&agrave; ch&iacute;nh x&aacute;c, gi&uacute;p tăng tốc độ g&otilde; ph&iacute;m của bạn. M&agrave;n h&igrave;nh hiển thị Acer Swift 3 SF314 sở hữu m&agrave;n h&igrave;nh 14inch OLED, độ ph&acirc;n giải WQ2.8K (2880x1800). Bạn ho&agrave;n to&agrave;n c&oacute; thể trải nghiệm h&igrave;nh ảnh tuyệt vời khi thực hiện một số t&aacute;c vụ đơn giản như xem phim, lướt web hay học tập. M&agrave;n h&igrave;nh Swift 3 SF314 đạt tần số qu&eacute;t 90Hz gi&uacute;p loại bỏ hiện tượng nh&ograve;e do chuyển động v&agrave; chỉ để lại chất lượng h&igrave;nh ảnh ho&agrave;n hảo mượt m&agrave;. B&ecirc;n cạnh đ&oacute; c&ocirc;ng nghệ Acer CineCrystal tăng th&ecirc;m sức mạnh cho Swift 3 SF314 thể hiện với chất lượng h&igrave;nh ảnh ch&acirc;n thực với khả năng hiển thị m&agrave;u v&agrave; độ s&aacute;ng ấn tượng. GEARVN Laptop Acer Swift 3 SF314 71 74WD Hiệu năng ổn định v&agrave; vượt trội Swift 3 SF314 được t&iacute;ch hợp bộ vi xử l&yacute; Intel&reg; Core i7-12700H mới nhất gi&uacute;p xử l&yacute; mượt m&agrave; c&aacute;c t&aacute;c vụ văn ph&ograve;ng v&agrave; giải tr&iacute; đơn giản. CPU cực kỳ ấn tượng, tuy chỉ thuộc ph&acirc;n kh&uacute;c tầm trung nhưng hiệu năng m&agrave; n&oacute; mang lại kh&ocirc;ng hề thua k&eacute;m bất cứ đối thủ n&agrave;o. Hiệu năng đủ mạnh để c&acirc;n c&aacute;c tựa game th&ocirc;ng dụng. Swift 3 SF314 c&ograve;n được trang bị VGA độc quyền Intel Iris Xe Graphics để cải thiện hiệu suất khi ch&uacute;ng ta chơi game hoặc bạn c&oacute; thể tự điều chỉnh để mang lại trải nghiệm chơi game tốt nhất. Đồng thời, Swift 3 SF314 thừa sức đảm đương mọi t&aacute;c vụ xử l&yacute; h&igrave;nh ảnh, render video bằng Adobe Premiere Pro hay Photoshop, AutoCad. GEARVN Laptop Acer Swift 3 SF314 71 74WD Kh&ocirc;ng những vậy, Acer Swift 3 SF314 c&ograve;n sở hữu bộ vi xử l&yacute; cao cấp mạnh mẽ với những linh kiện cao cấp nhất hiện nay. Đ&oacute; l&agrave; 16GB RAM LPDDR5 6400MHz cho hiệu suất cao v&agrave; SSD PCIe NVMe l&ecirc;n đến 1TB để mang đến cho bạn khả năng đa nhiệm hiệu quả. Bạn c&oacute; thể thoải m&aacute;i lưu trữ dữ liệu học tập, c&ocirc;ng việc v&agrave; tăng tốc độ khởi động, mở ứng dụng trong nh&aacute;y mắt m&agrave; kh&ocirc;ng phải chờ đợi l&acirc;u.</p>', '1599.99', 100, 'laptop7.jpg', NULL, '2022-12-13 11:35:58'),
(6, 'LN20203294', 'Acer Aspire 7', 'C01', '<p>Đ&aacute;nh gi&aacute; chi tiết laptop gaming Acer Aspire 7 Laptop gaming tốt nhất ph&acirc;n kh&uacute;c Acer Aspire 7 A715 43G R8GA t&iacute;ch hợp card đồ họa NVIDIA RTX 3050, l&agrave; laptop chơi game tốt nhất ph&acirc;n kh&uacute;c. Kh&ocirc;ng chỉ vậy, phi&ecirc;n bản n&agrave;y c&ograve;n mang thiết kế mới gọn g&agrave;ng v&agrave; sexy hơn. Aspire 7 được trang bị hệ thống tản nhiệt mạnh mẽ bậc nhất trong ph&acirc;n kh&uacute;c, thừa hưởng c&ocirc;ng nghệ từ c&aacute;c d&ograve;ng m&aacute;y cao cấp hơn của Acer, c&ugrave;ng cấu h&igrave;nh đỉnh cao, gi&uacute;p cho người d&ugrave;ng c&oacute; thể vừa chơi game vừa l&agrave;m việc ở bất cứ l&uacute;c n&agrave;o. Thiết kế tối ưu trải nghiệm chơi game Hệ thống hai quạt tản nhiệt, 3 ống đồng fullsize, heatsink size lớn gi&uacute;p Acer Aspire 7 A715 tối ưu khả năng tản nhiệt. Bản lề thiết kế chắc chắn &iacute;t bị rung lắc khi chơi, c&oacute; khả năng mở g&oacute;c 180 độ gi&uacute;p bảo vệ m&aacute;y tốt hơn. Về b&agrave;n ph&iacute;m, chiếc laptop gaming n&agrave;y sở hữu b&agrave;n ph&iacute;m fullsize rộng r&atilde;i cho bạn thoải m&aacute;i sử d&ugrave;ng với độ nảy tốt gi&uacute;p bạn dễ d&agrave;ng nhập liệu, soạn thảo văn bản thoải m&aacute;i nhất c&oacute; thể. Phần touchpad nhanh nhạy cũng l&agrave; điểm cộng của chiếc laptop n&agrave;y. Được trang bị cảm ứng đa điểm n&ecirc;n người d&ugrave;ng c&oacute; thể sử dụng touchpad cho trải nghiệm được n&acirc;ng l&ecirc;n một tầm cao hơn B&ecirc;n cạnh đ&oacute; chuẩn kết nối Bluetooth 5.2 sẽ gi&uacute;p cho em laptop Acer Aspire 7 dễ d&agrave;ng kết nối với c&aacute;c thiết bị kh&ocirc;ng d&acirc;y với độ ổn định cao nhất.</p>', '1699.99', 100, 'laptop4.png', NULL, '2022-12-13 11:35:00'),
(7, 'LN20224893', 'Acer Nitro 5', 'C01', '<p>Đ&aacute;nh gi&aacute; chi tiết Laptop Gaming Acer Nitro 5 Tiger AN515 GEARVN-may-tinh-xach-tay-acer-nitro-5-an515-58-52sp Thiết kế tinh tế c&ugrave;ng những đường cắt đậm chất gaming. M&agrave;n h&igrave;nh IPS tần số qu&eacute;t cao, tr&agrave;n viền mang lại trải nghiệm game nhập vai ho&agrave;n hảo c&ugrave;ng đ&egrave;n LED RGB 4 Zone thay đổi được 16,7 triệu m&agrave;u cho game thủ thỏa sức s&aacute;ng tạo kh&ocirc;ng gian gaming ri&ecirc;ng biệt. GEARVN-may-tinh-xach-tay-acer-nitro-5-an515-58-52sp Một trong những d&ograve;ng Laptop gaming NVIDIA GeForce RTX 30/GTX16 Series l&agrave; c&ocirc;ng cụ tối ưu cho trường học v&agrave; chơi game. Được hỗ trợ bởi GPU từng đoạt giải thưởng v&agrave; c&ocirc;ng nghệ Max-Q, bạn sẽ c&oacute; được những chiếc m&aacute;y mỏng v&agrave; nhẹ gi&uacute;p đ&aacute;p ứng h&agrave;ng loạt c&aacute;c ứng dụng v&agrave; mọi tựa game. GEARVN-may-tinh-xach-tay-acer-nitro-5-an515-58-52sp Immersive Ray Tracing &nbsp;(đối với c&aacute;c sp d&ugrave;ng GTX16 series) Rt Cores thế hệ thứ 2 chuy&ecirc;n dụng cho ph&eacute;p d&ograve; tia nhanh, cho đồ họa ch&acirc;n thực v&agrave; nhập vai nhất. D&ograve; tia m&ocirc; phỏng h&agrave;nh vi vật l&yacute; của &aacute;nh s&aacute;ng để mang lại kết xuất thời gian thực, chất lượng điện ảnh cho ngay cả những tr&ograve; chơi trực quan cường độ cao nhất. GEARVN-may-tinh-xach-tay-acer-nitro-5-an515-58-52sp Bộ vi xử l&yacute; thế hệ 12 mới nhất của Intel được tạo ra để đẩy khung h&igrave;nh v&agrave; gi&uacute;p việc di chuyển trở n&ecirc;n dễ d&agrave;ng. Tốc độ Turbo \"l&ecirc;n đến\" 4.7 GHz với tối đa 14 l&otilde;i v&agrave; 20 luồng (t&ugrave;y từng option CPU), bạn sẽ đạt được mức hiệu suất m&agrave; bạn cần v&agrave; tự do chơi game; mang lại độ trễ thấp nhất v&agrave; khả năng đ&aacute;p ứng tốt nhất. Đ&aacute;p ứng tốt mục ti&ecirc;u nhanh hơn, phản ứng nhanh hơn v&agrave; tăng độ ch&iacute;nh x&aacute;c mục ti&ecirc;u th&ocirc;ng qua một bộ c&ocirc;ng nghệ mang t&iacute;nh c&aacute;ch mạng để đo lường v&agrave; tối ưu h&oacute;a độ trễ hệ thống. GEARVN-may-tinh-xach-tay-acer-nitro-5-an515-58-52sp Kh&aacute;m ph&aacute; c&aacute;c tr&ograve; chơi một c&aacute;ch chi tiết hơn với h&igrave;nh ảnh sắc n&eacute;t của m&agrave;n h&igrave;nh FHD IPS 15,6 inch. Tận hưởng trải nghiệm chơi game mượt m&agrave;, kh&ocirc;ng bị nh&ograve;e với tốc độ l&agrave;m mới từ 60Hz tới 144Hz v&agrave; thời gian phản hồi 3ms. Đ&acirc;y được xem l&agrave; laptop chơi game đ&atilde; được Acer tăng tỷ lệ m&agrave;n h&igrave;nh so với th&acirc;n m&aacute;y l&ecirc;n 80% với viền hẹp v&agrave; cung cấp m&agrave;u sắc sống động như thật bằng c&aacute;ch sử dụng bảng điều khiển từ 45% tới 72% NTSC, độ s&aacute;ng 300 nits. GEARVN-may-tinh-xach-tay-acer-nitro-5-an515-58-52sp Trải nghiệm chơi game phấn kh&iacute;ch hơn nhờ v&agrave;o đ&egrave;n nền b&agrave;n ph&iacute;m RGB 4 v&ugrave;ng. Giờ đ&acirc;y, game thủ c&oacute; thể t&ugrave;y chỉnh c&aacute;c thiết lập m&agrave;u sắc v&agrave; hiệu ứng dễ d&agrave;ng ngay tr&ecirc;n phần mềm Nitro Sense được t&iacute;ch hợp sẵn. Một trong d&ograve;ng laptop Acer được trang bị b&agrave;n ph&iacute;m mang đến những trải nghiệm, cảm gi&aacute;c bấm kh&ocirc;ng kh&aacute;c g&igrave; sử dụng b&agrave;n ph&iacute;m cơ. GEARVN-may-tinh-xach-tay-acer-nitro-5-an515-58-52sp Kết nối si&ecirc;u nhanh v&agrave; ổn định với c&ocirc;ng nghệ Wifi 6 mới nhất v&agrave; Killer&trade; Ethernet E2600 gi&uacute;p ổn định đường truyền internet trong suốt qu&aacute; tr&igrave;nh chiến game. Gaming Nitro 5 cũng bao gồm c&aacute;c cổng kết nối cao cấp kh&aacute;c. Cổng nguồn m&aacute;y t&iacute;nh nay đ&atilde; được bố tr&iacute; ở đằng sau m&aacute;y mang lại sự tiện lợi v&agrave; gọn g&agrave;ng trong suốt qu&aacute; tr&igrave;nh sử dụng.</p>', '899.99', 100, 'laptop3.png', NULL, '2022-12-13 11:32:33'),
(8, 'LN20223049', 'Acer Swift Edge', 'C01', '<p>Đ&aacute;nh gi&aacute; chi tiết laptop Acer Swift Edge SFA16 41 R3L6 Laptop Acer Swift Edge SFA16 41 R3L6 l&agrave; một si&ecirc;u phẩm mới của nh&agrave; Acer vừa mới ra mắt c&aacute;ch đ&acirc;y kh&ocirc;ng l&acirc;u. N&oacute; l&agrave; một trong những chiếc m&aacute;y t&iacute;nh x&aacute;ch tay được giới nh&acirc;n vi&ecirc;n văn ph&ograve;ng v&agrave; học sinh, sinh vi&ecirc;n săn đ&oacute;n nhất hiện nay nhờ hiệu năng ấn tượng v&agrave; vẻ ngo&agrave;i mỏng nhẹ, sang trọng. D&ugrave; l&agrave; một gương mặt mới trong l&agrave;ng laptop văn ph&ograve;ng nhưng Acer Swift Edge SFA16 41 R3L6 sớm đ&atilde; trở th&agrave;nh sự lựa chọn h&agrave;ng đầu của nhiều người. GEARVN - Laptop Acer Swift Edge SFA16 41 R3L6 Thiết kế sang trọng, hiện đại v&agrave; tinh tế Acer Swift Edge SFA16 41 R3L6 sở hữu vẻ ngo&agrave;i v&ocirc; c&ugrave;ng thanh tho&aacute;t v&agrave; sang trọng khi chỉ nặng 1.1 kg. Thiết kế nhỏ gọn sẽ l&agrave; một điểm cộng lớn khi bạn c&oacute; thể dễ d&agrave;ng bỏ v&agrave;o balo hay t&uacute;i x&aacute;ch mang đi khắp nơi đ&acirc;u. Vỏ m&aacute;y t&iacute;nh được l&agrave;m từ nh&ocirc;m-magie, mang đến độ bền bỉ gấp 4 lần so với c&aacute;c hợp kim nh&ocirc;m th&ocirc;ng thường. Kh&ocirc;ng những vậy, bạn sẽ kh&ocirc;ng c&ograve;n sợ những t&aacute;c động vật l&yacute; l&ecirc;n laptop khi phải di chuyển nhiều. GEARVN - Laptop Acer Swift Edge SFA16 41 R3L6 Ngo&agrave;i ra, Acer Swift Edge SFA16 được trang bị vi&ecirc;n pin 3-cell 54Wh, c&oacute; thể duy tr&igrave; thời gian on-screen tr&ecirc;n 17 giờ. Vi&ecirc;n pin n&agrave;y kh&aacute; phổ biến tr&ecirc;n thị trường v&agrave; được sử dụng tr&ecirc;n hầu hết c&aacute;c d&ograve;ng laptop Acer. Hỗ trợ sạc nhanh nay đ&atilde; được cập nhật tr&ecirc;n Acer Swift Edge, chỉ với 30 ph&uacute;t sạc bạn đ&atilde; c&oacute; thể sử dụng laptop trong v&ograve;ng 4 giờ đồng hồ.</p>', '999.99', 100, 'laptop2.png', NULL, '2022-12-13 11:31:17'),
(9, 'LN2022490', 'Airpods 2', 'C04', 'With plenty of talk and listen time, voice-activated Siri access, and an available wireless charging case, AirPods deliver an incredible wireless headphone experience. Simply take them out and they’re ready to use with all your devices.', '399.99', 100, 'airpods-2-wireless.png', NULL, NULL),
(10, 'LN2022492', 'Airpods 3', 'C04', 'With plenty of talk and listen time, voice-activated Siri access, and an available wireless charging case, AirPods deliver an incredible wireless headphone experience. Simply take them out and they’re ready to use with all your devices.', '469.99', 100, 'bluetooth-airpods-3.png', NULL, NULL),
(11, 'LN20224203', 'Airpods Pro', 'C04', 'With plenty of talk and listen time, voice-activated Siri access, and an available wireless charging case, AirPods deliver an incredible wireless headphone experience. Simply take them out and they’re ready to use with all your devices.', '699.99', 100, 'airpods-pro.png', NULL, NULL),
(13, 'LN20223809', 'Macbook Pro 14 M1 Pro', 'C03', '<p>The most powerful MacBook Pro ever is here. With the blazing-fast M1 Pro or M1 Max chip — the first Apple silicon designed for pros — you get groundbreaking performance and amazing battery life.</p>', '1799.99', 100, 'macbook-pro-14-inch-m1-pro-2021-bac.png', NULL, '2022-08-22 13:55:13'),
(14, 'LN20224383', 'Airpods Max', 'C04', 'The most powerful MacBook Pro ever is here. With the blazing-fast M1 Pro or M1 Max chip — the first Apple silicon designed for pros — you get groundbreaking performance and amazing battery life.', '1399.99', 100, 'bluetooth-airpods-max.png', NULL, NULL),
(15, 'LN20224839', 'AKKO 5087', 'C02', '<p>Đ&aacute;nh gi&aacute; chi tiết b&agrave;n ph&iacute;m AKKO 5087 RGB ASA White AKKO 5087 RGB ASA White l&agrave; sự kết hợp giữa thiết kế tinh tế với t&ocirc;ng m&agrave;u sang trọng c&ugrave;ng những c&ocirc;ng nghệ hiện đại mang đến trải nghiệm g&otilde; &ecirc;m tay, mượt m&agrave;. GEARVN chắc chắn sẽ l&agrave; một trong những d&ograve;ng b&agrave;n ph&iacute;m cơ m&agrave; bạn c&oacute; thể y&ecirc;n t&acirc;m sử dụng ở bất kỳ đ&acirc;u với những trải nghiệm tốt nhất. Thiết kế sang trọng, tinh tế c&ugrave;ng layout 87 ph&iacute;m bấm GEARVN-ban-phim-akko-5087-rgb-asa-white Những d&ograve;ng b&agrave;n ph&iacute;m Akko lu&ocirc;n khiến người d&ugrave;ng &ldquo;m&ecirc; mẩn&rdquo; qua những thiết kế tinh tế với những đường n&eacute;t v&agrave; chi tiết nhỏ nhất được gia c&ocirc;ng rất tỉ mỉ. AKKO 5087 RGB ASA White l&agrave; sự lựa chọn cho những g&oacute;c m&aacute;y theo phong c&aacute;ch &ldquo;Minimal&rdquo;, sở hữu t&ocirc;ng m&agrave;u trắng chủ đạo sẽ gi&uacute;p g&oacute;c m&aacute;y l&agrave;m việc v&agrave; giải tr&iacute; của bạn th&ecirc;m phần sang trọng. C&ugrave;ng layout 87 ph&iacute;m bấm nhưng vẫn đ&aacute;p ứng tốt mọi nhu cầu sử dụng, với kiểu d&aacute;ng b&agrave;n ph&iacute;m TKL bạn ho&agrave;n to&agrave;n c&oacute; thể cất gọn AKKO 5087 RGB ASA White trong balo c&ugrave;ng c&aacute;c thiết bị chuột m&aacute;y t&iacute;nh hoặc tai nghe để sử dụng ở bất kỳ đ&acirc;u. Keycaps nhựa PBT xuy&ecirc;n led c&ugrave;ng c&ocirc;ng nghệ in Double-shot GEARVN-ban-phim-akko-5087-rgb-asa-white Để tăng th&ecirc;m độc đ&aacute;o cho chiếc b&agrave;n ph&iacute;m của m&igrave;nh, Akko trang bị hệ thống Keycaps với chất liệu nhựa PBT si&ecirc;u bền theo thời gian, đ&aacute;p ứng cho mọi người d&ugrave;ng thường xuy&ecirc;n sử dụng b&agrave;n ph&iacute;m với tần suất g&otilde; ph&iacute;m cao m&agrave; kh&ocirc;ng cần lo lắng c&aacute;c k&yacute; tự sẽ bị phai, mờ. LED RGB đẹp mắt, hiệu ứng &aacute;nh s&aacute;ng sống động GEARVN-ban-phim-akko-5087-rgb-asa-white Kh&ocirc;ng dừng lại ở đ&oacute;, AKKO 5087 RGB ASA White được trang bị hệ thống LED RGB c&ugrave;ng nhiều hiệu ứng chiếu s&aacute;ng đẹp mắt. Bạn ho&agrave;n to&agrave;n c&oacute; thể tạo n&ecirc;n kh&ocirc;ng gian gaming đẹp mắt đầy sắc m&agrave;u RGB khi kết hợp với chuột gaming, tai nghe m&aacute;y t&iacute;nh v&agrave; nhiều phụ kiện kh&aacute;c để tăng th&ecirc;m s&aacute;ng tạo v&agrave; phấn khởi khi sử dụng m&aacute;y t&iacute;nh. AKKO 5087 RGB ASA White được sử dụng Switch độc quyền Bạn sẽ được trải nghiệm cảm gi&aacute;c g&otilde; ph&iacute;m độc đ&aacute;o, ấn tượng kh&ocirc;ng thể t&igrave;m được ở bất kỳ đ&acirc;u nhờ v&agrave;o switch độc quyền của Akko. T&ugrave;y v&agrave;o nhu cầu v&agrave; sở th&iacute;ch c&aacute; nh&acirc;n bạn c&oacute; thể lựa chọn Akko CS switch Jelly Pink hoặc Jelly Purple để c&oacute; cảm gi&aacute;c g&otilde; ph&iacute;m tốt nhất.</p>', '799.99', 100, 'keyboard_11.webp', NULL, '2022-12-13 11:29:17'),
(16, 'LN20223892', 'keychron k8 pink', 'C02', '<p>Đ&aacute;nh gi&aacute; chi tiết b&agrave;n ph&iacute;m cơ AKKO 3068B Plus World Tour Tokyo R2 AKKO 3068B Plus World Tour Tokyo R2 sở hữu layout 68 ph&iacute;m bấm v&ocirc; c&ugrave;ng nhỏ gọn, thiết kế độc đ&aacute;o với phối m&agrave;u &ldquo;World Tour Tokyo&rdquo; đẹp mắt. Đồng thời, ở bản n&acirc;ng cấp lần n&agrave;y Akko hứa hẹn sẽ mang đến cho người d&ugrave;ng d&ograve;ng sản phẩm b&agrave;n ph&iacute;m với những trải nghiệm g&otilde; ph&iacute;m c&oacute; một kh&ocirc;ng hai. Phối m&agrave;u độc đ&aacute;o c&ugrave;ng layout 68 ph&iacute;m bấm GEARVN-ban-phim-co-akko-3068b-plus-world-tour-tokyo-r2 Phối m&agrave;u độc đ&aacute;o, bắt mắt ch&iacute;nh l&agrave; những g&igrave; bạn c&oacute; thể nhận thấy được tr&ecirc;n thiết bị Gaming Gear đến từ Akko. Với phối m&agrave;u &ldquo;World Tour Tokyo&rdquo; AKKO 3068B Plus sẽ gi&uacute;p cho mọi kh&ocirc;ng gian từ l&agrave;m việc cho đến giải tr&iacute; th&ecirc;m phần lung linh. GEARVN-ban-phim-co-akko-3068b-plus-world-tour-tokyo-r2 Để c&oacute; thể mang đi v&agrave; sử dụng ở bất kỳ đ&acirc;u, AKKO 3068B Plus World Tour Tokyo R2 sở hữu layout 60% với 68 ph&iacute;m bấm được bố tr&iacute; th&ocirc;ng minh. Người chơi ho&agrave;n to&agrave;n c&oacute; thể cất gọn trong balo c&ugrave;ng c&aacute;c thiết bị ngoại vi như chuột m&aacute;y t&iacute;nh, tai nghe hoặc những phụ kiện đi k&egrave;m để tăng th&ecirc;m trải nghiệm. Sở hữu nhiều t&iacute;nh năng nổi bật GEARVN-ban-phim-co-akko-3068b-plus-world-tour-tokyo-r2 AKKO 3068B Plus World Tour Tokyo R2 được biết đến l&agrave; d&ograve;ng b&agrave;n ph&iacute;m cơ sở hữu nhiều n&acirc;ng cấp nhất để người chơi c&oacute; những trải nghiệm ri&ecirc;ng biệt như: Tương th&iacute;ch: Windows / MacOS / Linux (c&oacute; hỗ trợ MAC Function) Hỗ trợ NKRO / Multimedia / Macro / Kh&oacute;a ph&iacute;m Windows Stab pre-lubed được tinh chỉnh sẵn C&oacute; l&oacute;t ti&ecirc;u &acirc;m (FOAM) EVA d&agrave;y 3.5mm (nằm giữa plate v&agrave; PCB) C&ocirc;ng nghệ hỗ trợ thay n&oacute;ng switch (hotswap, 5 pin, TTC hotswap socket) Đ&egrave;n nền LED RGB với nhiều chế độ GEARVN-ban-phim-co-akko-3068b-plus-world-tour-tokyo-r2 Kết hợp với phối m&agrave;u độc đ&aacute;o, thiết kế nhỏ gọn ch&iacute;nh l&agrave; hệ thống đ&egrave;n nền LED RGB lấp l&aacute;nh với nhiều chế độ chiếu s&aacute;ng kh&aacute;c nhau. Bạn c&oacute; thể t&ugrave;y chọn nhiều chế độ LED th&ocirc;ng qua tổ hợp ph&iacute;m được t&iacute;ch hợp sẵn, tạo n&ecirc;n kh&ocirc;ng gian gaming đầy sắc m&agrave;u.</p>', '899.99', 100, 'keyboard_9.png', NULL, '2022-12-13 11:26:14'),
(17, 'LN20224839', 'keyboard k8', 'C02', '<p>B&agrave;n ph&iacute;m Keychron K8 RGB Hot swap - case nh&ocirc;m l&agrave; b&agrave;n ph&iacute;m cơ được thiết kế tối ưu để ph&ugrave; hợp với hầu hết mọi nhu cầu của người d&ugrave;ng. T&iacute;nh năng Hot swap cho ph&eacute;p người d&ugrave;ng dễ d&agrave;ng điều chỉnh b&agrave;n ph&iacute;m cơ của m&igrave;nh theo sở th&iacute;ch, c&aacute; nh&acirc;n h&oacute;a kh&ocirc;ng gian chơi game hay l&agrave;m việc. Thiết kế b&agrave;n ph&iacute;m đẹp Sở hữu kiểu d&aacute;ng b&agrave;n ph&iacute;m TKL tiện lợi, nhỏ gọn, n&oacute; kh&ocirc;ng những tiết kiệm kh&ocirc;ng gian l&agrave;m việc m&agrave; c&ograve;n gi&uacute;p sử dụng c&aacute;c n&uacute;t multimedia v&agrave; function cho cả hệ điều h&agrave;nh Mac v&agrave; Window dễ d&agrave;ng hơn. Phần đế b&agrave;n ph&iacute;m được gia c&ocirc;ng chủ yếu bằng chất liệu nh&ocirc;m cao cấp, Keychron K8 RGB mang đến vẻ ngo&agrave;i thanh mảnh, sang trọng nhưng lại v&ocirc; c&ugrave;ng chắc chắn. B&ecirc;n cạnh đ&oacute;, h&atilde;ng cũng cung cấp kh&aacute; nhiều loại switch đi k&egrave;m, để người d&ugrave;ng c&oacute; thể dễ d&agrave;ng lựa chọn v&agrave; t&ugrave;y th&iacute;ch thay đổi nhờ v&agrave;o t&iacute;nh năng Hot swap tr&ecirc;n b&agrave;n ph&iacute;m cơ. Do vậy, bạn c&oacute; thể dễ d&agrave;ng th&aacute;o lắp switch, keycaps hay custom b&agrave;n ph&iacute;m theo sở th&iacute;ch,...m&agrave; kh&ocirc;ng tốn qu&aacute; nhiều thời gian. Khả năng kết nối v&agrave; tương th&iacute;ch của Keychron K8 RGB B&agrave;n ph&iacute;m cơ Keychron K8 RGB đa dạng loại h&igrave;nh kết nối cho người d&ugrave;ng, từ kết nối c&oacute; d&acirc;y truyền thống th&ocirc;ng qua cổng kết nối USB Type-C đến Bluetooth 5.1 hiện đại. Thời lượng pin của Keychron K8 cũng v&ocirc; c&ugrave;ng ấn tượng, l&ecirc;n đến 4000mAh nhưng chỉ mất 3 tiếng cắm sạc. Bạn kh&ocirc;ng cần lo b&agrave;n ph&iacute;m hết pin giữa chừng, l&agrave;m gi&aacute;n đoạn c&ocirc;ng việc của bạn.</p>', '1399.99', 200, 'keyboard_8.png', NULL, '2022-12-13 11:23:23'),
(18, 'LN4384950', 'Acer Aspire', 'C01', '<p>Acer Aspire 5 l&agrave; một trong những d&ograve;ng laptop văn ph&ograve;ng b&aacute;n chạy nhất của laptop Acer. Sở hữu thiết kế mỏng, nhẹ v&agrave; gọn g&agrave;ng gi&uacute;p người d&ugrave;ng bỏ v&agrave;o balo v&agrave; t&uacute;i x&aacute;ch để đi v&agrave;o bất cứ đ&acirc;u. Với mức gi&aacute; phải chăng m&agrave; bạn đ&atilde; c&oacute; thể sở hữu một chiếc laptop cấu h&igrave;nh ổn định v&agrave; chất lượng như vậy th&igrave; ngại g&igrave; kh&ocirc;ng chốt đơn.</p>', '1099.99', 99, 'laptop1.jpg', '2022-08-21 07:16:09', '2022-12-13 11:21:26'),
(19, 'LN2347392', 'Macbook Air M2 Blue', 'C03', '<p>Easy to learn. Astoundingly powerful. Battery life beyond belief. Mac is designed to let you work, play, and create in ways you never imagined. It comes loaded with apps that are ready to go right out of the box. Free, regular software updates keep things up to date and running smoothly. And if you already have an iPhone, it feels familiar from the moment you turn it on.</p>', '1299.99', 100, 'apple-macbook-air-m2-2022-xanh.png', '2022-08-21 07:49:20', NULL),
(20, 'LN23497023', 'Macbook Pro 13inch M2', 'C03', '<p>The new M2 chip makes the 13‑inch MacBook Pro more capable than ever. The same compact design supports up to 20 hours of battery life1 and an active cooling system to sustain enhanced performance. Featuring a brilliant Retina display, a FaceTime HD camera, and studio‑quality mics, it&rsquo;s our most portable pro laptop.<br>Supercharged by Apple M2 chip.</p>\r\n<p>The M2 chip begins the next generation of Apple silicon, with even more of the speed and power efficiency introduced by M1. So you can rip through workflows with a more powerful 8-core CPU. Create stunning graphics with a lightning‑fast 10‑core GPU. Work with more streams of 4K and 8K ProRes video with the high-performance media engine. And do it all at once with up to 24GB of faster unified memory.</p>', '1399.99', 100, 'apple-macbook-pro-m2-2022-xam.png', '2022-08-21 07:51:07', NULL),
(21, 'LN32493824', 'Macbook Pro 13inch M2 Gray', 'C03', '<p>The new M2 chip makes the 13‑inch MacBook Pro more capable than ever. The same compact design supports up to 20 hours of battery life1 and an active cooling system to sustain enhanced performance. Featuring a brilliant Retina display, a FaceTime HD camera, and studio‑quality mics, it&rsquo;s our most portable pro laptop.<br>Supercharged by Apple M2 chip.</p>\r\n<p>The M2 chip begins the next generation of Apple silicon, with even more of the speed and power efficiency introduced by M1. So you can rip through workflows with a more powerful 8-core CPU. Create stunning graphics with a lightning‑fast 10‑core GPU. Work with more streams of 4K and 8K ProRes video with the high-performance media engine. And do it all at once with up to 24GB of faster unified memory.</p>', '1499.99', 150, 'macbook-pro-m2-2022-gray.png', '2022-08-21 07:52:16', NULL),
(22, 'LN4384952', 'Macbook Pro 16Inch Gray', 'C03', '<p>The most powerful MacBook Pro ever is here. With the blazing-fast M1 Pro or M1 Max chip &mdash; the first Apple silicon designed for pros &mdash; you get groundbreaking performance and amazing battery life. Add to that a stunning Liquid Retina XDR display, the best camera and audio ever in a Mac notebook, and all the ports you need. The first notebook of its kind, this MacBook Pro is a beast.M1 Pro and M1 Max scale the amazing M1 architecture to new heights &mdash; and for the first time, they bring a system on a chip (SoC) architecture to a pro notebook. Both have more CPU cores, more GPU cores, and more unified memory than M1. Along with a powerful Neural Engine for supercharged machine learning and upgraded media engines with ProRes support, M1 Pro and M1 Max allow pros to do things they never could before.</p>', '1599.99', 150, 'macbook-pro-14-m1-max-2021-xam.png', '2022-08-21 07:59:53', NULL),
(23, 'LN4384955', 'Akko 2', 'C02', '<p>The A13 Bionic chip makes everything more responsive, from messaging to web browsing to using multiple apps at once. Up to 20 percent faster GPU gives you the graphics performance you need. Perfect for playing immersive games and more. A more powerful Neural Engine drives machine learning&ndash;based features like Live Text in iPadOS 15. The A13 Bionic chip effortlessly powers advanced apps like Adobe Fresco and Procreate. With all-day battery life, iPad is ready to work or play for as long as you need it.</p>', '799.99', 98, 'ipad-gen-9-wifi-cellular-grey.png', '2022-08-21 08:04:12', NULL),
(24, 'LN20023494', 'Akko 7', 'C02', '<p>B&Agrave;N PH&Iacute;M LED CẦU VỒNG KBD-42- Phương ph&aacute;p ISOLUTION Chiều cao mỏng v&agrave; khoảng c&aacute;ch để g&otilde; ổn định- Bộ b&agrave;n ph&iacute;m đầy đủ chức năng như: giải tr&iacute;, nghe nhạc, next, back, home, phone...- 3 đ&egrave;n led: Num lock / Caps lock / Scroll lock | Trạng th&aacute;i đầu v&agrave;o | Hiển thị</p>', '689.99', 100, 'keyboard_7.png', '2022-08-21 08:05:41', '2022-12-13 11:18:44'),
(25, 'LN20349543', 'Akko 4', 'C02', '<p>&nbsp;L&agrave; bộ đ&ocirc;i b&agrave;n ph&iacute;m đầu ti&ecirc;n của Keychron sử dụng cấu tr&uacute;c ph&iacute;m Low-profile n&ecirc;n đem tới độ mỏng nhẹ v&ocirc; c&ugrave;ng ấn tượng, chỉ từ 17mm, bằng 1 nửa so với độ d&agrave;y của một chiếc b&agrave;n ph&iacute;m cơ th&ocirc;ng thường. C&ugrave;ng với đ&oacute; l&agrave; thiết kế vỏ nh&ocirc;m nguy&ecirc;n khối chắc chắn, d&agrave;y bản, cảm gi&aacute;c khi chạm v&agrave;o hai chiếc b&agrave;n ph&iacute;m n&agrave;y l&agrave; v&ocirc; c&ugrave;ng cao cấp, mặc d&ugrave; đ&acirc;y chỉ l&agrave; chiếc b&agrave;n ph&iacute;m tầm trung của Keychron.</p>', '1899.88', 99, 'keyboard_4.png', '2022-08-21 08:07:02', '2022-12-13 11:02:32'),
(31, 'LN438495076', 'acer 1', 'C01', '<p>Laptop Acer Nitro với t&iacute;nh bền bỉ vượt bậc khi được trang bị lớp vỏ nhựa chắc chắn c&ugrave;ng khối lượng kh&ocirc;ng qu&aacute; nặng cho một chiếc laptop gaming 2.2 kg v&agrave; d&agrave;y 23.9 mm, sẵn s&agrave;ng c&ugrave;ng bạn đi đến bất kỳ đ&acirc;u, phục vụ tốt cho cả nhu cầu c&ocirc;ng việc hay giải tr&iacute;, cho ph&eacute;p bạn chiến game ở khắp mọi nơi trong cuộc h&agrave;nh tr&igrave;nh. B&agrave;n ph&iacute;m Fullsize được thiết kế đ&egrave;n nền chuyển m&agrave;u RGB của laptop Acer được thiết kế tinh tế nhưng vẫn t&ocirc;n l&ecirc;n n&eacute;t mạnh mẽ của một chiếc gaming mạnh mẽ, với c&aacute;c ph&iacute;m c&oacute; độ nảy tốt, cho bạn thoải m&aacute;i sử dụng cả trong điều kiện &aacute;nh s&aacute;ng k&eacute;m m&agrave; kh&ocirc;ng lo nhầm lẫn.</p>', '1199.00', 195, 'laptop.png', '2022-08-21 17:02:29', '2022-12-13 11:16:19'),
(32, 'LN56782345', 'Ram samsung', 'C05', '<p>Thanh RAM 8GB này có tốc độ bus xung lên đến 2666 MT/s cùng khả năng tăng băng thông gấp 3 lần so với thế hệ DDR3. Đây là một thông số rất ấn tượng, đủ cho chiếc laptop của bạn thực hiện các tác vụ nặng như chơi game 3D, thiết kế đồ họa,.</p>', '150.00', 120, 'ram_1.png', NULL, NULL),
(33, 'LN34567219', 'Ram Corsair', 'C05', '<p>Ram Laptop Corsair Vengeance DDR4 4GB 2400MHz 1.2v CMSX4GX4M1A2400C16</p>', '129.00', 119, 'ram_2.png', NULL, NULL),
(34, 'LN67812345', 'RAM Kingston', 'C05', '<p>Ram PC Kingston 4GB 2666MHz DDR4 KVR26N19S6/4<p/>', '100.00', 99, 'ram_3.png', NULL, NULL),
(35, 'LN78023424', 'RAM Gigabyte', 'C05', '<p>Series: Gigabyte Memory 2666 ; Model: GP-GR26C16S8K1HU408 ; Loại RAM: DDR4 ; Dung lượng: 1x8GB ; Chuẩn Bus: 2666Hz.</p>', '125.00', 115, 'ram_4.png', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `tests`
--

CREATE TABLE `tests` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `user_accounts`
--

CREATE TABLE `user_accounts` (
  `id` int(10) UNSIGNED NOT NULL,
  `username` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `fullname` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `birthday` varchar(20) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `hobby` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `address` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `phone` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `avatar` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description` mediumtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` varchar(10) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `user_accounts`
--

INSERT INTO `user_accounts` (`id`, `username`, `fullname`, `birthday`, `hobby`, `password`, `address`, `phone`, `avatar`, `description`, `status`, `created_at`, `updated_at`) VALUES
(1, 'duongloi@gmail.com', 'Dương Thanh Lợi', NULL, NULL, 'e10adc3949ba59abbe56e057f20f883e', 'Thủ Dầu Một, Bình Dương', '0792761479', 'avatar1.jpg', NULL, '1', NULL, NULL),
(2, 'loi.duong.cit20@eiu.edu.vn', 'Dương Thanh Lợi', '17/09/1997', NULL, '$2y$10$JhVVMuENdLjUDUixsUMBEuT5vwwpglMXIw3GIE8/6dCVdQOuBoWr6', 'Quận 1, HCM', '0123456789', 'avatar1.jpg', NULL, '1', NULL, NULL),
(5, 'hau@gmail.com', NULL, NULL, NULL, '$2y$10$wt3CMsy/xswR5DXTnFBFcOn8MTdDT5G4fVt2Yg3t5tKN2f6iEAZp.', NULL, '0154963247', NULL, NULL, '0', NULL, NULL),
(6, 'dloi8185@gmail.com', 'Dương Thanh Lợi', '17/09/1997', 'cinema', '$2y$10$WvSqszRkEfTARpi05Mxr9OWdgwYK3CQ3.eOJt0fRVykzoOXm2o7eu', 'Tân an, thủ dầu một, bình dương', '07248641235', 'hoa.jpg', 'lorem ipsum dolor sit amet, consectetur adipiscing elit. integer elementum dui quis tortor luctus, eu ultricies nibh facilisis. donec porttitor sed leo nec...', '1', NULL, NULL),
(10, 'nhi.nguyenle.cit19@eiu.edu.vn', 'Nguyễn Lê Thảo Nhi', '08/11/2001', 'cinema', '$2y$10$k.E7V8uCIYVBkn7QOb2p4uEiiNPq.tQn21uNbJQZ1uhi6sY8sWUVu', 'Thuận An, Bình Dương', '0842593661', 'hoa123.jpg', NULL, '1', NULL, NULL),
(11, 'huynhnhathieu284@gmail.com', 'Nhật Hiếu', '28-04-1998', NULL, '$2y$10$tH0awywTwZkmzROc5iUd8elul1pUrC0fq.h1b94XEdxWNNFMRkiyG', '35 Nguyễn Quang Bích, quận Tân Bình, tp HCM', '0348572999', 'banner-01.jpg', NULL, '1', NULL, NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `accounts`
--
ALTER TABLE `accounts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `admin_accounts`
--
ALTER TABLE `admin_accounts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `blogs`
--
ALTER TABLE `blogs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`category_id`),
  ADD UNIQUE KEY `category_id_UNIQUE` (`category_id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`order_id`),
  ADD KEY `FK_customerID` (`customer_id`);

--
-- Indexes for table `order_details`
--
ALTER TABLE `order_details`
  ADD PRIMARY KEY (`order_detail_id`),
  ADD KEY `FK_orderID` (`order_id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD PRIMARY KEY (`id_reset`),
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`),
  ADD KEY `FK_categoryID` (`category_id`);

--
-- Indexes for table `tests`
--
ALTER TABLE `tests`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user_accounts`
--
ALTER TABLE `user_accounts`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `accounts`
--
ALTER TABLE `accounts`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `admin_accounts`
--
ALTER TABLE `admin_accounts`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `blogs`
--
ALTER TABLE `blogs`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `order_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `order_details`
--
ALTER TABLE `order_details`
  MODIFY `order_detail_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `password_resets`
--
ALTER TABLE `password_resets`
  MODIFY `id_reset` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=36;

--
-- AUTO_INCREMENT for table `tests`
--
ALTER TABLE `tests`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `user_accounts`
--
ALTER TABLE `user_accounts`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `orders`
--
ALTER TABLE `orders`
  ADD CONSTRAINT `FK_customerID` FOREIGN KEY (`customer_id`) REFERENCES `user_accounts` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `order_details`
--
ALTER TABLE `order_details`
  ADD CONSTRAINT `FK_orderID` FOREIGN KEY (`order_id`) REFERENCES `orders` (`order_id`) ON DELETE CASCADE;

--
-- Constraints for table `products`
--
ALTER TABLE `products`
  ADD CONSTRAINT `FK_categoryID` FOREIGN KEY (`category_id`) REFERENCES `categories` (`category_id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
