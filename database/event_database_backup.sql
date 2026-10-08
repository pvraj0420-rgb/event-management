-- phpMyAdmin SQL Dump
-- Event Management System Database Backup
-- Host: 127.0.0.1
-- Generation Time: Apr 11, 2026
-- Server version: 10.4.32-MariaDB / MySQL Server Compatible
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `event`
--
CREATE DATABASE IF NOT EXISTS `event` DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci;
USE `event`;

-- --------------------------------------------------------

--
-- Table structure for table `admins`
--

CREATE TABLE IF NOT EXISTS `admins` (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `email` varchar(255) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `admins`
--

INSERT INTO `admins` (`id`, `email`, `username`, `password`, `created_at`, `updated_at`) VALUES
(1, 'admin@gmail.com', 'admin', '$2y$10$//sXsoZQ2wUMmUPhRxbDcufp4/N6IWLvZjFkb4hNacZ5HmpW81LmW', '2026-04-10 09:58:41', '2026-04-11 00:45:33')
ON DUPLICATE KEY UPDATE `email`=VALUES(`email`);

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE IF NOT EXISTS `categories` (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `name`, `created_at`, `updated_at`) VALUES
(1, 'Internship', '2026-04-10 10:00:56', '2026-04-10 12:27:46'),
(2, 'Social', '2026-04-10 10:01:12', '2026-04-10 10:01:12'),
(3, 'Marketing', '2026-04-10 10:01:23', '2026-04-10 10:01:23'),
(4, 'Technical', '2026-04-10 10:01:37', '2026-04-10 10:01:37')
ON DUPLICATE KEY UPDATE `name`=VALUES(`name`);

-- --------------------------------------------------------

--
-- Table structure for table `events`
--

CREATE TABLE IF NOT EXISTS `events` (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `title` varchar(255) NOT NULL,
  `description` text DEFAULT NULL,
  `category` varchar(255) DEFAULT NULL,
  `date` date DEFAULT NULL,
  `start_time` time DEFAULT NULL,
  `end_time` time DEFAULT NULL,
  `location` varchar(255) DEFAULT NULL,
  `venue` varchar(255) DEFAULT NULL,
  `address` varchar(255) DEFAULT NULL,
  `contact` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `speaker_name` varchar(255) DEFAULT NULL,
  `image` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `events`
--

INSERT INTO `events` (`id`, `title`, `description`, `category`, `date`, `start_time`, `end_time`, `location`, `venue`, `address`, `contact`, `email`, `speaker_name`, `image`, `created_at`, `updated_at`) VALUES
(1, 'Social Profit from Venture Gathering', 'This category focuses on how businesses and startups can generate both financial returns and positive social impact. It explores sustainable business models, ethical investing, and purpose-driven entrepreneurship. Attendees will learn how to balance profit with responsibility in modern markets. Industry leaders and social entrepreneurs will share real-world success stories. The event also highlights funding opportunities for impact-driven ventures. It is ideal for founders, investors, and changemakers.', 'Internship', '2026-07-13', '18:30:00', '20:00:00', 'New Tork City', 'Cineplax Hall', 'Apple Upper West Side, Brooklyn', '+88 0123 654 99', 'info@gmail.com', 'Esther Howard', '1775843847.jpg', '2026-04-10 12:27:27', '2026-04-10 12:28:04'),
(2, 'Modern Marketing Summit Sydney 2026', 'This category centers on the latest trends and strategies in digital marketing and branding. It covers topics like social media marketing, AI in marketing, customer engagement, and data-driven decision-making. Experts will discuss innovative tools and techniques shaping the future of marketing. Participants will gain insights into global market trends and consumer behavior. Networking opportunities with marketing professionals are a key highlight. Perfect for marketers, business owners, and creative strategists.', 'Marketing', '2026-07-15', '14:00:00', '15:30:00', 'New Tork City', 'Cineplax Hall', 'Apple Upper West Side, Brooklyn', '+88 0123 654 99', 'info@gmail.com', 'Jenny Wilson', '1775843982.jpg', '2026-04-10 12:29:42', '2026-04-10 12:29:42'),
(3, 'Home Life Open Entryway Open Occasion', 'This category represents open and inclusive community-based events focused on lifestyle, home improvement, and daily living. It encourages participation from a wide audience without strict entry barriers. The event may include exhibitions, workshops, and interactive sessions. It promotes creativity, comfort, and modern living solutions. Attendees can explore ideas related to home design, wellness, and community engagement. Suitable for families, individuals, and hobby enthusiasts.', 'Social', '2026-07-17', '15:00:00', '16:30:00', 'New Tork City', 'Cineplax Hall', 'Apple Upper West Side, Brooklyn', '+88 0123 654 99', 'info@gmail.com', 'Arlene McCoy', '1775844072.jpg', '2026-04-10 12:31:12', '2026-04-10 12:31:12'),
(4, 'Blockchain Web3 Beyond Cryptocurrency', 'This category explores the broader applications of blockchain technology beyond just cryptocurrencies. It includes Web3 innovations, decentralized applications (dApps), NFTs, and smart contracts. Experts will discuss how blockchain is transforming industries like finance, healthcare, and supply chain. The event focuses on the future of decentralized internet and digital ownership. Attendees will gain both technical and business insights. Ideal for developers, tech enthusiasts, and forward-thinking entrepreneurs.', 'Technical', '2026-07-18', '18:00:00', '19:30:00', 'New Tork City', 'Cineplax Hall', 'Apple Upper West Side, Brooklyn', '+88 0123 654 99', 'info@gmail.com', 'Robert Fox', '1775844183.jpg', '2026-04-10 12:33:03', '2026-04-10 12:33:03')
ON DUPLICATE KEY UPDATE `title`=VALUES(`title`);

-- --------------------------------------------------------

--
-- Table structure for table `speakers`
--

CREATE TABLE IF NOT EXISTS `speakers` (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  `designation` varchar(255) NOT NULL,
  `description` text NOT NULL,
  `image` varchar(255) DEFAULT NULL,
  `email` varchar(255) NOT NULL,
  `phone` varchar(255) NOT NULL,
  `fax` varchar(255) DEFAULT NULL,
  `experience` varchar(255) NOT NULL,
  `skill1_name` varchar(255) DEFAULT NULL,
  `skill1_percent` varchar(255) DEFAULT NULL,
  `skill2_name` varchar(255) DEFAULT NULL,
  `skill2_percent` varchar(255) DEFAULT NULL,
  `skill3_name` varchar(255) DEFAULT NULL,
  `skill3_percent` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `speakers`
--

INSERT INTO `speakers` (`id`, `name`, `designation`, `description`, `image`, `email`, `phone`, `fax`, `experience`, `skill1_name`, `skill1_percent`, `skill2_name`, `skill2_percent`, `skill3_name`, `skill3_percent`, `created_at`, `updated_at`) VALUES
(1, 'Dianne Russell', 'Innovative Speaker', 'Dianne Russell is a highly creative and forward-thinking speaker with a strong focus on innovation and leadership. She has helped organizations transform their business strategies through modern digital solutions. Her sessions are known for being practical, engaging, and result-oriented. She inspires professionals to embrace change and stay competitive in fast-moving industries. With years of experience, she brings real-world insights to every stage. Her ability to connect with audiences makes her a sought-after speaker.', '1775835458.jpg', 'info@gmail.com', '+(256) 85695-75625', '+6325678913', 'More Than 9 Years', 'Public Speaking', '85', 'Leadership', '90', 'Innovation Strategy', '90', '2026-04-10 10:07:38', '2026-04-10 10:07:38'),
(2, 'Jenny Wilson', 'Innovative Speaker', 'Jenny Wilson is an expert in marketing innovation and brand development with a passion for helping businesses grow. She delivers powerful sessions on understanding modern customer behavior and digital trends. Her approach combines creativity with data-driven strategies to achieve impactful results. She has worked with various brands to improve their market presence. Jenny’s communication style is clear, engaging, and highly practical. She empowers teams to build strong and lasting brand identities.', '1775835706.jpg', 'info@gmail.com', '+(256) 85695-75625', '+6325678913', 'More Than 8 Years', 'Digital Marketing', '92', 'Brand Straegy', '89', 'Communication', '90', '2026-04-10 10:11:46', '2026-04-10 10:12:35'),
(3, 'Esther Howard', 'Innovative Speaker', 'Esther Howard specializes in entrepreneurship and startup growth, guiding young innovators toward success. He has mentored numerous startups, helping them scale effectively in highly competitive markets. His sessions focus on building strong business foundations and developing sustainable growth strategies. He shares real-life experiences that inspire and motivate aspiring entrepreneurs. He strongly emphasizes innovation, calculated risk-taking, and continuous learning. Through his engaging talks, he encourages individuals to transform their ideas into successful and impactful ventures.', '1775836091.jpg', 'info@gmail.com', '+(256) 85695-75625', '+6325678913', 'More Than 7 Years', 'Entrepreneurship', '88', 'Business Strategy', '85', 'Startup Mentoring', '87', '2026-04-10 10:18:11', '2026-04-10 10:18:11'),
(4, 'Robert Fox', 'Innovative Speaker', 'Robert Fox is a technology-driven speaker with deep expertise in emerging technologies like AI and blockchain. He explains complex technical concepts in a simple and understandable way. His sessions focus on how technology is shaping the future of industries. Robert has worked on various innovative tech projects across different sectors. He encourages businesses to adopt digital transformation for growth. His knowledge and clarity make him a favorite among tech audiences.', '1775842567.jpg', 'info@gmail.com', '+(256) 85695-75625', '+6325678913', 'More Than 10 Years', 'Artificial Intelligence', '92', 'Blockchain', '90', 'Tech Innovation', '85', '2026-04-10 12:06:07', '2026-04-10 12:06:07'),
(5, 'Eleanor Pena', 'Innovative Speaker', 'Eleanor Pena is a leadership expert known for her impactful corporate training sessions. She focuses on developing strong teams and improving workplace productivity. Her sessions include practical techniques for conflict resolution and team management. Eleanor has helped organizations build positive and efficient work environments. She believes in empowering leaders to guide their teams effectively. Her engaging style ensures that participants gain valuable insights and skills.', '1775843272.jpg', 'info@gmail.com', '+(256) 85695-75625', '+6325678913', 'More Than 9 Years', 'Team Management', '91', 'Leadership', '85', 'Confilct Resolution', '89', '2026-04-10 12:17:52', '2026-04-10 12:17:52'),
(6, 'Arlene McCoy', 'Innovative Speaker', 'Arlene McCoy is a motivational speaker dedicated to personal growth and mindset transformation. She inspires individuals to overcome challenges and achieve their full potential. Her sessions focus on productivity, goal setting, and positive thinking. Arlene combines practical advice with motivational storytelling. She has helped many professionals improve their performance and confidence. Her energy and passion make her sessions highly engaging and impactful.', '1775843414.jpg', 'info@gmail.com', '+(256) 85695-75625', '+6325678913', 'More Than 7 Years', 'Motivation', '85', 'Productivity', '87', 'Persoal Growth', '95', '2026-04-10 12:20:14', '2026-04-10 12:20:14'),
(7, 'Jerome Bell', 'Innovative Speaker', 'Jerome Bell is a financial expert specializing in investment strategies and wealth management. He has guided individuals and businesses toward financial stability and growth. His sessions simplify complex financial concepts for better understanding. Jerome focuses on smart decision-making and risk management. He shares practical insights based on real-world financial scenarios. His expertise helps audiences plan and secure their financial future effectively.', '1775843560.jpg', 'info@gmail.com', '+(256) 85695-75625', '+6325678913', 'More Than 10 Years', 'Finance', '80', 'Risk Management', '85', 'investment stragey', '88', '2026-04-10 12:22:40', '2026-04-10 12:22:40'),
(8, 'Floyd Miles', 'Innovative Speaker', 'Floyd Miles is a dynamic speaker known for his expertise in communication and leadership development. He helps individuals improve their interpersonal and professional skills. His sessions focus on building confidence and effective communication strategies. Floyd has worked with organizations to enhance team performance and collaboration. He believes strong communication is key to success in any field. His engaging style keeps audiences motivated and involved throughout.', '1775843704.jpg', 'info@gmail.com', '+(256) 85695-75625', '+6325678913', 'More Than 8 Years', 'Communication', '90', 'Leadership', '92', 'Organizational  Devlopment', '88', '2026-04-10 12:25:04', '2026-04-10 12:25:04')
ON DUPLICATE KEY UPDATE `name`=VALUES(`name`);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `phone` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `remember_token` varchar(100) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `users_email_unique` (`email`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `phone`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Vraj Patel', 'patelvraj0410@gmail.com', NULL, '+919426362685', '$2y$10$2SV85x/0r1iwjMgk8zuJtOYQpU7JHq5m.lWLAYoLWGz.92nPXEEe2', NULL, '2026-04-10 13:06:22', '2026-04-10 13:06:22'),
(3, 'jay patel', 'jay@gmail.com', NULL, '7894561230', '$2y$10$pRy7gZa4VJd0Fa7ITrkFdetKUvueIz/eK5YhXHN.1ivKeOlRyXOWe', NULL, '2026-04-11 01:21:06', '2026-04-11 01:21:56')
ON DUPLICATE KEY UPDATE `name`=VALUES(`name`);

-- --------------------------------------------------------

--
-- Table structure for table `bookings`
--

CREATE TABLE IF NOT EXISTS `bookings` (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `user_id` bigint(20) UNSIGNED DEFAULT NULL,
  `username` varchar(255) DEFAULT NULL,
  `event_id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `mobile` varchar(255) NOT NULL,
  `tickets` int(11) NOT NULL,
  `total_amount` decimal(10,2) DEFAULT NULL,
  `payment_method` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `payment_status` varchar(255) NOT NULL DEFAULT 'pending',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `bookings`
--

INSERT INTO `bookings` (`id`, `user_id`, `username`, `event_id`, `name`, `email`, `mobile`, `tickets`, `total_amount`, `payment_method`, `created_at`, `updated_at`, `payment_status`) VALUES
(1, 1, 'Vraj Patel', 1, 'Vraj Patel', 'patelvraj0410@gmail.com', '9426362685', 9, 261.00, 'card', '2026-04-10 13:38:58', '2026-04-10 14:01:30', 'paid'),
(2, 1, 'Vraj Patel', 4, 'Vraj Patel', 'patelvraj0410@gmail.com', '9426362685', 1, 29.00, 'cash', '2026-04-10 13:48:15', '2026-04-10 14:01:34', 'paid')
ON DUPLICATE KEY UPDATE `name`=VALUES(`name`);

-- --------------------------------------------------------

--
-- Table structure for table `invoices`
--

CREATE TABLE IF NOT EXISTS `invoices` (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `invoice_no` varchar(255) NOT NULL,
  `booking_id` bigint(20) UNSIGNED DEFAULT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `event_id` bigint(20) UNSIGNED NOT NULL,
  `amount` double NOT NULL,
  `status` varchar(255) NOT NULL DEFAULT 'paid',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE IF NOT EXISTS `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `uuid` varchar(255) NOT NULL,
  `connection` text NOT NULL,
  `queue` text NOT NULL,
  `payload` longtext NOT NULL,
  `exception` longtext NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp(),
  PRIMARY KEY (`id`),
  UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE IF NOT EXISTS `migrations` (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `migration` varchar(255) NOT NULL,
  `batch` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_reset_tokens_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(5, '2026_03_13_062559_create_admins_table', 1),
(6, '2026_03_17_060641_create_categories_table', 1),
(7, '2026_03_19_065200_create_events_table', 1),
(8, '2026_03_29_135446_create_speakers_table', 1),
(9, '2026_04_09_053504_create_bookings_table', 1),
(10, '2026_04_10_184341_add_payment_fields_to_bookings_table', 2),
(11, '2026_04_15_064449_create_invoices_table', 3),
(12, '2026_05_18_060150_add_booking_id_to_invoices_table', 3)
ON DUPLICATE KEY UPDATE `migration`=VALUES(`migration`);

-- --------------------------------------------------------

--
-- Table structure for table `password_reset_tokens`
--

CREATE TABLE IF NOT EXISTS `password_reset_tokens` (
  `email` varchar(255) NOT NULL,
  `token` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`email`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `personal_access_tokens`
--

CREATE TABLE IF NOT EXISTS `personal_access_tokens` (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `tokenable_type` varchar(255) NOT NULL,
  `tokenable_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `token` varchar(64) NOT NULL,
  `abilities` text DEFAULT NULL,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `expires_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
