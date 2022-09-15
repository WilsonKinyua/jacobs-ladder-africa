-- phpMyAdmin SQL Dump
-- version 4.9.7
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Sep 15, 2022 at 02:59 PM
-- Server version: 10.3.36-MariaDB-log
-- PHP Version: 7.4.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `newmar14_jla`
--

-- --------------------------------------------------------

--
-- Table structure for table `blogs`
--

CREATE TABLE `blogs` (
  `id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `description` text NOT NULL,
  `seo_keywords` text NOT NULL,
  `category_name` varchar(255) NOT NULL,
  `slug` text DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `careers`
--

CREATE TABLE `careers` (
  `id` int(11) NOT NULL,
  `name` text NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `careers`
--

INSERT INTO `careers` (`id`, `name`, `created_at`, `updated_at`, `deleted_at`) VALUES
(3, 'TERMS OF REFERENCE FOR GREEN  ENTREPRENEURSHIP TRAINERS (CONSULTANCY)', '2022-09-15 17:50:45', '2022-09-15 17:50:45', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `contactuses`
--

CREATE TABLE `contactuses` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `message` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `media`
--

CREATE TABLE `media` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `model_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `model_id` bigint(20) UNSIGNED NOT NULL,
  `uuid` char(36) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `collection_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `file_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `mime_type` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `disk` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `conversions_disk` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `size` bigint(20) UNSIGNED NOT NULL,
  `manipulations` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_bin NOT NULL,
  `custom_properties` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_bin NOT NULL,
  `generated_conversions` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_bin NOT NULL,
  `responsive_images` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_bin NOT NULL,
  `order_column` int(10) UNSIGNED DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `media`
--

INSERT INTO `media` (`id`, `model_type`, `model_id`, `uuid`, `collection_name`, `name`, `file_name`, `mime_type`, `disk`, `conversions_disk`, `size`, `manipulations`, `custom_properties`, `generated_conversions`, `responsive_images`, `order_column`, `created_at`, `updated_at`) VALUES
(3, 'App\\Models\\WhatWeDo', 3, '27e71880-af4d-445f-adaa-8746dba82eee', 'content_photo', '62ea819172665_pexels-darlene-alderson-7971198 (1)', '62ea819172665_pexels-darlene-alderson-7971198-(1).jpg', 'image/jpeg', 'public', 'public', 3862204, '[]', '[]', '{\"thumb\":true,\"preview\":true}', '[]', 3, '2022-08-03 14:09:25', '2022-08-03 14:09:29'),
(4, 'App\\Models\\WhatWeDo', 1, 'fdfe6c12-e127-4985-a4b2-74bf2734c033', 'content_photo', '62ea8223a3d97_pexels-lukas-669622', '62ea8223a3d97_pexels-lukas-669622.jpg', 'image/jpeg', 'public', 'public', 2836920, '[]', '[]', '{\"thumb\":true,\"preview\":true}', '[]', 4, '2022-08-03 14:11:51', '2022-08-03 14:11:52'),
(5, 'App\\Models\\WhatWeDo', 4, 'e4571079-cd17-42fe-bb50-dd0ebe3f368a', 'content_photo', '62ea828404bdb_DSC_1261', '62ea828404bdb_DSC_1261.jpg', 'image/jpeg', 'public', 'public', 5260022, '[]', '[]', '{\"thumb\":true,\"preview\":true}', '[]', 5, '2022-08-03 14:13:29', '2022-08-03 14:13:31'),
(7, 'App\\Models\\WhatWeDo', 5, '87e52581-69ac-437d-a63b-7fa72aa345a3', 'content_photo', '62f36943ed2ae_economic', '62f36943ed2ae_economic.jpeg', 'image/jpeg', 'public', 'public', 95859, '[]', '[]', '{\"thumb\":true,\"preview\":true}', '[]', 6, '2022-08-10 08:16:07', '2022-08-10 08:16:07'),
(8, 'App\\Models\\WhatWeDo', 2, '42f0d824-ced3-4c7e-8130-0eb7a5849517', 'content_photo', '62f38d94390b7_Grassroot coversations 2', '62f38d94390b7_Grassroot-coversations-2.jpeg', 'image/jpeg', 'public', 'public', 3998563, '[]', '[]', '{\"thumb\":true,\"preview\":true}', '[]', 7, '2022-08-10 15:52:56', '2022-08-10 15:53:00'),
(9, 'App\\Models\\Career', 3, 'd0666782-19ac-482d-83dc-e42d6861bbef', 'vacancy_image', '6323037d3d844_1', '6323037d3d844_1.png', 'image/png', 'public', 'public', 783930, '[]', '[]', '{\"thumb\":true,\"preview\":true}', '[]', 8, '2022-09-15 17:50:45', '2022-09-15 17:50:45'),
(10, 'App\\Models\\Career', 3, 'b92633e9-f39b-473c-bca0-d2e723a7336d', 'vacancy_document', '63230383cf16e_ToRs - Trainers_v.final', '63230383cf16e_ToRs---Trainers_v.final.pdf', 'application/pdf', 'public', 'public', 123829, '[]', '[]', '[]', '[]', 9, '2022-09-15 17:50:45', '2022-09-15 17:50:45'),
(11, 'App\\Models\\Slider', 4, '163654ef-3b82-47c2-8c5e-19a478f6343b', 'image', '63239dbf15ae2_youth-hall', '63239dbf15ae2_youth-hall.jpeg', 'image/jpeg', 'public', 'public', 4692327, '[]', '[]', '{\"thumb\":true,\"preview\":true}', '[]', 10, '2022-09-16 04:48:55', '2022-09-16 04:48:58'),
(12, 'App\\Models\\Slider', 5, '1f81bc9f-7d99-4377-bdd1-c918f96ff9b6', 'image', '63239de12e19a_hands', '63239de12e19a_hands.jpeg', 'image/jpeg', 'public', 'public', 4098121, '[]', '[]', '{\"thumb\":true,\"preview\":true}', '[]', 11, '2022-09-16 04:49:22', '2022-09-16 04:49:25'),
(13, 'App\\Models\\Team', 3, '2ff24b88-a8f7-4696-96f5-0765578f5861', 'profile_picture', '63239e5ac2aec_Sellah', '63239e5ac2aec_Sellah.png', 'image/png', 'public', 'public', 237268, '[]', '[]', '{\"thumb\":true,\"preview\":true}', '[]', 12, '2022-09-16 04:51:45', '2022-09-16 04:51:46'),
(14, 'App\\Models\\Team', 4, '70f963a8-c0ca-4a44-9e2c-fee2dde37a05', 'profile_picture', '63239eaf8c756_Bilha', '63239eaf8c756_Bilha.png', 'image/png', 'public', 'public', 180634, '[]', '[]', '{\"thumb\":true,\"preview\":true}', '[]', 13, '2022-09-16 04:53:11', '2022-09-16 04:53:11'),
(15, 'App\\Models\\Team', 5, 'ff6418d9-c0e3-4863-8a4c-0fc19d762885', 'profile_picture', '63239f238b82e_Marceline', '63239f238b82e_Marceline.jpeg', 'image/jpeg', 'public', 'public', 4194981, '[]', '[]', '{\"thumb\":true,\"preview\":true}', '[]', 14, '2022-09-16 04:55:57', '2022-09-16 04:56:00'),
(16, 'App\\Models\\Team', 6, 'd56cdc84-afbb-445e-95aa-fec59c0c9385', 'profile_picture', '63239fa7e66d1_Karen Chelangat', '63239fa7e66d1_Karen-Chelangat.png', 'image/png', 'public', 'public', 205750, '[]', '[]', '{\"thumb\":true,\"preview\":true}', '[]', 15, '2022-09-16 04:57:01', '2022-09-16 04:57:01'),
(17, 'App\\Models\\Team', 7, 'e372f78f-8ac0-48d8-9b6a-7de825565fd4', 'profile_picture', '63239fe15a032_Samuel Kuria', '63239fe15a032_Samuel-Kuria.png', 'image/png', 'public', 'public', 297207, '[]', '[]', '{\"thumb\":true,\"preview\":true}', '[]', 16, '2022-09-16 04:57:59', '2022-09-16 04:57:59');

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
(1, '2014_10_12_100000_create_password_resets_table', 1),
(2, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(3, '2022_06_23_000001_create_media_table', 1),
(4, '2022_06_23_000002_create_permissions_table', 1),
(5, '2022_06_23_000003_create_roles_table', 1),
(6, '2022_06_23_000004_create_users_table', 1),
(7, '2022_06_23_000005_create_registered_users_table', 1),
(8, '2022_06_23_000006_create_contactuses_table', 1),
(9, '2022_06_23_000007_create_permission_role_pivot_table', 1),
(10, '2022_06_23_000008_create_role_user_pivot_table', 1),
(11, '2022_06_23_000009_add_verification_fields', 1),
(12, '2022_06_23_000010_add_approval_fields', 1),
(13, '2022_08_03_000007_create_what_we_dos_table', 1);

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `permissions`
--

CREATE TABLE `permissions` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `permissions`
--

INSERT INTO `permissions` (`id`, `title`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 'user_management_access', NULL, NULL, NULL),
(2, 'permission_create', NULL, NULL, NULL),
(3, 'permission_edit', NULL, NULL, NULL),
(4, 'permission_show', NULL, NULL, NULL),
(5, 'permission_delete', NULL, NULL, NULL),
(6, 'permission_access', NULL, NULL, NULL),
(7, 'role_create', NULL, NULL, NULL),
(8, 'role_edit', NULL, NULL, NULL),
(9, 'role_show', NULL, NULL, NULL),
(10, 'role_delete', NULL, NULL, NULL),
(11, 'role_access', NULL, NULL, NULL),
(12, 'user_create', NULL, NULL, NULL),
(13, 'user_edit', NULL, NULL, NULL),
(14, 'user_show', NULL, NULL, NULL),
(15, 'user_delete', NULL, NULL, NULL),
(16, 'user_access', NULL, NULL, NULL),
(17, 'registered_user_create', NULL, NULL, NULL),
(18, 'registered_user_edit', NULL, NULL, NULL),
(19, 'registered_user_show', NULL, NULL, NULL),
(20, 'registered_user_delete', NULL, NULL, NULL),
(21, 'registered_user_access', NULL, NULL, NULL),
(22, 'contact_us_create', NULL, NULL, NULL),
(23, 'contact_us_edit', NULL, NULL, NULL),
(24, 'contact_us_show', NULL, NULL, NULL),
(25, 'contact_us_delete', NULL, NULL, NULL),
(26, 'contact_us_access', NULL, NULL, NULL),
(27, 'what_we_do_create', NULL, NULL, NULL),
(28, 'what_we_do_edit', NULL, NULL, NULL),
(29, 'what_we_do_show', NULL, NULL, NULL),
(30, 'what_we_do_delete', NULL, NULL, NULL),
(31, 'what_we_do_access', NULL, NULL, NULL),
(32, 'profile_password_edit', NULL, NULL, NULL),
(33, 'career_create', NULL, NULL, NULL),
(34, 'career_edit', NULL, NULL, NULL),
(35, 'career_show', NULL, NULL, NULL),
(36, 'career_delete', NULL, NULL, NULL),
(37, 'career_access', NULL, NULL, NULL),
(38, 'blog_create', NULL, NULL, NULL),
(39, 'blog_edit', NULL, NULL, NULL),
(40, 'blog_show', NULL, NULL, NULL),
(41, 'blog_delete', NULL, NULL, NULL),
(42, 'blog_access', NULL, NULL, NULL),
(43, 'slider_create', NULL, NULL, NULL),
(44, 'slider_edit', NULL, NULL, NULL),
(45, 'slider_show', NULL, NULL, NULL),
(46, 'slider_delete', NULL, NULL, NULL),
(47, 'slider_access', NULL, NULL, NULL),
(48, 'team_create', NULL, NULL, NULL),
(49, 'team_edit', NULL, NULL, NULL),
(50, 'team_show', NULL, NULL, NULL),
(51, 'team_delete', NULL, NULL, NULL),
(52, 'team_access', NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `permission_role`
--

CREATE TABLE `permission_role` (
  `role_id` bigint(20) UNSIGNED NOT NULL,
  `permission_id` bigint(20) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `permission_role`
--

INSERT INTO `permission_role` (`role_id`, `permission_id`) VALUES
(1, 1),
(1, 2),
(1, 3),
(1, 4),
(1, 5),
(1, 6),
(1, 7),
(1, 8),
(1, 9),
(1, 10),
(1, 11),
(1, 12),
(1, 13),
(1, 14),
(1, 15),
(1, 16),
(1, 17),
(1, 18),
(1, 19),
(1, 20),
(1, 21),
(1, 22),
(1, 23),
(1, 24),
(1, 25),
(1, 26),
(1, 27),
(1, 28),
(1, 29),
(1, 30),
(1, 31),
(1, 32),
(2, 32),
(1, 33),
(1, 34),
(1, 35),
(1, 36),
(1, 37),
(1, 38),
(1, 39),
(1, 40),
(1, 41),
(1, 42),
(1, 43),
(1, 44),
(1, 45),
(1, 46),
(1, 47),
(1, 48),
(1, 49),
(1, 50),
(1, 51),
(1, 52);

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
-- Table structure for table `registered_users`
--

CREATE TABLE `registered_users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `full_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `registered_users`
--

INSERT INTO `registered_users` (`id`, `full_name`, `email`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 'Kelvin Kirungui', 'kirunguik@gmail.com', '2022-09-06 11:29:22', '2022-09-06 11:29:22', NULL),
(2, 'Jonathan karanja', 'devokeoranjo@gmail.com', '2022-09-06 16:16:19', '2022-09-06 16:16:19', NULL),
(3, 'Prevailer Muhani', 'prevamu03@gmail.com', '2022-09-07 10:12:12', '2022-09-07 10:12:12', NULL),
(4, 'Elizabeth Wangui Njeri', 'elizabethwangui254@gmail.com', '2022-09-07 18:42:27', '2022-09-07 18:42:27', NULL),
(5, 'Elizabeth Wangui Njeri', 'elizabethwangui254@gmail.com', '2022-09-07 18:43:00', '2022-09-07 18:43:00', NULL),
(6, 'Elizabeth Wangui Njeri', 'elizabethwangui254@gmail.com', '2022-09-07 18:43:17', '2022-09-07 18:43:17', NULL),
(7, 'Elizabeth Wangui Njeri', 'elizabethwangui254@gmail.com', '2022-09-07 18:43:25', '2022-09-07 18:43:25', NULL),
(8, 'Elizabeth Wangui Njeri', 'elizabethwangui254@gmail.com', '2022-09-07 18:43:25', '2022-09-07 18:43:25', NULL),
(9, 'Elizabeth Wangui Njeri', 'elizabethwangui254@gmail.com', '2022-09-07 18:43:25', '2022-09-07 18:43:25', NULL),
(10, 'Natasha Shiko Mbuthia', 'natashambuthia@gmail.com', '2022-09-10 12:24:55', '2022-09-10 12:24:55', NULL),
(11, 'JAMES WARUTERE', 'jwarutere1@gmail.com', '2022-09-11 10:09:59', '2022-09-11 10:09:59', NULL),
(12, 'Mercy Kimani', 'kinyugo12@gmail.com', '2022-09-11 12:16:19', '2022-09-11 12:16:19', NULL),
(13, 'Mercy Kimani', 'kinyugo12@gmail.com', '2022-09-11 12:16:36', '2022-09-11 12:16:36', NULL),
(14, 'Leandra Stanley', 'fadid@mailinator.com', '2022-09-12 16:10:18', '2022-09-12 16:10:41', '2022-09-12 16:10:41'),
(15, 'Kevin Okwako', 'okwako.kevin@gmail.com', '2022-09-13 15:17:19', '2022-09-13 15:17:19', NULL),
(16, 'Anthony Ndolo', 'bondolo90@gmail.com', '2022-09-14 17:13:04', '2022-09-14 17:13:04', NULL),
(17, 'Evelyn Njoki Gathua', 'gathuaeve@gmail.com', '2022-09-14 17:35:45', '2022-09-14 17:35:45', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `roles`
--

CREATE TABLE `roles` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `roles`
--

INSERT INTO `roles` (`id`, `title`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 'Admin', NULL, NULL, NULL),
(2, 'User', NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `role_user`
--

CREATE TABLE `role_user` (
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `role_id` bigint(20) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `role_user`
--

INSERT INTO `role_user` (`user_id`, `role_id`) VALUES
(1, 1);

-- --------------------------------------------------------

--
-- Table structure for table `sliders`
--

CREATE TABLE `sliders` (
  `id` int(11) NOT NULL,
  `title` text NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `sliders`
--

INSERT INTO `sliders` (`id`, `title`, `created_at`, `updated_at`, `deleted_at`) VALUES
(4, 'Activating 30 Million Jobs in the <br> African Green Economy by 2033', '2022-09-16 04:48:55', '2022-09-16 04:48:55', NULL),
(5, '#GreenTeamAfrica', '2022-09-16 04:49:22', '2022-09-16 04:49:22', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `teams`
--

CREATE TABLE `teams` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `title` varchar(255) NOT NULL,
  `intro_caption` text NOT NULL,
  `user_bio` text NOT NULL,
  `twitter_url` text DEFAULT NULL,
  `linkedin_url` text DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `teams`
--

INSERT INTO `teams` (`id`, `name`, `title`, `intro_caption`, `user_bio`, `twitter_url`, `linkedin_url`, `created_at`, `updated_at`, `deleted_at`) VALUES
(3, 'SELLAH BOGONKO, HSC', 'CEO & Co-founder Jacob’s Ladder Africa', '<p>There are two approaches to life: one in which one lives addressing and confronting situations as they happen, and the other is to approach life with an understanding of one’s identity and where this fits in relation to the developments, circumstances and situations that one encounters. The latter describes the approach that Sellah Bogonko lives by - as she is one given to changing the status quo wherever she finds herself.</p>', '<p>There are two approaches to life: one in which one lives addressing and confronting situations as they happen, and the other is to approach life with an understanding of one’s identity and where this fits in relation to the developments, circumstances and situations that one encounters. The latter describes the approach that Sellah Bogonko lives by - as she is one given to changing the status quo wherever she finds herself.</p><p>Sellah’s professional journey exemplifies a passion for change and creating lasting impact.</p><p>In her role as co-founder of Jacob’s Ladder Africa, a sustainable development hub that advances the ideals of youth empowerment and self-reliance, she is responsible for developing the strategic vision that steers the organisation towards achieving its objectives. These are articulated under the pillars of Climate Change, Leadership &amp; Governance, Education, Economic Empowerment and Innovation &amp; Technology.</p><p>Sellah is also the Founder of Zinduka Kenya, an apolitical platform that gives agency to Kenyan youth to own their future. She is passionate about causing young people to see themselves differently and thereby take different steps towards divesting themselves of limitations and accepting the status quo as the norm.</p><p>In her role as Chief of Staff for Kirinyaga County, Sellah drove the interpretation and implementation of the Governor’s agenda into various projects that address challenges faced by various societal groups. She is also experienced in policy formulation, political and development communication.</p><p>Between 2014 and 2017, Sellah was the Chief Operating Officer of AG Group International, in which she led the execution of group strategy and establishment of strategic partnerships. Sellah’s passion for empowering and developing those she works with shone through in this role, as she undertook the training of upcoming managers in leadership, entrepreneurship, product development and more.</p><p>Sellah’s passion for empowering women is a common thread that runs throughout her professional journey. In her role as Group Operations Coordinator at Linksoft Group, she put in place initiatives to increase women in senior leadership positions, and as Strategy Operations Manager at Mellech Group, she initiated a management trainee program for young women.</p><p>Sellah is currently pursuing a Executive Education Course at the Harvard Kennedy School of Government following a MSc in Public Governance from the same institution. Prior to this, she obtained a Bachelor of Arts Degree in Business &amp; Sociology from Kenyatta University</p>', 'https://twitter.com/Sellahb', 'https://www.linkedin.com/in/sellah-bogonko-hsc-85579725/', '2022-09-16 04:51:45', '2022-09-16 04:51:45', NULL),
(4, 'BILHA NDIRANGU', 'Co-founder Jacob’s Ladder Africa', '<p>Bilha Ndirangu is the co-founder of Jacob’s Ladder Africa.<br>Bilha’s achievements and leadership track record in building creative solutions to Africa’s challenges has been recognised, as she is to be named a Tutu Fellow by the Africa Leadership Institute.</p>', '<p>Bilha Ndirangu is the co-founder of Jacob’s Ladder Africa.</p><p>Bilha’s achievements and leadership track record in building creative solutions to Africa’s challenges has been recognised, as she is to be named a Tutu Fellow by the Africa Leadership Institute. She is passionate about training young people and transforming their minds so they can serve the continent better in the future. The various roles she has held throughout her career have provided platforms to not just build strong organisations, but also nurture and raise gifted young leaders.</p><p>Prior to joining the African Leadership Academy, Bilha was the CEO of Africa’s Talking, based in Nairobi, Kenya. Africa’s Talking enables the continent’s technology ecosystem by empowering software developers. Over seven years, Bilha expanded Africa’s Talking into 20 markets, with offices in 14 African countries, with significant revenue growth. During her tenure at Africa’s Talking, Bilha gained a reputation as an extraordinary executor and team builder. She has been recognized as an Endeavour Entrepreneur.</p><p>Bilha previously worked at Dalberg, where she was the first employee of the consulting firm’s Nairobi office. At Dalberg, she advised governments, corporations, and foundations across the continent on solutions to African challenges. She particularly thrived in education projects, including the design and delivery of Wings to Fly, Kenya’s leading secondary school scholarship program, with Equity Group and the Mastercard Foundation. To date, Wings to Fly has enabled over 26,000 promising youth in Kenya to access high-quality secondary education.</p><p>Bilha holds a Bachelor of Science in Electrical Engineering and a minor in Economics from the Massachusetts Institute of Technology. Before returning to Africa, she worked with the Mitchell Madison Group in New York City. When she is not imagining Africa’s future, you might find Bilha completing a workout at a local CrossFit gym.</p>', 'https://twitter.com/bilha_ndirangu', 'https://www.linkedin.com/in/bilha-ndirangu/', '2022-09-16 04:53:11', '2022-09-16 04:53:11', NULL),
(5, 'MARCELINE OBUYA', 'Co-founder Jacob’s Ladder Africa', '<p>Marceline is a rebuilder of businesses. Marceline’s work experience in Africa over the past 25 years within the financial sector embodies the proclamation of financial liberation and ushering of opportunity within Microfinance, SACCO/Cooperatives, Agriculture, Health, Business Development, and most recently in the FinTech space.</p>', '<p>Marceline is a rebuilder of businesses. Marceline’s work experience in Africa over the past 25 years within the financial sector embodies the proclamation of financial liberation and ushering of opportunity within Microfinance, SACCO/Cooperatives, Agriculture, Health, Business Development, and most recently in the FinTech space.</p><p>Marceline’s mastery of midwifing SMEs to become viable businesses is a showcase of honor demonstrated by diligence in management, operations, research, training, and mentoring, which is predicated on her approach to a field that stems from a strong belief that beauty can raise from ashes which reflect itself in her mentoring patterns focusing on, upskilling people in spite of all challenges SMEs face.</p><p>Marceline’s incubating spirit is clearly manifested in her track record through her ability to nurture, restore and prosper both start-ups and established enterprises. Under her stewardship, the viability of the business is brought about by the fact that she lays the right foundation. Her craftsmanship is robust and her execution is equal to that of a warrior in the identification of the specific need, especially in the various sectors of development of adaptive strategies for channeling finance to priority sectors, working with multi- laterals, private sector, and financial institutions.</p><p>Passionate about Africa and SMEs, Marceline’s eagle eye is focused on business levers like strategic planning, human resource management, operational, technical, and financial support. As an experienced consultant and advisor in wealth creation and agrarian finance, Marceline is the architect and founder of the SME Business Clinic Ltd, a role that allows her to oversee the company and intimately engage with her clients, whilst rendering herself the role of a roving CEO for a number of businesses within the Clinic.</p><p>Marceline is a holder of a Master’s degree in Business Administration from Strathmore University Business School and a Certificate recipient from IESE Business School in Spain. She is currently, undertaking a Social Impact course at the University of Cape Town. She has managed the Medical Credit Fund in East Africa, a Dutch organization, where she, later on, went on to take charge of the Kenya country operations and Co-country Director with PharmAccess Foundation.</p><p>She has undertaken a number of World Bank/IFC, SIDA, IFAD, FAO, and USAID- funded consultancy assignments in Kenya, other African countries, and the USA.</p>', NULL, NULL, '2022-09-16 04:55:57', '2022-09-16 04:55:57', NULL),
(6, 'KAREN CHELANGAT', 'Lead - JLA Incubator Programme', '<p>Karen Chelang’at’s life and career journey reveals her reality as a life-giver, one that activates dormant potential in people, communities, organizations and systems within Africa. She is driven to see the realization of Africa’s emancipation through the transformation of its people as a function of their mind shifts.</p>', '<p>Karen Chelang’at’s life and career journey reveals her reality as a life-giver, one that activates dormant potential in people, communities, organizations and systems within Africa. She is driven to see the realization of Africa’s emancipation through the transformation of its people as a function of their mind shifts.</p><p>Karen is passionate about challenging conventional patterns of thinking particularly among young people and creating room for them to explore previously unknown possibilities and craft a new future for themselves at the micro level, and for the continent as an aggregate. At Jacob’s Ladder Africa, Karen is involved in youth empowerment, namely, developing the strategy and design of entrepreneurship and funding programs aimed at transforming the youth and giving them agency to achieve economic and social change.</p><p>In recognition of the role that the socio-economic and financial wellbeing of society plays in meaningful living for people, Karen is driven to work with existing and potential leaders and entrepreneurs who will develop thriving home-grown solutions, platforms, organizations and policies. These frameworks can then lift the proverbial lid, and create opportunities for multifarious growth for many in the continent, ultimately contributing to Africa’s arising to her place in the commonwealth of the nations.</p><p>Karen has also held roles at AG Group International, where she has been involved in edutech and low-income housing projects, as well as financial access initiatives at Old Mutual Kenya, among others. Throughout her career, Karen has been intentional about getting involved in developing solutions and driving projects that disrupt convention and create meaningful opportunities for previously underserved populations.</p><p>Karen holds an MBA from the Jack Welch Management Institute, and a BSc. in Actuarial Science from the University of Nairobi.</p>', NULL, NULL, '2022-09-16 04:57:01', '2022-09-16 04:57:01', NULL),
(7, 'SAMUEL KURIA', 'Finance', '<p>Samuel is an experienced and knowledgeable financial and accounting professional, a holder of a Bachelor’s degree in Education from Kenyatta University, Nairobi and also a Certified Public Accountant of Kenya.</p>', '<p>Samuel is an experienced and knowledgeable financial and accounting professional, a holder of a Bachelor’s degree in Education from Kenyatta University, Nairobi and also a Certified Public Accountant of Kenya.</p><p>With over 15 years’ experience working with both commercial and Not for Profit organisations in various roles in finance and accounting. Over the past 9 years, he has worked with more than 20 clients offering various consultancy services ranging from business start-ups, business restructuring, strategic management, financial modeling and planning among others.</p><p>Samuel possess vast experience in implementing finance and accounting systems with strong internal controls that enabling organisations achieve great accountability, efficiency in assets utilization with improved return on assets and high level of financial integrity.</p><p>As a financial planner, he has helped various organisations make well-informed decisions on the right types of investments and review them in a timely manner in line with changing financial and business environment.</p>', NULL, NULL, '2022-09-16 04:57:59', '2022-09-16 04:57:59', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email_verified_at` datetime DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `verified` tinyint(1) DEFAULT 0,
  `verified_at` datetime DEFAULT NULL,
  `verification_token` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `approved` tinyint(1) DEFAULT 0,
  `remember_token` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `verified`, `verified_at`, `verification_token`, `approved`, `remember_token`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 'Super Admin', 'admin@jacobsladder.africa', NULL, '$2y$10$jSk3tXtHs9K9EjCekUdVOejf8T5du4p0oUOOlrvzbnc.sA0QkcDJK', 1, '2022-06-23 07:37:16', '', 1, 'TbAUPGQumA9j9To8VlCw4XNVwBWRuuYmlNYhENw7wAkC40PD7LUnVBfumANC', NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `what_we_dos`
--

CREATE TABLE `what_we_dos` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `meta_descriptions` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `what_we_dos`
--

INSERT INTO `what_we_dos` (`id`, `title`, `description`, `slug`, `meta_descriptions`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 'Baseline survey', '<p>We seek to understand the attitudes and perspectives of the youth towards climate action and inform our interventions. The surveys will conducted amongst nationally representative groups of youth in a subset of African countries. The sample of countries represents a variety of different relevant archetypes, such as drivers of climate vulnerability, current economic structure and dependency on high-emission sectors and demographic aspects that are relevant to both the risks and potential opportunities such as population density and degree of urbanisation.&nbsp;The youth sample is drawn in such a way that comparisons are not only possible by country, but also within a country by gender, socio-economic status and location (urban, peri-urban or rural) without losing statistical rigour.&nbsp;&nbsp;</p>', 'baseline-survey', 'We seek to understand the attitudes and perspectives of the youth towards climate action and inform our interventions. The surveys will conducted amongst nationally representative groups of youth in a subset of African countries. The sample of countries represents a variety of different relevant archetypes, such as drivers of climate vulnerability, current economic structure and dependency on high-emission sectors and demographic aspects that are relevant to both the risks and potential opportunities such as population density and degree of urbanisation. The youth sample is drawn in such a way that comparisons are not only possible by country, but also within a country by gender, socio-economic status and location (urban, peri-urban or rural) without losing statistical rigour. ', '2022-08-03 14:02:26', '2022-09-08 13:59:37', NULL),
(2, 'Grassroot conversations', '<p>We convene grassroots discussions at country and regional levels that bring young people and experts together for region-specific conversations. The discussions target “the many\'\' through a multiplier (trainer of trainer model) discussing climate actions and the opportunities therein. The sessions allow for peer learning and deliberations on new and existing ideas for climate action that the youth can engage in. To prepare for policy negotiations, the groups produce synthesis reports, which include emerging challenges and opportunities as derived from the discussions.&nbsp;</p>', 'grassroot-conversations', 'We convene grassroots discussions at country and regional levels that bring young people and experts together for region-specific conversations. The discussions target “the many\'\' through a multiplier (trainer of trainer model) discussing climate actions and the opportunities therein. The sessions allow for peer learning and deliberations on new and existing ideas for climate action that the youth can engage in. To prepare for policy negotiations, the groups produce synthesis reports, which include emerging challenges and opportunities as derived from the discussions.', '2022-08-03 14:06:03', '2022-09-08 14:00:12', NULL),
(3, 'Curriculum', '<p>The curriculum aims at filling the knowledge gaps evidenced in both the baseline and grassroots conversations as part of developing African youth who have the skills mix required for the green economy. Our two-prong training approach seeks to increase general awareness of climate action and increase the capacity of these youth to develop innovative, fundable, and scalable ideas aimed at addressing the climate change issues within their communities. Both are designed in a youthful and creative way that is aimed at significantly increasing the interest of the youth in climate action.&nbsp;</p>', 'curriculum', 'The curriculum aims at filling the knowledge gaps evidenced in both the baseline and grassroots conversations as part of developing African youth who have the skills mix required for the green economy. Our two-prong training approach seeks to increase general awareness of climate action and increase the capacity of these youth to develop innovative, fundable, and scalable ideas aimed at addressing the climate change issues within their communities. Both are designed in a youthful and creative way that is aimed at significantly increasing the interest of the youth in climate action.', '2022-08-03 14:09:25', '2022-09-08 13:59:58', NULL),
(4, 'Summit', '<p>We organize an annual pan-African summit that brings together climate-focused young African leaders, activists, entrepreneurs, investors, academics, and policymakers to share and discuss policy, business, advocacy, and climate-related innovations, as well as to formulate a plan of action for African youth on climate. The summit allows young people to interact with experienced professionals, policymakers, business leaders, and social influencers on important climate issues. narrative development, framing and influencing, and an opportunity to connect and influence positions.</p>', 'summit', 'We organize an annual pan-African summit that brings together climate-focused young African leaders, activists, entrepreneurs, investors, academics, and policymakers to share and discuss policy, business, advocacy, and climate-related innovations, as well as to formulate a plan of action for African youth on climate. The summit allows young people to interact with experienced professionals, policymakers, business leaders, and social influencers on important climate issues. narrative development, framing and influencing, and an opportunity to connect and influence positions.', '2022-08-03 14:13:29', '2022-09-08 14:00:25', NULL),
(5, 'Youth Climate Action Fund', '<p>We aim to catalyze and spur the development of green ventures by African youth by identifying and resourcing promising ideas and businesses. The resourcing includes both capacity building and financing.</p>', 'youth-climate-action-fund', 'We aim to catalyze and spur the development of green ventures by African youth by identifying and resourcing promising ideas and businesses. The resourcing includes both capacity building and financing.', '2022-08-03 14:14:43', '2022-09-08 13:59:04', NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `blogs`
--
ALTER TABLE `blogs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `careers`
--
ALTER TABLE `careers`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `contactuses`
--
ALTER TABLE `contactuses`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `media`
--
ALTER TABLE `media`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `media_uuid_unique` (`uuid`),
  ADD KEY `media_model_type_model_id_index` (`model_type`(191),`model_id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`(191));

--
-- Indexes for table `permissions`
--
ALTER TABLE `permissions`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `permission_role`
--
ALTER TABLE `permission_role`
  ADD KEY `role_id_fk_6849949` (`role_id`),
  ADD KEY `permission_id_fk_6849949` (`permission_id`);

--
-- Indexes for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`(191),`tokenable_id`);

--
-- Indexes for table `registered_users`
--
ALTER TABLE `registered_users`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `roles`
--
ALTER TABLE `roles`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `role_user`
--
ALTER TABLE `role_user`
  ADD KEY `user_id_fk_6849958` (`user_id`),
  ADD KEY `role_id_fk_6849958` (`role_id`);

--
-- Indexes for table `sliders`
--
ALTER TABLE `sliders`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `teams`
--
ALTER TABLE `teams`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `name` (`name`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `what_we_dos`
--
ALTER TABLE `what_we_dos`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `blogs`
--
ALTER TABLE `blogs`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `careers`
--
ALTER TABLE `careers`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `contactuses`
--
ALTER TABLE `contactuses`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `media`
--
ALTER TABLE `media`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `permissions`
--
ALTER TABLE `permissions`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=53;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `registered_users`
--
ALTER TABLE `registered_users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `roles`
--
ALTER TABLE `roles`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `sliders`
--
ALTER TABLE `sliders`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `teams`
--
ALTER TABLE `teams`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `what_we_dos`
--
ALTER TABLE `what_we_dos`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `permission_role`
--
ALTER TABLE `permission_role`
  ADD CONSTRAINT `permission_id_fk_6849949` FOREIGN KEY (`permission_id`) REFERENCES `permissions` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `role_id_fk_6849949` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
