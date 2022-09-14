-- phpMyAdmin SQL Dump
-- version 4.9.7
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Sep 15, 2022 at 04:40 AM
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
(10, 'App\\Models\\Career', 3, 'b92633e9-f39b-473c-bca0-d2e723a7336d', 'vacancy_document', '63230383cf16e_ToRs - Trainers_v.final', '63230383cf16e_ToRs---Trainers_v.final.pdf', 'application/pdf', 'public', 'public', 123829, '[]', '[]', '[]', '[]', 9, '2022-09-15 17:50:45', '2022-09-15 17:50:45');

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
(37, 'career_access', NULL, NULL, NULL);

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
(2, 17),
(2, 18),
(2, 19),
(2, 20),
(2, 21),
(2, 22),
(2, 23),
(2, 24),
(2, 25),
(2, 26),
(2, 27),
(2, 28),
(2, 29),
(2, 30),
(2, 31),
(2, 32),
(1, 33),
(1, 34),
(1, 35),
(1, 36),
(1, 37);

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
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `permissions`
--
ALTER TABLE `permissions`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=38;

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
