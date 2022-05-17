-- phpMyAdmin SQL Dump
-- version 5.1.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 17, 2022 at 04:20 PM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 7.4.29

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `car_house_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `brands`
--

CREATE TABLE `brands` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `brand_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `company_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image_id` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `country_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `brands`
--

INSERT INTO `brands` (`id`, `brand_name`, `company_name`, `image_id`, `country_name`, `created_at`, `updated_at`) VALUES
(1, 'Tesla', 'Tesla, Inc', '2', 'USA', '2022-05-16 22:24:57', '2022-05-16 22:24:57'),
(2, 'BMW', 'Bayerische Motoren Werke AG', '3', 'Germany', '2022-05-16 22:25:21', '2022-05-16 22:25:21'),
(3, 'Acura', 'Honda Motor Company', '4', 'Japan', '2022-05-16 22:26:09', '2022-05-16 22:26:09'),
(4, 'Audi', 'Volkswagen Group', '5', 'Germany', '2022-05-16 22:26:57', '2022-05-16 22:26:57');

-- --------------------------------------------------------

--
-- Table structure for table `cars`
--

CREATE TABLE `cars` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` int(11) NOT NULL,
  `model_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `price` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `brand_id` int(11) NOT NULL,
  `color` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `noOfSeats` int(11) NOT NULL,
  `engine_type` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `fuel_tank_capacity` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image_id` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `mileage` int(11) NOT NULL,
  `fuel_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `condition` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `gear_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `cars`
--

INSERT INTO `cars` (`id`, `user_id`, `model_name`, `price`, `brand_id`, `color`, `noOfSeats`, `engine_type`, `fuel_tank_capacity`, `image_id`, `mileage`, `fuel_type`, `condition`, `gear_type`, `description`, `created_at`, `updated_at`) VALUES
(1, 1, 'Audi Q7', '1.0 Crore', 4, 'silver', 7, 'Turbo - power', '66 L.', '9', 22, 'petrol', 'new', 'auto', 'The Audi Q7 is a mid-size luxury crossover SUV made by the German manufacturer Audi, unveiled in September 2005 at the Frankfurt Motor Show. Production of this seven-seater SUV began in the autumn of 2005 at the Volkswagen Bratislava Plant in Bratislava, Slovakia.[2] It was the first SUV offering from Audi and went on sale in 2006. Later, Audi\'s second SUV, the Q5, was unveiled as a 2009 model. Audi has since unveiled a third SUV model, the Q3, which went on sale in the third quarter of 2011, and a fourth SUV model, the Q2, which went on sale in November 2016. The Q7 shares a Volkswagen Group MLB platform and chassis with the Bentley Bentayga, Lamborghini Urus, Porsche Cayenne and the Volkswagen Touareg.', '2022-05-16 22:37:29', '2022-05-16 22:39:18'),
(2, 1, 'Audi A3', '65.0 Lakh', 4, 'white', 6, 'Turbo - power', '62 L.', '10', 20, 'petrol', 'new', 'manual', 'The Audi A3 is a subcompact executive/small family car (C-segment) manufactured and marketed by the German automaker Audi AG since 1996, currently in its ...', '2022-05-16 22:40:49', '2022-05-16 22:40:49'),
(3, 1, 'BMW M4', '1.78 Crore', 2, 'white', 6, 'Turbo - power', '53 L.', '11', 14, 'petrol', 'new', 'auto', 'All BMW M4 Coupes share a top speed of 155 mph. The 0-60 mph acceleration time differs by model, with the M4 Coupe clocking 4.1 seconds, the M4 Competition ...', '2022-05-16 22:47:38', '2022-05-16 22:47:38');

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
-- Table structure for table `images`
--

CREATE TABLE `images` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `images`
--

INSERT INTO `images` (`id`, `name`, `created_at`, `updated_at`) VALUES
(1, '1652761398mridul.jpg', '2022-05-16 22:23:18', '2022-05-16 22:23:18'),
(2, '1652761497tesla.png', '2022-05-16 22:24:57', '2022-05-16 22:24:57'),
(3, '1652761521bmw_logo.jpg', '2022-05-16 22:25:21', '2022-05-16 22:25:21'),
(4, '1652761569acura.png', '2022-05-16 22:26:09', '2022-05-16 22:26:09'),
(5, '1652761617audi_logo.png', '2022-05-16 22:26:57', '2022-05-16 22:26:57'),
(6, '1652762085audi-Q7.jpg', '2022-05-16 22:34:45', '2022-05-16 22:34:45'),
(7, '1652762129audi-Q7.jpg', '2022-05-16 22:35:29', '2022-05-16 22:35:29'),
(8, '1652762185audi-Q7.jpg', '2022-05-16 22:36:25', '2022-05-16 22:36:25'),
(9, '1652762249audi-Q7.jpg', '2022-05-16 22:37:29', '2022-05-16 22:37:29'),
(10, '1652762449audi-A3.jpg', '2022-05-16 22:40:49', '2022-05-16 22:40:49'),
(11, '1652762858bmw-m4.jpg', '2022-05-16 22:47:38', '2022-05-16 22:47:38');

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
(137, '2014_10_12_000000_create_users_table', 1),
(138, '2014_10_12_100000_create_password_resets_table', 1),
(139, '2019_08_19_000000_create_failed_jobs_table', 1),
(140, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(141, '2022_04_24_082325_create_cars_table', 1),
(142, '2022_04_24_082523_create_brand_table', 1),
(143, '2022_04_24_082543_create_role_table', 1),
(144, '2022_04_24_082641_create_image_table', 1);

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
-- Table structure for table `roles`
--

CREATE TABLE `roles` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `roles`
--

INSERT INTO `roles` (`id`, `name`, `created_at`, `updated_at`) VALUES
(1, 'Admin', '2022-05-16 22:22:32', '2022-05-16 22:22:32'),
(2, 'Subscriber', '2022-05-16 22:22:40', '2022-05-16 22:22:40');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image_id` int(10) UNSIGNED DEFAULT NULL,
  `role_id` int(10) UNSIGNED NOT NULL DEFAULT 2,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `image_id`, `role_id`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Mridul Islam', 'md.mridulislam12345@gmail.com', 1, 1, NULL, '$2y$10$LZUHi3EkXt7MPL6GaorIh.ksS0zFhhX7H2GrVTX9ChiHrbSLNMUbC', NULL, '2022-05-16 22:11:52', '2022-05-16 22:23:18');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `brands`
--
ALTER TABLE `brands`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `cars`
--
ALTER TABLE `cars`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `cars_model_name_unique` (`model_name`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `images`
--
ALTER TABLE `images`
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
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indexes for table `roles`
--
ALTER TABLE `roles`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `brands`
--
ALTER TABLE `brands`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `cars`
--
ALTER TABLE `cars`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `images`
--
ALTER TABLE `images`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=145;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

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
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
