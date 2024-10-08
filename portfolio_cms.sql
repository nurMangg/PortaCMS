-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Oct 08, 2024 at 09:49 AM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `portfolio_cms`
--

-- --------------------------------------------------------

--
-- Table structure for table `blog`
--

CREATE TABLE `blog` (
  `id` int(10) UNSIGNED NOT NULL,
  `title` varchar(255) NOT NULL,
  `image` varchar(255) NOT NULL,
  `contents` longtext NOT NULL,
  `url` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `client`
--

CREATE TABLE `client` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `logo` varchar(255) NOT NULL,
  `address` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `contacts`
--

CREATE TABLE `contacts` (
  `id` int(10) UNSIGNED NOT NULL,
  `link_maps` longtext DEFAULT NULL,
  `receive_email` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `contacts`
--

INSERT INTO `contacts` (`id`, `link_maps`, `receive_email`, `created_at`, `updated_at`) VALUES
(1, 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d7920.4920691039415!2d109.05255019429734!3d-6.980268522082174!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e6fbc44d1d8bb2f%3A0xd8c62cfce15cf489!2sPesarean%2C%20Kec.%20Pagerbarang%2C%20Kabupaten%20Tegal%2C%20Jawa%20Tengah!5e0!3m2!1sid!2sid!4v1728290475372!5m2!1sid!2sid', 'rohmanuyeoke@gmail.com', '2024-10-07 01:43:14', '2024-10-07 01:43:14');

-- --------------------------------------------------------

--
-- Table structure for table `download`
--

CREATE TABLE `download` (
  `id` int(10) UNSIGNED NOT NULL,
  `title` varchar(255) NOT NULL,
  `cover_image` varchar(255) NOT NULL,
  `short_description` varchar(255) NOT NULL,
  `upload` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `download`
--

INSERT INTO `download` (`id`, `title`, `cover_image`, `short_description`, `upload`, `created_at`, `updated_at`) VALUES
(1, 'Download CV Resume', 'HrOUioAPeXwO2qo7mZlHzEmD6I9J1F-metaY3YucG5n-.png', 'Career summary and professional skills. Click to view or download', '4l0PrjfLsYSnGfUohbK5g4deBSWMCc-metaQ1YuIE51ciBSb2htYW4gKEVOKS5wZGY=-.pdf', '2024-10-07 23:26:46', '2024-10-07 23:26:46'),
(2, 'Download Portfolio Project', 'yPc61ej7lu5YDggSUazkTr34bB3J2N-metacG9ydGZvbGlvICgxKS5wbmc=-.png', 'Check out the best projects I\'ve worked on. Click to view or download', 'MyDHanqpY5coM4iVruWlJEbZfac95D-metaUG9ydGZvbGlvIC0gTnVyIFJvaG1hbi5wZGY=-.pdf', '2024-10-07 23:27:45', '2024-10-07 23:27:45');

-- --------------------------------------------------------

--
-- Table structure for table `education`
--

CREATE TABLE `education` (
  `id` int(10) UNSIGNED NOT NULL,
  `institution` varchar(255) NOT NULL,
  `degree` varchar(255) NOT NULL,
  `start_date` varchar(255) NOT NULL,
  `end_date` varchar(255) DEFAULT 'Present',
  `description` longtext NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `education`
--

INSERT INTO `education` (`id`, `institution`, `degree`, `start_date`, `end_date`, `description`, `created_at`, `updated_at`) VALUES
(1, 'Bangkit Academy Batch 6', 'Mobile Development', 'Feb 2024', 'Jul 2024', '- Develop functional and responsive Android applications.\n- Apply best practices in mobile app development.\n- Utilize modern development tools and frameworks effectively.\n- Work collaboratively in a team on a capstone project to create and deploy mobile applications.\n- Learn soft skills and attend English classes.', '2024-10-06 21:53:32', '2024-10-06 21:53:32'),
(2, 'Politeknik Harapan Bersama Tegal', 'Informatics Engineering', 'Sep 2021', NULL, '- Conducted a community service programme by creating a village profile website.\n- Relevant Coursework:\nWeb Development, Mobile Development, Database System, Machine Learning, Intelligent System Programming.', '2024-10-06 21:54:23', '2024-10-06 21:54:23');

-- --------------------------------------------------------

--
-- Table structure for table `experience`
--

CREATE TABLE `experience` (
  `id` int(10) UNSIGNED NOT NULL,
  `company` varchar(255) NOT NULL,
  `position` varchar(255) NOT NULL,
  `start_date` varchar(255) NOT NULL,
  `end_date` varchar(255) DEFAULT 'Present',
  `description` longtext NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `experience`
--

INSERT INTO `experience` (`id`, `company`, `position`, `start_date`, `end_date`, `description`, `created_at`, `updated_at`) VALUES
(1, 'CV . Life Computer', 'Computer Technician', 'Feb 2020', 'Mar 2020', 'As a Computer Technician at Life Computer in Tegal, Indonesia, I was responsible for assembling computers, diagnosing and troubleshooting hardware and software issues, and installing operating systems and software. This role involved ensuring that systems were properly configured and functioning efficiently, providing technical support, and resolving a variety of computer-related problems to meet clients\' needs.', '2024-10-06 23:04:31', '2024-10-06 23:04:31'),
(2, 'CV. Vodeco Digital Mediatama', 'Web Designer', 'Jun 2022', 'Mar 2023', 'As a Web Designer at Vodeco Digital Mediatama in Tegal, Indonesia, I was contracted to create websites using the WordPress CMS, focusing on company profiles and business sites. I was proficient in utilizing popular plugins like Themify Ultra and Elementor to design visually appealing and functional websites, ensuring they aligned with clients\' branding and business objectives. Additionally, I was responsible for crafting website designs that were user-friendly and optimized for performance.', '2024-10-06 23:11:07', '2024-10-06 23:11:07'),
(3, 'PT. Optima Multi Sinergi', 'Internship', 'Aug 2024', NULL, 'As a Content Creator and Web Developer at PT. Optima Multi Sinergi, I was responsible for developing and managing web content that aligned with the company\'s brand and digital strategy. This included creating engaging website designs, coding, and implementing web development solutions to enhance user experience. I also contributed to content creation for websites, ensuring high-quality, optimized, and relevant materials for various business purposes.', '2024-10-06 23:12:18', '2024-10-06 23:12:18');

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
-- Table structure for table `media`
--

CREATE TABLE `media` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `model_type` varchar(255) NOT NULL,
  `model_id` bigint(20) UNSIGNED NOT NULL,
  `uuid` char(36) DEFAULT NULL,
  `collection_name` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `file_name` varchar(255) NOT NULL,
  `mime_type` varchar(255) DEFAULT NULL,
  `disk` varchar(255) NOT NULL,
  `conversions_disk` varchar(255) DEFAULT NULL,
  `size` bigint(20) UNSIGNED NOT NULL,
  `manipulations` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_bin NOT NULL CHECK (json_valid(`manipulations`)),
  `custom_properties` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_bin NOT NULL CHECK (json_valid(`custom_properties`)),
  `generated_conversions` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_bin NOT NULL CHECK (json_valid(`generated_conversions`)),
  `responsive_images` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_bin NOT NULL CHECK (json_valid(`responsive_images`)),
  `order_column` int(10) UNSIGNED DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `media`
--

INSERT INTO `media` (`id`, `model_type`, `model_id`, `uuid`, `collection_name`, `name`, `file_name`, `mime_type`, `disk`, `conversions_disk`, `size`, `manipulations`, `custom_properties`, `generated_conversions`, `responsive_images`, `order_column`, `created_at`, `updated_at`) VALUES
(7, 'App\\Models\\Profile', 1, '107efaa8-434a-454b-97f2-737e3c7a39a3', 'profile_images', 'profil 2.png', 'J7HDJ5E88I17I2MjnKDlgBHmwpja0d-metacHJvZmlsIDIucG5n-.png', 'image/png', 'public', 'public', 16884, '[]', '[]', '[]', '[]', 1, '2024-10-07 20:47:24', '2024-10-07 20:47:24');

-- --------------------------------------------------------

--
-- Table structure for table `messages`
--

CREATE TABLE `messages` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `message` longtext NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

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
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(10, '2024_10_07_041826_create_education_table', 3),
(12, '2024_10_07_050137_create_experiences_table', 4),
(13, '2024_10_07_061401_create_skills_table', 5),
(14, '2024_10_07_070157_create_clients_table', 6),
(22, '2024_10_07_074243_create_downloads_table', 9),
(23, '2024_10_07_081510_create_contacts_table', 10),
(24, '2024_10_07_083039_create_messages_table', 11),
(25, '2024_10_07_083049_create_testimonials_table', 11),
(26, '2024_10_07_092529_create_what_i_m_dos_table', 12),
(28, '2024_10_07_025438_create_profile_table', 13),
(29, '2024_10_08_030751_create_media_table', 14),
(31, '2024_10_07_070629_create_portfolios_table', 15),
(33, '2024_10_07_072003_create_blogs_table', 16);

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
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
-- Table structure for table `portfolio`
--

CREATE TABLE `portfolio` (
  `id` int(10) UNSIGNED NOT NULL,
  `title` varchar(255) NOT NULL,
  `part_of` varchar(255) NOT NULL,
  `file_upload` varchar(255) DEFAULT NULL,
  `url` varchar(255) DEFAULT NULL,
  `description` longtext DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `portfolio`
--

INSERT INTO `portfolio` (`id`, `title`, `part_of`, `file_upload`, `url`, `description`, `created_at`, `updated_at`) VALUES
(1, 'RentCar Sumbawa Samota', 'Wordpress', 'J6y4nTaZp8Ow5bWJAO4jm8M6vl3U6d-metaMTQucG5n-.png', 'https://sumbawasamota.web.id/', NULL, '2024-10-07 22:04:10', '2024-10-07 22:39:09'),
(2, 'BPA Institute', 'Wordpress', 'bsYNBedjNzg9qEnXyDCBNNwsgMwHRb-metaMTMucG5n-.png', 'https://bpainstitute.com/', NULL, '2024-10-07 22:05:46', '2024-10-07 22:05:46'),
(3, 'PT. Grounding Teknik Indonesia', 'Wordpress', 'gI7RrL0F1SmLDtIEekwkVsBPLTgt9H-metaMTIucG5n-.png', 'https://doktergrounding.com/', NULL, '2024-10-07 22:06:50', '2024-10-07 22:06:50'),
(4, 'Mahkota Regency Hospital', 'Wordpress', '4HygjSHymHhGARSUIn9gGA34hlRL1Q-metaMTEucG5n-.png', 'https://mahkotaregency.com/', NULL, '2024-10-07 22:07:52', '2024-10-07 22:07:52'),
(5, 'Starlight Production', 'Wordpress', '3IbOe2pCqBklqoeh5KLyUhr39zXgVq-metaMTAucG5n-.png', 'https://starlightproduction.id/', NULL, '2024-10-07 22:08:58', '2024-10-07 22:08:58'),
(6, 'Raden Pattas Residence', 'Wordpress', 'j5nkHmFbtdwX69MzKfytmoqrIJrqGr-metaOS5wbmc=-.png', 'https://radenpattasresidence.com/', NULL, '2024-10-07 22:09:54', '2024-10-07 22:09:54'),
(7, 'Cancer Predict App', 'AI Programming', 'RFqgju6GauBAYIzD6zyO0u5RKBqxhL-metaMTcucG5n-.png', '#', NULL, '2024-10-07 22:11:00', '2024-10-07 22:11:00'),
(8, 'Decision Making Suplemen Fitness', 'Web Development', 'XFtryAxp46wxFZqVaSN7ZmLv8H5eeY-metaMi5wbmc=-.png', '#', NULL, '2024-10-07 22:11:39', '2024-10-07 22:11:39'),
(9, 'Digital Library - CRUD', 'Web Development', 'ZxJdhfz256uqyD9XX3sqpqES1hQHB7-metaMTYucG5n-.png', '#', NULL, '2024-10-07 22:12:22', '2024-10-07 22:12:22'),
(10, 'KGenz - System Detection Stress Level', 'AI Programming', 'BjSHT8JVyPmiHOEKpvWb9hgH36KKPv-metaMTUucG5n-.png', '#', NULL, '2024-10-07 22:13:10', '2024-10-07 22:13:10'),
(11, 'Brawlhalla', 'Application', '7H4mZqjV3X4lHbtZiUiLaQfedytQgM-metacHJvamVjdC00LnBuZw==-.png', '#', NULL, '2024-10-07 22:13:43', '2024-10-07 22:13:43');

-- --------------------------------------------------------

--
-- Table structure for table `profile`
--

CREATE TABLE `profile` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `spesific_skill` varchar(255) NOT NULL,
  `birth_date` date NOT NULL,
  `email` varchar(255) NOT NULL,
  `phone` varchar(255) NOT NULL,
  `address` varchar(255) NOT NULL,
  `facebook_url` longtext DEFAULT NULL,
  `instagram_url` longtext DEFAULT NULL,
  `twitter_url` longtext DEFAULT NULL,
  `linkedin_url` longtext DEFAULT NULL,
  `github_url` longtext DEFAULT NULL,
  `youtube_url` longtext DEFAULT NULL,
  `profile_image` varchar(255) NOT NULL,
  `description` longtext NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `profile`
--

INSERT INTO `profile` (`id`, `name`, `spesific_skill`, `birth_date`, `email`, `phone`, `address`, `facebook_url`, `instagram_url`, `twitter_url`, `linkedin_url`, `github_url`, `youtube_url`, `profile_image`, `description`, `created_at`, `updated_at`) VALUES
(1, 'Nur Rohman', 'Web Developer', '2003-06-04', 'rohmanuyeoke@gmail.com', '6285713050749', 'Pesarean, Pagerbarang - Tegal', 'https://facebook.com/nurmangg', 'https://instagram.com/nurmangg', 'https://twitter.com/nurmangg', 'https://linkedin.com/in/nurmangg', 'https://github.com/nurmangg', 'https://youtube.com/nurmangg', '', 'I am a third-year student at Politeknik Harapan Bersama Tegal majoring in Informatics Engineering with experience as a Web Designer and projects on campus. I have a great interest in Website Development and Android. I am passionate about continuing to learn the latest technologies and applying them in innovative projects.\n\nIn my academic journey, I have been involved in various projects that strengthen my technical and problem-solving skills. I believe that hard work, dedication, and passion for learning are the keys to becoming a successful software developer. With this vision, I hope to contribute to the technology industry and create solutions that are beneficial to society.', '2024-10-07 19:29:02', '2024-10-07 20:36:43');

-- --------------------------------------------------------

--
-- Table structure for table `skills`
--

CREATE TABLE `skills` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `percent` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `skills`
--

INSERT INTO `skills` (`id`, `name`, `percent`, `created_at`, `updated_at`) VALUES
(1, 'Wordpress', 90, '2024-10-06 23:59:48', '2024-10-06 23:59:48'),
(2, 'Mobile Apps (Kotlin)', 80, '2024-10-07 00:00:23', '2024-10-07 00:00:23'),
(3, 'Web Development (PHP, Laravel)', 85, '2024-10-07 00:00:56', '2024-10-07 00:00:56'),
(4, 'AI Programming (Python)', 80, '2024-10-07 00:01:10', '2024-10-07 00:01:10');

-- --------------------------------------------------------

--
-- Table structure for table `testimonial`
--

CREATE TABLE `testimonial` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `position` varchar(255) NOT NULL,
  `image` varchar(255) DEFAULT NULL,
  `description` longtext NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

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
(1, 'admin', 'admin@gmail.com', NULL, '$2y$10$EDkBtoCqAjF6giJFNqQ/mOk0UE8a..PuWOfFw2AUZYCGmyPaAysXa', NULL, '2024-10-06 19:42:22', '2024-10-07 01:58:34');

-- --------------------------------------------------------

--
-- Table structure for table `what_i_do`
--

CREATE TABLE `what_i_do` (
  `id` int(10) UNSIGNED NOT NULL,
  `title` varchar(255) NOT NULL,
  `icon` varchar(255) NOT NULL,
  `description` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `what_i_do`
--

INSERT INTO `what_i_do` (`id`, `title`, `icon`, `description`, `created_at`, `updated_at`) VALUES
(1, 'Web design', 'fa-solid fa-object-group', 'The most modern and high-quality design made at a professional level.', '2024-10-07 21:16:52', '2024-10-07 21:16:52'),
(2, ' Web development', 'fa-solid fa-code', 'High-quality development of sites at the professional level.', '2024-10-07 21:17:34', '2024-10-07 21:17:34'),
(3, 'Mobile apps', 'fa-solid fa-mobile-screen', 'Professional development of applications for iOS and Android.', '2024-10-07 21:18:10', '2024-10-07 21:18:10'),
(4, 'Artificial Intelligence', 'fa-solid fa-brain', 'Developing AI-powered applications for Website and Android.', '2024-10-07 21:19:21', '2024-10-07 21:19:21');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `blog`
--
ALTER TABLE `blog`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `client`
--
ALTER TABLE `client`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `contacts`
--
ALTER TABLE `contacts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `download`
--
ALTER TABLE `download`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `education`
--
ALTER TABLE `education`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `experience`
--
ALTER TABLE `experience`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `media`
--
ALTER TABLE `media`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `media_uuid_unique` (`uuid`),
  ADD KEY `media_model_type_model_id_index` (`model_type`,`model_id`),
  ADD KEY `media_order_column_index` (`order_column`);

--
-- Indexes for table `messages`
--
ALTER TABLE `messages`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD PRIMARY KEY (`email`);

--
-- Indexes for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indexes for table `portfolio`
--
ALTER TABLE `portfolio`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `profile`
--
ALTER TABLE `profile`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `skills`
--
ALTER TABLE `skills`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `testimonial`
--
ALTER TABLE `testimonial`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- Indexes for table `what_i_do`
--
ALTER TABLE `what_i_do`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `blog`
--
ALTER TABLE `blog`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `client`
--
ALTER TABLE `client`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `contacts`
--
ALTER TABLE `contacts`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `download`
--
ALTER TABLE `download`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `education`
--
ALTER TABLE `education`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `experience`
--
ALTER TABLE `experience`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `media`
--
ALTER TABLE `media`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `messages`
--
ALTER TABLE `messages`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=34;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `portfolio`
--
ALTER TABLE `portfolio`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `profile`
--
ALTER TABLE `profile`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `skills`
--
ALTER TABLE `skills`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `testimonial`
--
ALTER TABLE `testimonial`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `what_i_do`
--
ALTER TABLE `what_i_do`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
