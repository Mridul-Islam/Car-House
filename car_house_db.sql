-- phpMyAdmin SQL Dump
-- version 5.1.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 26, 2022 at 07:11 PM
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
  `image_id` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `country_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `brands`
--

INSERT INTO `brands` (`id`, `brand_name`, `company_name`, `image_id`, `country_name`, `created_at`, `updated_at`) VALUES
(1, 'et', 'earum', '4', 'Pakistan', '2022-05-18 07:22:26', '2022-05-18 07:32:55'),
(2, 'qui', 'ipsum', '5', 'Turkey', '2022-05-18 07:22:26', '2022-05-18 07:33:08'),
(3, 'ut', 'distinctio', '6', 'Turkey', '2022-05-18 07:22:26', '2022-05-18 07:33:24'),
(4, 'nam', 'porro', '7', 'Pakistan', '2022-05-18 07:22:26', '2022-05-18 07:33:37'),
(5, 'vero', 'officia', '10', 'Palestine', '2022-05-18 07:22:26', '2022-05-18 07:34:16'),
(6, 'minus', 'voluptatum', '9', 'Pakistan', '2022-05-18 07:22:26', '2022-05-18 07:34:01'),
(7, 'voluptatum', 'suscipit', '8', 'Bangladesh', '2022-05-18 07:22:26', '2022-05-18 07:33:48'),
(8, 'voluptates', 'quisquam', '3', 'Turkey', '2022-05-18 07:22:26', '2022-05-18 07:32:40'),
(9, 'dolorem', 'laudantium', '2', 'Palestine', '2022-05-18 07:22:27', '2022-05-18 07:31:58'),
(10, 'excepturi', 'et', '1', 'Turkey', '2022-05-18 07:22:27', '2022-05-18 07:28:18');

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
  `image_id` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
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
(1, 2, 'earum', '2.5 Crore', 3, 'silver', 6, 'autem', '48', '19', 28, 'petrol', 'used', 'auto', 'Cupiditate explicabo enim dolores quis sit eligendi sit. Esse hic ipsam error unde. Voluptatum voluptatum earum autem. Quia quo molestiae excepturi aut cupiditate qui odio.', '2022-05-18 07:22:27', '2022-05-18 07:47:57'),
(2, 3, 'provident', '2.5 Crore', 8, 'black', 4, 'ullam', '63', '20', 34, 'petrol', 'used', 'auto', 'Qui modi ut porro mollitia soluta neque et quaerat. Distinctio placeat earum itaque sit eos dolor consequatur sunt. Qui a et inventore eaque laboriosam molestias. Possimus quibusdam eius pariatur laboriosam aut error sed.', '2022-05-18 07:22:27', '2022-05-18 07:48:25'),
(3, 4, 'quis', '69 Lakh', 7, 'silver', 1, 'natus', '35', '34', 23, 'octane', 'new', 'auto', 'Ut iure velit necessitatibus nisi perferendis exercitationem. Nam numquam vitae eligendi doloremque voluptas dolorem et. Beatae perferendis enim quod commodi sequi libero.', '2022-05-18 07:22:27', '2022-05-18 07:55:48'),
(4, 4, 'saepe', '1.65 Crore', 6, 'silver', 5, 'labore', '48', '35', 32, 'petrol', 'used', 'auto', 'Exercitationem voluptatem sapiente inventore hic reprehenderit occaecati. Ratione ut vitae ex deserunt. Adipisci architecto doloremque officia consequuntur nostrum.', '2022-05-18 07:22:27', '2022-05-18 07:56:01'),
(14, 5, 'est', '1.65 Crore', 4, 'red', 6, 'suscipit', '57', '57', 20, 'petrol', 'used', 'auto', 'Fugiat quis error ut eligendi fugit voluptate hic nihil. Doloribus eos voluptatem enim voluptates. Illum voluptas magni voluptatem. Autem eos eum ea sed debitis nobis.', '2022-05-18 07:22:28', '2022-05-18 08:06:26'),
(15, 5, 'nam', '2.5 Crore', 5, 'silver', 4, 'vero', '47', '56', 20, 'diesel', 'new', 'auto', 'Est et nostrum ex expedita in aut autem. Minima aut id magnam fuga nihil animi. Et quaerat veniam est. Qui nisi iusto numquam similique similique autem.', '2022-05-18 07:22:28', '2022-05-18 08:06:09'),
(16, 4, 'cupiditate', '1.65 Crore', 4, 'blue', 1, 'consequatur', '39', '55', 27, 'diesel', 'new', 'auto', 'Nemo unde in et itaque autem rerum deleniti. Libero quo aspernatur sed perspiciatis. Vel autem aliquid vitae blanditiis omnis vero tempore.', '2022-05-18 07:22:28', '2022-05-18 08:05:49'),
(17, 4, 'omnis', '1.65 Crore', 1, 'silver', 1, 'quia', '58', '54', 35, 'diesel', 'new', 'auto', 'Totam id eveniet eos aliquam ullam. Eos quaerat vitae soluta est rem est vero eligendi. Minus et amet hic consequatur.', '2022-05-18 07:22:28', '2022-05-18 08:05:32'),
(18, 2, 'accusantium', '69 Lakh', 4, 'silver', 2, 'odit', '38', '53', 26, 'diesel', 'new', 'auto', 'Et quo rerum eos optio eum sit. Sed et temporibus aut. Voluptatum possimus accusantium dicta nulla error magni.', '2022-05-18 07:22:28', '2022-05-18 08:05:15'),
(19, 1, 'quisquam', '69 Lakh', 8, 'white', 2, 'perferendis', '50', '52', 29, 'diesel', 'used', 'manual', 'Exercitationem officiis minus maxime. Ducimus nesciunt velit ducimus nisi quod est aut. Ut eaque neque reiciendis error quia. Ullam iste laborum nihil dolor iure non minus.', '2022-05-18 07:22:28', '2022-05-18 08:04:30'),
(20, 2, 'consequatur', '1.23 Crore', 10, 'black', 1, 'illo', '26', '51', 27, 'diesel', 'new', 'auto', 'Nulla earum ex et illo. Enim cupiditate atque a odio fuga omnis autem. In architecto omnis voluptatem eius.', '2022-05-18 07:22:28', '2022-05-18 08:03:56'),
(21, 2, 'repellat', '69 Lakh', 10, 'silver', 3, 'culpa', '64', '50', 28, 'octane', 'new', 'auto', 'Aut est quis optio in laudantium dicta natus autem. Totam ea fugiat odit ut praesentium. Debitis impedit non sit quia numquam nihil.', '2022-05-18 07:22:28', '2022-05-18 08:03:43'),
(22, 4, 'aliquid', '1.65 Crore', 2, 'red', 4, 'qui', '39', '49', 23, 'diesel', 'new', 'auto', 'Harum eaque cumque minima. Architecto aut non adipisci molestiae nihil. Perspiciatis rem qui in alias. Quo quia vel rerum quos repudiandae.', '2022-05-18 07:22:28', '2022-05-18 08:02:53'),
(23, 2, 'sunt', '1.65 Crore', 5, 'silver', 2, 'minima', '57', '48', 34, 'petrol', 'used', 'auto', 'Assumenda ipsa omnis molestias et. Consectetur sed provident hic beatae. Qui ut eveniet qui explicabo doloremque. Autem quis impedit ut maiores temporibus odio ut.', '2022-05-18 07:22:28', '2022-05-18 08:02:33'),
(24, 5, 'fugiat', '1.23 Crore', 4, 'blue', 1, 'voluptas', '70', '47', 34, 'petrol', 'new', 'auto', 'Quidem id nam natus nostrum cumque est fugiat. Voluptatem ut velit vel eum distinctio sed ipsam repellendus. Voluptate reprehenderit vitae aut quasi ut. Excepturi est autem est ab voluptate voluptatem.', '2022-05-18 07:22:28', '2022-05-18 08:01:57'),
(25, 3, 'magni', '1.23 Crore', 7, 'black', 1, 'voluptatem', '37', '46', 25, 'diesel', 'used', 'auto', 'Molestias sunt rerum impedit fuga voluptatem molestias. Ut et ea occaecati vitae ea nihil illum. Aperiam enim accusantium illum architecto facere ipsa aut minus. Quia qui quae enim rerum et ut iusto.', '2022-05-18 07:22:28', '2022-05-18 08:01:28'),
(26, 3, 'omnis', '2.5 Crore', 7, 'silver', 6, 'quia', '29', '45', 35, 'petrol', 'new', 'auto', 'Doloremque enim quibusdam temporibus consequatur et. Eos in officiis sequi sapiente qui sint. Sequi eaque et molestiae hic ut dicta ducimus necessitatibus.', '2022-05-18 07:22:28', '2022-05-18 08:01:04'),
(27, 1, 'deserunt', '69 Lakh', 9, 'silver', 6, 'tenetur', '48', '44', 28, 'octane', 'used', 'auto', 'Dolorem non aspernatur consectetur id laudantium aut. Assumenda eligendi facere ullam magni qui. Quae quo nostrum et eveniet veritatis. Consequatur sit repudiandae magnam et dolore omnis rem.', '2022-05-18 07:22:28', '2022-05-18 08:00:41'),
(28, 4, 'iusto', '1.65 Crore', 7, 'red', 2, 'officia', '69', '43', 25, 'diesel', 'used', 'auto', 'Ea voluptatem provident nostrum adipisci neque quis. Quos magni natus incidunt est dolorum et aut numquam. Molestiae aut veniam architecto provident. Dolorem voluptas consequatur eligendi et.', '2022-05-18 07:22:28', '2022-05-18 07:59:04'),
(29, 2, 'dolorum', '1.23 Crore', 8, 'silver', 4, 'et', '68', '42', 32, 'octane', 'new', 'auto', 'Rerum voluptatem ullam praesentium. Velit ab ut consequuntur incidunt quos ut nulla. Omnis cumque qui sit quis. Repellat aperiam ut id vel molestias.', '2022-05-18 07:22:29', '2022-05-18 07:58:38'),
(30, 4, 'sapiente', '1.23 Crore', 8, 'blue', 6, 'praesentium', '62', '41', 33, 'octane', 'new', 'auto', 'Consequatur dolor rem vel magnam sed ut. Officiis ut placeat incidunt placeat. Corrupti ipsum nihil non eveniet architecto molestiae qui. Omnis in rerum nam.', '2022-05-18 07:22:29', '2022-05-18 07:58:27'),
(31, 5, 'enim', '1.65 Crore', 10, 'silver', 2, 'placeat', '35', '40', 27, 'petrol', 'used', 'auto', 'Aut ipsam necessitatibus quia ratione nesciunt. Optio blanditiis consequatur dolorem. Saepe omnis laboriosam non ut architecto consequatur. Eos dolores unde enim cumque.', '2022-05-18 07:22:29', '2022-05-18 07:58:11'),
(32, 5, 'ut', '69 Lakh', 3, 'blue', 6, 'voluptatibus', '26', '39', 33, 'petrol', 'new', 'auto', 'Nihil voluptas ipsam tempore repellat nam ea. Excepturi deleniti aut suscipit rerum a ipsum ab omnis. Dignissimos amet debitis ut omnis aut aliquam qui. Unde suscipit omnis a corrupti.', '2022-05-18 07:22:29', '2022-05-18 07:57:54'),
(33, 2, 'non', '1.65 Crore', 5, 'red', 2, 'porro', '25', '38', 24, 'octane', 'used', 'auto', 'Earum alias est suscipit dolores et numquam ipsam. Voluptas quam tenetur ut earum fugit. Ex impedit quos architecto sed harum. Ut facilis rerum nemo aspernatur tempora labore id.', '2022-05-18 07:22:29', '2022-05-18 07:57:38'),
(34, 4, 'quo', '69 Lakh', 3, 'blue', 3, 'ipsam', '43', '37', 26, 'octane', 'used', 'auto', 'Aperiam facilis molestiae hic et. Beatae neque qui tenetur aut. Voluptates quo ullam sequi fugit deleniti.', '2022-05-18 07:22:29', '2022-05-18 07:56:36'),
(35, 5, 'optio', '2.5 Crore', 8, 'blue', 5, 'quas', '59', '36', 32, 'diesel', 'used', 'auto', 'Dolorem perferendis fugit quia similique non tenetur amet aut. Nihil ut et quasi aut porro autem voluptas. Magni omnis explicabo quod iste tempora quasi sit. Eius sit id voluptas est soluta repudiandae voluptatibus.', '2022-05-18 07:22:29', '2022-05-18 07:56:22'),
(36, 3, 'asperiores', '1.23 Crore', 5, 'blue', 6, 'eaque', '44', '33', 20, 'petrol', 'new', 'auto', 'Et laudantium tempore corporis nihil voluptates amet hic. Optio quia aut sit eligendi. Sint sapiente eum et architecto voluptatibus aspernatur animi. Est est voluptas mollitia sit dicta magnam impedit in.', '2022-05-18 07:22:29', '2022-05-18 07:55:22'),
(37, 2, 'numquam', '2.5 Crore', 7, 'blue', 5, 'et', '69', '23', 30, 'petrol', 'new', 'auto', 'Magnam culpa harum doloremque dolores. Nihil rerum est sit excepturi et quia. Et numquam magni et tempore vero temporibus.', '2022-05-18 07:22:29', '2022-05-18 07:49:11'),
(38, 2, 'aliquam', '69 Lakh', 2, 'black', 6, 'quam', '60', '32', 31, 'diesel', 'used', 'auto', 'Non eos dolore et ab dolores. Fuga eveniet et illum vel numquam et. Laboriosam amet molestiae inventore voluptas consectetur est consectetur. Doloribus explicabo quae incidunt accusamus odit voluptas pariatur.', '2022-05-18 07:22:29', '2022-05-18 07:53:10'),
(39, 4, 'excepturi', '69 Lakh', 2, 'silver', 3, 'voluptas', '64', '31', 20, 'octane', 'new', 'auto', 'Aspernatur mollitia adipisci nisi quaerat. Nam tempora debitis non ut. Accusantium natus voluptas quos recusandae dolorum harum eligendi.', '2022-05-18 07:22:29', '2022-05-18 07:52:55'),
(40, 1, 'et', '2.5 Crore', 8, 'red', 2, 'deserunt', '41', '30', 23, 'octane', 'new', 'auto', 'Quod nihil temporibus odit illum ea asperiores amet nihil. Ut quia placeat at saepe minus voluptas praesentium. Dolore vitae facilis tempore odit sit rem deleniti harum. Est necessitatibus inventore praesentium magnam incidunt error veniam.', '2022-05-18 07:22:29', '2022-05-18 07:52:42'),
(41, 5, 'sunt', '69 Lakh', 5, 'red', 2, 'voluptate', '44', '24', 33, 'CNG', 'new', 'auto', 'Earum natus et cum labore. Excepturi nam magni non ullam dolorem est quas. Veritatis voluptatem nulla qui et voluptas. Consequuntur molestiae iusto error possimus cumque.', '2022-05-18 07:22:29', '2022-05-18 07:49:31'),
(42, 4, 'tenetur', '1.65 Crore', 2, 'white', 1, 'necessitatibus', '30', '29', 32, 'diesel', 'new', 'auto', 'Ipsum sed quisquam sit. Ipsa nam qui et incidunt non officia ut. Est quia debitis quam est expedita delectus. Nesciunt minima quas rerum labore fugit.', '2022-05-18 07:22:29', '2022-05-18 07:52:29'),
(43, 5, 'accusamus', '2.5 Crore', 6, 'red', 6, 'beatae', '38', '28', 26, 'diesel', 'used', 'auto', 'At laboriosam itaque omnis. Numquam ipsam labore dolores sunt illo fuga. Ut voluptatem aliquam ratione optio autem.', '2022-05-18 07:22:29', '2022-05-18 07:52:14'),
(44, 3, 'aliquam', '1.65 Crore', 2, 'white', 1, 'beatae', '34', '27', 30, 'petrol', 'used', 'auto', 'Aut non ad qui. Consequatur dolores non velit ut ut dicta excepturi. Quae magni voluptatem molestiae repudiandae sed. Natus explicabo optio fuga non dolor.', '2022-05-18 07:22:29', '2022-05-18 07:52:00'),
(45, 2, 'qui', '1.65 Crore', 10, 'white', 1, 'voluptas', '35', '26', 27, 'petrol', 'used', 'auto', 'Aperiam sequi sed saepe mollitia perspiciatis. Natus assumenda exercitationem deserunt modi nihil et rerum. Libero porro nemo exercitationem. Dolor dolor ea eos sed. Dignissimos nemo animi ipsum.', '2022-05-18 07:22:29', '2022-05-18 07:51:50'),
(46, 4, 'vero', '2.5 Crore', 10, 'silver', 2, 'eaque', '47', '25', 34, 'octane', 'used', 'auto', 'Et voluptatem architecto dolorem recusandae recusandae voluptates dolorem. Iure dolor expedita reiciendis qui amet. Omnis maiores in est accusantium omnis ex.', '2022-05-18 07:22:29', '2022-05-18 07:51:35'),
(47, 4, 'praesentium', '69 Lakh', 2, 'black', 6, 'a', '59', '22', 29, 'petrol', 'new', 'auto', 'Repudiandae atque tenetur suscipit et modi. Architecto molestiae voluptatem dolor voluptatibus. Provident ullam dolorum sit.', '2022-05-18 07:22:29', '2022-05-18 07:48:59'),
(48, 5, 'porro', '2.5 Crore', 10, 'red', 5, 'iure', '59', '21', 30, 'diesel', 'used', 'auto', 'Fuga ut quaerat velit reiciendis quidem. Perspiciatis enim quae ut provident sapiente blanditiis. Sit voluptatum aut quia. Consequuntur aspernatur odit repellat nostrum dicta atque voluptatem.', '2022-05-18 07:22:29', '2022-05-18 07:48:45'),
(49, 1, 'commodi', '69 Lakh', 10, 'white', 6, 'dolore', '52', '17', 34, 'petrol', 'used', 'auto', 'Repellat rem suscipit laudantium. Explicabo dolores voluptas eligendi omnis. Aut ullam vel vel facilis quod similique laborum est.', '2022-05-18 07:22:30', '2022-05-18 07:45:07'),
(50, 1, 'sunt', '2.5 Crore', 4, 'silver', 5, 'neque', '32', '18', 22, 'diesel', 'new', 'auto', 'Qui numquam at omnis qui perspiciatis ex. Deleniti ipsam cum perferendis quia perspiciatis. Quae non voluptatem fugiat. Molestiae repellendus possimus sunt accusantium velit minima enim.', '2022-05-18 07:22:30', '2022-05-18 07:47:23');

-- --------------------------------------------------------

--
-- Table structure for table `carts`
--

CREATE TABLE `carts` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` int(11) NOT NULL,
  `car_id` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `carts`
--

INSERT INTO `carts` (`id`, `user_id`, `car_id`, `created_at`, `updated_at`) VALUES
(1, 7, 1, '2022-05-18 21:55:40', '2022-05-18 21:55:40');

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
(1, '1652880498acura.png', '2022-05-18 07:28:18', '2022-05-18 07:28:18'),
(2, '1652880718bentley-logo.png', '2022-05-18 07:31:58', '2022-05-18 07:31:58'),
(3, '1652880760bmw_logo.jpg', '2022-05-18 07:32:40', '2022-05-18 07:32:40'),
(4, '1652880775nissan-logo.png', '2022-05-18 07:32:55', '2022-05-18 07:32:55'),
(5, '1652880788chevrolet_logo.jpg', '2022-05-18 07:33:08', '2022-05-18 07:33:08'),
(6, '1652880804ford-logo.png', '2022-05-18 07:33:24', '2022-05-18 07:33:24'),
(7, '1652880817ferrari-logo.png', '2022-05-18 07:33:37', '2022-05-18 07:33:37'),
(8, '1652880828hyundai-logo.png', '2022-05-18 07:33:48', '2022-05-18 07:33:48'),
(9, '1652880841maserati-logo.png', '2022-05-18 07:34:01', '2022-05-18 07:34:01'),
(10, '1652880856honda-logo.png', '2022-05-18 07:34:16', '2022-05-18 07:34:16'),
(11, '1652881086people4.jpg', '2022-05-18 07:38:06', '2022-05-18 07:38:06'),
(12, '1652881117people1.jpg', '2022-05-18 07:38:37', '2022-05-18 07:38:37'),
(13, '1652881131people2.jpg', '2022-05-18 07:38:51', '2022-05-18 07:38:51'),
(14, '1652881142people3.jpg', '2022-05-18 07:39:02', '2022-05-18 07:39:02'),
(15, '1652881157people5.jpg', '2022-05-18 07:39:17', '2022-05-18 07:39:17'),
(16, '1652881172mridul.jpg', '2022-05-18 07:39:32', '2022-05-18 07:39:32'),
(17, '1652881507332cd787368cbf090089d359a4395968.jpg', '2022-05-18 07:45:07', '2022-05-18 07:45:07'),
(18, '16528816432i6hpba.jpg', '2022-05-18 07:47:23', '2022-05-18 07:47:23'),
(19, '1652881677131031045748-lamborghini-aventador-front-doors-open-1024x576-1024x576.jpg', '2022-05-18 07:47:57', '2022-05-18 07:47:57'),
(20, '1652881704audi-A3.jpg', '2022-05-18 07:48:24', '2022-05-18 07:48:24'),
(21, '1652881725audi-Q7.jpg', '2022-05-18 07:48:45', '2022-05-18 07:48:45'),
(22, '1652881739bmw-m4.jpg', '2022-05-18 07:48:59', '2022-05-18 07:48:59'),
(23, '1652881751c983e77ecefede61de45f64cd68a2ee3.jpg', '2022-05-18 07:49:11', '2022-05-18 07:49:11'),
(24, '1652881771download.jpg', '2022-05-18 07:49:31', '2022-05-18 07:49:31'),
(25, '1652881895ferreri 3.jpg', '2022-05-18 07:51:35', '2022-05-18 07:51:35'),
(26, '1652881909istockphoto-1299087866-170667a.jpg', '2022-05-18 07:51:49', '2022-05-18 07:51:49'),
(27, '1652881920Lamborghini-facts-cover-051120210230.jpg', '2022-05-18 07:52:00', '2022-05-18 07:52:00'),
(28, '1652881933main-qimg-1bafd28b0c221f2743a357fe576f3581.webp', '2022-05-18 07:52:13', '2022-05-18 07:52:13'),
(29, '1652881949photo-1542362567-b07e54358753.jpg', '2022-05-18 07:52:29', '2022-05-18 07:52:29'),
(30, '1652881962photo-1552519507-da3b142c6e3d.jpg', '2022-05-18 07:52:42', '2022-05-18 07:52:42'),
(31, '1652881975photo-1492144534655-ae79c964c9d7.jpg', '2022-05-18 07:52:55', '2022-05-18 07:52:55'),
(32, '1652881990332cd787368cbf090089d359a4395968.jpg', '2022-05-18 07:53:10', '2022-05-18 07:53:10'),
(33, '1652882121download (1).jpg', '2022-05-18 07:55:21', '2022-05-18 07:55:21'),
(34, '1652882148download (2).jpg', '2022-05-18 07:55:48', '2022-05-18 07:55:48'),
(35, '1652882161download (3).jpg', '2022-05-18 07:56:01', '2022-05-18 07:56:01'),
(36, '1652882182photo-1525609004556-c46c7d6cf023.jpg', '2022-05-18 07:56:22', '2022-05-18 07:56:22'),
(37, '1652882195photo-1583267746897-2cf415887172.jpg', '2022-05-18 07:56:35', '2022-05-18 07:56:35'),
(38, '1652882258se-image-e273a881495acbebe4fc6f0a150b8678.jpg', '2022-05-18 07:57:38', '2022-05-18 07:57:38'),
(39, '1652882274huracan-sto-exterior-right-front-three-quarter-2.webp', '2022-05-18 07:57:54', '2022-05-18 07:57:54'),
(40, '1652882290images.jpg', '2022-05-18 07:58:10', '2022-05-18 07:58:10'),
(41, '1652882307istockphoto-1299087866-170667a.jpg', '2022-05-18 07:58:27', '2022-05-18 07:58:27'),
(42, '1652882318c983e77ecefede61de45f64cd68a2ee3.jpg', '2022-05-18 07:58:38', '2022-05-18 07:58:38'),
(43, '1652882344photo-1542362567-b07e54358753.jpg', '2022-05-18 07:59:04', '2022-05-18 07:59:04'),
(44, '1652882441bugatti-eb110-lm.jpg', '2022-05-18 08:00:41', '2022-05-18 08:00:41'),
(45, '1652882464download (5).jpg', '2022-05-18 08:01:04', '2022-05-18 08:01:04'),
(46, '1652882488download (4).jpg', '2022-05-18 08:01:28', '2022-05-18 08:01:28'),
(47, '1652882516download (6).jpg', '2022-05-18 08:01:56', '2022-05-18 08:01:56'),
(48, '1652882553pexels-photo-158971.jpeg', '2022-05-18 08:02:33', '2022-05-18 08:02:33'),
(49, '1652882573photo-1573882077407-90354b357c52.jpg', '2022-05-18 08:02:53', '2022-05-18 08:02:53'),
(50, '1652882623ricky-taylor-usa-helio-castroneves-usa-alexander-rossi-usa-news-photo-1578578985.jpg', '2022-05-18 08:03:43', '2022-05-18 08:03:43'),
(51, '1652882636download (7).jpg', '2022-05-18 08:03:56', '2022-05-18 08:03:56'),
(52, '1652882670barcelona-may-13-some-cars-600w-119742193.webp', '2022-05-18 08:04:30', '2022-05-18 08:04:30'),
(53, '1652882715332cd787368cbf090089d359a4395968.jpg', '2022-05-18 08:05:15', '2022-05-18 08:05:15'),
(54, '1652882732bmw-m4.jpg', '2022-05-18 08:05:32', '2022-05-18 08:05:32'),
(55, '1652882749131031045748-lamborghini-aventador-front-doors-open-1024x576-1024x576.jpg', '2022-05-18 08:05:49', '2022-05-18 08:05:49'),
(56, '1652882769Lamborghini-facts-cover-051120210230.jpg', '2022-05-18 08:06:09', '2022-05-18 08:06:09'),
(57, '1652882785photo-1525609004556-c46c7d6cf023.jpg', '2022-05-18 08:06:25', '2022-05-18 08:06:25');

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
(167, '2014_10_12_000000_create_users_table', 1),
(168, '2014_10_12_100000_create_password_resets_table', 1),
(169, '2019_08_19_000000_create_failed_jobs_table', 1),
(170, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(171, '2022_04_24_082325_create_cars_table', 1),
(172, '2022_04_24_082523_create_brand_table', 1),
(173, '2022_04_24_082543_create_role_table', 1),
(174, '2022_04_24_082641_create_image_table', 1),
(175, '2022_05_17_170635_create_cart_table', 1),
(176, '2022_05_17_173031_create_order_table', 1);

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `buyer_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `product_image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `product_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `product_price` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`id`, `buyer_name`, `product_image`, `product_name`, `product_price`, `created_at`, `updated_at`) VALUES
(1, 'Showrab', '1652881677131031045748-lamborghini-aventador-front-doors-open-1024x576-1024x576.jpg', 'earum', '2.5 Crore', '2022-05-18 21:59:48', '2022-05-18 21:59:48'),
(2, 'Mridul Islam', '1652882769Lamborghini-facts-cover-051120210230.jpg', 'nam', '2.5 Crore', '2022-05-25 06:20:02', '2022-05-25 06:20:02'),
(3, 'Mridul Islam', '1652882344photo-1542362567-b07e54358753.jpg', 'iusto', '1.65 Crore', '2022-05-25 06:20:19', '2022-05-25 06:20:19'),
(4, 'Mridul Islam', '1652881704audi-A3.jpg', 'provident', '2.5 Crore', '2022-05-25 06:20:28', '2022-05-25 06:20:28');

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
(1, 'Admin', '2022-05-18 07:22:34', '2022-05-18 07:22:34'),
(2, 'Subscriber', '2022-05-18 07:22:36', '2022-05-18 07:22:36');

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
(1, 'Zaria Rippin', 'johnston.matteo@example.com', 11, 1, '2022-05-18 07:22:26', '$2y$10$rutobh.i695M8kqF0a/vReELqRFZR.jNH82ic/GGeT9Zf9hPXa0Eu', 'IK1CBRuwur', '2022-05-18 07:22:26', '2022-05-18 07:38:06'),
(2, 'Dr. Joan Mueller IV', 'ernestine77@example.com', 12, 1, '2022-05-18 07:22:26', '$2y$10$QbxrchsB5kF/KBMw18ZAF.lg4H4tiFhtFKASqDU8vh9qw.lfwQHa.', 'T6bIAJtORN', '2022-05-18 07:22:26', '2022-05-18 07:38:38'),
(3, 'Dr. Gunnar Smitham MD', 'adrienne.collins@example.org', 13, 1, '2022-05-18 07:22:26', '$2y$10$UEbI9itcGtlcgHZdKDMvkO7zjf5qJP7V7uPm83wb9s9kGx2TTo7ne', '4KPKgNa0qc', '2022-05-18 07:22:26', '2022-05-18 07:38:52'),
(4, 'Mrs. Janis Green DVM', 'ferry.keenan@example.com', 14, 1, '2022-05-18 07:22:26', '$2y$10$hnqNl5dJKv1UfEHLC8SULOapp.clvjaQhPZOTcHzDVqtwO2o9D2oK', 'bK8MV0PFs5', '2022-05-18 07:22:26', '2022-05-18 07:39:03'),
(5, 'Dr. Joyce Gusikowski Sr.', 'aubree18@example.net', 15, 2, '2022-05-18 07:22:26', '$2y$10$F6eM264/2VjMCBiZYUmEneU44gZrvVl..DSV9tLvwwf/a6D1R/m2q', 'Mn5vvZv4G2', '2022-05-18 07:22:26', '2022-05-18 07:39:17'),
(6, 'Mridul Islam', 'md.mridulislam12345@gmail.com', 16, 2, NULL, '$2y$10$flFcA9LQtlsWztbOw1WAgeUH8LW4R.YiwhZNPgJk/NsH18mnPhcQq', NULL, '2022-05-18 07:23:08', '2022-05-18 07:39:32'),
(7, 'Showrab', 'showrab@gmail.com', NULL, 2, NULL, '$2y$10$XzS845z5rmcnwngaZqEEu.UxrYZBET3bcXN7zb6Is2P/6ZOgxqp9.', NULL, '2022-05-18 21:51:31', '2022-05-18 21:51:31'),
(8, 'Mridul Islam', '1610947@iub.edu.bd', NULL, 2, NULL, '$2y$10$UOZwHo2X4KK6JUChDgrJROAprrYziB9h340AExWr7SoOYSpZAfV6.', NULL, '2022-05-25 06:11:43', '2022-05-25 06:11:43');

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
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `carts`
--
ALTER TABLE `carts`
  ADD PRIMARY KEY (`id`);

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
-- Indexes for table `orders`
--
ALTER TABLE `orders`
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
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `cars`
--
ALTER TABLE `cars`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=51;

--
-- AUTO_INCREMENT for table `carts`
--
ALTER TABLE `carts`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `images`
--
ALTER TABLE `images`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=58;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=177;

--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

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
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
